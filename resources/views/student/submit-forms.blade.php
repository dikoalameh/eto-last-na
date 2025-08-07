@section('title', 'Submit Forms')
<x-student-layout>
    <!-- Main Content -->
    <main class="ml-[335px] max-lg:ml-auto p-4">
        <h2 class="max-lg:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            SUBMIT FORMS
        </h2>
        <br>
        <div class="p-6 space-y-10">
            <div class="my-4">
                <h2 class="mb-4 font-semibold text-[20px]">Deficiencies</h2>
                <div class="hover:bg-gray my-3 bg-lightgray p-4 rounded-lg flex justify-between items-center duration-200">
                    <div class="block items-center flex-wrap gap-[10px]">
                        <h2 class="text-xl font-medium">FORM 2(A)</h2>
                        <p class="text-sm">Due at 08/10/2025</p>
                        <label for="" class="mt-1 text-md">STUDY PROTOCOL REVIEW CHECKLIST</label>
                    </div>
                    <div class="mr-4">
                        <div class="">
                            <input type="file" name="" id="upload" accept=".doc,.docx,.pdf" multiple hidden>
                            <label for="upload" class="cursor-pointer">
                                <i class="text-3xl bi bi-cloud-arrow-up-fill"></i>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="hover:bg-gray my-3 bg-lightgray p-4 rounded-lg flex justify-between items-center duration-200">
                    <div class="block items-center flex-wrap gap-[10px]">
                        <h2 class="text-xl font-medium">FORM 2(B)</h2>
                        <p class="text-sm">Due at 08/10/2025</p>
                        <label for="" class="mt-1 text-md">APPLICATION FOR INITIAL REVIEW</label>
                    </div>
                    <div class="mr-4">
                        <div class="">
                            <input type="file" name="" id="upload" accept=".doc,.docx,.pdf" multiple hidden>
                            <label for="upload" class="cursor-pointer">
                                <i class="text-3xl bi bi-cloud-arrow-up-fill"></i>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="hover:bg-gray my-3 bg-lightgray p-4 rounded-lg flex justify-between items-center duration-200">
                    <div class="block items-center flex-wrap gap-[10px]">
                        <h2 class="text-xl font-medium">FORM 2(C)</h2>
                        <p class="text-sm">Due at 08/10/2025</p>
                        <label for="" class="mt-1 text-md">INFORMED CONSENT FORM</label>
                    </div>
                    <div class="mr-4">
                        <div class="">
                            <input type="file" name="" id="upload" accept=".doc,.docx,.pdf" multiple hidden>
                            <label for="upload" class="cursor-pointer">
                                <i class="text-3xl bi bi-cloud-arrow-up-fill"></i>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-student-layout>