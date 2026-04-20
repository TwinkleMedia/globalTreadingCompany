<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="font-poppins bg-white">
    <?php
    include "./navbar.php"
    ?>
    <?php
    include "./hero.php"
    ?>
    <!-- About Us section -->


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
                            src="https://images.unsplash.com/photo-1599059813005-11265ba4b4ce?w=600&q=80"
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
                            <a href="#" class="inline-flex items-center gap-2 bg-[#CB5116] text-white text-sm font-medium px-5 py-2.5 rounded-sm hover:bg-[#254991] transition-colors duration-300">
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
                            src="https://images.unsplash.com/photo-1611273426858-450d8e3c9fce?w=600&q=80"
                            alt="Lubricant Additives"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-400"></div>
                        <span class="absolute top-3 left-3 bg-[#CB5116] text-white text-xs font-medium px-3 py-1 rounded-full tracking-wide">Additives</span>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="text-[#254991] font-semibold text-base mb-2 group-hover:text-[#CB5116] transition-colors duration-300">Lubricant Additives</h3>
                        <div class="w-8 h-0.5 bg-[#CB5116] mb-3 group-hover:w-16 transition-all duration-400"></div>
                        <p class="text-gray-500 text-sm leading-relaxed flex-1">
                            Precision-formulated additive packages that enhance viscosity, reduce friction, and improve wear protection — tailored for engine oils, gear oils, and industrial lubricants.
                        </p>
                        <div class="mt-5">
                            <a href="#" class="inline-flex items-center gap-2 bg-[#CB5116] text-white text-sm font-medium px-5 py-2.5 rounded-sm hover:bg-[#254991] transition-colors duration-300">
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
                            src="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?w=600&q=80"
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
                            <a href="#" class="inline-flex items-center gap-2 bg-[#CB5116] text-white text-sm font-medium px-5 py-2.5 rounded-sm hover:bg-[#254991] transition-colors duration-300">
                                View List
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 4: Metalworking Fluids -->
                <div class="group bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-xl transition-all duration-400 flex flex-col border-b-4 border-b-transparent hover:border-b-[#CB5116]">
                    <div class="w-full h-52 overflow-hidden relative">
                        <img
                            src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=600&q=80"
                            alt="Metalworking Fluids"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-400"></div>
                        <span class="absolute top-3 left-3 bg-[#CB5116] text-white text-xs font-medium px-3 py-1 rounded-full tracking-wide">Metalworking</span>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="text-[#254991] font-semibold text-base mb-2 group-hover:text-[#CB5116] transition-colors duration-300">Metalworking Fluids</h3>
                        <div class="w-8 h-0.5 bg-[#CB5116] mb-3 group-hover:w-16 transition-all duration-400"></div>
                        <p class="text-gray-500 text-sm leading-relaxed flex-1">
                            Advanced cutting, grinding, and forming fluids designed to improve tool life, surface finish quality, and productivity across CNC machining and precision metalworking operations.
                        </p>
                        <div class="mt-5">
                            <a href="#" class="inline-flex items-center gap-2 bg-[#CB5116] text-white text-sm font-medium px-5 py-2.5 rounded-sm hover:bg-[#254991] transition-colors duration-300">
                                View List
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 5: Finished Fluids -->
                <div class="group bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-xl transition-all duration-400 flex flex-col border-b-4 border-b-transparent hover:border-b-[#CB5116]">
                    <div class="w-full h-52 overflow-hidden relative">
                        <img
                            src="https://images.unsplash.com/photo-1635273051948-e4df8241c5e8?w=600&q=80"
                            alt="Finished Fluids"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-400"></div>
                        <span class="absolute top-3 left-3 bg-[#CB5116] text-white text-xs font-medium px-3 py-1 rounded-full tracking-wide">Fluids</span>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="text-[#254991] font-semibold text-base mb-2 group-hover:text-[#CB5116] transition-colors duration-300">Finished Fluids</h3>
                        <div class="w-8 h-0.5 bg-[#CB5116] mb-3 group-hover:w-16 transition-all duration-400"></div>
                        <p class="text-gray-500 text-sm leading-relaxed flex-1">
                            Ready-to-use finished fluid solutions for automotive and industrial use, blended to global OEM specifications for consistent quality, performance, and reliability across all applications.
                        </p>
                        <div class="mt-5">
                            <a href="#" class="inline-flex items-center gap-2 bg-[#CB5116] text-white text-sm font-medium px-5 py-2.5 rounded-sm hover:bg-[#254991] transition-colors duration-300">
                                View List
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 6: Other Products -->
                <div class="group bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-xl transition-all duration-400 flex flex-col border-b-4 border-b-transparent hover:border-b-[#CB5116]">
                    <div class="w-full h-52 overflow-hidden relative">
                        <img
                            src="https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?w=600&q=80"
                            alt="Other Products"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-400"></div>
                        <span class="absolute top-3 left-3 bg-[#CB5116] text-white text-xs font-medium px-3 py-1 rounded-full tracking-wide">More</span>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="text-[#254991] font-semibold text-base mb-2 group-hover:text-[#CB5116] transition-colors duration-300">Other Products</h3>
                        <div class="w-8 h-0.5 bg-[#CB5116] mb-3 group-hover:w-16 transition-all duration-400"></div>
                        <p class="text-gray-500 text-sm leading-relaxed flex-1">
                            A diverse portfolio of supplementary industrial products including rust preventives, cleaners, degreasers, and process oils catering to a wide range of manufacturing sectors.
                        </p>
                        <div class="mt-5">
                            <a href="#" class="inline-flex items-center gap-2 bg-[#CB5116] text-white text-sm font-medium px-5 py-2.5 rounded-sm hover:bg-[#254991] transition-colors duration-300">
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
            <!-- END GRID -->
            <section style="background:#254991; width:100vw; margin-left:calc(50% - 50vw); padding:56px 0;">
                <div class="max-w-7xl mx-auto px-4">

                    <!-- HEADING -->
                    <div class="flex items-center gap-4 mb-12">
                        <div style="width:4px; height:32px; background:#CB5116; border-radius:2px; flex-shrink:0;"></div>
                        <h2 class="font-poppins font-bold text-xl sm:text-2xl tracking-widest uppercase" style="color:white;">
                            Why Choose Us
                        </h2>
                    </div>

                    <!-- CARDS -->
                    <div class="flex flex-col sm:flex-row items-end justify-between gap-6">

                        <!-- CARD 1 -->
                        <div class="w-full sm:w-1/3 rounded-2xl p-8 flex flex-col items-center text-center" style="background:#f9f9fb; min-height:320px;">
                            <div class="w-14 h-14 rounded-full flex items-center justify-center mb-5" style="background:#254991;">
                                <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="#CB5116" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="font-poppins font-semibold text-lg mb-3" style="color:#254991;">Global Reach</h3>
                            <p class="font-poppins font-light text-sm leading-relaxed" style="color:#254991; opacity:0.75;">
                                Operating across 50+ countries with a robust international network ensuring timely and seamless delivery worldwide.
                            </p>
                        </div>

                        <!-- CARD 2 FEATURED (taller) -->
                        <div class="w-full sm:w-1/3 rounded-2xl p-8 flex flex-col items-center text-center shadow-2xl" style="background:#fff5f0; min-height:390px; margin-bottom:-20px;">
                            <div class="w-14 h-14 rounded-full flex items-center justify-center mb-5" style="background:#CB5116;">
                                <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="#254991" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                </svg>
                            </div>
                            <h3 class="font-poppins font-semibold text-lg mb-3" style="color:#CB5116;">Certified Quality</h3>
                            <p class="font-poppins font-light text-sm leading-relaxed" style="color:#254991; opacity:0.8;">
                                ISO certified processes and strict quality control at every stage — delivering products you can rely on every time with full confidence.
                            </p>
                            <div class="mt-6 w-10 h-1 rounded-full" style="background:#CB5116;"></div>
                        </div>

                        <!-- CARD 3 -->
                        <div class="w-full sm:w-1/3 rounded-2xl p-8 flex flex-col items-center text-center" style="background:#f9f9fb; min-height:320px;">
                            <div class="w-14 h-14 rounded-full flex items-center justify-center mb-5" style="background:#254991;">
                                <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="#CB5116" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="font-poppins font-semibold text-lg mb-3" style="color:#254991;">30+ Years Experience</h3>
                            <p class="font-poppins font-light text-sm leading-relaxed" style="color:#254991; opacity:0.75;">
                                Three decades of industry expertise shaping our deep understanding of global markets and customer needs.
                            </p>
                        </div>

                    </div>
                </div>
            </section>

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
            include "footer.php"
            ?>
</body>

</html>