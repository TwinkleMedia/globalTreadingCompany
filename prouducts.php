<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Products</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>

<body class="font-poppins bg-white m-0 p-0">

    <?php
    include "./navbar.php"
    ?>


    <!-- PRODUCTS HERO -->
    <section class="relative w-full bg-[#254991] py-20 sm:py-28 overflow-hidden">

        <!-- Subtle background glows -->
        <div class="absolute -right-20 -top-20 w-72 h-72 rounded-full bg-[#CB5116] opacity-10 blur-3xl pointer-events-none"></div>
        <div class="absolute -left-10 bottom-0 w-52 h-52 rounded-full bg-[#CB5116] opacity-10 blur-2xl pointer-events-none"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

            <!-- Eyebrow -->
            <p class="text-[#CB5116] font-semibold text-xs sm:text-sm tracking-widest uppercase mb-4">What We Offer</p>

            <!-- Heading -->
            <h1 class="text-white font-bold text-3xl sm:text-4xl lg:text-5xl tracking-wide uppercase mb-5">
                Our Products
            </h1>

            <!-- Divider -->
            <div class="flex items-center justify-center gap-2 mb-6">
                <div class="w-10 h-0.5 bg-white/20 rounded-full"></div>
                <div class="w-3 h-3 rounded-full bg-[#CB5116]"></div>
                <div class="w-10 h-0.5 bg-white/20 rounded-full"></div>
            </div>

            <!-- Subtext -->
            <p class="text-white/60 text-sm sm:text-base font-light leading-relaxed max-w-xl mx-auto mb-8">
                High-quality lubricants, additives, and specialty chemicals engineered for maximum industrial performance.
            </p>

            <!-- Breadcrumb -->
            <div class="flex items-center justify-center gap-2 text-xs text-white/40 font-medium">
                <a href="index.php" class="hover:text-[#CB5116] transition-colors duration-200">Home</a>
                <span>/</span>
                <span class="text-[#CB5116]">Our Products</span>
            </div>

        </div>

        <!-- Wavy bottom -->
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none pointer-events-none">
            <!-- Shadow wave (slightly offset upward, dark & blurred) -->
            <svg class="block w-full absolute bottom-0 left-0 opacity-30" style="height: clamp(40px, 6vw, 70px); filter: blur(6px); transform: translateY(-4px);"
                viewBox="0 0 1440 70" preserveAspectRatio="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M0,30 C240,65 480,0 720,35 C960,65 1200,10 1440,35 L1440,70 L0,70 Z"
                    fill="black" />
            </svg>
            <!-- White wave on top -->
            <svg class="block w-full relative" style="height: clamp(40px, 6vw, 70px);"
                viewBox="0 0 1440 70" preserveAspectRatio="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M0,30 C240,65 480,0 720,35 C960,65 1200,10 1440,35 L1440,70 L0,70 Z"
                    fill="white" />
            </svg>
        </div>

    </section>
    <!-- END PRODUCTS HERO -->
    <!-- END PRODUCTS HERO -->

    <!-- OUR PRODUCTS SECTION -->
    <section class="w-full bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">



            <!-- PRODUCT CARDS GRID -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-7">

                <!-- Card 1: Industrial Oils -->
                <div class="group bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-xl transition-all duration-400 flex flex-col border-b-4 border-b-transparent hover:border-b-[#CB5116]">
                    <div class="w-full h-52 overflow-hidden relative">
                        <img
                            src="./assets/IndustrialOils.jpg"
                            alt="Industrial Oils"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-400"></div>
                        <span class="absolute top-3 left-3 bg-[#CB5116] text-white text-xs font-medium px-3 py-1 rounded-full tracking-wide">Industrial</span>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="text-[#254991] font-semibold text-base mb-2 group-hover:text-[#CB5116] transition-colors duration-300">Industrial Oils</h3>
                        <div class="w-8 h-0.5 bg-[#CB5116] mb-3 group-hover:w-16 transition-all duration-400"></div>
                        <p class="text-gray-500 text-sm leading-relaxed flex-1">
                            High-performance industrial oils engineered for heavy-duty machinery, offering superior thermal stability, oxidation resistance, and extended drain intervals for maximum equipment protection.
                        </p>
                        <div class="mt-5">
                            <a href="./IndustrialOils.php" class="inline-flex items-center gap-2 bg-[#CB5116] text-white text-sm font-medium px-5 py-2.5 rounded-sm hover:bg-[#254991] transition-colors duration-300">
                                View List
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Lubricant Additives -->
                <div class="group bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-xl transition-all duration-400 flex flex-col border-b-4 border-b-transparent hover:border-b-[#CB5116]">
                    <div class="w-full h-52 overflow-hidden relative">
                        <img
                            src="./assets/lubricant-additives.webp"
                            alt="Lubricant Additives"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-400"></div>
                        <span class="absolute top-3 left-3 bg-[#CB5116] text-white text-xs font-medium px-3 py-1 rounded-full tracking-wide">Additives</span>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="text-[#254991] font-semibold text-base mb-2 group-hover:text-[#CB5116] transition-colors duration-300">Lubricant Additives / Speciality Chemicals </h3>
                        <div class="w-8 h-0.5 bg-[#CB5116] mb-3 group-hover:w-16 transition-all duration-400"></div>
                        <p class="text-gray-500 text-sm leading-relaxed flex-1">
                            Precision-formulated additive packages that enhance viscosity, reduce friction, and improve wear protection — tailored for engine oils, gear oils, and industrial lubricants.
                        </p>
                        <div class="mt-5">
                            <a href="./lubricantAdditives.php" class="inline-flex items-center gap-2 bg-[#CB5116] text-white text-sm font-medium px-5 py-2.5 rounded-sm hover:bg-[#254991] transition-colors duration-300">
                                View List
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Specialty Chemicals -->
                <div class="group bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-xl transition-all duration-400 flex flex-col border-b-4 border-b-transparent hover:border-b-[#CB5116]">
                    <div class="w-full h-52 overflow-hidden relative">
                        <img
                            src="./assets/Viscosityindeximprovers.jpg"
                            alt="Specialty Chemicals"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-400"></div>
                        <span class="absolute top-3 left-3 bg-[#CB5116] text-white text-xs font-medium px-3 py-1 rounded-full tracking-wide">Chemicals</span>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="text-[#254991] font-semibold text-base mb-2 group-hover:text-[#CB5116] transition-colors duration-300">Specialty Chemicals</h3>
                        <div class="w-8 h-0.5 bg-[#CB5116] mb-3 group-hover:w-16 transition-all duration-400"></div>
                        <p class="text-gray-500 text-sm leading-relaxed flex-1">
                            A curated range of specialty chemicals for industrial and manufacturing applications, formulated to meet stringent performance and environmental compliance standards.
                        </p>
                        <div class="mt-5">
                            <a href="./viscosityindeximprovers.php" class="inline-flex items-center gap-2 bg-[#CB5116] text-white text-sm font-medium px-5 py-2.5 rounded-sm hover:bg-[#254991] transition-colors duration-300">
                                View List
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>



            </div>
    </section>
    <?php
    include "./whatsapp-float.php"
    ?>

    <?php
    include "./footer.php"
    ?>

</body>

</html>