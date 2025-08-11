@extends('layout')
@section('title','  Edit Password')
@section('content')



<div class="l-container">
    <div class="row center-md">
    <form action="{{ route('store.update', $data->id) }}" method="POST">
    @csrf
        <div class="col-xs-12
                col-md-12
                ">

                <x-form-label for="notes" class="block text-sm font-medium text-gray-700">Title</x-form-label>
                <x-form-field type="text" class="border-1 border-black border-solid"  id="title" name="title"  value="{{$data['title']}}"></x-form-field>  
        </div>
        <div class="col-xs-12
                col-md-12
                ">
                <x-form-label for="notes" class="block text-sm font-medium text-gray-700">Additional Notes</x-form-label>
                <x-form-textarea  class="border-1 border-black border-solid"   id="notes" name="notes" cols="10">{{$data['notes']}}</x-form-textarea>
        </div> 

        <div class="col-xs-12 col-md-12">
                <a href="/dashboard">Cancel</a>
                 <x-form-button class="btn btn-primary"  type="submit">Submit</x-form-field>
        </div>
        </form>
    </div>
</div>
@endsection