<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
@extends('App.app')
@section('title', 'Home')
<body>
<div
    class="flex h-screen bg-gray-50 dark:bg-gray-900"
    :class="{ 'overflow-hidden': isSideMenuOpen }"
>
    @include('App.sidebar')
    <div class="flex flex-col flex-1 w-full">

    @include('App.header')
        <main class="h-full overflow-y-auto">
            <div class="container px-6 mx-auto grid">
                <h2
                    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
                >
                    Dashboard
                </h2>

                <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                    <!-- Card -->
                    <div
                        class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                    >
                        <div
                            class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
                        >
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                                ></path>
                            </svg>
                        </div>
                        <div>
                            <p
                                class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                            >
                                PERSONNELS
                            </p>
                        </div>
                    </div>
                    <!-- Card -->
                    <div
                        class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                    >
                        <div
                            class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500"
                        >
                            <div class="w-5 h-5">
                                <span class="material-symbols-outlined">security</span>
                            </div>
                        </div>
                        <div>
                            <p
                                class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                            >
                                CNSS
                            </p>
                        </div>
                    </div>
                    <!-- Card -->
                    <div
                        class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                    >
                        <div
                            class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500"
                        >
                            <div class="w-5 h-5">
                                <span class="material-symbols-outlined">sell</span>
                            </div>
                        </div>
                        <div>
                            <p
                                class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                            >
                                ONEM
                            </p>
                        </div>
                    </div>

                </div>
                <!-- Cards -->
                <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                    <!-- Card -->
                    <div
                        class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                    >
                        <div
                            class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500"
                        >
                            <div class="w-5 h-5" >
                                <span class="material-symbols-outlined">balance</span>
                            </div>
                        </div>
                        <div>
                            <p
                                class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                            >
                                IPR
                            </p>
                        </div>
                    </div>
                    <!-- Card -->
                    <div
                        class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                    >
                        <div
                            class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500"
                        >
                            <div class="w-5 h-5">
                                <span class="material-symbols-outlined">groups</span>
                            </div>
                        </div>
                        <div>
                            <p
                                class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                            >
                                IFRE
                            </p>
                        </div>
                    </div>
                    <!-- Card -->
                    <div
                        class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                    >
                        <div
                            class="flex items-center  p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500"
                        >
                            <div class="w-5 h-5">
                                <span class="material-symbols-outlined">account_balance</span>
                            </div>
                        </div>
                        <div>
                            <p
                                class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                            >
                                INPP
                            </p>
                        </div>
                    </div>
                </div>

                <!-- New Table -->
                {{--<div class="w-full overflow-hidden rounded-lg shadow-xs">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full whitespace-no-wrap">
                            <thead>
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                            >
                                <th class="px-4 py-3">Employee</th>
                                <th class="px-4 py-3">Salary</th>
                                <th class="px-4 py-3">Email</th>
                                <th class="px-4 py-3">Payed</th>
                                <th class="px-4 py-3">Phone Number</th>
                                <th class="px-4 py-3">Action</th>
                            </tr>
                            </thead>

                            <tbody
                                class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                            >
                            @foreach($employees as $employee)
                                <tr class="text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <!-- Avatar with inset shadow -->
                                            <div
                                                class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                            >
                                                <img
                                                    class="object-cover w-full h-full rounded-full"
                                                    src="{{ $employee->photo }}"
                                                    alt=""
                                                    loading="lazy"
                                                />
                                                <div
                                                    class="absolute inset-0 rounded-full shadow-inner"
                                                    aria-hidden="true"
                                                ></div>
                                            </div>
                                            <div>
                                                <a href="{{ route('salary.details', ['employee_id' => $employee->id]) }}">
                                                    <p class="font-semibold">{{ $employee->first_name . " " . $employee->last_name. " ". $employee->middle_name }}</p>
                                                </a>
                                                <p class="text-xs text-gray-600 dark:text-gray-400">
                                                    {{ $employee->department }}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{'$' . Number::format($employee->base_salary)}}
                                    </td>
                                    <td class="px-4 py-3 text-xs">
                                        <span
                                            class="px-4 py-3 text-sm"
                                        >
                                          {{ $employee->email }}
                                        </span>
                                    </td>
                                    <td class='px-4 py-3 text-sm'>
                                        <div class="flex justify-center w-8 p-1">
                                            @if($employee->payed)
                                                <span class="material-symbols-outlined text-green-500">
                                                check
                                                </span>
                                            @else
                                                <span class="material-symbols-outlined text-red-800">
                                                pending
                                                </span>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $employee->phone_number }}
                                    </td>
                                    <td class="px-4 py-4 flex justify-between">
                                        <a href="{{route('salary.details', ['employee_id' => $employee->id]  )}}">
                                            <button
                                                class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                                Details
                                            </button>
                                        </a>
--}}{{--                                        Route::get('/test/employee/{employee_id}/bulletin', [\App\Http\Controllers\EmployeeBulletinController::class, 'index'])->name('test');--}}{{--

--}}{{--                                        <a href="{{ route('test', ['employee_id' => $employee->id]) }}">--}}{{--
--}}{{--                                            <button--}}{{--
--}}{{--                                                class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple">--}}{{--
--}}{{--                                                OverTime ,Bullltin--}}{{--
--}}{{--                                            </button>--}}{{--
--}}{{--                                        </a>--}}{{--
                                    </td>
                                --}}{{--<td>
                                </td>--}}{{--
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div
                        class="px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
                    >
                        <div>{{ $employees->links() }}</div>

                        <!-- Pagination -->
                    </div>
                </div>--}}


            </div>
        </main>
    </div>
</div>
</body>
</html>
