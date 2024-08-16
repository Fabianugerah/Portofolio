<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Animasi -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="image/logo-circle.png">
    <script src="js/script.js"></script>
    <title>Portfolio</title>
</head>

<body>
    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand font" href="#home"><img src="{{ asset('image/logo.jpg') }}" alt="logo" width="30"
                    height="30" class="d-inline-block align-text-top rounded-circle">
                <span class=" font fw-bold">Nugrah</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-underline ms-auto mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- end navbar --}}

    {{-- home --}}
    <div id="home" class="home">
        <img src="{{ asset('image/gambar.jpg') }}" class="img-fluid mb-4 animate__animated animate__fadeInDown pembuka"
            alt="pemandangan">
        <div class="container text-center home">
            <div class="row justify-content-evenly">
                <div class="col-md-4 text-center">
                    <div class="home2">
                        <h1 class="animate__animated animate__fadeInDown animate__delay-2s">Hallo Saya Nugrah</h1>
                        <p class="animate__animated animate__fadeInLeft animate__delay-1s"><b>Saya adalah Fullstack
                                Developer </b></p>
                        <h4 class="animate__animated animate__fadeInUp animate__delay-2s">
                            <a href="https://www.facebook.com/fabian.nugrah?mibextid=ZbWKwL" target="_blank"
                                class="bi bi-facebook"></a>
                            <a href="https://www.instagram.com/fbian_nugrhx/?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D"
                                target="_blank" class="bi bi-instagram"></a>
                            <a href="#home" class="bi bi-whatsapp" onclick="alert('Hubungi No 088217418481');"></a>
                            <a href="https://github.com/Fabianugerah" target="_blank" class="bi bi-github"></a>
                        </h4>
                    </div>
                </div>
                <div class="col-md-4 text-center mb-5">
                    <img src="{{ asset('image/foto.jpg') }} "
                        class="animate__animated animate__fadeIn animate__delay-1s foto" alt="Foto Nugrah">
                </div>
            </div>
        </div>
    </div>
    {{-- end home --}}


    {{-- about --}}
    <div id="about" class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <div class="section-header text-center text-light pb-2 pt-4">
                        <h2>About</h2>
                    </div>
                </div>
            </div>
            <div id="about_me" class="row about col-12 border-bottom">
                <div class="col-md-5 img">
                    <img src="{{ asset('image/foto-2.jpg') }}" class="rounded img-fluid" alt="foto-saya">
                </div>
                <div class="col-md-7 text-light ms-4">
                    <h3>About Me</h3>
                    <p>Hiii, Saya adalah junior Web Developer yang bedomisili di Pandaan dan sekarang sedang bersekolah
                        di SMKN 1 Purwosari jurusan RPL.
                        Saat ini saya sedang mempelajari PHP, Database, dan Laravel di kelas XI-RPL serta saya masih
                        pemula dalam dunia Web Development,
                        karena itu saya tidak akan pernah berhenti belajar.
                        Serta saya ingin menguasai banyak bahasa Pemrograman seperti HTML, CSS, Javascript, PHP, dan
                        Database sebagai penampung data.
                        <br> <span class="text-warning fw-bold">- Nugrah 2024</span>
                    </p>
                </div>
            </div>

            <!-- Hobby -->
            <div id="hobby">
                <div class="card-group">
                    <div class="col-md-12">
                        <div class="section-header text-center text-light">
                            <h4><span class="hobi">My Hoby</span></h4>
                        </div>
                    </div>
                    <div class="card pb-4 rounded-start">
                        <img src="{{ asset('image/musik.jpg') }}" class="card-img-top" alt="Musik">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Mendengarkan Musik</h5>
                            <p class="card-text">Saya suka mendengarkan musik karna musik itu membuat saya
                                tenang saat lagi banyak pikiran dan tugas.</p>
                        </div>
                    </div>
                    <div class="card pb-4 ">
                        <img src="{{ asset('image/film.jpg') }}" class="card-img-top" alt="Film">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Menonton Film</h5>
                            <p class="card-text">Karna menonton film saya bisa mendapatkan wawasan atau makna
                                dari sebuah film.</p>
                        </div>
                    </div>
                    <div class="card pb-4">
                        <img src="{{ asset('image/game.jpg') }}" class="card-img-top" alt="Game">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Bermain Game</h5>
                            <p class="card-text">Saya bermain game saat waktu senggang karna juga game untuk
                                refreshing.</p>
                        </div>
                    </div>
                </div>
            </div>
                    <!-- Skill -->
                    <div id="skill" class="skill text-light border-bottom p-4">
                        <h3 class="col-12 text-light mt-4 mb-4">Skill</h3>

                        <h5><img src="{{ asset('image/html.png') }}" alt="logo" width="30" height="30"
                                class="d-inline-block align-text-top me-1">HTML</h5>
                        <div class="progress mb-2" role="progressbar" aria-label="Basic example" aria-valuenow="90"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 90%">90%</div>
                        </div>
                        <h5><img src="{{ asset('image/css.png') }}" alt="logo" width="30" height="30"
                                class="d-inline-block align-text-top me-1">CSS</h5>
                        <div class="progress mb-2" role="progressbar" aria-label="Basic example" aria-valuenow="80"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 80%">80%</div>
                        </div>
                        <h5><img src="{{ asset('image/js.png') }}" alt="logo" width="30" height="30"
                                class="d-inline-block align-text-top me-1">Javascript</h5>
                        <div class="progress mb-2" role="progressbar" aria-label="Basic example" aria-valuenow="60"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 60%">60%</div>
                        </div>
                        <h5><img src="{{ asset('image/php.png') }}" alt="logo" width="30" height="30"
                                class="d-inline-block align-text-top me-1">PHP</h5>
                        <div class="progress mb-2" role="progressbar" aria-label="Basic example" aria-valuenow="20"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 20%">20%</div>
                        </div>
                        <h5><img src="{{ asset('image/github.png') }}" alt="logo" width="30" height="30"
                                class="d-inline-block align-text-top me-1">Github</h5>
                        <div class="progress mb-2" role="progressbar" aria-label="Basic example" aria-valuenow="60"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 60%">60%</div>
                        </div>
                    </div>

                    <!-- Project -->
            <div id="project" class="container mt-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <div class="section-header text-light pt-4">
                                <h3><span class="project">My Project</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-6">
                            <div class="card bg-white pb-2">
                                <div class="card-body text-dark">
                                    <div class="img-area mb-4">
                                        <img src="image/ethic.jpg" alt="Ethic-project" class="img-fluid" />
                                    </div>
                                    <h4 class="card-title fw-bold">Project Pertama Ethic</h4>
                                    <p class="lead">
                                        Project ini adalah project pertama kali tentang pengenalan HTML dan projectnya
                                        membuat
                                        portofolio tentang identitas diri.
                                    </p>
                                    <a href="https://fabianugerah.github.io/Tugas-Akhir-Ethic/" target="_blank"><button
                                            class="btn fw-bold tombol" >View More</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6">
                            <div class="card bg-white pb-2">
                                <div class="card-body text-dark">
                                    <div class="img-area mb-4">
                                        <img src="image/bootstrap.jpg" alt="Bootstrap-Project" class="img-fluid" />
                                    </div>
                                    <h4 class="card-title fw-bold">Project Bootstrap</h4>
                                    <p class="lead">
                                        Project Bootstrap membuat website pemesanan tiket travel dengan menggunakan
                                        Framework Bootstrap dan menerapkan Web Responsif.
                                    </p>
                                    <a href="https://fabianugerah.github.io/YukTravel-Bootstrap/" target="_blank"><button
                                            class="btn fw-bold tombol">View More</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6">
                            <div class="card bg-white pb-2">
                                <div class="card-body text-dark">
                                    <div class="img-area mb-4">
                                        <img src="image/spacond.jpg" alt="Spacond_Store" class="img-fluid" />
                                    </div>
                                    <h4 class="card-title fw-bold">Spacond Store</h4>
                                    <p class="lead">
                                        Project Tugas Akhir kelas X RPL yang membuat website e-commerce tentang
                                        penjualan sepatu bekas dan ada halaman pemesanan serta pilihan sepatu.
                                    </p>
                                    <a href="https://fabianugerah.github.io/Tugas-Akhir-X-RPL/" target="_blank"><button
                                            class="btn fw-bold tombol">View More</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6">
                            <div class="card bg-white pb-2">
                                <div class="card-body text-dark">
                                    <div class="img-area mb-4">
                                        <img src="image/pkk.jpg" alt="Javascript_Validasi" class="img-fluid" />
                                    </div>
                                    <h4 class="card-title fw-bold">JavaScript Validasi</h4>
                                    <p class="lead">
                                        Tugas membuat Validasi Form tentang Pendaftaran Ethic yang mengaplikasikan
                                        fungsi validasi untuk melihat data yang diinput benar atau salah.
                                    </p>
                                    <a href="https://fabianugerah.github.io/PKK_Javascript/" target="_blank"><button
                                            class="btn fw-bold tombol">View More</button></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
      </div>
    </div>
    {{-- end about --}}
    {{-- Contact --}}
    <section id="contact" class="contact section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-2 pt-4">
                        <h2>Contact Me</h2>
                    </div>
                </div>
            </div>
            <div class="row m-0">
                <div class="col-md-12 p-0 pt-4 pb-4">
                    <form action="#" name="formku" onsubmit="return validasi()" class="text-light p-4 m-auto">
                        <div class="row">
                            <!-- Nama -->
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <input type="text" name="teks" id="teks" class="form-control" required
                                        placeholder="Masukkan nama" />
                                </div>
                            </div>
                            <!-- Email -->
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <input type="email" name="email" id="email" class="form-control" required
                                        placeholder="Masukkan email" />
                                </div>
                            </div>
                            <!-- Pesan -->
                            <label for="exampleFormControlInput1" class="form-label">Pertanyaan</label>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <textarea rows="3" required class="form-control"
                                        placeholder="Ketikkan pesan"></textarea>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-block mt-2" value="Kirim" onclick="validasi()">
                                Kirim
                            </button>
                            <input type="reset" class="btn btn-block mt-2" name="reset" value="Reset">
                            </input>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    {{-- Contact end --}}

    {{-- Footer --}}
    <footer id="footer" class="bg-dark text-white pt-5 gb-4">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">

                <!-- Halaman -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-info">
                        Halaman
                    </h5>
                    <p>
                        <a href="#home" class="text-white text-decoration-none">Home</a>
                    </p>
                    <p>
                        <a href="#about" class="text-white text-decoration-none">About</a>
                    </p>
                    <p>
                        <a href="#contact" class="text-white text-decoration-none">Contact</a>
                    </p>
                </div>

                <!-- Produk -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-info">
                        Menu
                    </h5>
                    <p>
                        <a href="#about_me" class="text-white text-decoration-none">About Me</a>
                    </p>
                    <p>
                        <a href="#hobby" class="text-white text-decoration-none">Hoby</a>
                    </p>
                    <p>
                        <a href="#skill" class="text-white text-decoration-none">Skill</a>
                    </p>
                    <p>
                        <a href="#project" class="text-white text-decoration-none">Project</a>
                    </p>
                    
                    
                </div>

                <!-- Contact -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-info">
                        Location
                    </h5>
                    <p>
                        <i class="bi bi-geo-alt m-1"></i>Kutorejo Pandaan, Pasuruan - Jawa Timur
                    </p>
                    <p><i class="bi bi-envelope m-1"></i>fabianugerah@gmail.com</p>
                    <p><i class="bi bi-instagram m-1"></i>@fbian_nugrhx</p>
                </div>
            </div>
            <hr class="mb-4" />
            <div class="row align-items-center">
                <div class="col-md-7 col-lg-8">
                    <p>
                        &copy; Copyright all right Reserved by :
                        <a href="#home" style="text-decoration: none">
                            <strong class="text-light">Nugrah X GreXX</strong>
                        </a>
                    </p>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="text-center text-md-right">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a href="https://github.com/Fabianugerah" class="btn-floating btn-sm text-white"
                                    style="font-size: 23px"><i class="bi bi-github"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/fbian_nugrhx/?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D"
                                    target="_blank" class="btn-floating btn-sm text-white" style="font-size: 23px"><i
                                        class="bi bi-instagram"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/fabian.nugrah?mibextid=ZbWKwL" target="_blank"
                                    class="btn-floating btn-sm text-white" style="font-size: 23px"><i
                                        class="bi bi-facebook"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    {{-- Footer end --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>