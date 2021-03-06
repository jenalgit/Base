<?php

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        $typi_permissions = [
            ['id' => 1, 'name' => 'change-locale'],
            ['id' => 2, 'name' => 'update-preferences'],
            ['id' => 3, 'name' => 'index-history'],
            ['id' => 4, 'name' => 'destroy-history'],
            ['id' => 5, 'name' => 'dashboard'],
            ['id' => 6, 'name' => 'index-settings'],
            ['id' => 7, 'name' => 'index-blocks'],
            ['id' => 8, 'name' => 'show-block'],
            ['id' => 9, 'name' => 'create-block'],
            ['id' => 10, 'name' => 'store-block'],
            ['id' => 11, 'name' => 'edit-block'],
            ['id' => 12, 'name' => 'update-block'],
            ['id' => 13, 'name' => 'sort-blocks'],
            ['id' => 14, 'name' => 'destroy-block'],
            ['id' => 15, 'name' => 'index-files'],
            ['id' => 16, 'name' => 'show-file'],
            ['id' => 17, 'name' => 'create-file'],
            ['id' => 18, 'name' => 'store-file'],
            ['id' => 19, 'name' => 'edit-file'],
            ['id' => 20, 'name' => 'update-file'],
            ['id' => 21, 'name' => 'sort-files'],
            ['id' => 22, 'name' => 'destroy-file'],
            ['id' => 23, 'name' => 'index-galleries'],
            ['id' => 24, 'name' => 'show-gallery'],
            ['id' => 25, 'name' => 'create-gallery'],
            ['id' => 26, 'name' => 'store-gallery'],
            ['id' => 27, 'name' => 'edit-gallery'],
            ['id' => 28, 'name' => 'update-gallery'],
            ['id' => 29, 'name' => 'sort-galleries'],
            ['id' => 30, 'name' => 'destroy-gallery'],
            ['id' => 31, 'name' => 'index-menus'],
            ['id' => 32, 'name' => 'show-menu'],
            ['id' => 33, 'name' => 'create-menu'],
            ['id' => 34, 'name' => 'store-menu'],
            ['id' => 35, 'name' => 'edit-menu'],
            ['id' => 36, 'name' => 'update-menu'],
            ['id' => 37, 'name' => 'sort-menus'],
            ['id' => 38, 'name' => 'destroy-menu'],
            ['id' => 39, 'name' => 'index-pages'],
            ['id' => 40, 'name' => 'show-page'],
            ['id' => 41, 'name' => 'create-page'],
            ['id' => 42, 'name' => 'store-page'],
            ['id' => 43, 'name' => 'edit-page'],
            ['id' => 44, 'name' => 'update-page'],
            ['id' => 45, 'name' => 'sort-pages'],
            ['id' => 46, 'name' => 'destroy-page'],
            ['id' => 47, 'name' => 'index-roles'],
            ['id' => 48, 'name' => 'show-role'],
            ['id' => 49, 'name' => 'create-role'],
            ['id' => 50, 'name' => 'store-role'],
            ['id' => 51, 'name' => 'edit-role'],
            ['id' => 52, 'name' => 'update-role'],
            ['id' => 53, 'name' => 'sort-roles'],
            ['id' => 54, 'name' => 'destroy-role'],
            ['id' => 55, 'name' => 'index-translations'],
            ['id' => 56, 'name' => 'show-translation'],
            ['id' => 57, 'name' => 'create-translation'],
            ['id' => 58, 'name' => 'store-translation'],
            ['id' => 59, 'name' => 'edit-translation'],
            ['id' => 60, 'name' => 'update-translation'],
            ['id' => 61, 'name' => 'sort-translations'],
            ['id' => 62, 'name' => 'destroy-translation'],
            ['id' => 63, 'name' => 'index-users'],
            ['id' => 64, 'name' => 'show-user'],
            ['id' => 65, 'name' => 'create-user'],
            ['id' => 66, 'name' => 'store-user'],
            ['id' => 67, 'name' => 'edit-user'],
            ['id' => 68, 'name' => 'update-user'],
            ['id' => 69, 'name' => 'sort-users'],
            ['id' => 70, 'name' => 'destroy-user'],
        ];

        DB::table('permissions')->insert($typi_permissions);
    }
}
