<div class="side-container">
          <div class="search-wrapper">
                <form action="/">
                  <input class="input search-input" type="text" value="<?php get_search_query(); ?>" name="s">
                  <input class=" input search-button" type="submit" value="Search">
                </form>
          </div>
          <div class="sidemenu-list-wrapper">
            <div class="widget">
              <h2>Pages</h2>
            <ul>
              <?php wp_list_pages('title_li='); ?>
            </ul>
            </div>

              <div class="widget">
              <h2>Archive</h2>
              <ul>
              <?php wp_get_archives('type=monthly'); ?>
            </ul>
              </div>
              <div class="widget">
              <h2>Categories</h2>
              <ul>
              <?php wp_list_categories('title_li='); ?>
              </ul>
              </div>
          </div>
          <div class="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </div>
      </div>
