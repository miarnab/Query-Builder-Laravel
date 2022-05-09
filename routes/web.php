<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Operator;

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

Route::get('/', function () {

    //Query-1
    // $actors = DB::table(table : 'actor')
    //     ->where(column:'last_name',operator:'=',value:'Berry')
    //     ->get();
    // return $actors;

    //Query-2
    // $actors = DB::table(table: 'actor')
    //     ->select(['last_name', DB::raw(value: 'count(*) AS actor_count')])
    //     ->groupBy(groups:'last_name')
    //     ->orderBy(column:'actor_count', direction:'desc')
    //     ->get();
    // return $actors;

    //Query-3
    // $countries = DB::table(table: 'country')
    //     ->select(['country_id','country'])
    //     ->whereIn('country',['Afghanistan','Bangladesh','China'])
    //     ->orderBy(column: 'country_id', direction: 'DESC')
    //     ->get();
    // return $countries;

    //Query-4
    // $films = DB::table(table: 'film')
    //     ->select(['film_id','title','special_features','replacement_cost'])
    //     ->whereBetween('replacement_cost',[19.99,20.99])
    //     ->orderBy(column: 'film_id')
    //     ->limit(value: 10)
    //     ->get();
    // return $films;

    //Query-5
    // $films = DB::table(table: 'film')
    //     ->select(['film_id','title','special_features','replacement_cost'])
    //     ->whereNotBetween('replacement_cost', [18.99,20.99])
    //     ->orderBy(column: 'film_id')
    //     ->limit(value: 10)
    //     ->get();
    // return $films;

    //Query-6
    // $films = DB::table(table: 'film')
    //     ->select(['film_id','title','special_features','replacement_cost'])
    //     ->where('title', operator: 'African Egg')
    //     ->orWhere('title', operator: 'Agent Truman')
    //     ->get();
    // return $films;

    //Query-7
    // $staffwithaddress = DB::table(table: 'staff AS s')
    //     ->select(['s.staff_id','s.first_name','s.last_name','s.email',
    //                 'addr.address','addr.district','addr.postal_code',
    //                 'c.city','count.country'
    //     ])
    //     ->leftJoin(table: 'address AS addr', first: 's.address_id', operator: '=', second: 'addr.address_id')
    //     ->leftJoin(table: 'city AS c', first: 'addr.city_id', operator: "=", second: "c.city_id")
    //     ->leftJoin(table: 'country AS count', first: 'c.country_id', operator: '=', second: 'count.country_id')
    //     ->orderBy(column: 'staff_id')
    //     ->get();
    // return $staffwithaddress;

    //Query-8
    // $store_details = DB::query()
    //     ->select(['sto.store_id','city.city','count.country'])
    //     ->from('store AS sto')
    //     ->leftJoin('address AS addr','sto.address_id','=','addr.address_id')
    //     ->join('city','addr.city_id','=','city.city_id')
    //     ->join('country AS count','city.country_id','=','count.country_id');

    // $payment_details = DB::query()
    //     ->select(['cust.store_id', DB::raw(value: 'sum(pay.amount) AS sales')])
    //     ->from('customer AS cust')
    //     ->join('payment AS pay','cust.customer_id','=','pay.customer_id')
    //     ->groupBy('cust.store_id');

    // $results = DB::query()
    //     ->select('store_details.*','payment_details.sales')
    //     ->fromSub($store_details, 'store_details')
    //     ->joinSub($payment_details, 'payment_details','store_details.store_id','=','payment_details.store_id')
    //     ->get();
    // dump($results);

    //Query-9
    // $categories = DB::query()
    //     ->select('cat.name', DB::raw(value: 'count(f.film_id) AS film_count'))
    //     ->from('category AS cat')
    //     ->leftJoin('film_category AS fc','cat.category_id','=','fc.category_id')
    //     ->join('film AS f','fc.film_id','=','f.film_id')
    //     ->join('language AS lang', function($join){
    //         $join->on('f.language_id','=','lang.language_id')
    //             ->where('lang.name','English');
    //     })->groupBy('cat.name')->orderBy('film_count', 'DESC')->get();
    // return $categories;

    //Query-10
    // $results = DB::table(table: 'film')
    //     ->select('film_id', 'title')
    //     ->where(column:'title',operator:'LIKE',value:'K%')
    //     ->orWhere(column:'title',operator:'LIKE',value:'Q%')
    //     ->whereIn('language_id', function($query){
    //         $query->select('language_id')->from('language')
    //                 ->where('name','English');
    //     })->orderBy(column:'title')->get();
    // return $results;

});
