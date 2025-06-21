<div class="ml-auto mr-auto pt-4 max-w-320">
    <h1 class="font-main text-8xl m-auto max-lg:text-7xl max-md:text-6xl">News</h1>
    <hr>
    <div class="flex min-w-0">
        @include('livewire.home-page.main.news.maincontainer')
    </div>
    <hr>
    <div class="grid grid-cols-1 lg:grid-cols-2">
        @include('livewire.home-page.main.news.newscontainer')
        @include('livewire.home-page.main.news.newscontainer')
        @include('livewire.home-page.main.news.newscontainer')
        @include('livewire.home-page.main.news.newscontainer')
        @include('livewire.home-page.main.news.newscontainer')

        <article
            class="overflow-hidden flex m-3 p-4 border-b-16 border-white h-48 max-md:h-40 shadow-[2px_2px_8px_gray] rounded-sm ">
            <div class="flex-1 flex-wrap ml-auto mr-auto max-lg:m-0 text-left items-center relative">
                <img class="object-scale-down overflow-clip absolute" src=".\assets\testIMG.jpg" />
            </div>
            <div class="flex flex-1 flex-col text-left ml-4.5 items-baseline max-lg:flex-2 max-sm:flex-1">
                <p class="font-text text-6 text-gray-600">{{ $date }}</p>
                <h2 class="font-main text-1xl hover:text-red-700 sm:text-2xl">{{ $headline }}</h2>
            </div>
        </article>
    </div>
    <hr class="border border-red-900"> <br>
</div>
