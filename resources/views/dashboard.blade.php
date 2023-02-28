<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Bejelentkeztél") }}

                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

                        @if (Auth::user()->is_admin)
                        <x-nav-link :href="route('admin.index')" :active="request()->routeIs('admin.index')">
                            {{ __('Admin') }}
                        </x-nav-link>
                        @endif
                        
                    </div>

                   

                
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
