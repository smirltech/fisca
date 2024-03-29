<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
@extends('flowbite.app')
@section('title', 'CNSS')
<body>
<div
    class="flex h-screen bg-gray-50 dark:bg-gray-900"
    :class="{ 'overflow-hidden': isSideMenuOpen }"
>
    @include('App.sidebar')
    <div class="flex flex-col flex-1 w-full">

        @include('App.header')
        <main class="h-full overflow-y-auto">
            <div class="mt-1">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                             role="alert">
                            <span class="block sm:inline">{{ $error }}</span>
                        </div>
                    @endforeach

                @endif
                <!-- component -->
                <div class="{{--bg-gray-100 dark:bg-gray-800 --}}transition-colors duration-300">
                    <div class="container mx-auto p-4">
                        <h2
                            class="mb-8 text-xl font-semibold text-gray-700 dark:text-gray-200"
                        >
                            <a href="{{ route('index') }}">Dashboard</a>/<a href="{{ route('cnss') }}">cnss</a>/<a href="{{ route('cnss.create') }}" class="text-green-500">create</a>
                        </h2>
                        <div class="bg-white dark:bg-gray-700 shadow rounded-lg p-6">
                            <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">Cnss Information</h1>
                            <p class="text-gray-600 dark:text-gray-300 mb-6">Fill all the fillable field below.</p>
                            <form action="{{ route('cnss.store') }}" method="post">
                                @csrf
                                <div class="mb-4">
                                    <select name="employee_id" class="border p-2 rounded w-full"
                                            aria-label="emplyee id">
                                        <option value="{{ $default->id ?? '' }}">{{ $default->full_name ?? 'Default' }}</option>
                                        @foreach($employees as $employee)
                                            <option value="{{ $employee->id }}">{{ $employee->first_name . " " . $employee->last_name. " ". $employee->middle_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <input name="social_security_number" type="text" aria-label="social security number"
                                           placeholder="Social security number" class="border p-2 rounded w-full"
                                           value="{{ old('social_security_number') }}">
                                </div>
                                <div class="mb-4">
                                    <select name="type_of_worker" class="border p-2 rounded w-full"
                                            aria-label="type_of_worker">
                                        <option>Type of Worker</option>
                                        <option value="1">Travailleur</option>
                                        <option value="2">Assimile</option>
                                    </select>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                    <input name="contributed_amount" type="number" placeholder="Contributed amount"
                                           class="border p-2 rounded w-full" aria-label="contributed_amount"
                                           value="{{ old('contributed_amount') }}">
                                    <input name="number_of_workdays" type="number" placeholder="Number of work days"
                                           class="border p-2 rounded w-full" aria-label="number_of_workdays"
                                           value="{{ old('number_of_workdays') }}">
                                </div>
                                <div class="mb-4">
                                    <input name="number_of_work_hours" type="number" placeholder="Number of work hours"
                                           class="border p-2 rounded w-full" aria-label="number_of_work_hours"
                                           value="{{ old('number_of_work_hours') }}">
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                                    <input name="gross_taxable_amount" type="number" placeholder="Gross taxable amount"
                                           class="border p-2 rounded w-full" aria-label="gross_taxable_amount"
                                           value="{{ old('gross_taxable_amount') }}">

                                    <input name="contributed_period" type="date" placeholder="Gross taxable amount"
                                           class="border p-2 rounded w-full" aria-label="contributed_period"
                                           value="{{ old('contributed_period') }}">
                                </div>
                                <button type="submit" id="submit"
                                        class="px-4 py-2 rounded bg-blue-500 text-white hover:bg-blue-600 focus:outline-none transition-colors">
                                    Submit
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html>
