@extends('layout')

@section('title')
    Главная
@endsection

@section('content')
    <section class="service">
        <div class="container">
            <div class="rows">
                @foreach($directions as $item)
                    <div class="row">
                        <a href="{{route('client.napravlenie', ['id' => $item->id_naprav])}}">  <img src="images/logo.png" alt="">
                        <h3>{{$item->name_naprav}}</h3> </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
