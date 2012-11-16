<div id="footer">
    <div id="footer_interior">
        <?php
            $primary_links_tree = menu_tree_all_data('primary-links');
            //print_r($primary_links_tree);
            
            foreach ($primary_links_tree as $link):
                print '<div class="footer_menu_top_link">';
                print l($link['link']['title'], $link['link']['href']);
                
                if ($link['below']){
                    print '<div class="footer_menu_secondary_menu">';
                    foreach ($link['below'] as $secondary_link):
                        print '<div class="footer_menu_secondary_link">' . 
                              l($secondary_link['link']['title'], $secondary_link['link']['href']) .
                              '</div>';
                    endforeach;
                    print '</div>';
                    
                }
                
                print '</div>';
            endforeach
        ?>
        <div class="clear-block"></div>


    </div>
</div>