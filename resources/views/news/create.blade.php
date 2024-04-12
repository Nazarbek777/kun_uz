<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('News create') }}
        </h2>
    </x-slot>


    <div class="container  my-4 ">
        <a href="{{route('news')}}" class=" mb-3 ml-3 btn btn-primary">back</a>
        <form action="{{route('news.store')}}" method="post" enctype="multipart/form-data" class="user ">
            @csrf

            <div class="row mb-3 mx-auto">
{{--                <div class="row mb-3 mx-auto">--}}
{{--                    <div class="col-4">--}}
{{--                        <label class="mb-1 ml-2 ">News type</label>--}}
{{--                        <input name="news_type" type="text" class="form-control" placeholder="news_type" >--}}
{{--                    </div>--}}
{{--                    @error('news_type')--}}
{{--                    <p class="text-danger">{{ $message }}</p>--}}
{{--                    @enderror--}}
{{--                </div>--}}
                <div class="row mb-3 mx-auto">
                    <div class="col-4">
                        <label class="mb-1 ml-2">News type</label>
                        <select name="news_type" class="form-control" onchange="showHideSelect(this)">
                            <option value="jahon">Jahon xabarlari </option>
                            <option value="uzb">O'zbekiston xabarlari </option>
                            <option value="toshkent">Toshkent</option>
                            <option value="dolzarb">Dolzarb xabarlar</option>
                            <option value="muxarrir">Muxarrir tanlovi</option>
                            <option value="maqola">Maqolalar</option>

                        </select>
                    </div>
                    @error('gender')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
           <div class="row mb-3 mx-auto">
               <div class="col-4">
                   <select name="hidden_news_type" class="form-control" style="display: none;">
                       <option value="name">Test xabarlar</option>
                       <option value="name">Test xabarlar</option>
                       <option value="name">Test xabarlar</option>

                   </select>
               </div>
           </div>



                <div class="row mb-3 mx-auto">
                    <div class="col-4">
                        <label class="mb-1 ml-2 ">Title</label>
                        <input name="title" type="text" class="form-control" placeholder="Title">
                    </div>
                    @error('title')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="row mb-3 mx-auto">
                    <div class="col-4">
                        <label class="mb-1 ml-2 ">Short Content</label>
                        <input name="short_content" type="text" class="form-control" placeholder="Short Content">
                    </div>
                    @error('short_content')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="row mb-3 mx-auto">
                    <div class="col-4">
                        <label class="mb-1 ml-2 ">Content</label>
                        <textarea name="content" type="text" class="form-control " placeholder="Content">
                        </textarea>
                    </div>
                    @error('content')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="row mb-3 mx-auto">
                    <div class="col-4">
                        <label for="">Description</label>
                        <textarea name="description" type="text" class="form-control" placeholder="Description">
                        </textarea>
                    </div>
                    @error('description')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>


                <div class="row mb-3 mx-auto">
                    <div class="col-4">
                        <label for="">Images</label>
                        <input type="file" name="image" id="image" class="form-control bg-amber-400" >
                    </div>
                    @error('image')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="row mb-3 mx-auto">
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary bg-blue-600">
                            Saqlash
                        </button>
                    </div>
                </div>
        </form>
    </div>

    <script>
        function showHideSelect(select){
            var hiddenSelect = document.getElementsByName("hidden_news_type")[0];
            if(select.value === "uzb"){
                hiddenSelect.style.display = "block";
            } else {
                hiddenSelect.style.display = "none";
            }
        }
    </script>

</x-app-layout>

