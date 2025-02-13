@extends('layouts.app')

@section('title', 'Categories')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 class="mt-2">Category List</h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('categories.create') }}" title="Create a category"> <i class="fas fa-plus-circle"></i>
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
        <th>Name</th>
        <th>Date Created</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($categories as $category)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $category->name }}</td>
        <td>{{ $category->created_at }}</td>
        <td>
            <form action="{{ route('categories.destroy', $category->id) }}" method="POST">

                <!-- <a href="{{ route('categories.show', $category->id) }}" title="show">
                    <i class="fas fa-eye text-success  fa-lg"></i>
                </a>

                <a href="{{ route('categories.edit', $category->id) }}">
                    <i class="fas fa-edit  fa-lg"></i>

                </a> -->

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

{!! $categories->links() !!}

@endsection