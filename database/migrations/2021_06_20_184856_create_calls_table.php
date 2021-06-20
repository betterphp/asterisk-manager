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
            $table->string("clid")->nullable();
            $table->string("src")->nullable();
            $table->string("dialed")->nullable();
            $table->string("dst")->nullable();
            $table->string("dcontext")->nullable();
            $table->string("channel")->nullable();
            $table->string("dstchannel")->nullable();
            $table->string("lastapp")->nullable();
            $table->string("lastdata")->nullable();
            $table->datetime("start")->nullable();
            $table->datetime("answer")->nullable();
            $table->datetime("end")->nullable();
            $table->decimal("duration", 14, 4);
            $table->decimal("billsec", 14, 4);
            $table->string("disposition")->nullable();
            $table->string("amaflags")->nullable();
            $table->string("accountcode")->nullable();
            $table->string("userfield")->nullable();
            $table->string("uniqueid")->nullable();
            $table->string("linkedid")->nullable();
            $table->integer("sequence")->nullable();
            $table->string("peeraccount")->nullable();

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
