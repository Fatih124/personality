<?php

namespace App\Http\Controllers\Products;

use App\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class indexController extends Controller
{
    public function index()
    {
        $data = Products::paginate(10);
        return view('products.index', ['data'=>$data]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $all = $request->except('_token');
        $insert= Products::create($all);
        if ($insert){
            return redirect()->back()->with('status', 'Ürün Eklendi.');
        }else{
            return redirect()->back()->with('status', 'Houston have a problem!');
        }
    }

    public function edit($id)
    {
        $c = Products::where('product_id','=', $id)->count();
        if ($c!=0)
        {
            $data = Products::where('product_id','=', $id)->get();
            return view('products.edit',['data'=>$data]);
        }else{
            return redirect('/');
        }
    }

    public function update(Request $request)
    {

        $id =$request->route('id');
        $c = Products::where('product_id',$id)->count();

        if ($c!=0) {
            $data = Products::where('product_id', '=', $id)->get();
            $all = $request->except('_token');
            $update = Products::where('product_id','=',$id)->update($all);

            if ($update)
            {
                return redirect()->back()->with('status','Ürün Güncellendi.');
            }
            else
            {
                return redirect()->back()->with('status','Güncelleme Başarısız.');
            }
        }
        else
        {
            return redirect()->back()->with('status','Houston have a problem! ');
        }
    }

    public function delete($id)
    {
        $c = Products::where('product_id', '=', $id)->count();
        if ($c!=0) {
            $w = Products::where('product_id', '=', $id)->get();
            return redirect()->back();
        }
        else{
            return redirect('/');
        }
    }

}
