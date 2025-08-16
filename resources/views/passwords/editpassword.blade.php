@extends('layout')
@section('title',' Edit Password')
@section('content')
<div class="l-container">
    <div class="row center-md">
        <div class="c-form-block c-form-block--edit-pwd | radius-lg border-black border-1">
            <form
                action="/updatepassword/{{$data->id}}" method="POST" class=" w-full mx-auto my-56" style="">
                @csrf
                <div class="col-xs-12 col-md-12 | my-48">
                    <div class="entryarea">
                        <input type="text" class="form-field border-1 border-black border-solid" id="website" name="website" value="{{$data->website}}" required>
                        <label for="website" class="form-label">Website</label>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 | my-48">
                    <div class="entryarea">
                        <input type="text" class="form-field border-1 border-black border-solid" id="username" name="username" value="{{$data->username}}" required>
                        <label for="username" class="form-label">username</label>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 | my-48">
                    <div class="entryarea">
                        <input type="text" class="form-field border-1 border-black border-solid" id="password" name="password" value="{{$data->password}}" required>
                        <label for="password" class="form-label">Password</label>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 | my-48">
                    <div class="entryarea">
                        <textarea class="form-field border-1 border-black border-solid" id="notes" name="notes"rows="1"> {{$data->notes}}</textarea>
                        <label for="password" class="form-label">Additional Notes</label>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 | my-48">
                    <a class="btn btn-grey" href="/dashboard">Cancel</a>
                    <button type="submit" class="btn btn-green">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
