<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
               Industrial Oils
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
                <span class="text-[#CB5116]">Industrial Oils</span>
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
    <?php 
    include "./IndustrialOilsProducts.php"
    ?>
    <?php 
    include "./footer.php"
    ?>
    
</body>
</html>