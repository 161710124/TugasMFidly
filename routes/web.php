<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('bio',function(){
	return view('layouts.biodata');
});

Route::get('testing',function(){
	return view('layouts.test');
});
Route::get('profil',function(){
	return view('layouts.profil');
});
Route::get('kegiatan',function(){
	return view('layouts.kegiatan');
});