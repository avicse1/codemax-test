@extends('layout')
@section('content')
    <div class="container">
        <h2>
            Add Manufacturer
        </h2>
        <form id="manufacturer" class="col-md-6" method="POST" action="{{route('store_manufacturer')}}">
           @csrf
            <div class="form-group">
                <label for="manufacturer">Manufacturer</label>
                @if ($errors->has('manufacturer'))
                    <span class="has-error error-position">{{ $errors->first('manufacturer') }}</span>
                @endif
                <input type="text" class="form-control" name="manufacturer" id="manufacturer" placeholder="Enter manufacturer name" value="{{old('manufacturer')}}">
            </div>
            <button type="submit" class="btn btn-primary">Add manufacturer</button>
        </form>
    </div>
@endsection