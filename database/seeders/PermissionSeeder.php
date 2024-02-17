<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $permissions = [
            [
                'title' => 'book_access',
            ],
            [
                'title' => 'book_edit',
            ],
            [
                'title' => 'book_delete',
            ],
            [
                'title' => 'book_create',
            ],
        ];
        foreach ($permissions as $permission){
            Permission::create($permission);
        }
    }
}
