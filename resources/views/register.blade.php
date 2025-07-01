@extends('layout')
@section('title', 'register')
@section('content')

<div class="l-container">
    <div class="row center-md">
             <div class="c-form-block">
                <form action="{{route('registeration.post')}}" method="POST" class=" mx-auto " style="width:500px;">
                @csrf
                        <div class="col-xs-12
                                col-md-12
                                ">
                                <label for="firstname" class="">First Name</label>
                                <input type="text" class="border-1 border-black border-solid" id="firstname" name="firstname">
                        </div>
                        <div class="col-xs-12
                                col-md-12
                                ">
                                <label for="Lastname" class="form-label">Last Name</label>
                                <input type="text" class="border-1 border-black border-solid"  id="lastname" name="lastname">
                        </div>
                        <div class="col-xs-12
                                col-md-12
                                ">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
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


