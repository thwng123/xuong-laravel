@extends('admin.layouts.master')

@section('content')
    {{-- <a href="{{route('admin.products.create')}}" class="btn btn-primary mb-3">Thêm mới</a> --}}

    <form action="{{ route('admin.customers.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="">
            <div class="card">
                <div class="card-header"><strong>Insert</strong><small> Form</small></div>
                <div class="card-body card-block">
                   
                    <div class="form-group">
                        <label for="name" class=" form-control-label">Name</label>
                        <input type="text" id="name" placeholder="Enter your name" class="form-control"
                            name="name">
                    </div>
                    <div class="form-group">
                        <label for="address" class=" form-control-label">Address</label>
                        <input type="text" id="address" placeholder="Enter your address" class="form-control"
                            name="address">
                    </div>
                    <div class="form-group">
                        <label for="phone" class=" form-control-label">Phone</label>
                        <input type="number" id="phone" placeholder="Enter your phone" class="form-control"
                            name="phone">
                    </div>
                    <div class="form-group">
                        <label for="email" class=" form-control-label">Email</label>
                        <input type="text" id="email" placeholder="Enter your email" class="form-control"
                            name="email">
                    </div>
                 

                    <button type="submit" class="btn btn-danger">SAVE</button>
                    <a class="btn btn-info" href="{{ route('admin.suppliers.index') }}">Home</a>

                </div>
            </div>
        </div>
    </form>
@endsection
