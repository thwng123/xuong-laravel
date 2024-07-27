@extends('admin.layouts.master')

@section('content')
    {{-- <a href="{{route('admin.products.create')}}" class="btn btn-primary mb-3">Thêm mới</a> --}}

    <form action="{{ route('admin.products.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="">
            <div class="card">
                <div class="card-header"><strong>Insert</strong><small> Form</small></div>
                <div class="card-body card-block">
                    <div class="form-group">
                        <label for="supplier" class=" form-label">Supplier</label>
                        <select type="text" id="supplier"  class="form-control" name="supplier_id">
                            @foreach ($suppliers as $id => $name)
                                <option value="{{$id}}">{{$name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name" class=" form-control-label">Name</label>
                        <input type="text" id="name" placeholder="Enter your name" class="form-control"
                            name="name">
                    </div>
                    <div class="form-group">
                        <label for="description" class=" form-control-label">Description</label>
                        <input type="text" id="description" placeholder="Enter your description" class="form-control"
                            name="description">
                    </div>
                    <div class="form-group">
                        <label for="price" class=" form-control-label">Price</label>
                        <input type="text" id="price" placeholder="Enter your price" class="form-control"
                            name="price">
                    </div>
                    <div class="form-group">
                        <label for="stock_quantity" class=" form-control-label">Quantity</label>
                        <input type="text" id="stock_quantity" placeholder="Enter your quantity" class="form-control"
                            name="stock_quantity">
                    </div>
                 

                    <button type="submit" class="btn btn-danger">SAVE</button>
                    <a class="btn btn-info" href="{{ route('admin.products.index') }}">Home</a>

                </div>
            </div>
        </div>
    </form>
@endsection
