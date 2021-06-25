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
                    @include('layouts.header')

				<!-- Menu -->
                    @include('layouts.menu')

				<!-- Banner -->
				<!-- Note: The "styleN" class below should match that of the header element. -->
                    <section id="banner">
                        <div class="inner">
                            <span class="image">
                                <img src="images/pic07.jpg" alt="" />
                            </span>
                            <header class="major">
                                <h1>Kurikulum Nasional</h1>
                            </header>
                            <div class="content">
                                <p>Kurikulum Nasional sesuai dengan Kurikulum 2013</p>
                            </div>
                    </section>

				<!-- Main -->
					<div id="main">

                        <!-- One -->
                            <section id="one" class="tiles">
                                <article>
                                    <span class="image">
                                        <img src="images/pic01.jpg" alt="" />
                                    </span>
                                    <header class="major">
                                        <h3><a href="kurikulum-nasional/pilihan-pelajaran10.html" class="link">Kelas 10</a></h3>
                                    </header>
                                </article>
                                <article>
                                    <span class="image">
                                        <img src="images/pic02.jpg" alt="" />
                                    </span>
                                    <header class="major">
                                        <h3><a href="kurikulum-nasional/pilihan-pelajaran11.html" class="link">Kelas 11</a></h3>
                                    </header>
                                </article>
                                <article>
                                    <span class="image">
                                        <img src="images/pic03.jpg" alt="" />
                                    </span>
                                    <header class="major">
                                        <h3><a href="kurikulum-nasional/pilihan-pelajaran12.html" class="link">Kelas 12</a></h3>
                                    </header>
                                </article>
                            </section>

					</div>


				<!-- Footer -->
                    @include('layouts.footer')

			</div>

		<!-- Scripts -->
            @include('layouts.scripts')

	</body>
</html>
