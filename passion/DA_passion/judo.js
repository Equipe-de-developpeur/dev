oVideo.autoplay = true;
video - fond.autoplay = true;
vidéo2.autoplay = true;

oVideo.muted = true;
video - fond.muted = true;
vidéo2.muted = true;

/*function fctAutoplay(sIdVideo) {
  var oVideo = document.getElementById(sIdVideo);
  oVideo.autoplay = true;
} //fct

function fctPlay(sIdVideo) {
  var oVideo = document.getElementById(sIdVideo);
  var playPromise = oVideo.play();

  if (playPromise !== undefined) {
    playPromise
      .then(function () {
        //
      })
      .catch(function (error) {
        var oDetect = document.getElementById("detect" + sIdVideo);
        if (oDetect) {
          oDetect.innerHTML =
            "(on la détecté en javascript que la vidéo ne c'est pas lancée)";
        }
      });
  }
} //fct

document.addEventListener("DOMContentLoaded", function () {
  //fctAutoplay('idvideo');
  fctAutoplay("idvideoA");
  fctAutoplay("idvideoA2");
  fctPlay("idvideoB");
  fctPlay("idvideoB2");
});

