@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">広告一覧
          
          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success">
                {{ session('status') }}
              </div>
            @endif

            <form method="GET" action="{{ route('ads.create') }}">
              <button type="submit" class="btn btn-primary">
                新規登録
              </button>
            </form>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">ad_name</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($ads as $ad)
                <tr>
                  <th scope="row"> {{ $ad->id}}</th>
                  <td>{{ $ad->ad_name}}</td>
                  <td><a href="{{ route('ads.show', ['ad' => $ad->id]) }}">詳細を見る</a></td>
                  
                </tr>
                @endforeach
              </tbody>
            </table>
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
