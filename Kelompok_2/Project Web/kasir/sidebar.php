<div class="container">
	<div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<?php 
				include "koneksi.php";
				$username = $_SESSION['username'];
				$query_mysqli = $koneksi->query("SELECT * FROM user WHERE username='$username'")or die(mysqli_error());
				while($data = mysqli_fetch_array($query_mysqli)){
				?>
				<div class="profile-userpic">
				<img class="foto-preview" height="100" width="100" src="foto/<?php echo $data['foto']?>"/>
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<?php echo $_SESSION['nama']; ?>
					</div>
					<div class="profile-usertitle-job">
						<?php echo $_SESSION['level']; ?>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<?php
					$username = $_SESSION['username'];
					$cek = mysqli_query($koneksi, "SELECT * FROM user where username = '$username'");
					$cek2 = mysqli_fetch_assoc($cek);
					?>
					<a href="logout.php" type="button" onclick="return confirm('Anda yakin akan logout dari akun ini?')" class="btn btn-danger btn-sm">Logout</a>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<span class="profile-desc-text"> &nbsp; </span>
				<!-- END MENU -->

				<div class="portlet light bordered">
					<!-- STAT -->
					<div class="row list-separated profile-stat">
						<div class="col-md-4 col-sm-4 col-xs-6">
							<div class="uppercase profile-stat-title"> <?php 
							$sql = "SELECT * FROM orders";
							$query = mysqli_query($koneksi,$sql);
							$count = mysqli_num_rows($query);
							echo " $count";
							?></div>
							<div class="uppercase profile-stat-text"> Order </div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-6">
							<div class="uppercase profile-stat-title"><?php 
							$sql = "SELECT * FROM transaksi";
							$query = mysqli_query($koneksi,$sql);
							$count = mysqli_num_rows($query);
							echo " $count";
							?></div>
							<div class="uppercase profile-stat-text"> Transaksi </div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-6">
							<div class="uppercase profile-stat-title"> <?php 
							$sql = "SELECT * FROM barang";
							$query = mysqli_query($koneksi,$sql);
							$count = mysqli_num_rows($query);
							echo " $count";
							?> </div>
							<div class="uppercase profile-stat-text"> Barang </div>
						</div>
					</div>
					<!-- END STAT -->
					<div>
						<h4 class="profile-desc-title">Informasi Waktu</h4>
						<span class="profile-desc-text"> <?php echo date('l, d-m-Y');?></span>
						<div id="txt" class="profile-desc-title"></div>
					</div></div>
				</div>
			</div>
			<?php } ?>