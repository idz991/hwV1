  function getMapData() {
      $.ajax({
              type: "GET",
              url: "map.txt",
              dataType: "text",
              success: function(data) {drawMap(data);   console.log(data);}
   });
  }

  function processData(result2) {
           var data = [];
           console.log(result2);
           data = result2.split(',');
           return data;
  }


  function drawMap(result2) {
      var data = processData(result2);
      for (var i = 1; i < 26 ; i++) {
          var img = new Image(100,100); // width, height values are optional params
            console.log(data[i]);
              console.log(i);
                console.log(i);
              if (data[i] == 1) {
                img.src = "mapPics/gras.png";
                if (i > 5 && i < 11) {
                mapCont1.appendChild(img);
                }
                else if (i > 10 && i < 16) {
                mapCont2.appendChild(img);
                }
                else if (i > 15  && i < 21) {
                mapCont3.appendChild(img);
                }
                else if (i > 20) {
                mapCont4.appendChild(img);
                }
                else {
                mapCont.appendChild(img);
                }
                }
              else if (data[i] == 2) {
                img.src = "mapPics/wood.png";
                if (i > 5 && i < 11) {
                mapCont1.appendChild(img);
                }
                else if (i > 10 && i < 16) {
                mapCont2.appendChild(img);
                }
                else if (i > 15  && i < 21) {
                mapCont3.appendChild(img);
                }
                else if (i > 20) {
                mapCont4.appendChild(img);
                }
                else {
                mapCont.appendChild(img);
                }
              }
              else if (data[i] == 3) {
                  img.src = "mapPics/iron.png";
                  if (i > 5 && i < 11) {
                  mapCont1.appendChild(img);
                  }
                  else if (i > 10 && i < 16) {
                  mapCont2.appendChild(img);
                  }
                  else if (i > 15  && i < 21) {
                  mapCont3.appendChild(img);
                  }
                  else if (i > 20) {
                  mapCont4.appendChild(img);
                  }
                  else {
                  mapCont.appendChild(img);
                  }
              }
              else if (data[i] == 4) {
                img.src = "mapPics/stone.png";
                if (i > 5 && i < 11) {
                mapCont1.appendChild(img);
                }
                else if (i > 10 && i < 16) {
                mapCont2.appendChild(img);
                }
                else if (i > 15  && i < 21) {
                mapCont3.appendChild(img);
                }
                else if (i > 20) {
                mapCont4.appendChild(img);
                }
                else {
                mapCont.appendChild(img);
                }
              }
              else if (data[i] == 5) {
                img.src = "mapPics/gold.png";
                if (i > 5 && i < 11) {
                mapCont1.appendChild(img);
                }
                else if (i > 10 && i < 16) {
                mapCont2.appendChild(img);
                }
                else if (i > 15  && i < 21) {
                mapCont3.appendChild(img);
                }
                else if (i > 20) {
                mapCont4.appendChild(img);
                }
                else {
                mapCont.appendChild(img);
                }
              }
              else if (data[i] == 0) {
                img.src = "mapPics/city.png";
                if (i > 5 && i < 11) {
                mapCont1.appendChild(img);
                }
                else if (i > 10 && i < 16) {
                mapCont2.appendChild(img);
                }
                else if (i > 15  && i < 21) {
                mapCont3.appendChild(img);
                }
                else if (i > 20) {
                mapCont4.appendChild(img);
                }
                else {
                mapCont.appendChild(img);
                }
              }
      }
}

function drawMap2() {
  var img = new Image(50,50); // width, height values are optional params
  img.src = "mapPics/gold.png";
  mapCont.appendChild(img);

  var img = new Image(50,50); // width, height values are optional params
  img.src = "mapPics/stone.png";
  mapCont.appendChild(img);

  var img = new Image(50,50); // width, height values are optional params
  img.src = "mapPics/gras.png";
  mapCont.appendChild(img);

  var img = new Image(50,50); // width, height values are optional params
  img.src = "mapPics/iron.png";
  mapCont.appendChild(img);

  var img = new Image(50,50); // width, height values are optional params
  img.src = "mapPics/wood.png";
    mapCont.appendChild(img);

}
