<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class NewsController extends Controller
{
    //
    /**
     * 问题列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function newsList()
    {
        $res = DB::table('news')->get();
        return view('news.newsList')->with('res', $res);
    }

    public function newsAdd()
    {
        return view('news.newsAdd');
    }

    public function newsDel()
    {
        return view('news.newsDel');
    }

    public function newsEdit()
    {
        return view('news.newsEdit');
    }


    public function newsStore(Request $request)
    {

        //接收表单数据
        $input = [
            'id' => null,
            'title' => $request->title,
            'url' => $request->url,
            'author' => $request->author,
            'smallimg' => $request->smallimg,
            'description' => $request->description,
            'add_time' => date('Y-m-d H:i:s', time()),
        ];

        $id = DB::table('news')->insertGetId($input);
        return back()->with('id', $id);
    }


    /**
     * 上传头像
     */
    public function uploadImg(Request $request)
    {
        // 判断上传的文件是否存在
        if ($request->hasFile('news_img')) {
            $code = 0;
            $msg = '文件上传成功';
            // 获取文件扩展名
            $entension = $request->file('news_img') -> getClientOriginalExtension();

            // 设置文件保存路径
            $file_path ='/upload/news_img/' . date('Y-m-d', time()) . '/';
            // 设置文件名
            $img_name =  time() . '.' . $entension;
            // 移动图片
            $request->file('news_img')->move((public_path() . $file_path), $img_name);
            // 返回 相对 网站根目录的 图片路径名称
            $img_name = $file_path . $img_name;

        } else {
            $code = 1;
            $msg = '文件上传失败';
            $img_name = '';

        }
        $res = [
            'code' => $code,
            'msg' => $msg,
            'img_name' => $img_name
        ];

        return response()->json($res);
    }




}