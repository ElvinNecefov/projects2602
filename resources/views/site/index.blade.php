@extends('layouts.main')

@section('content')
<section class="content-section">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="section-title">
               <h2>Sponsorlar</h2>
            </div>
            <!-- end section-title --> 
         </div>
         <!-- end col-12 -->
         <div class="col-12">
            <div class="carousel-tv-shows">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <div class="category-thumb">
                        <figure class="category-image"> 
                           <img src="{{ asset('assets/images/Medeniyyet_Nazirliyi_Logo_AZ.png') }}" alt="Image1"> 
                        </figure>
                        <!-- end category-content --> 
                     </div>
                     <!-- end category-thumb --> 
                  </div>
                  <!-- end swiper-slide -->

                  <div class="swiper-slide">
                     <div class="category-thumb">
                        <figure class="category-image"> 
                           <img src="{{ asset('assets/images/pulpal.png') }}" alt="Image2"> 
                        </figure>
                        <!-- end category-content --> 
                     </div>
                     <!-- end category-thumb --> 
                  </div>
                  <!-- end swiper-slide -->

                  <div class="swiper-slide">
                     <div class="category-thumb">
                        <figure class="category-image"> 
                           <img src="{{ asset('assets/images/Marshal.png') }}" alt="Image3"> 
                        </figure>
                        <!-- end category-content --> 
                     </div>
                     <!-- end category-thumb --> 
                  </div>
                  <!-- end swiper-slide -->

                  <div class="swiper-slide">
                     <div class="category-thumb">
                        <figure class="category-image"> 
                           <img src="{{ asset('assets/images/SME_Logo.png') }}" alt="Image4"> 
                        </figure>
                        <!-- end category-content --> 
                     </div>
                     <!-- end category-thumb --> 
                  </div>
                  <!-- end swiper-slide -->

                  <div class="swiper-slide">
                     <div class="category-thumb">
                        <figure class="category-image"> 
                           <img src="{{ asset('assets/images/Legalaid.png') }}" alt="Image5"> 
                        </figure>
                        <!-- end category-content --> 
                     </div>
                     <!-- end category-thumb --> 
                  </div>
                  <!-- end swiper-slide -->

                  <div class="swiper-slide">
                     <div class="category-thumb">
                        <figure class="category-image"> 
                           <img src="{{ asset('assets/images/Azərbaycan_Televiziya_logo.png') }}" alt="Image6"> 
                        </figure>
                        <!-- end category-content --> 
                     </div>
                     <!-- end category-thumb --> 
                  </div>
                  <!-- end swiper-slide -->

                  <div class="swiper-slide">
                     <div class="category-thumb">
                        <figure class="category-image"> 
                           <img src="{{ asset('assets/images/Vitam_yasil logo.png') }}" alt="Image7"> 
                        </figure>
                        <!-- end category-content --> 
                     </div>
                     <!-- end category-thumb --> 
                  </div>
                  <!-- end swiper-slide -->

                  <div class="swiper-slide">
                     <div class="category-thumb">
                        <figure class="category-image"> 
                           <img src="{{ asset('assets/images/Bran Up_White.png') }}" alt="Image8"> 
                        </figure>
                        <!-- end category-content --> 
                     </div>
                     <!-- end category-thumb --> 
                  </div>
                  <!-- end swiper-slide -->
               </div>
               <!-- end swiper-wrapper -->
               <div class="swiper-button-next"></div>
               <div class="swiper-button-prev"></div>
            </div>
            <!-- end carousel-tv-shows -->
         </div>
         <!-- end col-12 -->
      </div>
      <!-- end row --> 
   </div>
   <!-- end container --> 
</section>
<!-- end content-section -->
<section class="content-section no-top-spacing">
   <div class="container">
      <div class="row align-items-center no-gutters">
         <div class="col-lg-6">
            <figure class="side-image full-left"> <img src="{{ asset('assets/images/side-image01.jpeg') }}" alt="Image"> </figure>
            <!-- end side-image --> 
         </div>
         <!-- end col-6 -->
         <div class="col-lg-6">
            <div class="side-content right">
               <h2>PROYEKT 2602 <br><u>#xalqınfilmi</u></h2>
               <ul class="icon-list">
                  <li>
                     
                     <div class="content">
                        <p>Dostlar, nəhayət ki, uzun illər sonra Azərbaycan kinosunu yeni səviyyəyə qaldırmaq, xalqımızın mədəniyyətini, Qarabağ haqqında həqiqətləri dünyaya daha müasir və təsirli  şəkildə çatdırmaq imkanı yaranıb.
                        </p>
                     </div>
                  </li>
                  <li>
                     
                     <div class="content">
                        <p>Azərbaycan Respublikası Mədəniyyət Nazirliyi və Azərbaycan Televiziyası öz dəstəklərini göstərsələr belə, hələ də filmin dünya səviyyəsində çəkilməsi üçün ciddi maliyyə dəstəyinə ehtiyac var. 
                        </p>
                     </div>
                  </li>
                  <li>
                     <!-- <figure> <img src="{{ asset('assets/images/icon03.png') }}" alt="Image"> </figure> -->
                     <div class="content">
                        <p>Dünyada geniş istifadə olunan "Crowdfunding" sistemini ilk dəfə burada tətbiq edərək onu uğurlu olacağına inanırıq. 
                        </p>
                     </div>
                  </li>

                  <li>
                     <!-- <figure> <img src="{{ asset('assets/images/icon03.png') }}" alt="Image"> </figure> -->
                     <div class="content">
                        <p>Biz bunu  sizin dəstəyinizlə həyata keçirəcəyik! 
                        </p>
                     </div>
                  </li>
               </ul>
            </div>
            <!-- end side-content --> 
         </div>
         <!-- end col-6 --> 
      </div>
      <!-- end row --> 
   </div>
   <!-- end container --> 
</section>
<!-- end content-section -->
@endsection