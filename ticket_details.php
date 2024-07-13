<?php
include_once('connection.php');
include_once('header.php');
?>

			<div class="row">
				<div class="col-md-6 mb-5 mb-md-0">
					<h2 class="h3 mb-3 text-black">Billing Details</h2>
					<div class="p-3 p-lg-5 border bg-white">
						<form action="" method="post">
						<div class="form-group row">
							<div class="col-md-6">
								<label for="first_name" class="text-black">First Name <span class="text-danger">*</span></label>
								<input required="" type="text" class="form-control" id="" name="first_name">
							</div>
							<div class="col-md-6">
								<label for="last_name" class="text-black">Last Name <span class="text-danger">*</span></label>
								<input  required="" type="text" class="form-control" id="">
							</div>
						</div>

						<div class="form-group row">
							<div class="col-md-12">
								<label for="address" class="text-black">Address <span class="text-danger">*</span></label>
								<input required="" type="text" class="form-control" id="bill_address" name="bill_address" placeholder="Street address">
							</div>
						
							<div class="col-md-6">
								<label for="bill_phone" class="text-black">Phone <span class="text-danger">*</span></label>
								<input required="" type="text" class="form-control" id="" name="bill_phone" placeholder="Phone Number">
							</div>
						</div>

						</form>
	
					</div>
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
										<?php foreach($_SESSION['seat_book']['seat'] as $seat){ ?>
												<tr>
													<td><?= $seat['name'] ?> <strong class="mx-2"><?= $seat['qty'] ?></strong></td>
													<td>BDT <?= $seat['price'] ?></td>
												</tr>
										<?php } ?>
												<tr>
													<td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
													<td class="text-black">BDT <?= $_SESSION['seat_book']['total_amount'] ?></td>
												</tr>
												<tr>
													<td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
													<td class="text-black">BDT <?= $_SESSION['seat_book']['total_seat'] ?></td>
												</tr>
												<tr>
													<td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
													<td class="text-black">BDT <?= $_SESSION['seat_book']['coupon_code'] ?></td>
												</tr>
												<tr>
													<td class="text-black font-weight-bold"><strong>Discount</strong></td>
													<td class="text-black">BDT <?= $_SESSION['seat_book']['other_charge'] ?></td>
												</tr>
												<tr>
													<td class="text-black font-weight-bold"><strong>Order Total</strong></td>
													<td class="text-black">BDT <?= $_SESSION['seat_book']['total'] - $_SESSION['seat_book']['discount'] ?></td>
												</tr>
									</tbody>
								</table>

								<div class="form-group">
									<button class="btn btn-black btn-lg py-3 btn-block" type="submit">Place Order</button>
								</div>

							</div>
						</div>
					</div>
				</div>

<?php require_once('footer.php')?>
						
						
		
						
				