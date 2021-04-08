<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|--------------------------------------------------------------------------
| //where
|--------------------------------------------------------------------------
*/



// Route::get('/', function () {
//      $actor = DB::table('actor')
//      ->where([
//          ['last_name','Berry'],
//          ['first_name','Karl']
//      ])

//      ->get();
//      return $actor;
    

// });

// Route::get('/', function () {
//      $actor = DB::table('actor')
//      ->select(['last_name', DB::raw('count(*) AS actor_count')])
//      ->groupBy('last_name')
//      ->orderBy('actor_count','desc')
//      ->get();
//      return $actor;
    

// });

// SELECT actor_id,last_name from actor WHERE last_name IN('GABLE','CAGE','BERRY')

// Route::get('/', function () {
//     $actor = DB::table('actor')
//     ->select(['actor_id', 'last_name'])
//     ->whereIn('last_name',['GABLE','CAGE','BERRY'])
//     ->orderBy('actor_id','asc')
//     ->get();
//     return $actor;
   

// });


// Route::get('/', function () {
//     $actor = DB::table('actor')
//     ->select(['actor_id','first_name', 'last_name'])
//     ->whereBetween('actor_id',['6','20'])
//     ->orderBy('actor_id')
//     ->limit(5)
//     ->get();
//     return $actor;
   

// });

Route::get('/', function () {
    $actor = DB::table('actor')
    ->select(['actor_id','first_name', 'last_name'])
    ->whereNotBetween('actor_id',['6','20'])
    ->orderBy('actor_id')

    ->get();
    return $actor;
   

});
