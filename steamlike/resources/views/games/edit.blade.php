<x-app-layout>
    <div>
        <p>Name: {{$game->name}}</p>
        <p>Description: {{$game->description}}</p>
        <p>Price: {{$game->price}}</p>
        <p>Date: {{$game->published_on}}</p>
        <img src="public/images/{{$game->image}}" alt="Game's {{$game->name}} image">
        <br><br>
        <form action="{{ route("games.update", ['game' => $game])}}" method="post">
            @csrf
            @method('PATCH')
            <label for="name">Name</label><input type="text" id="name" name="name" value="{{$game->name}}"><br>
            <label for="description">Description</label><textarea id="description" name="description">{{$game->description}}</textarea><br>
            <label for="price">Price</label><input type="number" id="price" name="price" value="{{$game->price}}"><br>
            <label for="published_on">Date</label><input type="date" id="published_on" name="published_on" value="{{$game->published_on}}"><br>
            <label for="image">Image Path (in the public/images folder)</label><input type="text" id="image" name="image" value="{{$game->image}}"><br>


            <label for="promotion">Promotion (submit 0 to clear)</label>
            <input type="number" id="promotion" name="promotion" placeholder="Promotion amout" value="{{$game->promotion}}">
            <br><br>
            <button type="submit" class="py-4 px-4 rounded-md text-white bg-lime-500">Submit</button>
        </form>
    </div>
</x-app-layout>
