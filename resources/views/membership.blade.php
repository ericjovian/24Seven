<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Join Now') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5" style="text-align:center;">
              <h1 style="padding-bottom:1vw;font-size:2vw;font-family:montserrat-bold">Membership Benefits</h1>
              <hr>
              <div class="row m-0" style="padding-top:2vw;padding-bottom:2vw">

                <div class="col-lg-4">
                  <div class="card" style="width: 18rem;border:none">
                    <img class="card-img-top" src="/assets/customer-page/membership1.jpg" style="" class="img-fluid" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text" style="font-size:1vw;font-family:montserrat-bold">ONE TIME PAYMENT FOR ALL SERVICES</p>
                      <p style="font-family: montserrat-semibold; font-size:0.7vw">By being a member all our road side services would be charged on a flat monthly rate. good for those who need extra insurance.  Get savings up to 100$ with our membership plan.</p>
                    </div>
                  </div>
                </div>
                

                <div class="col-lg-4">
                  <div class="card" style="width: 18rem;border:none">
                    <img class="card-img-top" src="/assets/customer-page/membership.jpg" class="img-fluid" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text" style="font-size:1vw;font-family:montserrat-bold">ONE TIME PAYMENT FOR ALL SERVICES</p>
                      <p style="font-family: montserrat-semibold;font-size:0.7vw">By being a member all our road side services would be charged on a flat monthly rate. good for those who need extra insurance.  Get savings up to 100$ with our membership plan.</p>
                    </div>
                  </div>
                </div>

                <div class=" col-lg-4">
                  <div class="card" style="width: 18rem;border:none">
                    <img class="card-img-top" src="/assets/customer-page/membership1.jpg" class="img-fluid" alt="Card image cap">
                    <div class="card-body" >
                      <p class="card-text" style="font-size:1vw;font-family:montserrat-bold">Prioritized Order Queue.</p>
                      <p style="font-family: montserrat-semibold;font-size:0.7vw">With membership you are guaranteed to receive the fastest available roadside assistance from our professionals nearby.</p>
                      
                    </div>
                  </div>
                </div>

              </div>
              <hr>
              <div class="d-flex justify-content-between" style="padding-top:2vw;padding-bottom:2vw">
                <div class="" >
                  <i class="fas fa-car-battery" style="font-size:7vw"></i>
                  <p style="font-size:1.2vw;font-family:montserrat-bold">Flat Batteries</p>
                  <p style="font-size:0.6vw;font-family:montserrat-semibold">We can give you a jump-start, or arrange a replacement battery on the spot*.</p>
                </div>
                <div class="" >
                  <i class="fas fa-key" style="font-size:7vw"></i>
                  <p style="font-size:1.2vw;font-family:montserrat-bold">Locked Out</p>
                  <p style="font-size:0.6vw;font-family:montserrat-semibold">If your keys have been locked inside your vehicle, we'll help get them out.</p>
                </div>
                <div class="" >
                  <i class="fas fa-gas-pump" style="font-size:7vw"></i>
                  <p style="font-size:1.2vw;font-family:montserrat-bold">Emergency fuel delivery</p>
                  <p style="font-size:0.6vw;font-family:montserrat-semibold">If you run out of fuel we'll get you moving with petrol or diesel.</p>
                </div>
                <div class="" >
                  <i class="fas fa-cog" style="font-size:7vw"></i>
                  <p style="font-size:1.2vw;font-family:montserrat-bold">Towing</p>
                  <p style="font-size:0.6vw;font-family:montserrat-semibold">If we can't get you going right away, we'll arrange to tow your vehicle.</p>
                </div>
                <div class="" >
                  <img src="/assets/customer-page/flat-tire.png" style="margin-left:3.5vw;width:7vw" class="img-fluid" alt="">
                  <p style="font-size:1.2vw;font-family:montserrat-bold">Flat tires</p>
                  <p style="font-size:0.6vw;font-family:montserrat-semibold">If you have a roadworthy spare, we'll change your tyre on the spot.</p>
                </div>
              </div>

              <hr>

              <!-- start join now modal -->
              @if(Auth::user()->isUserSubscribed == 0)
              <button type="button" style="margin-top:2vw" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Join Now</button>
              @else
              <p style="font-size:1.2vw;font-family:montserrat-bold;padding-top:2vw">YOU ARE MEMBER</p>
              @endif
              <form action="{{ route('dashboard.updatemember') }}" method="POST">
                @csrf
                @method('put')
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Regeister Membership</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" value="{{Auth::user()->name}}" class="form-control" style="border-radius:0.25rem" id="recipient-name">
                          </div>
                          <div class="mb-3">
                            <label for="message-text" class="col-form-label">Credit Card Number:</label>
                            <input type="text" name="credit_card" value="" class="form-control" style="border-radius:0.25rem" id="recipient-name">
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              
            

              <!-- end of join now modal -->

                            
            </div>
            
            
                    
        </div>
    </div>
</x-app-layout>