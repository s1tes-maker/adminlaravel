@extends('layouts.app')

@section('content')
    <div class="col-md-7">
        {{ csrf_field() }}
        <div class="row justify-content-center">
            <div class="card text-dark bg-light mt-5 w-75">
                <h5 class="card-header text-center">
                    Собрать заказ
                </h5>
                @if(!$client)
                <div class="card-body text-center">
                    <a href="/collecting-order-step-1">
                        <button class="btn btn-primary">Выбрать клиента</button>
                    </a>
                </div>
                @else
                    <div class="m-3">
                        <p>{{$client->name}}</p>
                        <p>{{$client->description}}</p>
                    </div>

                    <div class="card-body text">
                        <a href="/collecting-order-step-1">
                            <button class="btn btn-info">Выбрать другого клиента</button>
                        </a>
                    </div>

                    @if($positions)
                        @foreach($positions as $position)
                            <div class="ml-3 mr-3">
                                <p>{{ $position->name }}</p>

                            </div>
                        @endforeach
                    @endif

                    <div class="card-body">
                        <a href="/collecting-order-step-2">
                            <button class="btn btn-primary">Подобрать одежду</button>
                        </a>
                    </div>

                    <div class="card-body text">
                        <a href="/collecting-order-delete">
                            <button class="btn btn-danger">Удалить заказ</button>
                        </a>
                    </div>
                @endif


            </div>
        </div>
    </div>
@endsection