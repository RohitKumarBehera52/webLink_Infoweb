<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

class AddAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('users')->insert(array(
            'name' =>'supAdmin',
            'email' => 'supAdmin@gmail.com',
            'tinUsertype'=>'1',
            'password' => Hash::make('admin@123'),
            'created_at' =>date('Y-m-d H:m:s'),
            'updated_at' =>date('Y-m-d H:m:s')

        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB:: table('users')->where('name','=','supAdmin')->delete();
    }
}
