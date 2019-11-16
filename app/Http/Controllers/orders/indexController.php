<?php

namespace App\Http\Controllers\orders;

use App\Helper\mHelper;
use App\Orders;
use App\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('orders')
            ->select('orders.customer_name', 'orders.order_id', 'orders.customer_phone', 'products.product_name', 'orders.sale_date','orders.delivery_date')
            ->join('products', 'orders.product_id', '=', 'products.product_id')
            ->get();
        return view('orders.index', ['data'=> $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Products::all();
        return view('orders.create', ['product' => $product]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['selflink'] = mHelper::permalink($all['customer_name']);

        $insert = Orders::create($all);
        if ($insert){
            return redirect()->back()->with('status', 'Tebrikler Siparişiniz Başarıyla Eklendi.');
        }
        else{
            return redirect()->back()->with('status', 'Hata, Siparişiniz Eklenemedi. Lütfen Daha Sonra Tekrar Deneyin');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $control = Orders::where('order_id', '=', $id)->count();
        if ($control!=0){
            $data = Orders::where('order_id', '=', $id)->get();
            return view('orders.detail', ['data' => $data]);
        }else{
            echo "Bir Sorun Var";
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $c = Orders::where('order_id', '=', $id)->count();
        if ($c!=0)
        {
            $product = Products::all();
            $data = Orders::where('order_id', '=', $id)->get();
            return view('orders.edit', ['data' => $data, 'product' => $product]);
        }
        else{
            echo 'Sorun Oluştu. Tekrar Deneyiniz.';
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
