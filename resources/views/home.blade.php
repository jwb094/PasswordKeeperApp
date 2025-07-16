@extends('layout')
@section('title','home')
@section('content')



<div class="l-container">
    <div class="row center-md">
        <div class="c-form-block | radius-lg border-black border-1">
            <form action="{{route('login.post')}}" method="POST" class=" c-form-block--login mx-auto my-48 ">
            @csrf
                <div class="col-xs-12
                        col-md-12
                        ">
                        <div class="entryarea">
                        <input type="email" class="border-1 border-black border-solid"  id="email"  name="email" required>
                        <label for="exampleInputEmail1" class="form-label">Email Add</label>
                        </div>
                </div>
                <div class="col-xs-12
                        col-md-12
                        ">
                        <div class="entryarea">
                            <input type="password" class="border-1 border-black border-solid"  id="password" name="password" required>
                            <label for="password" class="form-label">Password</label>
                        </div>
                </div>
        
                <div class="col-xs-12 col-md-12 |  my-12">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
        </div>
    </div>
</div>
@endsection