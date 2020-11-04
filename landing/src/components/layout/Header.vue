<template>
    <!-- navbar -->
		<nav class="navbar navbar-expand-lg fixed-top bg-dark">
            <router-link to="/" class="navbar-brand" >Home</router-link>
			<button
				class="navbar-toggler"
				type="button"
				data-toggle="collapse"
				data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent"
				aria-expanded="false"
				aria-label="Toggle navigation"
			>
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse " id="navbarSupportedContent">
				<ul class="navbar-nav mr-4">
					<li class="nav-item">
            <router-link to="/about" class="nav-link" >About</router-link>
					</li>
					<li class="nav-item">
						<a class="nav-link " data-value="gallery" href="#"
							>Gallery</a
						>
					</li>
					<li class="nav-item">
						<a class="nav-link " data-value="blog" href="#">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " data-value="team" href="#">Team</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " data-value="contact" href="#"
							>Contact</a
						>
					</li>
				</ul>
			</div>
		</nav>
</template>

<script>
export default {
    name:"Header"
}
</script>