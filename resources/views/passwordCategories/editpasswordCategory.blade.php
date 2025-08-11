@extends('layout')
@section('title','  Edit Password')
@section('content')



<div class="l-container">
    <div class="row center-md">
        <div class="c-form-block c-form-block--new-pwdcat | radius-lg border-black border-1">
                <form action="{{ route('store.update', $data->id) }}" method="POST">
                @csrf
                        <div class="col-xs-12
                                col-md-12
                                ">
                                <label for="exampleInputEmail1" class="form-label">Ttitle</label>
                                <input type="text" class="border-1 border-black border-solid"  id="title"  name="title"  value="{{$data->title}}">
                                
                        </div>
                        <div class="col-xs-12
                                col-md-12
                                ">
                                <label for="password" class="form-label">Additional Notes</label>
                                <textarea class="border-1 border-black border-solid"   id="notes" name="notes" cols="10">{{$data->notes}}</textarea>
                        
                        </div> 

                        <div class="col-xs-12 col-md-12">
                                <a href="/dashboard">Cancel</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form>
        </div>
    </div>
</div>
@endsection