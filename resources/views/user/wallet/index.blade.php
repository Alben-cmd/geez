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
            <h4>Virtual Wallet </h4>
          </div>
          
          <div class="row">
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Wallet Balance</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    
                  </div>
                  <br>  
                  <p class="mb-0 mt-2 text-bold">&#8358;{{ $walletBalance }}</p>
                </div>
              </div>
            </div>

            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Total Transactions</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    
                  </div>
                  <br>  
                  <p class="mb-0 mt-2 text-bold">{{ $transactions->count() }}</p>
                </div>
              </div>
            </div>

            <div class="pb-4">
              <form class="form" method="POST" action="{{ route('user.create.order') }}">
                @csrf
                <div class="col-md-6">
                  <input type="number" name="amount" class="form-control" placeholder="Amount" value="{{ old('amount') }}">
                  <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                  
                  <button type="submit" class="mt-2 bg-primary">Fund Wallet</button>
                </div>
              </form>
            </div>
          </div>

          <div class="row">
            <h4>Transactions</h4>
            <table class="table">
              <thead>
                <th>#</th>
                <th>Type</th>
                <th>Amount</th>
                <th>Date</th>
              </thead>

              <tbody>
                @foreach($transactions as $key => $transaction)
                  <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $transaction->type }}</td>
                    <td>&#8358;{{ $transaction->amount }}</td>
                    <td>{{ $transaction->updated_at }}</td>
                  </tr>
                @endforeach
              </tbody>

            </table>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
