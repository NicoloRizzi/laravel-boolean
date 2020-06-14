    <footer class="main-footer">
        <nav class="main-footer">
            <div class="footer-brand">-->LOGO BOOLEAN<---</div>
            <ul>
            {{-- INSERISCI LEZIONE GRATUITA STATIC PAGE - CONTROLLER + ROUTE --}}
                <li>
                    <a href="{{ route('static-page.home') }}">home</a>
                </li>
                    <li>
                        <a href="{{ route('static-page.faq') }}">domande frequenti</a>
                    </li>
                    <li>
                        <a href="{{ route('static-page.privacy') }}">privacy</a>
                    </li>
            </ul>
        </nav>
    </footer>
    {{-- JS --}}
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>