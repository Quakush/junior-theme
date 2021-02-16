<form class="form searching-form" action="/" method="get">

	<!--<input type="hidden" name="cat" value="70">-->
	<div class="searching-form__inner-wrap">
		<input type="text" name="s" id="search" value="<?php the_search_query();?>" placeholder='Например "Искусственный интеллект"' required>

		<button class="btn  btn--green" type="submit">
			<svg><use xlink:href="/wp-content/themes/js-corp/images/svg/sprite.svg#search"></use></svg>
			Поиск
		</button>
	</div>

</form>
            