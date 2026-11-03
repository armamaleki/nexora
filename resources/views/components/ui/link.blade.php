<a href="{{$href}}" target="{{$target}}" class="group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-gray-600 transition hover:bg-gray-100 hover:text-violet-600 dark:text-gray-400 dark:hover:bg-gray-800 dark:hover:text-violet-400">
    {{$slot}}
    <span class="flex-1">{{$text}}</span>
    <span class="rounded-md bg-gray-100 px-2 py-0.5 text-[10px] text-gray-500 dark:bg-gray-800">128</span>
</a>
