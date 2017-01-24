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
        $bool = Empty($result);
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
        return 'fsdf';
    }
}
