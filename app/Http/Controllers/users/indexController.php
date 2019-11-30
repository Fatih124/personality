<?php

namespace App\Http\Controllers\users;

use App\Helper\imageUpload;
use App\Helper\mHelper;
use App\Users;
use File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class indexController extends Controller
{
    public function index()
    {
        $data = Users::paginate(10);
        return view('users.index', ['data'=>$data]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['selflink'] = mHelper::permalink($all['name']);
        $all['user_pic'] = imageUpload::singleUpload(rand(1, 9000), "users", $request->file('user_pic'));
        $all['password'] = Hash::make($all['password']);
        $insert= Users::create($all);
        if ($insert){
            return redirect()->back()->with('status', 'Kullanıcı Eklendi.');
        }else{
            return redirect()->back()->with('status', 'Houston have a problem!');
        }
    }

    public function profile($id)
    {
        $control = Users::where('id', '=', $id)->count();
        if ($control!=0)
        {
            $data = Users::where('id', '=', $id)->get();
            return view('users.profile', ['data' => $data]);
        }else{
            echo "Houston have a problem!";
        }
    }



    public function edit($id)
    {
        $c = Users::where('id','=', $id)->count();
        if ($c!=0)
        {
            $data = Users::where('id','=', $id)->get();
            return view('users.edit',['data'=>$data]);
        }else{
            return redirect('/');
        }
    }

    public function update(Request $request)
    {

        $id =$request->route('id');
        $c = Users::where('id',$id)->count();

        if ($c!=0) {
            $data = Users::where('id', '=', $id)->get();
            $all = $request->except('_token');
            $all['selflink'] = mHelper::permalink($all['name']);
            $all['user_pic'] = imageUpload::singleUploadUpdate(rand(1,900), "users", $request->file('user_pic'),$data,"user_pic");
            $all['password'] = Hash::make($all['password']);
            $update = Users::where('id','=',$id)->update($all);
//TABLO İSİMLERİNİ AUTH ILE GELEN İSİMLER GİBİ YAP//
            if ($update)
            {
                return redirect()->back()->with('status','Kullanıcı Güncellendi.');
            }
            else
            {
                return redirect()->back()->with('status','Güncelleme Başarısız.');
            }
        }
        else
        {
            return redirect()->back()->with('status','Houston have a problem!');
        }
    }

    public function delete($id)
    {
        $c = Users::where('id', '=', $id)->count();
        if ($c!=0) {
            $w = Users::where('id', '=', $id)->get();
            File::delete('public/' . $w[0]['user_pic']);
            Users::where('id', '=', $id)->delete();
            return redirect()->back();
        }
        else{
            return redirect('/');
        }
    }

}
