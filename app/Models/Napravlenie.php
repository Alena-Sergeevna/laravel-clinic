<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Napravlenie extends Model
{
    use HasFactory;

    protected $table = 'napravlenie';

    protected $primaryKey = 'id_naprav';

    protected $fillable = ['name_naprav', 'description_n'];


    public function services()
    {
        return $this->hasMany(Service::class, 'id_napravlenie', 'id_naprav');
    }
}
