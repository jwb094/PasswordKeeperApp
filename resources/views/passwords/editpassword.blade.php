@extends('layout')
@section('title',' Edit Password')
@section('content')


<div class="l-container">
        @if($errors->any())
            {{ implode('', $errors->all('<div>:message</div>')) }}
        @endif
</div>
<div class="l-container">
    <div class="row center-md flex justify-content-center">
        <h2>Edit {{$data->website}} Password details</h2>
    </div>
</div>
<div class="l-container">
    <div class="row center-md">
        <div class="c-form-block c-form-block--editpassword-block | my-56 md.my-0">
            <form
                action="/updatepassword/{{$data->id}}" method="POST" class="c-form-block--edit-password mx-auto my-56" style="">
                @csrf
                <div class="col-xs-12 col-md-12 | mt-48 mb-12">
                    <div class="entryarea">
                        <x-form-field type="text" class="form-field border-1 border-black border-solid" id="website" name="website" value="{{$data->website}}" required></x-form-field>
                        <x-form-label for="website" class="form-label">Website</x-form-label>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 | mb-12">
                    <div class="entryarea">
                        <x-form-field type="text" class="form-field border-1 border-black border-solid" id="username" name="username" value="{{$data->username}}" required></x-form-field>
                        <x-form-label for="username" class="form-label">username</x-form-label>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 | mb-12">
                    <div class="entryarea">
                        <x-form-field type="text" class="form-field border-1 border-black border-solid" id="password" name="password" value="{{$data->password}}" required></x-form-field>
                        <x-form-label for="password" class="form-label">Password</x-form-label>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 | mb-12">
                    <div class="entryarea">
                        {{-- <x-form-textarea class="form-field border-1 border-black border-solid" id="notes" name="notes"rows="1"> {{ isset($data->notes) ? $data->notes : '' }}</x-form-textarea> --}}
                    <x-form-textarea class="form-field border-1 border-black border-solid" id="notes" name="notes" rows="1"> {{ isset($data->notes) ? $data->notes : '' }}</x-form-textarea>
                        <x-form-label for="password" class="form-label">Additional Notes</x-form-label>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 | mb-12">
                    <a class="btn btn-grey" href="/dashboard">Cancel</a>
                    <x-form-button type="submit" class="btn btn-green">Submit</x-form-button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
