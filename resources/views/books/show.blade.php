<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <ul>
                        <li>
                        <x-input-label for="title" value="Title" />
                        {{ old('title', $book->title) }}
                        </li>
                        <li>
                        <x-input-label for="title" value="Release date" />
                        {{ old('title', $book->release_date) }}
                        </li>
                        <li>
                        <x-input-label for="title" value="Price" />
                        {{ old('title', $book->price) }}
                        </li>
                        <div class="mt-4 space-x-2">
                            <a href="{{ route('books.index') }}">{{ __('Back') }}</a>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>