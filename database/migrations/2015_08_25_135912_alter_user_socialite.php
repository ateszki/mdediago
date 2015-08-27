<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUserSocialite extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('provider')->nullable();
            $table->string('avatar')->nullable();
            $table->bigInteger('provider_id')->nullable();
            $table->unique(["provider","provider_id"],'user_provider_ux');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique('user_provider_ux');
            $table->dropColumn(['provider','avatar','provider_id']);
        });
    }
}
