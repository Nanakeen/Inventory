<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'IsaacTotimeh@gmail.com')->first();
        if (is_null($user)) {
            $user = new User();
            $user->name = "Isaac Totimeh";
            $user->email = "IsaacTotimeh@gmail.com";
            $user->username = "User";
            $user->password = Hash::make('12345678');
            $user->save();
        }
    }
}
