<?php
/**
 * 
 * Header mobile Call Us Opening Hours
 *
 * @package Dental_Care
 */
?>

<div class="header-mobile">


    <div class="contact-header-area">
        <div class="container">
            <div class="row">
                <?php
                if(ot_get_option('call_us_text') != ''){
                ?>
                <div class="contact-item col-md-12 col-sm-12 col-xs-12 call-contact">
                    <div class="icon-wrapper">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="header-area-contact-info">
                        <h6><?php echo esc_html(ot_get_option('call_us_text')); ?></h6>
                        <p><a href="tel:<?php echo esc_html(ot_get_option('contact_number')); ?>"><?php echo esc_html(ot_get_option('contact_number')); ?></a></p>
                    </div>

                </div>
                <?php               
                }
                ?>
                
                <?php
                if(ot_get_option('opening_hours_text') != ''){
                ?>
                <div class="contact-item col-md-12 col-sm-12 col-xs-12 opening-contact">
                    <div class="icon-wrapper">
                        <i class="fa fa-clock-o"></i>
                    </div>
                    <div class="header-area-contact-info">
                        <h6><?php echo esc_html(ot_get_option('opening_hours_text')); ?></h6>
                        <p><?php echo esc_html(ot_get_option('contact_hours')); ?></p>
                    </div>
                </div>
                <?php                
                }
                ?>
                
                <?php
                if(ot_get_option('contact_book_text') != ''){
                ?>
                <div class="contact-item col-md-12 col-sm-12 col-xs-12 booking-contact">
                    <div class="icon-wrapper">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <div class="header-area-contact-info">
                        <?php
                        $book_type = ot_get_option('contact_book_type');

                        if ($book_type == "book-email") {
                            ?>
                            <h6><a href="mailto:<?php echo get_permalink(ot_get_option('book_email')); ?>?subject=<?php echo esc_html(ot_get_option('contact_book_text')); ?>"><?php echo esc_html(ot_get_option('contact_book_text')); ?></a></h6>
                        <?php } else { ?>
                            <h6><a href="<?php echo get_permalink(ot_get_option('contact_book_link')); ?>"><?php echo esc_html(ot_get_option('contact_book_text')); ?></a></h6> 
                        <?php }
                        ?>
                        <p><?php echo esc_html(ot_get_option('contact_book_subtext')); ?></p>
                    </div>
                </div>
                 <?php                
                    }
                 ?>
            </div>
        </div>
    </div>   
</div>
