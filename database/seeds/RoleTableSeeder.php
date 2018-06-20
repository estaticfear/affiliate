<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('TRUNCATE TABLE cms_privileges');
        $data = [
            [
                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'Super Administrator',
                'is_superadmin' => 1,
                'theme_color' => 'skin-red',
            ],
            [
                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'Enterprise',
                'is_superadmin' => 0,
                'theme_color' => 'skin-blue',
            ],
            [
                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'Publisher',
                'is_superadmin' => 0,
                'theme_color' => 'skin-green-light',
            ],
            [
                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'Admin',
                'is_superadmin' => 0,
                'theme_color' => 'skin-purple',
            ]
        ];
        foreach ($data as $row) {
            DB::table('cms_privileges')->insert($row);
        }

        $data = [
            [
                'is_visible' => 1,
                'is_create' => 1,
                'is_read' => 1,
                'is_edit' => 1,
                'is_delete' => 1,
                'id_cms_privileges' => 4,
                'id_cms_moduls' => 13,
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'is_visible' => 1,
                'is_create' => 1,
                'is_read' => 1,
                'is_edit' => 1,
                'is_delete' => 1,
                'id_cms_privileges' => 4,
                'id_cms_moduls' => 14,
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ];
        foreach ($data as $row) {
            DB::table('cms_privileges_roles')->insert($row);
        }

    }
}
