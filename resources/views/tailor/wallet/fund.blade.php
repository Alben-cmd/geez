@extends ('layouts.master')
@section('title', '| dashboard')
@section('content')

<!-- breadcrumb-area end -->

<!-- account area start -->
<div class="account-dashboard pt-100px pb-100px">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-3 col-lg-3">
          <!-- Nav tabs -->
          @include('partials.user_dashboard')
      </div>
      <div class="col-sm-12 col-md-9 col-lg-9">
        <!-- Tab panes -->
        <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
          <!-- dashboard  -->
          {{-- error and success messages --}}
          @include('partials.messaging')
          <div class="tab-pane fade show active" id="dashboard">
            <h4>Fund Wallet </h4>
          </div>
          
          <div class="row">

            <!-- <form class="form" method="POST" action="{{ route('user.pay') }}">
                @csrf
                <div class="col-md-4">
                    <div class="default-form-box mb-10">
                        <label>Amount &#8358;</label>
                        <input class="form-control" type="number" name="amount" placeholder="Amount">
                        <input type="hidden" name="email">
                    </div>

                    <div class="default-form-box mb-10">
                        <label>How do you want to Fund wallet?</label>
                        <select class="form-control" name="paymentGateway">
                            <option>---</option>
                            <option>Pay with Paystack</option>
                            <option>Pay with Paga</option>
                        </select>
                    </div>

                    <div class="default-form-box mb-20">
                        <button type="submit" class="btn btn-primary">Pay</button>
                    </div>
                </div>
            </form> -->

            <form method="POST" action="{{ route('user.pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                @csrf
            <div class="row" style="margin-bottom:40px;">
        <div class="col-md-8 col-md-offset-2">
            <p>
                <div>
                    <ol>
                        <li>Order ID: {{ $order->orderID }}</li>
                        <li>Amount: {{ $order->amount }}</li>
                        <li>Order ID: {{ $order->orderID }}</li>
                    </ol>
                </div>
            </p>
            <input type="hidden" name="email" value="{{ auth()->user()->email}}"> 
            <input type="hidden" name="orderID" value="{{ $order->orderID }}">
            <input type="hidden" name="amount" value="{{ $order->amount * 100 }}">
            <input type="hidden" name="currency" value="NGN">
            <input type="hidden" name="reference" value="{{ $order->reference }}">
            <input type="hidden" name="metadata" value="{{ json_encode($array = ['description' => $order->description,]) }}" >
                        
            <p>
                <button class="btn btn-primary btn-lg" type="submit" value="Pay Now!">
                    Pay with Paystack
                </button>
            </p>
        </div>
    </div>
</form>

          </div>

         

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
