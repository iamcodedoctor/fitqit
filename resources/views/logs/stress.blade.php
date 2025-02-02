<x-app-layout>
    <div class="container mx-auto p-6">
        <h2 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Log Stress Level</h2>

        <form action="{{ route('logs.stress') }}" method="POST" class="space-y-6">
            @csrf

            <div class="mb-4">
                <label for="stress_level" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Stress Level (1-10)</label>
                <input type="number" id="stress_level" name="stress_level" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-red-600 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:focus:ring-red-500" required min="1" max="10">
            </div>

            <div class="mb-4">
                <label for="logged_at" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Date</label>
                <input type="datetime-local" id="logged_at" name="logged_at" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-red-600 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:focus:ring-red-500" required>
            </div>

            <button type="submit" class="w-full sm:w-auto bg-teal-600 text-white py-3 px-6 rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-400">
                Log Stress Level
            </button>
        </form>
    </div>
</x-app-layout>
