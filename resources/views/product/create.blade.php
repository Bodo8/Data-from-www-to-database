@extends('app')
@section('content')
    <div class="container">
        <div>
            <h1>Dodanie produktu</h1>
            <h1> </h1>
        </div>

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form method="post" action="{{url('product')}}">
            <div class="form-group row">
                {{csrf_field()}}
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg"
                           id="lgFormGroupInput" placeholder="name" name="name" value="{{ old('name') }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Price</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg"
                           id="lgFormGroupInput" placeholder="number" name="price" value="{{ old('price') }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Availability</label>
                <div class="col-sm-10">
                    <select id='availability' name='availability'>
                        <option>----</option>
                       @foreach ($availabilities as $key => $value) 
                    <option value='{{$key}}'>{{$value}}</option>
                     @endforeach
                     </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-2"></div>
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection
