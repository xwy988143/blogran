<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $panel = DB::table('panel')->get()->toarray();
        $res=json_decode(json_encode($panel),true);
        foreach ($res as $k => $v) {
            if($v['pid'] == 0) $data[] = $v;
        }
        foreach ($res as $k => $v) {
            foreach ($data as $key => $value) {
                if($value['id'] == $v['pid']) $data[$key]['child'][] = $v;
            }
        }
        view()->share('menu',$data);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
