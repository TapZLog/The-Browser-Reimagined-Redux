<article class="flex-1 overflow-hidden m-3 p-4 shadow-[2px_2px_8px_light-gray] rounded-sm items-center text-right bg-orange-800">
    <div>
        <img class="w-full h-auto" src=".\assets\testIMG-Landscape.jpg" />
    </div>
    <div class="flex-1 flex flex-col text-left lg:mr-4.5">
        <h2 class="font-main text-6xl m-auto max-lg:text-5xl max-md:text-3xl hover:text-amber-400 text-white">{{ $headline }}</h2>
        <br>
        <p class="font-text text-6 text-white">{{ $text }}</p>
        <br>
        <p class="font-text text-6 text-gray-300">{{ $date }}</p>
    </div>
</article>
