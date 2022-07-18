<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create($data)
 * @method static find($id)
 */
class Posts extends Model
{
    use HasFactory;
     protected $fillable = [
         'title',
         'sub_title',
         'description',
         'image',
         'user_id'
     ];




}
