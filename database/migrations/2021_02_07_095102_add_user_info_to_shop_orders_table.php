<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserInfoToShopOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shop_orders', function (Blueprint $table) {
            $table->string('user_name')->default('Неизвестно');
            $table->string('user_address')->default('Неизвестно');
            $table->string('user_phone')->default('Неизвестно');
            $table->string('user_email')->default('Неизвестно');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shop_orders', function (Blueprint $table) {
            $table->dropColumn('user_name');
            $table->dropColumn('user_address');
            $table->dropColumn('user_phone');
            $table->dropColumn('user_email');
        });
    }
}
