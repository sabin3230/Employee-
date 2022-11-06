<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

    protected $fillable = ['from', 'to', 'reason', 'status', 'user_id'];

    public function user(){

        return $this->belongsTo(User::class, 'user_id');
    }

}
