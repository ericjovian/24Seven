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
            </div>
        </div>
    </div>
    <a href="dashboard/membership" class="text-decoration-none">
    <div class="card fixed-bottom bg-warning">
        {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
        <div class="card-body text-center" >
          <h5 class="card-title">Subscribe Now!</h5>
          <p class="card-text">Subscribe now for only $4.99(Limited Offer).</p>
        </div>
    </div>
    </a>
</x-app-layout>