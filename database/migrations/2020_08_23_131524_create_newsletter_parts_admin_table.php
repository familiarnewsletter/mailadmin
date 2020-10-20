<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsletterPartsAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsletter_parts_admin', function (Blueprint $table) {
            $table->id();
            $table->integer('type_id');
            $table->bigInteger('newsletter_id')->unsigned();
            $table->timestamps();

            $table->foreign('newsletter_id')->references('id')->on('newsletter');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newsletter_parts_admin');
    }
}
