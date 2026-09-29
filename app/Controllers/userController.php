<?php

namespace App\Controllers;

class userController extends BaseController
{
    public function user(): string
    {
    $data['users'] = [
        [
            'id' => '001',
            'name' => 'Abrams'
        ],
        [
            'id' => '002',
            'name'=> 'Billy'
        ],   
        [
            'id' => '003',
            'name'=> 'Coco'
        ],    
        [
            'id' => '004',
            'name'=> 'Lucia'
        ],   
        [
            'id' => '005',
            'name'=> 'Liv'
        ]   
     ];
    
    return view('userView' , $data);
    }
}
