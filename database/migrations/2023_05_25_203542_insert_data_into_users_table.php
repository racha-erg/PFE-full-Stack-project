<?php

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
        DB::table('users')->insert(
            [
            'name' => 'Ali Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin@example.com'),
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
                'name' => 'Salma Adil',
                'email' => 'salmaadil@example.com',
                'password' => bcrypt('salmaadil@example.com'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mounir ettazi',
                'email' => 'mounirettazi@example.com',
                'password' => bcrypt('mounirettazi@example.com'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
                
    );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('users')->whereIn('email', ['mounirettazi@example.com', 'salmaadil@example.com', 'admin@example.com'])->delete();
    }

};
