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
            <div class="w-full mt-2 flex flex-wrap justify-around items-center gap-4">
                <!-- My Events -->
                <a href="/myEvents"
                   class="bg-blue-50 flex h-24 w-64 flex-col items-center justify-center rounded-md border border-dashed border-gray-200 transition-colors duration-100 ease-in-out hover:border-gray-400/80">
                    <div class="flex flex-row items-center justify-center">
                        <svg class="mr-3 " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             version="1.1"
                             width="22" height="22" viewBox="0 0 256 256" xml:space="preserve">

                            <defs>
                            </defs>
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                               transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                <path
                                    d="M 82.526 90 H 7.473 c -2.848 0 -5.166 -2.318 -5.166 -5.166 V 32.822 h 85.385 v 52.012 C 87.693 87.682 85.375 90 82.526 90 z M 5.274 35.789 v 49.045 c 0 1.213 0.986 2.199 2.199 2.199 h 75.053 c 1.213 0 2.199 -0.986 2.199 -2.199 V 35.789 H 5.274 z M 50.098 80.943 H 39.902 c -1.882 0 -3.413 -1.531 -3.413 -3.412 V 67.335 c 0 -1.881 1.531 -3.412 3.413 -3.412 h 10.195 c 1.881 0 3.412 1.531 3.412 3.412 v 10.196 C 53.51 79.413 51.979 80.943 50.098 80.943 z M 39.902 66.89 c -0.241 0 -0.446 0.204 -0.446 0.445 v 10.196 c 0 0.241 0.204 0.445 0.446 0.445 h 10.195 c 0.241 0 0.445 -0.204 0.445 -0.445 V 67.335 c 0 -0.241 -0.204 -0.445 -0.445 -0.445 H 39.902 z M 27.101 80.943 H 16.905 c -1.881 0 -3.412 -1.531 -3.412 -3.412 V 67.335 c 0 -1.881 1.531 -3.412 3.412 -3.412 h 10.196 c 1.881 0 3.412 1.531 3.412 3.412 v 10.196 C 30.513 79.413 28.983 80.943 27.101 80.943 z M 16.905 66.89 c -0.241 0 -0.445 0.204 -0.445 0.445 v 10.196 c 0 0.241 0.204 0.445 0.445 0.445 h 10.196 c 0.241 0 0.445 -0.204 0.445 -0.445 V 67.335 c 0 -0.241 -0.204 -0.445 -0.445 -0.445 H 16.905 z M 73.094 60.502 H 62.899 c -1.881 0 -3.412 -1.531 -3.412 -3.412 V 46.894 c 0 -1.882 1.531 -3.413 3.412 -3.413 h 10.195 c 1.882 0 3.413 1.531 3.413 3.413 v 10.195 C 76.507 58.971 74.976 60.502 73.094 60.502 z M 62.899 46.448 c -0.241 0 -0.445 0.205 -0.445 0.446 v 10.195 c 0 0.241 0.204 0.445 0.445 0.445 h 10.195 c 0.241 0 0.446 -0.204 0.446 -0.445 V 46.894 c 0 -0.241 -0.205 -0.446 -0.446 -0.446 H 62.899 z M 50.098 60.502 H 39.902 c -1.882 0 -3.413 -1.531 -3.413 -3.412 V 46.894 c 0 -1.882 1.531 -3.413 3.413 -3.413 h 10.195 c 1.881 0 3.412 1.531 3.412 3.413 v 10.195 C 53.51 58.971 51.979 60.502 50.098 60.502 z M 39.902 46.448 c -0.241 0 -0.446 0.205 -0.446 0.446 v 10.195 c 0 0.241 0.204 0.445 0.446 0.445 h 10.195 c 0.241 0 0.445 -0.204 0.445 -0.445 V 46.894 c 0 -0.241 -0.204 -0.446 -0.445 -0.446 H 39.902 z M 27.101 60.502 H 16.905 c -1.881 0 -3.412 -1.531 -3.412 -3.412 V 46.894 c 0 -1.882 1.531 -3.413 3.412 -3.413 h 10.196 c 1.881 0 3.412 1.531 3.412 3.413 v 10.195 C 30.513 58.971 28.983 60.502 27.101 60.502 z M 16.905 46.448 c -0.241 0 -0.445 0.205 -0.445 0.446 v 10.195 c 0 0.241 0.204 0.445 0.445 0.445 h 10.196 c 0.241 0 0.445 -0.204 0.445 -0.445 V 46.894 c 0 -0.241 -0.204 -0.446 -0.445 -0.446 H 16.905 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                                <path
                                    d="M 87.693 29.876 H 2.307 V 16.269 c 0 -2.849 2.318 -5.166 5.166 -5.166 h 12.842 V 8.524 c 0 -4.7 3.824 -8.524 8.524 -8.524 c 4.701 0 8.525 3.824 8.525 8.524 v 2.578 h 15.272 V 8.524 C 52.636 3.824 56.46 0 61.16 0 s 8.524 3.824 8.524 8.524 v 2.578 h 12.842 c 2.848 0 5.166 2.318 5.166 5.166 V 29.876 z M 5.274 26.909 h 79.452 v -10.64 c 0 -1.213 -0.986 -2.199 -2.199 -2.199 H 66.718 V 8.524 c 0 -3.065 -2.493 -5.557 -5.557 -5.557 c -3.065 0 -5.557 2.493 -5.557 5.557 v 5.545 H 34.397 V 8.524 c 0 -3.065 -2.493 -5.557 -5.558 -5.557 s -5.557 2.493 -5.557 5.557 v 5.545 H 7.473 c -1.213 0 -2.199 0.987 -2.199 2.199 V 26.909 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                            </g>
                        </svg>

                        <span class="font-bold text-gray-600"> {{$totalEvents}} </span>
                    </div>

                    <div class="mt-2 text-sm text-gray-400">My events</div>
                </a>

                <!-- Projects -->
                <a href="/reservations"
                   class="bg-red-50 flex h-24 w-64 flex-col items-center justify-center rounded-md border border-dashed border-gray-200 transition-colors duration-100 ease-in-out hover:border-gray-400/80">
                    <div class="flex flex-row items-center justify-center">
                        <svg class="mr-3 fill-gray-500/95" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24"
                             viewBox="0 0 24 24">
                            <path
                                d="M2.5 19.6L3.8 20.2V11.2L1.4 17C1 18.1 1.5 19.2 2.5 19.6M15.2 4.8L20.2 16.8L12.9 19.8L7.9 7.9V7.8L15.2 4.8M15.3 2.8C15 2.8 14.8 2.8 14.5 2.9L7.1 6C6.4 6.3 5.9 7 5.9 7.8C5.9 8 5.9 8.3 6 8.6L11 20.5C11.3 21.3 12 21.7 12.8 21.7C13.1 21.7 13.3 21.7 13.6 21.6L21 18.5C22 18.1 22.5 16.9 22.1 15.9L17.1 4C16.8 3.2 16 2.8 15.3 2.8M10.5 9.9C9.9 9.9 9.5 9.5 9.5 8.9S9.9 7.9 10.5 7.9C11.1 7.9 11.5 8.4 11.5 8.9S11.1 9.9 10.5 9.9M5.9 19.8C5.9 20.9 6.8 21.8 7.9 21.8H9.3L5.9 13.5V19.8Z"/>
                        </svg>

                        <span class="font-bold text-gray-600"> {{$totalReservations}} </span>
                    </div>

                    <div class="mt-2 text-sm text-gray-400">Reservations</div>
                </a>

                <!-- Projects -->
                <a href="#"
                   class="bg-green-50 flex h-24 w-64 flex-col items-center justify-center rounded-md border border-dashed border-gray-200 transition-colors duration-100 ease-in-out hover:border-gray-400/80">
                    <div class="flex flex-row items-center justify-center">
                        <svg class="mr-3 w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9.143 4H4.857A.857.857 0 0 0 4 4.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 10 9.143V4.857A.857.857 0 0 0 9.143 4Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 20 9.143V4.857A.857.857 0 0 0 19.143 4Zm-10 10H4.857a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286A.857.857 0 0 0 9.143 14Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286a.857.857 0 0 0-.857-.857Z"/>
                        </svg>

                        <span class="font-bold text-gray-600"> {{$totalCategories}} </span>
                    </div>

                    <div class="mt-2 text-sm text-gray-400">Categories</div>
                </a>
            </div>
        </section>
        <section class="mt-9">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
                {{--            chartjs--}}
                <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md lg:col-span-2">
                    <div class="flex justify-between mb-4 items-start">
                        <div class="font-medium">Order Statistics</div>
                        <div class="dropdown">
                            <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600"><i
                                    class="ri-more-fill"></i></button>
                            <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                                <li>
                                    <a href="#"
                                       class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <canvas id="userChart"></canvas>
                    </div>
                </div>
                {{--                categories--}}
                <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">
                    <div class="flex justify-between mb-4 items-start">
                        <div class="font-medium">Latest Reservations</div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full min-w-full">
                            <thead>
                            <tr>
                                <th class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tl-md rounded-bl-md">
                                    Event
                                </th>
                                <th class="text-[12px] text-end uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                                    Client
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($LatestReservatios as $reservation)
                                <tr>
                                    <td class="py-2 px-4 border-b border-b-gray-50">
                                        <a href="#"
                                           class="text-gray-600 text-sm font-medium hover:text-blue-500 ml-2 truncate">
                                            @foreach($event as $item)
                                                @if($item->id == $reservation->event)
                                                    {{ $item->title }}
                                                @endif
                                            @endforeach
                                        </a>
                                        </a>
                                    </td>
                                    <td class="py-2 px-4 text-end border-b border-b-gray-50">
                                        <a href="#"
                                           class="text-gray-600 text-sm font-medium hover:text-blue-500 ml-2 truncate">
                                            @foreach($client as $user)
                                                @if($user->id == $reservation->client)
                                                    {{ $user->name }}
                                                @endif
                                            @endforeach
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>


<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

{{--chartjs--}}
<script>
    var ctx = document.getElementById('userChart').getContext('2d');
    var userChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['My Events', 'Reservations', 'Users'],
            datasets: [{
                //label: ['{{$events}} Events', '{{$reservations}} Reservations','{{$users}} Users'],
                data: [{{$events}}, {{$reservations}}, {{$users}}],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(13, 107, 249, 0.2)',
                    'rgba(25, 249, 13, 0.2)',
                ],
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            plugins: {
                legend: {
                    display: false,
                    position: 'top',
                    labels: {
                        font: {
                            size: 14
                        }
                    }
                }
            }
        }
    });
</script>
</body>


