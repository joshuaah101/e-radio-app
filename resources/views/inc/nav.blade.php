<nav class="py-5 px-12">
    <div class="flex justify-between items-center">
        <a href="#" class="flex space-x-2 items-center">
            <img src="{{ asset('storage/images/headset.png') }}" class="w-28 h-auto" alt="logo" >
            <div class="flex flex-col items-center justify-center">
                <span class="font-bold text-5xl font-mono">
                    FPI-Radio
                </span>
                <span class="font-bold text-lg font-mono">
                    92.1 Fm
                </span>
            </div>
        </a>

        <div class="flex justify-between items-center space-x-5">
            <a href="#" class="font-medium text-lg hover:text-orange-600 transition duration-300 font-mono {{ request()->is('/') ? 'bg-orange-600 text-orange-100 flex  px-5 py-3 rounded hover:text-orange-100' : '' }}">
                Home
            </a>
            <a href="#" class="font-medium text-lg hover:text-orange-600 transition duration-300 font-mono {{ request()->is('shows') ? 'bg-orange-600 text-orange-100 flex  px-5 py-3 rounded hover:text-orange-100' : '' }}">
                Shows
            </a>
            <a href="#" class="font-medium text-lg hover:text-orange-600 transition duration-300 font-mono {{ request()->is('about') ? 'bg-orange-600 text-orange-100 flex  px-5 py-3 rounded hover:text-orange-100' : '' }}">
                About us
            </a>
        </div>
    </div>
</nav>