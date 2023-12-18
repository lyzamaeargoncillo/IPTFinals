@extends('home')

@section('content')
    <div class="container">
        <h2>Edit Customer</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('customer.update', $customer->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" value="{{ $customer->name }}" required>
            </div>
            <div class="form-group">
                <label for="username">User Name:</label>
                <input type="text" name="username" class="form-control" value="{{ $customer->username }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" value="{{ $customer->email }}" required>
            </div>
            <br> <br>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
