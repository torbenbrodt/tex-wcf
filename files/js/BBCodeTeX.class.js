/**
 * bb code for tex, include guard is important!2
 */
if (typeof BBCodeTeX === 'undefined') {
	var BBCodeTeX = function () {

		/**
		 * construct
		 */
		if (typeof BBCodeTeX.counter === 'undefined') {
			BBCodeTeX.counter = 0;
		}
		++BBCodeTeX.counter;
		this.divID = 'bbcodetex-' + BBCodeTeX.counter;
		this.loaded = false;

		/**
		 * document write div containers
		 */
		this.write = function (formula) {
			document.write('<div id="' + this.divID + '">' + formula + '</div>');

			// if MathJax is undefined, load the library
			if (typeof MathJax === 'undefined') {
				this.load();
			}
			
			// if MathJax is available instantly queue the current div
			else {
				MathJax.Hub.Queue(["Typeset", MathJax.Hub, document.getElementById(this.divID)]);
				this.loaded = true;
			}
		};

		/**
		 * load mathjax
		 */
		this.load = function () {
			var script, config;

			// config
			script = document.createElement("script");
			script.type = "text/x-mathjax-config";
			config = 'MathJax.Hub.Config({messageStyle: "none",skipStartupTypeset: true});';
			if (window.opera) {
				script.innerHTML = config;
			} else {
				script.text = config;
			}
			document.getElementsByTagName("head")[0].appendChild(script);

			// script
			script = document.createElement("script");
			script.type = "text/javascript";
			script.src = ('https:' == document.location.protocol ? 'https://d3eoax9i5htok0.cloudfront.net' : 'http://cdn.mathjax.org');
			script.src += '/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML-full';
			document.getElementsByTagName("head")[0].appendChild(script);
		}

		/**
		 * render div as math object
		 */
		this.show = function () {
			if(this.loaded) {
				return;
			}

			MathJax.Hub.Queue(["Typeset", MathJax.Hub, document.getElementById(this.divID)]);
		};
	};
}
