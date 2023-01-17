<x-app-layout>
    <?php
    if (isset($message[1])){echo $message[1];}?>
    <div class="mx-auto  text-center bg-red-100 text-red-600"><?php if (isset($message[1])){echo $message[1];} ?></div>
    <div class="mx-auto  text-center bg-green-100 text-greeen-600"><?php if (isset($message[0])){echo $message[0];} ?></div>
    <table class="table-auto border-collapse border border-slate-400">
        <tr>
            <th>Name</th>
            <th>{{__('Release date')}}</th>
            <th>Description</th>
            <th>Promotion</th>
            <th></th>
        </tr>
        <tbody>
        @foreach($games as $game)
            <tr>
                <td class="underline"><a href="{{ route("games.show", ['game' => $game])}}">{{$game->name}}</a></td>
                <td>{{$game->published_on}}</td>
                <td>{{$game->description}}</td>
                <td>{{$game->promotion}}</td>
                <td></td>
                <td><a onclick="confirm('Really, you want to buying {{$game->name}} ? That\'s a bad game')" href="{{ route("games.buy",  ['game' => $game])}}">Buy</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-app-layout>
