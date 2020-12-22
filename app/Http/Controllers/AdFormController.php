<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\AdForm;


class AdFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //エロクアント
        //$ads = AdForm::all();

        //クエリビルダ
        $ads = DB::table('ad_forms')
        ->select('id','ad_name')
        ->orderBy('id','desc')
        ->get();

        return view('ad.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ad = new AdForm;

        $ad->ad_name = $request->input('ad_name');
        $ad->gender = $request->input('gender');
        $ad->age = $request->input('age');
        $ad->region = $request->input('region');
        //最初は申請中で登録
        $ad->status = '申請中';
        $ad->users_id = $request->input('users_id');


        $ad->save();

        return redirect('ads');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ad = AdForm::find($id);

        //性別
        if ($ad->gender === 0){
            $gender = '男性';
        }
        if ($ad->gender === 1){
            $gender = '女性';
        }
        //年齢
        if ($ad->age === 0){
            $age = '~19歳';
        }
        if ($ad->age === 1){
            $age = '20歳~29歳';
        }
        if ($ad->age === 2){
            $age = '30歳~39歳';
        }
        if ($ad->age === 3){
            $age = '40歳~49歳';
        }
        if ($ad->age === 4){
            $age = '50歳~59歳';
        }
        if ($ad->age === 5){
            $age = '60歳~';
        }

        //地域
        if ($ad->region === 0){
            $region = '北海道';
        }
        if ($ad->region === 1){
            $region = '東北';
        }
        if ($ad->region === 2){
            $region = '関東';
        }
        if ($ad->region === 3){
            $region = '中部';
        }
        if ($ad->region === 4){
            $region = '近畿';
        }
        if ($ad->region === 5){
            $region = '中国';
        }
        if ($ad->region === 6){
            $region = '四国';
        }
        if ($ad->region === 7){
            $region = '九州';
        }

        return view('ad.show', compact('ad','gender','age','region'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
