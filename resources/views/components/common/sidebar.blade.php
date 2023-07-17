
<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 bg-white transition-transform -translate-x-full  border-r border-gray-200 sm:translate-x-0" aria-label="Sidebar">
    <div class="py-2 px-4 overflow-y-auto">

        <span class="ml-4 text-gray-900 mb-2 font-semibold ">MENU</span>

        <ul class="space-y-2 mt-4 mb-6  font-medium">
            <li>
                <a href="{{route('flightBookingPage')}}" class="flex items-center p-2 text-sm  rounded-md  hover:bg-blue-100 hover:text-indigo-900  {{ (\Request::route()->getName() == 'flightBookingPage') ? 'bg-blue-100 text-indigo-900' : 'text-gray-500' }}">
                    <i class="fa-solid fa-gauge"></i>
                    <span class="ml-3 ">Flight Bookings</span>
                </a>
            </li>
            <li>
                <a href="{{route('invoicesPage')}}" class="flex items-center p-2 text-sm  rounded-md  hover:bg-blue-100 hover:text-indigo-900  {{ (\Request::route()->getName() == 'invoicesPage') ? 'bg-blue-100 text-indigo-900' : 'text-gray-500' }}">
                    <i class="fa-solid fa-gauge"></i>
                    <span class="ml-3 ">Invoices</span>
                </a>
            </li>
            <li>
                <a href="{{route('clientsPage')}}" class="flex items-center p-2 text-sm  rounded-md  hover:bg-blue-100 hover:text-indigo-900  {{ (\Request::route()->getName() == 'clientsPage') ? 'bg-blue-100 text-indigo-900' : 'text-gray-500' }}">
                    <i class="fa-solid fa-gauge"></i>
                    <span class="ml-3 ">Clients</span>
                </a>
            </li>
            <li>
                <a href="{{route('settingPage')}}" class="flex items-center p-2 text-sm  rounded-md  hover:bg-blue-100 hover:text-indigo-900  {{ (\Request::route()->getName() == 'settingPage') ? 'bg-blue-100 text-indigo-900' : 'text-gray-500' }}">
                    <i class="fa-solid fa-gauge"></i>
                    <span class="ml-3 ">Settings</span>
                </a>
            </li>

{{--            <li>--}}
{{--                <button type="button" class="flex items-center w-full p-2 text-sm  transition duration-75 rounded-md hover:bg-blue-100 hover:text-indigo-900 {{ (\Request::route()->getName() == 'adminPage') ? 'bg-blue-100 text-indigo-900' : 'text-gray-500' }}" aria-controls="adminSection" data-collapse-toggle="adminSection">--}}
{{--                    <i class="fa-solid fa-user"></i>--}}
{{--                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Admin Section</span>--}}
{{--                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>--}}
{{--                </button>--}}
{{--                <ul id="adminSection" class="hidden py-2 space-y-2">--}}
{{--                    <li>--}}
{{--                        <a href="{{route('adminPage')}}" class="flex items-center w-full p-2 text-sm text-gray-500 transition duration-75 rounded-md hover:bg-blue-100 hover:text-indigo-900">Register (PI)</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="{{route('adminPage')}}" class="flex items-center w-full p-2 text-sm text-gray-500 transition duration-75 rounded-md hover:bg-blue-100 hover:text-indigo-900   ">Register Vendor/Supplier</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
        </ul>



    </div>

</aside>




