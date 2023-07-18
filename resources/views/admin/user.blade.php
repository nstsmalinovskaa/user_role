<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="px-4">
        <div class="py-12">
            <div class="grid grid-cols-4 gap-6">

                @foreach($users as $user)
                    <div class="w-full">
                        <div class="bg-white rounded-lg shadow-md mb-4">
                            <img class="w-full h-32 object-cover object-center" src="{{$user->avatar()}}" alt="avatar">
                            <div class="px-6 py-6">
                                <h2 class="text-xl font-bold mb-2">{{ $user->first_name }} {{ $user->last_name }}</h2>
                                <p class="text-gray-700 mb-4">{{ $user->email }}</p>
                                <div class="flex justify-between">
                                    <a href="{{ route('users.edit', $user) }}" class="flex items-center justify-center px-2 py-1 text-xs text-white bg-blue-500 hover:bg-blue-600 rounded">Update role</a>

                                    <form action="{{ route('users.destroy', $user) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="flex items-center justify-center px-2 py-1 text-xs text-white bg-blue-500 hover:bg-blue-600 rounded">Delete user</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</x-app-layout>
