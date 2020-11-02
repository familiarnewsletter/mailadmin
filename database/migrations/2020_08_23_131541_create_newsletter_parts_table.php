<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsletterPartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsletter_parts', function (Blueprint $table) {
            $table->id();
            $table->longText('title');
            $table->string('img_url');
            $table->longText('link_url');
            $table->longText('text');
            $table->string('utm_content_id');
            $table->bigInteger('newsletter_parts_admin_id')->unsigned();
            $table->bigInteger('newsletter_id')->unsigned();
            $table->timestamps();

            $table->foreign('newsletter_parts_admin_id')->references('id')->on('newsletter_parts_admin');
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
        Schema::dropIfExists('newsletter_parts');
    }
}
