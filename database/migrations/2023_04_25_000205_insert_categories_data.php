<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        DB::table('categories')->insert([
            ['name' => 'Appareils électriques'],
            ['name' => 'cuisinières'],
            ['name' => 'accessoire de cuisine'],
            ['name' => 'Équipement de barbecue'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        DB::table('categories')->whereIn('name', [
            'Appareils électriques',
            'cuisinières',
            'accessoire de cuisine',
            'Équipement de barbecue',
        ])->delete();
    }
};
