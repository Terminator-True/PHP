@extends('app')

@section('title')
    list
@endsection


@section('sidebar')
    @parent
@endsection

@section('content')
{{$i = 1}}

<ul>
    @while($i < count($posts))
        <li> {{$posts[$i]["title"]}} <a href="http://127.0.0.1:8000/posts/{{$i}}">Show</a></li>
        {{ $i++ }}
    @endwhile
</ul>

@include("posts.taula")
@endsection

