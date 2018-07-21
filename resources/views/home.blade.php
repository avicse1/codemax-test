@extends('layout')
@section('content')
    <div class="container">
        <h2 class="text-center1">
            Add Manufacturer
        </h2>
        <form class="col-md-6">
            <div class="form-group">
                <label for="manufacturer">Manufacturer</label>
                <input type="text" class="form-control" id="manufacturer" placeholder="Enter manufacturer name">
            </div>
            <button type="submit" class="btn btn-primary">Add manufacturer</button>
        </form>
    </div>
@endsection