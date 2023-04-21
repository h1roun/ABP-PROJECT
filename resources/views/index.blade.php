<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >ABP School</title>
@include('layouts.head')
</head>
<body style="height: 100vh;" class="general" >



   @include('layouts.side_bar')
        <div class="col-2"></div>
    <div class="main-side col-10 container  gx-5" style="overflow: s
    ;"  >
            <div class="row  d-flex align-items-center w-100 mb-3" style="flex-wrap: nowrap;height: 10%;">
                <h1 class="h1  text gx-5 mt-3 col-9 ms-1 fs-1"  >Tous les etudiants</h1>
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
            <div class="row  gy-10 " >

                <div class="left-side   col-md h-100 d-xl-flex d-flex align-items-center" >
                <div class=" w-100 p-2 container border background" style=" height: 90%;border-radius: 20px;min-height: 75vh;">
                <div class="top w-100 p-2 row align-items-center p-2 pt-4 pb-4" style="height: 15%;">
                    <div class="col">
                   <form>
                        <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="recherche" aria-describedby="emailHelp">
             </form>


                    </div>
                    <div class="col-5 d-flex gx-1 justify-content-end  ">
                        <button type="button" class="add-btn btn btn-primary d-inline-flex align-items-center">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.06432 1.47424C4.08701 1.47424 2.5334 3.02785 2.5334 5.00517C2.5334 6.98249 4.08701 8.53609 6.06432 8.53609C8.04164 8.53609 9.59525 6.98249 9.59525 5.00517C9.59525 3.02785 8.04164 1.47424 6.06432 1.47424ZM12.0667 14.8917V13.4794C12.0667 11.502 10.5131 9.94843 8.53574 9.94843H3.59245C1.61513 9.94843 0.0615234 11.502 0.0615234 13.4794V14.8917C0.0615234 15.3154 0.343997 15.5979 0.767708 15.5979C1.19142 15.5979 1.47389 15.3154 1.47389 14.8917V13.4794C1.47389 12.2788 2.39193 11.3608 3.59245 11.3608H8.53574C9.73626 11.3608 10.6543 12.2788 10.6543 13.4794V14.8917C10.6543 15.3154 10.9368 15.5979 11.3605 15.5979C11.7842 15.5979 12.0667 15.3154 12.0667 14.8917ZM3.94584 5.00513C3.94584 6.20564 4.86388 7.12368 6.06439 7.12368C7.2649 7.12368 8.18295 6.20564 8.18295 5.00513C8.18295 3.80461 7.2649 2.88657 6.06439 2.88657C4.86388 2.88657 3.94584 3.80461 3.94584 5.00513ZM14.8915 7.12373H16.3039C16.7276 7.12373 17.0101 7.4062 17.0101 7.82991C17.0101 8.25362 16.7276 8.5361 16.3039 8.5361H14.8915V9.94847C14.8915 10.3722 14.609 10.6547 14.1853 10.6547C13.7616 10.6547 13.4791 10.3722 13.4791 9.94847V8.5361H12.0668C11.6431 8.5361 11.3606 8.25362 11.3606 7.82991C11.3606 7.4062 11.6431 7.12373 12.0668 7.12373H13.4791V5.71136C13.4791 5.28764 13.7616 5.00517 14.1853 5.00517C14.609 5.00517 14.8915 5.28764 14.8915 5.71136V7.12373Z" fill="white" fill-opacity="0.8"/>
                                <mask id="mask0_80_5909" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="1" width="18" height="15">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.06432 1.47424C4.08701 1.47424 2.5334 3.02785 2.5334 5.00517C2.5334 6.98249 4.08701 8.53609 6.06432 8.53609C8.04164 8.53609 9.59525 6.98249 9.59525 5.00517C9.59525 3.02785 8.04164 1.47424 6.06432 1.47424ZM12.0667 14.8917V13.4794C12.0667 11.502 10.5131 9.94843 8.53574 9.94843H3.59245C1.61513 9.94843 0.0615234 11.502 0.0615234 13.4794V14.8917C0.0615234 15.3154 0.343997 15.5979 0.767708 15.5979C1.19142 15.5979 1.47389 15.3154 1.47389 14.8917V13.4794C1.47389 12.2788 2.39193 11.3608 3.59245 11.3608H8.53574C9.73626 11.3608 10.6543 12.2788 10.6543 13.4794V14.8917C10.6543 15.3154 10.9368 15.5979 11.3605 15.5979C11.7842 15.5979 12.0667 15.3154 12.0667 14.8917ZM3.94584 5.00513C3.94584 6.20564 4.86388 7.12368 6.06439 7.12368C7.2649 7.12368 8.18295 6.20564 8.18295 5.00513C8.18295 3.80461 7.2649 2.88657 6.06439 2.88657C4.86388 2.88657 3.94584 3.80461 3.94584 5.00513ZM14.8915 7.12373H16.3039C16.7276 7.12373 17.0101 7.4062 17.0101 7.82991C17.0101 8.25362 16.7276 8.5361 16.3039 8.5361H14.8915V9.94847C14.8915 10.3722 14.609 10.6547 14.1853 10.6547C13.7616 10.6547 13.4791 10.3722 13.4791 9.94847V8.5361H12.0668C11.6431 8.5361 11.3606 8.25362 11.3606 7.82991C11.3606 7.4062 11.6431 7.12373 12.0668 7.12373H13.4791V5.71136C13.4791 5.28764 13.7616 5.00517 14.1853 5.00517C14.609 5.00517 14.8915 5.28764 14.8915 5.71136V7.12373Z" fill="white"/>
                                </mask>
                                <g mask="url(#mask0_80_5909)">
                                </g>
                                </svg>
                            <p class=" text-light d-none d-md-block fw-light ms-1 mb-0 overflow-hidden" >ajouter un etudiant</p>

                        </button>
                        <form action="{{route('page.education')}}" method=" get">

                        <button type="submit" class="btn btn-danger ms-2">
                            <svg width="23" height="25" viewBox="0 0 23 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.5633 5.6818H15.98V4.70452C15.98 3.04316 14.8154 1.77271 13.2925 1.77271H9.70914C8.18622 1.77271 7.02164 3.04316 7.02164 4.70452V5.6818H3.43831C2.90081 5.6818 2.54248 6.07271 2.54248 6.65907C2.54248 7.24543 2.90081 7.63634 3.43831 7.63634H4.33414V20.3409C4.33414 22.0023 5.49873 23.2727 7.02164 23.2727H15.98C17.5029 23.2727 18.6675 22.0023 18.6675 20.3409V7.63634H19.5633C20.1008 7.63634 20.4591 7.24543 20.4591 6.65907C20.4591 6.07271 20.1008 5.6818 19.5633 5.6818ZM8.81299 4.7045C8.81299 4.11814 9.17132 3.72723 9.70882 3.72723H13.2921C13.8296 3.72723 14.188 4.11814 14.188 4.7045V5.68177H8.81299V4.7045ZM15.9796 21.3181C16.5171 21.3181 16.8755 20.9272 16.8755 20.3409V7.63632H6.12549V20.3409C6.12549 20.9272 6.48382 21.3181 7.02132 21.3181H15.9796ZM10.6047 11.5454V17.409C10.6047 17.9954 10.2463 18.3863 9.70882 18.3863C9.17132 18.3863 8.81299 17.9954 8.81299 17.409V11.5454C8.81299 10.959 9.17132 10.5681 9.70882 10.5681C10.2463 10.5681 10.6047 10.959 10.6047 11.5454ZM14.1883 17.409V11.5454C14.1883 10.959 13.83 10.5681 13.2925 10.5681C12.755 10.5681 12.3966 10.959 12.3966 11.5454V17.409C12.3966 17.9954 12.755 18.3863 13.2925 18.3863C13.83 18.3863 14.1883 17.9954 14.1883 17.409Z" fill="#F53131"/>
                                <mask id="mask0_80_3515" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="2" y="1" width="19" height="23">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.5633 5.6818H15.98V4.70452C15.98 3.04316 14.8154 1.77271 13.2925 1.77271H9.70914C8.18622 1.77271 7.02164 3.04316 7.02164 4.70452V5.6818H3.43831C2.90081 5.6818 2.54248 6.07271 2.54248 6.65907C2.54248 7.24543 2.90081 7.63634 3.43831 7.63634H4.33414V20.3409C4.33414 22.0023 5.49873 23.2727 7.02164 23.2727H15.98C17.5029 23.2727 18.6675 22.0023 18.6675 20.3409V7.63634H19.5633C20.1008 7.63634 20.4591 7.24543 20.4591 6.65907C20.4591 6.07271 20.1008 5.6818 19.5633 5.6818ZM8.81299 4.7045C8.81299 4.11814 9.17132 3.72723 9.70882 3.72723H13.2921C13.8296 3.72723 14.188 4.11814 14.188 4.7045V5.68177H8.81299V4.7045ZM15.9796 21.3181C16.5171 21.3181 16.8755 20.9272 16.8755 20.3409V7.63632H6.12549V20.3409C6.12549 20.9272 6.48382 21.3181 7.02132 21.3181H15.9796ZM10.6047 11.5454V17.409C10.6047 17.9954 10.2463 18.3863 9.70882 18.3863C9.17132 18.3863 8.81299 17.9954 8.81299 17.409V11.5454C8.81299 10.959 9.17132 10.5681 9.70882 10.5681C10.2463 10.5681 10.6047 10.959 10.6047 11.5454ZM14.1883 17.409V11.5454C14.1883 10.959 13.83 10.5681 13.2925 10.5681C12.755 10.5681 12.3966 10.959 12.3966 11.5454V17.409C12.3966 17.9954 12.755 18.3863 13.2925 18.3863C13.83 18.3863 14.1883 17.9954 14.1883 17.409Z" fill="white"/>
                                </mask>
                                <g mask="url(#mask0_80_3515)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.750488 0.79541H22.2505V24.25H0.750488V0.79541Z" fill="white" fill-opacity="0.8"/>
                                </g>
                                </svg>

                        </button>
                    </div>

                </div>

                <div class="bottom  row  gx-0 " style="overflow-x:hidden;">

                    <table class="table table-hover students"  >

                        <thead>
                            <tr>
                              <th scope="col"><div class="form-check">
                                <input class="form-check-input" type="checkbox"name="selected[]" value="" id="selectAll">
                                <label class="form-check-label" for="defaultCheck1">
                                </label>
                              </div></th>
                              <th scope="col">Name <svg width="8" height="16" viewBox="0 0 8 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.46434 5.25L4.00023 0L0.536133 5.25H7.46434Z" fill="#343A40"/>
                                <path d="M0.536133 10.75L4.00023 16L7.46434 10.75L0.536133 10.75Z" fill="#343A40"/>
                                </svg>
                                 </th>
                              <th scope="col">Numero de telephone <svg width="8" height="16" viewBox="0 0 8 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.46434 5.25L4.00023 0L0.536133 5.25H7.46434Z" fill="#343A40"/>
                                <path d="M0.536133 10.75L4.00023 16L7.46434 10.75L0.536133 10.75Z" fill="#343A40"/>
                                </svg>
                                </th>
                                <th scope="col"></th>

                            </tr>
                            @foreach($posts as $post)
                          </thead>
                          <tbody>


                          <tr>
                            <th scope="row"><div class="form-check">
                              <input class="form-check-input" data-checkbox type="checkbox"name="selected[{{$post->id}} ]" value="{{$post->id}}" id="defaultCheck1">
                              <label class="form-check-label" for="defaultCheck1">
</form>
                              </label>
                            </div></th>
                            <td>{{$post->name}}</td>
                            <td>{{$post->phone}}</td>

                            <td>
                            <a href="" >
                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                               <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>

                            </svg>
                           </a>
                                </td>
                                @endforeach

                          </tbody>
                      </table>


                </div>
                </div>
            </div>


            <div class="right-side col col-xl-4 h-100  d-xl-flex align-items-center d-none " >
                <div class=" w-100   border  background position-relative" style="min-height: 75vh; border-radius: 20px;">
                  <div class=" w-100 h-75 d-flex justify-content-center align-items-center no-student">
                    <svg width="302" height="299" viewBox="0 0 302 299" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g opacity="0.2">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M88.5505 87.2082C88.5505 52.3248 116.135 24.9165 151.243 24.9165C186.35 24.9165 213.935 52.3248 213.935 87.2082C213.935 122.091 186.35 149.5 151.243 149.5C116.135 149.5 88.5505 122.091 88.5505 87.2082ZM264.088 236.708V261.625C264.088 269.1 259.072 274.083 251.549 274.083C244.026 274.083 239.011 269.1 239.011 261.625V236.708C239.011 215.529 222.711 199.333 201.395 199.333H101.088C79.7724 199.333 63.4724 215.529 63.4724 236.708V261.625C63.4724 269.1 58.457 274.083 50.934 274.083C43.4109 274.083 38.3955 269.1 38.3955 261.625V236.708C38.3955 201.825 65.9801 174.417 101.088 174.417H201.395C236.503 174.417 264.088 201.825 264.088 236.708ZM151.242 124.583C129.927 124.583 113.627 108.387 113.627 87.2083C113.627 66.0291 129.927 49.8333 151.242 49.8333C172.557 49.8333 188.857 66.0291 188.857 87.2083C188.857 108.387 172.557 124.583 151.242 124.583Z" fill="#212529"/>
                      <mask id="mask0_37_948" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="38" y="24" width="227" height="251">

                      </mask>
                      <g mask="url(#mask0_37_948)">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M0.78125 0H301.704V299H0.78125V0Z" fill="#212529"/>
                      </g>
                      </g>
                      </svg>

                  </div>

                  <div class="student-info">
                    <button type="button" class="close-student position-absolute top-0 end-0 m-4 btn-close" aria-label="Close"> </button>
                    <div class=" p-4 mb-1  ms-1 me-1 ">
                        <p  class=" mb-0 ">Nom et prenom:</p>
                        <h1 class="mb-4 fs-4 "></h1>
                        <p  class="mb-0" >Numéro de téléphone:</p>
                        <h2 class=" mb-4 fs-4 "></h2>
                        <p class="mb-2">Cour et Formation:</p>
                        <div class="">
                        <a href="./math.html">
                          <div class=" mb-1 me-1 btn btn-outline-primary rounded-pill formation-btn"  aria-pressed="true">Math 2as</div>
                        </a>
                        <a href="./educationFinanciere.html">
                          <div class="mb-1 me-1 btn btn-outline-primary rounded-pill formation-btn"  aria-pressed="true">Education financiere</div>
                        </a>
                      </div>
                        <div class="general-information">
                          <p class="mb-0 mt-4">Adresse Email:</p>
                        <p class=" bold fs-4"></p>
                        <p class="mt-3 mb-0">Adresse et Résidence:</p>
                        <p class="mb-3 fs-4"></p>
                        <div class="mt-5 d-flex justify-content-end mw-100">

                            <button type="button" class="me-1 btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" color="white" width="16" height="16" fill="currentColor" class="mb-1 bi bi-trash3" viewBox="0 0 16 16">
                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                              </svg></button>
                        <button type="button"class="modify-student btn btn-primary " style="color: white;" >Modifier</button>
                        </div>
                        </div>
                        <div class="specefic-information">
                          <div class="progress-bar mt-4 mb-2">
                            <div class="progresscontainers d-flex w-100 h-100 ">
                              <div class="progress-block"></div>
                            <div class="progress-block"></div>
                            <div class="progress-block"></div>
                            <div class="progress-block"></div>
                            </div>

                            <div class="payment-bar d-flex">
                              <div class="payment-block bg-success"></div>
                              <div class="payment-block bg-success"></div>
                              <div class="payment-block bg-success"></div>

                            </div>
                            <div class="presence-bar d-flex">
                              <div class="payment-block bg-dark"></div>
                              <div class="payment-block bg-dark"></div>

                            </div>

                          </div>
                          <p class="mb-0">dernier payement:</p>
                          <p>17/07/2023 a paye 2000da</p>
                          <p class="mb-0">solde:</p>
                          <h1 style="font-size: 40px;">1500da</h1>
                          <div class="btns d-flex flex-column align-items-end">
                             <button type="button"class="modify-student btn btn-success mb-2" style="color: white;" >ajouter un payement</button>
                          <button type="button"class="modify-student btn btn-primary " style="color: white;" >Marquer present</button>

                          </div>


                        </div>
                    </div>
                  </div>
                  <div class="modify-student-form d-none p-4">
                    <form>
                        <div class="mb-3">
                            <label for="" class="form-label" aria-placeholder="Pam Halpert" style="font: bolder;"><h6> Nom et Prénom:</h6></label>
                            <input class="form-control" type="text" placeholder="Pam Halpert" aria-label="default input example">
                        </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="inputPhoneNumber"><h6 class="mt-2"> Numéro de Téléphone:</h6></label>
                            <input type="tel" class="form-control" id="inputPhoneNumber" placeholder="0775509056" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                        </div>
                    </div>


                        <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label "><h6 class="mt-3">Adresse Email:</h6></label>
                        <input type="email" class="form-control" placeholder="p_halpert@estin.dz" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-4">
                            <label for="" class="form-label mt-2"><h6>Adresse de Résidence:</h6></label>
                            <input class=" mb-5 form-control" type="text" placeholder="amizour bat 15 num 345" aria-label="default input example">
                        </div>

                        <div class="mb-5 d-flex justify-content-end mw-100">

                        </div>
                    </form>
                </div>

                    </div>
                </div>
            </div>

            </div>

            </div>
        </div>

    <div class="front d-flex justify-content-center w-100 h-100  row d-none m-0 " style=" z-index: 10; position: absolute; top: 0; ">
        <div class="blur " style="z-index: 9;">
        </div>
        <div class="conatiner h-100 row position-absolute top-0 left-0 justify-content-center align-items-center " >
           <div class="ajout-popup ajout-etudiant col-9 col-lg-4 d-none  border background" style="max-width: 400px; z-index: 20; height: 90%; border-radius: 20px;">
          <div class="p-4">
              <form action="">
                  <div class="mb-3">
                      <label for="" class="form-label" style="font: bolder;"><h6> Nom et Prénom:</h6></label>
                      <input class="form-control" type="text" name="name" placeholder="" aria-label="default input example" required>
                  </div>
              <div class="mb-3">
                  <div class="form-group">
                      <label for="inputPhoneNumber"><h6 class="mt-2"> Numéro de Téléphone:</h6></label>
                      <input type="tel" class="form-control"name="phone" id="inputPhoneNumber"  >
                  </div>
              </div>


                  <div class="mb-1">
                  <label for="exampleInputEmail1" class="form-label "><h6 class="mt-3">Adresse Email:</h6></label>
                  <input type="email" class="form-control"name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>

                  <div class="mb-4">
                      <label for="" class="form-label mt-2"><h6>Adresse de Résidence:</h6></label>
                      <input class=" mb-5 form-control" type="text" name="addresse" placeholder="" aria-label="default input example">
                  </div>

                  <div class="mb-5 d-flex justify-content-end mw-100">
                  <button class="btn btn-primary rounded-pill mt-2" type="submit" style="color: white;">Confirmer</button>
                  </div>
              </form>
          </div>

          </div>
        </div>


    </div>



<div class="background" style="overflow: hidden; width: 100%; height: 100%; top: 0%; right: 0%; position: fixed;z-index: -10; ">

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
