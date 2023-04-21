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

    <div class="main-side col-10 container  gx-5"   >
            <div class="row  d-flex align-items-center w-100 " style="flex-wrap: nowrap;height: 10%;">
                <h1 class="h1  text gx-5 mt-3 col-9 ms-1 fs-1" >Tous les promotions</h1>
                <div class="d-flex w-25 darkswitch" style="justify-content: flex-end;" >
                     <div class=" col-2  d-flex rounded-pill justify-self-center  ps-1 pb-1 position-relative" style="border: #00B3FF solid 3px;width: 60px;z-index: -5;">
                    <div class="sun me-2 " style="margin-left: 1px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="currentColor" class="bi bi-brightness-high-fill" viewBox="0 0 16 16">
                            <path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
                          </svg>
                    </div>
                    <div class="moon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-fill" viewBox="0 0 16 16">
                            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
                          </svg>
                            
                    </div>
                    <div class="bg rounded-circle bg-primary position-absolute  " style="z-index: -10; top: 7%; width: 43%; height: 85%;"></div>
                </div>
                </div>
               
            </div>
            <div class="row  gy-10 " style="height: 90%;">

                <div class="left-side  col-md h-100  d-flex align-items-center" style="overflow: scroll;">
                <div class=" w-100  container border background" style=" height: 90%;overflow: scroll;border-radius: 20px;">
                    <div class="p-4">
                        <form>
                            <div class="mb-3">
                                <label for="" class="form-label col-7" style="font: bolder;"><h6> Nom de la promotion:</h6></label>
                                <input class="form-control" type="text" placeholder="" aria-label="default input example">
                            </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="inputPhoneNumber"><h6 class="mt-2"> pourcentage de la reduction</h6></label>
                                <div style=" width: 120px;" class="input-group">
                                    <input type="text"  class="form-control" aria-label="Amount (to the nearest dollar)">
                                    <span style="color: gray;" class="input-group-text">%</span>
                                </div>                            </div>
                        </div>
                       <div class="mb-3">
                        <label for="start-date">date de debut:</label>
                        <div class="start-date mt-1">
                            <input type="date" id="start-date" name="start-date">
                        </div>
                       </div>
                       <div class="mb-3">
                        <div class="form-group">
                            <label for="inputPhoneNumber"><h6 class="mt-2"> duree de la reduction</h6></label>
                            <div style=" max-width: 150px;" class="input-group">
                                <input type="text"  class="form-control" aria-label="Amount (to the nearest dollar)">
                                <span style="color: gray;" class="input-group-text">m</span>
                                <input type="text"  class="form-control" aria-label="Amount (to the nearest dollar)">
                                <span style="color: gray;" class="input-group-text">j</span>
                            </div>                            </div>
                    </div>
                    <div class=" mt-4 d- flex align-items-center">
                        <p  class=" mt-4 mb-0 ">formations:</p>
                    
                        <button type="button " class="mb-1 btn btn-outline-primary" style="border-radius: 20px; padding-bottom: 4px; padding-top: 4px;" disabled >Math 1as
                            
                            <svg xmlns="http://www.w3.org/2000/svg"  width="16" height="16" fill="currentColor"  class="bi bi-x" viewBox="0 0 16 16">
                                <path  d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                              </svg>
                        </button>
                        <button type="button " class="mb-1 btn btn-outline-primary" style="border-radius: 20px; padding-bottom: 4px; padding-top: 4px;" disabled >Anglais 1as
                            
                            <svg xmlns="http://www.w3.org/2000/svg"  width="16" height="16" fill="currentColor"  class="bi bi-x" viewBox="0 0 16 16">
                                <path  d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                              </svg>
                        </button>
                        <button type="button " class="mb-1 btn btn-outline-primary" style="border-radius: 20px; padding-bottom: 4px; padding-top: 4px;" disabled >Français 2as
                            
                            <svg xmlns="http://www.w3.org/2000/svg"  width="16" height="16" fill="currentColor"  class="bi bi-x" viewBox="0 0 16 16">
                                <path  d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                              </svg>
                        </button>
                    
                    
                        
                    </div>
                        <button class="btn btn-primary rounded-pill mt-2" type="submit" style="color: white;">Ajouter une formation</button>
                        
                      
                            <div class="mb-5 me-3 d-flex justify-content-end mw-100">
                                <a href="./promotions.html">
                            <button type="submit" class="btn btn-primary "style="color: white;" data-bs-toggle="button" aria-pressed="true">Confirmer</button>
                                </a>
                        </div>
                        </form>
                    </div>
                    
                    </div>
                </div>
            </div>

            </div>

            </div>
         
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