@extends('home')

@section('content')
    <div class="container">
        <h2>Create New Rental</h2>

        <form action="{{ route('rental.index') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="customer_id" class="form-label">Select Customer:</label>
                <select name="customer_id" id="customer_id" class="form-control">
                    @foreach ($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="rental_date" class="form-label">Rental Date:</label>
                <input type="date" class="form-control" id="rental_date" name="rental_date" value="{{ old('rental_date') }}">
            </div>

            <div class="mb-3">
                <label for="return_date" class="form-label">Return Date:</label>
                <input type="date" class="form-control" id="return_date" name="return_date" value="{{ old('return_date') }}">
            </div>

            <div class="mb-3">
                <label for="rental_fee" class="form-label">Rent Fee:</label>
                <input type="text" class="form-control" id="rental_fee" name="rental_fee" value="{{ old('rental_fee') }}">
            </div>

            <button type="submit" class="btn btn-primary">Create Rental</button>
        </form>
    </div>
@endsection