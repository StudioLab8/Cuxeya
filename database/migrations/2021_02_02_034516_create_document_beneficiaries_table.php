<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentBeneficiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_beneficiaries', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('beneficiary_id')->unsigned();
            $table->string('type');
            $table->string('file_name');
            $table->integer('order');
            $table->timestamps();
            $table->foreign('beneficiary_id')
                    ->references('id')
                    ->on('beneficiaries')
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
        Schema::dropIfExists('document_beneficiaries');
    }
}
