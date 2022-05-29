<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\RoleHasPermission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for regist
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachePermissions();

        // menu apa saja yang akan dibuat
        Permission::create([
            'name' => 'manage purchasing',
            'guard_name' => 'web',
        ]);
    }
}
