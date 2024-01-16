<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
@extends('App.app')
@section('title', 'Home')
<link rel="stylesheet" href="{{ asset('assets/css/tailwind2.css')}}">
<link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
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
                            <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">Employee Information</h1>
                            <p class="text-gray-600 dark:text-gray-300 mb-6">Fill all the fillable field below.</p>

                            <form action="{{ route('employees.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="flex flex-wrap gap-6 mt-4">
                                    <div class="flex-col w-1/3">
                                        <!-- order number -->
                                        <div class="">
                                            <label class="text-gray-700 dark:text-gray-200" for="order_number">Order number</label>
                                            <input
                                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-indigo-500 dark:focus:border-indigo-500 focus:outline-none focus:ring"
                                                type="text"
                                                name="order_number"
                                                id="order_number"
                                                value="{{ old('order_number') }}"
                                                placeholder="Order number"
                                                autofocus
                                            />
                                            @error('order_number')
                                            <p class="text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <!-- First Name -->
                                        <div class="">
                                            <label class="text-gray-700 dark:text-gray-200" for="first_name">First Name</label>
                                            <input
                                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-indigo-500 dark:focus:border-indigo-500 focus:outline-none focus:ring"
                                                type="text"
                                                name="first_name"
                                                id="first_name"
                                                value="{{ old('first_name') }}"
                                                placeholder="First Name"
                                                required
                                                autofocus
                                            />
                                            @error('first_name')
                                            <p class="text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- Last Name -->
                                        <div>
                                            <label class="text-gray-700 dark:text-gray-200" for="last_name">Last Name</label>
                                            <input
                                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-indigo-500 dark:focus:border-indigo-500 focus:outline-none focus:ring"
                                                type="text"
                                                name="last_name"
                                                id="last_name"
                                                value="{{ old('last_name') }}"
                                                placeholder="Last Name"
                                                required
                                                autofocus
                                            />
                                            @error('last_name')
                                            <p class="text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- Middle Name -->
                                        <div>
                                            <label class="text-gray-700 dark:text-gray-200" for="middle_name">Middle Name</label>
                                            <input
                                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-indigo-500 dark:focus:border-indigo-500 focus:outline-none focus:ring"
                                                type="text"
                                                name="middle_name"
                                                id="middle_name"
                                                value="{{ old('middle_name') }}"
                                                placeholder="Middle Name"
                                                required
                                                autofocus
                                            />
                                            @error('middle_name')
                                            <p class="text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- Email -->
                                        <div>
                                            <label class="text-gray-700 dark:text-gray-200" for="email">Email</label>
                                            <input
                                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-indigo-500 dark:focus:border-indigo-500 focus:outline-none focus:ring"
                                                type="email"
                                                name="email"
                                                id="email"
                                                value="{{ old('email') }}"
                                                placeholder="Email"
                                                required
                                                autofocus
                                            />
                                            @error('email')
                                            <p class="text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- Phone Number -->
                                        <div>
                                            <label class="text-gray-700 dark:text-gray-200" for="phone_number">Phone Number</label>
                                            <input
                                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-indigo-500 dark:focus:border-indigo-500 focus:outline-none focus:ring"
                                                type="text"
                                                name="phone_number"
                                                id="phone_number"
                                                value="{{ old('phone_number') }}"
                                                placeholder="eg. 097 0012 457"
                                                required
                                                autofocus
                                            />
                                            @error('email')
                                            <p class="text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- Commune -->
                                        <div>
                                            <label class="text-gray-700 dark:text-gray-200" for="commune">Commune</label>
                                            <input
                                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-indigo-500 dark:focus:border-indigo-500 focus:outline-none focus:ring"
                                                type="text"
                                                name="commune"
                                                id="commune"
                                                placeholder="Commune"
                                                required
                                                autofocus
                                            />
                                        </div>
                                    </div>

                                    <div class="flex-col w-1/3">
                                        <!-- Base Salary -->
                                        <div>
                                            <label class="text-gray-700 dark:text-gray-200" for="base_salary">Base Salary</label>
                                            <input
                                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-indigo-500 dark:focus:border-indigo-500 focus:outline-none focus:ring"
                                                type="number"
                                                name="base_salary"
                                                id="base_salary"
                                                placeholder="Base Salary"
                                                required
                                                autofocus
                                            />
                                        </div>

                                        <!-- Daily rate -->
                                        <div>
                                            <label class="text-gray-700 dark:text-gray-200" for="hourly_rate">Hourly rate</label>
                                            <input
                                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-indigo-500 dark:focus:border-indigo-500 focus:outline-none focus:ring"
                                                type="number"
                                                name="hourly_rate"
                                                id="hourly_rate"
                                                placeholder="Hourly rate"
                                                required
                                                autofocus
                                            />
                                        </div>

                                        <!-- Tow thirds paid days -->
                                        <div>
                                            <label class="text-gray-700 dark:text-gray-200" for="two_thirds_paid_days">Tow thirds paid days</label>
                                            <input
                                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-indigo-500 dark:focus:border-indigo-500 focus:outline-none focus:ring"
                                                type="number"
                                                name="two_thirds_paid_days"
                                                id="two_thirds_paid_days"
                                                placeholder="Two thirds paid days"
                                                autofocus
                                            />
                                        </div>

                                        <!-- Number of dependant children -->
                                        <div>
                                            <label class="text-gray-700 dark:text-gray-200" for="number_of_dependant_children">Dependant Childre</label>
                                            <input
                                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-indigo-500 dark:focus:border-indigo-500 focus:outline-none focus:ring"
                                                type="number"
                                                name="number_of_dependant_children"
                                                id="number_of_dependant_children"
                                                placeholder="number of dependant children"
                                                required
                                                autofocus
                                            />
                                        </div>
                                    </div>

                                    <div class="flex-col w-1/3">
                                        <!-- Gender -->
                                        <div>
                                            <label class="text-gray-700 dark:text-gray-200" for="gender">Gender</label>
                                            <select
                                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-indigo-500 dark:focus:border-indigo-500 focus:outline-none focus:ring"
                                                name="gender"
                                                id="gender"
                                            >
                                                <option value="">Choose the gender</option>
                                                <option value="M">M</option>
                                                <option value="F">F</option>
                                            </select>
                                        </div>

                                        <!-- Department -->
                                        <div>
                                            <label class="text-gray-700 dark:text-gray-200" for="department">Department</label>
                                            <select
                                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-indigo-500 dark:focus:border-indigo-500 focus:outline-none focus:ring"
                                                name="department"
                                                id="department"
                                            >
                                                <option value="">Choose the department</option>
                                                <option value="DRH">DRH</option>
                                            </select>
                                        </div>

                                        <!-- Payed -->
                                        <div>
                                            <label class="text-gray-700 dark:text-gray-200" for="payed">Payed</label>
                                            <select
                                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-indigo-500 dark:focus:border-indigo-500 focus:outline-none focus:ring"
                                                name="payed"
                                                id="payed"
                                            >
                                                <option value="0">Choose an option default(Not)</option>
                                                <option value="1">Yes</option>
                                                <option value="0">Not</option>
                                            </select>
                                        </div>

                                        <!-- Photo -->
                                        <div>
                                            <label class="text-gray-700 dark:text-gray-200" for="photo">Photo</label>
                                            <input
                                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-indigo-500 dark:focus:border-indigo-500 focus:outline-none focus:ring"
                                                type="file"
                                                name="photo"
                                                id="photo"
                                                required
                                                autofocus
                                            />
                                        </div>

                                    </div>


                                    <!-- Button -->
                                    <div class="w-full">
                                        <button
                                            class="block px-4 py-2 text-white transition-colors duration-200 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500"
                                            type="submit"
                                        >
                                            Submit
                                        </button>
                                    </div>
                                </div>





                                <div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-[1500px]">

                                    <div class="group-data-[sidebar-size=lg]:ltr:lg:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:lg:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:lg:ml-vertical-menu-sm group-data-[sidebar-size=sm]:lg:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_1)] px-6 group-data-[layout=horizontal]:!mx-auto group-data-[layout=horizontal]:max-w-screen-2xl  group-data-[layout=horizontal]:lg:pt-[calc(theme('spacing.header')_*_1.75)] ">
                                        <div class="container-fluid">

                                            <div class="md:flex items-center justify-between pt-6 pb-5">
                                                <div>
                                                    <h6 class="mb-0 text-16 uppercase font-semibold dark:text-white">Form Wizard</h6>
                                                </div>
                                                 
                                            </div>
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12">
                                                    <div class="card dark:bg-zink-700">
                                                        <div class="card-body">
                                                            <div id="basic-example" class="basic-wizard dark:text-white">
                                                                <!-- Seller Details -->

                                                                <h3 class="dark:text-white">Seller Details</h3>
                                                                <section>
                                                                    <form>
                                                                        <div class="grid grid-cols-12 gap-x-5">
                                                                            <div class="col-span-12 md:col-span-6">
                                                                                <div class="mb-3">
                                                                                    <label for="basicpill-firstname-input" class="block font-medium text-13 text-gray-600 mb-2 dark:text-zink-200">First Name</label>
                                                                                    <input type="text" class="dark:bg-transparent dark:border-zink-50 dark:placeholder:text-zink-200 w-full border py-2 px-3 placeholder:text-gray-600 rounded border-gray-400 placeholder:text-13 focus:border focus:border-gray-400 focus:ring-0 focus:outline-none text-gray-600 dark:text-zink-200" id="basicpill-firstname-input" placeholder="Enter your First name">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-span-12 md:col-span-6">
                                                                                <div class="mb-3">
                                                                                    <label for="basicpill-lastname-input" class="block font-medium text-13 text-gray-600 mb-2 dark:text-zink-200">Last Name</label>
                                                                                    <input type="text" class="dark:bg-transparent dark:border-zink-50 dark:placeholder:text-zink-200 w-full border py-2 px-3 placeholder:text-gray-600 rounded border-gray-400 placeholder:text-13 focus:border focus:border-gray-400 focus:ring-0 focus:outline-none text-gray-600 dark:text-zink-200" id="basicpill-lastname-input" placeholder="Enter your Last Name">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid grid-cols-12 gap-x-5">
                                                                            <div class="col-span-12 md:col-span-6">
                                                                                <div class="mb-3">
                                                                                    <label for="basicpill-phoneno-input" class="block font-medium text-13 text-gray-600 mb-2 dark:text-zink-200">Phone</label>
                                                                                    <input type="text" class="dark:bg-transparent dark:border-zink-50 dark:placeholder:text-zink-200 w-full border py-2 px-3 placeholder:text-gray-600 rounded border-gray-400 placeholder:text-13 focus:border focus:border-gray-400 focus:ring-0 focus:outline-none text-gray-600 dark:text-zink-200" id="basicpill-phoneno-input" placeholder="Enter your Phone Number">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-span-12 md:col-span-6">
                                                                                <div class="mb-3">
                                                                                    <label for="basicpill-email-input" class="block font-medium text-13 text-gray-600 mb-2 dark:text-zink-200">Email</label>
                                                                                    <input type="email" class="dark:bg-transparent dark:border-zink-50 dark:placeholder:text-zink-200 w-full border py-2 px-3 placeholder:text-gray-600 rounded border-gray-400 placeholder:text-13 focus:border focus:border-gray-400 focus:ring-0 focus:outline-none text-gray-600 dark:text-zink-200" id="basicpill-email-input" placeholder="Enter your email address">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid grid-cols-12 gap-x-5">
                                                                            <div class="col-span-12">
                                                                                <div class="mb-3">
                                                                                    <label for="basicpill-address-input" class="block font-medium text-13 text-gray-600 mb-2 dark:text-zink-200">Address</label>
                                                                                    <textarea id="basicpill-address-input" class="dark:bg-transparent dark:border-zink-50 dark:placeholder:text-zink-200 w-full border py-2 px-3 placeholder:text-gray-600 rounded border-gray-400 placeholder:text-13 focus:border focus:border-gray-400 focus:ring-0 focus:outline-none text-gray-600 dark:text-zink-200" grids="2" placeholder="Enter your Address"></textarea>
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
