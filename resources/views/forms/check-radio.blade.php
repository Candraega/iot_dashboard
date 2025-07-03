@extends('layouts.vertical', ['title' => 'Dashboard'])

@section('css')

@endsection

@section('content')

@include("layouts.shared/page-title", ["subtitle" => "Forms", "title" => "Input"])

<div class="grid lg:grid-cols-2 gap-6">
    <div class="card">
        <div class="card-header">
            <div class="flex justify-between items-center">
                <h4 class="card-title">Checkbox</h4>
            </div>
        </div>
        <div class="p-6">
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h6 class="text-sm mb-2">Default</h6>
                    <div class="flex flex-col gap-2">
                        <div class="form-check">
                            <input type="checkbox" class="form-checkbox rounded text-primary" id="customCheck1">
                            <label class="ms-1.5" for="customCheck1">Check this checkbox</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-checkbox rounded text-primary" id="customCheck2">
                            <label class="ms-1.5" for="customCheck2">Check this checkbox</label>
                        </div>
                    </div>
                </div>

                <div>
                    <h6 class="text-sm mb-2">Disabled</h6>

                    <div class="flex flex-col gap-2">
                        <div class="opacity-75">
                            <input type="checkbox" class="form-checkbox rounded text-primary" id="customCheck5" checked disabled>
                            <label class="ms-1.5" for="customCheck5">Check this checkbox</label>
                        </div>
                        <div class="opacity-75">
                            <input type="checkbox" class="form-checkbox rounded text-primary" id="customCheck6" disabled>
                            <label class="ms-1.5" for="customCheck6">Check this checkbox</label>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-3">
                    <div>
                        <input class="form-checkbox rounded text-primary" type="checkbox" id="customckeck1" checked>
                        <label class="ms-1.5" for="customckeck1">Primary</label>
                    </div>

                    <div>
                        <input class="form-checkbox rounded text-success" type="checkbox" id="customckeck2" checked>
                        <label class="ms-1.5" for="customckeck2">Success</label>
                    </div>

                    <div>
                        <input class="form-checkbox rounded text-danger" type="checkbox" id="customckeck3" checked>
                        <label class="ms-1.5" for="customckeck3">Danger</label>
                    </div>

                    <div>
                        <input class="form-checkbox rounded text-warning" type="checkbox" id="customckeck4" checked>
                        <label class="ms-1.5" for="customckeck4">Warning</label>
                    </div>

                    <div>
                        <input class="form-checkbox rounded text-pink-500" type="checkbox" id="checkBox5" checked>
                        <label class="ms-1.5" for="checkBox5">Pink</label>
                    </div>

                    <div>
                        <input class="form-checkbox rounded text-blue" type="checkbox" id="checkBox7" checked>
                        <label class="ms-1.5" for="checkBox7">Blue</label>
                    </div>

                    <div>
                        <input class="form-checkbox rounded text-info" type="checkbox" id="checkBox8" checked>
                        <label class="ms-1.5" for="checkBox8">Info</label>
                    </div>

                    <div>
                        <input class="form-checkbox rounded text-dark" type="checkbox" id="checkBox9" checked>
                        <label class="ms-1.5" for="checkBox9">Dark</label>
                    </div>
                </div>


                <div class="flex flex-col gap-3">
                    <div>
                        <input class="form-checkbox rounded-full text-primary" type="checkbox" id="checkBox10" checked>
                        <label class="ms-1.5" for="checkBox10">Primary</label>
                    </div>

                    <div>
                        <input class="form-checkbox rounded-full text-success" type="checkbox" id="checkBox11" checked>
                        <label class="ms-1.5" for="checkBox11">Success</label>
                    </div>

                    <div>
                        <input class="form-checkbox rounded-full text-danger" type="checkbox" id="checkBox12" checked>
                        <label class="ms-1.5" for="checkBox12">Danger</label>
                    </div>

                    <div>
                        <input class="form-checkbox rounded-full text-warning" type="checkbox" id="checkBox13" checked>
                        <label class="ms-1.5" for="checkBox13">Warning</label>
                    </div>

                    <div>
                        <input class="form-checkbox rounded-full text-pink-500" type="checkbox" id="customckec14" checked>
                        <label class="ms-1.5" for="customckec14">Pink</label>
                    </div>

                    <div>
                        <input class="form-checkbox rounded-full text-blue" type="checkbox" id="checkBox15" checked>
                        <label class="ms-1.5" for="checkBox15">Blue</label>
                    </div>

                    <div>
                        <input class="form-checkbox rounded-full text-info" type="checkbox" id="checkBox16" checked>
                        <label class="ms-1.5" for="checkBox16">Info</label>
                    </div>

                    <div>
                        <input class="form-checkbox rounded-full text-dark" type="checkbox" id="checkBox17" checked>
                        <label class="ms-1.5" for="checkBox17">Dark</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="flex justify-between items-center">
                <h4 class="card-title">Radio Button</h4>
            </div>
        </div>
        <div class="p-6">
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h6 class="text-sm mb-2">Default</h6>
                    <div class="flex flex-col gap-2">
                        <div class="form-check">
                            <input type="radio" class="form-radio text-primary" name="formRadio" id="formRadio01" checked>
                            <label class="ms-1.5" for="formRadio01">Check this radio</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-radio text-primary" name="formRadio" id="formRadio02">
                            <label class="ms-1.5" for="formRadio02">Check this radio</label>
                        </div>
                    </div>
                </div>

                <div>
                    <h6 class="text-sm mb-2">Disabled</h6>

                    <div class="flex flex-col gap-2">
                        <div class="opacity-75">
                            <input type="radio" class="form-radio text-primary" id="formRadio04" checked disabled>
                            <label class="ms-1.5" for="formRadio04">Check this radio</label>
                        </div>

                        <div class="opacity-75">
                            <input type="radio" class="form-radio text-primary" id="formRadio05" disabled>
                            <label class="ms-1.5" for="formRadio05">Check this radio</label>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-3">
                    <div>
                        <input class="form-radio text-primary" type="radio" id="formRadio10" checked>
                        <label class="ms-1.5" for="formRadio10">Primary</label>
                    </div>

                    <div>
                        <input class="form-radio text-success" type="radio" id="formRadio11" checked>
                        <label class="ms-1.5" for="formRadio11">Success</label>
                    </div>

                    <div>
                        <input class="form-radio text-danger" type="radio" id="formRadio12" checked>
                        <label class="ms-1.5" for="formRadio12">Danger</label>
                    </div>

                    <div>
                        <input class="form-radio text-warning" type="radio" id="formRadio13" checked>
                        <label class="ms-1.5" for="formRadio13">Warning</label>
                    </div>

                    <div>
                        <input class="form-radio text-pink-500" type="radio" id="formRadio14" checked>
                        <label class="ms-1.5" for="formRadio14">Pink</label>
                    </div>

                    <div>
                        <input class="form-radio text-blue" type="radio" id="formRadio15" checked>
                        <label class="ms-1.5" for="formRadio15">Blue</label>
                    </div>

                    <div>
                        <input class="form-radio text-info" type="radio" id="formRadio16" checked>
                        <label class="ms-1.5" for="formRadio16">Info</label>
                    </div>

                    <div>
                        <input class="form-radio text-dark" type="radio" id="formRadio17" checked>
                        <label class="ms-1.5" for="formRadio17">Dark</label>
                    </div>
                </div>

                <div class="flex flex-col gap-3">
                    <div>
                        <input class="form-radio rounded text-primary" type="radio" id="formRadio1" checked>
                        <label class="ms-1.5" for="formRadio1">Primary</label>
                    </div>

                    <div>
                        <input class="form-radio rounded text-success" type="radio" id="formRadio2" checked>
                        <label class="ms-1.5" for="formRadio2">Success</label>
                    </div>

                    <div>
                        <input class="form-radio rounded text-danger" type="radio" id="formRadio3" checked>
                        <label class="ms-1.5" for="formRadio3">Danger</label>
                    </div>

                    <div>
                        <input class="form-radio rounded text-warning" type="radio" id="formRadio4" checked>
                        <label class="ms-1.5" for="formRadio4">Warning</label>
                    </div>

                    <div>
                        <input class="form-radio rounded text-pink-500" type="radio" id="formRadio5" checked>
                        <label class="ms-1.5" for="formRadio5">Pink</label>
                    </div>

                    <div>
                        <input class="form-radio rounded text-blue" type="radio" id="formRadio7" checked>
                        <label class="ms-1.5" for="formRadio7">Blue</label>
                    </div>

                    <div>
                        <input class="form-radio rounded text-info" type="radio" id="formRadio8" checked>
                        <label class="ms-1.5" for="formRadio8">Info</label>
                    </div>

                    <div>
                        <input class="form-radio rounded text-dark" type="radio" id="formRadio9" checked>
                        <label class="ms-1.5" for="formRadio9">Dark</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="flex justify-between items-center">
                <h4 class="card-title">Switch</h4>
            </div>
        </div>
        <div class="p-6">
            <div class="grid xl:grid-cols-2 gap-6">
                <div class="flex flex-col gap-3">
                    <h6 class="text-sm mb-2">Default</h6>
                    <div class="flex items-center">
                        <input class="form-switch" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="ms-1.5" for="flexSwitchCheckDefault">Default switch
                            checkbox</label>
                    </div>
                    <div class="flex items-center">
                        <input class="form-switch" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                        <label class="ms-1.5" for="flexSwitchCheckChecked">Checked switch
                            checkbox</label>
                    </div>
                </div>

                <div class="flex flex-col gap-3">
                    <h6 class="text-sm mb-2">Disabled</h6>
                    <div class="flex items-center opacity-60">
                        <input class="form-switch" type="checkbox" role="switch" id="flexSwitchCheckDisabled" disabled>
                        <label class="ms-1.5" for="flexSwitchCheckDisabled">Disabled Switch</label>
                    </div>
                    <div class="flex items-center opacity-60">
                        <input class="form-switch" type="checkbox" role="switch" id="flexSwitchCheckCheckedDisabled" checked disabled>
                        <label class="ms-1.5" for="flexSwitchCheckCheckedDisabled">Disabled checked
                            Switch</label>
                    </div>
                </div>

                <div class="flex flex-col gap-3">
                    <h6 class="text-sm mb-2">Colored</h6>
                    <div class="flex items-center">
                        <input type="checkbox" id="formSwitch" class="form-switch text-primary" checked>
                        <label for="formSwitch" class="ms-1.5">Primary</label>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" id="formSwitch2" class="form-switch text-warning" checked>
                        <label for="formSwitch2" class="ms-1.5">Warning</label>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" id="formSwitch3" class="form-switch text-danger" checked>
                        <label for="formSwitch3" class="ms-1.5">Danger</label>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" id="formSwitch4" class="form-switch text-success" checked>
                        <label for="formSwitch4" class="ms-1.5">Success</label>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" id="formSwitch5" class="form-switch text-secondary" checked>
                        <label for="formSwitch5" class="ms-1.5">Secondary</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

@endsection