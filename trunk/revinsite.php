<?php

function revinsite_add_adserver_javascript_snippet() {
?>
<script>
(function(a,d,v,e,r,t){r=a.createElement(d),t=a.getElementsByTagName(d)[0];r.async=1;r.src=v;t.parentNode.insertBefore(r,t);})(document,'script','//as.rev-insite.com/assets/.js')
</script>
<?php
}

function revinsite_shortcode($attrs) {
  $html = '<div class="revinsite-ad"';

  if ($attrs['token']) {
    $html .= " data-token=\"{$attrs['token']}\"";
  }

  $html .= '></div>';

  return $html;
}

add_action('wp_footer', 'revinsite_add_adserver_javascript_snippet');
add_shortcode('revinsite-ad', 'revinsite_shortcode');

