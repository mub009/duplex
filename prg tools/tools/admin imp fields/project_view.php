<br><br>
<div class="container">
<?php


$limit = 10;  

//if(isset($_GET['page']))
//{
  // $page =$_GET['page']; 
//}
//else
//{
  //$page=1;
//}

$start_from = ($page-1) * $limit;  

$query = "select * from tbl_product ORDER BY pk_int_product_id desc LIMIT $start_from, $limit ";  

if(!$rs_result=mysqli_query($conkey,$query))  
{
   echo "error";
}





?>  
<form action="action.php" method="post" enctype="multipart/form-data">

                    <table width="846" border="1" cellspacing="0" class="table table-condensed">
                        
<tr><td colspan="4"><h4><b>Add Your Image</b></h4></td></tr>
                        <tr bgcolor="#FFFFCC">

                      

    <td width="250"><input type="file" class="form-control-file" name="image" id="sel1" aria-describedby="fileHelp"></td>


    <td width="250"><input class="form-control" id="sel1" type="text" name="title" placeholder="Enter Title">

 
</td>

<td width="250"><input class="form-control" id="sel1" type="text" name="image_details" placeholder="Enter Your Image Details">


</td></form>
<td>

  <input type="submit" class="btn btn-info" value="Submit" name="product_sub_image_add" value="ADD" /></td>
</tr>
<tr>

                            <td width="108" align="center">Serial NO</td>
                            
                            <td width="156" align="center">Image</td>
                           
                           <td width="156" align="center">Title</td>
                           
                            <td width="129" align="center">Delete</td>
                         
                        </tr>

<?php  

while($data=mysqli_fetch_array($rs_result))

{
?>  
           <tr>
            <td align="center"><?php echo $data['pk_int_product_id']; ?></td>
            
            <td align="center"><img class="img-responsive" src="../upload/product/product/<?php echo $data['vchr_product_image_path']; ?>" alt="Chania" width="60" height="60"></td>
            

            <td align="center"><?php echo $data['vchr_product_title']; ?></td>

            <td align="center"><a href="home.php?delete=<?php echo $data['pk_int_product_id']; ?>&name=tbl_product"><span class="glyphicon glyphicon-trash"></span></a></td>

            </tr>  
<?php  
} 
?>  
</tbody>  
</table>  

<?php  


$sql="SELECT count(pk_int_product_id)
FROM tbl_product";  

$rs_result = mysqli_query($conkey,$sql);  

$row = mysqli_fetch_row($rs_result);  

$total_records = $row[0];  

$total_pages = ceil($total_records / $limit);  


?>
<center>
<nav aria-label="Page navigation example">
  <ul class="pagination">


<?php

$pagLink='<li class='.'"'.'page-item'.'"'.'>';

for ($i=1; $i<=$total_pages; $i++) 
{  
            echo $values =$pagLink."<a class=".'"'.'page-link'.'"'." href='home.php?project_view=".$i."'>".$i."</a></li>";  
};  

  

?>
</ul></nav>

</div>
</center>
<!--
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
-->