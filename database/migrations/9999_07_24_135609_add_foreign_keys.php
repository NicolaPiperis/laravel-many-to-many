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
        Schema::table('portfolios', function (Blueprint $table) {

            $table->unsignedBigInteger('type_id');

            $table->foreign('type_id')
                  ->references('id')
                  ->on('types');
        });
        Schema::table('portfolio_technology', function (Blueprint $table) {

            $table->unsignedBigInteger('portfolio_id');

            $table->foreign('portfolio_id')
                  ->references('id')
                  ->on('portfolios');

            $table->unsignedBigInteger('technology_id');

            $table->foreign('technology_id')
                ->references('id')
                ->on('technologies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('portfolios', function (Blueprint $table) {

            $table -> dropForeign('portfolios_type_id_foreign');
            $table -> dropColumn('type_id');
        });

        Schema::table('portfolio_technology', function (Blueprint $table) {

            $table -> dropForeign('portfolio_technology_portfolio_id_foreign');
            $table -> dropColumn('portfolio_id');

            $table -> dropForeign('portfolio_technology_technology_id_foreign');
            $table -> dropColumn('technology_id');
        });
    }
};
