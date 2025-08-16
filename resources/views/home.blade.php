@extends('layout')
@section('title','home')
@section('content')



<div class="l-container relative">
    <div class="row center-md">
        <div class="col-md-6">
            <div class="c-form-block ">
                <form action="{{route('login.post')}}" method="POST" class=" c-form-block--login mx-auto my-48 ">
                @csrf
                    <div class="col-xs-12 col-md-12 | mt-12 md.mt-48">
                            <div class="entryarea">
                            <input type="text" class="form-field border-1 border-black border-solid" id="email" name="email" required>
                            <label for="email" class="form-label">Email</label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 ">
                                     <div class="entryarea">
                            <input type="password" class="form-field border-1 border-black border-solid" id="password" name="password" required>
                            <label for="password" class="form-label">Password</label>
                        </div>
                    </div>
            
                    <div class="col-xs-12 col-md-12 |  my-12 flex flex-row justify-center">
                    <button type="submit" class="btn btn-green">Submit</button>
                    </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection