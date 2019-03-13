<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<aside class="sidebar">
	<div class="fb-page" data-href="https://www.facebook.com/Redtake-Media-806442899530259/" data-tabs="timeline" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Redtake-Media-806442899530259/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Redtake-Media-806442899530259/">Redtake Media</a></blockquote></div>
	<hr>
	<!--<h4>Categories</h4>
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
	-->
	<div class="contactForm quick_enquiry"> 
	<h4>Quick Enquiry</h4>
	<form id="contactForm" method="post" action="<?=SITE_URL;?>mailer.html" class="form-horizontal ">
		<input type="text" placeholder="Name" class="form-control" name="fname"/>
		<input type="email" placeholder="Email ID" class="form-control" name="emailid"/>
		<input type="text" placeholder="Mobile Number" class="form-control" name="phone"/>
		<textarea class="form-control" placeholder="Query...." name="query"></textarea>
		<input type="submit" value="Send Now" placeholder="Country" class="btn btn-primary btn-sm filled" name="mail_query"/>
	</form>
	</div>
</aside>