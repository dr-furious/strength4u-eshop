@extends("layouts.app")

@section("title", "Product")

@section("content")
    <main
        class="flex min-h-screen flex-col justify-center bg-primary-grey-100 py-12"
    >
        <div class="xs:p-0 mx-auto p-10 md:w-full md:max-w-md py-5">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="w-full divide-y divide-white rounded-lg bg-white shadow">
                    <!-- Email Address -->
                    <div class="px-5 pb-2 pt-8">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="px-5 py-2">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full"
                                      type="password"
                                      name="password"
                                      required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4 mr-2 pb-5">
                        <x-primary-button class="ms-3">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </div>
            </form>
            <div class="py-5">
                <div class="grid grid-cols-2 gap-1">
                    <div class="whitespace-nowrap text-center sm:text-left">
                        <a
                            id="navigateButton"
                            href="{{ route("index") }}"
                            class="mx-5 cursor-pointer rounded-lg px-5 py-4 text-sm font-normal text-gray-500 ring-inset transition duration-200 hover:bg-gray-200 focus:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                class="inline-block h-4 w-4 align-text-top"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18"
                                />
                            </svg>
                            <span class="ml-1 inline-block">Back to strength4u.com</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
