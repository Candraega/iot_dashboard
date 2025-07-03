@extends('layouts.vertical', ['title' => 'Dashboard'])

@section('css')
@vite([
    'node_modules/quill/dist/quill.core.css',
    'node_modules/quill/dist/quill.bubble.css',
    'node_modules/quill/dist/quill.snow.css'
])
@endsection

@section('content')

@include("layouts.shared/page-title", ["subtitle" => "Forms", "title" => "Editor"])

<div class="flex flex-col gap-6">
    <div class="card">
        <div class="card-header">
            <div class="flex justify-between items-center">
                <h4 class="card-title">Snow Editor</h4>
            </div>
        </div>

        <div class="p-6">
            <!-- Quill Editors -->
            <div id="snow-editor" style="height: 300px;">
                <h3><span class="ql-size-large">Hello World!</span></h3>
                <p><br></p>
                <h3>This is a simple editable area.</h3>
                <p><br></p>
                <ul>
                    <li>Select a text to reveal the toolbar.</li>
                    <li>Edit rich document on-the-fly, so elastic!</li>
                </ul>
                <p><br></p>
                <p>End of simple area</p>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="flex justify-between items-center">
                <h4 class="card-title">Bubble Editor</h4>

            </div>
        </div>

        <div class="p-6">
            <!-- Bubble Editors -->
            <div id="bubble-editor" style="height: 300px;">
                <h3><span class="ql-size-large">Hello World!</span></h3>
                <p><br></p>
                <h3>This is a simple editable area.</h3>
                <p><br></p>
                <ul>
                    <li>Select a text to reveal the toolbar.</li>
                    <li>Edit rich document on-the-fly, so elastic!</li>
                </ul>
                <p><br></p>
                <p>End of simple area</p>
            </div>
        </div>

    </div>
</div>

@endsection

@section('script')
@vite(['resources/js/pages/form-editor.js'])
@endsection