@extends('layouts.app')

@section('content')

 <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left d-flex justify-content-between align-items-center mb-2">
                    <h2>Reservations</h2>
                </div>

            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr class="bg-secondary text-white">
                        <th>reserv.No</th>
                        <th>day</th>
                        <th>hour</th>
                        <th>full_name</th>
                        <th>phone</th>
                        <th>personne</th>

                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($reservations as $reservation)

                        <tr class="bg-dark text-white ">

                            <td>{{ $reservation->id }}</td>
                            <td>{{ $reservation->day }}</td>
                            <td >{{ $reservation->hour }}</td>
                            <td>{{ $reservation->full_name }}</td>
                            <td >{{$reservation->phone}}</td>
                            <td >{{$reservation->personne}}</td>


                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
            {!! $reservations->links('pagination::bootstrap-5') !!}
        </div>

@endsection
