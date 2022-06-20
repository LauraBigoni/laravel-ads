<template>
	<div id="modal-window-container">
		<div id="modal-window" class="text-center">
			<!-- Logo -->
			<div
				id="modal_header"
				class="logo d-flex align-items-center justify-content-center"
			>
				<img src="/images/spotify-logo.png" alt="Ad Logo" />
				<h1 class="font-weight-bold d-inline pl-4">Spotify<sup>&reg;</sup></h1>
			</div>

			<!-- body content and price -->
			<div id="modal-body">
				<div id="modal-price">
					<h2 class="mb-0">$7.90</h2>
					<small>per month</small>
				</div>

				<!-- What includes the offer -->
				<div id="what-includes" class="text-left mt-4">
					<h5>Includes</h5>
					<ul>
						<li>
							A Spotify Premium subscription <br />(Ad free, listen offline)
						</li>
						<li>No data charges for music listening on Spotify Premium</li>
						<li><p>12-month contract applies</p></li>
					</ul>
				</div>
			</div>

			<!-- Footer e button -->
			<div id="modal-footer">
				<button class="cs-button" id="subscribe-button">
					<span>Subscribe</span>
				</button>
				<p>Or $9.90 per month without contract</p>
			</div>
		</div>
	</div>
</template>

<script>
export default {
	name: "Modal",
};
</script>

<style scoped lang="scss">
#modal-window-container {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-color: rgba(0, 0, 0, 0.4);
	z-index: 1;

	#modal-window {
		padding: 20px;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		width: 500px;
		background: linear-gradient(rgb(74, 189, 255) 10%, rgb(255, 164, 211));
		border: 5px solid rgb(176, 222, 249);

		img {
			max-width: 60px;
		}

		h1 sup {
			font-size: 16px;
		}

		h2 {
			font-size: 50px;
		}

		ul {
			li {
				font-size: 14px;
				a {
					color: #fff;
				}
			}
		}
		button {
			margin: 25px 0;
			border: none;
			outline: none;
			border-radius: 20px;
			padding: 10px 20px;
			background-color: rgb(176, 222, 249);
			span {
				color: #fff;
				font-weight: bold;
			}
		}
	}
}
</style>