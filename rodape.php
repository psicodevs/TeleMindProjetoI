<script src="script.js"></script>

<footer class="footer">
    <img class="patern" src="images/bg-pattern-footer-desktop.svg" alt="">
    <div class="container">
        <!-- footer header -->
        <div class="footer-header">
            <div class="#">
                <img src="#" alt="">
            </div>
            <div class="medias-socias">
                <img src="/imagens/icon-facebook.svg" alt="Simbolo do Facebook">
                <img src="images/icon-twitter.svg" alt="Simbolo do Twitter">
                <img src="images/icon-pinterest.svg" alt="Simbolo do Pinterest">
                <img src="images/icon-instagram.svg" alt="Simbolo do Instagram">
            </div>
        </div>
        <!-- end footer header -->
        
        <!-- footer content -->

        <div class="footer">

            <p>&copy; 2024 TeleMind</p>

        </div>


        <!-- end footer content -->
    </div>
</footer>
<script>
    // Menu mobile
    const menuIcon = document.querySelector('.menu-icon');
    const nav = document.querySelector('nav');
    menuIcon.addEventListener('click', () => {
        if (nav.classList.contains('open')) {
            nav.classList.remove('open');
            menuIcon.querySelector('img').src = 'images/icon-hamburger.svg';
        } else {
            nav.classList.add('open');
            menuIcon.querySelector('img').src = 'images/icon-close.svg';
        }
    });
</script>
</body>

</html>