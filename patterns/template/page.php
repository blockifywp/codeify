<?php
/**
 * Title: Template Page
 * Slug: page
 * Categories: template
 * Template Types: template-page
 * Inserter: false
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0"}},"backgroundColor":"neutral-950","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-neutral-950-background-color has-background"><!-- wp:spacer {"height":"60em","style":{"position":{"all":"absolute"},"top":{"all":"0px"},"right":{"all":"0px"},"bottom":{"all":""},"left":{"all":"0px"}},"align":"full","gradient":"radial-up"} -->
<div style="height:60em" aria-hidden="true" class="wp-block-spacer alignfull has-radial-up-gradient-background has-background"></div>
<!-- /wp:spacer -->
<!-- wp:spacer {"height":"70em","style":{"position":{"all":"absolute"},"top":{"all":""},"right":{"all":"0px"},"bottom":{"all":"0px"},"left":{"all":"0px"},"zIndex":{"all":"1"}},"align":"full","gradient":"radial-down"} -->
<div style="height:70em" aria-hidden="true" class="wp-block-spacer alignfull has-radial-down-gradient-background has-background"></div>
<!-- /wp:spacer -->
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header","style":{"position":{"all":"absolute"},"top":{"all":""},"right":{"all":"0px"},"bottom":{"all":""},"left":{"all":"0px"},"zIndex":{"all":"2"}}} /-->
<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxl","bottom":"0"}},"position":{"all":"relative"},"overflow":{"all":"hidden"},"zIndex":{"all":"1"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull" id="site-main" style="padding-top:var(--wp--preset--spacing--xxl);padding-bottom:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|md","bottom":"var:preset|spacing|lg"}}},"layout":{"type":"constrained","contentSize":"600px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--lg)"><!-- wp:post-title {"textAlign":"center","level":1,"style":{"position":{"all":"relative"},"zIndex":{"all":"1"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"gradient":"primary-foreground"} /-->
<!-- wp:post-excerpt {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-900"}}}},"textColor":"primary-900","hideReadMore":true} /--></div>
<!-- /wp:group -->
<!-- wp:post-content {"style":{"position":{"all":"relative"},"zIndex":{"all":"1"}},"align":"wide","className":"margin-auto"} /-->
<!-- wp:pattern {"slug":"cta-center"} /--></main>
<!-- /wp:group -->
<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer","style":{"position":{"all":"relative"},"zIndex":{"all":"1"}}} /--></div>
<!-- /wp:group -->