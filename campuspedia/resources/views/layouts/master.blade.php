<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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

    <title>Campuspedia - @yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="/siswa">CAMPUSPEDIA</a>
    </nav>
    <ul class="nav">
    <li class="nav-item">
        <a class="nav-link" href="/">Welcome Page</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/siswa">Daftar Siswa</a>
    </li>
    </ul>

    <div class="container">
            @yield('content')
    </div>

</body>
</html>