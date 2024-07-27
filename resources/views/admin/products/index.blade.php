@extends('admin.layouts.master')

@section('content')
    <a href="{{route('admin.products.create')}}" class="btn btn-primary mb-3">Thêm mới</a>
  
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Supplier</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                
        
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->stock_quantity}}</td>
                <td>{{$item->supplier->name}}</td>
                <td>
                    <a class="btn btn-info mb-3"  href="{{ route('admin.products.show', $item->id) }}">Show</a>
                    <a class="btn btn-danger mb-3"  href="{{  route('admin.products.edit', $item->id ) }}">Edit</a>
        
                    <form action="{{  route('admin.products.destroy', $item->id ) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary" onclick="return confirm('are you sure?')">Delete</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{$data->links()}}
@endsection
