<x-layout>
    <x-slot:heading>
        Account information
    </x-slot:heading>
    <x-div>
        <div class="sm:w-full sm:max-w-sm">
            <h2 class="mt-5  text-2xl font-bold leading-9 tracking-tight text-gray-900">Public profile</h2>
        </div>
        <div class="mt-6 border-t border-gray-100">
            <dl class="divide-y divide-gray-100"></dl>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-sm font-medium leading-6 text-gray-900">Username</dt>
                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                </dd>
            </div>
            // image
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-sm font-medium leading-6 text-gray-900">About</dt>
                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">Fugiat ipsum
                    ipsum deserunt
                    culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui
                    ipsum aliquip
                    consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure
                    nostrud
                    pariatur mollit ad adipisicing reprehenderit deserunt qui eu.Fugiat ipsum
                    ipsum deserunt
                    culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui
                    ipsum aliquip
                    consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure
                    nostrud
                    pariatur mollit ad adipisicing reprehenderit deserunt qui eu.Fugiat ipsum
                    ipsum deserunt
                    culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui
                    ipsum aliquip
                    consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure
                    nostrud
                    pariatur mollit ad adipisicing reprehenderit deserunt qui eu.Fugiat ipsum
                    ipsum deserunt
                    culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui
                    ipsum aliquip
                    consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure
                    nostrud
                    pariatur mollit ad adipisicing reprehenderit deserunt qui eu.
                </dd>
            </div>
        </div>
    </x-div>
    <x-div>
        <div class="sm:w-full sm:max-w-sm">
            <h2 class="mt-5  text-2xl font-bold leading-9 tracking-tight text-gray-900">Private
                information</h2>
        </div>
        <div class="mt-6 border-t border-gray-100">
            <dl class="divide-y divide-gray-100"></dl>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                Email</dt>
                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                    {{ $user->email }}
                </dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-sm font-medium leading-6 text-gray-900">Maybe birthda</dt>
                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">12.15.15</dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-sm font-medium leading-6 text-gray-900">Country/Region</dt>
                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">what</dd>
            </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <x-button href="">Edit Profile</x-button>
            <form action="{{ route('deleteProfile', $user) }}"  method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="flex justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Delete profile
                </button>
            </form>
        </div>
    </x-div>
</x-layout>
{{--delete account--}}
