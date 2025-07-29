@props(['item' => null])

<div class="w-full min-w-[200px] flex flex-col gap-0.5">
    <a href="" class="relative group">
        <img src="{{ asset('images/fuji.jpg') }}" alt="HD Random Image"
            class="aspect-square w-full object-cover rounded-lg shadow-lg transition duration-300 group-hover:brightness-75">
        <button
            class="absolute inset-0 m-auto h-fit w-fit bg-black text-white px-4 py-2 rounded-lg opacity-0 group-hover:opacity-100 transition duration-300">
            Buy
        </button>
    </a>
    <p class="text-lg font-bold">{{ $slot }}</p>
    <p class="text-sm">₱100</p>
</div>

