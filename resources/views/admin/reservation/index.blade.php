<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.reservation.create')}}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700  text-white rounded-lg">Új Foglalás</a>

            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Vezetéknév
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Keresztnév
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Telefonszám
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Foglalási dátum
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Vendégek száma
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Asztal neve
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Műveletek
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reservations as $reservation)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$reservation->first_name}}
                            </th>
                            <td class="px-6 py-4">
                                {{$reservation->last_name}}
                            </td>
                            <td class="px-6 py-4">
                                {{$reservation->email}}
                            </td>
                            <td class="px-6 py-4">
                                {{ $reservation->tel_number}}
                            </td>

                            <td class="px-6 py-4">
                                {{ $reservation->res_date }}

                            </td>
                            <td class="px-6 py-4">
                                {{ $reservation->guest_number}}
                            </td>
                            <td class="px-6 py-4">
                                {{ $reservation->table->name}}
                            </td>
                            <td class="py-4 px-4text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <div class="flex space-x-2">
    
    
                                    <a href="{{ route('admin.reservation.edit', $reservation->id) }}"
                                        class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg  text-white"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-pen" viewBox="0 0 16 16">
                                            <path
                                                d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                        </svg></a>
                                    <form class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white" method="POST"
                                        action="{{ route('admin.reservation.destroy', $reservation->id) }}"
                                        onsubmit="return confirm('Biztos törlöd?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                            </svg></button>
                                    </form>
                                </div>
                </div>
    
            </div>
            </td>

                        </tr>
                        

        @endforeach

        </tbody>
        </table>
    </div>
    </div>
    </div>
</x-admin-layout>