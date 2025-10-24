<x-app-layout>
    <div>
        <x-slot name="header">
            <h2 class="font-semibold text-x1 text-gray-100 leading-tight">
                {{__("All Animes")}}
            </h2>
        </x-slot>

        <x-alert-success>
            {{session('success')}}
        </x-alert-success>

        <div class="py-12">
            <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h3 class="font-semibold text-lg mb-4">List of Anime</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($animes as $anime)
                            <a href="{{ route('animes.show', $anime) }}">
                                <x-anime-card
                                    :name="$anime->name"
                                    :image="$anime->image"
                                />
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>