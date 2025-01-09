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
                        <div class="max-w-7xl mx-auto py-10">
                            <h1 class="text-2xl font-bold mb-4">Pilih Jadwal Intermittent Fasting</h1>
                    
                            <!-- Pilihan Jadwal -->
                            <div class="mb-6">
                                <label for="scheduleDropdown" class="block text-sm font-medium text-gray-700 mb-2">Pilih Jadwal</label>
                                <select 
                                    id="scheduleDropdown" 
                                    onchange="showSchedule(this.value)" 
                                    class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    <option value="" selected disabled>Pilih Jadwal</option>
                                    <option value="easy">Mudah (16:8)</option>
                                    <option value="medium">Sedang (18:6)</option>
                                    <option value="hard">Berat (20:4)</option>
                                </select>
                            </div>
                    
                            <!-- Jadwal Tabel -->
                            <div id="scheduleTable" class="mt-6 hidden">
                                <h2 class="text-xl font-semibold mb-4" id="scheduleTitle"></h2>
                                <table class="table-auto w-full text-left border-collapse border border-gray-200">
                                    <thead>
                                        <tr class="bg-gray-100">
                                            <th class="border border-gray-300 px-4 py-2">Waktu</th>
                                            <th class="border border-gray-300 px-4 py-2">Kegiatan</th>
                                            <th class="border border-gray-300 px-4 py-2">Pengingat</th>
                                        </tr>
                                    </thead>
                                    <tbody id="scheduleContent">
                                        <!-- Konten Jadwal akan diisi oleh JavaScript -->
                                    </tbody>
                                </table>
                            </div>
                        </div>              
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script>
        const schedules = {
            easy: {
                title: "Jadwal Mudah (16:8)",
                data: [
                    { time: "08:00 - 12:00", activity: "Puasa - Minum air putih atau teh/kopi tanpa gula", reminder: "Setel alarm pengingat minum air setiap 2 jam" },
                    { time: "12:00 - 13:00", activity: "Makan pertama (Makan siang): Konsumsi makanan kaya protein, serat, dan lemak sehat", reminder: "Setel alarm untuk memulai jendela makan" },
                    { time: "16:00 - 20:00", activity: "Makan terakhir (Makan malam): Pilih makanan seimbang, hindari makanan tinggi gula", reminder: "Alarm selesai jendela makan pukul 20:00" },
                    { time: "20:00 - 08:00", activity: "Puasa penuh - Hanya minum air putih atau teh tanpa gula", reminder: "Setel alarm tidur pukul 22:00 untuk memperpanjang puasa" },
                ]
            },
            medium: {
                title: "Jadwal Sedang (18:6)",
                data: [
                    { time: "08:00 - 14:00", activity: "Puasa - Minum air putih atau teh/kopi tanpa gula", reminder: "Setel alarm pengingat minum air setiap 2 jam" },
                    { time: "14:00 - 16:00", activity: "Makan pertama: Konsumsi makanan kaya protein dan lemak sehat", reminder: "Alarm untuk memulai jendela makan pukul 14:00" },
                    { time: "16:00 - 20:00", activity: "Makan terakhir: Pilih makanan seimbang, hindari makanan olahan", reminder: "Alarm selesai jendela makan pukul 20:00" },
                    { time: "20:00 - 08:00", activity: "Puasa penuh - Hanya minum air putih atau teh tanpa gula", reminder: "Setel alarm tidur pukul 22:00 untuk memperpanjang puasa" },
                ]
            },
            hard: {
                title: "Jadwal Berat (20:4)",
                data: [
                    { time: "08:00 - 16:00", activity: "Puasa - Minum air putih atau teh/kopi tanpa gula", reminder: "Setel alarm pengingat minum air setiap 2 jam" },
                    { time: "16:00 - 20:00", activity: "Jendela makan: Konsumsi makanan tinggi protein, lemak sehat, dan serat", reminder: "Alarm selesai jendela makan pukul 20:00" },
                    { time: "20:00 - 08:00", activity: "Puasa penuh - Hanya minum air putih atau teh tanpa gula", reminder: "Setel alarm tidur pukul 22:00 untuk memperpanjang puasa" },
                ]
            }
        };
    
        function showSchedule(level) {
            const schedule = schedules[level];
            document.getElementById("scheduleTable").classList.remove("hidden");
            document.getElementById("scheduleTitle").innerText = schedule.title;
    
            const scheduleContent = document.getElementById("scheduleContent");
            scheduleContent.innerHTML = schedule.data.map(item => `
                <tr>
                    <td class="border border-gray-300 px-4 py-2">${item.time}</td>
                    <td class="border border-gray-300 px-4 py-2">${item.activity}</td>
                    <td class="border border-gray-300 px-4 py-2">${item.reminder}</td>
                </tr>
            `).join("");
        }
    </script>
    
</x-app-layout>