<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTermiyancMoactiontestSubscriptionsToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('termiyanc_moactiontest_subscriptions_to_user', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('subscription_id');
            $table->timestamps();
            $table->foreign('user_id', 'FK_termiyanc_moactiontest_subscriptions_to_user_user_id')->references('id')->on('termiyanc_moactiontest_users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('subscription_id', 'FK_termiyanc_moactiontest_subscriptions_to_user_subscription_id')->references('id')->on('termiyanc_moactiontest_subscriptions')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('termiyanc_moactiontest_subscriptions_to_user');
    }
}
