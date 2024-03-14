@props(['users'])

<div>
    @foreach($users as $user)

        <div class="bg-gray-800 text-white shadow-md rounded-lg p-6 mb-4">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl font-semibold">{{ $user->name }}</h2>
                <span class="text-gray-400">{{ $user->created_at->diffForHumans() }}</span>
            </div>
            <p class="text-gray-400">{{ $user->email }}</p>
            <div class="mt-4 flex justify-end">
                <a href="{{ route('users.show', $user) }}" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 rounded-lg text-white mr-2">Show</a>
                <a href="{{ route('users.edit', $user) }}" class="px-4 py-2 bg-green-600 hover:bg-green-700 rounded-lg text-white">Edit</a>
                <form action="{{ route('users.destroy', $user) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-4 py-2 ml-2 bg-red-600 hover:bg-red-700 rounded-lg text-white" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                </form>
            </div>
        </div>

    @endforeach
</div>

