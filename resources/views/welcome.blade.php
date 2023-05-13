<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css2?family=Delicious+Handrawn&display=swap" rel="stylesheet">
  <link href="img/favicon.png" rel="icon">
  <title>Edukids</title>
  @vite('resources/css/app.css')
</head>
<body>
      
   <!---HEADER-->
    <div class="gradient">
      <header  class=" text-black">
      <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
         <!--LOGO-->
         <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <img class="w-10 h-10"src="/img/logonav.svg">
            <span class="font-delicious text-3xl font-bold">d<span class="text-bluey">u</span>k<span class="text-bluey">i</span>ds</span>
         </a>
          <!--NAVBAR-->
         <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center font-delicious">
           <a class="mr-5 hover:underline decoration-4 text-xl" href="#home">Home</a>
           <a class="mr-5 hover:underline decoration-4 text-xl" href="#about">About</a>
           <a class="mr-5 hover:underline decoration-4 text-xl" href="#blog">Blog</a>
           <a class="mr-5 hover:underline decoration-4 text-xl" href="#contact">Contact</a>
          </nav>
          <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-lg font-delicious mt-4 md:mt-0"><a href="{{url('/')}}">Goback</a></button>
      </div>

      </header>

      <br><br>

           <!--HOME-PAGE-->
       <section class="flex justify-between py-20 px-10" id="home">
         <div class="w-1/2">
           <div class="flex title-font md:font-base font-medium items-center text-gray-900 mb-4 md:mb-0">
              
                <h1 class="ml-1  xl:text-3xl  sm:text-lg sm:font-bold uppercase border-t-3 animate-bounce leading-relaxed mb-3  xl:font-extrabold ">
                 At our education center
                </h1>
           </div>
            <p class="leading-relaxed mb-3 xl:text-xl xl:font-extrabold  capitalize font-delicious sm:text-sm sm:font-normal ">we provide a variety of benefits and advantages for your kids successful education<br> while allowing your kid to stay fully active, creative, and healthy.</p>
  
          </div>

          <div class="w-1/2">
            <img src="/img/studentui.png">
          </div>
       </section>

  

    <!--School description-->
        <!--SUPP SECTION-->
        
    
  <div>
      <section class="text-black body-font " id="about">
          <div class="flex flex-wrap -m-4  px-5 py-24 mx-auto">
            <div class="p-4 md:w-1/3">
              <div class="h-45 border-4  border-yellow border-opacity-60 rounded-lg overflow-hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"  class="w-10 h-10 object-cover object-center text-black">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                </svg>
                <div class="p-6">
                  <h1 class="title-font text-lg  text-gray-900 mb-3 font-extrabold">Special Education</h1>
                  <p class="leading-relaxed mb-3 font-delicious">Our Special Education Program offers quality education to children with disabilities and developmental delays.</p>
                </div>
              </div>
            </div>
            <div class="p-4 md:w-1/3">
              <div class="h-45 border-4 border-bluey border-opacity-60 rounded-lg overflow-hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"  class="w-10 h-10 object-cover object-center text-black" >
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                </svg>
                <div class="p-6">
                  <h1 class="title-font text-lg  text-gray-900 mb-3 font-extrabold">Full Day Session</h1>
                  <p class="leading-relaxed mb-3 font-delicious ">At Edukids, we offer full-day preschool sessions built on a play-based approach for kids ages two to five.</p>
                </div>
              </div>
            </div>
            <div class="p-4 md:w-1/3">
              <div class=" h-45 border-4 border-pinky border-opacity-60 rounded-lg overflow-hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"  class="w-10 h-10 object-cover object-center text-black">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <div class="p-6">
                  <h1 class="title-font font-extrabold text-lg  text-gray-900 mb-3 ">Qualified Teachers</h1>
                  <p class="leading-relaxed mb-3 font-delicious ">Our team consists of experienced and creative teachers who are dedicated to your kid's successful education.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
       </section>
  </div>
</div>


      <!--SECTION2-->
 <section class="bg-rose-200">
 
  <section class="text-black body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
        <img class="object-cover object-center rounded" alt="hero"  src="/img/class.png">
      </div>
      <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
        <p class="xl:text-lg xl:font-bold sm:text-sm sm:font-medium animate-bounce ">to <span class="text-red-400">teach</span> is to <span class="text-red-400">touch a life for ever</span></p>
        <h1 class="ml-1  xl:text-3xl  sm:text-base sm:font-bold uppercase border-t-3  leading-relaxed mb-3  xl:font-extrabold ">
          At our education center
        </h1>
        <p class="mb-4 leading-relaxed xl:text-xl xl:font-extrabold  capitalize font-delicious sm:text-sm sm:font-medium">we provide a variety of benefits and advantages for your kids successful education<br> while allowing your kid to stay fully active, creative, and healthy.</p>
        
      </div>
    </div>
  </section>
  
 
 </section>

        <!-- offers section -->
        

 <section class="text-black body-font" id="blog">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col">
      <div class="flex flex-wrap justify-center  sm:flex-row flex-col py-6 mb-12 ">
        <h1 class="sm:w-2/5 text-center ml-1  xl:text-3xl  sm:text-base sm:font-bold uppercase border-t-3  xl:font-bold font-bold  text-black  title-font text-2xl mb-2 sm:mb-0">WHAT we OFFER...</h1>
      </div>
    </div>

    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">

         <!--SAFETY SECTION-->

      <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
        <div class="rounded-lg h-30 overflow-hidden flex justify-center ">
           <svg width="125px" height="125px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M512 32L156 188v334.4c0 148.8 75.2 287.2 199.2 368L512 992l156-101.6c124.8-80.8 199.2-219.2 199.2-368V188L512 32z" fill="#f5820f"></path><path d="M388.8 839.2c-108-70.4-172-188.8-172-316.8V228L512 98.4l295.2 129.6v295.2c0 128.8-64 247.2-172 316.8L512 920l-123.2-80.8z" fill="#82CFCD"></path><path d="M512 32L156 188v334.4c0 148.8 75.2 287.2 199.2 368L512 992V32z" fill="#FFFFFF"></path><path d="M512 1000c-1.6 0-3.2-0.8-4-1.6L352 896.8c-128-82.4-204-222.4-204-374.4V188c0-3.2 1.6-6.4 4.8-7.2L508.8 24.8c2.4-0.8 4-0.8 6.4 0l356 156c3.2 1.6 4.8 4 4.8 7.2v334.4c0 152-76 292-203.2 374.4l-156 101.6c-1.6 0.8-3.2 1.6-4.8 1.6zM164 193.6v329.6c0 146.4 73.6 281.6 196 360.8l152 98.4 152-98.4c122.4-80 196-215.2 196-360.8V193.6L512 40.8 164 193.6z" fill="#6A576D"></path><path d="M512 927.2c-1.6 0-3.2-0.8-4-1.6l-123.2-80c-109.6-71.2-175.2-192.8-175.2-324V228c0-3.2 1.6-6.4 4.8-7.2l295.2-129.6c2.4-0.8 4-0.8 6.4 0l295.2 129.6c3.2 1.6 4.8 4 4.8 7.2v295.2c0 131.2-65.6 252-175.2 324l-123.2 80H512zM224.8 232.8v289.6c0 125.6 63.2 241.6 168 310.4l118.4 76.8 118.4-76.8c105.6-68.8 168-184.8 168-310.4V232.8L512 107.2 224.8 232.8z" fill="#6A576D"></path><path d="M512 599.2c-10.4 0-20-4.8-26.4-12.8L386.4 462.4l53.6-42.4 72 90.4 124-156.8 53.6 42.4-150.4 190.4c-7.2 8-16.8 12.8-27.2 12.8z" fill="#FFFFFF"></path><path d="M512 607.2c-12.8 0-24.8-5.6-32.8-16L380 467.2c-1.6-1.6-1.6-4-1.6-5.6 0-2.4 1.6-4 3.2-5.6l53.6-42.4c3.2-2.4 8.8-2.4 11.2 1.6L512 497.6l118.4-148.8c2.4-3.2 8-4 11.2-1.6l53.6 42.4c3.2 2.4 4 8 1.6 11.2l-152 190.4c-8 10.4-20 16-32.8 16z m-114.4-144l94.4 118.4c4.8 6.4 12.8 9.6 20 9.6v8-8c8 0 15.2-4 20.8-9.6l145.6-184-40.8-32.8-119.2 150.4c-1.6 1.6-4 3.2-6.4 3.2-2.4 0-4.8-0.8-6.4-3.2l-67.2-84.8-40.8 32.8z" fill="#6A576D"></path></g></svg>
        </div>
        <h2 class="title-font text-gray-900 mt-5 flex justify-center  uppercase border-t-3  leading-relaxed mb-3  font-extrabold text-lg ">Safety first</h2>
        <p class=" leading-relaxed mt-2 text-lg font-delicious">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art.</p>   
      </div>

      <!--SMALLCLASS SECTION-->

      <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
        <div class="rounded-lg h-30 overflow-hidden flex justify-center">
        <div>  
          <img src="img/GIfschool.gif" class="w-32 h-32 rounded-full" alt="">
        </div>
        </div>
        <h2 class="title-font text-gray-900 mt-5 flex justify-center  uppercase border-t-3  leading-relaxed mb-3  font-extrabold text-lg ">Small class size</h2>
        <p class=" text-lg font-delicious leading-relaxed mt-2">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher.</p>
      </div>

      <!--CERTIFIED TEACHERS-->
      <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
        <div class="rounded-lg h-30 overflow-hidden flex justify-center ">
          <svg fill="#000000" width="125px" height="125px" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="m960 15 266.667 241.92 359.893-13.867 48.747 356.907L1920 820.547l-192 304.64 76.267 352.106-342.934 109.867-167.893 318.613L960 1769.56l-333.44 136.213-167.893-318.613-342.934-109.867L192 1125.187 0 820.547 284.693 599.96l48.747-356.907 359.893 13.867L960 15Zm0 144L764.907 335.96l-32.214 29.227-43.52-1.6-263.253-10.134-35.627 260.907-5.866 43.2-34.454 26.56-208.106 161.387L282.24 1068.44l23.253 36.693-9.28 42.667-55.68 257.387 250.774 80.426 41.493 13.334 20.373 38.506 122.667 232.96 243.84-99.52L960 1654.36l40.32 16.533 243.84 99.52 122.773-232.96 20.267-38.506 41.493-13.334 250.774-80.426-55.68-257.387-9.28-42.667 23.253-36.693 140.48-222.933-208.213-161.387-34.454-26.56-5.866-43.2-35.734-260.907-263.04 10.134-43.626 1.6-32.214-29.227L960 159Zm341.056 613.483 64.533 85.013-561.6 426.24-255.04-255.04 75.414-75.413 189.226 189.226 487.467-370.026Z" fill-rule="evenodd"></path> </g></svg>
        </div>
        <h2 class="title-font text-gray-900 mt-5 flex justify-center uppercase   font-extrabold text-lg">Certified Teachers</h2>
        <p class="text-lg font-delicious leading-relaxed mt-2 ">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra.</p>   
      </div>

  
      <!--PROGRAMME CARE-->
      <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
        <div class="rounded-lg h-30 overflow-hidden flex justify-center ">
          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" width="125px" height="125px" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle style="fill:#fda0ec;" cx="256" cy="256" r="256"></circle> <path style="fill:#d61355;" d="M350.932,493.809c89.25-35.661,153.719-120.103,160.465-220.372L371.66,133.701l-20.711,37.386 l-0.421-0.421H238.187l-97.602,65.793l101.309,101.309l-38.088,8.914L350.932,493.809z"></path> <path style="fill:#f5e9c7;" d="M140.585,236.46c2.608,3.625,7.349,5.051,11.528,3.481c0.06-0.022,0.119-0.045,0.179-0.064 l70.749-23.554c-0.016-0.569-0.003-1.141,0.034-1.717c0.591-9.035,7.577-16.293,16.556-17.205l42.639-4.429 c2.698-0.281,5.11,1.679,5.389,4.375c0.281,2.698-1.677,5.172-4.375,5.389l-42.639,4.429c-4.208,0.459-7.496,3.837-7.773,8.08 c-0.15,2.315,0.609,4.553,2.139,6.296c1.531,1.745,3.651,2.789,5.966,2.939l56.611,3.691c6.358,0.412,12.671-0.991,18.253-4.065 l74.662-41.115l-20.218-40.769l-18.754,16.362c-7.966,6.947-18.516,9.942-28.948,8.208l-62.69-10.418 c-11.488-1.527-23.004,1.338-32.435,8.066l-85.354,58.782C138.29,226.557,137.612,232.331,140.585,236.46z"></path> <g> <path style="fill:#FFEDB5;" d="M240.647,207.165c-4.208,0.459-7.496,3.837-7.773,8.08c-0.15,2.315,0.609,4.553,2.139,6.296 c1.531,1.745,3.651,2.789,5.966,2.939l12.59,0.821v-19.478L240.647,207.165z"></path> <path style="fill:#FFEDB5;" d="M140.585,236.46c2.608,3.624,7.349,5.051,11.528,3.481c0.06-0.022,0.119-0.045,0.179-0.064 l70.749-23.554c-0.016-0.569-0.003-1.141,0.033-1.717c0.591-9.035,7.578-16.293,16.556-17.205l13.936-1.448v-39.977 c-9.326,0.057-18.413,2.972-26.11,8.464l-85.354,58.782C138.29,226.557,137.612,232.331,140.585,236.46z"></path> </g> <path style="fill:#d27987;" d="M251.664,392.137c2.076,3.062,6.596,3.062,8.67,0c16.574-24.454,75.005-54.818,75.005-94.136 c0-27.115-17.761-39.671-39.671-39.671s-39.671,17.761-39.671,39.671c0-21.909-17.761-39.671-39.671-39.671 s-39.671,12.555-39.671,39.671C176.659,337.32,235.091,367.685,251.664,392.137z"></path> <path style="fill:#f2c5d5;" d="M295.671,258.332c-21.909,0-39.671,17.761-39.671,39.671c0-0.097-0.014-0.19-0.014-0.288v96.716 c1.653,0.005,3.308-0.759,4.349-2.294c16.574-24.452,75.005-54.818,75.005-94.136C335.341,270.888,317.58,258.332,295.671,258.332z"></path> <rect x="352.986" y="139.47" transform="matrix(0.8256 -0.5643 0.5643 0.8256 -31.0164 239.9867)" style="fill:#D35933;" width="39.418" height="61.392"></rect> <polygon style="fill:#f77902;" points="406.302,184.384 388.954,159.003 356.917,181.986 373.76,206.626 "></polygon> </g></svg>
        </div>
        <h2 class="title-font text-gray-900 mt-5 flex justify-center uppercase border-t-3  leading-relaxed mb-3 font-extrabold text-lg ">Program Care</h2>
        <p class=" leading-relaxed mt-2 text-lg font-delicious">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art .</p>   
      </div>


       <!--CREATIVE LESSONS-->
      <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
        <div class="rounded-lg h-30 overflow-hidden flex justify-center ">
          <img src="img/activities.gif" class="w-32 h-32 rounded-full" alt="">
        </div>
        <h2 class=" title-font text-gray-900 mt-5 flex justify-center  uppercase border-t-3  leading-relaxed mb-3  font-extrabold text-lg ">Creatives Lessons</h2>
        <p class="leading-relaxed mt-2 text-lg font-delicious">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra.</p>   
      </div>


    
        <!--HAPPY ENVIRONEMENT-->
      <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
        <div class="rounded-lg h-30 overflow-hidden flex justify-center ">
          <svg fill="#fce22a" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="125px" height="125px" viewBox="-10.61 -10.61 127.28 127.28" xml:space="preserve" stroke="#fce22a" transform="matrix(1, 0, 0, 1, 0, 0)rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M15.515,15.511C-5.172,36.198-5.17,69.858,15.517,90.545c20.682,20.686,54.34,20.686,75.028-0.004 c20.686-20.684,20.684-54.341,0.002-75.024C69.857-5.172,36.199-5.172,15.515,15.511z M84.759,84.756 c-17.494,17.494-45.963,17.496-63.456,0.003c-17.498-17.497-17.496-45.966,0-63.46C38.795,3.806,67.263,3.804,84.761,21.301 C102.255,38.795,102.253,67.263,84.759,84.756z M28.795,45.48c-1.23,1.148-3.115,1.07-4.248-0.143 c-1.133-1.212-1.07-3.113,0.143-4.246c5.863-5.483,12.408-2.385,15.072,0c1.236,1.107,1.342,3.007,0.234,4.243 c-0.117,0.13-0.242,0.249-0.375,0.354c-1.127,0.892-2.762,0.871-3.867-0.119C35.383,45.239,32.045,42.428,28.795,45.48z M81.266,41.127c1.236,1.107,1.342,3.007,0.236,4.243c-0.117,0.13-0.244,0.249-0.377,0.354c-1.125,0.892-2.763,0.871-3.867-0.119 c-0.369-0.33-3.707-3.141-6.959-0.089c-1.229,1.148-3.115,1.07-4.246-0.143c-1.133-1.212-1.07-3.113,0.141-4.246 C72.059,35.644,78.602,38.742,81.266,41.127z M77.208,61.31l-48.64-0.067c0,0,0,0-0.002,0c-0.479,0-0.926,0.272-1.191,0.729 c-0.265,0.456-0.316,1.033-0.131,1.54c4.133,11.374,14.227,18.726,25.713,18.726c11.246,0,21.281-7.314,25.564-18.636 c0.191-0.508,0.148-1.09-0.117-1.551C78.14,61.589,77.689,61.311,77.208,61.31z M41.746,76.832 c-2.641-1.154-5.018-2.712-7.014-4.615h7.014V76.832z M41.746,68.917h-9.785v-4.95l9.785,0.013V68.917z M55.091,79.026 c-0.729,0.058-1.461,0.095-2.202,0.095c-2.635,0-5.186-0.359-7.584-1.023v-5.881h9.786V79.026z M55.091,68.917h-9.786v-4.935 l9.786,0.011V68.917z M68.432,74.232c-2.834,2.046-6.17,3.52-9.785,4.282v-6.299h9.785V74.232z M68.432,68.917h-9.785v-4.92 l9.785,0.012V68.917z M75.63,65.667c-0.533,1.146-1.179,2.226-1.9,3.249h-1.738v-4.904l2.47,0.002 c0.43,0.001,0.827,0.202,1.065,0.534C75.76,64.882,75.8,65.301,75.63,65.667z"></path> </g> </g></svg>
        </div>
        <h2 class="title-font text-gray-900 mt-5 flex justify-center  uppercase border-t-3  leading-relaxed mb-3  font-extrabold text-lg ">Happy Environement</h2>
        <p class="leading-relaxed mt-2 text-lg font-delicious">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street.</p>   
      </div>
    </div> 
   </div>
 </section>



        <!--contact-->
   <section>
    <section class="text-gray-600 body-font relative" id="contact">
      <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
        <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
         <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=%C4%B0zmir+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
         
          <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
           
              <div class="lg:w-1/2 px-6">
              <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
              <p class="mt-1">..................................................</p>
            </div>
            <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
              <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
              <a class="text-indigo-500 leading-relaxed"><a href="farahlicir15@email.com">farahlicir15@email.com</a>
              <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
              <p class="leading-relaxed"><a href="tel:+213662653688"> 06 58 50 50 42</a></p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
          <h2 class="text-gray-900 text-lg mb-1 font-medium title-font font-delicious">Feedback</h2>
          <p class="leading-relaxed mb-5 text-gray-600">.................................</p>
              @if(Session::has('success'))
                <div class="alert alert-success text-green-500 font-bold ">
                 {{Session::get('success')}}
                </div>
                 @endif
        <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm">
           @csrf
          <div class="relative mb-4">
            <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
            <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ old('name') }}">
          </div>
          <div class="relative mb-4">
            <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
            <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ old('email') }}">
          </div>
          <div class="relative mb-4">
            <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
            <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{ old('message') }}</textarea>
          </div>
          <button type="submit" class="text-black bg-yellow border-0 py-2 px-6 focus:outline-none hover:bg-rose-100 w-full rounded-full font-delicious text-lg font-bold">Send</button>
        </div>
      </form>
      </div>
    </section>
   </section>

 

        <!--FOOTER-->
  <footer class=" bg-rose-100 p-4 sm:p-6 font-delicious ">

    <div class="sm:flex sm:items-center sm:justify-between">
        <span class="text-base text-black sm:text-center ">© 2023 <a href="#">Edukids™</a>. All Rights Reserved.
        </span>
        <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
            <a href="https://www.facebook.com/profile.php?id=100092463182090" class="text-black hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                <span class="sr-only">Facebook page</span>
            </a>
            <a href="#" class="text-black hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                <span class="sr-only">Instagram page</span>
            </a>
            <a href="#" class="text-black hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                <span class="sr-only">Twitter page</span>
            </a>
        </div>
     </div>
   
  </footer>
  
</body>
</html>