@extends("layouts.app")

@section("title", "Cart")

@section("content")
  <main>
    <section class="flex min-h-screen flex-col items-center gap-2 p-10 text-center">
      <h1 class="text-3xl font-bold">Thank you for your order!</h1>
      <h2>Your order number is <span class="font-bold">{{ $order_id }}</span>.</h2>
      <h2>
        We've sent a confirmation email to
        <span class="font-bold">{{ $email }}</span>.
      </h2>
    </section>
  </main>

@endsection

@push("scripts")
  @vite(["resources/js/clear-local-storage.js"])
@endpush
