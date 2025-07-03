@extends('layouts.vertical', ['title' => 'Cards'])

@section('css')

@endsection

@section('content')

@include("layouts.shared/page-title", ["subtitle" => "Components", "title" => "Cards"])

<div class="grid 2xl:grid-cols-4 grid-cols-1 gap-6">
    <div class="card">
        <img class="w-full h-auto rounded-t-xl" src="/images/small/img-4.jpg" alt="Image Description">
        <div class="card-body">
            <h3 class="text-lg font-bold text-default-800">Card title</h3>
            <p class="mt-1 text-default-500">
                Some quick example text to build on the card title and make up the bulk of the
                card's
                content.
            </p>
            <a class="mt-2 btn bg-primary text-white" href="#">
                Go somewhere
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h3 class="text-lg font-bold text-default-800">Card title</h3>
            <p class="mt-1 text-default-500">
                Some quick example text to build on the card title and make up the bulk of the
                card's
                content.
            </p>
            <p class="mt-5 text-xs text-default-500">
                Last updated 5 mins ago
            </p>
        </div>

        <img class="w-full h-auto rounded-b-xl" src="/images/small/img-4.jpg" alt="Image Description">
    </div>

    <div class="card">
        <img class="w-full h-auto rounded-xl" src="/images/small/img-2.jpg" alt="Image Description">
        <div class="absolute top-0 start-0 end-0">
            <div class="p-4 md:p-5">
                <h3 class="text-lg font-bold text-default-50">
                    Card title
                </h3>
                <p class="mt-1 text-default-50">
                    Some quick example text to build on the card title and make up the bulk of the
                    card's content.
                </p>
                <p class="mt-5 text-xs text-default-100">
                    Last updated 5 mins ago
                </p>
            </div>
        </div>
    </div>

    <div class="card p-4 md:p-5">
        This is some text within a card body.
    </div>

    <div class="card p-4 md:p-5">
        <h3 class="text-lg font-bold text-default-800">
            Card title
        </h3>
        <p class="mt-1 text-xs font-medium uppercase text-default-500">
            Card subtitle
        </p>
        <p class="mt-2 text-default-500">
            Some quick example text to build on the card title and make up the bulk of the card's
            content.
        </p>
        <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-primary hover:text-primary-800 disabled:opacity-50 disabled:pointer-events-none" href="#">
            Card link
            <i class="material-symbols-rounded text-lg flex-shrink-0">chevron_right</i>
        </a>
    </div>

    <div class="card">
        <div class="card-header">
            <p class="text-sm text-default-500">Featured</p>
        </div>
        <div class="p-4 md:p-5">
            <h3 class="text-lg font-bold text-default-800">Card title</h3>
            <p class="mt-2 text-default-500">
                With supporting text below as a natural lead-in to additional content.
            </p>

            <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-primary hover:text-primary-800 disabled:opacity-50 disabled:pointer-events-none" href="#">
                Card link
                <i class="material-symbols-rounded text-lg flex-shrink-0">chevron_right</i>
            </a>
        </div>
    </div>

    <div class="card">
        <div class="p-4 md:p-5">
            <h3 class="text-lg font-bold text-default-800">Card title</h3>
            <p class="mt-2 text-default-500">
                With supporting text below as a natural lead-in to additional content.
            </p>
            <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-primary hover:text-primary-800 disabled:opacity-50 disabled:pointer-events-none" href="#">
                Card link
                <i class="material-symbols-rounded text-lg flex-shrink-0">chevron_right</i>
            </a>
        </div>

        <div class="card-footer">
            <p class="text-sm text-default-500">Last updated 5 mins ago</p>
        </div>
    </div>

    <div class="card">
        <div class="p-4 md:p-5">
            <h3 class="text-lg font-bold text-default-800">
                Card title
            </h3>
            <p class="mt-2 text-default-500">
                With supporting text below as a natural lead-in to additional content.
            </p>
            <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-primary hover:text-primary-800 disabled:opacity-50 disabled:pointer-events-none" href="#">
                Card link
                <i class="material-symbols-rounded text-lg flex-shrink-0">chevron_right</i>
            </a>
        </div>
    </div>

    <a class="card group overflow-hidden hover:shadow-lg transition" href="#">
        <div class="relative pt-[50%] sm:pt-[60%] lg:pt-[80%] rounded-t-xl overflow-hidden">
            <img class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-t-xl" src="/images/small/img-4.jpg" alt="Image Description">
        </div>
        <div class="p-4 md:p-5">
            <h3 class="text-lg font-bold text-default-800">
                Card title
            </h3>
            <p class="mt-1 text-default-500">
                Some quick example text to build on the card title and make up the bulk of the
                card's
                content.
            </p>
        </div>
    </a>

    <a class="card hover:shadow-lg transition" href="#">
        <img class="w-full h-auto rounded-t-xl" src="/images/small/img-4.jpg" alt="Image Description">
        <div class="p-4 md:p-5">
            <h3 class="text-lg font-bold text-default-800">
                Card title
            </h3>
            <p class="mt-1 text-default-500">
                Some quick example text to build on the card title and make up the bulk of the
                card's
                content.
            </p>
        </div>
    </a>

    <div class="lg:col-span-2">
        <div class="bg-white border rounded-xl shadow-sm sm:flex">
            <div class="flex-shrink-0 relative w-full rounded-t-xl overflow-hidden pt-[40%] sm:rounded-s-xl sm:max-w-60 md:rounded-se-none md:max-w-xs">
                <img class="size-full absolute top-0 start-0 object-cover" src="/images/small/img-4.jpg" alt="Image Description">
            </div>
            <div class="flex flex-wrap">
                <div class="p-4 flex flex-col h-full sm:p-7">
                    <h3 class="text-lg font-bold text-default-800">
                        Card title
                    </h3>
                    <p class="mt-1 text-default-500">
                        Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.
                    </p>
                    <div class="mt-5 sm:mt-auto">
                        <p class="text-xs text-default-500">
                            Last updated 5 mins ago
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<h6 class="mt-4 mb-6 text-xl font-semibold text-default-700">Card Group</h6>

<div>
    <div class="grid border rounded-xl shadow-sm divide-y overflow-hidden sm:flex sm:divide-y-0 sm:divide-x">
        <div class="flex flex-col flex-[1_0_0%] bg-white">
            <img class="w-full h-auto rounded-t-xl sm:rounded-se-none" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2532&q=80" alt="Image Description">
            <div class="p-4 flex-1 md:p-5">
                <h3 class="text-lg font-bold text-default-800">
                    Card title
                </h3>
                <p class="mt-1 text-default-500">
                    This is a wider card with supporting text below as a natural lead-in to
                    additional
                    content. This content is a little bit longer.
                </p>
            </div>
            <div class="p-4 border-t sm:px-5">
                <p class="text-xs text-default-500">
                    Last updated 5 mins ago
                </p>
            </div>
        </div>

        <div class="flex flex-col flex-[1_0_0%] bg-white">
            <img class="w-full h-auto" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2532&q=80" alt="Image Description">
            <div class="p-4 flex-1 md:p-5">
                <h3 class="text-lg font-bold text-default-800">
                    Card title
                </h3>
                <p class="mt-1 text-default-500">
                    This card has supporting text below as a natural lead-in to additional content.
                </p>
            </div>
            <div class="p-4 border-t sm:px-5">
                <p class="text-xs text-default-500">
                    Last updated 5 mins ago
                </p>
            </div>
        </div>

        <div class="flex flex-col flex-[1_0_0%] bg-white">
            <img class="w-full h-auto sm:rounded-se-xl" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2532&q=80" alt="Image Description">
            <div class="p-4 flex-1 md:p-5">
                <h3 class="text-lg font-bold text-default-800">
                    Card title
                </h3>
                <p class="mt-1 text-default-500">
                    This is a wider card with supporting text below as a natural lead-in to
                    additional
                    content. This card has even longer content than the first to show that equal
                    height
                    action.
                </p>
            </div>
            <div class="p-4 border-t sm:px-5">
                <p class="text-xs text-default-500">
                    Last updated 5 mins ago
                </p>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

@endsection