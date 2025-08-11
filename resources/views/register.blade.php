@extends('layout')
@section('title', 'register')
@section('content')

<div class="l-container">
    <div class="row center-md">
    <form action="{{route('registeration.post')}}" method="POST" class=" mx-auto " style="width:500px;">
    @csrf
        <div class="col-xs-12 col-md-12">
                <x-form-label for="firstname" class="block text-sm font-medium text-gray-700"> First Name </x-form-label>
                <x-form-field class="border-1 border-black border-solid"  type="text" id="first_name" name="firstname" id="firstname"></x-form-field>
        </div>
        <div class="col-xs-12 col-md-12">
                 <x-form-label for="lastname" class="block text-sm font-medium text-gray-700"> Last Name </x-form-label>
                <x-form-field type="text" id="lastname" name="lastname" class="border-1 border-black border-solid" id="lastname"></x-form-field>
        </div>
        <div class="col-xs-12 col-md-12">
                <x-form-label for="email" class="block text-sm font-medium text-gray-700"> Email address </x-form-label>
                <x-form-field type="text" id="email" name="email" class="border-1 border-black border-solid"></x-form-field>
        </div>
        <div class="col-xs-12 col-md-12">
                <x-form-label for="password" class="block text-sm font-medium text-gray-700"> Password </x-form-label>
                <x-form-field type="password" id="password" name="password" class="border-1 border-black border-solid"></x-form-field>
        </div>

        <div class="col-xs-12 col-md-12">
        <x-form-button class="btn btn-primary"  type="submit">Submit</x-form-field>
        </div>
        </form>
    </div>
</div>

@endsection


