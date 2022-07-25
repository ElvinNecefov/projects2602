@extends('layouts.main')

@section('content')
<section class="content-section">
    <div class="container">
      <div class="row justify-content-center">
			 <div class="col-12">
          <div class="section-title text-center">
			  <h6>Əlaqə məlumatları</h6>
            <h2>Bizimlə Əlaqə</h2>
          </div>
          <!-- end section-title --> 
        </div>
        <!-- end col-12 -->
		  <div class="col-lg-4">
		  	<div class="contact-box">
			  <figure>
              <img src="{{ asset('assets/images/location.png') }}" alt="Image">
				</figure>
				<h5>Ünvanımız</h5>
				<p>AZ1069, Bakı Şəhəri, Nərimanov Rayonu, Mustafa
                Kamal Atatürk, ev31, mənzil 48</p>
				
			  </div>
			  <!-- end contact-box -->
		  </div>
		  <!-- end col-4 -->
		  <div class="col-lg-4">
		  	<div class="contact-box">
			  <figure>
              <img src="{{ asset('assets/images/phone.png') }}" alt="Image">
				</figure>
				<h5>Bizə Zəng Edin</h5>
				<p>+99455 613 26 02</p>
				
			  </div>
			  <!-- end contact-box -->
		  </div>
		  <!-- end col-4 -->
		  <div class="col-lg-4">
		  	<div class="contact-box">
			  <figure>
              <img src="{{ asset('assets/images/mail.png') }}" alt="Image">
				</figure>
				<h5>Bizə Yazın</h5>
				<p><a href="#">proyekt2602@gmail.com</a></p>
				
			  </div>
			  <!-- end contact-box -->
		  </div>
		  <!-- end col-4 -->
		</div>   
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <section class="content-section" data-background="#f7f7f7">
	<div class="container">	
		<div class="row justify-content-center">
			<div class="col-12">
          <div class="section-title text-center">
			  <h6>Əlaqə formu</h6>
            <p>Əziz istifadəçi, hər hansı sualınız və ya qeydiniz varsa, bizimlə əlaqəyə keçmək istəyirsinizsə, zəhmət olmasa aşağıdakı sorğunu doldurun. Biz ən qısa zamanda sorğunuzu cavablandıracağıq.</p>
          </div>
          <!-- end section-title --> 
        </div>
        <!-- end col-12 -->
		  <div class="col-lg-6">
		  	<div class="contact-form">
			  	<div class="form-group">
					<input type="text" placeholder="Adınız">
				</div>
				<!-- end form-group -->
			  	<div class="form-group">
					<input type="text" placeholder="Email adresiniz">
				</div>
				<!-- end form-group -->
			  	<div class="form-group">
					<!-- <select>
						<option>Select your subject</option>
					</select> -->
                    <select name="" id="">
                        <option value="şikayət">Şikayət və təkliflər</option>
                        <option value="sorğu">Sorğu</option>
                    </select>
				</div>
				<!-- end form-group -->
			  	<div class="form-group">
					<textarea placeholder="Mesajınız"></textarea>
				</div>
				<!-- end form-group -->
			  	<div class="form-group">
					<input type="submit" value="Göndər">
				</div>
				<!-- end form-group -->
			  </div>
			  <!-- end contact-form -->
		  </div>
		  <!-- end col-6 -->
		</div>
		<!-- end row -->
		</div>
		<!-- end container -->
	</section>
@endsection