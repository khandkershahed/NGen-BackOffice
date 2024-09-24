<x-admin-app-layout :title="'Employee Project Add'">
    <div class="card card-flash">

        <div class="card-header mt-6">
            <div class="card-title"></div>
            <div class="card-toolbar">
                <a href="{{ route('admin.employee-project.index') }}" class="btn btn-light-info">
                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5"
                                fill="currentColor" />
                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                                transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
                                fill="currentColor" />
                        </svg>
                    </span>

                    Back to the list
                </a>
            </div>
        </div>
        <div class="card-body pt-0">

            <form class="form" action="{{ route('admin.employee-project.store') }}" method="POST"
                enctype="multipart/form-data">

                @csrf

                <div class="row">


                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="name"
                            class="col-form-label fw-bold fs-6 required">{{ __('Name') }}
                        </x-metronic.label>

                        <x-metronic.input id="name" type="text" name="name" :value="old('name')"
                            placeholder="Enter the Name" required></x-metronic.input>
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="supervisor"
                            class="col-form-label fw-bold fs-6">{{ __('Select a Supervisor') }}</x-metronic.label>
                        <x-metronic.select-option id="supervisor" required name="supervisor[]" data-hide-search="false"
                            multiple data-placeholder="Select an option">
                            <option></option>
                            @foreach ($admins as $admin)
                                <option value="{{ $admin->id }}">{{ $admin->name }}</option>
                            @endforeach
                        </x-metronic.select-option>
                    </div>

                    {{-- Start Date  --}}
                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="start_date"
                            class="col-form-label fw-bold fs-6">{{ __('Start Date') }}</x-metronic.label>
                        <x-metronic.input id="start_date" type="date" name="start_date" :value="old('start_date')"
                            required></x-metronic.input>
                    </div>

                    {{-- Start Time  --}}
                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="start_time"
                            class="col-form-label fw-bold fs-6">{{ __('Start Time') }}</x-metronic.label>
                        <x-metronic.input id="start_time" type="time" name="start_time" :value="old('start_time')"
                            required></x-metronic.input>
                    </div>

                    {{-- End Date  --}}
                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="end_date"
                            class="col-form-label fw-bold fs-6">{{ __('End Date') }}</x-metronic.label>
                        <x-metronic.input id="end_date" type="date" name="end_date" :value="old('end_date')"
                            required></x-metronic.input>
                    </div>

                    {{-- End Time  --}}
                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="end_time"
                            class="col-form-label fw-bold fs-6">{{ __('End Time') }}</x-metronic.label>
                        <x-metronic.input id="end_time" type="time" name="end_time" :value="old('end_time')"
                            required></x-metronic.input>
                    </div>

                    {{-- Status --}}
                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="type" class="col-form-label fw-bold fs-6">
                            {{ __('Select a Type ') }}</x-metronic.label>
                        <x-metronic.select-option id="type" name="type" data-hide-search="true"
                            data-placeholder="Select an option">
                            <option></option>
                            <option value="new">New</option>
                            <option value="update">Update</option>
                            <option value="new_version">New Version</option>
                        </x-metronic.select-option>
                    </div>

                    {{-- Project Status --}}
                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="project_status" class="col-form-label fw-bold fs-6">
                            {{ __('Select a Project Status ') }}</x-metronic.label>
                        <x-metronic.select-option id="project_status" name="project_status" data-hide-search="true"
                            data-placeholder="Select an option">
                            <option></option>
                            <option value="planned">Planned</option>
                            <option value="on_going">On Going</option>
                            <option value="completed">Completed</option>
                        </x-metronic.select-option>
                    </div>

                    {{-- Weight --}}
                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="weight" class="col-form-label fw-bold fs-6">{{ __('Weight') }}
                        </x-metronic.label>

                        <x-metronic.input id="weight" type="number" name="weight" :value="old('weight')"
                            placeholder="Eg:1 to 5"></x-metronic.input>
                    </div>

                    {{-- Kpi Rating --}}
                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="kpi_rating" class="col-form-label fw-bold fs-6">{{ __('Kpi Rating') }}
                        </x-metronic.label>

                        <x-metronic.input id="kpi_rating" type="number" step=0.01 name="kpi_rating"
                            :value="old('kpi_rating')" placeholder="Eg:20.00"></x-metronic.input>
                    </div>

                    {{-- Total Working Day --}}
                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="total_working_day"
                            class="col-form-label fw-bold fs-6">{{ __('Total Working Day') }}
                        </x-metronic.label>

                        <x-metronic.input id="total_working_day" type="number" name="total_working_day"
                            :value="old('total_working_day')" placeholder="Eg:20 Days"></x-metronic.input>
                    </div>

                    {{-- Total Working Day --}}
                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="total_working_man_hour"
                            class="col-form-label fw-bold fs-6">{{ __('Total Working Hour') }}
                        </x-metronic.label>

                        <x-metronic.input id="total_working_man_hour" type="number" step=0.01
                            name="total_working_man_hour" :value="old('total_working_man_hour')" placeholder="10.00"></x-metronic.input>
                    </div>


                    {{-- Description --}}
                    <div class="col-lg-12 mb-7">
                        <x-metronic.label for="description"
                            class="col-form-label fw-bold fs-6 ">{{ __('Description') }}
                        </x-metronic.label>

                        <textarea id="description" class="ckeditor" name="description"></textarea>
                    </div>

                    {{-- Review --}}
                    <div class="col-lg-12 mb-7">
                        <x-metronic.label for="review" class="col-form-label fw-bold fs-6 ">{{ __('Review') }}
                        </x-metronic.label>

                        <textarea id="review" class="ckeditor" name="review"></textarea>
                    </div>

                    {{-- Status --}}

                    <div class="col-lg-2 mb-7">
                        <x-metronic.label for="status" class="col-form-label required fw-bold fs-6">
                            {{ __('Select a Status ') }}</x-metronic.label>
                        <x-metronic.select-option id="status" name="status" data-hide-search="true"
                            data-placeholder="Select an option">
                            <option></option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </x-metronic.select-option>
                    </div>


                </div>

                <div class="text-center pt-15">
                    <x-metronic.button type="submit" class="primary">
                        {{ __('Submit') }}
                    </x-metronic.button>
                </div>

            </form>

        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // The DOM elements you wish to replace with Tagify
            var input1 = document.querySelector("#tags");
            // Initialize Tagify components on the above inputs
            new Tagify(input1);
        });
    </script>
</x-admin-app-layout>
