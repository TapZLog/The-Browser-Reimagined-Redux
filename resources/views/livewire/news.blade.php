<main class="pb-150 mt-0 mb-0 ml-auto mr-auto">
    <div class="ml-auto mr-auto pt-4 max-w-240">
        <div class="m-4">
            <h1 class="mt-8 font-main text-6xl max-lg:text-5xl max-md:text-4xl">{{ $headline }}</h1> <br>
            <p class="font-text text-gray-500 text-sm">{{ $date }}</p>
            <p class="font-text text text-sm">{{ $author }} - {{ $position }}</p> <br>
        </div>

        <div class="m-4">
            @include('livewire.editor.forms.picture')
            @include('livewire.editor.forms.text')
        </div>

        @include('livewire.news.suggests')
    </div>
</main>
