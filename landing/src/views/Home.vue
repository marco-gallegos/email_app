<template>
		<header class="header">
			<div class="overlay"></div>
			<div class="container">
				<div class="description">
					<h1>
						Hello ,Welcome To My official Website
						<p>
							We are prepared to share with you breath taking
							views around the world
						</p>
						<button class="btn btn-outline-secondary btn-lg">
							See more
						</button>
					</h1>
				</div>
			</div>
		</header>
		<div id="about" class="about">
			<div class="row">
				<!-- left side -->
				<div class="col-lg-4 col-md-4 col-sm-12">
					<img src="../assets/icons/avatar-fm.png" class="img-fluid" />
					<span class="text-justify">S.Web Developer/Tourist</span>
				</div>
				<!-- right side -->
				<div class="col-lg-8 col-md-8 col-sm-12 desc">
					<h3>Thais</h3>
					<p>
						She is a well exprience software Developer, she has
						worked in different countries and loves travelling and
						taken pictures of fascinating views in order to share
						her adventure around the world using images. Her
						curiosity have help her to learn more and pushed her out
						of her comfort zone.
					</p>
				</div>
			</div>
		</div>
		<!-- gallery -->
		<div id="gallery" class="gallery">
			<h1 class="text-center">Gallery</h1>
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12">
						<img src="../assets/images/gallery-1.jpg" class="img-fluid" />
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<img src="../assets/images/gallery-2.jpg" class="img-fluid" />
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<img src="../assets/images/gallery-3.jpg" class="img-fluid" />
					</div>

					<div class="col-lg-4 col-md-4 col-sm-12">
						<img src="../assets/images/gallery-4.jpg" class="img-fluid" />
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<img src="../assets/images/gallery-5.jpg" class="img-fluid" />
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<img src="../assets/images/gallery-6.jpg" class="img-fluid" />
					</div>

					<div class="col-lg-4 col-md-4 col-sm-12">
						<img src="../assets/images/gallery-7.jpg" class="img-fluid" />
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<img src="../assets/images/gallery-8.jpg" class="img-fluid" />
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<img src="../assets/images/gallery-9.jpg" class="img-fluid" />
					</div>
				</div>
			</div>
		</div>
		<!-- Posts section -->
		<div id="blog" class="blog">
			<div class="container">
				<h1 class="text-center">Blog</h1>
				<div class="row">
					<div class="col-md-4 col-lg-4 col-sm-12 blog-card">
						<div class="card">
							<div class="card-img">
								<img
									src="../assets/images/post-1.jpg"
									class="img-fluid"
								/>
							</div>

							<div class="card-body">
								<h4 class="card-title">Post Title</h4>
								<p class="card-text">
									proident, sunt in culpa qui officia deserunt
									mollit anim id est laborum.
								</p>
							</div>
							<div class="card-footer">
								<a href="" class="card-link">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg-4 col-sm-12 blog-card">
						<div class="card">
							<div class="card-img">
								<img
									src="../assets/images/post-2.jpg"
									class="img-fluid"
								/>
							</div>

							<div class="card-body">
								<h4 class="card-title">
									Architectural Master Pieces
								</h4>
								<p class="card-text">
									World class architectural master pieces
								</p>
							</div>
							<div class="card-footer">
								<a href="" class="card-link">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg-4 col-sm-12 blog-card">
						<div class="card">
							<div class="card-img">
								<img
									src="../assets/images/post-3.jpg"
									class="img-fluid"
								/>
							</div>

							<div class="card-body">
								<h4 class="card-title">Post Title</h4>
								<p class="card-text">
									proident, sunt in culpa qui officia deserunt
									mollit anim id est laborum.
								</p>
							</div>
							<div class="card-footer">
								<a href="" class="card-link">Read more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Team section -->
		<div id="team" class="team">
			<div class="container">
				<h1 class="text-center">Our Team</h1>
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 item">
						<img
							src="../assets/icons/avatar-fm.png"
							class="img-fluid"
							alt="team"
						/>
						<div class="des">
							Thais
						</div>
						<span class="text-muted">Manager</span>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-12 item">
						<img
							src="../assets/icons/avatar-white.jpg"
							class="img-fluid"
							alt="team"
						/>
						<div class="des">
							Temitayo
						</div>
						<span class="text-muted">S.enginner</span>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-12 item">
						<img
							src="../assets/icons/avatar-fm.png"
							class="img-fluid"
							alt="team"
						/>
						<div class="des">
							Layla
						</div>
						<span class="text-muted">Front End Developer</span>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-12 item">
						<img
							src="../assets/icons/avatar-white.jpg"
							class="img-fluid"
							alt="team"
						/>
						<div class="des">
							J.Jirard
						</div>
						<span class="text-muted">Team Manger</span>
					</div>
				</div>
			</div>
		</div>

    <ContactForm></ContactForm>
</template>

<script>
// @ is an alias to /src
//import HelloWorld from '@/components/HelloWorld.vue'
import ContactForm from '@/components/ContactForm.vue'

export default {
  name: 'Home',
  components: {
    ContactForm
  }
}
</script>
