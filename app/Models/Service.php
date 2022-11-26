<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_service ';

    protected $fillable = ['id_napravlenie', 'name_service', 'price'];

    public $timestamps = false;

    public function napravlenie()
    {
        return $this->hasOne(Napravlenie::class, 'id_naprav', 'id_napravlenie');
    }
}
