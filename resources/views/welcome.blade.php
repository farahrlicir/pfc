<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  @vite('resources/css/app.css')
</head>
<body>
  <header id="container" class="bg-yellow text-black">
    <div class="container mx-auto items-center flex justify-between pb-3">
        <div>
          <img class="w-20 h-20"src="/img/logonav.svg">
        </div>
        <button id="toggle" class="md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <nav id="nav" class="fixed top-2 bottom-0 -right-full w-52 md:w-auto md:static transition-all">
            <ul class="md:flex">
                <li>
                    <a class="block p-3  font-semibold " href="#">home</a>
                </li>
                <li>
                    <a class="block p-3 font-semibold" href="#">about</a>
                </li>
                <li>
                    <a class="block p-3 font-semibold  " href="#">blog</a>
                </li>
                <li>
                    <a class="block p-3 font-semibold " href="#">contact</a>
                </li>
                <li>
                  <a class="block p-3 font-semibold " href="#">contact</a>
              </li>
            </ul>
        </nav>
    </div>
</header>

<!--Section-->
<section class="bg-yellow flex justify-between py-20 px-10">
  <div class="w-1/2">
    <div class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <img src="/img/logonav.svg" class="h-20 w-20 animate-bounce md:text-4xl sm:text-2xl">
      <h1 class="ml-1 title-font md:text-4xl sm:text-2xl mb-4 font-bold  uppercase border-t-3 animate-bounce"><span class="font-extrabold">d</span> <span class="text-bluey">u</span> <span>k</span> <span class="text-bluey">i</span> <span> d</span> s</h1><br>
    </div>
    <p class="leading-relaxed mb-3 text-xl">k e y s  t h o  k e g  f a j e l e homejeyyri kk hollly more ehdjhejk</p>
  </div>

  <div class="w-1/2">
    <img src="/img/class.svg">
  </div>
</section>

<!--School description-->
<section class="text-black body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
      <div class="p-4 md:w-1/3">
        <div class="h-full border-4  border-yellow border-opacity-60 rounded-lg overflow-hidden">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"  class="lg:h-48 md:h-36 w-full object-cover object-center text-black">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
          </svg>
          <div class="p-6">
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Special Education</h1>
            <p class="leading-relaxed mb-3">Our Special Education Program offers quality education to children with disabilities and developmental delays.</p>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/3">
        <div class="h-full border-4 border-bluey border-opacity-60 rounded-lg overflow-hidden">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"  class="lg:h-48 md:h-36 w-full object-cover object-center text-black" >
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
          </svg>
          <div class="p-6">
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Full Day Session</h1>
            <p class="leading-relaxed mb-3">At Edukids, we offer full-day preschool sessions built on a play-based approach for kids ages two to five.</p>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/3">
        <div class=" h-full border-4 border-pinky border-opacity-60 rounded-lg overflow-hidden">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"  class="lg:h-48 md:h-36 sm:h-4 w-full object-cover object-center text-black">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <div class="p-6">
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Qualified Teachers</h1>
            <p class="leading-relaxed mb-3">Our team consists of experienced and creative teachers who are dedicated to your kid's successful education.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<!--SECTION2-->
<section class="bg-pinky">
  <section class="text-black body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
        <img class="object-cover object-center rounded" alt="hero"  src="/img/teacher.svg">
      </div>
      <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900"><span class="font-extrabold">B</span>they sold out
          <br class="hidden lg:inline-block">readymade gluten
        </h1>
        <p class="mb-8 leading-relaxed">Copper mug try-hard pitchfork pour-over freegan heirloom neutra air plant cold-pressed tacos poke beard tote bag. Heirloom echo park mlkshk tote bag selvage hot chicken authentic tumeric truffaut hexagon try-hard chambray.</p>
        
      </div>
    </div>
  </section>
</section>

<!--  -->
  <div  class="gradient">jhfdkkkkkkkk</div>
<script src="js/navi.js"></script>
</body>
</html>