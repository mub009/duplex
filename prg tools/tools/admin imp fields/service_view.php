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

$query = "select * from tbl_service ORDER BY pk_int_service_id desc LIMIT $start_from, $limit";  

if(!$rs_result=mysqli_query($conkey,$query))  
{
   echo "error";
}





?>  

                    <table width="846" border="1" cellspacing="0" class="table table-condensed">
                    <form action="action.php" method="post" enctype="multipart/form-data">
            <tr>
              <td colspan="4"><h3>Add Your Service</h3></td>

            </tr>


                      <tr bgcolor="#FFFFCC">


    <td width="250"><input type="file" class="form-control-file" name="image" id="exampleInputFile" aria-describedby="fileHelp" required></td>

    <td width="250"><input type="text" class="form-control-file" name="title" id="exampleInputFile" aria-describedby="fileHelp" placeholder="Title" required></td>

    <td width="250"><input type="text" class="form-control-file" name="Details" id="exampleInputFile" aria-describedby="fileHelp" placeholder="Details" required></td>





    <td height="38" colspan="2" align="center"><input type="submit" class="btn btn-info" value="Upload" name="service_add" /></td>

</tr>
</form>
                        <tr >
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
            <td align="center"><?php echo $data['pk_int_service_id']; ?></td>
            
            <td align="center"><img class="img-responsive" src="../upload/service/<?php echo $data['vchr_service_path']; ?>" alt="Chania" width="60" height="60"></td>
            <td><?php echo $data['vchr_service_title']; ?></td>
            
            <td align="center"><a href="home.php?delete=<?php echo $data['pk_int_service_id'];?>&name=tbl_service"><span class="glyphicon glyphicon-trash"></span></a></td>

            </tr>  
<?php  
} 
?>  
</tbody>  
</table>  

<?php  


$sql="SELECT count(pk_int_service_id)
FROM tbl_service";  

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
            echo $values =$pagLink."<a class=".'"'.'page-link'.'"'." href='home.php?services_view=".$i."'>".$i."</a></li>";  
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