<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="display:flex">
            <img src="/assets/customer-page/history.png" style="width:3vw;" alt="">
            <div style="display: flex;justify-content: center;align-items: center;">
                {{ __('Order History') }}
            </div>
            
            
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 ">
                
                @foreach($order as $ord)  
                    @if($ord->status =='Finished')
                        <div class="col-md-12 mt-3">
                            <div class="card mt-0" style="width: 18rem;margin-top:2vw;border:none">
                                <div class="mt-0">
                                    <h6 class="card-subtitle mb-2 ">Professional Name: {{ $ord->professional->name }}</h6>
                                    <h6 class="card-subtitle mb-2 ">Time: {{ $ord->time }}</h6>
                                    <h6 class="card-subtitle mb-2 ">Location: {{ $ord->location }}</h6>
                                    <h6 class="card-subtitle mb-2 ">Price: $ {{ $ord->price }}</h6>
                                    <h6 class="card-subtitle mb-2 ">Plate Number: {{ $ord->plate_num }}</h6>
                                    <h6 class="card-subtitle mb-2 ">Model: {{ $ord->car_model }}</h6>
                                    <h6 class="card-subtitle mb-2 ">Status: {{ $ord->status }}</h6>
                                </div>
                            </div>
                            @php
                            $isReviewed = FALSE;
                            
                            foreach($ord->reviews as $review) {
                                
                                if($review->user_id == auth()->user()->id){
                                    $isReviewed = TRUE;
                                    
                                }
                            }
                            
                            
                            @endphp
                            @if($isReviewed == FALSE)
                            <form action="{{ route('insertReview') }}" method="POST">
                                @csrf
                                    <div style="">
                                        <p>Dear Customer,<br></p>
                                        <h4 style="font-family:montserrat-semibold;margin-bottom: 2vw;">Please rate your service experience for the following parameters:</h4>
                                        <p>1. Overall Experience With the Roadside assistance Professional:</p>
                                    </div>
                                    <input type="hidden" value="{{$ord->id}} " name="order_id">
                                    <div class="rating" style="">
                                        <input id="star5" name="star" type="radio" value="5" class="radio-btn hide"  />
                                        <label for="star5" >☆</label>
                                        <input id="star4" name="star" type="radio" value="4" class="radio-btn hide" />
                                        <label for="star4" >☆</label>
                                        <input id="star3" name="star" type="radio" value="3" class="radio-btn hide" />
                                        <label for="star3" >☆</label>
                                        <input id="star2" name="star" type="radio" value="2" class="radio-btn hide" />
                                        <label for="star2" >☆</label>
                                        <input id="star1" name="star" type="radio" value="1" class="radio-btn hide" />
                                        <label for="star1" >☆</label>
                                        <div class="clear"></div>
                                    </div>

                                    <label for="review">2. Reviews:</label>
                                    <textarea cols="20" name="review" rows="5" style="width:100%"></textarea><br><br>
                                    <div class="clear"></div> 
                                    <input style="background:#43a7d5;color:#fff;padding:12px;border:0" type="submit" value="Submit your review">  
                                    <hr style="margin-top:2vw">
                                </form>
                            @else
                                @foreach($ord->reviews as $review)
                                <p>Review : {{$review->review}}</p>
                                <p>Rating : {{$review->rating}}</p>
                                @endforeach
                            @endif
                            
                            </div>
                            
                            
                        
                        
                    
                    @else
                    

                    @endif
                @endforeach

                </div>
            </div>
        </div>
    </div>
</x-app-layout>