<?php
/**
 * Title: Template Page
 * Slug: page
 * Categories: template
 * Template Types: template-page
 * Inserter: false
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header","style":{"position":{"all":"absolute"},"top":{"all":""},"right":{"all":"0px"},"bottom":{"all":""},"left":{"all":"0px"},"zIndex":{"all":"2"}}} /-->
<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxl","bottom":"0"}},"position":{"all":"relative"},"overflow":{"all":""},"zIndex":{"all":"1"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull" id="site-main" style="padding-top:var(--wp--preset--spacing--xxl);padding-bottom:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|md","bottom":"var:preset|spacing|lg"}}},"layout":{"type":"constrained","contentSize":"600px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--lg)"><!-- wp:post-title {"textAlign":"center","level":1,"style":{"position":{"all":"relative"},"zIndex":{"all":"1"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"gradient":"primary-foreground"} /-->
<!-- wp:post-excerpt {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-950"}}}},"textColor":"primary-950","hideReadMore":true} /--></div>
<!-- /wp:group -->
<!-- wp:post-content {"style":{"position":{"all":"relative"},"zIndex":{"all":"1"}},"align":"wide","className":"margin-auto"} /--></main>
<!-- /wp:group -->
<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer","style":{"position":{"all":"relative"},"zIndex":{"all":""}}} /-->