@extends('layouts.vertical', ['title' => 'Aspect Ratio'])

@section('css')

@endsection

@section('content')

@include("layouts.shared/page-title", ["subtitle" => "Components", "title" => "Aspect Ratio"])

<div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
    <div class="card">
        <div class="card-header">
            <div class="flex justify-between items-center">
                <h4 class="card-title mb-4">Aspect Ratio 21:9</h4>


            </div>
        </div>
        <div class="p-6">
            <!-- 21:9 aspect ratio -->
            <div class="aspect-w-7 aspect-h-3">
                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

        </div>
    </div>

    <div class="card">
        <h4 class="border-b py-3 px-6 truncate card-title">Aspect Ratio 16:9</h4>
        <div class="p-6">

            <!-- 16:9 aspect ratio -->
            <div class="aspect-w-16 aspect-h-9">
                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="card">
        <h4 class="border-b py-3 px-6 truncate card-title">Aspect Ratio 1:1</h4>
        <div class="p-6">
            <!-- 1:1 aspect ratio -->
            <div class="aspect-w-1 aspect-h-1">
                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="card">
        <h4 class="border-b py-3 px-6 truncate card-title">Aspect Ratio 4:3</h4>
        <div class="p-6">
            <!-- 4:3 aspect ratio -->
            <div class="aspect-w-4 aspect-h-3">
                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div> <!-- end preview-->
        </div>
    </div>
</div>

@endsection

@section('script')

@endsection