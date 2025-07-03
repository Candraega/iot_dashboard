@extends('layouts.vertical', ['title' => 'Modal'])

@section('css')

@endsection

@section('content')

@include("layouts.shared/page-title", ["subtitle" => "Components", "title" => "Modal"])

<div class="grid lg:grid-cols-2 gap-6">
    <div class="card">
        <div class="card-header flex items-center justify-between">
            <h5 class="text-lg font-medium text-default-950">Example</h5>
        </div>
        <div class="card-body">
            <button type="button" class="btn bg-primary text-white" data-hs-overlay="#modal-one">
                Open modal
            </button>
            <div id="modal-one" class="hs-overlay w-full h-full fixed top-0 left-0 z-70 transition-all duration-500 overflow-x-hidden overflow-y-auto hidden pointer-events-none">
                <div class="-translate-y-5 hs-overlay-open:translate-y-0 hs-overlay-open:opacity-100 opacity-0 ease-in-out transition-all duration-500 sm:max-w-lg sm:w-full my-8 sm:mx-auto flex flex-col bg-white shadow-sm rounded">
                    <div class="flex flex-col border border-default-200 shadow-sm rounded-lg  pointer-events-auto">
                        <div class="flex justify-between items-center py-3 px-4 border-b border-default-200">
                            <h3 class="text-lg font-medium text-default-900">
                                Modal title
                            </h3>
                            <button type="button" class="text-default-600 cursor-pointer" data-hs-overlay="#modal-one">
                                <i class="i-tabler-x text-lg"></i>
                            </button>
                        </div>
                        <div class="p-4 overflow-y-auto">
                            <p class="mt-1 text-default-600">
                                This is a wider card with supporting text below as a natural lead-in
                                to
                                additional content.
                            </p>
                        </div>
                        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-default-200">
                            <button type="button" class="btn bg-primary text-white" data-hs-overlay="#modal-one">
                                <i class="i-tabler-x me-1"></i>
                                Close
                            </button>
                            <a class="btn bg-primary text-white" href="#">
                                Save changes
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header flex items-center justify-between">
            <div class="">
                <h5 class="text-lg font-medium text-default-950">Slide up animation</h5>
            </div>
        </div>
        <div class="card-body">
            <button type="button" class="btn bg-primary text-white" data-hs-overlay="#modal-two">
                Open modal
            </button>
            <div id="modal-two" class="hs-overlay w-full h-full fixed top-0 left-0 z-70 transition-all duration-500 overflow-y-auto hidden pointer-events-none">
                <div class="translate-y-10 hs-overlay-open:translate-y-0 hs-overlay-open:opacity-100 opacity-0 ease-in-out transition-all duration-500 sm:max-w-lg sm:w-full my-8 sm:mx-auto flex flex-col bg-white shadow-sm rounded">
                    <div class="flex flex-col border border-default-200 shadow-sm rounded-lg  pointer-events-auto">
                        <div class="flex justify-between items-center py-3 px-4 border-b border-default-200">
                            <h3 class="text-lg font-medium text-default-900">
                                Modal title
                            </h3>
                            <button type="button" class="text-default-600 cursor-pointer" data-hs-overlay="#modal-two">
                                <i class="i-tabler-x text-lg"></i>
                            </button>
                        </div>
                        <div class="p-4 overflow-y-auto">
                            <p class="mt-1 text-default-600">
                                This is a wider card with supporting text below as a natural lead-in
                                to
                                additional content.
                            </p>
                        </div>
                        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-default-200">
                            <button type="button" class="btn bg-primary text-white" data-hs-overlay="#modal-two">
                                <i class="i-tabler-x me-1"></i>
                                Close
                            </button>
                            <a class="btn bg-primary text-white" href="#">
                                Save changes
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header flex items-center justify-between">
            <div class="">
                <h5 class="text-lg font-medium text-default-950">Size</h5>
            </div>
        </div>
        <div class="card-body">
            <div class="flex flex-wrap items-center gap-2">
                <div class="">
                    <button type="button" class="btn bg-primary text-white" data-hs-overlay="#modal-three">
                        small
                    </button>
                    <div id="modal-three" class="hs-overlay w-full h-full fixed top-0 left-0 z-70 transition-all duration-500 overflow-y-auto hidden pointer-events-none">
                        <div class="-translate-y-5 hs-overlay-open:translate-y-0 hs-overlay-open:opacity-100 opacity-0 ease-in-out transition-all duration-500 sm:max-w-lg sm:w-full my-8 sm:mx-auto flex flex-col bg-white shadow-sm rounded">
                            <div class="flex flex-col border border-default-200 shadow-sm rounded-lg  pointer-events-auto">
                                <div class="flex justify-between items-center py-3 px-4 border-b border-default-200">
                                    <h3 class="text-lg font-medium text-default-900">
                                        Modal title
                                    </h3>
                                    <button type="button" class="text-default-600 cursor-pointer" data-hs-overlay="#modal-three">
                                        <i class="i-tabler-x text-lg"></i>
                                    </button>
                                </div>
                                <div class="p-4 overflow-y-auto">
                                    <p class="mt-1 text-default-600">
                                        This is a wider card with supporting text below as a natural
                                        lead-in to additional content.
                                    </p>
                                </div>
                                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-default-200">
                                    <button type="button" class="btn bg-primary text-white" data-hs-overlay="#modal-three">
                                        <i class="i-tabler-x me-1"></i>
                                        Close
                                    </button>
                                    <a class="btn bg-primary text-white" href="#">
                                        Save changes
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <button type="button" class="btn bg-primary text-white" data-hs-overlay="#modal-four">
                        Medium
                    </button>
                    <div id="modal-four" class="hs-overlay w-full h-full fixed top-0 left-0 z-70 transition-all duration-500 overflow-y-auto hidden pointer-events-none">
                        <div class="-translate-y-5 hs-overlay-open:translate-y-0 hs-overlay-open:opacity-100 opacity-0 ease-in-out transition-all duration-500 sm:max-w-2xl sm:w-full my-8 sm:mx-auto flex flex-col bg-white shadow-sm rounded">
                            <div class="flex flex-col border border-default-200 shadow-sm rounded-lg  pointer-events-auto">
                                <div class="flex justify-between items-center py-3 px-4 border-b border-default-200">
                                    <h3 class="text-lg font-medium text-default-900">
                                        Modal title
                                    </h3>
                                    <button type="button" class="text-default-600 cursor-pointer" data-hs-overlay="#modal-four">
                                        <i class="i-tabler-x text-lg"></i>
                                    </button>
                                </div>
                                <div class="p-4 overflow-y-auto">
                                    <p class="mt-1 text-default-600">
                                        This is a wider card with supporting text below as a natural
                                        lead-in to additional content.
                                    </p>
                                </div>
                                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-default-200">
                                    <button type="button" class="btn bg-primary text-white" data-hs-overlay="#modal-four">
                                        <i class="i-tabler-x me-1"></i>
                                        Close
                                    </button>
                                    <a class="btn bg-primary text-white" href="#">
                                        Save changes
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <button type="button" class="btn bg-primary text-white" data-hs-overlay="#modal-five">
                        Large
                    </button>
                    <div id="modal-five" class="hs-overlay w-full h-full fixed top-0 left-0 z-70 transition-all duration-500 overflow-y-auto hidden pointer-events-none">
                        <div class="-translate-y-5 hs-overlay-open:translate-y-0 hs-overlay-open:opacity-100 opacity-0 ease-in-out transition-all duration-500 sm:max-w-6xl sm:w-full my-8 sm:mx-auto flex flex-col bg-white shadow-sm rounded">
                            <div class="flex flex-col border border-default-200 shadow-sm rounded-lg  pointer-events-auto">
                                <div class="flex justify-between items-center py-3 px-4 border-b border-default-200">
                                    <h3 class="text-lg font-medium text-default-900">
                                        Modal title
                                    </h3>
                                    <button type="button" class="text-default-600 cursor-pointer" data-hs-overlay="#modal-five">
                                        <i class="i-tabler-x text-lg"></i>
                                    </button>
                                </div>
                                <div class="p-4 overflow-y-auto">
                                    <p class="mt-1 text-default-600">
                                        This is a wider card with supporting text below as a natural
                                        lead-in to additional content.
                                    </p>
                                </div>
                                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-default-200">
                                    <button type="button" class="btn bg-primary text-white" data-hs-overlay="#modal-five">
                                        <i class="i-tabler-x me-1"></i>
                                        Close
                                    </button>
                                    <a class="btn bg-primary text-white" href="#">
                                        Save changes
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header flex items-center justify-between">
            <h5 class="text-lg font-medium text-default-950">Static backdrop</h5>
        </div>
        <div class="card-body">
            <div class="">
                <button type="button" class="btn bg-primary text-white [--overlay-backdrop:static]" data-hs-overlay="#modal-six">
                    Open Modal
                </button>
                <div id="modal-six" class="w-full h-full fixed top-0 left-0 z-70 transition-all duration-500 overflow-y-auto [--overlay-backdrop:static] hidden">
                    <div class="-translate-y-5 hs-overlay-open:translate-y-0 hs-overlay-open:opacity-100 opacity-0 ease-in-out transition-all duration-500 sm:max-w-lg sm:w-full my-8 sm:mx-auto flex flex-col bg-white shadow-sm rounded">
                        <div class="flex flex-col border border-default-200 shadow-sm rounded-lg  pointer-events-auto">
                            <div class="flex justify-between items-center py-3 px-4 border-b border-default-200">
                                <h3 class="text-lg font-medium text-default-900">
                                    Modal title
                                </h3>
                                <button type="button" class="text-default-600 cursor-pointer" data-hs-overlay="#modal-six">
                                    <i class="i-tabler-x text-lg"></i>
                                </button>
                            </div>
                            <div class="p-4 overflow-y-auto">
                                <p class="mt-1 text-default-600">
                                    This is a wider card with supporting text below as a natural
                                    lead-in
                                    to additional content.
                                </p>
                            </div>
                            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-default-200">
                                <button type="button" class="btn bg-primary text-white" data-hs-overlay="#modal-six">
                                    <i class="i-tabler-x me-1"></i>
                                    Close
                                </button>
                                <a class="btn bg-primary text-white" href="#">
                                    Save changes
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header flex items-center justify-between">
            <h5 class="text-lg font-medium text-default-950">Scrolling behavior</h5>
        </div>
        <div class="card-body">
            <div class="">
                <button type="button" class="btn bg-primary text-white [--overlay-backdrop:static]" data-hs-overlay="#modal-seven">
                    Open Modal
                </button>
                <div id="modal-seven" class="hs-overlay w-full h-full fixed top-0 left-0 z-70 transition-all duration-500 overflow-y-auto hidden pointer-events-none">
                    <div class="-translate-y-5 hs-overlay-open:translate-y-0 hs-overlay-open:opacity-100 opacity-0 ease-in-out transition-all duration-500 sm:max-w-lg sm:w-full my-8 sm:mx-auto flex flex-col bg-white shadow-sm rounded">
                        <div class="flex flex-col border border-default-200 shadow-sm rounded-lg  pointer-events-auto">
                            <div class="flex justify-between items-center py-3 px-4 border-b border-default-200">
                                <h3 class="text-lg font-medium text-default-900">
                                    Modal title
                                </h3>
                                <button type="button" class="text-default-600 cursor-pointer" data-hs-overlay="#modal-seven">
                                    <i class="i-tabler-x text-lg"></i>
                                </button>
                            </div>
                            <div class="p-4 overflow-y-auto h-[calc(100vh-500px)]">
                                <div class="space-y-4">
                                    <div>
                                        <h3 class="text-lg font-semibold text-default-800">
                                            Be bold</h3>
                                        <p class="mt-1 text-lg text-default-500">
                                            Motivate teams to do their best work. Offer best
                                            practices
                                            to get users going in the right direction. Be bold and
                                            offer
                                            just enough help to get the work started, and then get
                                            out
                                            of the way. Give accurate information so users can make
                                            educated decisions. Know your user's struggles and
                                            desired
                                            outcomes and give just enough information to let them
                                            get
                                            where they need to go.
                                        </p>
                                    </div>

                                    <div>
                                        <h3 class="text-lg font-semibold text-default-800">
                                            Be optimistic</h3>
                                        <p class="mt-1 text-lg text-default-500">
                                            Focusing on the details gives people confidence in our
                                            products. Weave a consistent story across our fabric and
                                            be
                                            diligent about vocabulary across all messaging by being
                                            brand conscious across products to create a seamless
                                            flow
                                            across all the things. Let people know that they can
                                            jump in
                                            and start working expecting to find a dependable
                                            experience
                                            across all the things. Keep teams in the loop about what
                                            is
                                            happening by informing them of relevant features,
                                            products
                                            and opportunities for success. Be on the journey with
                                            them
                                            and highlight the key points that will help them the
                                            most -
                                            right now. Be in the moment by focusing attention on the
                                            important bits first.
                                        </p>
                                    </div>

                                    <div>
                                        <h3 class="text-lg font-semibold text-default-800">
                                            Be practical, with a wink</h3>
                                        <p class="mt-1 text-lg text-default-500">
                                            Keep our own story short and give teams just enough to
                                            get
                                            moving. Get to the point and be direct. Be concise - we
                                            tell
                                            the story of how we can help, but we do it directly and
                                            with
                                            purpose. Be on the lookout for opportunities and be
                                            quick to
                                            offer a helping hand. At the same time realize that
                                            nobody
                                            likes a nosy neighbor. Give the user just enough to know
                                            that something awesome is around the corner and then get
                                            out
                                            of the way. Write clear, accurate, and concise text that
                                            makes interfaces more usable and consistent - and builds
                                            trust. We strive to write text that is understandable by
                                            anyone, anywhere, regardless of their culture or
                                            language so
                                            that everyone feels they are part of the team.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-default-200">
                                <button type="button" class="btn bg-primary text-white" data-hs-overlay="#modal-seven">
                                    <i class="i-tabler-x me-1"></i>
                                    Close
                                </button>
                                <a class="btn bg-primary text-white" href="#">
                                    Save changes
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

@endsection