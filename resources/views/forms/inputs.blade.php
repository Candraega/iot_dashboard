@extends('layouts.vertical', ['title' => 'Dashboard'])

@section('css')

@endsection

@section('content')

@include("layouts.shared/page-title", ["subtitle" => "Forms", "title" => "Input"])

<div class="flex flex-col gap-6">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Input</h4>
        </div>
        <div class="p-6">
            <div class="grid lg:grid-cols-2 gap-6">

                <div>
                    <label for="simpleinput" class="text-default-800 text-sm font-medium inline-block mb-2">Text</label>
                    <input type="text" id="simpleinput" class="form-input">
                </div>

                <div>
                    <label for="example-email" class="text-default-800 text-sm font-medium inline-block mb-2">Email</label>
                    <input type="email" id="example-email" name="example-email" class="form-input" placeholder="Email">
                </div>

                <div>
                    <label for="example-password" class="text-default-800 text-sm font-medium inline-block mb-2">Password</label>
                    <input type="password" id="example-password" class="form-input" value="password">
                </div>

                <div>
                    <label for="password" class="text-default-800 text-sm font-medium inline-block mb-2">Show/Hide
                        Password</label>
                    <div class="flex">
                        <input type="password" id="password" class="form-input" placeholder="Enter your password">
                        <div class="input-group-text" data-password="false">
                            <span class="password-eye">*</span>
                        </div>
                    </div>
                </div>

                <div>
                    <label for="example-palaceholder" class="text-default-800 text-sm font-medium inline-block mb-2">Placeholder</label>
                    <input type="text" id="example-palaceholder" class="form-input" placeholder="placeholder">
                </div>

                <div>
                    <label for="example-readonly" class="text-default-800 text-sm font-medium inline-block mb-2">Readonly</label>
                    <input type="text" id="example-readonly" class="form-input" readonly="" value="Readonly value">
                </div>

                <div>
                    <label for="example-disable" class="text-default-800 text-sm font-medium inline-block mb-2">Disabled</label>
                    <input type="text" class="form-input" id="example-disable" disabled="" value="Disabled value">
                </div>

                <div>
                    <label for="example-date" class="text-default-800 text-sm font-medium inline-block mb-2">Date</label>
                    <input class="form-input" id="example-date" type="date" name="date">
                </div>

                <div>
                    <label for="example-month" class="text-default-800 text-sm font-medium inline-block mb-2">Month</label>
                    <input class="form-input" id="example-month" type="month" name="month">
                </div>

                <div>
                    <label for="example-time" class="text-default-800 text-sm font-medium inline-block mb-2">Time</label>
                    <input class="form-input" id="example-time" type="time" name="time">
                </div>

                <div>
                    <label for="example-week" class="text-default-800 text-sm font-medium inline-block mb-2">Week</label>
                    <input class="form-input" id="example-week" type="week" name="week">
                </div>

                <div>
                    <label for="example-number" class="text-default-800 text-sm font-medium inline-block mb-2">Number</label>
                    <input class="form-input" id="example-number" type="number" name="number">
                </div>

                <div>
                    <label for="example-color" class="text-default-800 text-sm font-medium inline-block mb-2">Color</label>
                    <input class="form-input h-10" id="example-color" type="color" name="color" value="#1E85FF">
                </div>

                <div>
                    <label for="example-select" class="text-default-800 text-sm font-medium inline-block mb-2">Input
                        Select</label>
                    <select class="form-select" id="example-select">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>

                <div>
                    <label for="example-multiselect" class="text-default-800 text-sm font-medium inline-block mb-2">Multiple
                        Select</label>
                    <select id="example-multiselect" multiple class="form-input">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Input Group</h4>
        </div>
        <div class="p-6">
            <div class="grid lg:grid-cols-2 gap-6">

                <div class="mb-5">
                    <div class="flex">
                        <div class="flex items-center justify-center border border-default-200 bg-default-100 px-3 font-semibold rounded-s-md border-e-0">
                            @
                        </div>
                        <input type="text" placeholder="Username" class="form-input rounded-s-none" />
                    </div>
                </div>
                <div class="mb-5">
                    <div class="flex">
                        <input type="text" placeholder="Recipient's username" class="form-input rounded-e-none" />
                        <div class="flex items-center justify-center border border-default-200 bg-default-100 px-3 font-semibold rounded-r-md border-s-0">
                            @example.com
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <div class="flex">
                        <div class="flex items-center justify-center border border-default-200 bg-default-100 px-3 font-semibold rounded-s-md border-e-0">
                            https://
                        </div>
                        <input id="url" type="text" placeholder="example.com/users/" class="form-input rounded-s-none" />
                    </div>
                </div>
                <div class="mb-5">
                    <div class="flex">
                        <div class="flex items-center justify-center border border-default-200 bg-default-100 px-3 font-semibold rounded-s-md border-e-0">
                            $
                        </div>
                        <input type="text" placeholder="" class="form-input rounded-none" />
                        <div class="flex items-center justify-center border border-default-200 bg-default-100 px-3 font-semibold rounded-e-md border-s-0">
                            .00
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex rounded-md shadow-sm -space-x-px">
                        <span class="px-4 inline-flex items-center rounded-s border border-default-200 bg-default-50 text-sm text-default-500">Default</span>
                        <input type="text" class="form-input rounded-s-none">
                    </div>
                </div>

                <div>
                    <div class="sm:flex rounded-md shadow-sm">
                        <input type="text" class="form-input">
                        <span class="py-2.5 px-4 inline-flex items-center min-w-fit w-full border border-default-200 bg-default-50 text-sm text-default-500 -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:w-auto sm:first:rounded-l-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-tr-none sm:last:rounded-bl-none sm:last:rounded-r-lg">
                            <svg class="hidden sm:block h-4 w-4 text-default-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z">
                            </svg>
                            <svg class="sm:hidden mx-auto h-4 w-4 text-default-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z">
                            </svg>
                        </span>
                        <input type="text" class="form-input">
                    </div>
                </div>


                <div>
                    <label for="simpleinput" class="text-default-800 text-sm font-medium inline-block mb-2">Email
                        Address</label>
                    <div class="relative">
                        <input type="email" id="leading-icon" name="leading-icon" class="form-input ps-11" placeholder="you@site.com">
                        <div class="absolute inset-y-0 start-4 flex items-center z-20">
                            <i class="i-tabler-mail] text-lg text-default-400"></i>
                        </div>
                    </div>
                </div>

                <div>
                    <label for="simpleinput" class="text-default-800 text-sm font-medium inline-block mb-2">Text</label>
                    <div class="relative">
                        <input type="text" id="input-with-leading-and-trailing-icon" name="input-with-leading-and-trailing-icon" class="form-input px-8" placeholder="0.00">
                        <div class="absolute inset-y-0 start-4 flex items-center pointer-events-none z-20">
                            <span class="text-default-500">$</span>
                        </div>
                        <div class="absolute inset-y-0 end-4 flex items-center pointer-events-none z-20">
                            <span class="text-default-500">USD</span>
                        </div>
                    </div>
                </div>

                <div>
                    <label for="simpleinput" class="text-default-800 text-sm font-medium inline-block mb-2">Text</label>
                    <div class="flex rounded-md shadow-sm">
                        <div class="px-4 inline-flex items-center min-w-fit rounded-l-md border border-e-0 border-default-200 bg-default-50">
                            <span class="text-sm text-default-500">http://</span>
                        </div>
                        <input type="text" name="input-with-add-on-url" id="input-with-add-on-url" class="form-input" placeholder="www.example.com">
                    </div>
                </div>

                <div>
                    <label for="simpleinput" class="text-default-800 text-sm font-medium inline-block mb-2">Text</label>
                    <div class="flex rounded-md shadow-sm">
                        <div class="px-4 inline-flex items-center min-w-fit rounded-l-md border border-e-0 border-default-200 bg-default-50">
                            <span class="text-sm text-default-500">$</span>
                        </div>
                        <div class="px-4 inline-flex items-center min-w-fit border border-e-0 border-default-200 bg-default-50">
                            <span class="text-sm text-default-500">0.00</span>
                        </div>
                        <input type="text" id="leading-multiple-add-on" name="inline-add-on" class="form-input" placeholder="www.example.com">
                    </div>
                </div>
            </div>

        </div>
    </div> <!-- end card -->
</div>

@endsection

@section('script')

@endsection

