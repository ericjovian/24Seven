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

                <div class="col-md-4">
                  <div class="card" style="width: 18rem;border:none">
                    <img class="card-img-top" src="/assets/customer-page/membership1.jpg" style="" class="img-fluid" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                </div>
                

                <div class="col-md-4">
                  <div class="card" style="width: 18rem;border:none">
                    <img class="card-img-top" src="/assets/customer-page/membership.jpg" class="img-fluid" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card" style="width: 18rem;border:none">
                    <img class="card-img-top" src="/assets/customer-page/membership1.jpg" class="img-fluid" alt="Card image cap">
                    <div class="card-body" s>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                </div>

              </div>
              <hr>
              <div class="d-flex justify-content-between" style="padding-top:2vw;padding-bottom:2vw">
                <div class="" style="font-family:montserrat-bold">
                  <i class="fas fa-car-battery" style="font-size:7vw"></i>
                  <p style="font-size:1.2vw">Flat Batteries</p>
                  <p style="font-size:0.7vw">We can give you a jump-start, or arrange a replacement battery on the spot</p>
                </div>
                <div class="" style="font-family:montserrat-bold">
                  <i class="fas fa-key" style="font-size:7vw"></i>
                  <p style="font-size:1.2vw">Flat Batteries</p>
                  <p style="font-size:0.7vw">We can give you a jump-start, or arrange a replacement battery on the spot</p>
                </div>
                <div class="" style="font-family:montserrat-bold">
                  <i class="fas fa-gas-pump" style="font-size:7vw"></i>
                  <p style="font-size:1.2vw">Emergency fuel delivery</p>
                  <p style="font-size:0.7vw">We can give you a jump-start, or arrange a replacement battery on the spot</p>
                </div>
                <div class="" style="font-family:montserrat-bold">
                  <i class="fas fa-cog" style="font-size:7vw"></i>
                  <p style="font-size:1.2vw">Towing</p>
                  <p style="font-size:0.7vw">We can give you a jump-start, or arrange a replacement battery on the spot</p>
                </div>
                <div class="" style="font-family:montserrat-bold">
                  <img src="/assets/customer-page/flat-tire.png" style="margin-left:3vw;width:8vw" class="img-fluid" alt="">
                  <p style="font-size:1.2vw">Flat tires</p>
                  <p style="font-size:0.7vw">We can give you a jump-start, or arrange a replacement battery on the spot</p>
                </div>
              </div>
                            
            </div> 
                    
        </div>
    </div>
</x-app-layout>