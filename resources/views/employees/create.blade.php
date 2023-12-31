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
            <div class="container px-2 mx-auto">
                <form action="{{ route('employees.store') }}" method="post">
                    @csrf
                    <div class="flex flex-wrap gap-6 mt-4">
                        <div class="flex-col w-1/3">
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
                </form>
            </div>
        </main>
    </div>
</div>
</body>
</html>
