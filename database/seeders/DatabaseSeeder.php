<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    
    { $this->call(RoleSeeder::class);
  


        User::create([
            'name'=>'juan aurelio',
            'email'=>'prueba@prueba.com',
            'password'=>bcrypt('holahola')
            ])->syncRoles('admin');
            User::create([
                'name'=>'david mason',
                'email'=>'prueba2@prueba2.com',
                'password'=>bcrypt('holahola')
                ])->syncRoles('usuario');
            
           
        
        
         \App\Models\Post::factory(80)->create();

         
    }
}
