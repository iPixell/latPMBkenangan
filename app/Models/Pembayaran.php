<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
  protected $tabel = ["pembayaran"];
  protected $fillable = [
    "camaba_id",
    "formulir",
    "almamater",
    "pembangunan",
    "total",
    "bukti",
  ];
  public function camaba()
  {
    return $this->hasOne(Camaba::class);
  }
}
