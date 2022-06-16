<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/acceuil.css')}}">
    <title>authentification</title>
</head>
<body>
        
    <header >
        <div  class="container-fluid">
            <div class="row">
           <div class="trai col-sm-10 rounded-pill ">
            <h1>BIENVENU</h1>
           <img src="images/univbobo.png" class="bobo rounded-pill">
           <img src="images/esi.png" class="esi rounded-pill">
           </div>
        </div>
        </div>
    </header>


<form action="" >
    <div class="container ">
        <div class="row">
    <div class="cadre col-sm-10 ">
           <h1>AUTHENTIFICATION</h1>
           <div class="souligne col-sm-10"></div>
                  <div class="porte"> 
                    <div class="mb-3 row">
                        <label for="inputText" class="col-sm-2 col-form-label"><strong> Email :</strong></label>
                        <div class="col-sm-5">
                            <input type="email" class="form-control  rounded-pill" id="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputText" class="col-sm-2 col-form-label"><strong> Mot de passe :</strong></label>
                        <div class="col-sm-5">
                            <input type="password" class="form-control  rounded-pill" id="">
                        </div>
                    </div>

                 </div>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary rounded-pill"><strong>Valider</strong></a>
                    </div>
            </div>
    </div>
 </div>
</form>





    <script src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>