<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Joice Mayara',
            'email'     => 'joice@settaprotecao.com.br',
            'password'  => bcrypt('settati'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        User::create([
            'name'      => 'Fernando Administrador',
            'email'     => 'administrativo@settaprotecao.com.br',
            'role_id'     => '2',
            'password'  => bcrypt('AIDA@07221426'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
