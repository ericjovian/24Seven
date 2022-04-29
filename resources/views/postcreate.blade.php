<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for Job List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="d-flex p-6 flex-row">
                    <div>
                        Joko Widodo <br>
                        Honda Jazz - B 1234 ZZ
                        <br>
                        Ban Kempes
                    </div>
                    <div>
                        <x-tick class="block h-20 w-auto fill-current text-gray-600" />
                        <x-cross class="block h-20 w-auto fill-current text-gray-600" />
                    </div>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    Jusuf Kalla <br>
                    Toyota Avanza - B 4321 AA
                    <br>
                    Habis Bensin
                </div>
            </div>
        </div>
    </div>
</x-app-layout>