@extends('layouts.app')
@section('content')
<div class="image">
    <div class="absolute-text-position">
        <div class="">
            <h1>SVEIKATOS PRIEŽIŪROS CENTRAS</h1>
            <div class="container-fluid" id="header-text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus aliquet ultricies lacus, non convallis dolor volutpat eu. 
            Etiam convallis, nunc quis rhoncus rhoncus, mi nibh vestibulum metus, nec ornare quam sapien et ligula. 
            In rutrum et dolor id porta.</p>
            <div class="header-buttons">
                <button>SKAITYTI DAUGIAU</button>
                <button>SUSISIEKIME</button>
            </div>
        </div>
    </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-between">
    {{-- <div class="wlcome-header"> --}}
        <div class="col col-3" style="padding-top: 75px; padding-bottom: 50px;">    
            <h3>SVEIKI ATVYKĘ Į SVEIKATOS PRIEŽIŪROS CENTRĄ</h3>
            {{-- <img src="images/line-break.png" alt="" style="width: ;"> --}}
            <img src="images/line-line.png" alt="" style="max-width: 100%; width: 255px;">
        </div>
    {{-- </div> --}}
    {{-- <div class="welcome-content"> --}}
        <div class="col col-8" style="padding-top: 70px;">
            <p style="line-height: 2.0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed felis ligula. 
            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
            Morbi vel venenatis ante. Fusce semper, lacus eu molestie vehicula, dolor nunc varius mi, 
            eu rhoncus mauris dolor sed risus. Maecenas maximus vitae erat sit amet pellentesque. 
            Fusce lacus dui, consequat vel dolor lobortis, maximus rutrum purus. 
            Maecenas tempus ex quis commodo pretium. Vestibulum in imperdiet lorem. 
            Donec facilisis nec nisi sed ornare.</p>
        </div>
    {{-- </div> --}}
    </div>

    <div class="row">
        <div class="col">
            <div class="first-col">
                <img src="images/emergency.png" alt="" style="max-width: 100%; width: 55px; height: 85px;  padding: 10px 0px 10px 0px;">
                <h3>SKUBŪS ATVEJAI</h3>
                    <div class="asd" style="background-image: linear-gradient(to bottom, rgba(255,0,0,1), rgba(255,0,0,1)); z-index-1;">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed felis ligula. 
                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                        Morbi vel venenatis ante.</p>
                        <a href="#">SKAITYTI DAUGIAU</a> <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
            </div>
        </div>
        <div class="col">
            <div class="second-col">
                <img src="images/medical-kit.png" alt="" style="max-width: 100%; width: 55px; padding: 15px 0px 15px 0px;">
                {{-- <h3>INTENSYVI PRIEZIURA</h3> --}}
                <h3>PRIEŽIŪRA</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed felis ligula. 
                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                Morbi vel venenatis ante.</p>
                <a href="#">SKAITYTI DAUGIAU</a> <i class="fas fa-long-arrow-alt-right"></i>
            </div>
        </div>
        <div class="col">
            <div class="third-col"> 
                <img src="images/weapon.png" alt="" style="max-width: 100%; width: 55px; padding: 15px 0px 15px 0px;">
                {{-- <h3>NEMOKAMOS KONSULTACIJOS</h3> --}}
                <h3>KONSULTACIJOS</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed felis ligula. 
                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                Morbi vel venenatis ante.</p>
                <a href="#">SKAITYTI DAUGIAU</a> <i class="fas fa-long-arrow-alt-right"></i>
            </div>
        </div>
        <div class="col">
            <div class="fourth-col">
                <img src="images/timetable.png" alt="" style="max-width: 100%; width: 55px; padding: 15px 0px 15px 0px;">
                <h3>DARBO LAIKAS</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed felis ligula. 
                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                Morbi vel venenatis ante.</p>
                <a href="#">SKAITYTI DAUGIAU</a> <i class="fas fa-long-arrow-alt-right"></i>
            </div>
        </div>
      </div>

</div>

<div class="image-2">
    <div class="absolute-text-position-2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="beds">
                            {{-- <div style="border: 2px solid white; border-radius: 50px;"> --}}
                        <img src="images/bed.png" style="max-width: 100%; width: 60px; max-width: 100%; width: 90px; border: 2px solid white; border-radius: 50px; padding: 15px 15px 15px 15px;" alt="">     
                        {{-- </div> --}}
                        <h3><strong>2314</strong></h3>
                        <h5>LOVOS</h5>
                    </div>
                </div>
                <div class="col">
                    <div class="rooms">
                    <img src="images/bedroom.png" style="max-width: 100%; width: 90px; border: 2px solid white; border-radius: 50px; padding: 15px 15px 15px 15px;" alt="">
                    <h3><strong>1568</strong></h3>
                    <h5>KAMBARIAI</h5>
                    </div>
                </div>
                <div class="col">
                    <div class="docs">
                    <img src="images/doctor.png" style="max-width: 100%; width: 90px; border: 2px solid white; border-radius: 50px; padding: 15px 15px 15px 15px;" alt="">
                    <h3><strong>100+</strong></h3>
                    <h5>GYDYTOJAI</h5>
                    </div>
                </div>
                <div class="col">
                    <div class="awards">
                    <img src="images/cup.png" style="max-width: 100%; width: 90px; border: 2px solid white; border-radius: 50px; padding: 15px 15px 15px 15px;" alt="">
                    <h3><strong>320+</strong></h3>
                    <h5>APDOVANOJIMAI</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="services">
        <h3>MŪSŲ PASLAUGOS</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed felis ligula.</p>
        <img src="images/line-line.png" alt="" style="max-width: 100%; width: 265px;">
    </div>
        <div class="row justify-content-between">
            <div class="col-6">
                <div class="image-3">
                    <div class="absolute-text-position-3">
                        <div class="col-12">
                            <img src="images/doctor.png" alt="" style="max-width: 100%; width: 55px;">
                            <h3>KVALIFIKUOTI GYDYTOJAI</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed felis ligula. 
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                            <a href="#">ŽIŪRĖTI DETALIAU</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="image-4" id="bottom-colored-line">
                    <div class="absolute-text-position-4">
                        <div class="col-5">
                        <h4 style="padding-top: 290px;">INTENSYVIOS PRIEŽIŪROS SKYRIUS</h4>
                    </div>
                    </div> 
                    <i class="fas fa-heartbeat fa-4x" id="heart"></i>
                </div> 
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-6">
                <div class="image-5">
                    <div class="absolute-text-position-5">
                        <p>sdf</p>
                    </div>   
                </div>
            </div>
            <div class="col-6">
                <div class="image-6">
                    <div class="absolute-text-position-6">
                        <p>sdf</p>
                    </div>   
                </div>
            </div>
        </div>
</div>
@endsection
