    <!-- Footer -->
    <footer class="bg-black">
        <div class="container text-center">
            <p>&copy; {{ date('Y') . ' ' . Config::get('site.name') }}. Tous droits réservés</p>
            <p>
                <small>
                    Développé par <a class="light" target="blank" href="https://twitter.com/jgbneatdesign">JGB! Neat Design</a>
                </small>
            </p>
        </div>
    </footer>


    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script> -->

    <!-- Custom Theme JavaScript -->
    <script src="{{ elixir('js/all.js') }}"></script>

</body>

</html>