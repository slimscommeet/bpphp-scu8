////Nama perpustakaan
<?php echo $sysconf['library_name']; ?>	

///Sub nama perpustakaan
<?php echo $sysconf['library_subname']; ?>

///Lokasi Gambar
<img src="<?php echo CURRENT_TEMPLATE_DIR; ?>img/about.jpg" class="img-responsive" alt=""/>

//Search Box
<form action="" method="get" class="search form" role="search">
    <div class="input-group">
        <input type="text" placeholder="<?php echo __('Ketik lah : kata kunci , judul atau pengarang di kotak ini dan enter'); ?>" class="s-search form-control" id="keyword" name="keywords" value="" lang="<?php echo $sysconf['default_lang']; ?>" aria-hidden="true" autocomplete="off">
        <span class="input-group-btn">
            <button type="submit" name="search" value="search" class="btn btn-default primary-btn" type="button"> <i class="fa fa-search"></i> </button>
        </span>
    </div><!-- /input-group -->
  </div><!-- /head-bar -->
</form>


///Beberapa Link Menu

<li><a href="index.php">Beranda</a></li>

<li><a href="index.php?p=member">Login Anggota</a></li>

<li><a href="index.php?p=login">Login Pustakawan</a></li>

<li><a href="index.php?p=visitor">Buku Kunjungan</a></li>

<li><a href="index.php?p=libinfo">Info Perpustakaan</a></li>

<li><a href="index.php?p=news">Warta Perpustakaan</a></li>