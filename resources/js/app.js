import './bootstrap';

var OnePiece = {
    init()
    {
        this.openMenu();
        // this.detectMobile();
    },
    openMenu()
    {
        $('.js-open-menu').on('click', function (e) {
            e.preventDefault();
            $('.menu-bottom').css('bottom', 0);
        });
        $('.js-close-menu').on('click', function (e) {
            e.preventDefault();
            $('.menu-bottom').css('bottom', '-100%');
        });
    },
    detectMobile()
    {
        if (window.location.pathname === '/') {
            return;
        }
        const toMatch = [
            /Android/i,
            /webOS/i,
            /iPhone/i,
            /iPad/i,
            /iPod/i,
            /BlackBerry/i,
            /Windows Phone/i
        ];
        let mobileCheck = toMatch.some((toMatchItem) => {
            return navigator.userAgent.match(toMatchItem);
        });
        if (!mobileCheck) {
            window.location = '/';
        }
    },
}
$(function () {
    OnePiece.init();
});
