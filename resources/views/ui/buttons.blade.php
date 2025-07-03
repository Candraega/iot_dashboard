@extends('layouts.vertical', ['title' => 'Buttons'])

@section('css')

@endsection

@section('content')

@include("layouts.shared/page-title", ["subtitle" => "Components", "title" => "Button"])

<div class="grid 2xl:grid-cols-2 grid-cols-1 gap-5">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Default Buttons</h4>
        </div>
        <div class="p-5">
            <div class="flex flex-wrap items-center gap-3">
                <button type="button" class="btn bg-primary text-white">Primary</button>
                <button type="button" class="btn bg-success text-white">Success</button>
                <button type="button" class="btn bg-info text-white">Info</button>
                <button type="button" class="btn bg-warning text-white">Warning</button>
                <button type="button" class="btn bg-danger text-white">Danger</button>
                <button type="button" class="btn bg-dark text-white">Dark</button>
                <button type="button" class="btn bg-secondary text-white">Secondary</button>
                <button type="button" class="btn bg-light text-default-900">Light</button>
            </div>
        </div>
    </div>

    <div class="card">

        <div class="p-5">
            <h4 class="card-title mb-4">Rounded Button</h4>

            <div class="flex flex-wrap items-center gap-3">
                <button type="button" class="btn bg-primary text-white rounded-full">Primary</button>
                <button type="button" class="btn bg-success text-white rounded-full">Success</button>
                <button type="button" class="btn bg-info text-white rounded-full">Info</button>
                <button type="button" class="btn bg-warning text-white rounded-full">Warning</button>
                <button type="button" class="btn bg-danger text-white rounded-full">Danger</button>
                <button type="button" class="btn bg-dark text-white rounded-full">Dark</button>
                <button type="button" class="btn bg-secondary text-white rounded-full">Secondary</button>
                <button type="button" class="btn bg-light text-default-900 rounded-full">Light</button>
            </div>
        </div>
    </div>

    <div class="card">

        <div class="p-5">
            <h4 class="card-title mb-4">Otline Buttons</h4>

            <div class="flex flex-wrap items-center gap-3">
                <button type="button" class="btn border-primary text-primary hover:bg-primary hover:text-white">Primary</button>
                <button type="button" class="btn border-success text-success hover:bg-success hover:text-white">Success</button>
                <button type="button" class="btn border-info text-info hover:bg-info hover:text-white">Info</button>
                <button type="button" class="btn border-warning text-warning hover:bg-warning hover:text-white">Warning</button>
                <button type="button" class="btn border-danger text-danger hover:bg-danger hover:text-white">Danger</button>
                <button type="button" class="btn border-dark text-default-900 hover:bg-dark hover:text-white">Dark</button>
                <button type="button" class="btn border-secondary text-secondary hover:bg-secondary hover:text-white">Secondary</button>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="p-5">
            <h4 class="card-title mb-4">Outline Rounded Buttons</h4>

            <div class="flex flex-wrap items-center gap-3">
                <button type="button" class="btn rounded-full border border-primary text-primary hover:bg-primary hover:text-white">Primary</button>
                <button type="button" class="btn rounded-full border border-success text-success hover:bg-success hover:text-white">Success</button>
                <button type="button" class="btn rounded-full border border-info text-info hover:bg-info hover:text-white">Info</button>
                <button type="button" class="btn rounded-full border border-warning text-warning hover:bg-warning hover:text-white">Warning</button>
                <button type="button" class="btn rounded-full border border-danger text-danger hover:bg-danger hover:text-white">Danger</button>
                <button type="button" class="btn rounded-full border border-dark text-default-900 hover:bg-dark hover:text-white">Dark</button>
                <button type="button" class="btn rounded-full border border-secondary text-secondary hover:bg-secondary hover:text-white">Secondary</button>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="p-5">
            <h4 class="card-title mb-4">Soft Buttons</h4>

            <div class="flex flex-wrap items-center gap-3">
                <button type="button" class="btn bg-primary/25 text-primary hover:bg-primary hover:text-white">Primary</button>
                <button type="button" class="btn bg-success/25 text-success hover:bg-success hover:text-white">Success</button>
                <button type="button" class="btn bg-info/25 text-info hover:bg-info hover:text-white">Info</button>
                <button type="button" class="btn bg-warning/25 text-warning hover:bg-warning hover:text-white">Warning</button>
                <button type="button" class="btn bg-danger/25 text-danger hover:bg-danger hover:text-white">Danger</button>
                <button type="button" class="btn bg-dark/25 text-white hover:bg-dark">Dark</button>
                <button type="button" class="btn bg-secondary/25 text-secondary hover:bg-secondary hover:text-white">Secondary</button>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="p-5">
            <h4 class="card-title mb-4">Soft Rounded Buttons</h4>

            <div class="flex flex-wrap items-center gap-3">
                <button type="button" class="btn rounded-full bg-primary/25 text-primary hover:bg-primary hover:text-white">Primary</button>
                <button type="button" class="btn rounded-full bg-success/25 text-success hover:bg-success hover:text-white">Success</button>
                <button type="button" class="btn rounded-full bg-info/25 text-info hover:bg-info hover:text-white">Info</button>
                <button type="button" class="btn rounded-full bg-warning/25 text-warning hover:bg-warning hover:text-white">Warning</button>
                <button type="button" class="btn rounded-full bg-danger/25 text-danger hover:bg-danger hover:text-white">Danger</button>
                <button type="button" class="btn rounded-full bg-dark/25 text-default-900 hover:bg-dark hover:text-white">Dark</button>
                <button type="button" class="btn rounded-full bg-secondary/25 text-secondary hover:bg-secondary hover:text-white">Secondary</button>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="p-5">
            <h4 class="card-title mb-4">Buttons with Icon</h4>

            <div class="flex flex-wrap items-center gap-3">
                <button type="button" class="btn bg-primary text-white">
                    <i class="i-tabler-check text-base me-4"></i> Primary
                </button>
                <button type="button" class="btn bg-success text-white">
                    <i class="i-tabler-check text-base me-4"></i> Success
                </button>
                <button type="button" class="btn bg-info text-white">
                    <i class="i-tabler-info-circle text-base me-4"></i> Info
                </button>
                <button type="button" class="btn bg-warning text-white">
                    <i class="i-tabler-alert-triangle text-base me-4"></i> Warning
                </button>
                <button type="button" class="btn bg-danger text-white">
                    <i class="i-tabler-brand-x text-base me-4"></i> Danger
                </button>
                <button type="button" class="btn bg-dark text-white">
                    <i class="i-tabler-check text-base me-4"></i> Dark
                </button>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="p-5">
            <h4 class="card-title mb-4">Sizes</h4>

            <div class="flex items-center gap-2">
                <button type="button" class="btn btn-sm bg-primary text-white">Small</button>
                <button type="button" class="btn bg-primary text-white">Large</button>
                <button type="button" class="btn btn-lg bg-primary text-white">Default</button>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="p-5">
            <h4 class="card-title mb-4">Block Button</h4>

            <div class="flex flex-col gap-2">
                <button type="button" class="btn w-full bg-primary text-white">Default</button>
                <button type="button" class="btn w-full border-primary text-primary">Default</button>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="p-5">
            <h4 class="card-title mb-4">Disabled</h4>

            <div class="flex flex-wrap gap-3">
                <button type="button" class="btn bg-primary text-white" disabled>Disabled</button>
                <button type="button" class="btn border-primary text-primary" disabled>Disabled</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

@endsection