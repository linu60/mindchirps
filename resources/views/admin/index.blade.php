@extends('components.layouts.app')

@section('content')
<div class="max-w-6xl mx-auto mt-12 space-y-10">
    <div class="flex justify-between items-center">
        <h2 class="text-3xl font-extrabold text-gray-800 tracking-tight">All Reviews</h2>
        <a href="{{ route('reviews.create') }}" class="inline-flex items-center gap-2 bg-gradient-to-r from-green-500 to-green-700 text-white px-6 py-2 rounded-lg shadow hover:from-green-600 hover:to-green-800 transition">
            <span class="text-xl font-bold">+</span> Add Review
        </a>
    </div>

    {{-- Sidebar for filtering --}}
    <livewire:categories-sidebar />

    {{-- Review list that updates based on selected category/subcategory --}}
    <livewire:review-list />
</div>
@endsection
