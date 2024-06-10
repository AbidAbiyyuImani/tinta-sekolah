<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "./layout/meta.php" ?>
    <title>Tinta Sekolah</title>
    <link rel="stylesheet" href="./dist/css/main.css">
    <?php require_once "./layout/plugin.php"?>
</head>

<body class="bg-gray-100">
    <?php require_once "./layout/navbar.php" ?>

    <main class="container py-6">
        <form action="index.php" method="POST">
            <div class="flex flex-col mb-4">
                <label for="pengirim" class="mb-2 text-base md:text-xl text-gray-900">Pengirim</label>
                <input type="text" id="pengirim" name="pengirim" placeholder="Bisa dengan nama samaran" class="w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-200 focus:border-blue-300" />
            </div>
            <div class="flex flex-col mb-4">
                <label for="kepada" class="mb-2 text-base md:text-xl text-gray-900">Kepada</label>
                <input type="text" id="kepada" name="kepada" placeholder="Kepada siapa ini ditujukan" class="w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-200 focus:border-blue-300" />
            </div>
            <div class="flex flex-col mb-4">
                <label for="kesan" class="mb-2 text-base md:text-xl text-gray-900">Kesan</label>
                <textarea type="text" id="kesan" name="kesan" rows="4" placeholder="Kesan yang ingin dituliskan" class="w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-200 focus:border-blue-300"></textarea>
            </div>
            <div class="flex flex-col mb-4">
                <label for="pesan" class="mb-2 text-base md:text-xl text-gray-900">Pesan</label>
                <textarea type="text" id="pesan" name="pesan" rows="5" placeholder="Pesan yang ingin disampaikan" class="w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-200 focus:border-blue-300"></textarea>
            </div>
            <div class="mb-4">
                <button type="submit" name="kirim" class="px-6 py-2 bg-gray-600 text-white font-medium rounded-md shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Kirim</button>
            </div>
        </form>
    </main>
</body>

</html>
<?php

require_once "./service/database.php";

if (isset($_POST['kirim'])) {
    $pengirim = htmlspecialchars($_POST['pengirim']);
    $kepada = htmlspecialchars($_POST['kepada']);
    $kesan = htmlspecialchars($_POST['kesan']);
    $pesan = htmlspecialchars($_POST['pesan']);

    if (empty($pengirim) || empty($kepada) || empty($kesan) || empty($pesan)) {
        echo '<script>
                Swal.fire({
                    title: "Owaduh",
                    text: "Form tidak boleh kosong",
                    icon: "error"
                });
                </script>';
        return;
    }

    try {
        $sql = "INSERT INTO postingan (pengirim, kepada, kesan, pesan) VALUES ('$pengirim', '$kepada', '$kesan', '$pesan')";

        if ($db->query($sql)) {
            echo '<script>
                    Swal.fire({
                        title: "Mantap",
                        text: "Kesan dan Pesan sudah terkirim",
                        icon: "success"
                    });
                    </script>';
        } else {
            echo '<script>
                    Swal.fire({
                        title: "Owaduh",
                        text: "Kesan dan Pesan tidak terkirim",
                        icon: "error"
                    });
                    </script>';
        }
    } catch (mysqli_sql_exception $e) {
        $pesan_kirim = 'error, gagal mengirim' . '<br>' . $e;
    };
};

?>