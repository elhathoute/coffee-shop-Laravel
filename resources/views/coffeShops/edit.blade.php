<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>COffe shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit coffe shop</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('coffeShops.index') }}" enctype="multipart/form-data">
                        Back</a>
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
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Coffee_shop photo:</strong>
                        <input type="file" name="photo" class="form-control"
                            value="{{ $coffeShop->photo }}">
                        @error('photo')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
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
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
