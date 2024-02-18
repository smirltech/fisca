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
        <main class="h-full overflow-y-auto ">
            <div class="container px-6 mx-auto grid ">
                <h2
                    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
                >
                    Dashboard
                </h2>

                <!-- Cards -->
                <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                    <!-- personal Card -->

                    <a href="{{ route('personal') }}">
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
                    </a>
                    <!-- cnss Card -->
                    <a href="{{ route('cnss') }}">
                        <div
                        class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                    >
                        <div
                            class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500"
                        >
                            <div class="flex justify-center w-5 h-5">
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
                    </a>
                    <!-- onem Card -->
                    <a href="{{ route('onem') }}">
                        <div
                        class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                    >
                        <div
                            class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500"
                        >
                            <div class="flex justify-center w-5 h-5">
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
                    </a>

                </div>
                <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                    <!-- ipr Card -->
                    <a href="{{ route('ipr') }}">
                        <div
                        class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                    >
                        <div
                            class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500"
                        >
                            <div class="flex justify-center w-5 h-5" >
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
                    </a>
                    <!-- ifre Card -->
                    <a href="{{ route('ifre') }}">
                        <div
                        class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                    >
                        <div
                            class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500"
                        >
                            <div class="flex justify-center w-5 h-5">
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
                    </a>
                    <!-- inpp Card -->
                    <a href="{{ route('inpp') }}">
                        <div
                        class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                    >
                        <div
                            class="flex items-center  p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500"
                        >
                            <div class="flex justify-center w-5 h-5">
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
                    </a>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html>
