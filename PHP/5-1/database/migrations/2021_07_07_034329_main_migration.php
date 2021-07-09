<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MainMigration extends Migration
{
    public function up()
    {
        Schema::create('posts', function(Blueprint $table) {
            $table->id();
            $table->char('user_id',20);
            $table->char('body',255);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        //
    }
}
