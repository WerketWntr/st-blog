<x-layout>
    <x-slot:heading>
        Create post
    </x-slot:heading>
    <x-div>
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Create post</h1>
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <x-field>
                <div class="mt-2">
                    <x-label for="email">Title</x-label>
                    <x-input type="text" name="title" id="title" value="{{ old('title') }}" required/>
                    <x-error name="title"></x-error>
                </div>
            </x-field>
            <x-field>
                <div class="mt-2">
                    <x-label for="text">Text</x-label>
                    <textarea id="text" name="text" rows="8"
                              class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                    <x-error name="text"></x-error>
                </div>
            </x-field>
            <x-field>
                <div class="col-span-full">
                    <x-label for="text">Image</x-label>
                    <div class="mt-2 flex items-center gap-x-3">
                        <x-input type="file" name="image" id="image" ></x-input>
                        <x-error name="image"></x-error>
                    </div>
                </div>
            </x-field>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button  type="submit" class="flex justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Create post
                </button>
                <x-button type="button" href="{{ route('posts.index') }}">Cancel</x-button>
            </div>
        </form>
    </x-div>
</x-layout>
