<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserWithRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superadmin = new User;
        $superadmin->name = 'Super Admin';
        $superadmin->username = 'superadmin';
        $superadmin->email = 'super@app.test';
        $superadmin->email_verified_at = date('Y-m-d H:i:s');
        $superadmin->password = bcrypt('password');
        $superadmin->role = 'superadmin';
        $superadmin->bio = 'Aku Adalah Super Admin';
        $superadmin->save();

        $admin = new User;
        $admin->name = 'Admin';
        $admin->username = 'admin';
        $admin->email = 'admin@app.test';
        $admin->email_verified_at = date('Y-m-d H:i:s');
        $admin->password = bcrypt('password');
        $admin->role = 'admin';
        $admin->bio = 'Aku Adalah Admin';
        $admin->save();

        $user = new User;
        $user->name = 'User';
        $user->username = 'user';
        $user->email = 'user@app.test';
        $user->email_verified_at = date('Y-m-d H:i:s');
        $user->password = bcrypt('password');
        $user->role = 'user';
        $user->bio = 'Aku Adalah User';
        $user->save();
    }
}
