<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposalformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposalforms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('organization');
            $table->string('address');
            $table->integer('phone');
            $table->string('email');
            $table->string('submitted_by');
            $table->string('title');
            $table->string('summary');
            $table->string('background');
            $table->string('activities');
            $table->integer('budget');
            $table->string('Status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proposalforms');
    }
}
