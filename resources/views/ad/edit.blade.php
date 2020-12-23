@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">広告新規登録
          
          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success">
                {{ session('status') }}
              </div>
            @endif

            {{-- エラー出力 --}}
            @if ($errors->any())
            <div class="alert alert-denger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            @endif

            editです
            

            <form method="POST" action="{{ route('ads.update',['ad' => $ad->id]) }}">
              @csrf
              @method("PUT")
              広告名
              <input type="text" name="ad_name" value="{{$ad->ad_name}}">
              <br>
              対象性別
              <input type="radio" name="gender" value="0" @if ($ad->gender === 0) checked @endif>男性</input>
              <input type="radio" name="gender" value="1" @if ($ad->gender === 1) checked @endif>女性</input>
              <br>
              対象年齢
              <select name="age">
                <option value="">選択してください</option>
                <option value="0" @if ($ad->age === 0) selected @endif>~19歳</option>
                <option value="1" @if ($ad->age === 1) selected @endif>20歳~29歳</option>
                <option value="2" @if ($ad->age === 2) selected @endif>30歳~39歳</option>
                <option value="3" @if ($ad->age === 3) selected @endif>40歳~49歳</option>
                <option value="4" @if ($ad->age === 4) selected @endif>50歳~59歳</option>
                <option value="5" @if ($ad->age === 5) selected @endif>60歳~</option>
              </select>
              <br>
              対象地域
              <select name="region">
                <option value="">選択してください</option>
                <option value="0" @if ($ad->region === 0) selected @endif>北海道</option>
                <option value="1" @if ($ad->region === 1) selected @endif>東北</option>
                <option value="2" @if ($ad->region === 2) selected @endif>関東</option>
                <option value="3" @if ($ad->region === 3) selected @endif>中部</option>
                <option value="4" @if ($ad->region === 4) selected @endif>近畿</option>
                <option value="5" @if ($ad->region === 5) selected @endif>中国</option>
                <option value="6" @if ($ad->region === 6) selected @endif>四国</option>
                <option value="7" @if ($ad->region === 7) selected @endif>九州</option>
              </select>
              <br>
              掲載する広告
              <br>
              <input type="hidden" name="users_id" value={{ Auth::user()->id }}></input>
              
              ファイルアップロード
              <input type="checkbox" name="caution" value="1">注意事項に同意する
              <br>

            {{-- <form method="GET" action="">
              @csrf --}}

              <input class="btn btn-info" type="submit" value="変更する">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    
@endsection

・広告掲載申請はこちら

・広告名(ad_name)
・画像

・view数
・広告料
