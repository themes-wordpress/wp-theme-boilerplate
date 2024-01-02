import $ from "jquery";
import Base from "./Base";

const { Post } = wp.api.models;

class Search extends Base {
    constructor(...options) {
        super();
        options.forEach((option) => {
            if (Object.keys(option).length > 0) {
                Object.keys(option).forEach((key) => {
                    if (!this[key]) this[key] = option[key];
                });
            }
        });
        this.init();
        this.autobind(Search);
        this.autoinvoker(Search);
      
        
    }

    static openBtn = $(".js-search-trigger");
    static closeBtn = $(".search-overlay__close");
    static overlay = $(".search-overlay");
    static searchTerm = $("#search-term");
    static body = $("body");
    static results = $("#search-overlay__results");
    static spinner = $("#search-overlay__results");
    
    init(){
        this.typingTimer;
        this.isSpinnerVisible = false;
        this.previousValue;
    }
    events() {
        this.openOverlay();
        this.closeOverlay();
        this.searchTerm();
        // this.keyPressDispatcher();

    }
    static searchResults = (data = [{ttile: 'First'}, {title: 'Seconfd'}]) => {

        const {results} = Search
        const html = `<u>
            <h2>Search Results</h2>
            <li><a href="#">One</a></li>
            <li><a href="#">Two</a></li>
        </u>`
        results.html(html);
        this.isSpinnerVisible = false
    }
    searchTerm() {
        const $this = this;
        const {searchTerm, results, searchResults} = Search
           searchTerm.on({
            keydown: function (e) {
                clearTimeout(this.typingTimer);
                const postUrl = `http://localhost:10354/wp-json/wp/v2/posts?search=${searchTerm.val()}`


                $.getJSON(postUrl, function (posts){

                    if(posts && posts.length){
                        if(!$this.isSpinnerVisible){
                            results.html(`<div class="spinner-loader"></div>`)
                            $this.isSpinnerVisible  = true;
                        }
                        this.typingTimer = setTimeout(searchResults, 1000) 
                        $this.isSpinnerVisible = false

                       
                    }

                    
                    
                })
               
             
            },
        });
    }

    openOverlay() {
        Search.openBtn.on({
            click: function (e) {
                Search.overlay.addClass("search-overlay--active");
                Search.body.addClass('body-no-scroll');
            },
        });
    }
    closeOverlay() {
        Search.closeBtn.on({
            click: function (e) {
                Search.overlay.removeClass("search-overlay--active");
                Search.body.removeClass('body-no-scroll');
            },
        });
    }
    keyPressDispatcher() {
        Search.body.on({
            keypress: function (e) {
                const keycode = e.keyCode ? e.keyCode : e.which;
                console.log(keycode)
                if(keycode == 115){
                    Search.overlay.addClass("search-overlay--active");
                    Search.body.addClass('body-no-scroll');
                }
            }
        })
    }

      /**
   * Autobinds class methods to the instance of the class.
   *
   * @param {Object} className - The class whose methods will be autobound.
   */
  autobinder(className = {}) {
    for (let method of Object.getOwnPropertyNames(className.prototype)) {
      if (typeof this[method] === "function" && method !== "constructor") {
        this[method] = this[method].bind(this);
      }
    }
  }


  /**
   * Autobinds the autobinder method to the current instance and invokes it with the specified class.
   *
   * @param {Object} className - The class whose methods will be autobound.
   */
  autobind(className = {}) {
    this.autobinder = this.autobinder.bind(this);
    this.autobinder(className);
  }



  /**
   * Automatically invokes methods from the specified class name on the current instance.
   *
   * @param {Function} className - The class name whose methods to automatically invoke.
   */
  autoinvoker(className = {}) {
    for (let method of Object.getOwnPropertyNames(className.prototype)) {
      this.autoinvoked().forEach((name) => {
        if (method === name) {
          this[method]();
        }
      });
    }
  }


  /**
   * Returns an array of method names that should be automatically invoked by the `autoinvoker` method.
   * Modify this method to specify the method names to be autoinvoked.
   *
   * @returns {Array} - An array of method names.
   */

  autoinvoked() {
    return ["events"];
  }

}

export default Search;
