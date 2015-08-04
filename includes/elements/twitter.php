<?php

    //include('includes/pdo/get_data.php');



    //$username  = preg_replace("http://twitter.com/#!/", "", $twitter);

?>



<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>

<script>

  new TWTR.Widget({

    version: 2,

    type: 'profile',

    rpp: 8,

    interval: 30000,

    width: 250,

    height: 220,



    theme: {

      shell: {

        background: '#0a1625',

        color: '#ffffff'

      },



      tweets: {

        background: '#ffffff',

        color: '#000000',

        links: '#1c3080'

      }

    },



    features: {

      scrollbar: true,

      loop: false,

      live: true,

      behavior: 'all'

    }

  }).render().setUser('romain_moro').start();

</script>
