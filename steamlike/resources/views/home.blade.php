<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table-auto border-collapse border border-slate-400">
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Date of publication</th>
                            <th></th>
                        </tr>
                        @foreach($promotions as $promotion)
                            <tr>
                                <td><h1>{{$promotion->name}}</h1></td>
                                <td><p class="">{{$promotion->description}}</p></td>
                                <td><p class="">{{$promotion->price}}</p></td>
                                <td><p class="">{{$promotion->published_on}}</p></td>
                                <td><a onclick="confirm('Really, you want to buying {{$promotion->name}} ? That\'s a bad game')" href="{{ route("games.buy",  ['game' => $promotion])}}">Buy</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
