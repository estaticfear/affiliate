<?php

use Illuminate\Database\Seeder;

class ModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Admin',
                'icon' => 'fa fa-user-secret',
                'path' => 'admin',
                'table_name' => 'cms_users',
                'controller' => 'AdminAdminController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Enterprises',
                'icon' => 'fa fa-user-plus',
                'path' => 'enterprises',
                'table_name' => 'cms_users',
                'controller' => 'AdminEnterprisesController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Publishers',
                'icon' => 'fa fa-users',
                'path' => 'publishers',
                'table_name' => 'cms_users',
                'controller' => 'AdminPublishersController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ];
        foreach ($data as $row) {
            DB::table('cms_moduls')->insert($row);
        }
    }
}
