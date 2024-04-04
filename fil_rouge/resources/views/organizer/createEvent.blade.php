@include('organizer.layout')

<body class="font-montserrat text-sm bg-white dark:bg-zinc-900 ">
<div
    class="flex min-h-screen  2xl:max-w-screen-2xl 2xl:mx-auto 2xl:border-x-2 2xl:border-gray-200 dark:2xl:border-zinc-700 ">
    <!-- Left Sidebar -->
    @include('organizer.left_side')
    <!-- /Left Sidebar -->

    <main class=" flex-1 py-10  px-5 sm:px-10 ">

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

        <section>
            <nav class="flex space-x-6 text-gray-400 font-medium">
                <a href="#" class="hover:text-gray-700 dark:hover:text-white">TV Series</a>
                <a href="#" class="text-gray-700 dark:text-white font-semibold">Movies</a>
                <a href="#" class="hover:text-gray-700 dark:hover:text-white ">Animes</a>
            </nav>
        </section>

        <section class="mt-9">
            <div class="mx-auto w-full max-w-[880px] bg-white shadow-xl rounded-lg p-6">
                <form action="/createEvent" method="post" enctype="multipart/form-data">
                    @csrf
                    {{--                            <input type="hidden" name="status">--}}
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/3">
                            <div class="mb-5">
                                <label for="title" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Title
                                </label>
                                <input type="text" name="title" placeholder="Event title"
                                       class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                       required/>
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/3">
                            <div class="mb-5">
                                <label for="location" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Location
                                </label>
                                <select name="location"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        required>
                                    <option value="" selected>Choose a location</option>
                                    @foreach($data as $item)
                                        <option value="{{ $item->ville }}">{{ $item->ville }}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/3">
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
{{--                        <div class="w-full px-3 sm:w-1/2">--}}
{{--                            <label for="location" class="mb-3 block text-base font-medium text-[#07074D]">--}}
{{--                                Category--}}
{{--                            </label>--}}
{{--                            <select name="category"--}}
{{--                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"--}}
{{--                                    required>--}}
{{--                                <option value="" selected>Choose a category</option>--}}
{{--                                @foreach($categories as $category)--}}
{{--                                    <option value="{{ $category->id }}">{{ $category->name }}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}

{{--                        </div>--}}
                        <div class="w-full px-3 sm:w-1/2">
                            <label for="location" class="mb-3 block text-base font-medium text-[#07074D]">
                                Where will your event take place?
                            </label>
                            <select name="event_type"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    required>
                                <option value="" selected>Choose an option</option>
                                <option value="venue">Venue</option>
                                <option value="online">Online</option>

                            </select>

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
                        <button
                            class="hover:shadow-form rounded-md bg-black py-3 px-8 text-center text-base font-semibold text-white outline-none">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </section>

    </main>

    <!-- Right Sidebar -->
    @include('organizer.right_side')
    <!-- /Right Sidebar -->
</div>
</body>


