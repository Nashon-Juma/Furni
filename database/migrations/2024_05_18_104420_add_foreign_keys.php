<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->foreign('main_image_id')->references('id')->on('images')->onDelete('set null');
        });

        Schema::table('images', function (Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['main_image_id']);
        });

        Schema::table('images', function (Blueprint $table) {
            $table->dropForeign(['product_id']);
        });
    }
};
