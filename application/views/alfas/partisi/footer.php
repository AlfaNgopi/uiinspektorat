<div class="custom-footer p-5 pb-1" style="background-position: center; background-blend-mode: lighten; background-repeat: no-repeat; background-image: url('<?= base_url('asset/alfa/bannertop.jpg') ?>');">
    <div class="row">
        <div class="col-lg-4">
            <h3>Inspektorat Kabupaten Purworejo</h3>
            <p>Jln. Mayjend. Sutoyo No 59 Purworejo</p>
            <p>Telepon : (0275) 321603</p>
            <p>Email : inspektorat@purworejokab.go.id </p>
        </div>
        <div class="col-lg-4">
            <h3>Link Terkait</h3>
            <ul>
                <?php 
                foreach ($links as $link) : ?>
                    <li><a href="<?= $link['url'] ?>"><?= $link['judul'] ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="col-lg-4">
            <h3>Media Sosial</h3>
            <ul>
                //todo: add wa media link
                <li><a href="#">Whatsapp</a></li>
                <li><a href="https://www.instagram.com/inspektorat_purworejokab">Instagram</a></li>
            </ul>
        </div>
    </div>

    <hr style="border-top: 5px solid #fff;">
    <center>
        © Copyright <b><?= $identitas['nama_website'] ?> - 2025</b> <br>
        Jln. Mayjend. Sutoyo No 59 Purworejo
        <br>E-Mail: <?= $identitas['email'] ?> <br>
        Website: inspektorat.purworejokab.go.id
        <p></p>
    </center>
</div>
