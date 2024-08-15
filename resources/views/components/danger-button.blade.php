<button {{ $attributes->
    merge(['type' => 'button', 'class' => 'text-sm bg-red-600 text-white px-3
    py-2 rounded-md h-fit duration-200 hover:bg-red-500 min-w-24 text-center'])
    }}>
    {{ $slot }}
</button>
