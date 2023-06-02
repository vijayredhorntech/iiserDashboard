@extends('common.main')

@section('main')

    <div class="lg:p-4 md:p-8 sm:p-6 p-6 text-md sm:ml-64 mt-12 bg-white">

        <div class="flex justify-between w-full py-2 px-2">

            <span class="font-bold tracking-wide text-gray-900  lg:text-xl md:text-sm sm:text-md text-xs">Sub Admin Principal Investigator (PI)</span>
            <span class="font-bold tracking-wide text-gray-900  lg:text-xl md:text-sm sm:text-md text-xs">Action Require Your Attention</span>

        </div>

        <div class="grid mt-4 w-full bg-gray-100 rounded-md lg:grid-cols-6 md:grid-cols-2 grid-cols-1">
            <button class="bg-blue-900 text-white px-4 py-4 rounded-sm lg:border-r-2 md:border-r-2 sm:border-b-2 border-b-2 border-gray-100  hover:bg-blue-800" id="registerLabMember">Register Lab Members</button>
            <button class="bg-blue-900 text-white px-4 py-4 rounded-sm lg:border-r-2 md:border-r-2 sm:border-b-2 border-b-2 border-gray-100  hover:bg-blue-800" id="quotesManagement">Quotes Management</button>
            <button class="bg-blue-900 text-white px-4 py-4 rounded-sm lg:border-r-2 md:border-r-2 sm:border-b-2 border-b-2 border-gray-100  hover:bg-blue-800" id="rolesPermission">Roles And Permissions</button>
            <button class="bg-blue-900 text-white px-4 py-4 rounded-sm lg:border-r-2 md:border-r-2 sm:border-b-2 border-b-2 border-gray-100  hover:bg-blue-800" id="rolesPermissionInventory">Roles And Permissions For Inventory Module</button>
        </div>


        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-2 gap-4  w-full lg:py-8 md:py-4 sm:py-4 py-4 px-2 ">

            <div class=" w-full flex py-4 px-2 border-2 border-gray-300 rounded-md shadow-md shadow-gray-300" >

                <div class="w-1/3 flex justify-end ">
                    <i class="fa-solid fa-flask-vial m-auto text-blue-900 text-4xl"></i>
                </div>

                <div class="w-2/3 flex">
                    <span class="font-bold tracking-wide text-gray-900  lg:text-xl md:text-sm sm:text-md text-xs m-auto ml-0">Expired Stocks Alert</span>
                </div>

            </div>

            <div class=" w-full flex py-4 px-2 border-2 border-gray-300 rounded-md shadow-md shadow-gray-300" >

                <div class="w-1/3 flex justify-end ">
                    <i class="fa-solid fa-vial m-auto text-blue-900 text-4xl"></i>
                </div>

                <div class="w-2/3 flex">
                    <span class="font-bold tracking-wide text-gray-900  lg:text-xl md:text-sm sm:text-md text-xs m-auto ml-0">New Arrived Stocks</span>
                </div>

            </div>

            <div class=" w-full flex py-4 px-2 border-2 border-gray-300 rounded-md shadow-md shadow-gray-300" >

                <div class="w-1/3 flex justify-end ">
                    <i class="fa-solid fa-hand-holding-heart  m-auto text-blue-900 text-4xl"></i>
                </div>

                <div class="w-2/3 flex">
                    <span class="font-bold tracking-wide text-gray-900  lg:text-xl md:text-sm sm:text-md text-xs m-auto ml-0">Expired Require Maintaince</span>
                </div>

            </div>

            <div class=" w-full flex py-4 px-2 border-2 border-gray-300 rounded-md shadow-md shadow-gray-300" >

                <div class="w-1/3 flex justify-end ">
                    <i class="fa-solid fa-flask-vial m-auto text-blue-900 text-4xl"></i>
                </div>

                <div class="w-2/3 flex">
                    <span class="font-bold tracking-wide text-gray-900  lg:text-xl md:text-sm sm:text-md text-xs m-auto ml-0">Open Tasks for the next 7 Days</span>
                </div>

            </div>

        </div>


       <div id="registerLabMemberForm" class="">
           <div class="flex  w-full py-6 px-4 bg-gray-100 rounded-md">
               <span class="font-bold tracking-wide text-gray-900  lg:text-xl md:text-sm sm:text-md text-xs">Register Lab Members</span>
           </div>

           <div class="border-b-2 pb-12 border-gray-200">
               <form action="" class="grid relative lg:grid-cols-4 md:grid-cols-2 grid-cols-1   w-full lg:py-8 md:py-4 sm:py-4 py-4 px-2 " >

                   <div class=" w-full  py-4 px-2" >
                       <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 ">Company Name</label>
                       <input type="text" name="companyName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-gray-400 focus:border-gray-400 block w-full p-2. " placeholder="Company Name" required>

                   </div>
                   <div class=" w-full  py-4 px-2" >
                       <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 ">Registration</label>
                       <input type="text" name="registration" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-gray-400 focus:border-gray-400 block w-full p-2. " placeholder="Registration" required>

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
                       <button class="bg-blue-900 text-white px-4 py-2 rounded-sm mr-2 hover:bg-blue-800"> <i class="mr-2 fa-solid fa-check"></i>Reset</button>
                   </div>



               </form>
           </div>
       </div>


        <div id="quotesManagementForm" class="hidden">
            <div class="flex  w-full py-6 mt-4 px-4 bg-gray-100 rounded-md">
                <span class="font-bold tracking-wide text-gray-900  lg:text-xl md:text-sm sm:text-md text-xs">Quotes Management </span>
            </div>

            <div class="border-b-2 pb-12 border-gray-200">
                <form action="" class="grid relative lg:grid-cols-4 md:grid-cols-2 grid-cols-1   w-full lg:py-8 md:py-4 sm:py-4 py-4 px-2 " >

                    <div class=" w-full  py-4 px-2" >
                        <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 ">Product Name</label>
                        <input type="text" name="productName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-gray-400 focus:border-gray-400 block w-full p-2. " placeholder="=Product Name" required>

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
                        <button class="bg-blue-900 text-white px-4 py-2 rounded-sm mr-2 hover:bg-blue-800"> <i class="mr-2 fa-solid fa-check"></i>Reset</button>
                    </div>



                </form>
            </div>
        </div>


        <div id="rolesPermissionForm" class="hidden">
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
                        <button class="bg-blue-900 text-white px-4 py-2 rounded-sm mr-2 hover:bg-blue-800"> <i class="mr-2 fa-solid fa-check"></i>Reset</button>
                    </div>



                </form>
            </div>
        </div>


      <div id="rolesPermissionInventoryForm" class="hidden">
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
                      <button class="bg-blue-900 text-white px-4 py-2 rounded-sm mr-2 hover:bg-blue-800"> <i class="mr-2 fa-solid fa-check"></i>Reset</button>
                  </div>



              </form>
          </div>
      </div>




        {{--        footer here--}}
        @include('common.footer')
        {{--           footer ends here--}}

    </div>


@endsection
