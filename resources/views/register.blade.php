@extends('layout')
@section('title', 'register')
@section('content')

<div class="l-container">
    <div class="row center-md">
             <div class="c-form-block">
                <form action="{{route('registeration.post')}}" method="POST" class=" c-form-block--register mx-auto mx-auto my-48" >
                @csrf
                        <div class="col-xs-12
                                col-md-12
                                ">
                                <div class="entryarea">
                                                <x-form-field type="text" class="form-field border-1 border-black border-solid" id="firstname" name="firstname" required></x-form-field>
                                                <x-form-label for="firstname" class="form-label">First Name</x-form-label>
                                        </div>
                        </div>
                        <div class="col-xs-12
                                col-md-12
                                ">
                                      <div class="entryarea">
                                                <x-form-field type="text" class="form-field border-1 border-black border-solid" id="lastname" name="lastname" required></x-form-field>
                                                <x-form-label for="lastname" class="form-label">Last Name</x-form-label>
                                        </div>
                        </div>
                        <div class="col-xs-12
                                col-md-12
                                ">
                                  <div class="entryarea">
                                                <x-form-field type="text" class="form-field border-1 border-black border-solid" id="email" name="email" required></x-form-field>
                                                <x-form-label for="email" class="form-label">Email</x-form-label>
                                        </div>
                        </div>
                        <div class="col-xs-12
                                col-md-12
                                ">
                                   <div class="entryarea">
                                                <x-form-field type="text" class="form-field border-1 border-black border-solid" id="password" name="password" required></x-form-field>
                                                <x-form-label for="password" class="form-label">Password</x-form-label>
                                        </div>
                        </div>

                        <div class="col-xs-12 col-md-12">
                          <x-form-button class="btn btn-green"  type="submit">Submit</x-form-field>
                        </div>
                </form>
             </div>
    </div>
</div>

@endsection


