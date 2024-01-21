<div id="footerBG">
        <img src="../asset/img/footer-bg.jpg" id="bg-foot1">
        <div class="square">
            <img src="../asset/img/dc-logo-bg.png" class="bg-foot2">
        </div>
        <div class="footer-mini-contain text-light d-flex">
            <div>
                <ul> <b class="text-light">DC COMICS</b>
                    <li>Characters</li>
                    <li>Comics</li>
                    <li>Movies</li>
                    <li>TV</li>
                    <li>Games</li>
                    <li>Videos</li>
                    <li>News</li>
                </ul>
                <ul> <b class="text-light">SHOP</b>
                    <li>Shop DC</li>
                    <li>Shop DC Collectibles</li>
                </ul>
            </div>
            <div>
                <ul> <b class="text-light">DC</b>
                    <li>Terms Of Use</li>
                    <li>Privacy policy(New)</li>
                    <li>Ad Choices</li>
                    <li>Advertising</li>
                    <li>Jobs</li>
                    <li>Subscriptions</li>
                    <li>Talent Workshops</li>
                    <li>CPSC Certificates</li>
                    <li>Ratings</li>
                    <li>Shop Help</li>
                    <li>Contact Us</li>
                </ul>
            </div>
            <div>
                <ul> <b class="text-light">SITES</b>
                    <li>DC</li>
                    <li>MAD Magazine</li>
                    <li>DC Kinds</li>
                    <li>DC Universe</li>
                    <li>DC Power Visa</li>
                </ul>
            </div>
        </div>
        <p class="text-light footTxt">All Site Content TM and &copy; 2020 DC Entertainment, unless otherwise <a href="#">noted here.</a>All rights reserved.<br><a href="#">Cookies Settings.</a></p>
</div>

<style scoped>
*{
    color: aliceblue;
}
#bg-foot1{ 
    width: 100%;
    height: 65vh;
    object-fit: cover;
}
.square{
    width: 500px;
    height: 65vh;
    transform: translate(160% , -100%);
}
.square > img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
#footerBG{
    height: 65vh;
    background-image: url('../asset/img/dc-logo-bg.png');
    position: relative;
}
.footer-mini-contain{
    /* background-color: rgba(95, 158, 160, 0.395); */
    width: 600px;
    height: 300px;
    /* text-align: justify; */
    position: absolute;
    top: 20%;
    left:10%;
    float:right;
}
.footTxt{
    position:absolute;
    bottom:0;
}
</style>