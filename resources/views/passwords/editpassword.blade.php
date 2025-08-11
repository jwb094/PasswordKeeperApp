@extends('layout')
@section('title','  Edit Password')
@section('content')


<div class="l-container">
        @if($errors->any())
        {{ implode('', $errors->all('<div>:message</div>')) }}
        @endif
</div>
<div class="l-container">
    <div class="row center-md">
    <form action="/updatepassword/{{$data->id}}" method="POST" class=" mx-auto " style="width:500px;">
    @csrf
    <div class="col-xs-12 col-md-12">
                <x-form-label for="website" class="block text-sm font-medium text-gray-700">Website</x-form-label>
                 <x-form-field type="text" class="border-1 border-black border-solid"  id="website"  name="website" value="{{$data->website}}"></x-form-field>
        </div>
    <div class="col-xs-12 col-md-12">
                <x-form-label for="username" class="block text-sm font-medium text-gray-700">Username</x-form-label>
                <x-form-field type="email" class="border-1 border-black border-solid"  id="username"  name="username" value="{{$data->username}}"></x-form-field>
        </div>
        <div class="col-xs-12 col-md-12">
                <x-form-label for="password" class="block text-sm font-medium text-gray-700">Password</x-form-label>
                <x-form-field type="password" class="border-1 border-black border-solid"  id="password" name="password" value="{{$data->password}}" ></x-form-field>
        </div>

        <div class="col-xs-12 col-md-12">
                <x-form-label for="notes" class="block text-sm font-medium text-gray-700">Additional Notes</x-form-label>
                <x-form-textarea  id="notes" name="notes"  cols="10" class="border-1 border-black border-solid">{{$data['notes']}}</x-form-textarea>
            
        </div>

        <div class="col-xs-12 col-md-12">
         <x-form-button class="btn btn-primary"  type="submit">Submit</x-form-field>
        </div>
        </form>
    </div>
</div>
@endsection