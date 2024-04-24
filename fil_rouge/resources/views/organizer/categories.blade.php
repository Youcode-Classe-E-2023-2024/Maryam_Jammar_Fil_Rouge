@include('organizer.layout')

<body class="overflow-y-hidden font-montserrat text-sm bg-white dark:bg-zinc-900 ">
<div
    class="flex min-h-screen 2xl:max-w-screen-2xl 2xl:mx-auto 2xl:border-x-2 2xl:border-gray-200 dark:2xl:border-zinc-700 ">
    <!-- Left Sidebar -->
    @include('organizer.left_side')
    <!-- /Left Sidebar -->

    <main class=" flex-1 py-8 px-5 sm:px-10 ">

        <header class=" font-bold text-lg flex items-center  gap-x-3 md:hidden mb-12 ">
                <span class="mr-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-gray-700 dark:text-white" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7"/>
                      </svg>
                </span>
            <svg class="h-8 w-8 fill-red-600 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                    d="M10 15.5v-7c0-.41.47-.65.8-.4l4.67 3.5c.27.2.27.6 0 .8l-4.67 3.5c-.33.25-.8.01-.8-.4Zm11.96-4.45c.58 6.26-4.64 11.48-10.9 10.9 -4.43-.41-8.12-3.85-8.9-8.23 -.26-1.42-.19-2.78.12-4.04 .14-.58.76-.9 1.31-.7v0c.47.17.75.67.63 1.16 -.2.82-.27 1.7-.19 2.61 .37 4.04 3.89 7.25 7.95 7.26 4.79.01 8.61-4.21 7.94-9.12 -.51-3.7-3.66-6.62-7.39-6.86 -.83-.06-1.63.02-2.38.2 -.49.11-.99-.16-1.16-.64v0c-.2-.56.12-1.17.69-1.31 1.79-.43 3.75-.41 5.78.37 3.56 1.35 6.15 4.62 6.5 8.4ZM5.5 4C4.67 4 4 4.67 4 5.5 4 6.33 4.67 7 5.5 7 6.33 7 7 6.33 7 5.5 7 4.67 6.33 4 5.5 4Z"></path>
            </svg>
            <div class="tracking-wide dark:text-white flex-1">MMovie<span class="text-red-600">.</span></div>

            <div class="relative items-center content-center flex ml-2">
                    <span class="text-gray-400 absolute left-4 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </span>
                <input type="text"
                       class="text-xs ring-1 bg-transparent ring-gray-200 dark:ring-zinc-600 focus:ring-red-300 pl-10 pr-5 text-gray-600 dark:text-white  py-3 rounded-full w-full outline-none focus:ring-1"
                       placeholder="Search ...">
            </div>
        </header>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
            rel="stylesheet">

        <style>
            body {
                font-family: 'Plus Jakarta Sans', sans-serif;
            }
        </style>

        <section class="mt-9">
            <div class="flex items-center justify-between">
                <span class="font-semibold text-gray-700 text-base dark:text-white">Categories</span>
            </div>

            <div id="carousel" class="mt-4 grid grid-cols-2 sm:grid-cols-6 gap-x-5 gap-y-5">
                @foreach($categories as $category)
                    <div class="mx-auto relative rounded-xl overflow-hidden category"> <!-- Ajoutez la classe category ici -->
                        <img src="{{$category->image}}" alt="" class="rounded-full object-cover w-40 h-40">
                        <div class="absolute top-0 h-full w-full p-3 flex flex-col justify-between">

                            <a data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                               data-category-id="{{ $category->id }}"
                               class="p-2.5 bg-gray-800/80 rounded-lg text-white self-end hover:bg-red-600/80">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </a>

                            <div class="self-center flex flex-col items-center space-y-2">
                                <span
                                    class="capitalize text-white font-medium drop-shadow-md">{{$category->name}}</span>
                            </div>
                        </div>
                    </div>


                    <!-- Main modal -->
                    <div id="crud-modal" tabindex="-1" aria-hidden="true"
                         class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-2 w-3/4 max-w-3/4 max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-3 md:p-3 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        Create Your Event in {{ $category->name }} Category.
                                    </h3>
                                    <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="crud-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                             fill="none"
                                             viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <form action="/createEvent" method="post" enctype="multipart/form-data" class="p-4">
                                    @csrf
                                    <input type="hidden" name="category" id="category" value="">
                                    <div class="-mx-3 flex flex-wrap">
                                        <div class="w-full px-3 sm:w-1/3">
                                            <div class="mb-5">
                                                <label for="title"
                                                       class="mb-3 block text-base font-medium text-[#07074D]">
                                                    Title
                                                </label>
                                                <input type="text" name="title" placeholder="Event title"
                                                       class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                       required/>
                                            </div>
                                        </div>
                                        <div class="w-full px-3 sm:w-1/3">
                                            <div class="mb-5">
                                                <label for="nbr_place"
                                                       class="mb-3 block text-base font-medium text-[#07074D]">
                                                    Total de places
                                                </label>
                                                <input type="number" name="nbr_place" id="time"
                                                       placeholder="Nombre de places"
                                                       class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                       required/>
                                            </div>
                                        </div>
                                        <div class="w-full px-3 sm:w-1/3">
                                            <label for="event_type"
                                                   class="mb-3 block text-base font-medium text-[#07074D]">
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
                                        <div class="w-full px-3 sm:w-1/2">
                                            <div class="mb-5 location-field">
                                                <label for="country"
                                                       class="mb-3 block text-base font-medium text-[#07074D]">
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

                                        <div class="city w-full px-3 sm:w-1/2">
                                            <div class="mb-5">
                                                <label for="city"
                                                       class="mb-3 block text-base font-medium text-[#07074D]">
                                                    City
                                                </label>
                                                <input type="text" name="city" placeholder="City"
                                                       class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="-mx-3 flex flex-wrap">
                                        <div class="w-full px-3 sm:w-1/3">
                                            <div class="mb-5">
                                                <label for="date"
                                                       class="mb-3 block text-base font-medium text-[#07074D]">
                                                    Date
                                                </label>
                                                <input type="date" name="date" id="date"
                                                       class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                       required/>
                                            </div>
                                        </div>
                                        <div class="w-full px-3 sm:w-1/3">
                                            <div class="mb-5">
                                                <label for="time"
                                                       class="mb-3 block text-base font-medium text-[#07074D]">
                                                    Time
                                                </label>
                                                <input type="time" name="time" id="time"
                                                       class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                       required/>
                                            </div>
                                        </div>
                                        <div class="w-full px-3 sm:w-1/3">
                                            <div class="mb-5">
                                                <label for="price"
                                                       class="mb-3 block text-base font-medium text-[#07074D]">
                                                    Price
                                                </label>
                                                <input type="number" name="price" id="date" placeholder="245.00"
                                                       class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                       required/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <label for="description"
                                               class="mb-3 block text-base font-medium text-[#07074D]">
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
                                        <label for="fileInput"
                                               class="cursor-pointer flex flex-col items-center space-y-2">
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
                        </div>
                    </div>

                @endforeach
            </div>
            <div class="flex-col justify-between items-center mt-4 p-4">
                {{ $categories->links() }}
            </div>
        </section>

    </main>
</div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
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

{{--create event in this category--}}
<script>
    // Récupérer tous les boutons "+"
    const addButtons = document.querySelectorAll('[data-modal-target="crud-modal"]');

    // Parcourir chaque bouton "+"
    addButtons.forEach(button => {
        // Ajouter un écouteur d'événements au clic sur chaque bouton "+"
        button.addEventListener('click', () => {
            // Récupérer l'ID de la catégorie à partir de l'attribut data-category-id
            const categoryId = button.getAttribute('data-category-id');
            // Mettre à jour la valeur du champ caché category_id dans le formulaire
            document.getElementById('category').value = categoryId;
        });
    });
</script>
