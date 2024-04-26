@include('organizer.layout')

<body class="overflow-y-hidden font-montserrat text-sm bg-white dark:bg-zinc-900 ">
<div
    class="flex min-h-screen 2xl:max-w-screen-2xl 2xl:mx-auto 2xl:border-x-2 2xl:border-gray-200 dark:2xl:border-zinc-700 ">
    <!-- Left Sidebar -->
    @include('organizer.left_side')
    <!-- /Left Sidebar -->

    <main class=" flex-1 py-8 px-5 sm:px-10 ">

    @include('organizer.header')
        <section class="mt-9">
            <div class="flex items-center justify-between">
                <span class="font-semibold text-gray-700 text-base dark:text-white">Categories</span>
                <a class="underline hover:text-gray-500 text-gray-600 text-base dark:text-white">View
                    all</a>
            </div>

            <div id="carousel" class="mt-4 grid grid-cols-2 sm:grid-cols-4 gap-x-5 gap-y-5">
                @foreach($categories as $category)
                    <div class="relative rounded-xl overflow-hidden category"> <!-- Ajoutez la classe category ici -->
                        <img src="{{$category->image}}" alt="" class="rounded-full w-full h-full">
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
        </section>

        <section class="mt-9">
            <div class="flex items-center justify-between">
                <span class="font-semibold text-gray-700 text-base dark:text-white">My latest events</span>
                <a href="/myEvents" class="underline hover:text-gray-500 text-gray-600 text-base dark:text-white">View
                    all</a>
            </div>

            <div class="mt-4 grid grid-cols-2 gap-y-5 sm:grid-cols-3 gap-x-5 ">
                @foreach($events as $event)
                    <div class="flex flex-col rounded-xl overflow-hidden aspect-square border dark:border-zinc-600">
                        <img src="{{$event->image}}"
                             class=" h-4/5 object-cover w-full  " alt="">
                        <div
                            class="w-full h-1/5 bg-white dark:bg-zinc-800 dark:text-white px-3 flex items-center justify-between border-t-2 border-t-red-600">
                            <span class="capitalize  font-medium truncate">{{$event->title}}</span>
                            <div class="flex space-x-2 items-center text-xs">
                                <svg class="w-12 h-6" xmlns="http://www.w3.org/2000/svg" width="64" height="32"
                                     viewBox="0 0 64 32" version="1.1">
                                    <g fill="#F5C518">
                                        <rect x="0" y="0" width="100%" height="100%" rx="4"></rect>
                                    </g>
                                    <text class="text-bold text-black font-bold text-xs" x="32" y="21" fill="#000000"
                                          font-family="Arial" font-size="10px" text-anchor="middle">Buy Now!
                                    </text>
                                </svg>

                                <span class="font-bold">{{$event->price}} DH</span>
                            </div>
                        </div>
                        <div
                            class="w-full h-1/5 bg-white dark:bg-zinc-800 dark:text-white px-3 flex items-center justify-between">
                            <div class="flex justify-between items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     version="1.1" width="25" height="25" viewBox="0 0 256 256" xml:space="preserve">
                                <defs>
                                </defs>
                                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                       transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                        <path
                                            d="M 45 1.802 c 16.583 0 30.075 13.491 30.075 30.075 c 0 7.102 -2.538 14.004 -7.145 19.434 L 45 78.317 L 22.07 51.311 c -4.608 -5.43 -7.145 -12.332 -7.145 -19.434 C 14.925 15.294 28.417 1.802 45 1.802 M 45 45.692 c 8.222 0 14.912 -6.689 14.912 -14.912 c 0 -8.222 -6.689 -14.912 -14.912 -14.912 S 30.088 22.557 30.088 30.78 C 30.088 39.002 36.778 45.692 45 45.692 M 45 0 C 27.395 0 13.123 14.272 13.123 31.877 c 0 7.86 2.858 15.043 7.573 20.6 L 45 81.101 l 24.304 -28.624 c 4.716 -5.558 7.573 -12.741 7.573 -20.6 C 76.877 14.272 62.605 0 45 0 L 45 0 z M 45 43.889 c -7.24 0 -13.11 -5.869 -13.11 -13.11 c 0 -7.24 5.869 -13.11 13.11 -13.11 s 13.11 5.869 13.11 13.11 C 58.11 38.02 52.24 43.889 45 43.889 L 45 43.889 z"
                                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                                        <path
                                            d="M 58.814 71.531 l -1.575 1.575 c 9.772 1.532 15.583 4.707 15.583 7.094 c 0 3.261 -10.838 7.997 -27.822 7.997 S 17.178 83.461 17.178 80.2 c 0 -2.387 5.811 -5.562 15.583 -7.094 l -1.575 -1.575 c -9.401 1.643 -15.81 4.907 -15.81 8.669 c 0 5.412 13.263 9.8 29.625 9.8 c 16.361 0 29.625 -4.388 29.625 -9.8 C 74.625 76.439 68.215 73.174 58.814 71.531 z"
                                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                                    </g>
                            </svg>
                                @if($event->event_type == 'online')
                                    <span class="capitalize font-medium truncate">Online</span>
                                @else
                                    <span class="capitalize font-medium truncate">{{$event->country}}</span>,
                                    <span class="capitalize font-medium truncate">{{$event->city}}</span>

                                @endif                            </div>
                            <div>
                                <span class="capitalize font-sm truncate">Status: {{ $event->status}}</span>
                                {{--                                <span class="capitalize font-medium truncate">{{ \Carbon\Carbon::parse($event->date)->translatedFormat('j F Y') }}</span>--}}
                                {{--                                <span class="capitalize font-medium truncate">{{ \Carbon\Carbon::parse($event->time)->format('h:i A') }}</span>--}}
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>

    <!-- Right Sidebar -->
    @include('organizer.right_side')
    <!-- /Right Sidebar -->
</div>

</body>
<script>
    let currentIndex = 0;
    const itemsPerPage = 4;
    const categories = document.querySelectorAll('.category');

    function showPreviousCategories() {
        if (currentIndex > 0) {
            currentIndex -= itemsPerPage;
            if (currentIndex < 0) currentIndex = 0;
            updateCarousel();
        }
    }

    function showNextCategories() {
        const maxIndex = categories.length - itemsPerPage;
        if (currentIndex < maxIndex) {
            currentIndex += itemsPerPage;
            if (currentIndex > maxIndex) currentIndex = maxIndex;
            updateCarousel();
        }
    }

    function updateCarousel() {
        const carousel = document.getElementById('carousel');
        carousel.innerHTML = '';

        for (let i = currentIndex; i < currentIndex + itemsPerPage && i < categories.length; i++) {
            carousel.appendChild(categories[i]);
        }
    }
</script>

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
