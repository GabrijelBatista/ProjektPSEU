@extends('layouts.app')

@section('content')
<style>

.button{
    background-color: rgb(94, 76, 175);
}
.button:hover {background-color: #6e3e8e};

</style>
<body style="background: url('images/home.jpg'); background-size: 100%;"> 
    
    <p style=" background-color:rgba(0, 128, 128, 0.616); text-align: center; color: gold; font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif; font-size: 60px">
    E-UČENJE
    </p>
  </div>
  <div class="container" style=" margin-left: 50px;background-color: rgba(0, 128, 128, 0.411); margin-top: 30px;border-color:rosybrown; position: absolute; text-align:center; width: 300px; height:300px; border-radius: 25px; border-style: solid">
    <p style="margin-top: 10px;text-align: center; color: #333333; font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif; font-size: 30px">
        Prijavljeni radovi:
           </p>
    <button class="button"style="margin-top: 10px;border-color:rosybrown;border-radius: 25px; height:70px; width:250px;  font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif;  color:white;font-size:20px;"type="button" onclick="window.location='{{ url("viewfile") }}'">Prijavljeni završni radovi</button>
    <button class="button"style="margin-top: 10px;border-color:rosybrown;border-radius: 25px; height:70px; width:250px;  font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif;  color:white;font-size:20px;"type="button" onclick="window.location='{{ url("viewfile2") }}'">Prijavljeni diplomski radovi</button>
</div>
    <div class="container" style=" margin-left: 530px;background-color: rgba(0, 128, 128, 0.411); margin-top: 30px;border-color:rosybrown; position: absolute; text-align:center; width: 300px; height:300px; border-radius: 25px; border-style: solid">
        <p style="margin-top: 10px;text-align: center; color: #333333; font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif; font-size: 30px">
            Odbijeni radovi:
               </p>
        <button class="button"style="margin-top: 10px;border-color:rosybrown;border-radius: 25px; height:70px; width:250px;  font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif;  color:white;font-size:20px;"type="button" onclick="window.location='{{ url("odbijenizavrsni") }}'">Odbijeni završni radovi</button>
        <button class="button"style="margin-top: 10px;border-color:rosybrown;border-radius: 25px; height:70px; width:250px;  font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif;  color:white;font-size:20px;"type="button" onclick="window.location='{{ url("odbijenidiplomski") }}'">Odbijeni diplomski radovi</button>
    </div>
    <div class="container" style=" margin-left: 1010px;background-color: rgba(0, 128, 128, 0.411); margin-top: 30px;border-color:rosybrown; position: absolute; text-align:center; width: 300px; height:300px; border-radius: 25px; border-style: solid">
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
