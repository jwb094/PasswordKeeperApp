@extends('layout')
@section('title','home')
@section('content')



<div class="l-container">
    <div class="row center-md">
        <div class="c-login-form">
            <form action="{{route('login.post')}}" method="POST" class=" mx-auto " style="width:500px;">
            @csrf
                <div class="col-xs-12 col-md-12">
                        <x-form-label for="email" class="block text-sm font-medium text-gray-700">Email</x-form-label>
                        <x-form-field class="border-1 border-black border-solid"  type="text" id="email" name="email"></x-form-field>
                </div>
                <div class="col-xs-12
                        col-md-12
                        ">
                        <x-form-label for="password" class="block text-sm font-medium text-gray-700">Password</x-form-label>
                        <x-form-field class="border-1 border-black border-solid"  type="password" id="password" name="password" ></x-form-field>
                </div>
        
                <div class="col-xs-12 col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection