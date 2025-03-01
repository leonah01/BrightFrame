<div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">Profile Picture</h2>

    <form action="{{ route('profile.update-photo') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mt-4">
            <label for="profile_photo" class="block text-sm font-medium text-gray-700">Upload your Profile Picture</label>
            <input type="file" name="profile_photo" id="profile_photo" class="mt-1 block w-full">
        </div>

        <div class="mt-4">
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white font-semibold rounded-md shadow hover:bg-blue-600 focus:outline-none">
                Save Profile Picture
            </button>
        </div>
    </form>
</div>
