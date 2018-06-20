<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('TRUNCATE TABLE cms_menus');
        $data = [
            [
                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'Admin',
                'type' => 'Route',
                'path' => 'AdminAdminControllerGetIndex',
                'color' => 'normal',
                'icon' => 'fa fa-user-secret',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 3
            ],
            [
                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'Enterprises',
                'type' => 'Route',
                'path' => 'AdminEnterprisesControllerGetIndex',
                'color' => 'normal',
                'icon' => 'fa fa-user-plus',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 4
            ],
            [
                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'Publishers',
                'type' => 'Route',
                'path' => 'AdminPublishersControllerGetIndex',
                'color' => 'normal',
                'icon' => 'fa fa-users',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 5
            ],
        ];
        foreach ($data as $row) {
            DB::table('cms_menus')->insert($row);
        }

        DB::statement('TRUNCATE TABLE cms_menus_privileges');
        $data = [
            [
                'id_cms_menus' => 2,
                'id_cms_privileges' => 1
            ],
            [
                'id_cms_menus' => 1,
                'id_cms_privileges' => 1
            ],
            [
                'id_cms_menus' => 4,
                'id_cms_privileges' => 4
            ],
            [
                'id_cms_menus' => 4,
                'id_cms_privileges' => 1
            ],
            [
                'id_cms_menus' => 5,
                'id_cms_privileges' => 4
            ],
            [
                'id_cms_menus' => 5,
                'id_cms_privileges' => 1
            ],
            [
                'id_cms_menus' => 3,
                'id_cms_privileges' => 4
            ],
            [
                'id_cms_menus' => 3,
                'id_cms_privileges' => 1
            ],
            [
                'id_cms_menus' => 2,
                'id_cms_privileges' => 4
            ],
            [
                'id_cms_menus' => 2,
                'id_cms_privileges' => 1
            ],
        ];
        foreach ($data as $row) {
            DB::table('cms_menus_privileges')->insert($row);
        }
    }
}
