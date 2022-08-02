@extends('category.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Show product</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('category.index') }}"> Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Name : </strong>
                {{ $category->category_name }}
            </div>
        </div>
        <div class="row">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Qty.</th>
            </tr>
            @foreach ($category->product as $product)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->product_desc }}</td>
                    <td>{{ $product->product_qty }}</td>
                </tr>
            @endforeach
        </table>
        </div>

@endsection


