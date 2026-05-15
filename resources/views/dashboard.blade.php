@php
    $dashboardData = [
        [
            'date' => '2026-05-12',
            'group' => 'Grupo A',
            'summary' => [
                'theoreticalAccumulated' => 94000,
                'realAccumulated' => 21554,
                'shiftEfficiency' => 23.0,
                'orderSize' => 52704,
                'remainingPieces' => 8777,
                'estimatedEnd' => '12-may 18:23',
            ],
            'capacityVsProduction' => [
                ['hour' => '06:30', 'production' => 508, 'capacity' => 1850, 'slow' => 980, 'unused' => 620, 'efficiency' => 30],
                ['hour' => '07:00', 'production' => 853, 'capacity' => 2110, 'slow' => 1030, 'unused' => 540, 'efficiency' => 9],
                ['hour' => '08:00', 'production' => 0, 'capacity' => 2160, 'slow' => 1060, 'unused' => 610, 'efficiency' => 4],
                ['hour' => '09:00', 'production' => 1208, 'capacity' => 2230, 'slow' => 960, 'unused' => 540, 'efficiency' => 13],
                ['hour' => '10:00', 'production' => 1512, 'capacity' => 2310, 'slow' => 1020, 'unused' => 420, 'efficiency' => 17],
                ['hour' => '11:00', 'production' => 948, 'capacity' => 2290, 'slow' => 980, 'unused' => 510, 'efficiency' => 11],
                ['hour' => '12:00', 'production' => 2397, 'capacity' => 2420, 'slow' => 720, 'unused' => 540, 'efficiency' => 31],
                ['hour' => '13:00', 'production' => 2289, 'capacity' => 2440, 'slow' => 920, 'unused' => 430, 'efficiency' => 25],
                ['hour' => '14:00', 'production' => 3588, 'capacity' => 2600, 'slow' => 850, 'unused' => 360, 'efficiency' => 44],
                ['hour' => '15:00', 'production' => 3143, 'capacity' => 2520, 'slow' => 900, 'unused' => 390, 'efficiency' => 33],
                ['hour' => '16:00', 'production' => 3323, 'capacity' => 2510, 'slow' => 850, 'unused' => 400, 'efficiency' => 29],
                ['hour' => '18:00', 'production' => 586, 'capacity' => 300, 'slow' => 0, 'unused' => 2690, 'efficiency' => 27],
            ],
            'earlyStart' => [
                ['x' => -55, 'y' => 66], ['x' => -43, 'y' => 49], ['x' => -30, 'y' => 40],
                ['x' => -16, 'y' => 65], ['x' => -12, 'y' => 20], ['x' => -1, 'y' => 36],
            ],
            'lateStart' => [
                ['x' => 4, 'y' => 70], ['x' => 16, 'y' => 63], ['x' => 27, 'y' => 50],
                ['x' => 39, 'y' => 33], ['x' => 47, 'y' => 38], ['x' => 61, 'y' => 23],
            ],
            'lostHoursByArea' => [
                ['area' => 'Encartonadora', 'hours' => 18.7],
                ['area' => 'Banda Transportadora', 'hours' => 14.2],
                ['area' => 'Etiquetadora', 'hours' => 9.8],
                ['area' => 'Blister (Sistema de Corte)', 'hours' => 7.6],
                ['area' => 'Blister (Ajuste de Operador)', 'hours' => 6.1],
                ['area' => 'Cambio de Turno', 'hours' => 4.3],
                ['area' => 'Blister (Sistema de Expulsión)', 'hours' => 2.2],
            ],
        ],
        [
            'date' => '2026-05-12',
            'group' => 'Grupo B',
            'summary' => [
                'theoreticalAccumulated' => 88200,
                'realAccumulated' => 19840,
                'shiftEfficiency' => 22.4,
                'orderSize' => 49820,
                'remainingPieces' => 10112,
                'estimatedEnd' => '12-may 22:10',
            ],
            'capacityVsProduction' => [
                ['hour' => '06:30', 'production' => 420, 'capacity' => 1650, 'slow' => 1010, 'unused' => 610, 'efficiency' => 26],
                ['hour' => '07:00', 'production' => 690, 'capacity' => 1920, 'slow' => 1120, 'unused' => 480, 'efficiency' => 12],
                ['hour' => '08:00', 'production' => 540, 'capacity' => 1980, 'slow' => 1110, 'unused' => 520, 'efficiency' => 8],
                ['hour' => '09:00', 'production' => 1120, 'capacity' => 2080, 'slow' => 1010, 'unused' => 470, 'efficiency' => 16],
                ['hour' => '10:00', 'production' => 1380, 'capacity' => 2140, 'slow' => 980, 'unused' => 410, 'efficiency' => 19],
                ['hour' => '11:00', 'production' => 1010, 'capacity' => 2160, 'slow' => 1000, 'unused' => 450, 'efficiency' => 13],
                ['hour' => '12:00', 'production' => 2100, 'capacity' => 2260, 'slow' => 820, 'unused' => 490, 'efficiency' => 28],
                ['hour' => '13:00', 'production' => 1980, 'capacity' => 2330, 'slow' => 900, 'unused' => 430, 'efficiency' => 24],
                ['hour' => '14:00', 'production' => 3010, 'capacity' => 2450, 'slow' => 920, 'unused' => 360, 'efficiency' => 39],
                ['hour' => '15:00', 'production' => 2880, 'capacity' => 2430, 'slow' => 910, 'unused' => 380, 'efficiency' => 31],
                ['hour' => '16:00', 'production' => 2740, 'capacity' => 2390, 'slow' => 870, 'unused' => 410, 'efficiency' => 27],
                ['hour' => '18:00', 'production' => 500, 'capacity' => 330, 'slow' => 0, 'unused' => 2510, 'efficiency' => 21],
            ],
            'earlyStart' => [
                ['x' => -58, 'y' => 58], ['x' => -44, 'y' => 46], ['x' => -32, 'y' => 37],
                ['x' => -20, 'y' => 52], ['x' => -9, 'y' => 19], ['x' => -2, 'y' => 31],
            ],
            'lateStart' => [
                ['x' => 5, 'y' => 63], ['x' => 17, 'y' => 58], ['x' => 28, 'y' => 44],
                ['x' => 38, 'y' => 28], ['x' => 48, 'y' => 33], ['x' => 60, 'y' => 19],
            ],
            'lostHoursByArea' => [
                ['area' => 'Encartonadora', 'hours' => 16.4], ['area' => 'Banda Transportadora', 'hours' => 12.3],
                ['area' => 'Etiquetadora', 'hours' => 8.9], ['area' => 'Blister (Sistema de Corte)', 'hours' => 6.8],
                ['area' => 'Blister (Ajuste de Operador)', 'hours' => 5.4], ['area' => 'Cambio de Turno', 'hours' => 3.9],
                ['area' => 'Blister (Sistema de Expulsión)', 'hours' => 1.7],
            ],
        ],
        [
            'date' => '2026-05-13',
            'group' => 'Grupo B',
            'summary' => [
                'theoreticalAccumulated' => 101500,
                'realAccumulated' => 29440,
                'shiftEfficiency' => 29.8,
                'orderSize' => 54890,
                'remainingPieces' => 7120,
                'estimatedEnd' => '13-may 17:05',
            ],
            'capacityVsProduction' => [
                ['hour' => '06:30', 'production' => 640, 'capacity' => 1820, 'slow' => 900, 'unused' => 540, 'efficiency' => 34],
                ['hour' => '07:00', 'production' => 980, 'capacity' => 2080, 'slow' => 980, 'unused' => 420, 'efficiency' => 18],
                ['hour' => '08:00', 'production' => 730, 'capacity' => 2140, 'slow' => 1040, 'unused' => 460, 'efficiency' => 11],
                ['hour' => '09:00', 'production' => 1320, 'capacity' => 2210, 'slow' => 920, 'unused' => 390, 'efficiency' => 21],
                ['hour' => '10:00', 'production' => 1640, 'capacity' => 2320, 'slow' => 940, 'unused' => 340, 'efficiency' => 24],
                ['hour' => '11:00', 'production' => 1260, 'capacity' => 2280, 'slow' => 930, 'unused' => 390, 'efficiency' => 16],
                ['hour' => '12:00', 'production' => 2620, 'capacity' => 2440, 'slow' => 710, 'unused' => 420, 'efficiency' => 36],
                ['hour' => '13:00', 'production' => 2470, 'capacity' => 2470, 'slow' => 820, 'unused' => 380, 'efficiency' => 31],
                ['hour' => '14:00', 'production' => 3820, 'capacity' => 2620, 'slow' => 760, 'unused' => 310, 'efficiency' => 49],
                ['hour' => '15:00', 'production' => 3360, 'capacity' => 2570, 'slow' => 770, 'unused' => 350, 'efficiency' => 41],
                ['hour' => '16:00', 'production' => 3480, 'capacity' => 2530, 'slow' => 740, 'unused' => 330, 'efficiency' => 35],
                ['hour' => '18:00', 'production' => 720, 'capacity' => 370, 'slow' => 0, 'unused' => 2380, 'efficiency' => 29],
            ],
            'earlyStart' => [
                ['x' => -57, 'y' => 71], ['x' => -45, 'y' => 55], ['x' => -31, 'y' => 44],
                ['x' => -17, 'y' => 68], ['x' => -11, 'y' => 24], ['x' => -2, 'y' => 39],
            ],
            'lateStart' => [
                ['x' => 3, 'y' => 74], ['x' => 15, 'y' => 66], ['x' => 27, 'y' => 55],
                ['x' => 39, 'y' => 37], ['x' => 47, 'y' => 42], ['x' => 60, 'y' => 27],
            ],
            'lostHoursByArea' => [
                ['area' => 'Encartonadora', 'hours' => 15.2], ['area' => 'Banda Transportadora', 'hours' => 11.4],
                ['area' => 'Etiquetadora', 'hours' => 8.1], ['area' => 'Blister (Sistema de Corte)', 'hours' => 6.4],
                ['area' => 'Blister (Ajuste de Operador)', 'hours' => 4.8], ['area' => 'Cambio de Turno', 'hours' => 3.7],
                ['area' => 'Blister (Sistema de Expulsión)', 'hours' => 1.9],
            ],
        ],
    ];
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard de Peticiones</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-[#f6f8fc] font-sans text-slate-900 antialiased">
    <main class="mx-auto max-w-[1180px] px-2 py-2 sm:px-3 lg:px-4">
        <section class="space-y-3">
            <div class="grid gap-3 xl:grid-cols-[340px_minmax(0,1fr)]">
                <div class="rounded-2xl border border-slate-200 bg-white px-4 py-3 shadow-[0_2px_12px_rgba(15,23,42,0.06)]">
                    <div class="flex items-center gap-4">
                        <div class="flex h-14 w-24 items-center justify-center rounded-xl bg-[#0d2d57] text-white shadow-sm">
                            <div class="text-center leading-none">
                                <div class="text-[17px] font-extrabold tracking-tight">P&amp;SA</div>
                                <div class="mt-1 text-[7px] font-semibold tracking-[0.22em] text-blue-100">FARMACEUTICA</div>
                            </div>
                        </div>
                        <div class="min-w-0">
                            <h1 class="text-[23px] font-extrabold tracking-tight text-slate-800 sm:text-[25px]">Dashboard de Peticiones</h1>
                            <p class="mt-1 text-[14px] text-slate-500">Desarrollo de estrategias de transformacion digital</p>
                        </div>
                    </div>
                </div>
                <div class="grid gap-2 sm:grid-cols-2 xl:grid-cols-5">
                    <label class="rounded-2xl border border-slate-200 bg-white px-3 py-2 shadow-[0_2px_12px_rgba(15,23,42,0.06)]">
                        <span class="flex items-center gap-2 text-[12px] font-semibold text-slate-600"><span class="text-sky-500">◔</span>Departamento</span>
                        <select id="department-filter" class="mt-2 w-full appearance-none rounded-xl border border-slate-200 bg-white px-3 py-2 text-[15px] text-slate-700 outline-none focus:border-sky-300">
                            <option value="Todos">Todos</option>
                            <option value="Informática">Informática</option>
                            <option value="Recursos Humanos">Recursos Humanos</option>
                            <option value="Comercial">Comercial</option>
                            <option value="Finanzas">Finanzas</option>
                        </select>
                    </label>
                    <label class="rounded-2xl border border-slate-200 bg-white px-3 py-2 shadow-[0_2px_12px_rgba(15,23,42,0.06)]">
                        <span class="flex items-center gap-2 text-[12px] font-semibold text-slate-600"><span class="text-sky-500">☼</span>Tipo de petición</span>
                        <select id="type-filter" class="mt-2 w-full appearance-none rounded-xl border border-slate-200 bg-white px-3 py-2 text-[15px] text-slate-700 outline-none focus:border-sky-300">
                            <option value="Todos">Todos</option>
                            <option value="Nuevo Ingreso">Nuevo Ingreso</option>
                            <option value="Contraseña">Contraseña</option>
                            <option value="Reparación">Reparación</option>
                            <option value="Equipo Nuevo">Equipo Nuevo</option>
                        </select>
                    </label>
                    <label class="rounded-2xl border border-slate-200 bg-white px-3 py-2 shadow-[0_2px_12px_rgba(15,23,42,0.06)]">
                        <span class="flex items-center gap-2 text-[12px] font-semibold text-slate-600"><span class="text-sky-500">◉</span>Grupo</span>
                        <select id="group-filter" class="mt-2 w-full appearance-none rounded-xl border border-slate-200 bg-white px-3 py-2 text-[15px] text-slate-700 outline-none focus:border-sky-300">
                            <option value="Todos">Todos</option>
                            <option value="Grupo A">Grupo A</option>
                            <option value="Grupo B">Grupo B</option>
                        </select>
                    </label>
                    <label class="rounded-2xl border border-slate-200 bg-white px-3 py-2 shadow-[0_2px_12px_rgba(15,23,42,0.06)]">
                        <span class="flex items-center gap-2 text-[12px] font-semibold text-slate-600"><span class="text-sky-500">◎</span>Buscar petición</span>
                        <input id="search-filter" type="text" placeholder="Buscar titulo" class="mt-2 w-full rounded-xl border border-slate-200 bg-white px-3 py-2 text-[15px] text-slate-700 outline-none placeholder:text-slate-400 focus:border-sky-300">
                    </label>
                    <label class="rounded-2xl border border-slate-200 bg-white px-3 py-2 shadow-[0_2px_12px_rgba(15,23,42,0.06)]">
                        <span class="flex items-center gap-2 text-[12px] font-semibold text-slate-600"><span class="text-sky-500">◫</span>Fecha</span>
                        <input id="date-filter" type="date" class="mt-2 w-full rounded-xl border border-slate-200 bg-white px-3 py-2 text-[15px] text-slate-700 outline-none focus:border-sky-300">
                    </label>
                </div>
            </div>
            <div class="grid gap-3 md:grid-cols-3 xl:grid-cols-6">
                <article class="rounded-2xl border border-slate-200 bg-white px-4 py-3 text-center shadow-[0_2px_12px_rgba(15,23,42,0.06)]"><div id="metric-theoretical" class="text-[22px] font-bold text-[#1b3761]"></div><p class="mt-1 text-[12px] text-slate-500">Acumulado teorico</p></article>
                <article class="rounded-2xl border border-slate-200 bg-white px-4 py-3 text-center shadow-[0_2px_12px_rgba(15,23,42,0.06)]"><div id="metric-real" class="text-[22px] font-bold text-[#1b3761]"></div><p class="mt-1 text-[12px] text-slate-500">Acumulado real</p></article>
                <article class="rounded-2xl border border-slate-200 bg-white px-4 py-3 text-center shadow-[0_2px_12px_rgba(15,23,42,0.06)]"><div id="metric-efficiency" class="text-[22px] font-bold text-[#ff5a3d]"></div><p class="mt-1 text-[12px] text-slate-500">Eficiencia del turno</p></article>
                <article class="rounded-2xl border border-slate-200 bg-white px-4 py-3 text-center shadow-[0_2px_12px_rgba(15,23,42,0.06)]"><div id="metric-order-size" class="text-[22px] font-bold text-slate-800"></div><p class="mt-1 text-[12px] text-slate-500">Tamano de orden</p></article>
                <article class="rounded-2xl border border-slate-200 bg-white px-4 py-3 text-center shadow-[0_2px_12px_rgba(15,23,42,0.06)]"><div id="metric-remaining" class="text-[22px] font-bold text-slate-800"></div><p class="mt-1 text-[12px] text-slate-500">Piezas restantes</p></article>
                <article class="rounded-2xl border border-slate-200 bg-white px-4 py-3 text-center shadow-[0_2px_12px_rgba(15,23,42,0.06)]"><div id="metric-estimated-end" class="text-[22px] font-bold text-slate-800"></div><p class="mt-1 text-[12px] text-slate-500">Fin estimado de orden</p></article>
            </div>
            <div class="grid gap-3 xl:grid-cols-[1.15fr_0.85fr_0.85fr]">
                <section class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_2px_12px_rgba(15,23,42,0.06)]">
                    <div class="text-center"><h2 class="text-[15px] font-bold text-slate-700">Capacidad vs Produccion</h2></div>
                    <div class="mt-2 flex flex-wrap items-center justify-center gap-5 text-[11px] text-slate-500"><span class="inline-flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-[#1873c6]"></span>Produccion</span><span class="inline-flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-[#ff7d2b]"></span>Capacidad</span><span class="inline-flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-[#ffc590]"></span>Baja velocidad</span><span class="inline-flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-[#e6e8ee]"></span>Capacidad no utilizada</span></div>
                    <div class="mt-3 grid grid-cols-[36px_minmax(0,1fr)_52px] items-start gap-x-3 text-[11px] text-slate-600"><div class="font-semibold">Hora</div><div></div><div class="text-right font-semibold">Eficiencia</div></div>
                    <div id="capacity-chart" class="mt-2 space-y-2"></div>
                </section>
                <section class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_2px_12px_rgba(15,23,42,0.06)]">
                    <div class="text-center"><h2 class="text-[15px] font-bold text-slate-700">Inicio temprano de turno</h2><p class="text-[11px] text-slate-500">Grafica de puntos por termino de turno temprano</p></div>
                    <div class="mt-2 flex items-center justify-center gap-5 text-[11px] text-slate-500"><span class="inline-flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-[#2376d1]"></span>Eficiencia</span><span class="inline-flex items-center gap-2"><span class="h-px w-5 border-t border-dashed border-slate-500"></span>Ef. Objetivo</span></div>
                    <div id="early-chart" class="mt-3 h-[280px]"></div>
                </section>
                <section class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_2px_12px_rgba(15,23,42,0.06)]">
                    <div class="text-center"><h2 class="text-[15px] font-bold text-slate-700">Inicio tardio de turno</h2><p class="text-[11px] text-slate-500">Grafica de puntos por inicio tardio de turno</p></div>
                    <div class="mt-2 flex items-center justify-center gap-5 text-[11px] text-slate-500"><span class="inline-flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-[#2376d1]"></span>Eficiencia</span><span class="inline-flex items-center gap-2"><span class="h-px w-5 border-t border-dashed border-slate-500"></span>Ef. Objetivo</span></div>
                    <div id="late-chart" class="mt-3 h-[280px]"></div>
                </section>
            </div>
            <div class="grid gap-3 xl:grid-cols-[1.15fr_1.7fr]">
                <section class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_2px_12px_rgba(15,23,42,0.06)]">
                    <div class="flex items-center justify-between"><div><h2 class="text-[15px] font-bold text-slate-700">Peticiones visibles</h2><p class="text-[11px] text-slate-500">Listado filtrado por departamento, tipo, fecha y busqueda.</p></div><div id="results-count" class="rounded-full bg-slate-100 px-3 py-1 text-[12px] font-semibold text-slate-600"></div></div>
                    <div id="request-list" class="mt-3 space-y-2.5"></div>
                    <div id="empty-state" class="hidden rounded-xl border border-dashed border-slate-300 bg-slate-50 px-4 py-8 text-center text-sm text-slate-500">No hay peticiones que coincidan con los filtros seleccionados.</div>
                </section>
                <section class="rounded-2xl border border-slate-200 bg-white p-4 shadow-[0_2px_12px_rgba(15,23,42,0.06)]">
                    <div class="text-center"><h2 class="text-[15px] font-bold text-slate-700">Horas perdidas por area de acondicionamiento</h2></div>
                    <div class="mt-2 text-[11px] text-slate-500"><span class="inline-flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-sm bg-[#2376d1]"></span>Horas perdidas</span></div>
                    <div id="bars-chart" class="mt-3 h-[250px]"></div>
                </section>
            </div>
            <footer class="flex flex-col gap-2 px-1 pb-2 text-[11px] text-slate-400 sm:flex-row sm:items-center sm:justify-between"><p>ⓘ Los datos mostrados corresponden al turno seleccionado y a los filtros aplicados.</p><p id="footer-date"></p></footer>
        </section>
    </main>
<script>
const dashboardData = @json($dashboardData);
const staticRequests = [
    { title: 'Nueva cuenta de usuario', employee: 'Laura Mendoza', department: 'Informática', type: 'Nuevo Ingreso', date: '2026-05-12', status: 'Pendiente' },
    { title: 'Restablecimiento de contraseña corporativa', employee: 'Carlos Ruiz', department: 'Recursos Humanos', type: 'Contraseña', date: '2026-05-12', status: 'En proceso' },
    { title: 'Reparación de laptop', employee: 'Andrea Soto', department: 'Comercial', type: 'Reparación', date: '2026-05-13', status: 'Pendiente' },
    { title: 'Solicitud de equipo nuevo para analista', employee: 'Miguel Herrera', department: 'Finanzas', type: 'Equipo Nuevo', date: '2026-05-12', status: 'Completado' },
    { title: 'Alta de acceso a CRM', employee: 'Paola Jiménez', department: 'Comercial', type: 'Nuevo Ingreso', date: '2026-05-13', status: 'En proceso' },
    { title: 'Cambio de contraseña de nómina', employee: 'Diego Navarro', department: 'Finanzas', type: 'Contraseña', date: '2026-05-12', status: 'Completado' },
];
const departmentFilter = document.getElementById('department-filter');
const typeFilter = document.getElementById('type-filter');
const groupFilter = document.getElementById('group-filter');
const dateFilter = document.getElementById('date-filter');
const searchFilter = document.getElementById('search-filter');
const capacityChart = document.getElementById('capacity-chart');
const earlyChart = document.getElementById('early-chart');
const lateChart = document.getElementById('late-chart');
const barsChart = document.getElementById('bars-chart');
const requestList = document.getElementById('request-list');
const emptyState = document.getElementById('empty-state');
const resultsCount = document.getElementById('results-count');
const footerDate = document.getElementById('footer-date');
function formatCompactNumber(value) { return value >= 1000 ? new Intl.NumberFormat('es-MX').format(value) : String(value); }
function formatTheoretical(value) { return value >= 1000 ? `${Math.round(value / 1000)} mil` : String(value); }
function formatDateDisplay(dateString) { const [y, m, d] = dateString.split('-').map(Number); return new Intl.DateTimeFormat('es-MX', { day:'2-digit', month:'2-digit', year:'numeric' }).format(new Date(y, m - 1, d)); }
function renderSummary(summary, selectedDate) {
    document.getElementById('metric-theoretical').textContent = formatTheoretical(summary.theoreticalAccumulated);
    document.getElementById('metric-real').textContent = formatCompactNumber(summary.realAccumulated);
    document.getElementById('metric-efficiency').textContent = `${summary.shiftEfficiency.toFixed(1)}%`;
    document.getElementById('metric-order-size').textContent = formatCompactNumber(summary.orderSize);
    document.getElementById('metric-remaining').textContent = formatCompactNumber(summary.remainingPieces);
    document.getElementById('metric-estimated-end').textContent = summary.estimatedEnd;
    footerDate.textContent = `Ultima actualizacion: ${formatDateDisplay(selectedDate)} 18:23`;
}
function renderCapacityChart(items) {
    const maxTotal = Math.max(...items.map((item) => item.production + item.capacity + item.slow + item.unused), 1);
    capacityChart.innerHTML = items.map((item) => {
        const total = item.production + item.capacity + item.slow + item.unused;
        const w1 = (item.production / maxTotal) * 100;
        const w2 = (item.capacity / maxTotal) * 100;
        const w3 = (item.slow / maxTotal) * 100;
        const w4 = ((maxTotal - total + item.unused) / maxTotal) * 100;
        return `<div class="grid grid-cols-[36px_minmax(0,1fr)_52px] items-center gap-x-3"><div class="text-[11px] text-slate-600">${item.hour}</div><div class="relative h-9 overflow-hidden rounded-sm bg-[#f3f4f7]"><div class="absolute inset-y-0 left-0 bg-[#1873c6]" style="width:${w1}%"></div><div class="absolute inset-y-0 bg-[#ff7d2b]" style="left:${w1}%; width:${w2}%"></div><div class="absolute inset-y-0 bg-[#ffc590]" style="left:${w1 + w2}%; width:${w3}%"></div><div class="absolute inset-y-0 bg-[#e6e8ee]" style="left:${w1 + w2 + w3}%; width:${Math.max(w4, 0)}%"></div>${item.production > 0 ? `<span class="absolute left-2 top-1/2 -translate-y-1/2 text-[11px] font-semibold text-white">${formatCompactNumber(item.production)}</span>` : ''}</div><div class="flex justify-end"><span class="rounded-md bg-[#ff5a3d] px-2 py-1 text-[11px] font-semibold text-white">${item.efficiency}%</span></div></div>`;
    }).join('');
}
function renderScatterChart(container, points, axis) {
    const width = 340, height = 280, left = 44, right = 14, top = 20, bottom = 40, plotWidth = width - left - right, plotHeight = height - top - bottom;
    const ticksY = [0, 20, 40, 60, 80, 100];
    const mapX = (x) => left + ((x - axis.min) / (axis.max - axis.min)) * plotWidth;
    const mapY = (y) => top + plotHeight - (y / 100) * plotHeight;
    container.innerHTML = `<svg viewBox="0 0 ${width} ${height}" class="h-full w-full"><line x1="${left}" y1="${top}" x2="${left}" y2="${top + plotHeight}" stroke="#cfd6e2" stroke-width="1"/><line x1="${left}" y1="${top + plotHeight}" x2="${left + plotWidth}" y2="${top + plotHeight}" stroke="#cfd6e2" stroke-width="1"/>${ticksY.map((tick) => `<g><line x1="${left}" y1="${mapY(tick)}" x2="${left + plotWidth}" y2="${mapY(tick)}" stroke="${tick === 60 ? '#6b7280' : '#e7ebf2'}" stroke-width="1" ${tick === 60 ? 'stroke-dasharray="4 4"' : ''}/><text x="${left - 8}" y="${mapY(tick) + 4}" text-anchor="end" font-size="11" fill="#6b7280">${tick}%</text></g>`).join('')}${axis.ticks.map((tick) => `<text x="${mapX(tick)}" y="${height - 12}" text-anchor="middle" font-size="11" fill="#6b7280">${tick}</text>`).join('')}<text x="18" y="${top + plotHeight / 2}" transform="rotate(-90 18 ${top + plotHeight / 2})" font-size="11" fill="#374151">Eficiencia (%)</text><text x="${left + plotWidth / 2}" y="${height - 2}" text-anchor="middle" font-size="11" fill="#374151">${axis.label}</text>${points.map((point) => `<circle cx="${mapX(point.x)}" cy="${mapY(point.y)}" r="4.5" fill="#2376d1"/>`).join('')}</svg>`;
}
function renderBarsChart(items) {
    const width = 680, height = 250, left = 42, right = 10, top = 14, bottom = 56, plotWidth = width - left - right, plotHeight = height - top - bottom;
    const maxValue = Math.max(...items.map((item) => item.hours), 1); const barWidth = plotWidth / items.length;
    barsChart.innerHTML = `<svg viewBox="0 0 ${width} ${height}" class="h-full w-full"><line x1="${left}" y1="${top}" x2="${left}" y2="${top + plotHeight}" stroke="#cfd6e2" stroke-width="1"/><line x1="${left}" y1="${top + plotHeight}" x2="${left + plotWidth}" y2="${top + plotHeight}" stroke="#cfd6e2" stroke-width="1"/>${[0,5,10,15,20].map((tick) => { const y = top + plotHeight - (tick / 20) * plotHeight; return `<g><line x1="${left}" y1="${y}" x2="${left + plotWidth}" y2="${y}" stroke="#edf1f7" stroke-width="1"/><text x="${left - 8}" y="${y + 4}" text-anchor="end" font-size="11" fill="#6b7280">${tick}</text></g>`; }).join('')}<text x="18" y="${top + plotHeight / 2}" transform="rotate(-90 18 ${top + plotHeight / 2})" font-size="11" fill="#374151">Horas</text>${items.map((item, index) => { const x = left + index * barWidth + 14; const h = (item.hours / maxValue) * (plotHeight - 12); const y = top + plotHeight - h; const words = item.area.split(' '); const a = words.slice(0, Math.ceil(words.length / 2)).join(' '); const b = words.slice(Math.ceil(words.length / 2)).join(' '); return `<g><rect x="${x}" y="${y}" width="${barWidth - 28}" height="${h}" fill="#2376d1"/><text x="${x + (barWidth - 28) / 2}" y="${y - 6}" text-anchor="middle" font-size="11" fill="#4b5563">${item.hours}</text><text x="${x + (barWidth - 28) / 2}" y="${top + plotHeight + 16}" text-anchor="middle" font-size="10" fill="#4b5563">${a}</text><text x="${x + (barWidth - 28) / 2}" y="${top + plotHeight + 29}" text-anchor="middle" font-size="10" fill="#4b5563">${b}</text></g>`; }).join('')}</svg>`;
}
function renderRequests(items) {
    if (!items.length) { requestList.innerHTML = ''; resultsCount.textContent = '0 resultados'; emptyState.classList.remove('hidden'); return; }
    emptyState.classList.add('hidden'); resultsCount.textContent = `${items.length} resultado${items.length === 1 ? '' : 's'}`;
    requestList.innerHTML = items.map((item) => { const statusClass = item.status === 'Pendiente' ? 'bg-amber-100 text-amber-700' : item.status === 'En proceso' ? 'bg-sky-100 text-sky-700' : 'bg-emerald-100 text-emerald-700'; return `<article class="rounded-xl border border-slate-200 bg-slate-50 px-3 py-3"><div class="flex items-start justify-between gap-3"><div><h3 class="text-sm font-semibold text-slate-800">${item.title}</h3><p class="mt-1 text-[12px] text-slate-500">${item.employee}</p></div><span class="rounded-full px-2.5 py-1 text-[11px] font-semibold ${statusClass}">${item.status}</span></div><div class="mt-2 grid grid-cols-3 gap-2 text-[11px] text-slate-500"><div><span class="font-semibold text-slate-600">Depto:</span> ${item.department}</div><div><span class="font-semibold text-slate-600">Tipo:</span> ${item.type}</div><div><span class="font-semibold text-slate-600">Fecha:</span> ${formatDateDisplay(item.date)}</div></div></article>`; }).join('');
}
function getFilteredDashboardRecords() { return dashboardData.filter((item) => (!dateFilter.value || item.date === dateFilter.value) && (groupFilter.value === 'Todos' || item.group === groupFilter.value)); }
function getFilteredRequests() { const q = searchFilter.value.trim().toLowerCase(); return staticRequests.filter((item) => (departmentFilter.value === 'Todos' || item.department === departmentFilter.value) && (typeFilter.value === 'Todos' || item.type === typeFilter.value) && (!dateFilter.value || item.date === dateFilter.value) && (!q || item.title.toLowerCase().includes(q))); }
function applyFilters() {
    const activeRecord = getFilteredDashboardRecords()[0] ?? dashboardData[0];
    renderSummary(activeRecord.summary, activeRecord.date);
    renderCapacityChart(activeRecord.capacityVsProduction);
    renderScatterChart(earlyChart, activeRecord.earlyStart, { min: -60, max: 0, ticks: [-60, -45, -30, -15, 0], label: 'Minutos de inicio temprano' });
    renderScatterChart(lateChart, activeRecord.lateStart, { min: 0, max: 60, ticks: [0, 15, 30, 45, 60], label: 'Minutos de inicio tardio' });
    renderBarsChart(activeRecord.lostHoursByArea);
    renderRequests(getFilteredRequests());
}
[departmentFilter, typeFilter, groupFilter, dateFilter].forEach((element) => element.addEventListener('change', applyFilters));
searchFilter.addEventListener('input', applyFilters);
dateFilter.value = '2026-05-12';
applyFilters();
</script>
</body>
</html>
