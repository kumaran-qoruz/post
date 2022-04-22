@extends('home')
@section('content')
    <!-- categories header-->
    <header class="bg-white shadow">
        <div class="flex px-4 py-6 mx-auto space-x-8 max-w-7xl sm:px-6 lg:px-8">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Posts
            </h2>

            <div class="space-x-4">
                <a class="inline-flex items-center px-1 pt-1 border-transparent text-sm font-medium leading-5 text-gray-500 transition"
                    href="{{ route('admin.posts.index') }}">
                    Index
                </a>

                <a class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-900 transition"
                    href="{{ route('admin.posts.create') }}">
                    Create
                </a>

            </div>

        </div>
    </header>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    </head>

    <body>
        <div class="py-12">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">

                    <div class="p-6">

                        <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="space-y-6">
                                <div>
                                    <label class="block font-medium text-sm text-gray-700" for="cover_image">
                                        Cover Image
                                    </label>
                                    <input name="cover_image" type="file" id="cover_image">
                                    <span class="mt-2 text-xs text-gray-500">File type:jpg,png only</span>
                                </div>

                                <div>
                                    <label class="block font-medium text-sm text-gray-700" for="title">
                                        Title
                                    </label>
                                    <input
                                        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block w-full mt-1"
                                        id="title" type="text" name="title" value="{{ $post->title }}"
                                        autofocus="autofocus" autocomplete="title">
                                    <span class="mt-2 text-xs text-gray-500">Maximum 200 characters</span>
                                </div>

                                <div class="__web-inspector-hide-shortcut__">
                                    <label class="block font-medium text-sm text-gray-700" for="category_id">
                                        Categories
                                    </label>
                                    <input type="hidden" value="{{ $post->category_name }}">
                                    <select name="category_name" id="category_id"
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">

                                        <option value="">Please select a category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->name }}">{{ $category->name }}</option>
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group block font-medium text-sm text-gray-700">
                                    <label>Describe the post in detail</label>
                                    <textarea id="editor" name='body'>{{ $post->body }} </textarea>
                                </div>

                                <div>
                                    <label class="block font-medium text-sm text-gray-700" for="published_at">
                                        Schedule Date
                                    </label>
                                    <input type="date" x-data="" x-init="new Pikaday({ field: $el, ...{ & quot;format & quot;: & quot;YYYY - MM - DD & quot; } })" name="published_at"
                                        type="text" id="published_at" value="{{ $post->published_at }}"
                                        placeholder="YYYY-MM-DD">
                                </div>


                                <div class="__web-inspector-hide-shortcut__">
                                    <label class="block font-medium text-sm text-gray-700" for="category_id">
                                        Tags
                                    </label>
                                    <select name="tag" id="tag_id"
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">

                                        <option value="">Please select a Tags</option>
                                        @foreach ($tags as $tag)
                                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1"
                                        class="form-label block font-medium text-sm text-gray-700">Meta_description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name='meta_description'
                                        rows="3">{{ $post->meta_description }}</textarea>
                                </div>

                                <button type="submit"
                                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition mt-12">
                                    Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
                integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
                integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>

        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

        <script>
            tinymce.init({
                selector: "textarea#editor",
                skin: "bootstrap",
                plugins: "lists, link, image, media",
                toolbar: "h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help",
                menubar: false,
                setup: (editor) => {
                    // Apply the focus effect
                    editor.on("init", () => {
                        editor.getContainer().style.transition =
                            "border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out";
                    });
                    editor.on("focus", () => {
                        (editor.getContainer().style.boxShadow =
                            "0 0 0 .2rem rgba(0, 123, 255, .25)"),
                        (editor.getContainer().style.borderColor = "#80bdff");
                    });
                    editor.on("blur", () => {
                        (editor.getContainer().style.boxShadow = ""),
                        (editor.getContainer().style.borderColor = "");
                    });
                },
            });
        </script>
    </body>
@endsection
