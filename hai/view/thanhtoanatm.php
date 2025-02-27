<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/atm.css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //web fonts -->

    <title>Thanh toán</title>
</head>
<style>
    /*--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--*/

html,
body {
    margin: 0;
    font-size: 100%;
    background: #fff;
    font-family: 'Open Sans', sans-serif;
}

body a {
    text-decoration: none;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}
/*!
 * Bootstrap v4.0.0 (https://getbootstrap.com)
 * Copyright 2011-2018 The Bootstrap Authors
 * Copyright 2011-2018 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
:root {
  --blue: #007bff;
  --indigo: #6610f2;
  --purple: #6f42c1;
  --pink: #e83e8c;
  --red: #dc3545;
  --orange: #fd7e14;
  --yellow: #ffc107;
  --green: #28a745;
  --teal: #20c997;
  --cyan: #17a2b8;
  --white: #fff;
  --gray: #6c757d;
  --gray-dark: #343a40;
  --primary: #007bff;
  --secondary: #6c757d;
  --success: #28a745;
  --info: #17a2b8;
  --warning: #ffc107;
  --danger: #dc3545;
  --light: #f8f9fa;
  --dark: #343a40;
  --breakpoint-xs: 0;
  --breakpoint-sm: 576px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 992px;
  --breakpoint-xl: 1200px;
  --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -ms-overflow-style: scrollbar;
  -webkit-tap-highlight-color: transparent;
}

@-ms-viewport {
  width: device-width;
}

article, aside, dialog, figcaption, figure, footer, header, hgroup, main, nav, section {
  display: block;
}

body {
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  text-align: left;
  background-color: #fff;
}

[tabindex="-1"]:focus {
  outline: 0 !important;
}

hr {
  box-sizing: content-box;
  height: 0;
  overflow: visible;
}

h1, h2, h3, h4, h5, h6 {
  margin-top: 0;
  margin-bottom: 0.5rem;
}

p {
  margin-top: 0;
  margin-bottom: 1rem;
}

abbr[title],
abbr[data-original-title] {
  text-decoration: underline;
  -webkit-text-decoration: underline dotted;
  text-decoration: underline dotted;
  cursor: help;
  border-bottom: 0;
}

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}

dt {
  font-weight: 700;
}

dd {
  margin-bottom: .5rem;
  margin-left: 0;
}

blockquote {
  margin: 0 0 1rem;
}

dfn {
  font-style: italic;
}

b,
strong {
  font-weight: bolder;
}

small {
  font-size: 80%;
}

sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline;
}

sub {
  bottom: -.25em;
}

sup {
  top: -.5em;
}

a {
  color: #007bff;
  text-decoration: none;
  background-color: transparent;
  -webkit-text-decoration-skip: objects;
}

a:hover {
  color: #0056b3;
  text-decoration: underline;
}

a:not([href]):not([tabindex]) {
  color: inherit;
  text-decoration: none;
}

a:not([href]):not([tabindex]):hover, a:not([href]):not([tabindex]):focus {
  color: inherit;
  text-decoration: none;
}

a:not([href]):not([tabindex]):focus {
  outline: 0;
}

pre,
code,
kbd,
samp {
  font-family: monospace, monospace;
  font-size: 1em;
}

pre {
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  -ms-overflow-style: scrollbar;
}

figure {
  margin: 0 0 1rem;
}

img {
  vertical-align: middle;
  border-style: none;
}

svg:not(:root) {
  overflow: hidden;
}

table {
  border-collapse: collapse;
}

caption {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  color: #6c757d;
  text-align: left;
  caption-side: bottom;
}

th {
  text-align: inherit;
}

label {
  display: inline-block;
  margin-bottom: .5rem;
}

button {
  border-radius: 0;
}

button:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color;
}

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

button,
input {
  overflow: visible;
}

button,
select {
  text-transform: none;
}

button,
html [type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button;
}

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

input[type="radio"],
input[type="checkbox"] {
  box-sizing: border-box;
  padding: 0;
}

input[type="date"],
input[type="time"],
input[type="datetime-local"],
input[type="month"] {
  -webkit-appearance: listbox;
}

textarea {
  overflow: auto;
  resize: vertical;
}

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  display: block;
  width: 100%;
  max-width: 100%;
  padding: 0;
  margin-bottom: .5rem;
  font-size: 1.5rem;
  line-height: inherit;
  color: inherit;
  white-space: normal;
}

progress {
  vertical-align: baseline;
}

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto;
}

[type="search"] {
  outline-offset: -2px;
  -webkit-appearance: none;
}

[type="search"]::-webkit-search-cancel-button,
[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button;
}

output {
  display: inline-block;
}

summary {
  display: list-item;
  cursor: pointer;
}

template {
  display: none;
}

[hidden] {
  display: none !important;
}

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  margin-bottom: 0.5rem;
  font-family: inherit;
  font-weight: 500;
  line-height: 1.2;
  color: inherit;
}

h1, .h1 {
  font-size: 2.5rem;
}

h2, .h2 {
  font-size: 2rem;
}

h3, .h3 {
  font-size: 1.75rem;
}

h4, .h4 {
  font-size: 1.5rem;
}

h5, .h5 {
  font-size: 1.25rem;
}

h6, .h6 {
  font-size: 1rem;
}

.lead {
  font-size: 1.25rem;
  font-weight: 300;
}

.display-1 {
  font-size: 6rem;
  font-weight: 300;
  line-height: 1.2;
}

.display-2 {
  font-size: 5.5rem;
  font-weight: 300;
  line-height: 1.2;
}

.display-3 {
  font-size: 4.5rem;
  font-weight: 300;
  line-height: 1.2;
}

.display-4 {
  font-size: 3.5rem;
  font-weight: 300;
  line-height: 1.2;
}

hr {
  margin-top: 1rem;
  margin-bottom: 1rem;
  border: 0;
  border-top: 1px solid rgba(0, 0, 0, 0.1);
}

small,
.small {
  font-size: 80%;
  font-weight: 400;
}

mark,
.mark {
  padding: 0.2em;
  background-color: #fcf8e3;
}

.list-unstyled {
  padding-left: 0;
  list-style: none;
}

.list-inline {
  padding-left: 0;
  list-style: none;
}

.list-inline-item {
  display: inline-block;
}

.list-inline-item:not(:last-child) {
  margin-right: 0.5rem;
}

.initialism {
  font-size: 90%;
  text-transform: uppercase;
}

.blockquote {
  margin-bottom: 1rem;
  font-size: 1.25rem;
}

.blockquote-footer {
  display: block;
  font-size: 80%;
  color: #6c757d;
}

.blockquote-footer::before {
  content: "\2014 \00A0";
}

.img-fluid {
  max-width: 100%;
  height: auto;
}

.img-thumbnail {
  padding: 0.25rem;
  background-color: #fff;
  border: 1px solid #dee2e6;
  border-radius: 0.25rem;
  max-width: 100%;
  height: auto;
}

.figure {
  display: inline-block;
}

.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1;
}

.figure-caption {
  font-size: 90%;
  color: #6c757d;
}

code,
kbd,
pre,
samp {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}

code {
  font-size: 87.5%;
  color: #e83e8c;
  word-break: break-word;
}

a > code {
  color: inherit;
}

kbd {
  padding: 0.2rem 0.4rem;
  font-size: 87.5%;
  color: #fff;
  background-color: #212529;
  border-radius: 0.2rem;
}

kbd kbd {
  padding: 0;
  font-size: 100%;
  font-weight: 700;
}

pre {
  display: block;
  font-size: 87.5%;
  color: #212529;
}

pre code {
  font-size: inherit;
  color: inherit;
  word-break: normal;
}

.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll;
}

.container {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 576px) {
  .container {
    max-width: 540px;
  }
}

@media (min-width: 768px) {
  .container {
    max-width: 720px;
  }
}

@media (min-width: 992px) {
  .container {
    max-width: 960px;
  }
}

@media (min-width: 1200px) {
  .container {
    max-width: 1140px;
  }
}

.container-fluid {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

.row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}

.no-gutters {
  margin-right: 0;
  margin-left: 0;
}

.no-gutters > .col,
.no-gutters > [class*="col-"] {
  padding-right: 0;
  padding-left: 0;
}

.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
.col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
.col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
.col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
.col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
.col-xl-auto {
  position: relative;
  width: 100%;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}

.col {
  -ms-flex-preferred-size: 0;
  flex-basis: 0;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  max-width: 100%;
}

.col-auto {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: auto;
  max-width: none;
}

.col-1 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 8.333333%;
  flex: 0 0 8.333333%;
  max-width: 8.333333%;
}

.col-2 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 16.666667%;
  flex: 0 0 16.666667%;
  max-width: 16.666667%;
}

.col-3 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 25%;
  flex: 0 0 25%;
  max-width: 25%;
}

.col-4 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 33.333333%;
  flex: 0 0 33.333333%;
  max-width: 33.333333%;
}

.col-5 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 41.666667%;
  flex: 0 0 41.666667%;
  max-width: 41.666667%;
}

.col-6 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 50%;
  flex: 0 0 50%;
  max-width: 50%;
}

.col-7 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 58.333333%;
  flex: 0 0 58.333333%;
  max-width: 58.333333%;
}

.col-8 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 66.666667%;
  flex: 0 0 66.666667%;
  max-width: 66.666667%;
}

.col-9 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 75%;
  flex: 0 0 75%;
  max-width: 75%;
}

.col-10 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 83.333333%;
  flex: 0 0 83.333333%;
  max-width: 83.333333%;
}

.col-11 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 91.666667%;
  flex: 0 0 91.666667%;
  max-width: 91.666667%;
}

.col-12 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 100%;
  flex: 0 0 100%;
  max-width: 100%;
}

.order-first {
  -webkit-box-ordinal-group: 0;
  -ms-flex-order: -1;
  order: -1;
}

.order-last {
  -webkit-box-ordinal-group: 14;
  -ms-flex-order: 13;
  order: 13;
}

.order-0 {
  -webkit-box-ordinal-group: 1;
  -ms-flex-order: 0;
  order: 0;
}

.order-1 {
  -webkit-box-ordinal-group: 2;
  -ms-flex-order: 1;
  order: 1;
}

.order-2 {
  -webkit-box-ordinal-group: 3;
  -ms-flex-order: 2;
  order: 2;
}

.order-3 {
  -webkit-box-ordinal-group: 4;
  -ms-flex-order: 3;
  order: 3;
}

.order-4 {
  -webkit-box-ordinal-group: 5;
  -ms-flex-order: 4;
  order: 4;
}

.order-5 {
  -webkit-box-ordinal-group: 6;
  -ms-flex-order: 5;
  order: 5;
}

.order-6 {
  -webkit-box-ordinal-group: 7;
  -ms-flex-order: 6;
  order: 6;
}

.order-7 {
  -webkit-box-ordinal-group: 8;
  -ms-flex-order: 7;
  order: 7;
}

.order-8 {
  -webkit-box-ordinal-group: 9;
  -ms-flex-order: 8;
  order: 8;
}

.order-9 {
  -webkit-box-ordinal-group: 10;
  -ms-flex-order: 9;
  order: 9;
}

.order-10 {
  -webkit-box-ordinal-group: 11;
  -ms-flex-order: 10;
  order: 10;
}

.order-11 {
  -webkit-box-ordinal-group: 12;
  -ms-flex-order: 11;
  order: 11;
}

.order-12 {
  -webkit-box-ordinal-group: 13;
  -ms-flex-order: 12;
  order: 12;
}

.offset-1 {
  margin-left: 8.333333%;
}

.offset-2 {
  margin-left: 16.666667%;
}

.offset-3 {
  margin-left: 25%;
}

.offset-4 {
  margin-left: 33.333333%;
}

.offset-5 {
  margin-left: 41.666667%;
}

.offset-6 {
  margin-left: 50%;
}

.offset-7 {
  margin-left: 58.333333%;
}

.offset-8 {
  margin-left: 66.666667%;
}

.offset-9 {
  margin-left: 75%;
}

.offset-10 {
  margin-left: 83.333333%;
}

.offset-11 {
  margin-left: 91.666667%;
}

@media (min-width: 576px) {
  .col-sm {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }
  .col-sm-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .col-sm-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }
  .col-sm-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-sm-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-sm-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .col-sm-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }
  .col-sm-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-sm-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }
  .col-sm-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }
  .col-sm-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-sm-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }
  .col-sm-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }
  .col-sm-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-sm-first {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1;
  }
  .order-sm-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13;
  }
  .order-sm-0 {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0;
  }
  .order-sm-1 {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1;
  }
  .order-sm-2 {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2;
  }
  .order-sm-3 {
    -webkit-box-ordinal-group: 4;
    -ms-flex-order: 3;
    order: 3;
  }
  .order-sm-4 {
    -webkit-box-ordinal-group: 5;
    -ms-flex-order: 4;
    order: 4;
  }
  .order-sm-5 {
    -webkit-box-ordinal-group: 6;
    -ms-flex-order: 5;
    order: 5;
  }
  .order-sm-6 {
    -webkit-box-ordinal-group: 7;
    -ms-flex-order: 6;
    order: 6;
  }
  .order-sm-7 {
    -webkit-box-ordinal-group: 8;
    -ms-flex-order: 7;
    order: 7;
  }
  .order-sm-8 {
    -webkit-box-ordinal-group: 9;
    -ms-flex-order: 8;
    order: 8;
  }
  .order-sm-9 {
    -webkit-box-ordinal-group: 10;
    -ms-flex-order: 9;
    order: 9;
  }
  .order-sm-10 {
    -webkit-box-ordinal-group: 11;
    -ms-flex-order: 10;
    order: 10;
  }
  .order-sm-11 {
    -webkit-box-ordinal-group: 12;
    -ms-flex-order: 11;
    order: 11;
  }
  .order-sm-12 {
    -webkit-box-ordinal-group: 13;
    -ms-flex-order: 12;
    order: 12;
  }
  .offset-sm-0 {
    margin-left: 0;
  }
  .offset-sm-1 {
    margin-left: 8.333333%;
  }
  .offset-sm-2 {
    margin-left: 16.666667%;
  }
  .offset-sm-3 {
    margin-left: 25%;
  }
  .offset-sm-4 {
    margin-left: 33.333333%;
  }
  .offset-sm-5 {
    margin-left: 41.666667%;
  }
  .offset-sm-6 {
    margin-left: 50%;
  }
  .offset-sm-7 {
    margin-left: 58.333333%;
  }
  .offset-sm-8 {
    margin-left: 66.666667%;
  }
  .offset-sm-9 {
    margin-left: 75%;
  }
  .offset-sm-10 {
    margin-left: 83.333333%;
  }
  .offset-sm-11 {
    margin-left: 91.666667%;
  }
}

@media (min-width: 768px) {
  .col-md {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }
  .col-md-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .col-md-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }
  .col-md-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-md-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-md-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .col-md-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }
  .col-md-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-md-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }
  .col-md-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }
  .col-md-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-md-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }
  .col-md-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }
  .col-md-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-md-first {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1;
  }
  .order-md-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13;
  }
  .order-md-0 {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0;
  }
  .order-md-1 {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1;
  }
  .order-md-2 {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2;
  }
  .order-md-3 {
    -webkit-box-ordinal-group: 4;
    -ms-flex-order: 3;
    order: 3;
  }
  .order-md-4 {
    -webkit-box-ordinal-group: 5;
    -ms-flex-order: 4;
    order: 4;
  }
  .order-md-5 {
    -webkit-box-ordinal-group: 6;
    -ms-flex-order: 5;
    order: 5;
  }
  .order-md-6 {
    -webkit-box-ordinal-group: 7;
    -ms-flex-order: 6;
    order: 6;
  }
  .order-md-7 {
    -webkit-box-ordinal-group: 8;
    -ms-flex-order: 7;
    order: 7;
  }
  .order-md-8 {
    -webkit-box-ordinal-group: 9;
    -ms-flex-order: 8;
    order: 8;
  }
  .order-md-9 {
    -webkit-box-ordinal-group: 10;
    -ms-flex-order: 9;
    order: 9;
  }
  .order-md-10 {
    -webkit-box-ordinal-group: 11;
    -ms-flex-order: 10;
    order: 10;
  }
  .order-md-11 {
    -webkit-box-ordinal-group: 12;
    -ms-flex-order: 11;
    order: 11;
  }
  .order-md-12 {
    -webkit-box-ordinal-group: 13;
    -ms-flex-order: 12;
    order: 12;
  }
  .offset-md-0 {
    margin-left: 0;
  }
  .offset-md-1 {
    margin-left: 8.333333%;
  }
  .offset-md-2 {
    margin-left: 16.666667%;
  }
  .offset-md-3 {
    margin-left: 25%;
  }
  .offset-md-4 {
    margin-left: 33.333333%;
  }
  .offset-md-5 {
    margin-left: 41.666667%;
  }
  .offset-md-6 {
    margin-left: 50%;
  }
  .offset-md-7 {
    margin-left: 58.333333%;
  }
  .offset-md-8 {
    margin-left: 66.666667%;
  }
  .offset-md-9 {
    margin-left: 75%;
  }
  .offset-md-10 {
    margin-left: 83.333333%;
  }
  .offset-md-11 {
    margin-left: 91.666667%;
  }
}

@media (min-width: 992px) {
  .col-lg {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }
  .col-lg-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .col-lg-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }
  .col-lg-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-lg-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-lg-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .col-lg-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }
  .col-lg-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-lg-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }
  .col-lg-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }
  .col-lg-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-lg-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }
  .col-lg-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }
  .col-lg-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-lg-first {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1;
  }
  .order-lg-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13;
  }
  .order-lg-0 {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0;
  }
  .order-lg-1 {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1;
  }
  .order-lg-2 {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2;
  }
  .order-lg-3 {
    -webkit-box-ordinal-group: 4;
    -ms-flex-order: 3;
    order: 3;
  }
  .order-lg-4 {
    -webkit-box-ordinal-group: 5;
    -ms-flex-order: 4;
    order: 4;
  }
  .order-lg-5 {
    -webkit-box-ordinal-group: 6;
    -ms-flex-order: 5;
    order: 5;
  }
  .order-lg-6 {
    -webkit-box-ordinal-group: 7;
    -ms-flex-order: 6;
    order: 6;
  }
  .order-lg-7 {
    -webkit-box-ordinal-group: 8;
    -ms-flex-order: 7;
    order: 7;
  }
  .order-lg-8 {
    -webkit-box-ordinal-group: 9;
    -ms-flex-order: 8;
    order: 8;
  }
  .order-lg-9 {
    -webkit-box-ordinal-group: 10;
    -ms-flex-order: 9;
    order: 9;
  }
  .order-lg-10 {
    -webkit-box-ordinal-group: 11;
    -ms-flex-order: 10;
    order: 10;
  }
  .order-lg-11 {
    -webkit-box-ordinal-group: 12;
    -ms-flex-order: 11;
    order: 11;
  }
  .order-lg-12 {
    -webkit-box-ordinal-group: 13;
    -ms-flex-order: 12;
    order: 12;
  }
  .offset-lg-0 {
    margin-left: 0;
  }
  .offset-lg-1 {
    margin-left: 8.333333%;
  }
  .offset-lg-2 {
    margin-left: 16.666667%;
  }
  .offset-lg-3 {
    margin-left: 25%;
  }
  .offset-lg-4 {
    margin-left: 33.333333%;
  }
  .offset-lg-5 {
    margin-left: 41.666667%;
  }
  .offset-lg-6 {
    margin-left: 50%;
  }
  .offset-lg-7 {
    margin-left: 58.333333%;
  }
  .offset-lg-8 {
    margin-left: 66.666667%;
  }
  .offset-lg-9 {
    margin-left: 75%;
  }
  .offset-lg-10 {
    margin-left: 83.333333%;
  }
  .offset-lg-11 {
    margin-left: 91.666667%;
  }
}

@media (min-width: 1200px) {
  .col-xl {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }
  .col-xl-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .col-xl-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }
  .col-xl-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-xl-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-xl-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .col-xl-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }
  .col-xl-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-xl-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }
  .col-xl-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }
  .col-xl-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-xl-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }
  .col-xl-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }
  .col-xl-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-xl-first {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1;
  }
  .order-xl-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13;
  }
  .order-xl-0 {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0;
  }
  .order-xl-1 {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1;
  }
  .order-xl-2 {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2;
  }
  .order-xl-3 {
    -webkit-box-ordinal-group: 4;
    -ms-flex-order: 3;
    order: 3;
  }
  .order-xl-4 {
    -webkit-box-ordinal-group: 5;
    -ms-flex-order: 4;
    order: 4;
  }
  .order-xl-5 {
    -webkit-box-ordinal-group: 6;
    -ms-flex-order: 5;
    order: 5;
  }
  .order-xl-6 {
    -webkit-box-ordinal-group: 7;
    -ms-flex-order: 6;
    order: 6;
  }
  .order-xl-7 {
    -webkit-box-ordinal-group: 8;
    -ms-flex-order: 7;
    order: 7;
  }
  .order-xl-8 {
    -webkit-box-ordinal-group: 9;
    -ms-flex-order: 8;
    order: 8;
  }
  .order-xl-9 {
    -webkit-box-ordinal-group: 10;
    -ms-flex-order: 9;
    order: 9;
  }
  .order-xl-10 {
    -webkit-box-ordinal-group: 11;
    -ms-flex-order: 10;
    order: 10;
  }
  .order-xl-11 {
    -webkit-box-ordinal-group: 12;
    -ms-flex-order: 11;
    order: 11;
  }
  .order-xl-12 {
    -webkit-box-ordinal-group: 13;
    -ms-flex-order: 12;
    order: 12;
  }
  .offset-xl-0 {
    margin-left: 0;
  }
  .offset-xl-1 {
    margin-left: 8.333333%;
  }
  .offset-xl-2 {
    margin-left: 16.666667%;
  }
  .offset-xl-3 {
    margin-left: 25%;
  }
  .offset-xl-4 {
    margin-left: 33.333333%;
  }
  .offset-xl-5 {
    margin-left: 41.666667%;
  }
  .offset-xl-6 {
    margin-left: 50%;
  }
  .offset-xl-7 {
    margin-left: 58.333333%;
  }
  .offset-xl-8 {
    margin-left: 66.666667%;
  }
  .offset-xl-9 {
    margin-left: 75%;
  }
  .offset-xl-10 {
    margin-left: 83.333333%;
  }
  .offset-xl-11 {
    margin-left: 91.666667%;
  }
}

.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 1rem;
  background-color: transparent;
}

.table th,
.table td {
  padding: 0.75rem;
  vertical-align: top;
  border-top: 1px solid #dee2e6;
}

.table thead th {
  vertical-align: bottom;
  border-bottom: 2px solid #dee2e6;
}

.table tbody + tbody {
  border-top: 2px solid #dee2e6;
}

.table .table {
  background-color: #fff;
}

.table-sm th,
.table-sm td {
  padding: 0.3rem;
}

.table-bordered {
  border: 1px solid #dee2e6;
}

.table-bordered th,
.table-bordered td {
  border: 1px solid #dee2e6;
}

.table-bordered thead th,
.table-bordered thead td {
  border-bottom-width: 2px;
}

.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(0, 0, 0, 0.05);
}

.table-hover tbody tr:hover {
  background-color: rgba(0, 0, 0, 0.075);
}

.table-primary,
.table-primary > th,
.table-primary > td {
  background-color: #b8daff;
}

.table-hover .table-primary:hover {
  background-color: #9fcdff;
}

.table-hover .table-primary:hover > td,
.table-hover .table-primary:hover > th {
  background-color: #9fcdff;
}

.table-secondary,
.table-secondary > th,
.table-secondary > td {
  background-color: #d6d8db;
}

.table-hover .table-secondary:hover {
  background-color: #c8cbcf;
}

.table-hover .table-secondary:hover > td,
.table-hover .table-secondary:hover > th {
  background-color: #c8cbcf;
}

.table-success,
.table-success > th,
.table-success > td {
  background-color: #c3e6cb;
}

.table-hover .table-success:hover {
  background-color: #b1dfbb;
}

.table-hover .table-success:hover > td,
.table-hover .table-success:hover > th {
  background-color: #b1dfbb;
}

.table-info,
.table-info > th,
.table-info > td {
  background-color: #bee5eb;
}

.table-hover .table-info:hover {
  background-color: #abdde5;
}

.table-hover .table-info:hover > td,
.table-hover .table-info:hover > th {
  background-color: #abdde5;
}

.table-warning,
.table-warning > th,
.table-warning > td {
  background-color: #ffeeba;
}

.table-hover .table-warning:hover {
  background-color: #ffe8a1;
}

.table-hover .table-warning:hover > td,
.table-hover .table-warning:hover > th {
  background-color: #ffe8a1;
}

.table-danger,
.table-danger > th,
.table-danger > td {
  background-color: #f5c6cb;
}

.table-hover .table-danger:hover {
  background-color: #f1b0b7;
}

.table-hover .table-danger:hover > td,
.table-hover .table-danger:hover > th {
  background-color: #f1b0b7;
}

.table-light,
.table-light > th,
.table-light > td {
  background-color: #fdfdfe;
}

.table-hover .table-light:hover {
  background-color: #ececf6;
}

.table-hover .table-light:hover > td,
.table-hover .table-light:hover > th {
  background-color: #ececf6;
}

.table-dark,
.table-dark > th,
.table-dark > td {
  background-color: #c6c8ca;
}

.table-hover .table-dark:hover {
  background-color: #b9bbbe;
}

.table-hover .table-dark:hover > td,
.table-hover .table-dark:hover > th {
  background-color: #b9bbbe;
}

.table-active,
.table-active > th,
.table-active > td {
  background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover {
  background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover > td,
.table-hover .table-active:hover > th {
  background-color: rgba(0, 0, 0, 0.075);
}

.table .thead-dark th {
  color: #fff;
  background-color: #212529;
  border-color: #32383e;
}

.table .thead-light th {
  color: #495057;
  background-color: #e9ecef;
  border-color: #dee2e6;
}

.table-dark {
  color: #fff;
  background-color: #212529;
}

.table-dark th,
.table-dark td,
.table-dark thead th {
  border-color: #32383e;
}

.table-dark.table-bordered {
  border: 0;
}

.table-dark.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(255, 255, 255, 0.05);
}

.table-dark.table-hover tbody tr:hover {
  background-color: rgba(255, 255, 255, 0.075);
}

@media (max-width: 575.98px) {
  .table-responsive-sm {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }
  .table-responsive-sm > .table-bordered {
    border: 0;
  }
}

@media (max-width: 767.98px) {
  .table-responsive-md {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }
  .table-responsive-md > .table-bordered {
    border: 0;
  }
}

@media (max-width: 991.98px) {
  .table-responsive-lg {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }
  .table-responsive-lg > .table-bordered {
    border: 0;
  }
}

@media (max-width: 1199.98px) {
  .table-responsive-xl {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }
  .table-responsive-xl > .table-bordered {
    border: 0;
  }
}

.table-responsive {
  display: block;
  width: 100%;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  -ms-overflow-style: -ms-autohiding-scrollbar;
}

.table-responsive > .table-bordered {
  border: 0;
}

.form-control {
  display: block;
  width: 100%;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.form-control::-ms-expand {
  background-color: transparent;
  border: 0;
}

.form-control:focus {
  color: #495057;
  background-color: #fff;
  border-color: #80bdff;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.form-control::-webkit-input-placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control::-moz-placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control:-ms-input-placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control::-ms-input-placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control::placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control:disabled, .form-control[readonly] {
  background-color: #e9ecef;
  opacity: 1;
}

select.form-control:not([size]):not([multiple]) {
  height: calc(2.25rem + 2px);
}

select.form-control:focus::-ms-value {
  color: #495057;
  background-color: #fff;
}

.form-control-file,
.form-control-range {
  display: block;
  width: 100%;
}

.col-form-label {
  padding-top: calc(0.375rem + 1px);
  padding-bottom: calc(0.375rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1.5;
}

.col-form-label-lg {
  padding-top: calc(0.5rem + 1px);
  padding-bottom: calc(0.5rem + 1px);
  font-size: 1.25rem;
  line-height: 1.5;
}

.col-form-label-sm {
  padding-top: calc(0.25rem + 1px);
  padding-bottom: calc(0.25rem + 1px);
  font-size: 0.875rem;
  line-height: 1.5;
}

.form-control-plaintext {
  display: block;
  width: 100%;
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  margin-bottom: 0;
  line-height: 1.5;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0;
}

.form-control-plaintext.form-control-sm, .input-group-sm > .form-control-plaintext.form-control,
.input-group-sm > .input-group-prepend > .form-control-plaintext.input-group-text,
.input-group-sm > .input-group-append > .form-control-plaintext.input-group-text,
.input-group-sm > .input-group-prepend > .form-control-plaintext.btn,
.input-group-sm > .input-group-append > .form-control-plaintext.btn, .form-control-plaintext.form-control-lg, .input-group-lg > .form-control-plaintext.form-control,
.input-group-lg > .input-group-prepend > .form-control-plaintext.input-group-text,
.input-group-lg > .input-group-append > .form-control-plaintext.input-group-text,
.input-group-lg > .input-group-prepend > .form-control-plaintext.btn,
.input-group-lg > .input-group-append > .form-control-plaintext.btn {
  padding-right: 0;
  padding-left: 0;
}

.form-control-sm, .input-group-sm > .form-control,
.input-group-sm > .input-group-prepend > .input-group-text,
.input-group-sm > .input-group-append > .input-group-text,
.input-group-sm > .input-group-prepend > .btn,
.input-group-sm > .input-group-append > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem;
}

select.form-control-sm:not([size]):not([multiple]), .input-group-sm > select.form-control:not([size]):not([multiple]),
.input-group-sm > .input-group-prepend > select.input-group-text:not([size]):not([multiple]),
.input-group-sm > .input-group-append > select.input-group-text:not([size]):not([multiple]),
.input-group-sm > .input-group-prepend > select.btn:not([size]):not([multiple]),
.input-group-sm > .input-group-append > select.btn:not([size]):not([multiple]) {
  height: calc(1.8125rem + 2px);
}

.form-control-lg, .input-group-lg > .form-control,
.input-group-lg > .input-group-prepend > .input-group-text,
.input-group-lg > .input-group-append > .input-group-text,
.input-group-lg > .input-group-prepend > .btn,
.input-group-lg > .input-group-append > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}

select.form-control-lg:not([size]):not([multiple]), .input-group-lg > select.form-control:not([size]):not([multiple]),
.input-group-lg > .input-group-prepend > select.input-group-text:not([size]):not([multiple]),
.input-group-lg > .input-group-append > select.input-group-text:not([size]):not([multiple]),
.input-group-lg > .input-group-prepend > select.btn:not([size]):not([multiple]),
.input-group-lg > .input-group-append > select.btn:not([size]):not([multiple]) {
  height: calc(2.875rem + 2px);
}

.form-group {
  margin-bottom: 1rem;
}

.form-text {
  display: block;
  margin-top: 0.25rem;
}

.form-row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -5px;
  margin-left: -5px;
}

.form-row > .col,
.form-row > [class*="col-"] {
  padding-right: 5px;
  padding-left: 5px;
}

.form-check {
  position: relative;
  display: block;
  padding-left: 1.25rem;
}

.form-check-input {
  position: absolute;
  margin-top: 0.3rem;
  margin-left: -1.25rem;
}

.form-check-input:disabled ~ .form-check-label {
  color: #6c757d;
}

.form-check-label {
  margin-bottom: 0;
}

.form-check-inline {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  padding-left: 0;
  margin-right: 0.75rem;
}

.form-check-inline .form-check-input {
  position: static;
  margin-top: 0;
  margin-right: 0.3125rem;
  margin-left: 0;
}

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #28a745;
}

.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: .5rem;
  margin-top: .1rem;
  font-size: .875rem;
  line-height: 1;
  color: #fff;
  background-color: rgba(40, 167, 69, 0.8);
  border-radius: .2rem;
}

.was-validated .form-control:valid, .form-control.is-valid, .was-validated
.custom-select:valid,
.custom-select.is-valid {
  border-color: #28a745;
}

.was-validated .form-control:valid:focus, .form-control.is-valid:focus, .was-validated
.custom-select:valid:focus,
.custom-select.is-valid:focus {
  border-color: #28a745;
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

.was-validated .form-control:valid ~ .valid-feedback,
.was-validated .form-control:valid ~ .valid-tooltip, .form-control.is-valid ~ .valid-feedback,
.form-control.is-valid ~ .valid-tooltip, .was-validated
.custom-select:valid ~ .valid-feedback,
.was-validated
.custom-select:valid ~ .valid-tooltip,
.custom-select.is-valid ~ .valid-feedback,
.custom-select.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
  color: #28a745;
}

.was-validated .form-check-input:valid ~ .valid-feedback,
.was-validated .form-check-input:valid ~ .valid-tooltip, .form-check-input.is-valid ~ .valid-feedback,
.form-check-input.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .custom-control-input:valid ~ .custom-control-label, .custom-control-input.is-valid ~ .custom-control-label {
  color: #28a745;
}

.was-validated .custom-control-input:valid ~ .custom-control-label::before, .custom-control-input.is-valid ~ .custom-control-label::before {
  background-color: #71dd8a;
}

.was-validated .custom-control-input:valid ~ .valid-feedback,
.was-validated .custom-control-input:valid ~ .valid-tooltip, .custom-control-input.is-valid ~ .valid-feedback,
.custom-control-input.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .custom-control-input:valid:checked ~ .custom-control-label::before, .custom-control-input.is-valid:checked ~ .custom-control-label::before {
  background-color: #34ce57;
}

.was-validated .custom-control-input:valid:focus ~ .custom-control-label::before, .custom-control-input.is-valid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

.was-validated .custom-file-input:valid ~ .custom-file-label, .custom-file-input.is-valid ~ .custom-file-label {
  border-color: #28a745;
}

.was-validated .custom-file-input:valid ~ .custom-file-label::before, .custom-file-input.is-valid ~ .custom-file-label::before {
  border-color: inherit;
}

.was-validated .custom-file-input:valid ~ .valid-feedback,
.was-validated .custom-file-input:valid ~ .valid-tooltip, .custom-file-input.is-valid ~ .valid-feedback,
.custom-file-input.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .custom-file-input:valid:focus ~ .custom-file-label, .custom-file-input.is-valid:focus ~ .custom-file-label {
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #dc3545;
}

.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: .5rem;
  margin-top: .1rem;
  font-size: .875rem;
  line-height: 1;
  color: #fff;
  background-color: rgba(220, 53, 69, 0.8);
  border-radius: .2rem;
}

.was-validated .form-control:invalid, .form-control.is-invalid, .was-validated
.custom-select:invalid,
.custom-select.is-invalid {
  border-color: #dc3545;
}

.was-validated .form-control:invalid:focus, .form-control.is-invalid:focus, .was-validated
.custom-select:invalid:focus,
.custom-select.is-invalid:focus {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.was-validated .form-control:invalid ~ .invalid-feedback,
.was-validated .form-control:invalid ~ .invalid-tooltip, .form-control.is-invalid ~ .invalid-feedback,
.form-control.is-invalid ~ .invalid-tooltip, .was-validated
.custom-select:invalid ~ .invalid-feedback,
.was-validated
.custom-select:invalid ~ .invalid-tooltip,
.custom-select.is-invalid ~ .invalid-feedback,
.custom-select.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
  color: #dc3545;
}

.was-validated .form-check-input:invalid ~ .invalid-feedback,
.was-validated .form-check-input:invalid ~ .invalid-tooltip, .form-check-input.is-invalid ~ .invalid-feedback,
.form-check-input.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .custom-control-input:invalid ~ .custom-control-label, .custom-control-input.is-invalid ~ .custom-control-label {
  color: #dc3545;
}

.was-validated .custom-control-input:invalid ~ .custom-control-label::before, .custom-control-input.is-invalid ~ .custom-control-label::before {
  background-color: #efa2a9;
}

.was-validated .custom-control-input:invalid ~ .invalid-feedback,
.was-validated .custom-control-input:invalid ~ .invalid-tooltip, .custom-control-input.is-invalid ~ .invalid-feedback,
.custom-control-input.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before, .custom-control-input.is-invalid:checked ~ .custom-control-label::before {
  background-color: #e4606d;
}

.was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before, .custom-control-input.is-invalid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.was-validated .custom-file-input:invalid ~ .custom-file-label, .custom-file-input.is-invalid ~ .custom-file-label {
  border-color: #dc3545;
}

.was-validated .custom-file-input:invalid ~ .custom-file-label::before, .custom-file-input.is-invalid ~ .custom-file-label::before {
  border-color: inherit;
}

.was-validated .custom-file-input:invalid ~ .invalid-feedback,
.was-validated .custom-file-input:invalid ~ .invalid-tooltip, .custom-file-input.is-invalid ~ .invalid-feedback,
.custom-file-input.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .custom-file-input:invalid:focus ~ .custom-file-label, .custom-file-input.is-invalid:focus ~ .custom-file-label {
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.form-inline {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-flow: row wrap;
  flex-flow: row wrap;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}

.form-inline .form-check {
  width: 100%;
}

@media (min-width: 576px) {
  .form-inline label {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    margin-bottom: 0;
  }
  .form-inline .form-group {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    margin-bottom: 0;
  }
  .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .form-inline .form-control-plaintext {
    display: inline-block;
  }
  .form-inline .input-group {
    width: auto;
  }
  .form-inline .form-check {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: auto;
    padding-left: 0;
  }
  .form-inline .form-check-input {
    position: relative;
    margin-top: 0;
    margin-right: 0.25rem;
    margin-left: 0;
  }
  .form-inline .custom-control {
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
  }
  .form-inline .custom-control-label {
    margin-bottom: 0;
  }
}

.btn {
  display: inline-block;
  font-weight: 400;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  border: 1px solid transparent;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.25rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.btn:hover, .btn:focus {
  text-decoration: none;
}

.btn:focus, .btn.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.btn.disabled, .btn:disabled {
  opacity: 0.65;
}

.btn:not(:disabled):not(.disabled) {
  cursor: pointer;
}

.btn:not(:disabled):not(.disabled):active, .btn:not(:disabled):not(.disabled).active {
  background-image: none;
}

a.btn.disabled,
fieldset:disabled a.btn {
  pointer-events: none;
}

.btn-primary {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:hover {
  color: #fff;
  background-color: #0069d9;
  border-color: #0062cc;
}

.btn-primary:focus, .btn-primary.focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
}

.btn-primary.disabled, .btn-primary:disabled {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
.show > .btn-primary.dropdown-toggle {
  color: #fff;
  background-color: #0062cc;
  border-color: #005cbf;
}

.btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
.show > .btn-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
}

.btn-secondary {
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d;
}

.btn-secondary:hover {
  color: #fff;
  background-color: #5a6268;
  border-color: #545b62;
}

.btn-secondary:focus, .btn-secondary.focus {
  box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
}

.btn-secondary.disabled, .btn-secondary:disabled {
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d;
}

.btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active,
.show > .btn-secondary.dropdown-toggle {
  color: #fff;
  background-color: #545b62;
  border-color: #4e555b;
}

.btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
.show > .btn-secondary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
}

.btn-success {
  color: #fff;
  background-color: #28a745;
  border-color: #28a745;
}

.btn-success:hover {
  color: #fff;
  background-color: #218838;
  border-color: #1e7e34;
}

.btn-success:focus, .btn-success.focus {
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
}

.btn-success.disabled, .btn-success:disabled {
  color: #fff;
  background-color: #28a745;
  border-color: #28a745;
}

.btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
.show > .btn-success.dropdown-toggle {
  color: #fff;
  background-color: #1e7e34;
  border-color: #1c7430;
}

.btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus,
.show > .btn-success.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
}

.btn-info {
  color: #fff;
  background-color: #17a2b8;
  border-color: #17a2b8;
}

.btn-info:hover {
  color: #fff;
  background-color: #138496;
  border-color: #117a8b;
}

.btn-info:focus, .btn-info.focus {
  box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
}

.btn-info.disabled, .btn-info:disabled {
  color: #fff;
  background-color: #17a2b8;
  border-color: #17a2b8;
}

.btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active,
.show > .btn-info.dropdown-toggle {
  color: #fff;
  background-color: #117a8b;
  border-color: #10707f;
}

.btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus,
.show > .btn-info.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
}

.btn-warning {
  color: #212529;
  background-color: #ffc107;
  border-color: #ffc107;
}

.btn-warning:hover {
  color: #212529;
  background-color: #e0a800;
  border-color: #d39e00;
}

.btn-warning:focus, .btn-warning.focus {
  box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
}

.btn-warning.disabled, .btn-warning:disabled {
  color: #212529;
  background-color: #ffc107;
  border-color: #ffc107;
}

.btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active,
.show > .btn-warning.dropdown-toggle {
  color: #212529;
  background-color: #d39e00;
  border-color: #c69500;
}

.btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus,
.show > .btn-warning.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
}

.btn-danger {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}

.btn-danger:hover {
  color: #fff;
  background-color: #c82333;
  border-color: #bd2130;
}

.btn-danger:focus, .btn-danger.focus {
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
}

.btn-danger.disabled, .btn-danger:disabled {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}

.btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active,
.show > .btn-danger.dropdown-toggle {
  color: #fff;
  background-color: #bd2130;
  border-color: #b21f2d;
}

.btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus,
.show > .btn-danger.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
}

.btn-light {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-light:hover {
  color: #212529;
  background-color: #e2e6ea;
  border-color: #dae0e5;
}

.btn-light:focus, .btn-light.focus {
  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}

.btn-light.disabled, .btn-light:disabled {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active,
.show > .btn-light.dropdown-toggle {
  color: #212529;
  background-color: #dae0e5;
  border-color: #d3d9df;
}

.btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus,
.show > .btn-light.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}

.btn-dark {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}

.btn-dark:hover {
  color: #fff;
  background-color: #23272b;
  border-color: #1d2124;
}

.btn-dark:focus, .btn-dark.focus {
  box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
}

.btn-dark.disabled, .btn-dark:disabled {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}

.btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active,
.show > .btn-dark.dropdown-toggle {
  color: #fff;
  background-color: #1d2124;
  border-color: #171a1d;
}

.btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus,
.show > .btn-dark.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
}

.btn-outline-primary {
  color: #007bff;
  background-color: transparent;
  background-image: none;
  border-color: #007bff;
}

.btn-outline-primary:hover {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-outline-primary:focus, .btn-outline-primary.focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
}

.btn-outline-primary.disabled, .btn-outline-primary:disabled {
  color: #007bff;
  background-color: transparent;
}

.btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active,
.show > .btn-outline-primary.dropdown-toggle {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
}

.btn-outline-secondary {
  color: #6c757d;
  background-color: transparent;
  background-image: none;
  border-color: #6c757d;
}

.btn-outline-secondary:hover {
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d;
}

.btn-outline-secondary:focus, .btn-outline-secondary.focus {
  box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
}

.btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
  color: #6c757d;
  background-color: transparent;
}

.btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active,
.show > .btn-outline-secondary.dropdown-toggle {
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d;
}

.btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-secondary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
}

.btn-outline-success {
  color: #28a745;
  background-color: transparent;
  background-image: none;
  border-color: #28a745;
}

.btn-outline-success:hover {
  color: #fff;
  background-color: #28a745;
  border-color: #28a745;
}

.btn-outline-success:focus, .btn-outline-success.focus {
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
}

.btn-outline-success.disabled, .btn-outline-success:disabled {
  color: #28a745;
  background-color: transparent;
}

.btn-outline-success:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active,
.show > .btn-outline-success.dropdown-toggle {
  color: #fff;
  background-color: #28a745;
  border-color: #28a745;
}

.btn-outline-success:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-success.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
}

.btn-outline-info {
  color: #17a2b8;
  background-color: transparent;
  background-image: none;
  border-color: #17a2b8;
}

.btn-outline-info:hover {
  color: #fff;
  background-color: #17a2b8;
  border-color: #17a2b8;
}

.btn-outline-info:focus, .btn-outline-info.focus {
  box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
}

.btn-outline-info.disabled, .btn-outline-info:disabled {
  color: #17a2b8;
  background-color: transparent;
}

.btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active,
.show > .btn-outline-info.dropdown-toggle {
  color: #fff;
  background-color: #17a2b8;
  border-color: #17a2b8;
}

.btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-info.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
}

.btn-outline-warning {
  color: #ffc107;
  background-color: transparent;
  background-image: none;
  border-color: #ffc107;
}

.btn-outline-warning:hover {
  color: #212529;
  background-color: #ffc107;
  border-color: #ffc107;
}

.btn-outline-warning:focus, .btn-outline-warning.focus {
  box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
}

.btn-outline-warning.disabled, .btn-outline-warning:disabled {
  color: #ffc107;
  background-color: transparent;
}

.btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active,
.show > .btn-outline-warning.dropdown-toggle {
  color: #212529;
  background-color: #ffc107;
  border-color: #ffc107;
}

.btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-warning.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
}

.btn-outline-danger {
  color: #dc3545;
  background-color: transparent;
  background-image: none;
  border-color: #dc3545;
}

.btn-outline-danger:hover {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}

.btn-outline-danger:focus, .btn-outline-danger.focus {
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
}

.btn-outline-danger.disabled, .btn-outline-danger:disabled {
  color: #dc3545;
  background-color: transparent;
}

.btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active,
.show > .btn-outline-danger.dropdown-toggle {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}

.btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-danger.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
}

.btn-outline-light {
  color: #f8f9fa;
  background-color: transparent;
  background-image: none;
  border-color: #f8f9fa;
}

.btn-outline-light:hover {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-outline-light:focus, .btn-outline-light.focus {
  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}

.btn-outline-light.disabled, .btn-outline-light:disabled {
  color: #f8f9fa;
  background-color: transparent;
}

.btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active,
.show > .btn-outline-light.dropdown-toggle {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-light.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}

.btn-outline-dark {
  color: #343a40;
  background-color: transparent;
  background-image: none;
  border-color: #343a40;
}

.btn-outline-dark:hover {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}

.btn-outline-dark:focus, .btn-outline-dark.focus {
  box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
}

.btn-outline-dark.disabled, .btn-outline-dark:disabled {
  color: #343a40;
  background-color: transparent;
}

.btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active,
.show > .btn-outline-dark.dropdown-toggle {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}

.btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-dark.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
}

.btn-link {
  font-weight: 400;
  color: #007bff;
  background-color: transparent;
}

.btn-link:hover {
  color: #0056b3;
  text-decoration: underline;
  background-color: transparent;
  border-color: transparent;
}

.btn-link:focus, .btn-link.focus {
  text-decoration: underline;
  border-color: transparent;
  box-shadow: none;
}

.btn-link:disabled, .btn-link.disabled {
  color: #6c757d;
}

.btn-lg, .btn-group-lg > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}

.btn-sm, .btn-group-sm > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem;
}

.btn-block {
  display: block;
  width: 100%;
}

.btn-block + .btn-block {
  margin-top: 0.5rem;
}

input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%;
}

.fade {
  opacity: 0;
  transition: opacity 0.15s linear;
}

.fade.show {
  opacity: 1;
}

.collapse {
  display: none;
}

.collapse.show {
  display: block;
}

tr.collapse.show {
  display: table-row;
}

tbody.collapse.show {
  display: table-row-group;
}

.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  transition: height 0.35s ease;
}

.dropup,
.dropdown {
  position: relative;
}

.dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid;
  border-right: 0.3em solid transparent;
  border-bottom: 0;
  border-left: 0.3em solid transparent;
}

.dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 10rem;
  padding: 0.5rem 0;
  margin: 0.125rem 0 0;
  font-size: 1rem;
  color: #212529;
  text-align: left;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 0.25rem;
}

.dropup .dropdown-menu {
  margin-top: 0;
  margin-bottom: 0.125rem;
}

.dropup .dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent;
}

.dropup .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropright .dropdown-menu {
  margin-top: 0;
  margin-left: 0.125rem;
}

.dropright .dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid;
}

.dropright .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropright .dropdown-toggle::after {
  vertical-align: 0;
}

.dropleft .dropdown-menu {
  margin-top: 0;
  margin-right: 0.125rem;
}

.dropleft .dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
}

.dropleft .dropdown-toggle::after {
  display: none;
}

.dropleft .dropdown-toggle::before {
  display: inline-block;
  width: 0;
  height: 0;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent;
}

.dropleft .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropleft .dropdown-toggle::before {
  vertical-align: 0;
}

.dropdown-divider {
  height: 0;
  margin: 0.5rem 0;
  overflow: hidden;
  border-top: 1px solid #e9ecef;
}

.dropdown-item {
  display: block;
  width: 100%;
  padding: 0.25rem 1.5rem;
  clear: both;
  font-weight: 400;
  color: #212529;
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
}

.dropdown-item:hover, .dropdown-item:focus {
  color: #16181b;
  text-decoration: none;
  background-color: #f8f9fa;
}

.dropdown-item.active, .dropdown-item:active {
  color: #fff;
  text-decoration: none;
  background-color: #007bff;
}

.dropdown-item.disabled, .dropdown-item:disabled {
  color: #6c757d;
  background-color: transparent;
}

.dropdown-menu.show {
  display: block;
}

.dropdown-header {
  display: block;
  padding: 0.5rem 1.5rem;
  margin-bottom: 0;
  font-size: 0.875rem;
  color: #6c757d;
  white-space: nowrap;
}

.btn-group,
.btn-group-vertical {
  position: relative;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  vertical-align: middle;
}

.btn-group > .btn,
.btn-group-vertical > .btn {
  position: relative;
  -webkit-box-flex: 0;
  -ms-flex: 0 1 auto;
  flex: 0 1 auto;
}

.btn-group > .btn:hover,
.btn-group-vertical > .btn:hover {
  z-index: 1;
}

.btn-group > .btn:focus, .btn-group > .btn:active, .btn-group > .btn.active,
.btn-group-vertical > .btn:focus,
.btn-group-vertical > .btn:active,
.btn-group-vertical > .btn.active {
  z-index: 1;
}

.btn-group .btn + .btn,
.btn-group .btn + .btn-group,
.btn-group .btn-group + .btn,
.btn-group .btn-group + .btn-group,
.btn-group-vertical .btn + .btn,
.btn-group-vertical .btn + .btn-group,
.btn-group-vertical .btn-group + .btn,
.btn-group-vertical .btn-group + .btn-group {
  margin-left: -1px;
}

.btn-toolbar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start;
}

.btn-toolbar .input-group {
  width: auto;
}

.btn-group > .btn:first-child {
  margin-left: 0;
}

.btn-group > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn-group:not(:last-child) > .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.dropdown-toggle-split {
  padding-right: 0.5625rem;
  padding-left: 0.5625rem;
}

.dropdown-toggle-split::after {
  margin-left: 0;
}

.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
  padding-right: 0.375rem;
  padding-left: 0.375rem;
}

.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
  padding-right: 0.75rem;
  padding-left: 0.75rem;
}

.btn-group-vertical {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
}

.btn-group-vertical .btn,
.btn-group-vertical .btn-group {
  width: 100%;
}

.btn-group-vertical > .btn + .btn,
.btn-group-vertical > .btn + .btn-group,
.btn-group-vertical > .btn-group + .btn,
.btn-group-vertical > .btn-group + .btn-group {
  margin-top: -1px;
  margin-left: 0;
}

.btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group-vertical > .btn-group:not(:last-child) > .btn {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.btn-group-vertical > .btn:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.btn-group-toggle > .btn,
.btn-group-toggle > .btn-group > .btn {
  margin-bottom: 0;
}

.btn-group-toggle > .btn input[type="radio"],
.btn-group-toggle > .btn input[type="checkbox"],
.btn-group-toggle > .btn-group > .btn input[type="radio"],
.btn-group-toggle > .btn-group > .btn input[type="checkbox"] {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}

.input-group {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-align: stretch;
  -ms-flex-align: stretch;
  align-items: stretch;
  width: 100%;
}

.input-group > .form-control,
.input-group > .custom-select,
.input-group > .custom-file {
  position: relative;
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  width: 1%;
  margin-bottom: 0;
}

.input-group > .form-control:focus,
.input-group > .custom-select:focus,
.input-group > .custom-file:focus {
  z-index: 3;
}

.input-group > .form-control + .form-control,
.input-group > .form-control + .custom-select,
.input-group > .form-control + .custom-file,
.input-group > .custom-select + .form-control,
.input-group > .custom-select + .custom-select,
.input-group > .custom-select + .custom-file,
.input-group > .custom-file + .form-control,
.input-group > .custom-file + .custom-select,
.input-group > .custom-file + .custom-file {
  margin-left: -1px;
}

.input-group > .form-control:not(:last-child),
.input-group > .custom-select:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group > .form-control:not(:first-child),
.input-group > .custom-select:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.input-group > .custom-file {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}

.input-group > .custom-file:not(:last-child) .custom-file-label,
.input-group > .custom-file:not(:last-child) .custom-file-label::before {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group > .custom-file:not(:first-child) .custom-file-label,
.input-group > .custom-file:not(:first-child) .custom-file-label::before {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.input-group-prepend,
.input-group-append {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.input-group-prepend .btn,
.input-group-append .btn {
  position: relative;
  z-index: 2;
}

.input-group-prepend .btn + .btn,
.input-group-prepend .btn + .input-group-text,
.input-group-prepend .input-group-text + .input-group-text,
.input-group-prepend .input-group-text + .btn,
.input-group-append .btn + .btn,
.input-group-append .btn + .input-group-text,
.input-group-append .input-group-text + .input-group-text,
.input-group-append .input-group-text + .btn {
  margin-left: -1px;
}

.input-group-prepend {
  margin-right: -1px;
}

.input-group-append {
  margin-left: -1px;
}

.input-group-text {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  padding: 0.375rem 0.75rem;
  margin-bottom: 0;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  text-align: center;
  white-space: nowrap;
  background-color: #e9ecef;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
}

.input-group-text input[type="radio"],
.input-group-text input[type="checkbox"] {
  margin-top: 0;
}

.input-group > .input-group-prepend > .btn,
.input-group > .input-group-prepend > .input-group-text,
.input-group > .input-group-append:not(:last-child) > .btn,
.input-group > .input-group-append:not(:last-child) > .input-group-text,
.input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group > .input-group-append:last-child > .input-group-text:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group > .input-group-append > .btn,
.input-group > .input-group-append > .input-group-text,
.input-group > .input-group-prepend:not(:first-child) > .btn,
.input-group > .input-group-prepend:not(:first-child) > .input-group-text,
.input-group > .input-group-prepend:first-child > .btn:not(:first-child),
.input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.custom-control {
  position: relative;
  display: block;
  min-height: 1.5rem;
  padding-left: 1.5rem;
}

.custom-control-inline {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  margin-right: 1rem;
}

.custom-control-input {
  position: absolute;
  z-index: -1;
  opacity: 0;
}

.custom-control-input:checked ~ .custom-control-label::before {
  color: #fff;
  background-color: #007bff;
}

.custom-control-input:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-control-input:active ~ .custom-control-label::before {
  color: #fff;
  background-color: #b3d7ff;
}

.custom-control-input:disabled ~ .custom-control-label {
  color: #6c757d;
}

.custom-control-input:disabled ~ .custom-control-label::before {
  background-color: #e9ecef;
}

.custom-control-label {
  margin-bottom: 0;
}

.custom-control-label::before {
  position: absolute;
  top: 0.25rem;
  left: 0;
  display: block;
  width: 1rem;
  height: 1rem;
  pointer-events: none;
  content: "";
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  background-color: #dee2e6;
}

.custom-control-label::after {
  position: absolute;
  top: 0.25rem;
  left: 0;
  display: block;
  width: 1rem;
  height: 1rem;
  content: "";
  background-repeat: no-repeat;
  background-position: center center;
  background-size: 50% 50%;
}

.custom-checkbox .custom-control-label::before {
  border-radius: 0.25rem;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
  background-color: #007bff;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
  background-color: #007bff;
}

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3E%3Cpath stroke='%23fff' d='M0 2h4'/%3E%3C/svg%3E");
}

.custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5);
}

.custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5);
}

.custom-radio .custom-control-label::before {
  border-radius: 50%;
}

.custom-radio .custom-control-input:checked ~ .custom-control-label::before {
  background-color: #007bff;
}

.custom-radio .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23fff'/%3E%3C/svg%3E");
}

.custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5);
}

.custom-select {
  display: inline-block;
  width: 100%;
  height: calc(2.25rem + 2px);
  padding: 0.375rem 1.75rem 0.375rem 0.75rem;
  line-height: 1.5;
  color: #495057;
  vertical-align: middle;
  background: #fff url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right 0.75rem center;
  background-size: 8px 10px;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}

.custom-select:focus {
  border-color: #80bdff;
  outline: 0;
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075), 0 0 5px rgba(128, 189, 255, 0.5);
}

.custom-select:focus::-ms-value {
  color: #495057;
  background-color: #fff;
}

.custom-select[multiple], .custom-select[size]:not([size="1"]) {
  height: auto;
  padding-right: 0.75rem;
  background-image: none;
}

.custom-select:disabled {
  color: #6c757d;
  background-color: #e9ecef;
}

.custom-select::-ms-expand {
  opacity: 0;
}

.custom-select-sm {
  height: calc(1.8125rem + 2px);
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  font-size: 75%;
}

.custom-select-lg {
  height: calc(2.875rem + 2px);
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  font-size: 125%;
}

.custom-file {
  position: relative;
  display: inline-block;
  width: 100%;
  height: calc(2.25rem + 2px);
  margin-bottom: 0;
}

.custom-file-input {
  position: relative;
  z-index: 2;
  width: 100%;
  height: calc(2.25rem + 2px);
  margin: 0;
  opacity: 0;
}

.custom-file-input:focus ~ .custom-file-control {
  border-color: #80bdff;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-file-input:focus ~ .custom-file-control::before {
  border-color: #80bdff;
}

.custom-file-input:lang(en) ~ .custom-file-label::after {
  content: "Browse";
}

.custom-file-label {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1;
  height: calc(2.25rem + 2px);
  padding: 0.375rem 0.75rem;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
}

.custom-file-label::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 3;
  display: block;
  height: calc(calc(2.25rem + 2px) - 1px * 2);
  padding: 0.375rem 0.75rem;
  line-height: 1.5;
  color: #495057;
  content: "Browse";
  background-color: #e9ecef;
  border-left: 1px solid #ced4da;
  border-radius: 0 0.25rem 0.25rem 0;
}

.nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.nav-link {
  display: block;
  padding: 0.5rem 1rem;
}

.nav-link:hover, .nav-link:focus {
  text-decoration: none;
}

.nav-link.disabled {
  color: #6c757d;
}

.nav-tabs {
  border-bottom: 1px solid #dee2e6;
}

.nav-tabs .nav-item {
  margin-bottom: -1px;
}

.nav-tabs .nav-link {
  border: 1px solid transparent;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

.nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
  border-color: #e9ecef #e9ecef #dee2e6;
}

.nav-tabs .nav-link.disabled {
  color: #6c757d;
  background-color: transparent;
  border-color: transparent;
}

.nav-tabs .nav-link.active,
.nav-tabs .nav-item.show .nav-link {
  color: #495057;
  background-color: #fff;
  border-color: #dee2e6 #dee2e6 #fff;
}

.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.nav-pills .nav-link {
  border-radius: 0.25rem;
}

.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: #fff;
  background-color: #007bff;
}

.nav-fill .nav-item {
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  text-align: center;
}

.nav-justified .nav-item {
  -ms-flex-preferred-size: 0;
  flex-basis: 0;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  text-align: center;
}

.tab-content > .tab-pane {
  display: none;
}

.tab-content > .active {
  display: block;
}

.navbar {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: 0.5rem 1rem;
}

.navbar > .container,
.navbar > .container-fluid {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
}

.navbar-brand {
  display: inline-block;
  padding-top: 0.3125rem;
  padding-bottom: 0.3125rem;
  margin-right: 1rem;
  font-size: 1.25rem;
  line-height: inherit;
  white-space: nowrap;
}

.navbar-brand:hover, .navbar-brand:focus {
  text-decoration: none;
}

.navbar-nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.navbar-nav .nav-link {
  padding-right: 0;
  padding-left: 0;
}

.navbar-nav .dropdown-menu {
  position: static;
  float: none;
}

.navbar-text {
  display: inline-block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.navbar-collapse {
  -ms-flex-preferred-size: 100%;
  flex-basis: 100%;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}

.navbar-toggler {
  padding: 0.25rem 0.75rem;
  font-size: 1.25rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0.25rem;
}

.navbar-toggler:hover, .navbar-toggler:focus {
  text-decoration: none;
}

.navbar-toggler:not(:disabled):not(.disabled) {
  cursor: pointer;
}

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  content: "";
  background: no-repeat center center;
  background-size: 100% 100%;
}

@media (max-width: 575.98px) {
  .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 576px) {
  .navbar-expand-sm {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
  }
  .navbar-expand-sm .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu-right {
    right: 0;
    left: auto;
  }
  .navbar-expand-sm .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
  }
  .navbar-expand-sm .navbar-collapse {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
  }
  .navbar-expand-sm .navbar-toggler {
    display: none;
  }
  .navbar-expand-sm .dropup .dropdown-menu {
    top: auto;
    bottom: 100%;
  }
}

@media (max-width: 767.98px) {
  .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 768px) {
  .navbar-expand-md {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
  }
  .navbar-expand-md .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu-right {
    right: 0;
    left: auto;
  }
  .navbar-expand-md .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
  }
  .navbar-expand-md .navbar-collapse {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
  }
  .navbar-expand-md .navbar-toggler {
    display: none;
  }
  .navbar-expand-md .dropup .dropdown-menu {
    top: auto;
    bottom: 100%;
  }
}

@media (max-width: 991.98px) {
  .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 992px) {
  .navbar-expand-lg {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
  }
  .navbar-expand-lg .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu-right {
    right: 0;
    left: auto;
  }
  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
  }
  .navbar-expand-lg .navbar-collapse {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
  }
  .navbar-expand-lg .navbar-toggler {
    display: none;
  }
  .navbar-expand-lg .dropup .dropdown-menu {
    top: auto;
    bottom: 100%;
  }
}

@media (max-width: 1199.98px) {
  .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 1200px) {
  .navbar-expand-xl {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
  }
  .navbar-expand-xl .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu-right {
    right: 0;
    left: auto;
  }
  .navbar-expand-xl .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
  }
  .navbar-expand-xl .navbar-collapse {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
  }
  .navbar-expand-xl .navbar-toggler {
    display: none;
  }
  .navbar-expand-xl .dropup .dropdown-menu {
    top: auto;
    bottom: 100%;
  }
}

.navbar-expand {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-flow: row nowrap;
  flex-flow: row nowrap;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start;
}

.navbar-expand > .container,
.navbar-expand > .container-fluid {
  padding-right: 0;
  padding-left: 0;
}

.navbar-expand .navbar-nav {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-direction: row;
  flex-direction: row;
}

.navbar-expand .navbar-nav .dropdown-menu {
  position: absolute;
}

.navbar-expand .navbar-nav .dropdown-menu-right {
  right: 0;
  left: auto;
}

.navbar-expand .navbar-nav .nav-link {
  padding-right: 0.5rem;
  padding-left: 0.5rem;
}

.navbar-expand > .container,
.navbar-expand > .container-fluid {
  -ms-flex-wrap: nowrap;
  flex-wrap: nowrap;
}

.navbar-expand .navbar-collapse {
  display: -webkit-box !important;
  display: -ms-flexbox !important;
  display: flex !important;
  -ms-flex-preferred-size: auto;
  flex-basis: auto;
}

.navbar-expand .navbar-toggler {
  display: none;
}

.navbar-expand .dropup .dropdown-menu {
  top: auto;
  bottom: 100%;
}

.navbar-light .navbar-brand {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-nav .nav-link {
  color: rgba(0, 0, 0, 0.5);
}

.navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
  color: rgba(0, 0, 0, 0.7);
}

.navbar-light .navbar-nav .nav-link.disabled {
  color: rgba(0, 0, 0, 0.3);
}

.navbar-light .navbar-nav .show > .nav-link,
.navbar-light .navbar-nav .active > .nav-link,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .nav-link.active {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-toggler {
  color: rgba(0, 0, 0, 0.5);
  border-color: rgba(0, 0, 0, 0.1);
}

.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}

.navbar-light .navbar-text {
  color: rgba(0, 0, 0, 0.5);
}

.navbar-light .navbar-text a {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-text a:hover, .navbar-light .navbar-text a:focus {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-dark .navbar-brand {
  color: #fff;
}

.navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
  color: #fff;
}

.navbar-dark .navbar-nav .nav-link {
  color: rgba(255, 255, 255, 0.5);
}

.navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
  color: rgba(255, 255, 255, 0.75);
}

.navbar-dark .navbar-nav .nav-link.disabled {
  color: rgba(255, 255, 255, 0.25);
}

.navbar-dark .navbar-nav .show > .nav-link,
.navbar-dark .navbar-nav .active > .nav-link,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .nav-link.active {
  color: #fff;
}

.navbar-dark .navbar-toggler {
  color: rgba(255, 255, 255, 0.5);
  border-color: rgba(255, 255, 255, 0.1);
}

.navbar-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}

.navbar-dark .navbar-text {
  color: rgba(255, 255, 255, 0.5);
}

.navbar-dark .navbar-text a {
  color: #fff;
}

.navbar-dark .navbar-text a:hover, .navbar-dark .navbar-text a:focus {
  color: #fff;
}

.card {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 0.25rem;
}

.card > hr {
  margin-right: 0;
  margin-left: 0;
}

.card > .list-group:first-child .list-group-item:first-child {
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

.card > .list-group:last-child .list-group-item:last-child {
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.card-body {
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: 1.25rem;
}

.card-title {
  margin-bottom: 0.75rem;
}

.card-subtitle {
  margin-top: -0.375rem;
  margin-bottom: 0;
}

.card-text:last-child {
  margin-bottom: 0;
}

.card-link:hover {
  text-decoration: none;
}

.card-link + .card-link {
  margin-left: 1.25rem;
}

.card-header {
  padding: 0.75rem 1.25rem;
  margin-bottom: 0;
  background-color: rgba(0, 0, 0, 0.03);
  border-bottom: 1px solid rgba(0, 0, 0, 0.125);
}

.card-header:first-child {
  border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
}

.card-header + .list-group .list-group-item:first-child {
  border-top: 0;
}

.card-footer {
  padding: 0.75rem 1.25rem;
  background-color: rgba(0, 0, 0, 0.03);
  border-top: 1px solid rgba(0, 0, 0, 0.125);
}

.card-footer:last-child {
  border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
}

.card-header-tabs {
  margin-right: -0.625rem;
  margin-bottom: -0.75rem;
  margin-left: -0.625rem;
  border-bottom: 0;
}

.card-header-pills {
  margin-right: -0.625rem;
  margin-left: -0.625rem;
}

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1.25rem;
}

.card-img {
  width: 100%;
  border-radius: calc(0.25rem - 1px);
}

.card-img-top {
  width: 100%;
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}

.card-img-bottom {
  width: 100%;
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px);
}

.card-deck {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
}

.card-deck .card {
  margin-bottom: 15px;
}

@media (min-width: 576px) {
  .card-deck {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
    margin-right: -15px;
    margin-left: -15px;
  }
  .card-deck .card {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 1;
    -ms-flex: 1 0 0%;
    flex: 1 0 0%;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    margin-right: 15px;
    margin-bottom: 0;
    margin-left: 15px;
  }
}

.card-group {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
}

.card-group > .card {
  margin-bottom: 15px;
}

@media (min-width: 576px) {
  .card-group {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
  }
  .card-group > .card {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 0%;
    flex: 1 0 0%;
    margin-bottom: 0;
  }
  .card-group > .card + .card {
    margin-left: 0;
    border-left: 0;
  }
  .card-group > .card:first-child {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  .card-group > .card:first-child .card-img-top,
  .card-group > .card:first-child .card-header {
    border-top-right-radius: 0;
  }
  .card-group > .card:first-child .card-img-bottom,
  .card-group > .card:first-child .card-footer {
    border-bottom-right-radius: 0;
  }
  .card-group > .card:last-child {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  .card-group > .card:last-child .card-img-top,
  .card-group > .card:last-child .card-header {
    border-top-left-radius: 0;
  }
  .card-group > .card:last-child .card-img-bottom,
  .card-group > .card:last-child .card-footer {
    border-bottom-left-radius: 0;
  }
  .card-group > .card:only-child {
    border-radius: 0.25rem;
  }
  .card-group > .card:only-child .card-img-top,
  .card-group > .card:only-child .card-header {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
  }
  .card-group > .card:only-child .card-img-bottom,
  .card-group > .card:only-child .card-footer {
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
  }
  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) {
    border-radius: 0;
  }
  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-top,
  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom,
  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-header,
  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-footer {
    border-radius: 0;
  }
}

.card-columns .card {
  margin-bottom: 0.75rem;
}

@media (min-width: 576px) {
  .card-columns {
    -webkit-column-count: 3;
    -moz-column-count: 3;
    column-count: 3;
    -webkit-column-gap: 1.25rem;
    -moz-column-gap: 1.25rem;
    column-gap: 1.25rem;
  }
  .card-columns .card {
    display: inline-block;
    width: 100%;
  }
}

.breadcrumb {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding: 0.75rem 1rem;
  margin-bottom: 1rem;
  list-style: none;
  background-color: #e9ecef;
  border-radius: 0.25rem;
}

.breadcrumb-item + .breadcrumb-item::before {
  display: inline-block;
  padding-right: 0.5rem;
  padding-left: 0.5rem;
  color: #6c757d;
  content: "/";
}

.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: underline;
}

.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: none;
}

.breadcrumb-item.active {
  color: #6c757d;
}

.pagination {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding-left: 0;
  list-style: none;
  border-radius: 0.25rem;
}

.page-link {
  position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: -1px;
  line-height: 1.25;
  color: #007bff;
  background-color: #fff;
  border: 1px solid #dee2e6;
}

.page-link:hover {
  color: #0056b3;
  text-decoration: none;
  background-color: #e9ecef;
  border-color: #dee2e6;
}

.page-link:focus {
  z-index: 2;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.page-link:not(:disabled):not(.disabled) {
  cursor: pointer;
}

.page-item:first-child .page-link {
  margin-left: 0;
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.page-item:last-child .page-link {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
}

.page-item.active .page-link {
  z-index: 1;
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.page-item.disabled .page-link {
  color: #6c757d;
  pointer-events: none;
  cursor: auto;
  background-color: #fff;
  border-color: #dee2e6;
}

.pagination-lg .page-link {
  padding: 0.75rem 1.5rem;
  font-size: 1.25rem;
  line-height: 1.5;
}

.pagination-lg .page-item:first-child .page-link {
  border-top-left-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem;
}

.pagination-lg .page-item:last-child .page-link {
  border-top-right-radius: 0.3rem;
  border-bottom-right-radius: 0.3rem;
}

.pagination-sm .page-link {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
}

.pagination-sm .page-item:first-child .page-link {
  border-top-left-radius: 0.2rem;
  border-bottom-left-radius: 0.2rem;
}

.pagination-sm .page-item:last-child .page-link {
  border-top-right-radius: 0.2rem;
  border-bottom-right-radius: 0.2rem;
}

.badge {
  display: inline-block;
  padding: 0.25em 0.4em;
  font-size: 75%;
  font-weight: 700;
  line-height: 1;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.25rem;
}

.badge:empty {
  display: none;
}

.btn .badge {
  position: relative;
  top: -1px;
}

.badge-pill {
  padding-right: 0.6em;
  padding-left: 0.6em;
  border-radius: 10rem;
}

.badge-primary {
  color: #fff;
  background-color: #007bff;
}

.badge-primary[href]:hover, .badge-primary[href]:focus {
  color: #fff;
  text-decoration: none;
  background-color: #0062cc;
}

.badge-secondary {
  color: #fff;
  background-color: #6c757d;
}

.badge-secondary[href]:hover, .badge-secondary[href]:focus {
  color: #fff;
  text-decoration: none;
  background-color: #545b62;
}

.badge-success {
  color: #fff;
  background-color: #28a745;
}

.badge-success[href]:hover, .badge-success[href]:focus {
  color: #fff;
  text-decoration: none;
  background-color: #1e7e34;
}

.badge-info {
  color: #fff;
  background-color: #17a2b8;
}

.badge-info[href]:hover, .badge-info[href]:focus {
  color: #fff;
  text-decoration: none;
  background-color: #117a8b;
}

.badge-warning {
  color: #212529;
  background-color: #ffc107;
}

.badge-warning[href]:hover, .badge-warning[href]:focus {
  color: #212529;
  text-decoration: none;
  background-color: #d39e00;
}

.badge-danger {
  color: #fff;
  background-color: #dc3545;
}

.badge-danger[href]:hover, .badge-danger[href]:focus {
  color: #fff;
  text-decoration: none;
  background-color: #bd2130;
}

.badge-light {
  color: #212529;
  background-color: #f8f9fa;
}

.badge-light[href]:hover, .badge-light[href]:focus {
  color: #212529;
  text-decoration: none;
  background-color: #dae0e5;
}

.badge-dark {
  color: #fff;
  background-color: #343a40;
}

.badge-dark[href]:hover, .badge-dark[href]:focus {
  color: #fff;
  text-decoration: none;
  background-color: #1d2124;
}

.jumbotron {
  padding: 2rem 1rem;
  margin-bottom: 2rem;
  background-color: #e9ecef;
  border-radius: 0.3rem;
}

@media (min-width: 576px) {
  .jumbotron {
    padding: 4rem 2rem;
  }
}

.jumbotron-fluid {
  padding-right: 0;
  padding-left: 0;
  border-radius: 0;
}

.alert {
  position: relative;
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem;
}

.alert-heading {
  color: inherit;
}

.alert-link {
  font-weight: 700;
}

.alert-dismissible {
  padding-right: 4rem;
}

.alert-dismissible .close {
  position: absolute;
  top: 0;
  right: 0;
  padding: 0.75rem 1.25rem;
  color: inherit;
}

.alert-primary {
  color: #004085;
  background-color: #cce5ff;
  border-color: #b8daff;
}

.alert-primary hr {
  border-top-color: #9fcdff;
}

.alert-primary .alert-link {
  color: #002752;
}

.alert-secondary {
  color: #383d41;
  background-color: #e2e3e5;
  border-color: #d6d8db;
}

.alert-secondary hr {
  border-top-color: #c8cbcf;
}

.alert-secondary .alert-link {
  color: #202326;
}

.alert-success {
  color: #155724;
  background-color: #d4edda;
  border-color: #c3e6cb;
}

.alert-success hr {
  border-top-color: #b1dfbb;
}

.alert-success .alert-link {
  color: #0b2e13;
}

.alert-info {
  color: #0c5460;
  background-color: #d1ecf1;
  border-color: #bee5eb;
}

.alert-info hr {
  border-top-color: #abdde5;
}

.alert-info .alert-link {
  color: #062c33;
}

.alert-warning {
  color: #856404;
  background-color: #fff3cd;
  border-color: #ffeeba;
}

.alert-warning hr {
  border-top-color: #ffe8a1;
}

.alert-warning .alert-link {
  color: #533f03;
}

.alert-danger {
  color: #721c24;
  background-color: #f8d7da;
  border-color: #f5c6cb;
}

.alert-danger hr {
  border-top-color: #f1b0b7;
}

.alert-danger .alert-link {
  color: #491217;
}

.alert-light {
  color: #818182;
  background-color: #fefefe;
  border-color: #fdfdfe;
}

.alert-light hr {
  border-top-color: #ececf6;
}

.alert-light .alert-link {
  color: #686868;
}

.alert-dark {
  color: #1b1e21;
  background-color: #d6d8d9;
  border-color: #c6c8ca;
}

.alert-dark hr {
  border-top-color: #b9bbbe;
}

.alert-dark .alert-link {
  color: #040505;
}

@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0;
  }
  to {
    background-position: 0 0;
  }
}

@keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0;
  }
  to {
    background-position: 0 0;
  }
}

.progress {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 1rem;
  overflow: hidden;
  font-size: 0.75rem;
  background-color: #e9ecef;
  border-radius: 0.25rem;
}

.progress-bar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  color: #fff;
  text-align: center;
  background-color: #007bff;
  transition: width 0.6s ease;
}

.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 1rem 1rem;
}

.progress-bar-animated {
  -webkit-animation: progress-bar-stripes 1s linear infinite;
  animation: progress-bar-stripes 1s linear infinite;
}

.media {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
}

.media-body {
  -webkit-box-flex: 1;
  -ms-flex: 1;
  flex: 1;
}

.list-group {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
}

.list-group-item-action {
  width: 100%;
  color: #495057;
  text-align: inherit;
}

.list-group-item-action:hover, .list-group-item-action:focus {
  color: #495057;
  text-decoration: none;
  background-color: #f8f9fa;
}

.list-group-item-action:active {
  color: #212529;
  background-color: #e9ecef;
}

.list-group-item {
  position: relative;
  display: block;
  padding: 0.75rem 1.25rem;
  margin-bottom: -1px;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.125);
}

.list-group-item:first-child {
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

.list-group-item:last-child {
  margin-bottom: 0;
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.list-group-item:hover, .list-group-item:focus {
  z-index: 1;
  text-decoration: none;
}

.list-group-item.disabled, .list-group-item:disabled {
  color: #6c757d;
  background-color: #fff;
}

.list-group-item.active {
  z-index: 2;
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.list-group-flush .list-group-item {
  border-right: 0;
  border-left: 0;
  border-radius: 0;
}

.list-group-flush:first-child .list-group-item:first-child {
  border-top: 0;
}

.list-group-flush:last-child .list-group-item:last-child {
  border-bottom: 0;
}

.list-group-item-primary {
  color: #004085;
  background-color: #b8daff;
}

.list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
  color: #004085;
  background-color: #9fcdff;
}

.list-group-item-primary.list-group-item-action.active {
  color: #fff;
  background-color: #004085;
  border-color: #004085;
}

.list-group-item-secondary {
  color: #383d41;
  background-color: #d6d8db;
}

.list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
  color: #383d41;
  background-color: #c8cbcf;
}

.list-group-item-secondary.list-group-item-action.active {
  color: #fff;
  background-color: #383d41;
  border-color: #383d41;
}

.list-group-item-success {
  color: #155724;
  background-color: #c3e6cb;
}

.list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
  color: #155724;
  background-color: #b1dfbb;
}

.list-group-item-success.list-group-item-action.active {
  color: #fff;
  background-color: #155724;
  border-color: #155724;
}

.list-group-item-info {
  color: #0c5460;
  background-color: #bee5eb;
}

.list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
  color: #0c5460;
  background-color: #abdde5;
}

.list-group-item-info.list-group-item-action.active {
  color: #fff;
  background-color: #0c5460;
  border-color: #0c5460;
}

.list-group-item-warning {
  color: #856404;
  background-color: #ffeeba;
}

.list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
  color: #856404;
  background-color: #ffe8a1;
}

.list-group-item-warning.list-group-item-action.active {
  color: #fff;
  background-color: #856404;
  border-color: #856404;
}

.list-group-item-danger {
  color: #721c24;
  background-color: #f5c6cb;
}

.list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
  color: #721c24;
  background-color: #f1b0b7;
}

.list-group-item-danger.list-group-item-action.active {
  color: #fff;
  background-color: #721c24;
  border-color: #721c24;
}

.list-group-item-light {
  color: #818182;
  background-color: #fdfdfe;
}

.list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
  color: #818182;
  background-color: #ececf6;
}

.list-group-item-light.list-group-item-action.active {
  color: #fff;
  background-color: #818182;
  border-color: #818182;
}

.list-group-item-dark {
  color: #1b1e21;
  background-color: #c6c8ca;
}

.list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
  color: #1b1e21;
  background-color: #b9bbbe;
}

.list-group-item-dark.list-group-item-action.active {
  color: #fff;
  background-color: #1b1e21;
  border-color: #1b1e21;
}

.close {
  float: right;
  font-size: 1.5rem;
  font-weight: 700;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  opacity: .5;
}

.close:hover, .close:focus {
  color: #000;
  text-decoration: none;
  opacity: .75;
}

.close:not(:disabled):not(.disabled) {
  cursor: pointer;
}

button.close {
  padding: 0;
  background-color: transparent;
  border: 0;
  -webkit-appearance: none;
}

.modal-open {
  overflow: hidden;
}

.modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  display: none;
  overflow: hidden;
  outline: 0;
}

.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}

.modal-dialog {
  position: relative;
  width: auto;
  margin: 0.5rem;
  pointer-events: none;
}

.modal.fade .modal-dialog {
  transition: -webkit-transform 0.3s ease-out;
  transition: transform 0.3s ease-out;
  transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
  -webkit-transform: translate(0, -25%);
  transform: translate(0, -25%);
}

.modal.show .modal-dialog {
  -webkit-transform: translate(0, 0);
  transform: translate(0, 0);
}

.modal-dialog-centered {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  min-height: calc(100% - (0.5rem * 2));
}

.modal-content {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
  outline: 0;
}

.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #000;
}

.modal-backdrop.fade {
  opacity: 0;
}

.modal-backdrop.show {
  opacity: 0.5;
}

.modal-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: 1rem;
  border-bottom: 1px solid #e9ecef;
  border-top-left-radius: 0.3rem;
  border-top-right-radius: 0.3rem;
}

.modal-header .close {
  padding: 1rem;
  margin: -1rem -1rem -1rem auto;
}

.modal-title {
  margin-bottom: 0;
  line-height: 1.5;
}

.modal-body {
  position: relative;
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: 1rem;
}

.modal-footer {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: end;
  -ms-flex-pack: end;
  justify-content: flex-end;
  padding: 1rem;
  border-top: 1px solid #e9ecef;
}

.modal-footer > :not(:first-child) {
  margin-left: .25rem;
}

.modal-footer > :not(:last-child) {
  margin-right: .25rem;
}

.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll;
}

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 500px;
    margin: 1.75rem auto;
  }
  .modal-dialog-centered {
    min-height: calc(100% - (1.75rem * 2));
  }
  .modal-sm {
    max-width: 300px;
  }
}

@media (min-width: 992px) {
  .modal-lg {
    max-width: 800px;
  }
}

.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  opacity: 0;
}

.tooltip.show {
  opacity: 0.9;
}

.tooltip .arrow {
  position: absolute;
  display: block;
  width: 0.8rem;
  height: 0.4rem;
}

.tooltip .arrow::before {
  position: absolute;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-tooltip-top, .bs-tooltip-auto[x-placement^="top"] {
  padding: 0.4rem 0;
}

.bs-tooltip-top .arrow, .bs-tooltip-auto[x-placement^="top"] .arrow {
  bottom: 0;
}

.bs-tooltip-top .arrow::before, .bs-tooltip-auto[x-placement^="top"] .arrow::before {
  top: 0;
  border-width: 0.4rem 0.4rem 0;
  border-top-color: #000;
}

.bs-tooltip-right, .bs-tooltip-auto[x-placement^="right"] {
  padding: 0 0.4rem;
}

.bs-tooltip-right .arrow, .bs-tooltip-auto[x-placement^="right"] .arrow {
  left: 0;
  width: 0.4rem;
  height: 0.8rem;
}

.bs-tooltip-right .arrow::before, .bs-tooltip-auto[x-placement^="right"] .arrow::before {
  right: 0;
  border-width: 0.4rem 0.4rem 0.4rem 0;
  border-right-color: #000;
}

.bs-tooltip-bottom, .bs-tooltip-auto[x-placement^="bottom"] {
  padding: 0.4rem 0;
}

.bs-tooltip-bottom .arrow, .bs-tooltip-auto[x-placement^="bottom"] .arrow {
  top: 0;
}

.bs-tooltip-bottom .arrow::before, .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
  bottom: 0;
  border-width: 0 0.4rem 0.4rem;
  border-bottom-color: #000;
}

.bs-tooltip-left, .bs-tooltip-auto[x-placement^="left"] {
  padding: 0 0.4rem;
}

.bs-tooltip-left .arrow, .bs-tooltip-auto[x-placement^="left"] .arrow {
  right: 0;
  width: 0.4rem;
  height: 0.8rem;
}

.bs-tooltip-left .arrow::before, .bs-tooltip-auto[x-placement^="left"] .arrow::before {
  left: 0;
  border-width: 0.4rem 0 0.4rem 0.4rem;
  border-left-color: #000;
}

.tooltip-inner {
  max-width: 200px;
  padding: 0.25rem 0.5rem;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 0.25rem;
}

.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: block;
  max-width: 276px;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
}

.popover .arrow {
  position: absolute;
  display: block;
  width: 1rem;
  height: 0.5rem;
  margin: 0 0.3rem;
}

.popover .arrow::before, .popover .arrow::after {
  position: absolute;
  display: block;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-popover-top, .bs-popover-auto[x-placement^="top"] {
  margin-bottom: 0.5rem;
}

.bs-popover-top .arrow, .bs-popover-auto[x-placement^="top"] .arrow {
  bottom: calc((0.5rem + 1px) * -1);
}

.bs-popover-top .arrow::before, .bs-popover-auto[x-placement^="top"] .arrow::before,
.bs-popover-top .arrow::after, .bs-popover-auto[x-placement^="top"] .arrow::after {
  border-width: 0.5rem 0.5rem 0;
}

.bs-popover-top .arrow::before, .bs-popover-auto[x-placement^="top"] .arrow::before {
  bottom: 0;
  border-top-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-top .arrow::after, .bs-popover-auto[x-placement^="top"] .arrow::after {
  bottom: 1px;
  border-top-color: #fff;
}

.bs-popover-right, .bs-popover-auto[x-placement^="right"] {
  margin-left: 0.5rem;
}

.bs-popover-right .arrow, .bs-popover-auto[x-placement^="right"] .arrow {
  left: calc((0.5rem + 1px) * -1);
  width: 0.5rem;
  height: 1rem;
  margin: 0.3rem 0;
}

.bs-popover-right .arrow::before, .bs-popover-auto[x-placement^="right"] .arrow::before,
.bs-popover-right .arrow::after, .bs-popover-auto[x-placement^="right"] .arrow::after {
  border-width: 0.5rem 0.5rem 0.5rem 0;
}

.bs-popover-right .arrow::before, .bs-popover-auto[x-placement^="right"] .arrow::before {
  left: 0;
  border-right-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-right .arrow::after, .bs-popover-auto[x-placement^="right"] .arrow::after {
  left: 1px;
  border-right-color: #fff;
}

.bs-popover-bottom, .bs-popover-auto[x-placement^="bottom"] {
  margin-top: 0.5rem;
}

.bs-popover-bottom .arrow, .bs-popover-auto[x-placement^="bottom"] .arrow {
  top: calc((0.5rem + 1px) * -1);
}

.bs-popover-bottom .arrow::before, .bs-popover-auto[x-placement^="bottom"] .arrow::before,
.bs-popover-bottom .arrow::after, .bs-popover-auto[x-placement^="bottom"] .arrow::after {
  border-width: 0 0.5rem 0.5rem 0.5rem;
}

.bs-popover-bottom .arrow::before, .bs-popover-auto[x-placement^="bottom"] .arrow::before {
  top: 0;
  border-bottom-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-bottom .arrow::after, .bs-popover-auto[x-placement^="bottom"] .arrow::after {
  top: 1px;
  border-bottom-color: #fff;
}

.bs-popover-bottom .popover-header::before, .bs-popover-auto[x-placement^="bottom"] .popover-header::before {
  position: absolute;
  top: 0;
  left: 50%;
  display: block;
  width: 1rem;
  margin-left: -0.5rem;
  content: "";
  border-bottom: 1px solid #f7f7f7;
}

.bs-popover-left, .bs-popover-auto[x-placement^="left"] {
  margin-right: 0.5rem;
}

.bs-popover-left .arrow, .bs-popover-auto[x-placement^="left"] .arrow {
  right: calc((0.5rem + 1px) * -1);
  width: 0.5rem;
  height: 1rem;
  margin: 0.3rem 0;
}

.bs-popover-left .arrow::before, .bs-popover-auto[x-placement^="left"] .arrow::before,
.bs-popover-left .arrow::after, .bs-popover-auto[x-placement^="left"] .arrow::after {
  border-width: 0.5rem 0 0.5rem 0.5rem;
}

.bs-popover-left .arrow::before, .bs-popover-auto[x-placement^="left"] .arrow::before {
  right: 0;
  border-left-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-left .arrow::after, .bs-popover-auto[x-placement^="left"] .arrow::after {
  right: 1px;
  border-left-color: #fff;
}

.popover-header {
  padding: 0.5rem 0.75rem;
  margin-bottom: 0;
  font-size: 1rem;
  color: inherit;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px);
}

.popover-header:empty {
  display: none;
}

.popover-body {
  padding: 0.5rem 0.75rem;
  color: #212529;
}

.carousel {
  position: relative;
}

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}

.carousel-item {
  position: relative;
  display: none;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  width: 100%;
  transition: -webkit-transform 0.6s ease;
  transition: transform 0.6s ease;
  transition: transform 0.6s ease, -webkit-transform 0.6s ease;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-perspective: 1000px;
  perspective: 1000px;
}

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block;
}

.carousel-item-next,
.carousel-item-prev {
  position: absolute;
  top: 0;
}

.carousel-item-next.carousel-item-left,
.carousel-item-prev.carousel-item-right {
  -webkit-transform: translateX(0);
  transform: translateX(0);
}

@supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
  .carousel-item-next.carousel-item-left,
  .carousel-item-prev.carousel-item-right {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.carousel-item-next,
.active.carousel-item-right {
  -webkit-transform: translateX(100%);
  transform: translateX(100%);
}

@supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
  .carousel-item-next,
  .active.carousel-item-right {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
  }
}

.carousel-item-prev,
.active.carousel-item-left {
  -webkit-transform: translateX(-100%);
  transform: translateX(-100%);
}

@supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
  .carousel-item-prev,
  .active.carousel-item-left {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }
}

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  width: 15%;
  color: #fff;
  text-align: center;
  opacity: 0.5;
}

.carousel-control-prev:hover, .carousel-control-prev:focus,
.carousel-control-next:hover,
.carousel-control-next:focus {
  color: #fff;
  text-decoration: none;
  outline: 0;
  opacity: .9;
}

.carousel-control-prev {
  left: 0;
}

.carousel-control-next {
  right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 20px;
  height: 20px;
  background: transparent no-repeat center center;
  background-size: 100% 100%;
}

.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
}

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 10px;
  left: 0;
  z-index: 15;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  padding-left: 0;
  margin-right: 15%;
  margin-left: 15%;
  list-style: none;
}

.carousel-indicators li {
  position: relative;
  -webkit-box-flex: 0;
  -ms-flex: 0 1 auto;
  flex: 0 1 auto;
  width: 30px;
  height: 3px;
  margin-right: 3px;
  margin-left: 3px;
  text-indent: -999px;
  background-color: rgba(255, 255, 255, 0.5);
}

.carousel-indicators li::before {
  position: absolute;
  top: -10px;
  left: 0;
  display: inline-block;
  width: 100%;
  height: 10px;
  content: "";
}

.carousel-indicators li::after {
  position: absolute;
  bottom: -10px;
  left: 0;
  display: inline-block;
  width: 100%;
  height: 10px;
  content: "";
}

.carousel-indicators .active {
  background-color: #fff;
}

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center;
}

.align-baseline {
  vertical-align: baseline !important;
}

.align-top {
  vertical-align: top !important;
}

.align-middle {
  vertical-align: middle !important;
}

.align-bottom {
  vertical-align: bottom !important;
}

.align-text-bottom {
  vertical-align: text-bottom !important;
}

.align-text-top {
  vertical-align: text-top !important;
}

.bg-primary {
  background-color: #007bff !important;
}

a.bg-primary:hover, a.bg-primary:focus,
button.bg-primary:hover,
button.bg-primary:focus {
  background-color: #0062cc !important;
}

.bg-secondary {
  background-color: #6c757d !important;
}

a.bg-secondary:hover, a.bg-secondary:focus,
button.bg-secondary:hover,
button.bg-secondary:focus {
  background-color: #545b62 !important;
}

.bg-success {
  background-color: #28a745 !important;
}

a.bg-success:hover, a.bg-success:focus,
button.bg-success:hover,
button.bg-success:focus {
  background-color: #1e7e34 !important;
}

.bg-info {
  background-color: #17a2b8 !important;
}

a.bg-info:hover, a.bg-info:focus,
button.bg-info:hover,
button.bg-info:focus {
  background-color: #117a8b !important;
}

.bg-warning {
  background-color: #ffc107 !important;
}

a.bg-warning:hover, a.bg-warning:focus,
button.bg-warning:hover,
button.bg-warning:focus {
  background-color: #d39e00 !important;
}

.bg-danger {
  background-color: #dc3545 !important;
}

a.bg-danger:hover, a.bg-danger:focus,
button.bg-danger:hover,
button.bg-danger:focus {
  background-color: #bd2130 !important;
}

.bg-light {
  background-color: #f8f9fa !important;
}

a.bg-light:hover, a.bg-light:focus,
button.bg-light:hover,
button.bg-light:focus {
  background-color: #dae0e5 !important;
}

.bg-dark {
  background-color: #343a40 !important;
}

a.bg-dark:hover, a.bg-dark:focus,
button.bg-dark:hover,
button.bg-dark:focus {
  background-color: #1d2124 !important;
}

.bg-white {
  background-color: #fff !important;
}

.bg-transparent {
  background-color: transparent !important;
}

.border {
  border: 1px solid #dee2e6 !important;
}

.border-top {
  border-top: 1px solid #dee2e6 !important;
}

.border-right {
  border-right: 1px solid #dee2e6 !important;
}

.border-bottom {
  border-bottom: 1px solid #dee2e6 !important;
}

.border-left {
  border-left: 1px solid #dee2e6 !important;
}

.border-0 {
  border: 0 !important;
}

.border-top-0 {
  border-top: 0 !important;
}

.border-right-0 {
  border-right: 0 !important;
}

.border-bottom-0 {
  border-bottom: 0 !important;
}

.border-left-0 {
  border-left: 0 !important;
}

.border-primary {
  border-color: #007bff !important;
}

.border-secondary {
  border-color: #6c757d !important;
}

.border-success {
  border-color: #28a745 !important;
}

.border-info {
  border-color: #17a2b8 !important;
}

.border-warning {
  border-color: #ffc107 !important;
}

.border-danger {
  border-color: #dc3545 !important;
}

.border-light {
  border-color: #f8f9fa !important;
}

.border-dark {
  border-color: #343a40 !important;
}

.border-white {
  border-color: #fff !important;
}

.rounded {
  border-radius: 0.25rem !important;
}

.rounded-top {
  border-top-left-radius: 0.25rem !important;
  border-top-right-radius: 0.25rem !important;
}

.rounded-right {
  border-top-right-radius: 0.25rem !important;
  border-bottom-right-radius: 0.25rem !important;
}

.rounded-bottom {
  border-bottom-right-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important;
}

.rounded-left {
  border-top-left-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important;
}

.rounded-circle {
  border-radius: 50% !important;
}

.rounded-0 {
  border-radius: 0 !important;
}

.clearfix::after {
  display: block;
  clear: both;
  content: "";
}

.d-none {
  display: none !important;
}

.d-inline {
  display: inline !important;
}

.d-inline-block {
  display: inline-block !important;
}

.d-block {
  display: block !important;
}

.d-table {
  display: table !important;
}

.d-table-row {
  display: table-row !important;
}

.d-table-cell {
  display: table-cell !important;
}

.d-flex {
  display: -webkit-box !important;
  display: -ms-flexbox !important;
  display: flex !important;
}

.d-inline-flex {
  display: -webkit-inline-box !important;
  display: -ms-inline-flexbox !important;
  display: inline-flex !important;
}

@media (min-width: 576px) {
  .d-sm-none {
    display: none !important;
  }
  .d-sm-inline {
    display: inline !important;
  }
  .d-sm-inline-block {
    display: inline-block !important;
  }
  .d-sm-block {
    display: block !important;
  }
  .d-sm-table {
    display: table !important;
  }
  .d-sm-table-row {
    display: table-row !important;
  }
  .d-sm-table-cell {
    display: table-cell !important;
  }
  .d-sm-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-sm-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

@media (min-width: 768px) {
  .d-md-none {
    display: none !important;
  }
  .d-md-inline {
    display: inline !important;
  }
  .d-md-inline-block {
    display: inline-block !important;
  }
  .d-md-block {
    display: block !important;
  }
  .d-md-table {
    display: table !important;
  }
  .d-md-table-row {
    display: table-row !important;
  }
  .d-md-table-cell {
    display: table-cell !important;
  }
  .d-md-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-md-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

@media (min-width: 992px) {
  .d-lg-none {
    display: none !important;
  }
  .d-lg-inline {
    display: inline !important;
  }
  .d-lg-inline-block {
    display: inline-block !important;
  }
  .d-lg-block {
    display: block !important;
  }
  .d-lg-table {
    display: table !important;
  }
  .d-lg-table-row {
    display: table-row !important;
  }
  .d-lg-table-cell {
    display: table-cell !important;
  }
  .d-lg-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-lg-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

@media (min-width: 1200px) {
  .d-xl-none {
    display: none !important;
  }
  .d-xl-inline {
    display: inline !important;
  }
  .d-xl-inline-block {
    display: inline-block !important;
  }
  .d-xl-block {
    display: block !important;
  }
  .d-xl-table {
    display: table !important;
  }
  .d-xl-table-row {
    display: table-row !important;
  }
  .d-xl-table-cell {
    display: table-cell !important;
  }
  .d-xl-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-xl-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

@media print {
  .d-print-none {
    display: none !important;
  }
  .d-print-inline {
    display: inline !important;
  }
  .d-print-inline-block {
    display: inline-block !important;
  }
  .d-print-block {
    display: block !important;
  }
  .d-print-table {
    display: table !important;
  }
  .d-print-table-row {
    display: table-row !important;
  }
  .d-print-table-cell {
    display: table-cell !important;
  }
  .d-print-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-print-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

.embed-responsive {
  position: relative;
  display: block;
  width: 100%;
  padding: 0;
  overflow: hidden;
}

.embed-responsive::before {
  display: block;
  content: "";
}

.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object,
.embed-responsive video {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}

.embed-responsive-21by9::before {
  padding-top: 42.857143%;
}

.embed-responsive-16by9::before {
  padding-top: 56.25%;
}

.embed-responsive-4by3::before {
  padding-top: 75%;
}

.embed-responsive-1by1::before {
  padding-top: 100%;
}

.flex-row {
  -webkit-box-orient: horizontal !important;
  -webkit-box-direction: normal !important;
  -ms-flex-direction: row !important;
  flex-direction: row !important;
}

.flex-column {
  -webkit-box-orient: vertical !important;
  -webkit-box-direction: normal !important;
  -ms-flex-direction: column !important;
  flex-direction: column !important;
}

.flex-row-reverse {
  -webkit-box-orient: horizontal !important;
  -webkit-box-direction: reverse !important;
  -ms-flex-direction: row-reverse !important;
  flex-direction: row-reverse !important;
}

.flex-column-reverse {
  -webkit-box-orient: vertical !important;
  -webkit-box-direction: reverse !important;
  -ms-flex-direction: column-reverse !important;
  flex-direction: column-reverse !important;
}

.flex-wrap {
  -ms-flex-wrap: wrap !important;
  flex-wrap: wrap !important;
}

.flex-nowrap {
  -ms-flex-wrap: nowrap !important;
  flex-wrap: nowrap !important;
}

.flex-wrap-reverse {
  -ms-flex-wrap: wrap-reverse !important;
  flex-wrap: wrap-reverse !important;
}

.justify-content-start {
  -webkit-box-pack: start !important;
  -ms-flex-pack: start !important;
  justify-content: flex-start !important;
}

.justify-content-end {
  -webkit-box-pack: end !important;
  -ms-flex-pack: end !important;
  justify-content: flex-end !important;
}

.justify-content-center {
  -webkit-box-pack: center !important;
  -ms-flex-pack: center !important;
  justify-content: center !important;
}

.justify-content-between {
  -webkit-box-pack: justify !important;
  -ms-flex-pack: justify !important;
  justify-content: space-between !important;
}

.justify-content-around {
  -ms-flex-pack: distribute !important;
  justify-content: space-around !important;
}

.align-items-start {
  -webkit-box-align: start !important;
  -ms-flex-align: start !important;
  align-items: flex-start !important;
}

.align-items-end {
  -webkit-box-align: end !important;
  -ms-flex-align: end !important;
  align-items: flex-end !important;
}

.align-items-center {
  -webkit-box-align: center !important;
  -ms-flex-align: center !important;
  align-items: center !important;
}

.align-items-baseline {
  -webkit-box-align: baseline !important;
  -ms-flex-align: baseline !important;
  align-items: baseline !important;
}

.align-items-stretch {
  -webkit-box-align: stretch !important;
  -ms-flex-align: stretch !important;
  align-items: stretch !important;
}

.align-content-start {
  -ms-flex-line-pack: start !important;
  align-content: flex-start !important;
}

.align-content-end {
  -ms-flex-line-pack: end !important;
  align-content: flex-end !important;
}

.align-content-center {
  -ms-flex-line-pack: center !important;
  align-content: center !important;
}

.align-content-between {
  -ms-flex-line-pack: justify !important;
  align-content: space-between !important;
}

.align-content-around {
  -ms-flex-line-pack: distribute !important;
  align-content: space-around !important;
}

.align-content-stretch {
  -ms-flex-line-pack: stretch !important;
  align-content: stretch !important;
}

.align-self-auto {
  -ms-flex-item-align: auto !important;
  align-self: auto !important;
}

.align-self-start {
  -ms-flex-item-align: start !important;
  align-self: flex-start !important;
}

.align-self-end {
  -ms-flex-item-align: end !important;
  align-self: flex-end !important;
}

.align-self-center {
  -ms-flex-item-align: center !important;
  align-self: center !important;
}

.align-self-baseline {
  -ms-flex-item-align: baseline !important;
  align-self: baseline !important;
}

.align-self-stretch {
  -ms-flex-item-align: stretch !important;
  align-self: stretch !important;
}

@media (min-width: 576px) {
  .flex-sm-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-sm-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-sm-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-sm-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-sm-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-sm-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-sm-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-sm-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-sm-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-sm-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-sm-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-sm-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .align-items-sm-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-sm-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-sm-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-sm-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-sm-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-sm-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-sm-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-sm-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-sm-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-sm-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-sm-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-sm-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-sm-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-sm-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-sm-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-sm-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-sm-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
}

@media (min-width: 768px) {
  .flex-md-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-md-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-md-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-md-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-md-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-md-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-md-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-md-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-md-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-md-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-md-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-md-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .align-items-md-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-md-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-md-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-md-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-md-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-md-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-md-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-md-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-md-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-md-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-md-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-md-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-md-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-md-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-md-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-md-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-md-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
}

@media (min-width: 992px) {
  .flex-lg-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-lg-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-lg-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-lg-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-lg-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-lg-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-lg-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-lg-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-lg-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-lg-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-lg-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-lg-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .align-items-lg-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-lg-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-lg-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-lg-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-lg-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-lg-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-lg-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-lg-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-lg-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-lg-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-lg-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-lg-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-lg-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-lg-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-lg-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-lg-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-lg-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
}

@media (min-width: 1200px) {
  .flex-xl-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-xl-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-xl-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-xl-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-xl-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-xl-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-xl-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-xl-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-xl-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-xl-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-xl-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-xl-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .align-items-xl-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-xl-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-xl-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-xl-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-xl-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-xl-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-xl-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-xl-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-xl-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-xl-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-xl-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-xl-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-xl-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-xl-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-xl-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-xl-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-xl-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
}

.float-left {
  float: left !important;
}

.float-right {
  float: right !important;
}

.float-none {
  float: none !important;
}

@media (min-width: 576px) {
  .float-sm-left {
    float: left !important;
  }
  .float-sm-right {
    float: right !important;
  }
  .float-sm-none {
    float: none !important;
  }
}

@media (min-width: 768px) {
  .float-md-left {
    float: left !important;
  }
  .float-md-right {
    float: right !important;
  }
  .float-md-none {
    float: none !important;
  }
}

@media (min-width: 992px) {
  .float-lg-left {
    float: left !important;
  }
  .float-lg-right {
    float: right !important;
  }
  .float-lg-none {
    float: none !important;
  }
}

@media (min-width: 1200px) {
  .float-xl-left {
    float: left !important;
  }
  .float-xl-right {
    float: right !important;
  }
  .float-xl-none {
    float: none !important;
  }
}

.position-static {
  position: static !important;
}

.position-relative {
  position: relative !important;
}

.position-absolute {
  position: absolute !important;
}

.position-fixed {
  position: fixed !important;
}

.position-sticky {
  position: -webkit-sticky !important;
  position: sticky !important;
}

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
}

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030;
}

@supports ((position: -webkit-sticky) or (position: sticky)) {
  .sticky-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  -webkit-clip-path: inset(50%);
  clip-path: inset(50%);
  border: 0;
}

.sr-only-focusable:active, .sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  overflow: visible;
  clip: auto;
  white-space: normal;
  -webkit-clip-path: none;
  clip-path: none;
}

.w-25 {
  width: 25% !important;
}

.w-50 {
  width: 50% !important;
}

.w-75 {
  width: 75% !important;
}

.w-100 {
  width: 100% !important;
}

.h-25 {
  height: 25% !important;
}

.h-50 {
  height: 50% !important;
}

.h-75 {
  height: 75% !important;
}

.h-100 {
  height: 100% !important;
}

.mw-100 {
  max-width: 100% !important;
}

.mh-100 {
  max-height: 100% !important;
}

.m-0 {
  margin: 0 !important;
}

.mt-0,
.my-0 {
  margin-top: 0 !important;
}

.mr-0,
.mx-0 {
  margin-right: 0 !important;
}

.mb-0,
.my-0 {
  margin-bottom: 0 !important;
}

.ml-0,
.mx-0 {
  margin-left: 0 !important;
}

.m-1 {
  margin: 0.25rem !important;
}

.mt-1,
.my-1 {
  margin-top: 0.25rem !important;
}

.mr-1,
.mx-1 {
  margin-right: 0.25rem !important;
}

.mb-1,
.my-1 {
  margin-bottom: 0.25rem !important;
}

.ml-1,
.mx-1 {
  margin-left: 0.25rem !important;
}

.m-2 {
  margin: 0.5rem !important;
}

.mt-2,
.my-2 {
  margin-top: 0.5rem !important;
}

.mr-2,
.mx-2 {
  margin-right: 0.5rem !important;
}

.mb-2,
.my-2 {
  margin-bottom: 0.5rem !important;
}

.ml-2,
.mx-2 {
  margin-left: 0.5rem !important;
}

.m-3 {
  margin: 1rem !important;
}

.mt-3,
.my-3 {
  margin-top: 1rem !important;
}

.mr-3,
.mx-3 {
  margin-right: 1rem !important;
}

.mb-3,
.my-3 {
  margin-bottom: 1rem !important;
}

.ml-3,
.mx-3 {
  margin-left: 1rem !important;
}

.m-4 {
  margin: 2.7rem !important;
}

.mt-4,
.my-4 {
  margin-top: 2.7rem !important;
}

.mr-4,
.mx-4 {
  margin-right: 2.0rem !important;
}

.mb-4,
.my-4 {
  margin-bottom: 1.5rem !important;
}

.ml-4,
.mx-4 {
  margin-left: 1.5rem !important;
}

.m-5 {
  margin: 3rem !important;
}

.mt-5,
.my-5 {
  margin-top: 3rem !important;
}

.mr-5,
.mx-5 {
  margin-right: 3rem !important;
}

.mb-5,
.my-5 {
  margin-bottom: 3rem !important;
}

.ml-5,
.mx-5 {
  margin-left: 3rem !important;
}

.p-0 {
  padding: 0 !important;
}

.pt-0,
.py-0 {
  padding-top: 0 !important;
}

.pr-0,
.px-0 {
  padding-right: 0 !important;
}

.pb-0,
.py-0 {
  padding-bottom: 0 !important;
}

.pl-0,
.px-0 {
  padding-left: 0 !important;
}

.p-1 {
  padding: 0.25rem !important;
}

.pt-1,
.py-1 {
  padding-top: 0.25rem !important;
}

.pr-1,
.px-1 {
  padding-right: 0.25rem !important;
}

.pb-1,
.py-1 {
  padding-bottom: 0.25rem !important;
}

.pl-1,
.px-1 {
  padding-left: 0.25rem !important;
}

.p-2 {
  padding: 0.5rem !important;
}

.pt-2,
.py-2 {
  padding-top: 0.5rem !important;
}

.pr-2,
.px-2 {
  padding-right: 0.5rem !important;
}

.pb-2,
.py-2 {
  padding-bottom: 0.5rem !important;
}

.pl-2,
.px-2 {
  padding-left: 0.5rem !important;
}

.p-3 {
  padding: 1rem !important;
}

.pt-3,
.py-3 {
  padding-top: 1rem !important;
}

.pr-3,
.px-3 {
  padding-right: 1rem !important;
}

.pb-3,
.py-3 {
  padding-bottom: 1rem !important;
}

.pl-3,
.px-3 {
  padding-left: 1rem !important;
}

.p-4 {
  padding: 1.5rem !important;
}

.pt-4,
.py-4 {
  padding-top: 1.5rem !important;
}

.pr-4,
.px-4 {
  padding-right: 1.5rem !important;
}

.pb-4,
.py-4 {
  padding-bottom: 1.5rem !important;
}

.pl-4,
.px-4 {
  padding-left: 1.5rem !important;
}

.p-5 {
  padding: 3rem !important;
}

.pt-5,
.py-5 {
  padding-top: 3rem !important;
}

.pr-5,
.px-5 {
  padding-right: 3rem !important;
}

.pb-5,
.py-5 {
  padding-bottom: 3rem !important;
}

.pl-5,
.px-5 {
  padding-left: 3rem !important;
}

.m-auto {
  margin: auto !important;
}

.mt-auto,
.my-auto {
  margin-top: auto !important;
}

.mr-auto,
.mx-auto {
  margin-right: auto !important;
}

.mb-auto,
.my-auto {
  margin-bottom: auto !important;
}

.ml-auto,
.mx-auto {
  margin-left: auto !important;
}

@media (min-width: 576px) {
  .m-sm-0 {
    margin: 0 !important;
  }
  .mt-sm-0,
  .my-sm-0 {
    margin-top: 0 !important;
  }
  .mr-sm-0,
  .mx-sm-0 {
    margin-right: 0 !important;
  }
  .mb-sm-0,
  .my-sm-0 {
    margin-bottom: 0 !important;
  }
  .ml-sm-0,
  .mx-sm-0 {
    margin-left: 0 !important;
  }
  .m-sm-1 {
    margin: 0.25rem !important;
  }
  .mt-sm-1,
  .my-sm-1 {
    margin-top: 0.25rem !important;
  }
  .mr-sm-1,
  .mx-sm-1 {
    margin-right: 0.25rem !important;
  }
  .mb-sm-1,
  .my-sm-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-sm-1,
  .mx-sm-1 {
    margin-left: 0.25rem !important;
  }
  .m-sm-2 {
    margin: 0.5rem !important;
  }
  .mt-sm-2,
  .my-sm-2 {
    margin-top: 0.5rem !important;
  }
  .mr-sm-2,
  .mx-sm-2 {
    margin-right: 0.5rem !important;
  }
  .mb-sm-2,
  .my-sm-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-sm-2,
  .mx-sm-2 {
    margin-left: 0.5rem !important;
  }
  .m-sm-3 {
    margin: 1rem !important;
  }
  .mt-sm-3,
  .my-sm-3 {
    margin-top: 1rem !important;
  }
  .mr-sm-3,
  .mx-sm-3 {
    margin-right: 1rem !important;
  }
  .mb-sm-3,
  .my-sm-3 {
    margin-bottom: 1rem !important;
  }
  .ml-sm-3,
  .mx-sm-3 {
    margin-left: 1rem !important;
  }
  .m-sm-4 {
    margin: 1.5rem !important;
  }
  .mt-sm-4,
  .my-sm-4 {
    margin-top: 1.5rem !important;
  }
  .mr-sm-4,
  .mx-sm-4 {
    margin-right: 1.5rem !important;
  }
  .mb-sm-4,
  .my-sm-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-sm-4,
  .mx-sm-4 {
    margin-left: 1.5rem !important;
  }
  .m-sm-5 {
    margin: 3rem !important;
  }
  .mt-sm-5,
  .my-sm-5 {
    margin-top: 3rem !important;
  }
  .mr-sm-5,
  .mx-sm-5 {
    margin-right: 3rem !important;
  }
  .mb-sm-5,
  .my-sm-5 {
    margin-bottom: 3rem !important;
  }
  .ml-sm-5,
  .mx-sm-5 {
    margin-left: 3rem !important;
  }
  .p-sm-0 {
    padding: 0 !important;
  }
  .pt-sm-0,
  .py-sm-0 {
    padding-top: 0 !important;
  }
  .pr-sm-0,
  .px-sm-0 {
    padding-right: 0 !important;
  }
  .pb-sm-0,
  .py-sm-0 {
    padding-bottom: 0 !important;
  }
  .pl-sm-0,
  .px-sm-0 {
    padding-left: 0 !important;
  }
  .p-sm-1 {
    padding: 0.25rem !important;
  }
  .pt-sm-1,
  .py-sm-1 {
    padding-top: 0.25rem !important;
  }
  .pr-sm-1,
  .px-sm-1 {
    padding-right: 0.25rem !important;
  }
  .pb-sm-1,
  .py-sm-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-sm-1,
  .px-sm-1 {
    padding-left: 0.25rem !important;
  }
  .p-sm-2 {
    padding: 0.5rem !important;
  }
  .pt-sm-2,
  .py-sm-2 {
    padding-top: 0.5rem !important;
  }
  .pr-sm-2,
  .px-sm-2 {
    padding-right: 0.5rem !important;
  }
  .pb-sm-2,
  .py-sm-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-sm-2,
  .px-sm-2 {
    padding-left: 0.5rem !important;
  }
  .p-sm-3 {
    padding: 1rem !important;
  }
  .pt-sm-3,
  .py-sm-3 {
    padding-top: 1rem !important;
  }
  .pr-sm-3,
  .px-sm-3 {
    padding-right: 1rem !important;
  }
  .pb-sm-3,
  .py-sm-3 {
    padding-bottom: 1rem !important;
  }
  .pl-sm-3,
  .px-sm-3 {
    padding-left: 1rem !important;
  }
  .p-sm-4 {
    padding: 1.5rem !important;
  }
  .pt-sm-4,
  .py-sm-4 {
    padding-top: 1.5rem !important;
  }
  .pr-sm-4,
  .px-sm-4 {
    padding-right: 1.5rem !important;
  }
  .pb-sm-4,
  .py-sm-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-sm-4,
  .px-sm-4 {
    padding-left: 1.5rem !important;
  }
  .p-sm-5 {
    padding: 3rem !important;
  }
  .pt-sm-5,
  .py-sm-5 {
    padding-top: 3rem !important;
  }
  .pr-sm-5,
  .px-sm-5 {
    padding-right: 3rem !important;
  }
  .pb-sm-5,
  .py-sm-5 {
    padding-bottom: 3rem !important;
  }
  .pl-sm-5,
  .px-sm-5 {
    padding-left: 3rem !important;
  }
  .m-sm-auto {
    margin: auto !important;
  }
  .mt-sm-auto,
  .my-sm-auto {
    margin-top: auto !important;
  }
  .mr-sm-auto,
  .mx-sm-auto {
    margin-right: auto !important;
  }
  .mb-sm-auto,
  .my-sm-auto {
    margin-bottom: auto !important;
  }
  .ml-sm-auto,
  .mx-sm-auto {
    margin-left: auto !important;
  }
}

@media (min-width: 768px) {
  .m-md-0 {
    margin: 0 !important;
  }
  .mt-md-0,
  .my-md-0 {
    margin-top: 0 !important;
  }
  .mr-md-0,
  .mx-md-0 {
    margin-right: 0 !important;
  }
  .mb-md-0,
  .my-md-0 {
    margin-bottom: 0 !important;
  }
  .ml-md-0,
  .mx-md-0 {
    margin-left: 0 !important;
  }
  .m-md-1 {
    margin: 0.25rem !important;
  }
  .mt-md-1,
  .my-md-1 {
    margin-top: 0.25rem !important;
  }
  .mr-md-1,
  .mx-md-1 {
    margin-right: 0.25rem !important;
  }
  .mb-md-1,
  .my-md-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-md-1,
  .mx-md-1 {
    margin-left: 0.25rem !important;
  }
  .m-md-2 {
    margin: 0.5rem !important;
  }
  .mt-md-2,
  .my-md-2 {
    margin-top: 0.5rem !important;
  }
  .mr-md-2,
  .mx-md-2 {
    margin-right: 0.5rem !important;
  }
  .mb-md-2,
  .my-md-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-md-2,
  .mx-md-2 {
    margin-left: 0.5rem !important;
  }
  .m-md-3 {
    margin: 1rem !important;
  }
  .mt-md-3,
  .my-md-3 {
    margin-top: 1rem !important;
  }
  .mr-md-3,
  .mx-md-3 {
    margin-right: 1rem !important;
  }
  .mb-md-3,
  .my-md-3 {
    margin-bottom: 1rem !important;
  }
  .ml-md-3,
  .mx-md-3 {
    margin-left: 1rem !important;
  }
  .m-md-4 {
    margin: 1.5rem !important;
  }
  .mt-md-4,
  .my-md-4 {
    margin-top: 1.5rem !important;
  }
  .mr-md-4,
  .mx-md-4 {
    margin-right: 1.5rem !important;
  }
  .mb-md-4,
  .my-md-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-md-4,
  .mx-md-4 {
    margin-left: 1.5rem !important;
  }
  .m-md-5 {
    margin: 3rem !important;
  }
  .mt-md-5,
  .my-md-5 {
    margin-top: 3rem !important;
  }
  .mr-md-5,
  .mx-md-5 {
    margin-right: 3rem !important;
  }
  .mb-md-5,
  .my-md-5 {
    margin-bottom: 3rem !important;
  }
  .ml-md-5,
  .mx-md-5 {
    margin-left: 3rem !important;
  }
  .p-md-0 {
    padding: 0 !important;
  }
  .pt-md-0,
  .py-md-0 {
    padding-top: 0 !important;
  }
  .pr-md-0,
  .px-md-0 {
    padding-right: 0 !important;
  }
  .pb-md-0,
  .py-md-0 {
    padding-bottom: 0 !important;
  }
  .pl-md-0,
  .px-md-0 {
    padding-left: 0 !important;
  }
  .p-md-1 {
    padding: 0.25rem !important;
  }
  .pt-md-1,
  .py-md-1 {
    padding-top: 0.25rem !important;
  }
  .pr-md-1,
  .px-md-1 {
    padding-right: 0.25rem !important;
  }
  .pb-md-1,
  .py-md-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-md-1,
  .px-md-1 {
    padding-left: 0.25rem !important;
  }
  .p-md-2 {
    padding: 0.5rem !important;
  }
  .pt-md-2,
  .py-md-2 {
    padding-top: 0.5rem !important;
  }
  .pr-md-2,
  .px-md-2 {
    padding-right: 0.5rem !important;
  }
  .pb-md-2,
  .py-md-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-md-2,
  .px-md-2 {
    padding-left: 0.5rem !important;
  }
  .p-md-3 {
    padding: 1rem !important;
  }
  .pt-md-3,
  .py-md-3 {
    padding-top: 1rem !important;
  }
  .pr-md-3,
  .px-md-3 {
    padding-right: 1rem !important;
  }
  .pb-md-3,
  .py-md-3 {
    padding-bottom: 1rem !important;
  }
  .pl-md-3,
  .px-md-3 {
    padding-left: 1rem !important;
  }
  .p-md-4 {
    padding: 1.5rem !important;
  }
  .pt-md-4,
  .py-md-4 {
    padding-top: 1.5rem !important;
  }
  .pr-md-4,
  .px-md-4 {
    padding-right: 1.5rem !important;
  }
  .pb-md-4,
  .py-md-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-md-4,
  .px-md-4 {
    padding-left: 1.5rem !important;
  }
  .p-md-5 {
    padding: 3rem !important;
  }
  .pt-md-5,
  .py-md-5 {
    padding-top: 3rem !important;
  }
  .pr-md-5,
  .px-md-5 {
    padding-right: 3rem !important;
  }
  .pb-md-5,
  .py-md-5 {
    padding-bottom: 3rem !important;
  }
  .pl-md-5,
  .px-md-5 {
    padding-left: 3rem !important;
  }
  .m-md-auto {
    margin: auto !important;
  }
  .mt-md-auto,
  .my-md-auto {
    margin-top: auto !important;
  }
  .mr-md-auto,
  .mx-md-auto {
    margin-right: auto !important;
  }
  .mb-md-auto,
  .my-md-auto {
    margin-bottom: auto !important;
  }
  .ml-md-auto,
  .mx-md-auto {
    margin-left: auto !important;
  }
}

@media (min-width: 992px) {
  .m-lg-0 {
    margin: 0 !important;
  }
  .mt-lg-0,
  .my-lg-0 {
    margin-top: 0 !important;
  }
  .mr-lg-0,
  .mx-lg-0 {
    margin-right: 0 !important;
  }
  .mb-lg-0,
  .my-lg-0 {
    margin-bottom: 0 !important;
  }
  .ml-lg-0,
  .mx-lg-0 {
    margin-left: 0 !important;
  }
  .m-lg-1 {
    margin: 0.25rem !important;
  }
  .mt-lg-1,
  .my-lg-1 {
    margin-top: 0.25rem !important;
  }
  .mr-lg-1,
  .mx-lg-1 {
    margin-right: 0.25rem !important;
  }
  .mb-lg-1,
  .my-lg-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-lg-1,
  .mx-lg-1 {
    margin-left: 0.25rem !important;
  }
  .m-lg-2 {
    margin: 0.5rem !important;
  }
  .mt-lg-2,
  .my-lg-2 {
    margin-top: 0.5rem !important;
  }
  .mr-lg-2,
  .mx-lg-2 {
    margin-right: 0.5rem !important;
  }
  .mb-lg-2,
  .my-lg-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-lg-2,
  .mx-lg-2 {
    margin-left: 0.5rem !important;
  }
  .m-lg-3 {
    margin: 1rem !important;
  }
  .mt-lg-3,
  .my-lg-3 {
    margin-top: 1rem !important;
  }
  .mr-lg-3,
  .mx-lg-3 {
    margin-right: 1rem !important;
  }
  .mb-lg-3,
  .my-lg-3 {
    margin-bottom: 1rem !important;
  }
  .ml-lg-3,
  .mx-lg-3 {
    margin-left: 1rem !important;
  }
  .m-lg-4 {
    margin: 1.5rem !important;
  }
  .mt-lg-4,
  .my-lg-4 {
    margin-top: 1.5rem !important;
  }
  .mr-lg-4,
  .mx-lg-4 {
    margin-right: 1.5rem !important;
  }
  .mb-lg-4,
  .my-lg-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-lg-4,
  .mx-lg-4 {
    margin-left: 1.5rem !important;
  }
  .m-lg-5 {
    margin: 3rem !important;
  }
  .mt-lg-5,
  .my-lg-5 {
    margin-top: 3rem !important;
  }
  .mr-lg-5,
  .mx-lg-5 {
    margin-right: 3rem !important;
  }
  .mb-lg-5,
  .my-lg-5 {
    margin-bottom: 3rem !important;
  }
  .ml-lg-5,
  .mx-lg-5 {
    margin-left: 3rem !important;
  }
  .p-lg-0 {
    padding: 0 !important;
  }
  .pt-lg-0,
  .py-lg-0 {
    padding-top: 0 !important;
  }
  .pr-lg-0,
  .px-lg-0 {
    padding-right: 0 !important;
  }
  .pb-lg-0,
  .py-lg-0 {
    padding-bottom: 0 !important;
  }
  .pl-lg-0,
  .px-lg-0 {
    padding-left: 0 !important;
  }
  .p-lg-1 {
    padding: 0.25rem !important;
  }
  .pt-lg-1,
  .py-lg-1 {
    padding-top: 0.25rem !important;
  }
  .pr-lg-1,
  .px-lg-1 {
    padding-right: 0.25rem !important;
  }
  .pb-lg-1,
  .py-lg-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-lg-1,
  .px-lg-1 {
    padding-left: 0.25rem !important;
  }
  .p-lg-2 {
    padding: 0.5rem !important;
  }
  .pt-lg-2,
  .py-lg-2 {
    padding-top: 0.5rem !important;
  }
  .pr-lg-2,
  .px-lg-2 {
    padding-right: 0.5rem !important;
  }
  .pb-lg-2,
  .py-lg-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-lg-2,
  .px-lg-2 {
    padding-left: 0.5rem !important;
  }
  .p-lg-3 {
    padding: 1rem !important;
  }
  .pt-lg-3,
  .py-lg-3 {
    padding-top: 1rem !important;
  }
  .pr-lg-3,
  .px-lg-3 {
    padding-right: 1rem !important;
  }
  .pb-lg-3,
  .py-lg-3 {
    padding-bottom: 1rem !important;
  }
  .pl-lg-3,
  .px-lg-3 {
    padding-left: 1rem !important;
  }
  .p-lg-4 {
    padding: 1.5rem !important;
  }
  .pt-lg-4,
  .py-lg-4 {
    padding-top: 1.5rem !important;
  }
  .pr-lg-4,
  .px-lg-4 {
    padding-right: 1.5rem !important;
  }
  .pb-lg-4,
  .py-lg-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-lg-4,
  .px-lg-4 {
    padding-left: 1.5rem !important;
  }
  .p-lg-5 {
    padding: 3rem !important;
  }
  .pt-lg-5,
  .py-lg-5 {
    padding-top: 3rem !important;
  }
  .pr-lg-5,
  .px-lg-5 {
    padding-right: 3rem !important;
  }
  .pb-lg-5,
  .py-lg-5 {
    padding-bottom: 3rem !important;
  }
  .pl-lg-5,
  .px-lg-5 {
    padding-left: 3rem !important;
  }
  .m-lg-auto {
    margin: auto !important;
  }
  .mt-lg-auto,
  .my-lg-auto {
    margin-top: auto !important;
  }
  .mr-lg-auto,
  .mx-lg-auto {
    margin-right: auto !important;
  }
  .mb-lg-auto,
  .my-lg-auto {
    margin-bottom: auto !important;
  }
  .ml-lg-auto,
  .mx-lg-auto {
    margin-left: auto !important;
  }
}

@media (min-width: 1200px) {
  .m-xl-0 {
    margin: 0 !important;
  }
  .mt-xl-0,
  .my-xl-0 {
    margin-top: 0 !important;
  }
  .mr-xl-0,
  .mx-xl-0 {
    margin-right: 0 !important;
  }
  .mb-xl-0,
  .my-xl-0 {
    margin-bottom: 0 !important;
  }
  .ml-xl-0,
  .mx-xl-0 {
    margin-left: 0 !important;
  }
  .m-xl-1 {
    margin: 0.25rem !important;
  }
  .mt-xl-1,
  .my-xl-1 {
    margin-top: 0.25rem !important;
  }
  .mr-xl-1,
  .mx-xl-1 {
    margin-right: 0.25rem !important;
  }
  .mb-xl-1,
  .my-xl-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-xl-1,
  .mx-xl-1 {
    margin-left: 0.25rem !important;
  }
  .m-xl-2 {
    margin: 0.5rem !important;
  }
  .mt-xl-2,
  .my-xl-2 {
    margin-top: 0.5rem !important;
  }
  .mr-xl-2,
  .mx-xl-2 {
    margin-right: 0.5rem !important;
  }
  .mb-xl-2,
  .my-xl-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-xl-2,
  .mx-xl-2 {
    margin-left: 0.5rem !important;
  }
  .m-xl-3 {
    margin: 1rem !important;
  }
  .mt-xl-3,
  .my-xl-3 {
    margin-top: 1rem !important;
  }
  .mr-xl-3,
  .mx-xl-3 {
    margin-right: 1rem !important;
  }
  .mb-xl-3,
  .my-xl-3 {
    margin-bottom: 1rem !important;
  }
  .ml-xl-3,
  .mx-xl-3 {
    margin-left: 1rem !important;
  }
  .m-xl-4 {
    margin: 1.5rem !important;
  }
  .mt-xl-4,
  .my-xl-4 {
    margin-top: 1.5rem !important;
  }
  .mr-xl-4,
  .mx-xl-4 {
    margin-right: 1.5rem !important;
  }
  .mb-xl-4,
  .my-xl-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-xl-4,
  .mx-xl-4 {
    margin-left: 1.5rem !important;
  }
  .m-xl-5 {
    margin: 3rem !important;
  }
  .mt-xl-5,
  .my-xl-5 {
    margin-top: 3rem !important;
  }
  .mr-xl-5,
  .mx-xl-5 {
    margin-right: 3rem !important;
  }
  .mb-xl-5,
  .my-xl-5 {
    margin-bottom: 3rem !important;
  }
  .ml-xl-5,
  .mx-xl-5 {
    margin-left: 3rem !important;
  }
  .p-xl-0 {
    padding: 0 !important;
  }
  .pt-xl-0,
  .py-xl-0 {
    padding-top: 0 !important;
  }
  .pr-xl-0,
  .px-xl-0 {
    padding-right: 0 !important;
  }
  .pb-xl-0,
  .py-xl-0 {
    padding-bottom: 0 !important;
  }
  .pl-xl-0,
  .px-xl-0 {
    padding-left: 0 !important;
  }
  .p-xl-1 {
    padding: 0.25rem !important;
  }
  .pt-xl-1,
  .py-xl-1 {
    padding-top: 0.25rem !important;
  }
  .pr-xl-1,
  .px-xl-1 {
    padding-right: 0.25rem !important;
  }
  .pb-xl-1,
  .py-xl-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-xl-1,
  .px-xl-1 {
    padding-left: 0.25rem !important;
  }
  .p-xl-2 {
    padding: 0.5rem !important;
  }
  .pt-xl-2,
  .py-xl-2 {
    padding-top: 0.5rem !important;
  }
  .pr-xl-2,
  .px-xl-2 {
    padding-right: 0.5rem !important;
  }
  .pb-xl-2,
  .py-xl-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-xl-2,
  .px-xl-2 {
    padding-left: 0.5rem !important;
  }
  .p-xl-3 {
    padding: 1rem !important;
  }
  .pt-xl-3,
  .py-xl-3 {
    padding-top: 1rem !important;
  }
  .pr-xl-3,
  .px-xl-3 {
    padding-right: 1rem !important;
  }
  .pb-xl-3,
  .py-xl-3 {
    padding-bottom: 1rem !important;
  }
  .pl-xl-3,
  .px-xl-3 {
    padding-left: 1rem !important;
  }
  .p-xl-4 {
    padding: 1.5rem !important;
  }
  .pt-xl-4,
  .py-xl-4 {
    padding-top: 1.5rem !important;
  }
  .pr-xl-4,
  .px-xl-4 {
    padding-right: 1.5rem !important;
  }
  .pb-xl-4,
  .py-xl-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-xl-4,
  .px-xl-4 {
    padding-left: 1.5rem !important;
  }
  .p-xl-5 {
    padding: 3rem !important;
  }
  .pt-xl-5,
  .py-xl-5 {
    padding-top: 3rem !important;
  }
  .pr-xl-5,
  .px-xl-5 {
    padding-right: 3rem !important;
  }
  .pb-xl-5,
  .py-xl-5 {
    padding-bottom: 3rem !important;
  }
  .pl-xl-5,
  .px-xl-5 {
    padding-left: 3rem !important;
  }
  .m-xl-auto {
    margin: auto !important;
  }
  .mt-xl-auto,
  .my-xl-auto {
    margin-top: auto !important;
  }
  .mr-xl-auto,
  .mx-xl-auto {
    margin-right: auto !important;
  }
  .mb-xl-auto,
  .my-xl-auto {
    margin-bottom: auto !important;
  }
  .ml-xl-auto,
  .mx-xl-auto {
    margin-left: auto !important;
  }
}

.text-justify {
  text-align: justify !important;
}

.text-nowrap {
  white-space: nowrap !important;
}

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.text-left {
  text-align: left !important;
}

.text-right {
  text-align: right !important;
}

.text-center {
  text-align: center !important;
}

@media (min-width: 576px) {
  .text-sm-left {
    text-align: left !important;
  }
  .text-sm-right {
    text-align: right !important;
  }
  .text-sm-center {
    text-align: center !important;
  }
}

@media (min-width: 768px) {
  .text-md-left {
    text-align: left !important;
  }
  .text-md-right {
    text-align: right !important;
  }
  .text-md-center {
    text-align: center !important;
  }
}

@media (min-width: 992px) {
  .text-lg-left {
    text-align: left !important;
  }
  .text-lg-right {
    text-align: right !important;
  }
  .text-lg-center {
    text-align: center !important;
  }
}

@media (min-width: 1200px) {
  .text-xl-left {
    text-align: left !important;
  }
  .text-xl-right {
    text-align: right !important;
  }
  .text-xl-center {
    text-align: center !important;
  }
}

.text-lowercase {
  text-transform: lowercase !important;
}

.text-uppercase {
  text-transform: uppercase !important;
}

.text-capitalize {
  text-transform: capitalize !important;
}

.font-weight-light {
  font-weight: 300 !important;
}

.font-weight-normal {
  font-weight: 400 !important;
}

.font-weight-bold {
  font-weight: 700 !important;
}

.font-italic {
  font-style: italic !important;
}

.text-white {
  color: #fff !important;
}

.text-primary {
  color: #007bff !important;
}

a.text-primary:hover, a.text-primary:focus {
  color: #0062cc !important;
}

.text-secondary {
  color: #6c757d !important;
}

a.text-secondary:hover, a.text-secondary:focus {
  color: #545b62 !important;
}

.text-success {
  color: #28a745 !important;
}

a.text-success:hover, a.text-success:focus {
  color: #1e7e34 !important;
}

.text-info {
  color: #17a2b8 !important;
}

a.text-info:hover, a.text-info:focus {
  color: #117a8b !important;
}

.text-warning {
  color: #ffc107 !important;
}

a.text-warning:hover, a.text-warning:focus {
  color: #d39e00 !important;
}

.text-danger {
  color: #dc3545 !important;
}

a.text-danger:hover, a.text-danger:focus {
  color: #bd2130 !important;
}

.text-light {
  color: #f8f9fa !important;
}

a.text-light:hover, a.text-light:focus {
  color: #dae0e5 !important;
}

.text-dark {
  color: #343a40 !important;
}

a.text-dark:hover, a.text-dark:focus {
  color: #1d2124 !important;
}

.text-muted {
  color: #6c757d !important;
}

.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.visible {
  visibility: visible !important;
}

.invisible {
  visibility: hidden !important;
}

@media print {
  *,
  *::before,
  *::after {
    text-shadow: none !important;
    box-shadow: none !important;
  }
  a:not(.btn) {
    text-decoration: underline;
  }
  abbr[title]::after {
    content: " (" attr(title) ")";
  }
  pre {
    white-space: pre-wrap !important;
  }
  pre,
  blockquote {
    border: 1px solid #999;
    page-break-inside: avoid;
  }
  thead {
    display: table-header-group;
  }
  tr,
  img {
    page-break-inside: avoid;
  }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }
  h2,
  h3 {
    page-break-after: avoid;
  }
  @page {
    size: a3;
  }
  body {
    min-width: 992px !important;
  }
  .container {
    min-width: 992px !important;
  }
  .navbar {
    display: none;
  }
  .badge {
    border: 1px solid #000;
  }
  .table {
    border-collapse: collapse !important;
  }
  .table td,
  .table th {
    background-color: #fff !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important;
  }
}

/*# sourceMappingURL=bootstrap.css.map */
a {
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}

a:hover {
    text-decoration: none;
    opacity: .8;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}

input[type="button"],
input[type="submit"] {
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    margin: 0;
    font-family: 'Lato', sans-serif;
}

p {
    margin: 0;
    letter-spacing: 1px;
    font-size: 15px;
    line-height: 1.9;
    color: #999;
    font-family: 'Open Sans', sans-serif;
}

ul {
    margin: 0;
   /* padding-left:65%;*/
}

label {
    margin: 0;
}
/*-- footer --*/
.copy-right {
    background: #000000;
}
/*-- top-header --*/

.main-top-w3l {
    background: rgb(0, 0, 0);
}

.header-most-top p {
    letter-spacing: 1px;
    font-size: 15px;
}

/*-- header Lists --*/

.header-right ul li {
    display: inline-block;
    
    font-size: 13px;
    letter-spacing: 1px;
}

.header-right ul li a {
    text-decoration: none;
}

.header-right ul li i {
    font-size: 15px;
}

/*-- modal login --*/

.modal-title {
    font-size: 30px;
    color: #0879c9;
}

.modal-content {
    border: 10px solid rgba(244, 92, 93, 0.82);
}

label.col-form-label {
    letter-spacing: 1px;
    font-size: 15px;
    color: #000;
}

p.dont-do a {
    color: #F45C5D;
}

.modal-footer .btn-primary,
.modal-footer .btn-secondary {
    font-size: 15px;
    letter-spacing: 1px;
    padding: 10px 14px;
}

.modal-footer .btn-primary {
    background-color: #0e0e0e;
    border-color: #0e0e0e;
    -webkit-transition: 0.5s all;
    -o-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -ms-transition: 0.5s all;
    transition: 0.5s all;
}

.modal-footer .btn-primary:hover {
    opacity: .8;
    -webkit-transition: 0.5s all;
    -o-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -ms-transition: 0.5s all;
    transition: 0.5s all;
}

.right-w3l input[type="submit"] {
    cursor: pointer;
    letter-spacing: 1px;
    padding: 10px 0;
    background: #0879c9;
    color: #fff;
    margin: 2vw 0 1.5vw;
    -webkit-transition: 0.5s all;
    -o-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -ms-transition: 0.5s all;
    transition: 0.5s all;
}

input[type="button"],
input[type="submit"] {
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}

/*-- location --*/

.list_of_cities {
    width: 100%;
    padding: 12px;
    border: 1px solid rgba(47, 47, 47, 0.44);
    color: #4d4d4d;
    font-size: 14px;
    font-family: 'Open Sans', sans-serif;
    letter-spacing: 1px;
}

/*-- //location --*/

/*-- //header Lists --*/

/*-- //top-header --*/

/*-- header-bottom --*/

/*-- search --*/

.agileits_search input[type="search"] {
    color: #191e21;
    width: 78%;
    letter-spacing: 1px;
    padding: 10px;
    box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.22);
}

.agileits_search button {
    border-radius: 0;
    background: #F45C5D;
    color: #fff;
    width: 20%;
    box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.22);
    
}

/*-- //search --*/

/*-- logo --*/

.logo_agile h1 a {
    color: #F45C5D;
    font-size: 38px;
    text-decoration: none;
    letter-spacing: 1px;
    position: relative;
}

.logo_agile h1 a:hover {
    text-decoration: none;
}

.logo_agile h1 a img {
    position: absolute;
    left: -40%;
    top: -23px;
}

.logo_agile {
    padding: 26px 0 21px;
}

/*-- //logo --*/

/*-- header cart button --*/

button.w3view-cart {
    font-size: 20px;
    color: #fff;
    width: 50px;
    height: 44px;
    background: #000;
    border: 1px solid rgba(27, 25, 25, 0.27);
}

/*-- //header cart button --*/

/*-- navigation --*/

.navbar-inner {
    background: #f8f9fa;
    box-shadow: 0px 2px 6px 1px rgba(0, 0, 0, 0.13);
}

.navbar-light .navbar-nav .nav-link {
    letter-spacing: 1px;
    font-size: 15px;
    color: #000;
}

.navbar-light .navbar-nav .show>.nav-link,
.navbar-light .navbar-nav .active>.nav-link,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .nav-link.active {
    color: #F45C5D;
}

/*-- navigation-dropdown --*/

.agile_inner_drop_nav_info {
    min-width: 673px;
}

ul.multi-column-dropdown li {
    list-style-type: none;
    line-height: 2.5em;
}

ul.multi-column-dropdown li a {
    text-decoration: none;
    font-size: 14px;
    color: #545454;
    letter-spacing: 1px;
}

ul.multi-column-dropdown li a:hover {
    color: #F45C5D;
}

.dropdown-menu>.active>a,
.dropdown-menu>.active>a:hover,
.dropdown-menu>.active>a:focus {
    background-color: #F45C5D;
}

.dropdown-item {
    font-size: 15px;
}

.dropdown-item.active,
.dropdown-item:active {
    background-color: #0879c9;
}

/*-- //navigation-dropdown --*/

/*-- //navigation --*/

/*-- //header-bottom --*/

/*-- banner --*/

/*-- carousel-slider --*/

.carousel-item.item1 {
    background: url(../images/27.jpg) no-repeat center;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
}

.carousel-item.item2 {
    background: url(../images/27.jpg) no-repeat center;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
}

.carousel-item.item3 {
    background: url(../images/27.jpg) no-repeat center;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
}

.carousel-item.item4 {
    background: url(../images/27.jpg) no-repeat center;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
}

.carousel-item.item4,
.carousel-item.item3,
.carousel-item.item2,
.carousel-item.item1 {
    min-height: 500px;
   background-position-y: top;
}

.w3l-space-banner {
    padding-top: 9em;
}

.carousel-caption {
    background: rgba(16, 16, 16, 0.27);
    text-align: left;
    position: inherit;
    box-shadow: 0px 2px 2px 2px rgba(2, 2, 2, 0.43);
}

.carousel-caption h2,
.carousel-caption h3 {
    font-size: 60px;
    letter-spacing: 4px;
    text-transform: uppercase;
    text-shadow: 3px 8px 2px rgb(12, 12, 12);
}

.carousel-caption h2 span,
.carousel-caption h3 span {
    font-weight: 800;
    color: #F45C5D;
}

.carousel-caption p {
    letter-spacing: 5px;
    font-size: 24px;
    color: #fff;
    text-shadow: 3px 5px 2px rgb(12, 12, 12);
}

.carousel-caption p span {
    font-size: 40px;
    letter-spacing: 0px;
    font-weight: 600;
}

.carousel-indicators {
    bottom: 4%;
}

.carousel-indicators li {
    cursor: pointer;
}

/*-- carousel-slider --*/

/*-- banner-button --*/

.button2 {
    display: inline-block;
    background: #0879c9;
    border-radius: 4px;
    color: #fff;
    letter-spacing: 2px;
    padding: 11px 27px;
}

.button2:hover,
.button2:focus {
    background: #F45C5D;
    color: #fff;
}

/*-- //banner-button --*/

/*-- //banner --*/

/*-- top products --*/

/*-- heading style --*/

h3.tittle-w3l {
    color: #000;
    font-size: 38px;
    letter-spacing: 1px;
    text-shadow: 3px 3px 3px rgba(0, 0, 0, 0.19);
}

h3.tittle-w3l span {
    color: #0879c9;
    font-size: 50px;
    letter-spacing: 0;
}

/*-- //heading style --*/

/*-- cart --*/

.snipcart-details {
    width: 77%;
    margin: 0 auto;
}

.btn-danger.my-cart-btn:focus {
    outline: none;
}

.snipcart-details input.button {
    font-size: 13px;
    color: #fff;
    background: #000000;
    text-decoration: none;
    border: none;
    border-radius: 0;
    width: 100%;
    text-transform: uppercase;
    padding: 13px;
    outline: none;
    letter-spacing: 1px;
    box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.45);
    font-weight: 600;
    cursor: pointer;
    border-radius: 4px;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}

.snipcart-details input.button:hover {
    background: #ff0000;
}

.product_list_header input.button {
    color: #fff;
    font-size: 14px;
    outline: none;
    text-transform: capitalize;
    padding: .5em 2.5em .5em 1em;
    border: 1px solid #fe9126;
    margin: .35em 0 0;
    background: url(../images/cart.png) no-repeat 116px 9px;
}

#PPminicarts form {
    width: 590px !important;
    padding: 10px 20px 40px !important;
    max-height: 450px !important;
}

#PPminicarts ul {
    width: 548px !important;
}

#PPminicarts .minicarts-item a {
    color: #212121 !important;
    font-size: 1em;
    display: block;
    margin-bottom: .5em;
    text-transform: capitalize;
}

#PPminicarts .minicarts-item {
    min-height: 60px !important;
}

#PPminicarts .minicarts-attributes li {
    color: #999;
}

#PPminicarts .minicarts-remove {
    background: #3399cc !important;
    border: 1px solid #3399cc !important;
    opacity: 1 !important;
    outline: none;
}

#PPminicarts .minicarts-submit {
    color: #fff !important;
    background: #0879c9 !important;
    padding: 0 10px !important;
    font-size: 15px;
    letter-spacing: 1px;
    text-decoration: none;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
    transition: 0.5s all;
    bottom: -25px !important;
    right: 0 !important;
    border: 1px solid #0879c9 !important;
    border-radius: 0px !important;
    text-shadow: none !important;
}

#PPminicarts .minicarts-subtotal {
    padding-left: 25px !important;
    bottom: -17px !important;
}

#PPminicarts {
    left: 44% !important;
}

.minicarts-showing #PPminicarts form {
    overflow-x: hidden;
    overflow-y: auto;
}

#PPminicarts .minicarts-footer {
    position: relative;
    width: 80%;
}

.men-pro-item {
    position: relative;
}

.men-thumb-item {
    position: relative;
}

#PPminicarts .minicarts-submit img {
    vertical-align: middle;
    padding: 4px 0 0 2px;
    display: none;
}

/*-- //cart --*/

/*-- effect on products --*/

.men-cart-pro {
    bottom: 0;
    left: 0;
    margin: auto;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    right: 0;
    text-align: center;
    top: 0;
    transition: all 0.5s ease-out 0s;
    visibility: hidden;
}

.product-men:nth-child(3) .product-new-top {
    background: #FFC107;
}

.product-men:nth-child(4) .product-new-top {
    background: #219ff3;
}

.product-new-top {
    background: #ff2978;
    color: #fff;
    position: absolute;
    top: 0;
    left: 0;
    font-size: 13px;
    text-align: center;
    padding: 4px 10px;
    border-radius: 4px;
}

.inner-men-cart-pro {
    height: 100%;
    position: relative;
    width: 100%;
    transition: all 0.5s ease-out 0s;
}

.inner-men-cart-pro ul {
    left: 0;
    margin: -60px 0 0;
    padding: 0;
    position: absolute;
    top: 45%;
    width: 100%;
    transition: all 0.5s ease-out 0s;
}

.inner-men-cart-pro .link-product-add-cart {
    width: 100%;
    bottom: -40px;
    left: 0;
    position: absolute;
    transition: all 0.5s ease-out 0s;
}

.link-product-add-cart {
    background: hsla(205, 92%, 41%, 0.72);
    color: #fff;
    display: inline-block;
    height: 37px;
    font-size: 15px;
    letter-spacing: 1px;
    line-height: 34px;
    border-radius: 4px;
}

.inner-men-cart-pro>ul>li {
    display: inline-block;
}

.inner-men-cart-pro ul li a {
    color: #fff;
    transition: all 0.5s ease-out 0s;
    display: block;
    width: 40px;
    height: 40px;
    text-align: center;
}

.men-thumb-item:hover {
    cursor: pointer;
}

.men-thumb-item:hover::before {
    opacity: 1;
    visibility: visible;
}

.men-thumb-item:hover .men-cart-pro {
    opacity: 1;
    visibility: visible;
}

.men-thumb-item:hover .inner-men-cart-pro ul {
    margin: 20px 0 0;
}

.inner-men-cart-pro ul li a:hover {
    background: #ffc229 none repeat scroll 0 0;
}

.inner-men-cart-pro .link-product-add-cart {
    width: 51%;
    top: 0;
    left: 24%;
    margin: 0 auto;
    position: absolute;
    transition: all 0.5s ease-out 0s;
}

.men-thumb-item:hover .inner-men-cart-pro .link-product-add-cart {
    top: 81%;
}

.link-product-add-cart:hover {
    background: rgba(0, 0, 0, 0.56);
    color: #fff;
}

/*-- //effect on products --*/

/*-- product left --*/

.ads-list {
    width: 33.333%;
    float: left;
}

.select-box {
    background: rgba(255, 76, 76, 0.66);
    padding: 30px 30px;
    margin: 40px 0;
    border-radius: 6px;
    -webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    -ms-border-radius: 6px;
    -o-border-radius: 6px;
}

.ads-list label {
    display: block;
    font-size: 14px;
    font-weight: 400;
    color: #000;
    margin-bottom: 6px;
}

.ads-list select {
    width: 70%;
    outline: none;
    color: #000;
    font-size: 15px;
    border: 1px solid #eee;
    padding: 7px 8px;
}

.btn-group.bootstrap-select.show-tick button {
    padding: 8px 10px;
}

.bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
    width: 260px;
}

#custom-search-input {
    padding: 3px;
    border: solid 1px #D1E0EE;
    border-radius: 0;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    -ms-border-radius: 0px;
    -o-border-radius: 0px;
    background-color: #fff;
    width: 80%;
    color: #000;
}

#custom-search-input input {
    border: 0;
    box-shadow: none;
}

#custom-search-input button {
    margin: 2px 0 0 0;
    background: none;
    box-shadow: none;
    border: 0;
    color: #666666;
    padding: 0 8px 0 10px;
    border-left: solid 1px #ccc;
}

#custom-search-input button:hover {
    border: 0;
    box-shadow: none;
    border-left: solid 1px #ccc;
}

#custom-search-input .glyphicon-search {
    font-size: 23px;
}

.input-lg {
    height: 29px;
    padding: 0px 10px;
    font-size: 15px;
    line-height: 1.3333333;
    border-radius: 0;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    -ms-border-radius: 0px;
    -o-border-radius: 0px;
}

#custom-search-input .glyphicon-search {
    font-size: 16px;
}

.btn-default {
    border-color: #D1E0EE;
}

.btn {
    display: inline-block;
}

.search-hotel input[type="search"] {
    background: #fff;
    border: none;
    width: 78%;
    outline: none;
    padding: 11px 10px 10px 10px;
    font-size: 13px;
    color: #c4c4c4;
}

.search-hotel form input[type="submit"] {
    background: url(../images/search.png) no-repeat 13px 11px #0879c9;
    width: 44px;
    height: 39px;
    border: none;
    padding: 0;
    margin-top: 0;
	cursor: pointer;
}
.search-hotel form input[type="submit"]:hover {
    background-color: #000;
}

.search-grid-left {
    padding: 15px;
    background: #f5f4f0;
}

h3.agileits-sear-head {
    color: #F45C5D;
    font-size: 21px;
}

.side-bar {
    background-color: #F9F9F9;
    height: fit-content;
}

/*-- price --*/

.w3l-range ul li {
    display: block;
}

.w3l-range ul li a {
    font-size: 14px;
    color: #000;
    letter-spacing: 1px;
}

/*-- check input --*/

.left-side ul li {
    display: inline-block;
    width: 100%;
    margin-bottom: 6px;
}

input.checked {
    display: inline-block;
    margin: 0;
    cursor: pointer;
}

.left-side ul li span {
    font-size: 13px;
    color: #000;
    letter-spacing: 1px;
    margin-left: 3px;
    vertical-align: top;
}

/*-- //check input --*/

/*-- customer --*/

.customer-rev ul li i {
    color: #FFC107;
}

.customer-rev ul li {
    list-style: none;
}

.customer-rev ul li a span {
    color: #000;
    font-weight: normal;
    font-size: 14px;
    margin-left: 8px;
}

/*-- //customer --*/

/*-- best seller (scroll) --*/

.f-grid a {
    color: #0879c9;
    font-size: 15px;
}

a.price-mar {
    color: #ef0e0e;
    display: block;
}
/*-- scroll --*/
.scroll {
    position: absolute;
}

.box-scroll {
	min-height: 25em;
    position: relative;
    overflow: hidden;
}
/*-- //scroll --*/
/*-- //best seller (scroll) --*/

/*-- //product left --*/

/*-- product right --*/

/*-- special effect --*/

.product-sec1 {
    box-shadow: 0px 0px 15px 0px #D6D6D6;
}

h3.heading-tittle {
    color: #000;
    font-size: 32px;
    letter-spacing: 1px;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.19);
}

.item-info-product h4 a {
    color: #000;
    font-size: 17px;
    letter-spacing: 1px;
}

span.item_price {
    font-size: 18px;
    color: #d60404;
}

.info-product-price del {
    font-weight: 300;
    margin-left: 13px;
    font-size: 15px;
}

.product-sec1.product-sec2 {
    background: #5ce0f4;
    position: relative;
}

h3.effect-bg {
    color: #fff;
    font-size: 45px;
    letter-spacing: 3px;
    font-weight: 600;
    margin-top: 2.2em;
}

p.w3l-nut-middle {
    position: absolute;
    right: 47%;
    bottom: 42%;
    font-size: 31px;
    font-weight: 800;
    color: rgba(10, 10, 10, 0.38);
    transform: rotate(-64deg);
    -ms-transform: rotate(-64deg);
    -webkit-transform: rotate(-64deg);
}

.agile_inner_drop_nav_info.p-4 h5 {
    color: #0879c9;
    letter-spacing: 1px;
}

/*-- //special effect --*/

/*-- search --*/

#agileinfo-nav_search {
    outline: none;
    border: none;
    color: #000;
    font-size: 14px;
    background: transparent;
    padding: 15px 10px;
    width: 100%;
    letter-spacing: 1px;
    cursor: pointer;
}

/*-- //search --*/

/*-- //product right --*/

/*-- middle section --*/

.join-w3l1 {
    background: url(../images/) no-repeat center fixed;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    text-align: center;
}

.join-agile {
    background: #efedee;
    box-shadow: 0px 0px 5px 2px rgba(0, 0, 0, 0.04);
    border-radius: 4px;
}

.offer-name {
    margin-top: 4em;
}

.offer-name h6 {
    color: #F44336;
    font-size: 18px;
}

.offer-name h4 {
    font-size: 27px;
}

/*-- //middle section --*/

/*-- footer --*/

p.footer-main {
    color: #383737;
    font-size: 15px;
    margin-bottom: 40px;
}

h2.footer-top-head-w3l {
    font-size: 22px;
}

.icon-fot {
    text-align: center;
}

.icon-fot i {
    font-size: 41px;
    line-height: 1.4;
    color: #0879c9;
}

.text-form-footer {
    padding: 0;
}

.text-form-footer h3 {
    color: #000;
    font-size: 27px;
    letter-spacing: 2px;
    font-weight: 600;
    line-height: 1.3;
}

.footer-info h3 {
    font-size: 22px;
    letter-spacing: 1px;
}

.footer-grids ul li {
    display: block;
    font-size: 14px;
    color: #bdbdbd;
}

.footer-grids ul li a {
    color: #bdbdbd;
    -webkit-transition: .5s all;
    -moz-transition: .5s all;
    -o-transition: .5s all;
    -ms-transition: .5s all;
    transition: .5s all;
}

.footer-grids ul li a:hover {
    color: #F45C5D;
    -webkit-transition: .5s all;
    -moz-transition: .5s all;
    -o-transition: .5s all;
    -ms-transition: .5s all;
    transition: .5s all;
}

.footer-grids ul li i {
    color: #f45c5d;
    padding-right: 10px;
}

.footer-grids.agile-secomk {
    margin-top: 34px;
}

.w3l-middlefooter-sec {
    background: #333;
}

/*-- social-icons --*/

.footer-grids.w3l-socialmk ul li {
    display: inline-block;
    margin: 0;
}

.footer-grids.w3l-socialmk ul li:nth-child(2) {
    margin: 0 10px;
}

.social_icons {
    text-align: center;
}

.social a {
    position: relative;
    display: inline-block;
    width: 34px;
    height: 34px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -o-border-radius: 50%;
    -ms-border-radius: 50%;
    text-align: center;
}

.social .fb {
    background: #6788ce;
}

.social .tw {
    background: #00ACEE;
}

.social .gp {
    background: #DD4B39;
}

.social .pin {
    background: #fe4445;
}

.social .db {
    background: #f85993;
}

.social .rss {
    background: #ff9845;
}

.social .lin {
    background: #3a9bdc;
}

.social ul li a i {
    color: #fff;
    line-height: 34px;
    font-size: 1em;
    width: 34px;
    height: 34px;
    border-radius: 50%;
    padding: 0;
}

/*-- //Social-Icons --*/

/*-- newsletter --*/

.w3l-agileits input[type="email"] {
    display: inline-block;
    background: #f5f5f5;
    border: none;
    width: 72%;
    padding: 10px;
    color: #000;
    letter-spacing: 1px;
}

.w3l-agileits input[type="submit"] {
    outline: none;
    color: #FFFFFF;
    padding: 10px;
    letter-spacing: 1px;
    width: 18%;
    background: #f45c5d;
    border: none;
	cursor: pointer;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
    transition: 0.5s all;
}

.w3l-agileits input[type="submit"]:hover {
    background: #0879c9;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
    transition: 0.5s all;
}

/*-- //newsletter --*/

/*-- footer brands --*/

.sub-some h5 {
    font-size: 19px;
    color: #696969;
    letter-spacing: 1px;
}

.sub-some p {
    font-size: 13px;
    letter-spacing: 0px;
}

.sub-some ul li {
    display: inline-block;
}

.sub-some ul li a {
    font-size: 13px;
    color: #999;
}

/*-- //footer brands --*/

/*-- //footer --*/

/*-- copyright --*/



.copy-right p {
    letter-spacing: 2px;
    font-size: 15px;
}

.copy-right p a {
    color: #fff;
}

.copy-right p a:hover {
    color: #000;
}

/*-- //copyright --*/

/*-- bottom-to-top --*/

#toTop {
    display: none;
    text-decoration: none;
    position: fixed;
    bottom: 24px;
    right: 1%;
    overflow: hidden;
    z-index: 999;
    width: 64px;
    height: 64px;
    border: none;
    text-indent: 100%;
    background: url("../images/move-up.png") no-repeat 0px 0px;
}

#toTopHover {
    width: 64px;
    height: 64px;
    display: block;
    overflow: hidden;
    float: right;
    opacity: 0;
    -moz-opacity: 0;
    filter: alpha(opacity=0);
}

/*-- //bottom-to-top --*/

/*-- inner pages --*/

.page-head_agile_info_w3l {
    background: url(../images/b1.jpg) no-repeat center;
    background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    -moz-background-size: cover;
    min-height: 300px;
}

.page-head_agile_info_w3l-2 {
    background: url(../images/b3.jpg) no-repeat center;
    background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    -moz-background-size: cover;
    min-height: 300px;
}

/*-- page details --*/

ul.w3_short li {
    display: inline-block;
    text-transform: uppercase;
    color: #000;
    font-size: 0.9em;
    font-weight: 600;
    letter-spacing: 1px;
}

ul.w3_short li a {
    color: #F45C5D;
    text-decoration: none;
}

.services-breadcrumb {
    padding: 0;
    background: #eee;
    text-align: center;
}

.services-breadcrumb ul li i {
    padding: 0 1em;
}

ul.w3_short {
    text-align: left;
    padding: 16px 0;
}

/*-- //page details --*/

/*-- faq-page --*/

h3.w3-head {
    color: #f45c5d;
    font-size: 28px;
    letter-spacing: 1px;
}

.faq-w3agile .faq li {
    list-style-type: decimal;
}

.faq-w3agile .faq>li>a {
    color: #025061;
    font-size: 17px;
    letter-spacing: 0.5px;
}

li.subitem1 p {
    line-height: 25px;
    font-size: 14px;
    letter-spacing: 0.5px;
    color: #000;
}

.faq-w3agile .faq li li.subitem1 {
    display: block;
    margin-top: 1em;
}

/*-- //faq-page --*/

/*-- help page --*/

.wthree-help textarea {
    font-size: 16px;
    color: #000;
    width: 90%;
    border: none;
    padding: 16px;
    border-bottom: solid 1px #0879c9;
    height: 150px;
    outline: none;
    resize: none;
}

.wthree-help form input[type="submit"] {
    font-size: 16px;
    color: #fff;
    background: #F45C5D;
    outline: none;
    border: none;
    cursor: pointer;
    padding: 12px 45px;
    -webkit-appearance: none;
    -webkit-transition: .5s all;
    -moz-transition: .5s all;
    transition: .5s all;
    margin-top: 20px;
}

.wthree-help form input[type="submit"]:hover {
    background: #0879c9;
    -webkit-transform: translateY(8px);
    -ms-transform: translateY(8px);
    -o-transform: translateY(8px);
    -ms-transform: translateY(8px);
    transform: translateY(8px);
}

.wthree-help h5 {
    font-size: 25px;
    color: #000;
}

.wthree-help a {
    color: #fff;
    padding: 10px 20px;
    background: #0879c9;
}

/*-- //help page --*/

/*-- terms-page --*/

.terms h6 {
    font-size: 20px;
    color: #000;
    letter-spacing: 1px;
}

.terms p {
    color: #777;
    font-size: 15px;
    letter-spacing: 0px;
}

.terms ol li {
    color: #777;
    font-size: 15px;
    line-height: 26px;
}

/*-- //terms-page --*/

/*-- product page --*/

.w3l-rightpro .product-men {
    margin: 0;
}

/*-- //product page --*/

/*-- single-page --*/

.single-right-left h3 {
    font-size: 25px;
    color: #000;
}

.single-right-left p label {
    color: #000;
}

.single-right-left del {
    font-size: 15px;
    color: #999;
}

.single-infoagile ul li {
    display: block;
    font-size: 14px;
}

.product-single-w3l {
    border-top: 1px solid #0879c9;
}

.product-single-w3l p i {
    color: #0879c9;
    font-size: 24px;
}

.product-single-w3l p {
    color: #000;
    letter-spacing: 0.5px;
}

.product-single-w3l ul li {
    list-style: inside;
    font-size: 14px;
    line-height: 1.7;
}

.occasion-cart .snipcart-details {
    width: 38%;
    margin: 0;
}

/*-- //single-page --*/

/*-- checkout --*/

.checkout-right h4 {
    color: #F45C5D;
    font-size: 26px;
    letter-spacing: 1px;
}

table.timetable_sub {
    width: 100%;
    margin: 0 auto;
}

.timetable_sub th {
    background: #000;
    color: #fff;
    font-size: 16px;
    border-right: 1px solid #ded2d2;
    text-align: center;
    padding: 12px 0;
    letter-spacing: 1px;
    font-weight: normal;
}

.timetable_sub td {
    text-align: center;
    padding: 7px;
    font-size: 14px;
    color: #212121;
}

.timetable_sub td {
    border: 1px solid #CDCDCD;
}

td.invert-image a img {
    width: 30%;
    margin: 0 auto;
}

.rem {
    position: relative;
}

.close1,
.close2,
.close3 {
    background: url('../images/close_1.png') no-repeat 0px 0px;
    cursor: pointer;
    width: 28px;
    height: 28px;
    position: absolute;
    right: 15px;
    top: -13px;
    -webkit-transition: color 0.2s ease-in-out;
    -moz-transition: color 0.2s ease-in-out;
    -o-transition: color 0.2s ease-in-out;
    transition: color 0.2s ease-in-out;
}

/*-- quantity-starts --*/

.value-minus,
.value-plus {
    height: 40px;
    line-height: 24px;
    width: 40px;
    margin-right: 3px;
    display: inline-block;
    cursor: pointer;
    position: relative;
    font-size: 18px;
    color: #fff;
    text-align: center;
    -webkit-user-select: none;
    -moz-user-select: none;
    border: 1px solid #b2b2b2;
    vertical-align: bottom;
}

.quantity-select .entry.value-minus:before,
.quantity-select .entry.value-plus:before {
    content: "";
    width: 13px;
    height: 2px;
    background: #000;
    left: 50%;
    margin-left: -7px;
    top: 50%;
    margin-top: -0.5px;
    position: absolute;
}

.quantity-select .entry.value-plus:after {
    content: "";
    height: 13px;
    width: 2px;
    background: #000;
    left: 50%;
    margin-left: -1.4px;
    top: 50%;
    margin-top: -6.2px;
    position: absolute;
}

.value {
    cursor: default;
    width: 40px;
    height: 40px;
    padding: 8px 0px;
    color: #A9A9A9;
    line-height: 24px;
    border: 1px solid #E5E5E5;
    background-color: #E5E5E5;
    text-align: center;
    display: inline-block;
    margin-right: 3px;
}

.quantity-select .entry.value-minus:hover,
.quantity-select .entry.value-plus:hover {
    background: #E5E5E5;
}

.quantity-select .entry.value-minus {
    margin-left: 0;
}

/*-- //quantity-end --*/

/*-- checkout form --*/

.address_form_agile h4 {
    color: #0879c9;
    font-size: 24px;
    letter-spacing: 1px;
}

.information-wrapper input,
.information-wrapper select {
    width: 100%;
    font-size: 15px;
    letter-spacing: 1px;
    padding: 13px 10px;
    margin-bottom: 20px;
    outline: none;
    border: none;
    border-bottom: 1px solid #F45C5D;
    -webkit-box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, 0.31);
    -moz-box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, 0.31);
    box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, 0.31);
}

button.submit.check_out {
    padding: 12px 25px;
    letter-spacing: 1px;
    background: #0879c9;
    font-size: 16px;
    color: #fff;
    border: none;
    outline: none;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}

button.submit.check_out:hover {
    background: #F45C5D;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}

/*-- //checkout form --*/

/*-- payment button --*/

.checkout-right-basket {
    margin-top: 20px;
}

.checkout-right-basket a {
    padding: 12px 25px;
    color: #fff;
    font-size: 16px;
    background: #000;
    text-decoration: none;
    letter-spacing: 1px;
    display: inline-block;
}

.checkout-right-basket a:hover {
    background: #F45C5D;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}

.checkout-right-basket a span {
    margin-left: 7px;
    color: #0879c9;
    font-size: 20px;
}

/*-- //payment button --*/

/*-- Payment page --*/

/* .agileits_w3layouts_tab2 input[type="email"],
.agileits_w3layouts_tab2 input[type="password"],
.creditly-wrapper .form-control {
    display: block;
    width: 100%;
    padding: 18px 10px;
    font-size: 14px;
    color: #212121;
    background: #fff;
    border: 1px solid #e7e7e7;
    margin-bottom: 20px;
    outline: none;
}

.agileits_w3layouts_tab2 input[type="email"]:focus,
.agileits_w3layouts_tab2 input[type="password"]:focus,
.creditly-wrapper .form-control:focus {
    border-color: #66afe9;
    outline: 0;
} */

.agileits_w3layouts_tab2 input[type="submit"] {
    display: block;
    position: relative;
    padding: 6px 50px 11px;
    letter-spacing: 3px;
    background: #0879c9;
    font-size: 1.5em;
    color: #fff;
    border: 1px solid #0879c9;
    outline: none;
    text-transform: uppercase;
    cursor: pointer;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}

.agileits_w3layouts_tab2 input[type="submit"]:hover {
    background: #fff;
    color: #212121;
    border: 1px solid #e7e7e7;
}

.agileinfo_main_grid_left_grid h3 {
    font-size: 1.3em;
    color: #fff;
}

.agileinfo_main_grid_left_grid ul {
    margin-top: 1.5em;
}

.agileinfo_main_grid_left_grid ul li {
    display: inline-block;
    color: #fff;
    font-weight: bold;
    font-size: 2em;
    vertical-align: top;
}

.agileinfo_main_grid_left_grid ul li span {
    display: block;
    font-size: .5em;
    color: #999;
}

.agileinfo_main_grid_left_grid ul li:first-child {
    width: 70%;
    border-right: 1px solid #999;
}

.agileinfo_main_grid_left_grid ul li:last-child {
    padding-left: 1em;
    text-align: right;
}

.agile_amount {
    padding: 1em 2em;
    background: #f71926;
}

.agile_amount h3 {
    font-size: 1.3em;
    color: #fff;
}

.agile_amount h4 {
    font-size: 2em;
    color: #fff;
    font-weight: bold;
}

.agile_amount p {
    font-size: 1em;
    color: #1adeed;
    line-height: 1.8em;
}

img.pp-img {
    width: 65%;
}

.tab-grid p {
    color: #8B8B8B;
    font-size: 0.95em;
    line-height: 1.8em;
    font-weight: 400;
    margin: 10px 0;
}

a.btn.btn-primary {
    background-color: #3a5795;
    font-family: 'Open Sans', sans-serif;
    color: #fff;
    border: none;
}

.vertical_post h5 {
    color: #F45C5D;
    font-size: 20px;
    margin: 0 0 18px 0;
    letter-spacing: 1px;
    font-weight: 600;
}

label.anim {
    letter-spacing: 1px;
}

.swit-radio label {
    font-size: 16px;
    color: #696969;
    padding: 0;
    font-weight: 100;
    margin-bottom: 12px;
}

input[type="radio"],
input[type="checkbox"] {
    margin: 4px 4px 0 0;
}

.swit-radio {
    margin-bottom: 25px;
}

.radio_one:first-child {
    margin-left: 0;
    margin: 0;
}

.radio_one {
    padding-left: 22px;
    line-height: 28px;
    color: #404040;
    cursor: pointer;
}

.radio_one {
    position: relative;
    display: inline-block;
    margin-left: 15px;
}

.section_room_pay select {
    padding: 6px 10px;
    border: none;
    width: 100%;
    background: none;
    border: 1px solid #E6E4E4;
    color: #999;
    outline: none;
    font-size: 16px;
    margin-bottom: 0;
    background-size: 4% !important;
	cursor: pointer;
}

select.form-control.option-w3ls {
    width: 100%;
    padding: 1em 1em 1em 1em;
    font-size: 0.8em;
    margin: 0.5em 0;
    outline: none;
    color: #212121;
    border: none;
    border: 1px solid #ccc;
    letter-spacing: 1px;
    text-align: left;
}

.checkout-right-basket span {
    margin-left: 1em;
}

.vertical_post form input[type="submit"],
.number-paymk input[type="submit"] {
    background: #0879c9;
    color: #FFFFFF;
    text-align: center;
    padding: 11px 19px;
    border: none;
    font-size: 16px;
    letter-spacing: 1px;
    outline: none;
    cursor: pointer;
    font-weight: 600;
    margin-top: 30px;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}

.vertical_post form input[type="submit"]:hover,
.number-paymk input[type="submit"]:hover {
    background: #F45C5D;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}

.form-control {
    border-radius: 0;
}

/*-- //Payment page --*/

/*-- about page --*/

/*-- welcome --*/

h3.title {
    color: #272525;
    font-size: 45px;
    text-align: center;
    font-style: italic;
    margin-bottom: 50px;
    position: relative;
}

h3.title:before {
    content: "";
    background: #ff9f1c;
    position: absolute;
    width: 110px;
    height: 2px;
    bottom: -25%;
    left: 45%;
}

.welcome-right {
    position: relative;
}

.welcome-left h3 {
    color: #F45C5D;
    font-size: 36px;
    letter-spacing: 1px;
}

.welcome-left h4 {
    color: #464646;
    font-size: 17px;
    line-height: 1.8;
    letter-spacing: 1px;
}

.readmore-w3-agileits a {
    border: 1px solid #fff;
    background: #0879c9;
    display: inline-block;
    text-decoration: none;
    color: #fff;
    font-size: 15px;
    letter-spacing: 1px;
    padding: 12px 30px;
    margin-top: 2em;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}

.readmore-w3-agileits a:hover {
    color: #fff;
    background: #000;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}

/*-- //welcome --*/

/*-- testimonials --*/

.testimonials {
    background: url(../images/bg2.jpg) no-repeat center fixed;
    background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    -moz-background-size: cover;
}

.med-testi {
    position: relative;
    background: #fff;
    -webkit-box-shadow: 5px 10px 10px 0px rgba(10, 10, 10, 0.48);
    -moz-box-shadow: 5px 10px 10px 0px rgba(10, 10, 10, 0.48);
    box-shadow: 5px 10px 10px 0px rgba(10, 10, 10, 0.48);
}

div#testimonials h4.m-title {
    font-size: 2.8em;
}

.test-tooltip:before {
    content: '';
    position: absolute;
    left: 10%;
    bottom: -11.5%;
    border-left: 14px solid transparent;
    border-right: 14px solid transparent;
    border-bottom: 18px solid #f45c5d;
    transform: rotate(180deg);
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
}

.med-testi-txt h4 {
    font-size: 20px;
    color: #fff;
    letter-spacing: 1px;
}

.med-testi-txt p {
    color: #fff7f7;
}

/*-- //testimonials --*/

/*-- //about page --*/

/*-- contact page  --*/

.con-ic i {
    font-size: 22px;
    color: #f45c80;
    width: 80px;
    height: 80px;
    line-height: 3.5;
    box-shadow: 2px 1px 4px #00000061;
}

.contact-grid1 h4 {
    font-size: 24px;
    color: #0879c9;
    letter-spacing: 1px;
}

.contact-grid1 p a {
    color: #999;
    text-decoration: none;
}

.contact-grid1 p a:hover {
    color: #000;
}

.contact-grid1 p label {
    display: block;
    font-weight: normal;
}

.contact-form1 h4,
.contact-me h4 {
    font-size: 1.2em;
    color: #3e3a3a;
    margin: 0 0 .5em;
}

.contact-form1 input[type="text"],
.contact-form1 input[type="email"],
.contact-me textarea {
    outline: none;
    padding: 10px;
    border: 1px solid #DFDFDF;
    background: #EAEAEA;
    font-size: 14px;
    color: #000;
    width: 100%;
}

.contact-me textarea {
    min-height: 300px;
}

.contact-me textarea:focus {
    background: #EAEAEA;
}

.contact-grids1 input[type="submit"] {
    outline: none;
    padding: 12px 0;
    border: none;
    background: #0879c9;
    font-size: 1em;
    color: #fff;
    width: 100%;
    margin: 1.5em 0 0 0em;
	cursor: pointer;
}

.contact-grids1 input[type="submit"]:hover {
    background: #000000;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -o-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -ms-transition: 0.5s all;
}

.map iframe {
    width: 100%;
    min-height: 400px;
    border: none;
	display: inherit;
}

/*-- placeholder-color 

::-webkit-input-placeholder {
    color: #fff;
}

:-moz-placeholder {
    /* Firefox 18- 
    color: #fff;
}

::-moz-placeholder {
    /* Firefox 19+ 
    color: #fff;
}

:-ms-input-placeholder {
    color: #fff;
}

/*-- //placeholder-color --*/

/*-- //contact page --*/

/*--responsive--*/

@media(max-width: 1680px) {}

@media(max-width: 1600px) {}

@media(max-width: 1440px) {}

@media(max-width: 1366px) {
    .carousel-control-prev,
    .carousel-control-next {
        width: 4%;
    }
}

@media(max-width: 1280px) {
    .logo_agile {
        padding: 26px 0 21px 42px;
    }
    .logo_agile h1 a img {
        left: -34%;
    }
}

@media(max-width: 1080px) {
    .header-right ul li {
        font-size: 12px;
    }
    .header-most-top p {
        font-size: 14px;
    }
    .logo_agile {
        padding: 24px 0 21px 35px;
    }
    .logo_agile h1 a {
        font-size: 36px;
    }
    .logo_agile h1 a img {
        left: -34%;
        width: 40%;
        top: -14px;
    }
    .navbar-light .navbar-nav .nav-link {
        font-size: 13px;
    }
    #agileinfo-nav_search {
        font-size: 13px;
        padding: 11px 10px;
    }
    .agile_inner_drop_nav_info {
        min-width: 564px;
    }
    .carousel-caption p {
        letter-spacing: 3px;
        font-size: 20px;
    }
    .carousel-caption p span {
        font-size: 36px;
    }
    .carousel-caption h2,
    .carousel-caption h3 {
        font-size: 53px;
    }
    .w3l-space-banner {
        padding-top: 5em;
    }
    .carousel-item.item4,
    .carousel-item.item3,
    .carousel-item.item2,
    .carousel-item.item1 {
        min-height: 500px;
    }
    .product-new-top {
        font-size: 12px;
        padding: 3px 8px;
    }
    h3.effect-bg {
        font-size: 40px;
        margin-top: 2.5em;
    }
    p.w3l-nut-middle {
        right: 43%;
        bottom: 44%;
        font-size: 28px;
    }
    .search-hotel form input[type="submit"] {
        width: 38px;
    }
    h3.effect-bg {
        font-size: 36px;
        margin-top: 2em;
    }
    p.w3l-nut-middle {
        right: 46%;
        bottom: 40%;
        font-size: 25px;
    }
    .left-side ul li span {
        font-size: 12px;
        margin-left: 0px;
    }
    .f-grid a {
        font-size: 14px;
    }
    .bg-right-nut img {
        width: 100%;
    }
    .offer-name h6 {
        font-size: 16px;
    }
    .offer-name h4 {
        font-size: 23px;
    }
    .offer-name h4 {
        font-size: 23px;
    }
    .offer-name p {
        font-size: 13px;
    }
    .offer-name {
        margin-top: 3.2em;
    }
    .w3l-agileits input[type="submit"] {
        width: 22%;
    }
    /* faqs */
    .faq-w3agile .faq>li>a {
        font-size: 16px;
    }
    /* //faqs */
    .single-right-left h3 {
        font-size: 23px;
    }
}

@media(max-width: 1050px) {
    .logo_agile h1 a img {
        left: -31%;
        width: 34%;
        top: -11px;
    }
    .logo_agile {
        padding: 20px 0 21px 46px;
    }
    .logo_agile h1 a {
        font-size: 34px;
    }
    .agile_inner_drop_nav_info {
        min-width: 530px;
    }
    .page-head_agile_info_w3l {
        min-height: 250px;
    }
}

@media(max-width: 1024px) {
    .text-form-footer h3 {
        font-size: 25px;
        letter-spacing: 1px;
    }
    p {
        font-size: 14px;
    }
}

@media(max-width: 991px) {
    .logo_agile {
        padding: 20px 0 21px;
    }
    .logo_agile h1 a {
        font-size: 31px;
    }
    .logo_agile h1 a img {
        left: -37%;
        width: 41%;
        top: -11px;
    }
    .navbar-light .navbar-nav .nav-link {
        font-size: 15px;
    }
    .navbar-light .navbar-toggler {
        border-color: #0879c9;
        border-radius: 0;
    }
    .carousel-caption p {
        letter-spacing: 3px;
        font-size: 18px;
    }
    .carousel-caption p span {
        font-size: 28px;
    }
    .carousel-caption h2,
    .carousel-caption h3 {
        font-size: 48px;
    }
    .button2 {
        padding: 11px 20px;
        font-size: 14px;
    }
    .carousel-item.item4,
    .carousel-item.item3,
    .carousel-item.item2,
    .carousel-item.item1 {
        min-height: 500px;
    }
    h3.tittle-w3l {
        font-size: 36px;
    }
    h3.tittle-w3l span {
        font-size: 46px
    }
    h3.heading-tittle {
        font-size: 30px;
    }
    .f-grid a {
        font-size: 15px;
    }
    .offer-name h6 {
        font-size: 18px;
    }
    .offer-name h4 {
        font-size: 28px;
    }
    .offer-name {
        margin-top: 6em;
    }
    p.footer-main {
        font-size: 14px;
    }
    .text-form-footer h3 {
        font-size: 22px;
    }
    .icon-fot i {
        font-size: 36px;
    }
    .footer-grids {
        padding: 0 .5em;
    }
    .w3l-agileits input[type="submit"] {
        width: 25%;
    }
    .footer-grids ul li i {
        padding-right: 5px;
    }
    .header-right ul li {
        font-size: 13px;
    }
    .page-head_agile_info_w3l {
        min-height: 200px;
    }
    .test-tooltip:before {
        bottom: -10%;
    }
    /* faqs */
    .faq-w3agile .faq>li>a {
        font-size: 15px;
    }
    /* //faqs */
    /* payment */
    label.anim {
        font-size: 15px;
    }
    /* //payment */
	/* cart */
	#PPminicarts {
		left: 39% !important;
	}
	/* //cart */
}

@media(max-width: 900px) {
    .map iframe {
        min-height: 350px;
    }
    .contact-me textarea {
        min-height: 250px;
    }
    .checkout-right h4 {
        font-size: 24px;
    }
}

@media(max-width: 800px) {
    .header-right ul li {
        font-size: 13px;
    }
    .logo_agile h1 a {
        font-size: 28px;
    }
    .logo_agile h1 a img {
        left: -29%;
        width: 37%;
        top: -11px;
    }
    .logo_agile {
        padding: 20px 0 21px 18px;
    }
}

@media(max-width: 768px) {
    .logo_agile {
        padding: 20px 0 21px 30px;
    }
    .logo_agile h1 a {
        font-size: 26px;
    }
    .logo_agile h1 a img {
        left: -29%;
        width: 37%;
        top: -11px;
    }
    .carousel-caption h2,
    .carousel-caption h3 {
        font-size: 41px;
    }
    .carousel-item.item4,
    .carousel-item.item3,
    .carousel-item.item2,
    .carousel-item.item1 {
        min-height: 400px;
    }
}

@media(max-width: 736px) {
    .logo_agile {
        padding: 10px 0 0;
    }
    .logo_agile h1 a {
        font-size: 34px;
    }
    .logo_agile h1 a img {
        left: -36%;
        width: 38%;
        top: -8px;
    }
    .carousel-item.item4,
    .carousel-item.item3,
    .carousel-item.item2,
    .carousel-item.item1 {
        min-height: 380px;
    }
    .w3l-space-banner {
        padding-top: 4em;
    }
    .carousel-caption p {
        font-size: 16px;
    }
    h3.effect-bg {
        margin-top: 1em;
    }
    .bg-right-nut {
        margin-top: 6em;
    }
    p.w3l-nut-middle {
        right: 26%;
        bottom: 65%;
        transform: rotate(-16deg);
        -ms-transform: rotate(-16deg);
        -webkit-transform: rotate(-16deg);
    }
    .offer-name h4 {
        font-size: 26px;
    }
    .offer-name {
        margin-top: 4em;
    }
    p.footer-main {
        font-size: 13px;
    }
    .copy-right p {
        letter-spacing: 1px;
    }
    .header-right ul li {
        font-size: 12px;
    }
    .test-tooltip:before {
        bottom: -7%;
    }
    /* checkout */
    .value-minus,
    .value-plus {
        height: 20px;
        width: 20px;
    }
    .value {
        width: 20px;
        height: 20px;
        line-height: 0px;
    }
    .timetable_sub th {
        font-size: 14px;
        padding: 12px 10px;
    }
    .timetable_sub td {
        width: 25%;
        white-space: nowrap;
    }
    td.invert-image a img {
        width: 60%;
    }
    /* //checkout */
    h3.w3-head {
        font-size: 23px;
    }
    .single-right-left h3 {
        font-size: 22px;
    }
    .agile_inner_drop_nav_info {
        min-width: 474px;
    }
    .number-paymk {
        margin-top: 2em;
    }
	/* imagezoom (single page) */
       .imagezoom-cursor,
    .imagezoom-view {
        display: none;
        overflow: hidden;
    }
	/* //imagezoom (single page) */
	/* cart */
	#PPminicarts {
		left: 37% !important;
	}
	/* //cart */
}

@media(max-width: 667px) {
    .header-right ul li {
        font-size: 11px;
    }
    .header-right ul li i {
        font-size: 14px;
    }
    .con-ic i {
        font-size: 20px;
        width: 70px;
        height: 70px;
    }
    .contact-grid1 h4 {
        font-size: 22px;
    }
    h3.w3-head {
        font-size: 25px;
    }
	/* cart */
	#PPminicarts {
		left: 35% !important;
	}
	/* //cart */
}

@media(max-width: 640px) {
    h3.tittle-w3l {
        font-size: 34px;
    }
    h3.tittle-w3l span {
        font-size: 40px;
    }
    h3.heading-tittle {
        font-size: 28px;
    }
    .page-head_agile_info_w3l {
        min-height: 150px;
    }
}

@media(max-width: 600px) {
    .header-right ul li {
        width: 32%;
    }
    .header-right ul li {
        font-size: 13px;
    }
    .welcome-left h3 {
        font-size: 34px;
    }
    /* cart */
    #PPminicarts form {
        max-height: 210px !important;
        width: 506px !important;
    }
    #PPminicarts {
        left: 41% !important;
    }
    #PPminicarts ul {
        width: 464px !important;
    }
    #PPminicarts .minicarts-subtotal {
        padding-left: 0px !important;
        bottom: -18px !important;
        font-size: 15px;
    }
    #PPminicarts .minicarts-submit {
        min-width: 133px !important;
        font-size: 14px;
        padding: 0 !important;
        margin-right: 0 !important;
    }
    /* //cart */
}

@media(max-width: 568px) {
    .footer-grids {
        padding: 0 1em;
    }
    .carousel-control-prev,
    .carousel-control-next {
        width: 2%;
    }
    .test-tooltip:before {
        bottom: -14%;
    }
    .map iframe {
        min-height: 300px;
    }
    .contact-me textarea {
        min-height: 200px;
    }
}

@media(max-width: 480px) {
    .header-right ul li {
        font-size: 12px;
    }
    .carousel-caption h2,
    .carousel-caption h3 {
        font-size: 37px;
        letter-spacing: 3px;
    }
    .offer-name {
        margin-top: 2em;
    }
    .test-tooltip:before {
        bottom: -12%;
    }
    .welcome-left h4 {
        font-size: 16px;
    }
    /* checkout */
    .quantity {
        width: 77px;
    }
    .checkout-right h4 {
        font-size: 22px;
    }
    /* //checkout */
    .single-right-left h3 {
        line-height: 1.5;
    }
    /* cart */
    #PPminicarts form {
        width: 400px !important;
        max-height: 350px !important;
    }
    #PPminicarts ul {
        width: 358px !important;
    }
    #PPminicarts {
        left: 51% !important;
    }
    #PPminicarts .minicarts-details-price {
        font-size: 14px !important;
    }
    #PPminicarts .minicarts-item a {
        font-size: .9em;
    }
    #PPminicarts .minicarts-submit {
        right: -62px !important;
    }
    /* //cart */
    .imagezoom-cursor,
    .imagezoom-view {
        display: none;
    }
    /* single page */
    img.pp-img {
        width: 50%;
    }
    .agile_inner_drop_nav_info {
        min-width: 396px;
    }
}

@media(max-width: 440px) {
    .carousel-item.item4,
    .carousel-item.item3,
    .carousel-item.item2,
    .carousel-item.item1 {
        min-height: 300px;
    }
    .carousel-caption h2,
    .carousel-caption h3 {
        font-size: 35px;
        letter-spacing: 2px;
    }
    .carousel-caption p span {
        font-size: 26px;
    }
    .carousel-caption p span {
        font-size: 26px;
    }
    .w3l-space-banner {
        padding-top: 2em;
    }
    .agileits_search button {
        width: 22%;
    }
    h3.tittle-w3l {
        font-size: 28px;
    }
    h3.tittle-w3l {
        font-size: 28px;
    }
    h3.effect-bg {
        font-size: 28px;
    }
    p.w3l-nut-middle {
        right: 18%;
        bottom: 60%;
    }
    .test-tooltip:before {
        bottom: -10%;
    }
    .welcome-left h3 {
        font-size: 30px;
    }
    /* faqs */
    h3.w3-head {
        font-size: 22px;
    }
    /* //faqs */
    .agile_inner_drop_nav_info {
        min-width: 364px;
    }
}

@media(max-width: 414px) {
    .header-right ul li {
        font-size: 11px;
    }
    .carousel-caption h2,
    .carousel-caption h3 {
        font-size: 34px;
    }
    .page-head_agile_info_w3l {
        min-height: 150px;
    }
    /* cart */
    #PPminicarts form {
        width: 380px !important;
    }
    #PPminicarts ul {
        width: 336px !important;
    }
    #PPminicarts {
        left: 53% !important;
    }
    #PPminicarts .minicarts-quantity {
        width: 18px !important;
        font-size: 11px !important;
    }
    #PPminicarts .minicarts-details-quantity {
        width: 10% !important;
    }
    #PPminicarts .minicarts-details-remove {
        width: 9% !important;
    }
    .agile_inner_drop_nav_info {
        min-width: 324px;
    }
    label.anim {
        font-size: 14px;
    }
}

@media(max-width: 384px) {
    .header-right ul li {
        width: 46%;
    }
    .logo_agile h1 a {
        font-size: 32px;
    }
    .logo_agile h1 a img {
        left: -32%;
        width: 35%;
        top: -8px;
    }
    .agileits_search input[type="search"] {
        font-size: 15px;
    }
    .agileits_search button {
        padding: 10px 0;
        font-size: 15px;
    }
    .top_nav_right {
        padding: 0;
    }
    button.w3view-cart {
        font-size: 20px;
        width: 40px;
        height: 40px;
        padding: 0;
    }
    .header {
        margin: 10px 0 !important;
    }
    .carousel-caption h2,
    .carousel-caption h3 {
        font-size: 31px;
    }
    .carousel-caption p {
        font-size: 14px;
    }
    .carousel-caption p span {
        font-size: 22px;
    }
    .button2 {
        padding: 10px 16px;
        font-size: 13px;
    }
    .carousel-item.item4,
    .carousel-item.item3,
    .carousel-item.item2,
    .carousel-item.item1 {
        min-height: 270px;
    }
    h3.heading-tittle {
        font-size: 26px;
    }
    .product-men {
        margin-top: 2em !important;
    }
    h3.effect-bg {
        font-size: 24px;
    }
    p.w3l-nut-middle {
        right: 19%;
        bottom: 60%;
        font-size: 20px;
    }
    /* faqs */
    .faq-w3agile .faq>li>a {
        font-size: 14px;
    }
    h3.w3-head {
        font-size: 20px;
    }
    /* //faqs */
    /* cart */
    #PPminicarts form {
        width: 313px !important;
        padding: 10px 10px 40px !important;
    }
    #PPminicarts ul {
        width: 278px !important;
    }
    #PPminicarts {
        left: 63% !important;
    }
    #PPminicarts .minicarts-subtotal {
        font-size: 14px;
    }
    #PPminicarts .minicarts-submit {
        right: 18px !important;
        bottom: -87px !important;
        margin-bottom: 20px !important;
    }
    .checkout-right h4 {
        font-size: 18px;
    }
    .agile_inner_drop_nav_info {
        min-width: 300px;
    }
    .agile_inner_drop_nav_info.p-4 h5 {
        font-size: 18px;
    }
    ul.multi-column-dropdown li {
        line-height: 2em;
    }
    .vertical_post form input[type="submit"],
    .number-paymk input[type="submit"] {
        margin-top: 14px;
    }
}

@media(max-width: 375px) {
    p.w3l-nut-middle {
        right: 19%;
        bottom: 60%;
        font-size: 20px;
    }
    .carousel-caption h2,
    .carousel-caption h3 {
        font-size: 30px;
    }
    .copy-right p {
        font-size: 13px;
    }
    .agile_inner_drop_nav_info {
        min-width: 290px;
    }
}

@media(max-width: 320px) {
    .sub-some h5 {
        font-size: 17px;
    }
    .header-most-top p {
        font-size: 13px;
    }
    .logo_agile h1 a {
        font-size: 30px;
    }
    .logo_agile h1 a img {
        left: -29%;
    }
    .agileits_search input[type="search"] {
        font-size: 14px;
        width: 74%;
    }
    .agileits_search button {
        padding: 9px 0;
        font-size: 14px;
        width: 26%;
    }
    .agileits-navi_search {
        width: 67%;
    }
    .navbar-toggler {
        padding: 0.1rem 0.4rem;
        font-size: 1.2rem;
    }
    .carousel-caption p {
        font-size: 13px;
        letter-spacing: 2px;
    }
    .carousel-caption h2,
    .carousel-caption h3 {
        font-size: 25px;
        letter-spacing: 1px;
    }
    .carousel-caption p span {
        font-size: 18px;
    }
    .button2 {
        font-size: 12px;
    }
    .carousel-item.item4,
    .carousel-item.item3,
    .carousel-item.item2,
    .carousel-item.item1 {
        min-height: 240px;
    }
    h3.tittle-w3l {
        font-size: 26px;
    }
    h3.tittle-w3l span {
        font-size: 34px;
    }
    h3.heading-tittle {
        font-size: 23px;
    }
    .offer-name h4 {
        font-size: 23px;
    }
    .offer-name h4 {
        font-size: 23px;
    }
    .offer-name {
        margin-top: 1em;
    }
    p.footer-main {
        font-size: 12px;
    }
    .text-form-footer h3 {
        font-size: 20px;
    }
    .footer-info h3 {
        font-size: 20px;
    }
    .page-head_agile_info_w3l {
        min-height: 120px;
    }
    .test-tooltip:before {
        bottom: -7.5%;
    }
    .contact-me textarea {
        min-height: 140px;
    }
    .map iframe {
        min-height: 240px;
    }
    .contact-grids1 input[type="submit"] {
        margin: .5em 0 0 0em;
    }
    /* help */
    .wthree-help textarea {
        height: 120px;
    }
    .wthree-help form input[type="submit"] {
        font-size: 15px;
        padding: 10px 31px;
    }
    .wthree-help a {
        padding: 10px 18px;
        font-size: 14px;
    }
    /* //help */
    .single-right-left h3 {
        font-size: 19px;
    }
    /* cart */
    #PPminicarts form {
        width: 291px !important;
    }
    #PPminicarts ul {
        width: 254px !important;
    }
    #PPminicarts {
        left: 68% !important;
    }
    .checkout-right h4 {
        font-size: 18px;
        line-height: 1.4;
    }
    .information-wrapper input,
    .information-wrapper select {
        font-size: 13px;
        padding: 11px 10px;
    }
    button.submit.check_out {
        padding: 11px 12px;
        font-size: 14px;
    }
    .checkout-right-basket a {
        padding: 11px 15px;
        font-size: 14px;
    }
    label.anim {
        font-size: 12px;
    }
    img.pp-img {
        width: 80%;
    }
    .agile_inner_drop_nav_info {
        min-width: 242px;
    }
    .agile_inner_drop_nav_info.p-4 h5 {
        font-size: 17px;
        line-height: 1.5;
    }
    .navbar-light .navbar-nav .nav-link {
        font-size: 14px;
    }
    ul.multi-column-dropdown li a {
        font-size: 13px;
    }
    .occasion-cart .snipcart-details {
        width: 45%;
    }
}
.cd-dropdown-wrapper {
   display: inline-block;
   position: relative;
   -webkit-font-smoothing: antialiased;
   -moz-osx-font-smoothing: grayscale;
 }

 ul.cd-dropdown-content li {
   list-style-type: none;
 }

 .cd-dropdown-trigger {
   display: block;
   position: relative;
   padding: 0 40px 0 0px;
   color: #000000;
   font-size: 19px;
   outline: none;
   text-decoration: none;
   letter-spacing: 1px;
 }

 .no-touch .cd-dropdown-trigger:hover {
   background-color: #171b46;
 }

 .cd-dropdown-trigger::before,
 .cd-dropdown-trigger::after {
   content: '';
   position: absolute;
   top: 50%;
   margin-top: 0;
   height: 2px;
   width: 9px;
   background: #3a3a3a;
   -webkit-backface-visibility: hidden;
   backface-visibility: hidden;
   -webkit-transition: width 0.3s, -webkit-transform 0.3s;
   -moz-transition: width 0.3s, -moz-transform 0.3s;
   transition: width 0.3s, transform 0.3s;
 }

 .cd-dropdown-trigger::before {
   right: 22px;
   -webkit-transform: rotate(45deg);
   -moz-transform: rotate(45deg);
   -ms-transform: rotate(45deg);
   -o-transform: rotate(45deg);
   transform: rotate(45deg);
 }

 .cd-dropdown-trigger::after {
   right: 17px;
   -webkit-transform: rotate(-45deg);
   -moz-transform: rotate(-45deg);
   -ms-transform: rotate(-45deg);
   -o-transform: rotate(-45deg);
   transform: rotate(-45deg);
 }

 .cd-dropdown-content a:hover {
   color: #00c4da;
 }

 ul.is-hidden li {
   display: inline-block;
   margin: 5px;
 }

 @media only screen and (min-width: 1024px) {
   .cd-dropdown-trigger {
     display: block;
     position: relative;
     padding: 0 40px 0 0px;
     color: #000000;
     font-size: 19px;
     outline: none;
     text-decoration: none;
     letter-spacing: 1px;
   }
   .cd-dropdown-trigger.dropdown-is-active {
     color: #000;
     text-decoration: none;
   }
   .no-touch .cd-dropdown-trigger.dropdown-is-active:hover {
     background-color: #47975f;
   }
   .cd-dropdown-trigger.dropdown-is-active::before,
   .cd-dropdown-trigger.dropdown-is-active::after {
     /* transform the arrow into a 'X' */
     width: 14px;
     background: #000;
   }
   .cd-dropdown-trigger.dropdown-is-active::before,
   .cd-dropdown-trigger.dropdown-is-active::after {
     /* transform the arrow into a 'X' */
     width: 14px;
   }
   .cd-dropdown-trigger.dropdown-is-active::before {
     /* transform the arrow into a 'X' */
     -webkit-transform: translateX(5px) rotate(-45deg);
     -moz-transform: translateX(5px) rotate(-45deg);
     -ms-transform: translateX(5px) rotate(-45deg);
     -o-transform: translateX(5px) rotate(-45deg);
     transform: translateX(5px) rotate(-45deg);
   }
   .cd-dropdown-trigger.dropdown-is-active::after {
     /* transform the arrow into a 'X' */
     -webkit-transform: rotate(45deg);
     -moz-transform: rotate(45deg);
     -ms-transform: rotate(45deg);
     -o-transform: rotate(45deg);
     transform: rotate(45deg);
   }
 }

 .cd-dropdown h2,
 .cd-dropdown-content a,
 .cd-dropdown-content ul a {
   height: 50px;
   line-height: 50px;
 }

 @media only screen and (min-width: 768px) {}

 @media only screen and (min-width: 1024px) {
   .cd-dropdown h2,
   .cd-dropdown-content a,
   .cd-dropdown-content ul a {
     height: 50px;
     line-height: 50px;
   }
 }

 .cd-dropdown h2,
 .cd-dropdown-content a,
 .cd-dropdown-content ul a,
 .cd-dropdown-content .cd-divider {
   padding: 0 20px;
 }

 .cd-dropdown {
   position: fixed;
   z-index: -1;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   background-color: #000;
   color: #ffffff;
   opacity: 0;
   /* Force Hardware Acceleration */
   -webkit-backface-visibility: hidden;
   backface-visibility: hidden;
   -webkit-transform: translateZ(0);
   -moz-transform: translateZ(0);
   -ms-transform: translateZ(0);
   -o-transform: translateZ(0);
   transform: translateZ(0);
   -webkit-transform: translateY(-100%);
   -moz-transform: translateY(-100%);
   -ms-transform: translateY(-100%);
   -o-transform: translateY(-100%);
   transform: translateY(-100%);
   -webkit-transition: -webkit-transform 0.5s 0s, visibility 0s 0.5s;
   -moz-transition: -moz-transform 0.5s 0s, visibility 0s 0.5s;
   transition: transform 0.5s 0s, visibility 0s 0.5s;
 }

 .cd-dropdown h2 {
   /* dropdown title - mobile version only */
   position: relative;
   z-index: 1;
   color: #585a70;
   background-color: #111433;
   border-bottom: 1px solid #242643;
 }

 .cd-dropdown .cd-close {
   /* 'X' close icon - mobile version only */
   position: absolute;
   z-index: 1;
   right: 0;
   top: 0;
   height: 50px;
   width: 50px;
   /* image replacement */
   overflow: hidden;
   text-indent: 100%;
   white-space: nowrap;
   color: transparent;
 }

 .cd-dropdown .cd-close::after,
 .cd-dropdown .cd-close::before {
   /* this is the 'X' icon */
   content: '';
   position: absolute;
   left: 50%;
   top: 50%;
   bottom: auto;
   right: auto;
   -webkit-transform: translateX(-50%) translateY(-50%);
   -moz-transform: translateX(-50%) translateY(-50%);
   -ms-transform: translateX(-50%) translateY(-50%);
   -o-transform: translateX(-50%) translateY(-50%);
   transform: translateX(-50%) translateY(-50%);
   height: 20px;
   width: 2px;
   background-color: #ffffff;
 }

 .cd-dropdown .cd-close::after {
   -webkit-transform: translateX(-50%) translateY(-50%) rotate(45deg);
   -moz-transform: translateX(-50%) translateY(-50%) rotate(45deg);
   -ms-transform: translateX(-50%) translateY(-50%) rotate(45deg);
   -o-transform: translateX(-50%) translateY(-50%) rotate(45deg);
   transform: translateX(-50%) translateY(-50%) rotate(45deg);
 }

 .cd-dropdown .cd-close::before {
   -webkit-transform: translateX(-50%) translateY(-50%) rotate(-45deg);
   -moz-transform: translateX(-50%) translateY(-50%) rotate(-45deg);
   -ms-transform: translateX(-50%) translateY(-50%) rotate(-45deg);
   -o-transform: translateX(-50%) translateY(-50%) rotate(-45deg);
   transform: translateX(-50%) translateY(-50%) rotate(-45deg);
 }

 .cd-dropdown.dropdown-is-active {
   opacity: 1;
   -webkit-transform: translateY(0);
   -moz-transform: translateY(0);
   -ms-transform: translateY(0);
   -o-transform: translateY(0);
   transform: translateY(0);
   -webkit-transition: -webkit-transform 0.5s 0s, visibility 0s 0s;
   -moz-transition: -moz-transform 0.5s 0s, visibility 0s 0s;
   transition: transform 0.5s 0s, visibility 0s 0s;
 }

 @media only screen and (min-width: 768px) {
   .cd-dropdown .cd-close {
     top: 5px;
   }
 }

 @media only screen and (min-width: 1024px) {
   .cd-dropdown {
     position: absolute;
     top: 100%;
     /* reset style*/
     height: auto;
     width: auto;
     -webkit-transform: translateX(0);
     -moz-transform: translateX(0);
     -ms-transform: translateX(0);
     -o-transform: translateX(0);
     transform: translateX(0);
     background-color: #ffffff;
     color: #111433;
     box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
     opacity: 0;
     -webkit-transform: translateY(30px);
     -moz-transform: translateY(30px);
     -ms-transform: translateY(30px);
     -o-transform: translateY(30px);
     transform: translateY(30px);
     -webkit-transition: opacity 0.3s 0s, visibility 0s 0.3s, -webkit-transform 0.3s 0s;
     -moz-transition: opacity 0.3s 0s, visibility 0s 0.3s, -moz-transform 0.3s 0s;
     transition: opacity 0.3s 0s, visibility 0s 0.3s, transform 0.3s 0s;
   }
   .open-to-left .cd-dropdown {
     /* use the .open-to-left class if you want to open the dropdown on the left */
     right: 0;
     left: auto;
   }
   .cd-dropdown h2,
   .cd-dropdown .cd-close {
     /* on desktop - hide title and 'X' */
     display: none;
   }
   .cd-dropdown.dropdown-is-active {
     opacity: 1;
     -webkit-transform: translateY(0);
     -moz-transform: translateY(0);
     -ms-transform: translateY(0);
     -o-transform: translateY(0);
     transform: translateY(0);
     -webkit-transition: opacity 0.3s 0s, visibility 0.3s 0s, -webkit-transform 0.3s 0s;
     -moz-transition: opacity 0.3s 0s, visibility 0.3s 0s, -moz-transform 0.3s 0s;
     transition: opacity 0.3s 0s, visibility 0.3s 0s, transform 0.3s 0s;
     z-index: 1;
   }
 }

 .cd-dropdown-content,
 .cd-dropdown-content ul {
   position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   overflow-x: hidden;
   overflow-y: auto;
   -webkit-transition: -webkit-transform 0.3s;
   -moz-transition: -moz-transform 0.3s;
   transition: transform 0.3s;
   padding-top: 50px;
 }

 .cd-dropdown-content a,
 .cd-dropdown-content ul a {
   display: block;
   color: #ffffff;
   overflow: hidden;
   white-space: nowrap;
   border-top-width: 0;
   border-color: #1f1f1f;
   border-style: solid;
   border-width: 1px;
 }

 .cd-dropdown-content li:first-of-type>a,
 .cd-dropdown-content ul li:first-of-type>a {
   border-top-width: 0;
 }

 .cd-dropdown-content li:last-of-type>a,
 .cd-dropdown-content ul li:last-of-type>a {
   border-bottom-width: 1px;
 }

 .cd-dropdown-content .cd-divider,
 .cd-dropdown-content ul .cd-divider {
   padding-top: 10px;
   padding-bottom: 10px;
   background-color: #0b0e23;
   font-size: 1.1rem;
   font-weight: bold;
   letter-spacing: 1px;
   color: #585a70;
   text-transform: uppercase;
 }

 .cd-dropdown-content .cd-divider+li>a,
 .cd-dropdown-content ul .cd-divider+li>a {
   border-top-width: 0;
 }

 .cd-dropdown-content a,
 .cd-dropdown-content .cd-search,
 .cd-dropdown-content .cd-divider,
 .cd-dropdown-content ul a,
 .cd-dropdown-content ul .cd-search,
 .cd-dropdown-content ul .cd-divider {
   /* Force Hardware Acceleration */
   -webkit-transform: translateZ(0);
   -moz-transform: translateZ(0);
   -ms-transform: translateZ(0);
   -o-transform: translateZ(0);
   transform: translateZ(0);
   -webkit-backface-visibility: hidden;
   backface-visibility: hidden;
   -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
   -moz-transition: opacity 0.3s, -moz-transform 0.3s;
   transition: opacity 0.3s, transform 0.3s;
 }

 .cd-dropdown-content.is-hidden,
 .cd-dropdown-content ul.is-hidden {
   /* push the secondary dropdown items to the right */
   -webkit-transform: translateX(100%);
   -moz-transform: translateX(100%);
   -ms-transform: translateX(100%);
   -o-transform: translateX(100%);
   transform: translateX(100%);
 }

 .cd-dropdown-content.is-hidden>li>a,
 .cd-dropdown-content.is-hidden>li>.cd-search,
 .cd-dropdown-content.is-hidden>.cd-divider,
 .cd-dropdown-content.move-out>li>a,
 .cd-dropdown-content.move-out>li>.cd-search,
 .cd-dropdown-content.move-out>.cd-divider,
 .cd-dropdown-content ul.is-hidden>li>a,
 .cd-dropdown-content ul.is-hidden>li>.cd-search,
 .cd-dropdown-content ul.is-hidden>.cd-divider,
 .cd-dropdown-content ul.move-out>li>a,
 .cd-dropdown-content ul.move-out>li>.cd-search,
 .cd-dropdown-content ul.move-out>.cd-divider {
   /* lower down the dropdown items opacity - when secondary dropdown slides in or for dropdown items hidden on the right */
   opacity: 0;
 }

 .cd-dropdown-content.move-out>li>a,
 .cd-dropdown-content.move-out>li>.cd-search,
 .cd-dropdown-content.move-out>.cd-divider,
 .cd-dropdown-content ul.move-out>li>a,
 .cd-dropdown-content ul.move-out>li>.cd-search,
 .cd-dropdown-content ul.move-out>.cd-divider {
   /* push the dropdown items to the left when secondary dropdown slides in */
   -webkit-transform: translateX(-100%);
   -moz-transform: translateX(-100%);
   -ms-transform: translateX(-100%);
   -o-transform: translateX(-100%);
   transform: translateX(-100%);
 }

 .dropdown-is-active .cd-dropdown-content,
 .dropdown-is-active .cd-dropdown-content ul {
   -webkit-overflow-scrolling: touch;
 }

 @media only screen and (min-width: 768px) {
   .cd-dropdown-content,
   .cd-dropdown-content ul {
     padding-top: 40px;
   }
   .cd-dropdown-content a,
   .cd-dropdown-content ul a {
     font-size: 1.1em;
     -webkit-transition: .5s all;
     -moz-transition: .5s all;
     -o-transition: .5s all;
     -ms-transition: .5s all;
     transition: .5s all;
   }
 }

 @media only screen and (min-width: 1024px) {
   .cd-dropdown-content,
   .cd-dropdown-content ul {
     padding-top: 0;
     overflow: visible;
   }
   .cd-dropdown-content a,
   .cd-dropdown-content ul a {
     color: #555;
     height: 40px;
     line-height: 40px;
     font-size: 1em;
     border-color: transparent;
     border-width: 1px;
     border-top: none;
     text-transform: capitalize;
     text-decoration: none;
   }
   .cd-dropdown-content .cd-divider,
   .cd-dropdown-content ul .cd-divider {
     background-color: transparent;
     color: #b3b3b3;
     border-top: 1px solid #ebebeb;
   }
   .cd-dropdown-content .cd-divider+li>a,
   .cd-dropdown-content ul .cd-divider+li>a {
     border-top-width: 1px;
   }
   .cd-dropdown-content.is-hidden>li>a,
   .cd-dropdown-content.is-hidden>li>.cd-search,
   .cd-dropdown-content.is-hidden>.cd-divider,
   .cd-dropdown-content.move-out>li>a,
   .cd-dropdown-content.move-out>li>.cd-search,
   .cd-dropdown-content.move-out>.cd-divider,
   .cd-dropdown-content ul.is-hidden>li>a,
   .cd-dropdown-content ul.is-hidden>li>.cd-search,
   .cd-dropdown-content ul.is-hidden>.cd-divider,
   .cd-dropdown-content ul.move-out>li>a,
   .cd-dropdown-content ul.move-out>li>.cd-search,
   .cd-dropdown-content ul.move-out>.cd-divider {
     /* reset mobile style */
     opacity: 1;
   }
 }

 .cd-dropdown-content .see-all a {
   /* different style for the See all links */
   color: #3f8654;
 }

 .cd-dropdown-content .cd-dropdown-gallery .cd-dropdown-item,
 .cd-dropdown-content .cd-dropdown-icons .cd-dropdown-item {
   /* items with picture (or icon) and title */
   height: 80px;
   line-height: 80px;
 }

 .cd-dropdown-content .cd-dropdown-gallery .cd-dropdown-item h3,
 .cd-dropdown-content .cd-dropdown-icons .cd-dropdown-item h3 {
   /* truncate text with ellipsis if too long */
   overflow: hidden;
   text-overflow: ellipsis;
   white-space: nowrap;
 }

 .cd-dropdown-content .cd-dropdown-gallery .cd-dropdown-item {
   padding-left: 90px;
 }

 .cd-dropdown-content .cd-dropdown-gallery img {
   position: absolute;
   display: block;
   height: 40px;
   width: auto;
   left: 20px;
   top: 50%;
   margin-top: -20px;
 }

 .cd-dropdown-content .cd-dropdown-icons .cd-dropdown-item {
   padding-left: 75px;
   position: relative;
 }

 .cd-dropdown-content .cd-dropdown-icons .cd-dropdown-item p {
   color: #111433;
   font-size: 1.3rem;
   /* hide description on small devices */
   display: none;
 }

 .cd-dropdown-content .cd-dropdown-icons .cd-dropdown-item::before {
   /* item icon */
   content: '';
   display: block;
   position: absolute;
   left: 20px;
   top: 50%;
   margin-top: -20px;
   width: 40px;
   height: 40px;
   background-repeat: no-repeat;
   background-position: center center;
   background-size: 40px 40px;
 }

 .cd-dropdown-content .cd-dropdown-icons .cd-dropdown-item.item-1::before {
   background-image: url("../img/nucleo-icon-1.svg");
 }

 .cd-dropdown-content .cd-dropdown-icons .cd-dropdown-item.item-2::before {
   background-image: url("../img/nucleo-icon-2.svg");
 }

 .cd-dropdown-content .cd-dropdown-icons .cd-dropdown-item.item-3::before {
   background-image: url("../img/nucleo-icon-3.svg");
 }

 .cd-dropdown-content .cd-dropdown-icons .cd-dropdown-item.item-4::before {
   background-image: url("../img/nucleo-icon-4.svg");
 }

 .cd-dropdown-content .cd-dropdown-icons .cd-dropdown-item.item-5::before {
   background-image: url("../img/nucleo-icon-5.svg");
 }

 .cd-dropdown-content .cd-dropdown-icons .cd-dropdown-item.item-6::before {
   background-image: url("../img/nucleo-icon-6.svg");
 }

 .cd-dropdown-content .cd-dropdown-icons .cd-dropdown-item.item-7::before {
   background-image: url("../img/nucleo-icon-7.svg");
 }

 .cd-dropdown-content .cd-dropdown-icons .cd-dropdown-item.item-8::before {
   background-image: url("../img/nucleo-icon-8.svg");
 }

 .cd-dropdown-content .cd-dropdown-icons .cd-dropdown-item.item-9::before {
   background-image: url("../img/nucleo-icon-9.svg");
 }

 .cd-dropdown-content .cd-dropdown-icons .cd-dropdown-item.item-10::before {
   background-image: url("../img/nucleo-icon-10.svg");
 }

 .cd-dropdown-content .cd-dropdown-icons .cd-dropdown-item.item-11::before {
   background-image: url("../img/nucleo-icon-11.svg");
 }

 .cd-dropdown-content .cd-dropdown-icons .cd-dropdown-item.item-12::before {
   background-image: url("../img/nucleo-icon-12.svg");
 }

 @media only screen and (min-width: 1024px) {
   .cd-dropdown-content {
     /* reset mobile style */
     position: static;
     height: auto;
     width: 280px;
   }
   .cd-dropdown-content>li:last-of-type a {
     border-bottom: none;
   }
   .no-touch .cd-dropdown-content>li:not(.has-children) a:hover {
     color: #3f8654;
   }
   .cd-dropdown-content.move-out>li>a,
   .cd-dropdown-content.move-out>li>.cd-search,
   .cd-dropdown-content.move-out>.cd-divider {
     /* reset mobile style */
     -webkit-transform: translateX(0);
     -moz-transform: translateX(0);
     -ms-transform: translateX(0);
     -o-transform: translateX(0);
     transform: translateX(0);
     opacity: 1;
   }
   .cd-dropdown-content .cd-secondary-dropdown,
   .cd-dropdown-content .cd-dropdown-gallery,
   .cd-dropdown-content .cd-dropdown-icons {
     -webkit-transform: translateX(0);
     -moz-transform: translateX(0);
     -ms-transform: translateX(0);
     -o-transform: translateX(0);
     transform: translateX(0);
     left: 100%;
     height: auto;
     background-color: #ffffff;
     box-shadow: 0 2px 14px rgba(0, 0, 0, 0.1);
   }
   .cd-dropdown-content .cd-secondary-dropdown::after,
   .cd-dropdown-content .cd-dropdown-gallery::after,
   .cd-dropdown-content .cd-dropdown-icons::after {
     clear: both;
     content: "";
     display: table;
   }
   .open-to-left .cd-dropdown-content .cd-secondary-dropdown,
   .open-to-left .cd-dropdown-content .cd-dropdown-gallery,
   .open-to-left .cd-dropdown-content .cd-dropdown-icons {
     /* use the .open-to-left class if you want to open the dropdown on the left */
     left: auto;
     right: 100%;
   }
   .cd-dropdown-content .cd-secondary-dropdown.is-hidden,
   .cd-dropdown-content .cd-dropdown-gallery.is-hidden,
   .cd-dropdown-content .cd-dropdown-icons.is-hidden {
     /* reset mobile style */
     -webkit-transform: translateX(0);
     -moz-transform: translateX(0);
     -ms-transform: translateX(0);
     -o-transform: translateX(0);
     transform: translateX(0);
   }
   .cd-dropdown-content .cd-secondary-dropdown.fade-in,
   .cd-dropdown-content .cd-dropdown-gallery.fade-in,
   .cd-dropdown-content .cd-dropdown-icons.fade-in {
     /* animate secondary dropdown items when hovering over of of the .cd-dropdown-content list items */
     -webkit-animation: cd-fade-in 0.2s;
     -moz-animation: cd-fade-in 0.2s;
     animation: cd-fade-in 0.2s;
   }
   .cd-dropdown-content .cd-secondary-dropdown.fade-out,
   .cd-dropdown-content .cd-dropdown-gallery.fade-out,
   .cd-dropdown-content .cd-dropdown-icons.fade-out {
     /* animate secondary dropdown items when hovering over of of the .cd-dropdown-content list items */
     -webkit-animation: cd-fade-out 0.2s;
     -moz-animation: cd-fade-out 0.2s;
     animation: cd-fade-out 0.2s;
   }
   .cd-dropdown-content .cd-secondary-dropdown>.go-back,
   .cd-dropdown-content .cd-dropdown-gallery>.go-back,
   .cd-dropdown-content .cd-dropdown-icons>.go-back {
     display: none;
   }
   .cd-dropdown-content .cd-secondary-dropdown>.see-all,
   .cd-dropdown-content .cd-dropdown-gallery>.see-all,
   .cd-dropdown-content .cd-dropdown-icons>.see-all {
     position: absolute;
     bottom: 20px;
     height: 45px;
     text-align: center;
   }
   .cd-dropdown-content .cd-secondary-dropdown>.see-all a,
   .cd-dropdown-content .cd-dropdown-gallery>.see-all a,
   .cd-dropdown-content .cd-dropdown-icons>.see-all a {
     margin: 0;
     height: 100%;
     line-height: 45px;
     background: #ebebeb;
     pointer-events: auto;
     -webkit-transition: color 0.2s, background-color 0.2s;
     -moz-transition: color 0.2s, background-color 0.2s;
     transition: color 0.2s, background-color 0.2s;
   }
   .no-touch .cd-dropdown-content .cd-secondary-dropdown>.see-all a:hover,
   .no-touch .cd-dropdown-content .cd-dropdown-gallery>.see-all a:hover,
   .no-touch .cd-dropdown-content .cd-dropdown-icons>.see-all a:hover {
     color: #ffffff;
     background-color: #111433;
   }
   .cd-dropdown-content .cd-secondary-dropdown .cd-dropdown-item,
   .cd-dropdown-content .cd-secondary-dropdown a,
   .cd-dropdown-content .cd-dropdown-gallery .cd-dropdown-item,
   .cd-dropdown-content .cd-dropdown-gallery a,
   .cd-dropdown-content .cd-dropdown-icons .cd-dropdown-item,
   .cd-dropdown-content .cd-dropdown-icons a {
     border: none;
   }
   .cd-dropdown-content .cd-dropdown-gallery,
   .cd-dropdown-content .cd-dropdown-icons {
     padding: 20px 30px 100px;
   }
   .cd-dropdown-content .cd-dropdown-gallery>.see-all,
   .cd-dropdown-content .cd-dropdown-icons>.see-all {
     width: calc(100% - 60px);
   }
   .cd-dropdown-content .cd-dropdown-icons>li,
   .cd-dropdown-content .cd-secondary-dropdown>li {}
   .cd-dropdown-content .cd-secondary-dropdown {
     overflow: hidden;
     width: 650px;
     padding: 1em 1em 1em 1em;
   }
   .cd-dropdown-content .cd-secondary-dropdown::before {
     /* this is the separation line in the middle of the .cd-secondary-dropdown element */
     position: absolute;
     content: '';
     top: 290px;
     left: 15px;
     height: 1px;
     width: 520px;
     background-color: #ebebeb;
     display: none;
   }
   .cd-dropdown-content .cd-secondary-dropdown>li>a {
     color: #3f8654;
     font-size: 1.6rem;
     text-transform: uppercase;
     color: #555;
     font-size: 1em;
     border-color: transparent;
     border-width: 1px;
     border-top: none;
     text-transform: capitalize;
     text-decoration: none;
   }
   .cd-dropdown-content .cd-secondary-dropdown>li>a::after,
   .cd-dropdown-content .cd-secondary-dropdown>li>a::before {
     /* hide the arrow */
     display: none;
   }
   .cd-dropdown-content .cd-secondary-dropdown.move-out>li>a {
     /* reset mobile style */
     -webkit-transform: translateX(0);
     -moz-transform: translateX(0);
     -ms-transform: translateX(0);
     -o-transform: translateX(0);
     transform: translateX(0);
   }
   .cd-dropdown-content .cd-secondary-dropdown>li {
     margin: 0px 0;
     padding: 0 20px;
   }
   .cd-dropdown-content .cd-secondary-dropdown>li:nth-of-type(2n) {
     border-right-width: 0;
   }
   .cd-dropdown-content .cd-secondary-dropdown>li>ul {
     /* reset mobile style */
     -webkit-transform: translate(0);
     -moz-transform: translate(0);
     -ms-transform: translate(0);
     -o-transform: translate(0);
     transform: translate(0);
     position: relative;
     height: auto;
   }
   .cd-dropdown-content .cd-secondary-dropdown>li>ul>.go-back {
     display: none;
   }
   .cd-dropdown-content .cd-secondary-dropdown a {
     line-height: 35px;
     font-size: 1rem;
     padding-left: 0;
   }
   .no-touch .cd-dropdown-content .cd-secondary-dropdown a:hover {
     color: #3f8654;
   }
   .cd-dropdown-content .cd-secondary-dropdown ul {
     overflow: hidden;
     height: auto;
   }
   .cd-dropdown-content .cd-secondary-dropdown .go-back a {
     padding-left: 20px;
     color: transparent;
   }
   .no-touch .cd-dropdown-content .cd-secondary-dropdown .go-back a:hover {
     color: transparent;
   }
   .cd-dropdown-content .cd-secondary-dropdown .go-back a::before,
   .cd-dropdown-content .cd-secondary-dropdown .go-back a::after {
     left: 0;
   }
   .cd-dropdown-content .cd-secondary-dropdown .see-all {
     position: absolute;
     bottom: 0;
     left: 0;
     width: 100%;
   }
   .cd-dropdown-content .cd-dropdown-gallery {
     width: 600px;
     padding-bottom: 100px;
   }
   .cd-dropdown-content .cd-dropdown-gallery>li {
     width: 48%;
     float: left;
     margin-right: 4%;
   }
   .cd-dropdown-content .cd-dropdown-gallery>li:nth-of-type(2n) {
     margin-right: 0;
   }
   .cd-dropdown-content .cd-dropdown-gallery .cd-dropdown-item {
     padding: 0;
     height: auto;
     line-height: normal;
     color: #3f8654;
     margin-bottom: 2em;
   }
   .cd-dropdown-content .cd-dropdown-gallery>li:nth-last-of-type(2) a,
   .cd-dropdown-content .cd-dropdown-gallery>li:last-of-type a {
     margin-bottom: 0;
   }
   .cd-dropdown-content .cd-dropdown-gallery img {
     position: static;
     height: auto;
     width: 100%;
     margin: 0 0 0.6em;
   }
   .cd-dropdown-content .cd-dropdown-icons {
     width: 600px;
   }
   .cd-dropdown-content .cd-dropdown-icons .cd-dropdown-item {
     height: 80px;
     line-height: 1.2;
     padding: 24px 0 0 85px;
   }
   .cd-dropdown-content .cd-dropdown-icons .cd-dropdown-item:hover {
     background: #ebebeb;
   }
   .cd-dropdown-content .cd-dropdown-icons .cd-dropdown-item h3 {
     color: #3f8654;
     font-weight: bold;
   }
   .cd-dropdown-content .cd-dropdown-icons .cd-dropdown-item p {
     display: block;
     font-size: 1.2rem;
   }
   .cd-dropdown-content .cd-dropdown-icons .cd-dropdown-item::before {
     left: 25px;
   }
   .cd-dropdown-content>.has-children>ul {
     visibility: hidden;
   }
   .cd-dropdown-content>.has-children>ul.is-active {
     /* when hover over .cd-dropdown-content items - show subnavigation */
     visibility: visible;
   }
   .cd-dropdown-content>.has-children>.cd-secondary-dropdown.is-active>li>ul {
     /* if .cd-secondary-dropdown is visible - show also subnavigation */
     visibility: visible;
   }
   .cd-dropdown-content>.has-children>a.is-active {
     /* hover effect for .cd-dropdown-content items with subnavigation */
     border-left: 2px solid #00c4da;
     color: #00c4da;
   }
   .cd-dropdown-content>.has-children>a.is-active::before,
   .cd-dropdown-content>.has-children>a.is-active::after {
     background: #00c4da;
   }
   .open-to-left .cd-dropdown-content>.has-children>a.is-active {
     box-shadow: inset -2px 0 0 #00c4da;
   }
 }

 @-webkit-keyframes cd-fade-in {
   0% {
     opacity: 0;
     visibility: visible;
   }
   100% {
     opacity: 1;
     visibility: visible;
   }
 }

 @-moz-keyframes cd-fade-in {
   0% {
     opacity: 0;
     visibility: visible;
   }
   100% {
     opacity: 1;
     visibility: visible;
   }
 }

 @keyframes cd-fade-in {
   0% {
     opacity: 0;
     visibility: visible;
   }
   100% {
     opacity: 1;
     visibility: visible;
   }
 }

 @-webkit-keyframes cd-fade-out {
   0% {
     opacity: 1;
     visibility: visible;
   }
   100% {
     opacity: 0;
     visibility: visible;
   }
 }

 @-moz-keyframes cd-fade-out {
   0% {
     opacity: 1;
     visibility: visible;
   }
   100% {
     opacity: 0;
     visibility: visible;
   }
 }

 @keyframes cd-fade-out {
   0% {
     opacity: 1;
     visibility: visible;
   }
   100% {
     opacity: 0;
     visibility: visible;
   }
 }

 .cd-search input[type="search"] {
   width: 100%;
   height: 50px;
   padding: 0 20px;
   -webkit-appearance: none;
   -moz-appearance: none;
   -ms-appearance: none;
   -o-appearance: none;
   appearance: none;
   background-color: #242643;
   color: #ffffff;
   border: none;
   border-radius: 0;
 }

 .cd-search input[type="search"]::-webkit-input-placeholder {
   color: #ffffff;
 }

 .cd-search input[type="search"]::-moz-placeholder {
   color: #ffffff;
 }

 .cd-search input[type="search"]:-moz-placeholder {
   color: #ffffff;
 }

 .cd-search input[type="search"]:-ms-input-placeholder {
   color: #ffffff;
 }

 .cd-search input[type="search"]:focus {
   background: #ffffff;
   color: #111433;
   outline: none;
 }

 .cd-search input[type="search"]:focus::-webkit-input-placeholder {
   color: rgba(17, 20, 51, 0.4);
 }

 .cd-search input[type="search"]:focus::-moz-placeholder {
   color: rgba(17, 20, 51, 0.4);
 }

 .cd-search input[type="search"]:focus:-moz-placeholder {
   color: rgba(17, 20, 51, 0.4);
 }

 .cd-search input[type="search"]:focus:-ms-input-placeholder {
   color: rgba(17, 20, 51, 0.4);
 }

 @media only screen and (min-width: 1024px) {
   .cd-search input[type="search"] {
     background-color: #ebebeb;
   }
   .cd-search input[type="search"]::-webkit-input-placeholder {
     color: #b3b3b3;
   }
   .cd-search input[type="search"]::-moz-placeholder {
     color: #b3b3b3;
   }
   .cd-search input[type="search"]:-moz-placeholder {
     color: #b3b3b3;
   }
   .cd-search input[type="search"]:-ms-input-placeholder {
     color: #b3b3b3;
   }
 }

 .has-children>a,
 .go-back a {
   position: relative;
 }

 .has-children>a::before,
 .has-children>a::after,
 .go-back a::before,
 .go-back a::after {
   /* arrow icon in CSS - for element with nested unordered lists */
   content: '';
   position: absolute;
   top: 50%;
   margin-top: -1px;
   display: inline-block;
   height: 2px;
   width: 10px;
   background: #ffffff;
   -webkit-backface-visibility: hidden;
   backface-visibility: hidden;
 }

 .has-children>a::before,
 .go-back a::before {
   -webkit-transform: rotate(45deg);
   -moz-transform: rotate(45deg);
   -ms-transform: rotate(45deg);
   -o-transform: rotate(45deg);
   transform: rotate(45deg);
 }

 .has-children>a::after,
 .go-back a::after {
   -webkit-transform: rotate(-45deg);
   -moz-transform: rotate(-45deg);
   -ms-transform: rotate(-45deg);
   -o-transform: rotate(-45deg);
   transform: rotate(-45deg);
 }

 @media only screen and (min-width: 1024px) {
   .has-children>a::before,
   .has-children>a::after,
   .go-back a::before,
   .go-back a::after {
     background: #b3b3b3;
   }
 }

 .has-children>a {
   padding-right: 40px;
 }

 .has-children>a::before,
 .has-children>a::after {
   /* arrow goes on the right side - children navigation */
   right: 20px;
   -webkit-transform-origin: 9px 50%;
   -moz-transform-origin: 9px 50%;
   -ms-transform-origin: 9px 50%;
   -o-transform-origin: 9px 50%;
   transform-origin: 9px 50%;
 }

 @media only screen and (min-width: 1024px) {
   .open-to-left .cd-dropdown-content>.has-children>a {
     padding-left: 40px;
     padding-right: 20px;
   }
   .open-to-left .cd-dropdown-content>.has-children>a::before,
   .open-to-left .cd-dropdown-content>.has-children>a::after {
     right: auto;
     left: 20px;
     -webkit-transform-origin: 1px 50%;
     -moz-transform-origin: 1px 50%;
     -ms-transform-origin: 1px 50%;
     -o-transform-origin: 1px 50%;
     transform-origin: 1px 50%;
   }
 }

 .cd-dropdown-content .go-back a {
   padding-left: 40px;
 }

 .cd-dropdown-content .go-back a::before,
 .cd-dropdown-content .go-back a::after {
   /* arrow goes on the left side - go back button */
   left: 20px;
   -webkit-transform-origin: 1px 50%;
   -moz-transform-origin: 1px 50%;
   -ms-transform-origin: 1px 50%;
   -o-transform-origin: 1px 50%;
   transform-origin: 1px 50%;
 }

 .cd-main-content {
   background-color: #e6e6e6;
   min-height: calc(100vh - 100px);
   padding: 2em 5%;
   line-height: 2;
 }

 .no-js .cd-dropdown-wrapper:hover .cd-dropdown {
   visibility: visible;
   opacity: 1;
   -webkit-transform: translateY(0);
   -moz-transform: translateY(0);
   -ms-transform: translateY(0);
   -o-transform: translateY(0);
   transform: translateY(0);
 }

 .no-js .cd-dropdown-wrapper .cd-close {
   display: none;
 }

 @media(max-width:991px) {
   .cd-dropdown-trigger {
     padding: 0 41px 0 0;
   }
   .cd-dropdown {
     z-index: 9999;
   }
 }

 @media(max-width:800px) {
   .cd-dropdown-trigger {
     font-size: 1.2em;
   }
 }

 @media(max-width:736px) {
   .cd-dropdown-trigger {
     padding: 0 38px 0 10px;
   }
   .cd-dropdown .cd-close {
     right: 21px;
   }
 }

 @media(max-width:640px) {
   .cd-dropdown-trigger {
     font-size: 1.1em;
     padding: 0 30px 0 0;
   }
   .cd-dropdown-trigger::after {
     right: 7px;
   }
   .cd-dropdown-trigger::before {
     right: 13px;
   }
 }

 @media(max-width:480px) {
   .cd-dropdown-trigger {
     line-height: 40px;
   }
 }

 @media(max-width:320px) {
   .cd-dropdown-content,
   .cd-dropdown-content ul {
     padding-top: 33px;
   }
   .cd-dropdown-trigger {
     font-size: 1.05em;
     padding: 0 26px 0 0;
   }
 }
/*--//responsive--*/
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .table tbody tr td .qty-btn p {
        margin-bottom: 0;
        line-height: 40px;
        height: 40px;
        padding: 0 15px;
        background-color: #f5f7fa;
        color: #242424;
        font-size: 14px;
        font-weight: 500;
        margin: 0;
    }

    .cart-fav-search a img {
        margin-right: 10px;
        vertical-align: middle;
    }

    .cart-fav-search a span {
        color: #9e9e9e;
    }

    .social-info {
        display: flex;
        justify-content: space-between;
    }

    .icon-social a {
        color: #b5b5b5;
        display: inline-block;
        font-size: 18px;
        transition: all 0.3s ease-in;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    .row1 {
        flex: 0 0 66.666667%;
        max-width: 66.666667%;
    }

    .cart-title {
        margin-top: 50px;
    }

    .cart-title h2 {
        font-size: 30px;
        margin-bottom: 30px;
        color: #242424;
        line-height: 1.3;
        font-weight: 500;
    }

    .table {
        overflow: hidden;
        outline: none;
    }

    .table thead {
        width: 100%;
        display: block;
    }

    .table thead tr {
        display: flex;
        width: 100%;
        height: 40px;
        background-color: #f5f7fa;
        justify-content: space-between;
    }

    .table thead tr th {
        border-top: none;
        border-bottom: none;
        flex: 0 0 25%;
        width: 25%;
        max-width: 25%;
        font-size: 12px;
        color: #242424;
        text-transform: capitalize;
        font-weight: 500;
        padding: 12px;
        width: 179px;
    }

    .table tbody {
        width: 100%;
    }

    .table tbody tr {
        display: flex;
        align-items: center;
        width: 100%;
    }

    .table tbody tr td {
        border: none;
        flex: 0 0 25%;
        width: 25%;
        max-width: 25%;
        padding: 12px;
    }

    .table tbody tr td h5 {
        font-size: 15px;
        color: #252525;
        line-height: 1.3;
        font-weight: 500;
    }

    .qty-btn {
        display: flex;
        margin: 0;
    }

    .btn {
        cursor: pointer;
        display: inline-block;
       
        height: 55px;
        color: #ffffff;
        border: none;
        border-radius: 0;
        padding: 0 7px;
        font-size: 18px;
        line-height: 56px;
        background-color: #fbb710;
        font-weight: 500;
        width: 100%;
    }

    .table tbody tr td .qty-btn p {
        margin-bottom: 0;
        line-height: 40px;
        height: 40px;
        padding: 0 15px;
        background-color: #f5f7fa;
        color: #242424;
        font-size: 14px;
        margin: 0;
        font-weight: 500;
    }

    .quantity input {
        text-align: center;
        background-color: #f5f7fa;
        height: 40px;
        width: 60px;
        border: none;
        color: #242424;
        font-size: 14px;
        position: absolute;
    }

    .row2 {
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
    }

    .cart-summary {
        background-color: #f5f7fa;
        margin-top: 118px;
        position: relative;
        z-index: 1;
        margin-left: 82px;
        width: 304px;
        padding: 30px 20px;
        margin-left: 33px;
    }

    .cart-summary h5 {
        font-size: 18px;
        margin-bottom: 0;
        color: #242424;
        line-height: 1.3;
        font-weight: 500;
    }

    .cart-summary .summary-table {
        margin-top: 30px;
    }

    .cart-summary .summary-table li {
        display: flex;
        justify-content: space-between;
        margin-bottom: 30px;
        text-transform: capitalize;
        list-style: none;
    }

    .cart-summary .summary-table li span {
        color: #6b6b6b;
        font-size: 14px;
    }

    .cart-btn {
        margin-top: 100px;
    }

    .cart-btn a {
        text-decoration: none;
        text-align: center;
    }

    .qty-btn {
        display: flex;
        padding: 0;
        box-sizing: border-box;
    }

    .flex-container {
        display: flex;
    }


    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-control {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .cart-summary {
        max-width: 400px;

    }

    .cart-btn {
        margin-top: 15px;
    }


    .btn:hover {
        background-color: #0056b3;
    }
</style>

<body>

    <body>

        <!-- Add this HTML/PHP code where you want the logout link/button to appear -->
        <!-- top-header -->
        <div class="agile-main-top">
            <div class="container-fluid">
                <div class="row main-top-w3l py-2">
                    <div class="col-lg-4 header-most-top">
                        <p class="text-white text-lg-left text-center">PHONG CÁCH MỚI, ĐẲNG CẤP MỚI
                            <i class="fas fa-shopping-cart ml-1"></i>
                        </p>
                    </div>
                    <div class="col-lg-8 header-right mt-lg-0 mt-2">
                        <!-- header lists -->
                        <ul>
                            <li class="text-center border-right text-white">
                                <i class="fas fa-phone mr-2"></i> 0826807777
                            </li>
                            <li class="text-center border-right text-white">
                                <a href="#" data-toggle="modal" data-target="#dangnhap" class="text-white">
                                    <i class="fas fa-sign-in-alt mr-2"></i> Đăng nhập </a>
                            </li>
                            <li class="text-center text-white">
                                <a href="#" data-toggle="modal" data-target="#dangky" class="text-white">
                                    <i class="fas fa-sign-out-alt mr-2"></i> Đăng ký </a>
                            </li>
                        </ul>
                        <!-- //header lists -->
                    </div>
                </div>
            </div>
        </div>

        <!-- modals -->
        <!-- log in -->
        
        <!-- header-bottom-->
        <div class="header-bot">
            <div class="container">
                <div class="row header-bot_inner_wthreeinfo_header_mid">
                    <!-- logo -->
                    <div class="col-md-3 logo_agile">

                        <a href="index.php" class="font-weight-bold font-italic">
                            <img src="../images/abc.jpg" alt=" " class="img-flude" width="100px">
                        </a>

                    </div>
                    <!-- //logo -->
                    <!-- header-bot -->
                    <div class="col-md-9 header mt-4 mb-md-0 mb-4">
                        <div class="row">
                            <!-- search -->
                            <div class="col-10 agileits_search">
                                <form class="form-inline" action="index.php?quanly=timkiem" method="POST">
                                    <input class="form-control mr-sm-2" type="search" name="search_product" placeholder="Tìm kiếm" aria-label="Search" required="">
                                    <button class="btn my-2 my-sm-0" name="search_btn" type="submit">Tìm kiếm</button>
                                </form>
                            </div>
                            <!-- //search -->
                            <!-- cart details -->
                            <div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
                                <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                                    <form action="index.php?quanly=giohang" method="post" class="last">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="display" value="1">
                                        <button class="btn w3view-cart" type="submit" name="submit" value="">
                                            <i class="fas fa-cart-arrow-down"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <!-- //cart details -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- shop locator (popup) -->
        <!-- //header-bottom -->
        <!-- navigation -->
        <div class="navbar-inner">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto text-center mr-xl-5">
                            <li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
                                <a class="nav-link" href="../index.php">Trang chủ
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>


                            <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                                <a class="nav-link" href="?quanly=danhmuc&amp;id=26" role="button" aria-haspopup="true" aria-expanded="false">
                                    Đồng Hồ </a>
                            </li>

                            <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                                <a class="nav-link" href="?quanly=danhmuc&amp;id=5" role="button" aria-haspopup="true" aria-expanded="false">
                                    Áo </a>
                            </li>

                            <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                                <a class="nav-link" href="?quanly=danhmuc&amp;id=4" role="button" aria-haspopup="true" aria-expanded="false">
                                    Quần </a>
                            </li>

                            <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                                <a class="nav-link" href="?quanly=danhmuc&amp;id=3" role="button" aria-haspopup="true" aria-expanded="false">
                                    Mũ </a>
                            </li>

                            <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                                <a class="nav-link" href="?quanly=danhmuc&amp;id=1" role="button" aria-haspopup="true" aria-expanded="false">
                                    Giày </a>
                            </li>
                            <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                                <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tin tức
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="?quanly=tintuc&amp;id_tin=12">
                                        Giày</a>
                                    <a class="dropdown-item" href="?quanly=tintuc&amp;id_tin=11">
                                        Đồng hồ</a>
                                    <a class="dropdown-item" href="?quanly=tintuc&amp;id_tin=10">
                                        Mũ</a>
                                    <a class="dropdown-item" href="?quanly=tintuc&amp;id_tin=9">
                                        Quần</a>
                                    <a class="dropdown-item" href="?quanly=tintuc&amp;id_tin=8">
                                        Áo</a>
                                </div>

                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <section class="cart-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="row1">
                        <div class="cart-title">
                            <h2 style="text-align: center;">Thanh toán sản phẩm</h2>
                        </div>
                        <div class="cart-table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Tên sản phẩm</th>
                                        <th>Giá</th>
                                        <th>Số lượng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="cart_product_img">
                                            <a href="#">
                                                <img src="../images/d1.jpg" alt="" width="100">
                                            </a>
                                        </td>
                                        <td class="cart_product_desc">
                                            <h5>Đồng hồ fa</h5>
                                        </td>
                                        <td class="price">
                                            <span>75,000 VND</span>
                                        </td>
                                        <td class="qty">
                                            <div class="qty-btn">
                                                <p>Số lượng</p>
                                                <div class="quantity">
                                                    <input type="number" class="qty-text" step="1" min="1" max="300" value="1">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cart_product_img">
                                            <a href="#">
                                                <img src="../images/ao3.jpg" alt="" width="100">
                                            </a>
                                        </td>
                                        <td class="cart_product_desc">
                                            <h5>Áo Hoodie</h5>
                                        </td>
                                        <td class="price">
                                            <span>150,000 VND</span>
                                        </td>
                                        <td class="qty">
                                            <div class="qty-btn">
                                                <p>Số lượng</p>
                                                <div class="quantity">
                                                    <input type="number" class="qty-text" step="1" min="1" max="300" value="1">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cart_product_img">
                                            <a href="#">
                                                <img src="../images/nik.png" alt="" width="100">
                                            </a>
                                        </td>
                                        <td class="cart_product_desc">
                                            <h5>Giày</h5>
                                        </td>
                                        <td class="price">
                                            <span>3,200,000 VND</span>
                                        </td>
                                        <td class="qty">
                                            <div class="qty-btn">
                                                <p>Số lượng</p>
                                                <div class="quantity">
                                                    <input type="number" class="qty-text" step="1" min="1" max="300" value="1">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row2">
                        <div class="cart-summary">
                            <h5>Thanh toán atm</h5>
                            <ul class="summary-table">
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <label class="col-form-label">Số tài khoản</label>
                                        <input type="text" class="form-control" placeholder=" ">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Cvv</label>
                                        <input type="text" class="form-control" placeholder=" ">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Tên</label>
                                        <input type="text" class="form-control" placeholder=" ">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Ngày đăng ký thẻ</label>
                                        <input type="date" class="form-control" placeholder=" ">
                                    </div>
                                    <div class="form-group" id="credit_cards">
                                        <img src="../images/pay1.png" id="visa">
                                        <img src="../images/pay2.png" id="mastercard">
                                        <img src="../images/paypal.png" id="paypay" width="100">
                                    </div>
                            </ul>
                            <div class="cart-btn">
                                <a href="" class="btn">Thanh toán</a>
                            </div>
                            </form>
                        </div>
                        <div class="row2">
                            <div class="cart-summary">
                                <h5>Tổng số tiền sản phẩm</h5>
                                <ul class="summary-table">
                                    <li>
                                        <span>Tổng Cộng:</span>
                                        <span>4,000,000 VND</span>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>

                </div>
        </section>
    </body>

</html>