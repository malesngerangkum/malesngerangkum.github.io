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
                    @include('layouts.header')

				<!-- Menu -->
                    @include('layouts.menu')

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>Hi, kamu males ngerangkum?</h1>
							</header>
							<div class="content">
								<p>Kita punya rangkuman nih buat kamu yang besok ulangan!</p>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one" class="tiles">
								<article style="width:50%;">
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="src/kurikulum-nasional.html" class="link">Kurikulum Nasional</a></h3>
									</header>
								</article>
								<article style="width:50%;">
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="src/kurikulum-cambridge.html" class="link">Cambridge IGCSE & A level</a></h3>
									</header>
								</article>
							</section>

						<!-- Two -->
							<section id="two">
								<div class="inner">
									<header class="major">
										<h2>Tentang Kami.</h2>
									</header>
                                    <p>Males ngerangkum adalah website yang dibangun oleh dua anggota Tim Olimpiade Kharisma Bangsa bidang Informatika yang sangat gabut. 
                                    Website ini didirikan dengan tujuan membantu orang orang yang males ngerangkum atau orang orang yang lagi butuh rangkuman untuk 
                                    mendapatkan rangkuman dengan mudah. Semoga website ini dapat membantu kalian ya...</p>
									<ul class="actions">
										<li><a href="/tentang-kami" class="button next">Lebih banyak</a></li>
									</ul>
								</div>
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
</html>	
