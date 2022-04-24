@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Puja imatge') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('image.upload') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                        <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Imatge') }}</label>
                        <div class="col-md-6 ">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="image_path">
                            </div>
                        </div>
                        <div class="row mb-3">
                        <label for="descripcio" class="col-md-4 col-form-label text-md-end">{{ __('Descripcio') }}</label>
                            <div class="col-md-6">
                                <input id="descripcio" type="text" class="form-control" name="descripcio">
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Puja') }}
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
