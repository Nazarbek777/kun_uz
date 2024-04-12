
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('News') }}
        </h2>
    </x-slot>

    <div class="py-12">


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('news')}}" class="btn btn-primary">back</a>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">news_type</th>
                    <th scope="col">Description</th>
                    <th scope="col">title</th>
                    <th scope="col">content</th>
                    <th scope="col">short_content</th>
                    <th scope="col">images</th>
                </tr>
                </thead>

                    <tbody>
                    <tr>
                        <th scope="row">{{$new->id}}</th>
                        <th>{{$new->news_type}}</th>
                        <td>{{$new->description}}</td>
                        <td>{{$new->title}}</td>
                        <td>{{$new->content}}</td>
                        <td>{{$new->short_content}}</td>
                        <td><img src="{{ asset($new->image) }}" alt="News Image" style="max-width: 100px;"></td>

                    </tr>
                    </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
