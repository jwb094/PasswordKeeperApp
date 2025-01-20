@extends('layout')
@section('title','  Read Password')
@section('content')




<div class="l-container">
    <div class="row center-md">


    <div class="col-xs-12
                col-md-12
                ">
                <label for="exampleInputEmail1" class="form-label">Website</label>
                <input type="email" class="border-1 border-black border-solid"  id="websiteZ"  name="websiteZ" value="{{$data['website']}}" readonly >
        </div>
        <div class="col-xs-12
                col-md-12
                ">
                <label for="exampleInputEmail1" class="form-label">username</label>
                <input type="email" class="border-1 border-black border-solid"  id="username"  name="username" value="{{$data['username']}}" readonly >
        </div>
        <div class="col-xs-12
                col-md-12
                ">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="border-1 border-black border-solid"  id="password" name="password" value="{{$data['password']}}" readonly>
        </div>

        <div class="col-xs-12
                col-md-12
                ">
                <label for="password" class="form-label">Additional Notes</label>
                <textarea class="border-1 border-black border-solid"   id="notes" name="notes" cols="10"  readonly>value="{{$data['notes']}}"</textarea>
            
        </div>

        <div class="col-xs-12 col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/dashboard" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
        </div>
  
    </div>
</div>
@endsection