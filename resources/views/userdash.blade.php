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
                    @if($ord->status == 'Accepted')
                    <div class="col-md-4">
                        <div class="card mt-0" style="width: 18rem;margin-top:2vw;border:none">
                            <div class="card-body">
                                
                                <h1 class="card-title mb-0" style="font-size:1.5vw">Accepted</h1>
                                <img src="/assets/customer-page/on-going.png" style="width:3vw;margin-bottom:1vw    " alt="">
                                <h6 class="card-subtitle mb-2 ">Time: {{ $ord->time }}</h6>
                                <h6 class="card-subtitle mb-2 ">Location: {{ $ord->location }}</h6>
                                <h6 class="card-subtitle mb-2 ">Price: $ {{ $ord->price }}</h6>
                                <h6 class="card-subtitle mb-2 ">Plate Number: {{ $ord->plate_num }}</h6>
                                <h6 class="card-subtitle mb-2 ">Model: {{ $ord->car_model }}</h6>
                                <h6 class="card-subtitle mb-2 ">Status: {{ $ord->status }}</h6>
                            </div>
                        </div>
                        <form action="{{ route('updateOrderStatus') }}" method="POST">
                            @csrf
                            @method('put')
                            <input type="hidden" name="order_id" value="{{$ord->id}}">
                            <button type="submit" name="action" value="pay"  style="margin: 0vw 0vw 2vw 1vw" class="btn btn-success">Pay</button>
                        </form>
                    </div>
                    @elseif($ord->status =='Waiting for Professional')
                    <div class="col-md-4">
                        <div class="card mt-0" style="width: 18rem;margin-top:2vw;border:none">
                            <div class="card-body">
                                
                                <h1 class="card-title" style="font-size:1.5vw">On-Going Order</h1>
                                
                                <h6 class="card-subtitle mb-2 ">Time: {{ $ord->time }}</h6>
                                <h6 class="card-subtitle mb-2 ">Location: {{ $ord->location }}</h6>
                                <h6 class="card-subtitle mb-2 ">Price: $ {{ $ord->price }}</h6>
                                <h6 class="card-subtitle mb-2 ">Plate Number: {{ $ord->plate_num }}</h6>
                                <h6 class="card-subtitle mb-2 ">Model: {{ $ord->car_model }}</h6>
                                <h6 class="card-subtitle mb-2 ">Status: {{ $ord->status }}</h6>
                            </div>
                        </div>
                    </div>
                    @elseif($ord->status =='Finished')
                    <div class="col-md-4">
                        <div class="card mt-0" style="width: 18rem;margin-top:2vw;border:none">
                            <div class="card-body">
                                
                                <h1 class="card-title mb-0" style="font-size:1.5vw">History</h1>
                                <img src="/assets/customer-page/history.png" style="width:3vw;margin-bottom:1vw    " alt="">
                                
                                <h6 class="card-subtitle mb-2 ">Time: {{ $ord->time }}</h6>
                                <h6 class="card-subtitle mb-2 ">Location: {{ $ord->location }}</h6>
                                <h6 class="card-subtitle mb-2 ">Price: $ {{ $ord->price }}</h6>
                                <h6 class="card-subtitle mb-2 ">Plate Number: {{ $ord->plate_num }}</h6>
                                <h6 class="card-subtitle mb-2 ">Model: {{ $ord->car_model }}</h6>
                                <h6 class="card-subtitle mb-2 ">Status: {{ $ord->status }}</h6>
                            </div>
                        </div>
                    </div>
                    @endif
                    
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