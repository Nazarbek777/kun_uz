<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('News') }}
        </h2>
    </x-slot>

<div class="container">
    <h1>Edit Product</h1>
    <hr/>
    <form action="{{route('news.update',$new->id)}}" method="POST"  >
        @csrf
        @method('PUT')
        <div class=" row mb-3">
            <div class="col-4">
                <input name="title" type="text" class="form-control "  placeholder="Title" value="{{$new->title}}">

            </div>
        </div>
        <div class=" row mb-3">
{{--            <div class="col-4">--}}
{{--                <input name="image" type="file" class="form-control "  placeholder="Title" accept="storage/images/" >--}}

{{--            </div>--}}
        </div>

        <div class=" row mb-3">

            <div class="col-4">
                <textarea name="description" type="text" class="form-control "  placeholder="Description" > {{$new->description}} </textarea>

            </div>
        </div>

        <div class="row">
            <button type="submit" class="btn btn-primary">
                Update
            </button>
        </div>

    </form>
</div>
</x-app-layout>
