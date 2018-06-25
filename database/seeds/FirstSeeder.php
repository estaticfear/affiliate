<?php

use Illuminate\Database\Seeder;

class FirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("
                INSERT INTO `campaigns` (`id`, `page_id`, `enterprise_id`, `title`, `link`, `thumbnail`, `cpc_enterprise`, `cpc_publisher`, `date_begin`, `date_end`, `status`, `pageview`, `created_at`, `updated_at`, `deleted_at`) VALUES
                    (1,	1,	3,	'Campaign 3',	'abc',	NULL,	1050,	530,	'2018-06-03 00:00:00',	'2018-06-30 00:00:00',	1,	5,	'2018-06-21 20:53:55',	'2018-06-22 03:24:58',	NULL),
                    (2,	1,	3,	'Campaign 2',	'ccd',	NULL,	100,	32,	'2018-06-06 00:00:00',	'2018-06-30 00:00:00',	2,	0,	'2018-06-22 02:28:14',	NULL,	NULL),
                    (3,	1,	3,	'Campaign 1',	'ggg',	NULL,	100,	53,	'2018-06-21 00:00:00',	'2018-06-30 00:00:00',	1,	0,	'2018-06-22 02:29:08',	'2018-06-22 03:25:14',	NULL),
                    (4,	1,	3,	'Campaign 4',	'ddd',	NULL,	2500,	500,	'2018-06-17 00:00:00',	'2018-06-27 00:00:00',	1,	0,	'2018-06-22 04:18:08',	NULL,	NULL),
                    (5,	1,	3,	'Campaign 5',	'ccd',	NULL,	230,	75,	'2018-06-10 00:00:00',	'2018-06-28 00:00:00',	1,	0,	'2018-06-25 00:35:06',	NULL,	NULL);
            ");

        DB::insert("
                INSERT INTO `cms_menus` (`id`, `name`, `type`, `path`, `color`, `icon`, `parent_id`, `is_active`, `is_dashboard`, `id_cms_privileges`, `sorting`, `created_at`, `updated_at`) VALUES
                    (1,	'Admin',	'Route',	'AdminAdminControllerGetIndex',	'normal',	'fa fa-user-secret',	0,	1,	0,	1,	3,	'2018-06-21 20:44:57',	NULL),
                    (2,	'Enterprises',	'Route',	'AdminEnterprisesControllerGetIndex',	'normal',	'fa fa-user-plus',	0,	1,	0,	1,	4,	'2018-06-21 20:44:57',	NULL),
                    (3,	'Publishers',	'Route',	'AdminPublishersControllerGetIndex',	'normal',	'fa fa-users',	0,	1,	0,	1,	5,	'2018-06-21 20:44:57',	'2018-06-21 23:55:56'),
                    (4,	'Campaigns',	'Route',	'AdminCampaignsControllerGetIndex',	'normal',	'fa fa-star',	0,	1,	0,	1,	6,	'2018-06-21 20:46:00',	'2018-06-21 20:48:59'),
                    (5,	'Pages',	'Route',	'AdminPagesControllerGetIndex',	'normal',	'fa fa-book',	0,	1,	0,	1,	7,	'2018-06-21 20:49:41',	'2018-06-21 20:50:08'),
                    (6,	'List Offer Pr',	'Route',	'AdminListOfferControllerGetIndex',	'normal',	'fa fa-link',	0,	1,	0,	1,	8,	'2018-06-21 21:08:01',	'2018-06-22 04:02:53'),
                    (7,	'Báo Cáo',	'Route',	'AdminBaoCaoControllerGetIndex',	'normal',	'fa fa-calendar',	0,	1,	0,	1,	9,	'2018-06-22 01:31:14',	'2018-06-22 04:02:32'),
                    (8,	'Thanh Toán',	'Route',	'AdminThanhToanControllerGetIndex',	'normal',	'fa fa-money',	0,	1,	0,	1,	10,	'2018-06-22 01:42:07',	'2018-06-22 01:45:39');
            ");

        DB::insert("
                INSERT INTO `cms_menus_privileges` (`id`, `id_cms_menus`, `id_cms_privileges`) VALUES
                    (1,	2,	1),
                    (2,	1,	1),
                    (9,	2,	4),
                    (10,	2,	1),
                    (11,	4,	4),
                    (12,	4,	1),
                    (13,	5,	4),
                    (14,	5,	1),
                    (16,	3,	4),
                    (17,	3,	1),
                    (24,	8,	3),
                    (25,	8,	1),
                    (26,	7,	3),
                    (27,	7,	1),
                    (28,	6,	3),
                    (29,	6,	1);
            ");

        DB::insert("
                INSERT INTO `cms_moduls` (`id`, `name`, `icon`, `path`, `table_name`, `controller`, `is_protected`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
                    (12,	'Admin',	'fa fa-user-secret',	'admin',	'cms_users',	'AdminAdminController',	0,	0,	'2018-06-21 20:44:57',	NULL,	NULL),
                    (13,	'Enterprises',	'fa fa-user-plus',	'enterprises',	'cms_users',	'AdminEnterprisesController',	0,	0,	'2018-06-21 20:44:57',	NULL,	NULL),
                    (14,	'Publishers',	'fa fa-users',	'publishers',	'cms_users',	'AdminPublishersController',	0,	0,	'2018-06-21 20:44:57',	NULL,	NULL),
                    (15,	'Campaigns',	'fa fa-cog',	'campaigns',	'campaigns',	'AdminCampaignsController',	0,	0,	'2018-06-21 20:46:00',	NULL,	NULL),
                    (16,	'Pages',	'fa fa-users',	'pages',	'pages',	'AdminPagesController',	0,	0,	'2018-06-21 20:49:41',	NULL,	NULL),
                    (17,	'List Offer',	'fa fa-link',	'list_offer',	'campaigns',	'AdminListOfferController',	0,	0,	'2018-06-21 21:08:01',	NULL,	NULL),
                    (18,	'Báo Cáo',	'fa fa-lock',	'bao_cao',	'links',	'AdminBaoCaoController',	0,	0,	'2018-06-22 01:31:14',	NULL,	NULL),
                    (19,	'Thanh Toán',	'fa fa-money',	'thanh_toan',	'links',	'AdminThanhToanController',	0,	0,	'2018-06-22 01:42:07',	NULL,	NULL),
                    (20,	'AdminCore',	'fa fa-wrench',	'core',	'cms_users',	'AdminCoreController',	0,	0,	'2018-06-25 00:19:45',	NULL,	NULL);
            ");

        DB::insert("
                INSERT INTO `cms_privileges` (`id`, `name`, `is_superadmin`, `theme_color`, `created_at`, `updated_at`) VALUES
                    (2,	'Enterprise',	0,	'skin-blue',	'2018-06-21 20:44:57',	NULL),
                    (3,	'Publisher',	0,	'skin-green-light',	'2018-06-21 20:44:57',	NULL),
                    (4,	'Admin',	0,	'skin-purple',	'2018-06-21 20:44:57',	NULL);
            ");

        DB::insert("
                INSERT INTO `cms_privileges_roles` (`id`, `is_visible`, `is_create`, `is_read`, `is_edit`, `is_delete`, `id_cms_privileges`, `id_cms_moduls`, `created_at`, `updated_at`) VALUES
                    (12,	1,	1,	1,	1,	1,	4,	13,	'2018-06-21 20:44:57',	NULL),
                    (13,	1,	1,	1,	1,	1,	4,	14,	'2018-06-21 20:44:57',	NULL),
                    (14,	1,	1,	1,	1,	1,	1,	15,	NULL,	NULL),
                    (15,	1,	1,	1,	1,	1,	1,	16,	NULL,	NULL),
                    (16,	1,	1,	1,	1,	1,	1,	17,	NULL,	NULL),
                    (18,	1,	1,	1,	1,	1,	2,	15,	NULL,	NULL),
                    (19,	1,	1,	1,	1,	1,	1,	18,	NULL,	NULL),
                    (20,	1,	1,	1,	1,	1,	1,	19,	NULL,	NULL),
                    (21,	1,	1,	1,	1,	1,	3,	18,	NULL,	NULL),
                    (22,	1,	1,	1,	1,	1,	3,	17,	NULL,	NULL),
                    (23,	1,	1,	1,	1,	1,	3,	19,	NULL,	NULL),
                    (24,	1,	1,	1,	1,	1,	1,	20,	NULL,	NULL);
            ");

        DB::insert("
                INSERT INTO `links` (`id`, `campaign_id`, `publisher_id`, `link`, `pageview`, `cpc_enterprise`, `cpc_publisher`, `date_begin`, `date_end`, `status`, `payment_status`, `created_at`, `updated_at`) VALUES
                (1,	1,	2,	'abc',	0,	1050,	530,	'2018-06-03 00:00:00',	'2018-06-30 00:00:00',	1,	1,	NULL,	NULL),
                (2,	2,	2,	'ccd',	0,	100,	32,	'2018-06-06 00:00:00',	'2018-06-30 00:00:00',	2,	1,	NULL,	NULL),
                (3,	3,	2,	'ggg',	0,	100,	53,	'2018-06-21 00:00:00',	'2018-06-30 00:00:00',	1,	1,	NULL,	NULL),
                (4,	4,	2,	'ddd',	0,	2500,	500,	'2018-06-17 00:00:00',	'2018-06-27 00:00:00',	1,	1,	NULL,	NULL);
            ");

        DB::insert("
                INSERT INTO `pages` (`id`, `name`, `domains`, `created_at`, `updated_at`, `deleted_at`) VALUES
                    (1,	'Page 1',	'Domains',	'2018-06-21 20:50:20',	NULL,	NULL);
            ");

        DB::insert("
                INSERT INTO `cms_users` (`id`, `name`, `photo`, `email`, `password`, `id_cms_privileges`, `created_at`, `updated_at`, `status`) VALUES
                    (2,	'Publisher 1',	'uploads/1/2018-06/bf6061c5e11d328e610c937f78679afb7e0ad31ee895480cb73a3853cf46ca8a.jpg',	'publisher_1@gmail.com',	'$2y$10$/Q6T0RqG92INQjKROTZPZu5MAgk6WDfTXrO0zAioIoXlxzHN3lthK',	3,	'2018-06-21 20:45:25',	NULL,	NULL),
                    (3,	'Enterprise 1',	'uploads/1/2018-06/bf6061c5e11d328e610c937f78679afb7e0ad31ee895480cb73a3853cf46ca8a.jpg',	'enterprise_1@gmail.com',	'$2y$10$KWfWpODezyvsjn/V154wrudmM7G.pi2YSRqWT8XP5BQ2SiA7R7o..',	2,	'2018-06-21 20:50:42',	NULL,	NULL);
            ");
    }
}
