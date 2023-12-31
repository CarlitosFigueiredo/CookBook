<x-layout>

    <div class="bg-white rounded-md border my-8 px-6 py-6 mx-40">
        <div>
            <h2 class="text-2xl font-semibold">Charts</h2>
        </div>
    </div>

    <livewire:charts-orders/>

    @push('scripts')
    
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @endpush
</x-layout>