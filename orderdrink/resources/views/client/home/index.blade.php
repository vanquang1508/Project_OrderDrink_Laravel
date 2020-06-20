@extends('client.layouts.main')
@section('title','Home Client')
@section('content')
<div class="container-fluid"> 
	<div class="py-5 bg-light">
		@if(session('success'))
		<div class="alert alert-success notification">
			{{ session('success') }}
		</div>
		@elseif(Session::has('err')) 
		<div class="alert alert-danger notification">
			{{ session('err') }}
		</div>
		@endif
		@include("client.product.listProduct")
	</div>
</div> 
<!-- Modal -->
<form action="{{ url('add-to-cart') }}" method="GET">
	<div class="modal fade" id="addtocart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Select size!</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<input type="hidden" name="productid" id="productid">
				</div>
				<div class="modal-body row">
					<div class="col-4 col-md-4 sizecontent"></div>
					<div class="col-8 col-md-8">
						<label for="">Quantity:</label>
						<input type="number" name="quantity" class="form-control" value="1">
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Add to cart</button>
				</div>
			</div>
		</div>
	</div>

</form>
<script>
	$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
	$('.addcart').click(function(){
		var product_id = $(this).val(); 
		$('#productid').val(product_id);
		$.ajax({
			type: 'get',
			url: '{{ URL::to('getsize') }}',
			data: {
				product_id: product_id
			},
			success:function(data){
				var size = '';
				var price = '';
				for (var i = 0; i < data.sizes.length; i++) {
					if (i == 0) {
						checked = 'checked';
						price = '';
					}else{
						checked = '';
						price = ' (+'+(data.sizes[i].price-data.sizes[0].price)+'đ)';
					}
					size +=  '<div class="form-check"><input class="form-check-input" type="radio" name="size" '+checked+' value="'+data.sizes[i].size+'" id="defaultCheck'+i+'"><label class="form-check-label" for="defaultCheck'+i+'">'+data.sizes[i].size.toUpperCase()+price+'</label></div>';
				} 
				$('.sizecontent').html(size);
			}
		});
	});
</script>
@endsection
@section('scriptClient')
@include('client.shared.scriptClient')
@endsection
