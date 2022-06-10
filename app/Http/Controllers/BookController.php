<?php

namespace App\Http\Controllers;
 use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{


    public function viewbook()
    {
        return view('admin_addbook');
    }
    public function addbook()
    {
        $b_name=request('bname');
        $a_name=request('aname');
        $p_date=request('pdate');
        $shelfno=request('shelfno');
        $price=request('price');

        Book::Create([
            'b_name'=>$b_name,
            'a_name'=>$a_name,
            'p_date'=>$p_date,
            'shelf_no'=>$shelfno,
            'price'=>$price
        ]);
        return redirect()->route('viewbooks');
    }


    
}
