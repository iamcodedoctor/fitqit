<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



    <div class="container mx-auto p-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <!-- Sidebar -->
            <div class="col-span-1 bg-gray-800 text-white p-6 rounded-lg shadow-lg dark:bg-gray-900">
                <h2 class="text-xl font-semibold mb-4 dark:text-gray-100">Summary</h2>
                <ul class="space-y-3">
                    <li class="flex justify-between">
                        <span class="dark:text-gray-300">Total Smoke-Free Days:</span>
                        <strong class="dark:text-gray-100">{{ $totalSmokeFreeDays }}</strong>
                    </li>
                    <li class="flex justify-between">
                        <span class="dark:text-gray-300">Total Money Saved:</span>
                        <strong class="dark:text-gray-100">${{ number_format($totalMoneySaved, 2) }}</strong>
                    </li>
                    <li class="flex justify-between">
                        <span class="dark:text-gray-300">Exercises This Week:</span>
                        <strong class="dark:text-gray-100">{{ $exercises->count() }}</strong>
                    </li>
                    <li class="flex justify-between">
                        <span class="dark:text-gray-300">Stress Logs This Week:</span>
                        <strong class="dark:text-gray-100">{{ $stressLevels->count() }}</strong>
                    </li>
                    <li class="flex justify-between">
                        <span class="dark:text-gray-300">Total Cigarettes Smoked This Week:</span>
                        <strong class="dark:text-gray-100">{{ $cigarettesData->total_cigarettes }}</strong>
                    </li>
                    <li class="flex justify-between">
                        <span class="dark:text-gray-300">Total Money on Cigarettes This Week:</span>
                        <strong class="dark:text-gray-100">{{ $cigarettesData->total_cost }}</strong>
                    </li>
                </ul>
            </div>


            <!-- Note List and Note Editor -->
            <div class="col-span-3 bg-white text-gray-900 p-6 rounded-lg shadow-lg dark:bg-gray-800 dark:text-white">
                <h2 class="text-xl font-semibold mb-4">Weekly Progress</h2>

                <!-- Note List - Cigarettes Smoked -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold mb-3">Cigarettes Smoked This Week</h3>
                    @if($cigarettesSmoked->count())
                    <ul class="space-y-3">
                        @foreach($cigarettesSmoked as $log)
                        <li class="bg-gray-100 p-4 rounded-md shadow-sm dark:bg-gray-700">
                            <div class="flex justify-between">
                                <span class="font-medium">{{ $log->smoked_at->format('Y-m-d H:i:s') }}</span>
                                <span class="text-gray-500">{{ $log->cigarettes_count }} cigarettes (Cost: ${{ number_format($log->cost, 2) }})</span>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    @else
                    <p class="text-gray-500">No cigarettes logged this week.</p>
                    @endif
                </div>

                <!-- Note List - Exercises -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold mb-3">Exercise This Week</h3>
                    @if($exercises->count())
                    <ul class="space-y-3">
                        @foreach($exercises as $exercise)
                        <li class="bg-gray-100 p-4 rounded-md shadow-sm dark:bg-gray-700">
                            <div class="flex justify-between">
                                <span class="font-medium">{{ $exercise->logged_at->format('Y-m-d H:i:s') }}</span>
                                <span class="text-gray-500">{{ $exercise->exercise_type }} for {{ $exercise->duration }} minutes (Burned {{ $exercise->calories_burned }} calories)</span>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    @else
                    <p class="text-gray-500">No exercises logged this week.</p>
                    @endif
                </div>

                <!-- Note List - Stress Levels -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold mb-3">Stress Logs This Week</h3>
                    @if($stressLevels->count())
                    <ul class="space-y-3">
                        @foreach($stressLevels as $stressLog)
                        <li class="bg-gray-100 p-4 rounded-md shadow-sm dark:bg-gray-700">
                            <div class="flex justify-between">
                                <span class="font-medium">{{ $stressLog->logged_at->format('Y-m-d H:i:s') }}</span>
                                <span class="text-gray-500">Stress Level: {{ $stressLog->stress_level }}</span>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    @else
                    <p class="text-gray-500">No stress logs this week.</p>
                    @endif
                </div>

                <!-- Note Editor -->
                <h2 class="text-xl font-semibold mb-4">Log Entries</h2>
                <a href="{{@route('logs.index')}}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg shadow-md transition duration-300">Add Log</a>
            </div>
        </div>
    </div>


    </div>

</x-app-layout>
