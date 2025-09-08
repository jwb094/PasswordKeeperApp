@extends('layout')
@section('title',' New Password')
@section('content')

<div class="l-container">
@if($errors->any())
    {{ implode('', $errors->all('message')) }}
@endif
</div>
<div class="l-container">
    <div class="row center-md">
        <div class="c-form-block c-form-block--edit-pwd | radius-lg border-black border-1">
            <form action="{{route('savepassword')}}" method="POST" class=" w-full mx-auto my-56 ">
                @csrf
                <div class="col-xs-12 col-md-12 | my-12">
                    <div class="entryarea">
                        <x-form-field type="text" class="form-field  border-1 border-black border-solid" id="website" name="website" required></x-form-field>
                        <x-form-label class="form-label" for="website"> Website</x-form-label>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 | my-12">
                    <div class="entryarea">
                        <x-form-field type="text" class="form-field border-1 border-black border-solid" id="username" name="username" required></x-form-field>
                        <x-form-label class="form-label" for="username"> Username</x-form-label>
                    </div>
                </div>
                <div class="col-xs-12
                            col-md-12
                            | my-12">
                    <div class="entryarea">
                        <x-form-field type="password" class="form-field border-1 border-black border-solid" id="password" name="password" required></x-form-field>
                        <x-form-label for="password" class="form-label">Password</x-form-label>
                    </div>
                </div>
                <div class="col-xs-12
                            col-md-12
                            | my-12">
                    <div class="entryarea">
                        <x-form-textarea class="form-field border-1 border-black border-solid" id="notes" name="notes" rows="2" placeholder=" " required
                        ></x-form-textarea>
                        <x-form-label for="notes" class="form-label">Additional Notes</x-form-label>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12">
                    <button type="submit" class="btn btn-green">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
