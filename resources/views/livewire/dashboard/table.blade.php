<table class="font-text border-collapse w-full">
    <tr class="bg-red-400">
        <th class="border border-solid border-red-900 text-left p-2">ID</th>
        <th class="border border-solid border-red-900 text-left p-2 min-w-96">Headline</th>
        <th class="border border-solid border-red-900 text-left p-2">Created</th>
        <th class="border border-solid border-red-900 text-left p-2">Edited</th>
        <th class="border border-solid border-red-900 text-left p-2">Author</th>
        <th class="border border-solid border-red-900 text-left p-2">Editor</th>
        <th class="border border-solid border-red-900 text-left p-2">Options</th>
    </tr>

    @foreach ($articles as $article)
        @include('livewire.dashboard.table-row')
    @endforeach
</table>
