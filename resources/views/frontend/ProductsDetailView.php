<?php 
  //load file LayoutTrangTrong.php vao day
  $layout = "LayoutTrangTrong.php";
 ?>
<div class="top">
    <div class="row">
      <div class="col-xs-12 col-md-6 product-image">
        <div class="featured-image"> 
          <img src="../assets/upload/products/<?php echo $record->photo; ?>" class="img-responsive"
          style="height: 370px; width: 250px; margin-left: 60px; margin-top: 10px;"/>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 info">
        <h1 itemprop="name"><?php $record->name; ?></h1>
        <p class="vendor" style="font-size: 18px;"> Category:&nbsp; <span> 
          <?php 
          $category = $this->modelGetCategory($record->category_id); 
          echo isset($category->name) ? $category->name : "";
        ?> </span></p>
        <p style="font-size: 20px"><b><?php echo $record->name; ?></b></p>
        <p itemprop="price" class="price-box product-price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($record->price); ?>₫ </span></span></p>
        <p itemprop="price" class="price-box product-price-box"> <span class="special-price"> <span class="price product-price"
          style="color: red; font-weight: bold;"><?php echo number_format($record->price - ($record->price * $record->discount)/100); ?>₫  </span></span></p>
      </p>
      <a href="index.php?controller=cart&action=create&id=<?php echo $record->id; ?>" class="btn btn-primary">Cho vào giỏ hàng</a>
      <!-- rating -->
      <div style="border:1px solid #dddddd; margin-top: 15px;">
        <h4 style="padding-left: 10px;">Rating</h4>
        <table style="width: 100%;">
          <tr>
            <td style="width: 80%; padding-left: 10px;"><img src="../assets/frontend/icon/star.jpg"></td>
            <td><span class="label label-primary"><?php echo $this->modelGetStar($id,1); ?> vote</span></td>
          </tr>
          <tr>
            <td style="width: 80%; padding-left: 10px;"><img src="../assets/frontend/icon/star.jpg"> <img src="../assets/frontend/icon/star.jpg"></td>
            <td><span class="label label-warning"><?php echo $this->modelGetStar($id,2); ?> vote</span></td>
          </tr>
          <tr>
            <td style="width: 80%; padding-left: 10px;"><img src="../assets/frontend/icon/star.jpg"> <img src="../assets/frontend/icon/star.jpg"> <img src="../assets/frontend/icon/star.jpg"></td>
            <td><span class="label label-danger"><?php echo $this->modelGetStar($id,3); ?> vote</span></td>
          </tr>
          <tr>
            <td style="width: 80%; padding-left: 10px;"><img src="../assets/frontend/icon/star.jpg"> <img src="../assets/frontend/icon/star.jpg"> <img src="../assets/frontend/icon/star.jpg"> <img src="../assets/frontend/icon/star.jpg"></td>
            <td><span class="label label-info"><?php echo $this->modelGetStar($id,4); ?> vote</span></td>
          </tr>
          <tr>
            <td style="width: 80%; padding-left: 10px;"><img src="../assets/frontend/icon/star.jpg"> <img src="../assets/frontend/icon/star.jpg"> <img src="../assets/frontend/icon/star.jpg"> <img src="../assets/frontend/icon/star.jpg"> <img src="../assets/frontend/icon/star.jpg"></td>
            <td><span class="label label-success">1 vote</span></td>
          </tr>
        </table>
        <br>
      </div>
      <!-- /rating -->
    </div>
  </div>
</div>
<div class="middle" style="margin-top:20px;">
  <!-- chi tiet -->
  <?php echo $record->description; ?>
  <!-- chi tiet -->
</div>