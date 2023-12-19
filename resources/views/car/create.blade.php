@extends('home')

@section('content')
    <div class="container">
        <h2>Add New Car</h2>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('car.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="brand">Brand:</label>
                <input type="text" class="form-control" id="brand" name="brand" required>
            </div>

            <div class="form-group">
                <label for="model">Model:</label>
                <input type="text" class="form-control" id="model" name="model" required>
            </div>

            <div class="form-group">
                <label for="year">Year:</label>
                <input type="number" class="form-control" id="year" name="year" required>
            </div>

            <div class="form-group">
                <label for="rental_fee">Rent Fee:</label>
                <input type="number" class="form-control" id="rental_fee" name="rental_fee" required>
            </div>

            <div class="mb-3">
                <label for="rental_id" class="form-label">Select Rental ID:</label>
                <select name="rental_id" id="rental_id" class="form-control">
                    @foreach ($rentals as $rental)
                        <option value="{{ $rental->id }}">{{ $rental->name }}</option>
                    @endforeach
                </select>
            </div>


            <br> <br>
            <button type="submit" class="btn btn-primary">Add Car</button>
        </form>
    </div>
@endsection
