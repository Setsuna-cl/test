<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



$header[]="api-key:*********";//此处写成自己的API-KEY值
$url="http://api.heclouds.com/devices/******/datastreams/**";/*获取数据流为**的数据值，注意此处设备ID号以及申请获取的数据流ID号都应根据自己的OneNet平台设备ID号，希望获取的数据流ID号进行更改*/ 
//用于获取从OneNet平台返还的数据


class TestController extends Controller
{
    //
    public function show()
    {
    	$output=get($url,$header);
		$output_array=json_decode($output,true);
		print_r($output_array);
    }

    public function get($url, $header)
	{
	    //1.初始化，创建一个新cURL资源
	    $ch=curl_init();
	    //2.设置URL和相应的选项
	    curl_setopt($ch,CURLOPT_URL,$url);//需要获取的URL地址，也可以在curl_init()函数中设置
	    curl_setopt($ch,CURLOPT_HTTPHEADER,$header);//启用时会将头文件的信息作为数据流输出
	    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);//将curl_exec()获取的信息以字符串返回，而不是直接输出。
	    curl_setopt($ch,CURLOPT_HEADER,0);//启用时会将头文件的信息作为数据流输出。
	    if(curl_exec($ch)=== false) //curl_error()返回当前会话最后一次错误的字符串
	    {
	        die("Curlerror: ".curl_error($ch));
	    }
	    $response =curl_exec($ch);//获取返回的文件流
	    curl_close($ch);
	    return $response;
	}



}
 