@extends('admin.layout.main')
@section('title','About')
@section('content')

@if (Session::has('message'))
<p class="alert alert-success">{{ Session::get('message')}}</p> 
@elseif(Session::has('err'))    
<p class="alert alert-danger">{{ Session::get('err')}}</p>
@endif
<div class="container">
	<div class="card mr-4 mt-3">
		<div class="card-header">
			<h4>About</h4>
		</div>
		<div class="card-body">
			<a href="{{route('about.create')}}"class="btn btn-outline-success mb-3">Add New</a>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>STT</th>
						<th>Name</th>
						<th>Title</th> 
						<th>Logo</th>
						<th>Time Open</th>
						<th>Time Close</th>
						<th width="100">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($abouts as $key => $about)
					<tr>
						<td>{{++$key}}</td>
						<td>{{$about->name}}</td>
						<td>{{$about->title}}</td>
						<td><img src="{{asset('images/'.$about->logo)}}" style="width: 50px; "></td>
						<td>{{$about->timeopen}}</td>
						<td>{{$about->timeclose}}</td> 
						<td width="120">
							<button type="button" class="fas fa-trash-alt deletebutton text-danger btn" data-id="{{$about->id}}" data-toggle="modal" data-target="#Modal" style="width: 40px; padding: 7px 5px;">
							</button>
							<a href="{{route('about.edit',$about->id)}}"><i class="far fa-edit"></i></a>
							<a href="{{route('about.show',$about->id)}}" class="ml-2"><i class="fas fa-info-circle"></i></a> 
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>        
</div> 
{{Form::open(['route' => ['about_delete'], 'method' => 'DELETE'])}}  
	@include('admin.modal.modaldelete')
{{ Form::close() }}
<script>
	$(document).on('click','.deletebutton',function(){
        var id=$(this).attr('data-id');
        $('#id').val(id);
    });
</script>
@endsection