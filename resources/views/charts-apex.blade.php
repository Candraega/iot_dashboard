@extends('layouts.vertical', ['title' => 'Apex Chart'])

@section('css')

@endsection

@section('content')

@include("layouts.shared/page-title", ["subtitle" => "Apps", "title" => "Chart"])

<div class="grid lg:grid-cols-2 gap-6">
    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Line with Data Labels</h4>

            <div id="line_chart_datalabel" class="apex-charts" dir="ltr"></div>
        </div>
    </div><!--end card-->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Dashed Line</h4>

            <div id="line_chart_dashed" class="apex-charts" dir="ltr"></div>
        </div>
    </div><!--end card-->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Spline Area</h4>

            <div id="spline_area" class="apex-charts" dir="ltr"></div>
        </div>
    </div><!--end card-->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Column Chart</h4>

            <div id="column_chart" class="apex-charts" dir="ltr"></div>
        </div>
    </div><!--end card-->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Column with Data Labels</h4>

            <div id="column_chart_datalabel" class="apex-charts" dir="ltr"></div>
        </div>
    </div><!--end card-->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Bar Chart</h4>

            <div id="bar_chart" class="apex-charts" dir="ltr"></div>
        </div>
    </div><!--end card-->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Line, Column & Area Chart</h4>

            <div id="mixed_chart" class="apex-charts" dir="ltr"></div>
        </div>
    </div><!--end card-->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Radial Chart</h4>

            <div id="radial_chart" class="apex-charts" dir="ltr"></div>
        </div>
    </div><!--end card-->


    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Pie Chart</h4>

            <div id="pie_chart" class="apex-charts" dir="ltr"></div>
        </div>
    </div>

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Donut Chart</h4>

            <div id="donut_chart" class="apex-charts" dir="ltr"></div>
        </div>
    </div>
</div>

@endsection

@section('script')
@vite(['resources/js/pages/charts-apex.js'])
@endsection