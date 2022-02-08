<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="slide/css/owl.carousel.min.css">
    <link rel="stylesheet" href="slide/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="slide/css/style.css">
    <link rel ="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/footer.css">
    <!-- ลิ้ง footer-->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
  

    <title>NVcare Admin</title>
  </head>
  <body>
        <!-- Navigation -->
        @extends('navbar_admin')
        @section('content')
    
    <!--==============================================slide=================================================-->
    <div class="home-slider owl-carousel js-fullheight">
        <div class="slider-item js-fullheight" style="background-image:url(image/slide/slide1.jpg);">
          <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-12 ftco-animate">
                    <div class="text w-100 text-center">
                        <h2></h2>
                      <h1 class="mb-3"></h1>
                  </div>
                </div>
              </div>
          </div>
        </div>
  
        <div class="slider-item js-fullheight" style="background-image:url(image/slide/slide2.jpg);">
          <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-12 ftco-animate">
                    <div class="text w-100 text-center">
                        <h2></h2>
                      <h1 class="mb-3"></h1>
                  </div>
                </div>
              </div>
          </div>
        </div>
  
        <a href="https://hdmall.co.th/highlight/hd-covid-19-test?sort=final_price&direction=asc">
        <div class="slider-item js-fullheight" style="background-image:url(image/slide/slide3.jpg);">
            <div class=""></div>
          <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-12 ftco-animate">
                    <div class="text w-100 text-center">
                        <h2></h2>
                      <h1 class="mb-3"></h1>
                  </div>
                </div>
              </div>
          </div>
        </div>
        </a>
      </div>
    <!--==============================================Menu=================================================-->
    <div class="container2">
      <div class="row">
          <div class="col-md-4">
              <div class="content"> 
                <a href="menuone">
                      <div class="content-overlay"></div> <img class="content-image" src="image/menu/66.png">
                      <div class="content-details fadeIn-bottom">
                          <h3 class="content-title">ความรู้เกี่ยวกับโควิด-19</h3>
                      </div>
                  </a>
               </div>
          </div>
          <div class="col-md-4">
              <div class="content"> 
                <a href="menutwo">
                      <div class="content-overlay"></div> <img class="content-image" src="image/menu/44.png">
                      <div class="content-details fadeIn-bottom">
                          <h3 class="content-title">การดูแลตนเอง</h3>
                      </div>
                  </a>
                </div>
          </div>
          <div class="col-md-4">
              <div class="content"> <a href="menuthree">
                      <div class="content-overlay"></div> <img class="content-image" src="image/menu/22.png">
                      <div class="content-details fadeIn-bottom">
                          <h3 class="content-title">ยารักษาโควิด-19 ในปัจจุบัน</h3>
                      </div>
                  </a> </div>
          </div>
          <div class="col-md-4">
            <div class="content"> <a href="menufour">
                    <div class="content-overlay"></div> <img class="content-image" src="image/menu/11.png">
                    <div class="content-details fadeIn-bottom">
                        <h3 class="content-title">วัคซีนโควิด-19</h3>
                    </div>
                </a> </div>
          </div>
          <div class="col-md-4">
            <div class="content"> <a href="menufive">
                    <div class="content-overlay"></div> <img class="content-image" src="image/menu/55.png">
                    <div class="content-details fadeIn-bottom">
                        <h3 class="content-title">การตรวจร่างกาย</h3>
                    </div>
                </a> </div>
          </div>
          <div class="col-md-4">
            <div class="content"> <a href="menusix">
                    <div class="content-overlay"></div> <img class="content-image" src="image/menu/99.png">
                    <div class="content-details fadeIn-bottom">
                        <h3 class="content-title">คลิปวิดิโอ</h3>
                    </div>
                </a> </div>
          </div>
      </div>
    </div>
    <!--==============================================footer=================================================-->
    <footer class="container-fluid bg-grey py-5">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <div class="row">
                    <div class="col-md-6 ">
                      <div class="content"> 
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLScxMQ00B3AEHP5AOvHisISulPrZMG2agdSh00o_ebULl5-z5Q/viewform">
                          <div class="content-overlay"></div> <img class="content-image" src="image/menu/88.png">
                          <div class="content-details fadeIn-bottom">
                              <h3 class="content-title">แบบทดสอบความรู้</h3>
                          </div>
                        </a> 
                      </div>
                    </div>
                    <div class="col-md-6 ">
                      <div class="content"> 
                          <a href="https://docs.google.com/forms/d/e/1FAIpQLSfPvQBXQK5D0I2P71UFcyxbdzER10ti-2sWszY56FZN6CkDVQ/viewform">
                            <div class="content-overlay"></div> <img class="content-image" src="image/menu/77.png">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">แบบประเมินความพึงพอใจ</h3>
                            </div>
                          </a> 
                      </div>
                      <span>Baromarajajonani College of Nursing Nopparat Vajira</span>
  
                    </div>
                    
                 </div>
                 
            </div>
         </div>
 
    

    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript'></script>
        <!--footer-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   
    <script src="slide/js/jquery.min.js"></script>
    <script src="slide/js/popper.js"></script>
    <script src="slide/js/bootstrap.min.js"></script>
    <script src="slide/js/owl.carousel.min.js"></script>
    <script src="slide/js/main.js"></script>    



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>