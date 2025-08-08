<<<<<<< HEAD
<<<<<<< HEAD
@section('title', 'Permission Control')
=======
<title>Permission Control</title>
>>>>>>> b196547aeff59a12333617ee3208ee2cbe1ef1fb
=======
@section('title', 'Permission Control')
>>>>>>> 87dc98ec9a8c3dab32310e4a5e37f4fb4de45d42
<x-superadmin-layout>
    <!-- Main Content -->
    <main class="ml-[335px] max-lg:ml-auto p-4">
        <h2 class="max-lg:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            PERMISSION CONTROLS
        </h2>
        <br>

        <button type="button" id="openModalBtn"
            class="m-auto block border-2 border-secondary px-5 py-3 bg-primary font-bold text-white rounded-md hover:border-primary hover:bg-secondary hover:text-primary duration-200">Add
            User
        </button>

        <!-- Modal form -->
        <div id="modalOverlay" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50">
            <!-- Modal layout -->
            <div class="bg-white rounded-md mt-6 px-6 py-4 border-4 border-gray">
                <button id="closeModalBtn"
                    class="absolute top-2 right-2 text-gray hover:text-black text-xl">&times;</button>
                <h2 class="mb-6 font-semibold text-2xl">Add User</h2>
                <!-- Form -->
<<<<<<< HEAD
<<<<<<< HEAD
                <form method="POST" action="{{ route('superadmin.store') }}" id="modalForm">
                    @csrf
=======
                <form method="POST" action="" id="modalForm">
>>>>>>> b196547aeff59a12333617ee3208ee2cbe1ef1fb
=======
                <form method="POST" action="" id="modalForm">
>>>>>>> 87dc98ec9a8c3dab32310e4a5e37f4fb4de45d42
                    <!-- Full name for another user -->
                    <div class="mt-2">
                        <x-input-label for="adminName" :value="__('Full name')" />
                        <div class="flex space-x-2">
                            <!-- Last name -->
                            <div class="w-1/3">
<<<<<<< HEAD
<<<<<<< HEAD
                                <x-text-input id="adminLname" class="block mt-1 w-full" type="text"
                                    name="adminLname" :value="old('adminLname')" required autofocus
                                    autocomplete="adminLname" placeholder="Last name" />
                                <x-input-error :messages="$errors->get('adminLname')" class="mt-2" />
                            </div>
                            <!-- First name -->
                            <div class="w-1/3">
                                <x-text-input id="adminFname" class="block mt-1 w-full" type="text"
                                    name="adminFname" :value="old('adminFname')" required autofocus
                                    autocomplete="adminFname" placeholder="First name" />
                                <x-input-error :messages="$errors->get('adminFname')" />
                            </div>
                            <!-- Middle Initial -->
                            <div class="w-1/3">
                                <x-text-input id="adminMI" class="block mt-1 w-full" type="text"
                                    name="adminMI" maxlength="2" :value="old('adminMI')" required
                                    autofocus autocomplete="adminMI" placeholder="Middle Initial" />
                                <x-input-error :messages="$errors->get('adminMI')" class="mt-2" />
=======
=======
>>>>>>> 87dc98ec9a8c3dab32310e4a5e37f4fb4de45d42
                                <x-text-input id="superadmin_lname" class="block mt-1 w-full" type="text"
                                    name="superadmin_lname" :value="old('superadmin_lname')" required autofocus
                                    autocomplete="superadmin_lname" placeholder="Last name" />
                                <x-input-error :messages="$errors->get('pi_lname')" class="mt-2" />
                            </div>
                            <!-- First name -->
                            <div class="w-1/3">
                                <x-text-input id="superadmin_fname" class="block mt-1 w-full" type="text"
                                    name="superadmin_fname" :value="old('superadmin_fname')" required autofocus
                                    autocomplete="superadmin_fname" placeholder="First name" />
                                <x-input-error :messages="$errors->get('pi_fname')" />
                            </div>
                            <!-- Middle Initial -->
                            <div class="w-1/3">
                                <x-text-input id="superadmin_mname" class="block mt-1 w-full" type="text"
                                    name="superadmin_mname" maxlength="4" :value="old('superadmin_mname')" required
                                    autofocus autocomplete="superadmin_mname" placeholder="Middle Initial" />
                                <x-input-error :messages="$errors->get('superadmin_mname')" class="mt-2" />
<<<<<<< HEAD
>>>>>>> b196547aeff59a12333617ee3208ee2cbe1ef1fb
=======
>>>>>>> 87dc98ec9a8c3dab32310e4a5e37f4fb4de45d42
                            </div>
                        </div>
                    </div>

                    <!-- Classify users -->
                    <div class="mt-2">
                        <x-input-label for="user" :value="__('Type of user')" />
<<<<<<< HEAD
<<<<<<< HEAD
                        <x-combobox-user-type id="adminAccess" name="adminAccess" class="mt-1 w-full" />
                        <x-input-error :messages="$errors->get('adminAccess')" class="mt-2" />
=======
                        <x-combobox-user-type id="user" name="user" class="mt-1 w-full" />
                        <x-input-error :messages="$errors->get('user')" class="mt-2" />
>>>>>>> b196547aeff59a12333617ee3208ee2cbe1ef1fb
=======
                        <x-combobox-user-type id="user" name="user" class="mt-1 w-full" />
                        <x-input-error :messages="$errors->get('user')" class="mt-2" />
>>>>>>> 87dc98ec9a8c3dab32310e4a5e37f4fb4de45d42
                    </div>

                    <!-- Password -->
                    <div class="mt-2">
                        <x-input-label for="adminPassword" :value="__('Password')" />
                        <x-text-input id="adminPassword" class="block mt-1 w-full" type="password" name="adminPassword" required
                            autocomplete="adminPassword" placeholder="Password" />
                        <x-input-error :messages="$errors->get('adminPassword')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-2">
                        <x-input-label for="adminPassword" :value="__('Confirm Password')" />
<<<<<<< HEAD
<<<<<<< HEAD
                        <x-text-input id="adminPassword_confirmation" class="block mt-1 w-full" type="password"
                            name="adminPassword_confirmation" required autocomplete="adminPassword"
                            placeholder="Confirm Password" />
                        <x-input-error :messages="$errors->get('adminPassword_confirmation')" class="mt-2" />
=======
=======
>>>>>>> 87dc98ec9a8c3dab32310e4a5e37f4fb4de45d42
                        <x-text-input id="adminPassword" class="block mt-1 w-full" type="password"
                            name="adminPassword" required autocomplete="adminPassword"
                            placeholder="Confirm Password" />
                        <x-input-error :messages="$errors->get('adminPassword')" class="mt-2" />
<<<<<<< HEAD
>>>>>>> b196547aeff59a12333617ee3208ee2cbe1ef1fb
=======
>>>>>>> 87dc98ec9a8c3dab32310e4a5e37f4fb4de45d42
                    </div>

                    <!-- Email Address -->
                    <div class="mt-2">
                        <x-input-label for="email" :value="__('Email')" />
<<<<<<< HEAD
<<<<<<< HEAD
                        <x-text-input id="adminEmail" class="block mt-1 w-full" type="email" name="adminEmail"
                            :value="old('adminEmail')" required autocomplete="username" placeholder="you@example.com" />
                        <x-input-error :messages="$errors->get('adminEmail')" class="mt-2" />
=======
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autocomplete="username" placeholder="you@example.com" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
>>>>>>> b196547aeff59a12333617ee3208ee2cbe1ef1fb
=======
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autocomplete="username" placeholder="you@example.com" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
>>>>>>> 87dc98ec9a8c3dab32310e4a5e37f4fb4de45d42
                    </div>

                    <!-- Button -->
                    <div class="flex justify-end">
                        <x-primary-button class="mt-4">
                            Submit
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>

        <table id="myTable" class="min-w-full display overflow-scroll whitespace-no-wrap border-collapse w-full">
            <!-- Table header -->
            <thead class="bg-[var(--primary)] text-white text-[18px]/7 max-lg:text-[16px]">
                <tr class="header-table">
                    <th class="w-[20.00%]">Account Name</th>
                    <th class="w-[20.00%]">Username</th>
                    <th class="w-[20.00%]">Access</th>
                    <th class="w-[20.00%]">Role</th>
                    <th class="w-[20.00%]">Date Modified</th>
                </tr>
            </thead>
            <!-- Table body -->
            <tbody class="text-[17px]/6 max-lg:text-[15px]">
                <tr>
                    <td>Name M.I., Surname</td>
                    <td>username123</td>
                    <td>N/A</td>
                    <td>IACUC Admin</td>
                    <td>7/2/2025<br>13:24:10</td>
                </tr>
            </tbody>
        </table>
    </main>
</x-superadmin-layout>
<script>
    const openBtn = document.getElementById('openModalBtn');
    const closeBtn = document.getElementById('closeModalBtn');
    const modal = document.getElementById('modalOverlay');

    openBtn.addEventListener('click', () => {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });

    closeBtn.addEventListener('click', () => {
        modal.classList.add('hidden');
    });

    // Optional: close modal when clicking outside the modal content
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.add('hidden');
        }
    });
</script>