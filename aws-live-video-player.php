<?php
   $playback_url = $_GET['playback_url'];
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/video.js/7.14.3/video-js.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/video.js/7.14.3/video.min.js"></script>
    <script src="https://player.live-video.net/1.20.0/amazon-ivs-videojs-tech.min.js"></script>
</head>

<body>
    <div class="video-container">
        <video id="amazon-ivs-videojs" class="video-js vjs-9-16 vjs-big-play-centered" controls autoplay playsinline></video>
        <div class="rotate-buttons">
            <button onclick="rotateVideo(0)">Reset</button>
            <button onclick="rotateVideo(90)">Rotate 90°</button>
            <button onclick="rotateVideo(180)">Rotate 180°</button>
            <button onclick="rotateVideo(270)">Rotate 270°</button>
        </div>
    </div>
    <style>
        body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .video-container {
            width: 360px; /* Adjust the width to match the 9:16 aspect ratio for portrait mode */
            height: 640px; /* Height according to your preference */
            margin: 15px;
            position: relative; /* Required for rotation */
        }

        .rotate-buttons {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }
    </style>
    <script>
        var currentRotation = 0; // Current rotation angle

        function rotateVideo(degrees) {
            var video = document.getElementById('amazon-ivs-videojs');
            currentRotation = (currentRotation + degrees) % 360; // Rotate in 90-degree increments
            video.style.transform = 'rotate(' + currentRotation + 'deg)';
        }

        (function play() {
            // Get playback URL from Amazon IVS API
            var PLAYBACK_URL = "<?php echo $playback_url; ?>";
            
            // Register Amazon IVS as playback technology for Video.js
            registerIVSTech(videojs);

            // Initialize player
            var player = videojs('amazon-ivs-videojs', {
               techOrder: ["AmazonIVS"]
            }, () => {
               console.log('Player is ready to use!');
               // Play stream
               player.src(PLAYBACK_URL);
            });
        })();
    </script>
</body>
</html>
