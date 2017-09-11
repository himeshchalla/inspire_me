<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('skills');
        Schema::create('skills', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('skill_name', 256);
            $table->string('color', 16)->nullable()->default(NULL);
            $table->integer('created_by', false, true);
            $table->integer('updated_by', false, true)->nullable()->default(NULL);
            $table->timestamps();
        
            $table->index('skill_name', 'skills_interest_name_index');
            $table->index('created_at', 'skills_created_at_index');
            $table->index('updated_at', 'skills_updated_at_index');
            $table->foreign('created_by', 'skills_created_by_foreign')->references('id')->on('cms_users')->onDelete('RESTRICT');
            $table->foreign('updated_by', 'skills_updated_by_foreign')->references('id')->on('cms_users')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skills');
    }
}
