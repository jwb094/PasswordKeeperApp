@extends('layout')
@section('title',' Edit Password')
@section('content')



<div class="l-container">
    <div class="row center-md">
        <div class="c-form-block">
            <form action="/updatepassword/{{$data->id}}" method="POST" class=" mx-auto " style="width:500px;">
                @csrf
                <div class="col-xs-12
                col-md-12
                ">
                    <label for="exampleInputEmail1" class="form-label">website</label>
                    <input type="email" class="border-1 border-black border-solid" id="website" name="website" value="{{$data->website}}">
                </div>
                <div class="col-xs-12
                col-md-12
                ">
                    <label for="exampleInputEmail1" class="form-label">username</label>
                    <input type="email" class="border-1 border-black border-solid" id="username" name="username" value="{{$data->username}}">
                </div>
                <div class="col-xs-12
                col-md-12
                ">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="border-1 border-black border-solid" id="password" name="password" value="{{$data->password}}">
                </div>

                <div class="col-xs-12
                col-md-12
                ">
                    <label for="password" class="form-label">Additional Notes</label>
                    <textarea class="border-1 border-black border-solid" id="notes" name="notes" cols="10"> {{$data->notes}}</textarea>

                </div>

                <div class="col-xs-12 col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
