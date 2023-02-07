@extends('layouts.app')

@section('content')
                {{-- alert --}}
                @if ($message = Session::get('success'))
                        <div class="container mt-2">
                            <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                @endif
                {{-- end alert --}}
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left d-flex justify-content-between align-items-center mb-2">
                    <h2>Coffe shops</h2>
                    <a class="btn btn-success" href="{{ route('coffeShops.create') }}"> <i class="fa fa-plus"></i></a>

                </div>
                {{-- <div class="pull-right mb-2">
                </div> --}}
            </div>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr class="bg-secondary text-white">
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

                    <tr class="bg-dark text-white">

                        <td>{{ $coffeShop->id }}</td>
                        <td>{{ $coffeShop->nom }}</td>
                        <td>{{$coffeShop->photo }}</td>
                        <td>{{ $coffeShop->prix }}</td>
                        <td>{{ $coffeShop->description }}</td>
                        <td ">
                            <form action="{{ route('coffeShops.destroy',$coffeShop->id) }}" method="Post">
                                <div class="d-flex justify-content-evenly align-items-center mb-2">
                                <a class="btn btn-warning"  href="{{ route('coffeShops.edit',$coffeShop->id) }}"><i class="fa fa-edit"></i></a>
                                @csrf
                                @method('DELETE')
                                <a type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </div>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $coffeShops->links() !!}
    </div>

    @endsection

