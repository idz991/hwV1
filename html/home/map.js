  function getMapData() {
      $.ajax({
              type: "GET",
              url: "map.csv",
              dataType: "text",
              success: function(data) {drawMap(data);  }
   });
  }


  function drawMap(map) {




      }
