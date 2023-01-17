<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public $table = "client";

    protected $fillable = [
        'nama',
        'alamat',
        'kontak',
        'image',
    ];

    public function product() {
        return $this->belongsToMany(Product::class, 'project');
    }
}
