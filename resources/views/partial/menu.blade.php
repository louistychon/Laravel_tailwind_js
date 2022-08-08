
    <nav class="bg-white shadow dark:bg-stone-800">
        <div class="container px-6 py-4 mx-auto md:flex md:justify-between md:items-center">
            <div class="flex items-center justify-between">
                <div>
                    <a class="text-2xl font-bold text-stone-800 transition-colors duration-200 transform dark:text-white lg:text-3xl hover:text-stone-700 dark:hover:text-purple-900" href="/">{{env('SITE_NAME')}}</a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex md:hidden">
                    <button type="button" class="text-stone-500 dark:text-stone-200 hover:text-stone-600 dark:hover:text-stone-400 focus:outline-none focus:text-stone-600 dark:focus:text-stone-400" aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div class="items-center md:flex">
                <div class="flex flex-col md:flex-row md:mx-6">
                    <a class="my-1 text-sm font-medium text-stone-700 transition-colors duration-200 transform dark:text-stone-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0" href="/about">About</a>
                    <a class="my-1 text-sm font-medium text-stone-700 transition-colors duration-200 transform dark:text-stone-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0" href="/services">Services</a>
                    <a class="my-1 text-sm font-medium text-stone-700 transition-colors duration-200 transform dark:text-stone-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0" href="/contact">Contact</a>
                </div>


            </div>
        </div>
    </nav>
