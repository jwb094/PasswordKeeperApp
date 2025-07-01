@extends('layout')
@section('title','home')
@section('content')



<div class="l-container">
    <div class="row center-md">
        <div class="c-form-block">
            <form action="{{route('login.post')}}" method="POST" class=" mx-auto " style="width:500px;">
            @csrf
                <div class="col-xs-12
                        col-md-12
                        ">
                        <label for="exampleInputEmail1" class="form-label">Email Add</label>
                        <input type="email" class="border-1 border-black border-solid"  id="email"  name="email" >
                </div>
                <div class="col-xs-12
                        col-md-12
                        ">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="border-1 border-black border-solid"  id="password" name="password" >
                </div>
        
                <div class="col-xs-12 col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
        </div>
    </div>
</div>
@endsection