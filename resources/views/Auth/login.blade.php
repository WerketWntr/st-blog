<x-layout>
    <x-slot:heading>
        Login
    </x-slot:heading>

    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="bg-white">
            <div class=" sm:mx-auto sm:w-full sm:max-w-sm">

                <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
                    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in
                            to your account</h2>
                    </div>


                    <form class="space-y-6" action="{{ route('Login') }}" method="POST">
                        @csrf
                        <x-field>
                            <div class="mt-2">
                                <x-label for="email">Email address</x-label>
                                <x-input id="email" name="email" type="email" autocomplete="email" required/>
                                <x-error name="email"></x-error>
                            </div>
                        </x-field>
                        <x-field>
                            <div class="flex items-center justify-between">
                                <x-label for="password">Password</x-label>
                                <div class="text-sm">
                                    <a href="{{ route('password.request') }}" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot
                                        password?</a>
                                </div>
                            </div>
                            <div class="mt-2">
                                <x-input id="password" name="password" type="password" autocomplete="current-password"
                                         required/>
                                <x-error name="password"></x-error>
                            </div>
                        </x-field>
                        <div>
                            <button type="submit"
                                    class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Sign in
                            </button>
                        </div>
                        <div class="col-12">
                            <p class="small mb-0">Don't have account?
                                <a href="" class="font-semibold text-indigo-600 hover:text-indigo-500">Create an
                                    account</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>

