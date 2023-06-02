@extends('common.main')

@section('main')

    <div class=" text-md mb-0 sm:ml-64 lg:mt-12 md:mt-12 sm:mt-12 mt-24 bg-white">
        <div class="bg-gray-200 w-full p-1">
            <span class="text-sm border-r-2 border-gray-400 px-2"><i class="fa-solid fa-home"></i></span>
            <span class="text-sm text-red-500 font-normal ml-4">Dashboard</span>
        </div>


{{--        top circle here--}}
        <div class="w-full flex  justify-center gap-2 p-2 bg-gray-100 mt-4  ">

             <div class="bg-gray-300 border-gray-300 border-2 hover:bg-red-400  hover:text-white hover:border-red-400 lg:px-8 lg:py-8 md:px-4 md:py-4 sm:px-2 sm:py-2 px-2 py-1   rounded-full"  data-tooltip-target="users" data-tooltip-placement="top">
                <span class="lg:text-3xl md:text-lg sm:text-md text-sm text-gray-600"><i class="fa-solid fa-user"></i></span>
                 <div id="users" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    Users
                     <div class="tooltip-arrow" data-popper-arrow></div>
                 </div>
             </div>

            <div class="bg-gray-300 border-gray-300 border-2 hover:bg-red-400  hover:text-white hover:border-red-400 lg:px-8 lg:py-8 md:px-4 md:py-4 sm:px-2 sm:py-2 px-2 py-1  relative rounded-full"  data-tooltip-target="comments" data-tooltip-placement="top">
                <span class="lg:text-3xl md:text-lg sm:text-md text-sm text-gray-600"><i class="fa-solid fa-comments"></i></span>
                <div id="comments" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    Comments
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>

                <div class="bg-green-600 absolute top-0 right-0 rounded-full px-2 text-white lg:block md:block sm:hidden hidden">
                    <span>2</span>
                </div>
            </div>

            <div class="bg-gray-300 border-gray-300 border-2 hover:bg-red-400  hover:text-white hover:border-red-400 lg:px-8 lg:py-8 md:px-4 md:py-4 sm:px-2 sm:py-2 px-2 py-1  relative  rounded-full"  data-tooltip-target="calender" data-tooltip-placement="top">
                <span class="lg:text-3xl md:text-lg sm:text-md text-sm text-gray-600"><i class="fa-solid fa-calendar-days"></i></span>
                <div id="calender" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    Calender
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <div class="bg-gray-900 absolute top-0 right-0 rounded-full px-2 text-white lg:block md:block sm:hidden hidden">
                    <span>5</span>
                </div>
            </div>

            <div class="bg-gray-300 border-gray-300 border-2 hover:bg-red-400  hover:text-white hover:border-red-400 lg:px-8 lg:py-8 md:px-4 md:py-4 sm:px-2 sm:py-2 px-2 py-1   rounded-full"  data-tooltip-target="photos" data-tooltip-placement="top">
                <span class="lg:text-3xl md:text-lg sm:text-md text-sm text-gray-600"><i class="fa-solid fa-camera"></i></span>
                <div id="photos" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    Photos
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
            </div>

            <div class="bg-gray-300 border-gray-300 border-2 hover:bg-red-400  hover:text-white hover:border-red-400 lg:px-8 lg:py-8 md:px-4 md:py-4 sm:px-2 sm:py-2 px-2 py-1   rounded-full"  data-tooltip-target="projects" data-tooltip-placement="top">
                <span class="lg:text-3xl md:text-lg sm:text-md text-sm text-gray-600"><i class="fa-solid fa-link"></i></span>
                <div id="projects" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    Projects
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
            </div>

            <div class="bg-gray-300 border-gray-300 border-2 hover:bg-red-400  hover:text-white hover:border-red-400 lg:px-8 lg:py-8 md:px-4 md:py-4 sm:px-2 sm:py-2 px-2 py-1  relative rounded-full"  data-tooltip-target="tasks" data-tooltip-placement="top">
                <span class="lg:text-3xl md:text-lg sm:text-md text-sm text-gray-600"><i class="fa-solid fa-list-check"></i></span>
                <div id="tasks" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    Tasks
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <div class="bg-yellow-600 absolute top-0 right-0 rounded-full px-2 text-white lg:block md:block sm:hidden hidden">
                    <span>1</span>
                </div>
            </div>

            <div class="bg-gray-300 border-gray-300 border-2 hover:bg-red-400  hover:text-white hover:border-red-400 lg:px-8 lg:py-8 md:px-4 md:py-4 sm:px-2 sm:py-2 px-2 py-1   rounded-full"  data-tooltip-target="reader" data-tooltip-placement="top">
                <span class="lg:text-3xl md:text-lg sm:text-md text-sm text-gray-600"><i class="fa-solid fa-book"></i></span>
                <div id="reader" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    Readers
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
            </div>

            <div class="bg-gray-300 border-gray-300 border-2 hover:bg-red-400  hover:text-white hover:border-red-400 lg:px-8 lg:py-8 md:px-4 md:py-4 sm:px-2 sm:py-2 px-2 py-1   rounded-full"  data-tooltip-target="setting" data-tooltip-placement="top">
                <span class="lg:text-3xl md:text-lg sm:text-md text-sm text-gray-600"><i class="fa-solid fa-gears"></i></span>
                <div id="setting" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    Settings
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
            </div>


        </div>
{{--        top circles ends here--}}

{{--        statics here--}}
        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-2 gap-4  w-full lg:py-8 md:py-4 sm:py-4 py-4 px-2 ">

            <x-dashboard.stats-card> </x-dashboard.stats-card>

        </div>
{{--        statics ends here--}}



{{--        graph, projets and alert here--}}
        <div class="grid mb-12  lg:grid-cols-2 md:grid-cols-1 grid-cols-1 gap-4  w-full px-2 ">


{{--            graph here--}}
            <div class=" w-full  flex flex-col  border-0 border-gray-300 " >

                <div class="w-full flex px-2 py-4 bg-gray-200 justify-end border-b-2 border-gray-300">

                    <div>
                        <span class=" p-2 border-2 border-gray-300"><i class="fa-solid fa-chart-simple"></i></span>
                    </div>
                </div>

                <div class="w-full h-96   p-2 bg-gray-200 ">


                        <img class=" h-full w-full" src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="">



                </div>

            </div>
{{--                graph here--}}

{{--            project and report here--}}
            <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-4 w-full  flex flex-col  border-0 border-gray-300">

                  <div class=" w-full  flex flex-col  border-0 border-gray-300 " >

                      <div class="w-full flex px-2 py-4 bg-gray-200 justify-between border-b-2 border-gray-300">
                          <div>
                              <span class="font-semibold text-orange-950">Projects</span>
                          </div>
                          <div>
                              <span class=" p-2 border-2 border-gray-300"><i class="fa-solid fa-cart-shopping"></i></span>
                          </div>
                      </div>

                      <div class="w-full h-96   p-2 bg-gray-200 overflow-y-scroll">

                                <x-dashboard.project-stats></x-dashboard.project-stats>

                      </div>

                  </div>

                  <div class=" w-full  flex flex-col  border-0 border-gray-300 " >

                    <div class="w-full flex px-2 py-4 bg-gray-200 justify-between border-b-2 border-gray-300">
                        <div>
                            <span class="font-semibold text-orange-950">Reports</span>
                        </div>
                        <div>
                            <span class=" p-2 border-2 border-gray-300"><i class="fa-solid fa-cart-shopping"></i></span>
                        </div>
                    </div>

                    <div class="w-full h-96   p-2 bg-gray-200 overflow-y-scroll">

                            <x-dashboard.report-stats></x-dashboard.report-stats>

                    </div>

                </div>

            </div>
{{--            project and report here--}}


        </div>
{{--        graph, projects and alert ends here--}}



{{--        table and user starts here--}}
        <div class="grid mb-12 lg:grid-cols-2 md:grid-cols-1 grid-cols-1 gap-4  w-full px-2 ">

            <div class=" w-full  flex flex-col  border-0 border-gray-300 " >

                <div class="w-full flex px-2 py-4 bg-gray-200 justify-between border-b-2 border-gray-300">
                    <div>
                        <span class="font-semibold text-orange-950">New Orders</span>
                    </div>
                    <div>
                        <span class=" p-2 border-2 border-gray-300"><i class="fa-solid fa-chart-simple"></i></span>
                    </div>
                </div>

                <div class="w-full h-96 p-2  bg-gray-200 ">

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 ">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Product name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Color
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Price
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="bg-white border-b hover:bg-gray-50 ">

                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Apple MacBook Pro 17"
                                </th>
                                <td class="px-6 py-4">
                                    Silver
                                </td>
                                <td class="px-6 py-4">
                                    Laptop
                                </td>
                                <td class="px-6 py-4">
                                    $2999
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-50 ">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Microsoft Surface Pro
                                </th>
                                <td class="px-6 py-4">
                                    White
                                </td>
                                <td class="px-6 py-4">
                                    Laptop PC
                                </td>
                                <td class="px-6 py-4">
                                    $1999
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-50 ">

                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Magic Mouse 2
                                </th>
                                <td class="px-6 py-4">
                                    Black
                                </td>
                                <td class="px-6 py-4">
                                    Accessories
                                </td>
                                <td class="px-6 py-4">
                                    $99
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-50 ">

                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Apple Watch
                                </th>
                                <td class="px-6 py-4">
                                    Black
                                </td>
                                <td class="px-6 py-4">
                                    Watches
                                </td>
                                <td class="px-6 py-4">
                                    $199
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <nav class="flex items-center justify-between pt-4" aria-label="Table navigation">
                            <span class="text-sm font-normal text-gray-500 ">Showing <span class="font-semibold text-gray-900">1-10</span> of <span class="font-semibold text-gray-900">1000</span></span>
                            <ul class="inline-flex items-center -space-x-px">
                                <li>
                                    <a href="#" class="block px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700  ">
                                        <span class="sr-only">Previous</span>
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700  ">1</a>
                                </li>
                                <li>
                                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700  ">2</a>
                                </li>
                                <li>
                                    <a href="#" aria-current="page" class="z-10 px-3 py-2 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700">3</a>
                                </li>
                                <li>
                                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700  ">...</a>
                                </li>
                                <li>
                                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700  ">100</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700  ">
                                        <span class="sr-only">Next</span>
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>

            </div>

            <div class=" w-full  flex flex-col  border-0 border-gray-300 " >

                <div class="w-full flex px-2 py-4 bg-gray-200 justify-between border-b-2 border-gray-300">
                    <div>
                        <span class="font-semibold text-orange-950">Users</span>
                    </div>
                    <div>
                        <span class=" p-2 border-2 border-gray-300"><i class="fa-solid fa-chart-simple"></i></span>
                    </div>
                </div>

                <div class="w-full h-96   p-2 bg-gray-200 ">

                    <div class="mb-4 border-b border-gray-200">

                        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                            <li class="mr-2 bg-white rounded-md p-0 hover:bg-gray-100" role="presentation">
                                <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-800" data-tabs-target="#profile" type="button" role="tab" >Profile</button>
                            </li>
                            <li class="mr-2 bg-white rounded-md p-0 hover:bg-gray-100" role="presentation">
                                <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-800" data-tabs-target="#dashboard" type="button" role="tab" >Dashboard</button>
                            </li>
                            <li class="mr-2 bg-white rounded-md p-0 hover:bg-gray-100" role="presentation">
                                <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-800" data-tabs-target="#user" type="button" role="tab" >New Users</button>
                            </li>


                        </ul>

                    </div>


                    <div id="myTabContent">
                        <div class="hidden p-4 rounded-lg bg-gray-50 " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="grid lg:grid-cols-8 md:grid-cols-2 grid-cols-2 gap-4  w-full">

                                <div class="bg-white flex justify-center flex-col">
                                    <div class=" py-2 border-2 border-gray-900">
                                        <img class="h-14 w-12 m-auto" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlcnxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" alt="">
                                    </div>
                                    <div class="flex justify-center">
                                        <span class="m-auto text-red-600">Admin 1</span>
                                    </div>
                                </div>
                                <div class="bg-white flex justify-center flex-col">
                                    <div class=" py-2 border-2 border-gray-900">
                                        <img class="h-14 w-12 m-auto" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlcnxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" alt="">
                                    </div>
                                    <div class="flex justify-center">
                                        <span class="m-auto text-red-600">Admin 1</span>
                                    </div>
                                </div>
                                <div class="bg-white flex justify-center flex-col">
                                    <div class=" py-2 border-2 border-gray-900">
                                        <img class="h-14 w-12 m-auto" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlcnxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" alt="">
                                    </div>
                                    <div class="flex justify-center">
                                        <span class="m-auto text-red-600">Admin 1</span>
                                    </div>
                                </div>
                                <div class="bg-white flex justify-center flex-col">
                                    <div class=" py-2 border-2 border-gray-900">
                                        <img class="h-14 w-12 m-auto" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlcnxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" alt="">
                                    </div>
                                    <div class="flex justify-center">
                                        <span class="m-auto text-red-600">Admin 1</span>
                                    </div>
                                </div>
                                <div class="bg-white flex justify-center flex-col">
                                    <div class=" py-2 border-2 border-gray-900">
                                        <img class="h-14 w-12 m-auto" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlcnxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" alt="">
                                    </div>
                                    <div class="flex justify-center">
                                        <span class="m-auto text-red-600">Admin 1</span>
                                    </div>
                                </div>
                                <div class="bg-white flex justify-center flex-col">
                                    <div class=" py-2 border-2 border-gray-900">
                                        <img class="h-14 w-12 m-auto" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlcnxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" alt="">
                                    </div>
                                    <div class="flex justify-center">
                                        <span class="m-auto text-red-600">Admin 1</span>
                                    </div>
                                </div>
                                <div class="bg-white flex justify-center flex-col">
                                    <div class=" py-2 border-2 border-gray-900">
                                        <img class="h-14 w-12 m-auto" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlcnxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" alt="">
                                    </div>
                                    <div class="flex justify-center">
                                        <span class="m-auto text-red-600">Admin 1</span>
                                    </div>
                                </div>
                                <div class="bg-white flex justify-center flex-col">
                                    <div class=" py-2 border-2 border-gray-900">
                                        <img class="h-14 w-12 m-auto" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlcnxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" alt="">
                                    </div>
                                    <div class="flex justify-center">
                                        <span class="m-auto text-red-600">Admin 1</span>
                                    </div>
                                </div>
                                <div class="bg-white flex justify-center flex-col">
                                    <div class=" py-2 border-2 border-gray-900">
                                        <img class="h-14 w-12 m-auto" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlcnxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" alt="">
                                    </div>
                                    <div class="flex justify-center">
                                        <span class="m-auto text-red-600">Admin 1</span>
                                    </div>
                                </div>
                                <div class="bg-white flex justify-center flex-col">
                                    <div class=" py-2 border-2 border-gray-900">
                                        <img class="h-14 w-12 m-auto" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlcnxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" alt="">
                                    </div>
                                    <div class="flex justify-center">
                                        <span class="m-auto text-red-600">Admin 1</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 " id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                            <div class="grid lg:grid-cols-8 md:grid-cols-2 grid-cols-2 gap-4  w-full">

                                <div class="bg-white flex justify-center flex-col">
                                    <div class=" py-2 border-2 border-gray-900">
                                        <img class="h-14 w-12 m-auto" src="https://www.shutterstock.com/image-vector/dashboard-ui-data-hud-diagram-260nw-1913577490.jpg" alt="">
                                    </div>
                                    <div class="flex justify-center">
                                        <span class="m-auto text-red-600">Dashboard</span>
                                    </div>
                                </div>
                                <div class="bg-white flex justify-center flex-col">
                                    <div class=" py-2 border-2 border-gray-900">
                                        <img class="h-14 w-12 m-auto" src="https://www.shutterstock.com/image-vector/dashboard-ui-data-hud-diagram-260nw-1913577490.jpg" alt="">
                                    </div>
                                    <div class="flex justify-center">
                                        <span class="m-auto text-red-600">Dashboard</span>
                                    </div>
                                </div>
                                <div class="bg-white flex justify-center flex-col">
                                    <div class=" py-2 border-2 border-gray-900">
                                        <img class="h-14 w-12 m-auto" src="https://www.shutterstock.com/image-vector/dashboard-ui-data-hud-diagram-260nw-1913577490.jpg" alt="">
                                    </div>
                                    <div class="flex justify-center">
                                        <span class="m-auto text-red-600">Dashboard</span>
                                    </div>
                                </div>
                                <div class="bg-white flex justify-center flex-col">
                                    <div class=" py-2 border-2 border-gray-900">
                                        <img class="h-14 w-12 m-auto" src="https://www.shutterstock.com/image-vector/dashboard-ui-data-hud-diagram-260nw-1913577490.jpg" alt="">
                                    </div>
                                    <div class="flex justify-center">
                                        <span class="m-auto text-red-600">Dashboard</span>
                                    </div>
                                </div>
                                <div class="bg-white flex justify-center flex-col">
                                    <div class=" py-2 border-2 border-gray-900">
                                        <img class="h-14 w-12 m-auto" src="https://www.shutterstock.com/image-vector/dashboard-ui-data-hud-diagram-260nw-1913577490.jpg" alt="">
                                    </div>
                                    <div class="flex justify-center">
                                        <span class="m-auto text-red-600">Dashboard</span>
                                    </div>
                                </div>
                                <div class="bg-white flex justify-center flex-col">
                                    <div class=" py-2 border-2 border-gray-900">
                                        <img class="h-14 w-12 m-auto" src="https://www.shutterstock.com/image-vector/dashboard-ui-data-hud-diagram-260nw-1913577490.jpg" alt="">
                                    </div>
                                    <div class="flex justify-center">
                                        <span class="m-auto text-red-600">Dashboard</span>
                                    </div>
                                </div>
                                <div class="bg-white flex justify-center flex-col">
                                    <div class=" py-2 border-2 border-gray-900">
                                        <img class="h-14 w-12 m-auto" src="https://www.shutterstock.com/image-vector/dashboard-ui-data-hud-diagram-260nw-1913577490.jpg" alt="">
                                    </div>
                                    <div class="flex justify-center">
                                        <span class="m-auto text-red-600">Dashboard</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 " id="user" role="tabpanel" aria-labelledby="users-tab">
                            <div class="grid lg:grid-cols-8 md:grid-cols-2 grid-cols-2 gap-4  w-full">

                                <div class="bg-white flex justify-center flex-col">
                                    <div class=" py-2 border-2 border-gray-900">
                                        <img class="h-14 w-12 m-auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDJP1wbyGV9xQvRrPHKLAJ_C8MTzPeIDPwW_Ut8Po&s" alt="">
                                    </div>
                                    <div class="flex justify-center">
                                        <span class="m-auto text-red-600">Users 1 </span>
                                    </div>
                                </div>
                                <div class="bg-white flex justify-center flex-col">
                                    <div class=" py-2 border-2 border-gray-900">
                                        <img class="h-14 w-12 m-auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDJP1wbyGV9xQvRrPHKLAJ_C8MTzPeIDPwW_Ut8Po&s" alt="">
                                    </div>
                                    <div class="flex justify-center">
                                        <span class="m-auto text-red-600">Users 1 </span>
                                    </div>
                                </div>
                                <div class="bg-white flex justify-center flex-col">
                                    <div class=" py-2 border-2 border-gray-900">
                                        <img class="h-14 w-12 m-auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDJP1wbyGV9xQvRrPHKLAJ_C8MTzPeIDPwW_Ut8Po&s" alt="">
                                    </div>
                                    <div class="flex justify-center">
                                        <span class="m-auto text-red-600">Users 1 </span>
                                    </div>
                                </div>
                                <div class="bg-white flex justify-center flex-col">
                                    <div class=" py-2 border-2 border-gray-900">
                                        <img class="h-14 w-12 m-auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDJP1wbyGV9xQvRrPHKLAJ_C8MTzPeIDPwW_Ut8Po&s" alt="">
                                    </div>
                                    <div class="flex justify-center">
                                        <span class="m-auto text-red-600">Users 1 </span>
                                    </div>
                                </div>
                                <div class="bg-white flex justify-center flex-col">
                                    <div class=" py-2 border-2 border-gray-900">
                                        <img class="h-14 w-12 m-auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDJP1wbyGV9xQvRrPHKLAJ_C8MTzPeIDPwW_Ut8Po&s" alt="">
                                    </div>
                                    <div class="flex justify-center">
                                        <span class="m-auto text-red-600">Users 1 </span>
                                    </div>
                                </div>
                                <div class="bg-white flex justify-center flex-col">
                                    <div class=" py-2 border-2 border-gray-900">
                                        <img class="h-14 w-12 m-auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDJP1wbyGV9xQvRrPHKLAJ_C8MTzPeIDPwW_Ut8Po&s" alt="">
                                    </div>
                                    <div class="flex justify-center">
                                        <span class="m-auto text-red-600">Users 1 </span>
                                    </div>
                                </div>
                                <div class="bg-white flex justify-center flex-col">
                                    <div class=" py-2 border-2 border-gray-900">
                                        <img class="h-14 w-12 m-auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDJP1wbyGV9xQvRrPHKLAJ_C8MTzPeIDPwW_Ut8Po&s" alt="">
                                    </div>
                                    <div class="flex justify-center">
                                        <span class="m-auto text-red-600">Users 1 </span>
                                    </div>
                                </div>
                                <div class="bg-white flex justify-center flex-col">
                                    <div class=" py-2 border-2 border-gray-900">
                                        <img class="h-14 w-12 m-auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDJP1wbyGV9xQvRrPHKLAJ_C8MTzPeIDPwW_Ut8Po&s" alt="">
                                    </div>
                                    <div class="flex justify-center">
                                        <span class="m-auto text-red-600">Users 1 </span>
                                    </div>
                                </div>
                                <div class="bg-white flex justify-center flex-col">
                                    <div class=" py-2 border-2 border-gray-900">
                                        <img class="h-14 w-12 m-auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDJP1wbyGV9xQvRrPHKLAJ_C8MTzPeIDPwW_Ut8Po&s" alt="">
                                    </div>
                                    <div class="flex justify-center">
                                        <span class="m-auto text-red-600">Users 1 </span>
                                    </div>
                                </div>
                                <div class="bg-white flex justify-center flex-col">
                                    <div class=" py-2 border-2 border-gray-900">
                                        <img class="h-14 w-12 m-auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDJP1wbyGV9xQvRrPHKLAJ_C8MTzPeIDPwW_Ut8Po&s" alt="">
                                    </div>
                                    <div class="flex justify-center">
                                        <span class="m-auto text-red-600">Users 1 </span>
                                    </div>
                                </div>
                                <div class="bg-white flex justify-center flex-col">
                                    <div class=" py-2 border-2 border-gray-900">
                                        <img class="h-14 w-12 m-auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDJP1wbyGV9xQvRrPHKLAJ_C8MTzPeIDPwW_Ut8Po&s" alt="">
                                    </div>
                                    <div class="flex justify-center">
                                        <span class="m-auto text-red-600">Users 1 </span>
                                    </div>
                                </div>
                                <div class="bg-white flex justify-center flex-col">
                                    <div class=" py-2 border-2 border-gray-900">
                                        <img class="h-14 w-12 m-auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDJP1wbyGV9xQvRrPHKLAJ_C8MTzPeIDPwW_Ut8Po&s" alt="">
                                    </div>
                                    <div class="flex justify-center">
                                        <span class="m-auto text-red-600">Users 1 </span>
                                    </div>
                                </div>
                                <div class="bg-white flex justify-center flex-col">
                                    <div class=" py-2 border-2 border-gray-900">
                                        <img class="h-14 w-12 m-auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDJP1wbyGV9xQvRrPHKLAJ_C8MTzPeIDPwW_Ut8Po&s" alt="">
                                    </div>
                                    <div class="flex justify-center">
                                        <span class="m-auto text-red-600">Users 1 </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>

            </div>



        </div>
{{--        table and user starts ends here--}}


{{--        footer here--}}
        @include('common.footer')
{{--           footer ends here--}}
    </div>

@endsection
