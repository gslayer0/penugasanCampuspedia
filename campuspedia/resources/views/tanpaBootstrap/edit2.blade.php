<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sunting</title>

    <script type = "text/javascript">
         
        function validate() {
            if( document.myForm.nama.value == "" ) {
                alert( "Kolom nama masih kosong!" );
                document.myForm.nama.focus() ;
                return false;
            }
            var regName = /^[a-zA-Z ]+$/;
            var namasiswa = document.myForm.nama.value;
            spacepos = namasiswa.indexOf(" ");

            if(!regName.test(namasiswa)){
                alert("Nama hanya boleh berisi huruf!")
                document.myForm.nama.focus() ;
                return false;
            }

            if(spacepos < 1){
                alert("Format nama salah!")
                document.myForm.nama.focus() ;
                return false;
            }
            
            if( document.myForm.email.value == "" ) {
                alert( "Kolom email masih kosong!" );
                document.myForm.email.focus() ;
                return false;
            }
            if( document.myForm.nomor_hp.value == "" ) {
                alert( "Kolom nomor HP masih kosong!" );
                document.myForm.nomor_hp.focus() ;
                return false;
            }

            var emailID = document.myForm.email.value;
            atpos = emailID.indexOf("@");
            dotpos = emailID.lastIndexOf(".");
            
            if (atpos < 1 || ( dotpos - atpos < 2 )) {
                alert("Tolong masukkan email dengan format yang benar!")
                document.myForm.email.focus() ;
                return false;
            }

            var nohp = document.myForm.nomor_hp.value;
            var phoneno = /^[0-9]+$/;
            zeropos = nohp.indexOf("0");

            if (!nohp.match(phoneno)){
                alert("Tolong masukkan nomor HP dengan format yang benar!")
                document.myForm.nomor_hp.focus() ;
                return false;
            }
            if ( zeropos>0 || zeropos <0){
                alert("Tolong masukkan nomor HP dengan format yang benar!")
                document.myForm.nomor_hp.focus() ;
                return false;
            }
            if (nohp.length < 2){
                alert("Digit nomor HP terlalu sedikit!")
                document.myForm.nomor_hp.focus() ;
                return false;

            }
            
            return( true );
        }

    </script>

</head>
<body>

<a href="/siswa">Kembali</a>

<br>
<br>

@foreach($siswa as $s)
<form name="myForm" action="/siswa/update" onsubmit="return (validate())" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{$s->id}}"><br>
    Nama <input type="text" name="nama" value="{{$s->nama}}" id="" required="required"><br>
    Nomor HP <input type="text" name="nomor_hp" value="{{$s->nomor_hp}}" id="" required="required"><br>
    Email <input type="text" name="email" value="{{$s->email}}" id="" required="required"><br>
    <input type="submit" value="Simpan">

</form>
@endforeach

    
</body>
</html>