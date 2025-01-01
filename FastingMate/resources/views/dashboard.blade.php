<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Gunakan Komponen Sidebar -->
                    <x-sidebar/>

                    <!-- Main Content -->
                    <div class="main-content">
                        <header>
                            <h1>Hello, {{ Auth::user()->name }}</h1>
                            <p>Home</p>
                        </header>
                        <section class="weight-card">
                            <div class="weight-info">
                                <p>My Weight</p>
                                <h2>65 KG</h2>
                                <span>Ideal</span>
                            </div>
                        </section>
                        <!-- Chart Section -->
                        <div class="chart-section">
                            <h3>Grafik Berat Badan</h3>
                            <canvas id="weightChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
</x-app-layout>