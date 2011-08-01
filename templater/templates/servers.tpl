{include file = "header.tpl"}
	<!-- BEGIN MAIN WRAPPER -->
	<div id="main-wrapper">
	
		<!-- BEGIN MAIN -->
		<div id="main">
                    <div class="blockWrapper">
                        <div class="addserver">
                            <div class="addheader">
                                <div class="title">Добавить сервер</div>
                            </div>
                            <div class="addbody">
                                <p><span>IP</span><input type="text" id="ip" /></p>
                                <p><span>Port</span><input type="text" id="ip" /></p>
                                <p><span>Query port</span><input type="text" id="ip" /></p>
                                <p><input type="button" id="send" value = "Добавить" /></p>
                            </div>
                        </div>
                    </div>
			
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
			
				<h4 class="widget-title">TOP - сервера</h4>
				
				
					
				</div>
						
			</div>
	
		</div>
		<!-- END SIDEBAR -->

	<!-- END MAIN WRAPPER -->
	 
{include file = "footer.tpl"}