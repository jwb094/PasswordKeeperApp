@extends('layout')
@section('title','  New Password')
@section('content')



<div class="l-container">
    <div class="row center-md">
    <form action="{{ route('store.data') }}" method="POST">
    @csrf
        <div class="col-xs-12
                col-md-12
                ">
                <x-form-label for="title" class="block text-sm font-medium text-gray-700">Title</x-form-label>
                <x-form-field type="text" class="border-1 border-black border-solid"  id="title" name="title"  value="{{ old('title') }}"></x-form-field>  
                
        </div>
        <div class="col-xs-12 col-md-12">
                <x-form-label class="form-label"  id="notes"  name="notes" > Additional Notes </x-form-label>
                <x-form-textarea class="border-1 border-black border-solid" id="notes" name="notes" cols="10"> {{ old('notes') }}</x-form-textarea>
            
        </div> 

        <div class="col-xs-12 col-md-12">
        <a href="/dashboard">Cancel</a>
        <x-form-button class="btn btn-primary"  type="submit">Submit</x-form-field>
        </div>
        </form>
    </div>
</div>
@endsection