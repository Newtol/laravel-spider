<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Spider;
header( "Content-type:text/html;Charset=utf-8" );

class SpiderController extends Controller
{
    public function spider(Request $request){
        $name = $request->title;
    //     $user = \DB::select('select * from stukbs where stuid = ?', [$name]);
    //     if($user){
    //     echo "查询结果如下:";
    //     dd($user);
    // }else{
    //     echo "正在爬取数据:";
    //     $ch = curl_init();
    //     curl_setopt ( $ch , CURLOPT_USERAGENT ,"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.113 Safari/537.36" );
    //     curl_setopt($ch,CURLOPT_URL,"http://jwzx.cqupt.congm.in/jwzxtmp/kebiao/kb_stu.php?xh=$name");

    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


    //      $content=curl_exec($ch);

    //       preg_match_all("/<td rowspan='\d'>(.*?)<\/td>\n<td rowspan='\d'>(.*?)<\/td>\n<td>(.*?)<td>(.*?)<\/td>\n<td rowspan='\d' align='\w+'>(.*?)<\/a><\/td>/",$content,$matchs,PREG_SET_ORDER);
    //      // dd($matchs);
    //      if(empty($matchs[0])){
    //         echo "查询失败，请输入正确的学号";
    //      }else{
        
    //     \DB::insert('insert into stukbs (stuid,class1,class2,class3,class4,class5,class6,class7,class8,class9,class10,class11,class12) values (?,?,?,?,?,?,?,?,?,?,?,?,?)',
    //     [$name,$matchs[0][0],$matchs[1][0],$matchs[2][0],$matchs[3][0],$matchs[4][0],$matchs[5][0],$matchs[6][0],$matchs[7][0],$matchs[8][0],$matchs[9][0],$matchs[10][0],$matchs[11][0]]);
    //     }
    // }
}
    public function index(){
        return view('index');
    }
}
