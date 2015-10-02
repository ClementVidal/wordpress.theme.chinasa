<?php


class bootstrap_menuwalker extends Walker_Nav_Menu
{
    /**
     * Starts the list before the elements are added.
     */
    public function start_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
        $this->isInSubMenu = true;
    }

    /**
     * Ends the list of after the elements are added.
     */
    public function end_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
        $this->isInSubMenu = false;
    }

    private $isInSubMenu = false;
    /**
     * Start the element output.
     */
    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-'.$item->ID;

        if( $this->isInSubMenu ) {
            $classes[] = 'dropdown-item';
        } else {
            $classes[] = 'nav-item';
        }

        $hasChildren = in_array('menu-item-has-children', $classes);

        if ($hasChildren) {
            $classes[] = 'dropdown';
        }

        /*
         * Filter the CSS class(es) applied to a menu item's list item element.
         */
        $class_names = implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="'.esc_attr($class_names).'"' : '';

        /*
         * Filter the ID applied to a menu item's list item element.
         */
        $id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args, $depth);
        $id = $id ? ' id="'.esc_attr($id).'"' : '';

        $output .= $indent.'<li'.$id.$class_names.'>';

        $atts = array();
        $atts['title'] = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target)     ? $item->target     : '';
        $atts['rel'] = !empty($item->xfn)        ? $item->xfn        : '';
        $atts['href'] = !empty($item->url)        ? $item->url        : '';
        if ($hasChildren) {
            $atts['href']   		= '#';
            $atts['class'] = 'dropdown-toggle nav-link';
            $atts['data-toggle']	= 'dropdown';
        } else {
            $atts['class'] = 'nav-link';
        }

        /*
         * Filter the HTML attributes applied to a menu item's anchor element.
         */
        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' '.$attr.'="'.$value.'"';
            }
        }

        $item_output = $args->before;
        $item_output .= '<a'.$attributes.'>';
        /* This filter is documented in wp-includes/post-template.php */
        $item_output .= $args->link_before.apply_filters('the_title', $item->title, $item->ID).$args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        /*
         * Filter a menu item's starting output.
         */
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    /**
     * Ends the element output, if needed.
     */
    public function end_el(&$output, $item, $depth = 0, $args = array())
    {
        $output .= "</li>\n";
    }
}
