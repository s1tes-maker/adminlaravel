@extends('layouts.app')

@section('content')


    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Имя</th>
                <th scope="col">Описание</th>
                <th scope="col">Действие</th>
            </tr>
        </thead>

        <tbody>

            @foreach( $clients as $client )
                <tr>
                    <th scope="row">{{ $client->id }}</th>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->description }}</td>
                    <td>
                        <a href="/?client_id={{ $client->id }}">
                            <button class="btn btn-info  mt-2">Выбрать этого клиента</button>
                        </a>

                        <a href="">
                            <button class="btn btn-info mt-2"><i class="fas fa-search"></i></button>
                        </a>


                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection