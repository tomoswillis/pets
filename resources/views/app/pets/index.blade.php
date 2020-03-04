@extends('layouts/base')

@section('base')
   <ul>
      @foreach ($model['pets'] as $pet)
            <li> {{ $pet['name'] }} </li>
      @endforeach
   </ul>

   <form method="POST" action="/pets/store">
      @method('PUT')
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

      <input type="radio" id="male" name="sex" value="male">
         <label for="male">Male</label>
         <input type="radio" id="female" name="sex" value="female">
         <label for="female">Female</label><br>

      <button type="submit">ADD PET</button>
   </form>

   <form method="POST" action="/pets/delete/4">
      @method('DELETE')
      @csrf
      <button type="submit"> test </button>
   </form>
@endsection