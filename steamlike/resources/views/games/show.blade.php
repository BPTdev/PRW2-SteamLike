<x-app-layout>
   <div>
       <p>Name: {{$game->name}}</p>
       <p>Description: {{$game->description}}</p>
       <p>Price: {{$game->price}}</p>
       <p>Date: {{$game->published_on}}</p>
       <img src="public/images/" alt="Game's {{$game->name}} image">
   </div>
</x-app-layout>
