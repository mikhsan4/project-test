@extends('layouts.app')

@section('container')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Assign Merchant Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('merchant_products.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('merchant_products.store') }}" method="POST">
    @csrf

    <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Merchant Name:</strong>
                <select name="merchant_id" class="form-control">
                    <option value=""> -- Select One --</option>
                    @foreach($merchants as $merchants)
                    <option value="{{ $merchants->id }}">
                        {{ $merchants->name }}
                    </option>
                    @endforeach
                </select>
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Name:</strong>
                <select name="product_id" class="form-control">
                    <option value=""> -- Select One --</option>
                    @foreach($products as $products)
                    <option value="{{ $products->id }}">
                        {{ $products->name }}
                    </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="number" name="price" class="form-control" placeholder="Price">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>


</form>
@endsection