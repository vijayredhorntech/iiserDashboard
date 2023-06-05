@extends('common.main')

@push('custom-styles')
    <style>
        .form_tab_button
        {
            color: white !important;
        }
        .form_tab_button:hover
        {
            color: #b2b1b1 !important;
        }
    </style>

@endpush

@section('main')

    <div class="lg:p-4 md:p-8 sm:p-6 p-6 text-md sm:ml-64 mt-12 bg-white">

        <div class="flex justify-between w-full py-2 px-2">

            <span class="font-bold tracking-wide text-gray-900  lg:text-xl md:text-sm sm:text-md text-xs">Vendor Dashboard</span>
            <span class="font-bold tracking-wide text-gray-900  lg:text-xl md:text-sm sm:text-md text-xs">Action Require Your Attention</span>

        </div>

        <div class="grid mt-4 w-full bg-gray-100 rounded-md lg:grid-cols-6 md:grid-cols-2 grid-cols-1"  data-tabs-toggle="#vendorForm">
            <button class="form_tab_button  bg-blue-900  px-2 py-2 rounded-sm lg:border-r-2 md:border-r-2 sm:border-b-2 border-b-2 border-blue-100  hover:bg-blue-800 flex flex-col text-sm"  data-tabs-target="#manageProfile"  role="tab" ><span class="m-auto">Manage Profile </span></button>
            <button class="form_tab_button  bg-blue-900  px-2 py-2 rounded-sm lg:border-r-2 md:border-r-2 sm:border-b-2 border-b-2 border-blue-100  hover:bg-blue-800 flex flex-col text-sm"  data-tabs-target="#manageProducts"  role="tab" ><span class="m-auto">Manage Products </span></button>
            <button class="form_tab_button  bg-blue-900  px-2 py-2 rounded-sm lg:border-r-2 md:border-r-2 sm:border-b-2 border-b-2 border-blue-100  hover:bg-blue-800 flex flex-col text-sm"  data-tabs-target="#salesOffers"  role="tab" ><span class="m-auto">Sales Offers </span></button>
            <button class="form_tab_button  bg-blue-900  px-2 py-2 rounded-sm lg:border-r-2 md:border-r-2 sm:border-b-2 border-b-2 border-blue-100  hover:bg-blue-800 flex flex-col text-sm"  data-tabs-target="#quotationManagement"  role="tab" ><span class="m-auto">Quotation Management </span></button>
        </div>



        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-2 gap-4  w-full lg:py-8 md:py-4 sm:py-4 py-4 px-2 ">

            <x-dashboard.info-cards></x-dashboard.info-cards>

        </div>


        <div id="vendorForm">
            <div  id="manageProfile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="flex  w-full py-6 px-4 bg-gray-100 rounded-md">
                    <span class="font-bold tracking-wide text-gray-900  lg:text-xl md:text-sm sm:text-md text-xs">Manage Profile</span>
                </div>

                <div class="border-b-2 pb-12 border-gray-200">
                    <form action="" class="grid relative lg:grid-cols-4 md:grid-cols-2 grid-cols-1   w-full lg:py-8 md:py-4 sm:py-4 py-4 px-2 " >

                        <div class=" w-full  py-4 px-2" >
                            <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 ">Company Name</label>
                            <input type="text" name="companyName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-gray-400 focus:border-gray-400 block w-full p-2. " placeholder="Company Name" required>

                        </div>
                        <div class=" w-full  py-4 px-2" >
                            <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 ">Contact Person Name</label>
                            <input type="text" name="contactPersonName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-gray-400 focus:border-gray-400 block w-full p-2. " placeholder="Contact Person Name" required>

                        </div>
                        <div class=" w-full  py-4 px-2" >
                            <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 ">Email Id </label>
                            <input type="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-gray-400 focus:border-gray-400 block w-full p-2. " placeholder="Your Email Id" required>

                        </div>
                        <div class=" w-full  py-4 px-2" >
                            <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 ">Phone No. </label>
                            <input type="number" name="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-gray-400 focus:border-gray-400 block w-full p-2. " placeholder=" Your Phone Number" required>

                        </div>


                        <div class=" w-full  py-4 px-2 absolute -bottom-10 left-0 flex justify-end" >
                            <button class="bg-blue-900 text-white px-4 py-2 rounded-sm mr-2 hover:bg-blue-800"> <i class="mr-2 fa-solid fa-arrows-rotate"></i>Reset</button>
                            <button class="bg-blue-900 text-white px-4 py-2 rounded-sm mr-2 hover:bg-blue-800"> <i class="mr-2 fa-solid fa-check"></i>Save</button>
                        </div>



                    </form>
                </div>
            </div>

            <div  id="manageProducts" role="tabpanel" aria-labelledby="dashboard-tab">
                <div class="flex  w-full py-6 mt-4 px-4 bg-gray-100 rounded-md">
                    <span class="font-bold tracking-wide text-gray-900  lg:text-xl md:text-sm sm:text-md text-xs">Manage Products </span>
                </div>

                <div class="border-b-2 pb-12 border-gray-200">
                    <form action="" class="grid relative lg:grid-cols-4 md:grid-cols-2 grid-cols-1   w-full lg:py-8 md:py-4 sm:py-4 py-4 px-2 " >

                        <div class=" w-full  py-4 px-2" >
                            <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 ">Product Name</label>
                            <input type="text" name="productName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-gray-400 focus:border-gray-400 block w-full p-2. " placeholder="Product Name" required>

                        </div>
                        <div class=" w-full  py-4 px-2" >
                            <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 ">Price</label>
                            <input type="number" name="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-gray-400 focus:border-gray-400 block w-full p-2. " placeholder="Product Price" required>

                        </div>
                        <div class=" w-full  py-4 px-2" >
                            <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 ">Minimum Quanlity </label>
                            <input type="number" name="minquantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-gray-400 focus:border-gray-400 block w-full p-2. " placeholder="Minimum Quantity" required>

                        </div>
                        <div class=" w-full  py-4 px-2" >
                            <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 ">Delivery Time</label>
                            <input type="text" name="deliveryTime" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-gray-400 focus:border-gray-400 block w-full p-2. " placeholder="Delivery Time" required>

                        </div>
                        <div class=" w-full  py-4 px-2" >
                            <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 ">Product Category</label>
                            <input type="text" name="productCategory" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-gray-400 focus:border-gray-400 block w-full p-2. " placeholder="Product Category" required>

                        </div>

                        <div class=" w-full  py-4 px-2 absolute -bottom-10 left-0 flex justify-end" >
                            <button class="bg-blue-900 text-white px-4 py-2 rounded-sm mr-2 hover:bg-blue-800"> <i class="mr-2 fa-solid fa-arrows-rotate"></i>Reset</button>
                            <button class="bg-blue-900 text-white px-4 py-2 rounded-sm mr-2 hover:bg-blue-800"> <i class="mr-2 fa-solid fa-check"></i>Save</button>
                        </div>



                    </form>
                </div>
            </div>

            <div  id="salesOffers" role="tabpanel" aria-labelledby="dashboard-tab">
                <div class="flex  w-full py-6 mt-4 px-4 bg-gray-100 rounded-md">
                    <span class="font-bold tracking-wide text-gray-900  lg:text-xl md:text-sm sm:text-md text-xs">Sales Offers </span>
                </div>

                <div class="border-b-2 pb-12 border-gray-200">
                    <form action="" class="grid relative lg:grid-cols-4 md:grid-cols-2 grid-cols-1   w-full lg:py-8 md:py-4 sm:py-4 py-4 px-2 " >

                        <div class=" w-full  py-4 px-2" >
                            <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 ">Offer Name</label>
                            <input type="text" name="offerName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-gray-400 focus:border-gray-400 block w-full p-2. " placeholder="Offer Name" required>

                        </div>
                        <div class=" w-full  py-4 px-2" >
                            <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 "> Offer Price</label>
                            <input type="number" name="offerPrice" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-gray-400 focus:border-gray-400 block w-full p-2. " placeholder="Offer Price" required>

                        </div>
                        <div class=" w-full  py-4 px-2" >
                            <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 ">Minimum Quanlity </label>
                            <input type="number" name="minquantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-gray-400 focus:border-gray-400 block w-full p-2. " placeholder="Minimum Quantity" required>

                        </div>
                        <div class=" w-full  py-4 px-2" >
                            <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 ">Delivery Time</label>
                            <input type="text" name="deliveryTime" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-gray-400 focus:border-gray-400 block w-full p-2. " placeholder="Delivery Time" required>

                        </div>
                        <div class=" w-full  py-4 px-2" >
                            <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 ">Product Category</label>
                            <input type="text" name="productCategory" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-gray-400 focus:border-gray-400 block w-full p-2. " placeholder="Product Category" required>

                        </div>
                        <div class=" w-full  py-4 px-2" >
                            <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 ">Product Name</label>
                            <input type="text" name="productName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-gray-400 focus:border-gray-400 block w-full p-2. " placeholder="Product Name" required>

                        </div>

                        <div class=" w-full  py-4 px-2 absolute -bottom-10 left-0 flex justify-end" >
                            <button class="bg-blue-900 text-white px-4 py-2 rounded-sm mr-2 hover:bg-blue-800"> <i class="mr-2 fa-solid fa-arrows-rotate"></i>Reset</button>
                            <button class="bg-blue-900 text-white px-4 py-2 rounded-sm mr-2 hover:bg-blue-800"> <i class="mr-2 fa-solid fa-check"></i>Save</button>
                        </div>



                    </form>
                </div>
            </div>

            <div  id="quotationManagement" role="tabpanel" aria-labelledby="dashboard-tab">
                <div class="flex  w-full py-6 mt-4 px-4 bg-gray-100 rounded-md">
                    <span class="font-bold tracking-wide text-gray-900  lg:text-xl md:text-sm sm:text-md text-xs">Quotation Management </span>
                </div>

                <div class="border-b-2 pb-12 border-gray-200">
                    <form action="" class="grid relative lg:grid-cols-4 md:grid-cols-2 grid-cols-1   w-full lg:py-8 md:py-4 sm:py-4 py-4 px-2 " >

                        <div class=" w-full  py-4 px-2" >
                            <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 ">Quotation Submitted</label>
                            <input type="text" name="quotationSubmitted" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-gray-400 focus:border-gray-400 block w-full p-2. " placeholder="Quotation Submitted" required>

                        </div>
                        <div class=" w-full  py-4 px-2" >
                            <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 "> Accepted Quotation</label>
                            <input type="number" name="acceptedquotation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-gray-400 focus:border-gray-400 block w-full p-2. " placeholder="Accepted Quotation" required>

                        </div>
                        <div class=" w-full  py-4 px-2" >
                            <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 ">Rejected Quotation </label>
                            <input type="number" name="rejectedquotation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-gray-400 focus:border-gray-400 block w-full p-2. " placeholder="Rejected Quotation " required>

                        </div>
                        <div class=" w-full  py-4 px-2" >
                            <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 ">Delivery Time</label>
                            <input type="text" name="deliveryTime" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-gray-400 focus:border-gray-400 block w-full p-2. " placeholder="Delivery Time" required>

                        </div>
                        <div class=" w-full  py-4 px-2" >
                            <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 ">Product Status Sheet</label>
                            <input type="text" name="productstatussheet" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-gray-400 focus:border-gray-400 block w-full p-2. " placeholder="Product Status Sheet" required>

                        </div>
                        <div class=" w-full  py-4 px-2" >
                            <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 ">Stock Status</label>
                            <input type="text" name="stockStatus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-gray-400 focus:border-gray-400 block w-full p-2. " placeholder="Stock Status" required>

                        </div>

                        <div class=" w-full  py-4 px-2 absolute -bottom-10 left-0 flex justify-end" >
                            <button class="bg-blue-900 text-white px-4 py-2 rounded-sm mr-2 hover:bg-blue-800"> <i class="mr-2 fa-solid fa-arrows-rotate"></i>Reset</button>
                            <button class="bg-blue-900 text-white px-4 py-2 rounded-sm mr-2 hover:bg-blue-800"> <i class="mr-2 fa-solid fa-check"></i>Save</button>
                        </div>



                    </form>
                </div>
            </div>


        </div>


        {{--        footer here--}}
        @include('common.footer')
        {{--           footer ends here--}}

    </div>


@endsection
