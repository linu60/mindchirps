<div class="space-y-8">
  @foreach ($reviews as $review)
    @include('components.layouts.review-card', ['review' => $review])
  @endforeach

  <div class="mt-8 flex justify-center text-white">
    {{ $reviews->links() }}
  </div>
</div>
