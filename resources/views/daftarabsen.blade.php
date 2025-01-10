<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Data Kelas | WA Blast</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('template/templateAdmin') }}/assets/img/sa.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('template/templateAdmin') }}/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('template/templateAdmin') }}/assets/vendor/css/core.css"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('template/templateAdmin') }}/assets/vendor/css/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('template/templateAdmin') }}/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet"
        href="{{ asset('template/templateAdmin') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Helpers -->
    <script src="{{ asset('template/templateAdmin') }}/assets/vendor/js/helpers.js"></script>
    <script src="{{ asset('template/templateAdmin') }}/assets/js/config.js"></script>

    <style>
        .class-box {
            border: 1px solid #ddd;
            padding: 15px;
            margin: 10px;
            text-align: center;
            border-radius: 8px;
            background-color: #f8f9fa;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .class-box h5 {
            margin: 0;
            font-size: 18px;
            font-weight: 600;
        }

        .class-box .count {
            font-size: 24px;
            color: #007bff;
        }

        .container-xxl {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
        }

        /* Animasi ketika kotak di klik */
        .class-box:active {
            transform: scale(0.95); /* Memperkecil kotak saat diklik */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .class-box:hover {
            cursor: pointer;
            background-color: #e9ecef;
        }

        .class-box:active {
            transition: all 0.1s ease-out;
        }
    </style>
</head>

<body>
    <!-- Content -->
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Class Boxes Card -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="#" class="app-brand-link gap-2">
                                <span class="app-brand-logo demo">
                                    <img src="{{ asset('template/templateAdmin') }}/assets/img/sa.png" alt="WA Blast"
                                        width="25">
                                </span>
                                <span class="app-brand-text demo text-body fw-bolder"
                                    style="text-transform: capitalize">Data Kelas</span>
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-3">Daftar Kelas dan Jumlah Siswa</h4>

                        <!-- Class Boxes -->
                        <div class="container-xxl">
                            <a href="absensi_1A.html">
                                <div class="class-box">
                                    <h5>Kelas 1A</h5>
                                    <div class="count">25 Siswa</div>
                                </div>
                            </a>
                            <a href="absensi_1B.html">
                                <div class="class-box">
                                    <h5>Kelas 1B</h5>
                                    <div class="count">30 Siswa</div>
                                </div>
                            </a>
                            <a href="absensi_2A.html">
                                <div class="class-box">
                                    <h5>Kelas 2A</h5>
                                    <div class="count">28 Siswa</div>
                                </div>
                            </a>
                            <a href="absensi_2B.html">
                                <div class="class-box">
                                    <h5>Kelas 2B</h5>
                                    <div class="count">32 Siswa</div>
                                </div>
                            </a>
                        </div>
                        <!-- /Class Boxes -->
                    </div>
                </div>
                <!-- /Class Boxes Card -->
            </div>
        </div>
    </div>
    <!-- Core JS -->
    <script src="{{ asset('template/templateAdmin') }}/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('template/templateAdmin') }}/assets/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('template/templateAdmin') }}/assets/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('template/templateAdmin') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{ asset('template/templateAdmin') }}/assets/vendor/js/menu.js"></script>
    <script src="{{ asset('template/templateAdmin') }}/assets/js/main.js"></script>
</body>

</html>
