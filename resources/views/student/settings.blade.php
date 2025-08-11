@section('title', 'Settings')
<x-student-layout>
    <main class="ml-[335px] max-lg:ml-0">
        <div class="p-6 max-md:px-0 space-y-10">
            <div class="py-12 max-md:m-3">
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
        </div>
    </main>
</x-student-layout>