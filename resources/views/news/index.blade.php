
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('News') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('news.create')}}" class="btn btn-primary  ">new create</a>
                @if(\Illuminate\Support\Facades\Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ \Illuminate\Support\Facades\Session::get('success') }}
                    </div>
                @endif

                <hr />
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">news_type</th>
{{--                    <th scope="col">Description</th>--}}
                    <th scope="col">title</th>
{{--                    <th scope="col">content</th>--}}
{{--                    <th scope="col">short_content</th>--}}
                    <th scope="col">images</th>
                    <th scope="col">action</th>
                </tr>
                </thead>
             @foreach($news as $new)
                    <tbody>
                    <tr >
                        <th scope="row">{{$new->id}}</th>
                        <th>{{$new->news_type}}</th>
{{--                        <td>{{$new->description}}</td>--}}
{{--                        <td>{{$new->title}}</td>--}}
{{--                        <td>{{$new->content}}</td>--}}
                        <td>{{$new->short_content}}</td>
                        <td><img src="{{ asset($new->image) }}" alt="News Image" style="max-width: 100px;"></td>
                        <td>
                            <a href="{{ route('news.show', $new->id) }}" class="view" title="View" data-toggle="tooltip"><i
                                    class="material-icons">&#xE417;</i></a>
                            <a href="{{ route('news.edit', $new->id) }}" class="edit" title="Edit" data-toggle="tooltip"><i
                                    class="material-icons">&#xE254;</i></a>
                            <form action="{{ route('news.destroy', $new->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class=" "><i
                                        class="material-icons">&#xE872;</i></button>
                            </form>
                        </td>
                    </tr>

                    </tbody>
             @endforeach
            </table>
            {{ $news->links() }}
        </div>
    </div>
</x-app-layout>
