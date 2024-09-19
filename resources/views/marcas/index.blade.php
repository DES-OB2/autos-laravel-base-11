@extends('layout/master')

@section('contect')
    <h1>Bienvenido a el apartado autos</h1>

    {{-- <h1>{{ $name }}</h1>
    <h2>{{ $age }}</h2>
    <h3>{{ $des }}</h3>

    @if ($name > 'onda')
        La marca no es correcta
    @else
        Tu nombre es Honda
    @endif --}}

    <ul>
        @foreach ([1,2,3,4,5] as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
@endsection
