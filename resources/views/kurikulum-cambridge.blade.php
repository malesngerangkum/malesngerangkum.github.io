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
								<h1>Cambridge IGCSE & A Level</h1>
							</header>
							<div class="content">
								<p>Cambridge curriculum based on Cambridge IGCSE & A Level</p>
							</div>
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
                                        <h3><a href="kurikulum-cambridge/cambridge-igcse.html" class="link">IGCSE</a></h3>
                                    </header>
                                </article>
                                <article>
                                    <span class="image">
                                        <img src="images/pic02.jpg" alt="" />
                                    </span>
                                    <header class="major">
                                        <h3><a href="kurikulum-cambridge/cambridge-a-level.html" class="link">A-Level</a></h3>
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
</html>=
