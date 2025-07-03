@extends('layouts.vertical', ['title' => 'Dashboard'])

@section('css')
@vite(['node_modules/jsvectormap/dist/css/jsvectormap.min.css'])
@endsection

@section('content')
<!-- Start Content-->
@include('layouts.shared/page-title', ['subtitle' => 'Dashtrap', 'title' => 'Dashboard'])

<div class="grid xl:grid-cols-4 md:grid-cols-2 gap-5 mb-5">
    <div class="card">
        <div class="card-body">
            <div class="mb-4">
                <span class="px-1 py-0.5 text-[10px]/[1.25] font-semibold rounded text-success bg-success/20 float-end">Daily</span>
                <h5 class="card-title truncate">Cost per Unit</h5>
            </div>

            <div class="flex items-center justify-between mb-4">
                <h2 class="text-3xl font-medium text-default-800">$17.21</h2>
                <span class="flex items-center">
                    <span class="text-default-400 text-sm">12.5%</span>
                    <i class="i-tabler-arrow-up text-success text-base ms-2"></i>
                </span>
            </div>

            <div class="flex w-full h-1.5 bg-default-200 rounded-full overflow-hidden shadow-sm">
                <div class="flex flex-col justify-center overflow-hidden rounded-full bg-primary w-11/12" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <!--end card body-->
    </div>

    <div class="card">
        <div class="card-body">
            <div class="mb-4">
                <span class="px-1 py-0.5 text-[10px]/[1.25] font-semibold rounded text-success bg-success/20 float-end">Per
                    Week</span>
                <h5 class="card-title truncate">Market Revenue</h5>
            </div>

            <div class="flex items-center justify-between mb-4">
                <h2 class="text-3xl font-medium text-default-800">$1875.54</h2>
                <span class="flex items-center">
                    <span class="text-default-400 text-sm">27.5%</span>
                    <i class="i-tabler-arrow-up text-success text-base ms-2"></i>
                </span>
            </div>

            <div class="flex w-full h-1.5 bg-default-200 rounded-full overflow-hidden shadow-sm">
                <div class="flex flex-col justify-center overflow-hidden rounded-full bg-danger w-1/4" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <!--end card body-->
    </div>

    <div class="card">
        <div class="card-body">
            <div class="mb-4">
                <span class="px-1 py-0.5 text-[10px]/[1.25] font-semibold rounded text-success bg-success/20 float-end">Per
                    Month</span>
                <h5 class="card-title truncate">Expenses</h5>
            </div>

            <div class="flex items-center justify-between mb-4">
                <h2 class="text-3xl font-medium text-default-800">$784.62</h2>
                <span class="flex items-center">
                    <span class="text-default-400 text-sm">18.71%</span>
                    <i class="i-tabler-arrow-up text-success text-base ms-2"></i>
                </span>
            </div>

            <div class="flex w-full h-1.5 bg-default-200 rounded-full overflow-hidden shadow-sm">
                <div class="flex flex-col justify-center overflow-hidden rounded-full bg-warning w-4/5" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <!--end card body-->
    </div>

    <div class="card">
        <div class="card-body">
            <div class="mb-4">
                <span class="px-1 py-0.5 text-[10px]/[1.25] font-semibold rounded text-success bg-success/20 float-end">All
                    Time</span>
                <h5 class="card-title truncate">Daily Visits</h5>
            </div>

            <div class="flex items-center justify-between mb-4">
                <h2 class="text-3xl font-medium text-default-800">1,15,187</h2>
                <span class="flex items-center">
                    <span class="text-default-400 text-sm">57%</span>
                    <i class="i-tabler-arrow-up text-success text-base ms-2"></i>
                </span>
            </div>

            <div class="flex w-full h-1.5 bg-default-200 rounded-full overflow-hidden shadow-sm">
                <div class="flex flex-col justify-center overflow-hidden rounded-full bg-success w-1/4" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <!--end card body-->
    </div>
</div>

<div class="grid xl:grid-cols-3 md:grid-cols-2 gap-5 mb-5">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Last Month Sales</h4>
        </div>

        <div class="card-body">
            <div id="radial-chart" class="apex-charts"></div>
        </div>

        <div class="border-t border-default-200 border-dashed card-body">
            <div class="flex items-center justify-center gap-3">
                <div class="flex items-center gap-1">
                    <div class="size-3 rounded-full bg-primary"></div>
                    <p class="text-sm text-default-700">Online</p>
                </div>

                <div class="flex items-center gap-1">
                    <div class="size-3 rounded-full bg-danger"></div>
                    <p class="text-sm text-default-700">Offlne</p>
                </div>

                <div class="flex items-center gap-1">
                    <div class="size-3 rounded-full bg-info"></div>
                    <p class="text-sm text-default-700">Retail</p>
                </div>
            </div>
        </div>
    </div>

    <div class="xl:col-span-2">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Revenue</h5>
            </div>
            <div class="card-body">
                <div id="line-chart" class="apex-charts"></div>
            </div>
        </div>
    </div>


</div>

<div class="grid xl:grid-cols-2 gap-6">
    <div class="card overflow-hidden">
        <div class="card-header">
            <h4 class="card-title">Product Inventory Overview</h4>
        </div>

        <div class="overflow-x-auto custom-scroll">
            <div class="min-w-full inline-block align-middle whitespace-nowrap">
                <div class="overflow-hidden">
                    <table class="w-full text-sm text-left text-default-500">
                        <thead class="text-xs text-default-700 uppercase bg-default-50 border-b">
                            <tr>
                                <th scope="col" class="p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-all" type="checkbox" class="form-checkbox rounded text-primary">
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">Product</th>
                                <th scope="col" class="px-6 py-3">Category</th>
                                <th scope="col" class="px-6 py-3">Price</th>
                                <th scope="col" class="px-6 py-3">Availability</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b hover:bg-default-50">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-1" type="checkbox" class="form-checkbox rounded text-primary">
                                    </div>
                                </td>
                                <td class="px-6 py-4 flex items-center">
                                    <img class="size-10 rounded-full" src="/images/media/img-1.jpg" alt="Wireless Headphones">
                                    <div class="ps-3">
                                        <div class="text-base font-semibold">Wireless Headphones</div>
                                        <div class="font-normal text-default-500">SKU: WH1234</div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-default-900 whitespace-nowrap">
                                    Electronics
                                </td>
                                <td class="px-6 py-4 text-default-900 whitespace-nowrap">
                                    $99.99
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
                                        In Stock
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b hover:bg-default-50">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-2" type="checkbox" class="form-checkbox rounded text-primary">
                                    </div>
                                </td>
                                <td class="px-6 py-4 flex items-center">
                                    <img class="size-10 rounded-full" src="/images/media/img-2.jpg" alt="Smart Watch">
                                    <div class="ps-3">
                                        <div class="text-base font-semibold">Smart Watch</div>
                                        <div class="font-normal text-default-500">SKU: SW5678</div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-default-900 whitespace-nowrap">
                                    Accessories
                                </td>
                                <td class="px-6 py-4 text-default-900 whitespace-nowrap">
                                    $149.99
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div> Out
                                        of Stock
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b hover:bg-default-50">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-3" type="checkbox" class="form-checkbox rounded text-primary">
                                    </div>
                                </td>
                                <td class="px-6 py-4 flex items-center">
                                    <img class="size-10 rounded-full" src="/images/media/img-3.jpg" alt="Running Shoes">
                                    <div class="ps-3">
                                        <div class="text-base font-semibold">Running Shoes</div>
                                        <div class="font-normal text-default-500">SKU: RS9101</div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-default-900 whitespace-nowrap">
                                    Footwear
                                </td>
                                <td class="px-6 py-4 text-default-900 whitespace-nowrap">
                                    $79.99
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
                                        In Stock
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-white hover:bg-default-50">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-4" type="checkbox" class="form-checkbox rounded text-primary">
                                    </div>
                                </td>
                                <td class="px-6 py-4 flex items-center">
                                    <img class="size-10 rounded-full" src="/images/media/img-4.jpg" alt="Coffee Maker">
                                    <div class="ps-3">
                                        <div class="text-base font-semibold">Coffee Maker</div>
                                        <div class="font-normal text-default-500">SKU: CM1122</div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-default-900 whitespace-nowrap">
                                    Home Appliances
                                </td>
                                <td class="px-6 py-4 text-default-900 whitespace-nowrap">
                                    $49.99
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div> Out
                                        of Stock
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div> <!-- end card-->

    <div class="card overflow-hidden">
        <div class="card-header">
            <h4 class="card-title">Top Sallers List</h4>
        </div>

        <div class="overflow-x-auto">
            <div class="min-w-full inline-block align-middle whitespace-nowrap">
                <table class="w-full text-sm text-left text-default-500">
                    <thead class="text-xs text-default-700 uppercase bg-default-50 border-b border-default-200">
                        <tr>
                            <th scope="col" class="px-6 py-3">Company Name</th>
                            <th scope="col" class="px-6 py-3">CEO</th>
                            <th scope="col" class="px-6 py-3">Total Sales</th>
                            <th scope="col" class="px-6 py-3">Revenue</th>
                            <th scope="col" class="px-6 py-3">Share</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-default-200">
                        <tr class="hover:bg-default-50 transition-all">
                            <td class="px-6 py-4 flex items-center">
                                <img class="size-10 rounded-full" src="/images/companies/airbnb.png" alt="Company 1">
                                <div class="ps-3">
                                    <div class="text-base font-semibold">Techlab LLC</div>
                                    <div class="font-normal text-default-500">Technology</div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-base font-semibold">John Doe</div>
                                <div class="font-normal text-default-500">john.doe@abc.com
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                45k
                            </td>
                            <td class="px-6 py-4">
                                $900k
                            </td>
                            <td class="px-6 py-4">
                                25%
                            </td>
                        </tr>
                        <tr class="hover:bg-default-50 transition-all">
                            <td class="px-6 py-4 flex items-center">
                                <img class="size-10 rounded-full" src="/images/companies/cisco.png" alt="Company 2">
                                <div class="ps-3">
                                    <div class="text-base font-semibold">Visionary</div>
                                    <div class="font-normal text-default-500">Marketing</div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-base font-semibold">Jane Smith</div>
                                <div class="font-normal text-default-500">jane.smith@abc.com</div>
                            </td>
                            <td class="px-6 py-4">
                                38k
                            </td>
                            <td class="px-6 py-4">
                                $770k
                            </td>
                            <td class="px-6 py-4">
                                21%
                            </td>
                        </tr>
                        <tr class="hover:bg-default-50 transition-all">
                            <td class="px-6 py-4 flex items-center">
                                <img class="size-10 rounded-full" src="/images/companies/amazon.png" alt="Company 3">
                                <div class="ps-3">
                                    <div class="text-base font-semibold">Pinnacle</div>
                                    <div class="font-normal text-default-500">Software</div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-base font-semibold">Alex Johnson</div>
                                <div class="font-normal text-default-500">alex.johnson@abc.com
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                30k
                            </td>
                            <td class="px-6 py-4">
                                $600k
                            </td>
                            <td class="px-6 py-4">
                                18%
                            </td>
                        </tr>
                        <tr class="bg-white hover:bg-default-50 transition-all">
                            <td class="px-6 py-4 flex items-center">
                                <img class="size-10 rounded-full" src="/images/companies/apple.png" alt="Company 4">
                                <div class="ps-3">
                                    <div class="text-base font-semibold">Global</div>
                                    <div class="font-normal text-default-500">Finance
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-base font-semibold">Emma Lee</div>
                                <div class="font-normal text-default-500">emma.lee@abc.com
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                27k
                            </td>
                            <td class="px-6 py-4">
                                $550k
                            </td>
                            <td class="px-6 py-4">
                                15%
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end card-->
</div>

@endsection

@section('script')
@vite(['resources/js/pages/dashboard.js'])
@endsection