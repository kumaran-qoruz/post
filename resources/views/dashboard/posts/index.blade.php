<link rel="stylesheet" href="{{ asset('design/css/bootstrap.min.css') }}" class="">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
    .svg_edit {
        height: 30px;
    }

    .toast.show {
        position: absolute;
        top: 70px ! important;
        right: 50px !important;
    }

    .alert-dismissible .btn-close {
        position: absolute;
        top: -4px !important;
        right: 0;
        z-index: 2;
        padding: 1.25rem 1rem;
    }

</style>
@extends('home')
@section('content')
    <!--posts header-->
    <header class="bg-white shadow">
        <div class="flex px-4 py-6 mx-auto space-x-8 max-w-7xl sm:px-6 lg:px-8">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Post
            </h2>

            <div class="space-x-4">

                <a class="inline-flex items-center px-1 pt-1  text-sm font-medium leading-5 text-gray-900 transition"
                    href="{{ route('admin.posts.index') }}">
                    Index
                </a>


                <a class="inline-flex items-center px-1 pt-1 border-transparent text-sm font-medium leading-5 text-gray-500 focus:text-gray-700 transition"
                    href="{{ route('admin.posts.create') }}">
                    Create
                </a>

                @if (\Session::has('Message'))
                    <div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show toast"
                        role="alert">

                        {!! \Session::get('Message') !!}

                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @endif

            </div>

        </div>
    </header>


    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="mx-auto max-w-7xl">
                    <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">


                        {{-- Table --}}
                        <table class="w-full divide-y divide-gray-200">

                            <thead class="font-bold text-gray-500 bg-indigo-200">
                                <tr>
                                    <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                    </th>

                                    <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                        Id
                                    </th>

                                    <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                        Title
                                    </th>

                                    <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                        Category
                                    </th>


                                    <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                        Created Date
                                    </th>

                                    <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                        Updated Date
                                    </th>

                                    <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                        Actions
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="text-xs divide-y divide-gray-200 bg-indigo-50">
                                @foreach ($posts as $post)
                                    <tr>
                                        <td class="px-2 py-4 whitespace-nowrap">
                                        </td>

                                        <td class="px-2 py-4 whitespace-nowrap">
                                            {{ $post->id }}
                                        </td>

                                        <td class="px-2 py-4 whitespace-nowrap">
                                            {{ Str::limit($post->title, 40, '...') }}
                                        </td>

                                        <td class="px-2 py-4 whitespace-nowrap">
                                            {{ $post->category_name }}
                                        </td>

                                        <td class="px-2 py-4 whitespace-nowrap">
                                            {{ $post->created_at->format('m/d/y') }}
                                        </td>

                                        <td class="px-2 py-4 whitespace-nowrap">
                                            {{ $post->updated_at->format('m/d/y') }}
                                        </td>

                                        <td class="px-2 py-4 text-sm text-gray-500 whitespace-nowrap">

                                            <div class="flex justify-start space-x-1 ">

                                                <a href="{{ route('admin.posts.edit', $post) }}"
                                                    class="p-1 border-2 border-indigo-200 rounded-md svg_edit">

                                                    <img src="{{ asset('svg/edite.svg') }}" class="rounded-md ">
                                                </a>

                                                <form action="{{ route('admin.posts.delete', $post) }}" method="POST">
                                                    @csrf
                                                    @method('Delete')

                                                    <button type="submit" class="p-1 border-2 border-red-200 rounded-md">
                                                        <img src="{{ asset('svg/delete.svg') }}" class="rounded-md">
                                                    </button>
                                                </form>
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="p-2 bg-indigo-300">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
