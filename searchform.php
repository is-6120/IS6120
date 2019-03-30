<form role="search" method="get" class="form-inline float-right" action="<?php echo home_url('/'); ?>">
	<input type="text" value="" class="form-control search-bar border-secondary px-3" id="s" placeholder="
		<?php if (strlen(trim(get_search_query()))!= 0) : 
			the_search_query();
		else:
			echo 'Search';
		endif ?>" />
	<button type="submit" class="btn search-btn" value="Find">
		<i class="fa fa-search"></i>
	</button>
</form>