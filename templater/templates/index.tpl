{include file = "header.tpl"}

{if $slider_show eq true}
	{include file = "slider.tpl"}
{/if}
	<!-- BEGIN MAIN WRAPPER -->
	<div id="main-wrapper">
	
		<!-- BEGIN MAIN -->
		<div id="main">
			
		{include file = "index_news.tpl"}
			
		</div>
		<!-- END MAIN -->
		
		<!-- BEGIN SIDEBAR -->
		<div id="sidebar">
			
			{if $banner_show eq true}
			<!-- BEGIN WIDGET BANNER -->
			<div class="widget-banner">
			
				<img src="./images/sidebar-banner.jpg" alt="" />
			
			</div>
			<!-- END WIDGET BANNER -->
			{/if}
			
			<div class="widget">
			
				<h4 class="widget-title">Статистика</h4>
				
				<img src="images/users.png" alt="users" /> 0
				<img src="images/servers.png" alt="servers" /> 0
				

				
			</div>
			
			<div class="widget">
			
				<h4 class="widget-title">Новобранцы</h4>
				
				
					
				</div>
						
			</div>
	
		</div>
		<!-- END SIDEBAR -->

	<!-- END MAIN WRAPPER -->
	 
{include file = "footer.tpl"}