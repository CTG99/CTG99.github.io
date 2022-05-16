var images = document.getElementsByClassName('w2-img');
for (var i = 0; i < images.length; i++) {
  (function(image) {
    image.fadeIn = function(duration) {
      duration = {'slow': 2000, 'fast': 250}[duration] || duration || 1000;
      var img = this;
      for (i = 1; i <= 100; i++) {
        (function(step) {
          setTimeout(function() {
            img.style.opacity = (step / 100);
          }, step * duration/100);
        })(i);
      }
    }.bind(image);
    image.slideIn = function(from, duration) {
      duration = {'slow': 2000, 'fast': 500}[duration] || duration || 1000;
      var img = this;
      var imgSize = (from === "top" || from === "bottom") ? img.height : img.width;
      
        img.style.transform = "translate("+(imgSize+5).toString()+"px, "+(imgSize+5).toString()+"px)";
        img.style.opacity = 1;
      
      for (i = 1; i <= 100; i++) {
        (function(step) {
          var translate = "";
          switch (from) {
            case 'top':
              translate = "translate(0, " + ((imgSize * step / 100) - imgSize).toString() + "px)";
              break;
            case 'bottom':
              translate = "translate(0, " + (imgSize - (imgSize * step / 100)).toString() + "px)";
              break;
            case 'left':
              translate = "translate(" + ((imgSize * step / 100) - imgSize).toString() + "px, 0)";
              break;
            case 'right':
              translate = "translate(" + (imgSize - (imgSize * step / 100)).toString() + "px, 0)";
              break;
          }
          setTimeout(function() {
            img.style.transform = translate;
          }, step * duration/200);
        })(i);
      }
    }.bind(image);
    image.blind = function(from, duration) {
      duration = {'slow': 2000, 'fast': 500}[duration] || duration || 1000;
      var img = this;
      var blindWrapper = this.parentElement;
      var imgSize = (from === "top" || from === "bottom") ? img.height : img.width;
      
        img.style.transform = "translate("+(imgSize+5).toString()+"px, "+(imgSize+5).toString()+"px)";
        img.style.opacity = 1;
      
      for (i = 1; i <= 100; i++) {
        (function(step) {
          var translateWrapper = "";
          var translate = "";
          switch (from) {
            case 'top':
              translateWrapper = "translate(0, " + ((imgSize * step / 100) - imgSize).toString() + "px)";
              translate = "translate(0, " + (imgSize - (imgSize * step / 100)).toString() + "px)";
              break;
            case 'bottom':
              translateWrapper = "translate(0, " + (imgSize - (imgSize * step / 100)).toString() + "px)";
              translate = "translate(0, " + ((imgSize * step / 100) - imgSize).toString() + "px)";
              break;
            case 'left':
              translateWrapper = "translate(" + ((imgSize * step / 100) - imgSize).toString() + "px, 0)";
              translate = "translate(" + (imgSize - (imgSize * step / 100)).toString() + "px, 0)";
              break;
            case 'right':
              translateWrapper = "translate(" + (imgSize - (imgSize * step / 100)).toString() + "px, 0)";
              translate = "translate(" + ((imgSize * step / 100) - imgSize).toString() + "px, 0)";
              break;
          }
          setTimeout(function() {
            blindWrapper.style.transform = translateWrapper;
            img.style.transform = translate;
          }, step * duration/200);
        })(i);
      }
    }.bind(image);
    image.enter = function(from, duration) {
      duration = {'slow': 1000, 'fast': 250}[duration] || duration || 500;
      var docHeight = (function() {
       
        var body = document.body,
          html = document.documentElement,
          docHeight = Math.max(body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight);
        return docHeight;
      })();
      var img = this;
      var imgWrapper = this.parentElement;
     
        imgWrapper.style.transform = "translate("+(docHeight).toString()+"px, "+(docHeight).toString()+"px)";
        img.style.opacity = 1;
      
      for (i = 1; i <= 200; i++) {
        (function(step) {
          var translate = "";
          switch (from) {
            case 'top':
              translate = "translate(0, " + ((docHeight * step / 200) - docHeight).toString() + "px)";
              break;
            case 'bottom':
              translate = "translate(0, " + (docHeight - (docHeight * step / 200)).toString() + "px)";
              break;
            case 'left':
              translate = "translate(" + ((docHeight * step / 200) - docHeight).toString() + "px, 0)";
              break;
            case 'right':
              translate = "translate(" + (docHeight - (docHeight * step / 200)).toString() + "px, 0)";
              break;
          }
          setTimeout(function() {
            imgWrapper.style.transform = translate;
          }, step * duration/200);
        })(i);
      }
    }.bind(image);
  })(images[i]);
}

setTimeout(function() {
  images[0].fadeIn('fast');

}, 1000);
setTimeout(function() {
  images[1].slideIn("left", 'fast'); 

}, 2000);
setTimeout(function() {
  images[2].blind("top", 'fast');

}, 3000);
setTimeout(function() {
  images[3].enter("bottom", 'fast');

}, 3500);