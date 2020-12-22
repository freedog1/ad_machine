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

            showです
            
            {{ $ad->ad_name }}
            {{ $gender }}
            {{ $age }}
            {{ $region }}
            {{ $ad->status }}

            <form method="GET" action="">
              @csrf

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
