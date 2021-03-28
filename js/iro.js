// Box & hue slider
  var boxPicker = new iro.ColorPicker("#boxPicker", {
    width: 250,
    color: "rgb(255, 0, 0)",
    borderWidth: 1,
    borderColor: "#fff",
    layout: [
      {
        component: iro.ui.Box,
      },
      {
        component: iro.ui.Slider,
        options: {
          sliderType: 'hue'
        }
      }
    ]
  });

  window.onload = function(){
    var values = document.getElementById("values");
    var hexInput = document.getElementById("hexInput");
    var rInput = document.getElementById("red");
    var gInput = document.getElementById("green");
    var bInput = document.getElementById("blue");
    
    boxPicker.on(["color:init", "color:change"], function(color){
      values.innerHTML = [
        "hex: " + color.hexString,
        "rgb: " + color.rgbString,
        "hsl: " + color.hslString,
      ].join("<br>");

      hexInput.value = color.hexString;
      rInput.value = color.red;
      gInput.value = color.green;
      bInput.value = color.blue;

    });
    
    // 輸入 hex 會影響picker
    hexInput.addEventListener('change', function() {
      boxPicker.color.hexString = this.value;
    });

    // 輸入 rgb 會影響picker
    $(".rgb-input").change(function(){
      var c = $(this).attr("id");
      boxPicker.color[c] = $(this).val();
    })
  }


