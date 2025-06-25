 @vite('resources/css/app.css')

@extends('layaout')

@section('header')
    <h1>POSTS</h1>
@endsection

@section('body')

    @foreach($posts as $item)
        <div class="">
            <div class="w-50"><img src="{{$item->image->route}}" alt=""></div>
            <div class=""><h1>{{$item->title}}</h1></div>
            <div class="">{{$item->body}}</div>
        </div>
    @endforeach

@endsection

@section('footer')
    <h1>Este es el footer</h1>
@endsection
