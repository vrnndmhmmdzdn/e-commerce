<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="h-14 shadow-md px-7 flex flex-row items-center justify-between fixed top-0 right-0 left-0 z-50 bg-white">
        <div class="flex flex-row items-center">
            <div class="w-28 mr-3">
                <img src="images/logo.png" class="w-full">
            </div>
            <a class="py-4 px-8 text-base font-semibold text-judul">Home</a>
            <a class="py-4 px-8 text-base font-semibold text-judul">Recommendations</a>
        </div>
        <div class="space-x-2 flex items-center">
            <a class="py-2 px-3 bg-[#EAFFEA] rounded-full"><i class="ph-bold ph-magnifying-glass text-[#00880D] text-base"></i></a>
            <a class="py-2 px-4 rounded-full bg-[#EAFFEA] text-[#00880D] font-semibold text-base">Login/Sign Up</a>
        </div>
    </nav>
    <section class="h-screen px-2 pt-16">
        <div class="w-full overflow-hidden flex flex-col justify-center items-center">
            <div class="w-full h-[464px] rounded-3xl overflow-hidden">
                <img src="images/iklan-landing-page.jpeg" class="w-full h-full bg-center object-cover">
            </div>
            <div class="p-8 rounded-2xl bg-white relative -top-20 shadow-xl">
                <div>
                    <p class="text-sm font-semibold mb-2">Your Location</p>
                    <div class="flex gap-4">
                        <div class="relative flex flex-row w-80">
                            <div class="h-full absolute flex items-center left-0"><i class="ph-fill ph-map-pin m-auto text-xl px-4 text-red-600"></i></div>
                            <input type="text" class="py-3 px-12 w-full border border-gray-400 rounded-full text-base" placeholder="Kamu Lagi Dimana?">
                            <div class="h-full absolute flex items-center right-0"><i class="ph-fill ph-caret-down m-auto text-xl px-4 text-[#00880D]"></i></div>
                        </div>
                        <div class="bg-[#00880D] py-2 px-4 rounded-full text-white text-base text-center flex items-center"><a href="" class="">Explore</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container px-6 my-8 mx-auto">
        <section class="py-6 w-full mx-auto flex flex-col justify-center">
            <div class="text-center">
                <h1 class="text-3xl font-semibold">Looking for inspo? Start here</h1>
            </div>
            <div class="my-8 px-4 flex flex-col justify-center">
                <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
                    <div class="card shadow border flex flex-col justify-center items-center rounded-2xl p-2">
                        <div class="image h-full w-full flex flex-col justify-center items-center p-2">
                            <div class="h-28 w-full flex flex-grow justify-center items-center p-2">
                                <img src="images/locationicon.png" class="w-16">
                            </div>
                        </div>
                        <div class="text px-4 pb-2 text-center">
                            <h3 class="text-sm font-medium mx-4 h-[2.75em]">Near Me</h3>
                        </div>
                    </div>
                    <div class="card shadow border flex flex-col justify-center items-center rounded-2xl p-2">
                        <div class="image h-full w-full flex flex-col justify-center items-center p-2">
                            <div class="h-28 w-full flex flex-grow justify-center items-center p-2">
                                <img src="images/locationicon.png" class="w-16">
                            </div>
                        </div>
                        <div class="text px-4 pb-2 text-center">
                            <h3 class="text-sm font-medium mx-4 h-[2.75em]">Near Me</h3>
                        </div>
                    </div>
                    <div class="card shadow border flex flex-col justify-center items-center rounded-2xl p-2">
                        <div class="image h-full w-full flex flex-col justify-center items-center p-2">
                            <div class="h-28 w-full flex flex-grow justify-center items-center p-2">
                                <img src="images/locationicon.png" class="w-16">
                            </div>
                        </div>
                        <div class="text px-4 pb-2 text-center">
                            <h3 class="text-sm font-medium mx-4 h-[2.75em]">Near Me</h3>
                        </div>
                    </div>
                    <div class="card shadow border flex flex-col justify-center items-center rounded-2xl p-2">
                        <div class="image h-full w-full flex flex-col justify-center items-center p-2">
                            <div class="h-28 w-full flex flex-grow justify-center items-center p-2">
                                <img src="images/locationicon.png" class="w-16">
                            </div>
                        </div>
                        <div class="text px-4 pb-2 text-center">
                            <h3 class="text-sm font-medium mx-4 h-[2.75em]">Near Me</h3>
                        </div>
                    </div>
                    <div class="card shadow border flex flex-col justify-center items-center rounded-2xl p-2">
                        <div class="image h-full w-full flex flex-col justify-center items-center p-2">
                            <div class="h-28 w-full flex flex-grow justify-center items-center p-2">
                                <img src="images/locationicon.png" class="w-16">
                            </div>
                        </div>
                        <div class="text px-4 pb-2 text-center">
                            <h3 class="text-sm font-medium mx-4 h-[2.75em]">Near Me</h3>
                        </div>
                    </div>
                    <div class="card shadow border flex flex-col justify-center items-center rounded-2xl p-2">
                        <div class="image h-full w-full flex flex-col justify-center items-center p-2">
                            <div class="h-28 w-full flex flex-grow justify-center items-center p-2">
                                <img src="images/locationicon.png" class="w-16">
                            </div>
                        </div>
                        <div class="text px-4 pb-2 text-center">
                            <h3 class="text-sm font-medium mx-4 h-[2.75em]">Near Me</h3>
                        </div>
                    </div>
                    <div class="card shadow border flex flex-col justify-center items-center rounded-2xl p-2">
                        <div class="image h-full w-full flex flex-col justify-center items-center p-2">
                            <div class="h-28 w-full flex flex-grow justify-center items-center p-2">
                                <img src="images/locationicon.png" class="w-16">
                            </div>
                        </div>
                        <div class="text px-4 pb-2 text-center">
                            <h3 class="text-sm font-medium mx-4 h-[2.75em]">Near Me</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-6 w-full mx-auto flex flex-col justify-center">
            <div class="text-center">
                <h1 class="text-3xl font-semibold">Choose From Cuisines</h1>
            </div>
            <div class="my-8 px-4 flex flex-col justify-center">
                <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
                    <div class="card flex flex-col justify-center items-center hover:shadow-2xl rounded-2xl shad py-2 px-1 hover:-translate-y-1 transition duration-300">
                        <div class="image h-full w-full flex flex-col justify-center items-center mb-2">
                            <div class=" w-full h-full flex flex-grow justify-center items-center">
                                <img src="images/menu-makanan.jpg" class="w-40 rounded-full">
                            </div>
                        </div>
                        <div class="text px-4 py-2 text-center">
                            <h3 class="text-base font-medium mx-4">Near Me</h3>
                        </div>
                    </div><div class="card flex flex-col justify-center items-center hover:shadow-2xl rounded-2xl shad py-2 px-1 hover:-translate-y-1 transition duration-300">
                        <div class="image h-full w-full flex flex-col justify-center items-center mb-2">
                            <div class=" w-full h-full flex flex-grow justify-center items-center">
                                <img src="images/menu-makanan.jpg" class="w-40 rounded-full">
                            </div>
                        </div>
                        <div class="text px-4 py-2 text-center">
                            <h3 class="text-base font-medium mx-4">Near Me</h3>
                        </div>
                    </div><div class="card flex flex-col justify-center items-center hover:shadow-2xl rounded-2xl shad py-2 px-1 hover:-translate-y-1 transition duration-300">
                        <div class="image h-full w-full flex flex-col justify-center items-center mb-2">
                            <div class=" w-full h-full flex flex-grow justify-center items-center">
                                <img src="images/menu-makanan.jpg" class="w-40 rounded-full">
                            </div>
                        </div>
                        <div class="text px-4 py-2 text-center">
                            <h3 class="text-base font-medium mx-4">Near Me</h3>
                        </div>
                    </div><div class="card flex flex-col justify-center items-center hover:shadow-2xl rounded-2xl shad py-2 px-1 hover:-translate-y-1 transition duration-300">
                        <div class="image h-full w-full flex flex-col justify-center items-center mb-2">
                            <div class=" w-full h-full flex flex-grow justify-center items-center">
                                <img src="images/menu-makanan.jpg" class="w-40 rounded-full">
                            </div>
                        </div>
                        <div class="text px-4 py-2 text-center">
                            <h3 class="text-base font-medium mx-4">Near Me</h3>
                        </div>
                    </div><div class="card flex flex-col justify-center items-center hover:shadow-2xl rounded-2xl shad py-2 px-1 hover:-translate-y-1 transition duration-300">
                        <div class="image h-full w-full flex flex-col justify-center items-center mb-2">
                            <div class=" w-full h-full flex flex-grow justify-center items-center">
                                <img src="images/menu-makanan.jpg" class="w-40 rounded-full">
                            </div>
                        </div>
                        <div class="text px-4 py-2 text-center">
                            <h3 class="text-base font-medium mx-4">Near Me</h3>
                        </div>
                    </div><div class="card flex flex-col justify-center items-center hover:shadow-2xl rounded-2xl shad py-2 px-1 hover:-translate-y-1 transition duration-300">
                        <div class="image h-full w-full flex flex-col justify-center items-center mb-2">
                            <div class=" w-full h-full flex flex-grow justify-center items-center">
                                <img src="images/menu-makanan.jpg" class="w-40 rounded-full">
                            </div>
                        </div>
                        <div class="text px-4 py-2 text-center">
                            <h3 class="text-base font-medium mx-4">Near Me</h3>
                        </div>
                    </div><div class="card flex flex-col justify-center items-center hover:shadow-2xl rounded-2xl shad py-2 px-1 hover:-translate-y-1 transition duration-300">
                        <div class="image h-full w-full flex flex-col justify-center items-center mb-2">
                            <div class=" w-full h-full flex flex-grow justify-center items-center">
                                <img src="images/menu-makanan.jpg" class="w-40 rounded-full">
                            </div>
                        </div>
                        <div class="text px-4 py-2 text-center">
                            <h3 class="text-base font-medium mx-4">Near Me</h3>
                        </div>
                    </div><div class="card flex flex-col justify-center items-center hover:shadow-2xl rounded-2xl shad py-2 px-1 hover:-translate-y-1 transition duration-300">
                        <div class="image h-full w-full flex flex-col justify-center items-center mb-2">
                            <div class=" w-full h-full flex flex-grow justify-center items-center">
                                <img src="images/menu-makanan.jpg" class="w-40 rounded-full">
                            </div>
                        </div>
                        <div class="text px-4 py-2 text-center">
                            <h3 class="text-base font-medium mx-4">Near Me</h3>
                        </div>
                    </div><div class="card flex flex-col justify-center items-center hover:shadow-2xl rounded-2xl shad py-2 px-1 hover:-translate-y-1 transition duration-300">
                        <div class="image h-full w-full flex flex-col justify-center items-center mb-2">
                            <div class=" w-full h-full flex flex-grow justify-center items-center">
                                <img src="images/menu-makanan.jpg" class="w-40 rounded-full">
                            </div>
                        </div>
                        <div class="text px-4 py-2 text-center">
                            <h3 class="text-base font-medium mx-4">Near Me</h3>
                        </div>
                    </div><div class="card flex flex-col justify-center items-center hover:shadow-2xl rounded-2xl shad py-2 px-1 hover:-translate-y-1 transition duration-300">
                        <div class="image h-full w-full flex flex-col justify-center items-center mb-2">
                            <div class=" w-full h-full flex flex-grow justify-center items-center">
                                <img src="images/menu-makanan.jpg" class="w-40 rounded-full">
                            </div>
                        </div>
                        <div class="text px-4 py-2 text-center">
                            <h3 class="text-base font-medium mx-4">Near Me</h3>
                        </div>
                    </div><div class="card flex flex-col justify-center items-center hover:shadow-2xl rounded-2xl shad py-2 px-1 hover:-translate-y-1 transition duration-300">
                        <div class="image h-full w-full flex flex-col justify-center items-center mb-2">
                            <div class=" w-full h-full flex flex-grow justify-center items-center">
                                <img src="images/menu-makanan.jpg" class="w-40 rounded-full">
                            </div>
                        </div>
                        <div class="text px-4 py-2 text-center">
                            <h3 class="text-base font-medium mx-4">Near Me</h3>
                        </div>
                    </div><div class="card flex flex-col justify-center items-center hover:shadow-2xl rounded-2xl shad py-2 px-1 hover:-translate-y-1 transition duration-300">
                        <div class="image h-full w-full flex flex-col justify-center items-center mb-2">
                            <div class=" w-full h-full flex flex-grow justify-center items-center">
                                <img src="images/menu-makanan.jpg" class="w-40 rounded-full">
                            </div>
                        </div>
                        <div class="text px-4 py-2 text-center">
                            <h3 class="text-base font-medium mx-4">Near Me</h3>
                        </div>
                    </div><div class="card flex flex-col justify-center items-center hover:shadow-2xl rounded-2xl shad py-2 px-1 hover:-translate-y-1 transition duration-300">
                        <div class="image h-full w-full flex flex-col justify-center items-center mb-2">
                            <div class=" w-full h-full flex flex-grow justify-center items-center">
                                <img src="images/menu-makanan.jpg" class="w-40 rounded-full">
                            </div>
                        </div>
                        <div class="text px-4 py-2 text-center">
                            <h3 class="text-base font-medium mx-4">Near Me</h3>
                        </div>
                    </div><div class="card flex flex-col justify-center items-center hover:shadow-2xl rounded-2xl shad py-2 px-1 hover:-translate-y-1 transition duration-300">
                        <div class="image h-full w-full flex flex-col justify-center items-center mb-2">
                            <div class=" w-full h-full flex flex-grow justify-center items-center">
                                <img src="images/menu-makanan.jpg" class="w-40 rounded-full">
                            </div>
                        </div>
                        <div class="text px-4 py-2 text-center">
                            <h3 class="text-base font-medium mx-4">Near Me</h3>
                        </div>
                    </div><div class="card flex flex-col justify-center items-center hover:shadow-2xl rounded-2xl shad py-2 px-1 hover:-translate-y-1 transition duration-300">
                        <div class="image h-full w-full flex flex-col justify-center items-center mb-2">
                            <div class=" w-full h-full flex flex-grow justify-center items-center">
                                <img src="images/menu-makanan.jpg" class="w-40 rounded-full">
                            </div>
                        </div>
                        <div class="text px-4 py-2 text-center">
                            <h3 class="text-base font-medium mx-4">Near Me</h3>
                        </div>
                    </div><div class="card flex flex-col justify-center items-center hover:shadow-2xl rounded-2xl shad py-2 px-1 hover:-translate-y-1 transition duration-300">
                        <div class="image h-full w-full flex flex-col justify-center items-center mb-2">
                            <div class=" w-full h-full flex flex-grow justify-center items-center">
                                <img src="images/menu-makanan.jpg" class="w-40 rounded-full">
                            </div>
                        </div>
                        <div class="text px-4 py-2 text-center">
                            <h3 class="text-base font-medium mx-4">Near Me</h3>
                        </div>
                    </div><div class="card flex flex-col justify-center items-center hover:shadow-2xl rounded-2xl shad py-2 px-1 hover:-translate-y-1 transition duration-300">
                        <div class="image h-full w-full flex flex-col justify-center items-center mb-2">
                            <div class=" w-full h-full flex flex-grow justify-center items-center">
                                <img src="images/menu-makanan.jpg" class="w-40 rounded-full">
                            </div>
                        </div>
                        <div class="text px-4 py-2 text-center">
                            <h3 class="text-base font-medium mx-4">Near Me</h3>
                        </div>
                    </div><div class="card flex flex-col justify-center items-center hover:shadow-2xl rounded-2xl shad py-2 px-1 hover:-translate-y-1 transition duration-300">
                        <div class="image h-full w-full flex flex-col justify-center items-center mb-2">
                            <div class=" w-full h-full flex flex-grow justify-center items-center">
                                <img src="images/menu-makanan.jpg" class="w-40 rounded-full">
                            </div>
                        </div>
                        <div class="text px-4 py-2 text-center">
                            <h3 class="text-base font-medium mx-4">Near Me</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>