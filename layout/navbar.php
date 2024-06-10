
<nav class="w-full h-16 bg-white shadow-md">
    <div class="container flex justify-between">
        <div class="flex flex-row">
            <img class="w-16 h-16" src="./dist/img/TS.png" alt="Abid Abiyyu Imani">
            <a href="index.php" class="text-base sm:text-lg md:text-xl font-medium self-center">Tinta Sekolah</a>
        </div>
        <ul class="flex flex-row">
            <li class="block md:hidden px-2 sm:px-4 self-center">
                <a id="dropdown" href="#" class="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </a>
            </li>
            <li class="hidden md:inline-block px-2 sm:px-4 text-sm sm:text-base md:text-xl font-medium text-gray-500 hover:text-gray-900 self-center">
                <a href="index.php">Beranda</a>
            </li>
            <li class="hidden md:inline-block px-2 sm:px-4 text-sm sm:text-base md:text-xl font-medium text-gray-500 hover:text-gray-900 self-center">
                <a href="./postingan.php">Postingan</a>
            </li>
            <li class="hidden md:inline-block px-2 sm:px-4 text-sm sm:text-base md:text-xl font-medium text-gray-500 hover:text-gray-900 self-center">
                <a href="./kp.php">K&P</a>
            </li>
            <li class="hidden md:inline-block px-2 sm:px-4 text-sm sm:text-base md:text-xl font-medium text-gray-500 hover:text-gray-900 self-center">
                <a href="./tentang.php">Tentang</a>
            </li>
        </ul>
        <div id="item" class="hidden w-1/3 absolute right-3 top-[66px] border rounded-md bg-white shadow-md z-10 py-2 px-4">
            <ul class="flex flex-col">
                <li class="text-base font-medium text-gray-500 hover:text-gray-900 py-[6px]">
                    <a href="index.php">Beranda</a>
                </li>
                <li class="text-base font-medium text-gray-500 hover:text-gray-900 py-[6px]">
                    <a href="./postingan.php">Postingan</a>
                </li>
                <li class="text-base font-medium text-gray-500 hover:text-gray-900 py-[6px]">
                    <a href="./kp.php">K&P</a>
                </li>
                <li class="text-base font-medium text-gray-500 hover:text-gray-900 py-[6px]">
                    <a href="./tentang.php">Tentang</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script>
    const dropdown = document.getElementById('dropdown');
    const item = document.getElementById('item');
    dropdown.addEventListener('click', () => {
        item.classList.toggle('hidden');
    });
</script>