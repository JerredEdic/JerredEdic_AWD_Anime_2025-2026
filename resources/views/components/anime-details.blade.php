@props(['name', 'description', 'episodes', 'image'])

<div>
    <h1 class="font-bold text-black-600 mb-2" style="font-size: 3rm;">{{$name}}</h1>
    <div class="overflow-hidden rounded-lg mb4 flex justify-center">
        <img src="{{asset('images/animes/'.$image)}}" alt="$image">
    </div>
    <h2 class="text-gray-500 text-sm italic mb-4" style="font-size:1rem;">Number of Episdoes: {{$episodes}}</h2>
    <h3 class="text-gray-800 font-semibold mb-2">Description</h3>
    <p class="text-gray-700 leading-relaxed">{{$description}}</p>
</div>