  <?php 
  
  function get_list_view_html($product_id, $product) {
  
  $output = "";
  $output = $output . '<div class="col-lg-3 col-sm-4 col-xs-6 col-md-3">';
  $output = $output . '<div class="thumbnail">';  
  $output = $output . '<a href="product.php?id=' . $product_id . '"><img src="' . $product["img-t"] . '" alt="' . $product["name"] . '"></a>';
  $output = $output . '<div class="caption">';    
  $output = $output . '<p style="font-family: Oleo Script; font-size: 20px; height:48px; text-align:center;">' . $product["name"] . '</p>'; 
  $output = $output . '<p style="text-align:center; font-weight: bold;">Price: ' . $product["price"] . ' BDT</p>'; 
  $output = $output . '<div style="text-align:center;">';     
  $output = $output . '<a href="product.php?id=' . $product_id . '" class="btn btn-default" role="button">View details</a>';       
  $output = $output . '<a href="#" class="btn btn-default" role="button">Add to cart</a>';       
  $output = $output . '</div>';
  $output = $output . '</div>';   
  $output = $output . '</div>';  
  $output = $output . '</div>';
      return $output;
  }

    $products = array();
  $products[101] = array(
      "name" => "Black Transparent",
      "price" => 510,
      "img-t" => "p/t/101/t.jpg",
      "thumbs" => array("p/t/101/a.jpg"),
      "cat"   => "tops",
      "sizes" => array("Small","Medium","Large","X-Large"),
      "description" => "Made by Sparna"
      );

  $products[102] = array(
      "name" => "Yellow Leafs",
      "price" => 535,
      "img-t" => "p/t/102/t.jpg",
      "thumbs" => array("p/t/102/a.jpg"),
      "cat"   => "tops",
      "sizes" => array("Medium","Large","X-Large"),
      "description" => "Made by Sparna"
      );

  $products[103] = array(
      "name" => "Green Neck",
      "price" => 495,
      "img-t" => "p/t/103/t.jpg",
      "thumbs" => array("p/t/103/a.jpg"),
      "cat"   => "tops",
      "sizes" => array("Small","Large","X-Large"),
      "description" => "Made by Sparna"
      );

  $products[104] = array(
      "name" => "Cream Simple",
      "price" => 570,
      "img-t" => "p/t/104/t.jpg",
      "thumbs" => array("p/t/104/a.jpg"),
      "cat"   => "tops",
      "sizes" => array("Small","Medium","X-Large"),
      "description" => "Made by Sparna"
      );

  $products[105] = array(
      "name" => "Navy-blue Neck",
      "price" => 390,
      "img-t" => "p/t/105/t.jpg",
      "thumbs" => array("p/t/105/a.jpg"),
      "cat"   => "tops",
      "sizes" => array("Small","Medium","Large"),
      "description" => "Made by Sparna"
      );

  $products[106] = array(
      "name" => "Black Transparent",
      "price" => 750,
      "img-t" => "p/t/106/t.jpg",
      "thumbs" => array("p/t/106/a.jpg"),
      "cat"   => "tops",
      "sizes" => array("Large","X-Large"),
      "description" => "Made by Sparna"
      );

  $products[107] = array(
      "name" => "Maroon Neck",
      "price" => 660,
      "img-t" => "p/t/107/t.jpg",
      "thumbs" => array("p/t/107/a.jpg"),
      "cat"   => "tops",
      "sizes" => array("Small","X-Large"),
      "description" => "Made by Sparna"
      );

  $products[108] = array(
      "name" => "Black Multicoloured",
      "price" => 640,
      "img-t" => "p/t/108/t.jpg",
      "thumbs" => array("p/t/108/a.jpg"),
      "cat"   => "tops",
      "sizes" => array("Small","Medium"),
      "description" => "Made by Sparna"
      );

  $products[109] = array(
      "name" => "White Heart-Neck",
      "price" => 370,
      "img-t" => "p/t/109/t.jpg",
      "thumbs" => array("p/t/109/a.jpg"),
      "cat"   => "tops",
      "sizes" => array("Small","Large","X-Large"),
      "description" => "Made by Sparna"
      );

  $products[110] = array(
      "name" => "Cherry Multicoloured",
      "price" => 600,
      "img-t" => "p/t/110/t.jpg",
      "thumbs" => array("p/t/110/a.jpg"),
      "cat"   => "tops",
      "sizes" => array("Small"),
      "description" => "Made by Sparna"
      );

  $products[201] = array(
      "name" => "Black & Red Georgette",
      "price" => 1550,
      "img-t" => "p/w/201/t.jpg",
      "thumbs" => array("p/w/201/a.jpg","p/w/201/b.jpg","p/w/201/c.jpg","p/w/201/d.jpg","p/w/201/e.jpg"),
      "cat"   => "western",
      "sizes" => array("Medium","Large","X-Large"),
      "description" => "Made by Sparna"
      );

  $products[202] = array(
      "name" => "Peach Lace Maxi",
      "price" => 2150,
      "img-t" => "p/w/202/t.jpg",
      "thumbs" => array("p/w/202/a.jpg","p/w/202/b.jpg","p/w/202/c.jpg"),
      "cat"   => "western",
      "sizes" => array("Medium","Large","X-Large"),
      "description" => "Made by Sparna"
      );

  $products[203] = array(
      "name" => "Black & Red Polyester",
      "price" => 1550,
      "img-t" => "p/w/203/t.jpg",
      "thumbs" => array("p/w/203/a.jpg","p/w/203/b.jpg","p/w/203/c.jpg","p/w/203/d.jpg"),
      "cat"   => "western",
      "sizes" => array("Medium","Large","X-Large"),
      "description" => "Made by Sparna"
      );

  $products[204] = array(
      "name" => "Beige & Black Maxi",
      "price" => 1450,
      "img-t" => "p/w/204/t.jpg",
      "thumbs" => array("p/w/204/a.jpg","p/w/204/b.jpg","p/w/204/c.jpg","p/w/204/d.jpg"),
      "cat"   => "western",
      "sizes" => array("Medium","Large","X-Large"),
      "description" => "Made by Sparna"
      );

  $products[205] = array(
      "name" => "La Zoire Navy Lace",
      "price" => 1350,
      "img-t" => "p/w/205/t.jpg",
      "thumbs" => array("p/w/205/a.jpg","p/w/205/b.jpg","p/w/205/c.jpg","p/w/205/d.jpg","p/w/205/e.jpg"),
      "cat"   => "western",
      "sizes" => array("Medium","Large","X-Large"),
      "description" => "Made by Sparna"
      );

  $products[206] = array(
      "name" => "Beige Printed",
      "price" => 1800,
      "img-t" => "p/w/206/t.jpg",
      "thumbs" => array("p/w/206/a.jpg","p/w/206/b.jpg","p/w/206/c.jpg","p/w/206/d.jpg","p/w/206/e.jpg"),
      "cat"   => "western",
      "sizes" => array("Medium","Large","X-Large"),
      "description" => "Made by Sparna"
      );

  $products[207] = array(
      "name" => "Black & Red Layered",
      "price" => 1450,
      "img-t" => "p/w/207/t.jpg",
      "thumbs" => array("p/w/207/a.jpg","p/w/207/b.jpg","p/w/207/c.jpg","p/w/207/d.jpg"),
      "cat"   => "western",
      "sizes" => array("Medium","Large","X-Large"),
      "description" => "Made by Sparna"
      );

 ?>