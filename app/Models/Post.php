<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'content',
        'add_by',
        'edit_by',
        'created_at',
        'updated_at',
    ];

    public function addby()
    {
        return $this->belongsTo(User::class, 'add_by', 'id');
    }

    public function editby()
    {
        if (!empty($this->edit_by)){
            return $this->belongsTo(User::class, 'edit_by', 'id');
        }
        
        return $this->belongsTo(User::class, 'add_by', 'id');
    }

    public static function search($search)
    {
        return empty($search)
        ? static::query()
        : static::query()->where('id', 'like', '%' . $search . '%')
            ->orWhere('title', 'like', '%' . $search . '%');
    }

}
