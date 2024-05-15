<h2>Мэдээлэл засварлах</h2>
        <?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
      <div class="alert alert-success text-center" role="alert">
      Амжиллтай нэмэгдлээ !
</div>
      <?php
  }  
 } 
?> 
         <form method="post" action="php/uabout.php">
         <div class="form-row">
             <div class="form-group col-md-12">
    <label for="ptitle">Professional Heading</label>
    <input type="text" name="ptitle" value="." class="form-control" id="ptitle" placeholder=".">
  </div>
        <div class="form-group col-md-12">
    <label for="psubtitle">Дэд гарчиг</label>
    <input type="text" name="psubtitle" value="." class="form-control" id="psubtitle" placeholder=".">
  </div>
    <div class="form-group col-md-12">
    <label for="exampleFormControlTextarea1">Таны тухай товч тайлбар (Html кодыг ашиглаж болно)</label>
    <textarea class="form-control" name="shortdesc" id="exampleFormControlTextarea1" rows="3" placeholder="."></textarea>
  </div>
        <div class="form-group col-md-12">
    <label for="exampleFormControlTextarea1">Таны тухай дэлгэрэнгүй тайлбар (Html кодыг ашиглаж болно)</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="longdesc" placeholder="."></textarea>
  </div>    
        
        <div class="form-group col-md-6">
    <label for="bd">Төрсөн он, сар, өдөр</label>
    <input type="text" name="dob" value="<?=$data['dob']?>" class="form-control" id="dob" placeholder="14 July, 1999">
  </div>
        
        <div class="form-group col-md-6">
   
    
  </div>
         </div>
         <input type="submit" name="save" class="btn btn-primary" value="Хадгалах">
         </form>
         <hr>
         <h4 ID="skillsection">Үндсэн чадвар</h4>
         
         <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Id</th>
              <th>Програмын хэл</th>
              <th>Хэдэн хувьтай</th>
              <th>Сонгох</th>
            </tr>
          </thead>
          <tbody>
         <?php
$query2="SELECT * FROM skills";
$queryrun2=mysqli_query($db,$query2);
$count=1;         
while($data2=mysqli_fetch_array($queryrun2)){
    ?>
     <tr>
         <div class="modal fade" id="modal<?=$data2['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel">Засварлах</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="skilleditbox">
       <form method="post" action="php/supdate.php">
       <input type="hidden" name="id" value="<?=$data2['id']?>">
        <div class="form-row">
            <div class="form-group col-md-6">
    <label for="website">Програмын хэл</label>
    <input type="text" name="skill" value="<?=$data2['skill']?>" class="form-control" id="website" placeholder="PHP">
  </div>
       <div class="form-group col-md-6">
    <label for="website">Хувь</label>
    <input type="text" name="score" value="<?=$data2['score']?>" class="form-control" id="website" placeholder="100">
  </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Гарах</button>
        <input type="submit" class="btn btn-primary" name="supdate" value="Хадгалах">
          </form>
      </div>
    </div>
  </div>
</div>   
          <td>#<?=$count?></td>
              <td><?=$data2['skill']?></td>
         <td><?=$data2['score']?>%</td>
         <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal<?=$data2['id']?>">
  Засварлах
</button> <a href="php/supdate.php?del=<?=$data2['id']?>"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
  Устгах
             </button></a></td>
            </tr>            
         <?php $count++;
} ?>
             </tbody></table>
             <form action="php/supdate.php" method="post">
                 <div class="form-row">
                     <div class="form-group col-md-5">
    <label for="sn">Програмын хэл</label>
    <input type="text" name="skill" class="form-control" id="website" placeholder="PHP" required>
  </div><div class="form-group col-md-5">
    <label for="website">Үнэлгээний түвшин(0-100)</label>
    <input type="text" name="score" class="form-control" id="website" placeholder="100" required>
  </div>
   <div class="form-group col-md-2">
     <label class="text-white">submit</label>
      <input type="submit" name="addskill" class="btn btn-primary form-control" value="Нэмэх"> 
   </div>
                
                 </div>
             </form>