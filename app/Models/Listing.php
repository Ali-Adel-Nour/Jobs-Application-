<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing
{
public static function all(){

    return  [
        [
        'id' => 1,
        'title' => 'Listing One',
        'description' => ' lorem ipsum dolor sit amet, consectet lorem ipsum dolor sit amet lorem. Cum sociis natoque penatibus et'
    ],
     [
        'id' => 2,
        'title' => 'Listing Two',
        'description' => ' lorem ipsum dolor sit amet, consectet lorem ipsum dolor sit amet lorem. Cum sociis natoque penatibus et'
     ]
     ];
}
public static function find($id){
    $listings = self ::all();

    foreach($listings as $listing){
        if($listing['id'] == $id){
            return $listing;
    }
}
}
}
