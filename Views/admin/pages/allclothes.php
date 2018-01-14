<?php 
	include 'header.php';
	include 'leftcontent.php';
 ?>
 <div id="page-wrapper">
 
<?php 
    include '../../../controllers/cSelectAllAdmin.php';
    $sql = "SELECT * FROM clothes";
    $temp = new cSelectAllAdmin();
    $list = $temp->SelectAllAdmin($sql);    
 ?>
  <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                         <th style="width: 01%;text-align: center">ID</th>
                         <th style="width: 01%;text-align: center">IdProducts</th>
                         <th style="width: 025%;text-align: center">Image</th>
                         <th style="width: 015%;text-align: center">Name</th>
                         <th style="width: 05%;text-align: center">Price</th>
                         <th style="width: 025%;text-align: center">Date</th>
                         <th style="width: 010%;text-align: center">Update</th>
                         <th style="width: 010%;text-align: center">Delete</th>
                    </tr>
                 </thead>
<?php foreach ($list as $allclothes): ?>
                <tbody>
                     <tr>
                         <td style="width: 05%;text-align: center"><?php echo $allclothes['id']?></td>
                         <td style="width: 05%;text-align: center"><?php echo $allclothes['idproducts']?></td>
                         <td style="width: 05%;text-align: center"><img src="../../../public/images/<?php echo $allclothes['image']?>"  style="width: 25%"></td>
                         <td style="width: 015%;text-align: center"><?php echo $allclothes['name']?></td>
                         <td style="width: 05%;text-align: center"><?php echo number_format($allclothes['price'])?></td>
                         <td style="width: 025%;text-align: center"><?php echo $allclothes['date']?></td>
                         <td style="width: 10%;text-align: center"><a href=""><button type="button" class="btn btn-success">Sửa</button></a></td>
                         <td style="width: 10%;text-align: center"> <a href=""> <button type="button" class="btn btn-success">Xoá</button></a></td>
                     </tr>
                 </tbody>
<?php endforeach; ?>
            </table>
        </div>

 </div>

 <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
