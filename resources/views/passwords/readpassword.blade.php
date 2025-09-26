@extends('layout')
@section('title',' New Password')
@section('content')

<div class="l-container">
@if($errors->any())
    {{ implode('', $errors->all('message')) }}
@endif
</div>
<div class="l-container">
    <div class="row center-md flex justify-content-center">
        <h2> Password</h2>
    </div>
</div>
<div class="l-container">
    <div class="row center-md">
        <div class="c-form-block c-form-block--new-password-block  | radius-lg ">
            <form action=""  class="c-form-block--new-password mx-auto my-96 ">
                @csrf
                <div class="col-xs-12 col-md-12 | my-12">
                    <div class="entryarea">
                        <x-form-field type="text" class="form-field  border-1 border-black border-solid" id="website" name="website" value="{{$data->website}}" required></x-form-field>
                        <x-form-label class="form-label" for="website"> Website</x-form-label>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 | my-12">
                    <div class="entryarea">
                        <x-form-field type="text" class="form-field border-1 border-black border-solid" id="username" name="username" value="{{$data->username}}" required></x-form-field>
                        <x-form-label class="form-label" for="username"> Username</x-form-label>
                    </div>
                </div>
                <div class="col-xs-12
                            col-md-12
                            | my-12">
                    <div class="entryarea">
                        <x-form-field type="password" class="form-field border-1 border-black border-solid" id="password" name="password" value="{{$data->password}}" required></x-form-field>
                        <x-form-label for="password" class="form-label">Password</x-form-label>
                    </div>
                </div>
                <div class="col-xs-12
                            col-md-12
                            | my-12">
                    <div class="entryarea">
                        <x-form-textarea class="form-field border-1 border-black border-solid" id="notes" name="notes" rows="2" placeholder=" " required
                        >{{$data->notes}}</x-form-textarea>
                        <x-form-label for="notes" class="form-label">Additional Notes</x-form-label>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 | flex justify-content-evenly ">
                      <a class="btn btn-grey" href="/dashboard">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
