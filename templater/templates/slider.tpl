	<!-- BEGIN SLIDER -->
	<div class="slider">
	
		<div class="sliderContent">
			{foreach from = $slider_content item=featured}
			<!-- BEGIN FEATURED ITEM -->
			<div class="featured-item" style="background:#000 url({$featured.image}) no-repeat center; height:280px;">
				
				<div class="featured-inner">
					
					<div class="featured-inner">
					
						<div class="featured-arrows"></div>
						<h1><a href="{$featured.url}">{$featured.text}</a></h1>
						<p class="featured-meta">{$featured.author}</p>
						
					</div>
						
				</div>
				
			</div>
			<!-- END FEATURED ITEM -->				
			{/foreach}
			
		</div>
		
		<div class="top-overlay"></div>
		<div class="bottom-overlay"></div>
		
	</div>
	<!-- END SLIDER -->
