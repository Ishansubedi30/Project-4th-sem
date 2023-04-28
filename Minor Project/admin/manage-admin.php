<?php include('partials/menu.php'); ?>

	<!--Main content selection-->
	<div class="main-content">
		<div class="wrapper">
		<h1>MANAGE ADMIN</h1>
		
		<br  />
		<?php
		if(isset($_SESSION['add']))
		{
			echo $_SESSION['add'];
			unset($_SESSION['add']);

		} 
if(isset($_SESSION['delete']))
{
	echo $_SESSION['delete'];
	unset($_SESSION['delete']);

}

if(isset($_SESSION['update']))
{
	echo $_SESSION['update'];
	unset($_SESSION['update']);
}

if(isset($_SESSION['user-not-found']))
{
	echo $_SESSION['user-not-found'];
	unset($_SESSION['user-not-found']);
}
if(isset($_SESSION['password-not-matched']))
{
	echo $_SESSION['password-not-matched'];
	unset($_SESSION['password-not-matched']);
}
if(isset($_SESSION['change-pwd']))
{
	echo $_SESSION['change-pwd'];
	unset($_SESSION['change-pwd']);
}

		?>
<br><br><br>
		<a href="add-admin.php"class="btn-primary">Add Admin</a>
		
		<br  /><br  /><br  />



		<table class="tbl-full">
			<tr>
				<th>S.N.</th>
				<th>Full Name</th>
				<th>Username</th>
				<th>Actions</th>

			</tr>
			<?php

				$sql = "SELECT * FROM tbl_admin";
				$res = mysqli_query($conn, $sql);
				if($res==TRUE){
					$count = mysqli_num_rows($res);
					$sn=1;

					if($count>0)
					{
						while($rows=mysqli_fetch_assoc($res))
						{
							$id=$rows['id'];
							$full_name=$rows['full_name'];
							$username=$rows['username'];

						?>
						<tr>
				<td><?php echo $sn++;  ?></td>
				<td><?php echo $full_name; ?></td>
				<td><?php echo $username; ?></td>
				<td>
					<a href="<?php  echo SITEURL;  ?>Project-4th-sem/Minor Project/admin/update-password.php?id=<?php echo$id; ?>" class="btn-primary">Change Password</a>
					<a href="<?php  echo SITEURL;  ?>Project-4th-sem/Minor Project/admin/update-admin.php?id=<?php echo$id; ?>"class="btn-secondary">Update Admin</a>			
					<a href="<?php  echo SITEURL;  ?>Project-4th-sem/Minor Project/admin/delete-admin.php?id=<?php echo$id; ?>"class="btn-danger">Delete Admin</a>			
				</td>

			</tr>
						<?php
						}

					}
					else
					{

					}
				}


			?>
			
		</table>
			
	</div>
</div>
	

	<?php include('partials/footer.php'); ?>
