@extends('layouts.vertical', ['title' => 'Plans'])

@section('css')

@endsection

@section('content')

@include("layouts.shared/page-title", ["subtitle" => "Apps", "title" => "Plans"])

<div class="sm:align-center sm:flex sm:flex-col">
    <h1 class="text-3xl font-bold tracking-tight text-default-900 sm:text-center">Pricing Plans</h1>

    <!-- Toggle -->
    <div class="flex justify-center mb-3 mt-6">
        <div id="toggle-count" class="p-0.5 inline-block border border-default-300 rounded-xl">
            <label for="toggle-count-monthly" class="relative inline-block py-2 px-3">
                <span class="inline-block relative z-10 text-sm font-medium text-default-800 cursor-pointer">
                    Monthly
                </span>
                <input id="toggle-count-monthly" name="toggle-count" type="radio" class="absolute top-0 end-0 size-full border-transparent bg-transparent bg-none text-transparent rounded-lg cursor-pointer before:absolute before:inset-0 before:size-full before:rounded-lg focus:ring-offset-0 checked:before:bg-white checked:before:shadow-sm checked:bg-none focus:ring-transparent" checked>
            </label>

            <label for="toggle-count-annual" class="relative inline-block py-2 px-3">
                <span class="inline-block relative z-10 text-sm font-medium text-default-800 cursor-pointer">
                    Annual
                </span>
                <input id="toggle-count-annual" name="toggle-count" type="radio" class="absolute top-0 end-0 size-full border-transparent bg-transparent bg-none text-transparent rounded-lg cursor-pointer before:absolute before:inset-0 before:size-full before:rounded-lg focus:ring-offset-0 checked:before:bg-white checked:before:shadow-sm checked:bg-none focus:ring-transparent">
            </label>
        </div>
    </div>
    <!-- End Toggle -->
</div>

<div class="grid lg:grid-cols-4 md:grid-cols-2 gap-6 mt-6">
    <!-- Plan 1: Starter -->
    <div class="card overflow-hidden">
        <div class="p-6">
            <h2 class="text-xl font-semibold leading-6 text-default-900">Starter</h2>
            <p class="mt-4 text-sm text-default-500">The essentials to kickstart your business</p>
            <p class="mt-8">
                <span class="text-4xl font-bold tracking-tight text-default-900">
                    <span>$</span>
                    <span data-hs-toggle-count='{"target": "#toggle-count","min": 9,"max": 99}'>9</span>
                </span>
            </p>
            <a href="#" class="mt-8 btn bg-primary/20 text-primary w-full">
                Buy Starter
            </a>
        </div>
        <div class="px-6 pt-6 pb-8 bg-default-50">
            <h3 class="text-sm font-medium text-default-900">What's included</h3>
            <ul role="list" class="mt-6 space-y-4">
                <li class="flex space-x-3">
                    <i class="i-ph-check-circle size-5 text-success"></i>
                    <span class="text-sm text-default-500">Basic website hosting</span>
                </li>
                <li class="flex space-x-3">
                    <i class="i-ph-check-circle size-5 text-success"></i>
                    <span class="text-sm text-default-500">10 GB of storage</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- Plan 2: Pro -->
    <div class="card overflow-hidden">
        <div class="p-6">
            <h2 class="text-xl font-semibold leading-6 text-default-900">Pro</h2>
            <p class="mt-4 text-sm text-default-500">Advanced features for growing businesses</p>
            <p class="mt-8">
                <span class="text-4xl font-bold tracking-tight text-default-900">
                    <span>$</span>
                    <span data-hs-toggle-count='{"target": "#toggle-count","min": 29,"max": 199}'>29</span>
                </span>
            </p>
            <a href="#" class="mt-8 btn bg-primary/20 text-primary w-full">
                Buy Pro
            </a>
        </div>
        <div class="px-6 pt-6 pb-8 bg-default-50">
            <h3 class="text-sm font-medium text-default-900">What's included</h3>
            <ul role="list" class="mt-6 space-y-4">
                <li class="flex space-x-3">
                    <i class="i-ph-check-circle size-5 text-success"></i>
                    <span class="text-sm text-default-500">Website hosting and domain</span>
                </li>
                <li class="flex space-x-3">
                    <i class="i-ph-check-circle size-5 text-success"></i>
                    <span class="text-sm text-default-500">50 GB of storage</span>
                </li>
                <li class="flex space-x-3">
                    <i class="i-ph-check-circle size-5 text-success"></i>
                    <span class="text-sm text-default-500">Free SSL certificate</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- Plan 3: Business -->
    <div class="card overflow-hidden">
        <div class="p-6">
            <h2 class="text-xl font-semibold leading-6 text-default-900">Business</h2>
            <p class="mt-4 text-sm text-default-500">Comprehensive solutions for established businesses
            </p>
            <p class="mt-8">
                <span class="text-4xl font-bold tracking-tight text-default-900">
                    <span>$</span>
                    <span data-hs-toggle-count='{"target": "#toggle-count","min": 99,"max": 399}'>99</span>
                </span>
            </p>
            <a href="#" class="mt-8 btn bg-primary/20 text-primary w-full">
                Buy Business
            </a>
        </div>
        <div class="px-6 pt-6 pb-8 bg-default-50">
            <h3 class="text-sm font-medium text-default-900">What's included</h3>
            <ul role="list" class="mt-6 space-y-4">
                <li class="flex space-x-3">
                    <i class="i-ph-check-circle size-5 text-success"></i>
                    <span class="text-sm text-default-500">Website and email hosting</span>
                </li>
                <li class="flex space-x-3">
                    <i class="i-ph-check-circle size-5 text-success"></i>
                    <span class="text-sm text-default-500">Unlimited storage</span>
                </li>
                <li class="flex space-x-3">
                    <i class="i-ph-check-circle size-5 text-success"></i>
                    <span class="text-sm text-default-500">Priority support</span>
                </li>
                <li class="flex space-x-3">
                    <i class="i-ph-check-circle size-5 text-success"></i>
                    <span class="text-sm text-default-500">Free backups</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- Plan 4: Enterprise -->
    <div class="card overflow-hidden">
        <div class="p-6">
            <h2 class="text-xl font-semibold leading-6 text-default-900">Enterprise</h2>
            <p class="mt-4 text-sm text-default-500">Full-featured solutions for large organizations</p>
            <p class="mt-8">
                <span class="text-4xl font-bold tracking-tight text-default-900">
                    <span>$</span>
                    <span data-hs-toggle-count='{"target": "#toggle-count","min": 299,"max": 999}'>299</span>
                </span>
            </p>
            <a href="#" class="mt-8 btn bg-primary/20 text-primary w-full">
                Buy Enterprise
            </a>
        </div>
        <div class="px-6 pt-6 pb-8 bg-default-50">
            <h3 class="text-sm font-medium text-default-900">What's included</h3>
            <ul role="list" class="mt-6 space-y-4">
                <li class="flex space-x-3">
                    <i class="i-ph-check-circle size-5 text-success"></i>
                    <span class="text-sm text-default-500">Custom website and hosting</span>
                </li>
                <li class="flex space-x-3">
                    <i class="i-ph-check-circle size-5 text-success"></i>
                    <span class="text-sm text-default-500">Unlimited storage and bandwidth</span>
                </li>
                <li class="flex space-x-3">
                    <i class="i-ph-check-circle size-5 text-success"></i>
                    <span class="text-sm text-default-500">24/7 dedicated support</span>
                </li>
                <li class="flex space-x-3">
                    <i class="i-ph-check-circle size-5 text-success"></i>
                    <span class="text-sm text-default-500">Custom integrations</span>
                </li>
                <li class="flex space-x-3">
                    <i class="i-ph-check-circle size-5 text-success"></i>
                    <span class="text-sm text-default-500">Advanced security features</span>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection

@section('script')

@endsection