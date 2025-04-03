@extends('layouts.admin')

@section('title', 'Customers')

@section('page-content')
<div class="container-fluid p-4">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
            <div class="card-custom p-4">
                <h3 class="text-primary mb-4">Add New Customer</h3>
                
                <form action="{{ route('customers.store') }}" method="POST">
                    @csrf
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="Name" name="name" value="{{ old('name') }}" placeholder="name">
                                <label for="firstName">Name <span class="text-danger">*</span></label>
                            </div>
                            @error('name')
                                <div class="text-danger">{{ $message }}</div> 
                            @enderror
                        </div>
                        
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="name@example.com">
                                <label for="email">Email address<span class="text-danger">*</span></label>
                            </div>
                            @error('email')
                                <div class="text-danger">{{ $message }}</div> 
                            @enderror
                        </div>
                        
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" placeholder="Phone">
                                <label for="phone">Phone Number<span class="text-danger">*</span></label>
                            </div>
                            @error('phone')
                                <div class="text-danger">{{ $message }}</div> 
                            @enderror
                        </div>
                        
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" id="address" name="address" value="{{ old('address') }}" placeholder="Address" style="height: 100px"></textarea>
                                <label for="address">Address</label>
                            </div>
                            @error('address')
                                <div class="text-danger">{{ $message }}</div> 
                            @enderror
                        </div>
                        
                        <div class="col-12 d-flex justify-content-end gap-3">
                            <a href="{{ route('customers.index') }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save Customer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
