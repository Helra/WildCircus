/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
require('../css/app.scss');

// this "modifies" the jquery module: adding behavior to it
// the bootstrap module doesn't export/return anything
// eslint-disable-next-line import/no-extraneous-dependencies
require('bootstrap');

// eslint-disable-next-line import/no-extraneous-dependencies
require('@fortawesome/fontawesome-free/css/all.min.css');
// eslint-disable-next-line import/no-extraneous-dependencies
require('@fortawesome/fontawesome-free/js/all.js');

// Need jQuery? Install it with "yarn add jquery", then uncomment to import it.
// import $ from 'jquery';
const $ = require('jquery');


console.log('Hello Webpack Encore! Edit me in assets/js/app.js');
