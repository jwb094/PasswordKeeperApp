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
                        <input type="text" class="form-field border-1 border-black border-solid" id="title" name="title" required>
                        <label for="title" class="form-label">Title</label>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 | my-48">
                    <div class="entryarea">
                        <textarea class="form-field border-1 border-black border-solid" id="notes" name="notes" rows="2" placeholder=" " required></textarea>
                        <label for="notes" class="form-label">Additional Notes</label>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 | my-48 mx-auto flex justify-content-center flex-row  align-items-center gap-12">
                    <a class="btn btn-secondary" href="/dashboard">Cancel</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
