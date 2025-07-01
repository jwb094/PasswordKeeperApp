@extends('layout')
@section('title','  New Password')
@section('content')

<div class="l-container">
@if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
</div>
<div class="l-container">
    <div class="row center-md">
    <form action="{{route('savepassword')}}" method="POST" class=" mx-auto " style="width:500px;">
    @csrf
        <div class="col-xs-12 col-md-12">
                <x-form-label for="website" class="block text-sm font-medium text-gray-700">Website</x-form-label>
                <x-form-field type="text" class="border-1 border-black border-solid"  id="website" name="website"></x-form-field>     
        </div>
        <div class="col-xs-12 col-md-12 ">
                <x-form-label class=""  id="username"  name="username" > Username </x-form-label>
                <x-form-field type="email" class="border-1 border-black border-solid"  id="username"  name="username" ></x-form-field>  
        </div>
        <div class="col-xs-12 col-md-12 ">
                <x-form-label class=""  id="password"  name="password" > Password </x-form-label>
                <x-form-field type="password" class="border-1 border-black border-solid"  id="password"  name="password" ></x-form-field>
        </div>
        <div class="col-xs-12 col-md-12">
                <x-form-label class=""  id="notes"  name="notes" > Additional Notes </x-form-label>
                <x-form-textarea class="border-1 border-black border-solid"   id="notes" name="notes" cols="10" rows="5">{{$data['notes'] ?? ''}}</x-form-textarea>
        </div>
        <div class="col-xs-12 col-md-12">
                <x-form-button class="btn btn-primary"  type="submit">Submit</x-form-field>
        </div>
        </form>
    </div>
</div>
@endsection