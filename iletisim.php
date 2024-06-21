<?php 
include 'header.php';
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-title-wrap">
				<div class="page-title-inner">
					<div class="row">
						<div class="col-md-4">
							<div class="bigtitle">İletişim</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-9"><!--Main content-->
			<div class="contact-page-content">
				<h2>Bize Ulaşın</h2>
				<p>Herhangi bir sorunuz veya geri bildiriminiz için bizimle iletişime geçmekten çekinmeyin. Aşağıdaki formu doldurarak bize ulaşabilirsiniz.</p>
				<form action="contact_form_handler.php" method="post">
					<div class="form-group">
						<label for="name">Adınız:</label>
						<input type="text" class="form-control" id="name" name="name" required>
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" class="form-control" id="email" name="email" required>
					</div>
					<div class="form-group">
						<label for="message">Mesajınız:</label>
						<textarea class="form-control" id="message" name="message" rows="5" required></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Gönder</button>
				</form>
				<h3>İletişim Bilgilerimiz</h3>
				<p><strong>Adres:</strong> 1234 Sokak, No: 56, Şehir, Ülke</p>
				<p><strong>Telefon:</strong> +90 123 456 7890</p>
				<p><strong>Email:</strong> info@domain.com</p>
				<h3>Çalışma Saatlerimiz</h3>
				<p>Pazartesi - Cuma: 09:00 - 18:00</p>
				<p>Cumartesi: 10:00 - 14:00</p>
				<p>Pazar: Kapalı</p>
			</div>
		</div>

		<!-- Sidebar buraya gelecek -->
		<?php include 'sidebar.php'; ?>

	</div>
	<div class="spacer"></div>
</div>

<?php include 'footer.php'; ?>
