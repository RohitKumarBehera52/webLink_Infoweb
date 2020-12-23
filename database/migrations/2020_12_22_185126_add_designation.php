<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDesignation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         DB::table('m_designation')->insert(array(
            'vchDesignation' =>'HR',
            
            'created_at' =>date('Y-m-d H:m:s'),
            'updated_at' =>date('Y-m-d H:m:s')

        ));
         DB::table('m_designation')->insert(array(
            'vchDesignation' =>'Marketing',
            
            'created_at' =>date('Y-m-d H:m:s'),
            'updated_at' =>date('Y-m-d H:m:s')

        ));
         DB::table('m_designation')->insert(array(
            'vchDesignation' =>'Manager',
            
            'created_at' =>date('Y-m-d H:m:s'),
            'updated_at' =>date('Y-m-d H:m:s')

        ));
         DB::table('m_designation')->insert(array(
            'vchDesignation' =>'Information',
            
            'created_at' =>date('Y-m-d H:m:s'),
            'updated_at' =>date('Y-m-d H:m:s')

        ));
         DB::table('m_designation')->insert(array(
            'vchDesignation' =>'VFX_Animation',
            
            'created_at' =>date('Y-m-d H:m:s'),
            'updated_at' =>date('Y-m-d H:m:s')

        ));
          DB::table('m_designation')->insert(array(
            'vchDesignation' =>'Student',
            
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
        DB:: table('m_designation')->where('vchDesignation','=','HR')->delete();
        DB:: table('m_designation')->where('vchDesignation','=','Marketing')->delete();
        DB:: table('m_designation')->where('vchDesignation','=','Manager')->delete();
        DB:: table('m_designation')->where('vchDesignation','=','Information')->delete();
        DB:: table('m_designation')->where('vchDesignation','=','VFX_Animation')->delete();
        DB:: table('m_designation')->where('vchDesignation','=','Student')->delete();
    }
}
