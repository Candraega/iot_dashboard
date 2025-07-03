@extends('layouts.vertical', ['title' => 'Collapse'])

@section('css')

@endsection

@section('content')

@include("layouts.shared/page-title", ["subtitle" => "Components", "title" => "Collapse"])

<div class="grid lg:grid-cols-2 gap-6">
    <div class="card">
        <div class="card-header flex items-center justify-between">
            <h5 class="text-lg font-medium text-default-950">Default Collapse</h5>
        </div>
        <div class="card-body">
            <div class="flex flex-wrap items-center gap-2">
                <div>
                    <button type="button" class="hs-collapse-toggle btn bg-primary text-white" id="hs-basic-collapse" data-hs-collapse="#hs-basic-collapse-heading">
                        Collapse
                        <i class="i-tabler-chevron-down hs-collapse-open:rotate-180 shrink text-base transition-all duration-300 text-white"></i>
                    </button>
                    <div id="hs-basic-collapse-heading" class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-collapse">
                        <div class="mt-5">
                            <p class="text-default-500">
                                This is a collapse body. It is hidden by default, until the collapse
                                plugin adds the appropriate classes that we use to style each
                                element.
                                These classes control the overall appearance, as well as the showing
                                and
                                hiding via CSS transitions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header flex items-center justify-between">
            <h5 class="text-lg font-medium text-default-950">Show/Hide</h5>
        </div>
        <div class="card-body">
            <div class="flex flex-wrap items-center gap-2">
                <p class="">
                    <button class="hs-collapse-toggle inline-flex items-center gap-x-2 text-primary" id="hs-show-hide-collapse" data-hs-collapse="#hs-show-hide-collapse-heading">
                        <span class="hs-collapse-open:hidden">Read more</span>
                        <span class="hs-collapse-open:block hidden">Read less</span>
                        <i class="i-tabler-chevron-down hs-collapse-open:rotate-180 transition-all duration-300 text-lg ms-2"></i>
                    </button>
                </p>
                <div id="hs-show-hide-collapse-heading" class="hs-collapse w-full overflow-hidden transition-[height] duration-300 hidden" aria-labelledby="hs-show-hide-collapse">
                    <p>
                        This is a collapse body. It is hidden by default, until the collapse plugin
                        adds
                        the appropriate classes that we use to style each element. These classes
                        control
                        the overall appearance, as well as the showing and hiding via CSS
                        transitions.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

@endsection