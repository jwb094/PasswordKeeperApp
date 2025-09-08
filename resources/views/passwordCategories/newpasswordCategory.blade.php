@extends('layout')
@section('title',' New Password')
@section('content')



<div class="l-container">
    <div class="row center-md">
       <div class="c-form-block c-form-block--new-pwdcat | radius-lg border-black border-1">
                <h1>New Category</h1>
            <form action="{{ route('store.data') }}" method="POST" class=" w-full mx-auto my-56 ">
                @csrf
                <div class="col-xs-12 col-md-12 | my-24 ">
                    <div class="entryarea">
                        <x-form-field type="text" class="form-field border-1 border-black border-solid" id="title" name="title" required></x-form-field>
                        <x-form-label for="title" class="form-label">Title</x-form-label>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 | my-48">
                    <div class="entryarea">
                        <x-form-textarea class="form-field border-1 border-black border-solid" id="notes" name="notes" rows="2" placeholder=" " required></x-form-textarea>
                        <x-form-label for="notes" class="form-label">Additional Notes</x-form-label>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 | my-48 mx-auto flex justify-content-center flex-row  align-items-center gap-12">
                    <a class="btn btn-grey" href="/dashboard">Cancel</a>
                    <x-form-button type="submit" class="btn btn-green">Submit</x-form-button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
