@extends('layout')
@section('title','dashboard')
@section('content')

<div class="c-form-block">
    {{-- <nav>
        <a href="/newpassword"> New Password</a>
        <a href="/category/create"> New PAssword Category</a>
    </nav>

    <ul class="flex flex-col">
        @foreach ($passwords as $item)
        <li><a href="">{{ $item->website }}</a>
            <a href="/editpassword/{{$item->id}}">Edit</a>
            <a href="/password/{{$item->id}}">Read</a>
            <button form="delete-form" class="text-sm-6 text-red-500 font-bold ">Delete</button>

            <form method="POST" action="/deletepassword/{{ $item->id }}" id="delete-form" class="hidden">
                @csrf
                @method('DELETE')
            </form>

        </li>
        @endforeach

        @foreach($categories as $category)

        <li><a href="">{{ $category->title  }}</a>
            <a href="/category/edit/{{$item->id}}">Edit</a>
            <button form="delete-form" class="text-sm-6 text-red-500 font-bold ">Delete</button>

            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
            </form>

        </li>
        @endforeach
    </ul> --}}


<div class="c-tabs">
  <div class="tabs">
    <div class="tabs__head">
      <span class="tabs__toggle is_active">Password</span>
      <span class="tabs__toggle">Category</span>
    </div>
    <div class="tabs__body">
      <div class="tabs__content is_active">
           <nav>
        <ul><li>         <a href="/newpassword"> New Password</a></li></ul>
        </nav>
 <ul class="flex flex-col">
        @foreach ($passwords as $item)
        <li><a href="">{{ $item->website }}</a>
            <a href="/editpassword/{{$item->id}}">Edit</a>
            <a href="/password/{{$item->id}}">Read</a>
            <button form="delete-form" class="text-sm-6 text-red-500 font-bold ">Delete</button>

            <form method="POST" action="/deletepassword/{{ $item->id }}" id="delete-form" class="hidden">
                @csrf
                @method('DELETE')
            </form>

        </li>
        @endforeach
      </div>
      <div class="tabs__content">
        <nav>
        <ul><li>   <a href="/category/create"> New PAssword Category</a></li></ul>
        </nav>
        


         @foreach($categories as $category)

        <li><a href="">{{ $category->title  }}</a>
            <a href="/category/edit/{{$item->id}}">Edit</a>
            <button form="delete-form" class="text-sm-6 text-red-500 font-bold ">Delete</button>

            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
            </form>

        </li>
        @endforeach
      </div>

    </div>
  </div>
</div>

</div>
@endsection
