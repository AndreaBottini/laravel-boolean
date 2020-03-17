        <nav class="footer-bar">
            <div class="wrapper">
                <ul>
                    <li>
                        <a href="">Lezione Gratuita</a>
                    </li>
                    <li>
                        <a class="{{(Request::route()->getName() == 'homepage.faq') ? 'active' : ''}}" href="{{route('homepage.faq')}}">Domande Frequenti</a>
                    </li>
                    <li>
                        <a href="">Per le aziende</a>
                    </li>
                    <li>
                        <a class="{{(Request::route()->getName() == 'homepage.privacy') ? 'active' : ''}}" href="{{route('homepage.privacy')}}">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="">Lavora con noi</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>    
</body>
</html>