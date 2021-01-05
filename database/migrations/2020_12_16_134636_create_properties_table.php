<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->integer('tenant_id')->nullable();
            $table->integer('type_id');
            $table->integer('landlord_id');
            $table->integer('user_id');
            $table->string('name');

            // $table->float('price',8,2)->nullable();
            $table->integer('price')->nullable();
            $table->string('image');
            $table->string('address');
            $table->integer('bed');
            $table->integer('bath');
            $table->integer('kitchen');
            $table->string('contract_type');
            $table->integer('status');
            $table->string('utilities');
            $table->text('propert_desc');
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
        Schema::dropIfExists('properties');
    }
}
