<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
    'title',
    'body',
    ];
    
    public function getPaginateByLimit(int $limit_count = 5)
    {
        // updated_at=降順、limit=件数制限
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
}
