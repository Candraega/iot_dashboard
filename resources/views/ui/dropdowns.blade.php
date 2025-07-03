@extends('layouts.vertical', ['title' => 'Dropdown'])

@section('css')

@endsection

@section('content')

@include("layouts.shared/page-title", ["subtitle" => "Components", "title" => "Dropdown"])

<div class="grid lg:grid-cols-2 gap-6">
    <div class="card">
        <div class="card-header">
            <div class="">
                <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Default Dropdowns
                </h5>
                <p class="text-default-600 text-sm font-medium">The default dropdown menu
                    appearance.</p>
            </div>
        </div>
        <div class="card-body">
            <div class="flex flex-wrap items-center gap-2">
                <div class="hs-dropdown relative">
                    <button id="hs-dropdown-default" type="button" class="hs-dropdown-toggle py-2 px-5 inline-flex items-center justify-center font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-600 border-primary hover:border-primary-600 text-white rounded-md">
                        Primary <i class="i-tabler-chevron-down ms-1"></i>
                    </button>

                    <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 min-w-48 transition-[opacity,margin] mt-4 opacity-0 z-10 bg-white shadow-lg rounded-lg border border-default-100 p-1.5 hidden">
                        <ul class="flex flex-col gap-1">
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Another Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Somthing else here</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="hs-dropdown relative">
                    <button id="hs-dropdown-default" type="button" class="hs-dropdown-toggle py-2 px-5 inline-flex items-center justify-center font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-default-500 hover:bg-default-600 border-default-500 hover:border-default-600 text-white rounded-md">
                        Gray <i class="i-tabler-chevron-down ms-1"></i>
                    </button>

                    <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 min-w-48 transition-[opacity,margin] mt-4 opacity-0 z-10 bg-white shadow-lg rounded-lg border border-default-100 p-1.5 hidden">
                        <ul class="flex flex-col gap-1">
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Another Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Somthing else here</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="">
                <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Menu alignment</h5>
                <p class="text-default-600 text-sm font-medium">Dropdown menu alignments.</p>
            </div>
        </div>
        <div class="card-body">
            <div class="flex flex-wrap gap-2">
                <div class="hs-dropdown relative [--placement:right-top]">
                    <button type="button" class="py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center text-default-900 bg-default-100 hover:bg-default-200 border-default-100 hover:border-default-200 rounded-md">
                        Dropdown Right <i class="i-tabler-chevron-down ms-1"></i>
                    </button>

                    <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 min-w-48 transition-[opacity,margin] mt-4 opacity-0 z-10 bg-white shadow-lg rounded-lg border border-default-100 p-1.5 hidden">
                        <ul class="flex flex-col gap-1">
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Another Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Somthing else here</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="hs-dropdown relative [--placement:left-top]">
                    <button type="button" class="hs-dropdown-toggle py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center text-default-900 bg-default-100 hover:bg-default-200 border-default-100 hover:border-default-200 rounded-md">
                        Dropdown left <i class="i-tabler-chevron-down ms-1"></i>
                    </button>

                    <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 min-w-48 transition-[opacity,margin] mt-4 opacity-0 z-10 bg-white shadow-lg rounded-lg border border-default-100 p-1.5 hidden">
                        <ul class="flex flex-col gap-1">
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Another Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Somthing else here</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="hs-dropdown relative [--placement:top]">
                    <button type="button" class="hs-dropdown-toggle py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center text-default-900 bg-default-100 hover:bg-default-200 border-default-100 hover:border-default-200 rounded-md">
                        Dropdown Top <i class="i-tabler-chevron-down ms-1"></i>
                    </button>

                    <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 min-w-48 transition-[opacity,margin] mt-4 opacity-0 z-10 bg-white shadow-lg rounded-lg border border-default-100 p-1.5 hidden">
                        <ul class="flex flex-col gap-1">
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Another Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Somthing else here</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="hs-dropdown relative [--placement:bottom]">
                    <button type="button" class="hs-dropdown-toggle py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center text-default-900 bg-default-100 hover:bg-default-200 border-default-100 hover:border-default-200 rounded-md">
                        Dropdown Bottom <i class="i-tabler-chevron-down ms-1"></i>
                    </button>

                    <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 min-w-48 transition-[opacity,margin] mt-4 opacity-0 z-10 bg-white shadow-lg rounded-lg border border-default-100 p-1.5 hidden">
                        <ul class="flex flex-col gap-1">
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Another Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Somthing else here</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="hs-dropdown relative [--placement:top-left]">
                    <button type="button" class="hs-dropdown-toggle py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center text-default-900 bg-default-100 hover:bg-default-200 border-default-100 hover:border-default-200 rounded-md">
                        Top Left <i class="i-tabler-chevron-down ms-1"></i>
                    </button>

                    <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 min-w-48 transition-[opacity,margin] mt-4 opacity-0 z-10 bg-white shadow-lg rounded-lg border border-default-100 p-1.5 hidden">
                        <ul class="flex flex-col gap-1">
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Another Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Somthing else here</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="hs-dropdown relative [--placement:top-right]">
                    <button type="button" class="hs-dropdown-toggle py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center text-default-900 bg-default-100 hover:bg-default-200 border-default-100 hover:border-default-200 rounded-md">
                        Top Right <i class="i-tabler-chevron-down ms-1"></i>
                    </button>

                    <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 min-w-48 transition-[opacity,margin] mt-4 opacity-0 z-10 bg-white shadow-lg rounded-lg border border-default-100 p-1.5 hidden">
                        <ul class="flex flex-col gap-1">
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Another Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Somthing else here</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="">
                <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Color Variant</h5>
                <p class="text-default-600 text-sm font-medium">Dropdown menu alignments.</p>
            </div>
        </div>
        <div class="card-body">
            <div class="flex flex-wrap gap-2">
                <div class="hs-dropdown relative">
                    <button type="button" class="py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center text-white bg-primary hover:bg-primary-600 border-primary hover:border-primary-600 rounded-md">
                        Primary <i class="i-tabler-chevron-down ms-1"></i>
                    </button>

                    <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 min-w-48 transition-[opacity,margin] mt-4 opacity-0 z-10 bg-white shadow-lg rounded-lg border border-default-100 p-1.5 hidden">
                        <ul class="flex flex-col gap-1">
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Another Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Somthing else here</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="hs-dropdown relative">
                    <button type="button" class="hs-dropdown-toggle py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center text-white bg-default-500 hover:bg-default-600 border-default-500 hover:border-default-600 rounded-md">
                        Gray <i class="i-tabler-chevron-down ms-1"></i>
                    </button>

                    <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 min-w-48 transition-[opacity,margin] mt-4 opacity-0 z-10 bg-white shadow-lg rounded-lg border border-default-100 p-1.5 hidden">
                        <ul class="flex flex-col gap-1">
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Another Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Somthing else here</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="hs-dropdown relative">
                    <button type="button" class="hs-dropdown-toggle py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center text-white bg-teal-500 hover:bg-teal-600 border-teal-500 hover:border-teal-600 rounded-md">
                        Teal <i class="i-tabler-chevron-down ms-1"></i>
                    </button>

                    <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 min-w-48 transition-[opacity,margin] mt-4 opacity-0 z-10 bg-white shadow-lg rounded-lg border border-default-100 p-1.5 hidden">
                        <ul class="flex flex-col gap-1">
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Another Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Somthing else here</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="hs-dropdown relative">
                    <button type="button" class="hs-dropdown-toggle py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center text-white bg-primary-500 hover:bg-primary-600 border-primary-500 hover:border-primary-600 rounded-md">
                        Blue <i class="i-tabler-chevron-down ms-1"></i>
                    </button>

                    <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 min-w-48 transition-[opacity,margin] mt-4 opacity-0 z-10 bg-white shadow-lg rounded-lg border border-default-100 p-1.5 hidden">
                        <ul class="flex flex-col gap-1">
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Another Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Somthing else here</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="hs-dropdown relative">
                    <button type="button" class="hs-dropdown-toggle py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center text-white bg-amber-500 hover:bg-amber-600 border-amber-500 hover:border-amber-600 rounded-md">
                        Yellow <i class="i-tabler-chevron-down ms-1"></i>
                    </button>

                    <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 min-w-48 transition-[opacity,margin] mt-4 opacity-0 z-10 bg-white shadow-lg rounded-lg border border-default-100 p-1.5 hidden">
                        <ul class="flex flex-col gap-1">
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Another Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Somthing else here</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="hs-dropdown relative">
                    <button type="button" class="hs-dropdown-toggle py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center text-white bg-cyan-500 hover:bg-cyan-600 border-cyan-500 hover:border-cyan-600 rounded-md">
                        Cyan <i class="i-tabler-chevron-down ms-1"></i>
                    </button>

                    <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 min-w-48 transition-[opacity,margin] mt-4 opacity-0 z-10 bg-white shadow-lg rounded-lg border border-default-100 p-1.5 hidden">
                        <ul class="flex flex-col gap-1">
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Another Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Somthing else here</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="hs-dropdown relative">
                    <button type="button" class="hs-dropdown-toggle py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center text-white bg-primary-500 hover:bg-primary-600 border-primary-500 hover:border-primary-600 rounded-md">
                        sky <i class="i-tabler-chevron-down ms-1"></i>
                    </button>

                    <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 min-w-48 transition-[opacity,margin] mt-4 opacity-0 z-10 bg-white shadow-lg rounded-lg border border-default-100 p-1.5 hidden">
                        <ul class="flex flex-col gap-1">
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Another Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Somthing else here</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="hs-dropdown relative">
                    <button type="button" class="hs-dropdown-toggle py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center text-white bg-indigo-500 hover:bg-indigo-600 border-indigo-500 hover:border-indigo-600 rounded-md">
                        Indigo <i class="i-tabler-chevron-down ms-1"></i>
                    </button>

                    <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 min-w-48 transition-[opacity,margin] mt-4 opacity-0 z-10 bg-white shadow-lg rounded-lg border border-default-100 p-1.5 hidden">
                        <ul class="flex flex-col gap-1">
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Another Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Somthing else here</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="hs-dropdown relative">
                    <button type="button" class="hs-dropdown-toggle py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center text-white bg-purple-500 hover:bg-purple-600 border-purple-500 hover:border-purple-600 rounded-md">
                        Purple <i class="i-tabler-chevron-down ms-1"></i>
                    </button>

                    <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 min-w-48 transition-[opacity,margin] mt-4 opacity-0 z-10 bg-white shadow-lg rounded-lg border border-default-100 p-1.5 hidden">
                        <ul class="flex flex-col gap-1">
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Another Action</a>
                            </li>
                            <li>
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Somthing else here</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="">
                <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Variant</h5>
                <p class="text-default-600 text-sm font-medium">Dropdown menu alignments.</p>
            </div>
        </div>

        <div class="card-body">
            <div class="flex flex-wrap gap-2">
                <div class="hs-dropdown [--auto-close:inside]">
                    <button type="button" class="hs-dropdown-toggle inline-flex items-center gap-2 py-2 px-6 text-base text-center bg-primary hover:bg-primary-700 text-white rounded-md transition-all duration-500">
                        Radio <i class="h-4 w-4 ms-1"></i>
                    </button>

                    <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 min-w-48 transition-[opacity,margin] mt-4 opacity-0 z-10 bg-white shadow-lg rounded-lg border border-default-100 p-1.5 hidden">
                        <div class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-100 rounded">
                            <div class="flex items-center">
                                <input type="radio" name="default-radio" class="h-4 w-4 border-default-200 bg-default-50 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary/60 focus:ring-offset-0" id="default-radio">
                                <label for="default-radio" class="text-sm text-default-600 ms-2">Default
                                    radio</label>
                            </div>
                        </div>
                        <div class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-100 rounded">
                            <div class="flex items-center">
                                <input type="radio" name="default-radio" class="h-4 w-4 border-default-200 bg-default-50 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary/60 focus:ring-offset-0" id="checked-radio" checked="">
                                <label for="checked-radio" class="text-sm text-default-600 ms-2">Checked
                                    radio</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hs-dropdown [--auto-close:inside]">
                    <button type="button" class="hs-dropdown-toggle inline-flex items-center gap-2 py-2 px-6 text-base text-center bg-primary hover:bg-primary-700 text-white rounded-md transition-all duration-500">
                        CheckBox <i class="i-tabler-chevron-down h-4 w-4 ms-1"></i>
                    </button>

                    <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 min-w-48 transition-[opacity,margin] mt-4 opacity-0 z-10 bg-white shadow-lg rounded-lg border border-default-100 p-1.5 hidden">
                        <div class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-100 rounded">
                            <div class="flex items-center">
                                <input type="checkbox" class="h-4 w-4 rounded border-default-200 bg-default-50 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary/60 focus:ring-offset-0" id="default-checkbox">
                                <label for="default-checkbox" class="text-sm text-default-600 ms-2">Default checkbox</label>
                            </div>
                        </div>
                        <div class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-100 rounded">
                            <div class="flex items-center">
                                <input type="checkbox" class="h-4 w-4 rounded border-default-200 bg-default-50 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary/60 focus:ring-offset-0" id="checked-checkbox" checked="">
                                <label for="checked-checkbox" class="text-sm text-default-600 ms-2">Checked checkbox</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hs-dropdown [--auto-close:inside]">
                    <button type="button" class="hs-dropdown-toggle inline-flex items-center gap-2 py-2 px-6 text-base text-center bg-primary hover:bg-primary-700 text-white rounded-md transition-all duration-500">
                        Form <i class="h-4 w-4 ms-1"></i>
                    </button>

                    <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 min-w-48 transition-[opacity,margin] mt-4 opacity-0 z-10 bg-white shadow-lg rounded-lg border border-default-100 p-4 hidden">
                        <form class="">
                            <div class="mb-3 space-y-1">
                                <label for="exampleInputEmail1" class="text-default-800 font-medium">Email address</label>
                                <input type="email" class="block w-full rounded py-1.5 px-3 bg-transparent border-default-200 text-default-900 focus:ring-transparent focus:border-default-200" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <span class="inline-block"><small id="emailHelp" class="form-text text-sm text-default-700">We'll never share
                                        your email with anyone else.</small></span>
                            </div>
                            <div class="mb-3 space-y-1">
                                <label for="exampleInputPassword1" class="text-default-800 font-medium">Password</label>
                                <input type="password" class="block w-full rounded py-1.5 px-3 bg-transparent border-default-200 text-default-900 focus:ring-transparent focus:border-default-200" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="flex items-center gap-2 mb-3">
                                <input type="checkbox" class="h-4 w-4 rounded border-default-200 bg-default-50 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary/60 focus:ring-offset-0" id="checkmeout0">
                                <label class="text-default-800 text-sm font-medium inline-block" for="checkmeout0">Check me out !</label>
                            </div>
                            <button type="submit" class="inline-block py-2 px-4 text-sm text-center bg-primary hover:bg-primary-700 text-white rounded transition-all duration-500">Submit</button>
                        </form>
                    </div>
                </div>

                <div class="hs-dropdown">
                    <button class="hs-dropdown-toggle h-10 w-10 inline-flex items-center justify-center bg-primary text-white rounded-md transition-all duration-500 hover:bg-primary-700"><i data-ti="more-vertical" class="h-4 w-4"></i></button>
                    <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 min-w-48 transition-[opacity,margin] mt-4 opacity-0 z-10 bg-white shadow-lg rounded-lg border border-default-100 hidden">
                        <ul class="flex flex-col gap-1 py-1.5">
                            <li class="mx-1.5">
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-100 rounded" href="#">Action</a>
                            </li>
                            <li class="mx-1.5">
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-100 rounded" href="#">Another Action</a>
                            </li>
                            <li class="mx-1.5">
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-100 rounded" href="#">Menu Item</a>
                            </li>
                            <hr class="border-default-200">
                            <li class="mx-1.5">
                                <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-100 rounded" href="#">Something else here</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

@endsection