<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms_users', function (Blueprint $table) {
            //
        	$table->string('surname')->nullable();
        	$table->datetime('birthdate')->nullable();
        	$table->string('country')->nullable();
        	$table->string('city')->nullable();
        	DB::statement('ALTER TABLE cms_users ADD work_start_year YEAR(4);');
        	$table->string('current_company')->nullable();
        	$table->string('user_personal_message', 500)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cms_users', function (Blueprint $table) {
            //
        });
    }
}
