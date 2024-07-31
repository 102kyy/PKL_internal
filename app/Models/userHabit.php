<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userHabit extends Model
{

    protected $fillable = ['id', 'nama_habit', 'deskripsi', 'status',  'user_id', 'kategori_id'];
    public $timestamps = true;

    public function user() 
    {
        return $this->BelongsTo(User::class, 'user_id');
    }

     public function kategori()
    {
        return $this->BelongsTo(Kategori::class, 'kategori_id');
    
}
}