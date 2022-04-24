@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Configuració del compte') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('user.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                        <label for="nick" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control" name="name" value="{{ Auth::user()->name}}" autocomplete="name" >


                            </div>
                        </div>
                        <div class="row mb-3">
                        <label for="nick" class="col-md-4 col-form-label text-md-end">{{ __('Surname') }}</label>

                            <div class="col-md-6">
                                <input id="surname" type="surname" class="form-control" name="surname" value="{{ Auth::user()->surname }}"  autocomplete="surname">


                            </div>
                        </div>
                        <div class="row mb-3">
                        <label for="nick" class="col-md-4 col-form-label text-md-end">{{ __('Nick') }}</label>

                            <div class="col-md-6">
                                <input id="nick" type="surname" class="form-control" name="nick" value="{{ Auth::user()->nick }}"  autocomplete="nick">


                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}"  autocomplete="email">


                            </div>
                        </div>

                        <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Avatar') }}</label>

                            <div class="col-md-6">
                            @if(Auth::user()->image)
                                    <div class="container-avatar">
                                        <img style="width: 50px; border-radius: 5px;" src="{{ route('user.avatar', ['filename'=>Auth::user()->image]) }}" class="avatar" alt="">
                                    </div>
                            @else
                                <p>No hi ha</p>
                            @endif

                            </div>
                        </div>
                        <div class="row mb-3">
                        <label for="avatar" class="col-md-4 col-form-label text-md-end"></label>

                            <div class="col-md-6">
                                <input id="avatar" type="file" class="form-control" name="image_path" autocomplete="avatar">


                            </div>
                        </div>

                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message ?? '' }}</strong>
                            </span>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Desa canvis') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
