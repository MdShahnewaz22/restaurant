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
        Schema::create('unions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('bn_name')->nullable();
            $table->string('url')->nullable();
            $table->integer('sorting')->default(1);
            $table->enum('status',['Active','Inactive','Deleted'])->default('Active');
            $table->timestamps();
            $table->softDeletes();
            // $table->foreignId('upazila_id')->constrained('upazilas')->onDelete('cascade');
            $table->unsignedBigInteger('upazila_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unions');
    }
};
