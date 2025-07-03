

import jsVectorMap from 'jsvectormap'
import 'jsvectormap/dist/maps/canada'
import 'jsvectormap/dist/maps/iraq'
import 'jsvectormap/dist/maps/italy'
import 'jsvectormap/dist/maps/russia'
import 'jsvectormap/dist/maps/spain'
import 'jsvectormap/dist/maps/us-merc-en'
import 'jsvectormap/dist/maps/world-merc'
import 'jsvectormap/dist/maps/world'

class VectorMap {

    initWorldMapMarker() {
        const map = new jsVectorMap({
            map: 'world',
            selector: '#world-map-markers',
            zoomOnScroll: false, 
            zoomButtons: true,
            markersSelectable: true,

            markerStyle: {
                initial: { fill: "#5B8DEC" },
                selected: { fill: "#ef5f5f" }
            },
            labels: {
                markers: {
                    render: marker => marker.name
                }
            }
        });
    }

    initCanadaVectorMap() {
        const map = new jsVectorMap({
            map: 'canada',
            selector: '#canada-vector-map',
            zoomOnScroll: false,
            regionStyle: {
                initial: {
                    fill: '#5B8DEC'
                }
            }
        });
    }

    initRussiaVectorMap() {
        const map = new jsVectorMap({
            map: 'russia',
            selector: '#russia-vector-map',
            zoomOnScroll: false,
            regionStyle: {
                initial: {
                    fill: '#5d7186'
                }
            }
        });
    }

    initItalyVectorMap() {
        const map = new jsVectorMap({
            map: 'italy',
            selector: '#italy-vector-map',
            zoomOnScroll: false,
            regionStyle: {
                initial: {
                    fill: '#37a593'
                }
            }
        });
    }

    initIraqVectorMap() {
        const map = new jsVectorMap({
            map: 'iraq',
            selector: '#iraq-vector-map',
            zoomOnScroll: false,
            regionStyle: {
                initial: {
                    fill: '#20c8e9'
                }
            }
        });
    }

    initSpainVectorMap() {
        const map = new jsVectorMap({
            map: 'spain',
            selector: '#spain-vector-map',
            zoomOnScroll: false,
            regionStyle: {
                initial: {
                    fill: '#ffe381'
                }
            }
        });
    }

    initUsaVectorMap() {
        const map = new jsVectorMap({
            map: 'us_merc_en',
            selector: '#usa-vector-map',
            regionStyle: {
                initial: {
                    fill: '#ffe381'
                }
            }
        });
    }

    init() {
        this.initWorldMapMarker();
        this.initCanadaVectorMap();
        this.initRussiaVectorMap();
        this.initItalyVectorMap();
        this.initIraqVectorMap();
        this.initSpainVectorMap();
        this.initUsaVectorMap();
    }

}

document.addEventListener('DOMContentLoaded', function (e) {
    new VectorMap().init();
});