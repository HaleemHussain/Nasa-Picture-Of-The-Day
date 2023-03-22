@extends('theme.default')

@section('content')
    <div class="my-5 text-center">
        <h1 class="display-4 fw-bold">NASA's Picture Of The Day</h1>
        <h3 class="display-5 fw-bold">{{$response->title}}</h3>
        <h3 class="display-6 fw-bold">{{$response->date}}</h3>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">{{$response->explanation}}</p>
        </div>
        <div class="overflow-hidden">
            <div class="container px-5">
                @if(isset($response->hdurl))
                    <img src="{{$response->hdurl}}" class="img-fluid border rounded-3 shadow-lg mb-4"
                         alt="Example image" width="700" height="500" loading="lazy">
                @else
                    <iframe width="560" height="315" src="{{$response->url}}"></iframe>
                @endif
            </div>
        </div>
    </div>
@endsection
