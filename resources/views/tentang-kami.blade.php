<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
        @include('layouts.head')
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<!-- Note: The "styleN" class below should match that of the banner element. -->
					<header id="header" class="alt style2">
						<a href="" class="logo"><strong>Males</strong> <span>Ngerangkum</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
                    @include('layouts.menu')

				<!-- Banner -->
				<!-- Note: The "styleN" class below should match that of the header element. -->
					<section id="banner" class="style2">
						<div class="inner">
							<span class="image">
								<img src="images/pic07.jpg" alt="" />
							</span>
							<header class="major">
								<h1>Tentang Kami</h1>
							</header>
							<div class="content">
                                <p>Males ngerangkum adalah website yang dibangun oleh dua anggota Tim Olimpiade Kharisma Bangsa bidang Informatika yang sangat gabut. 
                                   Website ini didirikan dengan tujuan membantu orang orang yang males ngerangkum atau orang orang yang lagi butuh rangkuman untuk 
                                   mendapatkan rangkuman dengan mudah. Semoga website ini dapat membantu kalian ya...</p>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="two" class="spotlights">
								<section>
									<a href="generic.html" class="image">
										<img src="{{ URL('storage/images/contributor/Muhamad-Nabil-Alhanif.jpeg') }}" alt="" data-position="center center" />
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Muhamad Nabil Alhanif - Co-Founder</h3>
											</header>
											<p>Muhammad Nabil Alhanif adalah siswa Kharisma Bangsa yang saat ini menduduki bangku kelas 10. Ia merupakan anggota Tim Olimpiade Sekolah Kharisma Bangsa.</p>
											<ul class="actions">
												<li><a href="generic.html" class="button next">Lebih banyak</a></li>
											</ul>
										</div>
									</div>
								</section>
								<section>
									<a href="generic.html" class="image">
										<img src="{{ URL('storage/images/contributor/Shielda-Kamilia-Hidajat.jpeg') }}" alt="" data-position="top center" />
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Shielda Kamilia Hidajat - Co-Founder</h3>
											</header>
											<p>Shielda Kamilia Hidajat adalah siswa Kharisma Bangsa yang saat ini menduduki bangku kelas 11. Ia merupakan anggota Tim Olimpiade Sekolah Kharisma Bangsa.</p>
											<ul class="actions">
												<li><a href="generic.html" class="button next">Lebih banyak</a></li>
											</ul>
										</div>
									</div>
								</section>
							</section>

					</div>

				<!-- Contact -->
                    @include('layouts.contact')

				<!-- Footer -->
                    @include('layouts.footer')

			</div>

		<!-- Scripts -->
            @include('layouts.scripts')

	</body>
</html>"
