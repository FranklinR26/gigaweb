<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyTotalColumnInFacturasTable extends Migration
{
    public function up()
    {
        Schema::table('facturas', function (Blueprint $table) {
            $table->decimal('total', 10, 2)->default(0)->change(); // Cambia esto según sea necesario
        });
    }

    public function down()
    {
        Schema::table('facturas', function (Blueprint $table) {
            $table->decimal('total', 10, 2)->nullable()->change(); // Restaura el valor anterior si es necesario
        });
    }
}
