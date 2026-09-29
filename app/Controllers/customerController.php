<?php

namespace App\Controllers;

class customerController extends BaseController
{
    public function customer(): string
    {
     $data['customers'] = [
        [
            'id' => '001',
            'name' => 'Aron'
        ],
        [
            'id' => '002',
            'name'=> 'Matthew'
        ],   
        [
            'id' => '003',
            'name'=> 'Cele'
        ],   
        [
            'id' => '004',
            'name'=> 'Grey'
        ],   
        [
            'id' => '005',
            'name'=> 'Vind'
        ],   
     ];
    
    return view('customerView', $data);
    }
}
