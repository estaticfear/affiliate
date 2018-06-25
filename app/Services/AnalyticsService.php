<?php

class AnalyticsService
{
    private function initializeAnalytics()
    {
        $client = new Google_Client();
        $client->setApplicationName("Hello Analytics Reporting");
        $client->setAuthConfig(realpath(dirname(__FILE__)) . '/../modeladmin/ndt-google-analytics.json');
        $client->setScopes(['https://www.googleapis.com/auth/analytics.readonly']);
        $analytics = new Google_Service_AnalyticsReporting($client);
        return $analytics;
    }

    private function trucTest()
    {
        $analytics = $this->initializeAnalytics();
        $response = $this->getReport($analytics);

        // Print the response.
        $this->printResults($response);
    }

    /**
     * https://developers.google.com/analytics/devguides/reporting/core/v4/samples
     * @param $segmentName
     * @param $dimension
     * @param $dimensionFilterExpression
     * @return Google_Service_AnalyticsReporting_Segment
     */
    private function buildSimpleSegment($segmentName, $dimension, $dimensionFilterExpression)
    {
        // Create the segment dimension.
        $segmentDimensions = new Google_Service_AnalyticsReporting_Dimension();
        $segmentDimensions->setName("ga:segment");

        // Create Dimension Filter.
        $dimensionFilter = new Google_Service_AnalyticsReporting_SegmentDimensionFilter();
        $dimensionFilter->setDimensionName($dimension);
        $dimensionFilter->setOperator("EXACT");
        $dimensionFilter->setExpressions(array($dimensionFilterExpression));

        // Create Segment Filter Clause.
        $segmentFilterClause = new Google_Service_AnalyticsReporting_SegmentFilterClause();
        $segmentFilterClause->setDimensionFilter($dimensionFilter);

        // Create the Or Filters for Segment.
        $orFiltersForSegment = new Google_Service_AnalyticsReporting_OrFiltersForSegment();
        $orFiltersForSegment->setSegmentFilterClauses(array($segmentFilterClause));

        // Create the Simple Segment.
        $simpleSegment = new Google_Service_AnalyticsReporting_SimpleSegment();
        $simpleSegment->setOrFiltersForSegment(array($orFiltersForSegment));

        // Create the Segment Filters.
        $segmentFilter = new Google_Service_AnalyticsReporting_SegmentFilter();
        $segmentFilter->setSimpleSegment($simpleSegment);

        // Create the Segment Definition.
        $segmentDefinition = new Google_Service_AnalyticsReporting_SegmentDefinition();
        $segmentDefinition->setSegmentFilters(array($segmentFilter));

        // Create the Dynamic Segment.
        $dynamicSegment = new Google_Service_AnalyticsReporting_DynamicSegment();
        $dynamicSegment->setSessionSegment($segmentDefinition);
        $dynamicSegment->setName($segmentName);

        // Create the Segments object.
        $segment = new Google_Service_AnalyticsReporting_Segment();
        $segment->setDynamicSegment($dynamicSegment);
        return $segment;
    }

    private function getReport()
    {
        $analytics = $this->initializeAnalytics();
        $VIEW_ID = Configuration::getConfig('GoogleAnalyticsView');

        // Create the DateRange object.
        $dateRange = new Google_Service_AnalyticsReporting_DateRange();
        $dateRange->setStartDate("7daysAgo");
        $dateRange->setEndDate("today");

        // Create the Metrics object.
        $sessions = new Google_Service_AnalyticsReporting_Metric();
        $sessions->setExpression("ga:sessions");
        $sessions->setAlias("sessions");

        $timeOnPage = new Google_Service_AnalyticsReporting_Metric();
        $timeOnPage->setExpression('ga:avgTimeOnPage');

        $pagePath = new Google_Service_AnalyticsReporting_Dimension();
        $pagePath->setName("ga:pagePath");

        $campaign = new Google_Service_AnalyticsReporting_Dimension();
        $campaign->setName("ga:campaign");

        $segment = new Google_Service_AnalyticsReporting_Dimension();
        $segment->setName("ga:segment");

        $source = new Google_Service_AnalyticsReporting_Dimension();
        $source->setName("ga:source");

        $orderByPageViews = new Google_Service_AnalyticsReporting_OrderBy();
        $orderByPageViews->setFieldName("ga:pageviews");
        $orderByPageViews->setOrderType("VALUE");
        $orderByPageViews->setSortOrder("DESCENDING");

        // Create the ReportRequest object.
        $request = new Google_Service_AnalyticsReporting_ReportRequest();
        $request->setViewId($VIEW_ID);
        $request->setDateRanges($dateRange);
        $request->setDimensions([$pagePath,
            $campaign,
            $segment,
            $source]);
        $request->setMetrics(array($sessions, $timeOnPage));
//        $request->setOrderBys($orderByPageViews);
        $request->setIncludeEmptyRows(true);

        $request->pageSize = 1000;
        $request->pageToken = "0";

        // filter article
        $filterUrl = "/([a-zA-Z0-9\-]+)\-a([0-9\-]+).([a-zA-Z0-9\-]+)";
        $request->setFiltersExpression("ga:pagePath=~{$filterUrl}");

        //filter source
        $browserSegment = $this->buildSimpleSegment("filter_source", "ga:source", "mo");
        $request->setSegments([$browserSegment]);

        $body = new Google_Service_AnalyticsReporting_GetReportsRequest();
        $body->setReportRequests(array($request));
        return $analytics->reports->batchGet($body);

    }
}
