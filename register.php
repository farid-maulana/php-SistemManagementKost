<!DOCTYPE html>
<html lang="en">

<head>

	<title>MyKost</title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axgitkq80ad9/b/bucket1/o/uts%2Fimages%2Ffavicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axgitkq80ad9/b/bucket1/o/uts%2Fcss%2Fstyle.css">
	
</head>

<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<img src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axgitkq80ad9/b/bucket1/o/uts%2Fimages%2Flogo-mykost-dark2.png" width="200px" height="30px"  alt="" class="img-fluid mb-4">
                        <h4 class="mb-3 f-w-400">Sign up</h4>
                        <form action="process/process.php?aksi=tambah_user" method="POST">
                            <div class="form-group mb-3">
                                <label class="floating-label" for="full_name">Full Name</label>
                                <input type="text" class="form-control" id="full_name" name="full_name" placeholder="">
                            </div>
                            <div class="form-group mb-3">
                                <label class="floating-label" for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="">
                            </div>
                            <div class="form-group mb-4">
                                <label class="floating-label" for="Password">Password</label>
                                <input type="password" class="form-control" id="Password" name="password" placeholder="">
                            </div>
                            <button class="btn btn-primary btn-block mb-4">Sign up</button>
                        </form>
						<p class="mb-2">Already have an account? <a href="index.php" class="f-w-400">Signin</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axgitkq80ad9/b/bucket1/o/uts%2Fjs%2Fvendor-all.min.js"></script>
<script src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axgitkq80ad9/b/bucket1/o/uts%2Fjs%2Fplugins%2Fbootstrap.min.js"></script>
<script src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axgitkq80ad9/b/bucket1/o/uts%2Fjs%2Fripple.js"></script>
<script src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axgitkq80ad9/b/bucket1/o/uts%2Fjs%2Fpcoded.min.js"></script>

</body>

</html>
