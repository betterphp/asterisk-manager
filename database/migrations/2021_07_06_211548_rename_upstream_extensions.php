<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

// The framework requires these to be in the root namespace
// phpcs:ignore PSR1.Classes.ClassDeclaration.MissingNamespace
class RenameUpstreamExtensions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename(
            "upstream_extensions",
            "upstream_providers",
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename(
            "upstream_providers",
            "upstream_extensions",
        );
    }
}
