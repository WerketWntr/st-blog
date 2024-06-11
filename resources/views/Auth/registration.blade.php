<x-layout>
    <x-slot:heading>
        Registration
    </x-slot:heading>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="bg-white">
            <div class=" sm:mx-auto sm:w-full sm:max-w-sm">

                <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
                    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                        <img class="mx-auto h-10 w-auto"
                             src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                             alt="Your Company">
                        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Register
                            your
                            account</h2>
                    </div>
                    <form class="space-y-6" action="{{ route('Registration') }}" method="POST">
                        @csrf
                        <x-field>
                            <div class="mt-2">
                                <x-label for="name">Name</x-label>
                                <x-input id="name" name="name" type="text" required/>
                                <x-error name="name"></x-error>
                            </div>
                        </x-field>

                        <x-field>
                            <div class="mt-2">
                                <x-label for="username">Username</x-label>
                                <x-input id="username" name="username" type="text" required/>
                                <x-error name="username"></x-error>
                            </div>
                        </x-field>

                        <x-field>
                            <div class="mt-2">
                                <x-label for="email">Email address</x-label>
                                <x-input id="email" name="email" type="email" required/>
                                <x-error name="email"></x-error>
                            </div>
                        </x-field>

                        <x-field>
                            <div class="mt-2">
                                <x-label for="password">Password</x-label>
                                <x-input id="password" name="password" type="password" required/>
                                <x-error name="password"></x-error>
                            </div>
                        </x-field>

                        <x-field>
                            <div class="mt-2">
                                <x-label for="password_confirmation">Confirm password</x-label>
                                <x-input id="password_confirmation" name="password_confirmation" type="password"
                                         required/>
                                <x-error name="password_confirmation"></x-error>
                            </div>
                        </x-field>
                        <div class="mt-6 flex items-center justify-between gap-x-6">
                            <button class="btn btn-primary inline-flex items-center rounded-md bg-gray-50 px-6 py-2 rounded-md bg-indigo-600 text-s font-bold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2
focus-visible:outline-indigo-600" type="submit">Create Account
                            </button>
                            <x-button href="{{ route('index') }}">Cancel</x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
{{--                <div>--}}
{{--                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>--}}
{{--                </div>--}}


{{--<div class="col-span-full">--}}
{{--    <x-label for="photo">Photo</x-label>--}}
{{--    <div class="mt-2 flex items-center gap-x-3">--}}
{{--        <svg class="h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"--}}
{{--             aria-hidden="true">--}}
{{--            <path fill-rule="evenodd"--}}
{{--                  d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"--}}
{{--                  clip-rule="evenodd"/>--}}
{{--        </svg>--}}
{{--        <button type="button"--}}
{{--                class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">--}}
{{--            Change--}}
{{--        </button>--}}
{{--    </div>--}}
{{--</div>--}}




