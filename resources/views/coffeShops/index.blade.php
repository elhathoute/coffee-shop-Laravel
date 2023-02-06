<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coffe shops</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Coffe shops</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('coffeShops.create') }}"> Create coffe_shop</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Coff_shop.No</th>
                    <th>nom</th>
                    <th>photo</th>
                    <th>prix</th>
                    <th>description</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($coffeShops as $coffeShop)
                    <tr>
                        <td>{{ $coffeShop->id }}</td>
                        <td>{{ $coffeShop->nom }}</td>
                        <td>{{ $coffeShop->photo }}</td>
                        <td>{{ $coffeShop->prix }}</td>
                        <td>{{ $coffeShop->description }}</td>
                        <td>
                            <form action="{{ route('coffeShops.destroy',$coffeShop->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('coffeShops.edit',$coffeShop->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $coffeShops->links() !!}
    </div>
</body>
</html>

