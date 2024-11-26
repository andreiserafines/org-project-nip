<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/styles.css">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.6.0/uicons-solid-straight/css/uicons-solid-straight.css'>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-straight/css/uicons-bold-straight.css'>
    <title>Simple System</title>
</head>

<body class="" style="overflow-y: hidden;">
    <main class="">
        <!-- Header -->
        <header class="bg-gray-800 sticky top-0 z-50">
            <nav class="mx-auto flex flex-row items-center justify-between p-4">
                <!-- Logo -->
                <div class="flex items-center gap-1">
                    <i class='bx bxs-dashboard text-3xl text-gray-600'></i>
                    <a href="">
                        <h2 class="text-lg text-gray-200 font-normal jost">Database System</h2>
                    </a>
                </div>

                <!-- Account section -->
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-full bg-gray-500"></div>
                    <div class="text-sm text-gray-200 flex items-center">
                        Admin
                        <button class="ml-1">
                            <i class='bx bx-chevron-down text-2xl'></i>
                        </button>
                    </div>
                </div>
            </nav>
        </header>


        <!-- Sidebar -->
        <section class="flex flex-row mx-auto">
            <!-- Side Panel -->
            <aside
                class="hidden md:block bg-white shadow w-[300px] h-screen border-gray-300 pt-6 px-2 sticky top-0 absolute">
                <ul class="flex flex-col gap-1 text-gray-700 capitalize text-start sfont-normal">
                    <li class="pt-3 px-4"><a href="pages/dashboard.php" target="content-frame"
                            class="text-gray-500 hover:text-gray-900 duration-300 inter flex gap-4 items-center">
                            <i class="fi fi-ss-dashboard-panel flex items-center"></i>
                            Dashboard</a>
                    </li>

                    <!-- accordion -->
                    <li class="pt-3 px-4">
                        <button
                            class="text-gray-500 hover:text-gray-900 duration-300 inter flex gap-4 items-center w-full text-left accordion">
                            <i class="fi fi-ss-database flex items-center"></i>
                            Database
                        </button>
                        <ul id="dropdown-menu-1" class="hidden pl-7 mt-2 space-y-1 panel">
                            <li><a href="main.php" target="content-frame"
                                    class="block text-normal p-1 text-gray-500 hover:bg-gray-100">Personal
                                    Information</a></li>
                            <li><a href="pages/assignment.php" target="content-frame"
                                    class="block text-normal p-1 text-gray-500 hover:bg-gray-100">Assignment</a></li>
                            <li><a href="pages/military_schooling.php" target="content-frame"
                                    class="block text-normal p-1 text-gray-500 hover:bg-gray-100">Military Schooling</a>
                            </li>
                            <li><a href="pages/promotion.php" target="content-frame"
                                    class="block text-normal p-1 text-gray-500 hover:bg-gray-100">Promotion</a></li>
                            <li><a href="pages/ETAD_re_enlistment.php" target="content-frame"
                                    class="block text-normal p-1 text-gray-500 hover:bg-gray-100">ETAD Re&Enlistment</a>
                            </li>
                            <li><a href="pages/collateral_assignment.php" target="content-frame"
                                    class="block text-normal p-1 text-gray-500 hover:bg-gray-100">Collateral
                                    Assignment</a></li>
                            <li><a href="pages/civilian_schooling.php" target="content-frame"
                                    class="block text-normal p-1 text-gray-500 hover:bg-gray-100">Civilian Schooling</a>
                            </li>
                        </ul>
                    </li>

                    <!-- accordion -->
                    <li class="pt-3 px-4">
                        <button onclick="toggleDropdown('dropdown-menu-2')"
                            class="text-gray-500 hover:text-gray-900 duration-300 inter flex gap-4 items-center w-full text-left accordion">
                            <i class="fi fi-ss-multiple flex items-center"></i>
                            Add Entity
                        </button>
                        <ul id="dropdown-menu-2" class="hidden pl-7 mt-2 space-y-1 panel">
                            <li><a href="pages/personal_information.php" target="content-frame"
                                    class="block text-normal p-1 text-gray-500 hover:bg-gray-100">Personal
                                    Information</a></li>
                            <li><a href="pages/assignment.php" target="content-frame"
                                    class="block text-normal p-1 text-gray-500 hover:bg-gray-100">Assignment</a></li>
                            <li><a href="pages/military_schooling.php" target="content-frame"
                                    class="block text-normal p-1 text-gray-500 hover:bg-gray-100">Military Schooling</a>
                            </li>
                            <li><a href="pages/promotion.php" target="content-frame"
                                    class="block text-normal p-1 text-gray-500 hover:bg-gray-100">Promotion</a></li>
                            <li><a href="pages/ETAD_re_enlistment.php" target="content-frame"
                                    class="block text-normal p-1 text-gray-500 hover:bg-gray-100">ETAD Re&Enlistment</a>
                            </li>
                            <li><a href="pages/collateral_assignment.php" target="content-frame"
                                    class="block text-normal p-1 text-gray-500 hover:bg-gray-100">Collateral
                                    Assignment</a></li>
                            <li><a href="pages/civilian_schooling.php" target="content-frame"
                                    class="block text-normal p-1 text-gray-500 hover:bg-gray-100">Civilian Schooling</a>
                            </li>
                            <li><a href="pages/add_user.php" target="content-frame"
                                class="block text-normal p-1 text-gray-500 hover:bg-gray-100">Add User</a>
                            </li>
                        </ul>
                    </li>
                    <li class="pt-3 px-4"><a href="filtered_personnel.php" target="content-frame"
                            class="text-gray-500 hover:text-gray-900 duration-300 inter flex gap-4 items-center">
                            <i class="fi fi-ss-settings-sliders flex items-center"></i>
                            Filtered Personnel</a>
                    </li>
                    <li class="pt-3 px-4"><a href="pages/print.php" target="content-frame"
                            class="text-gray-500 hover:text-gray-900 duration-300 inter flex gap-4 items-center">
                            <i class="fi fi-ss-print flex items-center"></i>
                            Print</a>
                    </li>
                    <li class="pt-3 px-4"><a href="login.php"
                            class="text-gray-500 hover:text-gray-900 duration-300 inter flex gap-4 items-center">
                            <i class="fi fi-bs-sign-out-alt flex items-center"></i>
                            Logout</a>
                    </li>
                </ul>
            </aside>

            <!-- Main Content -->
            <div class="bg-gray-200 w-full border border-gray-300 flex flex-col w-[1220px]">
                <iframe name="content-frame" src="pages/dashboard.php" width="100%" height="100%"
                    class="w-full"></iframe>
            </div>
        </section>
    </main>

    <script src="js/main.js"></script>
</body>

</html>