<aside class="sidebar">
	<h4>Categories</h4>
	<ul>
		<?php $side_category_sql=sqlfetch("SELECT * FROM category where actstat='1' order by fld_order");
		if(count($side_category_sql))
			foreach($side_category_sql as $side_category)
			{
		?>
		<li>&raquo; <a href="<?=SITE_URL;?>category/<?=urlencode($side_category['name']);?>.html"><?=$side_category['name'];?></a></li>
		<?php
			}
		?>
	</ul>
	<hr>
	
	<div class="quick_enquiry"> 
	<h4>Quick Enquiry</h4>
	<form method="post" action="mailer.html" class="form-horizontal ">
		<input type="text" placeholder="Name" class="form-control" name="name"/>
		<input type="email" placeholder="Email ID" class="form-control" name="email"/>
		<input type="text" placeholder="Mobile Number" class="form-control" name="phone"/>
		<input type="text" placeholder="Country" class="form-control" name="country"/>
		
		<textarea class="form-control" placeholder="Query...." name="query"></textarea>
		<input type="submit" placeholder="Country" class="btn btn-default quick_enquiry_btn" name="country"/>
	</form>
	</div>
</aside>