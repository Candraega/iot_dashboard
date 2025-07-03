@extends('layouts.vertical', ['title' => 'Breadcrumb'])

@section('css')

@endsection

@section('content')

@include("layouts.shared/page-title", ["subtitle" => "Components", "title" => "Breadcrumb"])

<div class="grid lg:grid-cols-2 gap-6">
    <div class="card">
        <div class="card-header flex items-center justify-between">
            <h5 class="text-lg font-medium text-default-950">Simple</h5>
        </div>
        <div class="card-body">
            <nav class="flex" aria-label="Breadcrumb">
                <ol role="list" class="flex items-center text-sm font-semibold space-x-4">
                    <li>
                        <div class="flex items-center">
                            <a href="#" class="text-default-600 hover:text-default-900">
                                <i class="i-tabler-home text-lg/3 flex-shrink-0"></i>
                                <a href="#" class="ms-2 text-sm font-medium text-default-600 hover:text-default-900">Dashtrap</a>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="flex items-center">
                            <i class="i-tabler-chevron-right text-lg flex-shrink-0 text-default-600"></i>
                            <a href="#" class="ms-4 text-sm font-medium text-default-600 hover:text-default-900">Admin</a>
                        </div>
                    </li>

                    <li>
                        <div class="flex items-center">
                            <i class="i-tabler-chevron-right text-lg flex-shrink-0 text-default-600"></i>
                            <a href="#" class="ms-4 text-sm font-medium text-default-600 hover:text-default-900" aria-current="page">Dashboard</a>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="card">
        <div class="card-header flex items-center justify-between">
            <h5 class="text-lg font-medium text-default-950">Example</h5>
        </div>
        <div class="card-body">
            <ol class="flex items-center whitespace-nowrap min-w-0" aria-label="Breadcrumb">
                <li class="text-sm text-default-600">
                    <a class="flex items-center font-medium hover:text-primary-600" href="#">
                        Dashtrap
                        <span class="mx-2">/</span>
                    </a>
                </li>

                <li class="text-sm text-default-600">
                    <a class="flex items-center font-medium hover:text-primary-600" href="#">
                        Admin
                        <span class="mx-2">/</span>
                    </a>
                </li>

                <li class="text-sm font-semibold text-default-800 truncate" aria-current="page">
                    Dashboard
                </li>
            </ol>
        </div>
    </div>
</div>

@endsection

@section('script')

@endsection