<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductCOntroller extends Controller
{
    public function show(){
        $items = array('fish','chicken','meat','dal','rice');
        return view('pages.products', ['products'=>$items]);
    }
}
