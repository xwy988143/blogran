<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\CreatePanelRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SystemController extends Controller
{
    //创建栏目
    public function store(CreatePanelRequest $request)
    {
        $data = $request->input('panel');
        $insert['pid']=$data['pid'];
        $insert['name']=$data['name'];
        $insert['link']=$data['link'];
        $insert['type']=0;
        $bool = DB::table('panel')->insert($insert);
        if($bool)
        {
          return redirect('backend/dashboard');
        }else {
            abort('503');
        }
    }
    public function index()
    {
        $data = DB::table('panel')->get()->toarray();
        return view('backend.index',['panel1'=>$data]);
    }
}
