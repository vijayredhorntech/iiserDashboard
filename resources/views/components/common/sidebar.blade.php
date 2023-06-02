<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 xl:w-64 lg:w-64 md:w-64  sm:w-64 w-full h-screen lg:pt-12 md:pt-12 sm:pt-12 pt-24 bg-gray-300 transition-transform -translate-x-full  border-r border-gray-200 sm:translate-x-0" aria-label="Sidebar">

    <form class="flex items-center">
        <label for="voice-search" class="sr-only">Search</label>
        <div class="relative w-full">
            <input type="text" id="voice-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-gray-400 focus:border-blue-500 block w-full p-1 " placeholder="Search" required>
            <button type="button" class="absolute inset-y-0 right-0 flex items-center pr-3">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>

            </button>
        </div>

    </form>




    <div class="overflow-y-auto py-4">
        <span class="ml-4 text-gray-900  font-semibold ">MENU</span>

        <ul class="space-y-2 mt-2 mb-2">
            <li>
                <a href="#" class="flex items-center p-1.5 text-md text-gray-500 bg-gray-200  hover:bg-gray-100 hover:text-gray-900 font-normal border-l-4 border-red-500 ">
                    <i class="fa-solid fa-gauge"></i>
                    <span class="ml-3 ">Dashboard</span>
                </a>
            </li>

            <li>
                <button type="button" class="flex items-center w-full p-2 text-md text-gray-500 bg-gray-200 transition duration-75  hover:bg-gray-100 hover:text-gray-900  " aria-controls="adminSection" data-collapse-toggle="adminSection">
                    <i class="fa-solid fa-user"></i>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Admin Section</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <ul id="adminSection" class="hidden py-2 space-y-2">

                    <li>
                        <a href="#" class="flex items-center w-full p-2 text-md text-gray-500 transition duration-75 bg-gray-200  hover:bg-gray-100 hover:text-gray-900  ">Admin 1</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center w-full p-2 text-md text-gray-500 transition duration-75 bg-gray-200  hover:bg-gray-100 hover:text-gray-900  ">Admin 2</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center w-full p-2 text-md text-gray-500 transition duration-75 bg-gray-200  hover:bg-gray-100 hover:text-gray-900  ">Admin 3</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center w-full p-2 text-md text-gray-500 transition duration-75 bg-gray-200  hover:bg-gray-100 hover:text-gray-900  ">Admin 4</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center w-full p-2 text-md text-gray-500 transition duration-75 bg-gray-200  hover:bg-gray-100 hover:text-gray-900  ">Admin 5</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center w-full p-2 text-md text-gray-500 transition duration-75 bg-gray-200  hover:bg-gray-100 hover:text-gray-900  ">Admin 6</a>
                    </li>
                </ul>
            </li>

            <li>
                <button type="button" class="flex items-center w-full p-2 text-md text-gray-500 bg-gray-200 transition duration-75  hover:bg-gray-100 hover:text-gray-900  " aria-controls="subAdmin" data-collapse-toggle="subAdmin">
                    <i class="fa-solid fa-file-invoice"></i>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Sub Admin (PI)</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <ul id="subAdmin" class="hidden py-2 space-y-2">
                    <li>
                        <a href="#" class="flex items-center w-full p-2 text-md text-gray-500 transition duration-75 bg-gray-200  hover:bg-gray-100 hover:text-gray-900  ">Sub Admin 1</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center w-full p-2 text-md text-gray-500 transition duration-75 bg-gray-200  hover:bg-gray-100 hover:text-gray-900  ">Sub Admin 2</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center w-full p-2 text-md text-gray-500 transition duration-75 bg-gray-200  hover:bg-gray-100 hover:text-gray-900  ">Sub Admin 3</a>
                    </li>
                </ul>
            </li>

            <li>
                <button type="button" class="flex items-center w-full p-2 text-md text-gray-500 bg-gray-200 transition duration-75  hover:bg-gray-100 hover:text-gray-900  " aria-controls="vendor" data-collapse-toggle="vendor">
                    <i class="fa-solid fa-credit-card"></i>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Vendor Dashboard</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <ul id="vendor" class="hidden py-2 space-y-2">

                    <li>
                        <a href="#" class="flex items-center w-full p-2 text-md text-gray-500 transition duration-75 bg-gray-200  hover:bg-gray-100 hover:text-gray-900  ">Vendor 1</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center w-full p-2 text-md text-gray-500 transition duration-75 bg-gray-200  hover:bg-gray-100 hover:text-gray-900  ">Vendor 2</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center w-full p-2 text-md text-gray-500 transition duration-75 bg-gray-200  hover:bg-gray-100 hover:text-gray-900  ">Vendor 3</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center w-full p-2 text-md text-gray-500 transition duration-75 bg-gray-200  hover:bg-gray-100 hover:text-gray-900  ">Vendor 4</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center w-full p-2 text-md text-gray-500 transition duration-75 bg-gray-200  hover:bg-gray-100 hover:text-gray-900  ">Vendor 5</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center w-full p-2 text-md text-gray-500 transition duration-75 bg-gray-200  hover:bg-gray-100 hover:text-gray-900  ">Vendor 6</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center w-full p-2 text-md text-gray-500 transition duration-75 bg-gray-200  hover:bg-gray-100 hover:text-gray-900  ">Vendor 7</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center w-full p-2 text-md text-gray-500 transition duration-75 bg-gray-200  hover:bg-gray-100 hover:text-gray-900  ">Vendor 8</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#" class="flex items-center p-2 text-md text-md text-gray-500 bg-gray-200  hover:bg-gray-100 hover:text-gray-900 font-normal ">
                    <i class="fa-solid fa-credit-card"></i>
                    <span class="ml-3 ">New Work Flow</span>
                </a>
            </li>

        </ul>


        <span class="ml-4 text-gray-900 mb-2 font-semibold ">OTHERS</span>

        <ul class="space-y-2 mt-4 font-medium">
            <li>
                <a href="#" class="flex items-center p-2 text-md text-md text-gray-500 bg-gray-200  hover:bg-gray-100 hover:text-gray-900 font-normal ">
                    <i class="fa-solid fa-gear"></i>
                    <span class="ml-3 ">Settings</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-md text-md text-gray-500 bg-gray-200  hover:bg-gray-100 hover:text-gray-900 font-normal ">
                    <i class="fa-solid fa-credit-card"></i>
                    <span class="ml-3 ">Payment</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-md text-md text-gray-500 bg-gray-200  hover:bg-gray-100 hover:text-gray-900 font-normal ">
                    <i class="fa-solid fa-user"></i>
                    <span class="ml-3 ">Accounts</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-md text-md text-gray-500 bg-gray-200  hover:bg-gray-100 hover:text-gray-900 font-normal ">
                    <i class="fa-solid fa-circle-info"></i>
                    <span class="ml-3 ">Help</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-md text-md text-gray-500 bg-gray-200  hover:bg-gray-100 hover:text-gray-900 font-normal ">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span class="ml-3 ">Log Out</span>
                </a>
            </li>



        </ul>
    </div>

</aside>
