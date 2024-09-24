<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <div class="aside-logo flex-column-auto" id="kt_aside_logo">
        <a href="{{ route('dashboard') }}">
            <img alt="Logo"
                src="{{ !empty($site->site_logo_white) && file_exists(public_path('storage/settings/' . $site->site_logo_white)) ? asset('storage/settings/' . $site->site_logo_white) : asset('images/logo.png') }}"
                class="h-50px logo w-150px">
        </a>
        <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-dark aside-toggle active"
            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
            data-kt-toggle-name="aside-minimize">
            <span class="svg-icon svg-icon-1 rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none">
                    <path opacity="0.5"
                        d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                        fill="currentColor"></path>
                    <path
                        d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                        fill="currentColor"></path>
                </svg>
            </span>
        </div>
    </div>
    <div class="aside-menu flex-column-fluid">
        <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
            data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu"
            data-kt-scroll-offset="0" style="height: 318px;">
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">
                <div class="menu-item">
                    <a class="menu-link {{ Route::is('admin.dashboard') ? 'active' : '' }}"
                        href="{{ route('admin.dashboard') }}">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <i class="fa-solid fa-chart-line"></i>
                            </span>
                        </span>
                        <span class="menu-title">Overview</span>
                    </a>
                </div>

                {{-- Site Content  --}}
                @php
                    $menuItems = [
                        // [
                        //     'title' => 'Business',
                        //     'icon' => 'fa-solid fa-box-open text-danger fs-3',
                        //     'routes' => [
                        //     ],
                        //     'subMenu' => [
                        //         [
                        //             'title' => 'Products List',
                        //             'routes' => ['admin.product.index', 'admin.product.create', 'admin.product.edit'],
                        //             'route' => 'admin.product.index',
                        //         ],
                        //         [
                        //             'title' => 'Brand List',
                        //             'routes' => ['admin.brands.index', 'admin.brands.create', 'admin.brands.edit'],
                        //             'route' => 'admin.brands.index',
                        //         ],
                        //         [
                        //             'title' => 'Category List',
                        //             'routes' => [
                        //                 'admin.categories.index',
                        //                 'admin.categories.create',
                        //                 'admin.categories.edit',
                        //             ],
                        //             'route' => 'admin.categories.index',
                        //         ],
                        //         [
                        //             'title' => 'Stock Info',
                        //             'routes' => ['admin.stock-management.index'],
                        //             'route' => 'admin.stock-management.index',
                        //         ],
                        //         [
                        //             'title' => 'Shipping',
                        //             'routes' => ['admin.shipping-management.index'],
                        //             'route' => 'admin.shipping-management.index',
                        //         ],
                        //     ],
                        // ],
                        // [
                        //     'title' => 'My HR',
                        //     'icon' => 'fa-solid fa-cart-shopping text-warning fs-3',
                        //     'routes' => [
                        //         'admin.order-management.index',
                        //         'admin.order-management.create',
                        //         'admin.order-management.edit',
                        //         'admin.orderReport',
                        //         'admin.orderDetails',
                        //     ],
                        //     'subMenu' => [
                        //         [
                        //             'title' => 'Order Report',
                        //             'routes' => ['admin.orderReport'],
                        //             'route' => 'admin.orderReport',
                        //         ],
                        //         [
                        //             'title' => 'Order List',
                        //             'routes' => ['admin.order-management.index'],
                        //             'route' => 'admin.order-management.index',
                        //         ],
                        //     ],
                        // ],

                        [
                            'title' => 'Settings',
                            'icon' => 'fa-solid fa-gear text-secondary fs-3',
                            'routes' => ['admin.settings.index', 'admin.email-settings.index'],
                            'subMenu' => [
                                [
                                    'title' => 'Configuration',
                                    'routes' => ['admin.settings.index'],
                                    'route' => 'admin.settings.index',
                                ],
                                [
                                    'title' => 'Profile',
                                    'routes' => ['admin.email-settings.index'],
                                    'route' => 'admin.email-settings.index',
                                ],
                            ],
                        ],
                    ];
                @endphp

                @foreach ($menuItems as $item)
                    <div data-kt-menu-trigger="click"
                        class="menu-item menu-accordion {{ Route::is(...$item['routes'] ?? []) ? 'here show' : '' }}">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-2">
                                    <i class="{{ $item['icon'] }}"></i>
                                </span>
                            </span>
                            <span class="menu-title">{{ $item['title'] }}</span>
                            <span class="menu-arrow"></span>
                        </span>
                        @if (!empty($item['subMenu']))
                            <div
                                class="menu-sub menu-sub-accordion {{ Route::is(...$item['routes'] ?? []) ? 'menu-active-bg' : '' }}">
                                @foreach ($item['subMenu'] as $subItem)
                                    @if (isset($subItem['subMenu']))
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                            <span class="menu-link">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ $subItem['title'] }}</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <div
                                                class="menu-sub menu-sub-accordion {{ Route::is(...array_column($subItem['subMenu'], 'route') ?? []) ? 'here show' : '' }}">
                                                @foreach ($subItem['subMenu'] as $subSubItem)
                                                    <div class="menu-item">
                                                        @if (isset($subSubItem['route']))
                                                            <a class="menu-link {{ Route::is($subSubItem['route']) ? 'active' : '' }}"
                                                                href="{{ route($subSubItem['route']) }}">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
                                                                </span>
                                                                <span
                                                                    class="menu-title">{{ $subSubItem['title'] }}</span>
                                                            </a>
                                                        @else
                                                            <span class="menu-title">{{ $subSubItem['title'] }}</span>
                                                        @endif
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @else
                                        <div class="menu-item">
                                            @if (isset($subItem['route']))
                                                <a class="menu-link {{ Route::is($subItem['routes']) ? 'active' : '' }}"
                                                    href="{{ route($subItem['route']) }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">{{ $subItem['title'] }}</span>
                                                </a>
                                            @else
                                                <span class="menu-title">{{ $subItem['title'] }}</span>
                                            @endif
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="aside-footer flex-column-auto pt-5 pb-7 px-5" id="kt_aside_footer">
        <a href="{{ route('admin.team-managemnet.index') }}" class="menu-link btn btn-custom btn-info w-100">
            <span class="menu-icon">
                <span class="svg-icon svg-icon-2">
                    <i class="fa-solid fa-users"></i>
                </span>
            </span>
            <span class="btn-label">
                {{ __('Manage Team') }}
            </span>
        </a>
    </div>
    <div class="aside-footer flex-column-auto pt-5 pb-7 px-5" id="kt_aside_footer">
        <form method="POST" action="{{ route('admin.logout') }}">
            <a href="{{ route('admin.logout') }}" class="menu-link btn btn-custom btn-primary w-100"
                onclick="event.preventDefault();this.closest('form').submit();">
                <span class="menu-icon">
                    <span class="svg-icon svg-icon-2">
                        <i class="fa-solid fa-sign-out"></i>
                    </span>
                </span>
                <span class="btn-label">
                    @csrf
                    {{ __('Log Out') }}
                </span>
            </a>
        </form>
    </div>
</div>



















{{-- <div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <div class="aside-logo flex-column-auto" id="kt_aside_logo">
        <a href="{{ route('admin.dashboard') }}">
            <img alt="Logo"
                src=""
                class="" style="width: 200px; height: 80px" />
        </a>

        <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
            data-kt-toggle-name="aside-minimize">
            <span class="svg-icon svg-icon-1 rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none">
                    <path opacity="0.5"
                        d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                        fill="currentColor" />
                    <path
                        d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                        fill="currentColor" />
                </svg>
            </span>
        </div>
    </div>

    <div class="aside-menu flex-column-fluid">
        <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
            data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu"
            data-kt-scroll-offset="0">
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">
                <div class="menu-item mx-4">
                    <a class="menu-link active" href="{{ route('admin.dashboard') }}">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" x="0" y="0"
                                    viewBox="0 0 64 64" style="enable-background: new 0 0 512 512" xml:space="preserve"
                                    class="">
                                    <g>
                                        <rect width="57" height="42" x="2" y="4" fill="#f1f2f2" rx="4"
                                            opacity="1" data-original="#f1f2f2" class="">
                                        </rect>
                                        <path fill="#6b71f2"
                                            d="M57.9 55.9C55.36 58.43 51.86 60 48 60c-7.73 0-14-6.27-14-14s6.27-14 14-14v6c-4.42 0-8 3.58-8 8s3.58 8 8 8c2.21 0 4.21-.9 5.66-2.34z"
                                            opacity="1" data-original="#6b71f2"></path>
                                        <path fill="#0ff2b2" d="M62 46h-6c0-4.42-3.58-8-8-8v-6c7.73 0 14 6.27 14 14z"
                                            opacity="1" data-original="#0ff2b2"></path>
                                        <path fill="#0a0f26"
                                            d="M62 46c0 3.86-1.57 7.36-4.1 9.9l-4.24-4.24A8.014 8.014 0 0 0 56 46z"
                                            opacity="1" data-original="#0a0f26" class=""></path>
                                        <rect width="6" height="13" x="7" y="28" fill="#0ff2b2" rx="1"
                                            opacity="1" data-original="#0ff2b2"></rect>
                                        <rect width="6" height="17" x="15" y="24" fill="#0ff2b2" rx="1"
                                            opacity="1" data-original="#0ff2b2"></rect>
                                        <rect width="6" height="10" x="23" y="31" fill="#0ff2b2" rx="1"
                                            opacity="1" data-original="#0ff2b2"></rect>
                                        <g fill="#0a0f26">
                                            <path
                                                d="M10 11H8c-.55 0-1-.45-1-1s.45-1 1-1h2c.55 0 1 .45 1 1s-.45 1-1 1zM22 11h-8c-.55 0-1-.45-1-1s.45-1 1-1h8c.55 0 1 .45 1 1s-.45 1-1 1zM10 16H8c-.55 0-1-.45-1-1s.45-1 1-1h2c.55 0 1 .45 1 1s-.45 1-1 1zM22 16h-8c-.55 0-1-.45-1-1s.45-1 1-1h8c.55 0 1 .45 1 1s-.45 1-1 1zM10 21H8c-.55 0-1-.45-1-1s.45-1 1-1h2c.55 0 1 .45 1 1s-.45 1-1 1zM22 21h-8c-.55 0-1-.45-1-1s.45-1 1-1h8c.55 0 1 .45 1 1s-.45 1-1 1zM31.31 19.5a.99.99 0 0 1-.66-.25c-.42-.36-.46-1-.09-1.41l4.38-5c.36-.42 1-.46 1.41-.09.42.36.46 1 .09 1.41l-4.38 5c-.2.23-.47.34-.75.34zM45.31 19.5a.99.99 0 0 1-.66-.25c-.42-.36-.46-1-.09-1.41l4.38-5c.36-.42 1-.46 1.41-.09.42.36.46 1 .09 1.41l-4.38 5c-.2.23-.47.34-.75.34zM42.69 19.5c-.28 0-.56-.12-.75-.34l-4.38-5c-.36-.42-.32-1.05.09-1.41s1.05-.32 1.41.09l4.38 5c.36.42.32 1.05-.09 1.41-.19.17-.42.25-.66.25z"
                                                fill="#0a0f26" opacity="1" data-original="#0a0f26" class="">
                                            </path>
                                        </g>
                                        <circle cx="44" cy="20" r="3" fill="#6b71f2" opacity="1"
                                            data-original="#6b71f2"></circle>
                                        <circle cx="37" cy="12" r="3" fill="#6b71f2" opacity="1"
                                            data-original="#6b71f2"></circle>
                                        <circle cx="51" cy="12" r="3" fill="#6b71f2" opacity="1"
                                            data-original="#6b71f2"></circle>
                                        <circle cx="30" cy="20" r="3" fill="#6b71f2" opacity="1"
                                            data-original="#6b71f2"></circle>
                                    </g>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Overview</span>
                    </a>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link mx-3 mt-2">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" x="0"
                                    y="0" viewBox="0 0 512 512" style="enable-background: new 0 0 512 512"
                                    xml:space="preserve">
                                    <g>
                                        <path fill="#474747"
                                            d="M353.877 491.081h-136.17a52.178 52.178 0 0 0 26.883-45.637v-24.83h82.404v24.83a52.178 52.178 0 0 0 26.883 45.637z"
                                            opacity="1" data-original="#474747"></path>
                                        <path fill="#475da9"
                                            d="M505.688 112.092v282.736c0 14.249-11.551 25.8-25.8 25.8H91.695c-14.249 0-25.8-11.551-25.8-25.8V112.092c0-14.249 11.551-25.8 25.8-25.8h388.193c14.249.001 25.8 11.551 25.8 25.8z"
                                            opacity="1" data-original="#475da9"></path>
                                        <path
                                            d="M505.677 112.115v282.73c0 14.223-11.556 25.779-25.779 25.779H91.711c-14.27 0-25.826-11.556-25.826-25.779v-2.947H168.44c169.414 0 306.919-136.523 308.463-305.609h2.994c14.223 0 25.78 11.556 25.78 25.826z"
                                            opacity="1" fill="#00000012" data-original="#00000012"></path>
                                        <path fill="#e8f1f8" d="M102.014 122.411h367.553v241.234H102.014z"
                                            opacity="1" data-original="#e8f1f8"></path>
                                        <path fill="#ffffff" d="M183.843 491.081h203.898" opacity="1"
                                            data-original="#ffffff"></path>
                                        <path fill="#474747"
                                            d="M387.74 496.395H183.844a5.313 5.313 0 0 1 0-10.626H387.74a5.313 5.313 0 0 1 0 10.626z"
                                            opacity="1" data-original="#474747"></path>
                                        <path fill="#0e9c4a"
                                            d="M442.205 227.285V331.91a5.502 5.502 0 0 1-5.502 5.502h-24.435a5.502 5.502 0 0 1-5.502-5.502V227.285a5.502 5.502 0 0 1 5.502-5.502h24.435a5.502 5.502 0 0 1 5.502 5.502z"
                                            opacity="1" data-original="#0e9c4a"></path>
                                        <path
                                            d="M442.212 227.285V331.91a5.507 5.507 0 0 1-5.502 5.502h-24.448a5.507 5.507 0 0 1-5.502-5.502v-.55c14.232-2.293 25.108-14.654 25.108-29.528v-80.049h4.842a5.506 5.506 0 0 1 5.502 5.502z"
                                            opacity="1" fill="#00000010" data-original="#00000010"></path>
                                        <path fill="#fdcf17"
                                            d="M386.35 203.344V331.91a5.502 5.502 0 0 1-5.502 5.502h-24.435a5.502 5.502 0 0 1-5.502-5.502V203.344a5.502 5.502 0 0 1 5.502-5.502h24.435a5.502 5.502 0 0 1 5.502 5.502z"
                                            opacity="1" data-original="#fdcf17"></path>
                                        <path
                                            d="M386.357 203.344V331.91a5.507 5.507 0 0 1-5.502 5.502h-24.448a5.507 5.507 0 0 1-5.502-5.502v-.55c14.232-2.293 25.108-14.654 25.108-29.528v-103.99h4.842a5.506 5.506 0 0 1 5.502 5.502z"
                                            opacity="1" fill="#00000010" data-original="#00000010"></path>
                                        <path fill="#f14f4a"
                                            d="M330.496 248.021v83.889a5.502 5.502 0 0 1-5.502 5.502h-24.435a5.502 5.502 0 0 1-5.502-5.502v-83.889a5.502 5.502 0 0 1 5.502-5.502h24.435a5.502 5.502 0 0 1 5.502 5.502z"
                                            opacity="1" data-original="#f14f4a"></path>
                                        <path
                                            d="M330.503 248.021v83.889a5.507 5.507 0 0 1-5.502 5.502h-24.448a5.507 5.507 0 0 1-5.502-5.502v-.55c14.232-2.293 25.108-14.654 25.108-29.528v-59.313h4.842a5.506 5.506 0 0 1 5.502 5.502z"
                                            opacity="1" fill="#00000010" data-original="#00000010"></path>
                                        <path fill="#f78721"
                                            d="M274.641 214.017V331.91a5.502 5.502 0 0 1-5.502 5.502h-24.435a5.502 5.502 0 0 1-5.502-5.502V214.017a5.502 5.502 0 0 1 5.502-5.502h24.435a5.5 5.5 0 0 1 5.502 5.502z"
                                            opacity="1" data-original="#f78721"></path>
                                        <path
                                            d="M274.648 214.017V331.91a5.507 5.507 0 0 1-5.502 5.502h-24.448a5.507 5.507 0 0 1-5.502-5.502v-.55c14.232-2.293 25.108-14.654 25.108-29.528v-93.318h4.842a5.507 5.507 0 0 1 5.502 5.503z"
                                            opacity="1" fill="#00000010" data-original="#00000010"></path>
                                        <path fill="#0e9c4a"
                                            d="M256.922 42.394v107.424c0 14.795-11.994 26.789-26.789 26.789H211.18l-14.273 36.827c-3.076 7.936-14.307 7.93-17.375-.009l-14.228-36.819H33.101c-14.795 0-26.789-11.994-26.789-26.789V42.394c0-14.795 11.994-26.789 26.789-26.789h197.032c14.795 0 26.789 11.994 26.789 26.789z"
                                            opacity="1" data-original="#0e9c4a"></path>
                                        <path
                                            d="M230.133 15.605h-5.476c0 69.361-56.228 125.589-125.589 125.589H6.312v8.623c0 14.795 11.994 26.789 26.789 26.789h132.203l14.228 36.819c3.068 7.939 14.299 7.945 17.375.009l14.273-36.827h18.953c14.795 0 26.789-11.994 26.789-26.789V42.394c0-14.795-11.994-26.789-26.789-26.789z"
                                            opacity="1" fill="#00000010" data-original="#00000010"></path>
                                        <path fill="#e8f1f8"
                                            d="m87.02 136.991-35.094-19.914a5.313 5.313 0 0 1 5.245-9.239l31.496 17.873 32.23-33.642a5.324 5.324 0 0 1 6.293-1.035l30.524 15.927 32.57-58.16a5.32 5.32 0 0 1 7.232-2.039 5.313 5.313 0 0 1 2.039 7.232l-35.092 62.661a5.319 5.319 0 0 1-7.092 2.114L125.81 102.3l-32.332 33.748a5.313 5.313 0 0 1-6.458.943z"
                                            opacity="1" data-original="#e8f1f8"></path>
                                        <path fill="#e8f1f8"
                                            d="m200.98 69.14-24.894-12.524c-4.064-2.044-3.834-7.921.377-9.642l19.634-8.025a5.301 5.301 0 0 1 7.141 3.592l5.26 20.548c1.128 4.408-3.454 8.095-7.518 6.051z"
                                            opacity="1" data-original="#e8f1f8"></path>
                                        <path fill="#ffffff" d="M139.642 332.11h67.221" opacity="1"
                                            data-original="#ffffff"></path>
                                        <path fill="#474747"
                                            d="M206.863 337.422h-67.221a5.313 5.313 0 0 1 0-10.626h67.221a5.313 5.313 0 0 1 0 10.626z"
                                            opacity="1" data-original="#474747"></path>
                                        <path fill="#ffffff" d="M139.642 292.785h67.221" opacity="1"
                                            data-original="#ffffff"></path>
                                        <path fill="#474747"
                                            d="M206.863 298.097h-67.221a5.313 5.313 0 0 1 0-10.626h67.221a5.313 5.313 0 0 1 0 10.626z"
                                            opacity="1" data-original="#474747"></path>
                                        <path fill="#ffffff" d="M182.065 253.46h24.798" opacity="1"
                                            data-original="#ffffff"></path>
                                        <path fill="#474747"
                                            d="M206.863 258.772h-24.799a5.313 5.313 0 0 1 0-10.626h24.799a5.313 5.313 0 0 1 0 10.626z"
                                            opacity="1" data-original="#474747"></path>
                                    </g>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Business</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link mx-3 mt-2" href="marketing.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Marketing</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link mx-3 mt-2" href="sales.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Sales</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link mx-3 mt-2">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" x="0"
                                    y="0" viewBox="0 0 60 60" style="enable-background: new 0 0 512 512"
                                    xml:space="preserve" class="">
                                    <g>
                                        <g fill="none" fill-rule="nonzero">
                                            <g transform="translate(1 1)">
                                                <g fill="#783e22">
                                                    <path
                                                        d="M56 26h-3a2 2 0 0 1 2 2v24h3V28a2 2 0 0 0-2-2zM0 52h6v4a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zM52 52h6v4a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2z"
                                                        fill="#783e22" opacity="1" data-original="#783e22"></path>
                                                </g>
                                                <circle cx="17" cy="8" r="8" fill="#ffe0b2"
                                                    opacity="1" data-original="#ffe0b2" class=""></circle>
                                                <path fill="#dfc49c"
                                                    d="M17 0a8.056 8.056 0 0 0-1.5.145 8 8 0 0 1 0 15.71A8 8 0 1 0 17 0z"
                                                    opacity="1" data-original="#dfc49c" class=""></path>
                                                <path fill="#f5f5f5"
                                                    d="M24.81 16.97A28.647 28.647 0 0 1 21.25 26H20.2L19 20l1-4h1a7.9 7.9 0 0 1 3.81.97z"
                                                    opacity="1" data-original="#f5f5f5"></path>
                                                <path fill="#f44335" d="M20.2 26h-6.4l1.2-6h4z" opacity="1"
                                                    data-original="#f44335"></path>
                                                <path fill="#f5f5f5"
                                                    d="m15 20-1.2 6h-1.05a28.647 28.647 0 0 1-3.56-9.03A7.9 7.9 0 0 1 13 16h1z"
                                                    opacity="1" data-original="#f5f5f5"></path>
                                                <path fill="#607d8b"
                                                    d="M12.75 26H5v-2a7.974 7.974 0 0 1 4.19-7.03A28.647 28.647 0 0 0 12.75 26zM29 24v2h-7.75a28.647 28.647 0 0 0 3.56-9.03A7.974 7.974 0 0 1 29 24z"
                                                    opacity="1" data-original="#607d8b"></path>
                                                <path fill="#37474f"
                                                    d="M24.81 16.97a33.265 33.265 0 0 1-.53 2.081A7.947 7.947 0 0 1 26 24v2h3v-2a7.974 7.974 0 0 0-4.19-7.03z"
                                                    opacity="1" data-original="#37474f"></path>
                                                <path fill="#f44335" d="m20 16-1 4h-4l-1-4z" opacity="1"
                                                    data-original="#f44335"></path>
                                                <path fill="#ffdc00"
                                                    d="M52 39a3 3 0 0 1-3 3v3a2 2 0 0 1-2 2H11a2 2 0 0 1-2-2v-3a3 3 0 0 1 0-6v-3a2 2 0 0 1 2-2h36a2 2 0 0 1 2 2v3a3 3 0 0 1 3 3z"
                                                    opacity="1" data-original="#ffdc00"></path>
                                                <path fill="#fec108"
                                                    d="M49 36v-3a2 2 0 0 0-2-2h-3a2 2 0 0 1 2 2v3a3 3 0 0 1 0 6v3a2 2 0 0 1-2 2h3a2 2 0 0 0 2-2v-3a3 3 0 0 0 0-6z"
                                                    opacity="1" data-original="#fec108"></path>
                                                <rect width="24" height="18" x="31" fill="#9e9e9e"
                                                    rx="2" opacity="1" data-original="#9e9e9e"></rect>
                                                <path fill="#707070"
                                                    d="M53 0h-3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h3a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"
                                                    opacity="1" data-original="#707070"></path>
                                                <path fill="#7f8e94" d="M40 18h6v4h-6z" opacity="1"
                                                    data-original="#7f8e94"></path>
                                                <circle cx="43" cy="9" r="3" fill="#f5f5f5"
                                                    opacity="1" data-original="#f5f5f5"></circle>
                                                <path fill="#9e9e9e" d="M37 26v-2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2z"
                                                    opacity="1" data-original="#9e9e9e"></path>
                                                <path fill="#707070" d="M47 22h-3a2 2 0 0 1 2 2v2h3v-2a2 2 0 0 0-2-2z"
                                                    opacity="1" data-original="#707070"></path>
                                            </g>
                                            <g fill="#000">
                                                <path
                                                    d="M57 26h-6v-1a3 3 0 0 0-3-3v-2h6a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H34a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h6v2a3 3 0 0 0-3 3v1h-6v-1a9.007 9.007 0 0 0-7.53-8.869 9 9 0 1 0-10.94 0A9.007 9.007 0 0 0 5 25v1H3a3 3 0 0 0-3 3v28a3 3 0 0 0 3 3h2a3 3 0 0 0 3-3v-3h44v3a3 3 0 0 0 3 3h2a3 3 0 0 0 3-3V29a3 3 0 0 0-3-3zm-23-8a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h20a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1zm12 2v2h-4v-2zm-7 5a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v1H39zm-10 0v1h-5.009a29.9 29.9 0 0 0 2.452-6.4A6.99 6.99 0 0 1 29 25zm-4.347-6.474a28.355 28.355 0 0 1-2.718 7.049l-.911-4.551L21.78 18H22c.91 0 1.812.179 2.653.526zM11 9a7 7 0 1 1 7 7 7.008 7.008 0 0 1-7-7zm5.82 13h2.36l.8 4h-3.96zm-.539-4h3.438l-.5 2h-2.438zM14 18h.22l.756 3.024-.911 4.551a28.355 28.355 0 0 1-2.718-7.049A6.955 6.955 0 0 1 14 18zm-7 7a6.99 6.99 0 0 1 2.557-5.4 29.9 29.9 0 0 0 2.452 6.4H7zM6 57a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-3h4zm52 0a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3h4zm0-5H2V29a1 1 0 0 1 1-1h54a1 1 0 0 1 1 1z"
                                                    fill="#000000" opacity="1" data-original="#000000"></path>
                                                <path
                                                    d="M51 36.126V34a3 3 0 0 0-3-3H12a3 3 0 0 0-3 3v2.126a4 4 0 0 0 0 7.748V46a3 3 0 0 0 3 3h36a3 3 0 0 0 3-3v-2.126a4 4 0 0 0 0-7.748zM50 42a1 1 0 0 0-1 1v3a1 1 0 0 1-1 1H12a1 1 0 0 1-1-1v-3a1 1 0 0 0-1-1 2 2 0 1 1 0-4 1 1 0 0 0 1-1v-3a1 1 0 0 1 1-1h36a1 1 0 0 1 1 1v3a1 1 0 0 0 1 1 2 2 0 1 1 0 4z"
                                                    fill="#000000" opacity="1" data-original="#000000"></path>
                                                <path
                                                    d="M28 35a1 1 0 0 0-1 1v3h-2v-3a1 1 0 0 0-2 0v8a1 1 0 0 0 2 0v-3h2v3a1 1 0 0 0 2 0v-8a1 1 0 0 0-1-1zM34 35h-2a1 1 0 0 0-1 1v8a1 1 0 0 0 2 0v-3h1a1 1 0 0 1 1 1v2a1 1 0 0 0 2 0v-2a2.981 2.981 0 0 0-.78-2A2.987 2.987 0 0 0 34 35zm0 4h-1v-2h1a1 1 0 0 1 0 2zM44 14a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm0-6a2 2 0 1 1 0 4 2 2 0 0 1 0-4z"
                                                    fill="#000000" opacity="1" data-original="#000000"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">My HR</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link mx-3 mt-2" href="hr-dashboard.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link mx-3 mt-2" href="task.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Tasks</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link mx-3 mt-2" href="evaluation.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Evaluation</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link mx-3 mt-2" href="attendance-leave.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Attendace & Leave</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link mx-3 mt-2" href="notice-board.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Notice Board</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link mx-3 mt-2" href="incentive-bonuse.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Incentive & Bonus</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link mx-3 mt-2">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" x="0"
                                    y="0" viewBox="0 0 513.874 513.874" style="enable-background: new 0 0 512 512"
                                    xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M340.8 216.137c2.4-17.6 2.4-35.2-.8-52.8l33.6-21.6-20.8-47.2-38.4 10.4c-10.4-14.4-23.2-27.2-38.4-36.8l8.8-39.2-48-19.2-20 34.4c-17.6-2.4-35.2-2.4-52.8.8l-21.6-33.6-48 21.6 10.4 38.4c-14.4 10.4-27.2 23.2-36.8 38.4l-39.2-8.8-19.2 48 34.4 20c-2.4 17.6-2.4 35.2.8 52.8l-33.6 21.6 21.6 47.2 38.4-9.6c10.4 14.4 23.2 27.2 38.4 36.8l-8.8 39.2 48 19.2 20-34.4c17.6 2.4 35.2 2.4 52.8-.8l21.6 33.6 47.2-20.8-9.6-40c14.4-10.4 27.2-23.2 36.8-38.4l39.2 8.8 19.2-48-35.2-20z"
                                            fill="#fdbf5e" data-original="#fdbf5e" class=""></path>
                                        <circle cx="192" cy="192.14" r="92.8" fill="#ffffff"
                                            data-original="#ffffff" class=""></circle>
                                        <path
                                            d="m252.8 390.537 137.6-137.6c30.4 9.6 64.8 1.6 89.6-22.4 24-24 31.2-58.4 22.4-89.6l-69.6 69.6-59.2-59.2 69.6-69.6c-30.4-9.6-64.8-1.6-89.6 22.4-24 24-31.2 58.4-22.4 89.6l-138.4 137.6c-30.4-9.6-64.8-1.6-89.6 22.4-24 24-31.2 58.4-22.4 89.6l69.6-69.6 59.2 59.2-69.6 69.6c30.4 9.6 64.8 1.6 89.6-22.4 24.8-24.8 32-59.2 23.2-89.6z"
                                            fill="#ffffff" data-original="#ffffff" class=""></path>
                                        <path
                                            d="m340.8 365.737 24.8-25.6-126.4-126.4 2.4-22.4-69.6-44-24.8 24.8 44 70.4 23.2-3.2z"
                                            fill="#ffffff" data-original="#ffffff" class=""></path>
                                        <path
                                            d="M396.8 344.937v-12.8c0-8.8-10.4-12.8-16.8-7.2l-54.4 54.4c-6.4 6.4-1.6 16.8 7.2 16.8h12c8 0 16 2.4 22.4 7.2l2.4 2.4c8 8 11.2 18.4 10.4 28l1.6 1.6 53.6 53.6c14.4 14.4 38.4 14.4 53.6 0 15.2-15.2 15.2-38.4 0-53.6l-53.6-53.6-1.6-1.6c-9.6.8-20-2.4-28-10.4l-2.4-2.4c-4.8-6.4-6.4-14.4-6.4-22.4z"
                                            fill="#f16051" data-original="#f16051"></path>
                                        <path
                                            d="M437.6 372.137h-4c-8 .8-16-2.4-21.6-8-.8-.8-1.6-1.6-1.6-2.4-4-4.8-5.6-10.4-5.6-17.6v-12.8c0-4.8-1.6-9.6-4.8-12.8-6.4-6.4-18.4-7.2-24.8 0l-9.6 10.4-20-20 47.2-47.2c8 1.6 16 3.2 24 3.2 26.4 0 50.4-10.4 68.8-28.8 25.6-25.6 34.4-62.4 24-97.6l-4-12.8-73.6 73.6-48-48 73.6-73.6-12.8-4c-8.8-2.4-18.4-4-28-4-20.8 0-40.8 6.4-57.6 19.2l-1.6-4-40 10.4c-9.6-12-20-22.4-32-31.2l8.8-40-60.8-24-20.8 35.2c-15.2-1.6-30.4-1.6-44.8.8l-23.2-34.4-60 26.4 10.4 40c-12 9.6-22.4 20-31.2 32l-40-8.8-24 60.8 35.2 20.8c-1.6 15.2-1.6 30.4.8 44.8l-34.4 22.4 26.4 60 40-10.4c9.6 12 20 22.4 32 31.2l-7.2 32.8c-21.6 24.8-28.8 59.2-19.2 91.2l4 12.8 73.6-73.6 48 48-73.6 73.6 12.8 4c8.8 2.4 18.4 4 28 4 26.4 0 50.4-10.4 68.8-28.8 24-24 33.6-59.2 25.6-92.8l48-48 20 20-8.8 8.8c-4.8 4.8-6.4 12.8-4 19.2 2.4 6.4 8.8 11.2 16.8 11.2h12.8c6.4 0 12.8 1.6 17.6 5.6.8.8 1.6.8 2.4 1.6 6.4 5.6 8.8 13.6 8 21.6v4l57.6 57.6c8.8 8.8 20 13.6 32 13.6s24-4.8 32.8-13.6c17.6-17.6 18.4-47.2 0-64.8l-58.4-56.8zm-11.2-285.6-64.8 64.8 71.2 71.2 64.8-64.8c3.2 24.8-5.6 49.6-23.2 67.2-15.2 15.2-36 24-57.6 24-8 0-16-.8-24-3.2l-4.8-1.6-53.6 53.6-48-48 53.6-53.6-1.6-4.8c-8.8-28.8-.8-60 20-81.6 15.2-15.2 36-24 57.6-24 4 0 7.2 0 10.4.8zm-348.8 189.6-3.2-4.8-36.8 9.6-15.2-35.2 32-20.8-.8-5.6c-3.2-16.8-4-33.6-.8-50.4l.8-5.6-32.8-19.2 13.6-35.2 37.6 8 3.2-4.8c9.6-14.4 20.8-26.4 34.4-36l4.8-3.2-9.6-36.8 35.2-15.2 20.8 32 5.6-.8c16-3.2 33.6-4 50.4-.8l5.6.8 19.2-32.8 35.2 13.6-8 37.6 4.8 3.2c14.4 9.6 26.4 20.8 36 34.4l3.2 4.8 30.4-8c-20 24-27.2 55.2-19.2 85.6l-47.2 47.2-27.2-27.2 2.4-24-80-49.6-35.2 34.4 50.4 79.2 24.8-3.2 27.2 26.4-47.2 47.2c-8-1.6-16-3.2-24-3.2-19.2 0-37.6 5.6-53.6 16l4.8-21.6-4.8-3.2c-15.2-7.2-27.2-19.2-36.8-32.8zm165.6 112 1.6 4.8c8.8 28.8.8 60-20 81.6-15.2 15.2-36 24-57.6 24-3.2 0-6.4 0-9.6-.8l64.8-64.8-71.2-71.2-64.8 64.8c-3.2-24.8 5.6-49.6 23.2-67.2 15.2-15.2 36-24 57.6-24 8 0 16 .8 24 3.2l4.8 1.6 54.4-54.4 48 48-55.2 54.4zm-25.6-157.6-22.4 3.2-37.6-60 16-16 60 37.6-2.4 21.6 123.2 123.2-13.6 13.6-123.2-123.2zm265.6 252c-11.2 11.2-31.2 11.2-42.4 0l-52-52c0-11.2-4.8-22.4-12.8-30.4l-3.2-3.2c-7.2-5.6-16.8-8.8-28-8.8h-12c-.8 0-1.6 0-1.6-.8v-1.6l8.8-8.8 36.8-36.8 8.8-8.8c.8-.8 1.6-.8 2.4 0l.8.8v12.8c0 10.4 3.2 20 9.6 28 .8.8 1.6 2.4 3.2 3.2 8 8 19.2 12.8 30.4 12.8l52 52c11.2 11.2 11.2 30.4-.8 41.6z"
                                            fill="#193651" data-original="#193651" class=""></path>
                                        <path d="M230.426 336.958h16v16h-16z"
                                            transform="rotate(-134.999 238.426 344.96)" fill="#193651"
                                            data-original="#193651" class=""></path>
                                        <path d="M337.587 230.246h16v16h-16z"
                                            transform="rotate(-45.001 345.586 238.251)" fill="#193651"
                                            data-original="#193651" class=""></path>
                                    </g>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Setting</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link mx-3 mt-2" href="configuration.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Configuration</span>
                            </a>
                        </div>
                    </div>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link mx-3 mt-2" href="profile.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Profile</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="aside-footer flex-column-auto pt-5 pb-7 px-5" id="kt_aside_footer">
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <a href="{{ route('admin.logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
                class="btn btn-custom btn-primary w-100" data-bs-toggle="tooltip" data-bs-trigger="hover"
                data-bs-dismiss-="click" title="If You Click Then Your Account Will Be Log Out">
                <span class="btn-label">Logout <i class="fa-solid fa-arrow-right-from-bracket ps-3"></i></span>

                <span class="svg-icon btn-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <path opacity="0.3"
                            d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z"
                            fill="currentColor" />
                        <rect x="7" y="17" width="6" height="2" rx="1" fill="currentColor" />
                        <rect x="7" y="12" width="10" height="2" rx="1" fill="currentColor" />
                        <rect x="7" y="7" width="6" height="2" rx="1" fill="currentColor" />
                        <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
                    </svg>
                </span>
            </a>
        </form>
    </div>
</div> --}}
