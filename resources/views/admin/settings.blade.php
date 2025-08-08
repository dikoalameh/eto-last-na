<<<<<<< HEAD
<<<<<<< HEAD
@section('title', 'Settings')
<x-admin-layout>
    <main class="ml-[335px] max-lg:ml-0 max-md:m-3">
=======
<title>Settings</title>
<x-admin-layout>
    <main class="ml-[335px] max-lg:ml-0">
>>>>>>> b196547aeff59a12333617ee3208ee2cbe1ef1fb
=======
@section('title', 'Settings')
<x-admin-layout>
    <main class="ml-[335px] max-lg:ml-0">
>>>>>>> 87dc98ec9a8c3dab32310e4a5e37f4fb4de45d42
        <div class="py-12">
            <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
                <!-- Update Profile Information -->
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <!-- Change Password -->
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-admin-layout>