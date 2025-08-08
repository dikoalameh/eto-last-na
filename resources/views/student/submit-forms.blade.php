<<<<<<< HEAD
<<<<<<< HEAD
@section('title', 'Submit Forms')
=======
<title>Submit Forms</title>
>>>>>>> b196547aeff59a12333617ee3208ee2cbe1ef1fb
=======
@section('title', 'Submit Forms')
>>>>>>> 87dc98ec9a8c3dab32310e4a5e37f4fb4de45d42
<x-student-layout>
    <!-- Main Content -->
    <main class="ml-[335px] max-lg:ml-auto p-4">
        <h2 class="max-lg:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            SUBMIT FORMS
        </h2>
        <br>
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 87dc98ec9a8c3dab32310e4a5e37f4fb4de45d42
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
<<<<<<< HEAD
=======

        <div class="flex justify-center items-center p-6 w-full min-h-[30vh]">
            <div class="max-w-xl p-6 w-full border-2 border-solid border-darkgray rounded-md bg-lightgray">
                <div class="">
                    <form action="">
                        <input type="file" name="uploadForms" id="upload" accept=".doc,.docx,.pdf" multiple hidden>
                        <label for="upload"
                            class="w-full min-h-[100px] flex flex-col justify-center items-center border-2 border-dashed border-primary cursor-pointer">
                            <span class="text-[50px] text-primary"><i class="bi bi-cloud-arrow-up-fill"></i></span>
                            <p class="text-[18px] text-primary">Click to Upload File</p>
                        </label>
                    </form>
                </div>
                <div id="fileWrapper">
                    <h3 class="my-[30px] text-[20px] font-bold text-primary">Uploaded Documents <label for="" class="text-[15px]">(.docx, .doc, or .pdf)</label></h3>
                    <div
                        class="flex justify-between items-center my-[10px] px-3 py-1 shadow-md bg-gray border border-darkgray">
                        <div class="flex flex-wrap gap-[10px]">
                            <h3 class="font-semibold m-0">dikoalam.pdf</h3>
                        </div>
                        <div class="right">
                            <span class="cursor-pointer text-primary text-[25px]">&#215;</span>
>>>>>>> b196547aeff59a12333617ee3208ee2cbe1ef1fb
=======
>>>>>>> 87dc98ec9a8c3dab32310e4a5e37f4fb4de45d42
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<<<<<<< HEAD
<<<<<<< HEAD
</x-student-layout>
=======
</x-student-layout>
<script>
    // pede nyo icomment muna to, nasa sa inyo yan HAHAHAHA
    window.addEventListener("load", () => {
        const input = document.getElementById('upload');
        const filewrapper = document.getElementById('fileWrapper');
        
        // uploading multiple files at the same time
        input.addEventListener("change", (e) => {
            const files = e.target.files;
            for (let i = 0; i < files.length; i++) {
                let filename = files[i].name;
                let filetype = files[i].name.split(".").pop();
                fileshow(filename, filetype);
            }
        });

        const fileshow = (filename, filetype) => {
            // file box
            const showfileboxElem = document.createElement("div");
            showfileboxElem.classList.add("flex", "justify-between", "items-center", "my-[10px]", "px-3", "py-1", "shadow-md", "bg-gray", "border", "border-darkgray");

            // left side
            const leftElem = document.createElement("div");
            leftElem.classList.add("flex", "items-center", "flex-wrap", "gap-[10px]")

            // file title
            const filetitleElem = document.createElement("h3");
            filetitleElem.classList.add("font-semibold", "m-0");
            filetitleElem.innerHTML = filename;

            // right side(delete button)
            const rightElem = document.createElement("div");
            rightElem.classList.add("right");
            const crossElem = document.createElement("span");
            crossElem.classList.add("cursor-pointer", "text-primary", "text-[25px]");
            crossElem.innerHTML = "&#215;";

            // adds the content to right side of the file box
            rightElem.append(crossElem);

            // adds the content to the left side of the file box
            leftElem.append(filetitleElem);

            // adds the right and left content of the file box
            showfileboxElem.append(leftElem);
            showfileboxElem.append(rightElem);

            // adds the file box
            filewrapper.append(showfileboxElem);
        }
    });
</script>
>>>>>>> b196547aeff59a12333617ee3208ee2cbe1ef1fb
=======
</x-student-layout>
>>>>>>> 87dc98ec9a8c3dab32310e4a5e37f4fb4de45d42
