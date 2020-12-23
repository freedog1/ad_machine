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

            <form method="POST" action="{{ route('ads.store') }}">
              @csrf
              広告名
              <input type="text" name="ad_name">
              <br>
              対象性別
              <input type="radio" name="gender" value="0">男性</input>
              <input type="radio" name="gender" value="1">女性</input>
              <br>
              対象年齢
              <select name="age">
                <option value="">選択してください</option>
                <option value="0">~19歳</option>
                <option value="1">20歳~29歳</option>
                <option value="2">30歳~39歳</option>
                <option value="3">40歳~49歳</option>
                <option value="4">50歳~59歳</option>
                <option value="5">60歳~</option>
              </select>
              <br>
              対象地域
              <select name="region">
                <option value="">選択してください</option>
                <option value="0">北海道</option>
                <option value="1">東北</option>
                <option value="2">関東</option>
                <option value="3">中部</option>
                <option value="4">近畿</option>
                <option value="5">中国</option>
                <option value="6">四国</option>
                <option value="7">九州</option>
              </select>
              <br>
              掲載する広告
              <br>
              <input type="hidden" name="users_id" value={{ Auth::user()->id }}></input>
              
              ファイルアップロード
              <input type="checkbox" name="caution" value="1">注意事項に同意する
              <br>
              <input class="btn btn-info" type="submit" value="登録する">
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
