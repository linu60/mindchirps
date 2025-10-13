@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex justify-center mt-6 text-sm">
        {{-- Desktop + Tablet + Mobile View --}}
        <div class="flex items-center justify-center">
            <div class="flex rounded-lg overflow-hidden border border-gray-300">
                {{-- Previous Page --}}
                @if ($paginator->onFirstPage())
                    <span class="inline-flex items-center px-3 py-1 text-gray-400 bg-white cursor-default border-r border-gray-300">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}" class="inline-flex items-center px-3 py-1 text-blue-600 bg-white hover:text-blue-800 border-r border-gray-300">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    @if (is_string($element))
                        <span class="inline-flex items-center px-3 py-1 text-gray-500 bg-white cursor-default border-r border-gray-300">
                            {{ $element }}
                        </span>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <span class="inline-flex items-center px-3 py-1 text-white bg-blue-600 border-r border-gray-300">
                                    {{ $page }}
                                </span>
                            @else
                                <a href="{{ $url }}" class="inline-flex items-center px-3 py-1 text-blue-600 bg-white hover:text-blue-800 border-r border-gray-300">
                                    {{ $page }}
                                </a>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page --}}
                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" class="inline-flex items-center px-3 py-1 text-blue-600 bg-white hover:text-blue-800">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                @else
                    <span class="inline-flex items-center px-3 py-1 text-gray-400 bg-white cursor-default">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                @endif
            </div>
        </div>
    </nav>
@endif
