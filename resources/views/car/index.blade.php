@extends('home')

@section('content')
    <div class="container">
        <h2>Car List</h2>

            <a href="{{ route('car.create') }}" class="btn btn-primary btn-box-hover">Add Car</a>


        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Year</th>
                    <th>Rent Fee</th>
                    <th>Rental ID</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($cars as $car)
                    <tr>
                        <td>{{ $car->id }}</td>
                        <td>{{ $car->brand }}</td>
                        <td>{{ $car->model }}</td>
                        <td>{{ $car->year }}</td>
                        <td>{{ $car->rental_fee }}</td>
                        <td>{{ $car->rental_id }}</td>
                        <td>
                                <a href="{{ route('car.edit', $car->id) }}" class="btn btn-warning btn-box-hover-edit">Edit</a>
                                <form action="{{ route('car.destroy', $car->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-box-hover-del" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">No cars available.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
