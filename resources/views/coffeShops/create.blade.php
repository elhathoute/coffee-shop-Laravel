@extends('layouts.app')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add Coffe_shop</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-white border border-dark" href="{{ route('coffeShops.index') }}"> <i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('coffeShops.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>coffe_shop Name:</strong>
                        <input type="text" name="nom" class="form-control" placeholder="coffe_shop Name">
                        @error('nom')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>coffe_shop photo:</strong>
                        <input type="file" name="photo" class="form-control" >
                        @error('photo')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>coffe_shop prix:</strong>
                        <input type="number" name="prix" class="form-control" placeholder="Coffe_shop prix">
                        @error('prix')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                    <div class="form-group">
                        <strong>coffe_shop description:</strong>
                        <input type="text" name="description" class="form-control" placeholder="Coffe_shop description">
                        @error('description')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <select class="form-select" size="3" aria-label="size 3 select example">

                        <option value="1">One</option>

                      </select>
                </div>
                <button type="submit" class="btn btn-primary ms-3 mt-3 w-25"> <i class="fa fa-check-circle" aria-hidden="true"></i> Submit</button>
            </div>
        </form>
    </div>
@endsection
