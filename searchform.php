<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
  <label for="search-field"><?php echo _x('Search for:', 'label', 'thriveguitar'); ?></label>
  <input type="search" id="search-field" class="search-field" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'thriveguitar'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
  <button type="submit" class="search-submit"><?php echo esc_html_x('Search', 'submit button', 'thriveguitar'); ?></button>
</form>