@extends('layouts.admin')

@section('title', 'Dashboard')

@section('page-content')
<div class="container-fluid p-4">
    <!-- Stats Cards -->
    <div class="row g-4">
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card-stats p-4">
                <h5 class="text-muted">Total Customers</h5>
                <h2 class="mt-2">1,234</h2>
                <span class="text-success">
                    <i class="fas fa-arrow-up"></i> 12%
                </span>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card-stats p-4">
                <h5 class="text-muted">Pending Invoices</h5>
                <h2 class="mt-2">$45,678</h2>
                <span class="text-danger">
                    <i class="fas fa-arrow-down"></i> 8%
                </span>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="row mt-5">
        <div class="col-12 col-lg-8">
            <div class="card-stats p-4">
                <h4 class="mb-4">Recent Invoices</h4>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action border-0">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6>Invoice #1234</h6>
                                <small>John Doe - $1,200</small>
                            </div>
                            <span class="badge bg-warning">Pending</span>
                        </div>
                    </a>
                    <!-- More items -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
