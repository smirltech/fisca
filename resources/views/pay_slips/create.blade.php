<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
@extends('App.app')
@section('title', 'Pay Slip')
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
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <span class="block sm:inline">{{ $error }}</span>
                        </div>
                    @endforeach

                @endif
                <!-- component -->
                <div class="{{--bg-gray-100 dark:bg-gray-800 --}}transition-colors duration-300">
                    <div class="container mx-auto p-4">
                        <div class="bg-white dark:bg-gray-700 shadow rounded-lg p-6">
                            <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">Payslip Information</h1>
                            <p class="text-gray-600 dark:text-gray-300 mb-6">Fill all the fillable field below.</p>
                            <form action="{{ route('pay_slips.store', ['employee_id' => $employee_id]) }}" method="post">
                                @csrf
                                <div class="mb-4">
                                    <input name="cost_of_living_allowance" type="text" aria-label="cost_of_living_allowance" placeholder="cost of living allowance" class="border p-2 rounded w-full" value="{{ old('cost_of_living_allowance') }}">
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                    <input name="bonus" type="number" placeholder="bonus" class="border p-2 rounded w-full" aria-label="bonus" value="{{ old('bonus') }}">
                                    <input name="gratuity" type="number" placeholder="gratuity" class="border p-2 rounded w-full" aria-label="gratuity" value="{{ old('gratuity') }}">
                                </div>
                                <div class="mb-4">
                                    <input name="leave_allowance" type="number" placeholder="leave allowance" class="border p-2 rounded w-full" aria-label="leave_allowance" value="{{ old('leave_allowance') }}">
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                                    <input name="commission" type="number" placeholder="commission" class="border p-2 rounded w-full" aria-label="commission" value="{{ old('commission') }}">

                                    <input name="other_allowances" type="number" placeholder="other allowances" class="border p-2 rounded w-full" aria-label="other_allowances" value="{{ old('other_allowances') }}">
                                </div>
                                <div class="mb-4">
                                        <textarea name="fringe_benefit" type="text" placeholder="fringe benefit" class="border p-2 rounded w-full" aria-label="fringe_benefit" rows="4"> </textarea>
                                </div>
                                <button type="submit" id="submit" class="px-4 py-2 rounded bg-blue-500 text-white hover:bg-blue-600 focus:outline-none transition-colors">
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
