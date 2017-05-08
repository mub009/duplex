<style type="text/css">
	
.form-control-file {
    position: relative;
    overflow: hidden;
}
.form-control-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

</style>

<div class="container" align="center">
   <div class="row" align="center">

<h3>Add Your Image</h3><br>
<form action="action.php" method="post" enctype="multipart/form-data">


<table class="table" align="center">

<tr>

    <td width="156" height="56"  align="right"><div class="form-group"><label for="exampleInputFile">Enter Title</label></td>

    <td width="250"><input type="text" class="form-control-file" name="title" id="exampleInputFile" aria-describedby="fileHelp" required placeholder="Enter Name"></td>

</tr>

<tr>

    <td width="156" height="56"  align="right"><div class="form-group"><label for="exampleInputFile">Enter Place</label></td>

    <td width="250"><input type="text" class="form-control-file" name="place" id="exampleInputFile" aria-describedby="fileHelp" required placeholder="Enter Place"></td>

</tr>


<tr>

    <td width="156" height="56"  align="right"><div class="form-group"><label for="exampleInputFile">Enter Your Details</label></td>

    <td width="250"><textarea class="form-control-file" name="Detail" id="exampleInputFile" aria-describedby="fileHelp" required placeholder="Enter Your Details"></textarea></td>

</tr>

<tr>

    <td width="156" height="56"  align="right"><div class="form-group"><label for="exampleInputFile">Enter Your Details</label></td>

    <td width="250"><input type="date" class="form-control-file" name="date" id="exampleInputFile" aria-describedby="fileHelp" required placeholder="Enter Your Details"></td>

</tr>

<tr>

    <td width="156" height="56"  align="right"><div class="form-group"><label for="exampleInputFile">Select Your Image</label></td>

    <td width="250"><input type="file" class="form-control-file" name="image" id="exampleInputFile" aria-describedby="fileHelp"></td>

</tr>


<tr>

    <td height="38" colspan="2" align="center"><input type="submit" class="btn btn-info" value="Upload" name="news_add" /></td>

</tr>


</table>





</form>

 </div>
 </div>
