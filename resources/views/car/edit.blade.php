@extends('home')

@section('content')
    <div class="container">
        <h2>Edit Car</h2>
<br>
        <a href="{{ route('car.index') }}" class="btn btn-secondary mb-3">Back</a>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('car.update', $car->id) }}" method="POST">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="brand">Brand:</label>
                <input type="text" class="form-control" id="brand" name="brand" value="{{ $car->brand }}">
            </div>

            <div class="form-group">
                <label for="model">Model:</label>
                <input type="text" class="form-control" id="model" name="model" value="{{ $car->model }}">

            </div>

            <div class="form-group">
                <label for="year">Year:</label>
                <input type="text" class="form-control" id="year" name="year" value="{{ $car->year }}">
            </div>
            <div class="form-group">
                <label for="rental_fee">Rent Fee:</label>
                <input type="text" class="form-control" id="rental_fee" name="rental_fee" value="{{ $car->rental_fee }}">
            </div>
            <br>    
            <button type="submit" class="btn btn-primary">Update Car</button>
        </form>
    </div>
@endsection
