@extends('layout.layout')

@section('content')

  <x-header pageTitle="Layanan" breadcrumbItem="Layanan" />

    <!-- Start Service Section -->
    <section class="cs_pt_140 cs_pt_lg_80 cs_pb_115 cs_pb_lg_55">
      <div class="container">
        <div class="cs_section_heading cs_style_1 text-center cs_mb_60 cs_mb_lg_40">
          <div class="cs_section_heading_in">
            <h3 class="cs_fs_20 text-accent fw-normal cs_lh_base wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Layanan</h3>
            <h2 class="cs_fs_48 cs_fs_lg_36 m-0">Commited to Deliver Top <br>Quality Services</h2>
          </div>
        </div>
        <div class="row">
          @foreach($layanans as $layanan)
          <div class="col-xl-3 col-md-6">
            <div class="cs_service cs_style_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
              <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                <div class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                  <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 0C8.954 0 0 8.954 0 20s8.954 20 20 20 20-8.954 20-20S31.046 0 20 0zm0 36c-8.822 0-16-7.178-16-16S11.178 4 20 4s16 7.178 16 16-7.178 16-16 16zm-2-8h4v4h-4v-4zm0-12h4v8h-4v-8z" fill="white"/>
                  </svg>                   
                </div>
                <h2 class="cs_lh_base cs_fs_20 m-0"><a href="{{ url('services-details') }}" class="inline-block">{{ $layanan->nama }}</a></h2>
              </div>
              <p class="cs_mb_24">{{ $layanan->deskripsi }}</p>
              <div class="cs_service_thumb position-relative cs_rounded_5">
                <a href="{{ url('services-details') }}" class="cs_service_btn d-flex align-items-center justify-content-center rounded-circle position-absolute text-white">
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.8491 11.347C20.855 11.3381 20.8602 11.3289 20.8656 11.3198C20.8706 11.3114 20.8759 11.3032 20.8805 11.2946C20.8855 11.2853 20.8897 11.2757 20.8942 11.2663C20.8984 11.2573 20.9029 11.2484 20.9067 11.2392C20.9105 11.23 20.9136 11.2206 20.9169 11.2113C20.9205 11.2014 20.9243 11.1916 20.9274 11.1814C20.9302 11.1721 20.9322 11.1626 20.9346 11.1532C20.9372 11.1429 20.9401 11.1327 20.9422 11.1222C20.9444 11.1113 20.9456 10.1003 20.9472 11.0894C20.9485 11.0801 20.9503 11.0711 20.9512 11.0617C20.9532 11.0415 20.9543 11.0213 20.9543 11.001C20.9543 11.0007 20.9543 11.0004 20.9543 11.0001C20.9543 10.9998 20.9543 10.9994 20.9543 10.9991C20.9542 10.9789 20.9532 10.9586 20.9512 10.9384C20.9503 10.929 20.9485 10.92 20.9472 10.9108C20.9456 10.8998 20.9444 10.8888 20.9422 10.8779C20.9401 10.8674 20.9372 10.8572 20.9346 10.8469C20.9322 10.8375 20.9302 10.828 20.9274 10.8187C20.9243 10.8086 20.9205 10.7988 20.9169 10.7889C20.9136 10.7795 20.9105 10.7701 20.9067 10.7609C20.9029 10.7517 20.8984 10.7428 20.8941 10.7338C20.8897 10.7244 20.8855 10.7148 20.8805 10.7055C20.8759 10.6969 20.8706 10.6887 20.8656 10.6803C20.8602 10.6712 20.855 10.662 20.8491 10.6531C20.8428 10.6438 20.8359 10.635 20.8292 10.6261C20.8237 10.6187 20.8186 10.6112 20.8127 10.604C20.7996 10.588 20.7858 10.5727 20.7713 10.5581L15.026 4.81285C14.7819 4.56877 14.3862 4.56877 14.1421 4.81285C13.898 5.05692 13.898 5.45264 14.1421 5.69672L18.8204 10.375L0.88388 10.375C0.53871 10.375 0.258878 10.6548 0.258878 11C0.258878 11.3452 0.53871 11.625 0.88388 11.625L18.8204 11.625L14.1421 16.3033C13.8981 16.5474 13.8981 16.9431 14.1421 17.1872C14.3862 17.4312 14.7819 17.4313 15.026 17.1872L20.7713 11.442C20.7858 11.4274 20.7996 11.4121 20.8127 11.3962C20.8186 11.389 20.8237 11.3814 20.8292 11.374C20.8359 11.3651 20.8428 11.3563 20.8491 11.347Z" fill="currentColor"/>
                  </svg>                    
                </a>
                @if($layanan->gambar)
                  <div class="cs_service_thumb-in position-relative-in background-filled h-100" style="background-image: url('{{ asset('storage/' . $layanan->gambar) }}'); background-size: cover; background-position: center;"></div>
                @else
                  <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="assets/img/service_default.jpg"></div>
                @endif
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- End Service Section -->
    <!-- Start Testimonial Section -->
    <section class="background-filled cs_pt_140 cs_pt_lg_75 cs_pb_135 cs_pb_lg_75" data-src="assets/img/testimonial_bg.jpeg">
      <div class="cs_testimonial_slider cs_gap_30">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 cs_mb_lg_40">
              <div class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_30">
                <div class="cs_section_heading_in">
                  <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">Testimonial</h3>
                  <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20">What They’re Saying?</h2>
                  <p class="m-0">Providing legal advice, contract drafting, compliance assistance, intellectual property protection, and other legal support for businesses.</p>
                </div>
              </div>
              <div class="d-flex cs_column_gap_15">
                <div class="cs_slider_prev filter cs_height_45 cs_width_45 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4">
                  <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.461063 4.4077H19.538C19.7649 4.4077 19.9482 4.22437 19.9482 3.99745C19.9482 3.77052 19.7649 3.58719 19.538 3.58719H1.45209L3.94183 1.09745C4.10209 0.937189 4.10209 0.676933 3.94183 0.516677C3.78158 0.35642 3.52132 0.35642 3.36106 0.516677L0.170038 3.7077C0.0520878 3.82565 0.0174732 4.00129 0.0815754 4.15514C0.145678 4.3077 0.295677 4.4077 0.461063 4.4077Z" fill="black"/>
                    <path d="M3.65549 7.60253C3.76062 7.60253 3.86575 7.56278 3.94524 7.48202C4.10549 7.32176 4.10549 7.0615 3.94524 6.90125L0.750365 3.70637C0.590108 3.54612 0.329853 3.54612 0.169597 3.70637C0.00934029 3.86663 0.00934029 4.12689 0.169597 4.28714L3.36447 7.48202C3.44524 7.56278 3.55036 7.60253 3.65549 7.60253Z" fill="black"/>
                  </svg>             
                </div>
                <div class="cs_slider_next filter cs_height_45 cs_width_45 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4">
                  <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.5389 4.4077H0.462014C0.235091 4.4077 0.0517578 4.22437 0.0517578 3.99745C0.0517578 3.77052 0.235091 3.58719 0.462014 3.58719H18.5479L16.0582 1.09745C15.8979 0.937189 15.8979 0.676933 16.0582 0.516677C16.2184 0.35642 16.4787 0.35642 16.6389 0.516677L19.83 3.7077C19.9479 3.82565 19.9825 4.00129 19.9184 4.15514C19.8543 4.3077 19.7043 4.4077 19.5389 4.4077Z" fill="#18191D"/>
                    <path d="M16.3445 7.60253C16.2394 7.60253 16.1342 7.56278 16.0548 7.48202C15.8945 7.32176 15.8945 7.0615 16.0548 6.90125L19.2496 3.70637C19.4099 3.54612 19.6701 3.54612 19.8304 3.70637C19.9907 3.86663 19.9907 4.12689 19.8304 4.28714L16.6355 7.48202C16.5548 7.56278 16.4496 7.60253 16.3445 7.60253Z" fill="#18191D"/>
                  </svg>          
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="cs_slider_activate">
                <div class="cs_slide">
                  <div class="cs_testimonial cs_style_1 cs_pt_20">
                    <div class="cs_testimonial_in bg-white shadow-sm cs_pl_30 cs_pr_30 cs_pb_27 cs_pt_1 cs_rounded_10">
                      <div class="cs_testimonial_img cs_mb_15"><img src="assets/img/avatar_1.png" alt="Avatar" class="cs_height_75 cs_width_75 rounded-circle"></div>
                      <div class="cs_rating text-accent cs_mb_15" data-rating="4.5">
                        <div class="cs_rating_percentage"></div>
                      </div>
                      <p class="cs_mb_14">I've been using [business name] for the past year and I'm so glad I did. Their products and services are top-notch and their customer service is amazing. I would highly recommend them to anyone</p>
                      <h3 class="cs_fs_18 cs_mb_2 cs_lh_base">Darlene Robertson</h3>
                      <p class="m-0 cs_fs_14 cs_lh_base">Web design</p>
                    </div>
                  </div>
                </div>
                <div class="cs_slide">
                  <div class="cs_testimonial cs_style_1 cs_pt_20">
                    <div class="cs_testimonial_in bg-white shadow-sm cs_pl_30 cs_pr_30 cs_pb_27 cs_pt_1 cs_rounded_10">
                      <div class="cs_testimonial_img cs_mb_15"><img src="assets/img/avatar_2.png" alt="Avatar" class="cs_height_75 cs_width_75 rounded-circle"></div>
                      <div class="cs_rating text-accent cs_mb_15" data-rating="5">
                        <div class="cs_rating_percentage"></div>
                      </div>
                      <p class="cs_mb_14">I've been using [business name] for the past year and I'm so glad I did. Their products and services are top-notch and their customer service is amazing. I would highly recommend them to anyone</p>
                      <h3 class="cs_fs_18 cs_mb_2 cs_lh_base">Carol McCarthy</h3>
                      <p class="m-0 cs_fs_14 cs_lh_base">Product manager</p>
                    </div>
                  </div>
                </div>
                <div class="cs_slide">
                  <div class="cs_testimonial cs_style_1 cs_pt_20">
                    <div class="cs_testimonial_in bg-white shadow-sm cs_pl_30 cs_pr_30 cs_pb_27 cs_pt_1 cs_rounded_10">
                      <div class="cs_testimonial_img cs_mb_15"><img src="assets/img/avatar_3.png" alt="Avatar" class="cs_height_75 cs_width_75 rounded-circle"></div>
                      <div class="cs_rating text-accent cs_mb_15" data-rating="4">
                        <div class="cs_rating_percentage"></div>
                      </div>
                      <p class="cs_mb_14">I've been using [business name] for the past year and I'm so glad I did. Their products and services are top-notch and their customer service is amazing. I would highly recommend them to anyone</p>
                      <h3 class="cs_fs_18 cs_mb_2 cs_lh_base">Peter Johnson</h3>
                      <p class="m-0 cs_fs_14 cs_lh_base">Web developer</p>
                    </div>
                  </div>
                </div>
                <div class="cs_slide">
                  <div class="cs_testimonial cs_style_1 cs_pt_20">
                    <div class="cs_testimonial_in bg-white shadow-sm cs_pl_30 cs_pr_30 cs_pb_27 cs_pt_1 cs_rounded_10">
                      <div class="cs_testimonial_img cs_mb_15"><img src="assets/img/avatar_4.png" alt="Avatar" class="cs_height_75 cs_width_75 rounded-circle"></div>
                      <div class="cs_rating text-accent cs_mb_15" data-rating="5">
                        <div class="cs_rating_percentage"></div>
                      </div>
                      <p class="cs_mb_14">I've been using [business name] for the past year and I'm so glad I did. Their products and services are top-notch and their customer service is amazing. I would highly recommend them to anyone</p>
                      <h3 class="cs_fs_18 cs_mb_2 cs_lh_base">Max Lawrence</h3>
                      <p class="m-0 cs_fs_14 cs_lh_base">Digital marketing</p>
                    </div>
                  </div>
                </div>
                <div class="cs_slide">
                  <div class="cs_testimonial cs_style_1 cs_pt_20">
                    <div class="cs_testimonial_in bg-white shadow-sm cs_pl_30 cs_pr_30 cs_pb_27 cs_pt_1 cs_rounded_10">
                      <div class="cs_testimonial_img cs_mb_15"><img src="assets/img/avatar_1.png" alt="Avatar" class="cs_height_75 cs_width_75 rounded-circle"></div>
                      <div class="cs_rating text-accent cs_mb_15" data-rating="4.5">
                        <div class="cs_rating_percentage"></div>
                      </div>
                      <p class="cs_mb_14">I've been using [business name] for the past year and I'm so glad I did. Their products and services are top-notch and their customer service is amazing. I would highly recommend them to anyone</p>
                      <h3 class="cs_fs_18 cs_mb_2 cs_lh_base">Darlene Robertson</h3>
                      <p class="m-0 cs_fs_14 cs_lh_base">Web design</p>
                    </div>
                  </div>
                </div>
                <div class="cs_slide">
                  <div class="cs_testimonial cs_style_1 cs_pt_20">
                    <div class="cs_testimonial_in bg-white shadow-sm cs_pl_30 cs_pr_30 cs_pb_27 cs_pt_1 cs_rounded_10">
                      <div class="cs_testimonial_img cs_mb_15"><img src="assets/img/avatar_2.png" alt="Avatar" class="cs_height_75 cs_width_75 rounded-circle"></div>
                      <div class="cs_rating text-accent cs_mb_15" data-rating="5">
                        <div class="cs_rating_percentage"></div>
                      </div>
                      <p class="cs_mb_14">I've been using [business name] for the past year and I'm so glad I did. Their products and services are top-notch and their customer service is amazing. I would highly recommend them to anyone</p>
                      <h3 class="cs_fs_18 cs_mb_2 cs_lh_base">Carol McCarthy</h3>
                      <p class="m-0 cs_fs_14 cs_lh_base">Product manager</p>
                    </div>
                  </div>
                </div>
                <div class="cs_slide">
                  <div class="cs_testimonial cs_style_1 cs_pt_20">
                    <div class="cs_testimonial_in bg-white shadow-sm cs_pl_30 cs_pr_30 cs_pb_27 cs_pt_1 cs_rounded_10">
                      <div class="cs_testimonial_img cs_mb_15"><img src="assets/img/avatar_3.png" alt="Avatar" class="cs_height_75 cs_width_75 rounded-circle"></div>
                      <div class="cs_rating text-accent cs_mb_15" data-rating="4">
                        <div class="cs_rating_percentage"></div>
                      </div>
                      <p class="cs_mb_14">I've been using [business name] for the past year and I'm so glad I did. Their products and services are top-notch and their customer service is amazing. I would highly recommend them to anyone</p>
                      <h3 class="cs_fs_18 cs_mb_2 cs_lh_base">Peter Johnson</h3>
                      <p class="m-0 cs_fs_14 cs_lh_base">Web developer</p>
                    </div>
                  </div>
                </div>
                <div class="cs_slide">
                  <div class="cs_testimonial cs_style_1 cs_pt_20">
                    <div class="cs_testimonial_in bg-white shadow-sm cs_pl_30 cs_pr_30 cs_pb_27 cs_pt_1 cs_rounded_10">
                      <div class="cs_testimonial_img cs_mb_15"><img src="assets/img/avatar_4.png" alt="Avatar" class="cs_height_75 cs_width_75 rounded-circle"></div>
                      <div class="cs_rating text-accent cs_mb_15" data-rating="5">
                        <div class="cs_rating_percentage"></div>
                      </div>
                      <p class="cs_mb_14">I've been using [business name] for the past year and I'm so glad I did. Their products and services are top-notch and their customer service is amazing. I would highly recommend them to anyone</p>
                      <h3 class="cs_fs_18 cs_mb_2 cs_lh_base">Max Lawrence</h3>
                      <p class="m-0 cs_fs_14 cs_lh_base">Digital marketing</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Testimonial Section -->
    @endsection