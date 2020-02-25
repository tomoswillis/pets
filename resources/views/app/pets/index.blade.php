@extends('layouts/base')

@section('base')
   <ul>
      @foreach ($model['pets'] as $pet)
            <li> {{ $pet['name'] }} </li>
      @endforeach
   </ul>

   <form method="POST" action="/pets/store">
      @csrf

      @if ($errors->any())
         <div class="alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
      @endif

      <input type="text" name="name" value="{{ old('name') }}">
   
      <select
      name="age"
      id="">
         <option value="1">age</option>
      </select>

      <select
      name="user_id"
      id="">
         <option value="1">user</option>
      </select>

      <select
      name="species"
      id="">
         <option value="1">cat</option>
      </select>

      <input type="text" name="sex">

      <button type="submit">
   </form>
@endsection