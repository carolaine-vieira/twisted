    <ul class="share-buttons">
      <li>
        <a class="share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" title="Share on Facebook" target="_blank">
          <i class="fab fa-facebook"></i>
        </a>
      </li>
      <li>
        <a class="share-twitter" href="https://twitter.com/intent/tweet?url=<?php the_permalink();?>&text=<?php echo the_title(); ?>&via=<?php the_author_meta('twitter'); ?>" title="Tweet this" target="_blank">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
      <li>
        <a class="share-pinterest" href="//pinterest.com/pin/create/%20button?url=<?php echo urlencode(get_permalink($post->ID)); ?>&description=<?php the_title(); ?>" target="_blank" title="Pin it">
          <i class="fab fa-pinterest"></i>
        </a>
      </li>
      <li>
        <a class="share-linkedin" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&source=Jonaky_Blog" title="Share on Linkedin" target="_blank">
          <i class="fab fa-linkedin"></i>
        </a>
      </li>
      <li>
        <a class="share-whatsapp" href="https://api.whatsapp.com/send?text=<?php the_title(); ?>: <?php the_permalink(); ?>" data-action="share/whatsapp/share" title="Share on Whatsapp" target="_blank">
          <i class="fab fa-whatsapp"></i>
        </a>
      </li>
      <li>
        <a class="share-email" href="mailto:type%20email%20address%20here?subject=I%20wanted%20to%20share%20this%20post%20with%20you%20from%20<?php bloginfo('name'); ?>&body=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Email to a friend/colleague" target="_blank">
          <i class="fas fa-envelope"></i>
        </a>
      </li>
    </ul>