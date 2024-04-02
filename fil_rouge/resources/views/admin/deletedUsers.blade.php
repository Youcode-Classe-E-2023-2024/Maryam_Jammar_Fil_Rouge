<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

@include('admin.layout')

<body class="text-gray-800 font-inter">
@include('admin.side')

<main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-200 min-h-screen transition-all main">
    @include('admin.nav')
    <!-- Content -->
    <div class="p-10">
        <main>
            <!-- component -->
            <div class="bg-white p-8 rounded-md w-full">
                <div class=" flex items-center justify-between pb-6">
                    <div>
                        <h2 class="text-gray-600 font-semibold">Deleted Users list</h2>
                        <span class="text-xs">All deleted users item</span>
                    </div>
                </div>
                <div>
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                            <table class="min-w-full leading-normal">
                                <thead>
                                <tr>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Profile
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Username
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Email
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Role
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">

                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 w-10 h-10">
                                                    <img class="w-full h-full rounded-full"
                                                         src="{{$user->picture}}"
                                                         alt=""/>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">{{$user->name}}</p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{$user->email}}
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <span
                                                    class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                    <span aria-hidden
                                                          class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                        @foreach ($roles as $role)
                                                        @if ($role->id === $user->role)
                                                            <span class="relative">{{ $role->role }}</span>
                                                        @endif
                                                    @endforeach
                                                </span>
                                        </td>
                                        <td class="flex justify-around items-center px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="py-1 flex justify-around text-center items-center justify-center text-gray-900 whitespace-no-wrap">

                                            <form action="{{ url('/restore', $user->id )}}" method="post">
                                                @csrf
                                                <button type="submit"
                                                        class="mt-3 block text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-2 py-1 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                                    Restore this user
                                                </button>
                                            </form>
                                            </p>
                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                            {{--                            <div class="flex-col justify-between items-center mt-8 p-4">--}}
                            {{--                                {{ $users->links() }}--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!-- End Content -->
</main>

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
