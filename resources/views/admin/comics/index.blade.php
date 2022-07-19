@extends('admin.templates.base')

@section('mainPage')

    <table>
        <thead>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Thumb</th>
            <th>Price</th>
            <th>Series</th>
            <th>Sale Date</th>
            <th>Type</th>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{$comic->id}}</td>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->description}}</td>
                    <td>{{$comic->tdumb}}</td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
