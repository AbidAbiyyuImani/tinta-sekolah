<?php

include_once "./service/database.php";

function query($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    };
    return $rows;
};

$detail_postingan = query("SELECT * FROM postingan ORDER BY created_at DESC");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "./layout/meta.php" ?>
    <title>Tinta Sekolah | Kesan dan Pesan</title>
    <link rel="stylesheet" href="./dist/css/main.css">
    <?php require_once "./layout/plugin.php"?>
</head>

<body class="bg-gray-100 mx-auto">
    <?php require_once "./layout/navbar.php"?>

    <main class="container py-6 grid gap-6 sm:grid-cols-2 md:grid-cols-3">
        <?php foreach ($detail_postingan as $post) : ?>
            <div class="bg-white shadow-md rounded-lg py-5">
                <header class="px-4">
                    <h1 class="text-lg font-medium mb-1">Pengirim : <strong><?= $post['pengirim'] ?></strong></h1>
                    <p class="mb-2 text-slate-500">Kepada : <?= $post['kepada'] ?></p>
                </header>
                <article class="border-t border-gray-200">
                    <dl>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-2 sm:px-6">
                            <dt class="text-sm sm:text-base font-medium text-slate-500">Kesan</dt>
                            <dd class="mt-1 sm:mt-0 text-sm sm:text-base sm:col-span-2 text-slate-900"><?= $post['kesan'] ?></dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-2 sm:px-6">
                            <dt class="text-sm sm:text-base font-medium text-slate-500">Kesan</dt>
                            <dd class="mt-1 sm:mt-0 text-sm sm:text-base sm:col-span-2 text-slate-900"><?= $post['pesan'] ?></dd>
                        </div>
                    </dl>
                </article>
            </div>
        <?php endforeach; ?>
    </main>
</body>

</html>