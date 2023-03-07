<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Condidat extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'id',
        'uuid',
        'photo', 
        'name', 
        'lastname',
        'email',
        'phone',
        'birth_day',
        'birth_place',
        'address',
        'numeroID',
        'photoID',
        'grade',
        'spiciality',
        'diplom',
        'sex',
        'state',
    ];

    public function toSearchableArray(){
        return [
            'id' => $this->id,
            'uuid' => $this->uuid,
            'name' => $this->name,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'phone' => $this->phone, 
        ];
    }
}
