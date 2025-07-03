@extends('layouts.vertical', ['title' => 'Basic Tables'])

@section('css')

@endsection

@section('content')

@include("layouts.shared/page-title", ["subtitle" => "Apps", "title" => "Basic Tables"])

<div class="grid lg:grid-cols-2 gap-6 mt-8">
    <div class="card overflow-hidden">
        <div class="card-header">
            <h4 class="card-title">Example</h4>
        </div>
        <div>
            <div class="overflow-x-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-default-200">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Name</th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-end text-sm text-default-500">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-default-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Lindsay Walton</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Front-end Developer </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        lindsay.walton@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Courtney Henry</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Designer</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        courtneyhenry@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Tom Cook</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Director of Product</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        tom.cook@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Whitney Francis</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Copywriter</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        whitney.francis@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Leonard Krasner</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Front-end Developer </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        leonard.krasner@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card overflow-hidden">
        <div class="card-header">
            <h4 class="card-title">Striped rows</h4>
        </div>
        <div>
            <div class="overflow-x-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-default-200">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Name</th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-end text-sm text-default-500">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd:bg-white even:bg-default-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Lindsay Walton</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Front-end Developer </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        lindsay.walton@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr class="odd:bg-white even:bg-default-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Courtney Henry</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Designer</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        courtneyhenry@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr class="odd:bg-white even:bg-default-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Tom Cook</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Director of Product</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        tom.cook@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr class="odd:bg-white even:bg-default-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Whitney Francis</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Copywriter</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        whitney.francis@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr class="odd:bg-white even:bg-default-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Leonard Krasner</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Front-end Developer </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        leonard.krasner@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card overflow-hidden">
        <div class="card-header">
            <h4 class="card-title">Hoverable rows</h4>
        </div>
        <div>
            <div class="overflow-x-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-default-200">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Name</th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-end text-sm text-default-500">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-default-200">
                                <tr class="hover:bg-default-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Lindsay Walton</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Front-end Developer </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        lindsay.walton@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr class="hover:bg-default-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Courtney Henry</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Designer</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        courtneyhenry@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr class="hover:bg-default-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Tom Cook</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Director of Product</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        tom.cook@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr class="hover:bg-default-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Whitney Francis</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Copywriter</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        whitney.francis@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr class="hover:bg-default-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Leonard Krasner</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Front-end Developer </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        leonard.krasner@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end card -->


    <div class="card overflow-hidden">
        <div class="card-header">
            <h4 class="card-title">Striped Hoverable</h4>
        </div>
        <div>
            <div class="overflow-x-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-default-200">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Name</th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-end text-sm text-default-500">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd:bg-white even:bg-default-100 hover:bg-default-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Lindsay Walton</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Front-end Developer </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        lindsay.walton@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr class="odd:bg-white even:bg-default-100 hover:bg-default-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Courtney Henry</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Designer</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        courtneyhenry@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr class="odd:bg-white even:bg-default-100 hover:bg-default-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Tom Cook</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Director of Product</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        tom.cook@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr class="odd:bg-white even:bg-default-100 hover:bg-default-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Whitney Francis</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Copywriter</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        whitney.francis@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr class="odd:bg-white even:bg-default-100 hover:bg-default-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Leonard Krasner</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Front-end Developer </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        leonard.krasner@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card overflow-hidden">
        <div class="card-header">
            <h4 class="card-title">High-lighted Table</h4>
        </div>
        <div>
            <div class="overflow-x-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-default-200">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Name</th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-end text-sm text-default-500">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-default-200">
                                <tr>
                                    <td class="bg-primary/25 px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Lindsay Walton</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Front-end Developer </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        lindsay.walton@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Courtney Henry</td>
                                    <td class="bg-orange-100 px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Designer</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        courtneyhenry@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="bg-red-100 px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Tom Cook</td>
                                    <td class="bg-primary/25 px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Director of Product</td>
                                    <td class="bg-primary/25 px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        tom.cook@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card overflow-hidden">
        <div class="card-header">
            <h4 class="card-title">Bordered Table</h4>
        </div>
        <div class="p-4">
            <div class="overflow-x-auto ">
                <table class="min-w-full divide-y divide-default-200 border border-collapse">
                    <thead>
                        <tr>
                            <th scope="col" class="border border-default-200 px-6 py-3 text-start text-sm text-default-500">
                                Name</th>
                            <th scope="col" class="border border-default-200 px-6 py-3 text-start text-sm text-default-500">
                                Title</th>
                            <th scope="col" class="border border-default-200 px-6 py-3 text-start text-sm text-default-500">
                                Email</th>
                            <th scope="col" class="border border-default-200 px-6 py-3 text-end text-sm text-default-500">
                                Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-default-200">
                        <tr>
                            <td class="border border-default-200 px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                Lindsay Walton</td>
                            <td class="border border-default-200 px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                Front-end Developer </td>
                            <td class="border border-default-200 px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                lindsay.walton@example.com</td>
                            <td class="border border-default-200 px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td class="border border-default-200 px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                Courtney Henry</td>
                            <td class="border border-default-200 px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                Designer</td>
                            <td class="border border-default-200 px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                courtneyhenry@example.com</td>
                            <td class="border border-default-200 px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td class="border border-default-200 px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                Tom Cook</td>
                            <td class="border border-default-200 px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                Director of Product</td>
                            <td class="border border-default-200 px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                tom.cook@example.com</td>
                            <td class="border border-default-200 px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card overflow-hidden">
        <div class="card-header">
            <h4 class="card-title">Rounded Table</h4>
        </div>
        <div class="p-4">
            <div class="overflow-x-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="border rounded-lg overflow-hidden">
                        <table class="min-w-full divide-y divide-default-200">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Name</th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-end text-sm text-default-500">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-default-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Lindsay Walton</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Front-end Developer </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        lindsay.walton@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Courtney Henry</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Designer</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        courtneyhenry@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Tom Cook</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Director of Product</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        tom.cook@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end card -->


    <div class="card overflow-hidden">
        <div class="card-header">
            <h4 class="card-title">Table thead horizontally divided</h4>
        </div>
        <div class="p-4">
            <div class="overflow-x-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="border rounded-lg shadow overflow-hidden">
                        <table class="min-w-full divide-y divide-default-200">
                            <thead>
                                <tr class="divide-x divide-default-200">
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Name</th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-end text-sm text-default-500">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-default-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Lindsay Walton</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Front-end Developer </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        lindsay.walton@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Courtney Henry</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Designer</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        courtneyhenry@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Tom Cook</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Director of Product</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        tom.cook@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card overflow-hidden">
        <div class="card-header">
            <h4 class="card-title">Header in Gray color</h4>
        </div>
        <div class="p-4">
            <div class="overflow-x-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="border rounded-lg overflow-hidden">
                        <table class="min-w-full divide-y divide-default-200">
                            <thead class="bg-default-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Name</th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-end text-sm text-default-500">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-default-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Lindsay Walton</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Front-end Developer </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        lindsay.walton@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Courtney Henry</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Designer</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        courtneyhenry@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Tom Cook</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Director of Product</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        tom.cook@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card overflow-hidden">
        <div class="card-header">
            <h4 class="card-title">With shadow</h4>
        </div>
        <div class="p-4">
            <div class="overflow-x-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="border rounded-lg shadow-lg overflow-hidden">
                        <table class="min-w-full divide-y divide-default-200">
                            <thead class="bg-default-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Name</th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-end text-sm text-default-500">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-default-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Lindsay Walton</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Front-end Developer </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        lindsay.walton@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Courtney Henry</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Designer</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        courtneyhenry@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Tom Cook</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Director of Product</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        tom.cook@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card overflow-hidden">
        <div class="card-header">
            <h4 class="card-title">Headless</h4>
        </div>
        <div class="p-4">
            <div class="overflow-x-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="border rounded-lg shadow overflow-hidden">
                        <table class="min-w-full divide-y divide-default-200">
                            <tbody class="divide-y divide-default-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Lindsay Walton</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Front-end Developer </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        lindsay.walton@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Courtney Henry</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Designer</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        courtneyhenry@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Tom Cook</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Director of Product</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        tom.cook@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card overflow-hidden">
        <div class="card-header">
            <h4 class="card-title">Table foot</h4>
        </div>
        <div class="p-4">
            <div class="overflow-x-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-default-200">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Name</th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-end text-sm text-default-500">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-default-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Lindsay Walton</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Front-end Developer </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        lindsay.walton@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Courtney Henry</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Designer</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        courtneyhenry@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>
                            </tbody>

                            <tfoot>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Footer</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Footer</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Footer</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Footer</a>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card overflow-hidden">
        <div class="card-header">
            <h4 class="card-title">Overflow</h4>
        </div>
        <div class="p-4">
            <div class="overflow-x-auto custom-scroll">
                <div class="min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-default-200">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Name</th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-end text-sm text-default-500">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-default-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Lindsay Walton</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Regional Paradigm Technician</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        john@site.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Front-end Developer </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        lindsay.walton@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Courtney Henry</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Forward Response Developer</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        jim@site.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Designer</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        courtneyhenry@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Tom Cook</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Product Directives Officer</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        joe@site.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Director of Product</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        tom.cook@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card overflow-hidden">
        <div class="card-header">
            <h4 class="card-title">Selection</h4>
        </div>

        <div class="p-4">
            <div class="overflow-x-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="border rounded-lg overflow-hidden">
                        <table class="min-w-full divide-y divide-default-200">
                            <thead class="bg-default-50">
                                <tr>
                                    <th scope="col" class="py-3 ps-4">
                                        <div class="flex items-center h-5">
                                            <input id="table-checkbox-all" type="checkbox" class="form-checkbox rounded">
                                            <label for="table-checkbox-all" class="sr-only">Checkbox</label>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Name</th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-end text-sm text-default-500">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-default-200">
                                <tr>
                                    <td class="py-3 ps-4">
                                        <div class="flex items-center h-5">
                                            <input id="table-checkbox-1" type="checkbox" class="form-checkbox rounded">
                                            <label for="table-checkbox-1" class="sr-only">Checkbox</label>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Lindsay Walton</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Front-end Developer </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        lindsay.walton@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="py-3 ps-4">
                                        <div class="flex items-center h-5">
                                            <input id="table-checkbox-2" type="checkbox" class="form-checkbox rounded">
                                            <label for="table-checkbox-2" class="sr-only">Checkbox</label>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Courtney Henry</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Designer</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        courtneyhenry@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="py-3 ps-4">
                                        <div class="flex items-center h-5">
                                            <input id="table-checkbox-3" type="checkbox" class="form-checkbox rounded">
                                            <label for="table-checkbox-3" class="sr-only">Checkbox</label>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Tom Cook</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Director of Product</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        tom.cook@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="py-3 ps-4">
                                        <div class="flex items-center h-5">
                                            <input id="table-checkbox-4" type="checkbox" class="form-checkbox rounded">
                                            <label for="table-checkbox-4" class="sr-only">Checkbox</label>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Whitney Francis</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Copywriter</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        whitney.francis@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="py-3 ps-4">
                                        <div class="flex items-center h-5">
                                            <input id="table-checkbox-5" type="checkbox" class="form-checkbox rounded">
                                            <label for="table-checkbox-5" class="sr-only">Checkbox</label>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                        Leonard Krasner</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        Front-end Developer </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        leonard.krasner@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end card -->
</div>

@endsection

@section('script')

@endsection