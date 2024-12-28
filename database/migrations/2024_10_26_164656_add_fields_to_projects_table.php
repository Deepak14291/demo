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
        Schema::table('projects', function (Blueprint $table) {
            $table->tinyText('project_name');
            $table->tinyText('project_short_description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('projects', function (Blueprint $table) {
        //     //
        // });

        Schema::dropColumns('projects',[
            'project_name','project_short_description'
        ]);
    }
};
