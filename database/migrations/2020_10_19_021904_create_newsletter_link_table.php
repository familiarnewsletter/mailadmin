<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsletterLinkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsletter_link', function (Blueprint $table) {
            $table->id();
            $table->integer('type_id');
            $table->bigInteger('newsletter_id')->unsigned();
            $table->longText('link_type');
            $table->longText('link_url');
            $table->string('utm_content_id');
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
        Schema::dropIfExists('newsletter_link');
    }
}
