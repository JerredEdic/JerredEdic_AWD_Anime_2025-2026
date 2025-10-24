@props(['action', 'method'])


<form action="{{ $action }}" method="POST" enctype="multipart/form-data">

@csrf

@if($method === 'PUT' || $method === 'PATCH') 
//The above line checks if the correct method is used and the line bellow will run the method
@method($method)
@endif

    //Name
<div class="mb-4">

<label for="name" class="block text-sm text-gray-700">Title</label>

<input

type="text"

name="name"

id="name"

value="{{ old('name', $anime->name ?? ' ') }}"

required

class="mt-1 block w-full border-gray-300 rounded-md shadow-sm />

@error('name')

<p class="text-sm text-red-600">{{ $message }}</p>

@enderror

</div>

    //Description
<div class="mb-4">

<label for="name" class="block text-sm text-gray-700">Description</label>

<input

type="text"

name="description"

id="description"

value="{{ old('description', $anime->description ?? ' ') }}"

required

class="mt-1 block w-full border-gray-300 rounded-md shadow-sm />

@error('description')

<p class="text-sm text-red-600">{{ $message }}</p>

@enderror

</div>


//Episode
<div class="mb-4">
    
<label for="name" class="block text-sm text-gray-700">Episodes</label>

<input

type="integer"

name="episodes"

id="episodes"

value="{{ old('episodes', $anime->episodes ?? ' ') }}"

required

class="mt-1 block w-full border-gray-300 rounded-md shadow-sm />

@error('episodes')

<p class="text-sm text-red-600">{{ $message }}</p>

@enderror

</div>
    

//Image
<div class="mb-4">

<label for="image" class="block text-sm font-medium text-gray-700">Anime Cover Image</label>

<input

type="file"

name="image"

id="image"

{{ isset($anime) ? '' : 'required' }}

class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"

/>

@error('image')

<p class="text-sm text-red-600">{{ $message }}</p>

@enderror

</div>


@isset($anime->image)

<div class="mb-4">

<img src="{{ asset($anime->image) }}" alt="Anime cover" class="w-24 h-32 object-cover">

</div>

@endisset


<div>

<x-primary-button>

{{ isset($anime) ? 'Update Anime' : 'Add Anime' }}

</x-primary-button>

</div>

</form>