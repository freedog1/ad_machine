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
                <option value="">洗濯してください</option>
                <option value="1">~19歳</option>
                
              対象地域

              

              <button type="submit" class="btn btn-primary">
                新規登録
              </button>
            </form>
            
            氏名
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



<a href="/"
