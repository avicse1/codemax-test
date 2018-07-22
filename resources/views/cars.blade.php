@extends('layout')
@section('content')
    <div class="container">
        <h2>
            Add Cars
        </h2>
        <form method="POST" action="{{route('store_cars')}}" accept-charset="UTF-8" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6 form-group">
                <label>Manufacturer</label>
                @if ($errors->has('manufacturer'))
                <span class="has-error error-position">{{ $errors->first('manufacturer') }}</span>
                @endif
                <select class="form-control" name="manufacturer" id="manufacturer">
                    <option value="0">Select manufacturer</option>
                    @foreach($manufacturers as $manufacturer)
                    <option value="{{$manufacturer->id}}">{{$manufacturer->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 form-group">
                <label>Model name</label>
                @if ($errors->has('model_name'))
                <span class="has-error error-position">{{ $errors->first('model_name') }}</span>
                @endif
                <input type="text" class="form-control" name="model_name" id="model_name" placeholder="Enter model name" value="{{old('model_name')}}">
            </div>
                
            <div class="col-md-6 form-group">
                <label>Color</label>
                @if ($errors->has('color'))
                <span class="has-error error-position">{{ $errors->first('color') }}</span>
                @endif
                <input type="text" class="form-control" name="color" id="color" placeholder="Enter color" value="{{old('color')}}">
            </div>
            <div class="col-md-6 form-group">
                <label>Manufacturing year</label>
                @if ($errors->has('manufacturing_year'))
                <span class="has-error error-position">{{ $errors->first('manufacturing_year') }}</span>
                @endif
                <input type="text" class="form-control" name="manufacturing_year" id="manufacturing_year" placeholder="Enter Manufacturing Year" value="{{old('manufacturing_year')}}">
            </div>
            <div class="col-md-6 form-group">
                <label>Registration number</label>
                @if ($errors->has('registration_number'))
                <span class="has-error error-position">{{ $errors->first('registration_number') }}</span>
                @endif
                <input type="text" class="form-control" name="registration_number" id="registration_number" placeholder="Enter registration number" value="{{old('registration_number')}}">
            </div>
            <div class="col-md-6 form-group">
                <label>Quantity</label>
                @if ($errors->has('quantity'))
                <span class="has-error error-position">{{ $errors->first('quantity') }}</span>
                @endif
                <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Enter registration number" value="{{old('quantity')}}">
            </div>
            <div class="form-group col-md-12">
                <textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Description about the car"></textarea>
            </div>
            <div class="form-group col-md-12">
                <label>Image</label>
                @if ($errors->has('photos'))
                <span class="has-error error-position">{{ $errors->first('photos') }}</span>
                @endif
                <input class="form-control" type="file" name="photos[]" multiple />
            </div>
            
            <button type="submit" class="btn btn-primary">Add Models</button>
        </form>
    </div>
    <script>
    // (function(){
    //     var options = {};
    //     $('.js-uploader__box').uploader(options);
    // }());
    </script>
@endsection