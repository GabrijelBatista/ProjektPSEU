@extends('layouts.app')
@section('content')


<body style="background: url('images/upload.jpg'); background-size: 100%;">


  <div class="container" style="width: 600px;  position:center; margin-top:50px;">		        

    <h2>Pošaljite diplomski rad:</h2>

  {!! Form::open(array('url'=>'insertfile2','method'=>'POST' ,'class'=>'form-horizontal','files'=>true)) !!}

  <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">


      <label class="control-label col-sm-2" for="name" style="width: 150px;">Ime i prezime:</label>
      <div class="col-sm-4"style="width: 450px;">
        <input type="text" class="form-control ime_i_prezime_c" id="ime_i_prezime_id" name="ime_i_prezime" placeholder="Ime i prezime"  value="{{ Input::old('ime_i_prezime') }}">

        @if ($errors->has('ime_i_prezime')) <p class="help-block" style= " color:red;">{{ $errors->first('ime_i_prezime') }}</p> @endif

      </div>
    </div>
      <div class="form-group" >
      <label class="control-label col-sm-2" style="width: 150px;"for="name">Broj indeksa:</label>
      <div class="col-sm-4"style="width: 450px;">
        <input type="int" class="form-control broj_indeksa_c" id="broj_indeksa_id" name="broj_indeksa" placeholder="Broj indeksa"  value="{{ Input::old('broj_indeksa') }}">

        @if ($errors->has('broj_indeksa')) <p class="help-block" style= " color:red;">{{ $errors->first('broj_indeksa') }}</p> @endif
      </div>
      </div>

      <div class="form-group">


        <label class="control-label col-sm-2" for="name" style="width: 150px;">E-mail:</label>
        <div class="col-sm-4"style="width: 450px;">
          <input type="email" class="form-control email_c" id="email_id" name="email" placeholder="E-mail"  value="{{ Input::old('email') }}">
  
          @if ($errors->has('email')) <p class="help-block" style= " color:red;">{{ $errors->first('email') }}</p> @endif
  
        </div>
      </div>

      <div class="form-group" >
      <label class="control-label col-sm-2" style="width: 150px;"for="name">Tema:</label>
      <div class="col-sm-4"style="width: 450px;">
        <input type="text" class="form-control tema_c" id="tema_id" name="tema" placeholder="Tema"  value="{{ Input::old('tema') }}">

        @if ($errors->has('tema')) <p class="help-block" style= " color:red;">{{ $errors->first('tema') }}</p> @endif
      </div>
      </div>
      <div class="form-group" >
      <label class="control-label col-sm-2" style="width: 150px;"for="name">Mentor:</label>
      <div class="col-sm-4" style="width: 450px;">
        <input type="text" class="form-control mentor_c" id="mentor_id" name="mentor" placeholder="Mentor"  value="{{ Input::old('mentor') }}">

        @if ($errors->has('tema')) <p class="help-block" style= " color:red;">{{ $errors->first('mentor') }}</p> @endif
      </div>
  
      </div>

      <div class="form-group">
      <label class="control-label col-sm-2" style="width: 150px;"for="pwd">Datoteka:</label>
  
      <div class="col-sm-4">          
      
        <input type="file"  name="filename" class="filename">

        @if ($errors->has('filename')) <p class="help-block" style= " color:red;">{{ $errors->first('filename') }}</p> @endif

      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" style="background-color: #4CAF50;">Potvrdi</button>
      </div>
    </div>



    </div>

    
{!! Form::close() !!}

</div>
 


<script>
  @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        
        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
  @endif
</script>
</body>
@endsection