<!DOCTYPE html>
<!-- saved from url=(0022)https://www.iu.edu.sa/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> نظام الموارد البشرية </title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('admin/bootstrap-rtl.css')}}" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="{{asset('admin/animate.css')}}" rel="stylesheet">
    <link href="{{asset('admin/font-awesome.min.css')}}" rel="stylesheet">
	
	<link rel="stylesheet" href="{{asset('admin/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/owl.theme.default.min.css')}}">
	
    <!-- IU styles -->
    <link href="{{asset('admin/style.css')}}" rel="stylesheet">
    
</head>
 	
<body class="  pace-done"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>


<header class="">
	 
	<div class="search-drawer" aria-expanded="false" role="region">
		<div class="container">
			<div class="drawer-search">
				<div class="big-search">
					
			<form role="search" method="get" class="searchform" action="https://www.iu.edu.sa/search">
				<div>
 					<input type="text" value="" name="s" class="search-input" placeholder="ضع كلمة البحث هنا">

					<button class="searchsubmit" type="submit">
						<i class="fa fa-search"></i> <span>بحث</span>
					</button>
				</div>
			</form>

			</div>
			</div>
		</div><!-- .container -->
	</div><!-- .drawer -->


	<div id="top-bar">
	<div class="container">

    <div class="navbar navbar-expand-lg my-hover-menu" role="navigation">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mininavbar" aria-controls="mininavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

	<div class="top-nav-right">
	
    <ul>
        <li>
            <a class="search-toggle button-toggle">
            <span class="toggle-visible">
                <i class="fa fa-search"></i>ابحث</span>
            <span style="display: none;">
                <i class="fa fa-times"></i>اغلاق</span>
            </a><!-- .overlay-toggle-->
        </li>

        
            <li class="dropdown user-login">
            <a href="https://cas.iu.edu.sa/cas/login" class="login-btn-dropdown"><i class="fa fa-user-o" aria-hidden="true"></i><b> {{__('menu.Log_out')}} </b> <span class="caret"></span></a>

                
        </li>

    </ul>
 		
 	</div>

	
    <div class="collapse navbar-collapse" id="mininavbar">


     <ul class="moveit navbar-nav navbar-left mr-auto">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> مرحبا {{ Auth::user()->name }} <span class="iud"></span></a>
                <ul class="dropdown-menu parent1 lookright animated fadeInUp">
                    <li><a class="dropdown-item" href="{{ route('profile.show') }}"> بروفايل الموظف</a></li>
                    <li><a class="dropdown-item" href="#" >تسجيل الخروج</a></li>

                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> فريق العمل {{ Auth::user()->currentTeam->name }} <span class="iud"></span></a>
                <ul class="dropdown-menu parent1 lookright animated fadeInUp">
                    <li><a class="dropdown-item" href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" >اعدادات فريق العمل</a></li>

                </ul>
            </li>
        </ul></div>

	 
         <ul class="topm-left-menu">
            <li>
                <a class="chg-lng" href="https://enweb.iu.edu.sa/"><span>E</span></a>
            </li>
            <li>
                <a class="sitemap" href="https://blog.iu.edu.sa/ar/" target="_blank"><i class="fa fa-users"></i></a>
            </li>
        </ul>

		
	 </div>

 	 
     </div>
     </div>
	 
	 

<div class="navbar-wrapper">
<div class="container">
 


<div class="navbar navbar-expand-lg navbar-light bg-light my-hover-menu" role="navigation">
   <a class="navbar-brand" href="https://www.iu.edu.sa/index"><img src="{{asset('admin/uni-logo.png')}}" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainnavbar" aria-controls="mainnavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainnavbar">
      
		
   <ul class="navbar-nav navbar-right ml-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ادارة النظام<span class="iud"></span></a>
        <ul class="dropdown-menu parent1 animated fadeInUp">

            <li><a class="dropdown-item" href="{{ url('db') }}">لوحة التحكم</a></li>
            <li><a class="dropdown-item" href="{{ route('api-tokens.index') }}"> توليد token </a></li>
            <li><a class="dropdown-item" href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" >اعدادات فريق العمل</a></li>
            <li><a class="dropdown-item" href="#"> xxx بيانات فرق العمل</a></li>
            <li><a class="dropdown-item" href="{{ route('teams.create') }}">انشاء فريق عمل جديد</a></li>
            
        </ul>
    </li>


    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ادارة بيانات الموظفين<span class="iud"></span></a>
        <ul class="dropdown-menu parent1 animated fadeInUp">

            <li><a class="dropdown-item" href="{{ route('register') }}">اضافة موظف</a></li>
            <li><a class="dropdown-item" href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" >اعدادات فريق العمل الحالي</a></li>
            <li><a class="dropdown-item" href="{{ route('teams.create') }}">انشاء فريق عمل جديد</a></li>

        </ul>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">إدارة عمليات الموظفين <span class="iud"></span></a>
        <ul class="dropdown-menu parent1 animated fadeInUp">

            <li><a class="dropdown-item" href="# ">السلف</a></li>
            <li><a class="dropdown-item" href="# ">جدول الدوام </a></li>
            <li><a class="dropdown-item" href="# ">اجازات الموظف</a></li>
            <li><a class="dropdown-item" href="# ">الخصومات </a></li>
            <li><a class="dropdown-item" href="# ">عهد الموظفين </a></li>
            <li><a class="dropdown-item" href="# ">السجل الوظيفي</a></li>



        </ul>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> الادارة المالية <span class="iud"></span></a>
        <ul class="dropdown-menu parent1 animated fadeInUp">

            <li><a class="dropdown-item" href="# ">اجازات النظام</a></li>
            <li><a class="dropdown-item" href="# ">الراتب الشهري</a></li>


        </ul>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">إدارة التوظيف و التقديم <span class="iud"></span></a>
        <ul class="dropdown-menu parent1 animated fadeInUp">

            <li><a class="dropdown-item" href="# ">الوظائف الشاغرة</a></li>
            <li><a class="dropdown-item" href="# ">المتقدمين للوظيفة</a></li>
            <li><a class="dropdown-item" href="# ">اجراءات التنافس على موظيفة</a></li>
        </ul>
    </li>

		
     </div>
</div>












@yield('content')         























<footer id="footer">    
	
<div class="footer-inner">
<div class="container">
    <div class="row">
      
        <div class="col-lg-3 col-sm-6">
            <div class="level links wow fadeInUp animated" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                <h1 class="ex-title st2-lines"><span>عن الجامعة</span></h1>
                <ul>
                    <li><a href="{{ route('dashboard') }}">لوحة التحكم</a></li>
                    <li><a href="#" >تسجيل الخروح</a></li>
                    <li><a href="#">التوظيف</a></li>
                    <li><a href="#">استقطاب</a></li>
                    <li><a href="#">دليل الهاتف</a></li>
                    
                </ul>
            </div>
        </div>


      
        <div class="col-lg-3 col-sm-6">
            <div class="level links wow fadeInUp animated" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                <h1 class="ex-title st2-lines"><span>التسجيل في الجامعة</span></h1>
                <ul><!--https://admission.iu.edu.sa/WelcomePortal.aspx-->
                    <li><a href="https://www.iu.edu.sa/#">التسجيل فى الجامعة</a></li>
                     <li><a href="https://eduportal.iu.edu.sa/iu/init?service=graduationDocAr">خدمة سجل خريج</a></li>
                    <li><a href="https://eduportal.iu.edu.sa/iu/init?service=academicCalendar">التقويم الأكاديمي</a></li>
                    <li><a href="https://eduportal.iu.edu.sa/iu/init?service=facultiesMajors">الخطط الدراسية</a></li>
                  <li><a href="https://eduportal.iu.edu.sa/iu/init?service=graduationDocAr">التحقق من وثيقة التخرج</a></li>
                    

                </ul>
            </div>

        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="level links wow fadeInUp animated" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                <h1 class="ex-title st2-lines"><span>دعم فني</span></h1>
                <ul>
                    <li><a href="https://iu.edu.sa/site_page/22206">نظام تواصل</a></li>
                    <li><a href="https://iu.edu.sa/site_Page/21572">تقنية المعلومات</a></li>
                    <li><a href="https://iu.edu.sa/Page/index/20839">سياسة امن المعلومات</a></li>
                     <li><a href="http://iu.edu.sa/site/89">البيانات المفتوحة</a></li>

                </ul>
            </div>

        </div>




        <div class="col-lg-3 col-sm-6">
            <div class="level col-social wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                <h1 class="ex-title st2-lines"><span>إتصل بنا</span></h1>
                <ul class="contactus">
                    <li><i class="fa fa-volume-control-phone"></i>هاتف / <span>920022042</span></li>
              <!--      <li><i class="fa fa-fax"></i>فاكس / <span> </span></li> -->
                    <li><i class="fa fa-map-marker"></i><a href="https://goo.gl/maps/t1Jtvs2BZVSRtJPRA">موقعنا علي Google Map</a></li>
                    <li><i class="fa fa-envelope-o"></i>بريد اليكتروني / <span>contact@iu.edu.sa</span></li>
                    <li><i class="fa fa-globe"></i><a href="https://www.iu.edu.sa/#">تحميل دليل المواقع</a></li>
                </ul>

            </div>

            <div class="follow-container wow fadeInUp animated" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
                <b class="follow-txt">تابعنا عبر مواقع التواصل الإجتماعي</b>
                <ul class="socialicons">
                    <li class="facebook"><a href="https://www.iu.edu.sa/#" title="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="https://www.iu.edu.sa/#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li class="youtube"><a href="https://www.iu.edu.sa/#" title="Youtube channel"><i class="fa fa-youtube"></i></a></li>
                    <li class="flickr"><a href="https://www.iu.edu.sa/#" title="flickr"><i class="fa fa-flickr"></i></a></li>
                </ul>
            </div>




        </div>




    </div>
</div>

</div>

</footer>

<a href="https://www.iu.edu.sa/#" id="backtop" style="display: inline; bottom: -60px;"><i class="fa fa-chevron-up"></i></a>


 

<div id="copyright">
<div class="container">

<div class="row">
<div class="col-lg-6">


</div>
	</div>
	</div>

	
	
	
<!-- Mainly scripts -->


	<script src="{{asset('admin/jquery-3.5.1.min.js.download')}}"></script>
	<script src="{{asset('admin/jquery-migrate.js.download')}}"></script>
	 

	<script src="{{asset('admin/popper.min.js.download')}}"></script>

	<script src="{{asset('admin/bootstrap45.min.js.download')}}"></script>
  
	<script src="{{asset('admin/touchswipe.min.js.download')}}"></script>

	<script src="{{asset('admin/owl.carousel.min.js.download')}}"></script>

	<!-- Stellar Parallax -->
	<script src="{{asset('admin/jquery.stellar.min.js.download')}}"></script>
		

    
    <script src="{{asset('admin/main.js.download')}}"></script>



    <div class="tooltip fade bs-tooltip-bottom" role="tooltip" id="tooltip423767" x-placement="bottom" 
    style="position: absolute; transform: translate3d(74px, 154px, 0px); top: 0px; left: 0px; will-change: transform;">
    <div class="arrow" style="left: 41px;">
    </div>

    <div class="tooltip-inner">English Version</div></div>

</body>
</html>