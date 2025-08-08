<<<<<<< HEAD
<<<<<<< HEAD
@section('title', 'Dashboard')
=======
<title>Dashboard</title>
>>>>>>> b196547aeff59a12333617ee3208ee2cbe1ef1fb
=======
@section('title', 'Dashboard')
>>>>>>> 87dc98ec9a8c3dab32310e4a5e37f4fb4de45d42
<x-superadmin-layout>
    <!-- Main Content -->
    <main class="ml-[335px] max-lg:ml-auto p-4">
        <h2 class="max-lg:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            DASHBOARD
        </h2>
        <br>
        <div class="p-6 space-y-10">
            <!-- Users Account -->
            <div>
                <h2 class="text-xl font-semibold mb-4 text-gray-700">USERS ACCOUNT</h2>
                <div class="grid max-md:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="card bg-lightgray p-4 rounded-lg border border-gray shadow">
                        <h2 class="text-2xl font-semibold">12</h2>
                        <p>TOTAL USERS</p>
                    </div>
                    <div class="card bg-lightgray p-4 rounded-lg border border-gray shadow">
                        <h2 class="text-2xl font-semibold">12</h2>
                        <p>PENDING APPROVAL</p>
                    </div>
                    <div class="card bg-lightgray p-4 rounded-lg border border-gray shadow">
                        <h3 class="text-2xl font-semibold">7</h3>
                        <p>APPROVED ACCOUNTS</p>
                    </div>
                    <div class="card bg-lightgray p-4 rounded-lg border border-gray shadow">
                        <h3 class="text-2xl font-semibold">3</h3>
                        <p>DISABLED ACCOUNTS</p>
                    </div>
                </div>
            </div>

            <!-- Research Protocol -->
            <div>
                <h2 class="text-xl font-semibold mb-4 text-gray-700">RESEARCH PROTOCOL</h2>
                <div class="grid max-md:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="card bg-lightgray p-4 rounded-lg border border-gray shadow">
                        <h3 class="text-2xl font-semibold">5</h3>
                        <p>EVALUATED PROTOCOLS</p>
                    </div>
                    <div class="card bg-lightgray p-4 rounded-lg border border-gray shadow">
                        <h3 class="text-2xl font-semibold">10</h3>
                        <p>PENDING REVIEWS</p>
                    </div>
                    <div class="card bg-lightgray p-4 rounded-lg border border-gray shadow">
                        <h3 class="text-2xl font-semibold">12</h3>
                        <p>ONGOING REVIEWS</p>
                    </div>
                    <div class="card bg-lightgray p-4 rounded-lg border border-gray shadow">
                        <h3 class="text-2xl font-semibold">5</h3>
                        <p>TERMINATED PROTOCOLS</p>
                    </div>
                    <div class="card bg-lightgray p-4 rounded-lg border border-gray shadow">
                        <h3 class="text-2xl font-semibold">10</h3>
                        <p>APPROVED PROTOCOLS</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-6 space-y-10">
            <div class="flex gap-10 w-full">
                <!-- Notification Tab -->
                <main class="flex-1">
                    <div class="max-w-5xl mx-auto px-4 py-4 flex items-center justify-between">
                        <h1 class="text-2xl font-semibold text-gray-800">Notifications</h1>
                        <button class="text-sm text-blue hover:text-darkblue duration-200">Mark all as read</button>
                    </div>
                    <div class="max-w-5xl mx-auto px-4 py-6">
                        <div class="bg-white shadow-sm border-2 border-gray">

                            <!-- Scroll area (32 rem tall ≈ ~512 px) -->
                            <ul class="h-[32rem] overflow-y-auto scrollbar divide-y divide-gray">

                                <!-- Notification item -->
                                <li class="p-4 flex gap-4 hover:bg-gray duration-200">
                                    <div
                                        class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center">
                                        <!-- Any icons -->
                                        <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-4h2v2H9v-2zm0-8h2v6H9V6z" />
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-sm text-gray-800">
                                            <span class="font-medium">Your name</span> commented on your post
                                        </p>
                                        <p class="text-xs text-gray-500 mt-1">5 minutes ago</p>
                                    </div>
                                    <span class="inline-flex w-3 h-3 rounded-full bg-blue self-center"></span>
                                </li>

                                <!-- Duplicate <li> blocks to simulate many notifications -->
                                <template id="notification-template">
                                    <!-- Same markup as above -->
                                </template>

                            </ul>
                        </div>
                    </div>
                </main>
                <div class="flex-1 space-y-10 overflow-auto">
                    <table id="myTable"
                        class="min-w-full display overflow-scroll whitespace-no-wrap border-collapse w-full">
                        <!-- Table header -->
                        <thead class="bg-primary text-white text-[18px]/7 max-lg:text-[16px]/7">
                            <tr class="header-table">
                                <th class="w-[25.00%]">Research Protocol</th>
                                <th class="w-[25.00%]">Research Title</th>
                                <th class="w-[25.00%]">Reviewer</th>
                                <th class="w-[25.00%]">Status</th>
                            </tr>
                        </thead>
                        <!-- Table body -->
                        <tbody class="text-[17px]/6 max-lg:text-[15px]/6">
                            <tr>
                                <td>2025-001</td>
                                <td>Exploring the Relationship Between Exercise and Cognitive Function in Older Adults
                                </td>
                                <td>Roland Mendel</td>
                                <td>Not reviewed</td>
                            </tr>
                            <tr>
                                <td>2025-001</td>
                                <td>The Impact of Social Media on Adolescent Mental Health: A Systematic Review</td>
                                <td>Janine Labrune</td>
                                <td>Ongoing Review</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</x-superadmin-layout>