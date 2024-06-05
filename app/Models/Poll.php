<?php

namespace App\Models;

use App\Models\User;
use App\Models\Vote;
use App\Models\Choices;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Poll extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function choices(){
        return $this->hasMany(Choices::class);
    }

    public function votes(){
        return $this->hasOne(Vote::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}
