<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html {
            scroll-behavior: smooth;
        }

        .product-scroll {
            scrollbar-width: thin;
            scrollbar-color: #CB5116 #f1f1f1;
            -webkit-overflow-scrolling: touch;
        }

        .product-scroll::-webkit-scrollbar {
            width: 6px;
        }

        .product-scroll::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 999px;
        }

        .product-scroll::-webkit-scrollbar-thumb {
            background: #CB5116;
            border-radius: 999px;
        }

        .product-link {
            border-left: 2px solid transparent;
        }

        .product-link.is-active {
            border-left-color: #CB5116;
            background: rgba(255, 255, 255, 0.08);
        }

        .product-link.is-active span {
            color: #ffffff;
        }
    </style>
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
                Lubricant Additives / Components
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

    <?php
    // ── Helpers ──────────────────────────────────────────────
    function render_bullet($text)
    {
        if (preg_match('/^([A-Za-z][A-Za-z0-9 \-\/&]{2,45}):\s(.+)$/', $text, $m)) {
            return '<span class="font-semibold text-gray-800">' . htmlspecialchars($m[1]) . ':</span> ' . htmlspecialchars($m[2]);
        }
        return htmlspecialchars($text);
    }

    function render_product_detail($product, $isLast = false)
    {
        ob_start();
        ?>
        <div id="<?php echo $product['id']; ?>" data-product class="scroll-mt-4 <?php echo $isLast ? '' : 'pb-9 mb-9 border-b border-gray-100'; ?>">
            <h3 class="text-[#254991] font-bold text-xl sm:text-2xl tracking-wide mb-3"><?php echo htmlspecialchars($product['name']); ?></h3>
            <p class="text-gray-600 text-sm sm:text-[15px] leading-relaxed"><?php echo htmlspecialchars($product['intro']); ?></p>

            <?php foreach ($product['sections'] as $section) : ?>
                <h4 class="text-[#CB5116] font-bold text-xs uppercase tracking-wider mt-6 mb-3"><?php echo htmlspecialchars($section['heading']); ?></h4>
                <ul class="space-y-2">
                    <?php foreach ($section['items'] as $item) : ?>
                        <li class="flex items-start gap-3">
                            <svg class="w-4 h-4 flex-shrink-0 mt-[3px]" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L21 7V17L12 22L3 17V7L12 2Z" fill="#254991" fill-opacity="0.08" stroke="#254991" stroke-width="1.4" />
                                <path d="M8.5 12.3L10.4 14.2L15.3 9.3" stroke="#254991" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="text-gray-700 text-sm leading-relaxed"><?php echo render_bullet($item); ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endforeach; ?>

            <?php if (!empty($product['closing'])) : ?>
                <p class="text-gray-600 text-sm leading-relaxed mt-5"><?php echo htmlspecialchars($product['closing']); ?></p>
            <?php endif; ?>
        </div>
        <?php
        return ob_get_clean();
    }

    // ── Data: Lubricant Additives ───────────────────────────
    $lubricantProducts = [
        [
            'id' => 'mco',
            'nav' => 'Motor Cycle Oil Additives',
            'name' => 'Motor Cycle Oil (MCO) Additive Package',
            'intro' => 'LubeAdd® Motor Cycle Oil (MCO) Additive Package offers a premium solution for enhancing the performance and durability of four-stroke engines.',
            'sections' => [
                ['heading' => 'Formulation Flexibility', 'items' => [
                    'Compatibility with Group I, II, and III base stocks, providing flexibility in formulations.',
                    'API compatibility, with our products being capable of formulating lubricants that meet a wide range of API specifications, from older categories to the latest standards Upto API SN and JASO.',
                ]],
                ['heading' => 'Key Benefits', 'items' => [
                    'Wide coverage of SAE grades, ensuring suitability for various oil viscosities.',
                    'Superior wear protection, reducing engine wear and extending component life.',
                    'Oxidation and thermal stability, preventing oil breakdown under high-temperature conditions.',
                    'Corrosion protection, safeguarding engine parts from rust and corrosion.',
                    'Enhanced engine cleanliness, minimizing deposits and sludge buildup.',
                    'Smoother clutch performance, delivering seamless gear shifts for a more responsive ride.',
                ]],
            ],
            'closing' => 'Ideal for motorcycles, scooters, and other four-stroke applications, LubeAdd® MCO Additive Package meets both older and the latest API specifications. Its versatility ensures top performance, durability, and protection, making it a reliable choice for a wide range of formulations.',
        ],
        [
            'id' => 'pcmo',
            'nav' => 'Passenger Car Motor Oil Additives',
            'name' => 'Passenger Car Motor Oil (PCMO) Additive Package',
            'intro' => 'LubeAdd® Passenger Car Motor Oil (PCMO) Additive Packages are expertly formulated to provide exceptional performance and protection for passenger car engines. Compatible with a diverse range of base stocks, these additive packages supports the formulation of oils that meet older and modern API specifications.',
            'sections' => [
                ['heading' => 'Formulation Flexibility', 'items' => [
                    'Base Stocks: Compatible with Group I, II, III and PAOs base stocks.',
                    'API Specifications: Suitable for oils meeting API SB, SC upto SL, SM, SN, SN Plus and SP.',
                ]],
                ['heading' => 'Key Benefits', 'items' => [
                    'Enhanced Wear Protection: Forms a robust barrier against engine wear, ensuring the longevity of critical components such as pistons, bearings, and camshafts.',
                    'Effective Oxidation Control: Inhibits oil degradation and reduces harmful oxidation products, promoting sustained engine performance.',
                    'Optimized Fuel Efficiency: Minimizes internal friction and enhances lubrication, leading to improved fuel consumption and lower emissions.',
                    'Friction Modification: Incorporates advanced friction modifiers that further reduce friction between moving parts, enhancing engine efficiency and responsiveness.',
                    'Superior Detergency and Dispersancy: Cleans engine components by preventing sludge and deposit formation while effectively dispersing contaminants, ensuring smooth operation and reducing maintenance needs.',
                    'Outstanding Thermal Stability: Maintains performance under high-temperature conditions, preventing oil breakdown during heavy use.',
                ]],
            ],
            'closing' => 'With the LubeAdd® PCMO Additive Packages, you can expect exceptional engine cleanliness, protection, and performance, making it an ideal choice for both older vehicles and modern engine formulations.',
        ],
        [
            'id' => 'hddo',
            'nav' => 'Heavy Duty Diesel Oil Additives',
            'name' => 'Heavy Duty Diesel Oil (HDDO) Additive Package',
            'intro' => 'LubeAdd® Heavy Duty Diesel Oil (HDDO) Additive Packages are engineered to provide premium protection and performance for heavy-duty diesel engines across various grades.',
            'sections' => [
                ['heading' => 'Formulation Flexibility', 'items' => [
                    'Base Stocks: Compatible with a variety of base stocks, including Group I, II, III and PAO.',
                    'API Specifications: Suitable for formulating oils that meet API specifications ranging from CB, CC upto CF-4, CH-4, CI-4, CI-4 Plus, and CK-4.',
                    'Viscosity Grades: Capable of producing a wide range of viscosity grades, allowing for tailored solutions to meet specific engine requirements.',
                ]],
                ['heading' => 'Key Benefits', 'items' => [
                    'Extended Drain Intervals: Formulated to resist degradation and maintain oil stability, this package allows for longer oil change intervals, reducing maintenance costs and enhancing fleet efficiency.',
                    'Superior Wear Protection: Provides a robust protective barrier against engine wear, significantly extending the life of critical components such as pistons, cylinders, and bearings.',
                    'Enhanced Oxidation Resistance: Contains advanced oxidation inhibitors that minimize oil thickening and sludge formation, ensuring smooth engine operation even under extreme conditions.',
                    'Improved Fuel Efficiency: Reduces friction and maintains optimal viscosity, leading to better fuel economy, lower operational costs, and reduced emissions.',
                    'Excellent Detergency and Dispersancy: The combination of detergents and dispersants effectively keeps engine components clean, preventing deposit buildup and contaminants for efficient operation.',
                    'High Temperature and High Pressure Stability: Designed to perform under demanding conditions, this package maintains its protective properties in high-temperature and high-pressure environments typical of heavy-duty diesel applications.',
                ]],
            ],
            'closing' => 'With the LubeAdd® HDDO Additive Packages, one can achieve exceptional performance and reliability for heavy-duty diesel engines. Our additive packages are designed to meet the most stringent demands of the trucking and transportation industries, ensuring that your engines operate efficiently and effectively under the toughest conditions.',
        ],
        [
            'id' => 'two-stroke',
            'nav' => 'Two Stroke Oil Additives',
            'name' => 'Two Stroke (2T) Additive',
            'intro' => 'LubeAdd® Two Stroke (2T) Additive Package is specifically formulated to enhance the performance and reliability of two-stroke engines, offering exceptional protection and efficiency. Compatible with a variety of base stocks, this additive package meets multiple API specifications, including API TC, API FB, and API FC, ensuring versatility for various applications.',
            'sections' => [
                ['heading' => 'Key Benefits', 'items' => [
                    'Superior combustion efficiency: Enhances engine power and responsiveness.',
                    'Reduced smoke emissions: Promotes a cleaner environment and better air quality.',
                    'Excellent lubrication properties: Protects engine components from wear and damage.',
                    'Compatibility with multiple API grades: Supports formulations for API TC, API FB, and API FC.',
                ]],
            ],
            'closing' => 'With the LubeAdd® 2T Additive Package, you can expect optimal performance and protection in every ride.',
        ],
        [
            'id' => 'cng',
            'nav' => 'CNG Oil Additives',
            'name' => 'CNG Oil Additive Package',
            'intro' => 'LubeAdd® CNG Oil Additive Packages are specifically engineered to meet the unique challenges of lubricating Compressed Natural Gas (CNG) engines. CNG engines operate under high combustion temperatures and dry fuel conditions, requiring specialized additives to maintain optimal performance and engine protection. LubeAdd® CNG Additive Package provides an ideal solution for formulating high-performance CNG engine oils.',
            'sections' => [
                ['heading' => 'Key Benefits', 'items' => [
                    'Tailored for CNG Engines: Designed specifically for the unique characteristics of CNG engines, providing enhanced protection in high-heat, low-lubricity conditions.',
                    'Exceptional Valve Protection: Reduces valve seat recession and wear, a common issue in CNG engines, ensuring longer engine life and sustained performance.',
                    'Improved Spark Plug Life: Minimizes deposits that can cause spark plug fouling, allowing for extended intervals between spark plug changes and maintaining efficient combustion.',
                    'Low Ash Formulation: Reduces ash content to prevent buildup on combustion surfaces and emissions systems, ensuring cleaner engine performance and reduced maintenance.',
                    'Enhanced Combustion Efficiency: Helps to maintain consistent combustion efficiency, leading to improved fuel economy and lower emissions.',
                    'Reduced Engine Knock: Formulated to minimize engine knock, ensuring smoother engine operation and protecting components from the stress of detonation.',
                ]],
            ],
            'closing' => 'LubeAdd® CNG Additive Packages is the ideal solution for delivering superior engine protection and performance in CNG-powered vehicles, supporting smoother operation, longer engine life, and reduced overall maintenance costs.',
        ],
        [
            'id' => 'marine',
            'nav' => 'Marine System Oil Additives',
            'name' => 'Marine System Oil Additive Package',
            'intro' => 'LubeAdd® Marine System Oil Additive Packages are an advanced solution designed to meet the tough operational demands of marine engines in both commercial and recreational sectors. Engineered to enhance engine performance and protect vital components, this additive package ensures reliability in the harshest marine environments.',
            'sections' => [
                ['heading' => 'Key Benefits', 'items' => [
                    'Anti-Rust & Corrosion Inhibitors: Provides robust protection against saltwater-induced corrosion, ensuring the longevity of engine components exposed to humid, salty air and water.',
                    'Enhanced Deposit Control: Effectively prevents the formation of carbon and varnish deposits on engine parts, keeping them cleaner and extending maintenance intervals for increased operational efficiency.',
                    'Optimized Lubrication Under Load: Ensures excellent lubrication even under high-load and high-torque conditions typical in marine operations, reducing wear on critical engine parts such as bearings and pistons.',
                    'Advanced Anti-Foam Properties: Minimizes foam formation in the oil, ensuring consistent lubrication and preventing air entrapment that could lead to poor engine performance.',
                    'Versatility with Engine Types: Compatible with a broad range of marine engines, from high-speed recreational vessels to slower-running heavy-duty commercial engines, providing flexibility across different marine applications.',
                    'Cleaner Combustion: Helps to promote cleaner fuel combustion, reducing soot and particulate emissions, which in turn contributes to cleaner exhaust and better environmental compliance.',
                ]],
            ],
            'closing' => 'With LubeAdd® Marine System Oil Additive Packages, you can achieve consistent performance, better fuel efficiency, and longer engine life, ensuring smooth operation and reduced downtime in demanding marine conditions.',
        ],
        [
            'id' => 'utto',
            'nav' => 'Universal Tractor Transmission Oil Additives (UTTO)',
            'name' => 'Universal Tractor Transmission Oil (UTTO) Additive Package',
            'intro' => 'LubeAdd® Universal Tractor Transmission Oil (UTTO) Additive Packages are a premium formulation designed to enhance the performance and durability of transmission fluids used in agricultural and construction equipment. This additive package is tailored for various applications, including transmissions, hydraulic systems, and wet brakes, ensuring optimal operation under demanding conditions.',
            'sections' => [
                ['heading' => 'Key Benefits', 'items' => [
                    'Improved Load Carrying Capacity: Engineered to support heavy loads and high torque demands, reducing the risk of gear and transmission failures during intense operations.',
                    'Enhanced Anti-Friction Properties and Reduced Knocking: Formulated to minimize friction, leading to smoother gear shifts and improved overall efficiency of the machinery, which translates to lower fuel consumption.',
                    'Superior Foam Control: Effectively prevents foam formation, ensuring consistent lubrication and oil pressure, crucial for the reliable performance of hydraulic systems.',
                    'Effective Thermal Protection: Maintains lubricant stability under high temperatures, preventing breakdown and ensuring optimal performance even during prolonged use.',
                    'Versatility with Engine Types: Compatible with a wide range of machinery and fluid types, allowing for a single solution for different equipment in agricultural and construction settings.',
                    'Stability in Extreme Conditions: Performs exceptionally well in both high and low temperatures, ensuring reliable operation in diverse environmental conditions.',
                    'Quick Water Separation Capability: Designed to rapidly separate water from the oil, protecting components from rust and corrosion, which is especially critical in wet operating environments.',
                ]],
            ],
            'closing' => 'With LubeAdd® UTTO Additive Packages, you can achieve enhanced equipment performance, extended service life, and reduced maintenance costs, making it the perfect choice for operators who demand reliability and efficiency from their machinery.',
        ],
        [
            'id' => 'gear-oil',
            'nav' => 'Gear Oil Additives',
            'name' => 'Gear Oil Additive Package',
            'intro' => 'LubeAdd® Gear Oil Additive Packages are specifically designed to enhance the performance of gear oils, making it suitable for formulating high-performance lubricants across various SAE grades.',
            'sections' => [
                ['heading' => 'Key Feature', 'items' => [
                    'This additive package possesses excellent weld load capacity, providing exceptional protection against wear and ensuring the longevity of gear systems.',
                    'It can be utilized to create lubricants that meet GL-4 and GL-5 specifications, making it ideal for both automotive and industrial applications.',
                ]],
                ['heading' => 'Key Benefits', 'items' => [
                    'Versatile Formulation: Compatible with a wide range of base oils, enabling the production of various SAE grades of gear oils.',
                    'High Load Capacity: Provides outstanding protection against extreme pressure conditions, ensuring reliable performance under heavy loads.',
                    'Enhanced Wear Protection: Reduces friction and wear on gear teeth, significantly extending the lifespan of gear systems.',
                    'Oxidation Resistance: Protects against oil degradation, helping to maintain the effectiveness of the formulated lubricants over time.',
                    'Foam Control: Minimizes foaming, ensuring consistent lubrication even in high-speed applications.',
                ]],
            ],
            'closing' => 'With the LubeAdd® Gear Oil Additive Packages, you can achieve superior performance and protection in both automotive and industrial gear applications, ensuring smooth operation and reliability in demanding environments.',
        ],
        [
            'id' => 'atf',
            'nav' => 'Automatic Transmission Fluid Additives (ATF)',
            'name' => 'Automatic Transmission Fluid (ATF) Additive',
            'intro' => 'LubeAdd® Automatic Transmission Fluid (ATF) Oil Additives are specially formulated to enhance the performance and quality of Automatic Transmission Fluids (ATF). These additives can be used to create high-performance ATF fluids, ensuring optimal operation and protection of transmission systems. Suitable for formulating various specifications, including DEX II, DEX III, and DEX VI fluids.',
            'sections' => [
                ['heading' => 'Key Feature', 'items' => [
                    'This additive package possesses excellent weld load capacity, providing exceptional protection against wear and ensuring the longevity of gear systems.',
                    'It can be utilized to create lubricants that meet GL-4 and GL-5 specifications, making it ideal for both automotive and industrial applications.',
                ]],
                ['heading' => 'Key Benefits', 'items' => [
                    'Improved Thermal Conductivity: Enhances heat dissipation, allowing for better cooling of transmission components and reducing the risk of overheating.',
                    'Effective Friction Modulation: Optimizes friction characteristics for better engagement of clutch packs and gears, contributing to smoother operation.',
                    'Superior Low-Temperature Fluidity: Ensures quick circulation and effective lubrication during cold starts, providing immediate protection to transmission parts.',
                    'Excellent Viscosity Index Stability: Ensures the fluid maintains an ideal viscosity across a broad temperature range, providing consistent performance in both extreme heat and cold.',
                    'Longer Fluid Life: Formulated to resist breakdown over time, extending the service life of the ATF and reducing the frequency of fluid changes.',
                ]],
            ],
            'closing' => 'With LubeAdd® ATF Oil Additives, you can achieve superior performance and reliability in automatic transmission applications, ensuring smooth operation and extended service life.',
        ],
        [
            'id' => 'cvt',
            'nav' => 'Continuous Variable Transmission Additives (CVT)',
            'name' => 'Continuous Variable Transmission (CVT) Additive',
            'intro' => 'LubeAdd® Continuous Variable Transmission (CVT) Oil Additives are a high-performance additive package designed specifically for Continuously Variable Transmissions (CVT). It optimizes fluid stability, enhances wear protection, and ensures smooth and efficient operation of CVTs across a variety of automotive and industrial applications.',
            'sections' => [
                ['heading' => 'Key Characteristics', 'items' => [
                    'Designed for Continuously Variable Transmissions (CVT).',
                    'Optimizes Fluid Performance for Smoother Operation.',
                    'Compatible with Various Base Oils.',
                    'Provides Excellent Friction Control.',
                ]],
                ['heading' => 'Key Benefits', 'items' => [
                    'Enhanced Wear Protection: Provides superior protection to critical transmission components, reducing friction and preventing premature wear.',
                    'Improved Friction Control: Optimizes friction levels to improve transmission smoothness, enhance power transfer, and increase fuel efficiency.',
                    'Oxidation and Thermal Stability: Resists oxidation and thermal breakdown, ensuring long-lasting fluid performance under high temperatures.',
                    'Prevents Foam Formation: Minimizes foam formation, ensuring consistent oil film strength and providing reliable lubrication.',
                    'Improved Transmission Smoothness: Facilitates smooth shifting and transitions, reducing noise and vibration for a quieter, more comfortable driving experience.',
                    'Reduced Maintenance Costs: Extends CVT life by reducing deposit formation and preventing fluid degradation, thereby lowering maintenance requirements.',
                ]],
                ['heading' => 'Compatibility', 'items' => [
                    'Compatible with a wide range of base oils, enhancing the overall performance and lifespan of CVT fluid systems.',
                    'Works seamlessly with both synthetic and mineral base oils, ensuring versatility across various applications.',
                ]],
            ],
            'closing' => '',
        ],
        [
            'id' => 'hydraulic',
            'nav' => 'Hydraulic Oil Additives',
            'name' => 'Hydraulic Oil Additive',
            'intro' => 'LubeAdd® Hydraulic Oil Additives are a high-performance solution engineered to enhance the protection and performance of hydraulic fluids across a wide range of industrial and mobile applications. Designed for use with Group I and Group II base oils, it ensures smooth operation, excellent system cleanliness, and extended fluid life.',
            'sections' => [
                ['heading' => 'Key Benefits', 'items' => [
                    'Boosts anti-wear protection for pumps, valves, and moving parts.',
                    'Improves oxidation and thermal stability, extending oil life under high temperatures.',
                    'Provides strong rust and corrosion resistance to protect internal components.',
                    'Ensures smooth hydraulic performance and responsive system operation.',
                    'Minimizes sludge and deposit formation for cleaner system performance.',
                ]],
            ],
            'closing' => 'LubeAdd® Hydraulic Oil Additives is ideal for formulating premium hydraulic oils that meet or exceed international performance standards.',
        ],
        [
            'id' => 'colouring-dyes',
            'nav' => 'Colouring Dyes',
            'name' => 'Colouring Dyes',
            'intro' => 'LubeAdd® Colour Dyes are specially formulated to impart vibrant, stable, and long-lasting coloration to a wide range of lubricants. These high-performance dyes are compatible with mineral oils, synthetic fluids, and various base stocks, ensuring visual differentiation without affecting fluid properties.',
            'sections' => [
                ['heading' => 'Key Benefits', 'items' => [
                    'Bright and consistent color shades.',
                    'Excellent solubility in various lubricant base oils.',
                    'Long-lasting color retention without precipitation.',
                    'Available in multiple shades for customization.',
                ]],
            ],
            'closing' => '',
        ],
    ];

    // ── Data: Components ────────────────────────────────────
    $componentProducts = [
        [
            'id' => 'pibsa',
            'nav' => 'Polyisobutylene Succinic Anhydride (PIBSA)',
            'name' => 'Polyisobutylene Succinic Anhydride (PIBSA)',
            'intro' => 'LubeAdd® Polyisobutylene Succinic Anhydride (PIBSA) is a versatile intermediate chemical widely used in lubricant formulations and other industrial applications. LubeAdd® Polyisobutylene Succinic Anhydride (PIBSA) ensures superior quality and reliability.',
            'sections' => [
                ['heading' => 'Advantages', 'items' => [
                    'Excellent Dispersancy: Serves as a precursor for dispersants that prevent sludge and deposit formation, ensuring cleaner engines and machinery.',
                    'Thermal Stability: Enhances the thermal and oxidative stability of finished lubricants, making them suitable for high-temperature applications.',
                    'Customizable Chemistry: Offers flexibility for use in various formulations due to its compatibility with other additives.',
                    'Low Free Maleic Content: Ensures minimal reactivity, reducing side reactions and enhancing product stability.',
                    'Environmentally Conscious: Provides a base for low-ash additives, contributing to reduced emissions in modern engine oils.',
                ]],
                ['heading' => 'Uses', 'items' => [
                    'Lubricant Additives: A key raw material in producing dispersants for automotive and industrial lubricants. Widely used in the formulation of engine oils, transmission fluids, and hydraulic fluids.',
                    'Fuel Additives: Improves cleanliness in fuel systems by preventing deposit formation.',
                    'Metalworking Fluids: Acts as a corrosion inhibitor in formulations for cutting and machining operations.',
                    'Marine and Industrial Applications: Used in heavy-duty oils to enhance performance under extreme conditions.',
                ]],
            ],
            'closing' => 'With its unique properties and low free maleic content, LubeAdd® Polyisobutylene Succinic Anhydride (PIBSA) delivers high efficiency and reliability in diverse industrial and automotive applications.',
        ],
        [
            'id' => 'pibsi',
            'nav' => 'Ashless Dispersants (PIBSI)',
            'name' => 'Ashless Dispersants (PIBSI)',
            'intro' => 'LubeAdd® Ashless Dispersants (PIBSI) are designed to enhance the performance and cleanliness of lubricants without contributing to ash formation. These dispersants play a vital role in maintaining engine efficiency, reducing emissions, and extending oil life. They are essential components in modern low-SAPS (Sulphated Ash, Phosphorus, and Sulfur) lubricant formulations, making them ideal for eco-friendly and high-performance applications.',
            'sections' => [
                ['heading' => 'Advantages of Ashless Dispersants', 'items' => [
                    'Cleaner Engines: Effectively disperses sludge, varnish, and deposits, ensuring cleaner and smoother engine operation.',
                    'Low Emissions: Contributes to lower ash levels, reducing particulate emissions and supporting compliance with stringent environmental regulations.',
                    'Extended Oil Life: Keeps contaminants in suspension, preventing oil thickening and supporting longer drain intervals for enhanced productivity.',
                    'Wide Compatibility: Suitable for formulating a variety of lubricants, including PCMO (Passenger Car Motor Oil), HDDO (Heavy Duty Diesel Oil), marine oils, and industrial lubricants.',
                    'Eco-Friendly Performance: Reduces the formation of harmful deposits in engines and exhaust systems, making it ideal for modern, environmentally conscious formulations.',
                    'Superior Engine Protection: Maintains the cleanliness of critical components, ensuring optimal performance even in demanding conditions, including turbocharged and direct-injection engines.',
                ]],
            ],
            'closing' => '',
        ],
        [
            'id' => 'vii',
            'nav' => 'Viscosity Index Improvers (Polymers)',
            'name' => 'Viscosity Index Improvers (Polymers)',
            'intro' => 'LubeAdd® Viscosity Index Improvers (Polymers) are advanced viscosity modifiers used in the production of Viscosity Index Improvers (VII) and lubricants to enhance their viscosity index. These polymers improve the stability and performance of lubricants across a wide temperature range, ensuring optimal fluidity and protection in various applications.',
            'sections' => [
                ['heading' => 'Key Benefits', 'items' => [
                    'Viscosity Index Enhancement: Improves the viscosity index of lubricants, ensuring consistent performance in extreme temperatures.',
                    'Shear Stability: Provides excellent resistance to mechanical shear, maintaining viscosity, and protective film strength over time.',
                    'Wear and Friction Reduction: Ensures a stable lubricating film, minimizing wear and friction for enhanced equipment longevity.',
                    'Formulation Flexibility: Available in 18 SSI to 45 SSI grades, allowing precise customization for different lubricant applications.',
                    'Wide Compatibility: Suitable for use with Group I and II base oils, making it ideal for engine oils, gear oils, hydraulic fluids, and industrial lubricants.',
                    'Multiple Forms for Easy Handling: Available in bales and pellets, providing convenient storage, transportation, and blending options.',
                ]],
            ],
            'closing' => '',
        ],
        [
            'id' => 'calcium-sulfonate',
            'nav' => 'Overbased Calcium Sulfonate (TBN400)',
            'name' => 'Overbased Calcium Sulfonate (TBN400)',
            'intro' => 'LubeAdd® Overbased Calcium Sulfonate (TBN400) is a premium detergent additive specifically engineered to provide exceptional acid neutralization, deposit control, and overall cleanliness in engine and industrial lubricant formulations. This additive is ideal for high-performance applications where robust protection and longer oil life is essential.',
            'sections' => [
                ['heading' => 'Key Benefits', 'items' => [
                    'Delivers superior acid neutralization, protecting against corrosive wear.',
                    'Effectively controls piston deposits and minimizes sludge formation.',
                    'Enhances oil cleanliness, especially under high-temperature conditions.',
                    'Supports longer drain intervals and extended engine protection.',
                    'Compatible with Group I, II, and III base oils for wide formulation flexibility.',
                ]],
            ],
            'closing' => '',
        ],
        [
            'id' => 'magnesium-sulfonate',
            'nav' => 'Overbased Magnesium Sulfonate (TBN400)',
            'name' => 'Overbased Magnesium Sulfonate (TBN400)',
            'intro' => 'LubeAdd® Overbased Magnesium Sulfonate (TBN400) detergent is a high-performance detergent additive designed to offer excellent acid neutralization, soot handling, and engine cleanliness, making it ideal for use in modern and high-performance lubricant formulations.',
            'sections' => [
                ['heading' => 'Key Benefits', 'items' => [
                    'Provides high TBN for superior acid neutralization and extended oil life.',
                    'Excellent ash balance for emissions-compliant formulations.',
                    'Improves piston cleanliness and reduces carbon buildup.',
                    'Enhances soot dispersion in diesel applications.',
                    'Compatible with Group I, II, and III base oils.',
                ]],
            ],
            'closing' => '',
        ],
        [
            'id' => 'ppd',
            'nav' => 'Pour Point Depressant (PPD)',
            'name' => 'Pour Point Depressant (PPD)',
            'intro' => 'LubeAdd® Pour Point Depressant (PPD) is a high-performance depressant designed to improve the low-temperature flow properties of lubricants. It effectively lowers the pour point, prevents wax crystallization, and ensures smooth operation in cold conditions. This additive enhances the reliability and performance of lubricants across various applications.',
            'sections' => [
                ['heading' => 'Key Benefits', 'items' => [
                    'Improves Low-Temperature Fluidity: Reduces the pour point of lubricants, ensuring smooth flow and preventing thickening in extreme cold.',
                    'Prevents Wax Crystallization: Modifies wax structures to prevent deposits and maintain stable viscosity in lubricants.',
                    'Enhances Equipment Protection: Ensures proper lubrication in cold conditions, reducing wear and improving overall machinery life.',
                ]],
            ],
            'closing' => '',
        ],
        [
            'id' => 'zddp',
            'nav' => 'Zinc Dialkyl-dithio Phosphate (ZDDP)',
            'name' => 'Zinc Dialkyl-dithio Phosphate (ZDDP)',
            'intro' => 'LubeAdd® Zinc Dialkyl-dithio Phosphate (ZDDP) is a high-performance antiwear and antioxidant additive. It is widely used in automotive and industrial lubricant formulations to protect metal surfaces under high load and temperature conditions. LubeAdd® ZDDP delivers proven reliability in minimizing wear and oxidation, making it a vital component in engine oils, hydraulic fluids, and gear oils.',
            'sections' => [
                ['heading' => 'Key Benefits', 'items' => [
                    'Excellent antiwear protection under boundary lubrication.',
                    'Strong antioxidant properties to inhibit oil degradation.',
                    'Minimizes metal-to-metal contact for extended component life.',
                    'Suitable for use in a wide range of lubricants, including engine oils and industrial fluids.',
                ]],
            ],
            'closing' => '',
        ],
        [
            'id' => 'antifoam',
            'nav' => 'Antifoam',
            'name' => 'Antifoam',
            'intro' => 'LubeAdd® Antifoam is a high-performance foam control additive engineered to effectively suppress foam and improve air release in a wide range of lubricants. It ensures system stability and longevity by preventing foam-related issues even under severe operating conditions. The product passes all standard foam sequence tests, including Sequence I, II, and III, confirming its robust and reliable performance.',
            'sections' => [
                ['heading' => 'Key Benefits', 'items' => [
                    'Provides excellent foam suppression and rapid air release.',
                    'Passes Sequence I, II, and III foam tests, ensuring global standard compliance.',
                    'Enhances equipment protection by minimizing cavitation and aeration.',
                    'Performs efficiently at very low treat rates.',
                    'Suitable for use in engine oils, gear oils, hydraulic fluids, and industrial lubricants.',
                    'Compatible with Group I, II, III and IV base oils.',
                ]],
            ],
            'closing' => '',
        ],
    ];
    ?>

    <!-- QUICK INTRO + JUMP LINKS -->
    <section class="font-poppins w-full bg-white pt-14 sm:pt-20 pb-2">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-stretch mb-5">
                <div class="w-1 bg-[#CB5116] mr-4 rounded-sm"></div>
                <div>
                    <p class="text-[#CB5116] font-bold text-sm tracking-widest uppercase leading-tight">Products</p>
                    <h2 class="text-[#254991] font-bold text-xl sm:text-2xl tracking-wide mt-0.5">Our Product Categories</h2>
                </div>
            </div>
            <p class="text-gray-500 text-sm sm:text-[15px] leading-relaxed max-w-2xl mb-6">
                From ready-to-use additive packages to the raw chemical building blocks behind them — pick a category to browse the full specification.
            </p>
            <div class="flex flex-wrap gap-3 mb-2">
                <a href="#lubricant-additives" class="text-xs font-bold uppercase tracking-wider text-white bg-[#254991] px-4 py-2 rounded-[4px] hover:bg-[#1d3a78] transition-colors duration-200">Lubricant Additives</a>
                <a href="#components" class="text-xs font-bold uppercase tracking-wider text-[#254991] bg-gray-100 px-4 py-2 rounded-[4px] hover:bg-gray-200 transition-colors duration-200">Components</a>
            </div>
        </div>
    </section>

    <!-- LUBRICANT ADDITIVES -->
    <section id="lubricant-additives" class="font-poppins w-full bg-white py-12 sm:py-16 scroll-mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-[360px_1fr] gap-10 lg:gap-12 items-start">

                <!-- LEFT CARD -->
                <div class="relative lg:sticky lg:top-28">
                    <div class="absolute inset-0 translate-x-[7px] translate-y-[7px] bg-[#CB5116] rounded-[6px]"></div>
                    <div class="relative flex flex-col bg-[#254991] rounded-[6px] p-7 sm:p-8">

                        <div class="flex items-center justify-between gap-4 mb-6">
                            <div class="w-12 h-12 rounded-[4px] bg-white/10 flex items-center justify-center">
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2C12 2 6 10.5 6 15A6 6 0 0012 21A6 6 0 0018 15C18 10.5 12 2 12 2Z" stroke="#CB5116" stroke-width="1.6" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="text-[11px] font-bold uppercase tracking-wider text-[#CB5116] bg-white/10 px-2.5 py-1 rounded-[4px] whitespace-nowrap">
                                <?php echo count($lubricantProducts); ?> Products
                            </span>
                        </div>

                        <h3 class="text-white font-bold text-xl tracking-wide mb-2">Lubricant Additives</h3>
                        <div class="w-12 h-1 bg-[#CB5116] rounded-full mb-5"></div>

                        <nav>
                            <ul class="space-y-1">
                                <?php foreach ($lubricantProducts as $p) : ?>
                                    <li>
                                        <a href="#<?php echo $p['id']; ?>" data-target="<?php echo $p['id']; ?>" class="product-link flex items-start gap-3 py-2 px-2 -mx-2 rounded-[4px] hover:bg-white/5 transition-colors duration-200">
                                            <svg class="w-5 h-5 flex-shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 2L21 7V17L12 22L3 17V7L12 2Z" fill="#CB5116" fill-opacity="0.18" stroke="#CB5116" stroke-width="1.5" />
                                                <path d="M8.5 12.3L10.4 14.2L15.3 9.3" stroke="#CB5116" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <span class="text-white/85 text-sm leading-relaxed"><?php echo htmlspecialchars($p['nav']); ?></span>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </nav>

                        <div class="mt-7 pt-6 border-t border-white/10">
                            <a href="contact.php" class="inline-flex items-center gap-2 text-white text-sm font-semibold hover:text-[#CB5116] transition-colors duration-200">
                                Need a custom oil blend? Get in touch
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 12H19M19 12L13 6M19 12L13 18" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>

                <!-- RIGHT SCROLLER -->
                <div id="lubricant-panel" class="product-scroll bg-white border border-gray-100 rounded-[6px] shadow-sm px-6 sm:px-8 py-7 lg:h-[78vh] lg:overflow-y-auto">
                    <?php
                    $count = count($lubricantProducts);
                    foreach ($lubricantProducts as $i => $product) {
                        echo render_product_detail($product, $i === $count - 1);
                    }
                    ?>
                </div>

            </div>
        </div>
    </section>

    <!-- COMPONENTS -->
    <section id="components" class="font-poppins w-full bg-gray-50 py-12 sm:py-16 scroll-mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-[360px_1fr] gap-10 lg:gap-12 items-start">

                <!-- LEFT CARD -->
                <div class="relative lg:sticky lg:top-28">
                    <div class="absolute inset-0 translate-x-[7px] translate-y-[7px] bg-[#CB5116] rounded-[6px]"></div>
                    <div class="relative flex flex-col bg-[#254991] rounded-[6px] p-7 sm:p-8">

                        <div class="flex items-center justify-between gap-4 mb-6">
                            <div class="w-12 h-12 rounded-[4px] bg-white/10 flex items-center justify-center">
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 2H15" stroke="#CB5116" stroke-width="1.6" stroke-linecap="round" />
                                    <path d="M10 2V8.5L4.5 17.5C3.8 18.7 4.6 20.2 6 20.2H18C19.4 20.2 20.2 18.7 19.5 17.5L14 8.5V2" stroke="#CB5116" stroke-width="1.6" stroke-linejoin="round" />
                                    <path d="M7 15H17" stroke="#CB5116" stroke-width="1.6" stroke-linecap="round" />
                                </svg>
                            </div>
                            <span class="text-[11px] font-bold uppercase tracking-wider text-[#CB5116] bg-white/10 px-2.5 py-1 rounded-[4px] whitespace-nowrap">
                                <?php echo count($componentProducts); ?> Products
                            </span>
                        </div>

                        <h3 class="text-white font-bold text-xl tracking-wide mb-2">Components</h3>
                        <div class="w-12 h-1 bg-[#CB5116] rounded-full mb-5"></div>

                        <nav>
                            <ul class="space-y-1">
                                <?php foreach ($componentProducts as $p) : ?>
                                    <li>
                                        <a href="#<?php echo $p['id']; ?>" data-target="<?php echo $p['id']; ?>" class="product-link flex items-start gap-3 py-2 px-2 -mx-2 rounded-[4px] hover:bg-white/5 transition-colors duration-200">
                                            <svg class="w-5 h-5 flex-shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 2L21 7V17L12 22L3 17V7L12 2Z" fill="#CB5116" fill-opacity="0.18" stroke="#CB5116" stroke-width="1.5" />
                                                <path d="M8.5 12.3L10.4 14.2L15.3 9.3" stroke="#CB5116" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <span class="text-white/85 text-sm leading-relaxed"><?php echo htmlspecialchars($p['nav']); ?></span>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </nav>

                        <div class="mt-7 pt-6 border-t border-white/10">
                            <a href="contact.php" class="inline-flex items-center gap-2 text-white text-sm font-semibold hover:text-[#CB5116] transition-colors duration-200">
                                Need bulk raw materials? Get in touch
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 12H19M19 12L13 6M19 12L13 18" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>

                <!-- RIGHT SCROLLER -->
                <div id="components-panel" class="product-scroll bg-white border border-gray-100 rounded-[6px] shadow-sm px-6 sm:px-8 py-7 lg:h-[78vh] lg:overflow-y-auto">
                    <?php
                    $count = count($componentProducts);
                    foreach ($componentProducts as $i => $product) {
                        echo render_product_detail($product, $i === $count - 1);
                    }
                    ?>
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

    <script>
        document.querySelectorAll('.product-link').forEach(function (link) {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const id = this.getAttribute('data-target');
                const target = document.getElementById(id);
                if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            });
        });

        function setupScrollSpy(panelId) {
            const panel = document.getElementById(panelId);
            if (!panel) return;

            const linkMap = {};
            document.querySelectorAll('.product-link[data-target]').forEach(function (l) {
                const targetEl = document.getElementById(l.getAttribute('data-target'));
                if (targetEl && panel.contains(targetEl)) {
                    linkMap[l.getAttribute('data-target')] = l;
                }
            });

            const observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        Object.values(linkMap).forEach(function (l) { l.classList.remove('is-active'); });
                        const activeLink = linkMap[entry.target.id];
                        if (activeLink) activeLink.classList.add('is-active');
                    }
                });
            }, { root: panel, threshold: 0.5 });

            panel.querySelectorAll('[data-product]').forEach(function (section) {
                observer.observe(section);
            });
        }

        setupScrollSpy('lubricant-panel');
        setupScrollSpy('components-panel');
    </script>

</body>

</html>