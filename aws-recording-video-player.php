<?php
   $playback_url = $_GET['playback_url'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mission Shakti Recordings</title>
    <script src="https://player.live-video.net/1.11.0/amazon-ivs-player.min.js"></script>
    <script>
        const init = () => {
            if (!IVSPlayer.isPlayerSupported) {
                alert('Your browser does not support the IVS video player. Please try a different browser.')
            }
            const videoEl = document.getElementById('video-player');
            const streamUrl = '<?php echo $playback_url; ?>';
            const ivsPlayer = IVSPlayer.create();
            ivsPlayer.attachHTMLVideoElement(videoEl);
            ivsPlayer.load(streamUrl);
            ivsPlayer.play();
        }

        document.addEventListener('DOMContentLoaded', init);
    </script>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        #video-player {
            width: 100vw;
            height: 100vh;
        }
    </style>
</head>

<body>
    <video id="video-player" controls autoplay playsinline />
</body>

</html>