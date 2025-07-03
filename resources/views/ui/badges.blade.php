@extends('layouts.vertical', ['title' => 'Badges'])

@section('css')

@endsection

@section('content')

@include("layouts.shared/page-title", ["subtitle" => "Components", "title" => "Badge"])

<div class="grid 2xl:grid-cols-2 grid-cols-1 gap-6">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Default Badge</h4>
        </div>
        <div class="p-6">
            <div class="flex flex-wrap items-end gap-2">
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-black text-white">Badge</span>
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-default-500 text-white">Badge</span>
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-red-500 text-white">Badge</span>
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-yellow-500 text-white">Badge</span>
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-green-500 text-white">Badge</span>
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-primary text-white">Badge</span>
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-indigo-500 text-white">Badge</span>
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-purple-500 text-white">Badge</span>
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-pink-500 text-white">Badge</span>
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-white text-default-600">Badge</span>
            </div>
        </div>
    </div><!-- end card -->

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Soft color variants Badge</h4>
        </div>
        <div class="p-6">
            <div class="flex flex-wrap items-end gap-2">
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-default-100 text-default-800">Badge</span>
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-red-100 text-red-800">Badge</span>
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">Badge</span>
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-green-100 text-green-800">Badge</span>
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-primary/25 text-primary-800">Badge</span>
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">Badge</span>
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-purple-100 text-purple-800">Badge</span>
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-white/10 text-default-600">Badge</span>
            </div>
        </div>
    </div><!-- end card -->

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Rounded Badge</h4>
        </div>
        <div class="p-6">
            <div class="flex flex-wrap items-end gap-2">
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-default-100 text-default-800">Badge</span>
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-red-100 text-red-800">Badge</span>
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-yellow-100 text-yellow-800">Badge</span>
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-green-100 text-green-800">Badge</span>
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-primary/25 text-primary-800">Badge</span>
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-indigo-100 text-indigo-800">Badge</span>
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-purple-100 text-purple-800">Badge</span>
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-white/10 text-default-600">Badge</span>
            </div>
        </div>
    </div><!-- end card -->

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Badge with indicator</h4>
        </div>
        <div class="p-6">
            <div class="flex flex-wrap items-end gap-2">

                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-default-100 text-default-800">
                    <span class="w-1.5 h-1.5 inline-block bg-default-400 rounded-full"></span>
                    Badge
                </span>
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-red-100 text-red-800">
                    <span class="w-1.5 h-1.5 inline-block bg-red-400 rounded-full"></span>
                    Badge
                </span>
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                    <span class="w-1.5 h-1.5 inline-block bg-yellow-400 rounded-full"></span>
                    Badge
                </span>
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-green-100 text-green-800">
                    <span class="w-1.5 h-1.5 inline-block bg-green-400 rounded-full"></span>
                    Badge
                </span>
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-primary/25 text-primary-800">
                    <span class="w-1.5 h-1.5 inline-block bg-primary-400 rounded-full"></span>
                    Badge
                </span>
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                    <span class="w-1.5 h-1.5 inline-block bg-indigo-400 rounded-full"></span>
                    Badge
                </span>
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                    <span class="w-1.5 h-1.5 inline-block bg-purple-400 rounded-full"></span>
                    Badge
                </span>
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-white/10 text-default-600">
                    <span class="w-1.5 h-1.5 inline-block bg-default-600 rounded-full"></span>
                    Badge
                </span>
            </div>
        </div>
    </div><!-- end card -->

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Badge with indicator</h4>
        </div>
        <div class="p-6">
            <div class="flex flex-wrap items-end gap-2">
                <span class="inline-flex items-center gap-1.5 py-1.5 ps-3 pe-2 rounded-full text-xs font-medium bg-default-100 text-default-800">
                    Badge
                    <button type="button" class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-default-600 hover:bg-default-200 hover:text-default-500 focus:outline-none focus:bg-default-200 focus:text-default-500">
                        <span class="sr-only">Remove badge</span>
                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                        </svg>
                    </button>
                </span>

                <span class="inline-flex items-center gap-1.5 py-1.5 ps-3 pe-2 rounded-full text-xs font-medium bg-red-100 text-red-800">
                    Badge
                    <button type="button" class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-red-600 hover:bg-red-200 hover:text-red-500 focus:outline-none focus:bg-red-200 focus:text-red-500">
                        <span class="sr-only">Remove badge</span>
                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                        </svg>
                    </button>
                </span>

                <span class="inline-flex items-center gap-1.5 py-1.5 ps-3 pe-2 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                    Badge
                    <button type="button" class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-yellow-600 hover:bg-yellow-200 hover:text-yellow-600 focus:outline-none focus:bg-yellow-200 focus:text-yellow-500">
                        <span class="sr-only">Remove badge</span>
                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                        </svg>
                    </button>
                </span>

                <span class="inline-flex items-center gap-1.5 py-1.5 ps-3 pe-2 rounded-full text-xs font-medium bg-green-100 text-green-800">
                    Badge
                    <button type="button" class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-green-600 hover:bg-green-200 hover:text-green-500 focus:outline-none focus:bg-green-200 focus:text-green-500">
                        <span class="sr-only">Remove badge</span>
                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                        </svg>
                    </button>
                </span>

                <span class="inline-flex items-center gap-1.5 py-1.5 ps-3 pe-2 rounded-full text-xs font-medium bg-primary/25 text-primary-800">
                    Badge
                    <button type="button" class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-primary hover:bg-primary-200 hover:text-primary focus:outline-none focus:bg-primary-200 focus:text-primary">
                        <span class="sr-only">Remove badge</span>
                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                        </svg>
                    </button>
                </span>

                <span class="inline-flex items-center gap-1.5 py-1.5 ps-3 pe-2 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                    Badge
                    <button type="button" class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-indigo-600 hover:bg-indigo-200 hover:text-indigo-500 focus:outline-none focus:bg-indigo-200 focus:text-indigo-500">
                        <span class="sr-only">Remove badge</span>
                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                        </svg>
                    </button>
                </span>

                <span class="inline-flex items-center gap-1.5 py-1.5 ps-3 pe-2 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                    Badge
                    <button type="button" class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-purple-600 hover:bg-purple-200 hover:text-purple-500 focus:outline-none focus:bg-purple-200 focus:text-purple-500">
                        <span class="sr-only">Remove badge</span>
                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                        </svg>
                    </button>
                </span>

                <span class="inline-flex items-center gap-1.5 py-1.5 ps-3 pe-2 rounded-full text-xs font-medium bg-white text-default-500">
                    Badge
                    <button type="button" class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-default-600 hover:bg-light hover:text-default-500 focus:outline-none focus:bg-white focus:text-default-500">
                        <span class="sr-only">Remove badge</span>
                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                        </svg>
                    </button>
                </span>
            </div>
        </div>
    </div><!-- end card -->

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Max width Badge</h4>
        </div>
        <div class="p-6">
            <div class="flex flex-wrap items-end lg:gap-5 gap-">
                <span class="max-w-40 truncate whitespace-nowrap inline-block py-1.5 px-3 rounded-md text-xs font-medium bg-default-100 text-default-800">This
                    content is a little bit longer.</span>
                <span class="max-w-40 truncate whitespace-nowrap inline-block py-1.5 px-3 rounded-md text-xs font-medium bg-red-100 text-red-800">This
                    content is a little bit longer.</span>
                <span class="max-w-40 truncate whitespace-nowrap inline-block py-1.5 px-3 rounded-md text-xs font-medium bg-yellow-100 text-yellow-800">This
                    content is a little bit longer.</span>
                <span class="max-w-40 truncate whitespace-nowrap inline-block py-1.5 px-3 rounded-md text-xs font-medium bg-green-100 text-green-800">This
                    content is a little bit longer.</span>
                <span class="max-w-40 truncate whitespace-nowrap inline-block py-1.5 px-3 rounded-md text-xs font-medium bg-primary/25 text-primary-800">This
                    content is a little bit longer.</span>
                <span class="max-w-40 truncate whitespace-nowrap inline-block py-1.5 px-3 rounded-md text-xs font-medium bg-indigo-100 text-indigo-800">This
                    content is a little bit longer.</span>
                <span class="max-w-40 truncate whitespace-nowrap inline-block py-1.5 px-3 rounded-md text-xs font-medium bg-purple-100 text-purple-800">This
                    content is a little bit longer.</span>
                <span class="max-w-40 truncate whitespace-nowrap inline-block py-1.5 px-3 rounded-md text-xs font-medium bg-white-100 text-default-800">This
                    content is a little bit longer.</span>
            </div>
        </div>
    </div><!-- end card -->

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">With button</h4>
        </div>
        <div class="p-6">
            <div class="flex flex-wrap items-end lg:gap-5 gap-">
                <a class="relative py-2.5 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 transition-all text-sm" href="#">
                    Notifications
                    <span class="inline-flex items-center py-0.5 px-1.5 rounded-full text-xs font-medium bg-indigo-800 text-white">5</span>
                </a>
            </div>
        </div>
    </div><!-- end card -->

</div>

@endsection

@section('script')

@endsection