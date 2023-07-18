<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex justify-center mt-6">
        <div class="w-96 bg-white rounded-lg shadow-md p-6">
            <img class="w-full h-32 object-cover object-center" src="{{$user->getFirstMediaUrl('public')}}" alt="avatar">
            <div class="px-6 py-6">
                <h2 class="text-xl font-bold mb-2">{{ $user->name }}</h2>
                <p class="text-gray-700 mb-4">{{ $user->email }}</p>

                <form action="{{ route('users.update', $user) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="mb-4">
                        <label for="roles" class="block text-sm font-medium text-gray-700">Role</label>
                        <div class="mt-1">
                            @foreach ($roles as $role)
                                <label class="inline-flex items-center">
                                    <input type="radio" name="role" value="{{ $role->name }}" {{ $user->hasRole($role->name) ? 'checked' : '' }} class="form-checkbox h-4 w-4 text-blue-500">
                                    <span class="ml-2 text-sm text-gray-700">{{ $role->name }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <button type="submit" class="px-4 py-2 text-white bg-blue-500 hover:bg-blue-600 rounded">Update role</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="mt-2 text-center">
        <a href="{{ url()->previous() }}" class="text-blue-500 hover:text-blue-600 underline">Back</a>
    </div>

</x-app-layout>
