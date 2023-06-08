<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url('Home'); ?>">
            <img src="<?= base_url() ?>/assets/image/ppdb.png" style="width: 40px; height: 40px; margin-right: 10px">
            <b>PPDB SMP KP 2 MAJALAYA</b>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?= $currentLink == ('Home') ? 'active' : '' ?>" href=" <?= base_url('Home'); ?>"><?= $currentLink == ('Home') ? '<b>' : '' ?>Data Siswa<?= '</b>' ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $currentLink == ('tabel-keseluruhan') ? 'active' : '' ?>" aria-current="page" href="<?= base_url('tabel-keseluruhan') ?>"><?= $currentLink == ('tabel-keseluruhan') ? '<b>' : '' ?>Tabel Keseluruhan<?= '</b>' ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $currentLink == ('tabel-informasi') ? 'active' : '' ?>" aria-current="page" href="<?= base_url('tabel-informasi') ?>"><?= $currentLink == ('tabel-informasi') ? '<b>' : '' ?>Informasi<?= '</b>' ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $currentLink == ('tabel-report') ? 'active' : '' ?>" aria-current="page" href="<?= base_url('tabel-report') ?>"><?= $currentLink == ('tabel-report') ? '<b>' : '' ?>Report<?= '</b>' ?></a>
                </li>
            </ul>
        </div>
    </div>
</nav>