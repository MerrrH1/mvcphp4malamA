<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3><?= $data['judul']; ?></h3>

            <?php foreach ($data['mahasiswa'] as $mahasiswa) { ?>
            <ul>
                <li><?= $mahasiswa['nama']; ?></li>
                <li><?= $mahasiswa['nim']; ?></li>
                <li><?= $mahasiswa['email']; ?></li>
                <li><?= $mahasiswa['jurusan']; ?></li>
            </ul>
            <?php } ?>
        </div>
    </div>
</div>