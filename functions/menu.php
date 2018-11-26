<?php
if (!function_exists('menu')) {
    /**
     * Get menu items by slug
     * @param  string  $slug  Menu slug
     */
    function menu($slug) {
        $menus = wp_get_nav_menu_items($slug);
        // dd($menus);
        if (empty($menus) || is_wp_error($menus)) {
            return [];
        }

        $menus = groupMenu($menus);

        // dd(get_post_meta($menus[0][4]->ID));
        $ret = [];
        // var_dump($menus); exit();
        foreach ($menus[0] as $key => $menu) {
            $children = [];
            $sub_children = [];

            if (!empty($menus[$menu->ID])) {
                $loop = 0;
                foreach ($menus[$menu->ID] as $child) {
                    $children[] = [
                        'url' => $child->url,
                        'title' => $child->title,
                        'id_menu' => $child->ID,
                    ];

                    if ($menus[$child->ID]) {
                        foreach ($menus[$child->ID] as $index => $sub_child) {
                            $sub_children[$loop][$index] = [
                                'url' => $sub_child->url,
                                'title' => $sub_child->title,
                                'id_menu' => $sub_child->ID,
                            ];
                        }

                        $loop++;
                    }
                }
            }

            $ret[] = [
                'url' => $menu->url,
                'title' => $menu->title,
                'type' => $menu->type,
                'target' => $menu->type == 'custom' ? get_post_meta($menu->ID, '_menu_item_target', true) : '',
                'hasChild' => !empty($children) ? true: false,
                'child' => !empty($children) ? $children: [],
                'hasSubChild' => !empty($sub_children) ? true: false,
                'sub_children' => !empty($sub_children) ? $sub_children: [],
                'id_menu'=>$menu->ID,
            ];
        }
        wp_reset_query();
        return $ret;
    }

    /**
     * Grouping menu by parent id
     * @param  array  $menus    Array of menu
     * @return array            Grouped menu keyed by parent id
     */
    function groupMenu(array $menus) {

        $ret = [];

        foreach ($menus as $key => $menu) {
            $ret[(int)$menu->menu_item_parent][] = $menu;
        }

        return $ret;
    }

    function buildChildMenu()
    {

    }
}
