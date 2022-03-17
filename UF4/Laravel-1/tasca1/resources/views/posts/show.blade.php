@extends('app')

@section('title')
    index
@endsection


@section('sidebar')
    @parent
@endsection

@section('content')
    
<div class="card">
  <div class="container">
    <h4><b>{{$post["title"]}}</b></h4> 
    <p>{{$post["content"]}}</p> 
    <hr>
    <p> @if($post["done"])
            done
        @else
            not done
        @endif</p>
    <p>@if($post["interesting"])
            interesting
        @else
            not interesting
        @endif</p>
    
  </div>
</div>
@endsection

