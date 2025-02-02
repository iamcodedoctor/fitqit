<x-app-layout>
    <div class="container mx-auto p-6">
        <h2 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Log Cigarettes Smoked</h2>

        <form action="{{ route('logs.cigarette') }}" method="POST" class="space-y-6">
            @csrf

            <div class="mb-4">
                <label for="cigarettes_count" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Cigarettes Smoked</label>
                <input type="number" id="cigarettes_count" name="cigarettes_count" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:focus:ring-blue-500" required min="1">
            </div>

            <div class="mb-4">
                <label for="cost" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Cost</label>
                <input type="number" id="cost" name="cost" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:focus:ring-blue-500" required min="0" step="0.01">
            </div>

            <div class="mb-4">
                <label for="smoked_at" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Date</label>
                <input type="datetime-local" id="smoked_at" name="smoked_at" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:focus:ring-blue-500" required>
            </div>

            <button type="submit" class="w-full sm:w-auto bg-blue-600 text-white py-3 px-6 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-400">
                Log Cigarettes Smoked
            </button>
        </form>
    </div>
</x-app-layout>
