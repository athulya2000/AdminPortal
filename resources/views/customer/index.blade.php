@extends('layouts.admin')

@section('title', 'Customers')

@section('page-content')
<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="text-primary">Customers</h3>
        <a href="{{ route('customers.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i>Add New
        </a>
    </div>

    <div class="card-custom p-4">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="bg-light">
                    <tr>
                        <td>ID</td>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                    <tr>
                        <td>{{$customer->id}}</td>
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->email}}</td>
                        <td>{{$customer->phone}}</td>
                        <td>{{$customer->address}}</td>
                        <td>
                            <a href="{{route('customers.edit', $customer->id)}}" class="btn btn-sm btn-warning me-2">
                                <i class="fas fa-edit"></i>
                            </a>
                            {{-- <a href="#" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i>
                            </a> --}}
                        </td>
                    </tr>   
                    @endforeach
                    
                    <!-- More rows -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

