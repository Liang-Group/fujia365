  <?php
    function show_product($product) {
      if(!is_array($product)) {
        $product = (array) $product;
      }
      $url = $product['category'] == "耗材耗材"  ? $product['image'] : "/product.php?id=".$product['id'];
      $image = $product['image'];
      $title = $product['title'];
      $brand = $product['brand'];
      $price = $product['price'];
      $description = ($product['category'] == "耗材") ? $product['description'] : "";
      $str = <<<EOD
        <div class="product">
          <div class="p-img">
            <a href="$url" target="_blank">
              <img width="160" height="160" data-img="1" src="$image" class="err-product" title="$title">
            </a>
          </div>  
          <div class="p-name">
            [$brand] $title
            <div style="color:grey">$description</div>
          </div>
          <div class="p-price">
            ￥$price
          </div>
        </div>
EOD;
      return $str;
    }
  ?>