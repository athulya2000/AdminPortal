@extends('layouts.admin')

@section('title', 'Invoices')

@section('page-content')
<div class="container-fluid p-4">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
            <div class="card-custom p-4">
                <h3 class="text-primary mb-4">Edit Invoice</h3>
                
                <form action="{{ route('invoices.update', $invoice->id) }}" method="POST" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="form-floating">
                                <select class="form-select" id="customerName" name="customer_id">
                                    <option value="">Select Customer</option>
                                    @foreach($customers as $customer)
                                        <option value="{{ $customer->id }}" {{ old('customer_id', $invoice->customer_id) == $customer->id ? 'selected' : '' }}>
                                            {{ $customer->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <label for="customerName">Customer Name <span class="text-danger">*</span></label>
                            </div>
                            @error('customer_id')
                                <div class="text-danger">{{ $message }}</div> 
                            @enderror
                        </div>
                        
                        
                        
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="date" class="form-control" id="invoiceDate" name="date" value="{{ old('date', $invoice->date) }}" required>
                                <label for="invoiceDate">Invoice Date <span class="text-danger">*</span></label>
                            </div>
                            @error('date')
                                <div class="text-danger">{{ $message }}</div> 
                            @enderror
                        </div>
                        
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="number" step="0.01" class="form-control" id="amount" name="amount" value="{{ old('amount', $invoice->amount) }}" required placeholder="Amount">
                                <label for="amount">Amount<span class="text-danger">*</span></label>
                            </div>
                            @error('amount')
                                <div class="text-danger">{{ $message }}</div> 
                            @enderror
                        </div>
                        
                        <div class="col-12">
                            <div class="form-floating">
                                <select class="form-select" id="status" name="status" required>
                                    <option value="">Select Status</option>
                                    <option value="Unpaid" {{ old('status',$invoice->status) == 'Unpaid' ? 'selected' : '' }}>Unpaid</option>
                                    <option value="Paid" {{ old('status',$invoice->status) == 'Paid' ? 'selected' : '' }}>Paid</option>
                                    <option value="Cancelled" {{ old('status',$invoice->status) == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                                </select>
                                <label for="status">Status <span class="text-danger">*</span></label>
                            </div>
                            @error('status')
                                <div class="text-danger">{{ $message }}</div> 
                            @enderror
                        </div>
                        
                        <div class="col-12 d-flex justify-content-end gap-3">
                            <a href="{{ route('invoices.index') }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save Invoice</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
