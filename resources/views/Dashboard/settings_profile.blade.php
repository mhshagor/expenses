<?php
	include('header.php');
	/// PROFILE IMAGES UPLOAD/UPDATE ///
	if(isset($_REQUEST['profileImageUpload'])){
		
		/* echo '<pre>';
		print_r($_REQUEST);
		print_r($_FILES);
		echo '</pre>'; */
		
		require_once('../settings-profile.php');
		$profileImageData = profileImageUpload();
		
		if($profileImageData['status'] == 'error'){
			$errors = $profileImageData['message'];
		}
	}
	if(isset($_POST['profileUpload'])){
		$old = $_POST;
		require_once('../settings-profile.php');
		$profileData = profileUpdate($_POST);
		
		if($profileData['status'] == 'error'){
			$errors = $profileData['message'];
		}
	}
?>

<!-- Section-of- welcome -->
<div class="bg-blue-900 px-5 sm:px-8  text-white space-y-2 pt-8 pb-24">
	<h1 class="font-bold text-2xl">Settings/Profile</h1>
	<p class="text-gray-200 font-medium">Update Your Profile</p>
</div>
<div>
	<form method="post" enctype="multipart/form-data">
		<div class="px-5 sm:px-8 mt-5 flex flex-col items-center justify-center space-y-3">
			<div class="relative">
				<input type="file" class="hidden previewImage" name="profileImage" id="profileImage">
				<img class="block h-36 w-36 rounded-full" src="../images/<?php echo $_SESSION['auth']['images']?? 'profile-image.png'; ?>">
				<label for="profileImage" class="cursor-pointer flex justify-center items-center absolute inset-0 text-white bg-black bg-opacity-40 opacity-0 hover:opacity-100 transition-all duration-700 rounded-full">
					<svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 opacity-60" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
					  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
					</svg>
				</label>
			</div>
			<div class="text-red-500 text-sm">
				<?php echo $errors['profileImage']??''; ?>
			</div>
			<button type="submit" name="profileImageUpload" class="bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
				Save Image
			</button>
		</div>
	</form>
	<form method="POST" class="grid grid-cols-4 w-2/3 mx-auto items-center justify-center gap-2 mt-5 px-5 sm:px-8">
		<label for="user_name" class="col-span-1">
			Name
		</label>
		<div class="col-span-3">
			<input type="text" class="w-full rounded-lg focus:border-blue-400 focus:ring focus:ring-blue-200 border-gray-300 px-5 py-3" id="user_name" name="user_name" value="<?php echo ($old['user_name']?? $_SESSION['auth']['name']?? ''); ?>">
			<div class="text-red-500 text-sm"><?php echo($errors['user_name']?? '')?></div>
		</div>
		<label for="user_profession" class="col-span-1">
			Profession
		</label>
		<div class="col-span-3">
			<input type="text" class="w-full rounded-lg focus:border-blue-400 focus:ring focus:ring-blue-200 border-gray-300 px-5 py-3" id="user_profession" name="user_profession" value="<?php echo ($old['user_profession']?? $_SESSION['auth']['profession'] ?? ''); ?>">
			<div class="text-red-500 text-sm"><?php echo($errors['user_profession']?? '')?></div>
		</div>
		<label for="user_phone" class="col-span-1">
			Phone
		</label>
		<div class="col-span-3">
			<input type="text" class="w-full rounded-lg focus:border-blue-400 focus:ring focus:ring-blue-200 border-gray-300 px-5 py-3" id="user_phone" name="user_phone" value="<?php echo ($old['user_phone']?? $_SESSION['auth']['phone']?? ''); ?>">
			<div class="text-red-500 text-sm"><?php echo($errors['user_phone']?? '')?></div>
		</div>
		<label for="user_address" class="col-span-1">
			Address
		</label>
		<div class="col-span-3">
			<input type="text" class="w-full rounded-lg focus:border-blue-400 focus:ring focus:ring-blue-200 border-gray-300 px-5 py-3" id="user_address" name="user_address" value="<?php echo ($old['user_address']?? $_SESSION['auth']['address']?? ''); ?>">
			<div class="text-red-500 text-sm"><?php echo($errors['user_address']?? '')?></div>
		</div>
		
		<button type="submit" name="profileUpload" class="w-auto px-5 bg-blue-500 py-3 border border-gray-300 rounded-md shadow-sm leading-4 font-medium text-white focus:outline-none">
			Update
		</button>
	</form>
</div>

<?php
	include("footer.php")
?>

<script>
/// PROFILE IMAGES UPLOAD/UPDATE ///
[].slice.call(document.querySelectorAll('.previewImage')).map(function(imageFile) {
	imageFile.addEventListener('change', function(event){
		var file = imageFile.files;
		if(file) {
			imageFile.nextElementSibling.src = URL.createObjectURL(event.target.files[0]);
			//console.log(event.target.files);
		}
	});
});
</script>