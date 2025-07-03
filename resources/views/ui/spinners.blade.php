@extends('layouts.vertical', ['title' => 'Spinner'])

@section('css')

@endsection

@section('content')

@include("layouts.shared/page-title", ["subtitle" => "Components", "title" => "Spinner"])

<div class="grid lg:grid-cols-2 gap-6">
    <div class="card">
        <div class="card-header">
            <div class="">
                <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Border Spinner</h5>
                <p class="text-default-600 text-sm font-medium">Use the border spinners for a
                    lightweight loading indicator.</p>
            </div>
        </div>
        <div class="card-body">
            <div class="flex flex-wrap items-center gap-2">
                <div class="animate-spin w-8 h-8 border-[3px] border-current border-t-transparent text-default-600 rounded-full" role="status" aria-label="loading">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="">
                <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Growing Spinner
                </h5>
                <p class="text-default-600 text-sm font-medium">If you don’t fancy a border spinner,
                    switch to the grow spinner. While it doesn’t technically spin, it does
                    repeatedly
                    grow!</p>
            </div>
        </div>
        <div class="card-body">
            <div class="animate-ping flex h-5 w-5 rounded-full bg-primary/50"></div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="">
                <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Colors</h5>
                <p class="text-default-600 text-sm font-medium">You can use any of our text color
                    utilities on the standard spinner.</p>
            </div>
        </div>
        <div class="card-body">
            <div class="flex flex-wrap gap-2">
                <div class="animate-spin w-8 h-8 border-[3px] border-current border-t-transparent text-primary rounded-full" role="status" aria-label="loading">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="animate-spin w-8 h-8 border-[3px] border-current border-t-transparent text-default-500 rounded-full" role="status" aria-label="loading">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="animate-spin w-8 h-8 border-[3px] border-current border-t-transparent text-teal-500 rounded-full" role="status" aria-label="loading">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="animate-spin w-8 h-8 border-[3px] border-current border-t-transparent text-red-500 rounded-full" role="status" aria-label="loading">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="animate-spin w-8 h-8 border-[3px] border-current border-t-transparent text-amber-500 rounded-full" role="status" aria-label="loading">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="animate-spin w-8 h-8 border-[3px] border-current border-t-transparent text-cyan-500 rounded-full" role="status" aria-label="loading">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="animate-spin w-8 h-8 border-[3px] border-current border-t-transparent text-default-200 rounded-full" role="status" aria-label="loading">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="animate-spin w-8 h-8 border-[3px] border-current border-t-transparent text-default-900 rounded-full" role="status" aria-label="loading">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="">
                <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Color Growing
                    Spinner
                </h5>
                <p class="text-default-600 text-sm font-medium">You can use any of our text color
                    utilities on the standard spinner.</p>
            </div>
        </div>
        <div class="card-body">
            <div class="flex flex-wrap gap-6">
                <div class="h-5 w-5">
                    <span class="animate-ping inline-flex h-full w-full rounded-full bg-primary/75"></span>
                </div>
                <div class="h-5 w-5">
                    <span class="animate-ping inline-flex h-full w-full rounded-full bg-default-500/75"></span>
                </div>
                <div class="h-5 w-5">
                    <span class="animate-ping inline-flex h-full w-full rounded-full bg-teal-500/75"></span>
                </div>
                <div class="h-5 w-5">
                    <span class="animate-ping inline-flex h-full w-full rounded-full bg-red-500/75"></span>
                </div>
                <div class="h-5 w-5">
                    <span class="animate-ping inline-flex h-full w-full rounded-full bg-amber-500/75"></span>
                </div>
                <div class="h-5 w-5">
                    <span class="animate-ping inline-flex h-full w-full rounded-full bg-cyan-500/75"></span>
                </div>
                <div class="h-5 w-5">
                    <span class="animate-ping inline-flex h-full w-full rounded-full bg-default-200/75"></span>
                </div>
                <div class="h-5 w-5">
                    <span class="animate-ping inline-flex h-full w-full rounded-full bg-default-900x/75"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="">
                <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Placement</h5>
                <p class="text-default-600 text-sm font-medium">Use <code class="text-primary">.flex</code> class or <code class="text-primary">text-{alignment}</code> utilities to place spinners
                    exactly
                    where you need them in any situation.</p>
            </div>
        </div>
        <div class="card-body">
            <div class="flex justify-between gap-8">
                <strong class="text-default-900">Loading...</strong>

                <div class="animate-spin w-8 h-8 border-[3px] border-current border-t-transparent text-default-900 rounded-full" role="status" aria-label="loading">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="">
                <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Buttons Spinner
                </h5>
                <p class="text-default-600 text-sm font-medium">Use spinners within buttons to
                    indicate
                    an action is currently processing or taking place. You may also swap the text
                    out of
                    the spinner element and utilize button text as needed.</p>
            </div>
        </div>
        <div class="card-body">
            <div class="grid sm:grid-cols-2 gap-6">

                <div class="flex items-center gap-4">
                    <button type="button" class="py-2 px-5 inline-flex items-center justify-center font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-primary/5 hover:bg-primary border-primary/10 hover:border-primary text-primary hover:text-white rounded-full cursor-default">
                        <div class="animate-spin w-5 h-5 border-[3px] border-current border-t-transparent rounded-full" role="status" aria-label="loading">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </button> <!-- button-end -->

                    <button type="button" class="py-2 px-5 inline-flex items-center justify-center font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-primary/5 hover:bg-primary border-primary/10 hover:border-primary text-primary hover:text-white rounded-full cursor-default gap-3">
                        <div class="animate-spin w-5 h-5 border-[3px] border-current border-t-transparent rounded-full" role="status" aria-label="loading">
                            <span class="sr-only">Loading...</span>
                        </div>
                        Loading...
                    </button> <!-- button-end -->
                </div> <!-- flex-end -->

                <div class="flex items-center gap-4">
                    <button type="button" class="py-2 px-5 inline-flex items-center justify-center font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-primary/5 hover:bg-primary border-primary/10 hover:border-primary text-primary hover:text-white rounded-full cursor-default">
                        <div class="h-5 w-5">
                            <span class="animate-ping inline-flex h-3 w-3 rounded-full bg-current"></span>
                        </div>
                    </button> <!-- button-end -->

                    <button type="button" class="py-2 px-5 inline-flex items-center justify-center font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-primary/5 hover:bg-primary border-primary/10 hover:border-primary text-primary hover:text-white rounded-full cursor-default gap-3">
                        <div class="h-5 w-5">
                            <span class="animate-ping inline-flex h-3 w-3 rounded-full bg-current"></span>
                        </div>
                        Loading...
                    </button> <!-- button-end -->
                </div> <!-- flex-end -->

            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

@endsection