@extends('layouts.app')

@section('content');

    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit coffe shop</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-white border border-dark" href="{{ route('coffeShops.index') }}" enctype="multipart/form-data"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('coffeShops.update',$coffeShop->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Coffe_shop Name:</strong>
                        <input type="text" name="nom" value="{{ $coffeShop->nom }}" class="form-control"
                            placeholder="coffe_shop name">
                        @error('nom')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Coffee_shop photo:</strong>
                        <input type="file" name="photo" id="input-image" class="form-control"
                        accept="image/*"
                            value="{{ $coffeShop->photo }}">
                        @error('photo')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror

                    </div>
                </div>
                <div class="col-6  text-center mt-2">
                    <img id="preview-image" src="{{asset($coffeShop->photo) }}"
                    style="
                    width:50px;
                       height:50px;
                       text-align: center;
                       border-radius: 100%;
                    alt="Preview Image">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Coffe_shop price:</strong>
                        <input type="number" name="prix" value="{{ $coffeShop->prix }}" class="form-control"
                            placeholder="coffe shop prix">
                        @error('prix')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Coffe_shop description:</strong>
                        <input type="text" name="description" value="{{ $coffeShop->description }}" class="form-control"
                            placeholder="coffe shop description">
                        @error('description')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 mt-2">
                    <select name="type_plat" class="form-select" size="3" aria-label="size 3 select example">
                         @foreach ( $type_plat as $type )


                            <option value="{{$type->id}}" {{($coffeShop->type_plat==$type->id)? 'selected' : ''}} >{{$type->nom}}</option>
                        @endforeach

                      </select>
                      @error('type_plat')
                      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                      @enderror
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6 mt-2">
                    <select name="menu_type" class="form-select" size="3" aria-label="size 3 select example">

                        
                        <option value="Breakfast" {{( $coffeShop->menu_type=="Breakfast")?'selected':''}} >Breakfast</option>
                        <option value="Dinner" {{( $coffeShop->menu_type=="Dinner")?'selected':''}}>Dinner</option>
                        <option value="Lunch" {{( $coffeShop->menu_type=="Lunch")?'selected':''}}>Lunch</option>



                      </select>
                      @error('menu_type')
                      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                      @enderror
                </div>
                <button type="submit" class="btn btn-primary mx-3 w-25 mt-3"><i class="fa fa-check-circle" aria-hidden="true"></i> Submit</button>
            </div>
        </form>
    </div>

@endsection
