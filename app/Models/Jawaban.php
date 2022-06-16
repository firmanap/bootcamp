<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    use HasFactory;

    protected $table = "jawabans";

    protected $fillable = [
        'id_ujian',
        'jawaban',
        'status',
    ];

    public function ujian(){
        return $this->hasMany(Ujian::class);
    }
}
