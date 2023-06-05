
<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 bg-white transition-transform -translate-x-full  border-r border-gray-200 sm:translate-x-0" aria-label="Sidebar">
    <div class="py-2 px-4 overflow-y-auto">

        <span class="ml-4 text-gray-900 mb-2 font-semibold ">MENU</span>

        <ul class="space-y-2 mt-4 mb-6  font-medium">
            <li>
                <a href="{{route('dashboardPage')}}" class="flex items-center p-2 text-sm  rounded-md  hover:bg-blue-100 hover:text-indigo-900  {{ (\Request::route()->getName() == 'dashboardPage') ? 'bg-blue-100 text-indigo-900' : 'text-gray-500' }}">
                    <i class="fa-solid fa-gauge"></i>
                    <span class="ml-3 ">Dashboard</span>
                </a>
            </li>

            <li>
                <button type="button" class="flex items-center w-full p-2 text-sm  transition duration-75 rounded-md hover:bg-blue-100 hover:text-indigo-900 {{ (\Request::route()->getName() == 'adminPage') ? 'bg-blue-100 text-indigo-900' : 'text-gray-500' }}" aria-controls="adminSection" data-collapse-toggle="adminSection">
                    <i class="fa-solid fa-user"></i>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Admin Section</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <ul id="adminSection" class="hidden py-2 space-y-2">
                    <li>
                        <a href="{{route('adminPage')}}" class="flex items-center w-full p-2 text-sm text-gray-500 transition duration-75 rounded-md hover:bg-blue-100 hover:text-indigo-900">Register (PI)</a>
                    </li>
                    <li>
                        <a href="{{route('adminPage')}}" class="flex items-center w-full p-2 text-sm text-gray-500 transition duration-75 rounded-md hover:bg-blue-100 hover:text-indigo-900   ">Register Vendor/Supplier</a>
                    </li>
                </ul>
            </li>


            <li>
                <button type="button" class="flex items-center w-full p-2 text-sm transition duration-75 rounded-md hover:bg-blue-100 hover:text-indigo-900  {{ (\Request::route()->getName() == 'subAdminPage') ? 'bg-blue-100 text-indigo-900' : 'text-gray-500' }} " aria-controls="subAdmin" data-collapse-toggle="subAdmin">
                    <i class="fa-solid fa-file-invoice"></i>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Sub Admin (PI)</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <ul id="subAdmin" class="hidden py-2 space-y-2">
                    <li>
                        <a href="{{route('subAdminPage')}}" class="flex items-center w-full p-2 text-sm text-gray-500 transition duration-75 rounded-md hover:bg-blue-100 hover:text-indigo-900  ">Register Lab Member </a>
                    </li>
                    <li>
                        <a href="{{route('subAdminPage')}}" class="flex items-center w-full p-2 text-sm text-gray-500 transition duration-75 rounded-md hover:bg-blue-100 hover:text-indigo-900  ">Quotes Management</a>
                    </li>
                    <li>
                        <a href="{{route('subAdminPage')}}" class="flex items-center w-full p-2 text-sm text-gray-500 transition duration-75 rounded-md hover:bg-blue-100 hover:text-indigo-900  ">Roles and Permissions</a>
                    </li>
                    <li>
                        <a href="{{route('subAdminPage')}}" class="flex items-center w-full p-2 text-sm text-gray-500 transition duration-75 rounded-md hover:bg-blue-100 hover:text-indigo-900  ">R/P for Inventory Module</a>
                    </li>
                </ul>
            </li>

            <li>
                <button type="button" class="flex items-center w-full p-2 text-sm text-gray-500 transition duration-75 rounded-md hover:bg-blue-100 hover:text-indigo-900  {{ (\Request::route()->getName() == 'vendorDashboardPage') ? 'bg-blue-100 text-indigo-900' : 'text-gray-500' }}  " aria-controls="vendor" data-collapse-toggle="vendor">
                    <i class="fa-solid fa-credit-card"></i>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Vendor Dashboard</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <ul id="vendor" class="hidden py-2 space-y-2">
                    <li>
                        <a href={{route('vendorDashboardPage')}}#" class="flex items-center w-full p-2 text-sm text-gray-500 transition duration-75 rounded-md hover:bg-blue-100 hover:text-indigo-900  ">Manage Profile </a>
                    </li>
                    <li>
                        <a href={{route('vendorDashboardPage')}}#" class="flex items-center w-full p-2 text-sm text-gray-500 transition duration-75 rounded-md hover:bg-blue-100 hover:text-indigo-900  ">Manage Products</a>
                    </li>
                    <li>
                        <a href={{route('vendorDashboardPage')}}#" class="flex items-center w-full p-2 text-sm text-gray-500 transition duration-75 rounded-md hover:bg-blue-100 hover:text-indigo-900  ">Sales Offers</a>
                    </li>
                    <li>
                        <a href={{route('vendorDashboardPage')}}#" class="flex items-center w-full p-2 text-sm text-gray-500 transition duration-75 rounded-md hover:bg-blue-100 hover:text-indigo-900  ">Quotation Management</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="{{route('workFlow')}}" class="flex items-center p-2 text-sm rounded-md  hover:bg-blue-100 hover:text-indigo-900 font-medium {{ (\Request::route()->getName() == 'workFlow') ? 'bg-blue-100 text-indigo-900' : 'text-gray-500' }}">
                    <i class="fa-solid fa-credit-card"></i>
                    <span class="ml-3 ">New Work Flow</span>
                </a>
            </li>


        </ul>


        <span class="ml-4 text-gray-900 mb-2 font-semibold ">OTHERS</span>

        <ul class="space-y-2 mt-4 font-medium">
            <li>
                <a href="#" class="flex items-center p-2 text-sm text-gray-500 rounded-md  hover:bg-blue-100 hover:text-indigo-900 font-medium ">
                    <i class="fa-solid fa-gear"></i>
                    <span class="ml-3 ">Settings</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-sm text-gray-500 rounded-md  hover:bg-blue-100 hover:text-indigo-900 font-medium ">
                    <i class="fa-solid fa-credit-card"></i>
                    <span class="ml-3 ">Payment</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-sm text-gray-500 rounded-md  hover:bg-blue-100 hover:text-indigo-900 font-medium ">
                    <i class="fa-solid fa-user"></i>
                    <span class="ml-3 ">Accounts</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-sm text-gray-500 rounded-md  hover:bg-blue-100 hover:text-indigo-900 font-medium ">
                    <i class="fa-solid fa-circle-info"></i>
                    <span class="ml-3 ">Help</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-sm text-gray-500 rounded-md  hover:bg-blue-100 hover:text-indigo-900 font-medium ">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span class="ml-3 ">Log Out</span>
                </a>
            </li>



        </ul>
    </div>

</aside>




