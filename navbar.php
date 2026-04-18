<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Global Trading Company</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"/>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            poppins: ['Poppins', 'sans-serif'],
          },
          colors: {
            navy: '#254991',
          }
        }
      }
    }
  </script>
</head>
<body class="font-poppins">

  <nav class="w-full bg-white shadow-[0_6px_20px_rgba(0,0,0,0.06)]">
    <div class="max-w-7xl mx-auto px-10 py-3 flex items-center justify-between">

      <!-- LOGO -->
      <div class="flex items-center gap-5 flex-shrink-0">
        <img src="./assets/GTCLOGO.png" alt="Global Trading Company Logo" class="h-20 w-auto object-contain"/>
      </div>

      <!-- NAV LINKS - Desktop -->
      <div class="hidden md:flex flex-1 items-center justify-center gap-12">
        <a href="#" class="font-poppins font-semibold text-base tracking-widest text-[#254991] hover:opacity-70 transition-opacity duration-200 uppercase">Home</a>
        <a href="#" class="font-poppins font-semibold text-base tracking-widest text-[#254991] hover:opacity-70 transition-opacity duration-200 uppercase">About Us</a>
        <a href="#" class="font-poppins font-semibold text-base tracking-widest text-[#254991] hover:opacity-70 transition-opacity duration-200 uppercase">Our Products</a>
        <a href="#" class="font-poppins font-semibold text-base tracking-widest text-[#254991] hover:opacity-70 transition-opacity duration-200 uppercase">Contact Us</a>
      </div>

      <!-- Spacer to balance logo -->
      <div class="hidden md:block w-36 flex-shrink-0"></div>

      <!-- HAMBURGER - Mobile -->
      <button
        class="md:hidden flex flex-col justify-center items-center p-2 gap-[5px]"
        onclick="document.getElementById('mobile-menu').classList.toggle('hidden')"
        aria-label="Toggle menu"
      >
        <span class="block w-6 h-[2px] bg-[#254991]"></span>
        <span class="block w-6 h-[2px] bg-[#254991]"></span>
        <span class="block w-6 h-[2px] bg-[#254991]"></span>
      </button>
    </div>

    <!-- MOBILE MENU -->
    <div id="mobile-menu" class="hidden md:hidden border-t border-[#dde6f5]">
      <a href="#" class="block font-poppins font-semibold text-sm tracking-widest text-[#254991] uppercase px-10 py-4 border-b border-[#dde6f5] hover:bg-blue-50">Home</a>
      <a href="#" class="block font-poppins font-semibold text-sm tracking-widest text-[#254991] uppercase px-10 py-4 border-b border-[#dde6f5] hover:bg-blue-50">About Us</a>
      <a href="#" class="block font-poppins font-semibold text-sm tracking-widest text-[#254991] uppercase px-10 py-4 border-b border-[#dde6f5] hover:bg-blue-50">Our Products</a>
      <a href="#" class="block font-poppins font-semibold text-sm tracking-widest text-[#254991] uppercase px-10 py-4 hover:bg-blue-50">Contact Us</a>
    </div>
  </nav>

</body>
</html>