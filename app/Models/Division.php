<?php

namespace App\Models;

use App\Models\User;
use App\Models\Vote;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Division extends Model
{
    use HasFactory;

    public function votes(){
        return $this->hasOne(Vote::class);
    }
    public function users(){
        return $this->hasOne(User::class);
    }
}
