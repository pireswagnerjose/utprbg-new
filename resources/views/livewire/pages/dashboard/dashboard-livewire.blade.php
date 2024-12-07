<div>
    <!-- Page-content -->
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Dashboad</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="{{ route('dashboard') }}" class="text-slate-400 dark:text-zink-200">Dashboard</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Dashboad
                    </li>
                </ul>
            </div>

            <div class="grid grid-cols-12 2xl:grid-cols-12 gap-x-5">

                <!-- Users -->
                <div class="col-span-12 card md:col-span-6 lg:col-span-3 2xl:col-span-2">
                    <div class="text-center card-body">
                        <div class="flex items-center justify-center mx-auto rounded-full size-14 bg-custom-100 text-custom-500 dark:bg-custom-500/20">
                            <i data-lucide="user-check"></i>
                        </div>
                        <p class="mt-4 mb-2 text-slate-500 dark:text-zink-200">Usuários do Sistema</p>
                        <h5><span class="counter-value" data-target="{{ $users->count() }}"></span></h5>
                    </div>
                </div>
                <!-- end Users -->

                <!-- Prisoners -->
                <div class="col-span-12 card md:col-span-6 lg:col-span-3 2xl:col-span-2">
                    <div class="text-center card-body">
                        <div class="flex items-center justify-center mx-auto text-purple-500 bg-purple-100 rounded-full size-14 dark:bg-purple-500/20">
                            <i data-lucide="users"></i>
                        </div>
                        <p class="mt-4 mb-2 text-slate-500 dark:text-zink-200">Total de Presos</p>
                        <h5><span class="counter-value" data-target="{{ $prisoners->count() }}"></span></h5>
                    </div>
                </div>
                <!-- end Prisoners -->

                <!-- Provisory Prisoners -->
                <div class="col-span-12 card md:col-span-6 lg:col-span-3 2xl:col-span-2">
                    <div class="text-center card-body">
                        <div class="flex items-center justify-center mx-auto text-green-500 bg-green-100 rounded-full size-14 dark:bg-green-500/20">
                            <i data-lucide="circle-user"></i>
                        </div>
                        <p class="mt-4 mb-2 text-slate-500 dark:text-zink-200">Presos Provisórios</p>
                        <h5><span class="counter-value" data-target="{{ $provisory_prisoners->count() }}">0</span></h5>
                    </div>
                </div>
                <!-- end Provisory Prisoners -->

                <!-- Psychiatric Prisoner -->
                <div class="col-span-12 card md:col-span-6 lg:col-span-3 2xl:col-span-2">
                    <div class="text-center card-body">
                        <div class="flex items-center justify-center mx-auto text-red-500 bg-red-100 rounded-full size-14 dark:bg-red-500/20">
                            <i data-lucide="square-user-round"></i>
                        </div>
                        <p class="mt-4 mb-2 text-slate-500 dark:text-zink-200">Medidas de Segurança</p>
                        <h5><span class="counter-value" data-target="{{ $psychiatricPrisoner->count() }}">0</span></h5>
                    </div>
                </div>
                <!--end Psychiatric Prisoner -->

                <div class="col-span-12 card 2xl:col-span-8">
                    <div class="card-body">

                        <div class="flex flex-col gap-4 mb-4 md:mb-3 md:items-center md:flex-row">
                            <h6 class="grow text-15">Distribuição dos Presos por Pavilhão</h6>
                            <!-- Calendar -->
                            <div class="relative">
                                <i data-lucide="calendar-range" class="absolute size-4 ltr:left-3 rtl:right-3 top-3 text-slate-500 dark:text-zink-200"></i>
                                <input type="text" class="ltr:pl-10 rtl:pr-10 form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true" readonly="readonly" placeholder="Calendário">
                            </div>
                            <!-- end Calendar -->
                        </div>

                        <!-- Graphic -->
                        <div class="grid grid-cols-12 gap-4 mb-3 w-full">
                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                            <canvas id="myChart"></canvas>
                            <script>
                                const ctx = document.getElementById('myChart');
                                new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                    labels: ['Pav. A', 'Pav. B', 'Pav. C', 'Amarelinhos', 'Enfermaria', 'Triagem', 'Seguro'],
                                    datasets: [{
                                        label: null,
                                        data: [152, 99, 180, 55, 14, 04, 12],
                                        backgroundColor: [
                                            '#22c55e',
                                            '#f43f5e',
                                            '#0ea5e9',
                                            'yellow',
                                            '#c084fc',
                                            'purple',
                                            '#65a30d',
                                        ],
                                        borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            y: {
                                            beginAtZero: true
                                            }
                                        }
                                    }
                                });
                            </script>
                        </div>
                        <!-- End Graphic -->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end grid-->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</div>
