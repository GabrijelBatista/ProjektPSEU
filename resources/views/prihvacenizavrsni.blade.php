@extends('layouts.app')

@section('content')

<body style="background: url('images/register.jpg'); background-size: 100%; text-align:center;">
	<div class="wrapper" style="text-align:center; position:center;">
		<section class="panel panel-primary" style="background:transparent">
			<div class="panel-heading" style="font-size:30px; background-color:rgba(61, 153, 112, 0.534)">
				PRIHVAĆENI ZAVRŠNI RADOVI:
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<th>Ime i Prezime</th>
						<th>Broj indeksa</th>
                        <th>Tema</th>
						<th>Mentor</th>
						<th>Datum prijave</th>
						<th>Datum obrane</th>
					</thead>

					<tbody>

					@foreach($downloads as $down)
						<tr>
                            <td>{{$down['ime_i_prezime']}}</td>
							<td>{{$down['broj_indeksa']}}</td>
                            <td>{{$down['tema']}}</td>
							<td>{{$down['mentor']}}</td>
							<td>{{$down['prijava']}}</td>
							<td>{{$down['obrana']}}</td>
							<td>
								<a href="dodatak/{{$down['file_name']}}" download="{{$down['file_name']}}">
									<button type="button" class="btn btn-primary">
									<i class="glyphicon glyphicon-download">
										Preuzmi
									</i>
									</button>
								</a>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</section>
    </div>
    @endsection