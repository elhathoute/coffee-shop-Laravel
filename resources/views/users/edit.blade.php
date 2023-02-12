
@extends('layouts.app')

@section('content')
{{-- {{dd($user)}} --}}
<div class="container">
    <div class="row">
        <div class="col-md-12 my-4 text-white bg-info fw-bold fs-3 text-center shadow border rounded-3 border-3 border-dark">My Profile <i class="fa fa-user p-2"></i> </div>
    </div>
<div class="row">
 <form action="{{route('users.update-profile',Auth::user()->id)}}" method="POST" >

@csrf
@method('PUT')
  <div class="form-row">


    <div class="form-group col-md-12">

        <input hidden type="text" value=" {{ Auth::user()->id }}" class="form-control" id="id" name="id" min="4" readonly>
      </div>

    <div class="form-group col-md-12">
        <label for="name">Nom</label>
        <input type="text" value="{{ Auth::user()->name }}" class="form-control" id="name" name="name" min="4" max="20"  placeholder="Nom">
         @error('name')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
         @enderror
    </div>
    <div class="form-group col-md-12">
      <label for="email">Email</label>
      <input type="email" value="{{ Auth::user()->email}}" class="form-control" id="email" name="email"  placeholder="Email">
      @error('email')
      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label for="password">Password</label>
      <input type="password" min="4" max="20" class="form-control" id="password"  name="password" placeholder="Password" required>
      @error('password')
      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group col-md-12 mt-2">
        <input hidden type="text" value="{{ Auth::user()->role}}" class="form-control" id="role"  name="role" readonly>
      </div>
  </div>


<div class="d-flex justify-content-start align-item-center mt-3">
    <button type="submit" class="btn btn-success me-3">Save</button>
    <a href="{{route('home')}}" type="button" class="btn btn-warning ">Annuler</a>
</div>

</form>
    </div>
</div>

@endsection
