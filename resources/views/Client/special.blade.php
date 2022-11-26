@extends('layout')

@section('title')
    Специалисты
@endsection

@section('content')

    <section class="service">
        <div class="container">
            <div class="rows" style="background: white;">
                @foreach($doctors as $item)
                    <div class="row">
                        <!-- <img src="images/logo.png" alt=""> -->
                        <h3 style="background: #3771dc;">{{$item->full_name}}</h3>
                        <h4>Должность: {{$item->role->name_role}}</h4>
                        <h4>Направление:{{$item->napravlenie->name_naprav}}</h4>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
