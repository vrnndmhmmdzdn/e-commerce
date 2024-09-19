<?php include "connection.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="py-6 w-full mx-auto flex flex-col justify-center">
    <div class="text-left md:text-center">
        <h1 class="text-xl md:text-2xl lg:text-3xl font-medium md:font-semibold">
            Choose from cuisines
        </h1>
    </div>
    <div class="my-8 px-4 flex flex-col justify-center">
        <div class="grid-container grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
            <div class="card">Item 1</div>
            <div class="card">Item 2</div>
            <div class="card">Item 3</div>
            <div class="card">Item 4</div>
            <div class="card">Item 5</div>
            <div class="card">Item 6</div>
            <div class="card">Item 7</div>
            <div class="card">Item 8</div>
            <div class="card">Item 9</div>
            <div class="card">Item 10</div>
            <div class="card">Item 11</div>
            <div class="card">Item 12</div>
            <div class="card">Item 12</div>
            <div class="card">Item 12</div>
            <div class="card">Item 12</div>
            <div class="card">Item 12</div>
            <div class="card">Item 12</div>
            <div class="card">Item 12</div>
            <div class="card">Item 12</div>
            <div class="card">Item 12</div>
            <div class="card">Item 12</div>
        </div>
    </div>
    <div class="text-center">
        <span id="showmore" class="bg-[#EAFFEA] text-[#00880D] text-base py-2 px-4 rounded-full font-semibold cursor-pointer hover:bg-[#cdffcd]">
            Show more cuisines
        </span>
    </div>
</section>

<script>
    const gridContainer = document.querySelector('.grid-container');
    const gridItems = document.querySelectorAll('.grid-container .card');
    
    // Dapatkan jumlah kolom grid dari CSS
    const gridComputedStyle = window.getComputedStyle(gridContainer);
    const gridColumns = gridComputedStyle.getPropertyValue('grid-template-columns').split(' ').length;
    
    // Sembunyikan item di baris kedua dan seterusnya
    gridItems.forEach((item, index) => {
        if (index >= gridColumns) {
            item.style.display = 'none';
        }
    });

    // Fungsi untuk menampilkan semua item
    document.getElementById('showmore').addEventListener('click', () => {
        gridItems.forEach(item => {
            item.style.display = 'block';
        });
    });
</script>

</body>
</html>