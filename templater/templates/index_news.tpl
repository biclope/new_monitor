<!-- BEGIN NEWS WRAPPER -->
<div id="news-wrapper">
	<h3 class="section-title">Свежие новости</h3>
		{foreach from = $news_content item = news}
			<!-- BEGIN NEWS ITEM -->
			<div class="news-item">		
				<div class="news-thumb-wrapper">				
					<a href="{$news.url}"><img src="{$news.image}" alt="" /></a>
					
					<div class="news-arrows"></div>
					<h1><a href="{$news.url}">{$news.caption}</a></h1>
				</div>				
				<div class="news-meta-wrapper">
					<span class="news-meta">{$news.author}, {$news.date}</span>
					<span class="news-cats">
						{foreach from = $news.category item = cat name = categories}
							<a href = "{$cat.url}">{$cat.text}</a>
							{if not $smarty.foreach.categories.last}| {/if}
						{/foreach}
					</span>
				</div>
					
				<p>{$news.abstract}<a href="{$news.url}"><br />Читать дальше</a></p>
				
			</div>
			<!-- END NEWS ITEM -->			
		{/foreach}
				

			
</div>
			<!-- END NEWS WRAPPER -->
			
			<!-- BEGIN PAGINATION -->
			<div id="pagination">
			
				<span class="current">1</span> 
				<a href="#"><span>2</span></a> 
				<a href="#"><span>3</span></a> 
				<a href="#"><span>4</span></a> 
				<a href="#"><span>5</span></a>
				<a href="#"><span>6</span></a> 
				<a href="#"><span>7</span></a> 
				<a href="#"><span>8</span></a> 
				<a href="#"><span>Next</span></a>
			
			</div>
			<!-- END PAGINATION -->