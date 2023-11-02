<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="relative w-full">
                        <thead class="bg-neutral-100 text-left">
                            <tr>
                                <th>Title</th>
                                <th>Release date</th>
                                <th>Price</th>
                            </tr>
                            </thead>
                        <tbody>
                            @foreach ($books as $book)
                            <tr class="border-b justify-between items-center transition duration-300 ease-in-out hover:bg-neutral-100">
                                <td>
                                    <a href="{{ route('books.show', $book) }}">
                                        {{ $book->title }}
                                    </a>
                                </td>
                                <td>{{ $book->release_date }}</td>
                                <td>{{ $book->price }}</td>
                                <td>
                                    <a href="{{ route('books.edit', $book) }}">
                                        {{ __('Edit') }}
                                    </a>
                                    <form method="POST" action="{{ route('books.destroy', $book) }}">

                                        @csrf

                                        @method('delete')
                                        <x-danger-button class="text-red-500" onclick="event.preventDefault(); this.closest('form').submit();">
                                            Delete
                                        </x-danger-button>

                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                <div class="pt-4">
          {{ $books->links() }}
        </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>