@extends('layouts.vertical', ['title' => 'Validation'])

@section('css')

@endsection

@section('content')

@include("layouts.shared/page-title", ["subtitle" => "Forms", "title" => "Validation"])

<div class="flex flex-col gap-6">
    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Browser defaults</h4>

            <form class="grid lg:grid-cols-3 gap-6">
                <div>
                    <label for="validationDefault01" class="text-default-800 text-sm font-medium inline-block mb-2">First name</label>
                    <input type="text" class="form-input" id="validationDefault01" value="Mark" required>
                </div>
                <div>
                    <label for="validationDefault02" class="text-default-800 text-sm font-medium inline-block mb-2">Last name</label>
                    <input type="text" class="form-input" id="validationDefault02" value="Otto" required>
                </div>
                <div>
                    <label for="validationDefaultUsername" class="text-default-800 text-sm font-medium inline-block mb-2">Username</label>
                    <div class="flex items-center">
                        <span class="py-2 px-3 bg-light rounded-l" id="inputGroupPrepend2">@</span>
                        <input type="text" class="form-input rounded-l-none" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                    </div>
                </div>
                <div>
                    <label for="validationDefault03" class="text-default-800 text-sm font-medium inline-block mb-2">City</label>
                    <input type="text" class="form-input" id="validationDefault03" required>
                </div>
                <div>
                    <label for="validationDefault04" class="text-default-800 text-sm font-medium inline-block mb-2">State</label>
                    <select class="form-select" id="validationDefault04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div>
                    <label for="validationDefault05" class="text-default-800 text-sm font-medium inline-block mb-2">Zip</label>
                    <input type="text" class="form-input" id="validationDefault05" required>
                </div>
                <div class="col-span-3">
                    <div class="form-check">
                        <input class="form-checkbox rounded" type="checkbox" value="" id="invalidCheck2" required>
                        <label class="ms-1.5" for="invalidCheck2">
                            Agree to terms and conditions
                        </label>
                    </div>
                </div>
                <div class="col-span-3">
                    <button class="btn bg-primary text-white" type="submit">Submit form</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('script')

@endsection