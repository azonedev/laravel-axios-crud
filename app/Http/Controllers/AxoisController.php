<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class AxoisController extends Controller
{
    function index(){
    	$data = DB::table('testtable')->get();
    	return view('index',['data'=>$data]);
    }

    function store(Request $r){
    	$data = [];

    	$data['name'] = $r->input('name');
    	$data['email'] = $r->input('email');

    	$data['created_at'] = now();

    	db::table('testtable')->insert($data);
        // $data = db::table('testtable')->get();

    	return "save success";
    }

    function destroy(Request $r){
    	
        DB::table('testtable')->where('id',$r->input('id'))->delete();
        
        return 'delete done';
    }
}
