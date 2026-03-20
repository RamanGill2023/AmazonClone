<footer>
    <div class="foot-panel1">
        <a href="#top" style="color: white; text-decoration: none;">Back To Top</a>
    </div>

    <div class="foot-panel2">
        <ul>
            <p>Get to Know Us<p>
            <a>Careers</a>
            <a>Blog</a>
            <a>About Amazon</a>
            <a>Investor Relations</a>
            <a>Amazon Devices</a>
            <a>Amazon Science</a>
        </ul>
        <ul>
            <p>Make Money with us<p>
            <a>Sell products on Amazon</a>
            <a>Sell on Amazon Business</a>
            <a>Sell apps on Amazon</a>
            <a>Become an Affiliate</a>
            <a>Advertise Your Products</a>
            <a>Self-Publish with Us</a>
            <a>Host an Amazon Hub</a>
            <a>›See More Make Money with Us</a>
        </ul>
        <ul>
            <p> Amazon Payment Products<p>
            <a>Amazon Business Card</a>
            <a>Shop with Points</a>
            <a>About Amazon</a>
            <a>Reload Your Balance</a>
            <a>Amazon Currency Converter</a>
        </ul>
        <ul>
            <p>Let Us Help You<p>
            <a>Amazon and COVID-19</a>
            <a>Your Account</a>
            <a>Your Orders</a>
            <a>Shipping Rates & Policies</a>
            <a>Returns & Replacements</a>
            <a>Manage Your Content and Devices</a>
            <a>Help</a>
        </ul>
    </div>

    <div class="foot-panel3">
        <div class="logo"></div>
    </div>

    <div class="foot-panel4">
        <div class="pages">
            <a href="https://www.amazon.com/gp/help/customer/display.html?nodeId=508088&ref_=footer_cou">Conditions of Use</a>
            <a href="https://www.amazon.com/gp/help/customer/display.html?nodeId=468496&ref_=footer_privacy">Privacy Notice</a>
            <a href="https://www.amazon.com/gp/help/customer/display.html?ie=UTF8&nodeId=TnACMrGVghHocjL8KB&ref_=footer_consumer_health_data_privacy">Consumer Health Data Privacy Disclosure</a>
            <a href="https://www.amazon.com/privacyprefs?ref_=footer_iba">Your Ads Privacy Choices</a>
        </div>
        <div class="copyright">
            © 1996-2025, Amazon.com, Inc. or its affiliates
        </div>
    </div>
</footer>
<div class="card-popup-overlay" id="popupOverlay">
    <div class="card-popup" id="popupContent">
        <span class="close-popup" id="closePopup">&times;</span>
    </div>
</div>
<script>
const overlay = document.getElementById("popupOverlay");
const popupContent = document.getElementById("popupContent");

document.querySelectorAll(".amazon-card").forEach(card => {
    card.addEventListener("click", () => {

        popupContent.innerHTML = `
            <span class="close-popup" id="closePopup">&times;</span>
            ${card.innerHTML}
        `;

        overlay.style.display = "flex";

        document.getElementById("closePopup").onclick = () => {
            overlay.style.display = "none";
        };
    });
});

overlay.addEventListener("click", (e) => {
    if (e.target === overlay) overlay.style.display = "none";
});
</script>

<script src="js/slider.js"></script>
</body>
</html>