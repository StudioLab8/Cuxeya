<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('name');
            $table->string('category');
            $table->string('type');
            $table->string('online_or_in_person');
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('zoom_url')->nullable();
            $table->longText('description');
            $table->string('youtube_url')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('web')->nullable();
            $table->string('account_fb')->nullable();
            $table->string('account_tw')->nullable();
            $table->string('account_ins')->nullable();
            $table->boolean('accept_donations');
            $table->boolean('personalized_donation');
            $table->boolean('activated');
            $table->timestamp('expiry_date')->nullable();
            $table->timestamp('publication_date')->nullable();
            $table->string('url')->unique();
            $table->string('status');
            $table->timestamps();
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onCascade('delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
