@extends('components.layouts.app')

@section('content')
<div class="max-w-5xl mx-auto py-12 px-4 space-y-12">

  <h1 class="text-3xl font-extrabold text-white mb-6">Admin Panel: Manage Categories & Subcategories</h1>

  {{-- Category Manager --}}
  <div class="bg-[#1e525b] p-6 rounded-xl shadow-md">
    <livewire:admin.category-manager />
  </div>

  {{-- Subcategory Manager --}}
  <div class="bg-[#1e525b] p-6 rounded-xl shadow-md">
    <livewire:admin.subcategory-manager />
  </div>

</div>
@endsection
