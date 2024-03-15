  <!-- Your website content goes here -->


  <style>
    body {
      margin: 0;
    }

    #animation-container {
      position: fixed;
      bottom: 0;
      right: 0; /* Align image on the bottom right */
      z-index: 9999;
    }

    #erickshaw-img {
      display: none;
      width: 100px; /* Set the image size to 100px */
      height: auto; /* Preserve the aspect ratio */
      transition: right 0.2s; /* Add a transition for smooth animation */
    }
  </style>

<div id="animation-container">
    <img src="" alt="E Rickshaw" id="erickshaw-img">
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const animationContainer = document.getElementById("animation-container");
      const erickshawImg = document.getElementById("erickshaw-img");

      const animationFrames = [
        "/images/home/ev.png",
        "/images/home/ev.png",
        // Add more image paths for all frames of the animation
      ];

      const imageObjects = [];
      animationFrames.forEach((frame) => {
        const img = new Image();
        img.src = frame;
        imageObjects.push(img);
      });

      function animateErickshawOnScroll() {
        const scrollPercentage = (document.documentElement.scrollTop + window.innerHeight) / document.documentElement.scrollHeight;
        const frameIndex = Math.min(Math.floor(scrollPercentage * animationFrames.length), animationFrames.length - 1);

        erickshawImg.src = animationFrames[frameIndex];
        erickshawImg.style.display = "block";

        // Move the image from right to left based on the scroll percentage
        const rightPosition = 100 - scrollPercentage * 100; // Invert the percentage for right-to-left movement
        animationContainer.style.right = rightPosition + "%";
      }

      window.addEventListener("scroll", animateErickshawOnScroll);
    });
  </script>