<?php include('include/header.php') ; ?>
<?php 
    $olddata=array();
    $con['id']=$_GET['id'];
    $data['request_cancel']=1;
    $data['updated_by']=1;
    $rs=$mysqli->common_update('seat_book',$data,$con);
    if($rs){
        if($rs['data']){
            echo "<script>window.location='{$baseurl}order.php'</script>";
        }else{
            echo $rs['error'];
        }
    }
    
?>
     