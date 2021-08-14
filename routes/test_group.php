<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get("/",function(Request $res){
    echo $res->name;
    return response()->json([
                'name' => 'this is group',
                'state' => 'hahahah',
            ]);
});
