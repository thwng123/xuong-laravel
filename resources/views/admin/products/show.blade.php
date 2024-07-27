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
            @foreach ($model->toArray() as $field => $value)
                <tr>
                    <td>{{ ucfirst($field) }}</td>
                    <td>

                        @if ($field == 'supplier_id')
                            {{ $model->supplier->name }}
                        @else
                            {{ $value }}
                        @endif


                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-info" href="{{ route('admin.products.index') }}">Home</a>
@endsection
