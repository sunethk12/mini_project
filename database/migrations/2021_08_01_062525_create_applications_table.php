<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("no_of_members");
            $table->string("nic")->unique();
            $table->string("contact")->nullable();
            $table->string("address");
            $table->string("dsd");
            $table->string("gsd");
            $table->string("job")->nullable();
            $table->string("category");
            $table->string("status")->default("pending");
            $table->string("u_email");
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
        Schema::dropIfExists('applications');
    }
}
