@extends('layout')
@section('title',' New Password')
@section('content')
<div class="l-container">
    <div class="row center-md">
        <div class="c-form-block c-form-block--edit-pwd | radius-lg border-black border-1">
            <form action="{{route('savepassword')}}" method="POST" class=" w-full mx-auto my-56 ">
                @csrf
                <div class="col-xs-12 col-md-12 | my-12">
                    <div class="entryarea">
                        <input type="text" class="form-field  border-1 border-black border-solid" id="website" name="website" required>
                        <x-form-label class="form-label" for="title"> Website</x-form-label>
                    </div>
                </div>
                <div class="col-xs-12
                            col-md-12
                            | my-12">
                    <div class="entryarea">
                        <input type="email" class="form-field border-1 border-black border-solid" id="username" name="username" required>
                        <x-form-label class="form-label" for="title"> Username</x-form-label>
                    </div>
                </div>
                <div class="col-xs-12
                            col-md-12
                            | my-12">
                    <div class="entryarea">
                        <input type="password" class="form-field border-1 border-black border-solid" id="password" name="password" required>
                        <label for="password" class="form-label">Password</label>
                    </div>
                </div>
                <div class="col-xs-12
                            col-md-12
                            | my-12">
                    <div class="entryarea">
                        <textarea class="form-field border-1 border-black border-solid" id="notes" name="notes" rows="2" placeholder=" " required
                        ></textarea>
                        <label for="password" class="form-label">Additional Notes</label>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
