<div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">

    <h2 class="text-2xl text-center pt-5">Contact Form</h2>

    @session('success')
    <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
        <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Info</span>
        <div>
          <span class="font-medium">{{ session('success') }}</span> 
        </div>
      </div>
    @endsession

    <form class="max-w-sm mx-auto"  wire:submit.prevent="submit">
        <div class="mb-2">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Name</label>
            <input type="text" wire:model="form.name" id="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-gray-500 block w-full p-2.5"
                placeholder="Name" />
                @error('form.name')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror
        </div>
        <div class="mb-2">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                email</label>
            <input type="email" id="email" wire:model="form.email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-gray-500 block w-full p-2.5"
                placeholder="Email"  />
                @error('form.email')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror
        </div>

        <div class="mb-5">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                message</label>
            <textarea id="message" wire:model="form.message" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                placeholder="Leave a comment..."></textarea>
                @error('form.message')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror
        </div>
        <div class="mb-2 block" wire:loading.delay>
            <p class="text-sm text-green-500">Sending....</p>
        </div>
        <button wire:loading.attr="disabled" type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>


</div>
