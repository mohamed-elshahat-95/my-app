<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $table = 'posts';
    public $timestamps = false;
    protected $fillable = ['title', 'contact_phone_number', 'description'];

    function creator() {
        return $this->belongsTo('App\Models\User', 'created_by');
    }
}
