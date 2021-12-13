		<footer class="footer text-faded text-center py-5">
			<div class="container">
				<p class="m-0 small">Copyright &copy; 2021 Nattanun</p>
			</div>
		</footer>
		<!-- Scroll Up-->
		<a href="#" class="scroll-up" id="scroll-up">
			<i class="fas fa-arrow-up"></i>
		</a>
		<!-- Bootstrap core JS-->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
		<!-- Core theme JS-->
		<script>
			window.addEventListener("scroll", () => {
				const scrollUp = document.getElementById("scroll-up");
				window.scrollY >= 200
					? scrollUp.classList.add("scroll-up--show")
					: scrollUp.classList.remove("scroll-up--show");
			});
		</script>
	</body>
</html>