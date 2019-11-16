<?php

namespace App\Http\Controllers\duty;

use App\Duty;
use App\Products;
use App\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
        $data = Duty::paginate(10);
        $join = DB::table('users')
            ->select('users.id', 'users.name', 'users.user_surname')
            ->join('duties', 'duty_add_personal', '=', 'users.id')
            ->get();
        return view('duty.index', ['data' => $data, 'join' => $join]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Users::all();
        $id = Users::find(Auth::id());
        return view('duty.create', ['user'=> $user, 'id' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * BURADA VERİ GELİYORSA USERS TABLOSUNA BAĞLANIP AKTİF OLAN KULLANICNIN ID ALIP
     * DUTIES TABLOSUNDA Kİ ADD_PERSONEL SUTUNA EKLENECEK.
     */
    public function store(Request $request)
    {
        $all = $request->except('_token');
        $insert=Duty::create($all);
        if ($insert)
        {
            return redirect()->back()->with('status','Görev Eklendi.');
        }else
        {
            return redirect()->back()->with('status', 'Görev Eklenemedi');
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
        $show = Duty::where('duty_id', '=', $id)->count();

        if ($show!=0){
            $user = DB::table('users')
                ->join('duties', 'duties.duty_add_personal', '=', 'users.id')
                ->select('users.name', 'duties.*')
                ->limit(1)
                ->first($id);

            $app = DB::table('users')
                ->join('duties', 'duties.appointed_user_id', '=', 'users.id')
                ->select('users.name', 'duties.*')
                ->first($id) ;

            $data = Duty::where('duty_id', '=', $id)->get();

            return view('duty.show', compact('data','user', 'app'));
        }
        else
        {
            return redirect()->back()->with('status', 'Sorun oluştu');
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

        $c = Duty::where('duty_id','=', $id)->count();
        if ($c!=0)
        {
            $user = Users::all();
            $ids = Users::find(Auth::id());
            $data = Duty::where('duty_id','=', $id)->get();

            return view('duty.edit', ['data' => $data, 'user' => $user, 'ids' => $ids]);
        }else
        {
            return view('/');
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
        $id = $request->route('id');
        $c = Duty::where('duty_id', '=', $id)->count();

        if ($c!=0)
        {
            $data = Duty::where('duty_id', '=', $id)->get();
            $all = $request->except('_token');
            $update = Duty::where('duty_id', '=', $id)->update($all);

            if ($update)
            {
                return redirect()->back()->with('status', 'Görev Güncellendi');
            }
            else
            {
                return redirect()->back()->with('status', 'Görev Güncellenemedi');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $c = Duty::where('duty_id', '=', $id)->count();

        if ($c!=0) {

            $delete = Duty::where('duty_id', '=', $id)->delete();

            return redirect()->back()->with('status', 'Görev Silindi');
        }else{
            return redirect()->back()->with('status','Görev Silinemedi');
        }
    }
}
