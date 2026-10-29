<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create("pembayarans", function (Blueprint $table) {
      $table->id();
      $table->foreignId("camaba_id")->constrained("camabas");
      $table->integer("formulir");
      $table->integer("almamater");
      $table->integer("pembangunan");
      $table->integer("total");
      $table->string("bukti")->nullable();
      $table
        ->enum("status", ["pending", "approved", "rejected"])
        ->default("pending");
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists("pembayarans");
  }
};
