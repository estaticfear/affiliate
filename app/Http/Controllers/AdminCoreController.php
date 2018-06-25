<?php namespace App\Http\Controllers;

	use Session;
	use Request;
	use DB;
	use CRUDBooster;

	class AdminCoreController extends \crocodicstudio\crudbooster\controllers\CBController {

	    public function cbInit() {

			# START CONFIGURATION DO NOT REMOVE THIS LINE
			$this->title_field = "name";
			$this->limit = "20";
			$this->orderby = "id,desc";
			$this->global_privilege = false;
			$this->button_table_action = false;
			$this->button_bulk_action = false;
			$this->button_action_style = "button_icon";
			$this->button_add = false;
			$this->button_edit = false;
			$this->button_delete = false;
			$this->button_detail = false;
			$this->button_show = false;
			$this->button_filter = false;
			$this->button_import = false;
			$this->button_export = false;
			$this->table = "cms_users";
			# END CONFIGURATION DO NOT REMOVE THIS LINE

			# START COLUMNS DO NOT REMOVE THIS LINE
			$this->col = [];

			# END COLUMNS DO NOT REMOVE THIS LINE

			# START FORM DO NOT REMOVE THIS LINE
			$this->form = [];

			# END FORM DO NOT REMOVE THIS LINE

			/*
	        | ----------------------------------------------------------------------
	        | Sub Module
	        | ----------------------------------------------------------------------
			| @label          = Label of action
			| @path           = Path of sub module
			| @foreign_key 	  = foreign key of sub table/module
			| @button_color   = Bootstrap Class (primary,success,warning,danger)
			| @button_icon    = Font Awesome Class
			| @parent_columns = Sparate with comma, e.g : name,created_at
	        |
	        */
	        $this->sub_module = array();


	        /*
	        | ----------------------------------------------------------------------
	        | Add More Action Button / Menu
	        | ----------------------------------------------------------------------
	        | @label       = Label of action
	        | @url         = Target URL, you can use field alias. e.g : [id], [name], [title], etc
	        | @icon        = Font awesome class icon. e.g : fa fa-bars
	        | @color 	   = Default is primary. (primary, warning, succecss, info)
	        | @showIf 	   = If condition when action show. Use field alias. e.g : [id] == 1
	        |
	        */
	        $this->addaction = array();


	        /*
	        | ----------------------------------------------------------------------
	        | Add More Button Selected
	        | ----------------------------------------------------------------------
	        | @label       = Label of action
	        | @icon 	   = Icon from fontawesome
	        | @name 	   = Name of button
	        | Then about the action, you should code at actionButtonSelected method
	        |
	        */
	        $this->button_selected = array();


	        /*
	        | ----------------------------------------------------------------------
	        | Add alert message to this module at overheader
	        | ----------------------------------------------------------------------
	        | @message = Text of message
	        | @type    = warning,success,danger,info
	        |
	        */
	        $this->alert        = array();



	        /*
	        | ----------------------------------------------------------------------
	        | Add more button to header button
	        | ----------------------------------------------------------------------
	        | @label = Name of button
	        | @url   = URL Target
	        | @icon  = Icon from Awesome.
	        |
	        */
	        $this->index_button = array();



	        /*
	        | ----------------------------------------------------------------------
	        | Customize Table Row Color
	        | ----------------------------------------------------------------------
	        | @condition = If condition. You may use field alias. E.g : [id] == 1
	        | @color = Default is none. You can use bootstrap success,info,warning,danger,primary.
	        |
	        */
	        $this->table_row_color = array();


	        /*
	        | ----------------------------------------------------------------------
	        | You may use this bellow array to add statistic at dashboard
	        | ----------------------------------------------------------------------
	        | @label, @count, @icon, @color
	        |
	        */
	        $this->index_statistic = array();



	        /*
	        | ----------------------------------------------------------------------
	        | Add javascript at body
	        | ----------------------------------------------------------------------
	        | javascript code in the variable
	        | $this->script_js = "function() { ... }";
	        |
	        */
	        $this->script_js = NULL;


            /*
	        | ----------------------------------------------------------------------
	        | Include HTML Code before index table
	        | ----------------------------------------------------------------------
	        | html code to display it before index table
	        | $this->pre_index_html = "<p>test</p>";
	        |
	        */
	        $this->pre_index_html = null;



	        /*
	        | ----------------------------------------------------------------------
	        | Include HTML Code after index table
	        | ----------------------------------------------------------------------
	        | html code to display it after index table
	        | $this->post_index_html = "<p>test</p>";
	        |
	        */
	        $this->post_index_html = null;



	        /*
	        | ----------------------------------------------------------------------
	        | Include Javascript File
	        | ----------------------------------------------------------------------
	        | URL of your javascript each array
	        | $this->load_js[] = asset("myfile.js");
	        |
	        */
	        $this->load_js = array();



	        /*
	        | ----------------------------------------------------------------------
	        | Add css style at body
	        | ----------------------------------------------------------------------
	        | css code in the variable
	        | $this->style_css = ".style{....}";
	        |
	        */
	        $this->style_css = NULL;



	        /*
	        | ----------------------------------------------------------------------
	        | Include css File
	        | ----------------------------------------------------------------------
	        | URL of your css each array
	        | $this->load_css[] = asset("myfile.css");
	        |
	        */
	        $this->load_css = array();


	    }


	    /*
	    | ----------------------------------------------------------------------
	    | Hook for button selected
	    | ----------------------------------------------------------------------
	    | @id_selected = the id selected
	    | @button_name = the name of button
	    |
	    */
	    public function actionButtonSelected($id_selected,$button_name) {
	        //Your code here

	    }


	    /*
	    | ----------------------------------------------------------------------
	    | Hook for manipulate query of index result
	    | ----------------------------------------------------------------------
	    | @query = current sql query
	    |
	    */
	    public function hook_query_index(&$query) {
	        //Your code here

	    }

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for manipulate row of index table html
	    | ----------------------------------------------------------------------
	    |
	    */
	    public function hook_row_index($column_index,&$column_value) {
	    	//Your code here
	    }

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for manipulate data input before add data is execute
	    | ----------------------------------------------------------------------
	    | @arr
	    |
	    */
	    public function hook_before_add(&$postdata) {
	        //Your code here

	    }

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for execute command after add public static function called
	    | ----------------------------------------------------------------------
	    | @id = last insert id
	    |
	    */
	    public function hook_after_add($id) {
	        //Your code here

	    }

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for manipulate data input before update data is execute
	    | ----------------------------------------------------------------------
	    | @postdata = input post data
	    | @id       = current id
	    |
	    */
	    public function hook_before_edit(&$postdata,$id) {
	        //Your code here

	    }

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for execute command after edit public static function called
	    | ----------------------------------------------------------------------
	    | @id       = current id
	    |
	    */
	    public function hook_after_edit($id) {
	        //Your code here

	    }

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for execute command before delete public static function called
	    | ----------------------------------------------------------------------
	    | @id       = current id
	    |
	    */
	    public function hook_before_delete($id) {
	        //Your code here

	    }

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for execute command after delete public static function called
	    | ----------------------------------------------------------------------
	    | @id       = current id
	    |
	    */
	    public function hook_after_delete($id) {
	        //Your code here

	    }



	    //By the way, you can still create your own method in here... :)

        public function getSeed()
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
                    (1,	'Notifications',	'fa fa-cog',	'notifications',	'cms_notifications',	'NotificationsController',	1,	1,	'2018-06-21 20:43:58',	NULL,	NULL),
                    (2,	'Privileges',	'fa fa-cog',	'privileges',	'cms_privileges',	'PrivilegesController',	1,	1,	'2018-06-21 20:43:58',	NULL,	NULL),
                    (3,	'Privileges Roles',	'fa fa-cog',	'privileges_roles',	'cms_privileges_roles',	'PrivilegesRolesController',	1,	1,	'2018-06-21 20:43:58',	NULL,	NULL),
                    (4,	'Users Management',	'fa fa-users',	'users',	'cms_users',	'AdminCmsUsersController',	0,	1,	'2018-06-21 20:43:58',	NULL,	NULL),
                    (5,	'Settings',	'fa fa-cog',	'settings',	'cms_settings',	'SettingsController',	1,	1,	'2018-06-21 20:43:58',	NULL,	NULL),
                    (6,	'Module Generator',	'fa fa-database',	'module_generator',	'cms_moduls',	'ModulsController',	1,	1,	'2018-06-21 20:43:58',	NULL,	NULL),
                    (7,	'Menu Management',	'fa fa-bars',	'menu_management',	'cms_menus',	'MenusController',	1,	1,	'2018-06-21 20:43:58',	NULL,	NULL),
                    (8,	'Email Templates',	'fa fa-envelope-o',	'email_templates',	'cms_email_templates',	'EmailTemplatesController',	1,	1,	'2018-06-21 20:43:58',	NULL,	NULL),
                    (9,	'Statistic Builder',	'fa fa-dashboard',	'statistic_builder',	'cms_statistics',	'StatisticBuilderController',	1,	1,	'2018-06-21 20:43:58',	NULL,	NULL),
                    (10,	'API Generator',	'fa fa-cloud-download',	'api_generator',	'',	'ApiCustomController',	1,	1,	'2018-06-21 20:43:58',	NULL,	NULL),
                    (11,	'Log User Access',	'fa fa-flag-o',	'logs',	'cms_logs',	'LogsController',	1,	1,	'2018-06-21 20:43:58',	NULL,	NULL),
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
                    (1,	'Super Administrator',	1,	'skin-red',	'2018-06-21 20:44:57',	NULL),
                    (2,	'Enterprise',	0,	'skin-blue',	'2018-06-21 20:44:57',	NULL),
                    (3,	'Publisher',	0,	'skin-green-light',	'2018-06-21 20:44:57',	NULL),
                    (4,	'Admin',	0,	'skin-purple',	'2018-06-21 20:44:57',	NULL);
            ");

            DB::insert("
                INSERT INTO `cms_privileges_roles` (`id`, `is_visible`, `is_create`, `is_read`, `is_edit`, `is_delete`, `id_cms_privileges`, `id_cms_moduls`, `created_at`, `updated_at`) VALUES
                    (1,	1,	0,	0,	0,	0,	1,	1,	'2018-06-21 20:43:58',	NULL),
                    (2,	1,	1,	1,	1,	1,	1,	2,	'2018-06-21 20:43:58',	NULL),
                    (3,	0,	1,	1,	1,	1,	1,	3,	'2018-06-21 20:43:58',	NULL),
                    (4,	1,	1,	1,	1,	1,	1,	4,	'2018-06-21 20:43:58',	NULL),
                    (5,	1,	1,	1,	1,	1,	1,	5,	'2018-06-21 20:43:58',	NULL),
                    (6,	1,	1,	1,	1,	1,	1,	6,	'2018-06-21 20:43:58',	NULL),
                    (7,	1,	1,	1,	1,	1,	1,	7,	'2018-06-21 20:43:58',	NULL),
                    (8,	1,	1,	1,	1,	1,	1,	8,	'2018-06-21 20:43:58',	NULL),
                    (9,	1,	1,	1,	1,	1,	1,	9,	'2018-06-21 20:43:58',	NULL),
                    (10,	1,	1,	1,	1,	1,	1,	10,	'2018-06-21 20:43:58',	NULL),
                    (11,	1,	0,	1,	0,	1,	1,	11,	'2018-06-21 20:43:58',	NULL),
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

            echo 'Seed success';die();
        }


	}
