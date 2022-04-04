<?php 
	// if upload button is pressed
	if (isset($_POST['add_item'])) {
		// the path to store the image
		$target = "products/".basename($_FILES['t_img']['name']);
		$targetA = "products/".basename($_FILES['a_img']['name']);
		$targetB = "products/".basename($_FILES['b_img']['name']);
		$targetC = "products/".basename($_FILES['c_img']['name']);
		$targetD = "products/".basename($_FILES['d_img']['name']);
		$targetE = "products/".basename($_FILES['e_img']['name']);
		$targetF = "products/".basename($_FILES['f_img']['name']);

		// connect to database

		$db = mysqli_connect("localhost", "maskanla_sparna", "Sabiha0303", "maskanla_sparna");

		// get all the submitted data from the form

		$timage = $_FILES['t_img']['name'];
		$aimage = $_FILES['a_img']['name'];
		$bimage = $_FILES['a_img']['name'];
		$cimage = $_FILES['a_img']['name'];
		$dimage = $_FILES['a_img']['name'];
		$eimage = $_FILES['a_img']['name'];
		$fimage = $_FILES['a_img']['name'];
		$text = $_POST['description'];
		$id = $_POST['id'];
		$pname = $_POST['pname'];
		$price = $_POST['price'];
		$category = $_POST['category'];
		$sizes = $_POST['sizes'];

		$sql = "INSERT INTO products (id, pname, price, t_img, a_img, b_img, c_img, d_img, e_img, f_img, category, sizes, description) VALUES ('$id', '$pname', '$price', '$timage', '$aimage', '$bimage', '$cimage', '$dimage', '$eimage', '$fimage', '$category', '$sizes', '$text')";
		mysqli_query($db, $sql); // store the submitted data to the database..

		//now move the uploaded image to the htdocs directory
		if (move_uploaded_file($_FILES['t_img']['tmp_name'], $target)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "There is an error uploading the image";
		}

		if (move_uploaded_file($_FILES['a_img']['tmp_name'], $targetA)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "There is an error uploading the image";
		}

		if (move_uploaded_file($_FILES['b_img']['tmp_name'], $targetB)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "There is an error uploading the image";
		}

		if (move_uploaded_file($_FILES['c_img']['tmp_name'], $targetC)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "There is an error uploading the image";
		}

		if (move_uploaded_file($_FILES['d_img']['tmp_name'], $targetD)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "There is an error uploading the image";
		}

		if (move_uploaded_file($_FILES['e_img']['tmp_name'], $targetE)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "There is an error uploading the image";
		}

		if (move_uploaded_file($_FILES['f_img']['tmp_name'], $targetF)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "There is an error uploading the image";
		}


	}
 ?>



<?php
   $title = "Admin Panel"; 
   include ('header.php') ;
  ?>


<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	<h3 style="text-align: center;">Add an item</h3>
	<form method="post" action="admin.php" enctype="multipart/form-data">
		<table class="table table-bordered">
			<tr class="warning">
				<td>
					<label>Product ID</label>
				</td>
				<td>
					<input type="number" name="id">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Name</label>
				</td>
				<td>
					<input type="text" name="pname">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Price</label>
				</td>
				<td>
					<input type="number" name="price">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Cover Image</label>
				</td>
				<td>
					<input type="file" name="t_img">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Thumbnail Images</label>
				</td>
				<td>
					<input type="file" name="a_img">
					<input type="file" name="b_img">
					<input type="file" name="c_img">
					<input type="file" name="d_img">
					<input type="file" name="e_img">
					<input type="file" name="f_img">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Category</label>
				</td>
				<td>
					<select name="category">
						<option value="tops">Tops</option>
						<option value="western">Western Dress</option>
						<option value="tshirts">T-Shirts</option>
						<option value="jeans">Jeans</option>
						<option value="leggings">Leggings</option>
						<option value="skirts">Skirts</option>
						<option value="accessories">Accessories</option>
					</select>
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Sizes</label>
				</td>
				<td>
					<label for="small">S</label><input type="checkbox" name="sizes" value="Small" id="small">
					<label for="medium">M</label><input type="checkbox" name="sizes" value="Medium" id="medium">
					<label for="large">L</label><input type="checkbox" name="sizes" value="Large" id="large">
					<label for="x-large">XL</label><input type="checkbox" name="sizes" value="X-large" id="x-large">
					<label for="xx-large">XXL</label><input type="checkbox" name="sizes" value="XX-large" id="xx-large">
					<label for="unstiched">U</label><input type="checkbox" name="sizes" value="Unstiched" id="unstiched">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Description</label>
				</td>
				<td>
					<textarea name="description"></textarea>
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Is everything okay ?</label>
				</td>
				<td>
					<button type="submit" class="btn btn-success" name="add_item" value="submit">Add Item</button>
				</td>
			</tr>

		</table>
	</form>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	<h3 style="text-align: center;">Modify an item</h3>
	<form>
		<table class="table table-bordered">
			<tr class="warning">
				<td>
					<label>Product ID</label>
				</td>
				<td>
					<input type="number" name="id">
					<input type="button" name="id" value="Get Details">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Name</label>
				</td>
				<td>
					<input type="text" name="name">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Price</label>
				</td>
				<td>
					<input type="number" name="price">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Cover Image</label>
				</td>
				<td>
					<input type="file" name="import_cover">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Thumbnail Images</label>
				</td>
				<td>
					<input type="file" name="import_thumbnails">
					<input type="file" name="import_thumbnails">
					<input type="file" name="import_thumbnails">
					<input type="file" name="import_thumbnails">
					<input type="file" name="import_thumbnails">
					<input type="file" name="import_thumbnails">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Category</label>
				</td>
				<td>
					<select>
						<option value="tops">Tops</option>
						<option value="western">Western Dress</option>
						<option value="tshirts">T-Shirts</option>
						<option value="jeans">Jeans</option>
						<option value="leggings">Leggings</option>
						<option value="skirts">Skirts</option>
						<option value="accessories">Accessories</option>
					</select>
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Sizes</label>
				</td>
				<td>
					<label for="small">S</label><input type="checkbox" name="small" value="Small" id="small">
					<label for="medium">M</label><input type="checkbox" name="medium" value="Medium" id="medium">
					<label for="large">L</label><input type="checkbox" name="large" value="Large" id="large">
					<label for="x-large">XL</label><input type="checkbox" name="x-large" value="X-large" id="x-large">
					<label for="xx-large">XXL</label><input type="checkbox" name="xx-large" value="XX-large" id="xx-large">
					<label for="unstiched">U</label><input type="checkbox" name="unstiched" value="Unstiched" id="unstiched">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Description</label>
				</td>
				<td>
					<textarea></textarea>
				</td>
			</tr>
			<tr class="warning">
				<td>
					<label>Is everything okay ?</label>
				</td>
				<td>
					<button type="submit" class="btn btn-warning">Modify Item</button>
				</td>
			</tr>

		</table>
	</form>
</div>
</div>

<?php include ('footer.php') ?>