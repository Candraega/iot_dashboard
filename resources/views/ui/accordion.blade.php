@extends('layouts.vertical', ['title' => 'Accordion'])

@section('css')

@endsection

@section('content')

@include("layouts.shared/page-title", ["subtitle" => "Components", "title" => "Accordions"])

<div class="grid lg:grid-cols-2 gap-6">
    <div class="card">
        <div class="card-header flex items-center justify-between">
            <div class="">
                <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Example</h5>
                <p class="text-default-600 text-sm font-medium">Click the accordions below to
                    expand/collapse the accordion content..</p>
            </div>
        </div>
        <div class="card-body">
            <div class="hs-accordion-group">
                <div class="hs-accordion active" id="basic-heading-one">
                    <button class="hs-accordion-toggle hs-accordion-active:text-primary group py-3 inline-flex items-center gap-x-3 w-full font-semibold text-left text-default-800 transition hover:text-default-500" aria-controls="hs-basic-collapse-one">
                        <i class="i-tabler-plus hs-accordion-active:hidden hs-accordion-active:text-primary-600 block w-3 h-3 text-default-600 group-hover:text-default-500"></i>
                        <i class="i-tabler-minus hs-accordion-active:block hs-accordion-active:text-primary-600 hidden w-3 h-3 text-default-600 group-hover:text-default-500"></i>
                        Accordion #1
                    </button>
                    <div id="basic-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="#basic-heading-one">
                        <p class="text-default-800">
                            <em>This is the third item's accordion body.</em> It is hidden by
                            default, until the collapse plugin adds the appropriate classes that we
                            use to style each element. These classes control the overall appearance,
                            as well as the showing and hiding via CSS transitions.
                        </p>
                    </div>
                </div>

                <div class="hs-accordion" id="basic-heading-two">
                    <button class="hs-accordion-toggle hs-accordion-active:text-primary group py-3 inline-flex items-center gap-x-3 w-full font-semibold text-left text-default-800 transition hover:text-default-500" aria-controls="hs-basic-collapse-two">
                        <i class="i-tabler-plus hs-accordion-active:hidden hs-accordion-active:text-primary-600 block w-3 h-3 text-default-600 group-hover:text-default-500"></i>
                        <i class="i-tabler-minus hs-accordion-active:block hs-accordion-active:text-primary-600 hidden w-3 h-3 text-default-600 group-hover:text-default-500"></i>
                        Accordion #2
                    </button>
                    <div id="basic-collapse-two" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="#basic-heading-two">
                        <p class="text-default-800">
                            <em>This is the third item's accordion body.</em> It is hidden by
                            default, until the collapse plugin adds the appropriate classes that we
                            use to style each element. These classes control the overall appearance,
                            as well as the showing and hiding via CSS transitions.
                        </p>
                    </div>
                </div>

                <div class="hs-accordion" id="basic-heading-three">
                    <button class="hs-accordion-toggle hs-accordion-active:text-primary group py-3 inline-flex items-center gap-x-3 w-full font-semibold text-left text-default-800 transition hover:text-default-500" aria-controls="hs-basic-collapse-three">
                        <i class="i-tabler-plus hs-accordion-active:hidden hs-accordion-active:text-primary-600 block w-3 h-3 text-default-600 group-hover:text-default-500"></i>
                        <i class="i-tabler-minus hs-accordion-active:block hs-accordion-active:text-primary-600 hidden w-3 h-3 text-default-600 group-hover:text-default-500"></i>
                        Accordion #3
                    </button>
                    <div id="basic-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="#basic-heading-three">
                        <p class="text-default-800">
                            <em>This is the third item's accordion body.</em> It is hidden by
                            default, until the collapse plugin adds the appropriate classes that we
                            use to style each element. These classes control the overall appearance,
                            as well as the showing and hiding via CSS transitions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header flex items-center justify-between">
            <div class="">
                <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Always open</h5>
                <p class="text-default-600 text-sm font-medium">To make accordion items stay open
                    when another item is opened, use <code class="text-primary">data-hs-accordion-always-open.</code></p>
            </div>
        </div>
        <div class="card-body">
            <div class="hs-accordion-group divide-y divide-default-200" data-hs-accordion-always-open>
                <div class="hs-accordion active" id="basic-always-open-heading-one">
                    <button class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-left text-default-800 transition hover:text-default-500" aria-controls="hs-basic-always-open-collapse-one">
                        <i class="i-tabler-plus hs-accordion-active:hidden hs-accordion-active:text-primary-600 block w-3 h-3 text-default-600 group-hover:text-default-500"></i>
                        <i class="i-tabler-minus hs-accordion-active:block hs-accordion-active:text-primary-600 hidden w-3 h-3 text-default-600 group-hover:text-default-500"></i>
                        Accordion #1
                    </button>
                    <div id="basic-always-open-collapse-one" class="hs-accordion-content w-full pb-3 overflow-hidden transition-[height] duration-300" aria-labelledby="#basic-always-open-heading-one">
                        <p class="text-default-800">
                            <em>This is the second item's accordion body.</em> It is hidden by
                            default, until the collapse plugin adds the appropriate classes that we
                            use to style each element. These classes control the overall appearance,
                            as well as the showing and hiding via CSS transitions.
                        </p>
                    </div>
                </div>

                <div class="hs-accordion" id="basic-always-open-heading-two">
                    <button class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-left text-default-800 transition hover:text-default-500" aria-controls="hs-basic-always-open-collapse-two">
                        <i class="i-tabler-plus hs-accordion-active:hidden hs-accordion-active:text-primary-600 block w-3 h-3 text-default-600 group-hover:text-default-500"></i>
                        <i class="i-tabler-minus hs-accordion-active:block hs-accordion-active:text-primary-600 hidden w-3 h-3 text-default-600 group-hover:text-default-500"></i>
                        Accordion #2
                    </button>
                    <div id="basic-always-open-collapse-two" class="hs-accordion-content w-full pb-3 overflow-hidden transition-[height] duration-300 hidden" aria-labelledby="#basic-always-open-heading-two">
                        <p class="text-default-800">
                            <em>This is the second item's accordion body.</em> It is hidden by
                            default, until the collapse plugin adds the appropriate classes that we
                            use to style each element. These classes control the overall appearance,
                            as well as the showing and hiding via CSS transitions.
                        </p>
                    </div>
                </div>

                <div class="hs-accordion" id="basic-always-open-heading-three">
                    <button class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-left text-default-800 transition hover:text-default-500" aria-controls="hs-basic-always-open-collapse-three">
                        <i class="i-tabler-plus hs-accordion-active:hidden hs-accordion-active:text-primary-600 block w-3 h-3 text-default-600 group-hover:text-default-500"></i>
                        <i class="i-tabler-minus hs-accordion-active:block hs-accordion-active:text-primary-600 hidden w-3 h-3 text-default-600 group-hover:text-default-500"></i>
                        Accordion #3
                    </button>
                    <div id="basic-always-open-collapse-three" class="hs-accordion-content w-full pb-3 overflow-hidden transition-[height] duration-300 hidden" aria-labelledby="#basic-always-open-heading-three">
                        <p class="text-default-800">
                            <em>This is the first item's accordion body.</em> It is hidden by
                            default, until the collapse plugin adds the appropriate classes that we
                            use to style each element. These classes control the overall appearance,
                            as well as the showing and hiding via CSS transitions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header flex items-center justify-between">
            <div class="">
                <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Nested</h5>
                <p class="text-default-600 text-sm font-medium">A basic form of the accordion with
                    sub menu.</p>
            </div>
        </div>
        <div class="card-body">
            <div class="hs-accordion-group">
                <div class="hs-accordion active" id="basic-nested-heading-one">
                    <button class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-left text-default-800 transition hover:text-default-500" aria-controls="hs-basic-nested-collapse-one">
                        <i class="i-tabler-plus hs-accordion-active:hidden hs-accordion-active:text-primary-600 block w-3 h-3 text-default-600 group-hover:text-default-500"></i>
                        <i class="i-tabler-minus hs-accordion-active:block hs-accordion-active:text-primary-600 hidden w-3 h-3 text-default-600 group-hover:text-default-500"></i>
                        Accordion #1
                    </button>
                    <div id="basic-nested-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="#basic-nested-heading-one">
                        <div class="hs-accordion-group pl-6">
                            <div class="hs-accordion active" id="basic-nested-sub-heading-one">
                                <button class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-left text-default-800 transition hover:text-default-500" aria-controls="hs-basic-nested-sub-collapse-one">
                                    <i class="hs-accordion-active:hidden hs-accordion-active:text-primary-600 block w-3 h-3 text-default-600 group-hover:text-default-500"></i>
                                    <i class="hs-accordion-active:block hs-accordion-active:text-primary-600 hidden w-3 h-3 text-default-600 group-hover:text-default-500"></i>
                                    Sub accordion #1
                                </button>
                                <div id="basic-nested-sub-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="#hs-basic-nested-sub-heading-one">
                                    <p class="text-default-800">
                                        <em>This is the third item's accordion body.</em> It is
                                        hidden by default, until the collapse plugin adds the
                                        appropriate classes that we use to style each element. These
                                        classes control the overall appearance, as well as the
                                        showing and hiding via CSS transitions.
                                    </p>
                                </div>
                            </div>

                            <div class="hs-accordion" id="basic-nested-sub-heading-two">
                                <button class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-left text-default-800 transition hover:text-default-500" aria-controls="hs-basic-nested-sub-collapse-two">
                                    <i class="hs-accordion-active:hidden hs-accordion-active:text-primary-600 block w-3 h-3 text-default-600 group-hover:text-default-500"></i>
                                    <i class="hs-accordion-active:block hs-accordion-active:text-primary-600 hidden w-3 h-3 text-default-600 group-hover:text-default-500"></i>
                                    Sub accordion #2
                                </button>
                                <div id="basic-nested-sub-collapse-two" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="#basic-nested-sub-heading-two">
                                    <p class="text-default-800">
                                        <em>This is the second item's accordion body.</em> It is
                                        hidden by default, until the collapse plugin adds the
                                        appropriate classes that we use to style each element. These
                                        classes control the overall appearance, as well as the
                                        showing and hiding via CSS transitions.
                                    </p>
                                </div>
                            </div>

                            <div class="hs-accordion" id="basic-nested-sub-heading-three">
                                <button class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-left text-default-800 transition hover:text-default-500" aria-controls="hs-basic-nested-sub-collapse-three">
                                    <i class="hs-accordion-active:hidden hs-accordion-active:text-primary-600 block w-3 h-3 text-default-600 group-hover:text-default-500"></i>
                                    <i class="hs-accordion-active:block hs-accordion-active:text-primary-600 hidden w-3 h-3 text-default-600 group-hover:text-default-500"></i>
                                    Sub accordion #3
                                </button>
                                <div id="basic-nested-sub-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="#basic-nested-sub-heading-three">
                                    <p class="text-default-800">
                                        <em>This is the first item's accordion body.</em> It is
                                        hidden by default, until the collapse plugin adds the
                                        appropriate classes that we use to style each element. These
                                        classes control the overall appearance, as well as the
                                        showing and hiding via CSS transitions.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hs-accordion" id="basic-nested-heading-two">
                    <button class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-left text-default-800 transition hover:text-default-500" aria-controls="hs-basic-nested-collapse-two">
                        <i class="i-tabler-plus hs-accordion-active:hidden hs-accordion-active:text-primary-600 block w-3 h-3 text-default-600 group-hover:text-default-500"></i>
                        <i class="i-tabler-minus hs-accordion-active:block hs-accordion-active:text-primary-600 hidden w-3 h-3 text-default-600 group-hover:text-default-500"></i>
                        Accordion #2
                    </button>
                    <div id="basic-nested-collapse-two" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="#basic-nested-heading-two">
                        <p class="text-default-800">
                            <em>This is the second item's accordion body.</em> It is hidden by
                            default, until the collapse plugin adds the appropriate classes that we
                            use to style each element. These classes control the overall appearance,
                            as well as the showing and hiding via CSS transitions.
                        </p>
                    </div>
                </div>

                <div class="hs-accordion" id="basic-nested-heading-three">
                    <button class="hs-accordion-toggle hs-accordion-active:text-primary py-3 inline-flex items-center gap-x-3 w-full font-semibold text-left text-default-800 transition hover:text-default-500" aria-controls="hs-basic-nested-collapse-three">
                        <i class="i-tabler-plus hs-accordion-active:hidden hs-accordion-active:text-primary-600 block w-3 h-3 text-default-600 group-hover:text-default-500"></i>
                        <i class="i-tabler-minus hs-accordion-active:block hs-accordion-active:text-primary-600 hidden w-3 h-3 text-default-600 group-hover:text-default-500"></i>
                        Accordion #3
                    </button>
                    <div id="basic-nested-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="#hs-basic-nested-heading-three">
                        <p class="text-default-800">
                            <em>This is the first item's accordion body.</em> It is hidden by
                            default, until the collapse plugin adds the appropriate classes that we
                            use to style each element. These classes control the overall appearance,
                            as well as the showing and hiding via CSS transitions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header flex items-center justify-between">
            <div class="">
                <h5 class="text-lg font-medium text-default-950 capitalize mb-1">No arrow</h5>
                <p class="text-default-600 text-sm font-medium">Example with no arrow.</p>
            </div>
        </div>
        <div class="card-body">
            <div class="hs-accordion-group">
                <div class="hs-accordion active" id="basic-no-arrow-heading-one">
                    <button class="hs-accordion-toggle hs-accordion-active:text-primary group py-3 inline-flex items-center gap-x-3 w-full font-semibold text-left text-default-800 transition hover:text-default-500" aria-controls="hs-basic-no-arrow-collapse-one">
                        Accordion #1
                    </button>
                    <div id="basic-no-arrow-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="#basic-no-arrow-heading-one">
                        <p class="text-default-800">
                            <em>This is the third item's accordion body.</em> It is hidden by
                            default, until the collapse plugin adds the appropriate classes that we
                            use to style each element. These classes control the overall appearance,
                            as well as the showing and hiding via CSS transitions.
                        </p>
                    </div>
                </div>

                <div class="hs-accordion" id="basic-no-arrow-heading-two">
                    <button class="hs-accordion-toggle hs-accordion-active:text-primary group py-3 inline-flex items-center gap-x-3 w-full font-semibold text-left text-default-800 transition hover:text-default-500" aria-controls="hs-basic-no-arrow-collapse-two">
                        Accordion #2
                    </button>
                    <div id="basic-no-arrow-collapse-two" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="#basic-no-arrow-heading-two">
                        <p class="text-default-800">
                            <em>This is the third item's accordion body.</em> It is hidden by
                            default, until the collapse plugin adds the appropriate classes that we
                            use to style each element. These classes control the overall appearance,
                            as well as the showing and hiding via CSS transitions.
                        </p>
                    </div>
                </div>

                <div class="hs-accordion" id="basic-no-arrow-heading-three">
                    <button class="hs-accordion-toggle hs-accordion-active:text-primary group py-3 inline-flex items-center gap-x-3 w-full font-semibold text-left text-default-800 transition hover:text-default-500" aria-controls="hs-basic-no-arrow-collapse-three">
                        Accordion #3
                    </button>
                    <div id="basic-no-arrow-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="#basic-no-arrow-heading-three">
                        <p class="text-default-800">
                            <em>This is the third item's accordion body.</em> It is hidden by
                            default, until the collapse plugin adds the appropriate classes that we
                            use to style each element. These classes control the overall appearance,
                            as well as the showing and hiding via CSS transitions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header flex items-center justify-between">
            <div class="">
                <h5 class="text-lg font-medium text-default-950 capitalize mb-1">With arrow</h5>
                <p class="text-default-600 text-sm font-medium">Example with arrow.</p>
            </div>
        </div>
        <div class="card-body">
            <div class="hs-accordion-group">
                <div class="hs-accordion active" id="basic-with-arrow-heading-one">
                    <button class="hs-accordion-toggle hs-accordion-active:text-primary group py-3 inline-flex items-center gap-x-3 w-full font-semibold text-left text-default-800 transition hover:text-default-500" aria-controls="hs-basic-with-arrow-collapse-one">
                        <i class="i-tabler-chevron-down text-base transition-all hs-accordion-active:rotate-180"></i>
                        Accordion #1
                    </button>
                    <div id="basic-with-arrow-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="#basic-with-arrow-heading-one">
                        <p class="text-default-800">
                            <em>This is the third item's accordion body.</em> It is hidden by
                            default, until the collapse plugin adds the appropriate classes that we
                            use to style each element. These classes control the overall appearance,
                            as well as the showing and hiding via CSS transitions.
                        </p>
                    </div>
                </div>

                <div class="hs-accordion" id="basic-with-arrow-heading-two">
                    <button class="hs-accordion-toggle hs-accordion-active:text-primary group py-3 inline-flex items-center gap-x-3 w-full font-semibold text-left text-default-800 transition hover:text-default-500" aria-controls="hs-basic-with-arrow-collapse-two">
                        <i class="i-tabler-chevron-down text-base transition-all hs-accordion-active:rotate-180"></i>
                        Accordion #2
                    </button>
                    <div id="basic-with-arrow-collapse-two" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="#basic-with-arrow-heading-two">
                        <p class="text-default-800">
                            <em>This is the third item's accordion body.</em> It is hidden by
                            default, until the collapse plugin adds the appropriate classes that we
                            use to style each element. These classes control the overall appearance,
                            as well as the showing and hiding via CSS transitions.
                        </p>
                    </div>
                </div>

                <div class="hs-accordion" id="basic-with-arrow-heading-three">
                    <button class="hs-accordion-toggle hs-accordion-active:text-primary group py-3 inline-flex items-center gap-x-3 w-full font-semibold text-left text-default-800 transition hover:text-default-500" aria-controls="hs-basic-with-arrow-collapse-three">
                        <i class="i-tabler-chevron-down text-base transition-all hs-accordion-active:rotate-180"></i>
                        Accordion #3
                    </button>
                    <div id="basic-with-arrow-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="#basic-with-arrow-heading-three">
                        <p class="text-default-800">
                            <em>This is the third item's accordion body.</em> It is hidden by
                            default, until the collapse plugin adds the appropriate classes that we
                            use to style each element. These classes control the overall appearance,
                            as well as the showing and hiding via CSS transitions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header flex items-center justify-between">
            <div class="">
                <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Bordered</h5>
                <p class="text-default-600 text-sm font-medium">A basic form of the bordered
                    accordion.</p>
            </div>
        </div>
        <div class="card-body">
            <div class="hs-accordion-group">
                <div class="hs-accordion active bg-default-100 border border-default-200 -mt-px first:rounded-t-lg last:rounded-b-lg" id="bordered-heading-one">
                    <button class="hs-accordion-toggle hs-accordion-active:text-primary inline-flex items-center gap-x-3 w-full font-semibold text-left text-default-800 transition py-4 px-5 hover:text-default-500" aria-controls="hs-basic-bordered-collapse-one">
                        <i class="i-tabler-plus text-base block hs-accordion-active:hidden"></i>
                        <i class="i-tabler-minus text-base hidden hs-accordion-active:block"></i>
                        Accordion #1
                    </button>
                    <div id="basic-bordered-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="#bordered-heading-one">
                        <div class="pb-4 px-5">
                            <p class="text-default-800">
                                <em>This is the third item's accordion body.</em> It is hidden by
                                default, until the collapse plugin adds the appropriate classes that
                                we use to style each element. These classes control the overall
                                appearance, as well as the showing and hiding via CSS transitions.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="hs-accordion bg-default-100 border border-default-200 -mt-px first:rounded-t-lg last:rounded-b-lg" id="bordered-heading-two">
                    <button class="hs-accordion-toggle hs-accordion-active:text-primary inline-flex items-center gap-x-3 w-full font-semibold text-left text-default-800 transition py-4 px-5 hover:text-default-500" aria-controls="hs-basic-bordered-collapse-two">
                        <i class="i-tabler-plus text-base block hs-accordion-active:hidden"></i>
                        <i class="i-tabler-minus text-base hidden hs-accordion-active:block"></i>
                        Accordion #2
                    </button>
                    <div id="basic-bordered-collapse-two" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="#bordered-heading-two">
                        <div class="pb-4 px-5">
                            <p class="text-default-800">
                                <em>This is the second item's accordion body.</em> It is hidden by
                                default, until the collapse plugin adds the appropriate classes that
                                we use to style each element. These classes control the overall
                                appearance, as well as the showing and hiding via CSS transitions.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="hs-accordion bg-default-100 border border-default-200 -mt-px first:rounded-t-lg last:rounded-b-lg" id="bordered-heading-three">
                    <button class="hs-accordion-toggle hs-accordion-active:text-primary inline-flex items-center gap-x-3 w-full font-semibold text-left text-default-800 transition py-4 px-5 hover:text-default-500" aria-controls="hs-basic-bordered-collapse-three">
                        <i class="i-tabler-plus text-base block hs-accordion-active:hidden"></i>
                        <i class="i-tabler-minus text-base hidden hs-accordion-active:block"></i>
                        Accordion #3
                    </button>
                    <div id="basic-bordered-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="#bordered-heading-three">
                        <div class="pb-4 px-5">
                            <p class="text-default-800">
                                <em>This is the first item's accordion body.</em> It is hidden by
                                default, until the collapse plugin adds the appropriate classes that
                                we use to style each element. These classes control the overall
                                appearance, as well as the showing and hiding via CSS transitions.
                            </p>
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