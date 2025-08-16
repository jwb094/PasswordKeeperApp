@extends('layout')
@section('title',' Read Password')
@section('content')
<div class="l-container">
    <div class="row center-md">
        <div class="c-form-block c-form-block--read-pwd | radius-lg border-black border-1">
            <form action="" class=" w-full mx-auto my-56">
                <div class="col-xs-12 col-md-12 | my-12">
                    <div class="entryarea">
                        <label for="website" class="form-label form-label--above | ">Website</label>
                        <input type="text" class="mt-24 border-1 border-black border-solid" id="website" name="website" value="{{$data['website']}}" readonly>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 ">
                    <div class="entryarea">
                        <label for="username" class="form-label form-label--above">username</label>
                        <input type="email" class="border-1 border-black border-solid" id="username" name="username" value="{{$data['username']}}" readonly>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 ">
                    <div class="entryarea">
                        <label for="password" class="form-label form-label--above">Password</label>
                        <input type="text" class="border-1 border-black border-solid" id="password" name="password" value="{{$data['password']}}" readonly>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 | my-24">                    
                    <div class="entryarea">
                        <label for="password" class="form-label form-label--above form-label--textarea-above ">Additional Notes</label>
                        <textarea class="form-input border-1 border-black border-solid" id="notes" name="notes" rows="1" readonly>{{$data['notes']}}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 | my-24">

                <a href="/dashboard" class="btn btn-grey text-sm/6 font-semibold text-white-900">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
