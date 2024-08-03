
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
{{--            {{ __('Dashboard') }}--}}
{{--            {{ $room->name }}--}}
            {{ '$Need to change' }}

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-12 gap-6">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg col-span-3">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Users
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg col-span-9">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <livrewire:chat.messages :room="$room"/>
                </div>>
                <form
                    class="m-3"
                    x-data="{
                    shift: false
                    }"
                    x-on:keydown.shift="shift = true"
                    x-on:keyup.shift="shift = false"
                    x-on:keydown.enter="if (!shift && !$event.target.value) { $event.preventDefault() } "
                    x-on:keyup.enter.prevent="if (!shift && $event.target.value) {$wire.submit() }"
                >
                    <label for="body" class="sr-only">Message</label>
                    <textarea name="body" id="body" rows="6" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300
                    focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500
                    dark:focus:ring-indigo-600 rounded-md shadow-sm w-full" placeholder="What to say" wire:model="body"></textarea>
                </form>
            </div>
        </div>
    </div>




