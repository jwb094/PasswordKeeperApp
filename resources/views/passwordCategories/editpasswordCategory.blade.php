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
                            <input type="text" class="form-field border-1 border-black border-solid" id="title" name="title" value="{{$data->title}}">
                        <label for="exampleInputEmail1" class="form-label">Title</label>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 | my-48">
                    <div class="entryarea">
                            <textarea class="form-field border-1 border-black border-solid" id="notes" name="notes" rows="1">{{$data->notes}}</textarea>
                            <label for="password" class="form-label">Additional Notes</label>
                    </div>
                </div>

                <div class="col-xs-12 col-md-12 text-center my-48">
                    <a class="btn btn-grey" href="/dashboard">Cancel</a>
                    <button type="submit" class="btn btn-green">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
