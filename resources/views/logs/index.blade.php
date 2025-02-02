<x-app-layout>
    <div class="container mx-auto p-6">
        <h2 class="text-2xl font-semibold text-center mb-8 text-gray-900 dark:text-white">Log Your Progress</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Cigarette Card -->
            <div class="flex flex-col items-center p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg hover:shadow-xl transition-all">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Cigarette Log</h3>
                <p class="text-gray-600 dark:text-gray-400 mb-4">Track the number of cigarettes smoked and cost per day.</p>
                <a href="{{ route('logs.cigarette') }}" class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-400 transition-all">
                    Log Cigarettes
                </a>
            </div>

            <!-- Exercise Card -->
            <div class="flex flex-col items-center p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg hover:shadow-xl transition-all">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Exercise Log</h3>
                <p class="text-gray-600 dark:text-gray-400 mb-4">Record your exercise type, duration, and calories burned.</p>
                <a href="{{ route('logs.exercise') }}" class="bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-400 transition-all">
                    Log Exercise
                </a>
            </div>

            <!-- Stress Card -->
            <div class="flex flex-col items-center p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg hover:shadow-xl transition-all">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Stress Level Log</h3>
                <p class="text-gray-600 dark:text-gray-400 mb-4">Monitor and track your stress levels over time.</p>
                <a href="{{ route('logs.stress') }}" class="bg-red-600 text-white py-2 px-4 rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-400 transition-all">
                    Log Stress
                </a>
            </div>

             <!-- Stress Card -->
            <div class="flex flex-col items-center p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg hover:shadow-xl transition-all">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Smoke Free Day Log</h3>
                <p class="text-gray-600 dark:text-gray-400 mb-4">Monitor and track your smoke freebdayys over time.</p>
                <a href="{{ route('logs.smoke-free') }}" class="bg-teal-600 text-white py-2 px-4 rounded-lg hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-teal-500 dark:bg-teal-500 dark:hover:bg-teal-600 dark:focus:ring-teal-400 transition-all">
                    Log Smoke Free Day
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
