<x-app-layout>
   <div>
       <p>Name: {{$game->name}}</p>
       <p>Description: {{$game->description}}</p>
       <p>Price: {{$game->price}}</p>
       <p>Published on: {{$game->published_on}}</p>
       <p>Promotion: {{$game->promotion}}</p>
       <img src="{{ asset('images/'.$game->image) }}" alt="Game's {{$game->name}} image">
       <a class="px-2 py-2 bg-violet-700 rounded-md text-white" href="{{ route("games.edit", ['game' => $game])}}">Edit</a>
   </div>
</x-app-layout>
