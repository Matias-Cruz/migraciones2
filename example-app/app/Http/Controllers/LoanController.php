<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function index() {
        return Loan::all();
    }

    public function show($id){
        return Loan::find($id);
    }

    public function showByCustomerId($customer_id){
        return Loan::where('customer_id',$customer_id)->get();
    }
}
