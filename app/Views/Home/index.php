<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootsrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- css pribadi -->
    <link rel="stylesheet" href="/Asset/Css/style.css">
    <title>AG Coffee</title>
</head>

<body>
    <!-- Navbar -->
    <div id="navbar" class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#">AG Coffee</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="#about">About</a>
                        <a class="nav-link" href="#produk">Produk</a>
                        <a class="nav-link" href="#kontak">Contact</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- end navbar -->

    <!-- Profile -->
    <section class="jumbotron text-center">
        <img src="/Asset/Img/profile-icon.png" width="200" class="rounded-circle img-thumbnail">
        <h1 class="display-4">Asep Gilang</h1>
        <p class="lead">Informatic Engineering | Mercubuana University</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,288L120,277.3C240,267,480,245,720,245.3C960,245,1200,267,1320,277.3L1440,288L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
        </svg>
    </section>
    <!-- end Profile -->

    <!-- About -->
    <section id="about">
        <div class="container pt-3">
            <div class="row">
                <div class="col text-center mb-3">
                    <h2>About Us</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-5">
                <div class="col-md-4 mb-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, quibusdam nulla! Veniam provident illo ex exercitationem accusamus doloremque voluptate nihil dignissimos? Amet provident minus eveniet exercitationem quibusdam labore asperiores repudiandae!</p>
                </div>
                <div class="col-md-4 mb-3">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur doloribus aliquam dolorem veniam placeat nihil incidunt fugit laboriosam expedita illum exercitationem, quisquam rem quas reiciendis voluptatum. Quo, laudantium suscipit? Odit.</p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#6f4e37" fill-opacity="0.5" d="M0,256L120,256C240,256,480,256,720,240C960,224,1200,192,1320,176L1440,160L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
        </svg>
    </section>
    <!-- end About -->

    <!-- Produk -->
    <section id="produk">
        <div class="container pt-4">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>Produk Kami</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="/Asset/Img/1.jpg" class="card-img-top" alt="Kopi">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="/Asset/Img/2.jpg" class="card-img-top" alt="Biji Kopi">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="/Asset/Img/3.jpg" class="card-img-top" alt="Proses">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,160L120,165.3C240,171,480,181,720,181.3C960,181,1200,171,1320,165.3L1440,160L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
        </svg>
    </section>
    <!-- end Karya -->

    <!-- Kontak -->
    <section id="kontak">
        <div class="container pt-3">
            <div class="row text-center mb-3">
                <h2>Hubungi Kami</h2>
            </div>
            <div class="row justify-content-center mb-3">

                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show alert-kirim d-none" role="alert">
                        <strong>Terima Kasih</strong> Pesan telah dikirim.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <form name="kirim-pesan">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" aria-describedby="nama" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
                        </div>
                        <button type="submit" class="btn text-white btn-send">Kirim</button>

                        <button style="background-color: #6f4e37;" class="btn text-white btn-loading d-none" type="button" disabled>
                            <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                            Loading...
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end Kontak -->

    <!-- Footer -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#6f4e37" fill-opacity="1" d="M0,256L120,256C240,256,480,256,720,266.7C960,277,1200,299,1320,309.3L1440,320L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
    </svg>
    <footer class="text-center text-white pb-2">
        <p>&copy; Muhammad Gilang & Asep Andi</p>
    </footer>
    <!-- end Footer -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbznuezmRu4TVoK3jEPQTl0sA0-rEQ_LxwWzCL6MA5odqatXZF8pT9Ab0hlYUh_U9e3p/exec'
        const form = document.forms['kirim-pesan']
        const btnSend = document.querySelector('.btn-send')
        const btnLoading = document.querySelector('.btn-loading')
        const alertSukses = document.querySelector('.alert-kirim')

        form.addEventListener('submit', e => {
            e.preventDefault()

            btnLoading.classList.toggle('d-none');
            btnSend.classList.toggle('d-none');

            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form)
                })
                .then(response => {
                    btnLoading.classList.toggle('d-none');
                    btnSend.classList.toggle('d-none');
                    alertSukses.classList.toggle('d-none');
                    console.log('Success!', response);
                    form.reset()
                })
                .catch(error => console.error('Error!', error.message))
        })
    </script>

</body>

</html>