@extends('layouts.app')


@section('content')

	@if(count($errors)>0)

		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as$error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>

	@endif

	<form action="{{ route('store_post_path') }}" method="POST">
	
		{{ csrf_field() }}

		<div class="form-group">
			<textarea rows="5" name="description" class="form-control"></textarea>
		</div>

		<div class="form-group">
			<button type="submit" class='btn btn-primary'>Enviar</button>
		</div>
	</form>

	@foreach($posts as $post)
		<div class="row content">
			<div class="col-md12">
				<tr class="tr">
					<td class="td">
						<h2>{{ $post->created_at->format('d-m-Y') }}</h2>
					</td>
					<td class="td">
						<p>{{ $post->description }}</p>
					</td>
				</tr>
			</div>
		</div>	
	@endforeach

@endsection 