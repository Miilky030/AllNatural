<button {{ $attributes->merge([
    'type' => 'submit', 
    'class' => 'inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150',
    'style' => 'background-color: #7B4618; transition: background-color 0.3s;',
    'onmouseover' => 'this.style.backgroundColor = "#5D3415"',
    'onmouseout' => 'this.style.backgroundColor = "#7B4618"'

]) }}>
    {{ $slot }}
</button>

