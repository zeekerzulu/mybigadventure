<div id="graphcomment"></div>

<script type="text/javascript">

/* - - - CONFIGURATION VARIABLES - - - */

var __semio__params = {
  graphcommentId: "My-Big-Adventure", // make sure the id is yours

  behaviour: {
    // HIGHLY RECOMMENDED
    uid: "<?php
      if ($_SERVER['REQUEST_URI'] == '/') {
        echo "/index.php?action=Home";
      } else {
        echo $_SERVER['REQUEST_URI'];
      }
    ?>"
  },

  // configure your variables here

}

/* - - - DON'T EDIT BELOW THIS LINE - - - */

function __semio__onload() {
  __semio__gc_graphlogin(__semio__params)
}


(function() {
  var gc = document.createElement('script'); gc.type = 'text/javascript'; gc.async = true;
  gc.onload = __semio__onload; gc.defer = true; gc.src = 'https://integration.graphcomment.com/gc_graphlogin.js?' + Date.now();
  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(gc);
})();


</script>