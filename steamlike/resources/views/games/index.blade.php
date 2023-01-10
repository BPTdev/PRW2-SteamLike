<x-app-layout>
    <table class="table-auto border-collapse border border-slate-400">
        <tr>
            <th>Name</th>
            <th>{{__('Release date')}}</th>
            <th>Description</th>
            <th>Promotion</th>
            <th></th>
            <th></th>
        </tr>
        <tbody>
        @foreach($games as $game)
            <tr>
                <td>{{$game->name}}</td>
                <td>{{$game->published_on}}</td>
                <td>{{$game->description}}</td>
                <td>{{$game->promotion}}</td>
                <td><a href="{{ route("games.show", ['game' => $game])}}">Details</a></td>
                <td><a href="{{ route("games.buy", ['game' => $game])}}">Buy</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-app-layout>
