<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Camaba extends Model
{
  protected $fillable = [
    "user_id",
    "jenkel",
    "agama",
    "t_lhr",
    "tgl_lhr",
    "hp",
    "alamat",
    "faculty_id",
    "prodi_id",
  ];
  public function user()
  {
    return $this->belongsTo(User::class);
  }
  public function pembayaran()
  {
    return $this->hasOne(pembayarann::class);
  }
  public function faculty()
  {
    return $this->belongsTo(Faculty::class);
  }
  public function prodi()
  {
    return $this->belongsTo(Prodi::class);
  }
}
