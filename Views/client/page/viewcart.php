  <!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Thông tin đơn hàng</title>
<?php include'header.php'; ?>
</div>
<div class="row" style="width: 100%;color:white;padding-top: 8px;padding-left: 500px;font-size: 30px;height: 50px;background: url(/./shop/public/images/background.jpg)">THÔNG TIN ĐƠN HÀNG</div>

<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th style="text-align: center;padding: 15px;font-size: 20px;">Ảnh</th>
				<th style="text-align: center;padding: 15px;font-size: 20px;">Tên SP</th>
				<th style="text-align: center;padding: 15px;font-size: 20px;">SL</th>
				<th style="text-align: center;padding: 15px;font-size: 20px;">Giá</th>
				<th style="text-align: center;padding: 15px;font-size: 20px;">Tổng</th>
				<th style="text-align: center;padding: 15px;font-size: 20px;">Size</th>
			</tr>
		</thead>
		<?php $total = 0 ?>
	<?php foreach($_SESSION['cart'] as $viewcart): ?>
		<tbody>
			<tr>
				<td style="width: 01%"><img src="../../../public/images/<?php echo $viewcart['image']?>" alt="" style="width: 100%;text-align: center;"></td>
				<td style="width: 30%;text-align: center"><?php echo $viewcart['name'] ?></td>
				<td style="width: 05%;text-align: center"><?php echo $viewcart['quantity'] ?></td>
				<td style="width: 10%;text-align: center"><?php echo number_format($viewcart['price']) ?></td>
				<td style="width: 10%;text-align: center"><?php echo number_format($viewcart['total'] = $viewcart['quantity'] * $viewcart['price']) ?></td>
				<?php 
					$total = $total + $viewcart['total'];
				 ?>
				 	<td style="width: 10%;text-align: center"><?php if(isset($viewcart['size'])) {echo $viewcart['size'];} ?></td>
			</tr>
		</tbody>
	<?php endforeach; ?>
	</table>
</div>
	<div style="width: 80%;margin: 0 auto;border: 1px solid black;height: 50px;font-size: 33px">Tổng tiền hoá đơn: <?php echo number_format($total); ?> VND</div>
<div class="row" style="padding: 5px"><a href="confirmcart.php"><button type="button" class="btn btn-success" style="margin-left: 510px;font-size: 25px">XÁC NHẬN ĐƠN HÀNG</button></a></div>

<?php include 'footer1.php'; ?>
