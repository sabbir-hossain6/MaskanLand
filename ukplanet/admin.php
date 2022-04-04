<?php 
	include('all_products.php');
	// if upload button is pressed
	if (isset($_POST['add_item'])) {
		// the path to store the image
		$targetA = "products/".basename($_FILES['a_img']['name']);
		$targetB = "products/".basename($_FILES['b_img']['name']);
		$targetC = "products/".basename($_FILES['c_img']['name']);
		$targetD = "products/".basename($_FILES['d_img']['name']);
		$targetE = "products/".basename($_FILES['e_img']['name']);
		$targetF = "products/".basename($_FILES['f_img']['name']);

		// connect to database

		include ('connection.php');

		// get all the submitted data from the form

		$aimage = $_FILES['a_img']['name'];
		$bimage = $_FILES['b_img']['name'];
		$cimage = $_FILES['c_img']['name'];
		$dimage = $_FILES['d_img']['name'];
		$eimage = $_FILES['e_img']['name'];
		$fimage = $_FILES['f_img']['name'];

		$brand = $_POST['brand'];
		$model = $_POST['model'];
		$year = $_POST['year'];
		$type = $_POST['type'];
		$sizes = $_POST['sizes'];
		$processor = $_POST['processor'];
		$ram = $_POST['ram'];
		$storage = $_POST['storage'];
		$battery = $_POST['batteryCycle'];
		$cond = $_POST['cond'];
		$gpu = $_POST['gpu'];
		$bulkPrice = $_POST['bulkPrice'];
		$price = $_POST['sellPrice'];
		$description = $_POST['description'];
		
		

		$sql = "INSERT INTO products (brand, model, year, type, size, processor, ram, storage, battery, cond, gpu, bulkPrice, sellPrice, availability, description, image1, image2, image3, image4, image5, image6) 
			VALUES ('$brand', '$model','$year','$type','$sizes','$processor','$ram','$storage','$battery','$cond','$gpu','$bulkPrice','$price','1','$description','$aimage', '$bimage', '$cimage', '$dimage', '$eimage', '$fimage')";

		mysqli_query($db, $sql); // store the submitted data to the database..

		//now move the uploaded image to the htdocs directory

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

	// if modify button is pressed
	if (isset($_POST['modify_item'])) {
		// connect to database
		include ('connection.php');

		$id = $_POST['id'];
		$brand = $_POST['m_brand'];
		$model = $_POST['m_model'];
		$year = $_POST['m_year'];
		$type = $_POST['m_type'];
		$sizes = $_POST['m_sizes'];
		$processor = $_POST['m_processor'];
		$ram = $_POST['m_ram'];
		$storage = $_POST['m_storage'];
		$battery = $_POST['m_batteryCycle'];
		$cond = $_POST['m_cond'];
		$gpu = $_POST['m_gpu'];
		$bulkPrice = $_POST['m_bulkPrice'];
		$price = $_POST['m_sellPrice'];
		$description = $_POST['m_description'];
		
		$sql = "UPDATE products SET brand = '$brand', model = '$model', year = '$year', type = '$type', size = '$sizes', processor = '$processor', ram = '$ram', storage = '$storage', battery = '$battery', cond = '$cond', gpu = '$gpu', bulkPrice = '$bulkPrice', sellPrice = '$price', availability = '$availability', description = '$description' WHERE id = '$id'";

		mysqli_query($db, $sql); // store the submitted data to the database..
	}

	// if modify availability button is pressed
	if (isset($_POST['modify_item'])) {
		// connect to database
		include ('connection.php');

		$id = $_POST['a_id'];
		$availability = $_POST['m_availability'];
		
		$sql = "UPDATE products SET availability = '$availability' WHERE id = '$id'";

		mysqli_query($db, $sql); // store the submitted data to the database..
	}

	// if reupload image button is pressed
	if (isset($_POST['modify_images'])) {
		// the path to store the image
		$targetA = "products/".basename($_FILES['a_img']['name']);
		$targetB = "products/".basename($_FILES['b_img']['name']);
		$targetC = "products/".basename($_FILES['c_img']['name']);
		$targetD = "products/".basename($_FILES['d_img']['name']);
		$targetE = "products/".basename($_FILES['e_img']['name']);
		$targetF = "products/".basename($_FILES['f_img']['name']);

		// connect to database

		include ('connection.php');

		// get all the submitted data from the form

		$aimage = $_FILES['a_img']['name'];
		$bimage = $_FILES['b_img']['name'];
		$cimage = $_FILES['c_img']['name'];
		$dimage = $_FILES['d_img']['name'];
		$eimage = $_FILES['e_img']['name'];
		$fimage = $_FILES['f_img']['name'];

		$id = $_POST['id'];
		$sql = "UPDATE products SET image1 = $aimage, image2 = $bimage, image3 = $cimage, image4 = $dimage, image5 = $eimage, image6 = $fimage WHERE id = '$id";

		mysqli_query($db, $sql); // store the submitted data to the database..

		//now move the uploaded image to the htdocs directory

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
					<label>Category</label>
				</td>
				<td>
					<select name="type">
						<option value="mb">Macbook</option>
						<option value="mbpro">Macbook Pro</option>
						<option value="mbair">MacBook Air</option>
						<option value="imac">iMac</option>
						<option value="iphone">iPhone</option>
						<option value="ipad">iPad</option>
						<option value="accessories">Accessories</option>
						<option value="windows">Windows Laptops</option>
					</select>
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Brand</label>
				</td>
				<td>
					<input type="text" name="brand">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Model</label>
				</td>
				<td>
					<input type="text" name="model">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Year</label>
				</td>
				<td>
					<input type="text" name="year">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Sizes</label>
				</td>
				<td>
					<input type="radio" name="sizes" value="10" id="10"><label for="10"> 10" </label>
					<input type="radio" name="sizes" value="11" id="11"><label for="11"> 11" </label>
					<input type="radio" name="sizes" value="12" id="12"><label for="12"> 12" </label>
					<input type="radio" name="sizes" value="13" id="13"><label for="13"> 13" </label>
					<input type="radio" name="sizes" value="14" id="14"><label for="14"> 14" </label>
					<input type="radio" name="sizes" value="15" id="15"><label for="15"> 15" </label>
					<input type="radio" name="sizes" value="16" id="16"><label for="16"> 16" </label>
					<input type="radio" name="sizes" value="17" id="17"><label for="17"> 17" </label>
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Processor</label>
				</td>
				<td>
					<input type="text" name="processor">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>RAM</label>
				</td>
				<td>
					<input type="text" name="ram">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Storage</label>
				</td>
				<td>
					<input type="text" name="storage">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Graphics</label>
				</td>
				<td>
					<input type="text" name="gpu">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Condition</label>
				</td>
				<td>
					<input type="text" name="cond">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Battery Cycle Count</label>
				</td>
				<td>
					<input type="text" name="batteryCycle">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Bulk Price</label>
				</td>
				<td>
					<input type="number" name="bulkPrice">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Selling Price</label>
				</td>
				<td>
					<input type="number" name="sellPrice">
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





																			<!- Modify item ->






<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	<h3 style="text-align: center;">Modify an item</h3>
	<form method="post"  enctype="multipart/form-data">
		<table class="table table-bordered">
			<tr class="warning">
				<td>
					<label>Product ID</label>
				</td>
				<td>
					<input type="number" name="id">
					<input type="button" name="idBtn" value="Get Details">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Category</label>
				</td>
				<td>
					<select name="m_type">
						<option value="mb">Macbook</option>
						<option value="mbpro">Macbook Pro</option>
						<option value="mbair">MacBook Air</option>
						<option value="imac">iMac</option>
						<option value="iphone">iPhone</option>
						<option value="ipad">iPad</option>
						<option value="accessories">Accessories</option>
						<option value="windows">Windows Laptops</option>
					</select>
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Brand</label>
				</td>
				<td>
					<input id="brandField" type="text" name="m_brand">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Model</label>
				</td>
				<td>
					<input type="text" name="m_model">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Year</label>
				</td>
				<td>
					<input type="text" name="m_year">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Sizes</label>
				</td>
				<td>
					<input type="radio" name="m_sizes" value="10" id="10"><label for="10"> 10" </label>
					<input type="radio" name="m_sizes" value="11" id="11"><label for="11"> 11" </label>
					<input type="radio" name="m_sizes" value="12" id="12"><label for="12"> 12" </label>
					<input type="radio" name="m_sizes" value="13" id="13"><label for="13"> 13" </label>
					<input type="radio" name="m_sizes" value="14" id="14"><label for="14"> 14" </label>
					<input type="radio" name="m_sizes" value="15" id="15"><label for="15"> 15" </label>
					<input type="radio" name="m_sizes" value="16" id="16"><label for="16"> 16" </label>
					<input type="radio" name="m_sizes" value="17" id="17"><label for="17"> 17" </label>
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Processor</label>
				</td>
				<td>
					<input type="text" name="m_processor">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>RAM</label>
				</td>
				<td>
					<input type="text" name="m_ram">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Storage</label>
				</td>
				<td>
					<input type="text" name="m_storage">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Graphics</label>
				</td>
				<td>
					<input type="text" name="m_gpu">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Condition</label>
				</td>
				<td>
					<input type="text" name="m_cond">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Battery Cycle Count</label>
				</td>
				<td>
					<input type="text" name="m_batteryCycle">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Bulk Price</label>
				</td>
				<td>
					<input type="number" name="m_bulkPrice">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Selling Price</label>
				</td>
				<td>
					<input type="number" name="m_sellPrice">
				</td>
			</tr>


			<tr class="warning">
				<td>
					<label>Description</label>
				</td>
				<td>
					<textarea name="m_description"></textarea>
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Is everything okay ?</label>
				</td>
				<td>
					<button type="submit" name="modify_item" class="btn btn-warning">Modify Item</button>
				</td>
			</tr>

		</table>
	</form>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	<h3 style="text-align: center;">Mark availability</h3>
	<form method="post"  enctype="multipart/form-data">
		<table class="table table-bordered">
			<tr class="warning">
				<td>
					<label>Product ID</label>
				</td>
				<td>
					<input type="number" name="a_id">
					<input type="button" name="idBtn" value="Get Details">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Availability</label>
				</td>
				<td>
					<input type="number" name="m_availability"></input>
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Is everything okay ?</label>
				</td>
				<td>
					<button type="submit" name="modify_availability" class="btn btn-warning">Modify Item Availability</button>
				</td>
			</tr>

		</table>
	</form>
</div>



</div>

<?php include ('footer.php') ?>