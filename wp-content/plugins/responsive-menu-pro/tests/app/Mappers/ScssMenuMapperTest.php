<?php

use PHPUnit\Framework\TestCase;

class ScssMenuMapperTest extends TestCase {

  public function setUp() {

    $this->collection = new ResponsiveMenuPro\Collections\OptionsCollection;
    $this->collection->add(new ResponsiveMenuPro\Models\Option('breakpoint', 111));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_close_on_body_click', 'on'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('page_wrapper', '#wrapper'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_overlay_colour', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_auto_height', 'off'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('animation_speed', 222));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_width', 333));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_width_unit', '%'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_appear_from', 'left'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_background_colour', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_text_alignment', 'right'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_additional_content_colour', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_search_box_background_colour', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_sub_arrow_shape_colour_active', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_sub_arrow_border_colour_active', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_sub_arrow_background_colour_active', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_sub_arrow_shape_hover_colour_active', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_sub_arrow_border_hover_colour_active', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_sub_arrow_background_hover_colour_active', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_word_wrap', 'on'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_search_box_border_colour', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_search_box_text_colour', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_search_box_placholder_colour', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_maximum_width', 444));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_maximum_width_unit', 'px'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_minimum_width', 555));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_minimum_width_unit', 'px'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_font', 'Arial'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('transition_speed', 777));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_title_background_colour', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_title_colour', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_title_font_size', 888));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_title_font_size_unit', 'px'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_title_hover_colour', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_title_background_hover_colour', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_font_size', 999));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_font_size_unit', 'px'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_links_height', 1000));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_links_height_unit', 'px'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_item_border_colour', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_link_colour', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_item_background_colour', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_link_hover_colour', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_item_background_hover_colour', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_item_border_colour_hover', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_sub_arrow_shape_hover_colour', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_sub_arrow_border_hover_colour', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_sub_arrow_background_hover_colour', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('arrow_position', 'left'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('submenu_arrow_height', 2000));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('submenu_arrow_height_unit', 'px'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('submenu_arrow_width', 3000));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('submenu_arrow_width_unit', 'px'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_sub_arrow_shape_colour', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_sub_arrow_border_colour', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_sub_arrow_background_colour', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_current_item_background_colour', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_current_link_colour', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_current_item_border_colour', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_current_item_background_hover_colour', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_current_link_hover_colour', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_current_item_border_hover_colour', '#ffffff'));
    $this->collection->add(new ResponsiveMenuPro\Models\Option('menu_to_hide', '#tohide'));
    $this->scss = new scssc_pro;
    $this->mapper = new ResponsiveMenuPro\Mappers\ScssMenuMapper($this->scss);
  }

  public function testThis() {
    $mapped = $this->mapper->map($this->collection);
    $this->assertContains('width: 333%;', $mapped);
    $this->assertContains('max-width: 444px;', $mapped);
    $this->assertContains('min-width: 555px;', $mapped);

  }

}
