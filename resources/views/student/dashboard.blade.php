<title>Dashboard</title>
<x-student-layout>
    <!-- Main Content -->
    <main class="ml-[335px] max-lg:ml-auto p-4">
        <h2 class="max-lg:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            DASHBOARD
        </h2>
        <br>
        <div class="p-6 space-y-10">
            <!-- Announcement/Reminders -->
            <div class="rounded-md shadow-md overflow-hidden bg-white">
                <!-- Header bar -->
                <div class="bg-primary text-white font-semibold px-4 py-2">
                    Announcements/Reminders
                </div>

                <!-- Body -->
                <div class="p-6 text-sm leading-relaxed">
                    <p class="mb-4">
                        sample text
                    </p>
                </div>
            </div>
            <!-- Cards -->
            <div>
                <div class="grid max-md:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="card bg-lightgray p-4 rounded-lg border border-gray shadow">
                        <h2 class="text-2xl font-medium text-center">UNDER REVIEW</h2>
                        <p class="mt-2 text-center">STATUS OF REVIEW</p>
                    </div>
                    <div class="card bg-lightgray p-4 rounded-lg border border-gray shadow">
                        <h2 class="text-2xl font-medium text-center">2025/08/05</h2>
                        <p class="mt-2 text-center">DEADLINE OF SUBMISSION</p>
                    </div>
                    <div class="card bg-lightgray p-4 rounded-lg border border-gray shadow">
                        <h2 class="text-2xl font-semibold"></h2>
                        <p></p>
                    </div>
                    <div class="card bg-lightgray p-4 rounded-lg border border-gray shadow">
                        <h2 class="text-2xl font-semibold"></h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-student-layout>