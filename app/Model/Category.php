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

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'];

    public function product(){
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

}