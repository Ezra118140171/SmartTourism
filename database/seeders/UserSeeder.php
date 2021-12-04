<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\Foreach_;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'      => 'admin',
                'email'     => 's@s',
                'password'  => bcrypt(1),
            ],
            [
                'name'      => 'keuangan',
                'email'     => 'k@k',
                'password'  => bcrypt(2),
            ],
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
