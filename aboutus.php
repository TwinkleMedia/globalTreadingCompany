<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us </title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php
    include "./navbar.php"
    ?>


    <section class="relative w-full min-h-[88vh] bg-[#254991] overflow-hidden flex items-center">

        <!-- Background decorative circles -->
        <div class="absolute top-[-80px] right-[-80px] w-[400px] h-[400px] rounded-full border border-white/10 pointer-events-none"></div>
        <div class="absolute top-[-40px] right-[-40px] w-[260px] h-[260px] rounded-full border border-white/10 pointer-events-none"></div>
        <div class="absolute bottom-[-100px] left-[-60px] w-[320px] h-[320px] rounded-full border border-white/10 pointer-events-none"></div>

        <!-- Accent diagonal bar top-right -->
        <div class="absolute top-0 right-0 w-1/3 h-2 bg-[#CB5116]"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full py-20 lg:py-28">
            <div class="flex flex-col lg:flex-row items-center gap-14 lg:gap-20">

                <!-- LEFT: TEXT CONTENT -->
                <div class="w-full lg:w-1/2 text-white">

                    <!-- Breadcrumb -->
                    <div class="flex items-center gap-2 mb-6">
                        <a href="./index.php" class="text-white/60 text-xs font-medium tracking-widest uppercase hover:text-[#CB5116] transition-colors duration-200 font-poppins">Home</a>
                        <span class="text-white/30 text-xs">/</span>
                        <span class="text-[#CB5116] text-xs font-semibold tracking-widest uppercase font-poppins">About Us</span>
                    </div>

                    <!-- Label -->
                    <p class="text-[#CB5116] text-sm font-semibold tracking-[0.25em] uppercase mb-3 font-poppins">Our Story</p>

                    <!-- Main Heading -->
                    <h1 class="font-poppins font-bold text-3xl sm:text-4xl lg:text-5xl leading-tight tracking-wide uppercase text-white mb-6">
                        Who We Are &amp;<br>
                        <span class="text-[#CB5116]">What We Stand For</span>
                    </h1>

                    <!-- Divider -->
                    <div class="flex items-center gap-3 mb-7">
                        <div class="w-12 h-[3px] bg-[#CB5116] rounded-sm"></div>
                        <div class="w-3 h-[3px] bg-white/30 rounded-sm"></div>
                    </div>

                    <!-- Description -->
                    <p class="font-poppins font-light text-white/80 text-sm sm:text-base leading-relaxed max-w-lg mb-10">
                        For over 30 years, Global Treading Company Pvt Ltd has been a trusted name in industrial lubricants and specialty chemicals — combining in-house manufacturing excellence with a global supply network.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="flex flex-wrap items-center gap-4">
                        <a href="#about-content" class="inline-flex items-center gap-2 bg-[#CB5116] text-white font-semibold text-sm px-6 py-3 rounded-sm hover:bg-white hover:text-[#CB5116] transition-colors duration-300 font-poppins">
                            Our Journey
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                        <a href="#contact" class="inline-flex items-center gap-2 border border-white/40 text-white font-medium text-sm px-6 py-3 rounded-sm hover:border-[#CB5116] hover:text-[#CB5116] transition-colors duration-300 font-poppins">
                            Contact Us
                        </a>
                    </div>

                </div>

                <!-- RIGHT: STAT CARDS + FLOATING BADGE -->
                <div class="w-full lg:w-1/2 flex flex-col items-center lg:items-end gap-5">

                    <!-- Image with overlay badge -->
                    <div class="relative w-full max-w-md">
                        <img
                            src="./assets/bg2.jpg"
                            alt="Global Treading Company facility"
                            class="w-full h-72 sm:h-80 object-cover rounded-lg opacity-90" />

                        <!-- Floating certified badge -->
                        <div class="absolute -bottom-5 -left-5 bg-[#CB5116] text-white rounded-lg px-5 py-4 shadow-xl flex items-center gap-3">
                            <svg class="w-7 h-7 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                            <div>
                                <p class="font-poppins font-bold text-sm leading-tight">ISO Certified</p>
                                <p class="font-poppins font-light text-xs text-white/80 leading-tight">Quality Assured</p>
                            </div>
                        </div>

                        <!-- Floating years badge -->
                        <div class="absolute -top-5 -right-5 bg-white rounded-lg px-5 py-4 shadow-xl flex items-center gap-3">
                            <div>
                                <p class="font-poppins font-bold text-2xl text-[#254991] leading-tight">30+</p>
                                <p class="font-poppins font-light text-xs text-gray-500 leading-tight">Years of Trust</p>
                            </div>
                        </div>
                    </div>

                    <!-- STATS ROW -->
                    <div class="grid grid-cols-3 gap-4 w-full max-w-md mt-8">
                        <!-- Stat 1 -->
                        <div class="bg-white/10 border border-white/20 rounded-lg p-4 text-center">
                            <p class="font-poppins font-bold text-2xl text-[#CB5116] leading-tight">50+</p>
                            <p class="font-poppins text-xs text-white/70 mt-1 leading-snug">Countries Served</p>
                        </div>
                        <!-- Stat 2 -->
                        <div class="bg-white/10 border border-white/20 rounded-lg p-4 text-center">
                            <p class="font-poppins font-bold text-2xl text-[#CB5116] leading-tight">500+</p>
                            <p class="font-poppins text-xs text-white/70 mt-1 leading-snug">Products</p>
                        </div>
                        <!-- Stat 3 -->
                        <div class="bg-white/10 border border-white/20 rounded-lg p-4 text-center">
                            <p class="font-poppins font-bold text-2xl text-[#CB5116] leading-tight">1000+</p>
                            <p class="font-poppins text-xs text-white/70 mt-1 leading-snug">Happy Clients</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Bottom wave / divider -->
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none pointer-events-none">
            <svg viewBox="0 0 1440 60" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="w-full h-12 sm:h-16">
                <path d="M0,40 C360,0 1080,60 1440,20 L1440,60 L0,60 Z" fill="white" />
            </svg>
        </div>

    </section>
    <!-- END ABOUT HERO SECTION -->


    <!-- OUR KEY STRENGTHS SECTION -->
    <section class="w-full bg-white py-16" id="about-content">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- HEADING -->
            <div class="flex items-stretch mb-12">
                <div class="w-1 bg-[#CB5116] mr-4 rounded-sm"></div>
                <div>
                    <p class="text-[#CB5116] font-semibold text-lg tracking-widest uppercase leading-tight font-poppins">What We Do Best</p>
                    <h2 class="text-[#254991] font-bold text-xl sm:text-2xl tracking-wide uppercase mt-1 font-poppins">
                        Our Key Strengths
                    </h2>
                </div>
            </div>

            <!-- THREE STRENGTH CARDS -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-20">

                <!-- Card 1: Lubricating Oils -->
                <div class="group relative bg-gray-50 rounded-lg p-7 border-b-4 border-b-transparent hover:border-b-[#CB5116] hover:shadow-lg transition-all duration-300 overflow-hidden">
                    <!-- Top accent line -->
                    <div class="absolute top-0 left-0 w-0 h-[3px] bg-[#CB5116] group-hover:w-full transition-all duration-500"></div>
                    <!-- Icon -->
                    <div class="w-14 h-14 rounded-md bg-[#254991] flex items-center justify-center mb-5">
                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="#CB5116" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                        </svg>
                    </div>
                    <h3 class="text-[#254991] font-semibold text-base mb-3 font-poppins group-hover:text-[#CB5116] transition-colors duration-300">Manufacturing &amp; Packaging of Lubricating Oils</h3>
                    <div class="w-8 h-0.5 bg-[#CB5116] mb-4 group-hover:w-16 transition-all duration-400"></div>
                    <p class="text-gray-500 text-sm leading-relaxed font-poppins">
                        End-to-end in-house manufacturing and packaging of high-performance lubricating oils, meeting stringent viscosity, purity, and industry standards for automotive and industrial applications.
                    </p>
                </div>

                <!-- Card 2: Greases -->
                <div class="group relative bg-gray-50 rounded-lg p-7 border-b-4 border-b-transparent hover:border-b-[#CB5116] hover:shadow-lg transition-all duration-300 overflow-hidden">
                    <div class="absolute top-0 left-0 w-0 h-[3px] bg-[#CB5116] group-hover:w-full transition-all duration-500"></div>
                    <div class="w-14 h-14 rounded-md bg-[#254991] flex items-center justify-center mb-5">
                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="#CB5116" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="text-[#254991] font-semibold text-base mb-3 font-poppins group-hover:text-[#CB5116] transition-colors duration-300">Manufacturing &amp; Packaging of Greases</h3>
                    <div class="w-8 h-0.5 bg-[#CB5116] mb-4 group-hover:w-16 transition-all duration-400"></div>
                    <p class="text-gray-500 text-sm leading-relaxed font-poppins">
                        Precision formulation and packaging of a wide range of greases — from lithium complex to calcium-based — engineered for heavy-load, high-temperature, and extreme-pressure environments.
                    </p>
                </div>

                <!-- Card 3: Specialty Products -->
                <div class="group relative bg-gray-50 rounded-lg p-7 border-b-4 border-b-transparent hover:border-b-[#CB5116] hover:shadow-lg transition-all duration-300 overflow-hidden">
                    <div class="absolute top-0 left-0 w-0 h-[3px] bg-[#CB5116] group-hover:w-full transition-all duration-500"></div>
                    <div class="w-14 h-14 rounded-md bg-[#254991] flex items-center justify-center mb-5">
                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="#CB5116" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h3 class="text-[#254991] font-semibold text-base mb-3 font-poppins group-hover:text-[#CB5116] transition-colors duration-300">Specialty &amp; Customized Products</h3>
                    <div class="w-8 h-0.5 bg-[#CB5116] mb-4 group-hover:w-16 transition-all duration-400"></div>
                    <p class="text-gray-500 text-sm leading-relaxed font-poppins">
                        Tailor-made formulations designed for specialized and diversified industrial applications — developed to match exact client specifications and performance requirements.
                    </p>
                </div>

            </div>
        </div>
    </section>
    <!-- END KEY STRENGTHS -->


    <!-- WHY CHOOSE US SECTION -->
    <section class="w-full bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- HEADING -->
            <div class="flex items-stretch mb-12">
                <div class="w-1 bg-[#CB5116] mr-4 rounded-sm"></div>
                <div>
                    <p class="text-[#CB5116] font-semibold text-lg tracking-widest uppercase leading-tight font-poppins">Our Advantage</p>
                    <h2 class="text-[#254991] font-bold text-xl sm:text-2xl tracking-wide uppercase mt-1 font-poppins">
                        Why Choose Global Treading Company Pvt. Ltd.?
                    </h2>
                </div>
            </div>

            <div class="flex flex-col lg:flex-row gap-10 items-start">

                <!-- LEFT: Feature list -->
                <div class="w-full lg:w-1/2">
                    <p class="text-gray-600 text-sm leading-relaxed mb-8 font-poppins">
                        We bring together decades of expertise, advanced R&D capabilities, and a relentless focus on quality — making us the preferred partner for industrial and automotive lubrication needs worldwide.
                    </p>

                    <ul class="space-y-4">

                        <!-- Item 1 -->
                        <li class="flex items-start gap-4 group">
                            <div class="w-9 h-9 rounded-md bg-[#254991] flex items-center justify-center flex-shrink-0 mt-0.5 group-hover:bg-[#CB5116] transition-colors duration-300">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-[#254991] font-semibold text-sm font-poppins">10+ Years of Strong Technical Experience</p>
                                <p class="text-gray-500 text-xs leading-relaxed mt-0.5 font-poppins">Deep domain expertise across automotive and industrial lubrication sectors.</p>
                            </div>
                        </li>

                        <!-- Item 2 -->
                        <li class="flex items-start gap-4 group">
                            <div class="w-9 h-9 rounded-md bg-[#254991] flex items-center justify-center flex-shrink-0 mt-0.5 group-hover:bg-[#CB5116] transition-colors duration-300">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-[#254991] font-semibold text-sm font-poppins">Advanced Manufacturing &amp; Testing Facilities</p>
                                <p class="text-gray-500 text-xs leading-relaxed mt-0.5 font-poppins">State-of-the-art plant equipped with precision blending and quality testing infrastructure.</p>
                            </div>
                        </li>

                        <!-- Item 3 -->
                        <li class="flex items-start gap-4 group">
                            <div class="w-9 h-9 rounded-md bg-[#254991] flex items-center justify-center flex-shrink-0 mt-0.5 group-hover:bg-[#CB5116] transition-colors duration-300">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-[#254991] font-semibold text-sm font-poppins">Strong R&amp;D Capabilities</p>
                                <p class="text-gray-500 text-xs leading-relaxed mt-0.5 font-poppins">Dedicated research team continuously developing improved and innovative formulations.</p>
                            </div>
                        </li>

                        <!-- Item 4 -->
                        <li class="flex items-start gap-4 group">
                            <div class="w-9 h-9 rounded-md bg-[#254991] flex items-center justify-center flex-shrink-0 mt-0.5 group-hover:bg-[#CB5116] transition-colors duration-300">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-[#254991] font-semibold text-sm font-poppins">Wide Industrial &amp; Automotive Product Portfolio</p>
                                <p class="text-gray-500 text-xs leading-relaxed mt-0.5 font-poppins">A comprehensive range covering engine oils, greases, gear oils, and specialty chemicals.</p>
                            </div>
                        </li>

                        <!-- Item 5 -->
                        <li class="flex items-start gap-4 group">
                            <div class="w-9 h-9 rounded-md bg-[#254991] flex items-center justify-center flex-shrink-0 mt-0.5 group-hover:bg-[#CB5116] transition-colors duration-300">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-[#254991] font-semibold text-sm font-poppins">Quality-Driven Processes &amp; Global Supply Capability</p>
                                <p class="text-gray-500 text-xs leading-relaxed mt-0.5 font-poppins">ISO-certified workflows ensuring consistent quality with reliable international delivery.</p>
                            </div>
                        </li>

                        <!-- Item 6 -->
                        <li class="flex items-start gap-4 group">
                            <div class="w-9 h-9 rounded-md bg-[#254991] flex items-center justify-center flex-shrink-0 mt-0.5 group-hover:bg-[#CB5116] transition-colors duration-300">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-[#254991] font-semibold text-sm font-poppins">Ability to Customize Formulations as Per Specifications</p>
                                <p class="text-gray-500 text-xs leading-relaxed mt-0.5 font-poppins">Flexible R&D support to develop bespoke lubricant solutions matching exact customer needs.</p>
                            </div>
                        </li>

                    </ul>
                </div>

                <!-- RIGHT: Highlight card -->
                <div class="w-full lg:w-1/2 flex flex-col gap-5">

                    <!-- Big accent card -->
                    <div class="bg-[#254991] rounded-lg p-8 text-white relative overflow-hidden">
                        <!-- Decorative ring -->
                        <div class="absolute -top-10 -right-10 w-40 h-40 rounded-full border border-white/10 pointer-events-none"></div>
                        <div class="absolute -bottom-10 -left-10 w-28 h-28 rounded-full border border-white/10 pointer-events-none"></div>

                        <div class="w-12 h-12 rounded-md bg-[#CB5116] flex items-center justify-center mb-5">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>

                        <h3 class="font-poppins font-bold text-lg text-white mb-3 uppercase tracking-wide">Built for Performance</h3>
                        <div class="w-10 h-0.5 bg-[#CB5116] mb-4"></div>
                        <p class="font-poppins font-light text-sm text-white/80 leading-relaxed">
                            Every product we manufacture undergoes rigorous multi-stage quality control — from raw material inspection to final packaging — ensuring that performance in the field matches what's promised in the lab.
                        </p>
                    </div>

                    <!-- Two mini stat cards -->
                    <div class="grid grid-cols-2 gap-5">
                        <div class="bg-white rounded-lg p-6 border border-gray-100 shadow-sm text-center">
                            <p class="font-poppins font-bold text-3xl text-[#CB5116]">10+</p>
                            <p class="font-poppins text-xs text-gray-500 mt-1 tracking-wide uppercase">Years Experience</p>
                        </div>
                        <div class="bg-white rounded-lg p-6 border border-gray-100 shadow-sm text-center">
                            <p class="font-poppins font-bold text-3xl text-[#CB5116]">100%</p>
                            <p class="font-poppins text-xs text-gray-500 mt-1 tracking-wide uppercase">Quality Tested</p>
                        </div>
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