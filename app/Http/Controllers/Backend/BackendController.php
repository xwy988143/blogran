<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BackendController extends Controller
{
    //

    public function index()
    {
        return view('backend.login');
    }

    public function login(Request $request)
    {
        //

        $data = $request->all();
        $where = ['username'=>$data['username'],'password'=>$data['password']];
        $result = DB::table('admin')->where($where)->get()->toArray();
        if(!Empty($result))
        {
            Session::put('admin',$data['username']);
            return redirect('backend/dashboard');
        }else{
            abort(503);
        }
    }

    public function dashboard()
    {
        return view('backend.dashboard');
    }

    public function panel()
    {
        $result = DB::table('panel')->where('pid','=',0)->get()->toarray();
        return view('backend.panel',['panel'=>$result]);
    }
}
