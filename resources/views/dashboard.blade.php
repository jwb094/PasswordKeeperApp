@extends('layout')
@section('title','dashboard')
@section('content')
<div class="l-container">
    <div class="row center-md flex h-100vh">
        <div class="c-form-block">
            <div class="c-tabs">
                <div class="tabs">
                    <div class="tabs__head">
                        <span class="tabs__toggle is_active">Password</span>
                        <span class="tabs__toggle">Category</span>
                    </div>
                    <div class="tabs__body">
                        <div class="tabs__content is_active">
                            <nav class="flex | mb-12">
                                <ul>
                                    <li> <a href="/newpassword"> New Password</a></li>
                                </ul>
                            </nav>
                            <ul class="flex flex-col">
                                @foreach ($passwords as $item)
                                <li class="flex flex-row | gap-12 | justify-center align-items-center"> <a href="">{{ $item->website }}</a>
                                    <a class="btn btn-blue" href="/editpassword/{{$item->id}}">Edit</a>
                                    <a class="btn btn-grey" href="/password/{{$item->id}}">Read</a>
                                    {{-- <button form="delete-form" class="text-sm-6 text-red-500 font-bold ">Delete</button> --}}

                                    <form method="POST" action="/deletepassword/{{ $item->id }}" id="delete-form" class="">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-red" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                                    </form>

                                </li>
                                @endforeach
                        </div>
                        <div class="tabs__content">
                            <nav>
                                <ul class="flex | mb-12">
                                    <li> <a href="/category/create"> New Category</a></li>
                                </ul>
                            </nav>


                            <ul>
                                @foreach($categories as $category)

                                <li class="my-12 "><a href="">{{ $category->title  }}</a>
                                    <a class="btn btn-grey" href="/category/edit/{{$category->id}}">Edit</a>
                                    {{-- <button form="delete-form" class="text-sm-6 text-red-500 font-bold ">Delete</button> --}}

                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-red" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                                    </form>

                                </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
