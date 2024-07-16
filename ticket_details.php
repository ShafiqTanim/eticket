<?php session_start(); ?>
<?php include_once('include/header.php'); ?>

<div class="row">
	<div class="col-md-6 mb-5 mb-md-0">
		<h2 class="h3 mb-3 text-black">Billing Details</h2>
		<div class="p-3 p-lg-5 border bg-white">
			<form action="checkout.php" method="post">
			<div class="form-group row">
				<div class="col-md-6">
					<label for="name" class="text-black">Name <span class="text-danger">*</span></label>
					<input required="" type="text" class="form-control" id="" name="name">
				</div>
				<div class="col-md-6">
					<label for="email" class="text-black">Email <span class="text-danger">*</span></label>
					<input  required="" type="text" class="form-control" id="" name="email">
				</div>
			
				<div class="col-md-12">
					<label for="address" class="text-black">Address <span class="text-danger">*</span></label>
					<input required="" type="text" class="form-control" id="address" name="address" placeholder="Street address">
				</div>
			
				<div class="col-md-6">
					<label for="phone" class="text-black">Phone <span class="text-danger">*</span></label>
					<input required="" type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
				</div>
			</div>
			<div class="form-group row">
				<div class="col-md-6">
					<button class="btn btn-black btn-lg py-3 btn-block" type="submit">Place Order </button>
				</div>
			</div>

			</form>
			
			<?php 
				if($_POST){
					$_POST['vehicle_id']=$_SESSION['cart']['vehicle_id'];
					$_POST['schedule_id']=$_SESSION['cart']['schedule_id'];
					$_POST['customer_id']="";
					$_POST['total_amount']=$_SESSION['cart']['total'];
					$_POST['total_seat']=$_SESSION['cart']['total_seat'];
					$_POST['other_charge']=$_SESSION['cart']['other_charge'];
					$_POST['discount']=$_SESSION['cart']['discount'];
					$_POST['discount']=$_SESSION['cart']['discount'];
					$_POST['created_at']=date('Y-m-d H:i:s');
					$_POST['created_by']=1;
					$rs=$mysqli->common_create('seat_book',$_POST);
					if($rs){
						if($rs['data']){
							if($_SESSION['cart']['item']){
                                foreach($_SESSION['cart']['item'] as $k => $v){
                                    $purd['vehicle_id']=$_SESSION['cart']['vehicle_id'];
                                    $purd['schedule_id']=$_SESSION['cart']['schedule_id'];
                                    $purd['seat_book_id']=$rs['data'];
                                    $purd['seat_id']=$v['seat_id'];
                                    $purd['price']=$v['price'];
                                    $purd['created_at']=date("Y-m-d H:i:s");
                                    $purd['created_by']=$_SESSION['id'];
                                    $prs=$mysqli->common_create('seat_book_details',$purd);
                                }
                            }
							unset($_SESSION['cart']);
							echo "<script>window.location='{$baseurl}thankyou.php?invoice={$rs['data']}'</script>";
						}else{
							echo $rs['error'];
						}
					}
				}
			?>

		</div>
	</div>


	<div class="col-md-6">
		<div class="row mb-5">
			<div class="col-md-12">
				<h2 class="h3 mb-3 text-black">Your Order</h2>
				<div class="p-3 p-lg-5 border bg-white">
					<table class="table site-block-order-table mb-5">
						<thead>
							<th>Product</th>
							<th>Total</th>
						</thead>
						<tbody>
							<?php foreach($_SESSION['cart']['item'] as $seat){ ?>
									<tr>
										<td><?= $seat['name'] ?> </td>
										<td>BDT <?= $seat['price'] ?></td>
									</tr>
							<?php } ?>
									<tr>
										<td class="text-black font-weight-bold"><strong>Subtotal</strong></td>
										<td class="text-black">BDT <?= $_SESSION['cart']['total'] ?></td>
									</tr>
									<tr>
										<td class="text-black font-weight-bold"><strong>Discount</strong></td>
										<td class="text-black">BDT <?= $_SESSION['cart']['discount'] ?></td>
									</tr>
									<tr>
										<td class="text-black font-weight-bold"><strong>Platform Charges</strong></td>
										<td class="text-black">BDT <?= $_SESSION['cart']['other_charge'] ?></td>
									</tr>
									<tr>
										<td class="text-black font-weight-bold"><strong>Order Total</strong></td>
										<td class="text-black">BDT <?= ($_SESSION['cart']['total'] + $_SESSION['cart']['other_charge'] ) - $_SESSION['cart']['discount'] ?></td>
									</tr>
						</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>
</div>

<?php require_once('include/footer.php')?>
						
						
		
						
				