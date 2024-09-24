"use strict";

import "flowbite";
import { Header, Lazyload } from "./function";

import jQuery from "jquery";
window.$ = jQuery;

$(function () {
    Header.init();
    Lazyload.init();

    AOS.init();
});
