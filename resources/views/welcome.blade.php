<x-guest-layout>
    <div class="flex flex-col justify-center items-center h-screen" x-data="" x-init="console.log($store)">
        <div>
            <h1 x-text="$store.darkMode.on ? 'Night time' : 'Day time'" class="text-6xl mb-16 font-thin"></h1>
        </div>

        <label for="dark-mode" class="flex flex-col items-center cursor-pointer mb-16">
            <div class="mb-3 font-light text-lg">
                Dark mode: <span x-text="$store.darkMode.on ? 'ON' : 'OFF'"></span>
            </div>
            <div class="relative">
                <input type="checkbox"
                    id="dark-mode"
                    class="sr-only"
                    x-model="$store.darkMode.on"
                >
                <div class="block border border-gray-800 dark:border-gray-200 w-16 h-9 rounded-full"></div>
                <div class="dot absolute left-1 top-1 bg-white w-7 h-7 rounded-full transition"></div>
            </div>
        </label>

        <label for="dark-mode" class="flex flex-col items-center cursor-pointer mb-16">
            <div class="mb-3 font-light text-lg">
                Location Services. <span x-text="$store.locationServices.on ? 'ON' : 'OFF'"></span>
            </div>
            <div class="relative">
                <input type="checkbox"
                    id="dark-mode"
                    class="sr-only"
                    x-model="$store.locationServices.on"
                >
                <div class="block border border-gray-800 dark:border-gray-200 w-16 h-9 rounded-full"></div>
                <div class="dot absolute left-1 top-1 bg-white w-7 h-7 rounded-full transition"></div>
            </div>
        </label>

        <div class="text-center">
            <p>Persist counter example ...</p>
            <div x-data="{ count: $persist(0) }">
                <button x-on:click="count++" class="underline">Click me !!</button>
                <span x-text="count"></span>
            </div>
        </div>
    </div>
</x-guest-layout>