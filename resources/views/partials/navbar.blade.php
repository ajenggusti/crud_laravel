<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid">
      <a class="navbar-brand" style="margin-left: 80px" href="/">Simple Siakad</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav" style="margin-left: 850px">
          <li class="nav-item">
            <a class="nav-link  {{ ($judul === "Tampil") ? 'active' : ''}}"  href="/">Data Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($judul === "Form") ? 'active' : ''}}" href="/input">Input Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($judul === "About Me") ? 'active' : ''}}" href="/about">About me</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>