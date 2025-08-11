@extends('layout')
@section('title','  Read Password')
@section('content')




<div class="l-container">
    <div class="row center-md">


    <div class="col-xs-12
                col-md-12
                ">
                <x-form-label for="password" class="block text-sm font-medium text-gray-700">Website</x-form-label>
                <x-form-field type="text" id="website" name="website" class="border-1 border-black border-solid" value="{{$data['website']}}" readonly ></x-form-field>
        </div>
        <div class="col-xs-12
                col-md-12
                ">
                <x-form-label for="password" class="block text-sm font-medium text-gray-700">Username</x-form-label>
                <x-form-field type="text" id="website" name="website" class="border-1 border-black border-solid" value="{{$data['username']}}" readonly ></x-form-field>
        </div>
        <div class="col-xs-12
                col-md-12
                ">
                <x-form-label for="password" class="block text-sm font-medium text-gray-700">Password</x-form-label>
                <x-form-field type="text" id="password" name="password" class="border-1 border-black border-solid" value="{{$data['password']}}" readonly ></x-form-field>
                
        </div>

        <div class="col-xs-12 col-md-12">
                <x-form-label for="password" class="block text-sm font-medium text-gray-700">Additional Notes</x-form-label>
                <x-form-textarea id="notes" name="notes" cols="10" class="border-1 border-black border-solid" value="{{$data['notes']}}" readonly >{{$data['notes']}}</x-form-textarea>
            
        </div>

        <div class="col-xs-12 col-md-12">

        <a href="/dashboard" class="text-sm/6 font-semibold text-gray-900">Back To dashboard</a>
        
        </div>
  
    </div>
</div>
@endsection