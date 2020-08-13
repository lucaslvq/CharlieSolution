@extends('customers.layout')
@section('content')
<br>

<!-- START : HEADER -->
<h1 class="text-center mb-5">Charlie Solution</h1>
@include('partials.search')
<h2 class="text-center mt-4">Liste de client</h2>
<!-- END : HEADER -->

<!-- START -->
<div class="box">
   <div class="container">
      @if (session('success'))
      <div class="alert alert-success">
         {{ session('success') }}
      </div>
      @endif
      <div class="row">
         @foreach($customers as $customer)
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="box-part text-center">
               <i class="fas fa-user-tie fa-3x mb-2" aria-hidden="true"></i>
               <div class="title">
                  <h4>{{ $customer->identification }}</h4>
               </div>
               <a href="{{ route('customers.show', $customer->identification)}}" class="btn btn-info d-flex justify-content-center">Voir le matériel</a>
            </div>
         </div>
         @endforeach
      </div>
      <div class="d-flex justify-content-center mt-5">
         {{ $customers->links() }}
      </div>
   </div>
</div>
<!-- END -->
@endsection