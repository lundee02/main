<h2>Нүүр хуудас засварлах</h2>
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
         <form method="post" action="php/uhome.php" enctype="multipart/form-data">
  <div class="form-row">
  <div class="form-group col-md-6">
  <img src="../assets/img/<?=$data['profilepic']?>" class="oo img-thumbnail"><br>
  <div class="custom-file">
    <input type="file" name="profile" class="custom-file-input" id="profilepic">
    <label class="custom-file-label" for="profilepic">Лого оруулах</label>
  </div></div>
  <div class="form-group col-md-6">
  <img src="../assets/img/<?=$data['homewallpaper']?>" class="oo img-thumbnail">
  <div class="custom-file">
    <input type="file" name="cover" class="custom-file-input" id="profilepic">
    <label class="custom-file-label" for="profilepic">Background оруулах</label>
  </div></div>
  
   <div class="form-group col-md-6">
      <label for="name">Нэр</label>
      <input type="name" name="name" value="<?=$data['name']?>" class="form-control" id="name" placeholder="Mohan Goswami">
    </div>
    
   
    
    <div class="form-group col-md-6">
      <label for="email">Имайл хаяг</label>
      <input type="email" name="email" value="<?=$data['emailid']?>" class="form-control" id="email" placeholder="workwithmohan@gmail.com">
    </div>
    <div class="form-group col-md-6">
      <label for="facebook">Facebook</label>
      <input type="text" class="form-control" value="<?=$data['facebook']?>" name="facebook" id="facebook" placeholder="https://facebook.com/MohanGo94273231">
    </div>
    
    <div class="form-group col-md-6">
      <label for="instagram">Instagram</label>
      <input type="text" class="form-control" value="<?=$data['instagram']?>" name="instagram" id="instagram" placeholder="https://instagram.com/MohanGo94273231">
    </div>
    <div class="form-group col-md-6">
      <label for="github">Github</label>
      <input type="text" class="form-control"  value="<?=$data['github']?>" name="github" id="github" placeholder="https://github.com/MohanGo94273231">
    </div>
  </div>
  <div class="form-group">
    <label for="address">Хаяг</label>
    <input type="text" name="address" value="<?=$data['location']?>" class="form-control" id="address" placeholder="C-537 Mahavir Enclave Part-3, New Delhi 110059">
  </div>
  <div class="form-row">
  <div class="form-group col-md-9">
    <label for="profession">Гарчиг</label>
    <input type="text" class="form-control" name="profession" value="<?=$data['professions']?>" id="profession" placeholder="Web Developer,PHP Developer,Graphic Designer">
  </div>
  <div class="form-group col-md-3">
    <label for="mobile">Утасны дугаар</label>
    <input type="text" class="form-control" value="<?=$data['mobile']?>" name="mobile" id="mobile" placeholder="+917838403916">
  </div>
             </div>
  <input type="submit" name="save" class="btn btn-primary" value="Хадгалах">
</form>