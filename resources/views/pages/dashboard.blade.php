@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Masuk</p>
                                    <h5 class="font-weight-bolder">
                                        1511 Mahasiswa
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">Pukul</span>
                                        08.35
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <i class="ni ni-bold-right text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Keluar</p>
                                    <h5 class="font-weight-bolder">
                                        0023 Mahasiswa
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">Pukul</span>
                                        08.35
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                    <i class="ni ni-bold-left text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Izin Keluar</p>
                                    <h5 class="font-weight-bolder">
                                        0000 Mahasiswa
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">Pukul</span>
                                        08.35
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                    <i class="ni ni-pin-3 text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Izin Bermalam</p>
                                    <h5 class="font-weight-bolder">
                                        0000 Mahasiswa
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">Pukul</span> 08.35
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                    <i class="ni ni-square-pin text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-8 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <h6 class="text-capitalize">Kehadiran Minggu ke 4</h6> 
                        <p class="text-sm mb-0">
                            <span class="font-weight-bold">November</span> 2022 
                        </p>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <h6 class="text-capitalize">Kehadiran Minggu ke 4</h6> 
                        <p class="text-sm mb-0">
                            <a class="text-success">Angkatan 2019  </a>
                            <span class="font-weight-bold">November</span> 2022 
                        </p>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="chart-line-2019" class="chart-canvas" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4"> 
            <div class="col-lg-4 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <h6 class="text-capitalize">Kehadiran Minggu ke 4</h6> 
                        <p class="text-sm mb-0">
                            <a class="text-success">Angkatan 2020  </a>
                            <span class="font-weight-bold">November</span> 2022 
                        </p>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="chart-line-2020" class="chart-canvas" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <h6 class="text-capitalize">Kehadiran Minggu ke 4</h6> 
                        <p class="text-sm mb-0">
                            <a class="text-success">Angkatan 2021  </a>
                            <span class="font-weight-bold">November</span> 2022 
                        </p>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="chart-line-2021" class="chart-canvas" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <h6 class="text-capitalize">Kehadiran Minggu ke 4</h6> 
                        <p class="text-sm mb-0">
                            <a class="text-success">Angkatan 2022  </a>
                            <span class="font-weight-bold">November</span> 2022 
                        </p>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="chart-line-2022" class="chart-canvas" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection

@push('js')
    <script src="./assets/js/plugins/chartjs.min.js"></script>
    <script>
        var ctx1 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(251, 99, 64, 0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(251, 99, 64, 0.0)');
        gradientStroke1.addColorStop(0, 'rgba(251, 99, 64, 0)');
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Senin", "Selasa", "Rabu", "Kamis", "Jumat"],
                datasets: [{
                    label: "Angkatan 2019",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#fb6340",
                    backgroundColor: gradientStroke1,
                    borderWidth: 3,
                    fill: true,
                    data: [ 332, 312,  320, 332, 325],
                    maxBarThickness: 6

                },
                {
                    label: "Angkatan 2020",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#cb0c9f",
                    backgroundColor: gradientStroke1,
                    borderWidth: 3,
                    fill: true,
                    data: [ 345, 341,  331, 329, 339],
                    maxBarThickness: 6

                },
                {
                    label: "Angkatan 2021",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#fb0c2f",
                    backgroundColor: gradientStroke1,
                    borderWidth: 3,
                    fill: true,
                    data: [ 336, 333,  343, 313, 332],
                    maxBarThickness: 6
                },
                {
                    label: "Angkatan 2022",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#cc0c2f",
                    backgroundColor: gradientStroke1,
                    borderWidth: 3,
                    fill: true,
                    data: [ 345, 341,  339, 345, 340],
                    maxBarThickness: 6

                }
            ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#fbfbfb',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#ccc',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });

        var ctx2 = document.getElementById("chart-line-2019").getContext("2d");

        var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

        gradientStroke2.addColorStop(1, 'rgba(251, 99, 64, 0.2)');
        gradientStroke2.addColorStop(0.2, 'rgba(251, 99, 64, 0.0)');
        gradientStroke2.addColorStop(0, 'rgba(251, 99, 64, 0)');
        new Chart(ctx2, {
            type: "line",
            data: {
                labels: ["Senin", "Selasa", "Rabu", "Kamis", "Jumat"],
                datasets: [{
                    label: "14IF",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#fb6340",
                    backgroundColor: gradientStroke2,
                    borderWidth: 3,
                    fill: true,
                    data: [ 50, 52,  56, 54, 55],
                    maxBarThickness: 6

                },
                {
                    label: "14TE",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#cb0c9f",
                    backgroundColor: gradientStroke2,
                    borderWidth: 3,
                    fill: true,
                    data: [ 43, 47, 47, 48, 45],
                    maxBarThickness: 6

                },
                {
                    label: "14SI",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#fb0c2f",
                    backgroundColor: gradientStroke2,
                    borderWidth: 3,
                    fill: true,
                    data: [ 60, 62,  62, 59, 64],
                    maxBarThickness: 6
                },
                {
                    label: "14TB",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#cc0c2f",
                    backgroundColor: gradientStroke2,
                    borderWidth: 3,
                    fill: true,
                    data: [ 28, 30, 32, 32, 30],
                    maxBarThickness: 6

                },
                {
                    label: "14MR",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#fc0c2f",
                    backgroundColor: gradientStroke2,
                    borderWidth: 3,
                    fill: true,
                    data: [ 61, 62,  64, 63, 64],
                    maxBarThickness: 6

                }
            ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#fbfbfb',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#ccc',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });

        var ctx3 = document.getElementById("chart-line-2020").getContext("2d");

        var gradientStroke3 = ctx3.createLinearGradient(0, 230, 0, 50);

        gradientStroke3.addColorStop(1, 'rgba(251, 99, 64, 0.2)');
        gradientStroke3.addColorStop(0.2, 'rgba(251, 99, 64, 0.0)');
        gradientStroke3.addColorStop(0, 'rgba(251, 99, 64, 0)');
        new Chart(ctx3, {
            type: "line",
            data: {
                labels: ["Senin", "Selasa", "Rabu", "Kamis", "Jumat"],
                datasets: [{
                    label: "13IF",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#fb6340",
                    backgroundColor: gradientStroke3,
                    borderWidth: 3,
                    fill: true,
                    data: [ 50, 52,  56, 54, 55],
                    maxBarThickness: 6

                },
                {
                    label: "13TE",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#cb0c9f",
                    backgroundColor: gradientStroke3,
                    borderWidth: 3,
                    fill: true,
                    data: [ 43, 47, 47, 48, 45],
                    maxBarThickness: 6

                },
                {
                    label: "13SI",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#fb0c2f",
                    backgroundColor: gradientStroke3,
                    borderWidth: 3,
                    fill: true,
                    data: [ 60, 62,  62, 59, 64],
                    maxBarThickness: 6
                },
                {
                    label: "13TB",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#cc0c2f",
                    backgroundColor: gradientStroke3,
                    borderWidth: 3,
                    fill: true,
                    data: [ 28, 30, 32, 32, 30],
                    maxBarThickness: 6

                },
                {
                    label: "13MR",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#fc0c2f",
                    backgroundColor: gradientStroke3,
                    borderWidth: 3,
                    fill: true,
                    data: [ 61, 62,  64, 63, 64],
                    maxBarThickness: 6

                }
            ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#fbfbfb',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#ccc',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });

        var ctx4 = document.getElementById("chart-line-2021").getContext("2d");

        var gradientStroke4 = ctx4.createLinearGradient(0, 230, 0, 50);

        gradientStroke4.addColorStop(1, 'rgba(251, 99, 64, 0.2)');
        gradientStroke4.addColorStop(0.2, 'rgba(251, 99, 64, 0.0)');
        gradientStroke4.addColorStop(0, 'rgba(251, 99, 64, 0)');
        new Chart(ctx4, {
            type: "line",
            data: {
                labels: ["Senin", "Selasa", "Rabu", "Kamis", "Jumat"],
                datasets: [{
                    label: "12IF",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#fb6340",
                    backgroundColor: gradientStroke4,
                    borderWidth: 3,
                    fill: true,
                    data: [ 50, 52,  56, 54, 55],
                    maxBarThickness: 6

                },
                {
                    label: "12TE",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#cb0c9f",
                    backgroundColor: gradientStroke4,
                    borderWidth: 3,
                    fill: true,
                    data: [ 43, 47, 47, 48, 45],
                    maxBarThickness: 6

                },
                {
                    label: "12SI",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#fb0c2f",
                    backgroundColor: gradientStroke4,
                    borderWidth: 3,
                    fill: true,
                    data: [ 60, 62,  62, 59, 64],
                    maxBarThickness: 6
                },
                {
                    label: "12TB",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#cc0c2f",
                    backgroundColor: gradientStroke4,
                    borderWidth: 3,
                    fill: true,
                    data: [ 28, 30, 32, 32, 30],
                    maxBarThickness: 6

                },
                {
                    label: "12MR",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#fc0c2f",
                    backgroundColor: gradientStroke4,
                    borderWidth: 3,
                    fill: true,
                    data: [ 61, 62,  64, 63, 64],
                    maxBarThickness: 6

                }
            ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#fbfbfb',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#ccc',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });

        var ctx5 = document.getElementById("chart-line-2022").getContext("2d");

        var gradientStroke5 = ctx5.createLinearGradient(0, 230, 0, 50);

        gradientStroke5.addColorStop(1, 'rgba(251, 99, 64, 0.2)');
        gradientStroke5.addColorStop(0.2, 'rgba(251, 99, 64, 0.0)');
        gradientStroke5.addColorStop(0, 'rgba(251, 99, 64, 0)');
        new Chart(ctx5, {
            type: "line",
            data: {
                labels: ["Senin", "Selasa", "Rabu", "Kamis", "Jumat"],
                datasets: [{
                    label: "11IF",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#fb6340",
                    backgroundColor: gradientStroke5,
                    borderWidth: 3,
                    fill: true,
                    data: [ 50, 52,  56, 54, 55],
                    maxBarThickness: 6

                },
                {
                    label: "11TE",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#cb0c9f",
                    backgroundColor: gradientStroke5,
                    borderWidth: 3,
                    fill: true,
                    data: [ 43, 47, 47, 48, 45],
                    maxBarThickness: 6

                },
                {
                    label: "11SI",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#fb0c2f",
                    backgroundColor: gradientStroke5,
                    borderWidth: 3,
                    fill: true,
                    data: [ 60, 62,  62, 59, 64],
                    maxBarThickness: 6
                },
                {
                    label: "11TB",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#cc0c2f",
                    backgroundColor: gradientStroke5,
                    borderWidth: 3,
                    fill: true,
                    data: [ 28, 30, 32, 32, 30],
                    maxBarThickness: 6

                },
                {
                    label: "14MR",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#fc0c2f",
                    backgroundColor: gradientStroke5,
                    borderWidth: 3,
                    fill: true,
                    data: [ 61, 62,  64, 63, 64],
                    maxBarThickness: 6

                }
            ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#fbfbfb',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#ccc',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>
@endpush
