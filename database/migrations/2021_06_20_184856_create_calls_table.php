<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// The framework requires these to be in the root namespace
// phpcs:ignore PSR1.Classes.ClassDeclaration.MissingNamespace
class CreateCallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("calls", function (Blueprint $table) {
            $table->id();
            $table->string("clid");
            $table->string("src");
            $table->string("dialed");
            $table->string("dst");
            $table->string("dcontext");
            $table->string("channel");
            $table->string("dstchannel");
            $table->string("lastapp");
            $table->string("lastdata");
            $table->datetime("start");
            $table->datetime("answer");
            $table->datetime("end");
            $table->decimal("duration", 14, 4);
            $table->decimal("billsec", 14, 4);
            $table->string("disposition");
            $table->string("amaflags");
            $table->string("accountcode");
            $table->string("userfield");
            $table->string("uniqueid");
            $table->string("linkedid");
            $table->integer("sequence");
            $table->string("peeraccount");

            $table->index("start");
            $table->index("dst");
            $table->index("accountcode");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("calls");
    }
}
