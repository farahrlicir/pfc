<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
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
                <a class="block p-3  font-semibold " href="#">student</a>
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