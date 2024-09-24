<x-admin-app-layout :title="'Employee Project Update'">
    <div class="card card-flash">

        <div class="card-header mt-6">
            <div class="card-title"></div>
            <div class="card-toolbar">
                <a href="{{ route('admin.employee-task.index') }}" class="btn btn-light-info">
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

            <form class="form" action="{{ route('admin.employee-task.update', $item->id) }}" method="POST"
                enctype="multipart/form-data">

                @csrf

                @method('PUT')

                <div class="row">

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="name"
                            class="col-form-label fw-bold fs-6 required">{{ __('Name') }}
                        </x-metronic.label>

                        <x-metronic.input id="name" type="text" name="name" :value="old('name', $item->name)"
                            placeholder="Enter the Name" required></x-metronic.input>
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="supervisor"
                            class="col-form-label fw-bold fs-6">{{ __('Select a Supervisor') }}</x-metronic.label>
                        <x-metronic.select-option id="supervisor" required name="supervisors[]" data-hide-search="false"
                            multiple data-placeholder="Select an option">
                            <option></option>
                            @foreach ($admins as $admin)
                                <option value="{{ $admin->id }}"
                                    {{ in_array($admin->id, old('supervisors', json_decode($item->supervisors, true) ?: [])) ? 'selected' : '' }}>
                                    {{ $admin->name }}
                                </option>
                            @endforeach
                        </x-metronic.select-option>
                    </div>

                    {{-- Start Date  --}}
                    <div class="col-lg-2 mb-7">
                        <x-metronic.label for="start_date"
                            class="col-form-label fw-bold fs-6">{{ __('Start Date') }}</x-metronic.label>
                        <x-metronic.input id="start_date" type="date" name="start_date" :value="old('start_date', $item->start_date)"
                            required></x-metronic.input>
                    </div>

                    {{-- Create Date  --}}
                    <div class="col-lg-2 mb-7">
                        <x-metronic.label for="create_date"
                            class="col-form-label fw-bold fs-6">{{ __('Create Time') }}</x-metronic.label>
                        <x-metronic.input id="create_date" type="date" name="create_date" :value="old('create_date', $item->create_date)"
                            required></x-metronic.input>
                    </div>

                    {{-- End Date  --}}
                    <div class="col-lg-2 mb-7">
                        <x-metronic.label for="end_date"
                            class="col-form-label fw-bold fs-6">{{ __('End Date') }}</x-metronic.label>
                        <x-metronic.input id="end_date" type="date" name="end_date" :value="old('end_date', $item->end_date)"
                            required></x-metronic.input>
                    </div>

                    {{-- Extended Date  --}}
                    <div class="col-lg-2 mb-7">
                        <x-metronic.label for="extended_date"
                            class="col-form-label fw-bold fs-6">{{ __('Extended Date') }}</x-metronic.label>
                        <x-metronic.input id="extended_date" type="date" name="extended_date" :value="old('extended_date', $item->extended_date)"
                            required></x-metronic.input>
                    </div>

                    {{-- Month  --}}
                    <div class="col-lg-2 mb-7">
                        <x-metronic.label for="month"
                            class="col-form-label fw-bold fs-6">{{ __('Month') }}</x-metronic.label>
                        <x-metronic.input id="month" type="text" name="month" :value="old('month', $item->month)"
                            required></x-metronic.input>
                    </div>

                    {{-- Fiscal Year  --}}
                    <div class="col-lg-2 mb-7">
                        <x-metronic.label for="fiscal_year"
                            class="col-form-label fw-bold fs-6">{{ __('Fiscal Year') }}</x-metronic.label>
                        <x-metronic.input id="fiscal_year" type="text" name="fiscal_year" :value="old('fiscal_year', $item->fiscal_year)"
                            required></x-metronic.input>
                    </div>

                    {{-- Quarter Selection --}}
                    <div class="col-lg-2 mb-7">
                        <x-metronic.label for="quarter"
                            class="col-form-label fw-bold fs-6">{{ __('Select a Quarter') }}</x-metronic.label>
                        <x-metronic.select-option id="quarter" name="quarter" data-hide-search="true"
                            data-placeholder="Select an option">
                            <option></option>
                            <option value="q1" {{ old('quarter', $item->quarter) == 'q1' ? 'selected' : '' }}>q1
                            </option>
                            <option value="q2" {{ old('quarter', $item->quarter) == 'q2' ? 'selected' : '' }}>q2
                            </option>
                            <option value="q3" {{ old('quarter', $item->quarter) == 'q3' ? 'selected' : '' }}>q3
                            </option>
                            <option value="q4" {{ old('quarter', $item->quarter) == 'q4' ? 'selected' : '' }}>q4
                            </option>
                        </x-metronic.select-option>
                    </div>

                    {{-- Duration --}}
                    <div class="col-lg-2 mb-7">
                        <x-metronic.label for="duration"
                            class="col-form-label fw-bold fs-6">{{ __('Duration') }}</x-metronic.label>
                        <x-metronic.input id="duration" type="number" step=0.01 name="duration" :value="old('duration', $item->duration)"
                            placeholder=""></x-metronic.input>
                    </div>


                    {{-- Point --}}
                    <div class="col-lg-2 mb-7">
                        <x-metronic.label for="point"
                            class="col-form-label fw-bold fs-6">{{ __('Point') }}</x-metronic.label>
                        <x-metronic.input id="point" type="number" step=0.01 name="point" :value="old('point', $item->point)"
                            placeholder=""></x-metronic.input>
                    </div>

                    {{-- Score --}}
                    <div class="col-lg-2 mb-7">
                        <x-metronic.label for="score"
                            class="col-form-label fw-bold fs-6">{{ __('Score') }}</x-metronic.label>
                        <x-metronic.input id="score" type="number" step=0.01 name="score" :value="old('score', $item->score)"
                            placeholder=""></x-metronic.input>
                    </div>

                    {{-- Supervisor Rating --}}
                    <div class="col-lg-2 mb-7">
                        <x-metronic.label for="supervisor_rating"
                            class="col-form-label fw-bold fs-6">{{ __('Supervisor Rating') }}</x-metronic.label>
                        <x-metronic.input id="supervisor_rating" step=0.01 type="number" name="supervisor_rating"
                            :value="old('supervisor_rating', $item->supervisor_rating)" placeholder=""></x-metronic.input>
                    </div>

                    {{-- Hr Rating --}}
                    <div class="col-lg-2 mb-7">
                        <x-metronic.label for="hr_rating"
                            class="col-form-label fw-bold fs-6">{{ __('Hr Rating') }}</x-metronic.label>
                        <x-metronic.input id="hr_rating" type="number" step=0.01 name="hr_rating" :value="old('hr_rating', $item->hr_rating)"
                            placeholder=""></x-metronic.input>
                    </div>

                    {{-- CEO Rating --}}
                    <div class="col-lg-2 mb-7">
                        <x-metronic.label for="ceo_rating"
                            class="col-form-label fw-bold fs-6">{{ __('CEO Rating') }}</x-metronic.label>
                        <x-metronic.input id="ceo_rating" type="number" step=0.01 name="ceo_rating"
                            :value="old('ceo_rating', $item->ceo_rating)" placeholder=""></x-metronic.input>
                    </div>

                    {{-- Kpi Percentage --}}
                    <div class="col-lg-2 mb-7">
                        <x-metronic.label for="kpi_percentage"
                            class="col-form-label fw-bold fs-6">{{ __('Kpi Percentage') }}</x-metronic.label>
                        <x-metronic.input id="kpi_percentage" type="number" step=0.01 name="kpi_percentage"
                            :value="old('kpi_percentage', $item->kpi_percentage)" placeholder=""></x-metronic.input>
                    </div>

                    {{-- Priority --}}
                    <div class="col-lg-2 mb-7">
                        <x-metronic.label for="priority"
                            class="col-form-label fw-bold fs-6">{{ __('Priority') }}</x-metronic.label>
                        <x-metronic.input id="priority" type="number" step=0.01 name="priority" :value="old('priority', $item->priority)"
                            placeholder=""></x-metronic.input>
                    </div>

                    {{-- Supervisor Review --}}
                    <div class="col-lg-5 mb-7">
                        <x-metronic.label for="supervisor_review"
                            class="col-form-label fw-bold fs-6">{{ __('Supervisor Review') }}</x-metronic.label>
                        <x-metronic.textarea id="supervisor_review" name="supervisor_review" cols="3"
                            rows="3" >{{ $item->supervisor_review }}</x-metronic.textarea>
                    </div>

                    {{-- Hr Review --}}
                    <div class="col-lg-5 mb-7">
                        <x-metronic.label for="hr_review"
                            class="col-form-label fw-bold fs-6">{{ __('Hr Review') }}</x-metronic.label>
                        <x-metronic.textarea id="hr_review" name="hr_review" cols="3" rows="3"
                            >{{ $item->hr_review }}</x-metronic.textarea>
                    </div>

                    {{-- CEO Review --}}
                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="ceo_review"
                            class="col-form-label fw-bold fs-6">{{ __('CEO Review') }}</x-metronic.label>
                        <x-metronic.textarea id="ceo_review" name="ceo_review" cols="3" rows="3"
                            >{{ $item->ceo_review }}</x-metronic.textarea>
                    </div>

                    {{-- Comment --}}
                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="comment"
                            class="col-form-label fw-bold fs-6">{{ __('Comment') }}</x-metronic.label>
                        <x-metronic.textarea id="comment" name="comment" cols="3" rows="3"
                             >{{ $item->comment }}</x-metronic.textarea>
                    </div>

                    {{-- Extended Note --}}
                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="extended_note"
                            class="col-form-label fw-bold fs-6">{{ __('Extended Note') }}</x-metronic.label>
                        <x-metronic.textarea id="extended_note" name="extended_note" cols="3" rows="3"
                            >{{ $item->extended_note }}</x-metronic.textarea>
                    </div>

                    {{-- Description --}}
                    <div class="col-lg-12 mb-7">
                        <x-metronic.label for="description"
                            class="col-form-label fw-bold fs-6">{{ __('Description') }}</x-metronic.label>
                        <textarea id="description" class="ckeditor" name="description">{{ old('description', $item->description) }}</textarea>
                    </div>

                    {{-- Status --}}
                    <div class="col-lg-2 mb-7">
                        <x-metronic.label for="status"
                            class="col-form-label required fw-bold fs-6">{{ __('Select a Status ') }}</x-metronic.label>
                        <x-metronic.select-option id="status" name="status" data-hide-search="true"
                            data-placeholder="Select an option">
                            <option></option>
                            <option value="active" {{ old('status', $item->status) == 'active' ? 'selected' : '' }}>
                                Active</option>
                            <option value="inactive"
                                {{ old('status', $item->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
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


</x-admin-app-layout>
