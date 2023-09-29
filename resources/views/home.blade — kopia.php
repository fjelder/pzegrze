<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

  <!-- Styles -->
  <style>
  /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
  *,
  ::after,
  ::before {
    box-sizing: border-box;
    border-width: 0;
    border-style: solid;
    border-color: #e5e7eb
  }

  ::after,
  ::before {
    --tw-content: ''
  }

  html {
    line-height: 1.5;
    -webkit-text-size-adjust: 100%;
    -moz-tab-size: 4;
    tab-size: 4;
    font-family: Figtree, sans-serif;
    font-feature-settings: normal
  }

  body {
    margin: 0;
    line-height: inherit
  }

  hr {
    height: 0;
    color: inherit;
    border-top-width: 1px
  }

  abbr:where([title]) {
    -webkit-text-decoration: underline dotted;
    text-decoration: underline dotted
  }

  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-size: inherit;
    font-weight: inherit
  }

  a {
    color: inherit;
    text-decoration: inherit
  }

  b,
  strong {
    font-weight: bolder
  }

  code,
  kbd,
  pre,
  samp {
    font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    font-size: 1em
  }

  small {
    font-size: 80%
  }

  sub,
  sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline
  }

  sub {
    bottom: -.25em
  }

  sup {
    top: -.5em
  }

  table {
    text-indent: 0;
    border-color: inherit;
    border-collapse: collapse
  }

  button,
  input,
  optgroup,
  select,
  textarea {
    font-family: inherit;
    font-size: 100%;
    font-weight: inherit;
    line-height: inherit;
    color: inherit;
    margin: 0;
    padding: 0
  }

  button,
  select {
    text-transform: none
  }

  [type=button],
  [type=reset],
  [type=submit],
  button {
    -webkit-appearance: button;
    background-color: transparent;
    background-image: none
  }

  :-moz-focusring {
    outline: auto
  }

  :-moz-ui-invalid {
    box-shadow: none
  }

  progress {
    vertical-align: baseline
  }

  ::-webkit-inner-spin-button,
  ::-webkit-outer-spin-button {
    height: auto
  }

  [type=search] {
    -webkit-appearance: textfield;
    outline-offset: -2px
  }

  ::-webkit-search-decoration {
    -webkit-appearance: none
  }

  ::-webkit-file-upload-button {
    -webkit-appearance: button;
    font: inherit
  }

  summary {
    display: list-item
  }

  blockquote,
  dd,
  dl,
  figure,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  hr,
  p,
  pre {
    margin: 0
  }

  fieldset {
    margin: 0;
    padding: 0
  }

  legend {
    padding: 0
  }

  menu,
  ol,
  ul {
    list-style: none;
    margin: 0;
    padding: 0
  }

  textarea {
    resize: vertical
  }

  input::placeholder,
  textarea::placeholder {
    opacity: 1;
    color: #9ca3af
  }

  [role=button],
  button {
    cursor: pointer
  }

  :disabled {
    cursor: default
  }

  audio,
  canvas,
  embed,
  iframe,
  img,
  object,
  svg,
  video {
    display: block;
    vertical-align: middle
  }

  img,
  video {
    max-width: 100%;
    height: auto
  }

  [hidden] {
    display: none
  }

  *,
  ::before,
  ::after {
    --tw-border-spacing-x: 0;
    --tw-border-spacing-y: 0;
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-rotate: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    --tw-pan-x: ;
    --tw-pan-y: ;
    --tw-pinch-zoom: ;
    --tw-scroll-snap-strictness: proximity;
    --tw-ordinal: ;
    --tw-slashed-zero: ;
    --tw-numeric-figure: ;
    --tw-numeric-spacing: ;
    --tw-numeric-fraction: ;
    --tw-ring-inset: ;
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: rgb(59 130 246 / 0.5);
    --tw-ring-offset-shadow: 0 0 #0000;
    --tw-ring-shadow: 0 0 #0000;
    --tw-shadow: 0 0 #0000;
    --tw-shadow-colored: 0 0 #0000;
    --tw-blur: ;
    --tw-brightness: ;
    --tw-contrast: ;
    --tw-grayscale: ;
    --tw-hue-rotate: ;
    --tw-invert: ;
    --tw-saturate: ;
    --tw-sepia: ;
    --tw-drop-shadow: ;
    --tw-backdrop-blur: ;
    --tw-backdrop-brightness: ;
    --tw-backdrop-contrast: ;
    --tw-backdrop-grayscale: ;
    --tw-backdrop-hue-rotate: ;
    --tw-backdrop-invert: ;
    --tw-backdrop-opacity: ;
    --tw-backdrop-saturate: ;
    --tw-backdrop-sepia:
  }

  ::-webkit-backdrop {
    --tw-border-spacing-x: 0;
    --tw-border-spacing-y: 0;
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-rotate: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    --tw-pan-x: ;
    --tw-pan-y: ;
    --tw-pinch-zoom: ;
    --tw-scroll-snap-strictness: proximity;
    --tw-ordinal: ;
    --tw-slashed-zero: ;
    --tw-numeric-figure: ;
    --tw-numeric-spacing: ;
    --tw-numeric-fraction: ;
    --tw-ring-inset: ;
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: rgb(59 130 246 / 0.5);
    --tw-ring-offset-shadow: 0 0 #0000;
    --tw-ring-shadow: 0 0 #0000;
    --tw-shadow: 0 0 #0000;
    --tw-shadow-colored: 0 0 #0000;
    --tw-blur: ;
    --tw-brightness: ;
    --tw-contrast: ;
    --tw-grayscale: ;
    --tw-hue-rotate: ;
    --tw-invert: ;
    --tw-saturate: ;
    --tw-sepia: ;
    --tw-drop-shadow: ;
    --tw-backdrop-blur: ;
    --tw-backdrop-brightness: ;
    --tw-backdrop-contrast: ;
    --tw-backdrop-grayscale: ;
    --tw-backdrop-hue-rotate: ;
    --tw-backdrop-invert: ;
    --tw-backdrop-opacity: ;
    --tw-backdrop-saturate: ;
    --tw-backdrop-sepia:
  }

  ::backdrop {
    --tw-border-spacing-x: 0;
    --tw-border-spacing-y: 0;
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-rotate: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    --tw-pan-x: ;
    --tw-pan-y: ;
    --tw-pinch-zoom: ;
    --tw-scroll-snap-strictness: proximity;
    --tw-ordinal: ;
    --tw-slashed-zero: ;
    --tw-numeric-figure: ;
    --tw-numeric-spacing: ;
    --tw-numeric-fraction: ;
    --tw-ring-inset: ;
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: rgb(59 130 246 / 0.5);
    --tw-ring-offset-shadow: 0 0 #0000;
    --tw-ring-shadow: 0 0 #0000;
    --tw-shadow: 0 0 #0000;
    --tw-shadow-colored: 0 0 #0000;
    --tw-blur: ;
    --tw-brightness: ;
    --tw-contrast: ;
    --tw-grayscale: ;
    --tw-hue-rotate: ;
    --tw-invert: ;
    --tw-saturate: ;
    --tw-sepia: ;
    --tw-drop-shadow: ;
    --tw-backdrop-blur: ;
    --tw-backdrop-brightness: ;
    --tw-backdrop-contrast: ;
    --tw-backdrop-grayscale: ;
    --tw-backdrop-hue-rotate: ;
    --tw-backdrop-invert: ;
    --tw-backdrop-opacity: ;
    --tw-backdrop-saturate: ;
    --tw-backdrop-sepia:
  }

  .relative {
    position: relative
  }

  .mx-auto {
    margin-left: auto;
    margin-right: auto
  }

  .mx-6 {
    margin-left: 1.5rem;
    margin-right: 1.5rem
  }

  .ml-4 {
    margin-left: 1rem
  }

  .mt-16 {
    margin-top: 4rem
  }

  .mt-6 {
    margin-top: 1.5rem
  }

  .mt-4 {
    margin-top: 1rem
  }

  .-mt-px {
    margin-top: -1px
  }

  .mr-1 {
    margin-right: 0.25rem
  }

  .flex {
    display: flex
  }

  .inline-flex {
    display: inline-flex
  }

  .grid {
    display: grid
  }

  .h-16 {
    height: 4rem
  }

  .h-7 {
    height: 1.75rem
  }

  .h-6 {
    height: 1.5rem
  }

  .h-5 {
    height: 1.25rem
  }

  .min-h-screen {
    min-height: 100vh
  }

  .w-auto {
    width: auto
  }

  .w-16 {
    width: 4rem
  }

  .w-7 {
    width: 1.75rem
  }

  .w-6 {
    width: 1.5rem
  }

  .w-5 {
    width: 1.25rem
  }

  .max-w-7xl {
    max-width: 80rem
  }

  .shrink-0 {
    flex-shrink: 0
  }

  .scale-100 {
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
  }

  .grid-cols-1 {
    grid-template-columns: repeat(1, minmax(0, 1fr))
  }

  .items-center {
    align-items: center
  }

  .justify-center {
    justify-content: center
  }

  .gap-6 {
    gap: 1.5rem
  }

  .gap-4 {
    gap: 1rem
  }

  .self-center {
    align-self: center
  }

  .rounded-lg {
    border-radius: 0.5rem
  }

  .rounded-full {
    border-radius: 9999px
  }

  .bg-gray-100 {
    --tw-bg-opacity: 1;
    background-color: rgb(243 244 246 / var(--tw-bg-opacity))
  }

  .bg-white {
    --tw-bg-opacity: 1;
    background-color: rgb(255 255 255 / var(--tw-bg-opacity))
  }

  .bg-red-50 {
    --tw-bg-opacity: 1;
    background-color: rgb(254 242 242 / var(--tw-bg-opacity))
  }

  .bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
  }

  .from-gray-700\/50 {
    --tw-gradient-from: rgb(55 65 81 / 0.5);
    --tw-gradient-to: rgb(55 65 81 / 0);
    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
  }

  .via-transparent {
    --tw-gradient-to: rgb(0 0 0 / 0);
    --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
  }

  .bg-center {
    background-position: center
  }

  .stroke-red-500 {
    stroke: #ef4444
  }

  .stroke-gray-400 {
    stroke: #9ca3af
  }

  .p-6 {
    padding: 1.5rem
  }

  .px-6 {
    padding-left: 1.5rem;
    padding-right: 1.5rem
  }

  .text-center {
    text-align: center
  }

  .text-right {
    text-align: right
  }

  .text-xl {
    font-size: 1.25rem;
    line-height: 1.75rem
  }

  .text-sm {
    font-size: 0.875rem;
    line-height: 1.25rem
  }

  .font-semibold {
    font-weight: 600
  }

  .leading-relaxed {
    line-height: 1.625
  }

  .text-gray-600 {
    --tw-text-opacity: 1;
    color: rgb(75 85 99 / var(--tw-text-opacity))
  }

  .text-gray-900 {
    --tw-text-opacity: 1;
    color: rgb(17 24 39 / var(--tw-text-opacity))
  }

  .text-gray-500 {
    --tw-text-opacity: 1;
    color: rgb(107 114 128 / var(--tw-text-opacity))
  }

  .underline {
    -webkit-text-decoration-line: underline;
    text-decoration-line: underline
  }

  .antialiased {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
  }

  .shadow-2xl {
    --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
    --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
  }

  .shadow-gray-500\/20 {
    --tw-shadow-color: rgb(107 114 128 / 0.2);
    --tw-shadow: var(--tw-shadow-colored)
  }

  .transition-all {
    transition-property: all;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 150ms
  }

  .selection\:bg-red-500 *::selection {
    --tw-bg-opacity: 1;
    background-color: rgb(239 68 68 / var(--tw-bg-opacity))
  }

  .selection\:text-white *::selection {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity))
  }

  .selection\:bg-red-500::selection {
    --tw-bg-opacity: 1;
    background-color: rgb(239 68 68 / var(--tw-bg-opacity))
  }

  .selection\:text-white::selection {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity))
  }

  .hover\:text-gray-900:hover {
    --tw-text-opacity: 1;
    color: rgb(17 24 39 / var(--tw-text-opacity))
  }

  .hover\:text-gray-700:hover {
    --tw-text-opacity: 1;
    color: rgb(55 65 81 / var(--tw-text-opacity))
  }

  .focus\:rounded-sm:focus {
    border-radius: 0.125rem
  }

  .focus\:outline:focus {
    outline-style: solid
  }

  .focus\:outline-2:focus {
    outline-width: 2px
  }

  .focus\:outline-red-500:focus {
    outline-color: #ef4444
  }

  .group:hover .group-hover\:stroke-gray-600 {
    stroke: #4b5563
  }

  .z-10 {
    z-index: 10
  }

  @media (prefers-reduced-motion: no-preference) {
    .motion-safe\:hover\:scale-\[1\.01\]:hover {
      --tw-scale-x: 1.01;
      --tw-scale-y: 1.01;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }
  }

  @media (prefers-color-scheme: dark) {
    .dark\:bg-gray-900 {
      --tw-bg-opacity: 1;
      background-color: rgb(17 24 39 / var(--tw-bg-opacity))
    }

    .dark\:bg-gray-800\/50 {
      background-color: rgb(31 41 55 / 0.5)
    }

    .dark\:bg-red-800\/20 {
      background-color: rgb(153 27 27 / 0.2)
    }

    .dark\:bg-dots-lighter {
      background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
    }

    .dark\:bg-gradient-to-bl {
      background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
    }

    .dark\:stroke-gray-600 {
      stroke: #4b5563
    }

    .dark\:text-gray-400 {
      --tw-text-opacity: 1;
      color: rgb(156 163 175 / var(--tw-text-opacity))
    }

    .dark\:text-white {
      --tw-text-opacity: 1;
      color: rgb(255 255 255 / var(--tw-text-opacity))
    }

    .dark\:shadow-none {
      --tw-shadow: 0 0 #0000;
      --tw-shadow-colored: 0 0 #0000;
      box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
    }

    .dark\:ring-1 {
      --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
      --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
      box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
    }

    .dark\:ring-inset {
      --tw-ring-inset: inset
    }

    .dark\:ring-white\/5 {
      --tw-ring-color: rgb(255 255 255 / 0.05)
    }

    .dark\:hover\:text-white:hover {
      --tw-text-opacity: 1;
      color: rgb(255 255 255 / var(--tw-text-opacity))
    }

    .group:hover .dark\:group-hover\:stroke-gray-400 {
      stroke: #9ca3af
    }
  }

  @media (min-width: 640px) {
    .sm\:fixed {
      position: fixed
    }

    .sm\:top-0 {
      top: 0px
    }

    .sm\:right-0 {
      right: 0px
    }

    .sm\:ml-0 {
      margin-left: 0px
    }

    .sm\:flex {
      display: flex
    }

    .sm\:items-center {
      align-items: center
    }

    .sm\:justify-center {
      justify-content: center
    }

    .sm\:justify-between {
      justify-content: space-between
    }

    .sm\:text-left {
      text-align: left
    }

    .sm\:text-right {
      text-align: right
    }
  }

  @media (min-width: 768px) {
    .md\:grid-cols-2 {
      grid-template-columns: repeat(2, minmax(0, 1fr))
    }
  }

  @media (min-width: 1024px) {
    .lg\:gap-8 {
      gap: 2rem
    }

    .lg\:p-8 {
      padding: 2rem
    }
  }

  </style>

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Styles -->
  @livewireStyles
</head>

<body class="antialiased">
  <div
    class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">

    <div class="max-w-7xl mx-auto p-6 lg:p-8">
      <div class="flex justify-center">
        <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100">
          <path
            d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z"
            fill="#FF2D20" />
        </svg>
      </div>

      <div class="mt-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
          <a href="/pierwsze-czwartki-miesiace"
            class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
            <div>
              <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300" xml:space="preserve"
                  class="w-10 h-10 stroke-red-500">
                  <path fill="#AA6148"
                    d="M79.16 257.416c-14.429 14.427-34.401 17.855-44.605 7.653-10.194-10.202-6.774-30.171 7.662-44.598 14.43-14.433 34.395-17.858 44.598-7.659 10.203 10.205 6.781 30.171-7.655 44.604z" />
                  <path fill="#BC715C"
                    d="M47.697 225.952c13.11-13.113 30.765-17.102 41.541-10.081-.707-1.087-1.488-2.126-2.423-3.059-10.203-10.198-30.168-6.773-44.598 7.659-14.436 14.427-17.856 34.396-7.662 44.598.935.936 1.976 1.716 3.062 2.424-7.019-10.777-3.036-28.434 10.08-41.541z" />
                  <path fill="#BC715C"
                    d="M39.159 266.395c-.597 0-1.19-.006-1.785-.018a4.457 4.457 0 0 1-4.369-4.544c.044-2.439 2.03-4.385 4.446-4.385.028 0 .056 0 .084.003 10.06.171 17.986.325 20.183-19.954 2.41-22.217 18.472-26.521 26.65-25.704 2.442.248 4.224 2.436 3.98 4.893-.247 2.442-2.432 4.24-4.844 3.995-1.549-.115-14.935-.694-16.94 17.781-2.71 25.019-14.814 27.933-27.405 27.933z" />
                  <path fill="#F4F4F4"
                    d="M231.946 97.044h-5.87v16.302h5.87c21.337 0 22.993 22.591 22.993 29.513v43.851c0 14.262-13.32 27.318-28.863 29.241v15.862c0 .174-.022.343-.024.517 24.483-1.993 45.19-22.432 45.19-45.62v-43.851c0-27.407-15.792-45.815-39.296-45.815z" />
                  <path fill="#F4F4F4"
                    d="M85.093 77.754v133.567c.595.467 1.18.948 1.721 1.491 7.691 7.692 7.633 20.926.961 33.159 5.678 14.604 19.834 24.971 36.444 24.971h62.729c21.61 0 39.127-17.519 39.127-39.13V77.754H85.093z" />
                  <path fill="#F9F9F9"
                    d="M104.406 245.971c6.672-12.233 6.729-25.467-.961-33.159a18.62 18.62 0 0 0-1.721-1.491V77.754h-16.63v133.567c.595.467 1.18.948 1.721 1.491 7.691 7.692 7.633 20.926.961 33.159 5.678 14.604 19.834 24.971 36.444 24.971h16.63c-16.611 0-30.766-10.367-36.444-24.971z" />
                  <path fill="#F4F4F4"
                    d="M152.323 58.889a4.533 4.533 0 0 1-4.535-4.535V29.055a4.535 4.535 0 0 1 9.07 0v25.299a4.533 4.533 0 0 1-4.535 4.535z" />
                  <path fill="#F9F9F9"
                    d="M152.323 54.354V29.055c0-1.674.917-3.121 2.268-3.906a4.483 4.483 0 0 0-2.268-.629 4.535 4.535 0 0 0-4.535 4.535v25.299a4.533 4.533 0 0 0 4.535 4.535 4.48 4.48 0 0 0 2.268-.626c-1.352-.785-2.268-2.232-2.268-3.909z" />
                  <path fill="#F4F4F4"
                    d="M177.326 61.045a4.536 4.536 0 0 1-4.535-4.535V36.59a4.535 4.535 0 0 1 9.07 0v19.919a4.535 4.535 0 0 1-4.535 4.536z" />
                  <path fill="#F9F9F9"
                    d="M177.326 56.509V36.59c0-1.674.918-3.121 2.268-3.906a4.486 4.486 0 0 0-2.268-.629 4.535 4.535 0 0 0-4.535 4.535v19.919a4.535 4.535 0 0 0 4.535 4.535c.83 0 1.599-.239 2.268-.629-1.35-.785-2.268-2.231-2.268-3.906z" />
                  <path fill="#F4F4F4"
                    d="M126.789 63.064a4.535 4.535 0 0 1-4.535-4.535V45.877a4.533 4.533 0 0 1 4.535-4.535 4.533 4.533 0 0 1 4.535 4.535v12.652a4.535 4.535 0 0 1-4.535 4.535z" />
                  <path fill="#F9F9F9"
                    d="M126.789 58.529V45.877c0-1.674.918-3.121 2.268-3.907a4.486 4.486 0 0 0-2.268-.629 4.533 4.533 0 0 0-4.535 4.535v12.652a4.535 4.535 0 0 0 4.535 4.535c.83 0 1.599-.242 2.268-.632-1.35-.784-2.268-2.228-2.268-3.902z" />
                  <path fill="#AA6148"
                    d="M190.365 161.984c0-9.605-7.785-17.389-17.387-17.389-9.334 0-16.925 7.352-17.352 16.576l-.061-.021-.022.006c-.436-9.215-8.024-16.562-17.35-16.562-9.607 0-17.389 7.783-17.389 17.389 0 4.272 1.547 8.179 4.102 11.208h-.005l30.688 30.903 30.685-30.903h-.009a17.328 17.328 0 0 0 4.1-11.207z" />
                  <path fill="#BC715C"
                    d="M139.28 173.192h.004a17.33 17.33 0 0 1-4.101-11.208c0-7.036 4.184-13.081 10.193-15.818a17.267 17.267 0 0 0-7.183-1.571c-9.607 0-17.389 7.783-17.389 17.389 0 4.272 1.547 8.179 4.102 11.208h-.005l30.688 30.903 7.189-7.24-23.498-23.663z" />
                  <g>
                    <path fill="#161616"
                      d="M226.052 236.865a4.54 4.54 0 0 1-3.089-1.214 4.54 4.54 0 0 1-1.447-3.36c.001-.089.016-.425.022-.514l.001-15.827a4.536 4.536 0 0 1 3.979-4.5c13.488-1.668 24.884-12.998 24.884-24.741v-43.851c0-7.509-1.798-24.977-18.458-24.977h-5.87a4.536 4.536 0 0 1-4.535-4.535V97.044a4.535 4.535 0 0 1 4.535-4.535h5.87c26.217 0 43.832 20.235 43.832 50.35v43.851c0 25.432-22.141 47.926-49.358 50.14a4.93 4.93 0 0 1-.366.015zm4.559-17.123v7.382c20.015-3.951 36.096-21.478 36.096-40.414v-43.851c0-25.078-13.645-41.279-34.761-41.279h-1.335v7.231h1.335c20.297 0 27.528 17.589 27.528 34.048v43.851c0 15.15-12.623 29.244-28.863 33.032zM152.323 58.889a4.535 4.535 0 0 1-4.535-4.535V29.055a4.535 4.535 0 1 1 9.07 0v25.299a4.535 4.535 0 0 1-4.535 4.535zM177.326 61.045a4.535 4.535 0 0 1-4.535-4.535V36.59a4.535 4.535 0 1 1 9.07 0v19.919a4.533 4.533 0 0 1-4.535 4.536zM126.789 63.064a4.535 4.535 0 0 1-4.535-4.535V45.877a4.535 4.535 0 1 1 9.07 0v12.652a4.535 4.535 0 0 1-4.535 4.535zM155.59 208.631a4.53 4.53 0 0 1-3.219-1.341l-30.688-30.903a5.016 5.016 0 0 1-.251-.275 21.981 21.981 0 0 1-5.163-14.129c0-12.088 9.836-21.924 21.924-21.924a21.857 21.857 0 0 1 17.39 8.572 21.866 21.866 0 0 1 17.395-8.572c12.088 0 21.923 9.836 21.923 21.924a21.95 21.95 0 0 1-4.984 13.91c-.128.174-.269.34-.424.493l-30.685 30.903a4.522 4.522 0 0 1-3.218 1.342zm-27.325-38.495 27.325 27.522 27.274-27.469a12.875 12.875 0 0 0 2.966-8.206c0-7.087-5.765-12.853-12.852-12.853a12.82 12.82 0 0 0-12.821 12.251 4.537 4.537 0 0 1-1.978 3.54 4.57 4.57 0 0 1-3.802.611 4.546 4.546 0 0 1-3.365-4.16c-.323-6.865-5.956-12.242-12.819-12.242-7.088 0-12.853 5.767-12.853 12.853 0 2.965 1.038 5.856 2.925 8.153zM49.907 275.481c-7.299 0-13.795-2.442-18.559-7.205-11.953-11.961-8.514-34.845 7.662-51.011 16.174-16.175 39.054-19.618 51.011-7.659 11.666 11.666 8.815 33.528-6.489 49.768a4.535 4.535 0 1 1-6.602-6.218c11.721-12.437 14.715-29.096 6.678-37.136-8.414-8.406-25.546-4.978-38.185 7.659-12.426 12.419-15.934 29.905-7.661 38.185 5.126 5.126 13.835 5.97 23.298 2.256a4.541 4.541 0 0 1 5.879 2.566 4.537 4.537 0 0 1-2.566 5.879c-4.983 1.953-9.885 2.916-14.466 2.916z" />
                    <path fill="#161616"
                      d="M186.949 275.478H124.22c-18.125 0-34.091-10.937-40.671-27.862a4.54 4.54 0 0 1 .245-3.815c5.916-10.848 5.842-21.753-.186-27.782a13.629 13.629 0 0 0-1.314-1.128 4.539 4.539 0 0 1-1.736-3.57v-88.91a4.535 4.535 0 0 1 9.07 0v86.813c.134.127.267.254.397.384 8.533 8.536 9.542 22.71 2.753 36.561 5.619 12.36 17.753 20.238 31.441 20.238h62.729c19.073 0 34.591-15.52 34.591-34.594V82.29H89.629v19.199a4.535 4.535 0 0 1-9.07 0V77.754a4.535 4.535 0 0 1 4.535-4.535h140.982a4.535 4.535 0 0 1 4.535 4.535v154.059c0 24.076-19.587 43.665-43.662 43.665z" />
                    <path fill="#161616"
                      d="M37.36 266.575a4.536 4.536 0 0 1-.137-9.068l.847-.027c10.884-.322 17.454-.52 19.633-20.067 2.489-22.331 18.819-26.639 27.081-25.783a4.534 4.534 0 0 1 4.051 4.972 4.537 4.537 0 0 1-4.946 4.054c-1.563-.139-15.109-.735-17.172 17.761-3.05 27.378-17.095 27.794-28.379 28.131l-.836.024c-.046.003-.095.003-.142.003z" />
                  </g>
                </svg>
              </div>

              <h2 class="mt-6 text-xl font-semibold text-gray-900">Spotkania pierwszoczwartkowe</h2>

              <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                Comiesięczne pierwszoczwartkowe spotkania ministrantów z rodzicami.
              </p>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
            </svg>
          </a>

          <a href="https://laracasts.com"
            class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
            <div>
              <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999"
                  style="enable-background:new 0 0 511.999 511.999" xml:space="preserve"
                  class="w-10 h-10 stroke-red-500">
                  <path style="fill:#ce3838"
                    d="M346.598 164.939a347.616 347.616 0 0 0-37.897-89.436c-14.535 11.382-32.845 18.174-52.748 18.174s-38.214-6.793-52.748-18.174c-49.403 82.225-62.028 180.364-37.897 270.727a348.319 348.319 0 0 0 36.473 87.063l1.424-.825c14.535-11.382 32.845-18.174 52.748-18.174s38.214 6.793 52.748 18.174l1.424.825c32.234-54.659 48.352-116.178 48.352-177.708 0-30.495-3.956-60.989-11.879-90.646z" />
                  <path style="fill:#ee4948"
                    d="M320.617 164.939c-5.91-31.048-14.925-61.18-27.034-89.436-10.369 11.382-23.431 18.174-37.629 18.174-14.199 0-27.26-6.793-37.629-18.174-35.243 82.225-44.249 180.364-27.034 270.727 5.748 30.177 14.424 59.496 26.019 87.063l1.016-.825c10.369-11.382 23.431-18.174 37.629-18.174 14.199 0 27.26 6.793 37.629 18.174l1.016.825c22.995-54.659 34.493-116.178 34.493-177.708-.002-30.495-2.824-60.989-8.476-90.646z" />
                  <path style="fill:#f2c386"
                    d="M101.55 409.987v28.991a34.383 34.383 0 0 1-22.695 32.336l-24.831 8.974-22.786-22.774 8.985-24.831a34.37 34.37 0 0 1 32.325-22.695l29.002-.001zM480.656 53.655l-8.974 24.843c-4.928 13.608-17.858 22.684-32.336 22.684h-28.991V72.191a34.384 34.384 0 0 1 22.684-32.336l24.843-8.974 22.774 22.774z" />
                  <path style="fill:#666"
                    d="M295.511 216.026v99.461c0 10.929-4.431 20.808-11.585 27.974-7.154 7.154-17.055 11.585-27.974 11.585-21.848 0-39.558-17.711-39.558-39.559v-20.344l79.117-79.117zM295.511 195.681v20.344l-79.117 79.117v-99.461c0-21.848 17.711-39.559 39.558-39.559s39.559 17.712 39.559 39.559z" />
                  <path style="fill:#f2c386"
                    d="M255.953 414.293c19.904 0 38.214 6.793 52.748 18.174l1.424.825c-14.704 24.922-32.766 48.408-54.173 69.815-21.407-21.407-39.468-44.893-54.173-69.815l1.424-.825c14.536-11.381 32.846-18.174 52.75-18.174zM255.953 11.452v82.225c-19.904 0-38.214-6.793-52.748-18.174 14.433-24.04 32.02-46.713 52.748-67.442a119.35 119.35 0 0 1 1.695 1.718l-1.695 1.673z" />
                  <path style="fill:#f2c386"
                    d="M308.701 75.502c-14.535 11.382-32.845 18.174-52.748 18.174V11.452l1.695-1.673c19.994 20.254 37.016 42.35 51.053 65.723z" />
                  <path
                    d="M486.703 48.077 463.93 25.303a8.48 8.48 0 0 0-8.875-1.979L430.208 32.3c-16.913 6.119-28.276 22.318-28.276 40.307v25.479l-51.131 51.131a355.974 355.974 0 0 0-34.779-77.663c-14.602-24.312-32.193-46.96-52.208-67.234a130.849 130.849 0 0 0-1.813-1.838 8.48 8.48 0 0 0-11.991.001c-20.844 20.845-39.019 44.084-54.02 69.07a356.483 356.483 0 0 0-34.992 78.304 8.477 8.477 0 1 0 16.199 5.005 339.695 339.695 0 0 1 28.75-66.713c12.589 7.952 26.705 12.728 41.581 14.039v26.659a8.477 8.477 0 0 0 8.477 8.477 8.476 8.476 0 0 0 8.477-8.477v-26.659c14.873-1.311 28.988-6.085 41.576-14.035a339.128 339.128 0 0 1 31.108 74.699l-33.129 33.127c-.062-26.433-21.583-47.918-48.031-47.918-26.487 0-48.035 21.548-48.035 48.035v95.95l-37.941 37.941c-10.034-45.57-10.693-93.386-1.826-139.209a8.477 8.477 0 0 0-6.711-9.933c-4.596-.892-9.043 2.116-9.933 6.711-9.986 51.594-8.462 105.601 4.379 156.521l-57.846 57.846H72.601c-17.993 0-34.189 11.37-40.297 28.288l-8.985 24.831a8.477 8.477 0 0 0 1.979 8.88l22.786 22.774a8.474 8.474 0 0 0 8.874 1.977l24.835-8.975c16.92-6.121 28.288-22.32 28.288-40.308v-25.479l51.133-51.133a356.725 356.725 0 0 0 33.32 75.235c15.302 25.933 33.968 49.991 55.479 71.501 1.656 1.655 3.826 2.483 5.995 2.483s4.339-.827 5.995-2.483c21.511-21.511 40.177-45.568 55.479-71.503 32.402-54.94 49.527-117.879 49.527-182.014 0-29.738-3.682-59.342-10.937-88.075l57.85-57.85H439.4c17.984 0 34.182-11.362 40.309-28.281l8.973-24.843a8.477 8.477 0 0 0-1.979-8.871zM214.662 73.604c9.721-15.366 20.726-29.986 32.867-43.709v55.252a75.979 75.979 0 0 1-32.867-11.543zm49.82-43.703c12.13 13.708 23.137 28.33 32.866 43.704a75.96 75.96 0 0 1-32.866 11.542V29.901zm-39.559 166.196c0-17.139 13.944-31.082 31.082-31.082 17.138 0 31.082 13.943 31.082 31.082v16.833l-62.163 62.163v-78.996zM93.125 439.393c0 10.873-6.873 20.664-17.099 24.363L56.259 470.9l-15.163-15.157 7.153-19.768c3.693-10.226 13.478-17.097 24.352-17.097h20.524v20.515zm162.88 51.992a342.9 342.9 0 0 1-42.772-55.26 76.002 76.002 0 0 1 34.295-12.471v42.005a8.477 8.477 0 0 0 8.477 8.477 8.476 8.476 0 0 0 8.477-8.477v-42.005a76.006 76.006 0 0 1 34.295 12.471 342.756 342.756 0 0 1-42.772 55.26zM350.052 256c0 58.052-14.733 115.062-42.663 165.486-12.918-8.462-27.51-13.515-42.907-14.873v-26.286a8.477 8.477 0 0 0-8.477-8.477 8.476 8.476 0 0 0-8.477 8.477v26.286c-15.396 1.357-29.988 6.41-42.905 14.872a340.007 340.007 0 0 1-29.779-72.336l33.129-33.129c.064 26.433 21.585 47.918 48.032 47.918 12.833 0 24.896-4.996 33.973-14.073 9.068-9.083 14.062-21.145 14.062-33.963a8.477 8.477 0 0 0-8.477-8.477 8.476 8.476 0 0 0-8.477 8.477c0 8.295-3.234 16.103-9.103 21.98-5.868 5.869-13.676 9.102-21.979 9.102-17.138 0-31.082-13.943-31.082-31.082V299.07l62.163-62.163v50.48a8.477 8.477 0 0 0 8.477 8.477 8.476 8.476 0 0 0 8.477-8.477v-67.434l37.939-37.939A343.077 343.077 0 0 1 350.052 256zM463.765 76.027c-3.703 10.224-13.494 17.094-24.367 17.094h-20.513V72.607c0-10.875 6.868-20.666 17.086-24.364l19.778-7.144 15.157 15.158-7.141 19.77z" />
                </svg>
              </div>

              <h2 class="mt-6 text-xl font-semibold text-gray-900">Spływy kajakowe</h2>

              <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them
                out, see for yourself, and massively level up your development skills in the process.
              </p>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
            </svg>


          </a>

          <a href="https://laravel-news.com"
            class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
            <div>
              <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">


                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                  xml:space="preserve" class="w-10 h-10 stroke-red-500">
                  <path style="fill:#d59a4c"
                    d="M472.881 250.176v21.355h-3.873l-17.885 215.167c-.836 10.062-9.226 17.802-19.298 17.802H80.174c-10.071 0-18.461-7.74-19.298-17.802L42.992 271.531v-21.355h429.889z" />
                  <path style="fill:#bc8544"
                    d="M472.881 250.176v21.355h-3.873l-17.885 215.167c-.836 10.062-9.226 17.802-19.298 17.802H80.174c-9.686 0-17.796-7.165-19.148-16.664h363.588c5.029 0 9.221-3.86 9.647-8.884l19.258-226.835h3.873v-1.941h15.489z" />
                  <path style="fill:#ffe6e6"
                    d="M472.881 250.176v174.727c0 10.722-8.67 19.414-19.364 19.414h-33.888a4.847 4.847 0 0 1-4.841-4.854v-4.854h-48.411v4.854a4.847 4.847 0 0 1-4.841 4.854h-33.888c-10.695 0-19.364-8.692-19.364-19.414v-38.828c0-5.361 4.335-9.707 9.682-9.707V337.54c-5.347 0-9.682-4.346-9.682-9.707v-77.656h164.597v-.001z" />
                  <path style="fill:#f49898" d="M361.536 252.112h58.093v192.204h-58.093V252.112z" />
                  <path style="fill:#f26966" d="M308.284 327.832h164.597v58.242H308.284v-58.242z" />
                  <path style="fill:#ed322e" d="M361.536 327.832h58.093v58.242h-58.093v-58.242z" />
                  <path style="fill:#bc8544"
                    d="M484.5 242.411v19.414c0 5.361-4.335 9.707-9.682 9.707H37.182c-5.347 0-9.682-4.346-9.682-9.707v-19.414c0-5.361 4.335-9.707 9.682-9.707h301.117V201.64h29.047v31.064h107.472c5.347 0 9.682 4.346 9.682 9.707z" />
                  <path style="fill:#d59a4c"
                    d="M314.093 36.621H197.907c-13.347 0-24.206 10.886-24.206 24.268v218.408c0 8.041-6.502 14.561-14.523 14.561s-14.523-6.519-14.523-14.561V60.889c0-29.439 23.889-53.389 53.252-53.389h116.186c29.363 0 53.252 23.95 53.252 53.389v171.81h-29.047V60.889c.001-13.382-10.858-24.268-24.205-24.268z" />
                  <path
                    d="M236.482 416.875c-7.022 6.724-17.522 10.58-28.808 10.58s-21.786-3.856-28.809-10.58a7.499 7.499 0 0 1-.23-10.604 7.499 7.499 0 0 1 10.604-.231c4.195 4.017 11.088 6.415 18.436 6.415s14.239-2.398 18.435-6.415a7.5 7.5 0 1 1 10.372 10.835zm40.261-58.727a7.5 7.5 0 0 0-10.604-.231c-4.195 4.017-11.087 6.415-18.435 6.415s-14.24-2.398-18.436-6.415a7.499 7.499 0 0 0-10.604.231 7.5 7.5 0 0 0 .23 10.604c7.022 6.724 17.523 10.58 28.809 10.58s21.785-3.856 28.808-10.58a7.498 7.498 0 0 0 .232-10.604zm-29.038 117.429c11.285 0 21.785-3.856 28.808-10.58a7.499 7.499 0 0 0 .23-10.604 7.5 7.5 0 0 0-10.604-.231c-4.195 4.017-11.087 6.415-18.435 6.415s-14.24-2.398-18.436-6.415a7.499 7.499 0 0 0-10.604.231 7.5 7.5 0 0 0 .23 10.604c7.025 6.723 17.526 10.58 28.811 10.58zm-21.596-165.782c-4.195 4.017-11.087 6.415-18.435 6.415s-14.24-2.398-18.436-6.415a7.5 7.5 0 0 0-10.604.231 7.5 7.5 0 0 0 .23 10.604c7.022 6.724 17.523 10.58 28.809 10.58s21.785-3.856 28.808-10.58a7.499 7.499 0 0 0 .23-10.604c-2.86-2.992-7.608-3.095-10.602-.231zm227.087 151.963c-4.128-.349-7.752 2.725-8.096 6.853l-1.451 17.465c-.509 6.125-5.703 10.923-11.823 10.923H163.051c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h268.775c13.861 0 25.621-10.841 26.772-24.681l1.451-17.466a7.499 7.499 0 0 0-6.853-8.094zM90.089 416.875c7.024 6.724 17.524 10.58 28.809 10.58s21.785-3.856 28.808-10.58a7.499 7.499 0 0 0 .23-10.604 7.5 7.5 0 0 0-10.604-.231c-4.195 4.017-11.087 6.415-18.435 6.415s-14.239-2.398-18.436-6.416a7.498 7.498 0 0 0-10.604.232 7.5 7.5 0 0 0 .232 10.604zm50.403-58.958a7.499 7.499 0 0 0-10.604.231 7.5 7.5 0 0 0 .23 10.604c7.022 6.724 17.523 10.58 28.809 10.58s21.785-3.856 28.808-10.58a7.499 7.499 0 0 0 .23-10.604 7.5 7.5 0 0 0-10.604-.231c-4.195 4.017-11.087 6.415-18.435 6.415s-14.238-2.397-18.434-6.415zM492 242.412v19.414c0 7.539-4.866 13.96-11.618 16.281v146.795c0 14.84-12.052 26.914-26.865 26.914H327.648c-14.813 0-26.864-12.074-26.864-26.914v-145.87H181.201v.264c0 12.164-9.88 22.061-22.023 22.061s-22.023-9.896-22.023-22.061v-.264H51.141l17.21 207.044C68.859 492.202 74.054 497 80.174 497h53.83c4.143 0 7.5 3.358 7.5 7.5s-3.357 7.5-7.5 7.5h-53.83c-13.861 0-25.621-10.841-26.772-24.68L36.086 278.998C27.12 278.43 20 270.945 20 261.826v-19.414c0-9.488 7.708-17.207 17.183-17.207h99.972V60.889C137.154 27.314 164.408 0 197.907 0h116.186c33.499 0 60.753 27.314 60.753 60.889v164.316h99.972c9.474 0 17.182 7.719 17.182 17.207zm-354.846-2.207H37.183c-1.203 0-2.183.99-2.183 2.207v19.414c0 1.217.979 2.207 2.183 2.207h5.646c.113-.003.228-.003.341 0h93.984v-23.828zm60.753-211.084h116.186c17.482 0 31.706 14.251 31.706 31.768v164.316h14.047V60.889c0-25.303-20.524-45.889-45.753-45.889H197.907c-25.229 0-45.753 20.585-45.753 45.889v218.408c0 3.893 3.15 7.061 7.023 7.061s7.023-3.167 7.023-7.061V60.889c.001-17.517 14.225-31.768 31.707-31.768zm156.129 364.453h-38.252v31.328c0 6.569 5.322 11.914 11.864 11.914h26.388v-43.242zm0-114.541h-38.252v99.542h38.252v-43.242H337.33c-4.143 0-7.5-3.358-7.5-7.5s3.357-7.5 7.5-7.5h16.706v-41.3zm58.093 114.541h-43.093v43.242h43.093v-43.242zm0-58.242h-43.093v43.242h43.093v-43.242zm0-56.299h-43.093v41.299h43.093v-41.299zm53.253 56.299h-38.253v43.242h16.706c4.143 0 7.5 3.358 7.5 7.5s-3.357 7.5-7.5 7.5h-16.706v43.242h26.388c6.543 0 11.865-5.345 11.865-11.914v-89.57zm0-56.299h-38.253v41.299h38.253v-41.299zM477 242.412c0-1.217-.979-2.207-2.183-2.207H288.92c-4.143 0-7.5-3.358-7.5-7.5s3.357-7.5 7.5-7.5h41.879V60.889c0-9.246-7.494-16.768-16.706-16.768H197.907c-9.212 0-16.706 7.522-16.706 16.768v164.316h81.255c4.143 0 7.5 3.358 7.5 7.5s-3.357 7.5-7.5 7.5h-81.255v23.828h126.77c.209-.009.418-.009.627 0h52.625c.209-.009.418-.009.627 0h57.466c.209-.009.418-.009.627 0h52.626c.209-.009.418-.009.627 0h1.622c1.203 0 2.183-.99 2.183-2.207v-19.414H477zM158.928 475.577c11.285 0 21.785-3.856 28.808-10.58a7.499 7.499 0 0 0 .23-10.604 7.5 7.5 0 0 0-10.604-.231c-4.195 4.017-11.087 6.415-18.435 6.415s-14.24-2.398-18.436-6.415a7.499 7.499 0 0 0-10.604.231 7.5 7.5 0 0 0 .23 10.604c7.025 6.723 17.526 10.58 28.811 10.58zm-21.596-165.782c-4.195 4.017-11.087 6.415-18.435 6.415s-14.239-2.398-18.436-6.416a7.498 7.498 0 0 0-10.604.232 7.5 7.5 0 0 0 .231 10.604c7.024 6.724 17.524 10.58 28.809 10.58s21.785-3.856 28.808-10.58a7.499 7.499 0 0 0 .23-10.604 7.5 7.5 0 0 0-10.603-.231z" />
                </svg>
              </div>

              <h2 class="mt-6 text-xl font-semibold text-gray-900">Pikniki parafialne</h2>

              <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                Laravel News is a community driven portal and newsletter aggregating all of the latest and most
                important news in the Laravel ecosystem, including new package releases and tutorials.
              </p>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
            </svg>

          </a>

          <div
            class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
            <div>
              <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  class="w-7 h-7 stroke-red-500">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                </svg>
              </div>

              <h2 class="mt-6 text-xl font-semibold text-gray-900">Vibrant Ecosystem</h2>

              <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com"
                  class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>,
                <a href="https://vapor.laravel.com"
                  class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>,
                <a href="https://nova.laravel.com"
                  class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>,
                and <a href="https://envoyer.io"
                  class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a>
                help you take your projects to the next level. Pair them with powerful open source libraries like <a
                  href="https://laravel.com/docs/billing"
                  class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>,
                <a href="https://laravel.com/docs/dusk"
                  class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>,
                <a href="https://laravel.com/docs/broadcasting"
                  class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>,
                <a href="https://laravel.com/docs/horizon"
                  class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>,
                <a href="https://laravel.com/docs/sanctum"
                  class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>,
                <a href="https://laravel.com/docs/telescope"
                  class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>,
                and more.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
        <div class="text-center text-sm text-gray-500 sm:text-left">
          <div class="flex items-center gap-4">
            <a href="https://www.zegrze.archpoznan.pl/"
              class="group inline-flex items-center hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                class="-mt-2 mr-2 w-5 h-5 stroke-gray-400 group-hover:stroke-gray-600">
                <path
                  d="M22.807,14.222,12.515,5.744V3.411h1.053a.516.516,0,0,0,0-1.031H12.515V1.521a.515.515,0,0,0-1.03,0V2.38H10.432a.516.516,0,0,0,0,1.031h1.053V5.744L1.193,14.222a.516.516,0,1,0,.656.8l1.905-1.57v9.031a.516.516,0,0,0,.516.515H9.279a.516.516,0,0,0,.515-.515V18.114a2.206,2.206,0,1,1,4.412,0v4.365a.516.516,0,0,0,.515.515H19.73a.516.516,0,0,0,.516-.515V13.448l1.905,1.57a.516.516,0,1,0,.656-.8Zm-3.592,7.742H15.237v-3.85a3.237,3.237,0,0,0-6.474,0v3.85H4.785V12.6L12,6.655,19.215,12.6Z" />
              </svg>
              Parafia Najświętszej Bogarodzicy Maryji w Poznaniu
            </a>
          </div>
        </div>


      </div>
    </div>
  </div>
</body>

</html>
