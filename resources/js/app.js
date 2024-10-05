import './bootstrap';
import $ from 'jquery';
import 'owl.carousel';
import Alpine from 'alpinejs';

import.meta.glob([
    '../images/**',
    '../fonts/**',
]);

import './common';
import './sliders';
import './tabs';
import './scroll';
import './dropdown';

window.Alpine = Alpine;

Alpine.start();