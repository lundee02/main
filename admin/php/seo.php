<h2>Site засварлах</h2>
         <?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
      <div class="alert alert-success text-center" role="alert">
  Амжиллтай нэмэгдлээ !
</div>
      <?php
  }  
  if($_GET['msg']=='error'){
      ?>
      <div class="alert alert-danger text-center" role="alert">
  something wrong with your image please check type or size !
</div>
      <?php
  } } 
?>  
         <form method="post" action="php/useo.php" enctype="multipart/form-data">
  <div class="form-row">
  <div class="form-group col-md-12">
<img src="../assets/img/<?=$data['icon']?>" class="img-thumbnail ooo">
  </div>
  
  <div class="form-group col-md-6">
  <label>Site icon</label>
  <div class="custom-file">
   
    <input type="file" name="siteicon" class="custom-file-input" id="profilepic">
    <label class="custom-file-label" for="projectpic">Зураг оруулах<label>
  </div></div>
  
   <div class="form-group col-md-6 mt-auto">
      <label for="name">Website гарчиг</label>
      <input type="name" name="title" value="<?=$data['title']?>" class="form-control" id="name" placeholder="Mohan Goswami">
    </div>
    
   
    
    
    <div class="form-group ml-auto">
        <input type="submit" name="seo" class="btn btn-primary" value="Хадгалах">
    </div>
  
</form>