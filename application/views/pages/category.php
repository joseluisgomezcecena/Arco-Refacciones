<style>
	main {
		display: flex;
		flex-wrap: nowrap;
		height: 100vh;
		height: -webkit-fill-available;
		max-height: 100vh;
		overflow-x: auto;
		overflow-y: hidden;
	}

	.b-example-divider {
		flex-shrink: 0;
		width: 1.5rem;
		height: 100vh;
		background-color: rgba(0, 0, 0, .1);
		border: solid rgba(0, 0, 0, .15);
		border-width: 1px 0;
		box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
	}

	.bi {
		vertical-align: -.125em;
		pointer-events: none;
		fill: currentColor;
	}

	.dropdown-toggle { outline: 0; }

	.nav-flush .nav-link {
		border-radius: 0;
	}

	.btn-toggle {
		display: inline-flex;
		align-items: center;
		padding: .25rem .5rem;
		font-weight: 600;
		color: rgba(0, 0, 0, .65);
		background-color: transparent;
		border: 0;
	}
	.btn-toggle:hover,
	.btn-toggle:focus {
		color: rgba(0, 0, 0, .85);
		background-color: #d2d8f4;
	}

	.btn-toggle::before {
		width: 1.25em;
		line-height: 0;
		content: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='rgba%280,0,0,.5%29' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 14l6-6-6-6'/%3e%3c/svg%3e");
		transition: transform .35s ease;
		transform-origin: .5em 50%;
	}

	.btn-toggle[aria-expanded="true"] {
		color: rgba(0, 0, 0, .85);
	}
	.btn-toggle[aria-expanded="true"]::before {
		transform: rotate(90deg);
	}

	.btn-toggle-nav a {
		display: inline-flex;
		padding: .1875rem .5rem;
		margin-top: .125rem;
		margin-left: 1.25rem;
		text-decoration: none;
	}
	.btn-toggle-nav a:hover,
	.btn-toggle-nav a:focus {
		background-color: #d2d9f4;
	}

	.scrollarea {
		overflow-y: auto;
	}

	.fw-semibold { font-weight: 600; }
	.lh-tight { line-height: 1.25; }
</style>


<section>
	<div class="container mt-5">

		<h1 class="mt-5 mb-4"><b>Productos en</b> <span class="hover-text"><?php echo $title; ?></span></h1>

		<div class="row mt-5 mb-5">
			<div class="col-lg-4">

				<!--
				<div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
					<a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
						<svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
						<span class="fs-5 fw-semibold">Collapsible</span>
					</a>
					<ul class="list-unstyled ps-0">
						<li class="mb-1">
							<button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
								Home
							</button>
							<div class="collapse show" id="home-collapse">
								<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
									<li><a href="#" class="link-dark rounded">Overview</a></li>
									<li><a href="#" class="link-dark rounded">Updates</a></li>
									<li><a href="#" class="link-dark rounded">Reports</a></li>
								</ul>
							</div>
						</li>
						<li class="mb-1">
							<button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
								Dashboard
							</button>
							<div class="collapse" id="dashboard-collapse">
								<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
									<li><a href="#" class="link-dark rounded">Overview</a></li>
									<li><a href="#" class="link-dark rounded">Weekly</a></li>
									<li><a href="#" class="link-dark rounded">Monthly</a></li>
									<li><a href="#" class="link-dark rounded">Annually</a></li>
								</ul>
							</div>
						</li>
						<li class="mb-1">
							<button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
								Orders
							</button>
							<div class="collapse" id="orders-collapse">
								<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
									<li><a href="#" class="link-dark rounded">New</a></li>
									<li><a href="#" class="link-dark rounded">Processed</a></li>
									<li><a href="#" class="link-dark rounded">Shipped</a></li>
									<li><a href="#" class="link-dark rounded">Returned</a></li>
								</ul>
							</div>
						</li>
						<li class="border-top my-3"></li>
						<li class="mb-1">
							<button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
								Account
							</button>
							<div class="collapse" id="account-collapse">
								<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
									<li><a href="#" class="link-dark rounded">New...</a></li>
									<li><a href="#" class="link-dark rounded">Profile</a></li>
									<li><a href="#" class="link-dark rounded">Settings</a></li>
									<li><a href="#" class="link-dark rounded">Sign out</a></li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
				-->



				<div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">

					<?php
					/*
					$item_details=$controller->item_details($item['item_id']);
					foreach ($item_details as $row):
						echo $row['price']  . '<br>';
					endforeach;
					*/
					?>



					<a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
						<svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
						<span class="fs-5 fw-semibold">Productos</span>
					</a>
					<ul class="list-unstyled ps-0">
						<li class="mb-1">
							<?php foreach ($parents as $parent): ?>
									<button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#<?php echo $parent['parent_name'] ?>-collapse" aria-expanded="true">
										<?php echo $parent['parent_name']; ?>
									</button>

									<div class="collapse show" id="<?php echo $parent['parent_name'] ?>-collapse">


								<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">

									<?php
									$item_details = $controller->subcategories($parent['parent_id']);
									foreach ($item_details as $row):
										//echo $row['category_name']  . '<br>';
										echo '<li><a href="#" class="link-dark rounded">' . $row['category_name'] . '</a></li>';
									endforeach;

									?>

									<!--
									<li><a href="#" class="link-dark rounded">Overview</a></li>
									<li><a href="#" class="link-dark rounded">Updates</a></li>
									<li><a href="#" class="link-dark rounded">Reports</a></li>
									-->
								</ul>


								</div>
							<?php endforeach; ?>

						</li>

						<li class="border-top my-3"></li>

					</ul>
				</div>



			</div>
			<div class="col-lg-8">


				<div class="row mt-5 mb-5">
					<div class="col-lg-6">
						<div class="card custom-card shadow-sm" style="width: 18rem;">
							<img src="..." class="card-img-top" alt="...">
							<div class="card-body">
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</div>


				</div>



			</div>
		</div>




	</div>
</section>
