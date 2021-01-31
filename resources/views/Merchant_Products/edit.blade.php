@extends('layouts.app')

@section('container')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Merchant Product</h2>
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

<form action="{{ route('merchant_products.update', $merchantProduct->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Merchant Name:</strong>
                <select name="merchant_id" class="form-control">
                    <option value=""> -- Select One --</option>
                    @foreach($merchants as $merchant)
                    <option value="{{ $merchant->id}}" selected="{{ $merchantProduct->merchant_id == $merchant->id}}">
                        {{ $merchant->name }}
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
                    @foreach($products as $product)
                    <option value="{{$product->id}}" selected="{{ $merchantProduct->product_id == $product->id}}">
                        {{ $product->name }}
                    </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="number" name="price" value="{{ $merchantProduct->price }}"class="form-control" placeholder="Price">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection