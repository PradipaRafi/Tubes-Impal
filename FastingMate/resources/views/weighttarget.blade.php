<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Main Content -->
                    <div class="main-content">
                        <header>
                            <h1>Hello, {{ Auth::user()->name }}</h1>
                        </header>
<!-- Target Berat Badan -->
<div class="max-w-7xl mx-auto py-10">
    <h1 class="text-2xl font-bold mb-4">Target Berat Badan</h1>

    <!-- Tabel Target Berat Badan -->
    <table class="table-auto w-full text-left border-collapse border border-gray-200">
        <thead>
            <tr class="bg-gray-100">
                <th class="border border-gray-300 px-4 py-2">Parameter</th>
                <th class="border border-gray-300 px-4 py-2">Target</th>
                <th class="border border-gray-300 px-4 py-2">Pengingat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Berat Badan</td>
                <td class="border border-gray-300 px-4 py-2">68 kg</td>
                <td class="border border-gray-300 px-4 py-2">Periksa berat badan setiap minggu</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Kalori Makan</td>
                <td class="border border-gray-300 px-4 py-2">1500 kcal/hari</td>
                <td class="border border-gray-300 px-4 py-2">Setel pengingat untuk makan teratur</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Kalori Olahraga</td>
                <td class="border border-gray-300 px-4 py-2">500 kcal/hari</td>
                <td class="border border-gray-300 px-4 py-2">Jadwalkan olahraga setiap sore</td>
            </tr>
        </tbody>
    </table>
</div>


    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>  
</x-app-layout>