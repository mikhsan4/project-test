@extends('layouts.app')

@section('title', 'Merchant')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 class="mt-2">Merchant List</h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('merchants.create') }}" title="Create a merchant"> <i class="fas fa-plus-circle"></i>
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

<table class="table table-bordered table-responsive-lg">
    <tr>
        <th>No</th>
        <th>Merchant Name</th>
        <th>Telephone Number</th>
        <th>Email</th>
        <th>Address</th>
        <th>Date Created</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($merchants as $merchant)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $merchant->name }}</td>
        <td>{{ $merchant->phone_number }}</td>
        <td>{{ $merchant->email }}</td>
        <td>{{ $merchant->address }}</td>
        <td>{{ $merchant->created_at }}</td>
        <td>
            <form action="{{ route('merchants.destroy', $merchant->id) }}" method="POST">

                <a href="{{ route('merchants.show', $merchant->id) }}" title="show">
                    <i class="fas fa-eye text-success  fa-lg"></i>
                </a>

                <a href="{{ route('merchants.edit', $merchant->id) }}">
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

{!! $merchants->links() !!}

@endsection