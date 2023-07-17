@extends('common.main')
@push('custom-styles')
    <style>
        .dashboardButtons
        {
           background-color: transparent !important;
        }
        .dashboardButtons button
        {
            color: black !important;
        }
        .dashboardButtons button:focus
        {
            color: red !important;
            background-color: white !important;
        }
    </style>

@endpush

@section('main')

    <div class=" text-md mb-0 sm:ml-64 lg:mt-16 md:mt-16 sm:mt-16 mt-20 bg-white">
            <h1 style="font-weight: bold; margin-left: 10px; font-size: 25px ">Flight Booking:-</h1>
    </div>


{{--        footer here--}}
        @include('common.footer')
{{--           footer ends here--}}
    </div>

@endsection
