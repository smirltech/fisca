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
                <div class="container px-2 mx-auto grid">
                    <form action="{{ route('employees.store') }}" method="post">
                        @csrf
                    </form>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
