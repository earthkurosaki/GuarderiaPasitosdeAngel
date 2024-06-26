<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Guardería Pasitos de Ángeles</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    
    {{-- <!-- Styles -->
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
        </style> --}}

    <!-- Tailwid & CSS -->
    {{-- <script src="./js/tailwind.js"></script>
    <link rel="stylesheet" href="./css/styles.css" /> --}}
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Carousel -->
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>

    <!-- Favicon -->
    {{-- <link rel="shortcut icon" href="assets/imgs/favicon.png" type="image/png" /> --}}
    <link rel="icon" type="image/png" href="{{ asset('assets/imgs/favicon.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer"/> -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    {{-- <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">
                            <svg class="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20]" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="currentColor"/></svg>
                        </div>
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header> --}}
    <!-- Navbar -->
    <header class="bg-white shadow-navbar xl:fixed sticky w-full top-0 z-40">
        <nav class="flex justify-between items-center w-[92%] mx-auto">
            <div class="flex items-center">
                <img class="w-16 mr-2" src="assets/imgs/logo-nav.png" alt="Logo" />
                <h3 class="text-md font-semibold hidden lg:block">
                    Guardería Pasitos de Ángeles
                </h3>
            </div>
            <div
                class="nav-links duration-500 fixed md:sticky bg-white md:min-h-fit min-h-[35vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                    <li>
                        <a class="hover:text-[#4fb7f8]" href="#home">Inicio</a>
                    </li>
                    <li>
                        <a class="hover:text-[#4fb7f8]" href="#about">Sobre nosotros</a>
                    </li>
                    <li>
                        <a class="hover:text-[#4fb7f8]" href="#services">Servicios</a>
                    </li>
                    <li>
                        <a class="hover:text-[#4fb7f8]" href="#contact">Contactos</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center gap-2 md:gap-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="inline-block">
                            <button
                                class="bg-[#00b5ec] text-white px-4 md:px-5 py-2 rounded-full hover:bg-[#1696e4] text-sm md:text-base font-semibold">
                                Dashboard
                            </button>
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="inline-block">
                            <button
                                class="bg-[#00b5ec] text-white px-4 md:px-5 py-2 rounded-full hover:bg-[#1696e4] text-sm md:text-base font-semibold">
                                Iniciar sesión
                            </button>
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="inline-block">
                                <button
                                    class="bg-[#00b5ec] text-white px-4 md:px-5 py-2 rounded-full hover:bg-[#1696e4] text-sm md:text-base font-semibold mx-2">
                                    Regístrate
                                </button>
                            </a>
                        @endif
                    @endauth
                @endif
                <!-- Buttom menu -->
                <ion-icon onclick="onToggleMenu(this)" name="menu-outline"
                    class="text-3xl cursor-pointer block md:hidden"></ion-icon>
            </div>
        </nav>
    </header>

    <!-- Home -->
    <div class="pp">
        <section class="aa hero py-12 xl:p-12 xl:pb-0 overflow-hidden md:mt-7 mx-4" id="home">
            <div class="container mx-auto h-full">
                <div class="flex flex-col xl:flex-row items-center justify-between h-full">
                    <div class="hero__text xl:w-[48%] text-center xl:text-left">
                        <h1 class="text-4xl font-bold mb-6">
                            Guardería Pasitos de Ángeles
                        </h1>
                        <p class="mb-[42px] md:max-w-xl">
                            ¡Bienvenidos a Guardería Pasitos de Ángeles!
                            Un espacio lleno de
                            diversión y aprendizaje para tus pequeños.
                        </p>
                        <a href="#contact"><button
                                class="uppercase tracking-[2.20px] bg-[#00b5ec] text-white font-semibold px-4 md:px-5 py-3 rounded-full hover:bg-[#1696e4] text-sm md:text-base">
                                Contáctanos!
                            </button></a>
                    </div>
                    <div class="hero__img hidden xl:flex max-w-[814px] self-end">
                        <img src="./assets/imgs/kids-header.webp" alt="Niños" loading="auto" />
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- About us -->
    <div class="pp">
        <section class="aa bg-[#ffffb5]" id="about">
            <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
                    <div class="mt-12 md:mt-0">
                        <img src="./assets/imgs/kids-in-daycare.webp" alt="About Us Image"
                            class="object-cover rounded-lg shadow-md" loading="auto" />
                    </div>
                    <div class="max-w-lg">
                        <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                            Sobre nosotros
                        </h2>
                        <p class="mt-4 text-lg">
                            En la Guardería Pasitos de Ángeles, nuestra dedicación y pasión
                            por el cuidado y desarrollo de los más pequeños es el corazón de
                            nuestra labor diaria. Con años de experiencia en el cuidado
                            infantil, nos enorgullece ser un refugio confiable para padres y
                            madres que buscan un entorno seguro y enriquecedor para sus hijos
                            mientras cumplen con sus responsabilidades diarias.
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <div class="pp">
        <section class="aa md:h-full flex items-center justify-center">
            <div class="text-center mx-2 sm:mx-10 py-10">
                <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-3 xl:grid-cols-3 mx-auto gap-8">
                    <div class="bg-[#b9e2fc] p-8 rounded-xl shadow-card">
                        <ion-icon name="rocket-outline" class="text-5xl mx-auto"></ion-icon>
                        <h4 class="uppercase text-xl font-bold">Misión</h4>
                        <p class="text-sm leading-7 my-3">
                            Brindar un entorno seguro y enriquecedor donde los niños puedan
                            crecer, aprender y desarrollarse plenamente mientras sus padres
                            pueden trabajar con tranquilidad, sabiendo que sus hijos están en
                            buenas manos.
                        </p>
                    </div>
                    <div class="bg-[#b9e2fc] p-8 rounded-xl shadow-card">
                        <ion-icon name="eye-outline" class="text-5xl mx-auto"></ion-icon>
                        <h4 class="uppercase text-xl font-bold">Visión</h4>
                        <p class="text-sm leading-7 my-3">
                            Ser reconocidos como la mejor guardería en la promoción del
                            bienestar y desarrollo integral de los niños, a través de un
                            equipo dedicado y un enfoque educativo innovador.
                        </p>
                    </div>
                    <div class="bg-[#b9e2fc] p-8 rounded-xl shadow-card">
                        <ion-icon name="heart-outline" class="text-5xl mx-auto"></ion-icon>
                        <h4 class="uppercase text-xl font-bold">Valores</h4>
                        <p class="text-sm leading-7 my-3">
                            En nuestra guardería, priorizamos el cuidado, la seguridad, la
                            empatía y la inclusión, creando un ambiente seguro y estimulante
                            donde cada niño pueda crecer y aprender con alegría y respeto.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Services -->
    <section class="detail">
        <div class="pp">
            <section id="services">
                <h1 class="aa text-3xl font-extrabold text-gray-900 sm:text-4xl text-center mt-14">
                    Servicios
                </h1>
                <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-24 max-w-7xl">
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                        <div class="p-6 shadow-card">
                            <img class="object-cover object-center w-full mb-8 lg:h-48 md:h-36 rounded-xl"
                                src="./assets/imgs/kindergarden.jpg" loading="auto" alt="Guardería" />
                            <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter lg:text-3xl">
                                Guardería
                            </h1>
                            <p class="mx-auto text-base leading-relaxed text-black">
                                Nuestra guardería ofrece un entorno seguro y acogedor, con
                                atención y cuidado amoroso para niños de todas las edades. Con
                                personal altamente calificado, garantizamos a los padres la
                                tranquilidad mientras se ocupan de sus responsabilidades diarias.
                            </p>
                        </div>
                        <div class="p-6 shadow-card">
                            <img class="object-cover object-center w-full mb-8 lg:h-48 md:h-36 rounded-xl"
                                src="./assets/imgs/little-kids.jpg" alt="Clases de nivel inicial" loading="auto" />
                            <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter lg:text-3xl">
                                Clases de nivel inicial
                            </h1>
                            <p class="mx-auto text-base leading-relaxed text-black">
                                Nuestros cursos de nivel inicial ofrecen una sólida base educativa
                                para niños en sus primeros años de aprendizaje. Desde párvulo
                                hasta pre-primario, brindamos un ambiente estimulante y seguro
                                donde los niños exploran, aprenden y crecen, preparándolos para el
                                éxito académico futuro.
                            </p>
                        </div>
                        <div class="p-6 shadow-card">
                            <img class="object-cover object-center w-full mb-8 lg:h-48 md:h-36 rounded-xl"
                                src="./assets/imgs/homework.webp" loading="auto" alt="Sala de tarea" />
                            <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter lg:text-3xl">
                                Sala de tarea
                            </h1>
                            <p class="mx-auto text-base leading-relaxed text-black">
                                Brindamos un entorno acogedor y productivo donde los niños pueden
                                completar sus tareas escolares con la ayuda de tutores
                                calificados, fomentando un ambiente de apoyo y aprendizaje.
                            </p>
                        </div>
                        <div class="p-6 shadow-card">
                            <img class="object-cover object-center w-full mb-8 lg:h-48 md:h-36 rounded-xl"
                                src="./assets/imgs/teacher-with-kids.jpg" loading="auto" alt="Cuidado sabatino" />
                            <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter lg:text-3xl">
                                Cuidado sabatino
                            </h1>
                            <p class="mx-auto text-base leading-relaxed text-black">
                                Los sábados se convierten en días de diversión y cuidado para los
                                niños, ofreciendo un ambiente seguro y actividades recreativas
                                mientras los padres se ocupan de sus responsabilidades.
                            </p>
                        </div>
                        <div class="p-6 shadow-card">
                            <img class="object-cover object-center w-full mb-8 lg:h-48 md:h-36 rounded-xl"
                                src="./assets/imgs/kids-camping.webp" loading="auto" alt="Campamentos" />
                            <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter lg:text-3xl">
                                Campamentos
                            </h1>
                            <p class="mx-auto text-base leading-relaxed text-black">
                                ¡Sumérgete en un verano lleno de aventuras! Nuestro campamento
                                anual ofrece actividades emocionantes al aire libre, talleres
                                creativos y un ambiente seguro para que los niños exploren,
                                crezcan y se diviertan durante las vacaciones escolares.
                            </p>
                        </div>
                        <div class="p-6 shadow-card">
                            <img class="object-cover object-center w-full mb-8 lg:h-48 md:h-36 rounded-xl"
                                src="./assets/imgs/kids-painting.webp" loading="auto" alt="Próximamente" />
                            <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter lg:text-3xl">
                                Próximamente...
                            </h1>
                            <p class="mx-auto text-base leading-relaxed text-black">
                                Estamos emocionados de anunciarte que próximamente estaremos ofreciendo una variedad de nuevos servicios
                                diseñados para enriquecer la experiencia de aprendizaje y diversión de tus hijos. ¡Mantente atento para
                                más actualizaciones y sorpresas!
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <!-- Album -->
    <div class="pp">
        <section class="aa my-8 md:h-full">
            <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl text-center mt-16">
                Álbum de fotos
            </h2>
            <br />
            <div class="max-w-6xl mx-auto">
                <div id="default-carousel" class="relative" data-carousel="static">
                    <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <span
                                class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl">Primer
                                Slide</span>
                            <img src="./assets/imgs/childs-talking.webp"
                                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                alt="..." loading="auto" />
                        </div>

                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="./assets/imgs/girl-happy.webp"
                                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                alt="..." loading="auto" />
                        </div>

                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="./assets/imgs/kids-playing.webp"
                                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                alt="..." loading="auto" />
                        </div>

                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="./assets/imgs/kids-with-teacher.webp"
                                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                alt="..." loading="auto" />
                        </div>

                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="./assets/imgs/group-diverse-cheerful-kids.webp"
                                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                alt="..." loading="auto" />
                        </div>

                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="./assets/imgs/kid.webp"
                                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                alt="..." loading="auto" />
                        </div>
                    </div>

                    <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                            aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                            aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                            aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    </div>

                    <button type="button"
                        class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 group-focus:ring-4 group-focus:ring-black group-focus:outline-none">
                            <svg class="w-5 h-5 text-black sm:w-6 sm:h-6" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7"></path>
                            </svg>
                            <span class="hidden">Anterior</span>
                        </span>
                    </button>
                    <button type="button"
                        class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 0 group-focus:ring-4 group-focus:ring-black group-focus:outline-none">
                            <svg class="w-5 h-5 text-black sm:w-6 sm:h-6" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7"></path>
                            </svg>
                            <span class="hidden">Siguiente</span>
                        </span>
                    </button>
                </div>
            </div>
        </section>
    </div>

    <!-- Contact us -->
    <div class="pp">
        <section class="aa text-gray-600 body-font relative" id="contact">
            <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
                <div
                    class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
                    <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map"
                        marginheight="0" marginwidth="0" scrolling="no"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.420929277415!2d-70.67912442474064!3d19.43741038184307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eb1cf50ea51198b%3A0xf1f7e7a0daf4340c!2sPasitos%20Daycare!5e0!3m2!1ses!2sdo!4v1715188729002!5m2!1ses!2sdo"
                        width="600" height="450" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                        <div class="lg:w-1/2 px-6">
                            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">
                                Dirección
                            </h2>
                            <p class="mt-1">
                                Calle 22 #3, Embrujo III, Santiago, Dominican Republic
                            </p>
                        </div>
                        <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">
                                Correo
                            </h2>
                            <a class="text-blue-500 leading-relaxed">pasitosdaycare01021315@gmail.com</a>
                            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">
                                Teléfono
                            </h2>
                            <p class="leading-relaxed">(809) 612-6601</p>
                            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">
                                Horario
                            </h2>
                            <p class="leading-relaxed">De 7:00am a 6:30pm</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                    <h2 class="text-3xl font-extrabold text-gray-900 sm:text-2xl">
                        Contáctanos
                    </h2>
                    <p class="leading-relaxed mb-5 text-gray-600">
                        Cualquier sugerencia o duda que tenga estamos aquí para servirle.
                    </p>
                    <form method="GET" action="{{ route('contactanos.store')}}">
                        <div class="relative mb-4">
                            <label for="nombre" class="leading-7 text-sm text-gray-600">Nombre</label>
                            <input type="text" id="nombre" name="nombre"
                                class="w-full bg-white rounded border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
                        </div>
                        <div class="relative mb-4">
                            <label for="correo" class="leading-7 text-sm text-gray-600">Correo</label>
                            <input type="email" id="correo" name="correo"
                                class="w-full bg-white rounded border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
                        </div>

                        <div class="relative mb-4">
                            <label for="telefono" class="leading-7 text-sm text-gray-600">Teléfono</label>
                            <input type="text" id="telefono" name="telefono"
                                class="w-full bg-white rounded border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
                        </div>
                        <div class="relative mb-4">
                            <label for="mensaje" class="leading-7 text-sm text-gray-600">Mensaje</label>
                            <textarea id="mensaje" name="mensaje"
                                class="w-full bg-white rounded border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                        </div>
                        <button type="submit"
                            class="text-white bg-[#00b5ec] font-semibold border-0 py-2 px-6 focus:outline-none hover:bg-[#1696e4] rounded text-lg">
                            Enviar
                        </button>
                </div>
                </form>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer class="text-gray-600 body-font bg-blue-50">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                <img class="w-16" src="./assets/imgs/logo-nav.png" alt="Logo" />
                <span class="ml-3 text-xl">Guardería Pasitos de Ángeles</span>
            </a>
            <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">
                © 2024 Guardería Pasitos de Ángeles | Todos los derechos reservados
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                <a class="text-black" href="https://www.facebook.com/pasitosdaycare010213/" target="_blank">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a class="ml-3 text-black" href="https://www.instagram.com/pasitosdaycarerd?igsh=eGJzNXdlc3EzdDhi">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
            </span>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        const $ = (element) => document.querySelector(element);

        //Shadow menu
        window.addEventListener("scroll", function() {
            const navbar = $(".shadow-navbar");
            const header = $(".shadow-header");
            if (window.scrollY > 0) {
                navbar.classList.add("shadow");
                header.classList.add("shadow");
            } else {
                navbar.classList.remove("shadow");
                header.classList.remove("shadow");
            }
        });

        document.addEventListener("DOMContentLoaded", function() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    console.log(entry);
                    if (entry.isIntersecting) {
                        entry.target.classList.add('show');
                        observer.unobserve(entry
                            .target
                        ); // Deja de observar el elemento después de activar la animación
                    }
                });
            });

            const hiddenElements = document.querySelectorAll('.pp');
            hiddenElements.forEach((el) => observer.observe(el));
        });
        /**
         * Metodo
         * @param {String} e - String
         *
         */
        function onToggleMenu(e) {
            const navLinks = $(".nav-links");
            const isActive = e.name === "menu-outline" ? "close" : "menu-outline";
            navLinks.classList.toggle("top-[8.2%]");
        }
    </script>
</body>

</html>
