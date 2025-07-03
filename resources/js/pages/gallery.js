import Shuffle from "shufflejs";
import GLightbox from "glightbox";



class Demo {
    constructor(element) {
        this.element = element;
        this.shuffle = new Shuffle(element, {
            itemSelector: ".picture-item"
        });
        this.addShuffleEventListeners();
        this._activeFilters = [];
        this.addFilterButtons();
    }

    addShuffleEventListeners() {
        this.shuffle.on(Shuffle.EventType.LAYOUT, event => {
            // You can handle layout changes here if needed
        });

        this.shuffle.on(Shuffle.EventType.REMOVED, event => {
            // You can handle item removal here if needed
        });
    }

    addFilterButtons() {
        var filterOptions = document.querySelector(".filter-options");
        if (filterOptions) {
            const buttons = Array.from(filterOptions.children);
            const filterClickHandler = this._handleFilterClick.bind(this);

            buttons.forEach(button => {
                button.addEventListener("click", filterClickHandler, false);
            });
        }
    }

    _handleFilterClick(event) {
        const button = event.currentTarget;
        const isActive = button.classList.contains("active");

        const filterGroup = button.getAttribute("data-group");

        this._removeActiveClassFromChildren(button.parentNode);
        button.classList.add("active");

        this.shuffle.filter(filterGroup);
    }

    _removeActiveClassFromChildren(parent) {
        const children = parent["children"];
        for (let i = children.length - 1; i >= 0; i--) {
            children[i].classList.remove("active");
        }
    }
}

document.addEventListener("DOMContentLoaded", () => {
    window.demo = new Demo(document.getElementById("gallery-wrapper"));
});

var lightbox = GLightbox({
    selector: ".image-popup",
    title: false
});
