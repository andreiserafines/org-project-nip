<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/styles.css">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Jquery -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
    <title>Simple System</title>
</head>

<body class="p-4">
    <main>

        <!-- Dashboard-->
        <div class="grid grid-rows  md:grid-cols-4 gap-3">

            <!-- Box 1 -->
            <div class="rounded shadow border bg-white flex flex-row justify-between p-3 gap-4 items-center">
                <img src="https://cdn.vectorstock.com/i/500p/46/51/stingray-manta-ray-silhouette-vector-49574651.jpg"
                    class="rounded-full h-12 w-12" alt="">

                <!-- Name&Result -->
                <div class="flex flex-col gap-1 text-end mr-2 text-gray-700">
                    <div class="text-xs  font-semibold uppercase tracking-widest">Total Personnel</div>
                    <div class="text-xl font-semibold">10</div>
                </div>
            </div>

            <!-- Box 1 -->
            <div class="rounded shadow border bg-white flex flex-row justify-between p-3 gap-4 items-center">
                <img src="https://cdn.vectorstock.com/i/500p/46/51/stingray-manta-ray-silhouette-vector-49574651.jpg"
                    class="rounded-full h-12 w-12" alt="">

                <!-- Name&Result -->
                <div class="flex flex-col gap-1 text-end mr-2 text-gray-700">
                    <div class="text-xs  font-semibold uppercase tracking-widest">Officers</div>
                    <div class="text-xl font-semibold">11</div>
                </div>
            </div>

            <!-- Box 1 -->
            <div class="rounded shadow border bg-white flex flex-row justify-between p-3 gap-4 items-center">
                <img src="https://cdn.vectorstock.com/i/500p/46/51/stingray-manta-ray-silhouette-vector-49574651.jpg"
                    class="rounded-full h-12 w-12" alt="">

                <!-- Name&Result -->
                <div class="flex flex-col gap-1 text-end mr-2 text-gray-700">
                    <div class="text-xs  font-semibold uppercase tracking-widest">Enlisted Personnel</div>
                    <div class="text-xl font-semibold">11</div>
                </div>
            </div>

            <!-- Box 1 -->
            <div class="rounded shadow border bg-white flex flex-row justify-between p-3 gap-4 items-center">
                <img src="https://cdn.vectorstock.com/i/500p/46/51/stingray-manta-ray-silhouette-vector-49574651.jpg"
                    class="rounded-full h-12 w-12" alt="">

                <!-- Name&Result -->
                <div class="flex flex-col gap-1 text-end mr-2 text-gray-700">
                    <div class="text-xs  font-semibold uppercase tracking-widest">Retiree Personnel</div>
                    <div class="text-xl font-semibold">11</div>
                </div>
            </div>

        </div>

        <!-- Charts -->
        <div class="text-gray-500 mt-3 border">

            <div class="grid grid-rows md:grid-cols-3 gap-3">
                <div class="border bg-gray-700 rounded shadow border p-4 shadow rounded bg-white">
                    <div class="flex flex-row justify-between py-2">
                        <div class="text-md font-semibold text-gray-700">Datasets</div>
                        <button id="view"><i class="fa-solid fa-eye text-gray-400"
                                title="view larger size"></i></button>
                    </div>
                    <canvas class="rounded" id="myChart"></canvas>
                </div>

                <div class="border bg-gray-700 rounded shadow border p-4 shadow rounded bg-white">
                    <div class="flex flex-row justify-between py-2">
                        <div class="text-md font-semibold text-gray-700">Datasets</div>
                        <button id="view"><i class="fa-solid fa-eye text-gray-400"
                                title="view larger size"></i></button>
                    </div>
                    <canvas class="rounded" id="dChart"></canvas>
                </div>

                <div class="border bg-gray-700 rounded shadow border p-4 shadow rounded bg-white">
                    <div class="flex flex-row justify-between py-2">
                        <div class="text-md font-semibold text-gray-700">Datasets</div>
                        <button id="view"><i class="fa-solid fa-eye text-gray-400"
                                title="view larger size"></i></button>
                    </div>
                    <canvas class="rounded" id="pChart"></canvas>
                </div>
            </div>
        </div>


        <!-- Table -->
        <?php
        include '../db_functions.php';
        $records = getMainRecords();
        ?>

        <div class="border p-4 mt-3 shadow rounded bg-white w-full text-gray-800 text-sm">
            <!-- Table Header -->
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-semibold text-gray-700">Records</h2>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table id="myTable" class="min-w-full text-left border-collapse pt-2">
                    <thead class="bg-gray-100 text-gray-700 uppercase text-xs font-medium">
                        <tr>
                            <th class="px-4 py-2 border">Serial Number</th>
                            <th class="px-4 py-2 border">First Name</th>
                            <th class="px-4 py-2 border">Middle Name</th>
                            <th class="px-4 py-2 border">Last Name</th>
                            <th class="px-4 py-2 border">Extension</th>
                            <th class="px-4 py-2 border text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($records as $row): ?>
                            <tr class="odd:bg-white even:bg-gray-50 hover:bg-gray-100">
                                <td class="px-4 py-2 border"><?php echo $row["serial_number"]; ?></td>
                                <td class="px-4 py-2 border"><?php echo $row["first_name"]; ?></td>
                                <td class="px-4 py-2 border"><?php echo $row["middle_name"]; ?></td>
                                <td class="px-4 py-2 border"><?php echo $row["last_name"]; ?></td>
                                <td class="px-4 py-2 border"><?php echo $row["extension"]; ?></td>
                                <td class="px-4 py-2 border text-center">
                                    <div class="flex gap-2">
                                        <a href="edit.php" class="text-gray-600 hover:text-gray-800">                              
                                            Edit
                                        </a>
                                        <a href="view.php" class="text-gray-600 hover:text-gray-800">
                                            View
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <br><br><br>
    </main>


    <script>
        $(document).ready(function() {
            $('#myTable').DataTable(); // Initialize DataTables
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const cta = document.getElementById('myChart');
        const cts = document.getElementById('dChart');
        const ctx = document.getElementById('pChart');

        new Chart(cta, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: 'Stingray Records',
                    data: [12, 19, 3, 5, 2, 3],
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

        new Chart(cts, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: 'Stingray Records',
                    data: [12, 19, 3, 5, 2, 3],
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

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: 'Stingray Records',
                    data: [12, 19, 3, 5, 2, 3],
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

</body>

</html>