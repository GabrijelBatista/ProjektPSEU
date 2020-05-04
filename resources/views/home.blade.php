@extends('layouts.app')

@section('content')
<style>

.button{
    background-color: #4CAF50;
}
.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
<body style="background: url('images/home.jpg'); background-size: 100%;"> 
    
    <p style=" background-color:rgba(0, 128, 128, 0.616); text-align: center; color: gold; font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif; font-size: 60px">
    E-UČENJE
    </p>
  </div>
    <div class="container" style=" margin-left: 150px;background-color: rgba(188, 143, 143, 0.507); margin-top: 30px;border-color:rosybrown; position: absolute; text-align:center; width: 400px; height:300px; border-radius: 25px; border-style: solid">
        <p style="margin-top: 10px;text-align: center; color: #333333; font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif; font-size: 30px">
            Prijavite rad:
               </p>
        <button class="button"style="margin-top: 10px;border-color:rosybrown;border-radius: 25px; height:70px; width:250px;  font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif;  color:white;font-size:20px;"type="button" onclick="window.location='{{ url("uploadfile") }}'">Završni rad</button>
        <button class="button"style="margin-top: 10px;border-color:rosybrown;border-radius: 25px; height:70px; width:250px;  font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif;  color:white;font-size:20px;"type="button" onclick="window.location='{{ url("uploadfile2") }}'">Diplomski rad</button>
    </div>
    <div class="container" style=" margin-left: 800px;background-color: rgba(188, 143, 143, 0.507); margin-top: 30px;border-color:rosybrown; position: absolute; text-align:center; width: 400px; height:300px; border-radius: 25px; border-style: solid">
    <p style="margin-top: 10px;text-align: center; color: #333333; font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif; font-size: 30px">
        Prihvaćeni radovi:
           </p>
           <div style="text-align:center;">
            <button class="button"style="margin-top: 10px;border-color:rosybrown;border-radius: 25px; height:70px; width:250px;  font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif;  color:white;font-size:20px;" type="button" onclick="window.location='{{ url("prihvacenizavrsni") }}'">Prihvaćeni završni radovi</button>
            <button class="button"style="margin-top: 10px;border-color:rosybrown;border-radius: 25px; height:70px; width:250px;  font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif;  color:white;font-size:20px;" type="button" onclick="window.location='{{ url("prihvacenidiplomski") }}'">Prihvaćeni diplomski radovi</button>
        </div>
    </div>
</body>
@endsection
