@include('organizer.layout')

<body class="font-montserrat text-sm bg-white dark:bg-zinc-900 ">
<div
    class="flex min-h-screen  2xl:max-w-screen-2xl 2xl:mx-auto 2xl:border-x-2 2xl:border-gray-200 dark:2xl:border-zinc-700 ">
    <!-- Left Sidebar -->
    @include('organizer.left_side')
    <!-- /Left Sidebar -->

    <main class=" flex-1 py-10  px-5 sm:px-10 ">

        <p class="mx-auto text-center font-semibold text-md">Create your Event here! </p>

        <section class="mt-2">
            <div class="mx-auto w-full max-w-[880px] bg-white shadow-xl rounded-lg p-6">
                <form action="/createEvent" method="post" enctype="multipart/form-data">
                    @csrf
                    {{--                            <input type="hidden" name="status">--}}
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="title" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Title
                                </label>
                                <input type="text" name="title" placeholder="Event title"
                                       class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                       required/>
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="nbr_place" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Total de places
                                </label>
                                <input type="number" name="nbr_place" id="time" placeholder="Nombre de places"
                                       class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                       required/>
                            </div>
                        </div>
                    </div>

                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/3">
                            <div class="mb-5">
                                <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Date
                                </label>
                                <input type="date" name="date" id="date"
                                       class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                       required/>
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/3">
                            <div class="mb-5">
                                <label for="time" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Time
                                </label>
                                <input type="time" name="time" id="time"
                                       class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                       required/>
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/3">
                            <div class="mb-5">
                                <label for="price" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Price
                                </label>
                                <input type="number" name="price" id="date" placeholder="245.00"
                                       class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                       required/>
                            </div>
                        </div>
                    </div>

                    <div class="-mx-3 flex flex-wrap">
                        {{--                        <input type="hidden" name="category" value="{{ request()->query('category') }}">--}}

                        <div class="w-full px-3 sm:w-1/2">
                            <label for="category" class="mb-3 block text-base font-medium text-[#07074D]">
                                Category
                            </label>
                            <select name="category"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    required>
                                <option value="" selected>Choose a category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <label for="event_type" class="mb-3 block text-base font-medium text-[#07074D]">
                                Where will your event take place?
                            </label>
                            <select name="event_type" id="event_type"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    required>
                                <option value="" selected>Choose an option</option>
                                <option value="venue">Venue</option>
                                <option value="online">Online</option>
                            </select>
                        </div>
                    </div>

                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full py-6 px-3 sm:w-1/2">
                            <div class="mb-5 location-field">
                                <label for="country" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Location
                                </label>
                                <select name="country"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                >
                                    <option value="" selected>Choose a Country</option>
                                    @foreach($data as $item)
                                        <option value="{{ $item }}">{{ $item }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="city py-6 w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="city" class="mb-3 block text-base font-medium text-[#07074D]">
                                    City
                                </label>
                                <input type="text" name="city" placeholder="City"
                                       class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                />
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <label for="description" class="mb-3 block text-base font-medium text-[#07074D]">
                            Description
                        </label>
                        <textarea type="text" name="description" placeholder="Event description"
                                  class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                  required/>
                        </textarea>
                    </div>

                    <!-- component -->
                    <div
                        class="bg-gray-100 h-36 p-8 text-center rounded-lg border-dashed border-2 border-gray-300 hover:border-blue-500 transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-md"
                        id="dropzone">
                        <label for="fileInput" class="cursor-pointer flex flex-col items-center space-y-2">
                            <svg class="w-16 h-10 text-gray-400" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <span class="text-gray-600">Drag and drop your files here</span>
                            <span class="text-gray-500 text-sm">(or click to select)</span>
                        </label>
                        <input type="file" id="fileInput" class="hidden" name="image" multiple>
                    </div>
                    <div class="mt-6 text-center" id="fileList"></div>
                    <script>
                        const dropzone = document.getElementById('dropzone');
                        const fileInput = document.getElementById('fileInput');
                        const fileList = document.getElementById('fileList');

                        dropzone.addEventListener('dragover', (e) => {
                            e.preventDefault();
                            dropzone.classList.add('border-blue-500', 'border-2');
                        });

                        dropzone.addEventListener('dragleave', () => {
                            dropzone.classList.remove('border-blue-500', 'border-2');
                        });

                        dropzone.addEventListener('drop', (e) => {
                            e.preventDefault();
                            dropzone.classList.remove('border-blue-500', 'border-2');

                            const files = e.dataTransfer.files;
                            handleFiles(files);
                        });

                        fileInput.addEventListener('change', (e) => {
                            const files = e.target.files;
                            handleFiles(files);
                        });

                        function handleFiles(files) {
                            fileList.innerHTML = '';

                            for (const file of files) {
                                const listItem = document.createElement('div');
                                listItem.textContent = `${file.name} (${formatBytes(file.size)})`;
                                fileList.appendChild(listItem);
                            }
                        }

                        function formatBytes(bytes) {
                            if (bytes === 0) return '0 Bytes';

                            const k = 1024;
                            const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
                            const i = Math.floor(Math.log(bytes) / Math.log(k));

                            return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
                        }

                    </script>
                    <div>
                        <button type="submit"
                                class="hover:shadow-form rounded-md bg-black py-3 px-8 text-center text-base font-semibold text-white outline-none">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </section>

    </main>

    <!-- Right Sidebar -->
    {{--    @include('organizer.right_side')--}}
    <!-- /Right Sidebar -->
</div>
</body>

<script>
    // Sélectionnez l'élément de sélection du type d'événement
    var eventTypeSelect = document.querySelector('select[name="event_type"]');

    // Sélectionnez l'élément de champ de localisation
    var locationField = document.querySelector('.location-field');
    var city = document.querySelector('.city');

    // Fonction pour afficher ou masquer le champ de localisation en fonction du type d'événement sélectionné
    function toggleLocationField() {
        if (eventTypeSelect.value === 'venue') {
            locationField.style.display = 'block';
            city.style.display = 'block';
        } else {
            locationField.style.display = 'none';
            city.style.display = 'none';
        }
    }

    // Écoutez les changements sur le sélecteur du type d'événement
    eventTypeSelect.addEventListener('change', toggleLocationField);

    // Au chargement initial, vérifiez l'état du sélecteur du type d'événement
    toggleLocationField();
</script>


