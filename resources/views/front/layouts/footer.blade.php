<!-- Footer - start -->
<footer class="footer-wrap">


    <div class="container f-menu-list">
        <div class="row">
            <div class="f-menu">
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="#">AGB's</a></li>
                    <li><a href="#">Impressum</a></li>
                    <li><a href="{{ route('contact') }}"><i class="fa fa-envelope-open-o" aria-hidden="true"></i>Kontaktformular</a></li>
                </ul>
            </div>
            <div class="f-menu">
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i>Facebook</a></li>

                </ul>
            </div>

            <div class="f-subscribe">
                <h3>Newsletter abonnieren</h3>
                <form method="post" action="{{ route('subscribe') }}" class="f-subscribe-form">
                    {{ csrf_field() }}
                    <input placeholder="Ihre Email" type="email" name="email" required>
                    <button type="submit"><i class="fa fa-paper-plane"></i></button>
                </form>
                <p>Geben Sie Ihre Emailadresse ein, wenn Sie unseren Newsletter erhalten möchten. Abonnieren Sie jetzt!</p>
            </div>
        </div>
    </div>



</footer>
<!-- Footer - end -->