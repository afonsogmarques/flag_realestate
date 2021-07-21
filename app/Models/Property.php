<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    public $primaryKey = 'id';
    public $timestamps = true;

    public $fillable = [
        'title',
        'description',
        'location',
        'typology',
        'price',
        'area',
        'agent_id'
    ];
}
