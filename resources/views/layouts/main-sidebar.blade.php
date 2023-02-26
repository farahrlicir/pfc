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
</body>
</html>