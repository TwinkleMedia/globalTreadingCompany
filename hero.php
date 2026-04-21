<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hero Section</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            poppins: ['Poppins', 'sans-serif']
          },
          keyframes: {
            fadeIn: {
              '0%': {
                opacity: '0',
                transform: 'translateY(20px)'
              },
              '100%': {
                opacity: '1',
                transform: 'translateY(0)'
              }
            },
            ken: {
              '0%': {
                transform: 'scale(1)'
              },
              '100%': {
                transform: 'scale(1.08)'
              }
            }
          },
          animation: {
            fadeIn: 'fadeIn 0.8s ease forwards',
            ken: 'ken 8s ease-in-out infinite alternate'
          }
        }
      }
    }
  </script>
</head>

<body class="font-poppins m-0 p-0 bg-white">

  <!-- HERO SECTION -->
  <section class="relative w-full overflow-hidden" style="height: clamp(380px, 60vw, 670px);">

    <!-- STATIC IMAGE -->
    <div class="relative w-full h-full">
      <img src="./assets/bg2.jpg" alt="Hero Image" class="w-full h-full object-cover" />
      <div class="absolute inset-0 bg-black/30"></div>
    </div>

    <!-- CENTERED TEXT -->
    <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4 z-10 animate-fadeIn">
      <h1 class="font-poppins font-semibold text-white text-3xl sm:text-4xl md:text-5xl lg:text-6xl leading-tight tracking-wide drop-shadow-lg">
        Touching Lives Everyday
      </h1>
      <p class="font-poppins font-light text-white text-sm sm:text-base md:text-lg mt-4 max-w-xl leading-relaxed drop-shadow-md">
        Ranking amongst top 5 players globally and with 7.6% of the global market share we supply to 350+ speciality oil products
      </p>
    </div>

    <!-- WAVY BOTTOM -->
    <div class="absolute bottom-0 left-0 w-full z-10 leading-none">
      <svg viewBox="0 0 1440 60" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
        class="w-full block" style="height: clamp(30px, 5vw, 60px);">
        <path d="M0,30 C360,60 720,0 1080,35 C1260,50 1380,20 1440,30 L1440,60 L0,60 Z" fill="white" />
      </svg>
    </div>

  </section>




</body>

</html>