<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Analisis') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl card-body mx-auto sm:px-6 lg:px-8">
            <livewire:livewire-column-chart
                :column-chart-model="$columnChartModel"
            />
        </div>
    </div>
</x-app-layout>
