import  $ from 'jquery';
class Search {
    constructor(){
        this.openButton = $('.js-search-trigger');
        this.closeButton = $('.search-overlay__close');
        this.searchOverlay = $('.search-overlay');
        this.events();
    }
    events(){
        this.openButton.on({
            click: this.openOverlay.bind(this)
        });
        this.openClose.on({
            click: this.closeOverlay.bind(this)
        });
    }
    openOverlay(){
        this.searchOverlay.addClass('search-overlay__active');
    }
    closeOverlay(){
        this.searchOverlay.removeClass('search-overlay__active');
    }
}

export default Search