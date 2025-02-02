<x-app-layout>
    <div class="container mx-auto p-6">
        <h2 class="text-2xl font-semibold mb-6 text-gray-900 dark:text-white">Log Smoke-Free Days</h2>

        <form action="{{ route('logs.smoke-free') }}" method="POST" class="space-y-6">
            @csrf



            <!-- Money Saved Input -->
            <div class="mb-4">
                <label for="saved_money" class="block text-sm font-medium text-gray-900 dark:text-white">Money Saved</label>
                <input type="number" id="saved_money" name="saved_money" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-500 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-teal-400" required min="0" step="0.01">

            </div>

            <!-- Date Input -->
            <div class="mb-4">
                <label for="logged_at" class="block text-sm font-medium text-gray-900 dark:text-white">Date</label>
                <input type="datetime-local" id="logged_at" name="logged_at" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-500 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-teal-400" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-teal-600 text-white py-3 px-6 rounded-lg shadow-md hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-teal-500 dark:bg-teal-500 dark:hover:bg-teal-600 dark:focus:ring-teal-400">
                Log Smoke-Free Days
            </button>
        </form>
    </div>
</x-app-layout>
