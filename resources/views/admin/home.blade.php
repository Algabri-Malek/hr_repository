@extends('admin.master')
@section('content')





</div>
</div>	


 </header>
 <!-- /header -->





<div id="slider-container">
    <section class="full-slider">
        <div id="carousel-full-slider" class="carousel slide" data-ride="carousel">
         <!--   <ol class="carousel-indicators">
                <li data-target="#carousel-full-slider" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-full-slider" data-slide-to="1"></li>
                <li data-target="#carousel-full-slider" data-slide-to="2"></li>
            </ol>
        -->
            <div class="carousel-inner">
                <div class="vision2030"><img src="{{asset('admin/vision-2030.png')}}"></div>
                    <div class="carousel-item" data-src="/uploads/banners/60889.jpg" style="background-image: url(/uploads/banners/60889.jpg);">
                        <div class="carousel-caption d-flex justify-content-center align-items-center flex-column col-12 col-md-6 col-sm-12 mx-auto first-slide">
                           <!-- <h2><a href=""></a></h2>-->
                            <!--<p>ضع هنا وصف تفصيلى للاعلان</p>-->
                        </div>
                    </div>
                    <div class="carousel-item active" data-src="/uploads/banners/50866.jpg" style="background-image: url(/uploads/banners/50866.jpg);">
                        <div class="carousel-caption d-flex justify-content-center align-items-center flex-column col-12 col-md-6 col-sm-12 mx-auto first-slide">
                           <!-- <h2><a href=""></a></h2>-->
                            <!--<p>ضع هنا وصف تفصيلى للاعلان</p>-->
                        </div>
                    </div>

               
            </div>
            <a class="carousel-control-prev" href="https://www.iu.edu.sa/#carousel-full-slider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true">

                </span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="https://www.iu.edu.sa/#carousel-full-slider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true">
                </span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>



</div>








@endsection