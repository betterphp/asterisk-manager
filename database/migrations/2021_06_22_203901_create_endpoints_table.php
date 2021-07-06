<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// The framework requires these to be in the root namespace
// phpcs:ignore PSR1.Classes.ClassDeclaration.MissingNamespace
class CreateEndpointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("endpoints", function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("display_name");
            $table->string("number");
            $table->string("username");
            $table->string("password");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("endpoints");
    }
}
