@extends('layout')
@section('title', 'register')
@section('content')

<div class="l-container">
    <div class="row center-md">
             <div class="c-form-block |  radius-lg border-black border-1">
                <form action="{{route('registeration.post')}}" method="POST" class=" c-form-block--login mx-auto mx-auto my-48" >
                @csrf
                        <div class="col-xs-12
                                col-md-12
                                ">
                                <div class="entryarea">
                                                <input type="text" class="form-field border-1 border-black border-solid" id="firstname" name="firstname" required>
                                                <label for="firstname" class="form-label">First Name</label>
                                        </div>
                        </div>
                        <div class="col-xs-12
                                col-md-12
                                ">
                                      <div class="entryarea">
                                                <input type="text" class="form-field border-1 border-black border-solid" id="lastname" name="lastname" required>
                                                <label for="lastname" class="form-label">Last Name</label>
                                        </div>
                        </div>
                        <div class="col-xs-12
                                col-md-12
                                ">
                                  <div class="entryarea">
                                                <input type="text" class="form-field border-1 border-black border-solid" id="email" name="email" required>
                                                <label for="email" class="form-label">Email</label>
                                        </div>
                        </div>
                        <div class="col-xs-12
                                col-md-12
                                ">
                                   <div class="entryarea">
                                                <input type="text" class="form-field border-1 border-black border-solid" id="password" name="password" required>
                                                <label for="password" class="form-label">Password</label>
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


