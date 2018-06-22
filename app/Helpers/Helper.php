<?php

namespace App\Helpers;
use App;
use Auth;
use Cart;
use DB;
use File;
use Request;
use CRUDBooster;

class Helper
{
    public static function isBackend()
    {
        if (request()->route()->getPrefix() == 'admin' || request()->route()->getPrefix() == 'admin/') return true;
        return false;
    }

    public static function getCurrency()
    {
        return config('general.currency');
    }

    public static function isPublisher()
    {
        return (CRUDBooster::myPrivilegeId() == 3) ? true : false;
    }

    /**
     * @param $campaign object
     * @param $current_user_id
     * @return mixed
     */
    public static function generatePublisherLink($campaign, $current_user_id)
    {
        return $campaign->link;
    }

    public static function haveLink($campaignId, $userId)
    {
        return (DB::table('links')->where(['campaign_id' => $campaignId, 'publisher_id' => $userId])->first()) ? true : false;
    }
}
