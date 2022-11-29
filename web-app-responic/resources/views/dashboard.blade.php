<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div style="margin-bottom: 1%;">
                <x-breadcumb>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <a href="#"
                                class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">
                                {{ __('Dashboard') }}
                            </a>
                        </div>
                    </li>
                </x-breadcumb>
            </div>
            <div class="bg-white" style="border: solid 2px red;">
                Test
                <div class="container mx-auto">
                    <div class="mb-4" style="border: 2px solid red">
                        <div class="mb-4" style="border: 2px solid red">01</div>
                        <div style="border: 2px solid red">02</div>
                        <div style="border: 2px solid red">03</div>
                    </div>
                    <div class="flex flex-auto justify-evenly" style="border: 2px solid red">
                        <div class="" style="border: 2px solid red">01</div>
                        <div style="border: 2px solid red">02</div>
                        <div style="border: 2px solid red">03</div>
                    </div>

                </div>
                {{-- <livewire:index-posts> --}}
            </div>
        </div>
    </div>
</x-app-layout>
