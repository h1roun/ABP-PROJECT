<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >ABP School</title>
  @include('layouts.head')
</head>
<body style="height: 100vh;">



@include('layouts.side_bar')

            <div class="left-side position-absolute left-0 top-0 col-md h-100  d-flex align-items-center" style="overflow: scroll;">
                <div class=" w-100  container border background pt-5 p-4" style=" overflow: scroll;border-radius: 20px; max-width: 450px;">
                    <form action="">

                    
                    <label for="username"><h5> nom d'utilisateur </h5></label>
                    <input class="form-control mb-3" type="text" placeholder="" aria-label="default input example">
                    <label for="password"> <h5> mot de passe </h5></label>
                    <input class="form-control mb-3" type="password" placeholder="" aria-label="default input example">
                    <div class="d-flex justify-content-end mb-2 mt-5">
                        <div class="btn btn-primary">se connecter</div>
                    </div>
                </form>
                    </div>
                </div>

 

<div class="background" style="overflow: hidden; width: 100%; height: 100%; top: 0%; right: 0%; position: absolute;z-index: -10; "> 

    <div class="grad " style="
        position: absolute;
        width: 100%;
        bottom: 0;
        height: 100%;
        z-index: -5;
        opacity: 80%;
        background-image: linear-gradient(0deg, #0c88bc, rgba(0,179,255,0) 50%);">
        </div>
 
        <div class="glass " style="
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: -7;
        backdrop-filter: blur(20px) ;"        
        ></div>

    
    
    <div class="groupe-circles" style="height: 100%; overflow: hidden; width: 100vw; z-index: -10 ;position: fixed; top: 0%; left: 0%;">
        <div class="circle" style="
        position: relative;
        z-index: -8;
            border-radius: 200%;
            width: 40%;
            aspect-ratio: 1/0.8;
            opacity: 100%;
            background-image: radial-gradient( rgba(1, 187, 249, 0.866),rgba(1, 187, 249, 0)  );
            top: 20%;
            right: -10%;

            "> </div>
            <div class="circle" style="
             z-index: -8;
            position: absolute;
                border-radius: 200%;
                width: 35%;
                aspect-ratio: 1/1;
                opacity: 100%;
                background-image: radial-gradient( rgba(1, 187, 249, 0.866),rgba(1, 187, 249, 0)  );
                top: -10%;
                left: 60%;

                "> </div>
            <div class="circle" style="
             z-index: -30;
            position: absolute;
                border-radius: 200%;
                width: 40%;
                aspect-ratio: 1/0.9;
                opacity: 100%;
                background-image: radial-gradient( rgba(1, 187, 249, 0.866),rgba(1, 187, 249, 0)  );
                top: 60%;
                left: 50%;
                rotate: 45deg;
                "> </div>
    </div>
      </div>
      @include('layouts.script')
</body>
</html>