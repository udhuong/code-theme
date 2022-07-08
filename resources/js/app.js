import './bootstrap';

var OnePiece = {
    init()
    {
        this.openMenu();
        // this.detectMobile();
        this.toggleMap();
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
    toggleMap() {
        $('.js-show-map').on('click', function (e) {
            e.preventDefault();
            let $this = $(this),
                imgMap = $this.attr('href');
            $('#wrap-map').remove();
            let html = `
                <div class="fixed w-[calc(100%-5px)] top-[100px] shadow-2xl" id="wrap-map">
                    <img src="${imgMap}"/>
                    <a href="#" class="absolute top-3 right-3 shadow-2xl js-close-map"> <img src="images/close.svg"/></a>
                </div>
            `;
            $('body').append(html);
        });
        $('body').on('click', '.js-close-map', function (e) {
            e.preventDefault();
            $('#wrap-map').remove();
        });
    },
}
$(function () {
    OnePiece.init();
});
