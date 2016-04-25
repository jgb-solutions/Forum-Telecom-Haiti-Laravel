    <!-- Footer -->
    <footer class="bg-black">
        <div class="container text-center">
            <p><small>&copy; {{ date('Y') . ' ' . Config::get('site.name') }}. Tous droits réservés.</small></p>
            <p><small>{{ Config::get('site.name') }} est une initiative de GESTE HAITI.</small></p>
            <p>
                <small>
                    Développé par <a class="light" target="blank" href="https://twitter.com/jgbneatdesign">JGB! Neat Design</a>
                </small>
            </p>
        </div>
    </footer>

    <script src="{{ elixir('js/all.js') }}"></script>

</body>

</html>