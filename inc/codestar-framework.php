<?php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    // Set a unique slug-like ID
    $prefix = '_choose-design';
    /************************************************************************/
    // Theme Options settings
    /***************************************************************************/
    CSF::createOptions( $prefix, array(
        'menu_title' => 'Choose-Design',
        'menu_slug'  => 'choose_design_options',
        'framework_title'         => '<img src="'.get_template_directory_uri(). '/asset/img/choose-logo.png" style="width:100px;"><small> by combrokers team</small>',
        'framework_class'         => '',
      ) );
  
    /************************************************************************/
    // Theme basic settings
    /***************************************************************************/
    CSF::createSection( $prefix, array(
        'id'    => 'basic_settings',
        'title' => 'Basic Settings',
        'icon'  => 'fas fa-cogs',
    ) );

        /************************************************************************/
        // Theme basic header settings
        /***************************************************************************/

        CSF::createSection( $prefix, array(
            'parent'      => 'basic_settings',
            'title'       => 'Header Settings',
            'description' => 'This field will manage your theme header logo settings',
            'fields'      => array(
        
                array(
                    'id'    => 'main-logo',
                    'type'  => 'media',
                    'title' => 'Main Logo',
                    'subtitle'  => __('Upload your logo', 'choose-design' ),
                    'default'   => array('url' => get_template_directory_uri(). '/asset/img/choose-logo.png'),
                ),

                array(
                    'id'    => 'main-favicon',
                    'type'  => 'media',
                    'title' => 'Upload Your Favicon',
                    'subtitle'  => __('Upload your favicon', 'choose-design' ),
                    'default'   => array('url' => get_template_directory_uri(). '/asset/img/Favicon-choose.png'),
                )
            )
        ) );
    
        /************************************************************************/
        // Theme basic Footer settings
        /***************************************************************************/
        CSF::createSection( $prefix, array(
            'parent'      => 'basic_settings',
            'title'       => 'Footer Settings',
            'description' => 'This field will manage your theme footer widgets settings',
            'fields'      => array(

                array(
                    'type'    => 'subheading',
                    'content' => 'Footer Left Info',
                ),

                array(
                    'id'       => 'footer_left_text',
                    'type'     => 'wp_editor',
                    'title'    => 'Enter Footer Text',
                    'default'  => __('© Copyright Choose-design. All Rights Reserved', 'choose-design'),
                    'attributes' => array('style'    => 'width: 100%;'),
                ),

                array(
                  'id'      => 'footer_left_switch',
                  'type'    => 'switcher',
                  'title'   => 'Footer Text Active?',
                  'label'   => 'Do you want activate it ?',
                  'default' => true
                ),

                array(
                  'type'    => 'subheading',
                  'content' => 'Footer Right Info',
              ),

                array(
                    'id'       => 'footer_right_text',
                    'type'     => 'wp_editor',
                    'title'    => 'Enter Footer Text',
                    'default'  => __('Designed by <a href="https://combrokers.no">Combrokers</a>', 'choose-design'),
                    'attributes' => array('style' => 'width: 100%;'),
                ),
                array(
                  'id'      => 'footer_right_switch',
                  'type'    => 'switcher',
                  'title'   => 'Footer Text Active?',
                  'label'   => 'Do you want activate it ?',
                  'default' => true
                ),

            )
            ));

        /************************************************************************/
        // Theme basic Footer settings
        /***************************************************************************/
        CSF::createSection( $prefix, array(
          'parent'      => 'basic_settings',
          'title'       => 'Social Settings',
          'description' => 'This field will manage your theme footer widgets settings',
          'fields'      => array(
      
              array(
                  'id'       => 'footer_social_text',
                  'type'     => 'text',
                  'title'    => 'Enter Footer Heading',
                  'default'  => __('Follow us:', 'choose-design'),
                  'attributes' => array('style'    => 'width: 100%;'),
              ),

              array(
                'id'     => 'social_repeter',
                'type'   => 'repeater',
                'title'  => 'Add Footer Social Media',
                'fields' => array(
                  array(
                    'id'    => 'social_status',
                    'type'  => 'switcher',
                    'title' => 'Enable Icon',
                    'default' =>  false,
                  ),
                  array(
                    'id'    => 'social_text_link',
                    'type'  => 'textarea',
                    'title' => 'Footer Social Icon',
                    'default' =>  '#',
                  ),
                  
                )

              ),

          )
        ));


    /************************************************************************/
    // Theme frontend settings
    /***************************************************************************/
    CSF::createSection( $prefix, array(
        'id'    => 'frontend_settings',
        'title' => 'Homepage Settings',
        'icon'  => 'fas fa-home',
    ) );

      /************************************************************************/
      // Theme Frontend settings
      /***************************************************************************/

      CSF::createSection( $prefix, array(
        'parent'      => 'frontend_settings',
        'title'       => 'Hero Section Settings',
        'description' => 'This settings will maange your hompage hero section contents. Explore the settngs and configure it as you want.',
        'fields'      => array(
  
          array(
            'id'     => 'hero_slider_image',
            'type'   => 'repeater',
            'title'  => 'Add Slider Image',
            'fields' => array(
              array(
                'id'    => 'hero_slider_image_items',
                'type'  => 'media',
                'subtitle'  => __('Upload your slider', 'choose-design' ),
                'desc' => 'Please upload the image with 1600x600 image. If you dont follow the size then image come broken.',
              ),
              
            )

          )
        )
      ));
      /************************************************************************/
      // Theme Homepage settings
      /***************************************************************************/

      CSF::createSection( $prefix, array(
        'parent'      => 'frontend_settings',
        'title'       => 'Conten Section',
        'description' => 'This settings will maange your hero all the contents. Explore the settngs and configure it as you want.',
        'fields'      => array(
    
          array(
            'id'       => 'content_title',
            'type'     => 'text',
            'title'    => 'Enter Heading Text',
            'default'  => __('INTERIØRARKITEKTUR <span>& DESIGN</span>', 'choose-design'),
            'attributes' => array('style'    => 'width: 100%;'),
          ),
          array(
            'id'       => 'content_description',
            'type'     => 'wp_editor',
            'title'    => 'Enter Description',
            'default'  => __('CHOOSE design & interiør as elsker å tilby spennende og flotte prosjekter i tråd med våre kunders behov og ønsker.
            Vi har høyt fokus på gode løsninger i hvert prosjekt som skal fungere optimalt i kombinasjon med flott design.
            Vi er opptatt av den «røde» tråden gjennom hele prosjektet og at hvert rom har det «lille ekstra» å by på.', 'choose-design'),
            'attributes' => array('style'    => 'width: 100%;'),
          ),
        )
      ));

    /************************************************************************/
    // Project settings
    /***************************************************************************/

      CSF::createSection( $prefix, array(
        'parent'      => 'frontend_settings',
        'title'       => 'Project Settings',
        'description' => 'This settings will maange your project section. Explore the settngs and configure it as you want.',
        'fields'      => array(
    
          array(
            'id'       => 'project_title',
            'type'     => 'text',
            'title'    => 'Enter Project Title',
            'default'  => __('PROSJEKTER', 'choose-design'),
            'attributes' => array('style'    => 'width: 100%;'),
          ),
          array(
            'id'       => 'project_sub_title',
            'type'     => 'text',
            'title'    => 'Enter Sub Heading Text',
            'default'  => __('(TRYKK på bildet)', 'choose-design'),
            'attributes' => array('style'    => 'width: 100%;'),
          ),
          array(
            'id'       => 'project_description',
            'type'     => 'wp_editor',
            'title'    => 'Enter Project Description',
            'default'  => __('Choose design & interiør as har høy fokus på gode løsninger i hvert prosjekt som skal fungere optimalt for våre kunders behov og ønsker.
            Vi holder til på Sørlandet, men vi tar oppdrag i hele landet.            
            Vi jobber med alle typer prosjekter innenfor bolig markedet som eneboliger, renovering/oppussing, fritidsbolig, og det offentlige rom.', 'choose-design'),
            'attributes' => array('style'    => 'width: 100%;'),
          ),
          
        )
      ));

      /************************************************************************/
      // About Frontend settings
      /***************************************************************************/

      CSF::createSection( $prefix, array(
        'parent'      => 'frontend_settings',
        'title'       => 'About Section',
        'description' => 'This settings will manage your about section. Explore the settngs and configure it as you want.',
        'fields'      => array(    
          array(
            'id'       => 'about_title',
            'type'     => 'text',
            'title'    => 'Enter About Title',
            'default'  => __('Kontakt Choose design <span>& interiør as</span>', 'choose-design'),
            'attributes' => array('style'    => 'width: 100%;'),
          ),
          array(
            'id'       => 'about_description',
            'type'     => 'wp_editor',
            'title'    => 'Enter Description',
            'default'  => __('Anne Karin Krispinussen
            Daglig Leder/Interiør designer
            Tel: +47 922 68 770
            E-post: ak@choosedesign.no
            Hånestangen 91
            4635 Kristiansand', 'choose-design'),
            'attributes' => array('style'  => 'width: 100%;'),
          ),
          array(
            'id'       => 'about_image',
            'type'     => 'media',
            'title'    => 'Upload Your Image',
            'subtitle'  => __('Upload your Image', 'choose-design' ),
            'default'   => array('url' => get_template_directory_uri(). '/asset/img/auth-img.jpg'),
          ),
        )
      ));

    /************************************************************************/
    // Instagram settings
    /***************************************************************************/

    CSF::createSection( $prefix, array(
      'parent'      => 'frontend_settings',
      'title'       => 'Instagram Setting',
      'description' => 'This settings will maange your instagram section. Explore the settngs and configure it as you want.',
      'fields'      => array(  
          array(
              'type'    => 'subheading',
              'content' => 'Left Icon Info',
          ),
          array(
            'id'    => 'social_icon_left_switch',
            'type'  => 'switcher',
            'title' => 'Enable Icon',
            'default' =>  false,
          ),
          array(
            'id'    => 'social_left_icons',
            'type'  => 'text',
            'title' => 'Social Icon',
            'default' =>  '<i class="bi bi-instagram bi--md bi--spin"> </i>',
            'attributes' => array('style'  => 'width: 100%;'),
          ),
          array(
            'id'    => 'social_icons_left_link',
            'type'  => 'text',
            'title' => 'Enter Social Link',
            'default' =>  '#',
            'attributes' => array('style'  => 'width: 100%;'),
          ), 
          
          array(
            'type'    => 'subheading',
            'content' => 'Right Icon Info',
          ),
          array(
            'id'    => 'social_icon_right_switch',
            'type'  => 'switcher',
            'title' => 'Enable Icon',
            'default' =>  false,
          ),
          array(
            'id'    => 'social_right_icons',
            'type'  => 'text',
            'title' => 'Social Icon',
            'default' =>  '<i class="bi bi-facebook bi--md bi--spin"></i>',
            'attributes' => array('style'  => 'width: 100%;'),

          ),
          array(
            'id'    => 'social_icons_right_link',
            'type'  => 'text',
            'title' => 'Enter Social Link',
            'default' =>  '#',
            'attributes' => array('style'  => 'width: 100%;'),
          ),
    

        ),
        
      
    ));


    /************************************************************************/
    // Theme About settings
    /***************************************************************************/
    CSF::createSection( $prefix, array(
        'id'    => 'about_settings',
        'title' => 'Aboutpage Settings',
        'icon'  => 'fas fa-info-circle',
    ) );

    /************************************************************************/
    // Theme About Breadcrumbs settings
    /***************************************************************************/

    CSF::createSection( $prefix, array(
      'parent'      => 'about_settings',
      'title'       => 'About Breadcrumbs Settings',
      'description' => 'This settings will maange your about page contents. Explore the settngs and configure it as you want.',
      'fields'      => array(

        array(
          'id'    => 'about_page_title',
          'type'  => 'text',
          'title' => 'Enter About Page Title',
          'default' => __('Om', 'choose-design'),
          'attributes' => array('style'  => 'width: 100%;'),
        ),
        array(
          'id'    => 'about_page_breadcrumbs',
          'type'  => 'media',
          'title' => 'Upload image',
          'subtitle' => 'Please upload the image with 1600x330px image',
          'desc' => 'Please upload the image with 1600x330px image. If you dont follow the size then image come broken.',
          'default'   => array('url' => 'https://via.placeholder.com/1600x330'),
        ),

      )
    ));
  /************************************************************************/
  // Theme About Left settings
  /***************************************************************************/
    CSF::createSection( $prefix, array(
      'parent'      => 'about_settings',
      'title'       => 'About Left Settings',
      'description' => 'This settings will maange your about page contents. Explore the settngs and configure it as you want.',
      'fields'      => array(
          array(
            'type'    => 'subheading',
            'content' => 'About Page Left Section',
          ),
          array(
            'id'    => 'about_page_left_title',
            'type'  => 'text',
            'title' => 'Enter Title',
            'default' => __('I media', 'choose-design'),
            'desc' => 'This title for for about section left side card',
            'attributes' => array('style'  => 'width: 100%;'),
          ),
  
          array(
            'id'     => 'about_page_left_all_item',
            'type'   => 'repeater',
            'title'  => 'Add Your Content',
            'fields' => array(
              array(
                'id'    => 'about_page_left_items',
                'type'  => 'text',
                'subtitle'  => __('Enter Content', 'choose-design' ),
                'default' => __('Choose Design', 'choose-design'),
                'desc' => 'This is for list item content for left side',
                'attributes' => array('style'  => 'width: 100%;'),
              ),
              
            )
  
          ),
      )
    
    ));

  /************************************************************************/
  // Theme About Middle settings
  /***************************************************************************/
    CSF::createSection( $prefix, array(
      'parent'      => 'about_settings',
      'title'       => 'About Middle Settings',
      'description' => 'This settings will maange your about page contents. Explore the settngs and configure it as you want.',
      'fields'      => array(
         
        array(
          'type'    => 'subheading',
          'content' => 'About Page Middle Section',
        ),

        array(
          'id'    => 'about_page_middle_desc',
          'type'  => 'wp_editor',
          'title' => 'Enter Description',
          'default' => __('Anne Karin Krispinussen har siden 1992 og frem til d.d. hatt et brennende engasjement for interiør og arkitektur. Dette har resultert i mange prosjekter i tidens løp innenfor det private markedet; enebolig, fritidsbolig, renovering, men også prosjekter i det offentlige rom. Flere prosjekter har vært omtalt i media og flere har vært brukt i reklamemateriell. Hyttemagasiner har også hatt interesse for prosjektene i årenes løp. Anne Karin elsker å skape, finne gode løsninger som fungere bra i hverdagen, samt trekker inn de siste trender på markedet slik at hvert prosjekt preges av spennende løsninger og gir et resultat som blir mer en tilfredsstillende for kunden.', 'choose-design'),
        ),

      )
    
    ));

  /************************************************************************/
  // Theme About Right settings
  /***************************************************************************/
  CSF::createSection( $prefix, array(
    'parent'      => 'about_settings',
    'title'       => 'About Right Settings',
    'description' => 'This settings will maange your about page contents. Explore the settngs and configure it as you want.',
    'fields'      => array(
       
      array(
        'type'    => 'subheading',
        'content' => 'About Page Right Section',
      ),

      array(
        'id'    => 'about_page_right_img',
        'type'  => 'media',
        'title' => 'Upload image',
        'subtitle' => 'Please upload the image with 280x500px image',
        'desc' => 'Please upload the image with 280x500px image. If you dont follow the size then image come broken.',
        'default'   => array('url' => 'https://via.placeholder.com/280x500'),
      ),

    )
  
  ));

  /************************************************************************/
  // Theme About settings
  /***************************************************************************/
  CSF::createSection( $prefix, array(
    'id'    => 'service_settings',
    'title' => 'Service Settings',
    'icon'  => 'fas fa-eject',
  ));

  /************************************************************************/
  // Theme Service Breadcrumbs settings
  /***************************************************************************/

  CSF::createSection( $prefix, array(
    'parent'      => 'service_settings',
    'title'       => 'Service Settings',
    'description' => 'This settings will maange your service page contents. Explore the settngs and configure it as you want.',
    'fields'      => array(

      array(
        'id'    => 'service_page_title',
        'type'  => 'text',
        'title' => 'Enter Service Page Title',
        'default' => __('TJENESTER', 'choose-design'),
        'attributes' => array('style'  => 'width: 100%;'),
      ),
      array(
        'id'    => 'service_page_breadcrumbs',
        'type'  => 'media',
        'title' => 'Upload image',
        'subtitle' => 'Please upload the image with 1600x330px image',
        'desc' => 'Please upload the image with 1600x330px image. If you dont follow the size then image come broken.',
        'default'   => array('url' => 'https://via.placeholder.com/1600x330'),
      ),

    )
  ));

  /************************************************************************/
  // Theme Service Left settings
  /***************************************************************************/
  CSF::createSection( $prefix, array(
    'parent'      => 'service_settings',
    'title'       => 'Service Left Settings',
    'description' => 'This settings will maange your Service page contents. Explore the settngs and configure it as you want.',
    'fields'      => array(
        array(
          'type'    => 'subheading',
          'content' => 'Service Page Left Section',
        ),
        array(
          'id'    => 'service_page_img_logo',
          'type'  => 'media',
          'title' => 'Upload image',
          'subtitle' => 'Please upload the image with 280x90 image',
          'desc' => 'Please upload the image with 280x90 image. If you dont follow the size then image come broken.',
          'default'   => array('url' => 'https://via.placeholder.com/280x90'),
        ),

        array(
          'id'     => 'service_page_left_all_item',
          'type'   => 'repeater',
          'title'  => 'Add Your Content',
          'fields' => array(
            array(
              'id'    => 'service_page_left_items',
              'type'  => 'text',
              'subtitle'  => __('Enter Content', 'choose-design' ),
              'default' => __('Choose Design', 'choose-design'),
              'desc' => 'This is for list item content for left side',
              'attributes' => array('style'  => 'width: 100%;'),
            ),
            
          )

        ),
    )
  
  ));

  /************************************************************************/
  // Theme Service Middle settings
  /***************************************************************************/
  CSF::createSection( $prefix, array(
    'parent'      => 'service_settings',
    'title'       => 'Service Middle Settings',
    'description' => 'This settings will maange your about page contents. Explore the settngs and configure it as you want.',
    'fields'      => array(
       
      array(
        'type'    => 'subheading',
        'content' => 'Service Page Middle Section',
      ),

      array(
        'id'    => 'service_page_middle_desc',
        'type'  => 'wp_editor',
        'title' => 'Enter Description',
        'default' => __('Tilbyr profesjonell bistand og leverer komplette interiørløsninger innenfor bolig markedet; eneboliger, renovering/oppussing, fritidsbolig, og det offentlige rom.<br>

        Vi bruker ARCHICAD tegneprogram og tegner opp ditt prosjekt i 3D, innreder, fargesetter og lyssetter, slik at du som kunde får en trygghet for sluttresultatet.', 'choose-design'),
      ),

      array(
        'type'    => 'subheading',
        'content' => 'Service Page Galler Image',
      ),
      array(
        'id'    => 'gallery_images_service',
        'type'  => 'gallery',
        'title' => 'Slider Images',
        'add_title'   => 'Add Slider Images',
        'edit_title'  => 'Edit Images',
        'clear_title' => 'Remove Images',
        'subtitle' => 'Please upload the image with 280x280 image',
        'desc' => 'Please upload the image with 280x280 image. If you dont follow the size then image come broken.',
      ),

    )
  
  ));

  /************************************************************************/
  // Theme Service Right settings
  /***************************************************************************/
  CSF::createSection( $prefix, array(
    'parent'      => 'service_settings',
    'title'       => 'Service Right Settings',
    'description' => 'This settings will maange your service page contents. Explore the settngs and configure it as you want.',
    'fields'      => array(
       
      array(
        'type'    => 'subheading',
        'content' => 'Service Page Right Section',
      ),

      array(
        'id'    => 'service_page_right_img',
        'type'  => 'media',
        'title' => 'Upload image',
        'subtitle' => 'Please upload the image with 280x500px image',
        'desc' => 'Please upload the image with 280x500px image. If you dont follow the size then image come broken.',
        'default'   => array('url' => 'https://via.placeholder.com/280x500'),
      ),

    )
  
  ));

  /************************************************************************/
  // Theme Media settings
  /***************************************************************************/
  CSF::createSection( $prefix, array(
    'id'    => 'media_settings',
    'title' => 'Media Settings',
    'icon'  => 'fas fa-play',
) );

  /************************************************************************/
  // Theme Media Breadcrumbs settings
  /***************************************************************************/
  CSF::createSection( $prefix, array(
    'parent'      => 'media_settings',
    'title'       => 'Media Breadcrumbs Settings',
    'description' => 'This settings will maange your media page contents. Explore the settngs and configure it as you want.',
    'fields'      => array(

      array(
        'id'    => 'media_page_title',
        'type'  => 'text',
        'title' => 'Enter Media Page Title',
        'default' => __('Media', 'choose-design'),
        'attributes' => array('style'  => 'width: 100%;'),
      ),
      array(
        'id'    => 'media_page_breadcrumbs',
        'type'  => 'media',
        'title' => 'Upload image',
        'subtitle' => 'Please upload the image with 1600x330px image',
        'desc' => 'Please upload the image with 1600x330px image. If you dont follow the size then image come broken.',
        'default'   => array('url' => 'https://via.placeholder.com/1600x330'),
      ),

    )
  ));

  /************************************************************************/
  // Theme Media Left settings
  /***************************************************************************/
  CSF::createSection( $prefix, array(
    'parent'      => 'media_settings',
    'title'       => 'Media Left Settings',
    'description' => 'This settings will maange your media page contents. Explore the settngs and configure it as you want.',
    'fields'      => array(
        array(
          'type'    => 'subheading',
          'content' => 'Media Page Left Section',
        ),
        array(
          'id'    => 'media_page_left_title',
          'type'  => 'text',
          'title' => 'Enter Title',
          'default'   => __('MEDIA', 'choose-design'),
        ),

        array(
          'id'     => 'media_page_left_all_item',
          'type'   => 'repeater',
          'title'  => 'Add Your Content',
          'fields' => array(
            array(
              'id'    => 'media_page_left_items',
              'type'  => 'text',
              'subtitle'  => __('Enter Content', 'choose-design' ),
              'default' => __('Choose Design', 'choose-design'),
              'desc' => 'This is for list item content for left side',
              'attributes' => array('style'  => 'width: 100%;'),
            ),
            
          )

        ),
    )
  
  ));

  /************************************************************************/
  // Theme Media Image settings
  /***************************************************************************/
  CSF::createSection( $prefix, array(
    'parent'      => 'media_settings',
    'title'       => 'Media Middle Image',
    'description' => 'This settings will maange your media page contents. Explore the settngs and configure it as you want.',
    'fields'      => array(

      array(
        'id'    => 'meddia_right_image',
        'type'  => 'media',
        'title' => 'Upload image',
        'subtitle' => 'Please upload the image with 800x500px image',
        'desc' => 'Please upload the image with 800x500px image. If you dont follow the size then image come broken.',
        'default'   => array('url' => 'https://via.placeholder.com/800x500'),
      ),

    )
  ));


  }
  

?>