<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for user') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in as a user!
                </div>
                <div class="row m-0 row-cols-3">
                    
                    
                    
                    @foreach($order as $ord)
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;margin-top:2vw;border:none">
                            <div class="card-body">
                                
                                <h5 class="card-title">On-going Order</h5>
                                <h6 class="card-subtitle mb-2 ">Time: {{ $ord->time }}</h6>
                                <h6 class="card-subtitle mb-2 ">Location: {{ $ord->location }}</h6>
                                <h6 class="card-subtitle mb-2 ">Price: $ {{ $ord->price }}</h6>
                                <h6 class="card-subtitle mb-2 ">Plate Number: {{ $ord->plate_num }}</h6>
                                <h6 class="card-subtitle mb-2 ">Model: {{ $ord->car_model }}</h6>
                                <h6 class="card-subtitle mb-2 ">Status: {{ $ord->status }}</h6>
                            </div>
                        </div>
                    </div>
                    @endforeach  
                    
                </div>
                
                
            </div>
        </div>
    </div>

    @if(Auth::user()->isUserSubscribed == FALSE)
    <div class="card  bg-warning fixed-bottom">
        {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
        <div class="card-body text-center">
          <a href="/dashboard/membership">Subscribe Now</a>
          <p class="card-text">Subscribe now for only $4.99(Limited Offer).</p>
        </div>
    </div>
    @endif
</x-app-layout>