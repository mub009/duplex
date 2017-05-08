
<?php


require_once('../dbconnection.php');
$conkey=conkey();
?>

<div class="row animated fadeInUp">
                <div class="col-sm-12 col-lg-9">
                    <div class="row">

                    <table width="846" border="1" cellspacing="0">
                        <tr bgcolor="#FFFFCC">
                            <td width="108" align="center">Serial NO</td>
                            <td width="138" align="center">Name</td>
                            <td width="156" align="center">Education</td>
                            <td width="163" align="center">Religion</td>
                            <td width="129" align="center">Photo</td>
                            <td width="126" align="center">Delete</td>
                        </tr>
                        <?php

         $query="SELECT pk_int_reg_id,vchr_reg_applicant,  `vchr_profile_image_image1` ,  `vchr_reg_education` , vchr_religion,pk_vchr_profile_id
FROM  `tbl_profile_image` 
JOIN  `tbl_registration` ON  `ref_int_register_id` = pk_int_reg_id
JOIN tbl_religion ON pk_int_religion_id = ref_int_religion_id
ORDER BY pk_int_reg_id DESC";

         $res=mysqli_query($conkey,$query);

         while($data=mysqli_fetch_array($res))
         {
            ?>
            <tr>
            <td><?php echo $data['pk_vchr_profile_id']; ?></td>
            <td><?php echo $data['vchr_reg_applicant']; ?></td>
            <td><?php echo $data['vchr_reg_education']; ?></td>
            <td><?php echo $data['vchr_religion']; ?></td>
            <td align="center"><img src="../<?php echo $data['vchr_profile_image_image1']; ?>" style="height: 50px;width: 50px;" /></td>
            <td align="center"><a href="home.php?delete=<?= $data['pk_int_reg_id'] ?>"><span class="glyphicon glyphicon-trash"></span></a></td>

            </tr>
<?php
}
?>





                    </table>

</div>
</div>
</div>