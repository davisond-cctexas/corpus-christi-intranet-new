<?php
namespace Drupal\gavias_blockbuilder\shortcodes;
if(!class_exists('gsc_pricing_room')):
   class gsc_pricing_room{

      public function render_form(){
         $fields = array(
            'type' => 'gsc_pricing_room',
            'title' => ('Pricing Room'), 
            'fields' => array(
               array(
                  'id'        => 'title',
                  'type'      => 'text',
                  'title'     => t('Title'),
                  'desc'      => t('Title'),
                  'class'     => 'display-admin'
               ),
               array(
                  'id'        => 'image',
                  'type'      => 'upload',
                  'title'     => t('Image'),
               ),
               array(
                  'id'        => 'price',
                  'type'      => 'text',
                  'title'     => t('From Price'),
               ),  
               array(
                  'id'        => 'people',
                  'type'      => 'text',
                  'title'     => t('People Number'),
               ),
               array(
                  'id'        => 'content',
                  'type'      => 'textarea',
                  'title'     => t('Content'),
               ),
               array(
                  'id'        => 'link',
                  'type'      => 'text',
                  'title'     => t('Link'),
                  'desc'      => t('Link will appear only if this field will be filled.'),
               ),
               array(
                  'id'        => 'el_class',
                  'type'      => 'text',
                  'title'     => t('Extra class name'),
                  'desc'      => t('Style particular content element differently - add a class name and refer to it in custom CSS.'),
               ),
               array(
                  'id'        => 'animate',
                  'type'      => 'select',
                  'title'     => t('Animation'),
                  'desc'      => t('Entrance animation'),
                  'options'   => gavias_blockbuilder_animate()
               )
            )                                        
         );
         return $fields;
      }

      public function render_content( $item ) {
         if( ! key_exists('content', $item['fields']) ) $item['fields']['content'] = '';
         print self::sc_pricing_room( $item['fields'], $item['fields']['content'] );
      }

      public static function sc_pricing_room( $attr, $content = null ){
         global $base_url;
         extract(shortcode_atts(array(
            'title'        => '',
            'image'        => '',
            'price'        => '',
            'people'       => '8',
            'content'      => '',
            'link'         => '',
            'el_class'     => '',
            'animate'      => '',
         ), $attr));
            $class = $el_class; 
             if($animate){
               $class .= ' wow';
               $class .= ' '. $animate;
            }
            if($image) $image = $base_url . $image; 
         ?>
	     <?php ob_start() ?>
         <div class="pricing-room<?php if($class) print (' ' . $class) ?>">
            <div class="content-inner">
               <div class="content-image">
                 <?php if($link){ ?><a href="<?php print $link ?>"><?php } ?> 
                     <img src="<?php print $image ?>" alt="<?php print htmlentities(strip_tags($title)) ?>" />
                  <?php if($link){ ?></a><?php } ?>
                  <?php if($price){ ?><div class="price"><?php print $price; ?></div><?php } ?>
               </div>
               <div class="content-bottom clearfix"> 
                  <div class="left"><h3 class="title"><?php print $title; ?></h3></div>
                  <div class="right"><span class="people"><?php print $people; ?></span></div>
               </div>
               <?php if($content){ ?><div class="desc clearfix"><?php print $content; ?></div><?php } ?>
            </div>      
         </div>
	     <?php return ob_get_clean() ?>
         <?php
      }

      public function load_shortcode(){
         add_shortcode( 'pricing_room', array( $this, 'sc_pricing_room' ));
      }
   }
endif;   



