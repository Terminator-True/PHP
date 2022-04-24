@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container">
            @if(!empty($files) && $files->count() )
            @foreach($files as $file)
            <div class="card m-1">
            <p class="card-text p-2">
                </p>

            <img class="card-img-bottom" src="{{ route('image.get', ['filename'=>$file->image_path]) }}" alt="Card image" style="width:100%">

                <div class="card-body">
                    <button class="btn" > <img style="width: 20px;" src="https://cdn-icons-png.flaticon.com/512/535/535234.png" alt="" srcset=""> </button>
                    <hr>
                <p class="card-text">{{ $file->description}} | {{ \FormatTime::LongTimeFilter($file->created_at) }}
                </p>
                </div>

            </div>
            @endforeach
            @endif
            {!! $files->links() !!}
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
