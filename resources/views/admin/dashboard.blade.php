<x-admin-app-layout>
    <div class="row mb-5">
        <!-- Attendance -->
        <div class="col-xl-3">
            <div class="card card-flush shadow-sm">
                <div class="card-body p-0">
                    <div class="d-flex flex-stack justify-content-between">
                        <div class="d-flex align-items-center me-3 p-8 rounded-3">
                            <a href="">
                                <span class="bg-light-primary rounded-3 p-3 me-3"><i
                                        class="fa-solid text-primary fa-clipboard-user fs-3"></i></span>
                                <div class="flex-grow-1">
                                    <a href="#" class="text-gray-800 fs-5 fw-bold lh-0">HR
                                        <span class="text-gray-500 fw-semibold d-block fs-6 pt-4">{{ date('d M, Y') }}</span>
                                    </a>
                                </div>
                            </a>
                        </div>

                        <div class="d-flex flex-column align-items-center pe-4">
                            <span class="main_text_color fw-bold pb-2">
                                Todays Attendace</span>
                            <div>
                                <span id="local-time" class="text-gray-500 fw-semibold">
                                </span>
                                <span class="bg-success fw-semibold ms-3 p-1 px-3 text-white rounded-2">
                                    In Time
                                </span>
                                {{-- <span class="bg-danger fw-semibold ms-3 p-2 text-white rounded-2">
                                    Late
                                </span>
                                <span class="bg-danger fw-semibold ms-3 p-2 text-white rounded-2">
                                    Double Late
                                </span> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3">
            <div class="card card-flush shadow-sm">
                <div class="card-body p-0">
                    <div class="d-flex flex-stack justify-content-between">
                        <div class="d-flex align-items-center me-3 p-8 w-50 rounded-3">
                            <a href="">
                                <span class="bg-light-primary rounded-3 p-3 me-3"><i
                                        class="fa-solid text-primary fa-list-check fs-3"></i></span>
                                <div class="flex-grow-1">
                                    <a href="#" class="text-gray-800 fs-5 fw-bold lh-0">My Task
                                        <span class="text-gray-500 fw-semibold d-block fs-6 pt-4">Quick</span>
                                    </a>
                                </div>
                            </a>
                        </div>

                        <div class="flex-column d-flex w-50">
                            <div class="d-flex align-items-center justify-content-between pe-3">
                                <span class="text-gray-500 fw-semibold">
                                    Critical</span>
                                <span class="bg-primary fw-semibold ms-3 px-2 text-white rounded-2">
                                    5+ Task
                                </span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between pe-3 pt-2">
                                <span class="text-gray-500 fw-semibold">
                                    Pending</span>
                                <span class="bg-primary fw-semibold ms-3 px-2 text-white rounded-2">
                                    5+ Task
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3">
            <div class="card card-flush shadow-sm">
                <div class="card-body p-0">
                    <div class="d-flex flex-stack justify-content-between">
                        <div class="d-flex align-items-center me-3 p-8 w-50 rounded-3">
                            <a href="">
                                <span class="bg-light-primary rounded-3 p-3 me-3"><i
                                        class="fa-solid text-primary fa-bell fs-3"></i></span>
                                <div class="flex-grow-1">
                                    <a href="#" class="text-gray-800 fs-5 fw-bold lh-0">Notification
                                        <span class="text-gray-500 fw-semibold d-block fs-6 pt-4">Quick Status</span>
                                    </a>
                                </div>
                            </a>
                        </div>

                        <div class="flex-column d-flex w-50">
                            <div class="d-flex align-items-center justify-content-between pe-3">
                                <span class="text-gray-500 fw-semibold">
                                    Total</span>
                                <span class="fw-semibold ms-3 px-2 text-primary rounded-2">
                                    5+
                                </span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between pe-3 pt-2">
                                <span class="text-gray-500 fw-semibold">
                                    Unread</span>
                                <span class="fw-semibold ms-3 px-2 text-primary rounded-2">
                                    5+
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3">
            <div class="card card-flush shadow-sm">
                <div class="card-body p-0">
                    <div class="d-flex flex-stack justify-content-between">
                        <div class="d-flex align-items-center me-3 p-8 w-50 rounded-3">
                            <a href="">
                                <span class="bg-light-primary rounded-3 p-3 me-3"><i
                                        class="fa-solid text-primary fa-bullseye fs-3"></i></span>
                                <div class="flex-grow-1">
                                    <a href="#" class="text-gray-800 fs-5 fw-bold lh-0">Target
                                        <span class="text-gray-500 fw-semibold d-block fs-6 pt-4">All List</span>
                                    </a>
                                </div>
                            </a>
                        </div>

                        <div class="flex-column d-flex w-50">
                            <div class="d-flex align-items-center justify-content-between pe-3">
                                <span class="text-gray-500 fw-semibold">
                                    Sales</span>
                                <span class="fw-semibold ms-3 px-2 text-primary rounded-2">
                                    150
                                </span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between pe-3 pt-2">
                                <span class="text-gray-500 fw-semibold">
                                    Marketing</span>
                                <span class="fw-semibold ms-3 px-2 text-primary rounded-2">
                                    300
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-100"
                style="
              background-color: var(--site-primary);
              background-image: url('assets/media/patterns/vector-1.png');
            ">
                <div class="card-header p-5">
                    <div class="card-title d-flex flex-column">
                        <p class="text-white">Sales</p>
                        <div class="d-flex align-items-center pt-10">
                            <span class="fs-4 fw-semibold text-white me-1 align-self-start">$</span>
                            <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">2,420</span>
                            <span class="badge badge-light-success fs-base">
                                <i class="fa-solid fa-arrow-up fs-5 text-success ms-n1"><span
                                        class="path1"></span><span class="path2"></span></i>
                                2.6%
                            </span>
                        </div>
                        <div class="pt-10">
                            <div>
                                <span class="text-white pt-1 fw-semibold fs-6">02 RFQ</span><span class="text-white">
                                    <br /> </span>
                                <span class="text-white pt-1 fw-semibold fs-6">02 Pending Deals</span>
                                <a href="#" class="btn btn-sm fw-bold btn-secondary">
                                    Sales
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-100"
                style="
              background-color: #0b6476;
              background-image: url('assets/media/patterns/vector-1.png');
            ">
                <div class="card-header pt-5">
                    <div class="card-title d-flex flex-column">
                        <a href="#" class="text-white fw-bold text-hover-primary fs-6">Sales</a>
                        <div class="pt-10">
                            <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Telephone: 2.6%
                            </span>
                            <br />
                            <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Email: 2.6% </span><br />
                            <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Visit: 2.6%
                            </span>
                        </div>
                    </div>
                </div>

                <div class="card-body d-flex align-items-end pt-0">
                    <div class="d-flex align-items-center flex-column mt-3 w-100">
                        <div
                            class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                            <span>43 Pending</span>
                            <span>72%</span>
                        </div>

                        <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                            <div class="bg-white rounded h-8px" role="progressbar" style="width: 72%"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-flush h-md-100 mb-5 mb-xl-10 border">
                <div class="card-header pt-5">
                    <div class="card-title d-flex flex-column">
                        <div class="d-flex align-items-center">
                            <span class="fs-4 fw-semibold main_text_color me-1 align-self-start">Status</span>
                        </div>

                        <span class="text-gray-500 pt-1 fw-semibold fs-6">Total Project</span>
                    </div>
                </div>

                <div class="card-body pt-2 pb-4 d-flex align-items-center">
                    <div class="d-flex flex-column content-justify-center w-100">
                        <div class="d-flex fs-6 fw-semibold align-items-center">
                            <div class="bullet w-8px h-6px rounded-2 bg-danger me-3"></div>

                            <div class="text-gray-500 flex-grow-1 me-4">
                                Completed Project
                            </div>

                            <div class="fw-bolder text-gray-700 text-xxl-end">
                                $7,660
                            </div>
                        </div>

                        <div class="d-flex fs-6 fw-semibold align-items-center my-3">
                            <div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>

                            <div class="text-gray-500 flex-grow-1 me-4">
                                Pending Project
                            </div>

                            <div class="fw-bolder text-gray-700 text-xxl-end">
                                $2,820
                            </div>
                        </div>

                        <div class="d-flex fs-6 fw-semibold align-items-center">
                            <div class="bullet w-8px h-6px rounded-2 me-3" style="background-color: #e4e6ef"></div>

                            <div class="text-gray-500 flex-grow-1 me-4">
                                All Project
                            </div>

                            <div class="fw-bolder text-gray-700 text-xxl-end">
                                $45,257
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-flush h-md-100 mb-5 mb-xl-10 border"
                style="
              background: linear-gradient(
                112.14deg,
                #f3f4f6 0%,
                #f3f4f6 100%
              );
            ">
                <div class="card-header pt-5">
                    <div class="card-title d-flex flex-column">
                        <div class="d-flex align-items-center">
                            <span class="fs-4 fw-semibold main_text_color me-1 align-self-start">Target Status</span>
                        </div>

                        <span class="text-gray-500 pt-1 fw-semibold fs-6">Total Target</span>
                    </div>
                </div>

                <div class="card-body pt-2 pb-4 d-flex align-items-center">
                    <div class="d-flex flex-column content-justify-center w-100">
                        <div class="d-flex fs-6 fw-semibold align-items-center">
                            <div class="bullet w-8px h-6px rounded-2 bg-danger me-3"></div>

                            <div class="text-gray-500 flex-grow-1 me-4">
                                Contact
                            </div>

                            <div class="fw-bolder text-gray-700 text-xxl-end">
                                660
                            </div>
                            <div class="fw-bolder text-success text-xxl-end ps-4">
                                820 C
                            </div>
                        </div>

                        <div class="d-flex fs-6 fw-semibold align-items-center my-3">
                            <div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>

                            <div class="text-gray-500 flex-grow-1 me-4">
                                Visit
                            </div>

                            <div class="fw-bolder text-gray-700 text-xxl-end">
                                820
                            </div>
                            <div class="fw-bolder text-success text-xxl-end ps-4">
                                820 C
                            </div>
                        </div>

                        <div class="d-flex fs-6 fw-semibold align-items-center">
                            <div class="bullet w-8px h-6px rounded-2 me-3" style="background-color: #e4e6ef"></div>

                            <div class="text-gray-500 flex-grow-1 me-4">
                                RFQ
                            </div>

                            <div class="fw-bolder text-gray-700 text-xxl-end">
                                257
                            </div>
                            <div class="fw-bolder text-success text-xxl-end ps-4">
                                820 C
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-xl-8 mb-xl-10">
            <div class="card card-flush h-xl-100 shadow-sm">
                <div class="card-body pt-6">
                    <ul class="nav nav-pills nav-pills-custom mb-3" role="tablist">
                        <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary align-items-center overflow-hidden w-100px h-50px pt-3 pb-2 active"
                                id="kt_stats_widget_16_tab_link_1" data-bs-toggle="pill"
                                href="#kt_stats_widget_16_tab_1" aria-selected="true" role="tab">
                                <div class="nav-icon mb-1">
                                    <i class="fa-solid fa-arrow-right fs-6" aria-hidden="true"></i>
                                </div>

                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                                    Pipeline
                                </span>

                                <span
                                    class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary custom-tabs-bottom"></span>
                            </a>
                        </li>
                        <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary align-items-center overflow-hidden w-100px h-50px pt-3 pb-2"
                                id="kt_stats_widget_16_tab_link_1" data-bs-toggle="pill"
                                href="#kt_stats_widget_16_tab_1" aria-selected="true" role="tab">
                                <div class="nav-icon mb-1">
                                    <i class="fa-solid fa-arrow-right fs-6" aria-hidden="true"></i>
                                </div>

                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                                    Pipeline
                                </span>

                                <span
                                    class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary custom-tabs-bottom"></span>
                            </a>
                        </li>
                        <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary align-items-center overflow-hidden w-100px h-50px pt-3 pb-2"
                                id="kt_stats_widget_16_tab_link_3" data-bs-toggle="pill"
                                href="#kt_stats_widget_16_tab_1" aria-selected="true" role="tab">
                                <div class="nav-icon mb-1">
                                    <i class="fa-solid fa-arrow-right fs-6" aria-hidden="true"></i>
                                </div>

                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                                    Pipeline
                                </span>

                                <span
                                    class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary custom-tabs-bottom"></span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1" role="tabpanel"
                            aria-labelledby="kt_stats_widget_16_tab_link_1">
                            <div class="table-responsive">
                                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                    <thead>
                                        <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                            <th class="p-0 pb-3 min-w-150px text-start">
                                                Person
                                            </th>
                                            <th class="p-0 pb-3 min-w-100px text-end pe-13">
                                                Number
                                            </th>
                                            <th class="p-0 pb-3 min-w-100px text-end pe-13">
                                                Complete
                                            </th>
                                            <th class="p-0 pb-3 w-125px text-end pe-7">
                                                Status
                                            </th>
                                            <th class="p-0 pb-3 w-50px text-end">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px me-3">
                                                        <img src="https://preview.keenthemes.com/metronic8/demo1/assets/media/avatars/300-3.jpg"
                                                            class="" alt="" />
                                                    </div>

                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="https://preview.keenthemes.com/metronic8/demo1/pages/user-profile/overview.html"
                                                            class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Guy
                                                            Hawkins</a>
                                                        <span
                                                            class="text-gray-500 fw-semibold d-block fs-7">info@mail.com</span>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="text-end pe-13">
                                                <span class="text-gray-600 fw-bold fs-6">01576614451</span>
                                            </td>

                                            <td class="text-end pe-13">
                                                <span class="text-gray-600 fw-bold fs-6">78.34%</span>
                                            </td>

                                            <td class="text-end pe-0">
                                                <div id="kt_table_widget_16_chart_1_1" class="h-50px mt-n8 pe-7"
                                                    data-kt-chart-color="success" style="min-height: 50px">
                                                    <div id="apexcharts9ovbvkwdj"
                                                        class="apexcharts-canvas apexcharts9ovbvkwdj apexcharts-theme-light"
                                                        style="width: 92.25px; height: 50px">
                                                        <svg id="SvgjsSvg2022" width="92.25" height="50"
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                            xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                            style="background: transparent">
                                                            <foreignObject x="0" y="0" width="92.25" height="50">
                                                                <div class="apexcharts-legend"
                                                                    xmlns="http://www.w3.org/1999/xhtml"
                                                                    style="max-height: 25px"></div>
                                                            </foreignObject>
                                                            <g id="SvgjsG2061" class="apexcharts-yaxis"
                                                                rel="0" transform="translate(-18, 0)"></g>
                                                            <g id="SvgjsG2024"
                                                                class="apexcharts-inner apexcharts-graphical"
                                                                transform="translate(0, 1)">
                                                                <defs id="SvgjsDefs2023">
                                                                    <clipPath id="gridRectMask9ovbvkwdj">
                                                                        <rect id="SvgjsRect2027" width="98.25"
                                                                            height="54" x="-3" y="-3"
                                                                            rx="0" ry="0"
                                                                            opacity="1" stroke-width="0"
                                                                            stroke="none" stroke-dasharray="0"
                                                                            fill="#fff"></rect>
                                                                    </clipPath>
                                                                    <clipPath id="forecastMask9ovbvkwdj"></clipPath>
                                                                    <clipPath id="nonForecastMask9ovbvkwdj"></clipPath>
                                                                    <clipPath id="gridRectMarkerMask9ovbvkwdj">
                                                                        <rect id="SvgjsRect2028" width="96.25"
                                                                            height="52" x="-2" y="-2"
                                                                            rx="0" ry="0"
                                                                            opacity="1" stroke-width="0"
                                                                            stroke="none" stroke-dasharray="0"
                                                                            fill="#fff"></rect>
                                                                    </clipPath>
                                                                </defs>
                                                                <g id="SvgjsG2035" class="apexcharts-grid">
                                                                    <g id="SvgjsG2036"
                                                                        class="apexcharts-gridlines-horizontal"
                                                                        style="display: none">
                                                                        <line id="SvgjsLine2039" x1="0"
                                                                            y1="0" x2="92.25"
                                                                            y2="0" stroke="#e0e0e0"
                                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2040" x1="0"
                                                                            y1="48" x2="92.25"
                                                                            y2="48" stroke="#e0e0e0"
                                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                    </g>
                                                                    <g id="SvgjsG2037"
                                                                        class="apexcharts-gridlines-vertical"
                                                                        style="display: none"></g>
                                                                    <line id="SvgjsLine2042" x1="0"
                                                                        y1="48" x2="92.25" y2="48"
                                                                        stroke="transparent" stroke-dasharray="0"
                                                                        stroke-linecap="butt"></line>
                                                                    <line id="SvgjsLine2041" x1="0"
                                                                        y1="1" x2="0" y2="48"
                                                                        stroke="transparent" stroke-dasharray="0"
                                                                        stroke-linecap="butt"></line>
                                                                </g>
                                                                <g id="SvgjsG2038" class="apexcharts-grid-borders"
                                                                    style="display: none"></g>
                                                                <g id="SvgjsG2029"
                                                                    class="apexcharts-area-series apexcharts-plot-series">
                                                                    <g id="SvgjsG2030" class="apexcharts-series"
                                                                        zIndex="0" seriesName="NetxProfit"
                                                                        data:longestSeries="true" rel="1"
                                                                        data:realIndex="0">
                                                                        <path id="SvgjsPath2033"
                                                                            d="M 0 35.2C 2.483653846153846 35.2 4.612500000000001 40 7.096153846153847 40C 9.579807692307693 40 11.708653846153847 36 14.192307692307693 36C 16.67596153846154 36 18.804807692307694 31.2 21.28846153846154 31.2C 23.772115384615386 31.2 25.90096153846154 43.2 28.384615384615387 43.2C 30.868269230769233 43.2 32.997115384615384 39.2 35.48076923076923 39.2C 37.96442307692308 39.2 40.09326923076924 44 42.57692307692308 44C 45.06057692307692 44 47.18942307692308 29.6 49.67307692307693 29.6C 52.156730769230776 29.6 54.28557692307693 44 56.769230769230774 44C 59.252884615384616 44 61.38173076923077 39.2 63.86538461538462 39.2C 66.34903846153847 39.2 68.47788461538462 33.6 70.96153846153847 33.6C 73.44519230769231 33.6 75.57403846153846 42.4 78.0576923076923 42.4C 80.54134615384615 42.4 82.67019230769232 31.2 85.15384615384616 31.2C 87.6375 31.2 89.76634615384616 37.6 92.25 37.6C 92.25 37.6 92.25 37.6 92.25 48 L 0 48z"
                                                                            fill="rgba(255,255,255,1)"
                                                                            fill-opacity="1" stroke-opacity="1"
                                                                            stroke-linecap="butt" stroke-width="0"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-area" index="0"
                                                                            clip-path="url(#gridRectMask9ovbvkwdj)"
                                                                            pathTo="M 0 35.2C 2.483653846153846 35.2 4.612500000000001 40 7.096153846153847 40C 9.579807692307693 40 11.708653846153847 36 14.192307692307693 36C 16.67596153846154 36 18.804807692307694 31.2 21.28846153846154 31.2C 23.772115384615386 31.2 25.90096153846154 43.2 28.384615384615387 43.2C 30.868269230769233 43.2 32.997115384615384 39.2 35.48076923076923 39.2C 37.96442307692308 39.2 40.09326923076924 44 42.57692307692308 44C 45.06057692307692 44 47.18942307692308 29.6 49.67307692307693 29.6C 52.156730769230776 29.6 54.28557692307693 44 56.769230769230774 44C 59.252884615384616 44 61.38173076923077 39.2 63.86538461538462 39.2C 66.34903846153847 39.2 68.47788461538462 33.6 70.96153846153847 33.6C 73.44519230769231 33.6 75.57403846153846 42.4 78.0576923076923 42.4C 80.54134615384615 42.4 82.67019230769232 31.2 85.15384615384616 31.2C 87.6375 31.2 89.76634615384616 37.6 92.25 37.6C 92.25 37.6 92.25 37.6 92.25 48 L 0 48z"
                                                                            pathFrom="M 0 48 L 0 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48 L 0 48">
                                                                        </path>
                                                                        <path id="SvgjsPath2034"
                                                                            d="M 0 35.2C 2.483653846153846 35.2 4.612500000000001 40 7.096153846153847 40C 9.579807692307693 40 11.708653846153847 36 14.192307692307693 36C 16.67596153846154 36 18.804807692307694 31.2 21.28846153846154 31.2C 23.772115384615386 31.2 25.90096153846154 43.2 28.384615384615387 43.2C 30.868269230769233 43.2 32.997115384615384 39.2 35.48076923076923 39.2C 37.96442307692308 39.2 40.09326923076924 44 42.57692307692308 44C 45.06057692307692 44 47.18942307692308 29.6 49.67307692307693 29.6C 52.156730769230776 29.6 54.28557692307693 44 56.769230769230774 44C 59.252884615384616 44 61.38173076923077 39.2 63.86538461538462 39.2C 66.34903846153847 39.2 68.47788461538462 33.6 70.96153846153847 33.6C 73.44519230769231 33.6 75.57403846153846 42.4 78.0576923076923 42.4C 80.54134615384615 42.4 82.67019230769232 31.2 85.15384615384616 31.2C 87.6375 31.2 89.76634615384616 37.6 92.25 37.6"
                                                                            fill="none" fill-opacity="1"
                                                                            stroke="#17c653" stroke-opacity="1"
                                                                            stroke-linecap="butt" stroke-width="2"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-area" index="0"
                                                                            clip-path="url(#gridRectMask9ovbvkwdj)"
                                                                            pathTo="M 0 35.2C 2.483653846153846 35.2 4.612500000000001 40 7.096153846153847 40C 9.579807692307693 40 11.708653846153847 36 14.192307692307693 36C 16.67596153846154 36 18.804807692307694 31.2 21.28846153846154 31.2C 23.772115384615386 31.2 25.90096153846154 43.2 28.384615384615387 43.2C 30.868269230769233 43.2 32.997115384615384 39.2 35.48076923076923 39.2C 37.96442307692308 39.2 40.09326923076924 44 42.57692307692308 44C 45.06057692307692 44 47.18942307692308 29.6 49.67307692307693 29.6C 52.156730769230776 29.6 54.28557692307693 44 56.769230769230774 44C 59.252884615384616 44 61.38173076923077 39.2 63.86538461538462 39.2C 66.34903846153847 39.2 68.47788461538462 33.6 70.96153846153847 33.6C 73.44519230769231 33.6 75.57403846153846 42.4 78.0576923076923 42.4C 80.54134615384615 42.4 82.67019230769232 31.2 85.15384615384616 31.2C 87.6375 31.2 89.76634615384616 37.6 92.25 37.6"
                                                                            pathFrom="M 0 48 L 0 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48"
                                                                            fill-rule="evenodd"></path>
                                                                        <g id="SvgjsG2031"
                                                                            class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                            data:realIndex="0"></g>
                                                                    </g>
                                                                    <g id="SvgjsG2032" class="apexcharts-datalabels"
                                                                        data:realIndex="0"></g>
                                                                </g>
                                                                <line id="SvgjsLine2043" x1="0"
                                                                    y1="0" x2="92.25" y2="0"
                                                                    stroke="#b6b6b6" stroke-dasharray="0"
                                                                    stroke-width="1" stroke-linecap="butt"
                                                                    class="apexcharts-ycrosshairs"></line>
                                                                <line id="SvgjsLine2044" x1="0"
                                                                    y1="0" x2="92.25" y2="0"
                                                                    stroke-dasharray="0" stroke-width="0"
                                                                    stroke-linecap="butt"
                                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                                <g id="SvgjsG2045" class="apexcharts-xaxis"
                                                                    transform="translate(0, 0)">
                                                                    <g id="SvgjsG2046"
                                                                        class="apexcharts-xaxis-texts-g"
                                                                        transform="translate(0, 4)"></g>
                                                                </g>
                                                                <g id="SvgjsG2062"
                                                                    class="apexcharts-yaxis-annotations"></g>
                                                                <g id="SvgjsG2063"
                                                                    class="apexcharts-xaxis-annotations"></g>
                                                                <g id="SvgjsG2064"
                                                                    class="apexcharts-point-annotations"></g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                    <i class="fa-solid fa-bell fs-2 text-gray-500"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px me-3">
                                                        <img src="https://preview.keenthemes.com/metronic8/demo1/assets/media/avatars/300-2.jpg"
                                                            class="" alt="" />
                                                    </div>

                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="https://preview.keenthemes.com/metronic8/demo1/pages/user-profile/overview.html"
                                                            class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jane
                                                            Cooper</a>
                                                        <span
                                                            class="text-gray-500 fw-semibold d-block fs-7">Monaco</span>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="text-end pe-13">
                                                <span class="text-gray-600 fw-bold fs-6">01576614451</span>
                                            </td>
                                            <td class="text-end pe-13">
                                                <span class="text-gray-600 fw-bold fs-6">63.83%</span>
                                            </td>

                                            <td class="text-end pe-0">
                                                <div id="kt_table_widget_16_chart_1_2" class="h-50px mt-n8 pe-7"
                                                    data-kt-chart-color="danger" style="min-height: 50px">
                                                    <div id="apexchartsa34lefrb"
                                                        class="apexcharts-canvas apexchartsa34lefrb apexcharts-theme-light"
                                                        style="width: 92.25px; height: 50px">
                                                        <svg id="SvgjsSvg2065" width="92.25" height="50"
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                            xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                            style="background: transparent">
                                                            <foreignObject x="0" y="0" width="92.25" height="50">
                                                                <div class="apexcharts-legend"
                                                                    xmlns="http://www.w3.org/1999/xhtml"
                                                                    style="max-height: 25px"></div>
                                                            </foreignObject>
                                                            <g id="SvgjsG2104" class="apexcharts-yaxis"
                                                                rel="0" transform="translate(-18, 0)"></g>
                                                            <g id="SvgjsG2067"
                                                                class="apexcharts-inner apexcharts-graphical"
                                                                transform="translate(0, 1)">
                                                                <defs id="SvgjsDefs2066">
                                                                    <clipPath id="gridRectMaska34lefrb">
                                                                        <rect id="SvgjsRect2070" width="98.25"
                                                                            height="54" x="-3" y="-3"
                                                                            rx="0" ry="0"
                                                                            opacity="1" stroke-width="0"
                                                                            stroke="none" stroke-dasharray="0"
                                                                            fill="#fff"></rect>
                                                                    </clipPath>
                                                                    <clipPath id="forecastMaska34lefrb"></clipPath>
                                                                    <clipPath id="nonForecastMaska34lefrb"></clipPath>
                                                                    <clipPath id="gridRectMarkerMaska34lefrb">
                                                                        <rect id="SvgjsRect2071" width="96.25"
                                                                            height="52" x="-2" y="-2"
                                                                            rx="0" ry="0"
                                                                            opacity="1" stroke-width="0"
                                                                            stroke="none" stroke-dasharray="0"
                                                                            fill="#fff"></rect>
                                                                    </clipPath>
                                                                </defs>
                                                                <g id="SvgjsG2078" class="apexcharts-grid">
                                                                    <g id="SvgjsG2079"
                                                                        class="apexcharts-gridlines-horizontal"
                                                                        style="display: none">
                                                                        <line id="SvgjsLine2082" x1="0"
                                                                            y1="0" x2="92.25"
                                                                            y2="0" stroke="#e0e0e0"
                                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2083" x1="0"
                                                                            y1="48" x2="92.25"
                                                                            y2="48" stroke="#e0e0e0"
                                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                    </g>
                                                                    <g id="SvgjsG2080"
                                                                        class="apexcharts-gridlines-vertical"
                                                                        style="display: none"></g>
                                                                    <line id="SvgjsLine2085" x1="0"
                                                                        y1="48" x2="92.25" y2="48"
                                                                        stroke="transparent" stroke-dasharray="0"
                                                                        stroke-linecap="butt"></line>
                                                                    <line id="SvgjsLine2084" x1="0"
                                                                        y1="1" x2="0" y2="48"
                                                                        stroke="transparent" stroke-dasharray="0"
                                                                        stroke-linecap="butt"></line>
                                                                </g>
                                                                <g id="SvgjsG2081" class="apexcharts-grid-borders"
                                                                    style="display: none"></g>
                                                                <g id="SvgjsG2072"
                                                                    class="apexcharts-area-series apexcharts-plot-series">
                                                                    <g id="SvgjsG2073" class="apexcharts-series"
                                                                        zIndex="0" seriesName="NetxProfit"
                                                                        data:longestSeries="true" rel="1"
                                                                        data:realIndex="0">
                                                                        <path id="SvgjsPath2076"
                                                                            d="M 0 41.6C 2.483653846153846 41.6 4.612500000000001 44 7.096153846153847 44C 9.579807692307693 44 11.708653846153847 35.2 14.192307692307693 35.2C 16.67596153846154 35.2 18.804807692307694 45.6 21.28846153846154 45.6C 23.772115384615386 45.6 25.90096153846154 29.6 28.384615384615387 29.6C 30.868269230769233 29.6 32.997115384615384 35.2 35.48076923076923 35.2C 37.96442307692308 35.2 40.09326923076924 39.2 42.57692307692308 39.2C 45.06057692307692 39.2 47.18942307692308 36 49.67307692307693 36C 52.156730769230776 36 54.28557692307693 45.6 56.769230769230774 45.6C 59.252884615384616 45.6 61.38173076923077 39.2 63.86538461538462 39.2C 66.34903846153847 39.2 68.47788461538462 36 70.96153846153847 36C 73.44519230769231 36 75.57403846153846 42.4 78.0576923076923 42.4C 80.54134615384615 42.4 82.67019230769232 34.4 85.15384615384616 34.4C 87.6375 34.4 89.76634615384616 40.8 92.25 40.8C 92.25 40.8 92.25 40.8 92.25 48 L 0 48z"
                                                                            fill="rgba(255,255,255,1)"
                                                                            fill-opacity="1" stroke-opacity="1"
                                                                            stroke-linecap="butt" stroke-width="0"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-area" index="0"
                                                                            clip-path="url(#gridRectMaska34lefrb)"
                                                                            pathTo="M 0 41.6C 2.483653846153846 41.6 4.612500000000001 44 7.096153846153847 44C 9.579807692307693 44 11.708653846153847 35.2 14.192307692307693 35.2C 16.67596153846154 35.2 18.804807692307694 45.6 21.28846153846154 45.6C 23.772115384615386 45.6 25.90096153846154 29.6 28.384615384615387 29.6C 30.868269230769233 29.6 32.997115384615384 35.2 35.48076923076923 35.2C 37.96442307692308 35.2 40.09326923076924 39.2 42.57692307692308 39.2C 45.06057692307692 39.2 47.18942307692308 36 49.67307692307693 36C 52.156730769230776 36 54.28557692307693 45.6 56.769230769230774 45.6C 59.252884615384616 45.6 61.38173076923077 39.2 63.86538461538462 39.2C 66.34903846153847 39.2 68.47788461538462 36 70.96153846153847 36C 73.44519230769231 36 75.57403846153846 42.4 78.0576923076923 42.4C 80.54134615384615 42.4 82.67019230769232 34.4 85.15384615384616 34.4C 87.6375 34.4 89.76634615384616 40.8 92.25 40.8C 92.25 40.8 92.25 40.8 92.25 48 L 0 48z"
                                                                            pathFrom="M 0 48 L 0 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48 L 0 48">
                                                                        </path>
                                                                        <path id="SvgjsPath2077"
                                                                            d="M 0 41.6C 2.483653846153846 41.6 4.612500000000001 44 7.096153846153847 44C 9.579807692307693 44 11.708653846153847 35.2 14.192307692307693 35.2C 16.67596153846154 35.2 18.804807692307694 45.6 21.28846153846154 45.6C 23.772115384615386 45.6 25.90096153846154 29.6 28.384615384615387 29.6C 30.868269230769233 29.6 32.997115384615384 35.2 35.48076923076923 35.2C 37.96442307692308 35.2 40.09326923076924 39.2 42.57692307692308 39.2C 45.06057692307692 39.2 47.18942307692308 36 49.67307692307693 36C 52.156730769230776 36 54.28557692307693 45.6 56.769230769230774 45.6C 59.252884615384616 45.6 61.38173076923077 39.2 63.86538461538462 39.2C 66.34903846153847 39.2 68.47788461538462 36 70.96153846153847 36C 73.44519230769231 36 75.57403846153846 42.4 78.0576923076923 42.4C 80.54134615384615 42.4 82.67019230769232 34.4 85.15384615384616 34.4C 87.6375 34.4 89.76634615384616 40.8 92.25 40.8"
                                                                            fill="none" fill-opacity="1"
                                                                            stroke="#f8285a" stroke-opacity="1"
                                                                            stroke-linecap="butt" stroke-width="2"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-area" index="0"
                                                                            clip-path="url(#gridRectMaska34lefrb)"
                                                                            pathTo="M 0 41.6C 2.483653846153846 41.6 4.612500000000001 44 7.096153846153847 44C 9.579807692307693 44 11.708653846153847 35.2 14.192307692307693 35.2C 16.67596153846154 35.2 18.804807692307694 45.6 21.28846153846154 45.6C 23.772115384615386 45.6 25.90096153846154 29.6 28.384615384615387 29.6C 30.868269230769233 29.6 32.997115384615384 35.2 35.48076923076923 35.2C 37.96442307692308 35.2 40.09326923076924 39.2 42.57692307692308 39.2C 45.06057692307692 39.2 47.18942307692308 36 49.67307692307693 36C 52.156730769230776 36 54.28557692307693 45.6 56.769230769230774 45.6C 59.252884615384616 45.6 61.38173076923077 39.2 63.86538461538462 39.2C 66.34903846153847 39.2 68.47788461538462 36 70.96153846153847 36C 73.44519230769231 36 75.57403846153846 42.4 78.0576923076923 42.4C 80.54134615384615 42.4 82.67019230769232 34.4 85.15384615384616 34.4C 87.6375 34.4 89.76634615384616 40.8 92.25 40.8"
                                                                            pathFrom="M 0 48 L 0 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48"
                                                                            fill-rule="evenodd"></path>
                                                                        <g id="SvgjsG2074"
                                                                            class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                            data:realIndex="0"></g>
                                                                    </g>
                                                                    <g id="SvgjsG2075" class="apexcharts-datalabels"
                                                                        data:realIndex="0"></g>
                                                                </g>
                                                                <line id="SvgjsLine2086" x1="0"
                                                                    y1="0" x2="92.25" y2="0"
                                                                    stroke="#b6b6b6" stroke-dasharray="0"
                                                                    stroke-width="1" stroke-linecap="butt"
                                                                    class="apexcharts-ycrosshairs"></line>
                                                                <line id="SvgjsLine2087" x1="0"
                                                                    y1="0" x2="92.25" y2="0"
                                                                    stroke-dasharray="0" stroke-width="0"
                                                                    stroke-linecap="butt"
                                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                                <g id="SvgjsG2088" class="apexcharts-xaxis"
                                                                    transform="translate(0, 0)">
                                                                    <g id="SvgjsG2089"
                                                                        class="apexcharts-xaxis-texts-g"
                                                                        transform="translate(0, 4)"></g>
                                                                </g>
                                                                <g id="SvgjsG2105"
                                                                    class="apexcharts-yaxis-annotations"></g>
                                                                <g id="SvgjsG2106"
                                                                    class="apexcharts-xaxis-annotations"></g>
                                                                <g id="SvgjsG2107"
                                                                    class="apexcharts-point-annotations"></g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                    <i class="fa-solid fa-bell fs-2 text-gray-500"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="kt_stats_widget_16_tab_2" role="tabpanel"
                            aria-labelledby="kt_stats_widget_16_tab_link_2">
                            <div class="card h-xl-100" id="kt_timeline_widget_2_card">
                                <div class="card-header position-relative py-0 border-bottom-2">
                                    <ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-3" role="tablist">
                                        <li class="nav-item p-0 ms-0 me-8" role="presentation">
                                            <a class="nav-link btn btn-color-muted active px-0" data-bs-toggle="pill"
                                                href="#kt_timeline_widget_2_tab_1" aria-selected="true"
                                                role="tab">
                                                <span class="nav-text fw-semibold fs-4 mb-3">
                                                    Today
                                                </span>

                                                <span
                                                    class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
                                            </a>
                                        </li>

                                        <li class="nav-item p-0 ms-0 me-8" role="presentation">
                                            <a class="nav-link btn btn-color-muted px-0" data-bs-toggle="pill"
                                                href="#kt_timeline_widget_2_tab_2" aria-selected="false"
                                                tabindex="-1" role="tab">
                                                <span class="nav-text fw-semibold fs-4 mb-3">
                                                    This Month</span>

                                                <span
                                                    class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
                                            </a>
                                        </li>

                                        <li class="nav-item p-0 ms-0" role="presentation">
                                            <a class="nav-link btn btn-color-muted px-0" data-bs-toggle="pill"
                                                href="#kt_timeline_widget_2_tab_3" aria-selected="false"
                                                tabindex="-1" role="tab">
                                                <span class="nav-text fw-semibold fs-4 mb-3">
                                                    This Year
                                                </span>

                                                <span
                                                    class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="kt_timeline_widget_2_tab_1"
                                            role="tabpanel">
                                            <div class="table-responsive">
                                                <table class="table align-middle gs-0 gy-4">
                                                    <thead>
                                                        <tr>
                                                            <th class="p-0 w-10px"></th>
                                                            <th class="p-0 w-25px"></th>
                                                            <th class="p-0 min-w-400px"></th>
                                                            <th class="p-0 min-w-100px"></th>
                                                            <th class="p-0 min-w-125px"></th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <span data-kt-element="bullet"
                                                                    class="bullet bullet-vertical d-flex align-items-center h-40px bg-success"></span>
                                                            </td>

                                                            <td class="ps-0">
                                                                <div
                                                                    class="form-check form-check-custom form-check-solid form-check-success">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" checked=""
                                                                        data-kt-element="checkbox" />
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <a href="#"
                                                                    class="text-gray-800 text-hover-primary fw-bold fs-6">Book
                                                                    p. 77-85, read &amp;
                                                                    complete tasks 1-6 on p. 85</a>

                                                                <span
                                                                    class="text-gray-500 fw-bold fs-7 d-block">Physics</span>
                                                            </td>

                                                            <td class="text-end">
                                                                <span data-kt-element="status"
                                                                    class="badge badge-light-success">Done</span>
                                                            </td>

                                                            <td class="text-end">
                                                                <div class="d-flex justify-content-end flex-shrink-0">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                                        <i class="fa-solid fa-print fs-3"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span><span
                                                                                class="path4"></span><span
                                                                                class="path5"></span></i>
                                                                    </a>

                                                                    <a href="#"
                                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                                        <i class="fa-solid fa-sms fs-3"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </a>

                                                                    <a href="#"
                                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm">
                                                                        <i class="fa-solid fa-link fs-3"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span data-kt-element="bullet"
                                                                    class="bullet bullet-vertical d-flex align-items-center h-40px bg-primary"></span>
                                                            </td>

                                                            <td class="ps-0">
                                                                <div
                                                                    class="form-check form-check-custom form-check-solid">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" data-kt-element="checkbox" />
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <a href="#"
                                                                    class="text-gray-800 text-hover-primary fw-bold fs-6">Workbook
                                                                    p. 17, tasks 1-6</a>

                                                                <span
                                                                    class="text-gray-500 fw-bold fs-7 d-block">Mathematics</span>
                                                            </td>

                                                            <td class="text-end">
                                                                <span data-kt-element="status"
                                                                    class="badge badge-light-primary">In Process</span>
                                                            </td>

                                                            <td class="text-end">
                                                                <div class="d-flex justify-content-end flex-shrink-0">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                                        <i class="fa-solid fa-print fs-3"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span><span
                                                                                class="path4"></span><span
                                                                                class="path5"></span></i>
                                                                    </a>

                                                                    <a href="#"
                                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                                        <i class="fa-solid fa-sms fs-3"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </a>

                                                                    <a href="#"
                                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm">
                                                                        <i class="fa-solid fa-link fs-3"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="kt_timeline_widget_2_tab_2" role="tabpanel">
                                            <div class="table-responsive">
                                                <table class="table align-middle gs-0 gy-4">
                                                    <thead>
                                                        <tr>
                                                            <th class="p-0 w-10px"></th>
                                                            <th class="p-0 w-25px"></th>
                                                            <th class="p-0 min-w-400px"></th>
                                                            <th class="p-0 min-w-100px"></th>
                                                            <th class="p-0 min-w-125px"></th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <span data-kt-element="bullet"
                                                                    class="bullet bullet-vertical d-flex align-items-center h-40px bg-success"></span>
                                                            </td>

                                                            <td class="ps-0">
                                                                <div
                                                                    class="form-check form-check-custom form-check-success form-check-solid">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" checked=""
                                                                        data-kt-element="checkbox" />
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <a href="#"
                                                                    class="text-gray-800 text-hover-primary fw-bold fs-6">Book
                                                                    p. 77-85, read &amp;
                                                                    complete tasks 1-6 on p. 85</a>

                                                                <span
                                                                    class="text-gray-500 fw-bold fs-7 d-block">Physics</span>
                                                            </td>

                                                            <td class="text-end">
                                                                <span data-kt-element="status"
                                                                    class="badge badge-light-success">Done</span>
                                                            </td>

                                                            <td class="text-end">
                                                                <div class="d-flex justify-content-end flex-shrink-0">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                                        <i class="fa-solid fa-print fs-3"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span><span
                                                                                class="path4"></span><span
                                                                                class="path5"></span></i>
                                                                    </a>

                                                                    <a href="#"
                                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                                        <i class="fa-solid fa-sms fs-3"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </a>

                                                                    <a href="#"
                                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm">
                                                                        <i class="fa-solid fa-link fs-3"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span data-kt-element="bullet"
                                                                    class="bullet bullet-vertical d-flex align-items-center h-40px bg-primary"></span>
                                                            </td>

                                                            <td class="ps-0">
                                                                <div
                                                                    class="form-check form-check-custom form-check-solid">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" data-kt-element="checkbox" />
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <a href="#"
                                                                    class="text-gray-800 text-hover-primary fw-bold fs-6">Workbook
                                                                    p. 17, tasks 1-6</a>

                                                                <span
                                                                    class="text-gray-500 fw-bold fs-7 d-block">Mathematics</span>
                                                            </td>

                                                            <td class="text-end">
                                                                <span data-kt-element="status"
                                                                    class="badge badge-light-primary">In Process</span>
                                                            </td>

                                                            <td class="text-end">
                                                                <div class="d-flex justify-content-end flex-shrink-0">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                                        <i class="fa-solid fa-print fs-3"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span><span
                                                                                class="path4"></span><span
                                                                                class="path5"></span></i>
                                                                    </a>

                                                                    <a href="#"
                                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                                        <i class="fa-solid fa-sms fs-3"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </a>

                                                                    <a href="#"
                                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm">
                                                                        <i class="fa-solid fa-link fs-3"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="kt_timeline_widget_2_tab_3" role="tabpanel">
                                            <div class="table-responsive">
                                                <table class="table align-middle gs-0 gy-4">
                                                    <thead>
                                                        <tr>
                                                            <th class="p-0 w-10px"></th>
                                                            <th class="p-0 w-25px"></th>
                                                            <th class="p-0 min-w-400px"></th>
                                                            <th class="p-0 min-w-100px"></th>
                                                            <th class="p-0 min-w-125px"></th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <span data-kt-element="bullet"
                                                                    class="bullet bullet-vertical d-flex align-items-center h-40px bg-primary"></span>
                                                            </td>

                                                            <td class="ps-0">
                                                                <div
                                                                    class="form-check form-check-custom form-check-solid">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" data-kt-element="checkbox" />
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <a href="#"
                                                                    class="text-gray-800 text-hover-primary fw-bold fs-6">Workbook
                                                                    p. 17, tasks 1-6</a>

                                                                <span
                                                                    class="text-gray-500 fw-bold fs-7 d-block">Mathematics</span>
                                                            </td>

                                                            <td class="text-end">
                                                                <span data-kt-element="status"
                                                                    class="badge badge-light-primary">In Process</span>
                                                            </td>

                                                            <td class="text-end">
                                                                <div class="d-flex justify-content-end flex-shrink-0">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                                        <i class="fa-solid fa-print fs-3"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span><span
                                                                                class="path4"></span><span
                                                                                class="path5"></span></i>
                                                                    </a>

                                                                    <a href="#"
                                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                                        <i class="fa-solid fa-sms fs-3"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </a>

                                                                    <a href="#"
                                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm">
                                                                        <i class="fa-solid fa-link fs-3"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span data-kt-element="bullet"
                                                                    class="bullet bullet-vertical d-flex align-items-center h-40px bg-success"></span>
                                                            </td>

                                                            <td class="ps-0">
                                                                <div
                                                                    class="form-check form-check-custom form-check-success form-check-solid">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" checked=""
                                                                        data-kt-element="checkbox" />
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <a href="#"
                                                                    class="text-gray-800 text-hover-primary fw-bold fs-6">Learn
                                                                    paragraph p. 99, Exercise
                                                                    1,2,3Scoping &amp;
                                                                    Estimations</a>

                                                                <span
                                                                    class="text-gray-500 fw-bold fs-7 d-block">Chemistry</span>
                                                            </td>

                                                            <td class="text-end">
                                                                <span data-kt-element="status"
                                                                    class="badge badge-light-success">Done</span>
                                                            </td>

                                                            <td class="text-end">
                                                                <div class="d-flex justify-content-end flex-shrink-0">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                                        <i class="fa-solid fa-print fs-3"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span><span
                                                                                class="path4"></span><span
                                                                                class="path5"></span></i>
                                                                    </a>

                                                                    <a href="#"
                                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                                        <i class="fa-solid fa-sms fs-3"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </a>

                                                                    <a href="#"
                                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm">
                                                                        <i class="fa-solid fa-link fs-3"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="kt_stats_widget_16_tab_3" role="tabpanel"
                            aria-labelledby="kt_stats_widget_16_tab_link_3">
                            <div class="card card-flush h-xl-100">
                                <div class="card-header pt-7">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-800">Need To Call</span>
                                    </h3>

                                    <div class="card-toolbar">
                                        <div class="d-flex flex-stack flex-wrap gap-4">
                                            <div class="d-flex align-items-center fw-bold">
                                                <div class="text-gray-500 fs-7 me-2">
                                                    Cateogry
                                                </div>

                                                <select
                                                    class="form-select form-select-transparent text-graY-800 fs-base lh-1 fw-bold py-0 ps-3 w-auto select2-hidden-accessible"
                                                    data-control="select2" data-hide-search="true"
                                                    data-dropdown-css-class="w-150px"
                                                    data-placeholder="Select an option"
                                                    data-select2-id="select2-data-7-wurq" tabindex="-1"
                                                    aria-hidden="true" data-kt-initialized="1">
                                                    <option></option>
                                                    <option value="Show All" selected=""
                                                        data-select2-id="select2-data-9-8i95">
                                                        Show All
                                                    </option>
                                                    <option value="a">Category A</option>
                                                    <option value="b">Category A</option>
                                                </select>
                                            </div>

                                            <div class="d-flex align-items-center fw-bold">
                                                <div class="text-gray-500 fs-7 me-2">
                                                    Status
                                                </div>

                                                <select
                                                    class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto select2-hidden-accessible"
                                                    data-control="select2" data-hide-search="true"
                                                    data-dropdown-css-class="w-150px"
                                                    data-placeholder="Select an option"
                                                    data-kt-table-widget-4="filter_status"
                                                    data-select2-id="select2-data-10-xxwy" tabindex="-1"
                                                    aria-hidden="true" data-kt-initialized="1">
                                                    <option></option>
                                                    <option value="Show All" selected=""
                                                        data-select2-id="select2-data-12-rfyi">
                                                        Show All
                                                    </option>
                                                    <option value="Shipped">Shipped</option>
                                                    <option value="Confirmed">
                                                        Confirmed
                                                    </option>
                                                    <option value="Rejected">
                                                        Rejected
                                                    </option>
                                                    <option value="Pending">Pending</option>
                                                </select>
                                            </div>

                                            <div class="position-relative my-1">
                                                <i
                                                    class="ki-duotone ki-magnifier fs-2 position-absolute top-50 translate-middle-y ms-4"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                <input type="text" data-kt-table-widget-4="search"
                                                    class="form-control w-150px fs-7 ps-12" placeholder="Search" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body pt-2">
                                    <div id="kt_table_widget_4_table_wrapper"
                                        class="dt-container dt-bootstrap5 dt-empty-footer">
                                        <div id="" class="table-responsive">
                                            <table class="table align-middle table-row-dashed fs-6 gy-3 dataTable"
                                                id="kt_table_widget_4_table" style="width: 768.656px">
                                                <thead>
                                                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0"
                                                        role="row">
                                                        <th class="min-w-100px dt-orderable-none" data-dt-column="0"
                                                            rowspan="1" colspan="1">
                                                            <span class="dt-column-title">Company Name</span><span
                                                                class="dt-column-order"></span>
                                                        </th>
                                                        <th class="text-end min-w-100px dt-orderable-none"
                                                            data-dt-column="1" rowspan="1" colspan="1">
                                                            <span class="dt-column-title">Estimated Call</span><span
                                                                class="dt-column-order"></span>
                                                        </th>
                                                        <th class="text-end min-w-125px dt-orderable-none"
                                                            data-dt-column="2" rowspan="1" colspan="1">
                                                            <span class="dt-column-title">Name</span><span
                                                                class="dt-column-order"></span>
                                                        </th>
                                                        <th class="text-end min-w-50px dt-orderable-none"
                                                            data-dt-column="5" rowspan="1" colspan="1">
                                                            <span class="dt-column-title">Status</span><span
                                                                class="dt-column-order"></span>
                                                        </th>
                                                        <th class="text-end min-w-50px dt-orderable-none"
                                                            data-dt-column="5" rowspan="1" colspan="1">
                                                            <span class="dt-column-title">Active</span><span
                                                                class="dt-column-order"></span>
                                                        </th>
                                                        <th class="text-end dt-orderable-none" data-dt-column="6"
                                                            rowspan="1" colspan="1">
                                                            <span class="dt-column-title"></span><span
                                                                class="dt-column-order"></span>
                                                        </th>
                                                    </tr>
                                                </thead>

                                                <tbody class="fw-bold text-gray-600">
                                                    <tr>
                                                        <td>
                                                            <a href="/metronic8/demo1/apps/ecommerce/catalog/edit-product.html"
                                                                class="text-gray-800 text-hover-primary">#XGY-346</a>
                                                        </td>

                                                        <td class="text-end">7 min ago</td>

                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="text-gray-600 text-hover-primary">Albert
                                                                Flores</a>
                                                        </td>

                                                        <td class="text-end">
                                                            <span
                                                                class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
                                                        </td>

                                                        <td class="text-end">
                                                            <button type="button"
                                                                class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                                data-kt-table-widget-4="expand_row">
                                                                <i class="fa-solid fa-plus fs-4 m-0 toggle-off"></i>
                                                                <i class="fa-solid fa-minus fs-4 m-0 toggle-on"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot></tfoot>
                                            </table>
                                        </div>
                                        <div id="" class="row">
                                            <div id=""
                                                class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start dt-toolbar">
                                            </div>
                                            <div id=""
                                                class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 mb-xl-5">
            <div id="kt_sliders_widget_1_slider"
                class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100 shadow-sm"
                data-bs-ride="carousel" data-bs-interval="5000">
                <div class="card-header pt-5">
                    <h4 class="card-title d-flex align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-800">Give A Quick Call</span>
                        <span class="text-gray-500 mt-1 fw-bold fs-7">4 Call Left, 4 Company Left</span>
                    </h4>

                    <div class="card-toolbar">
                        <div class="pe-5">
                            <select class="form-select form-select-sm" aria-label="Select example">
                                <option>Select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <ol
                            class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-primary">
                            <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="0" class="ms-1">
                            </li>
                            <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="1"
                                class="ms-1 active" aria-current="true"></li>
                            <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="2" class="ms-1">
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="card-body py-6">
                    <div class="carousel-inner mt-n5">
                        <div class="carousel-item active">
                            <div class="row mt-10">
                                <div class="col-xl-4">
                                    <div class="text-center">
                                        <div class="symbol symbol-100px me-3 bg-primary p-3">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTu3yuVEtpPLZ329F5ANqS28aZyQP8AvELSFw&s"
                                                class="" alt="" />
                                        </div>
                                        <div class="m-0 mt-3">
                                            <a href="#" class="btn btn-sm btn-light me-2 mb-2">Call Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="text-center">
                                        <div class="symbol symbol-100px me-3 bg-primary p-3">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTu3yuVEtpPLZ329F5ANqS28aZyQP8AvELSFw&s"
                                                class="" alt="" />
                                        </div>
                                        <div class="m-0 mt-3">
                                            <a href="#" class="btn btn-sm btn-light me-2 mb-2">Call Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="text-center">
                                        <div class="symbol symbol-100px me-3 bg-primary p-3">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTu3yuVEtpPLZ329F5ANqS28aZyQP8AvELSFw&s"
                                                class="" alt="" />
                                        </div>
                                        <div class="m-0 mt-3">
                                            <a href="#" class="btn btn-sm btn-light me-2 mb-2">Call Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex align-items-center py-0 pt-0">
                                <div class="w-100px flex-shrink-0 me-2">
                                    <div class="w-100px flex-shrink-0 me-2">
                                        <div class="symbol symbol-100px me-3 pt-10">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTu3yuVEtpPLZ329F5ANqS28aZyQP8AvELSFw&s"
                                                class="" alt="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="m-0">
                                    <h4 class="fw-bold text-gray-800 mb-3">
                                        Ngen IT
                                    </h4>

                                    <div class="d-flex d-grid gap-5">
                                        <div class="d-flex flex-column flex-shrink-0 me-4">
                                            <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                <i class="fa-solid fa-right-square fs-6 text-gray-600 me-2"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                info@gmail.com
                                            </span>

                                            <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                <i class="fa-solid fa-right-square fs-6 text-gray-600 me-2"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                Software Solution
                                            </span>
                                        </div>

                                        <div class="d-flex flex-column flex-shrink-0">
                                            <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                <i class="fa-solid fa-right-square fs-6 text-gray-600 me-2"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                Solutions
                                            </span>

                                            <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                <i class="fa-solid fa-right-square fs-6 text-gray-600 me-2"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                01576614451
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="m-0">
                                <a href="#" class="btn btn-sm btn-light me-2 mb-2">Call Now</a>

                                <a href="#" class="btn btn-sm btn-primary mb-2" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_create_app">Check All</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex align-items-center py-0 pt-0">
                                <div class="w-100px flex-shrink-0 me-2">
                                    <div class="w-100px flex-shrink-0 me-2">
                                        <div class="symbol symbol-100px me-3 pt-10">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTu3yuVEtpPLZ329F5ANqS28aZyQP8AvELSFw&s"
                                                class="" alt="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="m-0">
                                    <h4 class="fw-bold text-gray-800 mb-3">
                                        Ngen IT
                                    </h4>

                                    <div class="d-flex d-grid gap-5">
                                        <div class="d-flex flex-column flex-shrink-0 me-4">
                                            <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                <i class="fa-solid fa-right-square fs-6 text-gray-600 me-2"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                info@gmail.com
                                            </span>

                                            <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                <i class="fa-solid fa-right-square fs-6 text-gray-600 me-2"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                Software Solution
                                            </span>
                                        </div>

                                        <div class="d-flex flex-column flex-shrink-0">
                                            <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                <i class="fa-solid fa-right-square fs-6 text-gray-600 me-2"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                Solutions
                                            </span>

                                            <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                <i class="fa-solid fa-right-square fs-6 text-gray-600 me-2"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                01576614451
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="m-0">
                                <a href="#" class="btn btn-sm btn-light me-2 mb-2">Call Now</a>

                                <a href="#" class="btn btn-sm btn-primary mb-2" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_create_app">Check All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="card h-md-100 border" dir="ltr">
                <div class="card-body d-flex flex-column flex-center">
                    <div class="mb-2">
                        <h1 class="fw-semibold text-gray-800 text-center lh-lg">
                            Have your tried <br />
                            new
                            <span class="fw-bolder"> Solutions?</span>
                        </h1>

                        <div class="py-10 text-center">
                            <img src="assets/media/svg/illustrations/easy/2.svg" class="theme-light-show w-200px"
                                alt="" />
                        </div>
                    </div>

                    <div class="text-center mb-1">
                        <a class="btn btn-sm btn-primary me-2" href="#">
                            Solution One
                        </a>

                        <a class="btn btn-sm btn-light" href="#">
                            Solution Two
                        </a>
                        <a class="btn btn-sm btn-light mt-5" href="#">
                            Solution Three
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-flush border overflow-hidden h-lg-100">
                <div class="card-header pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-900">Target & Achievement</span>
                        <span class="text-gray-500 fw-semibold d-block fs-7 pt-3">Sales Status</span>
                    </h3>

                    <div class="card-toolbar">
                        <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left"
                            data-kt-daterangepicker-range="today"
                            class="btn btn-sm btn-light d-flex align-items-center px-4" data-kt-initialized="1">
                            <div class="text-gray-600 fw-bold">28 Jul 2024</div>

                            <i class="fa-solid fa-calendar-8 text-gray-500 lh-0 fs-2 ms-2 me-0"><span
                                    class="path1"></span><span class="path2"></span><span
                                    class="path3"></span><span class="path4"></span><span
                                    class="path5"></span><span class="path6"></span></i>
                        </div>
                    </div>
                </div>

                <div class="card-body d-flex align-items-end p-0">
                    <div id="kt_charts_widget_36" class="min-h-auto w-100 ps-4 pe-6"
                        style="height: 300px; min-height: 315px">
                        <div id="apexchartsaomkioyfg"
                            class="apexcharts-canvas apexchartsaomkioyfg apexcharts-theme-light"
                            style="width: 579.5px; height: 300px">
                            <svg id="SvgjsSvg1221" width="579.5" height="300"
                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg apexcharts-zoomable hovering-zoom" xmlns:data="ApexChartsNS"
                                transform="translate(0, 0)" style="background: transparent">
                                <foreignObject x="0" y="0" width="579.5" height="300">
                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                        style="max-height: 150px"></div>
                                </foreignObject>
                                <rect id="SvgjsRect1261" width="0" height="0" x="0" y="0"
                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                    stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                <g id="SvgjsG1324" class="apexcharts-yaxis" rel="0"
                                    transform="translate(17.835205078125, 0)">
                                    <g id="SvgjsG1325" class="apexcharts-yaxis-texts-g">
                                        <text id="SvgjsText1327" font-family="inherit" x="20" y="34"
                                            text-anchor="end" dominant-baseline="auto" font-size="12px"
                                            font-weight="400" fill="#99a1b7"
                                            class="apexcharts-text apexcharts-yaxis-label"
                                            style="font-family: inherit">
                                            <tspan id="SvgjsTspan1328">120</tspan>
                                            <title>120</title>
                                        </text>
                                        <text id="SvgjsText1330" font-family="inherit" x="20" y="70.97"
                                            text-anchor="end" dominant-baseline="auto" font-size="12px"
                                            font-weight="400" fill="#99a1b7"
                                            class="apexcharts-text apexcharts-yaxis-label"
                                            style="font-family: inherit">
                                            <tspan id="SvgjsTspan1331">105</tspan>
                                            <title>105</title>
                                        </text>
                                        <text id="SvgjsText1333" font-family="inherit" x="20" y="107.94"
                                            text-anchor="end" dominant-baseline="auto" font-size="12px"
                                            font-weight="400" fill="#99a1b7"
                                            class="apexcharts-text apexcharts-yaxis-label"
                                            style="font-family: inherit">
                                            <tspan id="SvgjsTspan1334">90</tspan>
                                            <title>90</title>
                                        </text>
                                        <text id="SvgjsText1336" font-family="inherit" x="20" y="144.91"
                                            text-anchor="end" dominant-baseline="auto" font-size="12px"
                                            font-weight="400" fill="#99a1b7"
                                            class="apexcharts-text apexcharts-yaxis-label"
                                            style="font-family: inherit">
                                            <tspan id="SvgjsTspan1337">75</tspan>
                                            <title>75</title>
                                        </text>
                                        <text id="SvgjsText1339" font-family="inherit" x="20" y="181.88"
                                            text-anchor="end" dominant-baseline="auto" font-size="12px"
                                            font-weight="400" fill="#99a1b7"
                                            class="apexcharts-text apexcharts-yaxis-label"
                                            style="font-family: inherit">
                                            <tspan id="SvgjsTspan1340">60</tspan>
                                            <title>60</title>
                                        </text>
                                        <text id="SvgjsText1342" font-family="inherit" x="20" y="218.85"
                                            text-anchor="end" dominant-baseline="auto" font-size="12px"
                                            font-weight="400" fill="#99a1b7"
                                            class="apexcharts-text apexcharts-yaxis-label"
                                            style="font-family: inherit">
                                            <tspan id="SvgjsTspan1343">45</tspan>
                                            <title>45</title>
                                        </text>
                                        <text id="SvgjsText1345" font-family="inherit" x="20" y="255.82"
                                            text-anchor="end" dominant-baseline="auto" font-size="12px"
                                            font-weight="400" fill="#99a1b7"
                                            class="apexcharts-text apexcharts-yaxis-label"
                                            style="font-family: inherit">
                                            <tspan id="SvgjsTspan1346">30</tspan>
                                            <title>30</title>
                                        </text>
                                    </g>
                                </g>
                                <g id="SvgjsG1223" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(47.835205078125, 30)">
                                    <defs id="SvgjsDefs1222">
                                        <clipPath id="gridRectMaskaomkioyfg">
                                            <rect id="SvgjsRect1227" width="528.664794921875" height="228.82"
                                                x="-3.5" y="-3.5" rx="0" ry="0" opacity="1"
                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMaskaomkioyfg"></clipPath>
                                        <clipPath id="nonForecastMaskaomkioyfg"></clipPath>
                                        <clipPath id="gridRectMarkerMaskaomkioyfg">
                                            <rect id="SvgjsRect1228" width="525.664794921875" height="225.82"
                                                x="-2" y="-2" rx="0" ry="0" opacity="1"
                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fff"></rect>
                                        </clipPath>
                                        <linearGradient id="SvgjsLinearGradient1233" x1="0" y1="0"
                                            x2="0" y2="1">
                                            <stop id="SvgjsStop1234" stop-opacity="0.4"
                                                stop-color="rgba(27,132,255,0.4)" offset="0.15"></stop>
                                            <stop id="SvgjsStop1235" stop-opacity="0.2"
                                                stop-color="rgba(255,255,255,0.2)" offset="1.2"></stop>
                                            <stop id="SvgjsStop1236" stop-opacity="0.2"
                                                stop-color="rgba(255,255,255,0.2)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient1242" x1="0" y1="0"
                                            x2="0" y2="1">
                                            <stop id="SvgjsStop1243" stop-opacity="0.4"
                                                stop-color="rgba(23,198,83,0.4)" offset="0.15"></stop>
                                            <stop id="SvgjsStop1244" stop-opacity="0.2"
                                                stop-color="rgba(255,255,255,0.2)" offset="1.2"></stop>
                                            <stop id="SvgjsStop1245" stop-opacity="0.2"
                                                stop-color="rgba(255,255,255,0.2)" offset="1"></stop>
                                        </linearGradient>
                                    </defs>
                                    <g id="SvgjsG1248" class="apexcharts-grid">
                                        <g id="SvgjsG1249" class="apexcharts-gridlines-horizontal">
                                            <line id="SvgjsLine1253" x1="0" y1="36.97"
                                                x2="521.664794921875" y2="36.97" stroke="#dbdfe9"
                                                stroke-dasharray="4" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1254" x1="0" y1="73.94"
                                                x2="521.664794921875" y2="73.94" stroke="#dbdfe9"
                                                stroke-dasharray="4" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1255" x1="0" y1="110.91"
                                                x2="521.664794921875" y2="110.91" stroke="#dbdfe9"
                                                stroke-dasharray="4" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1256" x1="0" y1="147.88"
                                                x2="521.664794921875" y2="147.88" stroke="#dbdfe9"
                                                stroke-dasharray="4" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1257" x1="0" y1="184.85"
                                                x2="521.664794921875" y2="184.85" stroke="#dbdfe9"
                                                stroke-dasharray="4" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG1250" class="apexcharts-gridlines-vertical"></g>
                                        <line id="SvgjsLine1260" x1="0" y1="221.82"
                                            x2="521.664794921875" y2="221.82" stroke="transparent"
                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                        <line id="SvgjsLine1259" x1="0" y1="1" x2="0"
                                            y2="221.82" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG1251" class="apexcharts-grid-borders">
                                        <line id="SvgjsLine1252" x1="0" y1="0"
                                            x2="521.664794921875" y2="0" stroke="#dbdfe9"
                                            stroke-dasharray="4" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1258" x1="0" y1="221.82"
                                            x2="521.664794921875" y2="221.82" stroke="#dbdfe9"
                                            stroke-dasharray="4" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG1229" class="apexcharts-area-series apexcharts-plot-series">
                                        <g id="SvgjsG1230" class="apexcharts-series" zIndex="0"
                                            seriesName="InboundxCalls" data:longestSeries="true" rel="1"
                                            data:realIndex="0">
                                            <path id="SvgjsPath1237"
                                                d="M0 135.55666666666667C10.143482123480903 135.55666666666667 18.83789537217882 98.58666666666667 28.981377495659725 98.58666666666667C39.12485961914063 98.58666666666667 47.81927286783855 98.58666666666667 57.96275499131945 98.58666666666667C68.10623711480035 98.58666666666667 76.80065036349826 147.88 86.94413248697917 147.88C97.08761461046008 147.88 105.78202785915799 147.88 115.9255099826389 147.88C126.0689921061198 147.88 134.7634053548177 184.85 144.90688747829861 184.85C155.05036960177952 184.85 163.74478285047743 184.85 173.88826497395834 184.85C184.03174709743925 184.85 192.72616034613716 98.58666666666667 202.86964246961807 98.58666666666667C213.01312459309898 98.58666666666667 221.7075378417969 98.58666666666667 231.8510199652778 98.58666666666667C241.99450208875868 98.58666666666667 250.6889153374566 123.23333333333335 260.8323974609375 123.23333333333335C270.9758795844184 123.23333333333335 279.6702928331163 123.23333333333335 289.81377495659723 123.23333333333335C299.95725708007814 123.23333333333335 308.65167032877605 73.94 318.79515245225696 73.94C328.93863457573786 73.94 337.6330478244358 73.94 347.7765299479167 73.94C357.9200120713976 73.94 366.6144253200955 98.58666666666667 376.7579074435764 98.58666666666667C386.9013895670573 98.58666666666667 395.59580281575523 98.58666666666667 405.73928493923614 98.58666666666667C415.88276706271705 98.58666666666667 424.57718031141496 98.58666666666667 434.72066243489587 98.58666666666667C444.8641445583768 98.58666666666667 453.5585578070747 147.88 463.7020399305556 147.88C473.8455220540365 147.88 482.5399353027344 147.88 492.6834174262153 147.88C502.82689954969624 147.88 511.5213127983941 172.52666666666667 521.664794921875 172.52666666666667C521.664794921875 172.52666666666667 521.664794921875 172.52666666666667 521.664794921875 221.82L0 221.82C0 221.82 0 135.55666666666667 0 135.55666666666667 "
                                                fill="url(#SvgjsLinearGradient1233)" fill-opacity="1"
                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                stroke-dasharray="0" class="apexcharts-area" index="0"
                                                clip-path="url(#gridRectMaskaomkioyfg)"
                                                pathTo="M 0 135.55666666666667C 10.143482123480903 135.55666666666667 18.83789537217882 98.58666666666667 28.981377495659725 98.58666666666667C 39.12485961914063 98.58666666666667 47.81927286783855 98.58666666666667 57.96275499131945 98.58666666666667C 68.10623711480035 98.58666666666667 76.80065036349826 147.88 86.94413248697917 147.88C 97.08761461046008 147.88 105.78202785915799 147.88 115.9255099826389 147.88C 126.0689921061198 147.88 134.7634053548177 184.85 144.90688747829861 184.85C 155.05036960177952 184.85 163.74478285047743 184.85 173.88826497395834 184.85C 184.03174709743925 184.85 192.72616034613716 98.58666666666667 202.86964246961807 98.58666666666667C 213.01312459309898 98.58666666666667 221.7075378417969 98.58666666666667 231.8510199652778 98.58666666666667C 241.99450208875868 98.58666666666667 250.6889153374566 123.23333333333335 260.8323974609375 123.23333333333335C 270.9758795844184 123.23333333333335 279.6702928331163 123.23333333333335 289.81377495659723 123.23333333333335C 299.95725708007814 123.23333333333335 308.65167032877605 73.94 318.79515245225696 73.94C 328.93863457573786 73.94 337.6330478244358 73.94 347.7765299479167 73.94C 357.9200120713976 73.94 366.6144253200955 98.58666666666667 376.7579074435764 98.58666666666667C 386.9013895670573 98.58666666666667 395.59580281575523 98.58666666666667 405.73928493923614 98.58666666666667C 415.88276706271705 98.58666666666667 424.57718031141496 98.58666666666667 434.72066243489587 98.58666666666667C 444.8641445583768 98.58666666666667 453.5585578070747 147.88 463.7020399305556 147.88C 473.8455220540365 147.88 482.5399353027344 147.88 492.6834174262153 147.88C 502.82689954969624 147.88 511.5213127983941 172.52666666666667 521.664794921875 172.52666666666667C 521.664794921875 172.52666666666667 521.664794921875 172.52666666666667 521.664794921875 221.82 L 0 221.82z"
                                                pathFrom="M 0 295.76 L 0 295.76 L 28.981377495659725 295.76 L 57.96275499131945 295.76 L 86.94413248697917 295.76 L 115.9255099826389 295.76 L 144.90688747829861 295.76 L 173.88826497395834 295.76 L 202.86964246961807 295.76 L 231.8510199652778 295.76 L 260.8323974609375 295.76 L 289.81377495659723 295.76 L 318.79515245225696 295.76 L 347.7765299479167 295.76 L 376.7579074435764 295.76 L 405.73928493923614 295.76 L 434.72066243489587 295.76 L 463.7020399305556 295.76 L 492.6834174262153 295.76 L 521.664794921875 295.76 L 0 295.76">
                                            </path>
                                            <path id="SvgjsPath1238"
                                                d="M0 135.55666666666667C10.143482123480903 135.55666666666667 18.83789537217882 98.58666666666667 28.981377495659725 98.58666666666667C39.12485961914063 98.58666666666667 47.81927286783855 98.58666666666667 57.96275499131945 98.58666666666667C68.10623711480035 98.58666666666667 76.80065036349826 147.88 86.94413248697917 147.88C97.08761461046008 147.88 105.78202785915799 147.88 115.9255099826389 147.88C126.0689921061198 147.88 134.7634053548177 184.85 144.90688747829861 184.85C155.05036960177952 184.85 163.74478285047743 184.85 173.88826497395834 184.85C184.03174709743925 184.85 192.72616034613716 98.58666666666667 202.86964246961807 98.58666666666667C213.01312459309898 98.58666666666667 221.7075378417969 98.58666666666667 231.8510199652778 98.58666666666667C241.99450208875868 98.58666666666667 250.6889153374566 123.23333333333335 260.8323974609375 123.23333333333335C270.9758795844184 123.23333333333335 279.6702928331163 123.23333333333335 289.81377495659723 123.23333333333335C299.95725708007814 123.23333333333335 308.65167032877605 73.94 318.79515245225696 73.94C328.93863457573786 73.94 337.6330478244358 73.94 347.7765299479167 73.94C357.9200120713976 73.94 366.6144253200955 98.58666666666667 376.7579074435764 98.58666666666667C386.9013895670573 98.58666666666667 395.59580281575523 98.58666666666667 405.73928493923614 98.58666666666667C415.88276706271705 98.58666666666667 424.57718031141496 98.58666666666667 434.72066243489587 98.58666666666667C444.8641445583768 98.58666666666667 453.5585578070747 147.88 463.7020399305556 147.88C473.8455220540365 147.88 482.5399353027344 147.88 492.6834174262153 147.88C502.82689954969624 147.88 511.5213127983941 172.52666666666667 521.664794921875 172.52666666666667C521.664794921875 172.52666666666667 521.664794921875 172.52666666666667 521.664794921875 172.52666666666667 "
                                                fill="none" fill-opacity="1" stroke="#1b84ff"
                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="3"
                                                stroke-dasharray="0" class="apexcharts-area" index="0"
                                                clip-path="url(#gridRectMaskaomkioyfg)"
                                                pathTo="M 0 135.55666666666667C 10.143482123480903 135.55666666666667 18.83789537217882 98.58666666666667 28.981377495659725 98.58666666666667C 39.12485961914063 98.58666666666667 47.81927286783855 98.58666666666667 57.96275499131945 98.58666666666667C 68.10623711480035 98.58666666666667 76.80065036349826 147.88 86.94413248697917 147.88C 97.08761461046008 147.88 105.78202785915799 147.88 115.9255099826389 147.88C 126.0689921061198 147.88 134.7634053548177 184.85 144.90688747829861 184.85C 155.05036960177952 184.85 163.74478285047743 184.85 173.88826497395834 184.85C 184.03174709743925 184.85 192.72616034613716 98.58666666666667 202.86964246961807 98.58666666666667C 213.01312459309898 98.58666666666667 221.7075378417969 98.58666666666667 231.8510199652778 98.58666666666667C 241.99450208875868 98.58666666666667 250.6889153374566 123.23333333333335 260.8323974609375 123.23333333333335C 270.9758795844184 123.23333333333335 279.6702928331163 123.23333333333335 289.81377495659723 123.23333333333335C 299.95725708007814 123.23333333333335 308.65167032877605 73.94 318.79515245225696 73.94C 328.93863457573786 73.94 337.6330478244358 73.94 347.7765299479167 73.94C 357.9200120713976 73.94 366.6144253200955 98.58666666666667 376.7579074435764 98.58666666666667C 386.9013895670573 98.58666666666667 395.59580281575523 98.58666666666667 405.73928493923614 98.58666666666667C 415.88276706271705 98.58666666666667 424.57718031141496 98.58666666666667 434.72066243489587 98.58666666666667C 444.8641445583768 98.58666666666667 453.5585578070747 147.88 463.7020399305556 147.88C 473.8455220540365 147.88 482.5399353027344 147.88 492.6834174262153 147.88C 502.82689954969624 147.88 511.5213127983941 172.52666666666667 521.664794921875 172.52666666666667"
                                                pathFrom="M 0 295.76 L 0 295.76 L 28.981377495659725 295.76 L 57.96275499131945 295.76 L 86.94413248697917 295.76 L 115.9255099826389 295.76 L 144.90688747829861 295.76 L 173.88826497395834 295.76 L 202.86964246961807 295.76 L 231.8510199652778 295.76 L 260.8323974609375 295.76 L 289.81377495659723 295.76 L 318.79515245225696 295.76 L 347.7765299479167 295.76 L 376.7579074435764 295.76 L 405.73928493923614 295.76 L 434.72066243489587 295.76 L 463.7020399305556 295.76 L 492.6834174262153 295.76 L 521.664794921875 295.76"
                                                fill-rule="evenodd"></path>
                                            <g id="SvgjsG1231"
                                                class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                data:realIndex="0">
                                                <g class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1350" r="0" cx="57.96275499131945"
                                                        cy="98.58666666666667"
                                                        class="apexcharts-marker w6390jjksh no-pointer-events"
                                                        stroke="#1b84ff" fill="#1b84ff" fill-opacity="1"
                                                        stroke-width="3" stroke-opacity="0.9"
                                                        default-marker-size="0"></circle>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1239" class="apexcharts-series" zIndex="1"
                                            seriesName="OutboundxCalls" data:longestSeries="true" rel="2"
                                            data:realIndex="1">
                                            <path id="SvgjsPath1246"
                                                d="M0 73.94C10.143482123480903 73.94 18.83789537217882 24.646666666666704 28.981377495659725 24.646666666666704C39.12485961914063 24.646666666666704 47.81927286783855 24.646666666666704 57.96275499131945 24.646666666666704C68.10623711480035 24.646666666666704 76.80065036349826 61.616666666666674 86.94413248697917 61.616666666666674C97.08761461046008 61.616666666666674 105.78202785915799 61.616666666666674 115.9255099826389 61.616666666666674C126.0689921061198 61.616666666666674 134.7634053548177 86.26333333333335 144.90688747829861 86.26333333333335C155.05036960177952 86.26333333333335 163.74478285047743 86.26333333333335 173.88826497395834 86.26333333333335C184.03174709743925 86.26333333333335 192.72616034613716 61.616666666666674 202.86964246961807 61.616666666666674C213.01312459309898 61.616666666666674 221.7075378417969 61.616666666666674 231.8510199652778 61.616666666666674C241.99450208875868 61.616666666666674 250.6889153374566 12.323333333333323 260.8323974609375 12.323333333333323C270.9758795844184 12.323333333333323 279.6702928331163 12.323333333333323 289.81377495659723 12.323333333333323C299.95725708007814 12.323333333333323 308.65167032877605 49.29333333333335 318.79515245225696 49.29333333333335C328.93863457573786 49.29333333333335 337.6330478244358 49.29333333333335 347.7765299479167 49.29333333333335C357.9200120713976 49.29333333333335 366.6144253200955 12.323333333333323 376.7579074435764 12.323333333333323C386.9013895670573 12.323333333333323 395.59580281575523 12.323333333333323 405.73928493923614 12.323333333333323C415.88276706271705 12.323333333333323 424.57718031141496 61.616666666666674 434.72066243489587 61.616666666666674C444.8641445583768 61.616666666666674 453.5585578070747 61.616666666666674 463.7020399305556 61.616666666666674C473.8455220540365 61.616666666666674 482.5399353027344 86.26333333333335 492.6834174262153 86.26333333333335C502.82689954969624 86.26333333333335 511.5213127983941 86.26333333333335 521.664794921875 86.26333333333335C521.664794921875 86.26333333333335 521.664794921875 86.26333333333335 521.664794921875 221.82L0 221.82C0 221.82 0 73.94 0 73.94 "
                                                fill="url(#SvgjsLinearGradient1242)" fill-opacity="1"
                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                stroke-dasharray="0" class="apexcharts-area" index="1"
                                                clip-path="url(#gridRectMaskaomkioyfg)"
                                                pathTo="M 0 73.94C 10.143482123480903 73.94 18.83789537217882 24.646666666666704 28.981377495659725 24.646666666666704C 39.12485961914063 24.646666666666704 47.81927286783855 24.646666666666704 57.96275499131945 24.646666666666704C 68.10623711480035 24.646666666666704 76.80065036349826 61.616666666666674 86.94413248697917 61.616666666666674C 97.08761461046008 61.616666666666674 105.78202785915799 61.616666666666674 115.9255099826389 61.616666666666674C 126.0689921061198 61.616666666666674 134.7634053548177 86.26333333333335 144.90688747829861 86.26333333333335C 155.05036960177952 86.26333333333335 163.74478285047743 86.26333333333335 173.88826497395834 86.26333333333335C 184.03174709743925 86.26333333333335 192.72616034613716 61.616666666666674 202.86964246961807 61.616666666666674C 213.01312459309898 61.616666666666674 221.7075378417969 61.616666666666674 231.8510199652778 61.616666666666674C 241.99450208875868 61.616666666666674 250.6889153374566 12.323333333333323 260.8323974609375 12.323333333333323C 270.9758795844184 12.323333333333323 279.6702928331163 12.323333333333323 289.81377495659723 12.323333333333323C 299.95725708007814 12.323333333333323 308.65167032877605 49.29333333333335 318.79515245225696 49.29333333333335C 328.93863457573786 49.29333333333335 337.6330478244358 49.29333333333335 347.7765299479167 49.29333333333335C 357.9200120713976 49.29333333333335 366.6144253200955 12.323333333333323 376.7579074435764 12.323333333333323C 386.9013895670573 12.323333333333323 395.59580281575523 12.323333333333323 405.73928493923614 12.323333333333323C 415.88276706271705 12.323333333333323 424.57718031141496 61.616666666666674 434.72066243489587 61.616666666666674C 444.8641445583768 61.616666666666674 453.5585578070747 61.616666666666674 463.7020399305556 61.616666666666674C 473.8455220540365 61.616666666666674 482.5399353027344 86.26333333333335 492.6834174262153 86.26333333333335C 502.82689954969624 86.26333333333335 511.5213127983941 86.26333333333335 521.664794921875 86.26333333333335C 521.664794921875 86.26333333333335 521.664794921875 86.26333333333335 521.664794921875 221.82 L 0 221.82z"
                                                pathFrom="M 0 295.76 L 0 295.76 L 28.981377495659725 295.76 L 57.96275499131945 295.76 L 86.94413248697917 295.76 L 115.9255099826389 295.76 L 144.90688747829861 295.76 L 173.88826497395834 295.76 L 202.86964246961807 295.76 L 231.8510199652778 295.76 L 260.8323974609375 295.76 L 289.81377495659723 295.76 L 318.79515245225696 295.76 L 347.7765299479167 295.76 L 376.7579074435764 295.76 L 405.73928493923614 295.76 L 434.72066243489587 295.76 L 463.7020399305556 295.76 L 492.6834174262153 295.76 L 521.664794921875 295.76 L 0 295.76">
                                            </path>
                                            <path id="SvgjsPath1247"
                                                d="M0 73.94C10.143482123480903 73.94 18.83789537217882 24.646666666666704 28.981377495659725 24.646666666666704C39.12485961914063 24.646666666666704 47.81927286783855 24.646666666666704 57.96275499131945 24.646666666666704C68.10623711480035 24.646666666666704 76.80065036349826 61.616666666666674 86.94413248697917 61.616666666666674C97.08761461046008 61.616666666666674 105.78202785915799 61.616666666666674 115.9255099826389 61.616666666666674C126.0689921061198 61.616666666666674 134.7634053548177 86.26333333333335 144.90688747829861 86.26333333333335C155.05036960177952 86.26333333333335 163.74478285047743 86.26333333333335 173.88826497395834 86.26333333333335C184.03174709743925 86.26333333333335 192.72616034613716 61.616666666666674 202.86964246961807 61.616666666666674C213.01312459309898 61.616666666666674 221.7075378417969 61.616666666666674 231.8510199652778 61.616666666666674C241.99450208875868 61.616666666666674 250.6889153374566 12.323333333333323 260.8323974609375 12.323333333333323C270.9758795844184 12.323333333333323 279.6702928331163 12.323333333333323 289.81377495659723 12.323333333333323C299.95725708007814 12.323333333333323 308.65167032877605 49.29333333333335 318.79515245225696 49.29333333333335C328.93863457573786 49.29333333333335 337.6330478244358 49.29333333333335 347.7765299479167 49.29333333333335C357.9200120713976 49.29333333333335 366.6144253200955 12.323333333333323 376.7579074435764 12.323333333333323C386.9013895670573 12.323333333333323 395.59580281575523 12.323333333333323 405.73928493923614 12.323333333333323C415.88276706271705 12.323333333333323 424.57718031141496 61.616666666666674 434.72066243489587 61.616666666666674C444.8641445583768 61.616666666666674 453.5585578070747 61.616666666666674 463.7020399305556 61.616666666666674C473.8455220540365 61.616666666666674 482.5399353027344 86.26333333333335 492.6834174262153 86.26333333333335C502.82689954969624 86.26333333333335 511.5213127983941 86.26333333333335 521.664794921875 86.26333333333335C521.664794921875 86.26333333333335 521.664794921875 86.26333333333335 521.664794921875 86.26333333333335 "
                                                fill="none" fill-opacity="1" stroke="#17c653"
                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="3"
                                                stroke-dasharray="0" class="apexcharts-area" index="1"
                                                clip-path="url(#gridRectMaskaomkioyfg)"
                                                pathTo="M 0 73.94C 10.143482123480903 73.94 18.83789537217882 24.646666666666704 28.981377495659725 24.646666666666704C 39.12485961914063 24.646666666666704 47.81927286783855 24.646666666666704 57.96275499131945 24.646666666666704C 68.10623711480035 24.646666666666704 76.80065036349826 61.616666666666674 86.94413248697917 61.616666666666674C 97.08761461046008 61.616666666666674 105.78202785915799 61.616666666666674 115.9255099826389 61.616666666666674C 126.0689921061198 61.616666666666674 134.7634053548177 86.26333333333335 144.90688747829861 86.26333333333335C 155.05036960177952 86.26333333333335 163.74478285047743 86.26333333333335 173.88826497395834 86.26333333333335C 184.03174709743925 86.26333333333335 192.72616034613716 61.616666666666674 202.86964246961807 61.616666666666674C 213.01312459309898 61.616666666666674 221.7075378417969 61.616666666666674 231.8510199652778 61.616666666666674C 241.99450208875868 61.616666666666674 250.6889153374566 12.323333333333323 260.8323974609375 12.323333333333323C 270.9758795844184 12.323333333333323 279.6702928331163 12.323333333333323 289.81377495659723 12.323333333333323C 299.95725708007814 12.323333333333323 308.65167032877605 49.29333333333335 318.79515245225696 49.29333333333335C 328.93863457573786 49.29333333333335 337.6330478244358 49.29333333333335 347.7765299479167 49.29333333333335C 357.9200120713976 49.29333333333335 366.6144253200955 12.323333333333323 376.7579074435764 12.323333333333323C 386.9013895670573 12.323333333333323 395.59580281575523 12.323333333333323 405.73928493923614 12.323333333333323C 415.88276706271705 12.323333333333323 424.57718031141496 61.616666666666674 434.72066243489587 61.616666666666674C 444.8641445583768 61.616666666666674 453.5585578070747 61.616666666666674 463.7020399305556 61.616666666666674C 473.8455220540365 61.616666666666674 482.5399353027344 86.26333333333335 492.6834174262153 86.26333333333335C 502.82689954969624 86.26333333333335 511.5213127983941 86.26333333333335 521.664794921875 86.26333333333335"
                                                pathFrom="M 0 295.76 L 0 295.76 L 28.981377495659725 295.76 L 57.96275499131945 295.76 L 86.94413248697917 295.76 L 115.9255099826389 295.76 L 144.90688747829861 295.76 L 173.88826497395834 295.76 L 202.86964246961807 295.76 L 231.8510199652778 295.76 L 260.8323974609375 295.76 L 289.81377495659723 295.76 L 318.79515245225696 295.76 L 347.7765299479167 295.76 L 376.7579074435764 295.76 L 405.73928493923614 295.76 L 434.72066243489587 295.76 L 463.7020399305556 295.76 L 492.6834174262153 295.76 L 521.664794921875 295.76"
                                                fill-rule="evenodd"></path>
                                            <g id="SvgjsG1240"
                                                class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                data:realIndex="1">
                                                <g class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1351" r="0" cx="57.96275499131945"
                                                        cy="24.646666666666704"
                                                        class="apexcharts-marker wo07stbo no-pointer-events"
                                                        stroke="#17c653" fill="#17c653" fill-opacity="1"
                                                        stroke-width="3" stroke-opacity="0.9"
                                                        default-marker-size="0"></circle>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1232" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        <g id="SvgjsG1241" class="apexcharts-datalabels" data:realIndex="1"></g>
                                    </g>
                                    <line id="SvgjsLine1262" x1="57.46275499131945" y1="0"
                                        x2="57.46275499131945" y2="221.82" stroke="#1B84FF #17C653"
                                        stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs"
                                        x="57.46275499131945" y="0" width="1" height="221.82" fill="#b1b9c4"
                                        filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                    <line id="SvgjsLine1263" x1="0" y1="0" x2="521.664794921875"
                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1264" x1="0" y1="0" x2="521.664794921875"
                                        y2="0" stroke-dasharray="0" stroke-width="0"
                                        stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG1265" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG1266" class="apexcharts-xaxis-texts-g"
                                            transform="translate(0, -10)">
                                            <text id="SvgjsText1268" font-family="inherit" x="0" y="243.82"
                                                text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: inherit" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1269"></tspan>
                                                <title></title>
                                            </text>
                                            <text id="SvgjsText1271" font-family="inherit" x="28.981377495659718"
                                                y="243.82" text-anchor="end" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: inherit" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1272"></tspan>
                                                <title></title>
                                            </text>
                                            <text id="SvgjsText1274" font-family="inherit" x="57.96275499131943"
                                                y="243.82" text-anchor="end" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: inherit" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1275"></tspan>
                                                <title></title>
                                            </text>
                                            <text id="SvgjsText1277" font-family="inherit" x="86.94413248697916"
                                                y="243.82" text-anchor="end" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: inherit"
                                                transform="rotate(0 87.94412994384766 238.32000732421875)">
                                                <tspan id="SvgjsTspan1278">9 AM</tspan>
                                                <title>9 AM</title>
                                            </text>
                                            <text id="SvgjsText1280" font-family="inherit" x="115.92550998263889"
                                                y="243.82" text-anchor="end" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: inherit" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1281"></tspan>
                                                <title></title>
                                            </text>
                                            <text id="SvgjsText1283" font-family="inherit" x="144.90688747829861"
                                                y="243.82" text-anchor="end" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: inherit" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1284"></tspan>
                                                <title></title>
                                            </text>
                                            <text id="SvgjsText1286" font-family="inherit" x="173.88826497395834"
                                                y="243.82" text-anchor="end" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: inherit"
                                                transform="rotate(0 174.8882598876953 238.32000732421875)">
                                                <tspan id="SvgjsTspan1287">12 PM</tspan>
                                                <title>12 PM</title>
                                            </text>
                                            <text id="SvgjsText1289" font-family="inherit" x="202.86964246961807"
                                                y="243.82" text-anchor="end" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: inherit" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1290"></tspan>
                                                <title></title>
                                            </text>
                                            <text id="SvgjsText1292" font-family="inherit" x="231.8510199652778"
                                                y="243.82" text-anchor="end" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: inherit" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1293"></tspan>
                                                <title></title>
                                            </text>
                                            <text id="SvgjsText1295" font-family="inherit" x="260.83239746093756"
                                                y="243.82" text-anchor="end" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: inherit"
                                                transform="rotate(0 261.8323974609375 238.32000732421875)">
                                                <tspan id="SvgjsTspan1296">15 PM</tspan>
                                                <title>15 PM</title>
                                            </text>
                                            <text id="SvgjsText1298" font-family="inherit" x="289.8137749565973"
                                                y="243.82" text-anchor="end" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: inherit" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1299"></tspan>
                                                <title></title>
                                            </text>
                                            <text id="SvgjsText1301" font-family="inherit" x="318.795152452257"
                                                y="243.82" text-anchor="end" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: inherit" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1302"></tspan>
                                                <title></title>
                                            </text>
                                            <text id="SvgjsText1304" font-family="inherit" x="347.77652994791674"
                                                y="243.82" text-anchor="end" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: inherit"
                                                transform="rotate(0 348.7765197753906 238.32000732421875)">
                                                <tspan id="SvgjsTspan1305">18 PM</tspan>
                                                <title>18 PM</title>
                                            </text>
                                            <text id="SvgjsText1307" font-family="inherit" x="376.75790744357647"
                                                y="243.82" text-anchor="end" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: inherit" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1308"></tspan>
                                                <title></title>
                                            </text>
                                            <text id="SvgjsText1310" font-family="inherit" x="405.7392849392362"
                                                y="243.82" text-anchor="end" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: inherit" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1311"></tspan>
                                                <title></title>
                                            </text>
                                            <text id="SvgjsText1313" font-family="inherit" x="434.7206624348959"
                                                y="243.82" text-anchor="end" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: inherit"
                                                transform="rotate(0 435.7206726074219 238.32000732421875)">
                                                <tspan id="SvgjsTspan1314">19 PM</tspan>
                                                <title>19 PM</title>
                                            </text>
                                            <text id="SvgjsText1316" font-family="inherit" x="463.70203993055566"
                                                y="243.82" text-anchor="end" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: inherit" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1317"></tspan>
                                                <title></title>
                                            </text>
                                            <text id="SvgjsText1319" font-family="inherit" x="492.6834174262154"
                                                y="243.82" text-anchor="end" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: inherit" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1320"></tspan>
                                                <title></title>
                                            </text>
                                            <text id="SvgjsText1322" font-family="inherit" x="521.6647949218751"
                                                y="243.82" text-anchor="end" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: inherit" transform="rotate(0 1 -1)">
                                                <tspan id="SvgjsTspan1323"></tspan>
                                                <title></title>
                                            </text>
                                        </g>
                                    </g>
                                    <g id="SvgjsG1347"
                                        class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown"></g>
                                    <g id="SvgjsG1348"
                                        class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown"></g>
                                    <g id="SvgjsG1349"
                                        class="apexcharts-point-annotations apexcharts-hidden-element-shown"></g>
                                    <rect id="SvgjsRect1352" width="0" height="0" x="0" y="0"
                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                        stroke="none" stroke-dasharray="0" fill="#fefefe"
                                        class="apexcharts-zoom-rect"></rect>
                                    <rect id="SvgjsRect1353" width="0" height="0" x="0" y="0"
                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                        stroke="none" stroke-dasharray="0" fill="#fefefe"
                                        class="apexcharts-selection-rect"></rect>
                                </g>
                            </svg>
                            <div class="apexcharts-tooltip apexcharts-theme-light"
                                style="left: 116.798px; top: 101.587px">
                                <div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px">
                                    81 AM
                                </div>
                                <div class="apexcharts-tooltip-series-group apexcharts-active"
                                    style="order: 1; display: flex">
                                    <span class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(27, 132, 255)"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: inherit; font-size: 12px">
                                        <div class="apexcharts-tooltip-y-group">
                                            <span class="apexcharts-tooltip-text-y-label">Inbound Calls: </span><span
                                                class="apexcharts-tooltip-text-y-value">80</span>
                                        </div>
                                        <div class="apexcharts-tooltip-goals-group">
                                            <span class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span>
                                        </div>
                                        <div class="apexcharts-tooltip-z-group">
                                            <span class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group apexcharts-active"
                                    style="order: 2; display: flex">
                                    <span class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(23, 198, 83)"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: inherit; font-size: 12px">
                                        <div class="apexcharts-tooltip-y-group">
                                            <span class="apexcharts-tooltip-text-y-label">Outbound Calls: </span><span
                                                class="apexcharts-tooltip-text-y-value">110</span>
                                        </div>
                                        <div class="apexcharts-tooltip-goals-group">
                                            <span class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span>
                                        </div>
                                        <div class="apexcharts-tooltip-z-group">
                                            <span class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"
                                style="left: 77.7276px; top: 253.82px">
                                <div class="apexcharts-xaxistooltip-text"
                                    style="
                        font-family: inherit;
                        font-size: 12px;
                        min-width: 32.4219px;
                      ">
                                    81 AM
                                </div>
                            </div>
                            <div
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card h-lg-100"
                style="
              background: linear-gradient(
                112.14deg,
                #f3f4f6 0%,
                #f3f4f6 100%
              );
            ">
                <div class="card-body">
                    <div class="row align-items-center pt-10">
                        <div class="col-sm-7 pe-0 mb-5 mb-sm-0">
                            <div class="d-flex justify-content-between h-100 flex-column pt-xl-5 pb-xl-2 ps-xl-7">
                                <div class="mb-7">
                                    <div class="mb-6">
                                        <h3 class="fs-2x fw-semibold text-gray-600">
                                            Product To Learn Today
                                        </h3>
                                        <div class="pt-5">
                                            <span class="fw-semibold text-gray-600 opacity-75">Flat cartoony and
                                                illustrations with
                                                vivid color</span>
                                            <span class="fw-semibold text-gray-600 opacity-75">Flat cartoony and
                                                illustrations with
                                                vivid color</span>
                                            <span class="fw-semibold text-gray-600 opacity-75">Flat cartoony and
                                                illustrations with
                                                vivid color</span>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center flex-wrap d-grid gap-2 pt-10">
                                        <div class="d-flex align-items-center me-5 me-xl-13">
                                            <div class="symbol symbol-30px symbol-circle me-3">
                                                <span class="symbol-label"
                                                    style="
                                background-color: var(--site-primary);
                              ">
                                                    <i class="fa-brands fa-algolia fs-4 text-gray-600"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                </span>
                                            </div>

                                            <div class="m-0">
                                                <a href="" class="text-gray-600 text-opacity-75 fs-8">Total
                                                    Product</a>
                                                <span class="fw-bold text-gray-600 fs-7 d-block">Up to 500</span>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-30px symbol-circle me-3">
                                                <span class="symbol-label"
                                                    style="
                                background-color: var(--site-primary);
                              ">
                                                    <i class="fa-solid fa-house-chimney-user fs-4 text-gray-600"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                </span>
                                            </div>

                                            <div class="m-0">
                                                <a href="" class="text-gray-600 text-opacity-75 fs-8">Total
                                                    Solutions</a>
                                                <span class="fw-bold text-gray-600 fs-7 d-block">Up to 500</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="m-0">
                                    <a href="#"
                                        class="btn btn-color-gray bg-hover-opacity-25 text-white fw-semibold mt-10"
                                        style="background-color: var(--site-primary)" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_upgrade_plan">
                                        Upgrade Plan
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-5">
                            <img src="assets/media/svg/illustrations/easy/7.svg" class="h-250px h-lg-250px my-n6"
                                alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @php
        $currentUtcTime = now()->toIso8601String(); // ISO 8601 format
    @endphp

    <script>
        // Get the current UTC time from the PHP variable
        const utcTime = '{{ $currentUtcTime }}';

        // Create a new Date object with the UTC time
        const date = new Date(utcTime);

        // Format the time in local format (e.g., "09:05 AM")
        const options = {
            hour: '2-digit',
            minute: '2-digit',
            hour12: true,
        };

        // Display the local time
        document.getElementById('local-time').textContent = date.toLocaleTimeString(undefined, options);
    </script>
</x-admin-app-layout>
