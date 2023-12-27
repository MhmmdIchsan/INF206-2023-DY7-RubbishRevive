@auth
@if(auth()->user()->role == '0')
<header class="relative inset-x-0 bottom-0">
    <div
        class="flex inset-x-0 relative w-auto bg-gradient-to-l from-cyan-300 to-cyan-100 justify-between items-center shadow-xl">
        <div class="flex items-center">
            <a href="/dashboard" class="font-bold text-lg text-primary block py-1">
                <img src="{{ asset('image/logo.png') }}" alt="logo" class="w-20">
            </a>
            <p
                class="select-none text-2xl font-bold text-center text-gray-800 hover:text-cyan-500 transition-colors duration-300">
                Rubbish Revive
            </p>
        </div>
        <nav id="nav-menu" class="hidden lg:flex flex-wrap justify-center items-center space-x-16">
            <a href="/pickup" class="text-base text-black py-2 flex group-hover:text-primary">Pickup</a>
            <a href="/pricelist" class="text-base text-black py-2 flex group-hover:text-primary">Pricelist</a>
            <a href="/jadwal-pickup" class="text-base text-black py-2 flex group-hover:text-primary">Jadwal Pickup</a>
            <a href="/tukarpoin" class="text-base text-black py-2 flex group-hover:text-primary">Exchange</a>
            <a href="/aboutus" class="text-base text-black py-2 flex group-hover:text-primary">About Us</a>
        </nav>
        <div class="flex items-center">
            <a href="/myprofile" class="text-base flex text-black mx-4 group-hover:text-primary">My Profile <img
                    src="{{ asset('image/profile.jpg') }}" class="object-contain h-5 w-5 ml-1"></img></a>
        </div>
        <div
            class="absolute top-24 right-12 h-7 w-10 text-xl bg-gradient-to-r from-cyan-400 to-cyan-300 flex items-center justify-center rounded-full shadow-md">
            <span class="text-black font-semibold">${{ auth()->user()->poin }}</span>
        </div>

    </div>
</header>

@elseif(auth()->user()->role == '1')
<header class="relative inset-x-0 bottom-0">
    <div
        class="flex inset-x-0 relative w-auto bg-gradient-to-l from-cyan-300 to-cyan-100 justify-between items-center shadow-xl">
        <div class="flex items-center">
            <a href="/dashboard" class="font-bold text-lg text-primary block py-1">
                <img src="{{ asset('image/logo.png') }}" alt="logo" class="w-20">
            </a>
            <p
                class="select-none text-2xl font-bold text-center text-gray-800 hover:text-cyan-500 transition-colors duration-300">
                Rubbish Revive
            </p>
        </div>
        <nav id="nav-menu" class="hidden lg:flex flex-wrap justify-center items-center space-x-16">
            <a href="/pickup" class="text-base text-black py-2 flex group-hover:text-primary">Pickup</a>
            <a href="/jadwal-pickup" class="text-base text-black py-2 flex group-hover:text-primary">Jadwal Pickup</a>
            <a href="/ongoing" class="text-base text-black py-2 flex group-hover:text-primary">Exchange</a>
            <a href="/manageusers" class="text-base text-black py-2 flex group-hover:text-primary">Manage User</a>
        </nav>
        <div class="flex items-center">
            <a href="/myprofile" class="text-base flex text-black mx-4 group-hover:text-primary">My Profile <img
                    src="{{ asset('image/profile.jpg') }}" class="object-contain h-5 w-5 ml-1"></img></a>
        </div>

    </div>
</header>

@elseif(auth()->user()->role == '2')
<header class="relative inset-x-0 bottom-0">
    <div
        class="flex inset-x-0 relative w-auto bg-gradient-to-l from-cyan-300 to-cyan-100 justify-between items-center shadow-xl">
        <div class="flex items-center">
            <a href="/dashboard" class="font-bold text-lg text-primary block py-1">
                <img src="{{ asset('image/logo.png') }}" alt="logo" class="w-20">
            </a>
            <p
                class="select-none text-2xl font-bold text-center text-gray-800 hover:text-cyan-500 transition-colors duration-300">
                Rubbish Revive
            </p>
        </div>
        <nav id="nav-menu" class="hidden lg:flex flex-wrap justify-center items-center space-x-16">
            <a href="/pickup" class="text-base text-black py-2 flex group-hover:text-primary">Pickup</a>
            <a href="/jadwal-pickup" class="text-base text-black py-2 flex group-hover:text-primary">Jadwal Pickup</a>
            <a href="/tukarpoin" class="text-base text-black py-2 flex group-hover:text-primary">Exchange</a>
            <a href="/aboutus" class="text-base text-black py-2 flex group-hover:text-primary">About Us</a>
        </nav>
        <div class="flex items-center">
            <a href="/myprofile" class="text-base flex text-black mx-4 group-hover:text-primary">My Profile <img
                    src="{{ asset('image/profile.jpg') }}" class="object-contain h-5 w-5 ml-1"></img></a>
        </div>
        <div
            class="absolute top-24 right-12 h-7 w-10 text-xl bg-gradient-to-r from-cyan-400 to-cyan-300 flex items-center justify-center rounded-full shadow-md">
            <span class="text-black font-semibold">${{ auth()->user()->poin }}</span>
        </div>

    </div>
</header>

@endauth
@else
<header class="relative inset-x-0 bottom-0">
    <div class="flex inset-x-0 relative w-auto bg-gradient-to-l from-cyan-300 to-cyan-100  justify-between shadow-xl">
        <div class="px-4 flex justify-start">
            <a href="/dashboard" class="font-bold text-lg text-primary block py-1">
                <img src="{{ asset('image/logo.png') }}" alt="logo" class="w-20">
            </a>
            <p
                class="select-none text-2xl font-bold text-center m-auto text-gray-800 hover:text-cyan-500 transition-colors duration-300 font-roboto">
                Rubbish Revive
            </p>
        </div>
        <div class="flex justify-end select-none">
            <div class="group flex items-center">
                <a href="/login" class="text-base text-black py-2 mx-8 flex hover:text-cyan-500 font-roboto">Login</a>
            </div>
            <div class="group flex items-center">
                <a href="/register"
                    class="text-base text-black py-2 mx-8 flex hover:text-cyan-500 font-roboto">Register</a>
            </div>
        </div>
    </div>

    </div>
</header>
@endif
