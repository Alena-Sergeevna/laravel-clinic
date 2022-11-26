@extends('layout')

@section('title')
    Направление
@endsection

@section('content')
<section class="service">
    <div class="container">
        <a type="button" href="{{url()->previous()}}"> Назад </a>
        <div class="rows">
            <div class="row" style="max-width: 90%; background: white;">
            <h3 style="background: #3771dc;">{{$napravlenie->name_naprav}}</h3>
            <p> {{$napravlenie->description_n}}</p>
            <ul style="text-align: left;">
                @foreach($napravlenie->services as $service)
                    <li> {{ $service->name_service}}</li>
                @endforeach
            </ul>
            </div>
        </div>
    </div>
</section>
@endsection

