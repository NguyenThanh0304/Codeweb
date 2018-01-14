<?php 
    include 'header.php';
    include 'leftcontent.php';
 ?>
    <div id="page-wrapper">
        <?php 
            include '../../../controllers/cSelectAllAdmin.php';
            $iduser = $_GET['iduser'];
            $sql = "SELECT * FROM orderdetail WHERE iduser = ".$iduser."";
            $temp = new cSelectAllAdmin();
            $orderdetail = $temp->SelectAllAdmin($sql);
         ?>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                         <th style="width: 01%;text-align: center">ID</th>
                         <th style="width: 01%;text-align: center">IdProducts</th>
                         <th style="width: 025%;text-align: center">Image</th>
                         <th style="width: 015%;text-align: center">Name</th>
                         <th style="width: 05%;text-align: center">Quantity</th>

                         <th style="width: 05%;text-align: center">Price</th>
                         <th style="width: 025%;text-align: center">Date</th>
                         <th style="width: 05%;text-align: center">IdUser</th>
                    </tr>
                 </thead>
                 <?php $total = 0; ?>
                 <?php foreach($orderdetail as $list): ?>
                 <tbody>
                     <tr>
                         <td style="width: 05%;text-align: center"><?php echo $list['id']?></td>
                         <td style="width: 05%;text-align: center"><?php echo $list['idproducts']?></td>
                         <td style="width: 02%;text-align: center"><img src="../../../public/images/<?php echo $list['image']?>"  style="width: 18%"></td>
                         <td style="width: 015%;text-align: center"><?php echo $list['name']?></td>
                         <td style="width: 05%;text-align: center"><?php echo $list['quantity']?></td>
                         <td style="width: 05%;text-align: center"><?php echo number_format($list['price'])?></td>
                         <td style="width: 025%;text-align: center"><?php echo $list['date']?></td>
                         <td style="width: 05%;text-align: center"><?php echo $list['iduser']?></td>
                         <?php 
                            $list['total'] = $list['quantity'] * $list['price'];
                            $total = $total + $list['total'];
                          ?>
                     </tr>
                 </tbody>
             <?php endforeach; ?>
            </table>
        </div>
        <div class="row" style="font-size: 20px">Tổng tiền đơn hàng: <?php echo number_format($total); ?></div>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
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
