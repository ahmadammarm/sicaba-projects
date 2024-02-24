<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'create-user']);
        Permission::create(['name' => 'read-user']);
        Permission::create(['name' => 'update-user']);
        Permission::create(['name' => 'delete-user']);
        Permission::create(['name' => 'memproses-pesanan']);
        Permission::create(['name' => 'memproses-pembayaran']);
        Permission::create(['name' => 'memproses-voucher']);
        Permission::create(['name' => 'create-menu']);
        Permission::create(['name' => 'read-menu']);
        Permission::create(['name' => 'update-menu']);
        Permission::create(['name' => 'delete-menu']);

        Role::create(['name' => 'admin'])->givePermissionTo([
            'create-user',
            'read-user',
            'update-user',
            'delete-user',
            'memproses-pesanan',
            'memproses-pembayaran',
            'memproses-voucher',
            'create-menu',
            'read-menu',
            'update-menu',
            'delete-menu',
        ]);

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('create-user');
        $roleAdmin->givePermissionTo('read-user');
        $roleAdmin->givePermissionTo('update-user');
        $roleAdmin->givePermissionTo('delete-user');
        $roleAdmin->givePermissionTo('memproses-pesanan');
        $roleAdmin->givePermissionTo('memproses-pembayaran');
        $roleAdmin->givePermissionTo('memproses-voucher');
        $roleAdmin->givePermissionTo('create-menu');
        $roleAdmin->givePermissionTo('read-menu');
        $roleAdmin->givePermissionTo('update-menu');
        $roleAdmin->givePermissionTo('delete-menu');
    }
}
