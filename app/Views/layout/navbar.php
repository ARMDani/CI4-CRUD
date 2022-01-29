<!-- ini adalah navbar dari freamwork bootstrap v4.5 -->
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">SukaBaca</a>

        <nav class="navbar navbar-light" style="background-color: #e3f2fd;"> -->
<!-- catatan kalau misalnya kita menggunakan local development serve atau php spark serve
                    harus menggunakan / saja di hrefnya karena kita setting sendiri routsnya, tetapi klw aksesnya lewat xampp harus tambahkan baseurl
                     -->
<!-- <a class="nav-link active" href="/">Home </a>
            <a class="nav-link" href="/Chok/about">About</a>
            <a class="nav-link" href="/Chok/contact">Contact</a>
            <a class="nav-link" href="/buku/">Buku</a>
    </div>
    </div>
    </div>
</nav> -->


<!-- ini adalah contoh navbar -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #02c6c6">
    <div class="container">
        <a class="navbar-brand" href="#">SukaBaca</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Chok/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Chok/contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/buku/">Buku</a>
                </li>
            </ul>
        </div>
    </div>
</nav>