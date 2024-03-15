<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/video.js/7.14.3/video-js.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/video.js/7.14.3/video.min.js"></script>
    <script src="https://player.live-video.net/1.20.0/amazon-ivs-videojs-tech.min.js"></script>
</head>

<body>
    <div class="video-container">
        <video id="amazon-ivs-videojs" class="video-js vjs-16-9 vjs-big-play-centered" controls autoplay playsinline></video>
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
            width: 640px; /* Width according to your preference */
            height: 360px; /* Adjust the height to match the 16:9 aspect ratio */
            margin: 15px;
        }
    </style>
    <script>
        (function play() {
            // Get playback URL from Amazon IVS API
            var PLAYBACK_URL = 'https://69107e9f420e.ap-south-1.playback.live-video.net/api/video/v1/ap-south-1.289572873511.channel.pFY2Xxfymz89.m3u8';
            
            // Register Amazon IVS as playback technology for Video.js
            registerIVSTech(videojs);

            // Initialize player
            var player = videojs('amazon-ivs-videojs', {
               techOrder: ["AmazonIVS"]
            }, () => {
               console.log('Player is ready to use!');
               // Play stream
               player.src('https://69107e9f420e.ap-south-1.playback.live-video.net/api/video/v1/ap-south-1.289572873511.channel.pFY2Xxfymz89.m3u8');
            });
        })();
    </script>
</body>
</html>
