<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlantProduct extends Model
{
    use HasFactory;

    protected $table = "m_plant_product";
    protected $primaryKey = "id";
    protected $fillable = [
        'id_plant',
        'id_product',
        'file_url'
    ];

    public $timestamps = false;
}
