@extends('client.layouts.main')
@section('title','Cart Product')
@section('content')
<div class="container">
	<div class="my-3 p-3 bg-white rounded box-shadow">
		<h3 class="border-bottom border-gray pb-2 mb-0">Cart</h3>
		<div class="media text-muted pt-3">
			<img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="100x100" class="mr-2 rounded" src="#" data-holder-rendered="true" style="width: 50px; height: 50px;">
			<div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
				<div class="d-flex justify-content-between align-items-center w-100">
					<strong class="text-gray-dark">Name Product</strong>
					<p>+</p>
				</div>
				<span class="d-block">Sl:1</span>
			</div>
		</div>
		<div class="media text-muted pt-3">
			<img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="50x50" class="mr-2 rounded" src="#" data-holder-rendered="true" style="width: 50px; height: 50px;">
			<div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
				<div class="d-flex justify-content-between align-items-center w-100">
					<strong class="text-gray-dark">Name Product</strong>
					<p>+</p>
				</div>
				<span class="d-block">Sl:1</span>
			</div>
		</div>
		<div class="media text-muted pt-3">
			<img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="100x100" class="mr-2 rounded" src="#" data-holder-rendered="true" style="width: 50px; height: 50px;">
			<div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
				<div class="d-flex justify-content-between align-items-center w-100">
					<strong class="text-gray-dark">Name Product</strong>
					<p>+</p>
				</div>
				<span class="d-block">Sl:1</span>
			</div>
		</div>

		<small class="d-block text-right mt-3">
			<button type="button" class="btn btn-sm btn-outline-secondary">Payment</button>
		</small>
	</div>
</div>
@endsection
@section('scriptClient')
@include('client.shareds.scriptClient')
@endsection
