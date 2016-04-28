    <!-- Footer -->
    <footer class="bg-black">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="row">
                        <div class="col-sm-3 col-xs-6">
                            <p>
                                <a
                                    href="https://facebook.com/forumtelecomhaiti"
                                    target="blank"
                                    class="btn btn-primary">
                                    <i class="fa fa-facebook fa-fw"></i>
                                    <span class="network-name">Facebook</span>
                                </a>
                            </p>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <p>
                                <a
                                    href="https://twitter.com/forumtelecomht"
                                    target="blank"
                                    class="btn btn-info">
                                    <i class="fa fa-twitter fa-fw"></i>
                                    <span class="network-name">Twitter</span>
                                </a>
                            </p>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <p>
                                <a
                                    href="https://plus.google.com/106792270497833214434/about"
                                    target="blank"
                                    class="btn btn-danger ">
                                    <i class="fa fa-google-plus fa-fw"></i>
                                    <span class="network-name">Google+</span>
                                </a>
                            </p>
                        </div>
                        
                        <!-- <div class="col-sm-3 col-xs-6">
                            <p>
                                <a
                                    href="https://facebook.com/forumtelecomhaiti"
                                    target="blank"
                                    class="btn btn-danger ">
                                    <i class="fa fa-youtube fa-fw"></i>
                                    <span class="network-name">youtube</span>
                                </a>
                            </p>
                        </div> -->
                    </div>
                </div>
            </div>
            <br>
            <p>
                <small><small>
                    &copy; {{ date('Y') . ' ' . Config::get('site.name') }}. Tous droits réservés.<br>
                    {{ Config::get('site.name') }} est une initiative de GESTE-HAITI.<br>
                    Site web développé par <a class="light" target="blank" href="https://twitter.com/jgbneatdesign">JGB! Neat Design</a>.
                </small></small>
            </p>
        </div>
    </footer>

    <script src="{{ elixir('js/all.js') }}"></script>

</body>

</html>