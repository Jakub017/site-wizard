<button {{ $attributes->
    merge(['type' => 'button', 'class' => 'text-sm bg-gray-500 text-white px-3
    py-2 rounded-md h-fit duration-200 hover:bg-gray-400 min-w-24 text-center'])
    }}>
    {{ $slot }}
</button>
