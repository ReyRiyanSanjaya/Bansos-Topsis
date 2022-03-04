<script>
	document.addEventListener('DOMContentLoaded', function() {
		var modeSwitch = document.querySelector('.mode-switch');

		modeSwitch.addEventListener('click', function() {
			document.documentElement.classList.toggle('dark');
			modeSwitch.classList.toggle('active');
		});

		var listView = document.querySelector('.list-view');
		var gridView = document.querySelector('.grid-view');
		var projectsList = document.querySelector('.project-boxes');

		listView.addEventListener('click', function() {
			gridView.classList.remove('active');
			listView.classList.add('active');
			projectsList.classList.remove('jsGridView');
			projectsList.classList.add('jsListView');
		});

		gridView.addEventListener('click', function() {
			gridView.classList.add('active');
			listView.classList.remove('active');
			projectsList.classList.remove('jsListView');
			projectsList.classList.add('jsGridView');
		});

		document.querySelector('.messages-btn').addEventListener('click', function() {
			document.querySelector('.messages-section').classList.add('show');
		});

		document.querySelector('.messages-close').addEventListener('click', function() {
			document.querySelector('.messages-section').classList.remove('show');
		});
	});
</script>

<!-- Our project just needs Font Awesome Solid + Brands -->
<script defer src="<?php echo base_url('asset/fontawesome/js/brands.js') ?>"></script>
<script defer src="<?php echo base_url('asset/fontawesome/js/solid.js') ?>"></script>
<script defer src="<?php echo base_url('asset/fontawesome/js/fontawesome.js') ?>"></script>


<!-- JAVASCRIPT -->
<!-- Vendor JS -->
<script src="<?php echo base_url('assets/js/vendor.bundle.js'); ?>"></script>

<!-- Theme JS -->
<script src="<?php echo base_url('assets/js/theme.bundle.js'); ?>"></script>
<script src="<?php echo base_url('asset/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

</body>

</html>
