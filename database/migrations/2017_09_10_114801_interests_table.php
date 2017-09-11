<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InterestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('interests');
        Schema::create('interests', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('interest_name', 256);
            $table->string('color', 16)->nullable()->default(NULL);
            $table->integer('created_by', false, true);
            $table->integer('updated_by', false, true)->nullable()->default(NULL);
            $table->timestamps();

            $table->index('interest_name', 'interests_interest_name_index');
            $table->index('created_at', 'interests_created_at_index');
            $table->index('updated_at', 'interests_updated_at_index');
            $table->foreign('created_by', 'interests_created_by_foreign')->references('id')->on('cms_users')->onDelete('RESTRICT');
            $table->foreign('updated_by', 'interests_updated_by_foreign')->references('id')->on('cms_users')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interests');
    }
}
