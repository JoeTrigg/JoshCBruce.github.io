<script type="text/javascript">
    function getIP(json) {
        var ip = json.ip;
        console.log('Your IP address is: ' + ip);
    }

    var script = document.createElement('script');
    script.src = 'https://api.ipify.org?format=jsonp&callback=getIP';
    document.head.appendChild(script);

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            console.log('Your GPS location is: ' + latitude + ', ' + longitude);
        });
    } else {
        console.log('Geolocation is not supported by this browser.');
    }
</script>
