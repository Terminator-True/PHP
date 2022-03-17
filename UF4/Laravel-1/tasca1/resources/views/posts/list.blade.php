@extends('app')

@section('title')
    list
@endsection


@section('sidebar')
    @parent
@endsection

@section('content')
<table>
    @foreach($posts as $post)
    <tr>
        <td>
        {{$post["title"]}}
        </td>
        <td>
        {{$post["content"]}}
        </td>
        <td>
        @if($post["done"])
            done
        @else
            not done
        @endif
        </td>
        <td>
        @if($post["interesting"])
            interesting
        @else
            not interesting
        @endif   </td>
    </tr>
    @endforeach
</table>
@endsection

