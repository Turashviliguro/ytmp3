<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="./style.css">
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/4.3.2/iframeResizer.min.js"></script>
        <title>youtube to MP3 Converter</title>
    </head>
    <body>
        <header>
          <div class="textbox">
            <form name="form" action="#" method="post">
                <input type="text" name="linki" id="linki" value="Enter youtube link" onfocus="this.select()" >
                <button type="submit">Convert</button>
            </form>
          </div>
        </header>
        <form class="content" method="post">
            <?php
        if (isset($_POST['linki'])) {
            $linki = urlencode($_POST['linki']);
            $url = "http://convert2mp3s.com/api/widget?url=$linki";
            echo "<iframe id=\"widgetApi\" src=\"$url\" width=\"100%\" height=\"100%\" allowtransparency=\"true\" scrolling=\"no\" style=\"border:none\"></iframe>";
        }
        ?>
            <script>
                iFrameResize({
                    log: false,
                    minHeight: 600
                }, '#widgetApi');
            </script>
        </form>
    </body>
</html>