<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us – Global Treading Company</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }

        /* Animated top-border sweep on cards */
        .card-sweep::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 3px;
            background: #CB5116;
            transition: width 0.5s ease;
        }

        .card-sweep:hover::before {
            width: 100%;
        }

        /* Input focus glow */
        .form-input:focus {
            outline: none;
            border-color: #254991;
            background: #fff;
            box-shadow: 0 0 0 3px rgba(37, 73, 145, 0.08);
        }

        /* Fade-in-up animation */
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(24px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-up {
            animation: fadeUp 0.7s ease both;
        }

        .delay-100 {
            animation-delay: 0.1s;
        }

        .delay-200 {
            animation-delay: 0.2s;
        }

        .delay-300 {
            animation-delay: 0.3s;
        }

        .delay-400 {
            animation-delay: 0.4s;
        }

        /* Map placeholder shimmer */
        @keyframes shimmer {
            0% {
                background-position: -800px 0;
            }

            100% {
                background-position: 800px 0;
            }
        }

        .map-shimmer {
            background: linear-gradient(90deg, #e8edf5 25%, #d5dcea 50%, #e8edf5 75%);
            background-size: 800px 100%;
            animation: shimmer 2s infinite linear;
        }
    </style>
</head>

<body class="font-poppins bg-white">

    <?php include "./navbar.php"; ?>


    <!-- ========== HERO SECTION ========== -->
    <section class="relative w-full min-h-[52vh] bg-[#254991] overflow-hidden flex items-center">

        <!-- Decorative rings -->
        <div class="absolute top-[-80px] right-[-80px] w-[380px] h-[380px] rounded-full border border-white/10 pointer-events-none"></div>
        <div class="absolute top-[-40px] right-[-40px] w-[240px] h-[240px] rounded-full border border-white/10 pointer-events-none"></div>
        <div class="absolute bottom-[-90px] left-[-50px] w-[300px] h-[300px] rounded-full border border-white/10 pointer-events-none"></div>

        <!-- Top orange accent bar -->
        <div class="absolute top-0 right-0 w-1/3 h-2 bg-[#CB5116]"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full py-20">

            <!-- Breadcrumb -->
            <div class="flex items-center gap-2 mb-6 animate-fade-up">
                <a href="./index.php" class="text-white/60 text-xs font-medium tracking-widest uppercase hover:text-[#CB5116] transition-colors duration-200">Home</a>
                <span class="text-white/30 text-xs">/</span>
                <span class="text-[#CB5116] text-xs font-semibold tracking-widest uppercase">Contact Us</span>
            </div>

            <p class="text-[#CB5116] text-sm font-semibold tracking-[0.25em] uppercase mb-3 animate-fade-up delay-100">Reach Out</p>
            <h1 class="font-bold text-3xl sm:text-4xl lg:text-5xl text-white uppercase tracking-wide leading-tight mb-5 animate-fade-up delay-200">
                Let's Start A<br>
                <span class="text-[#CB5116]">Conversation</span>
            </h1>

            <!-- Divider -->
            <div class="flex items-center gap-3 mb-6 animate-fade-up delay-300">
                <div class="w-12 h-[3px] bg-[#CB5116] rounded-sm"></div>
                <div class="w-3 h-[3px] bg-white/30 rounded-sm"></div>
            </div>

            <p class="text-white/75 text-sm sm:text-base font-light max-w-xl leading-relaxed animate-fade-up delay-400">
                Have a product enquiry, need a bulk quote, or want to discuss a custom formulation? Our team is ready to help you find the right industrial solution.
            </p>
        </div>

        <!-- Bottom wave -->
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none pointer-events-none">
            <svg viewBox="0 0 1440 60" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="w-full h-12 sm:h-16">
                <path d="M0,40 C360,0 1080,60 1440,20 L1440,60 L0,60 Z" fill="white" />
            </svg>
        </div>
    </section>
    <!-- END HERO -->


    <!-- ========== QUICK INFO CARDS ========== -->
    <section class="w-full bg-white pt-14 pb-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">

                <!-- Address -->
                <div class="card-sweep relative bg-gray-50 rounded-lg p-6 flex items-start gap-4 overflow-hidden hover:shadow-md transition-all duration-300">
                    <div class="w-11 h-11 rounded-md bg-[#254991] flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="#CB5116" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-[#CB5116] text-xs font-semibold uppercase tracking-widest mb-1">Address</p>
                        <p class="text-gray-700 text-sm leading-relaxed">Office No - 13 Sanjivani Centre Plot No - F/03 Sector -12 Kharghar <br>Navi Mumbai - 410210</p>
                    </div>
                </div>

                <!-- Phone -->
                <div class="card-sweep relative bg-gray-50 rounded-lg p-6 flex items-start gap-4 overflow-hidden hover:shadow-md transition-all duration-300">
                    <div class="w-11 h-11 rounded-md bg-[#254991] flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="#CB5116" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 6.75z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-[#CB5116] text-xs font-semibold uppercase tracking-widest mb-1">Phone</p>
                        <p class="text-gray-700 text-sm leading-relaxed">+91 84249 49598</p>
                    </div>
                </div>

                <!-- Email -->
                <div class="card-sweep relative bg-gray-50 rounded-lg p-6 flex items-start gap-4 overflow-hidden hover:shadow-md transition-all duration-300">
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
                <div class="card-sweep relative bg-gray-50 rounded-lg p-6 flex items-start gap-4 overflow-hidden hover:shadow-md transition-all duration-300">
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
        </div>
    </section>
    <!-- END QUICK INFO CARDS -->


    <!-- ========== MAIN CONTACT SECTION ========== -->
    <section class="w-full bg-white py-14">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Section Heading -->
            <div class="flex items-stretch mb-12">
                <div class="w-1 bg-[#CB5116] mr-4 rounded-sm"></div>
                <div>
                    <p class="text-[#CB5116] font-semibold text-lg tracking-widest uppercase leading-tight">Get In Touch</p>
                    <h2 class="text-[#254991] font-bold text-xl sm:text-2xl tracking-wide uppercase mt-1">Send Us An Enquiry</h2>
                </div>
            </div>

            <div class="flex flex-col lg:flex-row gap-10 items-start">

                <!-- LEFT: FORM -->
                <div class="w-full lg:w-3/5">
                    <div class="bg-white rounded-lg p-8 shadow-sm border border-gray-100">

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-5">
                            <div class="flex flex-col gap-1.5">
                                <label class="text-[#254991] text-xs font-semibold uppercase tracking-wider">Full Name <span class="text-[#CB5116]">*</span></label>
                                <input type="text" placeholder="John Doe"
                                    class="form-input border border-gray-200 rounded-sm px-3.5 py-2.5 text-sm text-gray-700 bg-gray-50 transition-all duration-200" />
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <label class="text-[#254991] text-xs font-semibold uppercase tracking-wider">Company Name</label>
                                <input type="text" placeholder="Your Company Ltd."
                                    class="form-input border border-gray-200 rounded-sm px-3.5 py-2.5 text-sm text-gray-700 bg-gray-50 transition-all duration-200" />
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-5">
                            <div class="flex flex-col gap-1.5">
                                <label class="text-[#254991] text-xs font-semibold uppercase tracking-wider">Email Address <span class="text-[#CB5116]">*</span></label>
                                <input type="email" placeholder="john@company.com"
                                    class="form-input border border-gray-200 rounded-sm px-3.5 py-2.5 text-sm text-gray-700 bg-gray-50 transition-all duration-200" />
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <label class="text-[#254991] text-xs font-semibold uppercase tracking-wider">Phone Number</label>
                                <input type="tel" placeholder="+91 98000 00000"
                                    class="form-input border border-gray-200 rounded-sm px-3.5 py-2.5 text-sm text-gray-700 bg-gray-50 transition-all duration-200" />
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-5">
                            <!-- Product Interest -->
                            <div class="flex flex-col gap-1.5">
                                <label class="text-[#254991] text-xs font-semibold uppercase tracking-wider">Product Interest</label>
                                <select class="form-input border border-gray-200 rounded-sm px-3.5 py-2.5 text-sm text-gray-700 bg-gray-50 transition-all duration-200">
                                    <option value="" disabled selected>Select a category</option>
                                    <option>Industrial Oils</option>
                                    <option>Lubricant Additives</option>
                                    <option>Specialty Chemicals</option>
                                    <option>Metalworking Fluids</option>
                                    <option>Finished Fluids</option>
                                    <option>Viscosity Index Improvers</option>
                                    <option>Custom Formulation</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <!-- Enquiry Type -->
                            <div class="flex flex-col gap-1.5">
                                <label class="text-[#254991] text-xs font-semibold uppercase tracking-wider">Enquiry Type</label>
                                <select class="form-input border border-gray-200 rounded-sm px-3.5 py-2.5 text-sm text-gray-700 bg-gray-50 transition-all duration-200">
                                    <option value="" disabled selected>Select type</option>
                                    <option>General Enquiry</option>
                                    <option>Bulk Order / Pricing</option>
                                    <option>Technical Support</option>
                                    <option>Custom Formulation</option>
                                    <option>Partnership / Distribution</option>
                                </select>
                            </div>
                        </div>

                        <!-- Subject -->
                        <div class="flex flex-col gap-1.5 mb-5">
                            <label class="text-[#254991] text-xs font-semibold uppercase tracking-wider">Subject</label>
                            <input type="text" placeholder="Brief subject of your enquiry"
                                class="form-input border border-gray-200 rounded-sm px-3.5 py-2.5 text-sm text-gray-700 bg-gray-50 transition-all duration-200" />
                        </div>

                        <!-- Message -->
                        <div class="flex flex-col gap-1.5 mb-6">
                            <label class="text-[#254991] text-xs font-semibold uppercase tracking-wider">Message <span class="text-[#CB5116]">*</span></label>
                            <textarea rows="5" placeholder="Tell us about your requirement, quantities, or any specific product specifications..."
                                class="form-input border border-gray-200 rounded-sm px-3.5 py-2.5 text-sm text-gray-700 bg-gray-50 transition-all duration-200 resize-none"></textarea>
                        </div>

                        <!-- Submit Row -->
                        <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
                            <button type="submit"
                                class="inline-flex items-center gap-2 bg-[#CB5116] text-white text-sm font-semibold px-7 py-3 rounded-sm hover:bg-[#254991] transition-colors duration-300">
                                Send Enquiry
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </button>
                            <p class="text-gray-400 text-xs"><span class="text-[#CB5116]">*</span> Required fields</p>
                        </div>

                    </div>
                </div>

                <!-- RIGHT: CONTACT INFO + WHY CONTACT -->
                <div class="w-full lg:w-2/5 flex flex-col gap-6">

                    <!-- Accent Info Card -->
                    <div class="bg-[#254991] rounded-lg p-7 text-white relative overflow-hidden">
                        <div class="absolute -top-8 -right-8 w-32 h-32 rounded-full border border-white/10 pointer-events-none"></div>
                        <div class="absolute -bottom-8 -left-8 w-24 h-24 rounded-full border border-white/10 pointer-events-none"></div>

                        <div class="w-11 h-11 rounded-md bg-[#CB5116] flex items-center justify-center mb-5">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-base uppercase tracking-wide mb-2">We Respond Fast</h3>
                        <div class="w-8 h-0.5 bg-[#CB5116] mb-4"></div>
                        <p class="text-white/75 text-sm font-light leading-relaxed">
                            Our team typically responds to all enquiries within <span class="text-[#CB5116] font-semibold">24 business hours</span>. For urgent requirements, call us directly on our phone lines.
                        </p>
                    </div>

                    <!-- What to Expect -->
                    <div class="bg-gray-50 rounded-lg p-7 border border-gray-100">
                        <h3 class="text-[#254991] font-semibold text-sm uppercase tracking-widest mb-5">What Happens Next?</h3>

                        <div class="flex flex-col gap-5">

                            <div class="flex items-start gap-4">
                                <div class="w-8 h-8 rounded-full bg-[#CB5116] text-white flex items-center justify-center text-xs font-bold flex-shrink-0">1</div>
                                <div>
                                    <p class="text-[#254991] font-semibold text-sm">We Review Your Enquiry</p>
                                    <p class="text-gray-500 text-xs leading-relaxed mt-0.5">Our technical team reviews your requirement in detail.</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-8 h-8 rounded-full bg-[#CB5116] text-white flex items-center justify-center text-xs font-bold flex-shrink-0">2</div>
                                <div>
                                    <p class="text-[#254991] font-semibold text-sm">We Send You a Proposal</p>
                                    <p class="text-gray-500 text-xs leading-relaxed mt-0.5">Receive a tailored product recommendation or quotation.</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-8 h-8 rounded-full bg-[#CB5116] text-white flex items-center justify-center text-xs font-bold flex-shrink-0">3</div>
                                <div>
                                    <p class="text-[#254991] font-semibold text-sm">We Deliver the Solution</p>
                                    <p class="text-gray-500 text-xs leading-relaxed mt-0.5">From sampling to bulk dispatch — we manage it all.</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END MAIN CONTACT SECTION -->


    <!-- ========== MAP SECTION ========== -->
    <section class="w-full bg-gray-50 py-14">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Heading -->
            <div class="flex items-stretch mb-10">
                <div class="w-1 bg-[#CB5116] mr-4 rounded-sm"></div>
                <div>
                    <p class="text-[#CB5116] font-semibold text-lg tracking-widest uppercase leading-tight">Find Us</p>
                    <h2 class="text-[#254991] font-bold text-xl sm:text-2xl tracking-wide uppercase mt-1">Our Location</h2>
                </div>
            </div>

            <!-- Map + Address Side by Side -->
            <div class="flex flex-col lg:flex-row gap-8 items-stretch">

                <!-- Google Map Embed -->
                <div class="w-full lg:w-2/3 rounded-lg overflow-hidden shadow-sm border border-gray-200 min-h-[340px]">
                    <!-- Replace src with your actual Google Maps embed URL -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.4854066631527!2d72.8776559!3d19.1075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9d0a6000001%3A0x0!2sMIDC+Industrial+Area%2C+Mumbai!5e0!3m2!1sen!2sin!4v1680000000000!5m2!1sen!2sin"
                        width="100%"
                        height="100%"
                        style="min-height: 340px; border: 0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Global Treading Company Location">
                    </iframe>
                </div>

                <!-- Address Details Card -->
                <div class="w-full lg:w-1/3 bg-[#254991] rounded-lg p-8 text-white flex flex-col justify-between relative overflow-hidden">
                    <!-- Decorative ring -->
                    <div class="absolute -bottom-12 -right-12 w-48 h-48 rounded-full border border-white/10 pointer-events-none"></div>

                    <div>
                        <p class="text-[#CB5116] text-xs font-semibold uppercase tracking-widest mb-2">Head Office</p>
                        <h3 class="font-bold text-lg uppercase tracking-wide mb-1">Global Treading</h3>
                        <h4 class="font-light text-sm text-white/70 mb-6">Company Pvt. Ltd.</h4>
                        <div class="w-10 h-0.5 bg-[#CB5116] mb-6"></div>

                        <!-- Address lines -->
                        <div class="space-y-4 text-sm font-light text-white/80 leading-relaxed">
                            <div class="flex items-start gap-3">
                                <svg class="w-4 h-4 text-[#CB5116] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="#CB5116" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                <span>Plot No. 12, MIDC Industrial Area,<br>Mumbai, Maharashtra – 400093, India</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="#CB5116" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 6.75z" />
                                </svg>
                                <span>+91 98200 00000</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="#CB5116" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0l-9.75 6.75L2.25 6.75" />
                                </svg>
                                <span>info@globaltreading.com</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="#CB5116" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>Mon–Sat: 9:00 AM – 6:00 PM</span>
                            </div>
                        </div>
                    </div>

                    <!-- Directions button -->
                    <a href="https://maps.google.com" target="_blank"
                        class="mt-8 inline-flex items-center gap-2 bg-[#CB5116] text-white text-sm font-semibold px-5 py-3 rounded-sm hover:bg-white hover:text-[#CB5116] transition-colors duration-300 self-start">
                        Get Directions
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!-- END MAP SECTION -->
    <?php
    include "./whatsapp-float.php"
    ?>

    <?php include "./footer.php"; ?>

</body> 

</html>