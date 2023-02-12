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
<div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr class="bg-secondary text-white">
                    <th>Coff_shop.No</th>
                    <th>nom</th>
                    <th>photo</th>
                    <th>prix</th>
                    <th>description</th>
                    <th>Ctegory</th>
                    <th>menu_type</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($coffeShops as $coffeShop)

                    <tr class="bg-dark text-white ">

                        <td>{{ $coffeShop->id }}</td>
                        <td>{{ $coffeShop->nom }}</td>
                        <td class="text-center bg-white border border-dark"><img style="
                         width:50px;
                            height:50px;
                            text-align: center;
                            border-radius: 100%; "
                            class="border border-dark"
                            src="{{asset($coffeShop->photo) }}" alt="" srcset=""></td>
                        <td>{{ $coffeShop->prix }}</td>
                        <td title={{$coffeShop->description}}>{{ substr($coffeShop->description,0,20) }}</td>
                        @if(!empty( $coffeShop->nom_plat))
                        <td >{{ $coffeShop->nom_plat }}</td>
                        <td >{{ $coffeShop->menu_type }}</td>

                        @else
                        <td><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></td>
                        @endif
                        <td ">
                            <form action="{{ route('coffeShops.destroy',$coffeShop->id) }}" method="Post">
                                <div class="d-flex justify-content-evenly align-items-center mb-2">

                                <a class="btn btn-warning"  href="{{ route('coffeShops.edit',$coffeShop->id) }}"><i class="fa fa-edit"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </div>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
        {!! $coffeShops->links('pagination::bootstrap-5') !!}
    </div>


    @endsection

