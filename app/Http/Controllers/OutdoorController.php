<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outdoor;

class OutdoorController extends Controller
{
    //
    public function index()
    {
        return view ('welcome',['list'=>Outdoor::all()]);
    }

    public function saveBatch(Request $req)
    {
        $outObj= new Outdoor();
        $outObj->Batch = $req->Batch;
        $outObj->Quantity = $req->Quantity;
        $outObj->Status = $req->Status;
        $outObj->Remarks = $req->Remarks;

        $outObj->save();

        return redirect('/');

    }
}
