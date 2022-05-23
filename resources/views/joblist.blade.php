<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for Job List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach($order as $orders)
                <div class="d-flex p-6 flex-row">
                    <div>
                        <p>Customer Name : {{$orders->user->name}}</p>
                        <p>Location : {{$orders->location}}</p>
                        <p>Price: {{$orders->price}}</p>
                        <p>Plate Number : {{$orders->plate_num}}</p>
                        <p>Car Model : {{$orders->car_model}}</p>
                        <p>Time : {{$orders->time}}</p>
                        <form action="{{ route('update.status') }}" method="POST">
                            @csrf
                            @method('put')
                            <input type="hidden" name="order_id" value="{{$orders->id}}">
                            <button type="submit" name="action" value="accept" class="btn btn-success">Accept</button>
                        </form>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
</x-app-layout>