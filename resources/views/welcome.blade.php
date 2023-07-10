<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemilihan Konsol Game</title>
    <link rel="icon" href="{{ asset('logo.png') }}" type="image/x-icon">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Titillium Web:wght@400;500;700&display=swap" rel="stylesheet">


    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .border-gray-200 {
            --tw-border-opacity: 1;
            border-color: rgb(229 231 235 / var(--tw-border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);
            --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --tw-text-opacity: 1;
            color: rgb(229 231 235 / var(--tw-text-opacity))
        }

        .text-gray-300 {
            --tw-text-opacity: 1;
            color: rgb(209 213 219 / var(--tw-text-opacity))
        }

        .text-gray-400 {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-700 {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --tw-bg-opacity: 1;
                background-color: rgb(31 41 55 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:border-gray-700 {
                --tw-border-opacity: 1;
                border-color: rgb(55 65 81 / var(--tw-border-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Titillium Web', sans-serif;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

</head>

<body>
    <header>
        <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="{{ route('/') }}" class="flex items-center">
                    <img src="{{ asset('nav.png') }}" class="mr-3 h-9 sm:h-9" alt="Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Konsol Game</span>
                </a>
                <div class="flex items-center lg:order-2">
                    {{-- <a href="#"
                        class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Log
                        in</a> --}}
                    <a href="{{ route('spk') }}"
                        class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">Sistem
                        Pendukung Keputusan</a>
                    <button data-collapse-toggle="mobile-menu-2" type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <button id="theme-toggle" type="button"
                        class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="#"
                                class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#konsol"
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Konsol
                                Game</a>
                        </li>
                        <li>
                            <a href="#about"
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">About</a>
                        </li>
                        <li>
                            <a href="#faq"
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">FAQ</a>
                        </li>
                        <li>
                            <a href="#blog"
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Blog</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--END NAVBAR-->

    <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">

            <div class="mr-auto place-self-center lg:col-span-7">
                <a href="{{ route('spk') }}"
                    class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-gray-700 bg-gray-100 rounded-full dark:bg-gray-800 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700"
                    role="alert"  data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">
                    <span class="text-xs bg-primary-600 rounded-full text-white px-4 py-1.5 mr-3">New</span> <span
                        class="text-sm font-medium">Perhitungan Konsol Game Terbaik</span>
                    <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white"
                    data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="300">
                    Temukan Konsol Game Impianmu</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400"
                data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="300">Kami
                    menyediakan informasi lengkap tentang berbagai konsol game terbaru, termasuk fitur dan spesifikasi
                </p>
                <a href="#konsol"
                    class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900"
                    data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="400">
                    Jelajahi Selengkapnya
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#konsol"
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800"
                    data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="400">
                    Daftar Konsol
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                <img src="{{ asset('h1.png') }}" alt="mockup">
            </div>
        </div>
    </section>
    <!--S1-->
    <section class="bg-white dark:bg-gray-900">
        <div class="mx-auto max-w-screen-xl">
            <dl id="stats"
                class="grid max-w-screen-md gap-8 mx-auto text-gray-900 sm:grid-cols-5 dark:text-white">
                <div class="flex flex-col items-center justify-center">
                    <dt id="developers" class="mb-2 text-3xl md:text-4xl font-extrabold">0</dt>
                    <dd class="font-light text-gray-500 dark:text-gray-400">Developers</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt id="contributors" class="mb-2 text-3xl md:text-4xl font-extrabold">0</dt>
                    <dd class="font-light text-gray-500 dark:text-gray-400">Contributors</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt id="organizations" class="mb-2 text-3xl md:text-4xl font-extrabold">0</dt>
                    <dd class="font-light text-gray-500 dark:text-gray-400">Organizations</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt id="associations" class="mb-2 text-3xl md:text-4xl font-extrabold">0</dt>
                    <dd class="font-light text-gray-500 dark:text-gray-400">Associations</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt id="collaborators" class="mb-2 text-3xl md:text-4xl font-extrabold">0</dt>
                    <dd class="font-light text-gray-500 dark:text-gray-400">Collaborators</dd>
                </div>
            </dl>
            <br>
            <hr class="border-t border-gray-300 dark:border-gray-700">
        </div>
    </section>

    <section id="konsol" class="bg-white dark:bg-gray-900">
        <div class=" mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
            <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white"
                data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">Daftar Konsol
                    Game
                </h2>
                <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400"
                data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500" data-aos-delay="100">Temukan pengalaman gaming
                    terbaik pilih konsol game yang sesuai dengan preferensi Anda dan nikmati petualangan tak terlupakan.
                </p>
            </div>
            <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2" >
                <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700" 
                    data-aos="zoom-in" data-aos-duraction="1000">
                    <div data-aos="zoom-in-down" data-aos-easing="linear" data-aos-duration="1000">
                        <a href="#konsol">
                            <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg"
                                src="{{ asset('c1.png') }}"
                                alt="ps2">
                        </a>
                    </div>
                    <div class="p-5" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#konsol">Sony Playstation 2</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">Konsol Game</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Merupakan konsol yang sukses dirilis oleh Sony sekitar tahun 2000.</p>
                        <ul class="flex space-x-4 sm:mt-0">
                            <li>
                                <a href="{{ route('spk') }}"
                                class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                                Hitung Konsol Terbaik
                                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700" 
                data-aos="zoom-in" data-aos-duraction="1000" data-aos-delay="300">
                    <div data-aos="zoom-in-down" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="300">
                        <a href="#konsol">
                            <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg"
                                src="{{ asset('c2.png') }}"
                                alt="ps3">
                        </a>
                    </div>
                    <div class="p-5" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="300">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#konsol">Sony Playstation 3</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">Konsol Game</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Merupakan konsol yang menawarkan permainan grafis memukau.</p>
                        <ul class="flex space-x-4 sm:mt-0">
                            <li>
                                <a href="{{ route('spk') }}"
                                class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                                Hitung Konsol Terbaik
                                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700"
                data-aos="zoom-in" data-aos-duraction="1000" data-aos-delay="400">
                    <div data-aos="zoom-in-down" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="400">
                        <a href="#konsol">
                            <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg"
                                src="{{ asset('c3.png') }}"
                                alt="ps4">
                        </a>
                    </div>
                    <div class="p-5" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="400">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#konsol">Sony Playstation 4</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">Konsol Game</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Merupakan konsol yang dibuat dengan desain yang elegan canggih.</p>
                        <ul class="flex space-x-4 sm:mt-0">
                            <li>
                                <a href="{{ route('spk') }}"
                                class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                                Hitung Konsol Terbaik
                                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700"
                data-aos="zoom-in" data-aos-duraction="1000" data-aos-delay="500">
                    <div data-aos="zoom-in-down" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="500">
                        <a href="#konsol">
                            <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg"
                                src="{{ asset('c4.png') }}"
                                alt="ps5">
                        </a>
                    </div>
                    <div class="p-5" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="500">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#konsol">Sony Playstation 5</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">Konsol Game</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Merupakan konsol generasi terbaru dengan permainan luar biasa.</p>
                        <ul class="flex space-x-4 sm:mt-0">
                            <li>
                                <a href="{{ route('spk') }}"
                                class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                                Hitung Konsol Terbaik
                                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700"
                data-aos="zoom-in" data-aos-duraction="1000" data-aos-delay="600">
                    <div data-aos="zoom-in-down" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="600">
                        <a href="#konsol">
                            <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg"
                                src="{{ asset('c5.png') }}"
                                alt="ps5 ed">
                        </a>
                    </div>
                    <div class="p-5" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="600">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#konsol">Sony Playstation 5 Digital Edition</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">Konsol Game</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Merupakan versi konsol yang permainannya diunduh secara digital.</p>
                        <ul class="flex space-x-4 sm:mt-0">
                            <li>
                                <a href="{{ route('spk') }}"
                                class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                                Hitung Konsol Terbaik
                                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700"
                data-aos="zoom-in" data-aos-duraction="1000" data-aos-delay="700">
                    <div data-aos="zoom-in-down" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="700">
                        <a href="#konsol">
                            <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg"
                                src="{{ asset('c6.png') }}"
                                alt="nintendo">
                        </a>
                    </div>
                    <div class="p-5" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="700">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#konsol">Nintendo Wii</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">Konsol Game</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Merupakan konsol yang sukses dirilis oleh Sony pada tahun 2006.</p>
                        <ul class="flex space-x-4 sm:mt-0">
                            <li>
                                <a href="{{ route('spk') }}"
                                class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                                Hitung Konsol Terbaik
                                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700"
                data-aos="zoom-in" data-aos-duraction="1000" data-aos-delay="800">
                    <div data-aos="zoom-in-down" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="800">
                        <a href="#konsol">
                            <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg"
                                src="{{ asset('c8.png') }}"
                                alt="xbox one">
                        </a>
                    </div>
                    <div class="p-5" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="800">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#konsol">Microsoft Xbox One</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">Konsol Game</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Merupakan konsol buatan Microsoft dengan grafis yang memukau.</p>
                        <ul class="flex space-x-4 sm:mt-0">
                            <li>
                                <a href="{{ route('spk') }}"
                                class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                                Cek Konsol
                                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700"
                data-aos="zoom-in" data-aos-duraction="1000" data-aos-delay="900">
                <div data-aos="zoom-in-down" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="900">
                    <a href="#konsol">
                        <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg"
                            src="{{ asset('c7.png') }}"
                            alt="one s">
                    </a>
                </div>
                    <div class="p-5" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="900">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#konsol">Microsoft Xbox One S</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">Konsol Game</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Merupakan Xbox One yang dikembangkan dengan grafis HDR 4K.</p>
                        <ul class="flex space-x-4 sm:mt-0">
                            <li>
                                <a href="{{ route('spk') }}"
                                class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                                Hitung Konsol Terbaik
                                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700"
                data-aos="zoom-in" data-aos-duraction="1000" data-aos-delay="1000">
                    <div data-aos="zoom-in-down" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="1000">
                        <a href="#konsol">
                            <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg"
                                src="{{ asset('c9.png') }}"
                                alt="xbox s">
                        </a>
                    </div>
                    <div class="p-5" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="1000">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#konsol">Microsoft Xbox Series S</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">Konsol Game</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Merupakan versi Xbox dengan dukungan grafis mencapai 1440p.</p>
                        <ul class="flex space-x-4 sm:mt-0">
                            <li>
                                <a href="{{ route('spk') }}"
                                class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                                Hitung Konsol Terbaik
                                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700"
                data-aos="zoom-in" data-aos-duraction="1000" data-aos-delay="1100">
                    <div data-aos="zoom-in-down" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="1100">
                        <a href="#konsol">
                            <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg"
                                src="{{ asset('c10.png') }}"
                                alt="series x">
                        </a>
                    </div>
                    <div class="p-5" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="1100">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#konsol">Microsoft Xbox Series X</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">Konsol Game</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Merupakan versi Xbox dengan performa tinggi dan grafis fantastis.</p>
                        <ul class="flex space-x-4 sm:mt-0">
                            <li>
                                <a href="{{ route('spk') }}"
                                class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                                Hitung Konsol Terbaik
                                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="bg-white dark:bg-gray-900">
        <div class="gap-8 items-center  mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2">
            <div data-aos="zoom-out-down" data-aos-easing="linear" data-aos-duration="1000">
                <img class="w-full dark:hidden" src="{{ asset('h2.png') }}" alt="dashboard image">
                <img class="w-full hidden dark:block" src="{{ asset('h2.png') }}" alt="dashboard image">
            </div>
            <div class="mt-4 md:mt-0">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white"
                data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" data-aos-delay="300">Pilih Konsol Game
                    Favoritmu dan Rasakan Pengalaman Seru</h2>
                <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400"
                data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500" data-aos-delay="400">Kami menyediakan informasi yang
                    lengkap dan terperinci tentang berbagai konsol game yang tersedia di pasaran. Anda dapat menjelajahi
                    daftar konsol game, melihat spesifikasi dan memcari konsol game terbaik berdasarkan preferensi Anda.
                </p>
                <a href="#konsol"
                    class="inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900"
                    data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1500" data-aos-delay="500">
                    Jelajahi Selengkapnya
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <!--S2-->

    <section id="faq" class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <h2 class="mb-8 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white text-center"
            data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                Frequently Asked Questions</h2>
            <h2 class="mb-8 text-1xl tracking-tight font-bold text-gray-500 dark:text-gray-400 text-center"
            data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="300">
                Seputar Pemilihan Konsol Game Terbaik</h2>
            <div class="grid pt-8 text-left border-t border-gray-200 md:gap-16 dark:border-gray-700 md:grid-cols-2">
                <div>
                    <div class="mb-10">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white"
                        data-aos="zoom-in-down" data-aos-easing="linear" data-aos-duration="1000">
                            <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Apa itu pemilihan konsol game terbaik?
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400" 
                        data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1000">Sebuah website yang dirancang untuk membantu
                            pengguna dalam memilih konsol
                            game yang sesuai dengan preferensi mereka, dengan menggunakan Sistem Pendukung Keputusan
                            metode Weighted Product.</p>
                    </div>
                    <div class="mb-10">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white"
                        data-aos="zoom-in-down" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="400">
                            <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Bagaimana cara kerja pemilihan konsol game terbaik?
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400"
                        data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="400">Pemilihan konsol game terbaik bekerja dengan cara
                            mengumpulkan data
                            dari berbagai sumber untuk mendapatkan spefikasi kemudian mengambil beberapa spesifikasi
                            untuk dijadikan kriteria.
                            Dengan menggunakan perhitungan Weighted Product dan data yang terkumpul untuk memberikan
                            rekomendasi konsol game terbaik berdasarkan bobot dan nilai kepentingan yang diinputkan
                            pengguna.</p>
                    </div>
                    <div class="mb-10">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white"
                        data-aos="zoom-in-down" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="600">
                            <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Apa saja kriteria yang digunakan dalam pemilihan konsol game terbaik?
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400"
                        data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="600">Kriteria yang digunakan dalam pemilihan konsol game
                            terbaik meliputi: Harga, Kapasitas memori, Kecepatan CPU, Berat dan Konsumsi Daya.</p>
                        <p class="text-gray-500 dark:text-gray-400"
                        data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="600">Masing-masing kriteria yang <a href="{{ route('spk') }}"
                                class="font-medium underline text-primary-600 dark:text-primary-500 hover:no-underline"
                                target="_blank" rel="noreferrer">diinputkan</a> pengguna harus berjumlah 1.</p>
                    </div>
                    <div class="mb-10">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white"
                        data-aos="zoom-in-down" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="800">
                            <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Seberapa akurat website pemilihan konsol game terbaik?
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400"
                        data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="800">Tingkat akurasi website pemilihan konsol game
                            tergantung dari
                            perhitungan Sistem Pendukung Keputusan yang dibuat, semakin baik perhitungannya dan semakin
                            lengkap data yang
                            digunakan dalam analisis, semakin akurat <a href="{{ route('spk') }}"
                                class="font-medium underline text-primary-600 dark:text-primary-500 hover:no-underline"
                                data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="800">rekomendasi</a>
                            yang dihasilkan.</p>
                    </div>
                </div>
                <div>
                    <div class="mb-10">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white"
                        data-aos="zoom-in-down" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="300">
                            <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Bagaimana cara mengakses pemilihan konsol game terbaik?
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400"
                        data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="300">Untuk mengakses <a href="{{ route('spk') }}"
                                class="font-medium underline text-primary-600 dark:text-primary-500 hover:no-underline"
                                data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="300">Klik
                                Disini</a>
                            atau anda bisa pergi ke bagian navbar lalu klik button disebelah kanan yang bertuliskan
                            <strong>"Sistem Pendukung Keputusan".</strong></p>
                    </div>
                    <div class="mb-10">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white"
                        data-aos="zoom-in-down" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="500">
                            <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Apa manfaat website pemilihan konsol game terbaik?
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400"
                        data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="500">Pemilihan <a href="{{ route('spk') }}"
                                class="font-medium underline text-primary-600 dark:text-primary-500 hover:no-underline"
                                data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="500">konsol
                                game terbaik</a>
                            memiliki manfaat seperti : Kemudahan pemilihan membantu mengurangi kebingungan pengguna
                            dalam memilih konsol game
                            dengan menyediakan rekomendasi yang disesuaikan dengan preferensi mereka.</p>
                        <p class="text-gray-500 dark:text-gray-400"
                        data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="500">Mempersingkat proses pemilihan konsol game dengan
                            menyaring opsi-opsi yang tidak relevan, sehingga pengguna tidak perlu mencari informasi
                            secara manual.</p>
                    </div>
                    <div class="mb-10">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white"
                        data-aos="zoom-in-down" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="700">
                            <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Apakah website pemilihan konsol game terbaik hanya memberikan rekomendasi untuk konsol
                            tertentu?
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400"
                        data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="700">Tidak selalu. Website ini memberikan rekomendasi
                            untuk berbagai konsol game yang ada di pasar seperti PlayStation, Xbox, atau Nintendo. </p>
                    </div>
                    <div class="mb-10">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white"
                        data-aos="zoom-in-down" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="900">
                            <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Apakah website pemilihan konsol game dapat digunakan di semua perangkat?
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400"
                        data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="900">Tentu website pemilihan konsol game dapat diakses
                            melalui browser
                            web pada berbagai perangkat, termasuk komputer, laptop, tablet, dan handphone. Website ini
                            dibuat responsive
                            agar memudahkan pengguna dalam mengakses di berbagai perangkat yang mereka miliki.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--S3-->

    <section class="bg-white dark:bg-gray-900">
        <div class="gap-16 items-center  mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 ">
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white"
                data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">Nikmati Serunya
                    Bermain Game dengan Konsol Terbaik Pilihanmu</h2>
                <p class="mb-4" 
                data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="900">Platform kami menyediakan perhitungan sistem pendukung keputusan yang canggih,
                    memungkinkan Anda mencari konsol
                    berdasarkan merek, jenis, spesifikasi, dan fitur lainnya. Dengan begitu,
                    Anda dapat dengan mudah menemukan konsol yang paling cocok dengan preferensi dan anggaran Anda.</p>
                <p data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="1000">Kami memiliki antarmuka pengguna yang ramah dan responsif, memastikan bahwa Anda dapat menjelajahi
                    platform kami dengan mudah dari berbagai perangkat</p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg" src="{{ asset('h5.png') }}" alt="office content 1"
                data-aos="zoom-out-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="1100">
                <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{ asset('h4.png') }}" alt="office content 2"
                data-aos="zoom-out-down" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="1200">
            </div>
        </div>
    </section>

    <!--S4-->
    <section id="blog" class="bg-white dark:bg-gray-900">
        <div class=" mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white"
                data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">Our
                    Blog</h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400"
                data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="300">Temukan Konsol Impianmu, Raih
                    Kemenangan di Setiap Adegannya
                    Mulai Petualangan Gamingmu dengan Konsol Terbaik!</p>
            </div>
            <div class="grid gap-8 lg:grid-cols-2" data-aos="zoom-in-up" data-aos-duraction="1500" data-aos-delay="450">
                <article
                    class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <span
                            class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                                </path>
                            </svg>
                            Tutorial
                        </span>
                        <span class="text-sm">14 days ago</span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a
                            href="{{ route('spk') }}">Pemilihan Konsol Game Terbaik</a></h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Website ini disajikan dengan cara yang
                        teratur dan terstruktur,
                        sehingga pengguna dapat dengan mudah melakukan perhitungan sistem pendukung keputusan pada berbagai konsol game dan membuat
                        keputusan berdasarkan kebutuhan
                        dan preferensi mereka.</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img class="w-7 h-7 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                alt="avatar" />
                            <span class="font-medium dark:text-white">
                                Oktavian
                            </span>
                        </div>
                        <a href="{{ route('spk') }}"
                            class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                            Selengkapnya
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </article>

                <article
                    class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <span
                            class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                                    clip-rule="evenodd"></path>
                                <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path>
                            </svg>
                            Article
                        </span>
                        <span class="text-sm">14 days ago</span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a
                            href="#konsol">Eksplorasi Konsol Game</a></h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Website ini menjadi sumber terpercaya
                        bagi para pengguna yang
                        mencari pemilihan konsol game terbaik. Proses pemilihan konsol game dengan menyaring opsi-opsi
                        yang tidak relevan, sehingga pengguna tidak perlu mencari informasi secara manual.</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img class="w-7 h-7 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                                alt="avatar" />
                            <span class="font-medium dark:text-white">
                                Saraswati
                            </span>
                        </div>
                        <a href="{{ route('spk') }}"
                            class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                            Selengkapnya
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!--S5-->


    <!--FOOTER-->
    <footer class="p-4 bg-white sm:p-6 dark:bg-gray-800">
        <div class="mx-auto max-w-screen-xl">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="{{ route('/') }}" class="flex items-center">
                        <img src="{{ asset('nav.png') }}" class="mr-3 h-8" alt="FlowBite Logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Konsol
                            Game</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="{{ route('spk') }}" class="hover:underline">SPK</a>
                            </li>
                            <li>
                                <a href="{{ route('spk') }}" class="hover:underline">Konsol Game</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="#" class="hover:underline ">Instagram</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Facebook</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a
                        href="{{ route('/') }}" class="hover:underline">Sistem Pemilihan Konsol Game</a>.
                </span>
                <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    {{-- <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                clip-rule="evenodd" />
                        </svg>
                    </a> --}}
                </div>
            </div>
        </div>
    </footer>



    <script>
        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        // Change the icons inside the button based on previous settings
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }

        var themeToggleBtn = document.getElementById('theme-toggle');

        themeToggleBtn.addEventListener('click', function() {

            // toggle icons inside button
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            // if set via local storage previously
            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }

                // if NOT set via local storage previously
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }

        });
        //animasi number
        function animateValue(id, start, end, duration) {
            // Nilai awal
            var current = start;
            // Jumlah langkah
            var range = end - start;
            // Waktu mulai animasi
            var startTime = new Date().getTime();

            // Fungsi animasi
            var animationInterval = setInterval(function() {
                // Waktu yang sudah berlalu sejak animasi dimulai
                var currentTime = new Date().getTime() - startTime;
                // Perubahan nilai pada setiap langkah animasi
                var increment = Math.floor((range * currentTime) / duration);

                // Periksa apakah waktu animasi sudah mencapai durasi yang ditentukan
                if (currentTime >= duration) {
                    clearInterval(animationInterval);
                    increment = end;
                }

                // Update nilai pada elemen
                document.getElementById(id).textContent = increment;

                // Periksa apakah animasi sudah selesai
                if (increment == end) {
                    clearInterval(animationInterval);
                }
            }, 10); // Interval animasi (ms)
        }

        // Panggil fungsi animateValue untuk setiap angka
        animateValue("developers", 0, 7369, 3000);
        animateValue("contributors", 0, 1689, 3000);
        animateValue("organizations", 0, 4145, 3000);
        animateValue("associations", 0, 1100, 3000);
        animateValue("collaborators", 0, 4851, 3000);
        //animasi number

    </script>
</body>

</html>
