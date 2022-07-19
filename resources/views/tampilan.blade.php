@extends('layouts.app')
@section('content')

<div class="wrapper">
        <!-- Bagian Home -->
        <section id="home">
            <img src="{{asset('asset/bg.png')}}" class="imgprofile"></img>
            <div class="kolom">
                <p class="deskripsi"> Keep Your Pet Happy </p>
                <h2> The Best Cualified Pet Sitting Service You'll Love</h2>
                <p>Pityful a rethoric quetion ran over her cheek, then she continued her way. On her way she meet a copy. 
                    I should be incapable of drawing a single stroke at the present moment.</p>
            </div>
        </section>
       
        <section id="Blog">           
             <!-- Bagian Blog -->
            <div class="container">
                <h1>OUR BLOG</h1>
                <div class="blogs__container">
                    <a href="#/" class="post">
                        <img src="{{asset('asset/blog1.jpg')}}" class="imgprofile"></img>
                        <small>17 Oct 2022</small>
                        <h2>Features of Cats in Islam </h2>
                        <p class="description">  The privilage of cats in Islam one of the animals that is special in Islam is the cat.</p>
                        <div class="more">
                            <p>Read</p>
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </div>
                    </a>
                    <a href="#/" class="post">
                        <img src="{{asset('asset/blog2.jpg')}}" class="imgprofile"></img>
                        <small>Yesterday, By Lintang Fadhil</small>
                        <h2> Interasting Facts About Ragdoll </h2>
                        <p class="description">The Ragdoll is a cat breed with a color point coat and blue eyes. 
                            Its form is large and muscular.</p>
                        <div class="more">
                            <p>Read</p>
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </div>
                    </a>
                </div>
            </div>
           
            <div class="container">
                <div class="blogs__container">
                    <a href="#/" class="post">
                        <img src="{{asset('asset/blog3.jpg')}}" class="imgprofile"></img>
                        <small>By Radea A.</small>
                        <h2> Fluffy Dog Breeds Training</h2>
                        <p class="description">  Pomeranians are one of the more popular fluffy dog breeds out there. </p>
                        <div class="more">
                            <p>Read</p>
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </div>
                    </a>
                    <a href="#/" class="post">
                        <img src="{{asset('asset/blog4.jpeg')}}" class="imgprofile"></img>
                        <small>5h Ago</small>
                        <h2> British Short Hair </h2>
                        <p class="description"> The British Shorthair is the pedigreed version of the tradisional British domestic cat with familiar colour solid grey-blue.</p> 
                
                        <div class="more">
                            <p>Read</p>
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </div>
                    </a>
                    <a href="#/" class="post">
                        <img src="{{asset('asset/blog5.jpeg')}}" class="imgprofile"></img>
                        <small>15 Apr</small>
                        <h2> Bulldogs Are Dangerously </h2>
                        <p class="description"> For bully-lovers, the results are harrowing: Researchers found that little </p>
                        <div class="more">
                            <p>Read</p>
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </div>
                    </a>
                </div>
            </div>
              
            <!-- Bagian Pagination -->
            <div class="pagination">
                <li class="page-item previous-page disable"><a class="page-link" href="#">Prev</a></li>
                <li class="page-item current-page active"><a class="page-link" href="#">1</a></li>
                <li class="page-item dots"><a class="page-link" href="#">...</a></li>
                <li class="page-item current-page"><a class="page-link" href="#">5</a></li>
                <li class="page-item current-page"><a class="page-link" href="#">6</a></li>
                <li class="page-item dots"><a class="page-link" href="#">...</a></li>
                <li class="page-item current-page"><a class="page-link" href="#">10</a></li>
                <li class="page-item next-page"><a class="page-link" href="#">Next</a></li>
            </div>
        </section>

        <!-- Bagian Post-->
        <section id="Profile">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">My Profile</p>
                    <h2>Hello...</h2>
                </div>

                <div class="profile-list">
                    <div class="kartu-profile">
                        <img src="{{asset('asset/profile.jpeg')}}" class="imgprofile"></img>
                        <p>Im, Dinda Julia Puja Anjani</p>
                        <h2> 202010370311014 </h2>
                        <h3> Selamat datang di halaman website saya. Saya kuliah di Universitas Muhammadiyah Malang Prodi Informatika. 
                            Salam kenal :)</h3>
                    </div>   
                </div>
            </div>
        </section>

        <!-- Bagian About Us -->
        <section id="About us">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">About Us</p>
                    <h2>Accounts</h2>
                    <p>Sign in with Other Accounts</p>
                </div>

                <div class="account-list">
                    <div class="kartu-account">
                        <img src="https://cdn-icons-png.flaticon.com/128/841/841370.png?ga=GA1.2.16760495.1649697181"/>
                    </div>
                    <div class="kartu-account">
                        <img src="https://cdn-icons-png.flaticon.com/128/1216/1216706.png?ga=GA1.2.16760495.1649697181"/>
                    </div>
                    <div class="kartu-account">
                        <img src="https://cdn-icons-png.flaticon.com/128/179/179345.png?ga=GA1.2.16760495.1649697181"/>
                    </div>
                </div>
            </div>     
        </section>
    </div>

    @endsection