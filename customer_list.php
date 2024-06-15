<?php include('include/header.php') ; ?>
<link href="https://cdn.datatables.net/v/bs5/dt-2.0.8/datatables.min.css" rel="stylesheet">
 
<script src="https://cdn.datatables.net/v/bs5/dt-2.0.8/datatables.min.js"></script>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Customer /</span> List</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <h5 class="card-header">Customer</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                <thead>
                    <tr>
                    <th>#SL</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <?php 
                        $result=$mysqli->common_select('customer');
                        if($result){
                            if($result['data']){
                                $i=1;
                                foreach($result['data'] as $data){
                    ?>
                    <tr>
                    
                        <td><?= $i++ ?></td>
                        <td><?= $data->name ?></td>
                        <td><?= $data->contact_no ?></td>
                        <td><?= $data->email ?></td>
                        <td>
                            <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?= $baseurl ?>customer_edit.php?id=<?= $data->id ?>"
                                ><i class="bx bx-edit-alt me-2"></i> Edit</a
                                >
                                <a class="dropdown-item" href="<?= $baseurl ?>customer_delete.php?id=<?= $data->id ?>"
                                ><i class="bx bx-trash me-2"></i> Delete</a
                                >
                            </div>
                            </div>
                        </td>
                    </tr>

                    <?php } } } ?>
                </tbody>
                </table>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->

    </div>
            <!-- / Content -->



<?php include('include/footer.php') ; ?>