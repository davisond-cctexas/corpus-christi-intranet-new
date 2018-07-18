<?php 
namespace Drupal\gavias_blockbuilder\shortcodes;
if(!class_exists('gsc_column_without_html')):
   class gsc_column_without_html{

      public function render_form(){
         $fields = array(
            'type' => 'gsc_column_without_html',
            'title' => t('Custom Text Without Html'),
            'size' => 3,
            'fields' => array(
               
               array(
                  'id'     => 'title',
                  'type'      => 'text',
                  'title'  => t('Title'),
                   'class'     => 'display-admin'
               ),
               array(
                  'id'           => 'content',
                  'type'         => 'textarea_no_html',
                  'title'        => t('Column content'),
               ),
               array(
                  'id'     => 'animate',
                  'type'      => 'select',
                  'title'  => ('Animation'),
                  'desc'  => t('Entrance animation for element'),
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
         return $fields;
      }


      public function render_content( $item ) {
         print self::sc_column_without_html( $item['fields'] );
      }


      public static function sc_column_without_html( $attr, $content = null ){
         extract(shortcode_atts(array(
            'title'      => '',
            'content'    => '',
            'el_class'   => '',
            'animate'    => ''
         ), $attr));
         if($animate){
            $el_class .= ' wow';
            $el_class .= ' ' . $animate;
         }
         $ouput = '';
         $ouput .= '<div class="column-content '.$el_class.'">';
         $ouput .= do_shortcode( $content );
         $ouput .= '</div>';
         return $ouput;
      }

      public function load_shortcode(){
         add_shortcode( 'text_without_html', array($this, 'sc_column_without_html') );
      }
   }
 endif;  



