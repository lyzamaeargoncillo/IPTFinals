@extends('home')

@section('content')
    <div class="container">
        <h2>Customers List</h2>

    <a href="{{ route('customer.create') }}" class="btn btn-primary btn-box-hover">Add Customer</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @forelse($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->username }}</td>
                <td>{{ $customer->email }}</td>
                <td>
                    {{-- <a href="{{ route('customer.show', $customer->id) }}" class="btn btn-info btn-sm">View</a> --}}
                    <a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-warning btn-box-hover-edit">Edit</a>
                    <form action="{{ route('customer.destroy', $customer->id) }}" method="post" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-box-hover-del" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No customers found.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>

@endsection
