@extends('layouts.app')

@section('title', 'Merchant Product')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 class="mt-2">Merchant Product List</h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('merchant_products.create') }}" title="Create merchant product"> <i class="fas fa-plus-circle"></i>
                </a>
            </div>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<!-- masih salah dan belum selesai -->
<div class="pull-right">
    <form class="form-inline my-2 my-lg-0" type="get" action=" {{ url('/search') }}">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Search by Category</strong>
                <div>
                    <input type="search" name="query" class="form-control" placeholder="Search Category">
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<!-- masih salah dan belum selesai -->

<table class="table table-bordered table-responsive-lg">
    <tr>
        <th>No</th>
        <th>Merchant</th>
        <th>Product</th>
        <th>Price</th>
        <th>Category</th>
        <th>Date Created</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($merchantproducts as $mp)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $mp->merchantName }}</td>
        <td>{{ $mp->productName }}</td>
        <td>{{ $mp->price }}</td>
        <td>{{ $mp->categoryName }}</td>
        <!-- <td>{{ $mp->price}}</td> -->
        <td>{{ $mp->created_at }}</td>
        <td>
            <form action="{{ route('merchant_products.destroy', $mp->id) }}" method="POST">

                <a href="{{ route('merchant_products.show', $mp->id) }}" title="show">
                    <i class="fas fa-eye text-success  fa-lg"></i>
                </a>

                <a href="{{ route('merchant_products.edit', $mp->id) }}">
                    <i class="fas fa-edit  fa-lg"></i>

                </a>

                @csrf
                @method('DELETE')

                <button type="submit" title="delete" style="border: none; background-color:transparent;">
                    <i class="fas fa-trash fa-lg text-danger"></i>

                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>


@endsection