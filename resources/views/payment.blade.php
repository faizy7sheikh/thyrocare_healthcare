<!-- Stripe Payment Form -->
<form action="{{ route('checkout.stripe') }}" method="POST">
    @csrf
    <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="{{ env('STRIPE_PUBLISHABLE_KEY') }}"
        data-amount="{{ $totalAmount }}"
        data-name="Your Company Name"
        data-description="Payment Description"
        data-image="https://your-company-logo.png"
        data-locale="auto">
    </script>
</form>

<!-- Cash on Delivery Form -->
<form action="{{ route('checkout.cod') }}" method="POST">
    @csrf
    <button type="submit">Cash on Delivery</button>
</form>
