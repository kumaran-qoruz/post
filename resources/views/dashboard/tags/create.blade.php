<link rel="stylesheet" href="{{ asset('design/css/bootstrap.min.css') }}" class="">

<style>
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
    <!-- categories header-->
    <header class="bg-white shadow">
        <div class="flex px-4 py-6 mx-auto space-x-8 max-w-7xl sm:px-6 lg:px-8">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Tags
            </h2>

            <div class="space-x-4">
                <a class="inline-flex items-center px-1 pt-1 border-transparent text-sm font-medium leading-5 text-gray-500 transition"
                    href="{{ route('admin.tags.index') }}">
                    Index
                </a>

                <a class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 transition"
                    href="{{ route('admin.tags.create') }}">
                    Create
                </a>

                @if (\Session::has('Message'))
                    <div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show toast"
                        role="alert">

                        {!! \Session::get('Message') !!}

                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                @endif
            </div>

        </div>
    </header>

    <!-- Tags create-->
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <form action="{{ route('admin.tags.store') }}" method="POST">
                        @csrf

                        <div>
                            <label class="block font-medium text-sm text-gray-700" for="name">
                                Name
                            </label>
                            <input
                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block w-full mt-1"
                                id="name" type="text" name="name" required="required" autofocus="autofocus"
                                autocomplete="name">
                            <span class="mt-2 text-xs text-gray-500">Maximum 200 characters</span>
                        </div>

                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition mt-12">
                            Create
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
