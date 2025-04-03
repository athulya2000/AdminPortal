@extends('layouts.admin')

@section('title', 'Invoices')

@section('page-content')
<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="text-primary">Invoices</h3>
        <a href="{{ route('invoices.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i>Add New
        </a>
    </div>

    <div class="card-custom p-4">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="bg-light">
                    <tr>
                        <td>ID</td>
                        <th>Customer</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($invoices as $invoice)
                    <tr>
                        <td>{{$invoice->id}}</td>
                        <td>{{$invoice->customer->name}}</td>
                        <td>{{$invoice->date}}</td>
                        <td>{{$invoice->amount}}</td>
                        <td>{{$invoice->status}}</td>
                        <td>
                            <a href="{{route('invoices.edit', $invoice->id)}}" class="btn btn-sm btn-warning me-2">
                                <i class="fas fa-edit"></i>
                            </a>
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

