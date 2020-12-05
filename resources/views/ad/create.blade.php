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

            <form method="GET" action="{{ route('ad.create') }}">
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
