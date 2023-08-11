<form wire:submit.prevent="update" method="POST">
    @method('PUT')
    @csrf
    <div>
        <label for="title">Enter Post Title</label><br>
        <input type="text" name="title" class="block w-96 appearance-none rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="post title" wire:model="title" required>
    </div>
    @error('title') <span class="text-red-500 error">{{ $message }}</span><br> @enderror
    <br>
    <div>
        <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post content</label>
        <textarea id="content" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write post content here..." wire:model="content" required></textarea>
    </div>
    @error('content') <span class="text-red-500 error">{{ $message }}</span><br> @enderror
    <br>
    <button type="submit" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-600 focus:bg-green-700 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Update</button>                        
</form>