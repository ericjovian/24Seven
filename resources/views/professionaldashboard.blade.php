<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for Roadside Professional') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Welcome to Roadside Professional's Dashboard.<br>
                    Jobs Completed :<em style="color:dodgerblue">{{ count($on_going_order) }}</em><br>
                    @php $counter = 0; @endphp
                    @foreach($on_going_order as $ordr)
                    @if($ordr->status == 'Finished' )
                    @php $counter = $ordr->price + $counter; @endphp
                    @endif
                    @endforeach
                    Current Earnings :<em style="color:green">${{ $counter}}</em>
                </div>
                @foreach($on_going_order as $order)
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>Accepted Order</p>
                    <p>Customer Name: {{$order->user->name}}</p>
                    <p>Time: {{$order->time}}</p>
                    <p>Location: {{$order->location}}</p>
                    <p>Price: ${{$order->price}}</p>
                    <p>Car model: {{$order->car_model}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>