@props(['id' => null, 'maxWidth' => null])

@props(['title' => false])
<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>

    <div class="px-6 py-2">
        @if ($title)
        <div class="text-lg">
            {{ $title }}
        </div>
        @endif


        <div class="mt-4">
            {{ $content }}
        </div>
    </div>

    <div class="px-6 py-4 text-right bg-gray-100">
        {{ $footer }}
    </div>

</x-modal>
