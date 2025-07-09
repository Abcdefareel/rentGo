<main class="py-12 md:py-16 bg-gray-50">
    <div class="container mx-auto py-12 md:py-16">
        <div class="mb-8 text-center">
            <h1 class="text-4xl font-bold tracking-tighter sm:text-5xl headline text-[#29ABE2]">Pesan Sesi Anda</h1>
            <p class="mx-auto mt-4 max-w-[600px] text-gray-600">Pilih stasiun, game, dan slot waktu Anda untuk memulai petualangan.</p>
        </div>

        <!-- Card -->
        <div class="mx-auto max-w-4xl bg-white shadow-md rounded-lg">
            <div class="p-6">
                <h2 class="text-2xl font-bold headline text-[#29ABE2]">Reservasi Baru</h2>
                <p class="mt-2 text-gray-600">Isi detail di bawah ini untuk memesan tempat Anda.</p>
            </div>
            <div class="p-6 grid gap-8 md:grid-cols-2">
                <!-- Left Column -->
                <div class="space-y-6">
                    <div>
                        <label class="text-lg font-semibold headline flex items-center text-[#29ABE2]">
                            <i data-lucide="user" class="mr-2 h-5 w-5"></i> 1. Nama Anda
                        </label>
                        <input
                            id="customerName"
                            class="mt-4 w-full p-2.5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#29ABE2] focus:border-[#29ABE2]"
                            placeholder="Masukkan nama Anda"
                            value="John Doe" />
                    </div>
                    <div>
                        <label class="text-lg font-semibold headline flex items-center text-[#29ABE2]">
                            <i data-lucide="gamepad-2" class="mr-2 h-5 w-5"></i> 2. Pilih Stasiun Anda
                        </label>
                        <select
                            id="station"
                            class="mt-4 w-full p-2.5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#29ABE2] focus:border-[#29ABE2]">
                            <option value="">Pilih stasiun</option>
                            <option value="1">Stasiun 1 (PlayStation 5)</option>
                            <option value="2">Stasiun 2 (Xbox Series X)</option>
                        </select>
                    </div>
                    <div>
                        <label class="text-lg font-semibold headline text-[#29ABE2]">3. Pilih Game Anda (Opsional)</label>
                        <div class="mt-4 p-2 bg-white border border-gray-200 rounded-lg h-40 overflow-y-auto">
                            <div class="p-2 space-y-2">
                                <div class="flex items-center space-x-2">
                                    <input type="checkbox" id="game1" class="w-4 h-4 text-[#29ABE2] border-gray-300 rounded focus:ring-[#29ABE2]" />
                                    <label for="game1" class="text-sm text-gray-900 cursor-pointer">Cyberpunk 2077</label>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <input type="checkbox" id="game2" class="w-4 h-4 text-[#29ABE2] border-gray-300 rounded focus:ring-[#29ABE2]" />
                                    <label for="game2" class="text-sm text-gray-900 cursor-pointer">The Witcher 3</label>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <input type="checkbox" id="game3" class="w-4 h-4 text-[#29ABE2] border-gray-300 rounded focus:ring-[#29ABE2]" />
                                    <label for="game3" class="text-sm text-gray-900 cursor-pointer">Elden Ring</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="space-y-6">
                    <div>
                        <label for="duration" class="text-lg font-semibold headline text-[#29ABE2]">4. Pilih Durasi</label>
                        <select
                            id="duration"
                            class="mt-4 w-full p-2.5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#29ABE2] focus:border-[#29ABE2]">
                            <option value="1">1 Jam</option>
                            <option value="2">2 Jam</option>
                            <option value="3">3 Jam</option>
                            <option value="5">5 Jam (Paket)</option>
                        </select>
                    </div>
                    <div>
                        <label class="text-lg font-semibold headline text-[#29ABE2]">5. Pilih Tanggal & Waktu</label>
                        <div class="mt-4 p-4 bg-white border border-gray-200 rounded-lg">
                            <input
                                type="date"
                                id="date"
                                class="w-full p-2.5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#29ABE2] focus:border-[#29ABE2]"
                                value="2025-07-09" />
                        </div>
                    </div>
                    <div class="mt-4 grid grid-cols-3 gap-2">
                        <button class="inline-flex items-center justify-center px-4 py-2 border border-[#29ABE2] text-[#29ABE2] rounded-md hover:bg-[#29ABE2] hover:text-white">
                            <i data-lucide="clock" class="mr-2 h-4 w-4"></i> 10:00
                        </button>
                        <button class="inline-flex items-center justify-center px-4 py-2 border border-[#29ABE2] text-[#29ABE2] rounded-md hover:bg-[#29ABE2] hover:text-white">
                            <i data-lucide="clock" class="mr-2 h-4 w-4"></i> 11:00
                        </button>
                        <button class="inline-flex items-center justify-center px-4 py-2 border border-[#29ABE2] text-[#29ABE2] rounded-md hover:bg-[#29ABE2] hover:text-white">
                            <i data-lucide="clock" class="mr-2 h-4 w-4"></i> 12:00
                        </button>
                        <button class="inline-flex items-center justify-center px-4 py-2 border border-[#29ABE2] text-[#29ABE2] rounded-md hover:bg-[#29ABE2] hover:text-white">
                            <i data-lucide="clock" class="mr-2 h-4 w-4"></i> 13:00
                        </button>
                        <button class="inline-flex items-center justify-center px-4 py-2 bg-[#29ABE2] text-white rounded-md">
                            <i data-lucide="clock" class="mr-2 h-4 w-4"></i> 14:00
                        </button>
                        <button class="inline-flex items-center justify-center px-4 py-2 border border-[#29ABE2] text-[#29ABE2] rounded-md hover:bg-[#29ABE2] hover:text-white">
                            <i data-lucide="clock" class="mr-2 h-4 w-4"></i> 15:00
                        </button>
                        <button class="inline-flex items-center justify-center px-4 py-2 border border-[#29ABE2] text-[#29ABE2] rounded-md hover:bg-[#29ABE2] hover:text-white">
                            <i data-lucide="clock" class="mr-2 h-4 w-4"></i> 16:00
                        </button>
                        <button class="inline-flex items-center justify-center px-4 py-2 border border-[#29ABE2] text-[#29ABE2] rounded-md hover:bg-[#29ABE2] hover:text-white">
                            <i data-lucide="clock" class="mr-2 h-4 w-4"></i> 17:00
                        </button>
                        <button class="inline-flex items-center justify-center px-4 py-2 border border-[#29ABE2] text-[#29ABE2] rounded-md hover:bg-[#29ABE2] hover:text-white">
                            <i data-lucide="clock" class="mr-2 h-4 w-4"></i> 18:00
                        </button>
                        <button class="inline-flex items-center justify-center px-4 py-2 border border-[#29ABE2] text-[#29ABE2] rounded-md hover:bg-[#29ABE2] hover:text-white">
                            <i data-lucide="clock" class="mr-2 h-4 w-4"></i> 19:00
                        </button>
                        <button class="inline-flex items-center justify-center px-4 py-2 border border-[#29ABE2] text-[#29ABE2] rounded-md hover:bg-[#29ABE2] hover:text-white">
                            <i data-lucide="clock" class="mr-2 h-4 w-4"></i> 20:00
                        </button>
                        <button class="inline-flex items-center justify-center px-4 py-2 border border-[#29ABE2] text-[#29ABE2] rounded-md hover:bg-[#29ABE2] hover:text-white">
                            <i data-lucide="clock" class="mr-2 h-4 w-4"></i> 21:00
                        </button>
                    </div>
                </div>
            </div>
            <div class="p-6 flex justify-end">
                <button class="inline-flex items-center px-6 py-3 bg-[#29ABE2] text-white font-medium rounded-md hover:bg-[#1a8cc0] text-lg">
                    Konfirmasi Pemesanan
                </button>
            </div>
        </div>
    </div>
</main>