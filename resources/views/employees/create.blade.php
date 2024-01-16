<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
@extends('App.app')
@section('title', 'Home')
<link rel="stylesheet" href="{{ asset('assets/css/tailwind2.css')}}">
<link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
<script src="https://cdn.tailwindcss.com"></script>
<!-- Layout config Js -->
<script src="{{asset('assets/js/pages/layout.js')}}"></script>
<!-- Icons CSS -->

<!-- Tailwind CSS -->

<body>
<div
    class="flex h-screen bg-gray-50 dark:bg-gray-900"
    :class="{ 'overflow-hidden': isSideMenuOpen }"
>
    @include('App.sidebar')
    <div class="flex flex-col flex-1 w-full">

        @include('App.header')
        <main class="h-full overflow-y-auto">
            <div class="container px-2 mx-auto">

                @if($errors->any())
{{--                    @dd($errors->all())--}}
                    @foreach($errors->all() as $error)
                        <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif
                <div class="{{--bg-gray-100 dark:bg-gray-800 --}}transition-colors duration-300">
                    <div class="container mx-auto p-4">
                        <div class="bg-white dark:bg-gray-700 shadow rounded-lg p-6">

                            <form action="{{ route('employees.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-[1500px]">

                                    <div class="group-data-[sidebar-size=lg]:ltr:lg:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:lg:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:lg:ml-vertical-menu-sm group-data-[sidebar-size=sm]:lg:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_1)] px-6 group-data-[layout=horizontal]:!mx-auto group-data-[layout=horizontal]:max-w-screen-2xl  group-data-[layout=horizontal]:lg:pt-[calc(theme('spacing.header')_*_1.75)] ">
                                        <div class="container-fluid">

                                            <div class="md:flex items-center justify-between pt-6 pb-5">
                                                <div>
                                                    <h6 class="mb-0 text-16 uppercase font-semibold dark:text-white">Employee Information</h6>
                                                </div>

                                            </div>
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12">
                                                    <div class="card dark:bg-zink-700">
                                                        <div class="card-body">
                                                            <div id="basic-example" class="basic-wizard dark:text-white">
                                                                <h3 class="dark:text-white">Worker identification</h3>
                                                                <section>
                                                                    <form>
                                                                        <div class="grid grid-cols-12 gap-x-5">
                                                                            <div class="col-span-12 md:col-span-6">
                                                                                <div class="mb-3">
                                                                                    <label for="order_number" class="block font-medium text-13 text-gray-600 mb-2 dark:text-zink-200">Order number</label>
                                                                                    <input  class="dark:bg-transparent dark:border-zink-50 dark:placeholder:text-zink-200 w-full border py-2 px-3 placeholder:text-gray-600 rounded border-gray-400 placeholder:text-13 focus:border focus:border-gray-400 focus:ring-0 focus:outline-none text-gray-600 dark:text-zink-200"
                                                                                            type="text"
                                                                                            id="order_number"
                                                                                            name="order_number"
                                                                                            value="{{old('order_number')}}"
                                                                                            placeholder="Enter your Order number"
                                                                                            autofocus
                                                                                    />
                                                                                    @error('order_number')
                                                                                    <p class="block font-medium text-13 text-gray-600 mb-2 dark:text-zink-200">{{ $message }}</p>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                            @php
                                                                                $required = '<sub class="text-red-700">*</sub>';
                                                                            @endphp
                                                                            <div class="col-span-12 md:col-span-6">
                                                                                <div class="mb-3">
                                                                                    <label for="first_name" class="block font-medium text-13 text-gray-600 mb-2 dark:text-zink-200"> First Name {!! $required !!}</label>
                                                                                    <input class="dark:bg-transparent dark:border-zink-50 dark:placeholder:text-zink-200 w-full border py-2 px-3 placeholder:text-gray-600 rounded border-gray-400 placeholder:text-13 focus:border focus:border-gray-400 focus:ring-0 focus:outline-none text-gray-600 dark:text-zink-200"
                                                                                           type="text"
                                                                                           id="first_name"
                                                                                           name="first_name"
                                                                                           value="{{old('first_name')}}"
                                                                                           required
                                                                                           autofocus
                                                                                           placeholder="Enter your First Name"
                                                                                    />
                                                                                    @error('first_name')
                                                                                        <p class="block font-medium text-13 text-gray-600 mb-2 dark:text-zink-200">{{ $message }}</p>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid grid-cols-12 gap-x-5">
                                                                            <div class="col-span-12 md:col-span-6">
                                                                                <div class="mb-3">
                                                                                    <label for="last_name" class="block font-medium text-13 text-gray-600 mb-2 dark:text-zink-200">Last Name {!! $required !!}</label>
                                                                                    <input type="text" class="dark:bg-transparent dark:border-zink-50 dark:placeholder:text-zink-200 w-full border py-2 px-3 placeholder:text-gray-600 rounded border-gray-400 placeholder:text-13 focus:border focus:border-gray-400 focus:ring-0 focus:outline-none text-gray-600 dark:text-zink-200"
                                                                                           id="last_name"
                                                                                           name="last_name"
                                                                                           required
                                                                                           value="{{ old('last_name') }}"
                                                                                           autofocus
                                                                                           placeholder="Enter your Last Number"
                                                                                    />
                                                                                    @error('last_name')
                                                                                    <p class="block font-medium text-13 text-gray-600 mb-2 dark:text-zink-200">{{ $message }}</p>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-span-12 md:col-span-6">
                                                                                <div class="mb-3">
                                                                                    <label for="middle_name" class="block font-medium text-13 text-gray-600 mb-2 dark:text-zink-200">Middle Name {!! $required !!}</label>
                                                                                    <input  class="dark:bg-transparent dark:border-zink-50 dark:placeholder:text-zink-200 w-full border py-2 px-3 placeholder:text-gray-600 rounded border-gray-400 placeholder:text-13 focus:border focus:border-gray-400 focus:ring-0 focus:outline-none text-gray-600 dark:text-zink-200"
                                                                                           type="text"
                                                                                           name="middle_name"
                                                                                           id="middle_name"
                                                                                           value="{{ old('middle_name') }}"
                                                                                           placeholder="Middle Name"
                                                                                           required
                                                                                           autofocus
                                                                                    />
                                                                                    @error('middle_name')
                                                                                        <p class="block font-medium text-13 text-gray-600 mb-2 dark:text-zink-200">{{ $message }}</p>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid grid-cols-12 gap-x-5">
                                                                            <div class="col-span-12 md:col-span-6">
                                                                                <div class="mb-3">
                                                                                    <label for="email" class="block font-medium text-13 text-gray-600 mb-2 dark:text-zink-200">Email {!! $required !!}</label>
                                                                                    <input class="dark:bg-transparent dark:border-zink-50 dark:placeholder:text-zink-200 w-full border py-2 px-3 placeholder:text-gray-600 rounded border-gray-400 placeholder:text-13 focus:border focus:border-gray-400 focus:ring-0 focus:outline-none text-gray-600 dark:text-zink-200"
                                                                                           type="email"
                                                                                           name="email"
                                                                                           id="email"
                                                                                           value="{{ old('email') }}"
                                                                                           placeholder="Email"
                                                                                           required
                                                                                           autofocus
                                                                                    />
                                                                                    @error('middle_name')
                                                                                        <p class="block font-medium text-13 text-gray-600 mb-2 dark:text-zink-200">{{ $message }}</p>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-span-12 md:col-span-6">
                                                                                <div class="mb-3">
                                                                                    <label for="phone_number" class="block font-medium text-13 text-gray-600 mb-2 dark:text-zink-200">Phone {!! $required !!}</label>
                                                                                    <input class="dark:bg-transparent dark:border-zink-50 dark:placeholder:text-zink-200 w-full border py-2 px-3 placeholder:text-gray-600 rounded border-gray-400 placeholder:text-13 focus:border focus:border-gray-400 focus:ring-0 focus:outline-none text-gray-600 dark:text-zink-200"
                                                                                           type="number"
                                                                                           name="phone_number"
                                                                                           id="phone_number"
                                                                                           value="{{ old('phone_number') }}"
                                                                                           placeholder="eg. 097 0012 457"
                                                                                           required
                                                                                           autofocus
                                                                                    />
                                                                                    @error('phone_number')
                                                                                        <p class="block font-medium text-13 text-gray-600 mb-2 dark:text-zink-200">{{ $message }}</p>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid grid-cols-12 gap-x-5">
                                                                            <div class="col-span-12 md:col-span-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="gender" class="block font-medium text-13 text-gray-600 mb-2 dark:text-zink-200">Gender {!! $required !!}</label>
                                                                                        <select class="text-gray-700 rounded border-gray-400 dark:bg-zink-700 dark:text-zink-200 dark:border-zink-50  dark:placeholder:text-zink-200 w-full border py-2 px-3 "
                                                                                                name="gender"
                                                                                                id="gender"
                                                                                        >
                                                                                            <option selected>Gender</option>
                                                                                            <option value="m">M</option>
                                                                                            <option value="f">F</option>
                                                                                        </select>
                                                                                    </div>
                                                                            </div>
                                                                            <div class="col-span-12 md:col-span-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="gender" class="block font-medium text-13 text-gray-600 mb-2 dark:text-zink-200">Choose the department {!! $required !!}</label>
                                                                                        <select class="text-gray-700 rounded border-gray-400 dark:bg-zink-700 dark:text-zink-200 dark:border-zink-50  dark:placeholder:text-zink-200 w-full border py-2 px-3 "
                                                                                                name="gender"
                                                                                                id="gender"
                                                                                        >
                                                                                            <option selected>Department</option>
                                                                                            <option value="drh">DRH</option>
                                                                                        </select>
                                                                                    </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="grid grid-cols-12 gap-x-5">
                                                                            <div class="col-span-12 md:col-span-6">
                                                                                <div class="mb-3">
                                                                                    <label for="number_of_dependant_children" class="block font-medium text-13 text-gray-600 mb-2 dark:text-zink-200">Dependant children {!! $required !!}</label>
                                                                                    <input  class="dark:bg-transparent dark:border-zink-50 dark:placeholder:text-zink-200 w-full border py-2 px-3 placeholder:text-gray-600 rounded border-gray-400 placeholder:text-13 focus:border focus:border-gray-400 focus:ring-0 focus:outline-none text-gray-600 dark:text-zink-200"
                                                                                            type="number"
                                                                                            name="number_of_dependant_children"
                                                                                            id="number_of_dependant_children"
                                                                                            placeholder="number of dependant children"
                                                                                            value="{{ old('number_of_dependant_children') }}"
                                                                                            required
                                                                                            autofocus
                                                                                    />
                                                                                    @error('number_of_dependant_children')
                                                                                    <p class="block font-medium text-13 text-gray-600 mb-2 dark:text-zink-200">{{ $message }}</p>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-span-12 md:col-span-6">
                                                                                <div class="mb-3">
                                                                                    <label for="photo" class="block font-medium text-13 text-gray-600 mb-2 dark:text-zink-200">Upload picture employee {!! $required !!}</label>
                                                                                    <input class="dark:bg-transparent dark:border-zink-50 dark:placeholder:text-zink-200 w-full border py-2 px-3 rounded border-gray-400 placeholder:text-13 focus:border focus:border-gray-400 focus:ring-0 focus:outline-none text-gray-600 dark:text-zink-200"
                                                                                           type="file"
                                                                                           name="photo"
                                                                                           id="photo"
                                                                                           required
                                                                                           autofocus
                                                                                    />
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="grid grid-cols-12 gap-x-5">
                                                                            <div class="col-span-12">
                                                                                <div class="mb-3">
                                                                                    <label for="address" class="block font-medium text-13 text-gray-600 mb-2 dark:text-zink-200">Address</label>
                                                                                    <textarea id="address" class="dark:bg-transparent dark:border-zink-50 dark:placeholder:text-zink-200 w-full border py-2 px-3 placeholder:text-gray-600 rounded border-gray-400 placeholder:text-13 focus:border focus:border-gray-400 focus:ring-0 focus:outline-none text-gray-600 dark:text-zink-200" grids="2"
                                                                                              placeholder="Enter your Address"
                                                                                              name="address"
                                                                                              required
                                                                                              autofocus
                                                                                    >
                                                                                    </textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </section>
                                                            </div>

                                                        </div>
                                                        <!-- end card body -->
                                                    </div>
                                                    <!-- end card -->
                                                </div>
                                                <!-- end col -->
                                            </div>
                                        </div>
                                    </div>
                                </div>






                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>


<script src="{{ asset('assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{ asset('assets/libs/metismenujs/metismenujs.min.js')}}"></script>
<script src="{{ asset('assets/libs/%40popperjs/core/umd/popper.min.js')}}"></script>
<script src="{{ asset('assets/js/pages/plugins.js')}}"></script>
<script src="{{ asset('assets/libs/jquery-steps/build/jquery.steps.min.js')}}"></script>

<!-- form wizard init -->
<script src="{{ asset('assets/js/pages/form-wizard.init.js')}}"></script>

<!-- App js -->
<script src="{{asset('assets/js/app.js')}}"></script>

</body>
</html>
