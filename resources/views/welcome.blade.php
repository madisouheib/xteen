<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('website/css/bootstrap-rtl.min.css') }}">
        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{ asset('website/css/fontawesome-all.min.css') }}">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="{{ asset('website/font/flaticon.css') }}">
        <!-- Google Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@100;200;300;400;500;600;700&family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ asset('website/style.css') }}">
    </head>
    
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div id="preloader" class="preloader">
        <div class='inner'>
            <div class='line1'></div>
            <div class='line2'></div>
            <div class='line3'></div>
        </div>
    </div>
    <section class="fxt-template-animation fxt-template-layout34" data-bg-image="{{ asset('website/img/elements/bg1.png') }}">
        <div class="fxt-shape">
            <div class="fxt-transformX-L-50 fxt-transition-delay-1">
                <img src="{{ asset('website/img/elements/shape1.png') }}" alt="Shape">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="fxt-column-wrap justify-content-between">
                        <div class="fxt-animated-img">
                            <div class="fxt-transformX-L-50 fxt-transition-delay-10">
                                <img src="{{ asset('website/img/bg-bg.png') }}" alt="Animated Image">
                            </div>
                        </div>
                        <div class="fxt-transformX-L-50 fxt-transition-delay-3">
                            <a href="login-34.html" class="fxt-logo" style="width:300px;height: 300px;"><img src="{{ asset('website/logo.png') }}" alt="Logo"></a>
                        </div>
                        <div class="fxt-transformX-L-50 fxt-transition-delay-5">
                            <div class="fxt-middle-content">
                                <h1 class="fxt-main-title" style="color:#4c4c4e;">مرحبا بك في xtenweb </h1>
                                <div class="fxt-switcher-description1">رفيقك في تطوير و نجاح تجارتك الالكترونية <a href="login-34.html" class="fxt-switcher-text ms-2">سجل معنا الان</a></div>
                            </div>
                        </div>
                        <div class="fxt-transformX-L-50 fxt-transition-delay-7">
                            <div class="fxt-qr-code">
                                <img src="{{ asset('website/img/elements/qr-register-34.png') }}" alt="QR">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">

<div class="container">
    <form method="POST" action="{{ route('user-profiles.store') }}">
        @csrf

    <div class="plans">
        <div class="col-12"> 
      <div class="title"> اختر احدى الخيارات</div>
      <label class="plan basic-plan" for="basic">
        <input checked type="radio" name="plan" id="basic" />
        <div class="plan-content">
          <img loading="lazy" src="{{ url('website/img/2.png')}}" alt="" />
          <div class="plan-details">
            <span>مهتم</span>
            <p>
                راك حاب تبدا تجارة الكترونية
                .</p>
          </div>
        </div>
      </label>
    </div>
    <div class="col-12"> 
      <label class="plan complete-plan" for="complete">
        <input type="radio" id="complete" name="plan" />
        <div class="plan-content">
          <img loading="lazy" src="{{ url('website/img/1.png')}}" alt="" />
          <div class="plan-details">
            <span>مبتدئ</span>
            <p>
                
                راك خدام تجارة الكترونية و بديت تحقق مبيعات.



            </p>
          </div>
        </div>
      </label>
    </div>
    </div>
  </div>
  <!-- Display Success Message -->
@if(session('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif

<!-- Display Error Message -->
@if(session('error'))
<div class="alert alert-danger" role="alert">
    {{ session('error') }}
</div>
@endif

                    <div class="fxt-column-wrap justify-content-center">
                        <div class="fxt-form">
         

                                <!-- Name -->
                                <div class="form-group">
                                    
                                    <label for="full_name">الاسم الكامل</label>
                                    
                                    <input type="text" id="full_name" class="form-control" name="full_name" placeholder="الاسم الكامل" required="required">
                                </div>
                        
                                <!-- Email -->
                                <div class="form-group">
                                    <label for="email">الايميل</label>
                                    <input type="email" id="email" class="form-control" name="email" placeholder="الايميل" required="required">
                                </div>
                        
                                <!-- Phone Number -->
                                <div class="form-group">
                                    <label for="phone">رقم الهاتف</label>
                                    <input type="tel" id="phone" class="form-control" name="phone" placeholder="رقم الهاتف" required="required">
                                </div>
                        
                                <!-- WhatsApp Number -->
                                <div class="form-group">
                                    <label for="whatsapp">رقم واتساب</label>
                                    <input type="tel" id="whatsapp" class="form-control" name="whatsapp" placeholder="رقم واتساب" required="required">
                                </div>
                        
                                <!-- Viber Number -->
                                <div class="form-group">
                                    <label for="viber">رقم فايبر</label>
                                    <input type="tel" id="viber" class="form-control" name="viber" placeholder="رقم فايبر" >
                                </div>
                   
                        <div id="curios"  style="display: none;">


                                  <!-- Time Investment -->
        <div class="form-group">
            <label for="time_investment">كم من وقت ستستثمر في مشروع التجارة الالكترونية؟</label>
            <select name="time_investment" class="form-control" id="time_investment" >
                <option value="">اختر مدة الوقت</option>
                <option value="1-2_hours">1 - 2 ساعات يومياً</option>
                <option value="3-4_hours">3 - 4 ساعات يومياً</option>
                <option value="5-6_hours">5 - 6 ساعات يومياً</option>
                <option value="full_time">دوام كامل</option>
            </select>
        </div>

        <!-- Current Profession -->
        <div class="form-group">
            <label for="current_profession">ماهي مهنتك في الوقت الراهن؟</label>
            <input type="text" id="current_profession" class="form-control" name="current_profession" placeholder="اكتب مهنتك الحالية" >
        </div>

        <!-- Capital Investment -->
        <div class="form-group">
            <label for="capital_investment">كم من راس المال الذي تستسثمر في مشروع التجارة الالكترونية؟</label>
            <input type="number" id="capital_investment" class="form-control" name="capital_investment" placeholder="أدخل قيمة رأس المال بالدينار">
        </div>
                        </div>
                        <div id="amateur" style="display: none;">

                                <!-- Field of Work -->
                                <div class="form-group">
                                    <label for="work_field">مجال العمل</label>
                                    <select name="work_field" class="form-control" id="work_field" >
                                        <option value="">اختر مجال العمل</option>
                                        <option value="cosmetics">كوسميتيك</option>
                                        <option value="general_product">General Product</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                        
                                <!-- Daily Orders -->
                                <div class="form-group">
                                    <label for="daily_orders">عدد الطلبات لي تخرجها في اليوم</label>
                                    <input type="number" id="daily_orders" class="form-control" name="daily_orders" placeholder="عدد الطلبات لي تخرجها في اليوم" >
                                </div>
                        
                                <!-- Problems Facing -->
                                <div class="form-group">
                                    <label for="problems">مشاكل لي راك تواجه فيها</label>
                                    <select name="problems" class="form-control" id="problems" >
                                        <option value="capital">راس المال</option>
                                        <option value="account_closure">مشاكل غلق الحسابات</option>
                                        <option value="product_search">البحث على المنتجات</option>
                                        <option value="other">مشاكل اخرى</option>
                                    </select>
                                </div>
                        
                                <!-- Additional Problems -->
                                <div class="form-group">
                                    <label for="additional_problems">مشاكل اخرى</label>
                                    <textarea id="additional_problems" class="form-control" name="additional_problems" placeholder="اكتب مشاكل اخرى..." rows="3"></textarea>
                                </div>
                            </div>
                                <!-- Submit Button -->
                                <div class="form-group">
                                    <button type="submit" name="ok" style="width:100%" class="btn btn-primary"> إرسال الطلب </button>
                                </div>
                            </form>
                        </div>
                        <div class="fxt-style-line">
                            <span><a href="https://colivraison.express">
                            <img src="{{ url('website/colivraison.png') }}" style="width:50px;height:50px;"> 
                            </a> Prowerd By   </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Get the radio inputs and the sections
        const basicPlan = document.getElementById('basic');
        const completePlan = document.getElementById('complete');
        const sectionA = document.getElementById('amateur');
        const sectionB = document.getElementById('curios');

        // Function to show/hide sections based on radio selection
        function toggleSections() {
            if (basicPlan.checked) {
                sectionA.style.display = 'block';
                sectionB.style.display = 'none';
            } else if (completePlan.checked) {
                sectionA.style.display = 'none';
                sectionB.style.display = 'block';
            }
        }

        // Attach event listeners to radio buttons
        basicPlan.addEventListener('change', toggleSections);
        completePlan.addEventListener('change', toggleSections);

        // Initial display based on default radio selection
        toggleSections();
    </script>
    <!-- jquery-->
    <script src="{{ asset('website/js/jquery-3.5.0.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('website/js/bootstrap.min.js') }}"></script>
    <!-- Imagesloaded js -->
    <script src="{{ asset('website/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- Validator js -->
    <script src="{{ asset('website/js/validator.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('website/js/main.js') }}"></script>

</body>
</html>
