@include('admin.layout')

<body class="text-gray-800 font-inter">
@include('admin.side')

<main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-200 min-h-screen transition-all main">
    @include('admin.nav')
    <!-- Content -->
    <div class="p-4">
        <main>
            <div class="space-y-2 text-center bg-white p-4">
                <h2 class="text-2xl font-bold">Events Requests</h2>
                <p class="font-serif text-sm dark:text-gray-400">Here you can approve or decline events.</p>

                <div class="grid mt-8 pt-4 gap-8 grid-cols-1 md:grid-cols-2 xl:grid-cols-2">
                    @foreach($events as $event)
                        <div class="flex flex-col">
                            <div class="shadow-md rounded-3xl p-4">
                                <div class="flex-none lg:flex">
                                    <div class=" h-full w-full lg:h-48 lg:w-48   lg:mb-0 mb-3">
                                        <img
                                            src="{{$event->image}}"
                                            alt="Just a flower"
                                            class=" w-full  object-scale-down lg:object-cover  lg:h-48 rounded-2xl">
                                    </div>
                                    <div class="flex-auto ml-3 justify-evenly py-2">
                                        <div class="flex flex-wrap ">
                                            <h2 class="flex-auto text-lg font-medium">{{$event->title}}</h2>
                                        </div>
                                        <p class="mt-3"></p>
                                        <div class="flex py-4 px-3 text-sm text-gray-500">
                                            <div class="flex-1 inline-flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     class="h-5 w-5 mr-3 text-gray-400" fill="none"
                                                     viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                </svg>
                                                <p class="">{{$event->location}}</p>
                                            </div>
{{--                                            <div class="flex-1 inline-flex items-center">--}}
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     class="h-5 w-5 mr-2 text-gray-400" fill="none"
                                                     viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                                <p class="">{{$event->date}}</p>
{{--                                            </div>--}}
                                        </div>
                                        <div class="flex p-4 pb-2 border-t border-gray-200 "></div>
                                        <div class="flex space-x-3 text-sm font-medium">
                                            <div class="flex-auto flex space-x-3">
                                                <button
                                                    class="mb-2 md:mb-0 bg-white px-4 py-2 shadow-sm tracking-wider border text-gray-600 rounded-full hover:bg-gray-100 inline-flex items-center space-x-2 ">
                                                    <span class="text-green-400 hover:text-green-500 rounded-lg">
                                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                             xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256"
                                                             height="256" viewBox="0 0 256 256" xml:space="preserve">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                                               transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                                                <path
                                                                    d="M 8 90 c -2.047 0 -4.095 -0.781 -5.657 -2.343 c -3.125 -3.125 -3.125 -8.189 0 -11.314 l 74 -74 c 3.125 -3.124 8.189 -3.124 11.314 0 c 3.124 3.124 3.124 8.189 0 11.313 l -74 74 C 12.095 89.219 10.047 90 8 90 z"
                                                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;"
                                                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                                                                <path
                                                                    d="M 82 90 c -2.048 0 -4.095 -0.781 -5.657 -2.343 l -74 -74 c -3.125 -3.124 -3.125 -8.189 0 -11.313 c 3.124 -3.124 8.189 -3.124 11.313 0 l 74 74 c 3.124 3.125 3.124 8.189 0 11.314 C 86.095 89.219 84.048 90 82 90 z"
                                                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;"
                                                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <span>Decline</span>
                                                </button>
                                            </div>
                                            <button
                                                class="mb-2 md:mb-0 bg-white px-4 py-2 shadow-sm tracking-wider border text-gray-600 rounded-full hover:bg-gray-100 inline-flex items-center space-x-2 ">
                                                    <span class="text-green-400 hover:text-green-500 rounded-lg">
                                                       <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                            width="256"
                                                            height="256" viewBox="0 0 256 256" xml:space="preserve">

                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                                               transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                                                <path
                                                                    d="M 89.122 3.486 L 89.122 3.486 c -2.222 -3.736 -7.485 -4.118 -10.224 -0.742 L 33.202 59.083 c -1.118 1.378 -3.245 1.303 -4.262 -0.151 L 17.987 43.291 c -3.726 -5.322 -11.485 -5.665 -15.666 -0.693 l 0 0 c -2.883 3.428 -3.102 8.366 -0.533 12.036 L 24.206 86.65 c 2.729 3.897 8.503 3.89 11.222 -0.014 l 6.435 -9.239 L 88.87 10.265 C 90.28 8.251 90.378 5.598 89.122 3.486 z"
                                                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(6,188,66); fill-rule: nonzero; opacity: 1;"
                                                                    transform=" matrix(1 0 0 1 0 0) "
                                                                    stroke-linecap="round"/>
                                                            </g>
                                                            </svg>
                                                    </span>
                                                <span>Approve</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="flex flex-col px-4 pt-4">
                    {{ $events->links() }}
                </div>

            </div>
        </main>

    </div>
    <!-- End Content -->
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // start: Sidebar
    const sidebarToggle = document.querySelector('.sidebar-toggle')
    const sidebarOverlay = document.querySelector('.sidebar-overlay')
    const sidebarMenu = document.querySelector('.sidebar-menu')
    const main = document.querySelector('.main')
    sidebarToggle.addEventListener('click', function (e) {
        e.preventDefault()
        main.classList.toggle('active')
        sidebarOverlay.classList.toggle('hidden')
        sidebarMenu.classList.toggle('-translate-x-full')
    })
    sidebarOverlay.addEventListener('click', function (e) {
        e.preventDefault()
        main.classList.add('active')
        sidebarOverlay.classList.add('hidden')
        sidebarMenu.classList.add('-translate-x-full')
    })
    document.querySelectorAll('.sidebar-dropdown-toggle').forEach(function (item) {
        item.addEventListener('click', function (e) {
            e.preventDefault()
            const parent = item.closest('.group')
            if (parent.classList.contains('selected')) {
                parent.classList.remove('selected')
            } else {
                document.querySelectorAll('.sidebar-dropdown-toggle').forEach(function (i) {
                    i.closest('.group').classList.remove('selected')
                })
                parent.classList.add('selected')
            }
        })
    })
    // end: Sidebar


    // start: Popper
    const popperInstance = {}
    document.querySelectorAll('.dropdown').forEach(function (item, index) {
        const popperId = 'popper-' + index
        const toggle = item.querySelector('.dropdown-toggle')
        const menu = item.querySelector('.dropdown-menu')
        menu.dataset.popperId = popperId
        popperInstance[popperId] = Popper.createPopper(toggle, menu, {
            modifiers: [
                {
                    name: 'offset',
                    options: {
                        offset: [0, 8],
                    },
                },
                {
                    name: 'preventOverflow',
                    options: {
                        padding: 24,
                    },
                },
            ],
            placement: 'bottom-end'
        });
    })
    document.addEventListener('click', function (e) {
        const toggle = e.target.closest('.dropdown-toggle')
        const menu = e.target.closest('.dropdown-menu')
        if (toggle) {
            const menuEl = toggle.closest('.dropdown').querySelector('.dropdown-menu')
            const popperId = menuEl.dataset.popperId
            if (menuEl.classList.contains('hidden')) {
                hideDropdown()
                menuEl.classList.remove('hidden')
                showPopper(popperId)
            } else {
                menuEl.classList.add('hidden')
                hidePopper(popperId)
            }
        } else if (!menu) {
            hideDropdown()
        }
    })

    function hideDropdown() {
        document.querySelectorAll('.dropdown-menu').forEach(function (item) {
            item.classList.add('hidden')
        })
    }

    function showPopper(popperId) {
        popperInstance[popperId].setOptions(function (options) {
            return {
                ...options,
                modifiers: [
                    ...options.modifiers,
                    {name: 'eventListeners', enabled: true},
                ],
            }
        });
        popperInstance[popperId].update();
    }

    function hidePopper(popperId) {
        popperInstance[popperId].setOptions(function (options) {
            return {
                ...options,
                modifiers: [
                    ...options.modifiers,
                    {name: 'eventListeners', enabled: false},
                ],
            }
        });
    }

    // end: Popper


    // start: Tab
    document.querySelectorAll('[data-tab]').forEach(function (item) {
        item.addEventListener('click', function (e) {
            e.preventDefault()
            const tab = item.dataset.tab
            const page = item.dataset.tabPage
            const target = document.querySelector('[data-tab-for="' + tab + '"][data-page="' + page + '"]')
            document.querySelectorAll('[data-tab="' + tab + '"]').forEach(function (i) {
                i.classList.remove('active')
            })
            document.querySelectorAll('[data-tab-for="' + tab + '"]').forEach(function (i) {
                i.classList.add('hidden')
            })
            item.classList.add('active')
            target.classList.remove('hidden')
        })
    })
    // end: Tab


    // start: Chart
    new Chart(document.getElementById('order-chart'), {
        type: 'line',
        data: {
            labels: generateNDays(7),
            datasets: [
                {
                    label: 'Active',
                    data: generateRandomData(7),
                    borderWidth: 1,
                    fill: true,
                    pointBackgroundColor: 'rgb(59, 130, 246)',
                    borderColor: 'rgb(59, 130, 246)',
                    backgroundColor: 'rgb(59 130 246 / .05)',
                    tension: .2
                },
                {
                    label: 'Completed',
                    data: generateRandomData(7),
                    borderWidth: 1,
                    fill: true,
                    pointBackgroundColor: 'rgb(16, 185, 129)',
                    borderColor: 'rgb(16, 185, 129)',
                    backgroundColor: 'rgb(16 185 129 / .05)',
                    tension: .2
                },
                {
                    label: 'Canceled',
                    data: generateRandomData(7),
                    borderWidth: 1,
                    fill: true,
                    pointBackgroundColor: 'rgb(244, 63, 94)',
                    borderColor: 'rgb(244, 63, 94)',
                    backgroundColor: 'rgb(244 63 94 / .05)',
                    tension: .2
                },
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    function generateNDays(n) {
        const data = []
        for (let i = 0; i < n; i++) {
            const date = new Date()
            date.setDate(date.getDate() - i)
            data.push(date.toLocaleString('en-US', {
                month: 'short',
                day: 'numeric'
            }))
        }
        return data
    }

    function generateRandomData(n) {
        const data = []
        for (let i = 0; i < n; i++) {
            data.push(Math.round(Math.random() * 10))
        }
        return data
    }

    // end: Chart


</script>

</body>
