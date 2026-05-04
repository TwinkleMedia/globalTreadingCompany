<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home / Global Treading Company</title>
</head>

<body class="font-poppins bg-white">
    <?php
    include "./navbar.php"
    ?>
    <?php
    include "./hero.php"
    ?>


    <!-- ABOUT SECTION -->
    <section class="w-full bg-white py-14">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- HEADING -->
            <div class="flex items-stretch mb-10">
                <div class="w-1 bg-[#CB5116] mr-4 rounded-sm"></div>
                <div>
                    <p class="text-[#CB5116] font-semibold text-lg tracking-widest uppercase leading-tight">About Us</p>
                    <h2 class="text-[#254991] font-bold text-xl sm:text-2xl  tracking-wide uppercase mt-1">
                        Who We Are
                    </h2>
                </div>
            </div>

            <!-- TEXT + IMAGE ROW -->
            <div class="flex flex-col md:flex-row gap-10 items-start mb-10">

                <!-- PARAGRAPH -->
                <div class="w-full md:w-1/2">
                    <p class="text-gray-700 text-sm sm:text-base leading-relaxed">
                        Global Treading Company Pvt Ltd . has evolved into a premier integrated solution provider for industrial performance. We have established state-of-the-art in-house blending and manufacturing capabilities for all types of engine oils and industrial lubricants. Combining our own production capabilities with a robust network of global additive suppliers, we ensure that every drop of oil meets stringent viscosity and purity standards. We serve diverse sectors including automotive, heavy engineering, and textiles, delivering products engineered for maximum efficiency and machinery longevity.
                    </p>
                </div>

                <!-- IMAGE -->
                <div class="w-full h-80 md:w-1/2">
                    <img
                        src="./assets/bg2.jpg"
                        alt="Engine oil being poured"
                        class="w-full h-72 sm:h-72 object-cover rounded-sm" />
                </div>

            </div>

            <!-- MISSION / VISION / VALUES CARDS -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">

                <!-- Our Mission -->
                <div class="bg-gray-100 rounded-sm p-6">
                    <h3 class="text-[#CB5116] font-semibold text-sm sm:text-base mb-3">Our Mission</h3>
                    <p class="text-gray-700 text-sm leading-relaxed">
                        To deliver high-quality, in-house manufactured lubricants and chemical solutions that enhance industrial productivity while adhering to global quality benchmarks.
                    </p>
                </div>

                <!-- Our Vision -->
                <div class="bg-gray-100 rounded-sm p-6">
                    <h3 class="text-[#CB5116] font-semibold text-sm sm:text-base mb-3">Our Vision</h3>
                    <p class="text-gray-700 text-sm leading-relaxed">
                        To become the leading manufacturer of choice for engine oils and specialty chemicals, recognized for innovation and consistent product reliability.
                    </p>
                </div>

                <!-- Our Values -->
                <div class="bg-gray-100 rounded-sm p-6">
                    <h3 class="text-[#CB5116] font-semibold text-sm sm:text-base mb-3">Our Values</h3>
                    <p class="text-gray-700 text-sm leading-relaxed">
                        Precision Manufacturing, Strict Quality Control, and Customer Satisfaction form the core of our production process.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- OUR EXPERTISE SECTION -->
    <!-- Place this AFTER the hero section and BEFORE the Our Key Strengths section -->

    <section class="w-full bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- HEADING -->
            <div class="flex items-stretch mb-6">
                <div class="w-1 bg-[#CB5116] mr-4 rounded-sm flex-shrink-0"></div>
                <div>
                    <h2 class="text-[#254991] font-bold text-xl sm:text-2xl tracking-wide uppercase font-poppins">
                        Our Expertise
                    </h2>
                </div>
            </div>

            <!-- Subtext -->
            <p class="text-gray-600 text-sm sm:text-base leading-relaxed mb-10 max-w-2xl font-poppins">
                With over two decades of experience, our team develops cutting-edge lubricants and Additives.
            </p>

            <!-- 2x2 GRID with dividers -->
            <div class="grid grid-cols-1 sm:grid-cols-2 bg-[#EEF3FB] rounded-xl overflow-hidden">

                <!-- Item 1: Engineered lubricant additives -->
                <div class="group flex items-start gap-5 p-8 sm:border-r border-[#cdd8ee] border-b border-[#cdd8ee] hover:bg-[#254991]/5 transition-colors duration-300">
                    <!-- Icon box -->
                    <div class="w-14 h-14 flex-shrink-0 flex items-center justify-center bg-white rounded-lg shadow-sm group-hover:shadow-md transition-shadow duration-300">
                        <svg class="w-8 h-8" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Oil can + molecules icon -->
                            <rect x="6" y="18" width="18" height="22" rx="2" stroke="#254991" stroke-width="2" fill="none" />
                            <path d="M10 18V14a4 4 0 014-4h2" stroke="#254991" stroke-width="2" stroke-linecap="round" />
                            <path d="M18 10h4l2-4" stroke="#254991" stroke-width="2" stroke-linecap="round" />
                            <circle cx="34" cy="12" r="3" stroke="#CB5116" stroke-width="2" fill="none" />
                            <circle cx="42" cy="20" r="2.5" stroke="#CB5116" stroke-width="2" fill="none" />
                            <circle cx="34" cy="26" r="2.5" stroke="#CB5116" stroke-width="2" fill="none" />
                            <line x1="36.5" y1="14" x2="40" y2="18" stroke="#CB5116" stroke-width="1.5" />
                            <line x1="36.5" y1="24" x2="40" y2="22" stroke="#CB5116" stroke-width="1.5" />
                            <path d="M8 28h14M8 33h14" stroke="#254991" stroke-width="1.5" stroke-linecap="round" opacity="0.4" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-[#254991] font-semibold text-base leading-snug font-poppins group-hover:text-[#CB5116] transition-colors duration-300">
                            Engineered lubricant additives
                        </h3>
                        <p class="text-gray-500 text-xs leading-relaxed mt-1.5 font-poppins">
                            Precision-engineered additive packages that enhance viscosity, reduce wear, and extend the life of lubricant formulations.
                        </p>
                    </div>
                </div>

                <!-- Item 2: Advanced additives for diverse applications -->
                <div class="group flex items-start gap-5 p-8 border-b border-[#cdd8ee] hover:bg-[#254991]/5 transition-colors duration-300">
                    <div class="w-14 h-14 flex-shrink-0 flex items-center justify-center bg-white rounded-lg shadow-sm group-hover:shadow-md transition-shadow duration-300">
                        <svg class="w-8 h-8" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Gear + robotic arm / machinery -->
                            <circle cx="18" cy="24" r="7" stroke="#254991" stroke-width="2" fill="none" />
                            <circle cx="18" cy="24" r="2.5" fill="#254991" />
                            <path d="M18 14v-3M18 37v-3M8 24H5M31 24h-3" stroke="#254991" stroke-width="2" stroke-linecap="round" />
                            <path d="M11 17l-2-2M27 31l-2-2M11 31l-2 2M27 17l-2 2" stroke="#254991" stroke-width="1.5" stroke-linecap="round" />
                            <!-- arm -->
                            <path d="M30 18h6a2 2 0 012 2v6" stroke="#CB5116" stroke-width="2" stroke-linecap="round" />
                            <circle cx="38" cy="28" r="3" stroke="#CB5116" stroke-width="2" fill="none" />
                            <path d="M38 31v5" stroke="#CB5116" stroke-width="2" stroke-linecap="round" />
                            <path d="M34 36h8" stroke="#CB5116" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-[#254991] font-semibold text-base leading-snug font-poppins group-hover:text-[#CB5116] transition-colors duration-300">
                            Advanced additives or diverse applications
                        </h3>
                        <p class="text-gray-500 text-xs leading-relaxed mt-1.5 font-poppins">
                            Specialized additive solutions tailored across industries — from heavy engineering and textiles to automotive and marine applications.
                        </p>
                    </div>
                </div>

                <!-- Item 3: Premium lubricants for automotive, manufacturing, and construction -->
                <div class="group flex items-start gap-5 p-8 sm:border-r border-[#cdd8ee] hover:bg-[#254991]/5 transition-colors duration-300">
                    <div class="w-14 h-14 flex-shrink-0 flex items-center justify-center bg-white rounded-lg shadow-sm group-hover:shadow-md transition-shadow duration-300">
                        <svg class="w-8 h-8" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Car with lubricant drop -->
                            <rect x="6" y="22" width="30" height="14" rx="3" stroke="#254991" stroke-width="2" fill="none" />
                            <path d="M10 22l4-8h14l4 8" stroke="#254991" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <circle cx="13" cy="37" r="3.5" stroke="#254991" stroke-width="2" fill="none" />
                            <circle cx="29" cy="37" r="3.5" stroke="#254991" stroke-width="2" fill="none" />
                            <!-- Oil drop -->
                            <path d="M40 10c0 4-3.5 7-3.5 7S33 14 33 10a3.5 3.5 0 117 0z" stroke="#CB5116" stroke-width="1.8" fill="none" />
                            <path d="M36.5 32v-10" stroke="#CB5116" stroke-width="1.5" stroke-linecap="round" stroke-dasharray="2 2" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-[#254991] font-semibold text-base leading-snug font-poppins group-hover:text-[#CB5116] transition-colors duration-300">
                            Premium lubricants for automotive, manufacturing, and construction
                        </h3>
                        <p class="text-gray-500 text-xs leading-relaxed mt-1.5 font-poppins">
                            High-performance engine oils, gear oils, and hydraulic fluids engineered for maximum efficiency and machinery longevity.
                        </p>
                    </div>
                </div>

                <!-- Item 4: Specialty chemicals for industrial and automotive use -->
                <div class="group flex items-start gap-5 p-8 hover:bg-[#254991]/5 transition-colors duration-300">
                    <div class="w-14 h-14 flex-shrink-0 flex items-center justify-center bg-white rounded-lg shadow-sm group-hover:shadow-md transition-shadow duration-300">
                        <svg class="w-8 h-8" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Flask / beakers -->
                            <path d="M18 8v14l-8 16h28L30 22V8" stroke="#254991" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <line x1="16" y1="8" x2="32" y2="8" stroke="#254991" stroke-width="2" stroke-linecap="round" />
                            <path d="M14 32h20" stroke="#254991" stroke-width="1.5" stroke-linecap="round" opacity="0.35" />
                            <!-- Bubbles inside -->
                            <circle cx="20" cy="30" r="2" fill="#CB5116" opacity="0.7" />
                            <circle cx="26" cy="34" r="1.5" fill="#CB5116" opacity="0.7" />
                            <circle cx="30" cy="29" r="1" fill="#CB5116" opacity="0.5" />
                            <!-- Small flask right -->
                            <path d="M36 16v6l4 8" stroke="#CB5116" stroke-width="1.5" stroke-linecap="round" />
                            <line x1="34" y1="16" x2="38" y2="16" stroke="#CB5116" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-[#254991] font-semibold text-base leading-snug font-poppins group-hover:text-[#CB5116] transition-colors duration-300">
                            Specialty chemicals for industrial and automotive Use
                        </h3>
                        <p class="text-gray-500 text-xs leading-relaxed mt-1.5 font-poppins">
                            A curated range of specialty chemicals meeting stringent performance and environmental compliance standards for diverse industrial sectors.
                        </p>
                    </div>
                </div>

            </div>
            <!-- END GRID -->

        </div>
    </section>
    <!-- END OUR EXPERTISE SECTION -->



    <!-- OUR PRODUCTS SECTION -->
    <section class="w-full bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- HEADING -->
            <div class="flex items-stretch mb-12">
                <div class="w-1 bg-[#CB5116] mr-4 rounded-sm"></div>
                <div>
                    <p class="text-[#CB5116] font-semibold text-lg tracking-widest uppercase leading-tight">What We Offer</p>
                    <h2 class="text-[#254991] font-bold text-xl sm:text-2xl  decoration-[#254991] tracking-wide uppercase mt-1">
                        Our Products
                    </h2>
                </div>
            </div>

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
                        <h3 class="text-[#254991] font-semibold text-base mb-2 group-hover:text-[#CB5116] transition-colors duration-300">Lubricant Additives / Speciality Chemicals</h3>
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
                        <h3 class="text-[#254991] font-semibold text-base mb-2 group-hover:text-[#CB5116] transition-colors duration-300">Viscosity index improvers</h3>
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

    </section>
    <!-- END GRID -->
    <!-- WHY CHOOSE US SECTION — REPLACE EXISTING -->

    <section class="w-full bg-[#254991] py-16 relative overflow-hidden">

        <!-- Decorative background rings -->
        <div class="absolute top-[-60px] right-[-60px] w-[320px] h-[320px] rounded-full border border-white/10 pointer-events-none"></div>
        <div class="absolute bottom-[-80px] left-[-40px] w-[260px] h-[260px] rounded-full border border-white/10 pointer-events-none"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] rounded-full border border-white/5 pointer-events-none"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- HEADING -->
            <div class="flex items-stretch mb-14">
                <div class="w-1 bg-[#CB5116] mr-4 rounded-sm flex-shrink-0"></div>
                <div>
                    <p class="text-[#CB5116] font-semibold text-sm tracking-[0.25em] uppercase font-poppins leading-tight">Our Advantage</p>
                    <h2 class="font-poppins font-bold text-xl sm:text-2xl tracking-wide uppercase text-white mt-1">
                        Why Choose Us
                    </h2>
                </div>
            </div>

            <!-- THREE ITEMS — ALTERNATING LAYOUT -->
            <div class="flex flex-col gap-0">

                <!-- ITEM 1: Research & Development — LEFT aligned -->
                <div class="group flex flex-col sm:flex-row items-stretch gap-0 border-b border-white/10">
                    <!-- Number + accent -->
                    <div class="flex-shrink-0 w-full sm:w-20 flex sm:flex-col items-center sm:items-center justify-start sm:justify-start gap-4 sm:gap-0 pt-8 sm:pt-10 pb-4 sm:pb-10 sm:pr-6">
                        <span class="font-poppins font-bold text-4xl sm:text-5xl text-white/10 leading-none select-none">01</span>
                        <div class="w-8 sm:w-0.5 h-0.5 sm:h-full bg-[#CB5116]/40 sm:mt-4 sm:mx-auto"></div>
                    </div>

                    <!-- Content -->
                    <div class="flex-1 py-8 sm:py-10 sm:pl-8 sm:border-l border-white/10">
                        <div class="flex items-start gap-5">
                            <!-- Icon -->
                            <div class="w-14 h-14 rounded-md bg-white/10 border border-white/20 flex items-center justify-center flex-shrink-0 group-hover:bg-[#CB5116] group-hover:border-[#CB5116] transition-all duration-300">
                                <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="#CB5116" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                </svg>
                            </div>
                            <!-- Text -->
                            <div class="flex-1">
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-1 h-6 bg-[#CB5116] rounded-sm flex-shrink-0"></div>
                                    <h3 class="font-poppins font-bold text-lg sm:text-xl text-white tracking-wide">Research &amp; Development</h3>
                                </div>
                                <p class="font-poppins font-light text-sm sm:text-base text-white/75 leading-relaxed max-w-xl">
                                    Sustainability and innovation drive our R&amp;D efforts, focusing on eco-friendly products and solutions that reduce environmental impact.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Right label — hidden on mobile -->
                    <div class="hidden lg:flex items-center justify-end w-48 py-10 pl-8">
                        <span class="text-white/20 font-poppins font-bold text-xs uppercase tracking-[0.3em] rotate-90 whitespace-nowrap">R &amp; D</span>
                    </div>
                </div>

                <!-- ITEM 2: Manufacturing and Distribution — RIGHT aligned / accent -->
                <div class="group flex flex-col sm:flex-row items-stretch gap-0 border-b border-white/10 bg-white/5">
                    <!-- Number -->
                    <div class="flex-shrink-0 w-full sm:w-20 flex sm:flex-col items-center sm:items-center justify-start sm:justify-start gap-4 sm:gap-0 pt-8 sm:pt-10 pb-4 sm:pb-10 sm:pr-6">
                        <span class="font-poppins font-bold text-4xl sm:text-5xl text-white/10 leading-none select-none">02</span>
                        <div class="w-8 sm:w-0.5 h-0.5 sm:h-full bg-[#CB5116]/40 sm:mt-4 sm:mx-auto"></div>
                    </div>

                    <!-- Content -->
                    <div class="flex-1 py-8 sm:py-10 sm:pl-8 sm:border-l border-white/10">
                        <div class="flex items-start gap-5">
                            <!-- Icon -->
                            <div class="w-14 h-14 rounded-md bg-[#CB5116] border border-[#CB5116] flex items-center justify-center flex-shrink-0 group-hover:bg-white group-hover:border-white transition-all duration-300">
                                <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                </svg>
                            </div>
                            <!-- Text -->
                            <div class="flex-1">
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-1 h-6 bg-[#CB5116] rounded-sm flex-shrink-0"></div>
                                    <h3 class="font-poppins font-bold text-lg sm:text-xl text-white tracking-wide">Manufacturing and Distribution</h3>
                                </div>
                                <p class="font-poppins font-light text-sm sm:text-base text-white/75 leading-relaxed max-w-xl">
                                    Our state-of-the-art facilities and strong distribution network ensure excellence, regardless of location.
                                </p>
                                <!-- Highlight pill -->
                                <div class="mt-4 inline-flex items-center gap-2 bg-[#CB5116]/20 border border-[#CB5116]/40 rounded-full px-4 py-1.5">
                                    <div class="w-1.5 h-1.5 rounded-full bg-[#CB5116]"></div>
                                    <span class="text-[#CB5116] text-xs font-semibold font-poppins tracking-wide">State-of-the-art Facilities</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hidden lg:flex items-center justify-end w-48 py-10 pl-8">
                        <span class="text-white/20 font-poppins font-bold text-xs uppercase tracking-[0.3em] rotate-90 whitespace-nowrap">Manufacturing</span>
                    </div>
                </div>

                <!-- ITEM 3: Customer-Centric Approach -->
                <div class="group flex flex-col sm:flex-row items-stretch gap-0">
                    <!-- Number -->
                    <div class="flex-shrink-0 w-full sm:w-20 flex sm:flex-col items-center sm:items-center justify-start sm:justify-start gap-4 sm:gap-0 pt-8 sm:pt-10 pb-4 sm:pb-10 sm:pr-6">
                        <span class="font-poppins font-bold text-4xl sm:text-5xl text-white/10 leading-none select-none">03</span>
                        <div class="w-8 sm:w-0.5 h-0.5 sm:h-0 bg-[#CB5116]/40 sm:mt-4 sm:mx-auto"></div>
                    </div>

                    <!-- Content -->
                    <div class="flex-1 py-8 sm:py-10 sm:pl-8 sm:border-l border-white/10">
                        <div class="flex items-start gap-5">
                            <!-- Icon -->
                            <div class="w-14 h-14 rounded-md bg-white/10 border border-white/20 flex items-center justify-center flex-shrink-0 group-hover:bg-[#CB5116] group-hover:border-[#CB5116] transition-all duration-300">
                                <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="#CB5116" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <!-- Text -->
                            <div class="flex-1">
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-1 h-6 bg-[#CB5116] rounded-sm flex-shrink-0"></div>
                                    <h3 class="font-poppins font-bold text-lg sm:text-xl text-white tracking-wide">Customer-Centric Approach</h3>
                                </div>
                                <p class="font-poppins font-light text-sm sm:text-base text-white/75 leading-relaxed max-w-xl">
                                    Our experienced professionals work closely with clients to offer tailored solutions, technical support, and exceptional service.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="hidden lg:flex items-center justify-end w-48 py-10 pl-8">
                        <span class="text-white/20 font-poppins font-bold text-xs uppercase tracking-[0.3em] rotate-90 whitespace-nowrap">Customer First</span>
                    </div>
                </div>

            </div>
            <!-- END ITEMS -->

        </div>
    </section>
    <!-- END WHY CHOOSE US -->

    <!-- CONTACT US SECTION -->
    <section class="w-full bg-gray-50 py-14">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- HEADING -->
            <div class="flex items-stretch mb-10">
                <div class="w-1 bg-[#CB5116] mr-4 rounded-sm"></div>
                <div>
                    <p class="text-[#CB5116] font-semibold text-lg tracking-widest uppercase leading-tight">Get In Touch</p>
                    <h2 class="text-[#254991] font-bold text-xl sm:text-2xl tracking-wide uppercase mt-1">
                        Contact Us
                    </h2>
                </div>
            </div>

            <!-- GRID: INFO + FORM -->
            <div class="flex flex-col lg:flex-row gap-10 items-start">

                <!-- LEFT: CONTACT INFO -->
                <div class="w-full lg:w-2/5">
                    <p class="text-gray-600 text-sm leading-relaxed mb-8">
                        Have a product enquiry or want to discuss a bulk order? Reach out to our team — we're ready to deliver solutions that match your industrial needs.
                    </p>

                    <!-- Address -->
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-11 h-11 rounded-md bg-[#254991] flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="#CB5116" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-[#CB5116] text-xs font-semibold uppercase tracking-widest mb-1">Our Address</p>
                            <p class="text-gray-700 text-sm leading-relaxed">Plot No. 12, MIDC Industrial Area,<br>Mumbai, Maharashtra – 400093</p>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-11 h-11 rounded-md bg-[#254991] flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="#CB5116" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 6.75z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-[#CB5116] text-xs font-semibold uppercase tracking-widest mb-1">Phone</p>
                            <p class="text-gray-700 text-sm leading-relaxed">+91 98200 00000<br>+91 22 1234 5678</p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-11 h-11 rounded-md bg-[#254991] flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="#CB5116" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0l-9.75 6.75L2.25 6.75" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-[#CB5116] text-xs font-semibold uppercase tracking-widest mb-1">Email</p>
                            <p class="text-gray-700 text-sm leading-relaxed">info@globaltreading.com<br>sales@globaltreading.com</p>
                        </div>
                    </div>

                    <!-- Business Hours -->
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-11 h-11 rounded-md bg-[#254991] flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="#CB5116" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-[#CB5116] text-xs font-semibold uppercase tracking-widest mb-1">Business Hours</p>
                            <p class="text-gray-700 text-sm leading-relaxed">Mon – Sat: 9:00 AM – 6:00 PM<br>Sunday: Closed</p>
                        </div>
                    </div>

                </div>

                <!-- RIGHT: CONTACT FORM -->
                <div class="w-full lg:w-3/5">
                    <div class="bg-white rounded-lg p-8 shadow-sm border border-gray-100">

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-5">
                            <!-- Full Name -->
                            <div class="flex flex-col gap-1.5">
                                <label class="text-[#254991] text-xs font-semibold uppercase tracking-wider">Full Name</label>
                                <input
                                    type="text"
                                    placeholder="John Doe"
                                    class="border border-gray-200 rounded-sm px-3.5 py-2.5 text-sm text-gray-700 bg-gray-50 focus:outline-none focus:border-[#254991] focus:bg-white transition-colors duration-200" />
                            </div>
                            <!-- Company -->
                            <div class="flex flex-col gap-1.5">
                                <label class="text-[#254991] text-xs font-semibold uppercase tracking-wider">Company</label>
                                <input
                                    type="text"
                                    placeholder="Your Company Ltd."
                                    class="border border-gray-200 rounded-sm px-3.5 py-2.5 text-sm text-gray-700 bg-gray-50 focus:outline-none focus:border-[#254991] focus:bg-white transition-colors duration-200" />
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-5">
                            <!-- Email -->
                            <div class="flex flex-col gap-1.5">
                                <label class="text-[#254991] text-xs font-semibold uppercase tracking-wider">Email Address</label>
                                <input
                                    type="email"
                                    placeholder="john@company.com"
                                    class="border border-gray-200 rounded-sm px-3.5 py-2.5 text-sm text-gray-700 bg-gray-50 focus:outline-none focus:border-[#254991] focus:bg-white transition-colors duration-200" />
                            </div>
                            <!-- Phone -->
                            <div class="flex flex-col gap-1.5">
                                <label class="text-[#254991] text-xs font-semibold uppercase tracking-wider">Phone Number</label>
                                <input
                                    type="tel"
                                    placeholder="+91 98000 00000"
                                    class="border border-gray-200 rounded-sm px-3.5 py-2.5 text-sm text-gray-700 bg-gray-50 focus:outline-none focus:border-[#254991] focus:bg-white transition-colors duration-200" />
                            </div>
                        </div>

                        <!-- Product Interest -->
                        <div class="flex flex-col gap-1.5 mb-5">
                            <label class="text-[#254991] text-xs font-semibold uppercase tracking-wider">Product Interest</label>
                            <select class="border border-gray-200 rounded-sm px-3.5 py-2.5 text-sm text-gray-700 bg-gray-50 focus:outline-none focus:border-[#254991] focus:bg-white transition-colors duration-200">
                                <option value="" disabled selected>Select a product category</option>
                                <option>Industrial Oils</option>
                                <option>Lubricant Additives</option>
                                <option>Specialty Chemicals</option>
                                <option>Metalworking Fluids</option>
                                <option>Finished Fluids</option>
                                <option>Other Products</option>
                            </select>
                        </div>

                        <!-- Message -->
                        <div class="flex flex-col gap-1.5 mb-6">
                            <label class="text-[#254991] text-xs font-semibold uppercase tracking-wider">Message</label>
                            <textarea
                                rows="4"
                                placeholder="Tell us about your requirement or inquiry..."
                                class="border border-gray-200 rounded-sm px-3.5 py-2.5 text-sm text-gray-700 bg-gray-50 focus:outline-none focus:border-[#254991] focus:bg-white transition-colors duration-200 resize-none"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button class="inline-flex items-center gap-2 bg-[#CB5116] text-white text-sm font-semibold px-6 py-3 rounded-sm hover:bg-[#254991] transition-colors duration-300">
                            Send Enquiry
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </button>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <?php
    include "./whatsapp-float.php"
    ?>
    <?php
    include "footer.php"
    ?>
</body>

</html>