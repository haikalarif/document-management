<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public $table = "project";

    protected $fillable = [
        'client_id',
        'product_id',
    ];

    public function document() {
        return $this->belongsToMany(Documents::class, 'projectdocuments');
    }
}
