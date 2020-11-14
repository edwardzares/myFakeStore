<?php
/**
 * Created by PhpStorm.
 * User: EDWARD OSORIO
 * Date: 14/11/2020
 * Time: 8:32 AM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'price', 'category_id', 'description', 'image'];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

}