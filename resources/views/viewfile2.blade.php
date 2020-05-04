@extends('layouts.app')

@section('content')

</head>
<body style="background: url('images/download.jpg'); background-size: 100%; text-align:center;">
	<div class="wrapper" style="text-align:center; position:center;">
		<section class="panel panel-primary" style="background:transparent">
			<div class="panel-heading" style="font-size:30px; background-color:rgba(45, 37, 117, 0.479)">
				DIPLOMSKI RADOVI
			</div>
			<div class="panel-body" >
				<table class="table table-bordered">
					<thead>
						<th>Ime i Prezime</th>
						<th>Broj indeksa</th>
						<th>E-mail</th>
                        <th>Tema</th>
						<th>Mentor</th>
						<th>Datum prijave</th>
						<th>Datum obrane</th>
						<th>Postavite datum obrane:</th>
					</thead>

					<tbody>

					@foreach($downloads as $down)
						<tr>
                            <td>{{$down['ime_i_prezime']}}</td>
							<td>{{$down['broj_indeksa']}}</td>
							<td>{{$down['email']}}</td>
                            <td>{{$down['tema']}}</td>
							<td>{{$down['mentor']}}</td>
							<td>{{$down['prijava']}}</td>
							<td>{{$down['obrana']}}</td>
							<td>
								<form method="POST" action="{{route('insertfile4.update', $down->id)}}?{{time()}}" class='form-horizontal'>
									@csrf
								<input type="text" class="form-control obrana_c" id="obrana_id" name="obrana" placeholder="Datum obrane:">
								</form>
							</td>
							<td>
							<a href="dodatak2/{{$down['file_name']}}" download="{{$down['file_name']}}">
								<button type="button" class="btn btn-primary">
								<i class="glyphicon glyphicon-download">
									Preuzmi
								</i>
								</button>
							</a>
							</td>
						</a>
					</td>
					<td>
						<form id='deleteFormId2' action="{{route('viewfile2.delete', $down->id)}}?{{time()}}">
							<button type="button" class="btn btn-primary" style="background-color:green;" onclick="myFunc2()">
							
								Prihvati
							
							</button>
						</form>
						</td>
	
						
						<td>
							<form id='deleteFormId' action="{{route('viewfile2.delete2', $down->id)}}?{{time()}}">
							<button type="button" class="btn btn-primary" style="background-color:red;" onclick="myFunc()">
							
								Odbij
							
							</button>
							</form>
						</td>
						</tr>
						<script>
								function myFunc(){
									var r = confirm("Da li ste sigurni da želite odbiti ovaj rad?");
  									if (r == true) {
										document.getElementById('deleteFormId').submit();
									}
								}
								function myFunc2(){
									var r = confirm("Da li ste sigurni da želite prihvatiti ovaj rad?");
  									if (r == true) {
										document.getElementById('deleteFormId2').submit();
									}
								}
						</script>
					@endforeach
					</tbody>
				</table>
			</div>
		</section>
	</div>

    @endsection
