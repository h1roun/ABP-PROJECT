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
                <h1 class="h1  text gx-5 mt-3 col-9 ms-1" style="font-size: max(6vw,30px); ">Tous les formations</h1>
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
                  <div class="top w-100 row align-items-center" style="height: 15%;">
                    <div class="col">
                        <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="recherche" aria-describedby="emailHelp">

                    </div>
                    <div class="col-5 d-flex gx-1 justify-content-end  ">
                        <a href="./modifyFormation.html">
                        <button type="button" class=" check-btn-formation btn btn-primary d-inline-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="bi bi-check-lg" viewBox="0 0 16 16">
                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                              </svg>
                            <p class=" text-light d-none d-md-block fw-light ms-1 mb-0 overflow-hidden" >Confirmer</p>
                        </button>
                    </a>
                     
                    </div>
                    
                </div>
                <div class="bottom  row w-100 gx-0 " >
                    <table class="table table-hover">
                        <thead>
                            <tr>
                              
                              <th scope="col">Name <svg width="8" height="16" viewBox="0 0 8 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.46434 5.25L4.00023 0L0.536133 5.25H7.46434Z" fill="#343A40"/>
                                <path d="M0.536133 10.75L4.00023 16L7.46434 10.75L0.536133 10.75Z" fill="#343A40"/>
                                </svg>
                                 </th>
                              <th scope="col">pourcentage <svg width="8" height="16" viewBox="0 0 8 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.46434 5.25L4.00023 0L0.536133 5.25H7.46434Z" fill="#343A40"/>
                                <path d="M0.536133 10.75L4.00023 16L7.46434 10.75L0.536133 10.75Z" fill="#343A40"/>
                                </svg>
                                </th>
                                <th scope="col">restant <svg width="8" height="16" viewBox="0 0 8 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.46434 5.25L4.00023 0L0.536133 5.25H7.46434Z" fill="#343A40"/>
                                    <path d="M0.536133 10.75L4.00023 16L7.46434 10.75L0.536133 10.75Z" fill="#343A40"/>
                                    </svg>
                                    </th>
                                    <th scope="col">nombre de formations <svg width="8" height="16" viewBox="0 0 8 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.46434 5.25L4.00023 0L0.536133 5.25H7.46434Z" fill="#343A40"/>
                                        <path d="M0.536133 10.75L4.00023 16L7.46434 10.75L0.536133 10.75Z" fill="#343A40"/>
                                        </svg>
                                        </th>
                                        <th scope="col"><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="selectAll">
                                            <label class="form-check-label" for="defaultCheck1">
                                            
                                            </label>
                                          </div></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              
                                <td> Eid el fitre</td>
                                <td> -50%</td>
                                <td>1 mois et 7 jours</td>
                                <td>  12 formations</td>
                                
                                <th scope="row"><div class="form-check">
                                  <input class="form-check-input " type="checkbox" value="" id="defaultCheck1">
                                  <label class="form-check-label ms-5" for="defaultCheck1">
                                  
                                  </label>
                                </div></th>
                             
                              </tr>
                              <tr>
                              
                                <td> Eid el fitre</td>
                                <td> -50%</td>
                                <td>1 mois et 7 jours</td>
                                <td>  12 formations</td>
                                
                                <th scope="row"><div class="form-check">
                                  <input class="form-check-input " type="checkbox" value="" id="defaultCheck1">
                                  <label class="form-check-label ms-5" for="defaultCheck1">
                                  
                                  </label>
                                </div></th>
                             
                              </tr>
                              <tr>
                              
                                <td> Eid el fitre</td>
                                <td> -50%</td>
                                <td>1 mois et 7 jours</td>
                                <td>  12 formations</td>
                                
                                <th scope="row"><div class="form-check">
                                  <input class="form-check-input " type="checkbox" value="" id="defaultCheck1">
                                  <label class="form-check-label ms-5" for="defaultCheck1">
                                  
                                  </label>
                                </div></th>
                             
                              </tr>
                                
                          </tbody>
                        </table>
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