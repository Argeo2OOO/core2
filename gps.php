<?php include "partials/head.php"; ?>
<div class="main-wrapper">
  <?php include "partials/sidebar.php";?>
  <div class="page-wrapper">
    <!--?php include "partials/navbar.php";?-->
    <div class="page-content">
      <h1>Book Bus</h1>
      <div id="googleMap" style="width:100%;height:100%;"></div>
      <form action="" method="post">
        <label for="origin">Current Location:</label>
        <input type="text" id="origin" name="origin">
        <br><br>
        <label for="destination">Destination:</label>
        <input type="text" id="destination" name="destination">
        <br><br>
        <button type="submit" class="btn btn-success mt-3">BUS Directions</button>
      </form>
      <br><br>
      <div id="directionsPanel"></div>
    </div>
    <!-- partial:partials/_footer.html -->
    <!--?php include "partials/footer.php";?-->
    <!-- partial -->
    <script>
      let directionsRenderer;
      let directionsService;

      function initMap() {
        const map = new google.maps.Map(document.getElementById("googleMap"), {
          center: { lat: 14.7454083, lng: 121.0191125 },
          zoom: 5,
        });
        directionsRenderer = new google.maps.DirectionsRenderer();
        directionsRenderer.setMap(map);
        directionsService = new google.maps.DirectionsService();
      }

      function calculateAndDisplayRoute() {
        const origin = document.getElementById("origin").value;
        const destination = document.getElementById("destination").value;
        directionsService.route(
          {
            origin: origin,
            destination: destination,
            travelMode: google.maps.TravelMode.DRIVING,
          },
          (response, status) => {
            if (status === "OK") {
              directionsRenderer.setDirections(response);
              const distance = response.routes[0].legs[0].distance.value / 1000; // convert to kilometers
              const duration = response.routes[0].legs[0].duration.text;
              const cost = distance * 45; // calculate total cost
              const directionsPanel = document.getElementById("directionsPanel");
              directionsPanel.innerHTML = `<br><b>Distance:</b> ${distance.toFixed(2)} km<br><b>Duration:</b> ${duration}<br><b>Total Cost of BUS:</b> PHP ${cost.toFixed(2)}<br>`; // display cost
            } else {
              window.alert("Directions request failed due to " + status);
            }
          }
        );
      }

      document.querySelector("form").addEventListener("submit", (event) => {
        event.preventDefault();
        calculateAndDisplayRoute();
      });
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAue7DTCD9UCt-di2UQOCzg4-hsAiRrnxY&callback=initMap&libraries=places" async defer></script>
  </div>
</div>
</html>
