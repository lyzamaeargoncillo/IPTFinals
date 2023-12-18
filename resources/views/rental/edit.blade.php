@extends('home')

@section('content')
    <div class="container">
        <h2>Edit Rental</h2>

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

        <form action="{{ route('rental.update', $rental->id) }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="mb-3">
                <label for="customer_id" class="form-label">Select Customer:</label>
                <select name="customer_id" id="customer_id" class="form-control">
                    @foreach ($customers as $customer)
                        <option value="{{ $customer->id }}" @if($customer->id == $rental->customer_id) selected @endif>{{ $customer->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="rental_date" class="form-label">Rental Date:</label>
                <input type="date" class="form-control" id="rental_date" name="rental_date" value="{{ $rental->rental_date }}">
            </div>

            <div class="mb-3">
                <label for="return_date" class="form-label">Return Date:</label>
                <input type="date" class="form-control" id="return_date" name="return_date" value="{{ $rental->return_date }}">
            </div>

            <div class="mb-3">
                <label for="rental_fee" class="form-label">Rent Fee:</label>
                <input type="text" class="form-control" id="rental_fee" name="rental_fee" value="{{ $rental->rental_fee }}">
            </div>

            <button type="submit" class="btn btn-primary">Update Rental</button>
        </form>
    </div>
@endsection
