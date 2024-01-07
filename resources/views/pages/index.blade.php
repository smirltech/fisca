<!DOCTYPE html>
<html lang="en" class="light scroll-smooth group" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" dir="ltr">


<!-- Mirrored from themesbrand.com/skote-tailwincss/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jan 2024 08:04:24 GMT -->
<head>

    <meta charset="utf-8">
    <title>Dashboard | Skote - Tailwind Admin & Dashboard Template </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Skote Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- Layout config Js -->
    <script src="assets/js/pages/layout.js"></script>
    <!-- Icons CSS -->

    <!-- Tailwind CSS -->


  <link rel="stylesheet" href="assets/css/tailwind2.css">
</head>

<body class="text-base text-body-color font-poppins bg-body dark:text-white dark:bg-zink-800 ">
 <div class="group-data-[sidebar-size=sm]:min-h-[1500px] group-data-[sidebar-size=sm]:relative">

    <div class="vertical-menu">
        <div id="sidebar" class="sidebar-left hidden lg:block w-vertical-menu bg-vertical-menu ltr:border-r rtl:border-l border-vertical-menu fixed bottom-0 top-0 transition-all duration-200 ease-linear group-data-[sidebar-size=md]:w-vertical-menu-md group-data-[sidebar-size=sm]:w-vertical-menu-sm group-data-[sidebar=dark]:bg-vertical-menu-dark group-data-[sidebar=dark]:border-vertical-menu-dark group-data-[sidebar=brand]:bg-vertical-menu-brand group-data-[sidebar=brand]:border-vertical-menu-brand group-data-[layout=horizontal]:w-full group-data-[layout=horizontal]:bottom-auto group-data-[layout=horizontal]:top-header z-40 ">
            <div class="flex items-center justify-center px-6 text-center h-header group-data-[layout=horizontal]:hidden sidebar-logo">
                <a href="index.html" class="group-data-[sidebar=dark]:hidden group-data-[sidebar=brand]:hidden">
                    <span class="hidden group-data-[sidebar-size=sm]:block">
                        <img src="assets/images/logo.svg" alt="" class="h-[19px] mx-auto">
                    </span>
                    <span class="group-data-[sidebar-size=sm]:hidden">
                        <img src="assets/images/logo-dark.png" alt="" class="h-[19px] mx-auto">
                    </span>
                </a>
                <a href="index.html" class="hidden group-data-[sidebar=dark]:block group-data-[sidebar=brand]:block">
                    <span class="hidden group-data-[sidebar-size=sm]:block">
                        <img src="assets/images/logo-light.svg" alt="" class="h-[19px] mx-auto">
                    </span>
                    <span class="group-data-[sidebar-size=sm]:hidden">
                        <img src="assets/images/logo-light.png" alt="" class="h-[19px] mx-auto">
                    </span>
                </a>
                <button type="button" class="hidden p-0 float-end" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl">
                    <div data-simplebar class="group-data-[layout=vertical]:group-data-[sidebar-size=md]:max-h-[calc(100vh_-_80px)] group-data-[layout=vertical]:group-data-[sidebar-size=lg]:max-h-[calc(100vh_-_80px)]" id="data-simplebar"> <!-- data-simple bar remove data-sidebar-sm -->
                        <!-- style="display: inline-flex; min-width: max-content; overflow: hidden;" -->
                        <div id="sidebar-menu" class="">
                            <!-- MENU -->
                            <ul class="group-data-[layout=horizontal]:flex group-data-[layout=vertical]:mt-[10px]">
                                <li class="px-5 py-3  group-data-[layout=vertical]:text-[#6a7187] uppercase font-semibold text-[11px] cursor-default tracking-wider group-data-[sidebar-size=sm]:hidden group-data-[layout=horizontal]:hidden inline-block group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:underline group-data-[sidebar-size=md]:text-center"><span data-key="t-menu">Menu</span></li>
                                <li class="nav-items">
                                    <div class="group-data-[sidebar-size=sm]:py-4  group-data-[sidebar-size=sm]:px-5 py-[10px] px-6  flex items-center justify-between group-data-[layout=vertical]:text-vertical-menu-item-font-size font-normal transition-all duration-150 ease-linear rounded-sm  group-data-[layout=vertical]:text-vertical-menu-item  active:text-vertical-menu active:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:group-data-[layout=vertical]:text-vertical-menu-item-dark group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar=dark]:active:bg-vertical-menu-item-bg-active-dark group-data-[sidebar-size=md]:block  group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0 ">
                                        <a href="#!" class="relative w-full before:content-['\f0140'] before:font-material ltr:before:right-0 rtl:before:left-0 before:text-16 before:absolute group-data-[sidebar-size=sm]:before:hidden  group-data-[sidebar-size=md]:before:hidden mm-collaps group-data-[sidebar-size=lg]:flex group-data-[sidebar-size=lg]:items-center group-data-[layout=horizontal]:ltr:before:-right-5 group-data-[layout=horizontal]:rtl:before:lg:!-left-6 group-data-[layout=horizontal]:rtl:before:!left-0 group-data-[layout=horizontal]:rtl:before:!right-auto whitespace-nowrap flex items-center">
                                            <i class="bx bx-home-circle inline-block text-start text-xl group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[layout=horizontal]:text-15"></i>
                                            <span class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10  group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mt-2  group-data-[sidebar-size=md]:text-center ltr:pl-3 rtl:pr-3 group-data-[layout=horizontal]:pl-2 group-data-[layout=horizontal]:rtl:pr-2" data-key="t-dashboards">Dashboards</span>
                                        </a>
                                    </div>
                                    <div class="sub-navmenu group-data-[sidebar-size=sm]:ltr:left-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:right-vertical-menu-sm group-data-[layout=horizontal]:lg:drop-shadow-2xl  group-data-[sidebar-size=sm]:absolute group-data-[sidebar-size=sm]:rounded-b-sm bg-vertical-menu group-data-[sidebar=dark]:bg-vertical-menu-dark group-data-[sidebar=brand]:bg-vertical-menu-brand group-data-[layout=horizontal]:lg:absolute group-data-[layout=horizontal]:top-full group-data-[layout=horizontal]:w-52 group-data-[layout=horizontal]:p-2 group-data-[layout=horizontal]:rounded-b-md ">
                                        <ul class="ltr:pl-[1.75rem] group-data-[sidebar-size=md]:pl-0 group-data-[sidebar-size=sm]:pl-0 group-data-[sidebar-size=sm]:py-2 group-data-[layout=horizontal]:pl-0 hidden">
                                            <li>
                                                <a href="index.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-default"> Default </a>
                                            </li>
                                            <li>
                                                <a href="dashboard-saas.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-saas"> Saas </a>
                                            </li>
                                            <li>
                                                <a href="dashboard-crypto.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-crypto"> Crypto </a>
                                            </li>
                                            <li>
                                                <a href="dashboard-blog.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-blog">Blog </a>
                                            </li>
                                            <li class="flex items-center justify-between">
                                                <a href="dashboard-job.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-jobs">Job </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- </ul>
                        // APPS
                        <ul class="group-data-[layout=horizontal]:flex"> -->
                                <li class="px-5 py-3  group-data-[layout=vertical]:text-[#6a7187] uppercase font-semibold text-[11px] cursor-default tracking-wider group-data-[sidebar-size=sm]:hidden group-data-[layout=horizontal]:hidden inline-block group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:underline group-data-[sidebar-size=md]:text-center"><span data-key="t-apps">Apps</span></li>
                                <!-- calendar -->
                                <li class="nav-items">
                                    <div class="group-data-[sidebar-size=sm]:py-4  group-data-[sidebar-size=sm]:px-5 py-[10px] px-6  flex items-center justify-between group-data-[layout=vertical]:text-vertical-menu-item-font-size font-normal transition-all duration-150 ease-linear rounded-sm  group-data-[layout=vertical]:text-vertical-menu-item  active:text-vertical-menu active:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:group-data-[layout=vertical]:text-vertical-menu-item-dark group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar=dark]:active:bg-vertical-menu-item-bg-active-dark group-data-[sidebar-size=md]:block  group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0   group-data-[sidebar-size=md]:before:hidden">
                                        <a href="calendar-full.html" class=" mm-collaps group-data-[sidebar-size=lg]:flex group-data-[sidebar-size=lg]:items-center group-data-[layout=horizontal]:ltr:before:-right-5 group-data-[layout=horizontal]:rtl:before:-left-6">
                                            <i class="bx bx-calendar  inline-block text-start text-xl group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[layout=horizontal]:text-15"></i>
                                            <span class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10 group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mt-2  group-data-[sidebar-size=md]:text-center ltr:pl-3 rtl:pr-3 group-data-[layout=horizontal]:pl-2 group-data-[layout=horizontal]:rtl:pr-2 whitespace-nowrap" data-key="t-full-calendar">Calendar</span>
                                        </a>
                                    </div>

                                </li>

                                <!-- chat -->
                                <li class="nav-items">
                                    <div class="group-data-[sidebar-size=sm]:py-4  group-data-[sidebar-size=sm]:px-5 py-[10px] px-6  flex items-center justify-between group-data-[layout=vertical]:text-vertical-menu-item-font-size font-normal transition-all duration-150 ease-linear rounded-sm  group-data-[layout=vertical]:text-vertical-menu-item  active:text-vertical-menu active:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:group-data-[layout=vertical]:text-vertical-menu-item-dark group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar=dark]:active:bg-vertical-menu-item-bg-active-dark group-data-[sidebar-size=md]:block  group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0 before:content-[''] before:font-material ltr:before:right-6 rtl:before:left-6 before:text-16 before:absolute relative  group-data-[sidebar-size=md]:before:hidden">
                                        <a href="chat.html" class="mm-collaps group-data-[sidebar-size=lg]:flex group-data-[sidebar-size=lg]:items-center group-data-[layout=horizontal]:ltr:before:-right-5 group-data-[layout=horizontal]:rtl:before:-left-6">
                                            <i class="bx bx-chat inline-block text-start text-xl group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[layout=horizontal]:text-15"></i>
                                            <span class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10 group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mt-2  group-data-[sidebar-size=md]:text-center ltr:pl-3 rtl:pr-3 group-data-[layout=horizontal]:pl-2 group-data-[layout=horizontal]:rtl:pr-2 whitespace-nowrap" data-key="t-chat">Chat</span>
                                        </a>
                                    </div>

                                </li>
                                <!-- file manager -->
                                <li class="nav-items">
                                    <div class="group-data-[sidebar-size=sm]:py-4  group-data-[sidebar-size=sm]:px-5 py-[10px] px-6  flex items-center justify-between group-data-[layout=vertical]:text-vertical-menu-item-font-size font-normal transition-all duration-150 ease-linear rounded-sm  group-data-[layout=vertical]:text-vertical-menu-item  active:text-vertical-menu active:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:group-data-[layout=vertical]:text-vertical-menu-item-dark group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar=dark]:active:bg-vertical-menu-item-bg-active-dark group-data-[sidebar-size=md]:block  group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0 before:content-[''] before:font-material ltr:before:right-6 rtl:before:left-6 before:text-16 before:absolute relative  group-data-[sidebar-size=md]:before:hidden">
                                        <a href="apps-filemanager.html" class="mm-collaps group-data-[sidebar-size=lg]:flex group-data-[sidebar-size=lg]:items-center">
                                            <i class="bx bx-file  inline-block text-start text-xl group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[layout=horizontal]:text-15"></i> <span class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10 group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mt-2  group-data-[sidebar-size=md]:text-center ltr:pl-3 rtl:pr-3 group-data-[layout=horizontal]:pl-2 group-data-[layout=horizontal]:rtl:pr-2 whitespace-nowrap" data-key="t-file-manager">File Manager</span>
                                        </a>
                                    </div>

                                </li>
                                <!-- e-commerce -->
                                <li class="nav-items">
                                    <div class="group-data-[sidebar-size=sm]:py-4  group-data-[sidebar-size=sm]:px-5 py-[10px] px-6  flex items-center justify-between group-data-[layout=vertical]:text-vertical-menu-item-font-size font-normal transition-all duration-150 ease-linear rounded-sm  group-data-[layout=vertical]:text-vertical-menu-item  active:text-vertical-menu active:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:group-data-[layout=vertical]:text-vertical-menu-item-dark group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar=dark]:active:bg-vertical-menu-item-bg-active-dark group-data-[sidebar-size=md]:block  group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0 ">
                                        <a href="#!" class="relative w-full before:content-['\f0140'] before:font-material ltr:before:right-0 rtl:before:left-0 before:text-16 before:absolute group-data-[sidebar-size=sm]:before:hidden  group-data-[sidebar-size=md]:before:hidden mm-collaps group-data-[sidebar-size=lg]:flex group-data-[sidebar-size=lg]:items-center group-data-[layout=horizontal]:ltr:before:-right-5 group-data-[layout=horizontal]:rtl:before:lg:!-left-6 group-data-[layout=horizontal]:rtl:before:!left-0 group-data-[layout=horizontal]:rtl:before:!right-auto whitespace-nowrap flex items-center">
                                            <i class="bx bx-store  inline-block text-start text-xl group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[layout=horizontal]:text-15"></i> <span class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10  group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mt-2  group-data-[sidebar-size=md]:text-center ltr:pl-3 rtl:pr-3 group-data-[layout=horizontal]:pl-2 group-data-[layout=horizontal]:rtl:pr-2" data-key="t-ecommerce">Ecommerce</span>
                                        </a>
                                    </div>
                                    <div class="sub-navmenu group-data-[sidebar-size=sm]:ltr:left-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:right-vertical-menu-sm group-data-[layout=horizontal]:lg:drop-shadow-2xl   group-data-[sidebar-size=sm]:absolute group-data-[sidebar-size=sm]:rounded-b-sm bg-vertical-menu group-data-[sidebar=dark]:bg-vertical-menu-dark group-data-[sidebar=brand]:bg-vertical-menu-brand group-data-[layout=horizontal]:lg:absolute group-data-[layout=horizontal]:top-full group-data-[layout=horizontal]:w-52 group-data-[layout=horizontal]:p-2 group-data-[layout=horizontal]:rounded-b-md">
                                        <ul class="ltr:pl-[1.75rem] group-data-[sidebar-size=md]:pl-0 group-data-[sidebar-size=sm]:pl-0 group-data-[sidebar-size=sm]:py-2 group-data-[layout=horizontal]:pl-0 hidden ">
                                            <li>
                                                <a href="ecommerce-products.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[layout=vertical]:group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13 " data-key="t-products"> Products </a>
                                            </li>
                                            <li>
                                                <a href="ecommerce-product-detail.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13 " data-key="t-Product Detail">Product Detail </a>
                                            </li>
                                            <li>
                                                <a href="ecommerce-orders.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-orders">Orders </a>
                                            </li>
                                            <li>
                                                <a href="ecommerce-customers.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-customers">Customers </a>
                                            </li>
                                            <li>
                                                <a href="ecommerce-cart.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-cart">Cart </a>
                                            </li>
                                            <li>
                                                <a href="ecommerce-checkout.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-checkout">Checkout </a>
                                            </li>
                                            <li>
                                                <a href="ecommerce-shops.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-shops">Shops </a>
                                            </li>
                                            <li>
                                                <a href="ecommerce-add-product.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-add-product">Add Product </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- crypto -->
                                <li class="nav-items">
                                    <div class="group-data-[sidebar-size=sm]:py-4  group-data-[sidebar-size=sm]:px-5 py-[10px] px-6  flex items-center justify-between group-data-[layout=vertical]:text-vertical-menu-item-font-size font-normal transition-all duration-150 ease-linear rounded-sm  group-data-[layout=vertical]:text-vertical-menu-item  active:text-vertical-menu active:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:group-data-[layout=vertical]:text-vertical-menu-item-dark group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar=dark]:active:bg-vertical-menu-item-bg-active-dark group-data-[sidebar-size=md]:block  group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0 ">
                                        <a href="#!" class="relative w-full before:content-['\f0140'] before:font-material ltr:before:right-0 rtl:before:left-0 before:text-16 before:absolute group-data-[sidebar-size=sm]:before:hidden  group-data-[sidebar-size=md]:before:hidden mm-collaps group-data-[sidebar-size=lg]:flex group-data-[sidebar-size=lg]:items-center group-data-[layout=horizontal]:ltr:before:-right-5 group-data-[layout=horizontal]:rtl:before:lg:!-left-6 group-data-[layout=horizontal]:rtl:before:!left-0 group-data-[layout=horizontal]:rtl:before:!right-auto whitespace-nowrap flex items-center">
                                            <i class="bx bx-bitcoin  inline-block text-start text-xl group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[layout=horizontal]:text-15"></i> <span class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10  group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mt-2  group-data-[sidebar-size=md]:text-center ltr:pl-3 rtl:pr-3 group-data-[layout=horizontal]:pl-2 group-data-[layout=horizontal]:rtl:pr-2" data-key="t-crypto">Crypto</span>
                                        </a>
                                    </div>
                                    <div class="sub-navmenu group-data-[sidebar-size=sm]:ltr:left-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:right-vertical-menu-sm group-data-[layout=horizontal]:lg:drop-shadow-2xl   group-data-[sidebar-size=sm]:absolute group-data-[sidebar-size=sm]:rounded-b-sm bg-vertical-menu group-data-[sidebar=dark]:bg-vertical-menu-dark group-data-[sidebar=brand]:bg-vertical-menu-brand group-data-[layout=horizontal]:lg:absolute group-data-[layout=horizontal]:top-full group-data-[layout=horizontal]:w-52 group-data-[layout=horizontal]:p-2 group-data-[layout=horizontal]:rounded-b-md">
                                        <ul class="ltr:pl-[1.75rem] group-data-[sidebar-size=md]:pl-0 group-data-[sidebar-size=sm]:pl-0 group-data-[sidebar-size=sm]:py-2 group-data-[layout=horizontal]:pl-0 hidden">
                                            <li>
                                                <a href="crypto-wallet.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-wallet"> Wallet </a>
                                            </li>
                                            <li>
                                                <a href="crypto-buy-sell.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13 " data-key="t-Product Detail">Buy/Sell </a>
                                            </li>
                                            <li>
                                                <a href="crypto-exchange.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-exchange">Exchange</a>
                                            </li>
                                            <li>
                                                <a href="crypto-lending.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-lending">Lending </a>
                                            </li>
                                            <li>
                                                <a href="crypto-orders.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-orders">Orders </a>
                                            </li>
                                            <li>
                                                <a href="crypto-kyc-application.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-kyc">KYC Application </a>
                                            </li>
                                            <li>
                                                <a href="crypto-ico-landing.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-ico">ICO Landing</a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                                <!-- email -->
                                <li class="nav-items">
                                    <div class="group-data-[sidebar-size=sm]:py-4  group-data-[sidebar-size=sm]:px-5 py-[10px] px-6  flex items-center justify-between group-data-[layout=vertical]:text-vertical-menu-item-font-size font-normal transition-all duration-150 ease-linear rounded-sm  group-data-[layout=vertical]:text-vertical-menu-item  active:text-vertical-menu active:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:group-data-[layout=vertical]:text-vertical-menu-item-dark group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar=dark]:active:bg-vertical-menu-item-bg-active-dark group-data-[sidebar-size=md]:block  group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0 ">
                                        <a href="#!" class="relative w-full before:content-['\f0140'] before:font-material ltr:before:right-0 rtl:before:left-0 before:text-16 before:absolute group-data-[sidebar-size=sm]:before:hidden  group-data-[sidebar-size=md]:before:hidden mm-collaps group-data-[sidebar-size=lg]:flex group-data-[sidebar-size=lg]:items-center group-data-[layout=horizontal]:ltr:before:-right-5 group-data-[layout=horizontal]:rtl:before:lg:!-left-6 group-data-[layout=horizontal]:rtl:before:!left-0 group-data-[layout=horizontal]:rtl:before:!right-auto whitespace-nowrap flex items-center">
                                            <i class="bx bx-envelope  inline-block text-start text-xl group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[layout=horizontal]:text-15"></i> <span class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10  group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mt-2  group-data-[sidebar-size=md]:text-center ltr:pl-3 rtl:pr-3 group-data-[layout=horizontal]:pl-2 group-data-[layout=horizontal]:rtl:pr-2" data-key="t-email">Email</span>
                                        </a>
                                    </div>
                                    <div class="sub-navmenu group-data-[sidebar-size=sm]:ltr:left-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:right-vertical-menu-sm group-data-[layout=horizontal]:lg:drop-shadow-2xl   group-data-[sidebar-size=sm]:absolute group-data-[sidebar-size=sm]:rounded-b-sm bg-vertical-menu group-data-[sidebar=dark]:bg-vertical-menu-dark group-data-[sidebar=brand]:bg-vertical-menu-brand group-data-[layout=horizontal]:lg:absolute group-data-[layout=horizontal]:top-full group-data-[layout=horizontal]:w-52 group-data-[layout=horizontal]:p-2 group-data-[layout=horizontal]:rounded-b-md">
                                        <ul class="ltr:pl-[1.75rem] group-data-[sidebar-size=md]:pl-0 group-data-[sidebar-size=sm]:pl-0 group-data-[sidebar-size=sm]:py-2 group-data-[layout=horizontal]:pl-0 hidden">
                                            <li>
                                                <a href="email-inbox.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-inbox"> Inbox </a>
                                            </li>
                                            <li>
                                                <a href="email-read.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-read-email">Read Email </a>
                                            </li>
                                            <li class="relative">
                                                <div class="group-data-[sidebar-size=sm]:py-2  group-data-[sidebar-size=sm]:px-6 py-2 px-6  flex items-center justify-between group-data-[layout=vertical]:text-vertical-menu-item-font-size font-normal transition-all duration-150 ease-linear rounded-sm  group-data-[layout=vertical]:text-vertical-menu-item  active:text-vertical-menu active:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:group-data-[layout=vertical]:text-vertical-menu-item-dark group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar=dark]:active:bg-vertical-menu-item-bg-active-dark group-data-[sidebar-size=md]:block  group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0  relative  group-data-[sidebar-size=md]:before:hidden template group-data-[layout=horizontal]:px-4">
                                                    <a href="#!" class="mm-collaps child-dropdown">
                                                        <span class=" group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mt-2  group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=lg]:rtl:pr-4" data-key="t-templates">Templates</span>
                                                    </a>
                                                </div>
                                                <div class="sub-navmenu group-data-[sidebar-size=sm]:ltr:left-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:right-vertical-menu-sm group-data-[layout=horizontal]:lg:drop-shadow-2xl   group-data-[sidebar-size=sm]:absolute group-data-[sidebar-size=sm]:rounded-b-sm bg-vertical-menu group-data-[sidebar=dark]:bg-vertical-menu-dark group-data-[sidebar=brand]:bg-vertical-menu-brand group-data-[layout=horizontal]:lg:absolute group-data-[layout=horizontal]:top-full group-data-[layout=horizontal]:w-52 group-data-[layout=horizontal]:p-2 group-data-[layout=horizontal]:rounded-b-md">
                                                    <ul class="ltr:pl-[1.75rem] group-data-[sidebar-size=md]:pl-0 group-data-[sidebar-size=sm]:pl-0 group-data-[sidebar-size=sm]:py-2 group-data-[layout=horizontal]:pl-0 hidden">
                                                        <li>
                                                            <a href="email-template-basic.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-basic-action"> Basic Action </a>
                                                        </li>
                                                        <li>
                                                            <a href="email-template-alert.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-alert-email">Alert Email </a>
                                                        </li>
                                                        <li>
                                                            <a href="email-template-billing.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-bill-email">Billing Email </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- invoice -->
                                <li class="nav-items">
                                    <div class="group-data-[sidebar-size=sm]:py-4  group-data-[sidebar-size=sm]:px-5 py-[10px] px-6  flex items-center justify-between group-data-[layout=vertical]:text-vertical-menu-item-font-size font-normal transition-all duration-150 ease-linear rounded-sm  group-data-[layout=vertical]:text-vertical-menu-item  active:text-vertical-menu active:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:group-data-[layout=vertical]:text-vertical-menu-item-dark group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar=dark]:active:bg-vertical-menu-item-bg-active-dark group-data-[sidebar-size=md]:block  group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0 ">
                                        <a href="#!" class="relative w-full before:content-['\f0140'] before:font-material ltr:before:right-0 rtl:before:left-0 before:text-16 before:absolute group-data-[sidebar-size=sm]:before:hidden  group-data-[sidebar-size=md]:before:hidden mm-collaps group-data-[sidebar-size=lg]:flex group-data-[sidebar-size=lg]:items-center group-data-[layout=horizontal]:ltr:before:-right-5 group-data-[layout=horizontal]:rtl:before:lg:!-left-6 group-data-[layout=horizontal]:rtl:before:!left-0 group-data-[layout=horizontal]:rtl:before:!right-auto whitespace-nowrap flex items-center">
                                            <i class="bx bx-receipt inline-block text-start text-xl group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[layout=horizontal]:text-15"></i> <span class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10 group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mt-2  group-data-[sidebar-size=md]:text-center ltr:pl-3 rtl:pr-3 group-data-[layout=horizontal]:pl-2 group-data-[layout=horizontal]:rtl:pr-2 whitespace-nowrap" data-key="t-invoices">Invoices</span>
                                        </a>
                                    </div>
                                    <div class="sub-navmenu group-data-[sidebar-size=sm]:ltr:left-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:right-vertical-menu-sm group-data-[layout=horizontal]:lg:drop-shadow-2xl   group-data-[sidebar-size=sm]:absolute group-data-[sidebar-size=sm]:rounded-b-sm bg-vertical-menu group-data-[sidebar=dark]:bg-vertical-menu-dark group-data-[sidebar=brand]:bg-vertical-menu-brand group-data-[layout=horizontal]:lg:absolute group-data-[layout=horizontal]:top-full group-data-[layout=horizontal]:w-52 group-data-[layout=horizontal]:p-2 group-data-[layout=horizontal]:rounded-b-md">
                                        <ul class="ltr:pl-[1.75rem] group-data-[sidebar-size=md]:pl-0 group-data-[sidebar-size=sm]:pl-0 group-data-[sidebar-size=sm]:py-2 group-data-[layout=horizontal]:pl-0 hidden">
                                            <li>
                                                <a href="invoices-list.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-invoice-list"> Invoices List </a>
                                            </li>
                                            <li>
                                                <a href="invoices-detail.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-invoice-detail">Invoice Detail </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- projects -->
                                <li class="nav-items">
                                    <div class="group-data-[sidebar-size=sm]:py-4  group-data-[sidebar-size=sm]:px-5 py-[10px] px-6  flex items-center justify-between group-data-[layout=vertical]:text-vertical-menu-item-font-size font-normal transition-all duration-150 ease-linear rounded-sm  group-data-[layout=vertical]:text-vertical-menu-item  active:text-vertical-menu active:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:group-data-[layout=vertical]:text-vertical-menu-item-dark group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar=dark]:active:bg-vertical-menu-item-bg-active-dark group-data-[sidebar-size=md]:block  group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0 ">
                                        <a href="#!" class="relative w-full before:content-['\f0140'] before:font-material ltr:before:right-0 rtl:before:left-0 before:text-16 before:absolute group-data-[sidebar-size=sm]:before:hidden  group-data-[sidebar-size=md]:before:hidden mm-collaps group-data-[sidebar-size=lg]:flex group-data-[sidebar-size=lg]:items-center group-data-[layout=horizontal]:ltr:before:-right-5 group-data-[layout=horizontal]:rtl:before:lg:!-left-6 group-data-[layout=horizontal]:rtl:before:!left-0 group-data-[layout=horizontal]:rtl:before:!right-auto whitespace-nowrap flex items-center">
                                            <i class="bx bx-briefcase-alt-2 inline-block text-start text-xl group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[layout=horizontal]:text-15"></i>
                                            <span class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10 group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mt-2  group-data-[sidebar-size=md]:text-center ltr:pl-3 rtl:pr-3 group-data-[layout=horizontal]:pl-2 group-data-[layout=horizontal]:rtl:pr-2 whitespace-nowrap" data-key="t-projects">Projects</span>
                                        </a>
                                    </div>
                                    <div class="sub-navmenu group-data-[sidebar-size=sm]:ltr:left-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:right-vertical-menu-sm group-data-[layout=horizontal]:lg:drop-shadow-2xl   group-data-[sidebar-size=sm]:absolute group-data-[sidebar-size=sm]:rounded-b-sm bg-vertical-menu group-data-[sidebar=dark]:bg-vertical-menu-dark group-data-[sidebar=brand]:bg-vertical-menu-brand group-data-[layout=horizontal]:lg:absolute group-data-[layout=horizontal]:top-full group-data-[layout=horizontal]:w-52 group-data-[layout=horizontal]:p-2 group-data-[layout=horizontal]:rounded-b-md">
                                        <ul class="ltr:pl-[1.75rem] group-data-[sidebar-size=md]:pl-0 group-data-[sidebar-size=sm]:pl-0 group-data-[sidebar-size=sm]:py-2 group-data-[layout=horizontal]:pl-0 hidden">
                                            <li>
                                                <a href="projects-grid.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-p-grid"> Projects Grids </a>
                                            </li>
                                            <li>
                                                <a href="projects-list.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-p-list">Projects List </a>
                                            </li>
                                            <li>
                                                <a href="projects-overview.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-p-overview">Projects Overview</a>
                                            </li>
                                            <li>
                                                <a href="projects-create.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-create-new">Create New</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- task -->
                                <li class="nav-items">
                                    <div class="group-data-[sidebar-size=sm]:py-4  group-data-[sidebar-size=sm]:px-5 py-[10px] px-6  flex items-center justify-between group-data-[layout=vertical]:text-vertical-menu-item-font-size font-normal transition-all duration-150 ease-linear rounded-sm  group-data-[layout=vertical]:text-vertical-menu-item  active:text-vertical-menu active:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:group-data-[layout=vertical]:text-vertical-menu-item-dark group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar=dark]:active:bg-vertical-menu-item-bg-active-dark group-data-[sidebar-size=md]:block  group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0 ">
                                        <a href="#!" class="group-data-[layout=horizontal]:ltr:before:-right-5 group-data-[layout=horizontal]:before:top-1 group-data-[layout=horizontal]:rtl:before:left-0 w-full before:content-['\f0140'] before:font-material ltr:before:right-0 rtl:before:left-0 before:text-16 before:absolute relative group-data-[sidebar-size=sm]:before:hidden group-data-[sidebar-size=md]:before:hidden mm-collaps group-data-[sidebar-size=lg]:flex group-data-[sidebar-size=lg]:items-center group-data-[layout=horizontal]:rtl:before:!mr-auto group-data-[layout=horizontal]:rtl:before:lg:!-left-6">
                                            <i class="bx bx-task inline-block text-start text-xl group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[layout=horizontal]:text-15"></i> <span class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10 group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mt-2  group-data-[sidebar-size=md]:text-center ltr:pl-3 rtl:pr-3 group-data-[layout=horizontal]:pl-2 group-data-[layout=horizontal]:rtl:pr-2 whitespace-nowrap" data-key="t-tasks">Tasks</span>
                                        </a>
                                    </div>
                                    <div class="sub-navmenu group-data-[sidebar-size=sm]:ltr:left-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:right-vertical-menu-sm group-data-[layout=horizontal]:lg:drop-shadow-2xl   group-data-[sidebar-size=sm]:absolute group-data-[sidebar-size=sm]:rounded-b-sm bg-vertical-menu group-data-[sidebar=dark]:bg-vertical-menu-dark group-data-[sidebar=brand]:bg-vertical-menu-brand group-data-[layout=horizontal]:lg:absolute group-data-[layout=horizontal]:top-full group-data-[layout=horizontal]:w-52 group-data-[layout=horizontal]:p-2 group-data-[layout=horizontal]:rounded-b-md">
                                        <ul class="ltr:pl-[1.75rem] group-data-[sidebar-size=md]:pl-0 group-data-[sidebar-size=sm]:pl-0 group-data-[sidebar-size=sm]:py-2 group-data-[layout=horizontal]:pl-0 hidden">
                                            <li>
                                                <a href="tasks-list.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-task-list"> Task List </a>
                                            </li>
                                            <li>
                                                <a href="tasks-kanban.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-kanban-board">Kanban Board </a>
                                            </li>
                                            <li>
                                                <a href="tasks-create.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-create-task">Create Task</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- contacts -->
                                <li class="nav-items">
                                    <div class="group-data-[sidebar-size=sm]:py-4  group-data-[sidebar-size=sm]:px-5 py-[10px] px-6  flex items-center justify-between group-data-[layout=vertical]:text-vertical-menu-item-font-size font-normal transition-all duration-150 ease-linear rounded-sm  group-data-[layout=vertical]:text-vertical-menu-item  active:text-vertical-menu active:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:group-data-[layout=vertical]:text-vertical-menu-item-dark group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar=dark]:active:bg-vertical-menu-item-bg-active-dark group-data-[sidebar-size=md]:block  group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none ">
                                        <a href="#!" class="group-data-[layout=horizontal]:ltr:before:right-0 group-data-[layout=horizontal]:rtl:before:left-0 w-full before:content-['\f0140'] before:font-material ltr:before:right-0 rtl:before:left-0 before:text-16 before:absolute relative group-data-[sidebar-size=sm]:before:hidden group-data-[sidebar-size=md]:before:hidden mm-collaps group-data-[sidebar-size=lg]:flex group-data-[sidebar-size=lg]:items-center group-data-[layout=horizontal]:rtl:before:!right-auto">
                                            <i class="bx bxs-user-detail  inline-block text-start text-xl group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[layout=horizontal]:text-15"></i> <span class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10 group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mt-2  group-data-[sidebar-size=md]:text-center ltr:pl-3 rtl:pr-3 group-data-[layout=horizontal]:pl-2 group-data-[layout=horizontal]:rtl:pr-2 whitespace-nowrap" data-key="t-contacts">Contacts</span>
                                        </a>
                                    </div>
                                    <div class="sub-navmenu group-data-[sidebar-size=sm]:ltr:left-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:right-vertical-menu-sm group-data-[layout=horizontal]:lg:drop-shadow-2xl   group-data-[sidebar-size=sm]:absolute group-data-[sidebar-size=sm]:rounded-b-sm bg-vertical-menu group-data-[sidebar=dark]:bg-vertical-menu-dark group-data-[sidebar=brand]:bg-vertical-menu-brand group-data-[layout=horizontal]:lg:absolute group-data-[layout=horizontal]:top-full group-data-[layout=horizontal]:w-52 group-data-[layout=horizontal]:p-2 group-data-[layout=horizontal]:rounded-b-md">
                                        <ul class="ltr:pl-[1.75rem] group-data-[sidebar-size=md]:pl-0 group-data-[sidebar-size=sm]:pl-0 group-data-[sidebar-size=sm]:py-2 group-data-[layout=horizontal]:pl-0 hidden">
                                            <li>
                                                <a href="contacts-grid.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-user-grid"> Users Grid </a>
                                            </li>
                                            <li>
                                                <a href="contacts-list.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-user-list">User List </a>
                                            </li>
                                            <li>
                                                <a href="contacts-profile.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-profile">Profile</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- blog -->
                                <li class="nav-items">
                                    <div class="group-data-[sidebar-size=sm]:py-4  group-data-[sidebar-size=sm]:px-5 py-[10px] px-6  flex items-center justify-between group-data-[layout=vertical]:text-vertical-menu-item-font-size font-normal transition-all duration-150 ease-linear rounded-sm  group-data-[layout=vertical]:text-vertical-menu-item  active:text-vertical-menu active:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:group-data-[layout=vertical]:text-vertical-menu-item-dark group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar=dark]:active:bg-vertical-menu-item-bg-active-dark group-data-[sidebar-size=md]:block  group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none ">
                                        <a href="#!" class="group-data-[layout=horizontal]:ltr:before:right-0 group-data-[layout=horizontal]:rtl:before:left-0 w-full before:content-['\f0140'] before:font-material ltr:before:right-0 rtl:before:left-0 before:text-16 before:absolute relative group-data-[sidebar-size=sm]:before:hidden group-data-[sidebar-size=md]:before:hidden mm-collaps group-data-[sidebar-size=lg]:flex group-data-[sidebar-size=lg]:items-center group-data-[layout=horizontal]:rtl:before:!right-auto">
                                            <i class="bx bx-detail  inline-block text-start text-xl group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[layout=horizontal]:text-15"></i> <span class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10 group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mt-2  group-data-[sidebar-size=md]:text-center ltr:pl-3 rtl:pr-3 group-data-[layout=horizontal]:pl-2 group-data-[layout=horizontal]:rtl:pr-2 whitespace-nowrap" data-key="t-blog">Blog</span>
                                        </a>
                                    </div>
                                    <div class="sub-navmenu group-data-[sidebar-size=sm]:ltr:left-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:right-vertical-menu-sm group-data-[layout=horizontal]:lg:drop-shadow-2xl   group-data-[sidebar-size=sm]:absolute group-data-[sidebar-size=sm]:rounded-b-sm bg-vertical-menu group-data-[sidebar=dark]:bg-vertical-menu-dark group-data-[sidebar=brand]:bg-vertical-menu-brand group-data-[layout=horizontal]:lg:absolute group-data-[layout=horizontal]:top-full group-data-[layout=horizontal]:w-52  group-data-[layout=horizontal]:rounded-b-md">
                                        <ul class="ltr:pl-[1.75rem] group-data-[sidebar-size=md]:pl-0 group-data-[sidebar-size=sm]:pl-0 group-data-[sidebar-size=sm]:py-2 group-data-[layout=horizontal]:pl-0 hidden">
                                            <li>
                                                <a href="blog-list.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-blog-list">Blog List </a>
                                            </li>
                                            <li>
                                                <a href="blog-grid.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-blog-grid">Blog Grid </a>
                                            </li>
                                            <li>
                                                <a href="blog-details.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-blog-details">Blog Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- jobs -->
                                <li class="nav-items">
                                    <div class="group-data-[sidebar-size=sm]:py-4  group-data-[sidebar-size=sm]:px-5 py-[10px] px-6  flex items-center justify-between group-data-[layout=vertical]:text-vertical-menu-item-font-size font-normal transition-all duration-150 ease-linear rounded-sm  group-data-[layout=vertical]:text-vertical-menu-item  active:text-vertical-menu active:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:group-data-[layout=vertical]:text-vertical-menu-item-dark group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar=dark]:active:bg-vertical-menu-item-bg-active-dark group-data-[sidebar-size=md]:block  group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none ">
                                        <a href="#!" class="group-data-[layout=horizontal]:ltr:before:right-0 group-data-[layout=horizontal]:rtl:before:left-0 w-full before:content-['\f0140'] before:font-material ltr:before:right-0 rtl:before:left-0 before:text-16 before:absolute relative group-data-[sidebar-size=sm]:before:hidden group-data-[sidebar-size=md]:before:hidden mm-collaps group-data-[sidebar-size=lg]:flex group-data-[sidebar-size=lg]:items-center group-data-[layout=horizontal]:rtl:before:!right-auto">
                                            <i class="bx bx-detail  inline-block text-start text-xl group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[layout=horizontal]:text-15"></i> <span class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10 group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mt-2  group-data-[sidebar-size=md]:text-center ltr:pl-3 rtl:pr-3 group-data-[layout=horizontal]:pl-2 group-data-[layout=horizontal]:rtl:pr-2 whitespace-nowrap" data-key="t-jobs">Jobs</span>
                                        </a>
                                    </div>
                                    <div class="sub-navmenu group-data-[sidebar-size=sm]:ltr:left-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:right-vertical-menu-sm group-data-[layout=horizontal]:lg:drop-shadow-2xl   group-data-[sidebar-size=sm]:absolute group-data-[sidebar-size=sm]:rounded-b-sm bg-vertical-menu group-data-[sidebar=dark]:bg-vertical-menu-dark group-data-[sidebar=brand]:bg-vertical-menu-brand group-data-[layout=horizontal]:lg:absolute group-data-[layout=horizontal]:top-full group-data-[layout=horizontal]:w-52 group-data-[layout=horizontal]:p-2 group-data-[layout=horizontal]:rounded-b-md">
                                        <ul class="ltr:pl-[1.75rem] group-data-[sidebar-size=md]:pl-0 group-data-[sidebar-size=sm]:pl-0 group-data-[sidebar-size=sm]:py-2 group-data-[layout=horizontal]:pl-0 hidden">
                                            <li>
                                                <a href="job-list.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-job-list">Job List </a>
                                            </li>
                                            <li>
                                                <a href="job-grid.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-job-grid">Job Grid </a>
                                            </li>
                                            <li>
                                                <a href="job-apply.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-apply-job">Apply Job</a>
                                            </li>
                                            <li>
                                                <a href="job-details.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-job-details">Job Details</a>
                                            </li>
                                            <li>
                                                <a href="job-categories.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-Jobs-categories">Jobs Categories </a>
                                            </li>
                                            <li class="relative">
                                                <div class="group-data-[sidebar-size=sm]:py-2  group-data-[sidebar-size=sm]:px-6 py-2 px-6  flex items-center justify-between group-data-[layout=vertical]:text-vertical-menu-item-font-size font-normal transition-all duration-150 ease-linear rounded-sm  group-data-[layout=vertical]:text-vertical-menu-item  active:text-vertical-menu active:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:group-data-[layout=vertical]:text-vertical-menu-item-dark group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar=dark]:active:bg-vertical-menu-item-bg-active-dark group-data-[sidebar-size=md]:block  group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0  relative  group-data-[sidebar-size=md]:before:hidden template">
                                                    <a href="#!" class="w-full before:content-['\f0140'] before:font-material ltr:before:right-0 rtl:before:left-0 before:text-16 before:absolute relative mm-collaps child-dropdown">
                                                        <span class=" group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mt-2  group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=lg]:rtl:pr-4" data-key="t-candidate">Candidate</span>
                                                    </a>
                                                </div>
                                                <div class="sub-navmenu group-data-[sidebar-size=sm]:ltr:left-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:right-vertical-menu-sm group-data-[layout=horizontal]:lg:drop-shadow-2xl   group-data-[sidebar-size=sm]:absolute group-data-[sidebar-size=sm]:rounded-b-sm bg-vertical-menu group-data-[sidebar=dark]:bg-vertical-menu-dark group-data-[sidebar=brand]:bg-vertical-menu-brand group-data-[layout=horizontal]:lg:absolute group-data-[layout=horizontal]:top-full group-data-[layout=horizontal]:w-52 group-data-[layout=horizontal]:p-2 group-data-[layout=horizontal]:rounded-b-md">
                                                    <ul class="ltr:pl-[1.75rem] group-data-[sidebar-size=md]:pl-0 group-data-[sidebar-size=sm]:pl-0 group-data-[sidebar-size=sm]:py-2 group-data-[layout=horizontal]:pl-0 hidden">
                                                        <li>
                                                            <a href="candidate-list.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-list"> List </a>
                                                        </li>
                                                        <li>
                                                            <a href="candidate-overview.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-overview">Overview </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                                <!-- </ul>
                        // PAGES
                        <ul class="group-data-[layout=horizontal]:flex"> -->
                                <li class="px-5 py-3  group-data-[layout=vertical]:text-[#6a7187] uppercase font-semibold text-[11px] cursor-default tracking-wider group-data-[sidebar-size=sm]:hidden group-data-[layout=horizontal]:hidden inline-block group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:underline group-data-[sidebar-size=md]:text-center"><span data-key="t-pages">Pages</span></li>
                                <li class="nav-items">
                                    <div class="group-data-[sidebar-size=sm]:py-4  group-data-[sidebar-size=sm]:px-5 py-[10px] px-6  flex items-center justify-between group-data-[layout=vertical]:text-vertical-menu-item-font-size font-normal transition-all duration-150 ease-linear rounded-sm  group-data-[layout=vertical]:text-vertical-menu-item  active:text-vertical-menu active:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:group-data-[layout=vertical]:text-vertical-menu-item-dark group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar=dark]:active:bg-vertical-menu-item-bg-active-dark group-data-[sidebar-size=md]:block  group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0 ">
                                        <a class="group-data-[layout=horizontal]:ltr:before:right-0 group-data-[layout=horizontal]:rtl:before:left-0 w-full before:content-['\f0140'] before:font-material ltr:before:right-0 rtl:before:left-0 before:text-16 before:absolute relative group-data-[sidebar-size=sm]:before:hidden group-data-[sidebar-size=md]:before:hidden mm-collaps group-data-[sidebar-size=lg]:flex group-data-[sidebar-size=lg]:items-center group-data-[layout=horizontal]:rtl:before:!right-auto" href="#!">
                                            <i class="bx bx-user-circle  inline-block text-start text-xl group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[layout=horizontal]:text-15"></i>
                                            <span class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10 group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mt-2  group-data-[sidebar-size=md]:text-center ltr:pl-3 rtl:pr-3 group-data-[layout=horizontal]:pl-2 group-data-[layout=horizontal]:rtl:pr-2 whitespace-nowrap" data-key="t-authentication">Authentication</span>
                                        </a>
                                    </div>
                                    <div class="sub-navmenu group-data-[sidebar-size=sm]:ltr:left-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:right-vertical-menu-sm group-data-[layout=horizontal]:lg:drop-shadow-2xl   group-data-[sidebar-size=sm]:absolute group-data-[sidebar-size=sm]:rounded-b-sm bg-vertical-menu group-data-[sidebar=dark]:bg-vertical-menu-dark group-data-[sidebar=brand]:bg-vertical-menu-brand group-data-[layout=horizontal]:lg:absolute group-data-[layout=horizontal]:top-full group-data-[layout=horizontal]:w-52 group-data-[layout=horizontal]:p-2 group-data-[layout=horizontal]:rounded-b-md">
                                        <ul class="ltr:pl-[1.75rem] group-data-[sidebar-size=md]:pl-0 group-data-[sidebar-size=sm]:pl-0 group-data-[sidebar-size=sm]:py-2 group-data-[layout=horizontal]:pl-0 hidden">
                                            <li>
                                                <a href="auth-login.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-login"> Login </a>
                                            </li>
                                            <li>
                                                <a href="auth-login-2.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-login-2"> Login 2 </a>
                                            </li>
                                            <li>
                                                <a href="auth-register.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-register"> Register </a>
                                            </li>
                                            <li>
                                                <a href="auth-register-2.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-register-2">Ragister 2 </a>
                                            </li>
                                            <li>
                                                <a href="auth-recoverpw.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-recover-password">Recover Password </a>
                                            </li>
                                            <li>
                                                <a href="auth-recoverpw-2.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-recover-password-2"> Recover Password 2 </a>
                                            </li>
                                            <li>
                                                <a href="auth-lock-screen.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-lock-screen">Lock Screen</a>
                                            </li>
                                            <li>
                                                <a href="auth-lock-screen-2.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-lock-screen-2">Lock Screen 2 </a>
                                            </li>
                                            <li>
                                                <a href="auth-confirm-mail.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-confirm-mail">Confirm Email </a>
                                            </li>
                                            <li>
                                                <a href="auth-confirm-mail-2.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-confirm-mail-2">Confirm Email 2 </a>
                                            </li>
                                            <li>
                                                <a href="auth-email-verification.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-email-verification">Email verification</a>
                                            </li>
                                            <li>
                                                <a href="auth-email-verification-2.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-email-verification-2">Email verification 2</a>
                                            </li>
                                            <li>
                                                <a href="auth-two-step-verification.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-two-step-verification">Two Step Verification</a>
                                            </li>
                                            <li>
                                                <a href="auth-two-step-verification-2.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-two-step-verification-2">Two Step Verification 2 </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-items">
                                    <div class="group-data-[sidebar-size=sm]:py-4 group-data-[sidebar-size=sm]:px-5 py-[10px] px-6  flex items-center justify-between group-data-[layout=vertical]:text-vertical-menu-item-font-size font-normal transition-all duration-150 ease-linear rounded-sm  group-data-[layout=vertical]:text-vertical-menu-item  active:text-vertical-menu active:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:group-data-[layout=vertical]:text-vertical-menu-item-dark group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar=dark]:active:bg-vertical-menu-item-bg-active-dark group-data-[sidebar-size=md]:block  group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0 ">
                                        <a class="group-data-[layout=horizontal]:ltr:before:right-0 group-data-[layout=horizontal]:rtl:before:left-0 w-full before:content-['\f0140'] before:font-material ltr:before:right-0 rtl:before:left-0 before:text-16 before:absolute relative group-data-[sidebar-size=sm]:before:hidden group-data-[sidebar-size=md]:before:hidden mm-collaps group-data-[sidebar-size=lg]:flex group-data-[sidebar-size=lg]:items-center group-data-[layout=horizontal]:rtl:before:!right-auto" href="#!">
                                            <i class="bx bx-file inline-block text-start text-xl group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[layout=horizontal]:text-15"></i>
                                            <span class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10  group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mt-2  group-data-[sidebar-size=md]:text-center ltr:pl-3 rtl:pr-3 group-data-[layout=horizontal]:pl-2 group-data-[layout=horizontal]:rtl:pr-2" data-key="t-utilities">Utility</span>
                                        </a>
                                    </div>
                                    <div class="sub-navmenu group-data-[sidebar-size=sm]:ltr:left-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:right-vertical-menu-sm group-data-[layout=horizontal]:lg:drop-shadow-2xl group-data-[sidebar-size=sm]:absolute group-data-[sidebar-size=sm]:rounded-b-sm bg-vertical-menu group-data-[sidebar=dark]:bg-vertical-menu-dark group-data-[sidebar=brand]:bg-vertical-menu-brand group-data-[layout=horizontal]:lg:absolute group-data-[layout=horizontal]:top-full group-data-[layout=horizontal]:w-52 group-data-[layout=horizontal]:p-2 group-data-[layout=horizontal]:rounded-b-md">
                                        <ul class="ltr:pl-[1.75rem] group-data-[sidebar-size=md]:pl-0 group-data-[sidebar-size=sm]:pl-0 group-data-[sidebar-size=sm]:py-2 group-data-[layout=horizontal]:pl-0 hidden">
                                            <li>
                                                <a href="pages-starter.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-starter-page"> Starter Page </a>
                                            </li>
                                            <li>
                                                <a href="pages-maintenance.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-maintenance"> Maintenance </a>
                                            </li>
                                            <li>
                                                <a href="pages-comingsoon.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-coming-soon"> Coming Soon </a>
                                            </li>
                                            <li>
                                                <a href="pages-timeline.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-timeline">Timeline </a>
                                            </li>
                                            <li>
                                                <a href="pages-faqs.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-faqs">FAQs </a>
                                            </li>
                                            <li>
                                                <a href="pages-pricing.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-pricing"> Pricing </a>
                                            </li>
                                            <li>
                                                <a href="pages-404.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-error-404">Error 404 </a>
                                            </li>
                                            <li>
                                                <a href="pages-500.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-error-500">Error 500 </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- </ul>
                        // COMPONENTS
                        <ul class="group-data-[layout=horizontal]:flex"> -->
                                <li class="px-5 py-3  group-data-[layout=vertical]:text-[#6a7187] uppercase font-semibold text-[11px] cursor-default tracking-wider group-data-[sidebar-size=sm]:hidden group-data-[layout=horizontal]:hidden inline-block group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:underline group-data-[sidebar-size=md]:text-center"><span data-key="t-components">Components</span></li>
                                <li class="nav-items">
                                    <div class="group-data-[sidebar-size=sm]:py-4  group-data-[sidebar-size=sm]:px-5 py-[10px] px-6  flex items-center justify-between group-data-[layout=vertical]:text-vertical-menu-item-font-size font-normal transition-all duration-150 ease-linear rounded-sm  group-data-[layout=vertical]:text-vertical-menu-item  active:text-vertical-menu active:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:group-data-[layout=vertical]:text-vertical-menu-item-dark group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar=dark]:active:bg-vertical-menu-item-bg-active-dark group-data-[sidebar-size=md]:block  group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0 ">
                                        <a class="group-data-[layout=horizontal]:ltr:before:right-0 group-data-[layout=horizontal]:rtl:before:left-0 w-full before:content-['\f0140'] before:font-material ltr:before:right-0 rtl:before:left-0 before:text-16 before:absolute relative group-data-[sidebar-size=sm]:before:hidden group-data-[sidebar-size=md]:before:hidden mm-collaps group-data-[sidebar-size=lg]:flex group-data-[sidebar-size=lg]:items-center group-data-[layout=horizontal]:rtl:before:!right-auto" href="#!">
                                            <i class="bx bx-tone inline-block text-start text-xl group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[layout=horizontal]:text-15"></i> <span class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10  group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mt-2  group-data-[sidebar-size=md]:text-center ltr:pl-3 rtl:pr-3 group-data-[layout=horizontal]:pl-2 group-data-[layout=horizontal]:rtl:pr-2" data-key="t-ui-elements">UI Elements</span>
                                        </a>
                                    </div>
                                    <div class="sub-navmenu group-data-[sidebar-size=sm]:ltr:left-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:right-vertical-menu-sm group-data-[layout=horizontal]:lg:drop-shadow-2xl   group-data-[sidebar-size=sm]:absolute group-data-[sidebar-size=sm]:rounded-b-sm bg-vertical-menu group-data-[sidebar=dark]:bg-vertical-menu-dark group-data-[sidebar=brand]:bg-vertical-menu-brand group-data-[layout=horizontal]:lg:absolute group-data-[layout=horizontal]:top-full group-data-[layout=horizontal]:w-52 group-data-[layout=horizontal]:p-2 group-data-[layout=horizontal]:rounded-b-md">
                                        <ul class="ltr:pl-[1.75rem] group-data-[sidebar-size=md]:pl-0 group-data-[sidebar-size=sm]:pl-0 group-data-[sidebar-size=sm]:py-2 group-data-[layout=horizontal]:pl-0 hidden">
                                            <li>
                                                <a href="ui-alerts.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-alerts"> Alerts </a>
                                            </li>
                                            <li>
                                                <a href="ui-buttons.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-buttons"> Buttons </a>
                                            </li>
                                            <li>
                                                <a href="ui-cards.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-cards">Cards </a>
                                            </li>
                                            <li>
                                                <a href="ui-carousel.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-carouzel">Carousel </a>
                                            </li>
                                            <li>
                                                <a href="ui-dropdowns.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-dropdowns">Dropdowns </a>
                                            </li>
                                            <li>
                                                <a href="ui-images.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-images">Images </a>
                                            </li>
                                            <li>
                                                <a href="ui-lightbox.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-lightbox">Lightbox </a>
                                            </li>
                                            <li>
                                                <a href="ui-modals.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-models">Models</a>
                                            </li>
                                            <li>
                                                <a href="ui-offcanvas.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-offcanvas">Offcanvas</a>
                                            </li>
                                            <li>
                                                <a href="ui-rangeslider.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-conft-range-slider">Range Slider </a>
                                            </li>
                                            <li>
                                                <a href="ui-progressbars.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-progress-bars">Progress Bars</a>
                                            </li>
                                            <li>
                                                <a href="ui-placeholders.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-placeholders">Placeholders</a>
                                            </li>
                                            <li>
                                                <a href="ui-sweet-alert.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-sweet-alert">Sweet-Alert</a>
                                            </li>
                                            <li>
                                                <a href="ui-tabs-accordions.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-tabs-accordions">Tabs & Accordions </a>
                                            </li>
                                            <li>
                                                <a href="ui-typography.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-typography">Typography</a>
                                            </li>
                                            <li>
                                                <a href="ui-toasts.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-toasts">Toasts</a>
                                            </li>
                                            <li>
                                                <a href="ui-video.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-video">Video</a>
                                            </li>
                                            <li>
                                                <a href="ui-general.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-general">General </a>
                                            </li>
                                            <li>
                                                <a href="ui-colors.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-colors">Colors</a>
                                            </li>
                                            <li>
                                                <a href="ui-notifications.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-notifications">Notifications</a>
                                            </li>
                                            <li>
                                                <a href="ui-utilities.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-utilities">Utilities </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-items">
                                    <div class="flex items-center justify-between ltr:pl-6 rtl:pr-6 group-data-[layout=vertical]:text-vertical-menu-item-font-size font-normal transition-all duration-150 ease-linear rounded-sm md:py-2.5 group-data-[layout=vertical]:text-vertical-menu-item  active:text-vertical-menu active:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:group-data-[layout=vertical]:text-vertical-menu-item-dark group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar=dark]:active:bg-vertical-menu-item-bg-active-dark group-data-[sidebar-size=md]:block  group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0 group-data-[layout=horizontal]:rtl:pr-6">
                                        <a class="mm-collaps group-data-[sidebar-size=lg]:flex group-data-[sidebar-size=lg]:items-center" href="#!">
                                            <i class="bx bxs-eraser inline-block text-start text-xl group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[layout=horizontal]:text-15"></i>
                                            <span class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10  group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mt-2  group-data-[sidebar-size=md]:text-center ltr:pl-3 rtl:pr-3 group-data-[layout=horizontal]:pl-2 group-data-[layout=horizontal]:rtl:pr-2" data-key="t-forms">Forms</span>
                                        </a>
                                        <p class="hidden group-data-[sidebar-size=lg]:block mr-6 bg-red-400 rounded-full px-[6px] text-white text-[9px]" data-key="t-10">
                                            10
                                        </p>
                                    </div>
                                    <div class="sub-navmenu group-data-[sidebar-size=sm]:ltr:left-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:right-vertical-menu-sm group-data-[layout=horizontal]:lg:drop-shadow-2xl group-data-[sidebar-size=sm]:absolute group-data-[sidebar-size=sm]:rounded-b-sm bg-vertical-menu group-data-[sidebar=dark]:bg-vertical-menu-dark group-data-[sidebar=brand]:bg-vertical-menu-brand group-data-[layout=horizontal]:lg:absolute group-data-[layout=horizontal]:top-full group-data-[layout=horizontal]:w-52 group-data-[layout=horizontal]:p-2 group-data-[layout=horizontal]:rounded-b-md">
                                        <ul class="ltr:pl-[1.75rem] group-data-[sidebar-size=md]:pl-0 group-data-[sidebar-size=sm]:pl-0 group-data-[sidebar-size=sm]:py-2 group-data-[layout=horizontal]:pl-0 hidden">
                                            <li>
                                                <a href="form-elements.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-form-elements">Form Elements </a>
                                            </li>
                                            <li>
                                                <a href="form-layouts.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-form-layouts"> Form Layouts </a>
                                            </li>
                                            <li>
                                                <a href="form-validation.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-form-validation">Form Validation </a>
                                            </li>
                                            <li>
                                                <a href="form-advanced.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-form-advanced">Form Advanced </a>
                                            </li>
                                            <li>
                                                <a href="form-editors.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-faqst-form-editors">Form Editors </a>
                                            </li>
                                            <li>
                                                <a href="form-uploads.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-form-upload"> Form File Upload </a>
                                            </li>
                                            <li>
                                                <a href="form-repeater.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-form-repeater">Form Repeater</a>
                                            </li>
                                            <li>
                                                <a href="form-wizard.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-form-wizard">Form Wizard</a>
                                            </li>
                                            <li>
                                                <a href="form-mask.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-form-mask">Form Mask</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-items">
                                    <div class="group-data-[sidebar-size=sm]:py-4 group-data-[sidebar-size=sm]:px-5 py-[10px] px-6 flex items-center justify-between group-data-[layout=vertical]:text-vertical-menu-item-font-size font-normal transition-all duration-150 ease-linear rounded-sm group-data-[layout=vertical]:text-vertical-menu-item  active:text-vertical-menu active:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:group-data-[layout=vertical]:text-vertical-menu-item-dark group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar=dark]:active:bg-vertical-menu-item-bg-active-dark group-data-[sidebar-size=md]:block group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0 ">
                                        <a href="#!" class="group-data-[layout=horizontal]:ltr:before:right-0 group-data-[layout=horizontal]:rtl:before:left-0 w-full before:content-['\f0140'] before:font-material ltr:before:right-0 rtl:before:left-0 before:text-16 before:absolute relative group-data-[sidebar-size=sm]:before:hidden group-data-[sidebar-size=md]:before:hidden mm-collaps group-data-[sidebar-size=lg]:flex group-data-[sidebar-size=lg]:items-center group-data-[layout=horizontal]:rtl:before:!right-auto">
                                            <i class="bx bx-list-ul inline-block text-start text-xl group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[layout=horizontal]:text-15"></i> <span class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10  group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mt-2 group-data-[sidebar-size=md]:text-center ltr:pl-3 rtl:pr-3 group-data-[layout=horizontal]:pl-2 group-data-[layout=horizontal]:rtl:pr-2" data-key="t-tables">Tables</span>
                                        </a>
                                    </div>
                                    <div class="sub-navmenu group-data-[sidebar-size=sm]:ltr:left-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:right-vertical-menu-sm group-data-[layout=horizontal]:lg:drop-shadow-2xl group-data-[sidebar-size=sm]:absolute group-data-[sidebar-size=sm]:rounded-b-sm bg-vertical-menu group-data-[sidebar=dark]:bg-vertical-menu-dark group-data-[sidebar=brand]:bg-vertical-menu-brand group-data-[layout=horizontal]:lg:absolute group-data-[layout=horizontal]:top-full group-data-[layout=horizontal]:w-52 group-data-[layout=horizontal]:p-2 group-data-[layout=horizontal]:rounded-b-md">
                                        <ul class="ltr:pl-[1.75rem] group-data-[sidebar-size=md]:pl-0 group-data-[sidebar-size=sm]:pl-0 group-data-[sidebar-size=sm]:py-2 group-data-[layout=horizontal]:pl-0 hidden">
                                            <li>
                                                <a href="tables-basic.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-basic-tables">Basic Tables </a>
                                            </li>
                                            <li>
                                                <a href="tables-datatable.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-data-tables">Data Tables </a>
                                            </li>
                                            <li>
                                                <a href="tables-editable.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-editable-table">Editable Table</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-items">
                                    <div class="group-data-[sidebar-size=sm]:py-4 group-data-[sidebar-size=sm]:px-5 py-[10px] px-6 flex items-center justify-between group-data-[layout=vertical]:text-vertical-menu-item-font-size font-normal transition-all duration-150 ease-linear rounded-sm group-data-[layout=vertical]:text-vertical-menu-item active:text-vertical-menu active:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:group-data-[layout=vertical]:text-vertical-menu-item-dark group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar=dark]:active:bg-vertical-menu-item-bg-active-dark group-data-[sidebar-size=md]:block group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0 ">
                                        <a href="#!" class="group-data-[layout=horizontal]:ltr:before:right-0 group-data-[layout=horizontal]:rtl:before:left-0 w-full before:content-['\f0140'] before:font-material ltr:before:right-0 rtl:before:left-0 before:text-16 before:absolute relative group-data-[sidebar-size=sm]:before:hidden group-data-[sidebar-size=md]:before:hidden mm-collaps group-data-[sidebar-size=lg]:flex group-data-[sidebar-size=lg]:items-center group-data-[layout=horizontal]:rtl:before:!right-auto">
                                            <i class="bx bxs-bar-chart-alt-2 inline-block text-start text-xl group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[layout=horizontal]:text-15"></i> <span class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10  group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mt-2  group-data-[sidebar-size=md]:text-center ltr:pl-3 rtl:pr-3 group-data-[layout=horizontal]:pl-2 group-data-[layout=horizontal]:rtl:pr-2" data-key="t-charts">Charts</span>
                                        </a>
                                    </div>
                                    <div class="sub-navmenu group-data-[sidebar-size=sm]:ltr:left-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:right-vertical-menu-sm group-data-[layout=horizontal]:lg:drop-shadow-2xl group-data-[sidebar-size=sm]:absolute group-data-[sidebar-size=sm]:rounded-b-sm bg-vertical-menu group-data-[sidebar=dark]:bg-vertical-menu-dark group-data-[sidebar=brand]:bg-vertical-menu-brand group-data-[layout=horizontal]:lg:absolute group-data-[layout=horizontal]:top-full group-data-[layout=horizontal]:w-52 group-data-[layout=horizontal]:p-2 group-data-[layout=horizontal]:rounded-b-md">
                                        <ul class="ltr:pl-[1.75rem] group-data-[sidebar-size=md]:pl-0 group-data-[sidebar-size=sm]:pl-0 group-data-[sidebar-size=sm]:py-2 group-data-[layout=horizontal]:pl-0 hidden">
                                            <li>
                                                <a href="charts-apex.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-apex-charts">Apex Charts </a>
                                            </li>
                                            <li>
                                                <a href="charts-echart.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-e-charts">E Charts</a>
                                            </li>
                                            <li>
                                                <a href="charts-chartjs.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-chartjs-charts">Chartjs Charts</a>
                                            </li>
                                            <li>
                                                <a href="charts-flot.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-flot-charts"> Flot Charts</a>
                                            </li>
                                            <li>
                                                <a href="charts-tui.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-ui-charts">Toast UI Charts </a>
                                            </li>
                                            <li>
                                                <a href="charts-knob.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-knob-charts">Jquery Knob Charts</a>
                                            </li>
                                            <li>
                                                <a href="charts-sparkline.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-sparkline-chartse">Sparkline Charts</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-items">
                                    <div class="group-data-[sidebar-size=sm]:py-4 group-data-[sidebar-size=sm]:px-5 py-[10px] px-6  flex items-center justify-between group-data-[layout=vertical]:text-vertical-menu-item-font-size font-normal transition-all duration-150 ease-linear rounded-sm  group-data-[layout=vertical]:text-vertical-menu-item active:text-vertical-menu active:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:group-data-[layout=vertical]:text-vertical-menu-item-dark group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar=dark]:active:bg-vertical-menu-item-bg-active-dark group-data-[sidebar-size=md]:block group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0 ">
                                        <a href="#!" class="group-data-[layout=horizontal]:ltr:before:right-0 group-data-[layout=horizontal]:rtl:before:left-0 w-full before:content-['\f0140'] before:font-material ltr:before:right-0 rtl:before:left-0 before:text-16 before:absolute relative group-data-[sidebar-size=sm]:before:hidden group-data-[sidebar-size=md]:before:hidden mm-collaps group-data-[sidebar-size=lg]:flex group-data-[sidebar-size=lg]:items-center group-data-[layout=horizontal]:rtl:before:!right-auto">
                                            <i class="bx bx-aperture inline-block text-start text-xl group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[layout=horizontal]:text-15"></i> <span class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10  group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mt-2  group-data-[sidebar-size=md]:text-center ltr:pl-3 rtl:pr-3 group-data-[layout=horizontal]:pl-2 group-data-[layout=horizontal]:rtl:pr-2" data-key="t-icons">Icons</span>
                                        </a>
                                    </div>
                                    <div class="sub-navmenu group-data-[sidebar-size=sm]:ltr:left-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:right-vertical-menu-sm group-data-[layout=horizontal]:lg:drop-shadow-2xl group-data-[sidebar-size=sm]:absolute group-data-[sidebar-size=sm]:rounded-b-sm bg-vertical-menu group-data-[sidebar=dark]:bg-vertical-menu-dark group-data-[sidebar=brand]:bg-vertical-menu-brand group-data-[layout=horizontal]:lg:absolute group-data-[layout=horizontal]:top-full group-data-[layout=horizontal]:w-52 group-data-[layout=horizontal]:p-2 group-data-[layout=horizontal]:rounded-b-md">
                                        <ul class="ltr:pl-[1.75rem] group-data-[sidebar-size=md]:pl-0 group-data-[sidebar-size=sm]:pl-0 group-data-[sidebar-size=sm]:py-2 group-data-[layout=horizontal]:pl-0 hidden">
                                            <li>
                                                <a href="icons-boxicons.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-boxicons">Boxicons </a>
                                            </li>
                                            <li>
                                                <a href="icons-materialdesign.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-material-design">Material Design</a>
                                            </li>
                                            <li>
                                                <a href="icons-dripicons.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-dripicons">Dripicons</a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-items">
                                    <div class="group-data-[sidebar-size=sm]:py-4  group-data-[sidebar-size=sm]:px-5 py-[10px] px-6 flex items-center justify-between group-data-[layout=vertical]:text-vertical-menu-item-font-size font-normal transition-all duration-150 ease-linear rounded-sm group-data-[layout=vertical]:text-vertical-menu-item active:text-vertical-menu active:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:group-data-[layout=vertical]:text-vertical-menu-item-dark group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar=dark]:active:bg-vertical-menu-item-bg-active-dark group-data-[sidebar-size=md]:block  group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0 ">
                                        <a href="#!" class="group-data-[layout=horizontal]:ltr:before:right-0 group-data-[layout=horizontal]:rtl:before:left-0 w-full before:content-['\f0140'] before:font-material ltr:before:right-0 rtl:before:left-0 before:text-16 before:absolute relative group-data-[sidebar-size=sm]:before:hidden group-data-[sidebar-size=md]:before:hidden mm-collaps group-data-[sidebar-size=lg]:flex group-data-[sidebar-size=lg]:items-center group-data-[layout=horizontal]:rtl:before:!right-auto">
                                            <i class="bx bx-map inline-block text-start text-xl group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[layout=horizontal]:text-15"></i> <span class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10  group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mt-2  group-data-[sidebar-size=md]:text-center ltr:pl-3 rtl:pr-3 group-data-[layout=horizontal]:pl-2 group-data-[layout=horizontal]:rtl:pr-2" data-key="t-maps">Maps</span>
                                        </a>
                                    </div>
                                    <div class="sub-navmenu group-data-[sidebar-size=sm]:ltr:left-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:right-vertical-menu-sm group-data-[layout=horizontal]:lg:drop-shadow-2xl group-data-[sidebar-size=sm]:absolute group-data-[sidebar-size=sm]:rounded-b-sm bg-vertical-menu group-data-[sidebar=dark]:bg-vertical-menu-dark group-data-[sidebar=brand]:bg-vertical-menu-brand group-data-[layout=horizontal]:lg:absolute group-data-[layout=horizontal]:top-full group-data-[layout=horizontal]:w-52 group-data-[layout=horizontal]:p-2 group-data-[layout=horizontal]:rounded-b-md">
                                        <ul class="ltr:pl-[1.75rem] group-data-[sidebar-size=md]:pl-0 group-data-[sidebar-size=sm]:pl-0 group-data-[sidebar-size=sm]:py-2 group-data-[layout=horizontal]:pl-0 hidden">
                                            <li>
                                                <a href="maps-google.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-g-maps">Google Maps </a>
                                            </li>
                                            <li>
                                                <a href="maps-vector.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-v-maps">Vector Maps</a>
                                            </li>
                                            <li>
                                                <a href="maps-leaflet.html" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-l-maps">Leaflet Maps</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-items">
                                    <div class="group-data-[sidebar-size=sm]:py-4  group-data-[sidebar-size=sm]:px-5 py-[10px] px-6  flex items-center justify-between group-data-[layout=vertical]:text-vertical-menu-item-font-size font-normal transition-all duration-150 ease-linear rounded-sm  group-data-[layout=vertical]:text-vertical-menu-item active:text-vertical-menu active:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:group-data-[layout=vertical]:text-vertical-menu-item-dark group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar=dark]:active:bg-vertical-menu-item-bg-active-dark group-data-[sidebar-size=md]:block group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0 ">
                                        <a href="#!" class="group-data-[layout=horizontal]:ltr:before:right-0 group-data-[layout=horizontal]:rtl:before:left-0 w-full before:content-['\f0140'] before:font-material ltr:before:right-0 rtl:before:left-0 before:text-16 before:absolute relative group-data-[sidebar-size=sm]:before:hidden group-data-[sidebar-size=md]:before:hidden mm-collaps group-data-[sidebar-size=lg]:flex group-data-[sidebar-size=lg]:items-center group-data-[layout=horizontal]:rtl:before:!right-auto">
                                            <i class="bx bx-share-alt  inline-block text-start text-xl group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[layout=horizontal]:text-15"></i> <span class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10  group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mt-2 group-data-[sidebar-size=md]:text-center ltr:pl-3 rtl:pr-3 group-data-[layout=horizontal]:pl-2 group-data-[layout=horizontal]:rtl:pr-2" data-key="t-multi-level">Multi Level</span>
                                        </a>
                                    </div>
                                    <div class="sub-navmenu group-data-[sidebar-size=sm]:ltr:left-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:right-vertical-menu-sm group-data-[layout=horizontal]:lg:drop-shadow-2xl group-data-[sidebar-size=sm]:absolute group-data-[sidebar-size=sm]:rounded-b-sm bg-vertical-menu group-data-[sidebar=dark]:bg-vertical-menu-dark group-data-[sidebar=brand]:bg-vertical-menu-brand group-data-[layout=horizontal]:lg:absolute group-data-[layout=horizontal]:top-full group-data-[layout=horizontal]:w-52 group-data-[layout=horizontal]:p-2 group-data-[layout=horizontal]:rounded-b-md">
                                        <ul class="ltr:pl-[1.75rem] group-data-[sidebar-size=md]:pl-0 group-data-[sidebar-size=sm]:pl-0 group-data-[sidebar-size=sm]:py-2 group-data-[layout=horizontal]:pl-0 hidden">
                                            <li>
                                                <a href="#!" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-level-1-1">Level 1.1 </a>
                                            </li>
                                            <li>
                                                <div class="group-data-[sidebar-size=sm]:py-4  group-data-[sidebar-size=sm]:px-5 py-[10px] px-6  flex items-center justify-between group-data-[layout=vertical]:text-vertical-menu-item-font-size font-normal transition-all duration-150 ease-linear rounded-sm  group-data-[layout=vertical]:text-vertical-menu-item  active:text-vertical-menu active:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:group-data-[layout=vertical]:text-vertical-menu-item-dark group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar=dark]:active:bg-vertical-menu-item-bg-active-dark group-data-[sidebar-size=md]:block group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0 ">
                                                    <a href="#!" class="mm-collaps child-dropdown">
                                                        <span class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10  group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mt-2 group-data-[sidebar-size=md]:text-center whitespace-nowrap" data-key="t-level-1-2">Level 1.2</span>
                                                    </a>
                                                </div>
                                                <div class="sub-navmenu group-data-[sidebar-size=sm]:ltr:left-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:right-vertical-menu-sm group-data-[layout=horizontal]:lg:drop-shadow-2xl group-data-[sidebar-size=sm]:absolute group-data-[sidebar-size=sm]:rounded-b-sm bg-vertical-menu group-data-[sidebar=dark]:bg-vertical-menu-dark group-data-[sidebar=brand]:bg-vertical-menu-brand group-data-[layout=horizontal]:lg:absolute group-data-[layout=horizontal]:top-full group-data-[layout=horizontal]:w-52 group-data-[layout=horizontal]:p-2 group-data-[layout=horizontal]:rounded-b-md">
                                                    <ul class="ltr:pl-[1.75rem] group-data-[sidebar-size=md]:pl-0 group-data-[sidebar-size=sm]:pl-0 group-data-[sidebar-size=sm]:py-2 group-data-[layout=horizontal]:pl-0 hidden">
                                                        <li>
                                                            <a href="#!" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-level-2-1"> Level 2.1 </a>
                                                        </li>
                                                        <li>
                                                            <a href="#!" class="relative flex items-center ltr:px-5 rtl:px-5 py-[6px] group-data-[layout=vertical]:text-vertical-menu-item-font-size transition-all duration-150 ease-linear text-vertical-menu-sub-item group-data-[layout=horizontal]:hover:text-gray-700 active:text-gray-700 group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark  group-data-[layout=horizontal]:group-data-[mode=dark]:lg:text-zink-200 group-data-[layout=horizontal]:group-data-[mode=dark]:lg:hover:text-whitegroup-data-[layout=horizontal]:group-data-[sidebar=dark]:text-zink-200 group-data-[layout=horizontal]:group-data-[sidebar=dark]:hover:text-zink-200  group-data-[layout=vertical]:group-data-[sidebar=dark]:hover:text-vertical-menu group-data-[sidebar=dark]:active:text-vertical-menu group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[layout=horizontal]:px-4 text-13" data-key="t-level-2-2">Level 2.2</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <div id="backdrop" class=" fixed inset-0 bg-gray-900/20 z-[1] res-header-bg hidden group-data-[layout=horizontal]:hidden" onclick="closeSidebar()"></div>
        <!-- Left Sidebar End -->
    </div><header id="page-topbar" class="ltr:lg:left-vertical-menu group-data-[layout=vertical]:rtl:lg:right-vertical-menu group-data-[sidebar-size=md]:ltr:left-vertical-menu-md  group-data-[sidebar-size=md]:rtl:right-vertical-menu-md group-data-[sidebar-size=sm]:lg:ltr:left-vertical-menu-sm group-data-[sidebar-size=sm]:lg:rtl:right-vertical-menu-sm group-data-[layout=horizontal]:left-0 group-data-[layout=horizontal]:rtl:p-0 fixed ltr:right-0 rtl:left-0 z-50 ltr:left-0 rtl:right-0">

        <div class="layout-width ">
            <div class="group-data-[topbar=dark]:bg-topbar-dark flex items-center mx-auto bg-vertical-menu-group-data-[topbar=dark]  group-data-[layout=horizontal]:border-none group-data-[topbar=light]:bg-white group-data-[topbar=light]:text-gray-700 topbar-main">
                <div class="pr-3 flex  group-data-[layout:vertical]:relative items-center w-full group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl justify-between ">
                    <!-- LOGO -->
                    <div class="items-center justify-center hidden px-5 text-center group-data-[layout=horizontal]:flex group-data-[layout=horizontal]:p-0 group-data-[layout=horizontal]:lg:px-5">
                        <a href="index.html">
                            <span class="hidden">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEwAAABMCAYAAADHl1ErAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyNpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDYuMC1jMDAyIDc5LjE2NDM1MiwgMjAyMC8wMS8zMC0xNTo1MDozOCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDIxLjEgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkIwRTMyMENCQThGQTExRURBOUYxRDBCNTE0NjBCMDJFIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkIwRTMyMENDQThGQTExRURBOUYxRDBCNTE0NjBCMDJFIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QjBFMzIwQzlBOEZBMTFFREE5RjFEMEI1MTQ2MEIwMkUiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QjBFMzIwQ0FBOEZBMTFFREE5RjFEMEI1MTQ2MEIwMkUiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7wBzWqAAAL70lEQVR42uycCXAUVRqA/+6enjuTzOQi5BxQEwyghCCHCCK7gtZ6ohyLKHIul3gBIYSEQFBxtVa3drdKTNxSQZGwumXBuuuuR1xcXVlLzoRomEwm5CDX5JjM3f32dQ/M5CRzp5Pyr0roITXvvf7e///v/99FIITgZ/FeRNwvgiCGpfKjB4rT7WZ2ns1OTbKYqZscNiLeyZIihAjaaSektIQ10SK2U0xDOy1jL8ulzpNSqfSfi3JWXB6O9nLKRfC/wgTs6AvFM9uNoqeMbdRtjQ2y5NZmmvanHLXawSQkWQ3Rsc7PNRHm4kV5G78dNcBKDxRntzTSe2oNkrl1tTJlKDzA2CSrOU1r/kdclHPXw/lrK0YksMN7Dz5eW63YW1mhSGWY8GgwRSG4Ib27Lk1r2bF8z5rDIwLYoX3FKyrPK39fo5NFDadzvuGm7ubx6dbc5fmrigUJrPTF4in6asnhC2dUE1hWGCMa91qZkztr0rSmexfv2lAuGGDF20ve/O836tU2K0WAAEWuYFDW9I531h14cuWwAvto31vJlTrxV+XnI9JGQgyVnmFqmJRpmnF/znpD2IG9X3TwgW9Pqo8ZW8WikRR4xsbZ7VNndi79dd7qj8IG7J38kme+LlO/ioNNAkagSCQM3H5ne87KolUHQg6sJKfkta/Lorc6nSOSlVtomoU75hn3r9y/Ks8XYKQvlfx5Z8kLJ78YfljBqN3hIOGrzzW7vj/6+hZfvuc1sLfzS547WabZybDDr1mkiISEpAiQKWn/y8Bv/sTay5B1W/urSF84P6jAjhQVP3ryC81vuV4RgjBOFlqbzJAxOQZi4uV+ZQTrtxhgzl1tnL7SgKAU6QtuDgqwvxS9kXDqW9Uhm5UUlNOy2xlobuyG8RlqiNJIvZ+eESHY+LQBZsw29oxw1YDI46i6ICpgYBd/iviu+YpELETHbWy28OG8FkMjvehPEY1g07M1kD2jfaC0QItxvBkQsIPb3nq3slyRJNSRzmJ28v+KxRRED2GaYgkLz+boIGtax/VyqUeQfu9jfgE79sobGaf/p1ou5NCgZzgUqZYMHndJWXgmpxrnlSZviv0j0hcl+AzsUoX8hMlECzrYkspEPaCIBssjYftuHdw80eRtsSo8rBT5BOzw3pJ15edU44QefEbHXd8MlREM7MjXcVM9PuZAxEpUvXeK18CqLsr2BzIzSmAHTPhtZl6mNzIK4hMV7s/Wq/7MrSYqJ+TsuQRp48z+RMaYC3rZK2Dv7Tu4TFeliAkosOTmoabGYzOhfJ+KUYrxz/UDUlpMQvrEmF4jo7HV4vFnUQ4eVnKKJRAH+QtkKJw2JLDqnxSvBDrvzjAIZHIR3DQp1ufE3txlh3HpakhIVgLZJ7fnPnGj4STcGTKFB6rV4gBji5V/jom1Q96+KkhMtgYhQib6pU29ku/Slw5m/u2v8ecZJsDEFmtA1qyxrsGjvA1amnwzCwXWsMysOOA6ztRpBwcOUimaBKVKjAPP3n2MWAQVZ1qgq8PGw+I0KzbOHrT4GAhGS6QW1g+YfLc0S4oChcXPOSV4fIsyUuLz97tNDqg83wqcoqtwuMBpFRfN94XFpUg/XmjlYSWMtUFeUVUwYfHhG7Dk0kFNsuaSZEGgNUREiSEpVeWzE+8rHW1WOPvdFWhq6ObB9AXVVG+Cs6euQHurlfdVudgM1RpHKAbjRQOaJLfIevyj2P/4lMTiHudiIZvVyTv46Fg5jMG+p6ffulSBTfKKOaAWc85dikdFEU2BA8Oydjvgmp/lRsHnd1VDhMoZmtiFA8SyacT4QgP36I722o3UWn9mDVLGR4IqamCz44b6tmZLwG1msZ8yd3NAekPRjrfAtjwd9nkMhEy43hdRC7lMsZdJtrWI7/KnvKryVt4x9xvtzJwfauFfNhSSPqEbO/iq0MLyaNlMdwJ/7aG+TuJXku2ws3Dhh2bslCWg4hw87gJTh50f5kO1M2ji5C7Yul3PJ9Rhylpn9fJhHx44lPTxh6rakbDz6ZasLtjyvJ6fkw+bcJBoOhYSd7byJmm1OxaOBFhTsjvhqeerwwvrmh+zO25w+zBzNzlD6LBm3mHkNYubBBweQWluH2azQqqQYc2aY4S1mwz8wsWwCUV6gDkcRKRQYc37ZRs8saYWiOFef0EQ5wbmdFAqIcK6575mWLKiHghhTGNKewAjpEKDdf/DTbBoWYOQmiRzAyMp5BRSyx56tBEeXHxFYF2IJD2BOYTQJM70lj5eDwt/1SxED9HlBkaRYAt26ampLTD79rMQG90MDEtBff0Y+NdnU6GjUzYorBWr62D+ghZhjj4I2t3ApBImaF0qk9lh84YjEK08iwNkT4A5VgMwbfIJqNDNg7ffvbvPbATAk+trry7dC1QIaHMHrhI582OwYO3a9jpoFKd7wXJ3EmuDjLS/w3NbPRucuX0O67bUCBuWq/UNHg2TwZlgFLnpN0eBQr1HNloeA4rodBDLYoAUSYBxWEBlqod583+Ef5fdCBu2GgZeuhechpHlbmC0BJVxPiSQfDIxsQ1iIk57ysCRZmRCNihiMqDnji5SJANapoF5CwBunaaHW6d2Ch8Wl3zL2Eq3SS7esaYyOsYe0Eg5544zvcwwMmEahjUBBtv+lqq1jAxYLtET8YUmNzBO4sfYawMpMVrj8UFiRTyGlQ6jRgjiK7eFXHtQq+0BHXBinJ5FW85nBWdjpVCE/awfMFW0+bVAcja9IamHhsXBqBIKfdEP2NLcTacSk80mf8v8smwyEJRrcwhJSUYPLASniOTCy/2AcZKcYv3S33ItFjF8f94VkLJO6+gBRqB3egXZPT/EjUEFXCDpr5QemwO1TbPBamocLbjsQLNHevPrc7DhpVWHqsvPBXZ2KGtqAzy4pIsPHUa4OZYS2vzFPcOxfvOY2CzzAq2noUETupXocAoJB/pb6ABHZwqWvN9WrZOr/akjKdUK23dfgsjIEQ4MoeOEtuC+vgH/gDPlN9/StcmfOXTOBHPyRwUsBBTsHVjpBpAluevez5zUWeVLHdw+hx0Y1qgwRSDeIlIKTnkNzAXAtlgqY7waMsO6zyH02tUKYiZncLc2iDy6c80Pt81qH/JkREZmNzy7UwdSKQujQ9A2IrGwZfCwbIjzki+uPKyvuKAccKF38pROfjVaLA71ajQLNmMF2E11V1OvBJCoMyEEi5UfEGn5S6/n2oY8fnzjeOPcxkZxVd+jytnTO2DD0zX8YaeQonJ0QpvuBNhtPbZUGRtA3HQO1Np7gJKog1XVRZAxa4aONIaQR3Zvrpkxx/iQXO50k5k+qx02PqMPOSxOs/rBuhaC2x3QVv0Jl4cFo6JOIOCRa3NeAQHjZFnuuuO3zzVuFdEsvylk/VMGoKjQexObsbwfLLmUhGiNCOJjaYhUImCttYFWYwVEPECk5l/wLrX04cz3p3/4U+78e1oKSQrCcpNAV+2n0GX0rBGoIymQyfr0sTwDQJnlb+rjxCqzCMP62NvwzCeveffmjS+QIn5XcZimIzwmr5CT/WG53sLfsm2A2Me8heWTSfZSSa4CFi3k7T7EQsvHeBRJPkhTxbH+xFpGQORCYtyeD3xPL/2Jg8cVlOFvzsY1V4YSmFQzCWix64iMaCCfKYoE8HVrLgIdHilmEdrdX/qXj/ubPKTknwOLdBpuwZHQZSgkaLQLgKZF0O8CJA5W5FzfXgFBKZB0NqEtvOh3k4JxWRHS71mNVfxlPDRrQhNdMNjjGIBgjC6/Rsde1SxvYaEOPBJuJLT57wWakwftOixU86IaR5l78ONm13lDIWQ5wOnlYQBmO9aqgKeBQ3LhGtIVTscF7sZP9w7bbZSulnwKLLGdGJd/JmglhvJKP9cRYJSLte0B/jKN8IgdvxX2qezvsEadDsU0WcgvjUR1BTHgEC3DMc/juKLsEJndN/jhGBAUTp7zQrbPM+zXkiJDUSIGNx/HcfNxpXPwf6X5WVKlCxLxNZDkJ0RKXl14psrCDKxfA64UKMFKZ2CIGdh0EzFINYbATT9wP+2uIRGPcAS04L/V4L/hjJ/9iUgpHJbNZG5gP4v38n8BBgBRoL4JZrkJXAAAAABJRU5ErkJggg==" alt="" class="h-6 mx-auto">
                            </span>
                            <span>
                                <img src="assets/images/logo-light.png" alt="" class="h-[19px] mx-auto logo-light">
                                <img src="assets/images/logo-dark.png" alt="" class="h-[19px] mx-auto logo-dark hidden">
                            </span>
                        </a>
                        <a href="index.html" class="hidden">
                            <span>
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEwAAABMCAYAAADHl1ErAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyNpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDYuMC1jMDAyIDc5LjE2NDM1MiwgMjAyMC8wMS8zMC0xNTo1MDozOCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDIxLjEgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkIwRTMyMENCQThGQTExRURBOUYxRDBCNTE0NjBCMDJFIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkIwRTMyMENDQThGQTExRURBOUYxRDBCNTE0NjBCMDJFIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QjBFMzIwQzlBOEZBMTFFREE5RjFEMEI1MTQ2MEIwMkUiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QjBFMzIwQ0FBOEZBMTFFREE5RjFEMEI1MTQ2MEIwMkUiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7wBzWqAAAL70lEQVR42uycCXAUVRqA/+6enjuTzOQi5BxQEwyghCCHCCK7gtZ6ohyLKHIul3gBIYSEQFBxtVa3drdKTNxSQZGwumXBuuuuR1xcXVlLzoRomEwm5CDX5JjM3f32dQ/M5CRzp5Pyr0roITXvvf7e///v/99FIITgZ/FeRNwvgiCGpfKjB4rT7WZ2ns1OTbKYqZscNiLeyZIihAjaaSektIQ10SK2U0xDOy1jL8ulzpNSqfSfi3JWXB6O9nLKRfC/wgTs6AvFM9uNoqeMbdRtjQ2y5NZmmvanHLXawSQkWQ3Rsc7PNRHm4kV5G78dNcBKDxRntzTSe2oNkrl1tTJlKDzA2CSrOU1r/kdclHPXw/lrK0YksMN7Dz5eW63YW1mhSGWY8GgwRSG4Ib27Lk1r2bF8z5rDIwLYoX3FKyrPK39fo5NFDadzvuGm7ubx6dbc5fmrigUJrPTF4in6asnhC2dUE1hWGCMa91qZkztr0rSmexfv2lAuGGDF20ve/O836tU2K0WAAEWuYFDW9I531h14cuWwAvto31vJlTrxV+XnI9JGQgyVnmFqmJRpmnF/znpD2IG9X3TwgW9Pqo8ZW8WikRR4xsbZ7VNndi79dd7qj8IG7J38kme+LlO/ioNNAkagSCQM3H5ne87KolUHQg6sJKfkta/Lorc6nSOSlVtomoU75hn3r9y/Ks8XYKQvlfx5Z8kLJ78YfljBqN3hIOGrzzW7vj/6+hZfvuc1sLfzS547WabZybDDr1mkiISEpAiQKWn/y8Bv/sTay5B1W/urSF84P6jAjhQVP3ryC81vuV4RgjBOFlqbzJAxOQZi4uV+ZQTrtxhgzl1tnL7SgKAU6QtuDgqwvxS9kXDqW9Uhm5UUlNOy2xlobuyG8RlqiNJIvZ+eESHY+LQBZsw29oxw1YDI46i6ICpgYBd/iviu+YpELETHbWy28OG8FkMjvehPEY1g07M1kD2jfaC0QItxvBkQsIPb3nq3slyRJNSRzmJ28v+KxRRED2GaYgkLz+boIGtax/VyqUeQfu9jfgE79sobGaf/p1ou5NCgZzgUqZYMHndJWXgmpxrnlSZviv0j0hcl+AzsUoX8hMlECzrYkspEPaCIBssjYftuHdw80eRtsSo8rBT5BOzw3pJ15edU44QefEbHXd8MlREM7MjXcVM9PuZAxEpUvXeK18CqLsr2BzIzSmAHTPhtZl6mNzIK4hMV7s/Wq/7MrSYqJ+TsuQRp48z+RMaYC3rZK2Dv7Tu4TFeliAkosOTmoabGYzOhfJ+KUYrxz/UDUlpMQvrEmF4jo7HV4vFnUQ4eVnKKJRAH+QtkKJw2JLDqnxSvBDrvzjAIZHIR3DQp1ufE3txlh3HpakhIVgLZJ7fnPnGj4STcGTKFB6rV4gBji5V/jom1Q96+KkhMtgYhQib6pU29ku/Slw5m/u2v8ecZJsDEFmtA1qyxrsGjvA1amnwzCwXWsMysOOA6ztRpBwcOUimaBKVKjAPP3n2MWAQVZ1qgq8PGw+I0KzbOHrT4GAhGS6QW1g+YfLc0S4oChcXPOSV4fIsyUuLz97tNDqg83wqcoqtwuMBpFRfN94XFpUg/XmjlYSWMtUFeUVUwYfHhG7Dk0kFNsuaSZEGgNUREiSEpVeWzE+8rHW1WOPvdFWhq6ObB9AXVVG+Cs6euQHurlfdVudgM1RpHKAbjRQOaJLfIevyj2P/4lMTiHudiIZvVyTv46Fg5jMG+p6ffulSBTfKKOaAWc85dikdFEU2BA8Oydjvgmp/lRsHnd1VDhMoZmtiFA8SyacT4QgP36I722o3UWn9mDVLGR4IqamCz44b6tmZLwG1msZ8yd3NAekPRjrfAtjwd9nkMhEy43hdRC7lMsZdJtrWI7/KnvKryVt4x9xvtzJwfauFfNhSSPqEbO/iq0MLyaNlMdwJ/7aG+TuJXku2ws3Dhh2bslCWg4hw87gJTh50f5kO1M2ji5C7Yul3PJ9Rhylpn9fJhHx44lPTxh6rakbDz6ZasLtjyvJ6fkw+bcJBoOhYSd7byJmm1OxaOBFhTsjvhqeerwwvrmh+zO25w+zBzNzlD6LBm3mHkNYubBBweQWluH2azQqqQYc2aY4S1mwz8wsWwCUV6gDkcRKRQYc37ZRs8saYWiOFef0EQ5wbmdFAqIcK6575mWLKiHghhTGNKewAjpEKDdf/DTbBoWYOQmiRzAyMp5BRSyx56tBEeXHxFYF2IJD2BOYTQJM70lj5eDwt/1SxED9HlBkaRYAt26ampLTD79rMQG90MDEtBff0Y+NdnU6GjUzYorBWr62D+ghZhjj4I2t3ApBImaF0qk9lh84YjEK08iwNkT4A5VgMwbfIJqNDNg7ffvbvPbATAk+trry7dC1QIaHMHrhI582OwYO3a9jpoFKd7wXJ3EmuDjLS/w3NbPRucuX0O67bUCBuWq/UNHg2TwZlgFLnpN0eBQr1HNloeA4rodBDLYoAUSYBxWEBlqod583+Ef5fdCBu2GgZeuhechpHlbmC0BJVxPiSQfDIxsQ1iIk57ysCRZmRCNihiMqDnji5SJANapoF5CwBunaaHW6d2Ch8Wl3zL2Eq3SS7esaYyOsYe0Eg5544zvcwwMmEahjUBBtv+lqq1jAxYLtET8YUmNzBO4sfYawMpMVrj8UFiRTyGlQ6jRgjiK7eFXHtQq+0BHXBinJ5FW85nBWdjpVCE/awfMFW0+bVAcja9IamHhsXBqBIKfdEP2NLcTacSk80mf8v8smwyEJRrcwhJSUYPLASniOTCy/2AcZKcYv3S33ItFjF8f94VkLJO6+gBRqB3egXZPT/EjUEFXCDpr5QemwO1TbPBamocLbjsQLNHevPrc7DhpVWHqsvPBXZ2KGtqAzy4pIsPHUa4OZYS2vzFPcOxfvOY2CzzAq2noUETupXocAoJB/pb6ABHZwqWvN9WrZOr/akjKdUK23dfgsjIEQ4MoeOEtuC+vgH/gDPlN9/StcmfOXTOBHPyRwUsBBTsHVjpBpAluevez5zUWeVLHdw+hx0Y1qgwRSDeIlIKTnkNzAXAtlgqY7waMsO6zyH02tUKYiZncLc2iDy6c80Pt81qH/JkREZmNzy7UwdSKQujQ9A2IrGwZfCwbIjzki+uPKyvuKAccKF38pROfjVaLA71ajQLNmMF2E11V1OvBJCoMyEEi5UfEGn5S6/n2oY8fnzjeOPcxkZxVd+jytnTO2DD0zX8YaeQonJ0QpvuBNhtPbZUGRtA3HQO1Np7gJKog1XVRZAxa4aONIaQR3Zvrpkxx/iQXO50k5k+qx02PqMPOSxOs/rBuhaC2x3QVv0Jl4cFo6JOIOCRa3NeAQHjZFnuuuO3zzVuFdEsvylk/VMGoKjQexObsbwfLLmUhGiNCOJjaYhUImCttYFWYwVEPECk5l/wLrX04cz3p3/4U+78e1oKSQrCcpNAV+2n0GX0rBGoIymQyfr0sTwDQJnlb+rjxCqzCMP62NvwzCeveffmjS+QIn5XcZimIzwmr5CT/WG53sLfsm2A2Me8heWTSfZSSa4CFi3k7T7EQsvHeBRJPkhTxbH+xFpGQORCYtyeD3xPL/2Jg8cVlOFvzsY1V4YSmFQzCWix64iMaCCfKYoE8HVrLgIdHilmEdrdX/qXj/ubPKTknwOLdBpuwZHQZSgkaLQLgKZF0O8CJA5W5FzfXgFBKZB0NqEtvOh3k4JxWRHS71mNVfxlPDRrQhNdMNjjGIBgjC6/Rsde1SxvYaEOPBJuJLT57wWakwftOixU86IaR5l78ONm13lDIWQ5wOnlYQBmO9aqgKeBQ3LhGtIVTscF7sZP9w7bbZSulnwKLLGdGJd/JmglhvJKP9cRYJSLte0B/jKN8IgdvxX2qezvsEadDsU0WcgvjUR1BTHgEC3DMc/juKLsEJndN/jhGBAUTp7zQrbPM+zXkiJDUSIGNx/HcfNxpXPwf6X5WVKlCxLxNZDkJ0RKXl14psrCDKxfA64UKMFKZ2CIGdh0EzFINYbATT9wP+2uIRGPcAS04L/V4L/hjJ/9iUgpHJbNZG5gP4v38n8BBgBRoL4JZrkJXAAAAABJRU5ErkJggg==" alt="" class="h-6 mx-auto">
                            </span>
                            <span>
                                <img src="assets/images/logo-light.png" alt="" class="h-6 mx-auto">
                            </span>
                        </a>
                    </div>
                    <div class="res-header-logo w-header h-header p-6 lg:hidden  group-data-[layout=vertical]:bg-zink-700 group-data-[layout=vertical]:mr-4">
                        <img src="assets/images/logo-light.svg" class="res-light " alt="">
                        <img src="assets/images/logo.svg" class="res-dark" alt="">
                    </div>
                    <div class=" group-data-[layout=horizontal]:lg:hidden">
                        <button type="button" class="ml-4 sm:ml-0 lg:px-5 header-item waves-effect menubar font-normal h-header" id="vertical-menu-btn">
                            <i class="fa fa-bars text-16 text-zink-600 group-data-[topbar=dark]:text-zink-200 "></i>
                        </button>
                    </div>

                    <div class="hidden lg:block relative">
                        <i class="bx bx-search-alt text-16 text-gray-600 group-data-[topbar=dark]:text-zink-200 absolute top-3 ltr:left-3.5 rtl:right-3.5 transform"></i>
                        <input class="w-[219px] h-[38px] border-transparent bg-[#f3f3f9] group-data-[topbar=dark]:bg-[#2a3042] rounded-full group-data-[topbar=dark]:outline-none border group-data-[topbar=dark]:border-transparent text-gray-700  group-data-[topbar=dark]:text-zink-200  group-data-[topbar=dark]:placeholder:text-zink-200 ltr:pl-10 rtl:pr-10 py-1.2 p-2  placeholder:text-13 focus:border focus:border-blue-500 focus:ring-0 focus:outline-none  search placeholder:text-gray-600 group-data-[layout=horizontal]:border-transparent" type="search" placeholder="Search..." id="example-search-input">
                    </div>

                    <div class="hidden lg:block">
                        <div class=" dropdown px-2">
                            <button class="p-0 text-gray-700 group-data-[topbar=dark]:text-zink-200 border-0 btn dropdown-toggle " type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                                <p class="text-13 px-3 text-gray-700 group-data-[topbar=dark]:text-zink-200">Mega Menu <i class="mdi mdi-chevron-down"></i></p>
                            </button>
                            <div class="absolute right-0 left-0 rtl:!-ml-3 !top-[22px] z-50 hidden w-full px-3 py-1.5 text-left list-none bg-white  shadow-lg dropdown-menu bg-clip-padding  topbar-dropdown" aria-labelledby="dropdownMenuButton1">
                                <div class="grid xl:grid-cols-5 lg:grid-cols-3 justify-between p-5 rounded rtl:text-right">
                                    <div>
                                        <h4 class="text-[14px] font-medium  mb-2 text-gray-700">UI Components</h4>
                                        <ul class="text-13 text-gray-700  mb-4 ">
                                            <li class="py-1 "><a href="#!">UI Components</a></li>
                                            <li class="py-1"><a href="#!">Range Slider</a></li>
                                            <li class="py-1 "><a href="#!">Sweet Alert</a></li>
                                            <li class="py-1 "><a href="#!">Rating</a></li>
                                            <li class="py-1 "><a href="#!">Forms</a></li>
                                            <li class="py-1 "><a href="#!">Tables</a></li>
                                            <li class="py-1 "><a href="#!">Chats</a></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h4 class="text-[14px] font-medium  mb-2 text-gray-700">Applications</h4>
                                        <ul class="text-13 text-gray-700 mb-4 ">
                                            <li class="py-1 "><a href="#!">Ecommerce</a></li>
                                            <li class="py-1"><a href="#!">Calendar</a></li>
                                            <li class="py-1 "><a href="#!">Sweet Alert</a></li>
                                            <li class="py-1 "><a href="#!">Email</a></li>
                                            <li class="py-1 "><a href="#!">Forms</a></li>
                                            <li class="py-1 "><a href="#!">Projects</a></li>
                                            <li class="py-1 "><a href="#!">Tasks</a></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h4 class="text-[14px] font-medium  mb-2  text-gray-700">Extra Pages</h4>
                                        <ul class="text-13 mb-4 text-gray-700">
                                            <li class="py-1 "><a href="#!">Light Sidebar</a></li>
                                            <li class="py-1"><a href="#!">Sidebar</a></li>
                                            <li class="py-1 "><a href="#!">Sweet Alert</a></li>
                                            <li class="py-1 "><a href="#!">Horizontal layoutEmail</a></li>
                                            <li class="py-1 "><a href="#!">Maintainance</a></li>
                                            <li class="py-1 "><a href="#!">Cooming soon</a></li>
                                            <li class="py-1 "><a href="#!">Timeline</a></li>
                                            <li class="py-1 "><a href="#!">FAQs</a></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h4 class="text-[14px] font-medium  mb-2  text-gray-700">UI Components</h4>
                                        <ul class="text-13 mb-4 text-gray-700">
                                            <li class="py-1 "><a href="#!">Lightbox</a></li>
                                            <li class="py-1"><a href="#!">Range Slider</a></li>
                                            <li class="py-1 "><a href="#!">Sweet Alert</a></li>
                                            <li class="py-1 "><a href="#!">Rating</a></li>
                                            <li class="py-1 "><a href="#!">Forms</a></li>
                                            <li class="py-1 "><a href="#!">Tables</a></li>
                                            <li class="py-1 "><a href="#!">Charts</a></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <img src="assets/images/megamenu-img.png" class="max-w-[230px]" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex ms-auto items-center">
                        <div class="md:relative dropdown px-3 lg:hidden">
                            <button class="p-0 text-gray-700 group-data-[topbar=dark]:text-zink-200 border-0 h-header btn dropdown-toggle flex items-center space-x-2" type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                                <i class="mdi mdi-magnify text-[22px] text-gray-700 group-data-[topbar=dark]:text-zink-200"></i>
                            </button>
                            <ul class="w-full absolute right-0 left-auto top-auto z-50 hidden md:w-80 p-4 text-left list-none bg-white border border-transparent rounded shadow-4xl dropdown-menu bg-clip-padding group-data-[topbar=dark]:bg-zink-700  group-data-[layout=horizontal]:bg-white topbar-dropdown" aria-labelledby="dropdownMenuButton1">
                                <div class="flex rounded-md overflow-hidden">
                                    <input class="w-full border-transparent bg-gray-50 group-data-[topbar=dark]:bg-zink-50 group-data-[topbar=dark]:outline-none group-data-[topbar=dark]:border-transparent group-data-[topbar=dark]:text-zink-200 group-data-[topbar=dark]:placeholder:text-zink-200  py-1.2 p-2 placeholder:text-white border-gray-400 placeholder:text-sm focus:border focus:border-blue-500 focus:ring-0 focus:outline-none text-white" type="search" placeholder="Search" id="example-search-input">
                                    <div class="w-9 h-9 bg-blue-500 flex justify-center items-center">
                                        <i class="bx bx-search-alt text-16 text-white "></i>
                                    </div>
                                </div>
                            </ul>
                        </div>
                        <div class="md:relative dropdown px-3">
                            <button class="p-0  border-0 btn dropdown-toggle text-gray-700 h-header group-data-[topbar=dark]:text-zink-200 " type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                                <div>
                                    <img id="header-lang-img" class="h-5"  src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFz/2wBDAQQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFz/wAARCAAqAEADASIAAhEBAxEB/8QAGwAAAgIDAQAAAAAAAAAAAAAAAAcDBgEEBQj/xAA1EAABAgIHBwIFAwUAAAAAAAABAgQAAwUGBxESFlYTFBVRk6HTMVciI5GS0hdBYiElRVKC/8QAGgEAAgMBAQAAAAAAAAAAAAAAAAYBBQcDBP/EADERAAAEAwMKBQUAAAAAAAAAAAABAgMEBRESIZETFBUWUVRWkpPSBjIzZoExQVNk0f/aAAwDAQACEQMRAD8AoRouTPo5m9mKnNJ0yS7nrcOydi8VLWAJbYpQSV88X7x0zV9nxZcnc6RwCcuVwr/KACRtNqRgw4L+0RtEhtQzadMG6hwwfoTOegOJLoiYkYGyMB2MwemOO0W39wNF7k62ofTF8Mxp4okbpftN6wXGX++CNHU4ojWRKOlFl8VFeK23oNotqsrcmbj3A7/JxFoz3kkLQ6vReFD+MWWqNDUPx+r8mlHDpk0cSX22fkjd5+xKwhTclIOH+lxjUbqQuXIfCdLmIbIohK3siQENGhxH4XkjB89Q/wBo6lW10QxrDVt/TlFOXFGzUUkpSpaxu7n4lpC20v5eySk+qY8UzWapfHktRWci5W15fTreLCUm4U0lxtG7lM5as5EiNytovJauqHXlazfWk76p/CDK1m+tJ31T+EGYbK9KPPtHlgzDZXpR59o8sZRRjZCYrG1VnXuTkhAZWs31pO+qfwjKas2cJIUmuk4KBvBBSCCP+IxmGyvSjz7R5YMw2V6UefaPLBRj9TFYKzo7j1k5IQI9FS6/MWqGrGpdJSXCpLhs8nYDOTPlzFAgJSQQjliTG2aqVzLhUn9P6T4Nty4Sw+PGJhlbPFt8OP8AlHpHglrOp2HbwwcEtZ1Ow7eGHHWmIP6y06/P9GZaswnEkr6jnYPNMuq9ooSifOqdSUykWwaJYuRKwiQlqSQlSAnDNv5qixVQoGu9DViomnBUN4HTdDsuVzQrZz1uMVygj0Rdf6CHpwS1nU7Dt4YOCWs6nYdvDHJ/xJEPsvM6PUjKINFpJXlUqbR2h/DsEw+y8ufyp1KFpUaFuu2VU+x0QIs0V90IjprgzRX3QiOmuJeCWs6nYdvDBwS1nU7Dt4YW6vbYrlQGazKPbvXihFmivuhEdNcGaK+6ER01xLwS1nU7Dt4YOCWs6nYdvDBV7bFcqAWZR7d68UK1lep3uIrrIgyvU73EV1kQqXqEIeukIQAkTZgAAuAuMa1w5RW5w3uyMVB/TI5goiPWOLvL8THYG/lep3uIrrIgyvU73EV1kQoLhyguHKDOW92RioToGYcRxfSY7A38r1O9xFdZEGV6ne4iusiFBcOUFw5QZy3uyMVA0DMOI4vpMdgb+V6ne4iusiDK9TvcRXWRCguHKNlkhC3rVC0ApM2WCCLwbzBnDe7IxUIVI5glJnrHF3FX0mOwf//Z" alt="">
                                </div>
                            </button>
                            <ul class="w-full absolute right-0 left-auto top-auto z-[1005] hidden md:w-40 py-1.5 text-left list-none bg-white border border-transparent rounded shadow-4xl dropdown-menu bg-clip-padding group-data-[topbar=dark]:bg-zink-700 group-data-[topbar=dark]:border-zink-50  group-data-[layout=horizontal]:bg-white topbar-dropdown" aria-labelledby="dropdownMenuButton1">
                                <li><a class="items-center w-full px-6 py-1.5 flex text-sm font-normal bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 group-data-[topbar=dark]:text-zink-200 group-data-[topbar=dark]:hover:bg-zink-50 group-data-[topbar=dark]:hover:text-white language" data-lang="en" href="#">
                                        <span><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFz/2wBDAQQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFz/wAARCAAqAEADASIAAhEBAxEB/8QAGwAAAgIDAQAAAAAAAAAAAAAAAAcDBgEEBQj/xAA1EAABAgIHBwIFAwUAAAAAAAABAgQAAwUGBxESFlYTFBVRk6HTMVciI5GS0hdBYiElRVKC/8QAGgEAAgMBAQAAAAAAAAAAAAAAAAYBBQcDBP/EADERAAAEAwMKBQUAAAAAAAAAAAABAgMEBRESIZETFBUWUVRWkpPSBjIzZoExQVNk0f/aAAwDAQACEQMRAD8AoRouTPo5m9mKnNJ0yS7nrcOydi8VLWAJbYpQSV88X7x0zV9nxZcnc6RwCcuVwr/KACRtNqRgw4L+0RtEhtQzadMG6hwwfoTOegOJLoiYkYGyMB2MwemOO0W39wNF7k62ofTF8Mxp4okbpftN6wXGX++CNHU4ojWRKOlFl8VFeK23oNotqsrcmbj3A7/JxFoz3kkLQ6vReFD+MWWqNDUPx+r8mlHDpk0cSX22fkjd5+xKwhTclIOH+lxjUbqQuXIfCdLmIbIohK3siQENGhxH4XkjB89Q/wBo6lW10QxrDVt/TlFOXFGzUUkpSpaxu7n4lpC20v5eySk+qY8UzWapfHktRWci5W15fTreLCUm4U0lxtG7lM5as5EiNytovJauqHXlazfWk76p/CDK1m+tJ31T+EGYbK9KPPtHlgzDZXpR59o8sZRRjZCYrG1VnXuTkhAZWs31pO+qfwjKas2cJIUmuk4KBvBBSCCP+IxmGyvSjz7R5YMw2V6UefaPLBRj9TFYKzo7j1k5IQI9FS6/MWqGrGpdJSXCpLhs8nYDOTPlzFAgJSQQjliTG2aqVzLhUn9P6T4Nty4Sw+PGJhlbPFt8OP8AlHpHglrOp2HbwwcEtZ1Ow7eGHHWmIP6y06/P9GZaswnEkr6jnYPNMuq9ooSifOqdSUykWwaJYuRKwiQlqSQlSAnDNv5qixVQoGu9DViomnBUN4HTdDsuVzQrZz1uMVygj0Rdf6CHpwS1nU7Dt4YOCWs6nYdvDHJ/xJEPsvM6PUjKINFpJXlUqbR2h/DsEw+y8ufyp1KFpUaFuu2VU+x0QIs0V90IjprgzRX3QiOmuJeCWs6nYdvDBwS1nU7Dt4YW6vbYrlQGazKPbvXihFmivuhEdNcGaK+6ER01xLwS1nU7Dt4YOCWs6nYdvDBV7bFcqAWZR7d68UK1lep3uIrrIgyvU73EV1kQqXqEIeukIQAkTZgAAuAuMa1w5RW5w3uyMVB/TI5goiPWOLvL8THYG/lep3uIrrIgyvU73EV1kQoLhyguHKDOW92RioToGYcRxfSY7A38r1O9xFdZEGV6ne4iusiFBcOUFw5QZy3uyMVA0DMOI4vpMdgb+V6ne4iusiDK9TvcRXWRCguHKNlkhC3rVC0ApM2WCCLwbzBnDe7IxUIVI5glJnrHF3FX0mOwf//Z" class="w-5 ltr:mr-2 rtl:ml-2" alt=""></span>English
                                    </a>
                                </li>
                                <li><a class="items-center w-full px-6 py-1.5 flex text-sm font-normal bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50  group-data-[topbar=dark]:text-zink-200 group-data-[topbar=dark]:hover:bg-zink-50 group-data-[topbar=dark]:hover:text-white language" data-lang="sp" href="#">
                                        <span><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFz/2wBDAQQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFz/wAARCAAqAEADASIAAhEBAxEB/8QAGgAAAwEBAQEAAAAAAAAAAAAAAAUIBgQBAv/EACkQAAIBAgQFBAMBAAAAAAAAAAECAwAEBQYREhUWVZTRExRRUiIxQXH/xAAaAQACAwEBAAAAAAAAAAAAAAAABgEDBwQC/8QAKREAAgEDAgUDBQEAAAAAAAAAAQIDAAQRIVQFEhMUkhWRkwYWNFNxgf/aAAwDAQACEQMRAD8AyzSSSMWZ2ZmbVmJJJJ/przc32aq04BgXRrDtk8V8PguW4Y5JrrDcNggiR3eR7eMKqqNST+NZfH9WxSukcdhKzuQqgMNSa2b1+ID8Z/epO3N9mo3N9mqlbC7yLiF/Lh8WHwRS+pshe5w4QpK2u3buK/idw0Aan/AMC6NYdsniui6+omsigueHSLzZ5SJFIOP5Xo8dVTyvZyqcA4bTQ/0VJe5vs1G5vs1VpwDAujWHbJ4o4BgXRrDtk8VyfeFvspPIVHr8W3f3qS9zfZq9WSSNgyuysraqwJBBH9FVnwDAujWHbJ4o4BgXRrDtk8UfeFvspPIUevRbZ/enFYLMM/D0ZbLD8QtPd3UbX07e3kUxsCm5VjaRwGAGm5K3tZWe1fFbO4w9cCTCgzBzcL6Tes4kDEuI2JJPyaW+ENbIl7JcdPRY+UO4U5LjUAnXFLkcqxTwBwSjNhsAkf7iluRsTytMbuC6ksPd2uIMDLd7bZxbFQFKkiMFtQdRWlshavcXN9Dhl5BLcNtmmlkt2icwnaoURO5BA+wFZmfIqJbotpiVuXnhMd0TAwOpZ9HTQjcdH0/KtLbPuugnLiWuxHT32sReZQw2hthLf5rTJxm74XcWkkNrFbo8VmoEglQu7FkY5xy5Oh0ql2w5m7h5WmkcEBHVUQEkDBNOKKKKQKsooooooqT+aMx9cv8AuH80c0Zj65f9w/mubEY40v75ERVVbiVVAGgAB/Qrl2r8Cto7S120PxrT6IoSAehH4LTPmjMfXL/uH80c0Zj65f8AcP5pZtX4FG1fgUdpa7aH41qejD+mPwWmfNGY+uX/AHD+aOaMx9cv+4fzSzavwKNq/Ao7S120PxrR0Yf0x+C0z5ozH1y/7h/NHNGY+uX/AHD+aWbV+BXVh0cb39ijorK1xErAjUEE/o0dna7aH41qDFCBnoR+C1//2Q==" class="w-5 ltr:mr-2 rtl:ml-2 " alt=""></span>Spanish
                                    </a>
                                </li>
                                <li><a class="items-center w-full px-6 py-1.5 flex text-sm font-normal bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 group-data-[topbar=dark]:text-zink-200 group-data-[topbar=dark]:hover:bg-zink-50 group-data-[topbar=dark]:hover:text-white language" data-lang="gr" href="#">
                                        <span><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFz/2wBDAQQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFz/wAARCAAqAEADASIAAhEBAxEB/8QAGAABAQEBAQAAAAAAAAAAAAAAAAcCBQH/xAAlEAABAgILAQEAAAAAAAAAAAABAAIDUQUREhYXVFWjpNLiITL/xAAYAQEBAQEBAAAAAAAAAAAAAAAABwEDBf/EACURAAACCQUBAQAAAAAAAAAAAAABAgMEBREVVKPRFBZVkpTSUf/aAAwDAQACEQMRAD8AiL4sWI98SJFe57nEucSSST9JJK8tOmV3bs03kdyH2S7NN5Hch9l31bLVKe5D1JA/eEb/ADLMDhWnTKWnTK7t2abyO5D7Jdmm8juQ+yaxlqlPcgkD94Rv8yzA4Vp0ylp0yu7dmm8juQ+yXZpvI7kPsmsZapT3IJA/eEb/ADLMDhWnTK9ZFiw3siQ4r2va4FrgSCCPoIIXcuzTeR3IfZLs03kdyH2TVstUp7kEgfvCN/mWYFWRVjC8a5xfaYXjXOL7UunzqqraeBft0uKutLPkSdFWMLxrnF9pheNc4vtJ86qq2ngN0uKutLPkSdFWMLxrnF9pheNc4vtJ86qq2ngN0uKutLPkSdFWMLxrnF9pheNc4vtJ86qq2ngN0uKutLPkVpFt/wC3iRSoSU5SRgZlER+Iwi3UJJUJLIBEYRbqEkqEkgERhFuoSRn7YJlaSMTIv0wiP//Z" class="w-5 ltr:mr-2 rtl:ml-2 " alt=""></span>German
                                    </a>
                                </li>
                                <li><a class="items-center w-full px-6 py-1.5 flex text-sm font-normal bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 group-data-[topbar=dark]:text-zink-200 group-data-[topbar=dark]:hover:bg-zink-50 group-data-[topbar=dark]:hover:text-white language" data-lang="it" href="#">
                                        <span><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFz/2wBDAQQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFz/wAARCAAqAEADASIAAhEBAxEB/8QAGwAAAgIDAQAAAAAAAAAAAAAAAAgCBwEDBAX/xAAjEAACAQMEAgMBAAAAAAAAAAABAgADBzYEEXSxUbISIUQW/8QAFwEBAQEBAAAAAAAAAAAAAAAABwYFCP/EACcRAAIAAgkEAwAAAAAAAAAAAAABAgMEBQYHETM0dII1NrHBEiEx/9oADAMBAAIRAxEAPwD1mdmYu7sWLbkk7kkyO58yMJzKT5ZtqSf6at9/gre6xi4ulqcmrcCr7rGLjRYXoS3Ez0atDyeTCLPdnKl+/wAVLtozEWa7OVrwqPbShrPTc4RGu77he1m+UVlufMyrupDK5UqdwQdiCJiEnh2aT+mjuhCEFzi4s21OTVuBV91jFxdLU5NW4FX3WMXGiwnQluJno1aFk8mEWa7OVrwqPbRmYs12crXhUe2lDWem5wiNd33C9rN8orKEISeHc7oT0NaiJrdWiIFUVXAAGwABmj4r4EGYocG1icWliWpyatwKvusYuLvazJq3Cq+yxiozWF6EtxM9GrQsnkyMWa7OVrwqPbRm4tF18qXhUu2lDWem5wiNd33A9rN8oq6E27DxOnRIj63So6AqatMEEbg7mTw6RR/GFvD8WJ//2Q==" class="w-5 ltr:mr-2 rtl:ml-2 " alt=""></span>Italian
                                    </a>
                                </li>
                                <li><a class="items-center w-full px-6 py-1.5 flex text-sm font-normal bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 group-data-[topbar=dark]:text-zink-200 group-data-[topbar=dark]:hover:bg-zink-50 group-data-[topbar=dark]:hover:text-white language" data-lang="ru" href="#">
                                        <span><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFz/2wBDAQQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFz/wAARCAAqAEADASIAAhEBAxEB/8QAGQABAAMBAQAAAAAAAAAAAAAAAAMGBwQI/8QAIxAAAgACCwEAAAAAAAAAAAAAAAECBAcRFhdRVFajpNPiA//EABoBAQACAwEAAAAAAAAAAAAAAAABBgIEBwj/xAAmEQAAAwUJAQEAAAAAAAAAAAAAAQIDBhZUowQRExRSVZPR0hIx/9oADAMBAAIRAxEAPwD3UDLL6qM9S8Oa6xfVRnqXhzXWbeQt0k341dDDERrIamDLL6qM9S8Oa6xfVRnqXhzXWMhbpJvxq6DERrIamDLL6qM9S8Oa6xfVRnqXhzXWMhbpJvxq6DERrIamDLL6qM9S8Oa6xfVRnqXhzXWMhbpJvxq6DERrIeBgXOySz+16Fkln9r0WmLHfn6TXyLBAD27TXY+xTAXOySz+16Fkln9r0Isd+fpNfIQA9u012PsUwFzsks/tehZJZ/a9CLHfn6TXyEAPbtNdj7FMBc7JLP7XoWSWf2vQix35+k18hAD27TXY+xcwd07BBBOzUEECUK+v0SSVSVTOapYHGR6SSv6Iju/SIxECWpYCpYATeIgS1LAVLABeIgS1LA6ZKCCOdlYI4E4X9fmmmq062BCl/KTO78K8f//Z" class="w-5 ltr:mr-2 rtl:ml-2 " alt=""></span>Russian
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="hidden lg:block relative dropdown px-3 xl:ml-1">
                            <button class="p-0  border-0 btn dropdown-toggle h-header text-gray-700 group-data-[topbar=dark]:text-zink-200 " type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                                <i class="bx bx-customize text-[22px]"></i>
                            </button>
                            <ul class="absolute right-0 left-auto top-auto w-80 hidden p-4 text-left list-none bg-white border border-transparent rounded shadow-4xl dropdown-menu bg-clip-padding group-data-[topbar=dark]:bg-zink-700 group-data-[topbar=dark]:border-zink-50 group-data-[mode=dark]:text-zink-200" aria-labelledby="dropdownMenuButton1">
                                <div class="flex justify-between gap-x-2 mt-1">
                                    <div class="p-2 text-center cursor-pointer group-data-[topbar=dark]:text-zink-200 group-data-[topbar=dark]:hover:bg-zink-50 group-data-[topbar=dark]:hover:text-white">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAeCAMAAACR41cYAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAJ/UExURUdwTCEgIB8fHyAfHyAfHyAfHyAfHx8eHiAfHx8eHiAfHyAfHyAfHx8eHiAfH5jU5h8eHiAfHyAfHyAfHx8eHh8eHiAfHyAfIAQBAxgWFiEhISEgIAwCACAgIB0bGi40NhkVFCAfH5za8FBncENVXKTm95vZ8Jza8J7c8R0bGhMTEx0cHCAfHyEgH73//yEgIJ7c8QAAAIfF6TM7PwwJCh4cHHm45SAfHyAfH5za8CAfH5za8Jza8Jza8Jza8CAfH5za8G6VokRVWxIKCJza8JvY7pza8DtITTlFSZ3b8AMHCgAABJza8ElBPDA4PFVLRK3z/zEvLRcXGEVBPTA5PJza8AADB5vZ74XD6QIAAIrJ67T+/4HA6BAIByAfH4zK7IrI6zE4O7D5/yAfHwEAACIgIJza8BUWGAACBhoaGvXLsQ0PEZ/g957c8RATFf/oy1p4hfzRticqLIC+6Jrm///jxiMiIvDEq//Xu/bHq//fxG5eVRgXF////P/z0P/22lNHQv/gv//877H5/xcTEhUOC76cicyolCcjIf/avdivlpvY7mZaUQMHC1lNRfrNsPTJr//o0v/cwf3WuHtnXIshF4VuYvTEqfrcyM+oqOrW1PTm4v716zM7PqHf8v/t1SkpJsD//1RueGebxaPn/IXK/TVIV3OapbmXheK0mNuymv/GrdWZhu/Tx+u7pI54adymkf/658+dlMifn+S1mafq+7uhizYvLeLCufLs7/rk1mNVTf/NrtOskqeHd8aXlXFgVv/kwZU1LNW1neK9tJAuJsCMirJwa+nKv9zFx2CRtVuKronG6naszSUnKUZaZG+TmUFPU3agr3GkxIu8xSfH+3sAAABzdFJOUwD97RwqJTMat/4VL6DlCwmSOh2qV77yhGEIms8njIj9+xEk6wESA6CMcwRtUGQlwnjIs9iu9u3fsS5e3hvwhB66hguP9eJfotdT9nPf4o7mPNW62Kc/5MnTMeRzzcTG3/LkYv////////////////////54WQMpAAACTklEQVQYGXXABVMiYRgA4BdYdhkExa5TR8Xuvu7u7v5g2V06XFGxO7C72+vu7s74Qaczd87sIg/85yeUJMMCsUK+FFzIEEISvwSZxF8iSwpEczyBT4L4xMAXhniE4CIQ8QRgwCMWID458PgipEYag0ZD07TGYHCgOcuBI1GIWA3lqEcOrVbrUNdXUzSLfIHDB7EG7fXGi411tRdq6y7dedrl1KjTgGMNop3PSm+WGO35+fkNHSUlpT0U8geO4ABneUX7w9tXWxmGKXzU/7HyyX2tBLhCVT0vh/q7b7W3MW1Fb169H6p4TIXAP1IRQfiIMV/qRUXl8+4HHUwnY//w9l1lZ7kzHBP7EIRICpg3juMemLd2zGwcHOjrLbjB9PYNDI72sgYc88Bx3BsDQiSN9FQCpFDFxrKyVvO1KwXmwtGy0i4qBUDpGSkVEbDA73D5vYIGo/2y3Vhkfl28PQl4NoQABAdl79vV0lzc3LLnwP4dBPB4rbNkwbwM1byMRHAVk7qe3gIAyWpWIBCwKAgWFTS8dfdBQY5cIMsRsv6wuARLhIU+rUBhKCQgFNwIPrYkTR6uVqjD80LBvWxhIFKgsLxT4IYy9XyWJbo6ujo64tyJvbGwiM1H9OM/kalmosb0bXhct2m1F/DExpG6KZPqxy/Vd9XsrGriro5cEQVcUSSp05s+T0XU/HGM6T6Z9DqSjAcur7Vkk77KNjnzu+rrzKStSt9ErloGfOk7yRGr1Tb9ZdpmtY6QG+NWgivlofTMk2dyz+YeP5oZvy0GFvwFlSbPVswTomsAAAAASUVORK5CYII=" class="mx-auto" alt="">
                                        <p class="text-13 group-data-[topbar=dark]:text-zink-200 text-gray-600 mt-2">GitHub</p>
                                    </div>
                                    <div class="p-2 text-center cursor-pointer group-data-[topbar=dark]:text-zink-200 group-data-[topbar=dark]:hover:bg-zink-50 group-data-[topbar=dark]:hover:text-white">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAdCAMAAABopjdHAAAAwFBMVEVHcEwAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4Mri5Y4AAAAP3RSTlMAIwhydxy28hIWIc+je6u9P/b9BUziKJcMxKdZAjyMXjfXu8Hm1eou2t0z+rKRRq+A7my6Qp/M34PrU1YPiL7YsJ9AAAABbUlEQVQYGW3Bh3aiQAAF0EedoSMiYu+isdcka7Lv//9qYTib3eR4LwB9b9yilWBtefeN2NFR6h3WJOfeLIqizn3REiQXgdaEMSdb5uiaWTLXc+mOH5+XOSlGaJDJDN+NSJ7QILn0zcegcJ2SpWUvaZcleFROk44d+jf/MF1sWHlHl895OPI5GyM+10bML97US/iXiazB2jIo8uJtzlqSQptQWZ6hxzoMQaU1gGVTCfUsbPnaR0hllkG2WUkCmCQDmFRuEk2TlcSESdJAQCVoAj0q4YfWXrRduaXyC0BKRQRAARwFK5sxAGdL5X0YW/HniUrkomQNWVt11lQ2swFq4+GK/7RsA7XrzkKWGu3Q/h3Z4c7YQw5yVHpiYTpAX1quJZuATKO1hsqLR+H556smc6mNH0c74dZBxbFZEuv77DLtTARLZx2Vvs+f4j6UIX+yUCte+V03R60/PvA/ouvii7N/m742yESsLrtejsofWqVrkBSdwYAAAAAASUVORK5CYII=" class="mx-auto" alt="">
                                        <p class="text-13 group-data-[topbar=dark]:text-zink-200 text-gray-600 mt-2">bitbucket</p>
                                    </div>
                                    <div class="p-2 text-center cursor-pointer group-data-[topbar=dark]:text-zink-200 group-data-[topbar=dark]:hover:bg-zink-50 group-data-[topbar=dark]:hover:text-white">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAAA0lBMVEVHcEzEI2HDI2HDI2HEI2HDI2HDI2HEI2HDImHDI2HDI2HDImDDI2HEI2HDI2HDI2HDI2HEI2HDI2HDI2HDI2HDI2HDI2HDI2HDI2HDI2HDI2HEJGLDI2HDI2HDI2HqTInxU5C9HFq7GlnyVJHEI2HpS4jwUY/BIV/tTou3FlTCImDzVZK6GVfUNXPfP32+HVziQ4DaOnjrTYrFJWO/Hl3MLGrKKmjAH17uUI3cPXrXN3XSMnC1FFLoSYf1V5T4WpfPLm3mR4TIKGbQMG7wU5DqS4gW3fYwAAAAH3RSTlMAlnPA0mVNzNyLQuQo7zUfxPFVXWx6pPMCRX/1A3yvLDJKvgAAAk1JREFUGBllwIV2GmkUAOAbIUD8bCrp2v1dx10ZBmbf/5WW0DZtTz/44X518fzwef3pwyP87uZKiJhRSlns1iv41f2Vpk73bdumYVUwff0FfvKS07rUNJz4wrlJwpqJj/Dug2D5vNsHrPUS0Sx+rgqxhW/+EKxsuMpEoKWSiCj5rqTiTzh7EqzkSkof0WBPMkRpfORYIW7hzZrmjZKIGd8HrPUSCe8Cmx7pA5zcOpp4iYhSSRfkxvOxtDacUNeXALBmR45n0reUhSaMh7jlxnfsAeDJ0YRjZoxaiG8OsXBDsB95JtWs9S2s4spz1Rg5R+mxcrWu99Gi8ETt6RYu6qrr92WV18wOVuSFyHYZZojIU/YMVzkdBmstK0QVtpgUQTepE0KmhG5go8uwD8M0SkZD/LQrg7zrj8c+TJO0voMNjSa1ELIoY3jT9rlzwWCtHQZbizu4oinHN7LhyYENTNeHtG3bri+F28AFCwmeyKXpmaWHJAxytVsIX3YpfYZVcTAGUfLxYIND1ExzwVqOJ7ynW3hycUJQ8lnbuGu8yZrSlipDbEanvwCsWe8lH7XViTcSkXc2Hw1Kn7LPrwA3ukimLB/c6PGNSmIaEakyV/wDJ9e08v2gR49nBnPbEeP37K9XOLkX9UHTyP+HXy29LdWuY+4Gzl5EHKQTfsfTIDcp01v46vVSFOXsVYZnZK5FVegLeLcStAjnhpNlIZwkoo7dFn7yuNasLrs2itq0dE5sbuBXL2tHGY1jyqjeXP4Nv3m8/LS+u7v+9+MtvPsfo0R0DDqUOxMAAAAASUVORK5CYII=" class="mx-auto" alt="">
                                        <p class="text-13 group-data-[topbar=dark]:text-zink-200 text-gray-600 mt-2">Dribbble</p>
                                    </div>
                                </div>
                                <div class="flex justify-between gap-x-2 mt-2">
                                    <div class="p-2 text-center cursor-pointer group-data-[topbar=dark]:text-zink-200 group-data-[topbar=dark]:hover:bg-zink-50 group-data-[topbar=dark]:hover:text-white">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAhCAMAAABkz+JgAAAAxlBMVEVHcEwAfuYAfuYAfuYAfuYAfecAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuUAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAf+UAfuYAfuYAfuYAfuYAfuYAfuYAfuYAf+YAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuUAfuYAgOcAfuYAfeYAf+YAfuYAfuZXV9ysAAAAQXRSTlMACxEy+QLr/PX+2xgHGh58vjZgQeTHDu1k6RWMKIbTudej4Jipy0cFcPPvL3MkTBNn0HfFVq5Q6LVrOh8GnFk8kkQ6JVUAAAGsSURBVBgZfcEHgppAAAXQjw4Mgi5iD/Yu9o6uW/Lvf6kgiowmm/cQq3y1G0g0hvMKXuTaksESMdei2LhQaWuTIbOQxZW+9xnyJys8NMqCEVHXAYybPiNyOMNNZW3wYWBjVZeMmVsPocVOMiE3bl4yITdpYFSlShyKXZ8qs4ZcmYrSKIvxd4+KzQXQ+oJ31X4OV5VmlXdyYCM0rklGrLSOG/0tz4jcZnGz7JEMnCwS2sQiWSroiHlDnlY6nngDGjMo3tseXun9dyi8jiyn8MzeyamLh31A0ndSSKQmPZJBLYuI7kheZaouYpcWI7KJK+9T8M7sL3CVq5uMHS5ArkOFudeB4pSK0gWjElXiMOoKqn6tgVReMpEZvuUzTMjWBSGt1mMs8zmrp+uCselcw01uJxkRzqXDanouGJFlGw/jQsCQUThaJIPC0WAoOKeg0k6SRnHpM+I0LMrWAs/m6a/urCl4I7ru6ewV8KxtLO0uE3m7OG3j2dmXFlWdKZt44bYEVZlOEX/RagYTxsTGv1S6Pm/MfAM/+CiWeWUds/jZh1Oi8VvDf+mLbVrHsz8x4n90MIcLhQAAAABJRU5ErkJggg==" class="mx-auto" alt="">
                                        <p class="text-13 group-data-[topbar=dark]:text-zink-200 text-gray-600 mt-2">Dropbox</p>
                                    </div>
                                    <div class="p-2 text-center cursor-pointer group-data-[topbar=dark]:text-zink-200 group-data-[topbar=dark]:hover:bg-zink-50 group-data-[topbar=dark]:hover:text-white">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAjCAMAAADCMPhoAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAJAUExURUdwTGVPRGVPRHVeUGVPRGVPRGRPRWVPRGVPRGVPRGRQRWVPRWVPRGVPRGVPRGRPRWVPRGVPRGVPRGVPRGVPRGBVUmVPRGVPRGtUR2VPRGVPRGVPRGVPRGVPRGVPRGVPRF9LQ3NZSZ6IdmVPRGNVT3poX2VPRGVPRHlhRl9gZIFnR2VPRJBpTP3rzvTSqxIgNEme1yyDwhUiNY5oTGZQRGlSRfzoyf3qzffbuPXixZpzVfTVsGBMQ/PQqXpbSIRiSnFWRvjlyP///39fSW1URrKUeIhkSkM8Pe/Np4tmSyx8tvrgvv37+ZRtT5ZwUuPDn1VHQ595WnNYR5FqTVKCo2NOQ/vlxdrBpCEpN9y7mPXUrj1IWZV7ZzWKxqqTfunIo/PRq7mafsm/ubipoP338LispLyrmKWNeFtlcPzy55yBa/PNo9e2lCcsOO3AkO7Gm1lZXhUpQi6CvsilgzA8TaeCY0SZ05yDbysuOTExOvbYs/HdwaqHaeDBnc62nGJqeOXQtBspPLKch8ytj/327fjz7sO3r35sWb+yqbOObk5jdmNdXzR7sPHJnfDbvUVujVd1inhxcVJgb7+aeerXvDZ5qo2Aeyg0Rh9PdkhphShzq/fixBxFaRk1UZ97XjpznjZCUzQzO15LQydrnq6Vf829sPnn06GGcIRlTy4+UqCeoPLv7s7Hw+Hd2+zp546UnqCjpc62e7uoayhfiqmRSHWAjlBTROa+T9KxTFKFqe/HTp+XXllwgsW4a5e0njlHS3QagBcAAAArdFJOUwChif0QVMAFATnZ3hjoM8j3bbLSKPesC/SV9JpILoBY8Pz9kf3wgnaT/pqvGFBIAAACu0lEQVQ4y3WU5VsiURTGCZFBxcCu7ebOXBiQRgQBRbBwLbCwde3uWN1Ht7u7w+3u/df23mGYhcf1/fp776k5Z3i8CIklObm8rZWbndr9c+2QmCeOF22P34Tj+Ae/KX79/vHlQObeK+dPViRERWBCtOewQqH48/3rx3cvFmkIYX90RPLMbgVWyef3b/0Qc0hLw3hUwjmGN3741A1Z0bFhPBaHV0w8fP5mGdJI2DCV/Y/HMLzx1r1Fum7qvslkKuqH9A4xlz/67ATiI8P+MXraJA9quiiJC7DthFKJyoP+5TqM1XmWQq9dncZxyZBSqWwsgWN0EcJ5hSqA5eSaJGJOIUMJfRVWIOwCQVWV7UxnDaILiI8M05h7ASg1GEqrQFm9r1bGGmSXkeEahCi+HQCDdYbCMg8MxrCGVMRvQFiH8qPsZ3ynB44wluJww21IV6MCAHAYzYMMpuqbk1kD/7ry7oNqxOX5ACxQ6HlfOXovLE/gxjTkRbFdankhAKP4ce8kpXMbizNEoTkUoNpG51AEFSgzI4Oj13jJMa/R7+IHDfssoNJMNaARokDHWyjKWKMlrVqS1DYJgkW4QMBnRgacA1T21ZAh6RrisEFgAXMa3Roy2F2gcl4TwtqZZmEcW0NVYCmAP6HTUBziGl1LoC24MsRu1B9QMX1e1CGm17h1LStd6683pESw0aSMAm8eM8nxmyT56HFra+vLVx6bzXY0NCyxgFkSFSidJa0rT3ra23t6PDbPuj6LuwnWAGpJsulY++qqx7bR0WntEnFLkYYNFgDGSXK2s62jo61zQe+eD9/rRLxNTgD0bBc1bl+zMCXsMiQ4hN0JHCGHtl64P+L2RNihtqju1FoxXuqSC4jI442XYoe6IP/Z06ZJoTwradN5E/xEOafolP/9INIFyYxHKpNs+RMhUnIk4T+Gv3cNvzi99G5fAAAAAElFTkSuQmCC" class="mx-auto" alt="">
                                        <p class="text-13 group-data-[topbar=dark]:text-zink-200 text-gray-600 mt-2 whitespace-nowrap">Mail Chimp</p>
                                    </div>
                                    <div class="p-2 text-center cursor-pointer group-data-[topbar=dark]:text-zink-200 group-data-[topbar=dark]:hover:bg-zink-50 group-data-[topbar=dark]:hover:text-white">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAACplBMVEVHcEz////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////60uX///////////////////////////////9uytzmmQDpqCA+uZHgFWPkkQAWjnjODgjIAQNVwdYarX3XADfcAEj5/f3cAE7L7PN/1e7ppAuw49I2t42G1bjjFnJkyuXsqyX22qE8uJDyn75zzN70qcViegRUgh/ZAT245ddB2aIzACb34LAFgmbMAgpFsrj//vTS7/QVqnr+/PrppxwwvIzvw2Puu1BKvdT+8PXI7OEOqHaS1+XfA15cw9f96r7E6vFcz/pLdARCvZTw+fbfDV9lhhv/ryHpU4zhGmj2vtH7AlgdtIEYDjGm3+oKlG8bk3zrtwmd2+ggl4FSwpoIimozpJrIkgDe9PrPJQB12v/rtiT8//8rpoR/0N6v4/LtwBxSwtvlO3vI6+pgxqVGu9MLp3NzzLC95++Zkxzwibb/GW0bfWb33qvumwD+c6cUACE3ADAvs4k5UVo3EDnvzCxsxK/kfUb96vnSNgD+rBznnh81r4zUEil7ysTpf4H384miwZjWOxfcag395/cPjW714Hn3ynT6nABVvc9gx+D44rVkx9rbWhfkjxzmS4V3ih1Lj03fFV7TDCJmnV5staHhK2njMHNuxc0nn4Jv0e+wVX9dqo3sFmem6P9Eu9JtAC/IvG1Jfhxym1BsgQqh5/9AEjyoAErufqr01pXrsDYoDjQ4Gj0cy47Alw5wLFTuAVp6z7PYJWp43rueFVRmEkb0ZprVAEUgt4QsiG94nZYsIT9Gx5y9/+uQ18Ci3coAom6/ICZyAAAAKXRSTlMAP9pMoGFRR+eup71y+9DzuF0xoyLgFQKyWWadV4P2w5b+kQivDFtcxZCJTt8AAAKlSURBVBgZdcCDU2QBGADwrxXaai/76oTvvbdmNnezbetqsjHZOtu2bdvGf3K1u9NMN9cPFmPzOOtZsBQ6jiX5IxP+z5bjLxKJnprCP+wtGSwAsMJnpB9J4Vq2I8MeFliiZziuBLDBZJKixrNR5eaGxmBgrupNTx9ANoDj2HhxMXn3YZAsJUNlDno8z/4Ar7g0S1sWL4Z6NfQgtNuXIPpyeKC3zFMuEMR5861Vsbfu590LDbnYQpxIcbMDPXqBl1d+Yl1sZ5As90ZIUVHIhdxuWRUagZ4Test3tB+M9s0irl0pCgnNC+3obEIT0FlHw6Zd9WJxZIM7QRC5Z/PODDVmc5wtQIeNg0G+R8XianEt4SvLatnb6Fd85LA1GJjl9GUR7g311eLIaPeq2LaYbR6Uh1+8EVhZrAIA04yUIMI9OlJcu2ETzksiKYrMNuMickwAaDm3ZbJjxNV2QWIdzosgqdaaQwcCT196gubAxsGODDeVd0V+gDwN522s2b5/X6laqVYMcwCYNOQzzMLlAkGcN87ZsnmrRCoN8xGWhpWYwhwrG3AqCJgWJGowNbjERyGNkkh2+hQqFYE0MOC/f6kJGL0+olRmnpNIJNIodWZPMNJBh+7KDx+deTF5p1woFPqcl0qjmnevQBc66Lhi2ad3Wu3U80fCm4XqTEXzyVMee0wtQI8VXxKmLP9YOTtb+bhcfXm4rLWry8Mvxgj0lgUrCoUjHyqntJOvJ8qQtjyJpCgywhj0eIEKofDNZ+33ma8/2rhGsPq4KCFBFMEFPYfUnjBl6cS3Co3mS5ozAAuTRaLkeBYY2GFgcCr+rBAI5G/5awCM0d8fGbCAacxgmxR4TefLe9EGAJhcLhMWs8Vff9L7Pa1hCSb4eyAc2bAUBzOOCx0W+QuvxroExNCXxAAAAABJRU5ErkJggg==" class="mx-auto" alt="">
                                        <p class="text-13 group-data-[topbar=dark]:text-zink-200 text-gray-600 mt-2">Slack</p>
                                    </div>
                                </div>
                            </ul>
                        </div>
                        <div class="hidden lg:block px-3 fullscreen-icon xl:ml-1 cursor-pointer" data-toggle="fullscreen">
                            <i class="bx bx-fullscreen text-[22px] text-gray-700 group-data-[topbar=dark]:text-zink-200 full-screen-icon"></i>
                            <i class='hidden mid-screen-icon  text-[22px] text-gray-700 group-data-[topbar=dark]:text-zink-200 bx bx-exit-fullscreen'></i>
                        </div>
                        <div class="md:relative dropdown px-3">
                            <button class="p-0 border-0 btn dropdown-toggle h-header text-gray-700 group-data-[topbar=dark]:text-zink-200 " type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                                <div class="relative">
                                    <i class="bx bx-bell bx-tada text-[22px]"></i>
                                    <span class="absolute -top-1.5 -right-2 w-[14px] h-[14px] text-[10px] bg-red-500 rounded-full inline-block text-white">3</span>
                                </div>
                            </button>
                            <ul class="w-full absolute right-0 left-auto top-auto z-50 hidden md:w-80 py-2 text-left list-none bg-white border border-transparent rounded shadow-4xl dropdown-menu bg-clip-padding group-data-[topbar=dark]:bg-zink-700 group-data-[topbar=dark]:border-zink-50 group-data-[topbar=dark]:text-zink-200 " aria-labelledby="dropdownMenuButton1">
                                <li class="flex justify-between py-3 px-4">
                                    <p>Notifications</p>
                                    <p class="text-[10px] text-blue-500">View all</p>
                                </li>
                                <ul class="max-h-[calc(38vh_-_70px)]" data-simplebar>
                                    <li class="flex gap-x-4 py-3 px-4 hover:bg-gray-50 group-data-[topbar=dark]:text-zink-200 group-data-[topbar=dark]:hover:bg-zink-50 group-data-[topbar=dark]:hover:text-white cursor-pointer">
                                        <div class="flex-shrink-0 w-8 h-8 rounded-full flex justify-center items-center bg-blue-500  text-white">
                                            <i class="bx bx-cart"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-13 font-medium  group-data-[topbar=dark]:text-white ">Your order is placed</h3>
                                            <p class="text-gray-600 group-data-[topbar=dark]:text-zink-200 text-13">If several languages coalesce the grammar</p>
                                            <p class="text-gray-600 group-data-[topbar=dark]:text-zink-200 text-13"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                        </div>
                                    </li>
                                    <li class="flex gap-x-4 py-3 px-4 hover:bg-gray-50 group-data-[topbar=dark]:text-zink-200 group-data-[topbar=dark]:hover:bg-zink-50 group-data-[topbar=dark]:hover:text-white cursor-pointer">
                                        <div>
                                            <img src="assets/images/avatar-3.jpg" class="w-8 h-8 rounded-full flex-shrink-0" alt="">
                                        </div>
                                        <div>
                                            <h3 class="text-13 font-medium  group-data-[topbar=dark]:text-white ">James Lemire</h3>
                                            <p class="text-gray-600 group-data-[topbar=dark]:text-zink-200 text-13">It will seem like simplified English.</p>
                                            <p class="text-gray-600 group-data-[topbar=dark]:text-zink-200 text-13"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                        </div>
                                    </li>
                                    <li class="flex gap-x-4 py-3 px-4 hover:bg-gray-50 group-data-[topbar=dark]:text-zink-200 group-data-[topbar=dark]:hover:bg-zink-50 group-data-[topbar=dark]:hover:text-white cursor-pointer">
                                        <div class="flex-shrink-0 w-8 h-8 rounded-full flex justify-center items-center bg-green-500 text-white">
                                            <i class="bx bx-cart"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-13 font-medium  group-data-[topbar=dark]:text-white ">Your order is placed</h3>
                                            <p class="text-gray-600 group-data-[topbar=dark]:text-zink-200 text-13">If several languages coalesce the grammar</p>
                                            <p class="text-gray-600 group-data-[topbar=dark]:text-zink-200 text-13"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                        </div>
                                    </li>
                                    <li class="flex gap-x-4 py-3 px-4 hover:bg-gray-50 group-data-[topbar=dark]:text-zink-200 group-data-[topbar=dark]:hover:bg-zink-50 group-data-[topbar=dark]:hover:text-white cursor-pointer">
                                        <div class="flex-shrink-0 w-8 h-8 rounded-full flex justify-center items-center bg-blue-500 text-white">
                                            <i class="bx bx-cart"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-13 font-medium  group-data-[topbar=dark]:text-white ">Your order is placed</h3>
                                            <p class="text-gray-600 group-data-[topbar=dark]:text-zink-200 text-13">If several languages coalesce the grammar</p>
                                            <p class="text-gray-600 group-data-[topbar=dark]:text-zink-200 text-13"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                        </div>
                                    </li>
                                    <li class="flex gap-x-4 py-3 px-4 hover:bg-gray-50 group-data-[topbar=dark]:text-zink-200 group-data-[topbar=dark]:hover:bg-zink-50 group-data-[topbar=dark]:hover:text-white cursor-pointer">
                                        <div>
                                            <img src="assets/images/avatar-3.jpg" class="w-8 h-8 rounded-full flex-shrink-0" alt="">
                                        </div>
                                        <div>
                                            <h3 class="text-13 font-medium  group-data-[topbar=dark]:text-white ">James Lemire</h3>
                                            <p class="text-gray-600 group-data-[topbar=dark]:text-zink-200 text-13">It will seem like simplified English.</p>
                                            <p class="text-gray-600 group-data-[topbar=dark]:text-zink-200 text-13"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                        </div>
                                    </li>
                                    <li class="flex gap-x-4 py-3 px-4 hover:bg-gray-50 group-data-[topbar=dark]:text-zink-200 group-data-[topbar=dark]:hover:bg-zink-50 group-data-[topbar=dark]:hover:text-white cursor-pointer">
                                        <div class="flex-shrink-0 w-8 h-8 rounded-full flex justify-center items-center bg-green-500 text-white">
                                            <i class="bx bx-cart"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-13 font-medium  group-data-[topbar=dark]:text-white ">Your order is placed</h3>
                                            <p class="text-gray-600 group-data-[topbar=dark]:text-zink-200 text-13">If several languages coalesce the grammar</p>
                                            <p class="text-gray-600 group-data-[topbar=dark]:text-zink-200 text-13"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                        </div>
                                    </li>
                                </ul>
                                <li class="flex justify-center py-3">
                                    <p class="text-[14px] text-blue-500"><i class="mdi mdi-arrow-right-circle mr-1"></i> View More..</p>
                                </li>
                            </ul>
                        </div>
                        <div class="md:relative dropdown px-3">
                            <button class="p-0  border-0 btn dropdown-toggle h-header text-gray-700 group-data-[topbar=dark]:text-gray-200 flex items-center" type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                                <img src="assets/images/avatar-1.jpg" class="w-9 h-9 p-[3px] rounded-full ltr:mr-2 rtl:ml-2" alt="">
                                <p class="hidden xl:block text-13 text-gray-700 group-data-[topbar=dark]:text-zink-200 ">Henry <i class="mdi mdi-chevron-down"></i> </p>
                            </button>
                            <ul class="w-full absolute right-0 left-auto top-auto z-50 hidden md:w-40 py-2 text-left list-none bg-white border border-transparent rounded shadow-4xl dropdown-menu bg-clip-padding group-data-[topbar=dark]:bg-zink-700 group-data-[topbar=dark]:border-zink-50 group-data-[topbar=dark]:text-zink-200" aria-labelledby="dropdownMenuButton1">
                                <li><a class="items-center w-full px-4 py-1.5 flex text-sm font-normal bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50  group-data-[topbar=dark]:text-zink-200 group-data-[topbar=dark]:hover:bg-zink-50 group-data-[topbar=dark]:hover:text-white" href="#">
                                        <span><i class="bx bx-user  text-16 ltr:mr-2 rtl:ml-2"></i></span>Profile
                                    </a>
                                </li>
                                <li><a class="items-center w-full px-4 py-1.5 flex text-sm font-normal bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50  group-data-[topbar=dark]:text-zink-200 group-data-[topbar=dark]:hover:bg-zink-50 group-data-[topbar=dark]:hover:text-white" href="#">
                                        <span><i class="bx bx-wallet text-16 ltr:mr-2 rtl:ml-2"></i></span>My Wallet
                                    </a>
                                </li>
                                <li><a class="items-center w-full px-4 py-1.5 flex text-sm font-normal bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 relative  group-data-[topbar=dark]:text-zink-200 group-data-[topbar=dark]:hover:bg-zink-50 group-data-[topbar=dark]:hover:text-white" href="#">
                                        <span><i class="bx bx-wrench  text-16 ltr:mr-2 rtl:ml-2"></i></span>Settings <span class="absolute flex items-center justify-center top-2 right-4 w-4 h-4 text-[11px] bg-green-500  text-white">3</span>
                                    </a>
                                </li>
                                <li><a class="items-center w-full px-4 py-2 flex text-sm font-normal bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50  group-data-[topbar=dark]:text-zink-200 group-data-[topbar=dark]:hover:bg-zink-50 group-data-[topbar=dark]:hover:text-white" href="#">
                                        <span><i class="bx bx-lock-open text-16 ltr:mr-2 rtl:ml-2"></i></span>Lock screen
                                    </a>
                                </li>
                                <div class="border-t border-gray-300 group-data-[topbar=dark]:border-zink-50">
                                    <a class="text-red-500 items-center w-full px-4 py-2 flex text-sm font-normal  bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50  group-data-[topbar=dark]:text-red-500 group-data-[topbar=dark]:hover:bg-zink-50 group-data-[topbar=dark]:hover:text-white" href="#">
                                        <span><i class="bx bx-power-off text-red-500 text-16 ltr:mr-2 rtl:ml-2"></i></span>Logout
                                    </a>
                                </div>
                            </ul>
                        </div>
                        <div>
                            <button class="px-3 h-header" data-drawer-target="drawerSetting">
                                <i class="bx bx-cog bx-spin text-[22px] text-gray-700 group-data-[topbar=dark]:text-zink-200 settingDrawer"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-[1500px]">

        <div class="group-data-[sidebar-size=lg]:ltr:lg:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:lg:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:lg:ml-vertical-menu-sm group-data-[sidebar-size=sm]:lg:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_1)] px-6 group-data-[layout=horizontal]:!mx-auto group-data-[layout=horizontal]:max-w-screen-2xl  group-data-[layout=horizontal]:lg:pt-[calc(theme('spacing.header')_*_1.75)]">
            <div class="container-fluid">

                <div class="md:flex items-center justify-between pt-6 pb-5">
                    <div>
                        <h6 class="mb-0 text-16 uppercase font-semibold dark:text-white">Dashboard</h6>
                    </div>
                    <div class="shrink-0">
                        <ul class="mb-0 flex items-center gap-4 text-[13px] mt-2 md:mt-0">
                            <li class="before:content-['/'] before:absolute ltr:before:-right-1 rtl:before:-left-2 before:text-gray-600 before:text-[9px] before:top-0 before:bottom-0 before:flex before:items-center relative pr-3 inline-block"><a href="#!" class="text-gray-800 dark:text-white">Dashboard</a></li>
                            <li class="text-gray-600 dark:text-zink-200">Dashboard</li>
                        </ul>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12 2xl:col-span-8">
                        <div class="grid grid-col-2 md:grid-cols-2 lg:grid-cols-3 gap-x-6">
                            <div class="card dark:bg-zink-700">
                                <div class="card-body">
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <p class="text-13 mb-3 font-medium text-gray-600 dark:text-zink-200">Total agent</p>
                                            <h4 class="text-[19px] leading-6 font-medium">{{ \App\Models\Employee::all()->count() }}</h4>
                                        </div>
                                        <div class="w-12 h-12 bg-blue-500 rounded-full flex justify-center items-center relative before:absolute before:content-[''] before:w-2 before:h-12 before:bg-white before:bg-opacity-10 before:transform before:rotate-[32deg] before:-top-1">
                                            <i class="bx bx-copy-alt text-[24px] text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card dark:bg-zink-700">
                                <div class="card-body">
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <p class="text-13 mb-3 font-medium text-gray-600 dark:text-zink-200">To be paid</p>
                                            <h4 class="text-[19px] leading-6 font-medium">  {{'$' . Number::format($salaryToBePaid)}}</h4>
                                        </div>
                                        <div class="w-12 h-12 bg-blue-500 rounded-full flex justify-center items-center relative before:absolute before:content-[''] before:w-2 before:h-12 before:bg-white before:bg-opacity-10 before:transform before:rotate-[32deg] before:-top-1">
                                            <i class="bx bx-archive-in  text-[24px] text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card dark:bg-zink-700">
                                <div class="card-body">
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <p class="text-13 mb-3 font-medium text-gray-600 dark:text-zink-200">Average Price</p>
                                            <h4 class="text-[19px] leading-6 font-medium">$16.2</h4>
                                        </div>
                                        <div class="w-12 h-12 bg-blue-500 rounded-full flex justify-center items-center relative before:absolute before:content-[''] before:w-2 before:h-12 before:bg-white before:bg-opacity-10 before:transform before:rotate-[32deg] before:-top-1">
                                            <i class="bx bx-purchase-tag-alt text-[24px] text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12">
                        <div class="card dark:bg-zink-700">
                            <div class="nav-tabs custom-tab">
                                <div class="tab-content">
                                    <div class="block p-6 tab-pane" id="tab-about">
                                        <div>
                                            <div>
                                                <h5 class="mb-6 text-gray-700 text-15 font-semibold dark:text-gray-50">Latest Transaction</h5>
                                            </div>
                                            <div class="relative overflow-x-auto whitespace-nowrap">
                                                <table class="w-full text-sm ltr:text-left rtl:text-right text-gray-700 ">
                                                    <thead class="text-sm border-b dark:border-transparent border-gray-400/50 text-black font-medium bg-blue-50 dark:bg-zink-300 dark:text-zink-200">
                                                        <tr>
                                                            <th scope="col" class="p-3">
                                                                <div class="form-group">
                                                                    <input class="w-4 h-4 mr-1 bg-transparent border border-gray-400 rounded-sm focus:ring-1 appearance-none dark:bg-zink-700 dark:border-zink-700 overflow-hidden checked:bg-blue-500 checked:border-custom-500" type="checkbox" value="">
                                                                </div>
                                                            </th>
                                                            <th scope="col" class="p-3 text-13 font-semibold">
                                                                Order ID
                                                            </th>
                                                            <th scope="col" class="p-3 text-13 font-semibold">
                                                                Billing Name
                                                            </th>
                                                            <th scope="col" class="p-3 text-13 font-semibold">
                                                                Date
                                                            </th>
                                                            <th scope="col" class="p-3 text-13 font-semibold">
                                                                Total
                                                            </th>
                                                            <th scope="col" class="p-3 text-13 font-semibold">
                                                                Payment Status
                                                            </th>
                                                            <th scope="col" class="px-6 py-3 text-13 font-semibold">
                                                                Payment Method
                                                            </th>
                                                            <th scope="col" class="px-6 py-3 text-13 font-semibold">
                                                                View Details
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="bg-transparent border-b border-gray-300 dark:bg-transparent dark:text-zink-200 dark:border-zink-50 text-13">
                                                            <th class="p-3">
                                                                <div class="form-group">
                                                                    <input class="w-4 h-4 mr-1 bg-transparent dark:border-zink-300 border border-gray-400 rounded-sm focus:ring-1 appearance-none overflow-hidden checked:bg-blue-500 checked:border-custom-500" type="checkbox" value="">
                                                                </div>

                                                            </th>
                                                            <th scope="row" class="p-3 font-medium text-gray-900 dark:text-zink-200 whitespace-nowrap">#SK2540
                                                            </th>
                                                            <td class="p-3">
                                                                Neal Matthews
                                                            </td>
                                                            <td class="p-3">
                                                                07 Oct, 2019
                                                            </td>
                                                            <td class="p-3">
                                                                400
                                                            </td>
                                                            <td class="p-3">
                                                                <div class="text-green-500 dark:bg-green-500/20 text-[11px] font-medium px-2 bg-green-50 rounded-sm inline">
                                                                    paid
                                                                </div>
                                                            </td>
                                                            <td class="p-3">
                                                                <div><i class="fab fa-cc-mastercard mr-1"></i> Mastercard</div>
                                                            </td>
                                                            <td class="p-3">
                                                                <button type="button" data-modal-target="defaultModal" type="button" class="py-1 rounded-full border-transparent text-[11px] text-white btn bg-blue-500 hover:bg-blue-600 px-2  ">View Details</button>

                                                                <div id="defaultModal" modal-center class="fixed flex flex-col top-1/2 left-1/2  -translate-x-1/2 -translate-y-1/2    w-full  max-w-lg z-drawer show hidden">
                                                                    <div class="w-full md:max-w-lg bg-white shadow rounded-md dark:bg-zink-700 dark:text-zink-200 dark:shadow whitespace-normal">
                                                                        <div class="flex items-center justify-between p-4 border-b border-gray-300 dark:border-zink-50">
                                                                            <h5 class="mb-1 text-15 font-medium dark:text-white">Order Details</h5>
                                                                            <button data-modal-close="defaultModal"><i class="mdi mdi-close noti-icon text-16"></i></button>
                                                                        </div>
                                                                        <div class="h-full p-4 dark:text-white text-gray-600 text-13">
                                                                            <p>Product id: <span class="text-blue-500">#SK2540</span></p>
                                                                            <p>Billing Name: <span class="text-blue-500">Neal Matthews</span></p>

                                                                            <div class="relative overflow-x-auto">
                                                                                <table class="w-full text-sm ltr:text-left rtl:text-right text-gray-500">
                                                                                    <thead class="text-sm text-gray-700 dark:text-zink-200">
                                                                                        <tr class="">
                                                                                            <th scope="col" class="p-3 border-b border-gray-300 dark:border-zink-50">
                                                                                                Product
                                                                                            </th>
                                                                                            <th scope="col" class="p-3 border-b border-gray-300 dark:border-zink-50">
                                                                                                Product Name
                                                                                            </th>
                                                                                            <th scope="col" class="p-3 border-b border-gray-300 dark:border-zink-50">
                                                                                                Price
                                                                                            </th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>

                                                                                        <tr class="border-b border-gray-300 dark:bg-transparent dark:border-zink-50">
                                                                                            <th scope="row" class="p-3 font-medium text-gray-700 whitespace-nowrap dark:text-zink-200">

                                                                                                <img src="assets/images/img-7.png" class="w-12 h-12" alt="">
                                                                                            </th>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <div class="text-13 text-gray-700 dark:text-zink-200">
                                                                                                    <p class="text-[14px] text-gray-800 dark:text-white">Wireless Headphone (Black)</p>
                                                                                                    <p>$ 225 x 1</p>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <p class="text-13 text-gray-700 dark:text-zink-200">$ 255</p>
                                                                                            </td>

                                                                                        </tr>
                                                                                        <tr class="border-b border-gray-300 dark:bg-transparent dark:border-zink-50">
                                                                                            <th scope="row" class="p-3 font-medium text-gray-700 whitespace-nowrap dark:text-zink-200">

                                                                                                <img src="assets/images/img-42.png" class="w-12 h-12" alt="">
                                                                                            </th>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <div class="text-13 text-gray-700 dark:text-zink-200">
                                                                                                    <p class="text-[14px] text-gray-800 dark:text-white">Phone patterned cases</p>
                                                                                                    <p>$ 145 x 1</p>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <p class="text-13 text-gray-700 dark:text-zink-200">$ 145</p>
                                                                                            </td>

                                                                                        </tr>
                                                                                        <tr class="border-b border-gray-300 dark:bg-transparent dark:border-zink-50">
                                                                                            <th scope="row" class="p-3 font-medium text-gray-700 whitespace-nowrap dark:text-zink-200">

                                                                                                <p class="text-[14px] text-gray-800 dark:text-white">Sub Total:</p>
                                                                                            </th>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">

                                                                                            </td>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <p class="text-13 text-gray-700 dark:text-zink-200">$ 400</p>
                                                                                            </td>

                                                                                        </tr>
                                                                                        <tr class="border-b border-gray-300 dark:bg-transparent dark:border-zink-50">
                                                                                            <th scope="row" class="p-3 font-medium text-gray-700 whitespace-nowrap dark:text-zink-200">

                                                                                                <p class="text-[14px] text-gray-800 dark:text-white">Shipping:</p>
                                                                                            </th>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">

                                                                                            </td>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <p class="text-13 text-gray-700 dark:text-zink-200">Free</p>
                                                                                            </td>

                                                                                        </tr>
                                                                                        <tr class="border-b border-gray-300 dark:bg-transparent dark:border-zink-50">
                                                                                            <th scope="row" class="p-3 font-medium text-gray-700 whitespace-nowrap dark:text-zink-200">

                                                                                                <p class="text-[14px] text-gray-800 dark:text-white">Total:</p>
                                                                                            </th>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">

                                                                                            </td>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <p class="text-13 text-gray-700 dark:text-zink-200">$ 400</p>
                                                                                            </td>

                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex items-center justify-end p-4 border-t  border-gray-300 dark:border-zink-50">
                                                                            <button type="button" data-modal-close="defaultModal" class="text-white transition-all duration-300 ease-linear bg-gray-600 border-gray-600 hover:bg-gray-700 hover:border-gray-700 hover:text-white active:bg-gray-700 active:border-gray-700 active:text-white focus:bg-gray-700 focus:border-gray-700 focus:text-white focus:ring focus:ring-gray-700/30 btn">Close</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-white border-b text-13 border-gray-300 dark:bg-transparent dark:text-zink-200 dark:border-zink-50">
                                                            <th class="p-3">
                                                                <div class="form-group">
                                                                    <input class="w-4 h-4 mr-1 bg-transparent dark:border-zink-300 border border-gray-400 rounded-sm focus:ring-1 appearance-none overflow-hidden checked:bg-blue-500 checked:border-custom-500" type="checkbox" value="">
                                                                </div>
                                                            </th>
                                                            <th scope="row" class="p-3 font-medium text-gray-900 dark:text-zink-200 whitespace-nowrap">#SK2541
                                                            </th>
                                                            <td class="p-3">Jamal Burnett</td>
                                                            <td class="p-3">07 Oct, 2019</td>
                                                            <td class="p-3">$380</td>
                                                            <td class="p-3">
                                                                <div class="text-red-500 dark:bg-red-500/20 text-[11px] font-medium px-2 bg-red-50 rounded-sm inline">
                                                                    Chargeback
                                                                </div>
                                                            </td>
                                                            <td class="p-3">
                                                                <div><i class="fab fa-cc-visa  mr-1"></i> Visa</div>
                                                            </td>
                                                            <td class="p-3">
                                                                <button type="button" data-modal-target="defaultModal" type="button" class="py-1 rounded-full border-transparent text-[11px] text-white btn bg-blue-500 hover:bg-blue-600 px-2  ">View Details</button>

                                                                <div id="defaultModal" modal-center class="fixed flex flex-col top-1/2 left-1/2  -translate-x-1/2 -translate-y-1/2    w-full  max-w-lg z-drawer show hidden">
                                                                    <div class="w-full md:max-w-lg bg-white shadow rounded-md dark:bg-zink-700 dark:text-zink-200 dark:shadow whitespace-normal">
                                                                        <div class="flex items-center justify-between p-4 border-b border-gray-300 dark:border-zink-50">
                                                                            <h5 class="mb-1 text-15 font-medium dark:text-white">Order Details</h5>
                                                                            <button data-modal-close="defaultModal"><i class="mdi mdi-close noti-icon text-16"></i></button>
                                                                        </div>
                                                                        <div class="h-full p-4 dark:text-white text-gray-600 text-13">
                                                                            <p>Product id: <span class="text-blue-500">#SK2540</span></p>
                                                                            <p>Billing Name: <span class="text-blue-500">Neal Matthews</span></p>

                                                                            <div class="relative overflow-x-auto">
                                                                                <table class="w-full text-sm ltr:text-left rtl:text-right text-gray-500">
                                                                                    <thead class="text-sm text-gray-700 dark:text-zink-200">
                                                                                        <tr class="">
                                                                                            <th scope="col" class="p-3 border-b border-gray-300 dark:border-zink-50">
                                                                                                Product
                                                                                            </th>
                                                                                            <th scope="col" class="p-3 border-b border-gray-300 dark:border-zink-50">
                                                                                                Product Name
                                                                                            </th>
                                                                                            <th scope="col" class="p-3 border-b border-gray-300 dark:border-zink-50">
                                                                                                Price
                                                                                            </th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>

                                                                                        <tr class="border-b border-gray-300 dark:bg-transparent dark:border-zink-50">
                                                                                            <th scope="row" class="p-3 font-medium text-gray-700 whitespace-nowrap dark:text-zink-200">

                                                                                                <img src="assets/images/img-7.png" class="w-12 h-12" alt="">
                                                                                            </th>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <div class="text-13 text-gray-700 dark:text-zink-200">
                                                                                                    <p class="text-[14px] text-gray-800 dark:text-white">Wireless Headphone (Black)</p>
                                                                                                    <p>$ 225 x 1</p>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <p class="text-13 text-gray-700 dark:text-zink-200">$ 255</p>
                                                                                            </td>

                                                                                        </tr>
                                                                                        <tr class="border-b border-gray-300 dark:bg-transparent dark:border-zink-50">
                                                                                            <th scope="row" class="p-3 font-medium text-gray-700 whitespace-nowrap dark:text-zink-200">

                                                                                                <img src="assets/images/img-42.png" class="w-12 h-12" alt="">
                                                                                            </th>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <div class="text-13 text-gray-700 dark:text-zink-200">
                                                                                                    <p class="text-[14px] text-gray-800 dark:text-white">Phone patterned cases</p>
                                                                                                    <p>$ 145 x 1</p>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <p class="text-13 text-gray-700 dark:text-zink-200">$ 145</p>
                                                                                            </td>

                                                                                        </tr>
                                                                                        <tr class="border-b border-gray-300 dark:bg-transparent dark:border-zink-50">
                                                                                            <th scope="row" class="p-3 font-medium text-gray-700 whitespace-nowrap dark:text-zink-200">

                                                                                                <p class="text-[14px] text-gray-800 dark:text-white">Sub Total:</p>
                                                                                            </th>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">

                                                                                            </td>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <p class="text-13 text-gray-700 dark:text-zink-200">$ 400</p>
                                                                                            </td>

                                                                                        </tr>
                                                                                        <tr class="border-b border-gray-300 dark:bg-transparent dark:border-zink-50">
                                                                                            <th scope="row" class="p-3 font-medium text-gray-700 whitespace-nowrap dark:text-zink-200">

                                                                                                <p class="text-[14px] text-gray-800 dark:text-white">Shipping:</p>
                                                                                            </th>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">

                                                                                            </td>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <p class="text-13 text-gray-700 dark:text-zink-200">Free</p>
                                                                                            </td>

                                                                                        </tr>
                                                                                        <tr class="border-b border-gray-300 dark:bg-transparent dark:border-zink-50">
                                                                                            <th scope="row" class="p-3 font-medium text-gray-700 whitespace-nowrap dark:text-zink-200">

                                                                                                <p class="text-[14px] text-gray-800 dark:text-white">Total:</p>
                                                                                            </th>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">

                                                                                            </td>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <p class="text-13 text-gray-700 dark:text-zink-200">$ 400</p>
                                                                                            </td>

                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex items-center justify-end p-4 border-t  border-gray-300 dark:border-zink-50">
                                                                            <button type="button" data-modal-close="defaultModal" class="text-white transition-all duration-300 ease-linear bg-gray-600 border-gray-600 hover:bg-gray-700 hover:border-gray-700 hover:text-white active:bg-gray-700 active:border-gray-700 active:text-white focus:bg-gray-700 focus:border-gray-700 focus:text-white focus:ring focus:ring-gray-700/30 btn">Close</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-white border-b border-gray-300 dark:bg-transparent dark:text-zink-200 dark:border-zink-50">
                                                            <th class="p-3">
                                                                <div class="form-group">
                                                                    <input class="w-4 h-4 mr-1 bg-transparent dark:border-zink-300 border border-gray-400 rounded-sm focus:ring-1 appearance-none overflow-hidden checked:bg-blue-500 checked:border-custom-500" type="checkbox" value="">
                                                                </div>

                                                            </th>
                                                            <th scope="row" class="p-3 font-medium text-gray-900 dark:text-zink-200 whitespace-nowrap">#SK2540
                                                            </th>
                                                            <td class="p-3">
                                                                Juan Mitchell
                                                            </td>
                                                            <td class="p-3">
                                                                06 Oct, 2019
                                                            </td>
                                                            <td class="p-3">
                                                                384
                                                            </td>
                                                            <td class="p-3">
                                                                <div class="text-green-500 dark:bg-green-500/20 text-[11px] font-medium px-2 bg-green-50 rounded-sm inline">
                                                                    paid
                                                                </div>
                                                            </td>
                                                            <td class="p-3">
                                                                <div><i class="fab fa-cc-mastercard mr-1"></i> Paypal</div>
                                                            </td>
                                                            <td class="p-3">
                                                                <button type="button" data-modal-target="defaultModal" type="button" class="py-1 rounded-full border-transparent text-[11px] text-white btn bg-blue-500 hover:bg-blue-600 px-2  ">View Details</button>

                                                                <div id="defaultModal" modal-center class="fixed flex flex-col top-1/2 left-1/2  -translate-x-1/2 -translate-y-1/2    w-full  max-w-lg z-drawer show hidden">
                                                                    <div class="w-full md:max-w-lg bg-white shadow rounded-md dark:bg-zink-700 dark:text-zink-200 dark:shadow whitespace-normal">
                                                                        <div class="flex items-center justify-between p-4 border-b border-gray-300 dark:border-zink-50">
                                                                            <h5 class="mb-1 text-15 font-medium dark:text-white">Order Details</h5>
                                                                            <button data-modal-close="defaultModal"><i class="mdi mdi-close noti-icon text-16"></i></button>
                                                                        </div>
                                                                        <div class="h-full p-4 dark:text-white text-gray-600 text-13">
                                                                            <p>Product id: <span class="text-blue-500">#SK2540</span></p>
                                                                            <p>Billing Name: <span class="text-blue-500">Neal Matthews</span></p>

                                                                            <div class="relative overflow-x-auto">
                                                                                <table class="w-full text-sm ltr:text-left rtl:text-right text-gray-500">
                                                                                    <thead class="text-sm text-gray-700 dark:text-zink-200">
                                                                                        <tr class="">
                                                                                            <th scope="col" class="p-3 border-b border-gray-300 dark:border-zink-50">
                                                                                                Product
                                                                                            </th>
                                                                                            <th scope="col" class="p-3 border-b border-gray-300 dark:border-zink-50">
                                                                                                Product Name
                                                                                            </th>
                                                                                            <th scope="col" class="p-3 border-b border-gray-300 dark:border-zink-50">
                                                                                                Price
                                                                                            </th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>

                                                                                        <tr class="border-b border-gray-300 dark:bg-transparent dark:border-zink-50">
                                                                                            <th scope="row" class="p-3 font-medium text-gray-700 whitespace-nowrap dark:text-zink-200">

                                                                                                <img src="assets/images/img-7.png" class="w-12 h-12" alt="">
                                                                                            </th>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <div class="text-13 text-gray-700 dark:text-zink-200">
                                                                                                    <p class="text-[14px] text-gray-800 dark:text-white">Wireless Headphone (Black)</p>
                                                                                                    <p>$ 225 x 1</p>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <p class="text-13 text-gray-700 dark:text-zink-200">$ 255</p>
                                                                                            </td>

                                                                                        </tr>
                                                                                        <tr class="border-b border-gray-300 dark:bg-transparent dark:border-zink-50">
                                                                                            <th scope="row" class="p-3 font-medium text-gray-700 whitespace-nowrap dark:text-zink-200">

                                                                                                <img src="assets/images/img-42.png" class="w-12 h-12" alt="">
                                                                                            </th>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <div class="text-13 text-gray-700 dark:text-zink-200">
                                                                                                    <p class="text-[14px] text-gray-800 dark:text-white">Phone patterned cases</p>
                                                                                                    <p>$ 145 x 1</p>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <p class="text-13 text-gray-700 dark:text-zink-200">$ 145</p>
                                                                                            </td>

                                                                                        </tr>
                                                                                        <tr class="border-b border-gray-300 dark:bg-transparent dark:border-zink-50">
                                                                                            <th scope="row" class="p-3 font-medium text-gray-700 whitespace-nowrap dark:text-zink-200">

                                                                                                <p class="text-[14px] text-gray-800 dark:text-white">Sub Total:</p>
                                                                                            </th>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">

                                                                                            </td>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <p class="text-13 text-gray-700 dark:text-zink-200">$ 400</p>
                                                                                            </td>

                                                                                        </tr>
                                                                                        <tr class="border-b border-gray-300 dark:bg-transparent dark:border-zink-50">
                                                                                            <th scope="row" class="p-3 font-medium text-gray-700 whitespace-nowrap dark:text-zink-200">

                                                                                                <p class="text-[14px] text-gray-800 dark:text-white">Shipping:</p>
                                                                                            </th>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">

                                                                                            </td>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <p class="text-13 text-gray-700 dark:text-zink-200">Free</p>
                                                                                            </td>

                                                                                        </tr>
                                                                                        <tr class="border-b border-gray-300 dark:bg-transparent dark:border-zink-50">
                                                                                            <th scope="row" class="p-3 font-medium text-gray-700 whitespace-nowrap dark:text-zink-200">

                                                                                                <p class="text-[14px] text-gray-800 dark:text-white">Total:</p>
                                                                                            </th>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">

                                                                                            </td>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <p class="text-13 text-gray-700 dark:text-zink-200">$ 400</p>
                                                                                            </td>

                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex items-center justify-end p-4 border-t  border-gray-300 dark:border-zink-50">
                                                                            <button type="button" data-modal-close="defaultModal" class="text-white transition-all duration-300 ease-linear bg-gray-600 border-gray-600 hover:bg-gray-700 hover:border-gray-700 hover:text-white active:bg-gray-700 active:border-gray-700 active:text-white focus:bg-gray-700 focus:border-gray-700 focus:text-white focus:ring focus:ring-gray-700/30 btn">Close</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-white border-b text-13 border-gray-300 dark:bg-transparent dark:text-zink-200 dark:border-zink-50">
                                                            <th class="p-3">
                                                                <div class="form-group">
                                                                    <input class="w-4 h-4 mr-1 bg-transparent dark:border-zink-300 border border-gray-400 rounded-sm focus:ring-1 appearance-none overflow-hidden checked:bg-blue-500 checked:border-custom-500" type="checkbox" value="">
                                                                </div>
                                                            </th>
                                                            <th scope="row" class="p-3 font-medium text-gray-900 dark:text-zink-200 whitespace-nowrap">#SK2541
                                                            </th>
                                                            <td class="p-3">Barry Dick</td>
                                                            <td class="p-3">05 Oct, 2019</td>
                                                            <td class="p-3">$412</td>
                                                            <td class="p-3">
                                                                <div class="text-green-500 dark:bg-green-500/20 text-[11px] font-medium px-2 bg-green-50 rounded-sm inline">
                                                                    Paid
                                                                </div>
                                                            </td>
                                                            <td class="p-3">
                                                                <div><i class="fab fa-cc-visa  mr-1"></i> Mastercard</div>
                                                            </td>
                                                            <td class="p-3">
                                                                <button type="button" data-modal-target="defaultModal" type="button" class="py-1 rounded-full border-transparent text-[11px] text-white btn bg-blue-500 hover:bg-blue-600 px-2  ">View Details</button>

                                                                <div id="defaultModal" modal-center class="fixed flex flex-col top-1/2 left-1/2  -translate-x-1/2 -translate-y-1/2    w-full  max-w-lg z-drawer show hidden">
                                                                    <div class="w-full md:max-w-lg bg-white shadow rounded-md dark:bg-zink-700 dark:text-zink-200 dark:shadow whitespace-normal">
                                                                        <div class="flex items-center justify-between p-4 border-b border-gray-300 dark:border-zink-50">
                                                                            <h5 class="mb-1 text-15 font-medium dark:text-white">Order Details</h5>
                                                                            <button data-modal-close="defaultModal"><i class="mdi mdi-close noti-icon text-16"></i></button>
                                                                        </div>
                                                                        <div class="h-full p-4 dark:text-white text-gray-600 text-13">
                                                                            <p>Product id: <span class="text-blue-500">#SK2540</span></p>
                                                                            <p>Billing Name: <span class="text-blue-500">Neal Matthews</span></p>

                                                                            <div class="relative overflow-x-auto">
                                                                                <table class="w-full text-sm ltr:text-left rtl:text-right text-gray-500">
                                                                                    <thead class="text-sm text-gray-700 dark:text-zink-200">
                                                                                        <tr class="">
                                                                                            <th scope="col" class="p-3 border-b border-gray-300 dark:border-zink-50">
                                                                                                Product
                                                                                            </th>
                                                                                            <th scope="col" class="p-3 border-b border-gray-300 dark:border-zink-50">
                                                                                                Product Name
                                                                                            </th>
                                                                                            <th scope="col" class="p-3 border-b border-gray-300 dark:border-zink-50">
                                                                                                Price
                                                                                            </th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>

                                                                                        <tr class="border-b border-gray-300 dark:bg-transparent dark:border-zink-50">
                                                                                            <th scope="row" class="p-3 font-medium text-gray-700 whitespace-nowrap dark:text-zink-200">

                                                                                                <img src="assets/images/img-7.png" class="w-12 h-12" alt="">
                                                                                            </th>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <div class="text-13 text-gray-700 dark:text-zink-200">
                                                                                                    <p class="text-[14px] text-gray-800 dark:text-white">Wireless Headphone (Black)</p>
                                                                                                    <p>$ 225 x 1</p>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <p class="text-13 text-gray-700 dark:text-zink-200">$ 255</p>
                                                                                            </td>

                                                                                        </tr>
                                                                                        <tr class="border-b border-gray-300 dark:bg-transparent dark:border-zink-50">
                                                                                            <th scope="row" class="p-3 font-medium text-gray-700 whitespace-nowrap dark:text-zink-200">

                                                                                                <img src="assets/images/img-42.png" class="w-12 h-12" alt="">
                                                                                            </th>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <div class="text-13 text-gray-700 dark:text-zink-200">
                                                                                                    <p class="text-[14px] text-gray-800 dark:text-white">Phone patterned cases</p>
                                                                                                    <p>$ 145 x 1</p>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <p class="text-13 text-gray-700 dark:text-zink-200">$ 145</p>
                                                                                            </td>

                                                                                        </tr>
                                                                                        <tr class="border-b border-gray-300 dark:bg-transparent dark:border-zink-50">
                                                                                            <th scope="row" class="p-3 font-medium text-gray-700 whitespace-nowrap dark:text-zink-200">

                                                                                                <p class="text-[14px] text-gray-800 dark:text-white">Sub Total:</p>
                                                                                            </th>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">

                                                                                            </td>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <p class="text-13 text-gray-700 dark:text-zink-200">$ 400</p>
                                                                                            </td>

                                                                                        </tr>
                                                                                        <tr class="border-b border-gray-300 dark:bg-transparent dark:border-zink-50">
                                                                                            <th scope="row" class="p-3 font-medium text-gray-700 whitespace-nowrap dark:text-zink-200">

                                                                                                <p class="text-[14px] text-gray-800 dark:text-white">Shipping:</p>
                                                                                            </th>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">

                                                                                            </td>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <p class="text-13 text-gray-700 dark:text-zink-200">Free</p>
                                                                                            </td>

                                                                                        </tr>
                                                                                        <tr class="border-b border-gray-300 dark:bg-transparent dark:border-zink-50">
                                                                                            <th scope="row" class="p-3 font-medium text-gray-700 whitespace-nowrap dark:text-zink-200">

                                                                                                <p class="text-[14px] text-gray-800 dark:text-white">Total:</p>
                                                                                            </th>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">

                                                                                            </td>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <p class="text-13 text-gray-700 dark:text-zink-200">$ 400</p>
                                                                                            </td>

                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex items-center justify-end p-4 border-t  border-gray-300 dark:border-zink-50">
                                                                            <button type="button" data-modal-close="defaultModal" class="text-white transition-all duration-300 ease-linear bg-gray-600 border-gray-600 hover:bg-gray-700 hover:border-gray-700 hover:text-white active:bg-gray-700 active:border-gray-700 active:text-white focus:bg-gray-700 focus:border-gray-700 focus:text-white focus:ring focus:ring-gray-700/30 btn">Close</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-white border-b border-gray-300 dark:bg-transparent dark:text-zink-200 dark:border-zink-50">
                                                            <th class="p-3">
                                                                <div class="form-group">
                                                                    <input class="w-4 h-4 mr-1 bg-transparent dark:border-zink-300 border border-gray-400 rounded-sm focus:ring-1 appearance-none overflow-hidden checked:bg-blue-500 checked:border-custom-500" type="checkbox" value="">
                                                                </div>
                                                            </th>
                                                            <th scope="row" class="p-3 font-medium text-gray-900 dark:text-zink-200 whitespace-nowrap">#SK2540
                                                            </th>
                                                            <td class="p-3">
                                                                Ronald Taylor
                                                            </td>
                                                            <td class="p-3">
                                                                04 Oct, 2019
                                                            </td>
                                                            <td class="p-3">
                                                                404
                                                            </td>
                                                            <td class="p-3">
                                                                <div class="text-yellow-500 dark:bg-yellow-500/20 text-[11px] font-medium px-2 bg-yellow-50 rounded-sm inline">
                                                                    Refund
                                                                </div>
                                                            </td>
                                                            <td class="p-3">
                                                                <div><i class="fab fa-cc-mastercard mr-1"></i> Visa</div>
                                                            </td>
                                                            <td class="p-3">
                                                                <button type="button" data-modal-target="defaultModal" type="button" class="py-1 rounded-full border-transparent text-[11px] text-white btn bg-blue-500 hover:bg-blue-600 px-2  ">View Details</button>

                                                                <div id="defaultModal" modal-center class="fixed flex flex-col top-1/2 left-1/2  -translate-x-1/2 -translate-y-1/2    w-full  max-w-lg z-drawer show hidden">
                                                                    <div class="w-full md:max-w-lg bg-white shadow rounded-md dark:bg-zink-700 dark:text-zink-200 dark:shadow whitespace-normal">
                                                                        <div class="flex items-center justify-between p-4 border-b border-gray-300 dark:border-zink-50">
                                                                            <h5 class="mb-1 text-15 font-medium dark:text-white">Order Details</h5>
                                                                            <button data-modal-close="defaultModal"><i class="mdi mdi-close noti-icon text-16"></i></button>
                                                                        </div>
                                                                        <div class="h-full p-4 dark:text-white text-gray-600 text-13">
                                                                            <p>Product id: <span class="text-blue-500">#SK2540</span></p>
                                                                            <p>Billing Name: <span class="text-blue-500">Neal Matthews</span></p>

                                                                            <div class="relative overflow-x-auto">
                                                                                <table class="w-full text-sm ltr:text-left rtl:text-right text-gray-500">
                                                                                    <thead class="text-sm text-gray-700 dark:text-zink-200">
                                                                                        <tr class="">
                                                                                            <th scope="col" class="p-3 border-b border-gray-300 dark:border-zink-50">
                                                                                                Product
                                                                                            </th>
                                                                                            <th scope="col" class="p-3 border-b border-gray-300 dark:border-zink-50">
                                                                                                Product Name
                                                                                            </th>
                                                                                            <th scope="col" class="p-3 border-b border-gray-300 dark:border-zink-50">
                                                                                                Price
                                                                                            </th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>

                                                                                        <tr class="border-b border-gray-300 dark:bg-transparent dark:border-zink-50">
                                                                                            <th scope="row" class="p-3 font-medium text-gray-700 whitespace-nowrap dark:text-zink-200">

                                                                                                <img src="assets/images/img-7.png" class="w-12 h-12" alt="">
                                                                                            </th>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <div class="text-13 text-gray-700 dark:text-zink-200">
                                                                                                    <p class="text-[14px] text-gray-800 dark:text-white">Wireless Headphone (Black)</p>
                                                                                                    <p>$ 225 x 1</p>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <p class="text-13 text-gray-700 dark:text-zink-200">$ 255</p>
                                                                                            </td>

                                                                                        </tr>
                                                                                        <tr class="border-b border-gray-300 dark:bg-transparent dark:border-zink-50">
                                                                                            <th scope="row" class="p-3 font-medium text-gray-700 whitespace-nowrap dark:text-zink-200">

                                                                                                <img src="assets/images/img-42.png" class="w-12 h-12" alt="">
                                                                                            </th>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <div class="text-13 text-gray-700 dark:text-zink-200">
                                                                                                    <p class="text-[14px] text-gray-800 dark:text-white">Phone patterned cases</p>
                                                                                                    <p>$ 145 x 1</p>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <p class="text-13 text-gray-700 dark:text-zink-200">$ 145</p>
                                                                                            </td>

                                                                                        </tr>
                                                                                        <tr class="border-b border-gray-300 dark:bg-transparent dark:border-zink-50">
                                                                                            <th scope="row" class="p-3 font-medium text-gray-700 whitespace-nowrap dark:text-zink-200">

                                                                                                <p class="text-[14px] text-gray-800 dark:text-white">Sub Total:</p>
                                                                                            </th>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">

                                                                                            </td>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <p class="text-13 text-gray-700 dark:text-zink-200">$ 400</p>
                                                                                            </td>

                                                                                        </tr>
                                                                                        <tr class="border-b border-gray-300 dark:bg-transparent dark:border-zink-50">
                                                                                            <th scope="row" class="p-3 font-medium text-gray-700 whitespace-nowrap dark:text-zink-200">

                                                                                                <p class="text-[14px] text-gray-800 dark:text-white">Shipping:</p>
                                                                                            </th>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">

                                                                                            </td>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <p class="text-13 text-gray-700 dark:text-zink-200">Free</p>
                                                                                            </td>

                                                                                        </tr>
                                                                                        <tr class="border-b border-gray-300 dark:bg-transparent dark:border-zink-50">
                                                                                            <th scope="row" class="p-3 font-medium text-gray-700 whitespace-nowrap dark:text-zink-200">

                                                                                                <p class="text-[14px] text-gray-800 dark:text-white">Total:</p>
                                                                                            </th>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">

                                                                                            </td>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <p class="text-13 text-gray-700 dark:text-zink-200">$ 400</p>
                                                                                            </td>

                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex items-center justify-end p-4 border-t  border-gray-300 dark:border-zink-50">
                                                                            <button type="button" data-modal-close="defaultModal" class="text-white transition-all duration-300 ease-linear bg-gray-600 border-gray-600 hover:bg-gray-700 hover:border-gray-700 hover:text-white active:bg-gray-700 active:border-gray-700 active:text-white focus:bg-gray-700 focus:border-gray-700 focus:text-white focus:ring focus:ring-gray-700/30 btn">Close</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-white border-b text-13 border-gray-300 dark:bg-transparent dark:text-zink-200 dark:border-zink-50">
                                                            <th class="p-3">
                                                                <div class="form-group">
                                                                    <input class="w-4 h-4 mr-1 bg-transparent dark:border-zink-300 border border-gray-400 rounded-sm focus:ring-1 appearance-none overflow-hidden checked:bg-blue-500 checked:border-custom-500" type="checkbox" value="">
                                                                </div>
                                                            </th>
                                                            <th scope="row" class="p-3 font-medium text-gray-900 dark:text-zink-200 whitespace-nowrap">#SK2541
                                                            </th>
                                                            <td class="p-3">Jacob Hunter</td>
                                                            <td class="p-3">04 Oct, 2019</td>
                                                            <td class="p-3">$392</td>
                                                            <td class="p-3">
                                                                <div class="text-green-500 dark:bg-green-500/20 text-[11px] font-medium px-2 bg-green-50 rounded-sm inline">
                                                                    Paid
                                                                </div>
                                                            </td>
                                                            <td class="p-3">
                                                                <div><i class="fab fa-cc-visa  mr-1"></i> Paypal</div>
                                                            </td>
                                                            <td class="p-3">
                                                                <button type="button" data-modal-target="defaultModal" type="button" class="py-1 rounded-full border-transparent text-[11px] text-white btn bg-blue-500 hover:bg-blue-600 px-2  ">View Details</button>

                                                                <div id="defaultModal" modal-center class="fixed flex flex-col top-1/2 left-1/2  -translate-x-1/2 -translate-y-1/2    w-full  max-w-lg z-drawer show hidden">
                                                                    <div class="w-full md:max-w-lg bg-white shadow rounded-md dark:bg-zink-700 dark:text-zink-200 dark:shadow whitespace-normal">
                                                                        <div class="flex items-center justify-between p-4 border-b border-gray-300 dark:border-zink-50">
                                                                            <h5 class="mb-1 text-15 font-medium dark:text-white">Order Details</h5>
                                                                            <button data-modal-close="defaultModal"><i class="mdi mdi-close noti-icon text-16"></i></button>
                                                                        </div>
                                                                        <div class="h-full p-4 dark:text-white text-gray-600 text-13">
                                                                            <p>Product id: <span class="text-blue-500">#SK2540</span></p>
                                                                            <p>Billing Name: <span class="text-blue-500">Neal Matthews</span></p>

                                                                            <div class="relative overflow-x-auto">
                                                                                <table class="w-full text-sm ltr:text-left rtl:text-right text-gray-500">
                                                                                    <thead class="text-sm text-gray-700 dark:text-zink-200">
                                                                                        <tr class="">
                                                                                            <th scope="col" class="p-3 border-b border-gray-300 dark:border-zink-50">
                                                                                                Product
                                                                                            </th>
                                                                                            <th scope="col" class="p-3 border-b border-gray-300 dark:border-zink-50">
                                                                                                Product Name
                                                                                            </th>
                                                                                            <th scope="col" class="p-3 border-b border-gray-300 dark:border-zink-50">
                                                                                                Price
                                                                                            </th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>

                                                                                        <tr class="border-b border-gray-300 dark:bg-transparent dark:border-zink-50">
                                                                                            <th scope="row" class="p-3 font-medium text-gray-700 whitespace-nowrap dark:text-zink-200">

                                                                                                <img src="assets/images/img-7.png" class="w-12 h-12" alt="">
                                                                                            </th>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <div class="text-13 text-gray-700 dark:text-zink-200">
                                                                                                    <p class="text-[14px] text-gray-800 dark:text-white">Wireless Headphone (Black)</p>
                                                                                                    <p>$ 225 x 1</p>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <p class="text-13 text-gray-700 dark:text-zink-200">$ 255</p>
                                                                                            </td>

                                                                                        </tr>
                                                                                        <tr class="border-b border-gray-300 dark:bg-transparent dark:border-zink-50">
                                                                                            <th scope="row" class="p-3 font-medium text-gray-700 whitespace-nowrap dark:text-zink-200">

                                                                                                <img src="assets/images/img-42.png" class="w-12 h-12" alt="">
                                                                                            </th>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <div class="text-13 text-gray-700 dark:text-zink-200">
                                                                                                    <p class="text-[14px] text-gray-800 dark:text-white">Phone patterned cases</p>
                                                                                                    <p>$ 145 x 1</p>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <p class="text-13 text-gray-700 dark:text-zink-200">$ 145</p>
                                                                                            </td>

                                                                                        </tr>
                                                                                        <tr class="border-b border-gray-300 dark:bg-transparent dark:border-zink-50">
                                                                                            <th scope="row" class="p-3 font-medium text-gray-700 whitespace-nowrap dark:text-zink-200">

                                                                                                <p class="text-[14px] text-gray-800 dark:text-white">Sub Total:</p>
                                                                                            </th>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">

                                                                                            </td>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <p class="text-13 text-gray-700 dark:text-zink-200">$ 400</p>
                                                                                            </td>

                                                                                        </tr>
                                                                                        <tr class="border-b border-gray-300 dark:bg-transparent dark:border-zink-50">
                                                                                            <th scope="row" class="p-3 font-medium text-gray-700 whitespace-nowrap dark:text-zink-200">

                                                                                                <p class="text-[14px] text-gray-800 dark:text-white">Shipping:</p>
                                                                                            </th>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">

                                                                                            </td>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <p class="text-13 text-gray-700 dark:text-zink-200">Free</p>
                                                                                            </td>

                                                                                        </tr>
                                                                                        <tr class="border-b border-gray-300 dark:bg-transparent dark:border-zink-50">
                                                                                            <th scope="row" class="p-3 font-medium text-gray-700 whitespace-nowrap dark:text-zink-200">

                                                                                                <p class="text-[14px] text-gray-800 dark:text-white">Total:</p>
                                                                                            </th>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">

                                                                                            </td>
                                                                                            <td class="p-3 text-gray-700 font-normal whitespace-nowrap dark:text-zink-200">
                                                                                                <p class="text-13 text-gray-700 dark:text-zink-200">$ 400</p>
                                                                                            </td>

                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex items-center justify-end p-4 border-t  border-gray-300 dark:border-zink-50">
                                                                            <button type="button" data-modal-close="defaultModal" class="text-white transition-all duration-300 ease-linear bg-gray-600 border-gray-600 hover:bg-gray-700 hover:border-gray-700 hover:text-white active:bg-gray-700 active:border-gray-700 active:text-white focus:bg-gray-700 focus:border-gray-700 focus:text-white focus:ring focus:ring-gray-700/30 btn">Close</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Container (hidden by default) -->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        <div class="fixed inset-0 bg-gray-900/50 dark:bg-black/50 z-[1049] backdrop-overlay hidden" id="modelOver"></div>
        <footer class="ltr:lg:left-vertical-menu rtl:lg:right-vertical-menu group-data-[sidebar-size=md]:ltr:left-vertical-menu-md group-data-[sidebar-size=md]:rtl:right-vertical-menu-md group-data-[sidebar-size=sm]:lg:ltr:left-vertical-menu-sm group-data-[sidebar-size=sm]:lg:rtl:right-vertical-menu-sm absolute bottom-0 px-5 group-data-[layout=horizontal]:left-0 h-footer py-4 flex items-center bg-footer-bg  text-footer-colo  right-0 rtl:left-0 ltr:left-0 rtl:right-0 dark:bg-zink-700 dark:text-zink-200 ">
            <div class="group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl w-full bg-new-500">
                <div class="sm:flex sm:space-y-2 md:space-y-0 sm:justify-between">
                    <div class="text-13 text-footer-color dark:text-zink-200">
                        <script>document.write(new Date().getFullYear())</script> © Skote.
                    </div>
                    <div class="hidden md:block sm:text-end text-13 text-footer-color dark:text-zink-200">
                        Design & Develop by Themesbrand
                    </div>
                </div>
            </div>
        </footer>    </div>
    <!-- end main content -->
</div>
<!-- <div class="hidden" id="drawer"> -->
<div id="drawerSetting" drawer-end class="fixed inset-y-0 dark:bg-zink-700 ltr:right-0 rtl:!left-0 flex flex-col transition-transform duration-300 ease-in-out transform bg-white shadow w-72 md:w-[340px] z-drawer show dark:border-zink-50 ">
    <div class="flex items-center justify-between px-4 py-6 border-b dark:border-zink-50">
        <h5 class="text-16 font-medium text-gray-700 dark:text-white">Settings</h5>
        <button data-drawer-close="drawerSetting" class="w-6 h-6 bg-gray-700 dark:bg-zink-50 flex justify-center items-center rounded-full"><i data-lucide="x" class="mdi mdi-close noti-icon text-white dark:zink-200"></i></button>
    </div>
    <div class="h-full p-4 overflow-y-auto ">
        <div>
            <div>
                <h5 class="mb-3 underline capitalize text-15">Choose Layouts</h5>
                <div class="grid grid-cols-1 mb-5 gap-7 xl:grid-cols-2">
                    <div class="relative">
                        <input name="data-layout" id="vertical" class="absolute w-4 h-4 border rounded-full appearance-none cursor-pointer right-2 top-2 vertical-menu-btn bg-blue-100 border-blue-300 checked:bg-blue-500 checked:border-custom-500 dark:bg-blue-500/20" type="radio" value="vertical" checked>
                        <label class="block w-full h-24 p-0 overflow-hidden border rounded-lg cursor-pointer border-blue-200 dark:border-blue-500/50" for="vertical">
                            <span class="flex h-full gap-0">
                                <span class="shrink-0">
                                    <span class="flex flex-col h-full gap-1 p-1 ltr:border-r rtl:border-l dark:border-blue-500/50">
                                        <span class="block p-1 px-2 mb-2 rounded bg-blue-100 dark:bg-blue-500/20"></span>
                                        <span class="block p-1 px-2 pb-0 bg-blue-100 dark:bg-blue-500/20"></span>
                                        <span class="block p-1 px-2 pb-0 bg-blue-100 dark:bg-blue-500/20"></span>
                                        <span class="block p-1 px-2 pb-0 bg-blue-100 dark:bg-blue-500/20"></span>
                                    </span>
                                </span>
                                <span class="grow">
                                    <span class="flex flex-col h-full">
                                        <span class="block h-3 bg-blue-100 dark:bg-blue-500/20"></span>
                                        <span class="block h-3 mt-auto bg-blue-100 dark:bg-blue-500/20"></span>
                                    </span>
                                </span>
                            </span>
                        </label>
                        <h5 class="mt-2 text-center text-15">Vertical</h5>
                    </div>

                    <div class="relative">
                        <input name="data-layout" id="horizontal" class="absolute w-4 h-4 border rounded-full appearance-none cursor-pointer right-2 top-2 vertical-menu-btn bg-blue-100 border-blue-300 checked:bg-blue-500 checked:border-custom-500 dark:border-blue-500/50" type="radio" value="horizontal">
                        <label class="block w-full h-24 p-0 overflow-hidden border rounded-lg cursor-pointer border-blue-200 dark:border-blue-500/50" for="horizontal">
                            <span class="flex flex-col h-full gap-1">
                                <span class="flex items-center gap-1 p-1 bg-blue-100 dark:bg-blue-500/20">
                                    <span class="block p-1 ml-1 bg-white rounded dark:bg-blue-500/20"></span>
                                    <span class="block p-1 px-2 pb-0 bg-white ms-auto dark:bg-blue-500/20"></span>
                                    <span class="block p-1 px-2 pb-0 bg-white dark:bg-blue-500/20"></span>
                                </span>
                                <span class="block p-1 bg-blue-100 dark:bg-blue-500/20"></span>
                                <span class="block p-1 mt-auto bg-blue-100 dark:bg-blue-500/20"></span>
                            </span>
                        </label>
                        <h5 class="mt-2 text-center text-15">Horizontal</h5>
                    </div>
                </div>
            </div>
            <div class="mt-6">
                <!-- data-mode="" -->
                <h5 class="mb-3 underline capitalize text-15">Layouts Mode</h5>
                <div class="flex gap-3">

                    <button type="button" name="data-mode" value="light" id="data-mode-light" class="transition-all duration-200 ease-linear bg-white border-dashed text-blue-500 btn border-blue-200 hover:text-blue-500 hover:bg-blue-50 hover:border-blue-200 focus:text-blue-500 focus:bg-blue-50 focus:border-blue-200 [&.active]:text-blue-500 [&.active]:bg-blue-50 [&.active]:border-blue-200  dark:border-blue-500/50  dark:bg-blue-500/20 dark:[&.active]:border-blue-500 dark:[&.active]:bg-blue-500 dark:[&.active]:text-white">Light Mode</button>
                    <button type="button" name="data-mode" value="dark" id="data-mode-dark" class="transition-all duration-200 ease-linear bg-white border-dashed text-blue-500 btn border-blue-200 hover:text-blue-500 hover:bg-blue-50 hover:border-blue-200 focus:text-blue-500 focus:bg-blue-50 focus:border-blue-200 [&.active]:text-blue-500 [&.active]:bg-blue-50 [&.active]:border-blue-200  dark:border-blue-500/50  dark:bg-blue-500/20 dark:[&.active]:border-blue-500 dark:[&.active]:bg-blue-500 dark:[&.active]:text-white">Dark Mode</button>
                </div>
            </div>
            <!-- sidebar color horizontal hidden -->
            <div class="mt-6 group-data-[layout=horizontal]:hidden">
                <!-- data-mode="" -->
                <h5 class="mb-3 underline capitalize text-15">Sidebar Color</h5>
                <div class="flex gap-3">

                    <button type="button" name="data-sidebar-color" id="data-sidebar-light" value="light" class="transition-all duration-200 ease-linear bg-white border-dashed text-blue-500 btn border-blue-200 hover:text-blue-500 hover:bg-blue-50 hover:border-blue-200 focus:text-blue-500 focus:bg-blue-50 focus:border-blue-200 [&.active]:text-blue-500 [&.active]:bg-blue-50 [&.active]:border-blue-200  dark:border-blue-500/50  dark:bg-blue-500/20 dark:[&.active]:border-blue-500 dark:[&.active]:bg-blue-500 dark:[&.active]:text-white">Light</button>

                    <button type="button" name="data-sidebar-color" id="data-sidebar-dark" value="dark" class="transition-all duration-200 ease-linear bg-white border-dashed text-blue-500 btn border-blue-200 hover:text-blue-500 hover:bg-blue-50 hover:border-blue-200 focus:text-blue-500 focus:bg-blue-50 focus:border-blue-200 [&.active]:text-blue-500 [&.active]:bg-blue-50 [&.active]:border-blue-200  dark:border-blue-500/50  dark:bg-blue-500/20 dark:[&.active]:border-blue-500 dark:[&.active]:bg-blue-500 dark:[&.active]:text-white ">Dark</button>

                </div>
            </div>
            <!-- sidebar size horizontal hidden -->
            <div class="mt-6 group-data-[layout=horizontal]:hidden">
                <!-- data-sidebar-size="" -->
                <h5 class="mb-3 underline capitalize text-15">Sidebar Size</h5>
                <div class="flex flex-wrap gap-3">
                    <button type="button" name="data-sidebar-size" id="sidebar-size-lg" value="lg" class="transition-all duration-200 ease-linear bg-white border-dashed text-blue-500 btn border-blue-200 hover:text-blue-500 hover:bg-blue-50 hover:border-blue-200 focus:text-blue-500 focus:bg-blue-50 focus:border-blue-200 [&.active]:text-blue-500 [&.active]:bg-blue-50 [&.active]:border-blue-200  dark:border-blue-500/50  dark:bg-blue-500/20 dark:[&.active]:border-blue-500 dark:[&.active]:bg-blue-500 dark:[&.active]:text-white">Default</button>
                    <button type="button" name="data-sidebar-size" id="sidebar-size-md" value="md" class="transition-all duration-200 ease-linear bg-white border-dashed text-blue-500 btn border-blue-200 hover:text-blue-500 hover:bg-blue-50 hover:border-blue-200 focus:text-blue-500 focus:bg-blue-50 focus:border-blue-200 [&.active]:text-blue-500 [&.active]:bg-blue-50 [&.active]:border-blue-200  dark:border-blue-500/50  dark:bg-blue-500/20 dark:[&.active]:border-blue-500 dark:[&.active]:bg-blue-500 dark:[&.active]:text-white">Compact</button>
                    <button type="button" name="data-sidebar-size" id="sidebar-size-sm" value="sm" class="transition-all duration-200 ease-linear bg-white border-dashed text-blue-500 btn border-blue-200 hover:text-blue-500 hover:bg-blue-50 hover:border-blue-200 focus:text-blue-500 focus:bg-blue-50 focus:border-blue-200 [&.active]:text-blue-500 [&.active]:bg-blue-50 [&.active]:border-blue-200  dark:border-blue-500/50  dark:bg-blue-500/20 dark:[&.active]:border-blue-500 dark:[&.active]:bg-blue-500 dark:[&.active]:text-white">Small (Icon)</button>
                </div>
            </div>
            <div class="mt-6">
                <!-- data-sidebar-size="" -->
                <h5 class="mb-3 underline capitalize text-15">Topbar Color</h5>
                <div class="flex flex-wrap gap-3">
                    <button type="button" name="data-topbar" id="topbar-light" value="light" class="transition-all duration-200 ease-linear bg-white border-dashed text-blue-500 btn border-blue-200 hover:text-blue-500 hover:bg-blue-50 hover:border-blue-200 focus:text-blue-500 focus:bg-blue-50 focus:border-blue-200 [&.active]:text-blue-500 [&.active]:bg-blue-50 [&.active]:border-blue-200  dark:border-blue-500/50  dark:bg-blue-500/20 dark:[&.active]:border-blue-500 dark:[&.active]:bg-blue-500 dark:[&.active]:text-white">light</button>
                    <button type="button" name="data-topbar" id="topbar-dark" value="dark" class="transition-all duration-200 ease-linear bg-white border-dashed text-blue-500 btn border-blue-200 hover:text-blue-500 hover:bg-blue-50 hover:border-blue-200 focus:text-blue-500 focus:bg-blue-50 focus:border-blue-200 [&.active]:text-blue-500 [&.active]:bg-blue-50 [&.active]:border-blue-200  dark:border-blue-500/50  dark:bg-blue-500/20 dark:[&.active]:border-blue-500 dark:[&.active]:bg-blue-500 dark:[&.active]:text-white">dark</button>
                </div>
            </div>
            <div class="mt-6">
                <!-- dir="ltr" -->
                <h5 class="mb-3 underline capitalize text-15">Direction</h5>
                <div class="flex flex-wrap gap-3">
                    <button type="button" name="dir" value="ltr" id="data-mode-ltr" class="transition-all duration-200 ease-linear bg-white border-dashed text-blue-500 btn border-blue-200 hover:text-blue-500 hover:bg-blue-50 hover:border-blue-200 focus:text-blue-500 focus:bg-blue-50 focus:border-blue-200 [&.active]:text-blue-500 [&.active]:bg-blue-50 [&.active]:border-blue-200  dark:border-blue-500/50  dark:bg-blue-500/20 dark:[&.active]:border-blue-500 dark:[&.active]:bg-blue-500 dark:[&.active]:text-white">LTR Mode</button>
                    <button type="button" name="dir" value="rtl" id="data-mode-rtl" class="transition-all duration-200 ease-linear bg-white border-dashed text-blue-500 btn border-blue-200 hover:text-blue-500 hover:bg-blue-50 hover:border-blue-200 focus:text-blue-500 focus:bg-blue-50 focus:border-blue-200 [&.active]:text-blue-500 [&.active]:bg-blue-50 [&.active]:border-blue-200  dark:border-blue-500/50  dark:bg-blue-500/20 dark:[&.active]:border-blue-500 dark:[&.active]:bg-blue-500 dark:[&.active]:text-white">RTL Mode</button>
                </div>
            </div>
        </div>
        <!-- remmove code  -->

    </div>
</div>
</div>
<!-- </div> -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/metismenujs/metismenujs.min.js"></script>
<script src="assets/libs/%40popperjs/core/umd/popper.min.js"></script>
<script src="assets/js/pages/plugins.js"></script><script>
</script>
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="assets/js/pages/apexcharts.init.js"></script>
<!-- apexcharts init -->
<script src="assets/js/pages/dashboard.init.js"></script>
<!-- App js -->
<script src="assets/js/app.js"></script>

</body>


<!-- Mirrored from themesbrand.com/skote-tailwincss/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jan 2024 08:06:46 GMT -->
</html>
