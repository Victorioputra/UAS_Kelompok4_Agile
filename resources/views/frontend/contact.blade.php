@extends('frontend.inc.main')
@section('title')
    <title>Augustine Prevost Hotel | KONTAK KAMI</title>
@endsection

@section('content')
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center" data-aos="fade-down">CONTACT US</h2>
    </div>

    <div class="container mb-5">
        <div style="margin-bottom:140px" class="bg-white rounded shadow p-4" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-8 col-md-6 mb-5 px-4" data-aos="fade-right">
                        <iframe class="w-100 rounded" height="320px"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3817.9041843622645!2d12.453632403881565!3d41.902860688714945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f6061b7149b59%3A0x724bf077cd875283!2sBasilika%20Santo%20Petrus!5e1!3m2!1sid!2sid!4v1749716512377!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
                    </div>

                    <div class="col-lg-4" data-aos="fade-left">
                        <h5>Address</h5>
                        <a href="https://goo.gl/maps/jy8CDHNPpsyBHVHYA" target="_blank"
                            class="d-inline-block text-decoration-none text-dark mb-2 contact-link">
                            <i class="bi bi-geo-alt-fill"></i> Augustine Prevost Hotel
                        </a>
                        
                        <h5 class="mt-4">Call us</h5>
                        <a href="tel:+6285555555555" class="d-inline-block mb-2 text-decoration-none text-dark contact-link"><i
                                class="bi bi-telephone-fill"></i> +62 855-5555-5555</a>
                        <br>
                        <a href="tel:+6281111111111" class="d-inline-block mb-2 text-decoration-none text-dark contact-link"><i
                                class="bi bi-telephone-fill"></i> +62 844-4444-4444</a>
                        
                        <h5 class="mt-4">Email</h5>
                        <a href="mailto:kelompok4@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark contact-link"><i
                                class="bi bi-envelope-fill"></i> kelompok4@gmail.com</a>

                        <h5 class="mt-4">Follow us</h5>
                        <a href="#" class="d-inline-block text-dark fs-5 me-2 social-icon">
                            <i class="bi bi-twitter me-1"></i>
                        </a>
                        <a href="#" class="d-inline-block text-dark fs-5 me-2 social-icon">
                            <i class="bi bi-facebook me-1"></i>
                        </a>
                        <a href="#" class="d-inline-block text-dark fs-5 social-icon">
                            <i class="bi bi-instagram me-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection