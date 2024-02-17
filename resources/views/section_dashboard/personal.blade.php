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
                   Dashboard/<a href="{{ route('index') }}" class="text-blue-500">Personal</a>
                </h2>

                <div class="w-full overflow-hidden rounded-lg shadow-xs">
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
                                        {{--                                     {{'$' . Number::format($employee->base_salary)}}--}}
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
                                        {{--                                        Route::get('/test/employee/{employee_id}/bulletin', [\App\Http\Controllers\EmployeeBulletinController::class, 'index'])->name('test');--}}

                                        {{--                                        <a href="{{ route('test', ['employee_id' => $employee->id]) }}">--}}
                                        {{--                                            <button--}}
                                        {{--                                                class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple">--}}
                                        {{--                                                OverTime ,Bullltin--}}
                                        {{--                                            </button>--}}
                                        {{--                                        </a>--}}
                                    </td>
                                    <td>
                                    </td>
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
                </div>


            </div>
        </main>
    </div>
</div>
</body>
</html>




