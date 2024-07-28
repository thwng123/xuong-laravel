@extends('admin.layouts.master')

@section('content')
    {{-- <a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-3">Thêm mới</a> --}}

    <table class="table">
        <thead>
            <tr>
                <th>Field</th>
                <th>Value</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($supplier->toArray() as $field => $value)
                <tr>
                    <td>{{ ucfirst($field) }}</td>
                    <td>

                        
                            {{ $value }}
                       


                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-info" href="{{ route('admin.suppliers.index') }}">Home</a>
@endsection
