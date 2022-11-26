@extends('layout')


@section('title')
    Услуги и цены
@endsection

@section('link')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
@endsection


@section('content')

    <section class="service">
        <div class="container">

            @foreach($napravlenies as $key=> $item)
            <p>
                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample{{$key}}" role="button" aria-expanded="false" aria-controls="collapseExample" style="width: 50%;">
                    {{$item->name_naprav}}
                </a>
            </p>
            <div class="collapse" id="collapseExample{{$key}}">
                @foreach($item->services as $service)
                    <div class="card card-body">
                        {{$service->name_service}} : {{$service->price}}  Руб.
                    </div>
                @endforeach
            </div>
            <br>
            <?php endforeach; ?>

        </div>
    </section>

@endsection
