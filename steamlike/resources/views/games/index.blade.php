<x-app-layout>
    <table class="table-auto">
        <tr><b>Name</b></tr>
        <tbody>
        @foreach($games as $game)
            <tr>
                <td>{{$game->name}}</td>
                <td>{{__('Release date')}} : {{$game->date}}</td>
                <td>{{$game->description}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-app-layout>
