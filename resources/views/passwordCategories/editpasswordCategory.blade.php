@extends('layout')
@section('title',' Edit Password')
@section('content')



<div class="l-container">
    <div class="row center-md">
        <div class="c-form-block c-form-block--edit-pwdcat | radius-lg border-black border-1">
            <form action="{{ route('store.update', $data->id) }}" method="POST">
                @csrf
                <div class="col-xs-12 col-md-12 | my-48">
                    <div class="entryarea">
                            <x-form-field type="text" class="form-field border-1 border-black border-solid" id="title" name="title" value="{{$data->title}}"></x-form-field>
                        <x-form-label for="exampleInputEmail1" class="form-label">Title</x-form-label>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 | my-48">
                    <div class="entryarea">
                            <x-form-textarea class="form-field border-1 border-black border-solid" id="notes" name="notes" rows="1">{{$data->notes}}</x-form-textarea>
                            <x-form-label for="password" class="form-label">Additional Notes</x-form-label>
                    </div>
                </div>

                <div class="col-xs-12 col-md-12 text-center my-48">
                    <a class="btn btn-grey" href="/dashboard">Cancel</a>
                    <x-form-button type="submit" class="btn btn-green">Submit</x-form-button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
