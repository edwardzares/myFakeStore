<?php
/**
 * Created by PhpStorm.
 * User: EDWARD OSORIO
 * Date: 14/11/2020
 * Time: 9:44 AM
 */

namespace App\Business\Component;


use App\Category;

class CategoryComponent
{

    public static function getOrCreate($categoryName){
        $category = Category::where('name',$categoryName)->first();
        if(empty($category)){
            $category = Category::create([
                'name' => $categoryName
            ]);
        }
        return $category;
    }

}