<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->foreignId('category_id')->after('id');
            $table->boolean('is_confirm')->default(false)->after('visit_count');
            $table->enum('status',['draft','published'])->default('draft')->after('is_confirm');
            $table->unsignedBigInteger('user_id')->default(1)->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn(['category_id','is_confirm','status']);
            $table->unsignedBigInteger('user_id')->change();
        });
    }
}
