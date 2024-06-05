<?php

namespace App\Models;

use App\Models\Poll;
use App\Models\Vote;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Choices extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'choices';
    protected $casts = [
        'choice' => 'array',
    ];

    public function polls(){
        return $this->belongsTo(Poll::class);
    }
    public function votes(){
        return $this->belongsTo(Vote::class);
    }
}
