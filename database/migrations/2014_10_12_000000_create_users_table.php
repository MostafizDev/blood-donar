<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('full_name',200);
            $table->date('date_of_birth')->nullable();
            $table->string('email',100);
            $table->string('username',200);
            $table->string('password',20)->nullable();
            $table->string('phone',20)->nullable();
            $table->integer('gender')->nullable();
            $table->integer('age')->nullable();
            $table->integer('marital_status')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('address')->nullable();
            $table->integer('occupation')->nullable();
            $table->boolean('donation_status')->nullable();
            $table->boolean('donation_date')->nullable();
            $table->string('diseases_status',100)->nullable();
            $table->string('taken_status',100)->nullable();
            $table->boolean('thalassemia_status')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('users');
    }
}
