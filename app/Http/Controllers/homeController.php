<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use App\programming_language;
use App\language;
class homeController extends Controller
{
    public function index(){
    	$programming_languages = developer::find(1)->programming_languages;
    	$developers = programming_language::find(1)->developers;
    	// return $programming_languages;
    	return $developers;
    }

    public function search(){

    		$id=0;
	$id_=0;
	$developers=null;
	$developers_=null;
	$q = Input::get('q');
	$s = Input::get('s');

	 if($q!="" && $s!=""){

	$language = language::where('code',$s)->get();
	$programming_language = programming_language::where('name',$q)->get();

	if(count($language) >0 && count($programming_language)>0){
	foreach ($language as $language_) {
    	 $id_=$language_->id;
    }
    foreach ($programming_language as $programming_language_) {
    	 $id=$programming_language_->id;
    }
	// dd($programming_language);
	$developers = programming_language::find($id)->developers;
    $developers_ = language::find($id_)->developers;
    //$available_roles = $global_roles->merge($user_roles);
    $developers = $developers->merge($developers_);
    // dd($developers);
    // dd($developers);
	if(count($developers) >0)
		return view('welcome')->withDetails($developers)->withQuery('programming language and language');
}
	 }

	elseif($q!= ""){
	//search developers with language
	$programming_language = programming_language::where('name',$q)->get();
	if(count($programming_language) >0){
	foreach ($programming_language as $programming_language_) {
    	 $id=$programming_language_->id;
    }
	// dd($programming_language);
    $developers = programming_language::find($id)->developers;
    // dd($developers);
    // dd($developers);
    
	if(count($developers) >0)
		return view('welcome')->withDetails($developers)->withQuery('programming language');
}
}
elseif($s!=""){
		//search developers with language
	$language = language::where('code',$s)->get();
	if(count($language) >0){
	foreach ($language as $language_) {
    	 $id=$language_->id;
    }
	// dd($programming_language);
    $developers = language::find($id)->developers;
    // dd($developers);
    // dd($developers);
    	if(count($developers) >0)
		return view('welcome')->withDetails($developers)->withQuery('language');
}
}
	return view('welcome')->withMessage("Not found");



    }
}
