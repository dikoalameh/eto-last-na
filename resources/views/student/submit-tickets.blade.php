<<<<<<< HEAD
<<<<<<< HEAD
@section('title', 'Submit Tickets')
=======
<title>Submit Tickets</title>
>>>>>>> b196547aeff59a12333617ee3208ee2cbe1ef1fb
=======
@section('title', 'Submit Tickets')
>>>>>>> 87dc98ec9a8c3dab32310e4a5e37f4fb4de45d42
<x-student-layout>
    <main class="ml-[335px] max-lg:ml-auto p-4">
        <h2 class="max-lg:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            SUBMIT TICKETS
        </h2>
        <br>

        <form action="" class="p-6 rounded border-2 border-gray shadow-md space-y-4">
            <!-- Subject -->
            <div class="mt-1">
                <label for="" class="block font-medium">Subject</label>
                <input type="text" name="" class="w-full mt-1 p-2 border border-gray rounded">
            </div>

            <!-- Category -->
            <div class="mt-1">
                <label for="" class="block font-medium">Category</label>
                <select name="" id="" class="w-full mt-1 p-2 border border-gray rounded">
                    <option value="" disabled selected>-- Choose one --</option>
                    <option value="">1st Category</option>
                </select>
            </div>

            <!-- State your concern -->
            <div class="mt-1">
                <label for="" class="block font-medium">Description</label>
                <textarea name="" id="" rows="10"
                    class="w-full mt-1 p-2 border border-gray rounded resize-none"></textarea>
            </div>

            <!-- Submit button -->
            <button type="submit"
                class="bg-primary hover:bg-secondary text-secondary hover:text-primary px-4 py-2 rounded duration-200 border border-secondary hover:border-primary">
                SUBMIT
            </button>
        </form>
    </main>
</x-student-layout>