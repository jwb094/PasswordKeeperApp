@extends('layout')
@section('title',' New Password')
@section('content')



<div class="l-container">
    <div class="row center-md">
        <div class="col-sm-12 col-md-12 c-form-block">
            <form action="{{route('savepassword')}}" method="POST" class=" mx-auto " style="width:500px;">
                @csrf
                <div class="col-xs-12
                            col-md-12
                            ">
                    <!-- <label for="exampleInputEmail1" class="form-label">username</label> -->
                    <x-form-label for="title"> Website </x-form-label>
                    <input type="text" class="border-1 border-black border-solid" id="website" name="website">

                </div>
                <div class="col-xs-12
                            col-md-12
                            ">
                    <!-- <label for="exampleInputEmail1" class="form-label">username</label> -->
                    <x-form-label for="title"> Username </x-form-label>
                    <input type="email" class="border-1 border-black border-solid" id="username" name="username">

                </div>
                <div class="col-xs-12
                            col-md-12
                            ">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="border-1 border-black border-solid" id="password" name="password">
                </div>

                <div class="col-xs-12
                            col-md-12
                            ">
                    <label for="password" class="form-label">Additional Notes</label>
                    <textarea class="border-1 border-black border-solid" id="notes" name="notes" cols="10"></textarea>

                </div>

                <div class="col-xs-12 col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
