import './bootstrap';
import '@fortawesome/fontawesome-free/scss/fontawesome.scss';
import '@fortawesome/fontawesome-free/scss/brands.scss';
import '@fortawesome/fontawesome-free/scss/regular.scss';
import '@fortawesome/fontawesome-free/scss/solid.scss';
import '@fortawesome/fontawesome-free/scss/v4-shims.scss';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

window.deleteTwoot = function(id) {
    if (window.confirm("Are you sure?")) {
        const oReq = new XMLHttpRequest();
        oReq.addEventListener("load", reqListener);
        oReq.open("GET", "/twoot/" + id + "/delete");
        oReq.send();
    }
};

function reqListener () {
	/**
	 * @todo add error handling here
	 */
	window.location = this.responseURL;
};

window.transformTags = function() {
    let twootBodyCollection = document.getElementsByClassName('twoot-body-container');

    for (let element of twootBodyCollection) {
        let tagMap = {};
        for (let el of element.children) {
            if (el.tagName === 'SPAN') {
                tagMap[el.dataset.tagtag] = el.dataset.tagid;
            }

            if (el.className.includes('twoot-body')) {
                for (let tag in tagMap) {
                    el.innerHTML = el.innerHTML.replace("#"+tag, "<a class='underline text-blue-600 hover:text-rose-900 visited:text-blue-400' href='/tag/" + tagMap[tag] + "'>#" + tag + "</a>");
                }
            }
        }
    }
};

window.addEventListener('load', window.transformTags);
