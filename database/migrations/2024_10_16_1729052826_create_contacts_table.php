<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
			$table->string('massage', 255);
            // $table->string('number',255);
            $table->integer('number')->nullable();
            $table->string('subject', 255);
			$table->string('gmail', 255);
			
            $table->enum('status',['Active','Inactive','Deleted'])->default('Active');
            $table->timestamps();
            $table->softDeletes();
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
};
