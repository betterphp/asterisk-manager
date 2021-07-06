<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// The framework requires these to be in the root namespace
// phpcs:ignore PSR1.Classes.ClassDeclaration.MissingNamespace
class CreateUpstreamExtensionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("upstream_extensions", function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("display_name");
            $table->string("username");
            $table->string("password");
            $table->string("contact");
            $table->boolean("should_register");
            $table->string("server_uri");
            $table->string("client_uri");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("upstream_extensions");
    }
}
