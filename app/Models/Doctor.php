<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;


    protected $primaryKey = 'id_doc';

    protected $fillable = ['full_name', 'id_role', 'id_napravlenie'];

    public $timestamps = false;


    public function role()
    {
        return $this->hasOne(Role::class, 'id_role', 'id_role');
    }

    public function napravlenie()
    {
        return $this->hasOne(Napravlenie::class, 'id_naprav', 'id_napravlenie');
    }

}
