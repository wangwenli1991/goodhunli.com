@extends('hunli.index')
 
  @section('shouye')
		<h1 class="inner-title-agileits-w3layouts">Photo Album</h1>
	</div>
	<!-- //banner -->
	<!-- breadcrumb -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Photo Album</li>
		</ol>
	</nav>
	<!-- //breadcrumb -->
	<!-- gallery -->
	<section class="gallery py-5">
		<div class="container py-xl-5 py-sm-3">
			<h5 class="main-w3l-title mb-sm-3 mb-2">Photo Album</h5>
			<div class="row w3ls_gallery_grids">
				<div class="col-md-4 w3_agile_gallery_grid">
					<div class="agile_gallery_grid mt-0">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g1.jpg">
							<div class="agile_gallery_grid1">
								<img src="images/g1.jpg" class="img-fluid" alt="Responsive image">
							</div>
						</a>
					</div>
					<div class="agile_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g2.jpg">
							<div class="agile_gallery_grid1">
								<img src="images/g2.jpg" class="img-fluid" alt="Responsive image">
							</div>
						</a>
					</div>
					<div class="agile_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g3.jpg">
							<div class="agile_gallery_grid1">
								<img src="images/g3.jpg" class="img-fluid" alt="Responsive image">
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 w3_agile_gallery_grid">
					<div class="agile_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g4.jpg">
							<div class="agile_gallery_grid1">
								<img src="images/g4.jpg" class="img-fluid" alt="Responsive image">
							</div>
						</a>
					</div>
					<div class="agile_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g5.jpg">
							<div class="agile_gallery_grid1">
								<img src="images/g5.jpg" class="img-fluid" alt="Responsive image">
							</div>
						</a>
					</div>
					<div class="agile_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g6.jpg">
							<div class="agile_gallery_grid1">
								<img src="images/g6.jpg" class="img-fluid" alt="Responsive image">
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 w3_agile_gallery_grid">
					<div class="agile_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g7.jpg">
							<div class="agile_gallery_grid1">
								<img src="images/g7.jpg" class="img-fluid" alt="Responsive image">
							</div>
						</a>
					</div>
					<div class="agile_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g3.jpg">
							<div class="agile_gallery_grid1">
								<img src="images/g3.jpg" class="img-fluid" alt="Responsive image">
							</div>
						</a>
					</div>
					<div class="agile_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g4.jpg">
							<div class="agile_gallery_grid1">
								<img src="images/g4.jpg" class="img-fluid" alt="Responsive image">
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //gallery -->
@endsection