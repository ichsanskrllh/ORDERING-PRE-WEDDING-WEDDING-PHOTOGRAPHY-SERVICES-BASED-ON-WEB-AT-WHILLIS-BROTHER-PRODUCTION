<ul class="nav navbar-nav navbar-right">
<?php   
// fungsi untuk pengecekan menu aktif
// jika menu home dipilih, menu home aktif
if ($_GET["page"]=="home") { ?>
	<li class="active">
	    <a href="home"> Beranda </a>
	</li>
<?php
}
// jika tidak, menu home tidak aktif
else { ?>
	<li>
        <a href="home"> Beranda </a>
    </li>
<?php
}

// jika menu about dipilih, menu about aktif
if ($_GET["page"]=="about") { ?>
  <li class="active">
      <a href="about"> Tentang Kami </a>
  </li>
<?php
}
// jika tidak, menu about tidak aktif
else { ?>
  <li>
        <a href="about"> Tentang Kami</a>
    </li>
<?php
}


// jika menu service dipilih, menu service aktif
if ($_GET["page"]=="service") { ?>
  <li class="active">
        <a href="service"> Jasa & Layanan </a>
    </li>
<?php
}
// jika tidak, menu service tidak aktif
else { ?>
  <li>
        <a href="service"> Jasa & Layanan </a>
    </li>
<?php
}

// jika menu portfolio dipilih, menu portfolio aktif
if ($_GET["page"]=="portfolio") { ?>
  <li class="active">
        <a href="portfolio"> Portofolio </a>
    </li>
<?php
}
// jika tidak, menu portfolio tidak aktif
else { ?>
  <li>
        <a href="portfolio"> Portofolio </a>
    </li>
<?php
}   

// jika menu contact dipilih, menu contact aktif
if ($_GET["page"]=="contact") { ?>
	<li class="active">
        <a href="contact"> Kontak </a>
    </li>
<?php
}
// jika tidak, menu contact tidak aktif
else { ?>
	<li>
        <a href="contact"> Kontak </a>
    </li>
<?php
}                      
?>
</ul>