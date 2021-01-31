@extends('layouts.app')

@section('title', 'Project Test')

@section('container')
<div class="container">
    <div class="row">
        <div class="column">
            <h1 class="mt-2">Hemlooo</h1>
    <!-- masih salah -->
            <form class="form-inline my-2 my-lg-0" type="get" action=" {{ url('/search') }}">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Search Product</strong>
                        <input type="search" name="query" class="form-control" placeholder="Search Product">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection