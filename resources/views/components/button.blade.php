<button {{ $attributes->
    merge(['type' => 'submit', 'class' => 'text-sm bg-blue-600 text-white px-3
    py-2 rounded-md h-fit duration-200 hover:bg-blue-500 min-w-24 text-center'])
    }}>
    {{ $slot }}
</button>
