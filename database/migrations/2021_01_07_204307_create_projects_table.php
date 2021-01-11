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
            $table->string('country');
            $table->string('city');
            $table->string('address');
            $table->string('state');
            $table->string('zip_code');
            $table->string('zoom_url');
            $table->longText('description');
            $table->string('phone');
            $table->string('email');
            $table->string('web');
            $table->string('account_fb');
            $table->string('account_tw');
            $table->string('account_ins');
            $table->boolean('accept_donations');
            $table->boolean('personalized_donation');
            $table->boolean('activated');
            $table->timestamp('expiry_date')->nullable();
            $table->timestamp('publication_date')->nullable();
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
