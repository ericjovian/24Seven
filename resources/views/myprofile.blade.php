<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Register new Order') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
                <form method="POST" action="{{ route('myprofile') }}">
                    @csrf
                    <div class="form-row">
                      <!-- Time -->
                      <div class="form-group col-md-1.5">
                        <label for="time">Time</label>
                        <input type="time" class="form-control" id="time" placeholder="--:--">
                      </div>
                      <!-- Plate Num -->
                      <div class="form-group col-md-3">
                        <label for="plate_num">Plate Number</label>
                        <input type="text" class="form-control" id="plate_num" placeholder="ABC 000">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="location">Location</label>
                      <input type="text" class="form-control" id="location" placeholder="1234 Main St">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</x-app-layout>