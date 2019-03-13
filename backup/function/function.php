 <?php
$siteTitle='Admin Panel';
session_start();
define('SITE_URL','http://localhost/redtake/demo1/');
function getPDOObject() {
$dsn = 'mysql:host=localhost;dbname=redtake;charset=utf8mb4';
$user = 'root';
$pass = '';
$pdo = new PDO($dsn, $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$pdo->setAttribute(PDO::ATTR_PERSISTENT, true);

   return $pdo;
}

function sqlfetch($query)
{
	$row=array();
	$pdo=getPDOObject();
	$sql=$pdo->query($query);
	
	$datas = $sql->fetchAll(PDO::FETCH_ASSOC);
	foreach($datas as $data)
	$row[]=$data;
	return $row;
}

function get_active_status_text($num)
{
	$status='';
	if($num==0)
		$status='<span class="label label-default">Deactive</span>';
	if($num==1)
		$status='<span class="label label-success">Active</span>';
	return $status;
}


function get_category_name($id)
{
	
	$name='';
	$sql=sqlfetch("SELECT * FROM category where id='$id'");
	if(count($sql))
		foreach($sql as $category)
	$name=$category['name'];
	return $name;
}

function get_product_name($id)
{
	$name='';
	$sql=sqlfetch("SELECT * FROM product where id='$id'");
	if(count($sql))
		foreach($sql as $product)
	$name=$product['name'];
	return $name;
}

function get_subproduct_name($id)
{
	$name='';
	$sql=sqlfetch("SELECT * FROM subproduct where id='$id'");
	if(count($sql))
		foreach($sql as $product)
	$name=$product['name'];
	return $name;
}


function get_category_id($name)
{
	
	$id=0;
	$sql=sqlfetch("SELECT * FROM category where name='$name' order by fld_order limit 1");
	if(count($sql))
		foreach($sql as $category)
			$id=$category['id'];
	return $id;
}

function get_product_id($name)
{
	
	$id=0;
	$sql=sqlfetch("SELECT * FROM product where name='$name' order by fld_order limit 1");
	if(count($sql))
		foreach($sql as $product)
			$id=$product['id'];
	return $id;
}


function get_subproduct_id($name)
{
	
	$id=0;
	$sql=sqlfetch("SELECT * FROM subproduct where name='$name' order by fld_order limit 1");
	if(count($sql))
		foreach($sql as $product)
			$id=$product['id'];
	return $id;
}

function get_product_cat($name)
{
	
	$id=0;
	$sql=sqlfetch("SELECT * FROM product where name='$name' order by fld_order limit 1");
	if(count($sql))
		foreach($sql as $product)
			$id=$product['subcat'];
	return $id;
}

function get_subproduct_prod($name)
{
	
	$id=0;
	$sql=sqlfetch("SELECT * FROM subproduct where name='$name' order by fld_order limit 1");
	if(count($sql))
		foreach($sql as $product)
			$id=$product['subcat'];
	return $id;
}

function get_num_sub_prod($id)
{
	
	$count=0;
	$sql=sqlfetch("SELECT * FROM `subproduct` where subcat='$id'");
	if(count($sql))
		$count=count($sql);
	return $count;
}

function get_page_id($name)
{
	$categoryname='';
	$data=sqlfetch("SELECT * FROM pages where name='$name'");
	foreach($data as $category)
	{
		$categoryname=$category['id'];
	}
	return $categoryname;
}


function get_first_prod_by_cat($id)
{
	$data=sqlfetch("SELECT * FROM product where subcat='$id' order by id limit 1");
	foreach($data as $product)
	$pid=$product['id'];
	return $pid;
}


?>