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

            <span class="font-bold tracking-wide text-gray-900  lg:text-xl md:text-sm sm:text-md text-xs">Work Flow</span>
            <span class="font-bold tracking-wide text-gray-900  lg:text-xl md:text-sm sm:text-md text-xs">Action Require Your Attention</span>

        </div>

        <div class="grid mt-4 w-full bg-gray-100 rounded-md lg:grid-cols-6 md:grid-cols-2 grid-cols-1"  data-tabs-toggle="#workFlow">
            <button class="form_tab_button  bg-blue-900  px-2 py-2 rounded-sm lg:border-r-2 md:border-r-2 sm:border-b-2 border-b-2 border-blue-100  hover:bg-blue-800 flex flex-col text-sm"  data-tabs-target="#editor"  role="tab" ><span class="m-auto">Editor </span></button>
            <button class="form_tab_button  bg-blue-900  px-2 py-2 rounded-sm lg:border-r-2 md:border-r-2 sm:border-b-2 border-b-2 border-blue-100  hover:bg-blue-800 flex flex-col text-sm"  data-tabs-target="#runs"  role="tab" ><span class="m-auto">Runs </span></button>
        </div>

        <div id="workFlow">
            <div  id="editor" role="tabpanel" aria-labelledby="profile-tab">
                <div class="border-b-2 pb-12 border-gray-100">
                    <form action="" class="grid relative lg:grid-cols-8 md:grid-cols-4 grid-cols-2  w-full lg:py-8 md:py-4 sm:py-4 py-4 px-2 gap-6 " >

                        @foreach($workFlows as $workFlows)
                            <x-work-flow.editors work-Flow-Background="{{$workFlows['bg-color']}}"
                                                 work-flow-text="{{$workFlows['name']}}"
                                                 work-flow-icon="{{$workFlows['icon']}}"/>
                        @endforeach

                        <div class="absolute -bottom-10 left-0 w-full flex justify-center">
                            <button type="submit" class="bg-blue-900 text-white px-4 py-2 rounded-sm hover:bg-blue-800"> <i class="fa-solid fa-arrows-rotate mr-2"></i>Update</button>
                        </div>
                    </form>
                </div>
            </div>


            <div  id="runs" role="tabpanel" aria-labelledby="dashboard-tab">
                <div class="flex  w-full py-6 mt-4 px-4 bg-gray-100 rounded-md">
                    <span class="font-bold tracking-wide text-gray-900  lg:text-xl md:text-sm sm:text-md text-xs">Register Vendor/Supplier</span>
                </div>

                <div class="border-b-2 pb-12 border-gray-200">
                    <form action="" class="grid relative lg:grid-cols-4 md:grid-cols-2 grid-cols-1  w-full lg:py-8 md:py-4 sm:py-4 py-4 px-2 " >

                        <div class=" w-full  py-4 px-2" >
                            <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 ">Company Name</label>
                            <input type="text" name="companyName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-gray-400 focus:border-gray-400 block w-full p-2. " placeholder="Company Name" required>

                        </div>
                        <div class=" w-full  py-4 px-2" >
                            <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 ">GST Number</label>
                            <input type="text" name="gstNumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-gray-400 focus:border-gray-400 block w-full p-2. " placeholder="Gst Number" required>

                        </div>
                        <div class=" w-full  py-4 px-2" >
                            <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 ">Contact Person Name</label>
                            <input type="text" name="personName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-gray-400 focus:border-gray-400 block w-full p-2. " placeholder="Person Name" required>

                        </div>
                        <div class=" w-full  py-4 px-2" >
                            <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 ">City, Country</label>
                            <input type="text" name="city" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-gray-400 focus:border-gray-400 block w-full p-2. " placeholder="Cit, Country Name" required>

                        </div>
                        <div class=" w-full  py-4 px-2" >
                            <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 ">Product Category</label>
                            <input type="text" name="productCategory" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-gray-400 focus:border-gray-400 block w-full p-2. " placeholder="Product Category" required>

                        </div>
                        <div class=" w-full  py-4 px-2" >
                            <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 ">Email Id</label>
                            <input type="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-gray-400 focus:border-gray-400 block w-full p-2. " placeholder="Email Id" required>

                        </div>
                        <div class=" w-full  py-4 px-2" >
                            <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 ">Phone No.</label>
                            <input type="number" name="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-gray-400 focus:border-gray-400 block w-full p-2. " placeholder="Your Phone Number" required>

                        </div>
                        <div class=" w-full  py-4 px-2" >
                            <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 ">Institute</label>
                            <input type="text" name="institute" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-gray-400 focus:border-gray-400 block w-full p-2. " placeholder="Institute Name" required>

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
