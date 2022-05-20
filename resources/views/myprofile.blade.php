<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Register new Order') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
                <form method="POST" action="{{ route('insertOrder') }}">
                    @csrf
                    <div class="form-row">
                      <!-- Time -->
                      <div class="form-group col-md-1.5">
                        <label for="time">Time</label>
                        <input type="time" name="time" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" placeholder="--:--">
                      </div>
                      <!-- Plate Num -->
                      <div class="form-group col-md-3">
                        <label for="plate_num">Plate Number</label>
                        <input type="text" name="plate_num"class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" placeholder="ABC 000">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="location">Location</label>
                      <input type="text" name="location"class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" placeholder="1234 Main St">
                    </div>
                    <div class="form-group">
                      <x-label for="price" value="" />
                          <select name="price" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                              <option value="30">Flat batteries</option>
                              <option value="40">Flat tyres</option>
                              <option value="50">Towing</option>
                              <option value="60">Emergency fuel delivery</option>
                              <option value="70">Locked out</option>
                          </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</x-app-layout>