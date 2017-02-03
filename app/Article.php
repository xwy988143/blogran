<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = 'articles';

    //protected $primaryKey = 'id';

    public $timestamps = false;

    //批量增加数据
    protected $fillable = ['title','content','keyword','class','thumb','updated_at','create_at'];

    //不允许批量增加的字段
    protected $guarded = [];

//    protected function getDateFormat()
//    {
//        return time();
//    }

//    protected function asDateTime($value)
//    {
//        return $value;
//    }

    public static function add($data)
    {
        return self::create([
            'title'=>$data['title'],
            'content'=>$data['content'],
            'class'=>$data['class'],
            'keyword'=>$data['keyword'],
            'thumb'=>0,
            'create_at'=>time(),
            'updated_at'=>0,
        ]);
    }

}
