<figure>
  <?php if (has_post_thumbnail()) : // サムネイルを持っているときの処理 
    the_post_thumbnail('full');
  else : // サムネイルを持っていないときの処理 
    $contents = SCF::get('contents');
    foreach ($contents as $fields) {
      if ($fields['large_image']){
        $postImg = wp_get_attachment_image($fields['large_image'], 'large');
        break ;
      }elseif($fields['image_row_1']){
        $postImg = wp_get_attachment_image($fields['image_row_1'], 'large');
        break ;
      }elseif($fields['image_row_2']){
        $postImg = wp_get_attachment_image($fields['image_row_2'], 'large');
        break ;
      }
    }
  ?>
    <?php if (empty($postImg)) : ?>
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('custom_logo')); ?>" alt="<?php the_title_attribute(); ?> " class="dmy">
    <?php else : ?>
      <?php echo $postImg;?>
    <?php endif; ?>
  <?php endif; ?>
</figure>