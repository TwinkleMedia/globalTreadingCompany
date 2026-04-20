<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
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
               Lubricant Additives
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
                <span class="text-[#CB5116]">Lubricant Additives</span>
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


<section class="font-poppins w-full bg-white py-14">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- ── Section Heading ── -->
        <div class="flex items-stretch mb-10">
            <div class="w-1 bg-[#CB5116] mr-4 rounded-sm"></div>
            <div>
                <p class="text-[#CB5116] font-bold text-sm tracking-widest uppercase leading-tight">Products</p>
                <h2 class="text-[#254991] font-bold text-xl sm:text-2xl tracking-wide mt-0.5" id="category-title">Industrial Oils</h2>
            </div>
        </div>

        <!-- ── Grid ── -->
        <div id="carousel-grid"
             class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8"
             style="transition: opacity 0.25s ease, transform 0.25s ease;">
        </div>

        <!-- ── Dot Indicators ── -->
        <div id="dots" class="flex items-center justify-center gap-3 mt-10"></div>

    </div>
</section>

<?php 
include "./footer.php"
?>

<!-- ════════════════════════════════════
     PRODUCTS DATA + CAROUSEL LOGIC
════════════════════════════════════ -->
<script>
const products = {
    "category": "Lubricant Additives",
   "items": [
    "2t / 4 Stroke Engine Oil Additive",
    "2 Stroke Engine Oil Additive",
    "Petrol / PCMO (Passenger Car Engine Oil Additive)",
    "HDD (Heavy Duty Diesel Engine Oil Additive)",
    "Multigrade Engine Oil Additive",
    "Premium Multi Grade Engine Oil Additive",
    "5w30 Engine Oil Additive",
    "5w40 Engine Oil Additive",
    "BS6 Engine Oil Additive",
    "Synthetic Engine Oil Additive",
    "Rail Road Engine Oil Additive (Zinc Free)",
    "Marine Engine Oil Additive",
    "Gear Oil Additive",
    "Gear Oil Additive (Grease Grade)",
    "Automatic Transmission Fluid / ATF / TQ Oil Additive",
    "Wet Brake / Universal Tractor Transmission Oil Additive",
    "Hydraulic Oil Additive (AW/HLP)",
    "Water White Hydraulic Oil Additive",
    "Ashless Hydraulic Oil Additive",
    "Compressor Oil Additive",
    "Rock Drill Oil Additive",
    "Cutting Oil Additive",
    "Semi-Synthetic Cutting Oil Additive",
    "Neat / Straight Cutting Oil Additive",
    "Nut Forging Oil Additive",
    "Knitting Oil Additive",
    "Anti-Static Oil Additive",
    "Coning Oil Additive",
    "Rust Preventive Additive for Lube",
    "Turbine Oil Additive",
    "Quenching Oil Additive",
    "Thermic Oil Additive",
    "Vacuum Oil Additive",
    "Slideway Oil Additive",
    "Shocker / Fork Oil Additive",
    "PSO (Pump Set) Oil Additive",
    "Engine Flushing Oil Additive",
    "Multifunction Fuel Oil Additive",
    "CNG Engine Oil Additive",
    "Water Base EP Additive",
    "Gulf Pigao Additive",
    "Premium 4T Engine Oil Additive",
    "Premium Diesel Engine Oil Additive",
    "EDM Spark Oil Additive",
    "Brake Oil Additive DOT 3",
    "Brake Oil Additive DOT 4",

    "Recycle Oil Smell Remover",
    "Reclaimed Oil / Solvent Smell Remover",
    "Phosphate Base EP Additive",
    "Zinc Base EP Additive",
    "Tungsten Base EP Additive",
    "Sulfur Base EP Additive",
    "Molybdenum Base EP Additive",
    "Amide Base Dispersing Agent",
    "Anhydride Base Dispersing Agent",
    "Octane Booster",
    "Cetane Booster",
    "Silicon Defoamers",
    "Antifoam for Lubes",
    "Engine Oil Heat Controller",
    "Engine Oil Mileage Booster",
    "Engine Oil Smoke Controller",
    "Oil Dullness / Haziness Remover / Shining Agent",
    "2T Engine Oil Smoke Controller",
    "Phenolic Antioxidant",
    "Zinc Free Antioxidant",
    "Calcium Petroleum Sulfonate",
    "Magnesium Petroleum Sulfonate",
    "Film Thickening / Formation Agent for Chain Lube",
    "Corrosion Inhibitor for Chain Lube",
    "Metal Passivator",
    "Pour Point Depressant (PPD)",
    "Robot Fluid",
    "Poly Iso Butylene 950 / 1300 / 2400",
    "Light Diesel Oil / LDO / FO",
    "Cutting Oil Smell Remover",
    "Rust & Corrosion Resistance Chemical",
    "Corrosion Inhibitor for Knitting / Conning Oil",
    "Metal Deactivators",
    "Anti Mist Agent",
    "Slideway Oil Tackifier",
    "Seal Swelling Agent",
    "Oleyl Amine Ethoxylated",
    "Liquid Antioxidant",
    "Sulfurized Ester",

    "Antioxidant for High Temp",
    "SMO (Oleic Acid Ester)",
    "Friction Coefficient",
    "Process Oil",
    "TG Grade Urea",
    "Oleic Acid",
    "Solvent Smell Remover",
    "Liquid Antioxidant with FM Properties",
    "LA Solvent for DEF (Diesel Exhaust Fluid)",
    "Calcium Phenate",
    "Smell Remover P2",
    "F.L. Solvent for DEF (Diesel Exhaust Fluids)",
    "Brake Oil Base Fluid"
]
};

const PER_PAGE   = 9;
let currentPage  = 0;
let autoTimer    = null;

const grid    = document.getElementById('carousel-grid');
const dots    = document.getElementById('dots');
const title   = document.getElementById('category-title');
const section = grid.closest('section');

title.textContent = products.category;

const totalPages = Math.ceil(products.items.length / PER_PAGE);

/* ── Auto-slide every 4 seconds ── */
function startAuto() {
    stopAuto();
    autoTimer = setInterval(() => {
        renderPage((currentPage + 1) % totalPages);
    }, 4000);
}
function stopAuto() {
    if (autoTimer) { clearInterval(autoTimer); autoTimer = null; }
}

/* Pause auto-slide when user hovers over the section */
section.addEventListener('mouseenter', stopAuto);
section.addEventListener('mouseleave', startAuto);

function renderPage(page) {
    currentPage = page;
    const slice = products.items.slice(page * PER_PAGE, page * PER_PAGE + PER_PAGE);

    /* Fade out */
    grid.style.opacity   = '0';
    grid.style.transform = 'translateY(10px)';

    setTimeout(() => {
        grid.innerHTML = '';

        slice.forEach(name => {
            const wrapper = document.createElement('div');
            wrapper.style.cssText = 'position:relative; cursor:default;';

            /* Orange shadow block */
            const shadow = document.createElement('div');
            shadow.style.cssText = `
                position: absolute;
                bottom: 0; right: 0;
                width: 100%; height: 100%;
                transform: translate(7px, 7px);
                background: #CB5116;
                border-radius: 3px;
            `;

            /* Navy card */
            const card = document.createElement('div');
            card.style.cssText = `
                position: relative;
                background: #254991;
                border-radius: 3px;
                padding: 22px 20px;
                display: flex;
                align-items: flex-start;
                gap: 12px;
                transition: background 0.2s ease;
            `;
            card.onmouseenter = () => card.style.background = '#1d3a78';
            card.onmouseleave = () => card.style.background = '#254991';

            /* Left orange bar */
            const bar = document.createElement('div');
            bar.style.cssText = `
                width: 3px;
                flex-shrink: 0;
                align-self: stretch;
                background: #CB5116;
                border-radius: 99px;
            `;

            /* Product name */
            const text = document.createElement('p');
            text.style.cssText = `
                color: white;
                font-family: 'Poppins', sans-serif;
                font-weight: 600;
                font-size: 14px;
                line-height: 1.5;
                margin: 0;
            `;
            text.textContent = name;

            card.appendChild(bar);
            card.appendChild(text);
            wrapper.appendChild(shadow);
            wrapper.appendChild(card);
            grid.appendChild(wrapper);
        });

        /* Fade in */
        grid.style.opacity   = '1';
        grid.style.transform = 'translateY(0)';
    }, 250);

    /* ── Dots ── */
    dots.innerHTML = '';
    for (let i = 0; i < totalPages; i++) {
        const dot = document.createElement('button');
        dot.style.cssText = `
            width: 18px; height: 18px;
            border-radius: 3px;
            background: #CB5116;
            border: none;
            cursor: pointer;
            opacity: ${i === page ? '1' : '0.35'};
            transition: opacity 0.2s ease;
            padding: 0;
        `;
        dot.onmouseenter = () => { if (i !== currentPage) dot.style.opacity = '0.65'; };
        dot.onmouseleave = () => { if (i !== currentPage) dot.style.opacity = '0.35'; };
        dot.setAttribute('aria-label', `Page ${i + 1}`);
        dot.addEventListener('click', () => {
            renderPage(i);
            stopAuto();
            startAuto(); /* reset timer after manual click */
        });
        dots.appendChild(dot);
    }
}

/* Start */
renderPage(0);
startAuto();
</script>
    
</body>
</html>