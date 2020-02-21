@extends('layouts/base')

@section('base')
   <ul>
      @foreach ($model['pets'] as $pet)
            <li> {{ $pet['name'] }} </li>
      @endforeach
   </ul>
@endsection