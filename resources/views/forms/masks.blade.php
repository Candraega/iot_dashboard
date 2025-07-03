@extends('layouts.vertical', ['title' => 'Input Masks'])

@section('css')

@endsection

@section('content')

@include("layouts.shared/page-title", ["subtitle" => "Form", "title" => "Input Masks"])

<div class="card">
    <div class="p-6">
        <h4 class="card-title mb-4">Input Masks</h4>

        <p class="text-sm text-default-700 mb-4">A Java-Script Plugin to make masks on form fields and HTML elements.</p>
        <div class="grid 2xl:grid-cols-2 grid-cols-1 gap-6">
            <div>
                <form action="#">
                    <div class="mb-3">
                        <label class="text-default-800 text-sm font-medium inline-block mb-2">Date</label>
                        <input type="text" class="form-input" data-toggle="input-mask" data-mask-format="00/00/0000" placeholder="DD/MM/YYYY">
                        <p class="text-xs mt-1">Add attribute <code class="text-primary">data-toggle="input-mask" data-mask-format="00/00/0000"</code></p>
                    </div>
                    <div class="mb-3">
                        <label class="text-default-800 text-sm font-medium inline-block mb-2">Hour</label>
                        <input type="text" class="form-input" data-toggle="input-mask" data-mask-format="00:00:00" placeholder="HH:MM:SS">
                        <p class="text-xs mt-1">Add attribute <code class="text-primary">data-toggle="input-mask" data-mask-format="00:00:00"</code></p>
                    </div>
                    <div class="mb-3">
                        <label class="text-default-800 text-sm font-medium inline-block mb-2">Date & Hour</label>
                        <input type="text" class="form-input" data-toggle="input-mask" data-mask-format="00/00/0000 00:00:00" placeholder="DD/MM/YYYY HH:MM:SS">
                        <p class="text-xs mt-1">Add attribute <code class="text-primary">data-toggle="input-mask" data-mask-format="00/00/0000 00:00:00"</code></p>
                    </div>
                    <div class="mb-3">
                        <label class="text-default-800 text-sm font-medium inline-block mb-2">ZIP Code</label>
                        <input type="text" class="form-input" data-toggle="input-mask" data-mask-format="00000-000" placeholder="xxxxx-xxx">
                        <p class="text-xs mt-1">Add attribute <code class="text-primary">data-toggle="input-mask" data-mask-format="00000-000"</code></p>
                    </div>
                    <div class="mb-3">
                        <label class="text-default-800 text-sm font-medium inline-block mb-2">Crazy Zip Code</label>
                        <input type="text" class="form-input" data-toggle="input-mask" data-mask-format="0-00-00-00" placeholder="x-xx-xx-xx">
                        <p class="text-xs mt-1">Add attribute <code class="text-primary">data-toggle="input-mask" data-mask-format="0-00-00-00"</code></p>
                    </div>
                    <div class="mb-3">
                        <label class="text-default-800 text-sm font-medium inline-block mb-2">Money</label>
                        <input type="text" class="form-input" data-toggle="input-mask" data-mask-format="000.000.000.000.000,00" data-reverse="true" placeholder="Your money">
                        <p class="text-xs mt-1">Add attribute <code class="text-primary">data-mask-format="000.000.000.000.000,00" data-reverse="true"</code></p>
                    </div>
                    <div class="mb-3">
                        <label class="text-default-800 text-sm font-medium inline-block mb-2">Money 2</label>
                        <input type="text" class="form-input" data-toggle="input-mask" data-mask-format="#.##0,00" data-reverse="true" placeholder="#.##0,00">
                        <p class="text-xs mt-1">Add attribute <code class="text-primary">data-toggle="input-mask" data-mask-format="#.##0,00" data-reverse="true"</code></p>
                    </div>

                </form>
            </div>

            <div>
                <form action="#">
                    <div class="mb-3">
                        <label class="text-default-800 text-sm font-medium inline-block mb-2">Telephone</label>
                        <input type="text" class="form-input" data-toggle="input-mask" data-mask-format="0000-0000" placeholder="xxxx-xxxx">
                        <p class="text-xs mt-1">Add attribute <code class="text-primary">data-toggle="input-mask" data-mask-format="0000-0000"</code></p>
                    </div>
                    <div class="mb-3">
                        <label class="text-default-800 text-sm font-medium inline-block mb-2">Telephone with Code Area</label>
                        <input type="text" class="form-input" data-toggle="input-mask" data-mask-format="(00) 0000-0000" placeholder="(xx) xxxx-xxxx">
                        <p class="text-xs mt-1">Add attribute <code class="text-primary">data-toggle="input-mask" data-mask-format="(00) 0000-0000"</code></p>
                    </div>
                    <div class="mb-3">
                        <label class="text-default-800 text-sm font-medium inline-block mb-2">US Telephone</label>
                        <input type="text" class="form-input" data-toggle="input-mask" data-mask-format="(000) 000-0000" placeholder="(xxx) xxx-xxxx">
                        <p class="text-xs mt-1">Add attribute <code class="text-primary">data-toggle="input-mask" data-mask-format="(000) 000-0000"</code></p>
                    </div>
                    <div class="mb-3">
                        <label class="text-default-800 text-sm font-medium inline-block mb-2">São Paulo Celphones</label>
                        <input type="text" class="form-input" data-toggle="input-mask" data-mask-format="(00) 00000-0000" placeholder="(xx) xxxxx-xxxx">
                        <p class="text-xs mt-1">Add attribute <code class="text-primary">data-toggle="input-mask" data-mask-format="(00) 00000-0000"</code></p>
                    </div>
                    <div class="mb-3">
                        <label class="text-default-800 text-sm font-medium inline-block mb-2">CPF</label>
                        <input type="text" class="form-input" data-toggle="input-mask" data-mask-format="000.000.000-00" data-reverse="true" placeholder="xxx.xxx.xxxx-xx">
                        <p class="text-xs mt-1">Add attribute <code class="text-primary">data-mask-format="000.000.000-00" data-reverse="true"</code></p>
                    </div>
                    <div class="mb-3">
                        <label class="text-default-800 text-sm font-medium inline-block mb-2">CNPJ</label>
                        <input type="text" class="form-input" data-toggle="input-mask" data-mask-format="00.000.000/0000-00" data-reverse="true" placeholder="xx.xxx.xxx/xxxx-xx">
                        <p class="text-xs mt-1">Add attribute <code class="text-primary">data-toggle="input-mask" data-mask-format="00.000.000/0000-00" data-reverse="true"</code></p>
                    </div>
                    <div class="mb-3">
                        <label class="text-default-800 text-sm font-medium inline-block mb-2">IP Address</label>
                        <input type="text" class="form-input" data-toggle="input-mask" data-mask-format="099.099.099.099" data-reverse="true" placeholder="xxx.xxx.xxx.xxx">
                        <p class="text-xs mt-1">Add attribute <code class="text-primary">data-toggle="input-mask" data-mask-format="099.099.099.099" data-reverse="true"</code></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div> <!-- end card -->

@endsection

@section('script')
@vite(['resources/js/pages/form-inputmask.js'])
@endsection