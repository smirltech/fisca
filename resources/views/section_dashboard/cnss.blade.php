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
                    class="my-6 text-xl font-semibold text-gray-700 dark:text-gray-200"
                >
                    <a href="{{ route('index') }}">Dashboard</a>/<a href="{{ route('cnss') }}" class="text-green-500">cnss</a>
                </h2>

                <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                    <!-- personal Card -->

                    <a href="{{ route('cnss.create') }}">
                        <div
                            class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                        >
                            <div
                                class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
                            >
                                <div class="flex justify-center w-5 h-5">
                                    <span class="material-symbols-outlined">add</span>
                                </div>
                            </div>
                            <div>
                                <p
                                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                                >
                                    Add
                                </p>
                            </div>
                        </div>
                    </a>
                    <!-- cnss Card -->
                    <a href="{{ route('cnss_all_download') }}">
                        <div
                            class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                        >
                            <div
                                class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500"
                            >
                                <div class="flex justify-center w-5 h-5">
                                    <span class="material-symbols-outlined">download</span>
                                </div>
                            </div>
                            <div>
                                <p
                                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                                >
                                    Download
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </main>
    </div>
</div>
</body>
</html>
