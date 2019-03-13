<?php 
$umessage='';
include('./function/function.php'); 
check_session();
if(isset($_POST['addbanner']))
{
	$id=0;
	extract($_POST);
	$type=1;
	$pdo=getPDOObject();
	$sql=$pdo->query("SELECT * FROM `banner` where  name LIKE '$name'");
	$num=$sql->rowCount();
	$photos=$_FILES['photo']['name'];
	$Filename='';
	if(!$num)
	{	
		if($photos){
		$Filename=date('dmyhis').basename( $_FILES['photo']['name']);		
				
				$target = "../upload/".$Filename;
				move_uploaded_file($_FILES['photo']['tmp_name'], $target);    //Tells you if its all ok	
		}
				$q=$pdo->prepare("INSERT into `banner` values(:id,:name,:name2, :photo,:des, :fld_order, :actstat)");
				$q->execute(array(':id'=>$id, 
									
									':name' => $name ,
									':name2' => $name2 ,
									':photo' => $Filename ,
									':des' => $des ,
									':fld_order' => $fld_order ,
									':actstat' => $actstat
									));	
				$affected_rows = $q->rowCount();
				if($affected_rows)
					$umessage='<div class="alert alert-success" role="alert">
							<strong></strong>Added Successfully
						   </div>';
	}
	else
	{
		$umessage='<div class="alert alert-danger" role="alert">Duplicate Entry!!! Code Already Exists </div> ';
	}
	
}

if(isset($_POST['deleteall']))
{
	$arr=$_POST['ids'];
	if(count($arr))
	{
	$str_rest_refs=implode(",",$arr);
	
	$data=sqlfetch("select * from `banner` where id in ($str_rest_refs)");
		foreach($data as $banner)
		{
			$img_path='../upload/'.$banner['photo'];
			 if(file_exists($img_path))
			 { 
			   @unlink($img_path);
			 }
		}
	
	$pdo=getPDOObject();
	$q=$pdo->query("DELETE FROM `banner` WHERE id in ($str_rest_refs)");
	if($q)
	$umessage='<div class="alert alert-success" role="alert">
							<strong></strong>Deleted Successfully
						   </div>';	
	}
	else{
		$umessage='<div class="alert alert-danger" role="alert">
							<strong></strong>Please Select Items to perform this action
						   </div>'; 
	}
}

if(isset($_POST['activate']))
{
	$arr=$_POST['ids'];
	if(count($arr))
	{
		$str_rest_refs=implode(",",$arr);
		$pdo=getPDOObject();
	$q=$pdo->query("UPDATE `banner` SET actstat='1' WHERE id in ($str_rest_refs)");
	if($q)
	$umessage='<div class="alert alert-success" role="alert">
							<strong></strong>Activated Successfully
						   </div>';	
	}
	else{
		$umessage='<div class="alert alert-danger" role="alert">
							<strong></strong>Please Select Items to perform this action
						   </div>'; 
	}
		
}	

if(isset($_POST['deactivate']))
{
	$arr=$_POST['ids'];
	if(count($arr))
	{
		$str_rest_refs=implode(",",$arr);
		$pdo=getPDOObject();
	$q=$pdo->query("UPDATE `banner` SET actstat='0' WHERE id in ($str_rest_refs)");
	if($q)
	$umessage='<div class="alert alert-success" role="alert">
							<strong></strong>DeActivated Successfully
						   </div>';	
	}
	else{
		$umessage='<div class="alert alert-danger" role="alert">
							<strong></strong>Please Select Items to perform this action
						   </div>'; 
	}	
}

if(isset($_POST['editdone']))
{
	extract($_POST);
	$Filename=$prevphoto;
	$photos=$_FILES['photo']['name'];
	if($photos!='')
	{	$Filename='';
		
		$Filename=date('dmyhis').basename( $_FILES['photo']['name']);		
				$target = "../upload/".$Filename;
				move_uploaded_file($_FILES['photo']['tmp_name'], $target);    //Tells you if its all ok	
				$img_path='../upload/'.$prevphoto;
			 if(file_exists($img_path))
			 { 
			   @unlink($img_path);
			 }
				
		}
	 
	$pdo=getPDOObject();
		$q=$pdo->prepare("UPDATE `banner` SET 
		
		
		name=?,
		name2=?,
		photo=?,
		des=?,
		fld_order=?,
		actstat=?
		
		WHERE id=?");
				$q->execute(array( $name,$name2, $Filename , $des,$fld_order,$actstat, $pid));	
				$affected_rows = $q->rowCount();
				if($affected_rows)
					$umessage='<div class="alert alert-success" role="alert">
							<strong></strong>Updated Successfully
						   </div>';
	
}

function banner_form($pid='0',$name='',$name2='',$photo='',$des='#',$fld_order='0',$actstat='',$formname='addbanner')
{ ?>
	<form action="banner.php" method="post" enctype="multipart/form-data">
				 <input type="hidden" name="pid" value="<?php echo $pid; ?>" />
				  <input type="hidden" name="prevphoto" value="<?php echo $photo; ?>" />
			 
			   <br><br>
			   <span class="col-md-3">
			   <label>Line 1</label>
				<input type="text" name="name" value="<?php echo $name; ?>" required class="form-control" /><br/><br/>
				
				</span>
				<span class="col-md-3">
				<label>Photo</label>
				<input type="file" name="photo" >
				<img class="grayscale img-responsive" alt="" src="../upload/<?php echo $photo; ?>" >
				
				</span>
				<span class="col-md-3">
				<label>Status</label>
					<div class="controls">
						<select name="actstat" id="selectError" data-rel="chosen">
							<option <?php if(($actstat)=='1')echo 'selected'; ?> value="1">Active</option>
							<option <?php if(($actstat)=='0')echo 'selected'; ?> value="0">Inactive</option>
						</select>
					</div>
				</span>
				<span class="col-md-3">
						<label>Sort Order</label>
						<input type="number" class="form-control" name="fld_order" value="<?php echo $fld_order; ?>">
					</span>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
				<span class="col-md-3">
				<label>Line 2</label>
				<input type="text" class="form-control" value="<?php echo $name2; ?>" name="name2"><br>
				
				</span>
				<span class="col-md-9">
				<label>Link</label>
				<input type="text" class="form-control" value="<?php echo $des; ?>" name="des"><br>
				</span>
					
				
					<span class="col-md-4">
					<input type="submit" value="Submit" name="<?php echo $formname; ?>" class="btn btn-success" />
					
					</span>
				</form>
	
<?php 
}


?>





<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a href="#">banner</a>
        </li>
    </ul>
</div>
<?php echo $umessage; ?>
<?php 
if(isset($_GET['edit']) and ($_GET['edit']=='true'))
{ ?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Edit banner</h2>
                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-down"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content row" >
				<div class="col-md-12">
               <?php 
			$pid=$_GET['pid'];
			$productdata=sqlfetch("SELECT * FROM `banner` where id='$pid' ");
			foreach($productdata as $product)
			{
				extract($product);
				banner_form($pid,$name,$name2,$photo,$des,$fld_order,$actstat,$formname='editdone');
			} ?>
               
				</div>
            </div>
        </div>
    </div>
</div>

	<?php
}
else{
?>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Add banner</h2>
                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-down"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content row" >
				<div class="col-md-12">
               <?php banner_form(); ?>
               
				</div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i>banner</h2>

                <div class="box-icon">
                   
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-bordered table-striped responsive">
					<tbody>
						
						<form action="" method="post">
						<tr>
						
						
							
							
							<td></td>
							<td></td>
							<td><input type="submit" class="btn btn-success pull-right" name="activate" value="Activate"/></td>
							<td><input type="submit" class="btn label-default pull-right " name="deactivate" value="Deactivate"/></td>
							<td><input type="submit" class="btn btn-danger pull-right" name="deleteall" value="Delete"/></td>
							<td>Select * <input type="checkbox" class="xyz" onclick="toggle(this)" ></td>
						</tr>
						
						<tr>
						
							<th>S. No.</th>
							<th>Name</th>
							<th>Photo</th>
							
							
							<th>Sort Order</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
						<?php 
						$count=1;
						$data=sqlfetch("SELECT * FROM `banner`  order by fld_order");
						foreach($data as $menu)
						{ ?>
						<tr>
							<td><?php echo $count++; ?></td>
							<td><?php echo $menu['name']; ?></td>
							
							<td><img style="max-width:200px; max-height:200px;" src="../upload/<?php echo $menu['photo']; ?>" class="img-responsive" ></td>
							<td><?php echo $menu['fld_order']; ?></td>
						
							<td><?php echo get_active_status_text($menu['actstat']); ?></td>
							<td>
								<input class="xyz" name="ids[]" value="<?php echo $menu['id']; ?>" type="checkbox"/> 
								<a class="ajax-link" href="banner.php?&pid=<?php echo $menu['id']; ?>&edit=true">
								<button type="button" class="btn btn-xs btn-danger pull-right" name="editbanner">Edit</button>
								</a>
							</td>
						</tr>
						<?php } ?>
						
						</form>
					</tbody>
				 
				 </table>
            </div>
        </div>
    </div>
    
</div>

<?php } ?>

<?php require('footer.php'); ?>
