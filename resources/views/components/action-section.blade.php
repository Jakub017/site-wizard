<div class="p-4 border border-gray-200 rounded-lg">
    <x-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description }}</x-slot>
    </x-section-title>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="mt-5">
            {{ $content }}
        </div>
    </div>
</div>
