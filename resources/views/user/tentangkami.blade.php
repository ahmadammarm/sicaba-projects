@extends('layouts.master')


@section('menuAbout', 'active')
@section('content')
    {{-- Konten START --}}
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('pacific/img/ftmakanan26.png');">
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href={{url("/")}}>Beranda<i
                                class="fa fa-chevron-right"></i></a></span> <span>Tentang Kami<i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Tentang Kami</h1>
                </div>
            </div>
        </div>
    </section>
    {{-- Konten START --}}
    {{-- Paket Makanan START --}}
    <section class="ftco-section services-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
                    <div class="w-100">
                        <span class="subheading">Katering Bu Aini</span>
                        <h2 class="mb-4">
                            Pesan paket katering anda mulai sekarang</h2>
                        <p>Biarkan kami mengurus segalanya! Dari persiapan hingga pembersihan, kami hadir untuk membuat
                            acara Anda lebih lancar dan lebih berkesan.
                            Percayakan kepada kami untuk menyajikan hidangan terbaik bagi Anda dan tamu-tamu Anda.</p>
                        <p>Kami akan memastikan setiap detail terpenuhi dengan sempurna. Nikmati momen tanpa stres dan
                            biarkan kami
                            menciptakan pengalaman tak terlupakan bagi Anda dan para tamu. Percayakan
                            kepada kami untuk memberikan layanan katering terbaik yang akan membuat setiap orang puas dan
                            ingin kembali lagi untuk acara berikutnya.
                        </p>
                        <p><a href={{url("paketmakanan")}} class="btn btn-primary py-3 px-4">Pesan Sekarang</a></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1  d-block img"
                                style="background-image: url('pacific/img/ftmakanan1.png');">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-paragliding"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Paket Ulang Tahun</h3>
                                    <p>Siap menemani acara ulang tahun Anda</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1  d-block img"
                                style="background-image: url('pacific/img/ftmakanan2.png');">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-route"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Paket Nasi Kuning</h3>
                                    <p>Siap menemani acara hajatan Anda</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1  d-block img"
                                style="background-image: url('pacific/img/ftmakanan27.png');">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-tour-guide"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Paket Nasi Ayam</h3>
                                    <p>Siap menemani acara gathering Anda</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1  d-block img"
                                style="background-image: url('pacific/img/ftmakanan28.png');">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-map"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Paket Nasi Kotak</h3>
                                    <p>Siap menemani acara meeting Anda</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Paket Makanan END --}}


    {{-- Video START --}}
    <section class="ftco-section ftco-about img"style="background-image: url('pacific/img/ftmakanan23.png');">
        <div class="overlay"></div>
        <div class="container py-md-5">
            <div class="row py-md-5">
                <div class="col-md d-flex align-items-center justify-content-center">
                    <a href="https://vimeo.com/45830194"
                        class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
                        <span class="fa fa-play"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- Video END --}}

    {{-- Tentang Kami START --}}
    <section class="ftco-section ftco-about ftco-no-pt img">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 about-intro">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="img d-flex w-100 align-items-center justify-content-center"
                                style="background-image:url('pacific/img/ftmakanan24.png');">
                            </div>
                        </div>
                        <div class="col-md-6 pl-md-5 py-5">
                            <div class="row justify-content-start pb-3">
                                <div class="col-md-12 heading-section ftco-animate">
                                    <span class="subheading">Tentang Kami</span>
                                    <h2 class="mb-4">Kami Ada Untuk
                                        Berbagai Kebutuhan
                                        Acara Anda</h2>
                                    <p>Dengan menu yang beragam dan inovatif, serta layanan yang
                                        terbaik dari awal hingga akhir acara, kami bertekad untuk memenuhi
                                        segala kebutuhan dan keinginan Anda. Jadikan kami bagian dari momen berharga Anda,
                                        dan biarkan kami menghidupkan setiap acara dengan citarasa dan pelayanan yang luar
                                        biasa.</p>
                                    <p><a href={{url("paketmakanan")}} class="btn btn-primary">Lihat Paket Menu</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Tentang Kami END --}}

    {{-- Icon START --}}
    <section class="ftco-section ftco-no-pb contact-section mb-4">
        <div class="container">
            <div class="row d-flex contact-info">
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <h3 class="mb-2">Address</h3>
                        <p>Jombang Street II Number 19, Malang</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-phone"></span>
                        </div>
                        <h3 class="mb-2">Contact Number</h3>
                        <p><a href="tel://1234567920">+ 62 812 1795 2403</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-paper-plane"></span>
                        </div>
                        <h3 class="mb-2">Email Address</h3>
                        <p><a href="mailto:info@yoursite.com">sicaba@gmail.com</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-globe"></span>
                        </div>
                        <h3 class="mb-2">Website</h3>
                        <p><a href="#">sicaba.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Icon END --}}
    {{-- Form Kami START --}}
    <section class="ftco-section contact-section ftco-no-pt">
        <div class="container">
            <div class="row block-9">
                <div class="col-md-6 order-md-last d-flex">
                    <form action="#" class="bg-light p-5 contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nama Anda">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email Anda">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subyek">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Saran yang ingin Disampaikan"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Kirim Saran" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>

                <div class="col-md-6 d-flex">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.320938720894!2d112.61219187372875!3d-7.965746679390219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7882813a6831a1%3A0xc740a307f708f073!2sJl.%20Jombang%20II%20No.19%2C%20Sumberjo%2C%20Gading%20Kasri%2C%20Kec.%20Klojen%2C%20Kota%20Malang%2C%20Jawa%20Timur%2065115!5e0!3m2!1sen!2sid!4v1710664379515!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    {{-- Form Kami END  --}}
    {{-- menu pesanan custom START --}}
    <section class="ftco-intro  ftco-no-pt mt-5">
        <div class="row justify-content-center mt-5">
            <div class="col-md-12 text-center">
                <div class="img" style="background-image: url('pacific/img/ftmakanan23.png');">
                    {{-- <div class="overlay"></div> --}}
                    <h2>MAU PESAN SESUAI KEINGINAN?</h2>
                    <p>Kami dapat menyesuaikan pesanan dengan keinginan anda</p>
                    <p class="mb-0"><a href={{url("troli")}} class="btn btn-primary px-4 py-3">Request pesanan</a></p>
                </div>
            </div>
        </div>
    </section>
    {{-- menu pesanan custom END --}}
@stop
