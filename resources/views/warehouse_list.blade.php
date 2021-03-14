@extends('layouts.app')

@section('content')


    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Название</th>
            <th scope="col">Бренд</th>
        </tr>
        </thead>

        <tbody>

        @foreach( $warehouse as $item )
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->brend }}</td>
                <td>
                    <a href="/?position_id={{ $item->id }}">
                        <button class="btn btn-info">Выбрать позицию</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection