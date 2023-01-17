<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $table = "product";

    protected $fillable = [
        'nama',
    ];

    public function client() {
        return $this->belongsToMany(Client::class, 'project');
    }

    public function kategori() {
        return $this->belongsTo('App\Models\kategori', 'id_kategori');
    }
}