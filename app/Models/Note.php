<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    //hidden attrib 
    //protected $hidden=["id"];
    protected $fillable = [
        "content",
        "title"
    ];

    //user relation
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
