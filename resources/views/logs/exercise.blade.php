<x-app-layout>
    <div class="container mx-auto p-6">
        <h2 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Log Exercise</h2>

        <form action="{{ route('logs.exercise') }}" method="POST" class="space-y-6">
            @csrf

            <div class="mb-4">
                <label for="exercise_type" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Exercise Type</label>
                <input type="text" id="exercise_type" name="exercise_type" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-600 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:focus:ring-green-500" required>
            </div>

            <div class="mb-4">
                <label for="duration" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Duration (minutes)</label>
                <input type="number" id="duration" name="duration" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-600 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:focus:ring-green-500" required min="1">
            </div>

            <div class="mb-4">
                <label for="calories_burned" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Calories Burned</label>
                <input type="number" id="calories_burned" name="calories_burned" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-600 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:focus:ring-green-500" required min="1">
            </div>

            <div class="mb-4">
                <label for="logged_at" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Date</label>
                <input type="datetime-local" id="logged_at" name="logged_at" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-600 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:focus:ring-green-500" required>
            </div>

            <button type="submit" class="w-full sm:w-auto bg-green-600 text-white py-3 px-6 rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-400">
                Log Exercise
            </button>
        </form>
    </div>
</x-app-layout>
