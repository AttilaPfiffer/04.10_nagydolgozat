<?php

use App\Models\Tevekenysegek;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tevekenysegeks', function (Blueprint $table) {
            $table->id();
            $table->integer('kat_id')->references('id')->on('kategoriaks');
            $table->string('tev_nev');
            $table->string('allapot');
            $table->timestamps();
        });

        Tevekenysegek::create([
            'kat_id' => 1,
            'tev_nev' => 'szoftverfejlesztes',
            'allapot' => 'aktiv'
        ]);

        Tevekenysegek::create([
            'kat_id' => 2,
            'tev_nev' => 'rendszergazda',
            'allapot' => 'inaktiv'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tevekenysegeks');
    }
};
