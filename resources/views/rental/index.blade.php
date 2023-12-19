@extends('home')

@section('content')
    <div class="container">
        <h2>Rentals</h2>


        <a href="{{ route('rental.create') }}" class="btn btn-primary btn-box-hover">Add New Rental</a>


        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if ($rentals && count($rentals) > 0)
        <table class="table mt-3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Customer</th>
                        <th>Car</th>
                        <th>Rental Date</th>
                        <th>Return Date</th>
                        <th>Rent Fee</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rentals as $rental)
                    <tr>
                        <td>{{ $rental->id }}</td>
                        <td>{{ optional($rental->customer)->name }}</td>
                        <td>
                            @if ($rental->car)
                                @foreach ($rental->car as $car)
                                    {{ $car->brand }} {{ $car->model }}
                                    <br>
                                @endforeach
                            @else
                                No car information available
                            @endif
                            </td>
                            <td>{{ $rental->rental_date }}</td>
                            <td>{{ $rental->return_date }}</td>
                            <td>{{ $rental->rental_fee }}</td>
                            <td>
                                <a href="{{ route('rental.edit', $rental->id) }}" class="btn btn-warning btn-box-hover-edit">Edit</a>
                                <form action="{{ route('rental.destroy', $rental->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-box-hover-del" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No rentals available.</p>
        @endif
    </div>
@endsection
