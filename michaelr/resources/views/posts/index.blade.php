@section('title', 'Home')
@extends('layout')

@section('content')

    <div class="row">
        @foreach ($posts as $post)
            <div class="col-md-4 px-2">
                <div class="panel px-2 pt-2 mt-3">
                    @include('partials.summary')
                </div>
            </div>
        @endforeach
    </div>

@endsection
