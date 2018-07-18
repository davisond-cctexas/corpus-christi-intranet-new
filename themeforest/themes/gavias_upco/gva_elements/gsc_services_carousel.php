<?php 
namespace Drupal\gavias_blockbuilder\shortcodes;
if(!class_exists('gsc_services_carousel')):
   class gsc_services_carousel{

      public function render_form(){
         $fields = array(
            'type'   => 'gsc_services_carousel',
            'title'  => t('Services Carousel'),
            'size'   => 3,
            'fields' => array(
               array(
                  'id'     => 'title',
                  'type'   => 'text',
                  'title'  => t('Title For Admin'),
               ),
               array(
                  'id'     => 'more_link',
                  'type'   => 'text',
                  'title'  => t('Link view more'),
               ),
               array(
                  'id'     => 'more_text',
                  'type'   => 'text',
                  'title'  => t('Text Link view more'),
               ),
               array(
                  'id'        => 'style',
                  'type'      => 'select',
                  'title'     => t('Style'),
                  'options'   => array(
                     'style-1'   => 'Style 1',
                     'style-2'   =>'Style 2'
                  )
               ),
               array(
                  'id'        => 'animate',
                  'type'      => 'select',
                  'title'     => ('Animation'),
                  'desc'      => t('Entrance animation for element'),
                  'options'   => gavias_blockbuilder_animate(),
               ),
               array(
                  'id'        => 'el_class',
                  'type'      => 'text',
                  'title'     => t('Extra class name'),
                  'desc'      => t('Style particular content element differently - add a class name and refer to it in custom CSS.'),
               ),   
            ),                                     
         );

         for($i=1; $i<=10; $i++){
            $fields['fields'][] = array(
               'id'     => "info_${i}",
               'type'   => 'info',
               'desc'   => "Information for item {$i}"
            );
            $fields['fields'][] = array(
               'id'        => "title_{$i}",
               'type'      => 'text',
               'title'     => t("Title {$i}")
            );
            $fields['fields'][] = array(
               'id'           => "icon_{$i}",
               'type'         => 'text',
               'title'        => t("Icon {$i}"),
            );
            $fields['fields'][] = array(
               'id'        => "content_{$i}",
               'type'      => 'textarea_no_html',
               'title'     => t("Title {$i}")
            );
            $fields['fields'][] = array(
               'id'        => "link_{$i}",
               'type'      => 'text',
               'title'     => t("Link {$i}")
            );
         }
         return $fields;
      }

      public function render_content( $item ) {
         print self::sc_services_carousel( $item['fields'] );
      }

      public static function sc_services_carousel( $attr, $content = null ){
         global $base_url;
         $default = array(
            'title'      => '',
            'more_link'  => '',
            'more_text'  => 'View all services',
            'style'      => 'style-1',
            'el_class'   => '',
            'animate'    => '',
         );

         for($i=1; $i<=10; $i++){
            $default["title_{$i}"] = '';
            $default["icon_{$i}"] = '';
            $default["content_{$i}"] = '';
            $default["link_{$i}"] = '';
         }

         extract(shortcode_atts($default, $attr));

         if($animate){
            $el_class .= ' wow';
            $el_class .= ' ' . $animate;
         }
         $_id = gavias_blockbuilder_makeid();
         
         ?>
         <?php ob_start() ?>
         
         <?php if($style == 'style-1'){ ?>

            <div class="gsc-service-carousel <?php print $el_class ?> <?php print $style ?>"> 
               <div class="owl-carousel init-carousel-owl owl-loaded owl-drag" data-items="5" data-items_lg="5" data-items_md="4" data-items_sm="3" data-items_xs="2" data-loop="1" data-speed="500" data-auto_play="0" data-auto_play_speed="2000" data-auto_play_timeout="5000" data-auto_play_hover="1" data-navigation="1" data-rewind_nav="0" data-pagination="0" data-mouse_drag="1" data-touch_drag="1">
                  <?php for($i=1; $i<=10; $i++){ ?>
                     <?php 
                        $title = "title_{$i}";
                        $icon = "icon_{$i}";
                        $link = "link_{$i}";
                        $content = "content_{$i}";
                     ?>
                     <?php if($$title){ ?>
                        <div class="item">
                           <div class="content-inner tooltiper" data-tooltip-content="#gsc-serivce-carousel-tt-<?php print $i ?>">
                              <?php if($$icon){ ?><div class="icon"><a href="<?php print $$link ?>"><i class="<?php print $$icon ?>"></i></a></div><?php } ?>         
                              <?php if($$title){ ?><div class="title"><a href="<?php print $$link ?>"><?php print $$title ?></a></div><?php } ?>
                           </div>
                           <?php if($$content){ ?>
                              <div class="hidden"><div id="gsc-serivce-carousel-tt-<?php print $i ?>"><div class="tooltip-template"><div class="text"><?php print $$content ?></div><?php if($$icon){ ?><i class="icon <?php print $$icon ?>"></i><?php } ?> </div></div></div>
                           <?php } ?>   
                        </div>
                     <?php } ?>    
                  <?php } ?>
               </div> 
               <?php if($more_link){ ?>
                  <div class="read-more"><a class="btn-theme" href="<?php print $more_link ?>"><?php print $more_text ?></a></div>
               <?php } ?>   
            </div>   

         <?php } ?>   

         <?php if($style == 'style-2'){ ?>

            <div class="gsc-service-carousel <?php print $el_class ?> <?php print $style ?>"> 
               <div class="owl-carousel init-carousel-owl owl-loaded owl-drag" data-items="4" data-items_lg="4" data-items_md="4" data-items_sm="3" data-items_xs="2" data-loop="1" data-speed="500" data-auto_play="0" data-auto_play_speed="2000" data-auto_play_timeout="5000" data-auto_play_hover="1" data-navigation="0" data-rewind_nav="0" data-pagination="1" data-mouse_drag="1" data-touch_drag="1">
                  <?php for($i=1; $i<=10; $i++){ ?>
                     <?php 
                        $title = "title_{$i}";
                        $icon = "icon_{$i}";
                        $link = "link_{$i}";
                        $content = "content_{$i}";
                     ?>
                     <?php if($$title){ ?>
                        <div class="item">
                           <div class="content-inner">
                              <?php if($$icon){ ?><div class="icon"><i class="<?php print $$icon ?>"></i></div><?php } ?>         
                              <?php if($$title){ ?><div class="title"><?php print $$title ?></div><?php } ?>
                              <?php if($$content){ ?><div class="desc"><?php print $$content ?></div><?php } ?>
                              <?php if($$link){ ?><div class="action"><a class="btn-theme" href="<?php print $$link ?>"><?php print t('Learn more') ?></a></div><?php } ?>
                           </div>
                        </div>
                     <?php } ?>    
                  <?php } ?>
               </div> 
               <?php if($more_link){ ?>
                  <div class="read-more"><a class="btn-theme" href="<?php print $more_link ?>"><?php print $more_text ?></a></div>
               <?php } ?>   
            </div>   

         <?php } ?>

         <?php return ob_get_clean();
      }

      public function load_shortcode(){
         add_shortcode( 'services_carousel', array($this, 'sc_services_carousel') );
      }
   }
 endif;  



