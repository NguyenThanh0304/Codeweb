<?php 
    include 'header.php';
    include 'leftcontent.php';
 ?>
    <div id="page-wrapper">
        <?php 
            include '../../../controllers/cSelectAllAdmin.php';
            $sql = "SELECT * FROM orders";
            $temp = new cSelectAllAdmin();
            $lists = $temp->SelectAllAdmin($sql);
         ?>
         <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>IdUser</th>
                            <th>Date</th>
                            <th>View Detail</th>
                        </tr>
                    </thead>
        <?php foreach($lists as $allorders): ?>
            
                    <tbody>
                        <tr>
                            <td><?php echo $allorders['id']?></td>
                            <td><?php echo $allorders['name']?></td>
                            <td><?php echo $allorders['phone']?></td>
                            <td><?php echo $allorders['iduser']?></td>
                            <td><?php echo $allorders['date']?></td>
                            <td><a href="orderdetail.php?iduser=<?php echo $allorders['iduser']?>"><button type="button" class="btn btn-success">Xem Chi Tiết</button></a></td>
                        </tr>
                    </tbody>
        <?php endforeach; ?>
                </table>
            </div>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Flot Charts JavaScript -->
    <script src="../vendor/flot/excanvas.min.js"></script>
    <script src="../vendor/flot/jquery.flot.js"></script>
    <script src="../vendor/flot/jquery.flot.pie.js"></script>
    <script src="../vendor/flot/jquery.flot.resize.js"></script>
    <script src="../vendor/flot/jquery.flot.time.js"></script>
    <script src="../vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
    <script src="../data/flot-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
