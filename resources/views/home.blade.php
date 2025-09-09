@extends('layout')
@section('title','home')
@section('content')



<div class="l-container relative">
    <div class="row ">
        {{-- <div class="col-md-6"> --}}
            <div class="c-form-block ">
                <form action="{{route('login.post')}}" method="POST" class=" c-form-block--login mx-auto my-48 ">
                    @csrf
                    <div class="col-xs-12 col-md-12 | mt-24 md.mt-48">
                        <div class="entryarea">
                            <x-form-field type="text" class="form-field border-1 border-black border-solid" id="email" name="email" required></x-form-field>
                            <x-form-label for="email" class="form-label">Email</x-form-label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 ">
                        <div class="entryarea">
                            <x-form-field type="password" class="form-field border-1 border-black border-solid" id="password" name="password" required></x-form-field>
                            <x-form-label for="password" class="form-label">Password</x-form-label>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-12 |  my-12 flex flex-row justify-center">
                        <x-form-button class="btn btn-green" type="submit">Submit</x-form-field>
                    </div>
                </form>
            </div>
        {{-- </div> --}}
    </div>
</div>
    @endsection
