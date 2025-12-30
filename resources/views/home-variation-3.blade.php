@extends('layouts.app')

@section('title', 'Beacon Energy - Leading Clean Energy Solutions')

@push('styles')
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<link rel="stylesheet" href="{{ asset('css/home-variation-3.css') }}?v={{ time() }}">
<!-- Sungrow CSS - Must load in order -->
<link rel="stylesheet" href="https://official-oversears-file.sungrowpower.com/website/_next/static/css/2e1d9ed33309be03.css" data-precedence="next">
<link rel="stylesheet" href="https://official-oversears-file.sungrowpower.com/website/_next/static/css/38c250513713d890.css" data-precedence="next">
<link rel="stylesheet" href="https://official-oversears-file.sungrowpower.com/website/_next/static/css/003cb475f3df04a5.css" data-precedence="next">
<link rel="stylesheet" href="https://official-oversears-file.sungrowpower.com/website/_next/static/css/99333998b0d76edd.css" data-precedence="next">

<!-- Additional animation styles -->
<style type="text/css">
/* Animation keyframes */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes scaleIn {
    from {
        transform: scaleY(0);
    }
    to {
        transform: scaleY(1);
    }
}

/* Word animation */
.word {
    transition: color 0.3s ease;
}

/* Line animation */
.bg-primary.origin-top {
    transition: transform 1s ease;
}

/* Parallax scrolling elements */
[style*="opacity: 0"] {
    transition: opacity 0.6s ease, transform 0.6s ease;
}

/* Accordion animations */
.data-\[state\=closed\]\:animate-accordion-up {
    animation: accordion-up 0.2s ease-out;
}

.data-\[state\=open\]\:animate-accordion-down {
    animation: accordion-down 0.2s ease-out;
}

@keyframes accordion-down {
    from {
        height: 0;
    }
    to {
        height: var(--radix-accordion-content-height);
    }
}

@keyframes accordion-up {
    from {
        height: var(--radix-accordion-content-height);
    }
    to {
        height: 0;
    }
}

/* Smooth scroll behavior */
html {
    scroll-behavior: smooth;
}

/* Video play overlay styles */
.video-play-overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 10;
    cursor: pointer;
    background: rgba(0, 0, 0, 0.6);
    border-radius: 50%;
    width: 80px;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: opacity 0.3s ease;
    backdrop-filter: blur(4px);
}

.video-play-overlay:hover {
    background: rgba(0, 0, 0, 0.8);
    transform: translate(-50%, -50%) scale(1.1);
}

.video-play-overlay svg {
    width: 40px;
    height: 40px;
    fill: white;
    margin-left: 5px;
}

/* Viewport width utilities - these are critical for Sungrow design */
.vw-text-\[52\] {
    font-size: 3.25vw;
}

.vw-text-\[32\] {
    font-size: 2vw;
}

.vw-text-\[72\] {
    font-size: 4.5vw;
}

.vw-text-\[24\] {
    font-size: 1.5vw;
}

.vw-text-\[18\] {
    font-size: 1.125vw;
}

.vw-text-\[40\] {
    font-size: 2.5vw;
}

.vw-text-\[20\] {
    font-size: 1.25vw;
}

.vw-text-\[14\] {
    font-size: 0.875vw;
}

.vw-text-\[12\] {
    font-size: 0.75vw;
}

@media (max-width: 1024px) {
    .vw-text-\[52\] { font-size: 2.5rem; }
    .vw-text-\[32\] { font-size: 1.5rem; }
    .vw-text-\[72\] { font-size: 3rem; }
    .vw-text-\[24\] { font-size: 1.25rem; }
    .vw-text-\[18\] { font-size: 1rem; }
    .vw-text-\[40\] { font-size: 2rem; }
    .vw-text-\[20\] { font-size: 1.125rem; }
    .vw-text-\[14\] { font-size: 0.875rem; }
    .vw-text-\[12\] { font-size: 0.75rem; }
}

/* System colors */
.text-system-gray {
    color: rgb(96, 96, 96);
}

.text-system-orange {
    color: rgb(255, 121, 0);
}

.bg-system-orange {
    background-color: rgb(255, 121, 0);
}

.bg-primary {
    background-color: rgb(255, 121, 0);
}

.border-primary {
    border-color: rgb(255, 121, 0);
}

.text-primary {
    color: rgb(255, 121, 0);
}

/* Rounded corners */
.rounded-pc {
    border-radius: 0.5vw;
}

@media (max-width: 1024px) {
    .rounded-pc {
        border-radius: 8px;
    }
}
</style>
@endpush

@section('content')


<!-- Section: OnlyImage-006cd3ee-da68-4331-9ad6-59251dda0c37 -->
<div id="OnlyImage-006cd3ee-da68-4331-9ad6-59251dda0c37" style="background-color: transparent; margin-bottom: 0px;"><div class="w-full vw-px-[100] relative !px-0"><div class="relative overflow-hidden vw-h-[1080]"><video class="size-full object-cover" autoplay muted loop playsinline preload="auto"><source src="https://official-oversears-file.sungrowpower.com/page-assets-process/7f3be4c2-5d0e-4596-ad91-13842848747b.webm" type="video/webm" /><source src="https://official-oversears-file.sungrowpower.com/page-assets/7f3be4c2-5d0e-4596-ad91-13842848747b.mp4" type="video/mp4" /></video></div></div></div>


<!-- Section: ParallaxScrolling-e2854acf-d80b-4569-9059-27c554ca51a9 -->
<div id="ParallaxScrolling-e2854acf-d80b-4569-9059-27c554ca51a9" style="background-color: transparent; margin-bottom: 0px;"><div class="mx-auto overflow-hidden" style="width: 100%; border-radius: 0vw;"><div class="relative left-1/2 -translate-x-1/2"><a target="_self" class="block h-full p-0 empty:hidden" href="/en/products/residential-energy-storage-system/mgrl"><div class="relative w-full h-dvh text-white" style="transform: none;"><div class="absolute inset-0"><picture class="contents"><source srcset="https://official-oversears-file.sungrowpower.com/page-assets-process/701862d3-2f9a-4a69-800a-89478dcd27cd.webp" type="image/webp" /><img draggable="false" alt="Home Page" loading="lazy" width="1920" height="1080" decoding="async" data-nimg="1" class="size-full object-cover" src="https://official-oversears-file.sungrowpower.com/page-assets/701862d3-2f9a-4a69-800a-89478dcd27cd.png" style="color: transparent;" /></picture></div><div class="w-full vw-px-[100] relative flex flex-col items-center h-full"><div class="flex flex-col items-center vw-gap-[30] vw-pt-[200]" style="opacity: 0; transform: translateY(50px);"><h2 class="vw-text-[52] leading-snug font-medium whitespace-pre-wrap text-system-gray empty:hidden" style="color: rgb(255, 255, 255);"></h2><p class="vw-text-[18] leading-[1.44] font-normal whitespace-pre-wrap text-system-gray empty:hidden" style="color: rgb(255, 255, 255);"></p></div></div></div></a><a target="_self" class="block h-full p-0 empty:hidden" href="/en/event/2025-mea-pv-ess-summit"><div class="relative w-full h-dvh text-white" style="transform: none;"><div class="absolute inset-0"><picture class="contents"><source srcset="https://official-oversears-file.sungrowpower.com/page-assets-process/06890d21-1579-4c01-8ed2-7ff057ae64cd.webp" type="image/webp" /><img draggable="false" alt="Home Page" loading="lazy" width="1920" height="1080" decoding="async" data-nimg="1" class="size-full object-cover" src="https://official-oversears-file.sungrowpower.com/page-assets/06890d21-1579-4c01-8ed2-7ff057ae64cd.png" style="color: transparent;" /></picture></div><div class="w-full vw-px-[100] relative flex flex-col items-center h-full"><div class="flex flex-col items-center vw-gap-[30] vw-pt-[200]" style="opacity: 0; transform: translateY(50px);"><h2 class="vw-text-[52] leading-snug font-medium whitespace-pre-wrap text-system-gray empty:hidden" style="color: rgb(255, 255, 255);"></h2><p class="vw-text-[18] leading-[1.44] font-normal whitespace-pre-wrap text-system-gray empty:hidden" style="color: rgb(255, 255, 255);"></p></div></div></div></a><a target="_self" class="block h-full p-0 empty:hidden" href="/en/about-us/sungrow-foundation"><div class="relative w-full h-dvh text-white" style="transform: none;"><div class="absolute inset-0"><picture class="contents"><source srcset="https://official-oversears-file.sungrowpower.com/page-assets-process/ff3c6442-6d3b-4442-a7de-344b379df758.webp" type="image/webp" /><img draggable="false" alt="Home Page" loading="lazy" width="1920" height="1080" decoding="async" data-nimg="1" class="size-full object-cover" src="https://official-oversears-file.sungrowpower.com/page-assets/ff3c6442-6d3b-4442-a7de-344b379df758.png" style="color: transparent;" /></picture></div><div class="w-full vw-px-[100] relative flex flex-col items-center h-full"><div class="flex flex-col items-center vw-gap-[30] vw-pt-[200]" style="opacity: 0; transform: translateY(50px);"><h2 class="vw-text-[52] leading-snug font-medium whitespace-pre-wrap text-system-gray empty:hidden" style="color: rgb(255, 255, 255);"></h2><p class="vw-text-[18] leading-[1.44] font-normal whitespace-pre-wrap text-system-gray empty:hidden" style="color: rgb(255, 255, 255);"></p></div></div></div></a></div></div><div class="fixed z-10 left-1/2 -translate-x-1/2 h-screen vw-rounded-[40] overflow-hidden pointer-events-none shadow-white shadow-[0px_0px_0px_6.25vw]" style="top: 9.06892%; visibility: hidden; width: 100%; border-radius: 0vw;"></div></div>


<!-- Section: MainPageList-d2b00c90-b6a2-4595-8eee-30ab4f588e48 -->
<div id="MainPageList-d2b00c90-b6a2-4595-8eee-30ab4f588e48" class="relative w-full text-system-gray whitespace-pre-wrap box-border"><div class="vw-text-[52] vw-mb-[60] leading-[1.2] font-medium text-center empty:hidden" style="color: rgb(255, 121, 0);">Clean Power for All</div><div class="relative flex justify-center vw-h-[240] vw-w-[1] mx-auto vw-mt-[30]"><div class="w-px h-full bg-primary origin-top" style="transform: scaleY(0);"></div></div><main class="relative vw-mt-[60] text-center"><div class="px-[14%]"><div class="vw-text-[32] leading-[1.5] font-medium whitespace-pre-wrap"><span class="word " style="color: rgba(128, 128, 128, 0.2);">A</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">t</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">S</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">u</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">g</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">r</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">w</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">,</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">w</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">a</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">r</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">c</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">m</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">m</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">i</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">t</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">t</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">d</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">t</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">p</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">r</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">m</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">t</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">i</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">g</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">t</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">h</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">d</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">v</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">l</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">p</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">m</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">t</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">a</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">d</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">a</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">p</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">p</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">l</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">i</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">c</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">a</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">t</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">i</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">f</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">c</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">l</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">a</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">r</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">g</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">y</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">a</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">c</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">r</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">s</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">s</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">a</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">l</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">l</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">m</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">a</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">j</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">r</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">r</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">g</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">y</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">t</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">c</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">h</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">l</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">g</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">y</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">s</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">c</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">t</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">r</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">s</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">,</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">i</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">c</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">l</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">u</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">d</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">i</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">g</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">s</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">l</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">a</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">r</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">,</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">w</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">i</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">d</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">,</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">s</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">t</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">r</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">a</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">g</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">,</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">l</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">c</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">t</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">r</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">i</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">f</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">i</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">c</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">a</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">t</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">i</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">,</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">a</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">d</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">h</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">y</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">d</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">r</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">g</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">.</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">O</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">u</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">r</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">g</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">a</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">l</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">i</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">s</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">t</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">i</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">c</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">r</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">a</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">s</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">t</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">h</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">a</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">d</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">p</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">t</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">i</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">f</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">c</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">l</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">a</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">r</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">g</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">y</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">a</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">d</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">d</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">r</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">i</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">v</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">m</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">r</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">c</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">r</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">a</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">t</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">i</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">v</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">,</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">i</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">v</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">a</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">t</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">i</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">v</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">w</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">a</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">y</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">s</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">t</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">u</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">s</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">c</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">l</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">a</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">r</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">g</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">y</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">.</span></div></div></main><div class="vw-mt-[60] block"><div id="MainPageList-d2b00c90-b6a2-4595-8eee-30ab4f588e48" class="" style="background-color: rgb(255, 255, 255); margin-bottom: 0px;"><div class="w-full vw-px-[100]"><div class="w-full justify-center flex" style="gap: 100px;"><div class=" flex flex-col items-center vw-gap-[8]" style="color: rgb(96, 96, 96);"><div class="vw-w-[48] vw-h-[48]"><picture class="contents"><img draggable="false" alt="Home Page" loading="lazy" width="48" height="48" decoding="async" data-nimg="1" class="object-contain w-full h-full" src="https://official-oversears-file.sungrowpower.com/page-assets/142b0ff7-280b-4505-846d-44f92568bc2e.svg" style="color: transparent;" /></picture></div><div style="color: rgb(96, 96, 96);"><div><span class="vw-text-[72] font-normal leading-[1.2] empty:hidden whitespace-pre-wrap"><span class="">0</span></span><span class="absolute vw-mt-[12] vw-text-[24] font-normal empty:hidden whitespace-pre-wrap"></span><span class="absolute vw-mt-[42] vw-text-[24] font-normal empty:hidden whitespace-pre-wrap"> GW</span></div></div><div class="vw-mb-[10] vw-text-[14] font-normal leading-[1.5] empty:hidden whitespace-pre-wrap text-center">Power Electronic 
Converters Installation</div></div><div class=" flex flex-col items-center vw-gap-[8]" style="color: rgb(96, 96, 96);"><div class="vw-w-[48] vw-h-[48]"><picture class="contents"><img draggable="false" alt="Home Page" loading="lazy" width="48" height="48" decoding="async" data-nimg="1" class="object-contain w-full h-full" src="https://official-oversears-file.sungrowpower.com/page-assets/f49dbb09-69ab-4af5-bfc1-f4d8fde4a4f0.svg" style="color: transparent;" /></picture></div><div style="color: rgb(96, 96, 96);"><div><span class="vw-text-[72] font-normal leading-[1.2] empty:hidden whitespace-pre-wrap">NO.1</span><span class="absolute vw-mt-[12] vw-text-[24] font-normal empty:hidden whitespace-pre-wrap"></span><span class="absolute vw-mt-[42] vw-text-[24] font-normal empty:hidden whitespace-pre-wrap"></span></div></div><div class="vw-mb-[10] vw-text-[14] font-normal leading-[1.5] empty:hidden whitespace-pre-wrap text-center">PV Inverter &amp; ESS &amp; PCS 
Bankability*¹</div></div><div class=" flex flex-col items-center vw-gap-[8]" style="color: rgb(96, 96, 96);"><div class="vw-w-[48] vw-h-[48]"><picture class="contents"><img draggable="false" alt="Home Page" loading="lazy" width="48" height="48" decoding="async" data-nimg="1" class="object-contain w-full h-full" src="https://official-oversears-file.sungrowpower.com/page-assets/7d449bdc-2800-4447-b6eb-65bffe212c7b.svg" style="color: transparent;" /></picture></div><div style="color: rgb(96, 96, 96);"><div><span class="vw-text-[72] font-normal leading-[1.2] empty:hidden whitespace-pre-wrap"><span class="">0</span></span><span class="absolute vw-mt-[12] vw-text-[24] font-normal empty:hidden whitespace-pre-wrap"></span><span class="absolute vw-mt-[42] vw-text-[24] font-normal empty:hidden whitespace-pre-wrap"></span></div></div><div class="vw-mb-[10] vw-text-[14] font-normal leading-[1.5] empty:hidden whitespace-pre-wrap text-center">R&amp;D
Centers</div></div><div class=" flex flex-col items-center vw-gap-[8]" style="color: rgb(96, 96, 96);"><div class="vw-w-[48] vw-h-[48]"><picture class="contents"><img draggable="false" alt="Home Page" loading="lazy" width="48" height="48" decoding="async" data-nimg="1" class="object-contain w-full h-full" src="https://official-oversears-file.sungrowpower.com/page-assets/f72e870b-aae8-4ee7-b2dd-709657d0c8f6.svg" style="color: transparent;" /></picture></div><div style="color: rgb(96, 96, 96);"><div><span class="vw-text-[72] font-normal leading-[1.2] empty:hidden whitespace-pre-wrap"><span class="">0</span></span><span class="absolute vw-mt-[12] vw-text-[24] font-normal empty:hidden whitespace-pre-wrap">+</span><span class="absolute vw-mt-[42] vw-text-[24] font-normal empty:hidden whitespace-pre-wrap"></span></div></div><div class="vw-mb-[10] vw-text-[14] font-normal leading-[1.5] empty:hidden whitespace-pre-wrap text-center">International 
Subsidiaries</div></div><div class=" flex flex-col items-center vw-gap-[8]" style="color: rgb(96, 96, 96);"><div class="vw-w-[48] vw-h-[48]"><picture class="contents"><img draggable="false" alt="Home Page" loading="lazy" width="48" height="48" decoding="async" data-nimg="1" class="object-contain w-full h-full" src="https://official-oversears-file.sungrowpower.com/page-assets/701fe861-3fed-4d68-9a52-b2b638fcbbc1.svg" style="color: transparent;" /></picture></div><div style="color: rgb(96, 96, 96);"><div><span class="vw-text-[72] font-normal leading-[1.2] empty:hidden whitespace-pre-wrap">AAA</span><span class="absolute vw-mt-[12] vw-text-[24] font-normal empty:hidden whitespace-pre-wrap"></span><span class="absolute vw-mt-[42] vw-text-[24] font-normal empty:hidden whitespace-pre-wrap"></span></div></div><div class="vw-mb-[10] vw-text-[14] font-normal leading-[1.5] empty:hidden whitespace-pre-wrap text-center">MSCI ESG 
Rating in 2025*²</div></div></div></div></div></div><div class="vw-mt-[25] vw-text-[12] leading-[1.6] font-light text-center empty:hidden" style="color: rgb(140, 140, 140);">*¹ Source: BloombergNEF  
*² Source: Morgan Stanley Capital International</div><div class="w-fit mx-auto vw-mt-[60]"><a target="_blank" class="vw-py-[18] vw-px-[40] rounded-pc vw-text-[18] text-center font-medium border cursor-pointer transition-all duration-200 border-primary text-primary bg-transparent hover:bg-primary hover:text-white vw-min-w-[270] flex items-center justify-center leading-[1] empty:hidden" href="/en/about-us/brand-story">Discover Who We Are</a></div><div class="relative flex justify-center vw-h-[240] vw-w-[1] mx-auto vw-mt-[60]"><div class="w-px h-full bg-primary origin-top" style="transform: scaleY(0);"></div></div></div>


<!-- Section: ImgWithTabsForHomePage-ed7e0b9f-1ed0-4406-bad5-f6460b01d575 -->
<div id="ImgWithTabsForHomePage-ed7e0b9f-1ed0-4406-bad5-f6460b01d575" class="relative flex flex-col vw-h-[1000]" style="background-color: rgb(241, 241, 241); margin-bottom: 0px;"><div class="relative vw-h-[1000]"><div class="absolute inset-0"><picture class="contents"><source srcset="https://official-oversears-file.sungrowpower.com/page-assets-process/d1a5c459-4138-4fa0-a7ae-3b9cfb030504.webp" type="image/webp" /><img draggable="false" alt="Home Page" loading="lazy" width="1920" height="1000" decoding="async" data-nimg="1" class="size-full object-cover" src="https://official-oversears-file.sungrowpower.com/page-assets/d1a5c459-4138-4fa0-a7ae-3b9cfb030504.jpg" style="color: transparent;" /></picture></div><div class="w-full vw-px-[100] relative h-full"><a target="_blank" class="flex absolute vw-top-[330] vw-left-[100] items-center empty:hidden" href="/en/for-home"><h2 class="vw-text-[52] font-medium whitespace-pre-wrap text-system-gray empty:hidden text-[52px] leading-[1.2]" style="color: rgb(255, 255, 255);">For Home
</h2><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right vw-size-[24] text-primary vw-ml-[5]" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg></a><div class="absolute vw-left-[100] vw-right-[100] vw-bottom-[320]"><div class="flex flex-col vw-gap-[12]"><div class="flex items-center vw-text-[24] leading-[1.2] font-medium" style="color: rgb(255, 255, 255);"><a target="_blank" class="empty:hidden" href="/en/solutions-residential">Products &amp; Solutions</a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right vw-size-[24] text-primary vw-ml-[5]" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg></div><div class="flex items-center vw-text-[24] leading-[1.2] font-medium" style="color: rgb(255, 255, 255);"><a target="_blank" class="empty:hidden" href="/en/cases-homeowners">Cases &amp; Stories</a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right vw-size-[24] text-primary vw-ml-[5]" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg></div><div class="flex items-center vw-text-[24] leading-[1.2] font-medium" style="color: rgb(255, 255, 255);"><a target="_blank" class="empty:hidden" href="/en/installer/homeowners-support">Service &amp; Support</a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right vw-size-[24] text-primary vw-ml-[5]" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg></div></div><div class="flex flex-col vw-gap-[10] vw-mt-[32] empty:hidden"></div></div><div class="absolute vw-left-[100] vw-right-[100] vw-bottom-[80] flex items-center  backdrop-blur-[2.08vw] bg-[#E6E6E680] vw-h-[132] rounded-pc"><div class="flex-1 flex items-center justify-center h-full"><button class="w-full h-full flex items-center justify-center vw-px-[20] vw-py-[20] rounded-pc transition-all duration-300 vw-text-[16] leading-[1.5] bg-white shadow-lg font-medium"><span>For Home
</span></button><span class="text-black opacity-0">|</span></div><div class="flex-1 flex items-center justify-center h-full"><button class="w-full h-full flex items-center justify-center vw-px-[20] vw-py-[20] rounded-pc transition-all duration-300 vw-text-[16] leading-[1.5] font-normal hover:bg-white/10"><span>For Business</span></button><span class="text-black opacity-100">|</span></div><div class="flex-1 flex items-center justify-center h-full"><button class="w-full h-full flex items-center justify-center vw-px-[20] vw-py-[20] rounded-pc transition-all duration-300 vw-text-[16] leading-[1.5] font-normal hover:bg-white/10"><span>For Utility</span></button><span class="text-black opacity-100">|</span></div><div class="flex-1 flex items-center justify-center h-full"><button class="w-full h-full flex items-center justify-center vw-px-[20] vw-py-[20] rounded-pc transition-all duration-300 vw-text-[16] leading-[1.5] font-normal hover:bg-white/10"><span>Installers</span></button><span class="text-black opacity-100">|</span></div><div class="flex-1 flex items-center justify-center h-full"><button class="w-full h-full flex items-center justify-center vw-px-[20] vw-py-[20] rounded-pc transition-all duration-300 vw-text-[16] leading-[1.5] font-normal hover:bg-white/10"><span>Distributors</span></button><span class="text-black opacity-0 hidden">|</span></div></div></div></div><div class="absolute top-0 left-0 w-full z-20 flex items-center vw-pt-[50] justify-center "><div class="flex items-center overflow-x-auto hide-scrollbar z-20 vw-gap-[35]"><button class="relative whitespace-nowrap vw-text-[18] leading-[1.5556] z-20 outline-none font-medium" style="color: rgb(255, 255, 255);"><div>Customer Scenarios</div></button><button class="relative whitespace-nowrap vw-text-[18] leading-[1.5556] z-20 outline-none font-normal opacity-80" style="color: rgb(255, 255, 255);"><div>Business Areas</div></button></div></div></div>


<!-- Section: MainPageList-8a4b0471-5948-4611-b674-b2fc1c026d64 -->
<div id="MainPageList-8a4b0471-5948-4611-b674-b2fc1c026d64" class="relative w-full text-system-gray whitespace-pre-wrap box-border"><div class="vw-text-[52] vw-mb-[60] leading-[1.2] font-medium text-center empty:hidden" style="color: rgb(255, 121, 0);">Why Sungrow</div><div class="relative flex justify-center vw-h-[240] vw-w-[1] mx-auto vw-mt-[30]"><div class="w-px h-full bg-primary origin-top" style="transform: scaleY(0);"></div></div><main class="relative vw-mt-[60] text-center"><div class="px-[14%]"><div class="vw-text-[32] leading-[1.5] font-medium whitespace-pre-wrap"><span class="word " style="color: rgba(128, 128, 128, 0.2);">B</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">a</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">c</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">k</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">d</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">b</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">y</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">t</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">h</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">t</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">r</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">u</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">s</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">t</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">f</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">p</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">a</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">r</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">t</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">r</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">s</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">w</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">r</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">l</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">d</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">w</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">i</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">d</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">,</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">S</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">u</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">g</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">r</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">w</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">i</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">s</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">c</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">m</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">m</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">i</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">t</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">t</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">d</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">t</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">d</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">l</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">i</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">v</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">r</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">i</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">g</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">u</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">w</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">a</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">v</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">r</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">i</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">g</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">x</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">c</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">l</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">l</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">c</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">i</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">t</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">c</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">h</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">l</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">g</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">y</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">,</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">m</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">a</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">u</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">f</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">a</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">c</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">t</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">u</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">r</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">i</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">g</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">a</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">d</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">s</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">r</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">v</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">i</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">c</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">.</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">T</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">g</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">t</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">h</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">r</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">,</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">l</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">t</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">'</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">s</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">b</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">r</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">i</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">d</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">g</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">t</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">o</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">a</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">s</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">u</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">s</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">t</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">a</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">i</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">n</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">a</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">b</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">l</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);"> </span><span class="word " style="color: rgba(128, 128, 128, 0.2);">f</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">u</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">t</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">u</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">r</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">e</span><span class="word " style="color: rgba(128, 128, 128, 0.2);">.</span></div></div></main><div class="vw-mt-[60] hidden"><div id="MainPageList-8a4b0471-5948-4611-b674-b2fc1c026d64" class="" style="background-color: rgb(241, 241, 241); margin-bottom: 0px;"><div class="w-full vw-px-[100]"><div class="w-full justify-center hidden" style="gap: 100px;"></div></div></div></div><div class="vw-mt-[25] vw-text-[12] leading-[1.6] font-light text-center empty:hidden" style="color: rgb(140, 140, 140);"></div><div class="w-fit mx-auto vw-mt-[60]"><a target="_self" class="vw-py-[18] vw-px-[40] rounded-pc vw-text-[18] text-center font-medium border cursor-pointer transition-all duration-200 border-primary text-primary bg-transparent hover:bg-primary hover:text-white vw-min-w-[270] flex items-center justify-center leading-[1] empty:hidden" href="/en"></a></div><div class="relative flex justify-center vw-h-[240] vw-w-[1] mx-auto vw-mt-[60]"><div class="w-px h-full bg-primary origin-top" style="transform: scaleY(0);"></div></div></div>


<!-- Section: TopTitleBottomDesc-3be611b1-459c-4d5b-8e0d-993bc0f6bdd3 -->
<div id="TopTitleBottomDesc-3be611b1-459c-4d5b-8e0d-993bc0f6bdd3" class="overflow-hidden" style="background-color: rgb(255, 255, 255); margin-bottom: 0px;"><div class="w-full vw-px-[100] text-center vw-px-[undefined]"><button class="empty:hidden"><h2 class="vw-text-[52] font-medium whitespace-pre-wrap text-system-gray empty:hidden text-center vw-mb-[30] leading-[1.2]" style="color: rgb(96, 96, 96);">Stories Speak Louder</h2></button><p class="vw-text-[18] leading-[1.44] font-normal whitespace-pre-wrap text-system-gray empty:hidden text-center" style="color: rgb(96, 96, 96);"></p></div></div>


<!-- Section: AccordionListWithImage1-7e74c8d3-4788-43b5-94c1-be29299c93cb -->
<div id="AccordionListWithImage1-7e74c8d3-4788-43b5-94c1-be29299c93cb" class="relative w-full whitespace-pre-wrap box-border flex " style="background-color: rgb(255, 255, 255); margin-bottom: 0px;"><div class="w-full vw-px-[100] pr-0"><div class="flex vw-gap-[100] items-center"><div class="flex-1  "><div data-slot="accordion" class="w-full border-l  border-gray-200 " data-orientation="vertical"><div data-state="open" data-orientation="vertical" data-slot="accordion-item" class="last:border-b-0 relative vw-pl-[80] border-b-0 vw-mb-[0]"><div class="absolute left-[-3px] top-0 w-1 vw-h-[175] bg-system-orange"></div><div class="flex"><button class="flex flex-1 items-center justify-between "><span class="vw-text-[24] font-medium text-left leading-[1] :empty:hidden" style="color: rgb(96, 96, 96);">Customer Stories</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-minus vw-w-[24] vw-h-[24] text-system-orange shrink-0" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M8 12h8"/></svg></button></div><div data-state="open" id="radix-«r9b»" role="region" aria-labelledby="radix-«r9a»" data-orientation="vertical" data-slot="accordion-content" class="data-[state=closed]:animate-accordion-up data-[state=open]:animate-accordion-down overflow-hidden text-sm" style="--radix-accordion-content-height: var(--radix-collapsible-content-height); --radix-accordion-content-width: var(--radix-collapsible-content-width); transition-duration: 0s; animation-name: none; --radix-collapsible-content-height: 344.75px; --radix-collapsible-content-width: 417.640625px;"><div class="vw-min-h-[500] box-border p-0"><div class="vw-mt-[60] vw-text-[40] font-medium leading-[1.2]  whitespace-pre-wrap :empty:hidden" style="color: rgb(96, 96, 96);">Preserving the Past, Powering the Future</div><div class="vw-text-[20] font-normal leading-[1.w] vw-mb-[60] vw-mt-[20] whitespace-pre-wrap vw-w-[628] break-words overflow-wrap-break-word :empty:hidden" style="color: rgb(96, 96, 96);">A Historic Mill’s Journey to Solar Power. </div><div class="w-fit"><a target="_blank" class="vw-py-[18] vw-px-[40] rounded-pc vw-text-[18] leading-tight text-center border cursor-pointer transition-all duration-200 bg-transparent hover:bg-primary hover:text-white vw-min-w-[244] font-medium flex items-center justify-center text-system-orange border-system-orange empty:hidden" href="/en/case/homeowners/Microinverter-2-85kW-France">Explore More</a></div></div></div></div><div data-state="closed" data-orientation="vertical" data-slot="accordion-item" class="last:border-b-0 relative vw-pl-[80] border-b-0 vw-mb-[32]"><div class="absolute left-[-3px] top-0 w-1 vw-h-[175] "></div><div class="flex"><button class="flex flex-1 items-center justify-between "><span class="vw-text-[24] font-medium text-left leading-[1] :empty:hidden" style="color: rgb(96, 96, 96);">Installers Stories</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-plus vw-w-[24] vw-h-[24] shrink-0" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M8 12h8"/><path d="M12 8v8"/></svg></button></div><div data-state="closed" id="radix-«r9d»" hidden="" role="region" aria-labelledby="radix-«r9c»" data-orientation="vertical" data-slot="accordion-content" class="data-[state=closed]:animate-accordion-up data-[state=open]:animate-accordion-down overflow-hidden text-sm" style="--radix-accordion-content-height: var(--radix-collapsible-content-height); --radix-accordion-content-width: var(--radix-collapsible-content-width);"></div></div><div data-state="closed" data-orientation="vertical" data-slot="accordion-item" class="last:border-b-0 relative vw-pl-[80] border-b-0 vw-mb-[32]"><div class="absolute left-[-3px] top-0 w-1 vw-h-[175] "></div><div class="flex"><button class="flex flex-1 items-center justify-between "><span class="vw-text-[24] font-medium text-left leading-[1] :empty:hidden" style="color: rgb(96, 96, 96);">Distributor Stories</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-plus vw-w-[24] vw-h-[24] shrink-0" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M8 12h8"/><path d="M12 8v8"/></svg></button></div><div data-state="closed" id="radix-«r9f»" hidden="" role="region" aria-labelledby="radix-«r9e»" data-orientation="vertical" data-slot="accordion-content" class="data-[state=closed]:animate-accordion-up data-[state=open]:animate-accordion-down overflow-hidden text-sm" style="--radix-accordion-content-height: var(--radix-collapsible-content-height); --radix-accordion-content-width: var(--radix-collapsible-content-width);"></div></div><div data-state="closed" data-orientation="vertical" data-slot="accordion-item" class="last:border-b-0 relative vw-pl-[80] border-b-0 vw-mb-[32]"><div class="absolute left-[-3px] top-0 w-1 vw-h-[175] "></div><div class="flex"><button class="flex flex-1 items-center justify-between "><span class="vw-text-[24] font-medium text-left leading-[1] :empty:hidden" style="color: rgb(96, 96, 96);">Service Stories</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-plus vw-w-[24] vw-h-[24] shrink-0" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M8 12h8"/><path d="M12 8v8"/></svg></button></div><div data-state="closed" id="radix-«r9h»" hidden="" role="region" aria-labelledby="radix-«r9g»" data-orientation="vertical" data-slot="accordion-content" class="data-[state=closed]:animate-accordion-up data-[state=open]:animate-accordion-down overflow-hidden text-sm" style="--radix-accordion-content-height: var(--radix-collapsible-content-height); --radix-accordion-content-width: var(--radix-collapsible-content-width);"></div></div></div></div><div class="vw-w-[960] vw-h-[1000] flex-shrink-0 overflow-hidden"><picture class="contents"><source srcset="https://official-oversears-file.sungrowpower.com/page-assets-process/f1472779-1219-4c1c-a0c4-0214e08460d9.webp" type="image/webp" /><img draggable="false" alt="Home Page" loading="lazy" width="960" height="1000" decoding="async" data-nimg="1" class="size-full object-cover" src="https://official-oversears-file.sungrowpower.com/page-assets/f1472779-1219-4c1c-a0c4-0214e08460d9.jpg" style="color: transparent;" /></picture></div></div></div></div>


<!-- Section: Block1WithCarouselMain-34fc0d24-9365-4e62-a90e-947b20778466 -->
<div id="Block1WithCarouselMain-34fc0d24-9365-4e62-a90e-947b20778466" class="relative" style="background-color: rgb(241, 241, 241); margin-bottom: 0px; height: 3200px;"><div class="sticky top-0 flex flex-col justify-center vw-gap-[80] w-full h-dvh overflow-hidden"><div class="w-full vw-px-[100]"><h2 class="vw-text-[52] whitespace-pre-wrap text-system-gray empty:hidden text-center leading-[1.2] font-medium">Our Commitment to Innovation and Excellence</h2></div><div class="relative w-fit vw-px-[100]" style="transform: none;"><div class="flex vw-gap-[30]"><div class="relative"><div class="relative vw-w-[700] vw-h-[540] rounded-[30px] overflow-hidden"><div class="absolute inset-0 size-full"><picture class="contents"><source srcset="https://official-oversears-file.sungrowpower.com/page-assets-process/e37a79ea-b0ac-4e40-97d0-3795846747b8.webp" type="image/webp" /><img draggable="false" alt="Home Page" loading="lazy" width="700" height="540" decoding="async" data-nimg="1" class="object-cover size-full" src="https://official-oversears-file.sungrowpower.com/page-assets/e37a79ea-b0ac-4e40-97d0-3795846747b8.png" style="color: transparent;" /></picture></div><div class="relative vw-px-[50] vw-pt-[60] vw-text-[40] font-medium leading-[1.2] whitespace-pre-wrap" style="color: rgb(255, 255, 255);">Technological Innovation<div class="w-fit vw-mt-[32]"><a target="_blank" class="vw-py-[18] vw-px-[40] rounded-pc vw-text-[18] text-center border cursor-pointer transition-all duration-200 bg-primary border-primary text-white vw-text-[20] leading-[1.5] font-medium empty:hidden" href="/en/technologyinnovation">Explore More</a></div></div></div></div><div class="relative"><div class="relative vw-w-[700] vw-h-[540] rounded-[30px] overflow-hidden"><div class="absolute inset-0 size-full"><picture class="contents"><source srcset="https://official-oversears-file.sungrowpower.com/page-assets-process/1f77f7c2-4739-4736-8625-6eb8094701d8.webp" type="image/webp" /><img draggable="false" alt="Home Page" loading="lazy" width="700" height="540" decoding="async" data-nimg="1" class="object-cover size-full" src="https://official-oversears-file.sungrowpower.com/page-assets/1f77f7c2-4739-4736-8625-6eb8094701d8.png" style="color: transparent;" /></picture></div><div class="relative vw-px-[50] vw-pt-[60] vw-text-[40] font-medium leading-[1.2] whitespace-pre-wrap" style="color: rgb(255, 255, 255);">Lean Manufacturing<div class="w-fit vw-mt-[32]"><a target="_blank" class="vw-py-[18] vw-px-[40] rounded-pc vw-text-[18] text-center border cursor-pointer transition-all duration-200 bg-primary border-primary text-white vw-text-[20] leading-[1.5] font-medium empty:hidden" href="/en/lean-manufacturing">Explore More</a></div></div></div></div><div class="relative"><div class="relative vw-w-[700] vw-h-[540] rounded-[30px] overflow-hidden"><div class="absolute inset-0 size-full"><picture class="contents"><source srcset="https://official-oversears-file.sungrowpower.com/page-assets-process/2735e941-0dd6-4b49-ae6e-c2423c5cc060.webp" type="image/webp" /><img draggable="false" alt="Home Page" loading="lazy" width="700" height="540" decoding="async" data-nimg="1" class="object-cover size-full" src="https://official-oversears-file.sungrowpower.com/page-assets/2735e941-0dd6-4b49-ae6e-c2423c5cc060.png" style="color: transparent;" /></picture></div><div class="relative vw-px-[50] vw-pt-[60] vw-text-[40] font-medium leading-[1.2] whitespace-pre-wrap" style="color: rgb(255, 255, 255);">Global Presence<div class="w-fit vw-mt-[32]"><a target="_blank" class="vw-py-[18] vw-px-[40] rounded-pc vw-text-[18] text-center border cursor-pointer transition-all duration-200 bg-primary border-primary text-white vw-text-[20] leading-[1.5] font-medium empty:hidden" href="/en/globalpresence">Explore More</a></div></div></div></div><div class="relative"><div class="relative vw-w-[700] vw-h-[540] rounded-[30px] overflow-hidden"><div class="absolute inset-0 size-full"><picture class="contents"><source srcset="https://official-oversears-file.sungrowpower.com/page-assets-process/7639e445-ec50-4651-8b20-294e39c42b92.webp" type="image/webp" /><img draggable="false" alt="Home Page" loading="lazy" width="700" height="540" decoding="async" data-nimg="1" class="object-cover size-full" src="https://official-oversears-file.sungrowpower.com/page-assets/7639e445-ec50-4651-8b20-294e39c42b92.png" style="color: transparent;" /></picture></div><div class="relative vw-px-[50] vw-pt-[60] vw-text-[40] font-medium leading-[1.2] whitespace-pre-wrap" style="color: rgb(255, 255, 255);">Professional Services<div class="w-fit vw-mt-[32]"><a target="_blank" class="vw-py-[18] vw-px-[40] rounded-pc vw-text-[18] text-center border cursor-pointer transition-all duration-200 bg-primary border-primary text-white vw-text-[20] leading-[1.5] font-medium empty:hidden" href="/en/service-support/service-brand">Explore More</a></div></div></div></div></div></div></div></div>


<!-- Section: ParallaxScrollCard-6335ec8d-766b-4aaa-a48c-45a72a6ff367 -->
<div id="ParallaxScrollCard-6335ec8d-766b-4aaa-a48c-45a72a6ff367" style="background-color: rgb(241, 241, 241); margin-bottom: 0px;"><div class="relative" style="height: 2480px;"><div class="vw-min-h-[75] overflow-hidden"><h2 class="vw-text-[52] leading-snug font-medium whitespace-pre-wrap text-system-gray empty:hidden text-center vw-mb-[80]"></h2></div><div class="sticky top-0 flex items-center]"><div class="w-full vw-px-[100] vw-pb-[60] h-dvh box-border"><div class="grid grid-cols-2 h-full vw-rounded-[40] overflow-hidden"><div class="relative vw-p-[80] bg-white"><div class="absolute top-1/2 vw-left-[80] -translate-y-1/2" style="opacity: 1; z-index: 1;"><div class="flex flex-col vw-gap-[40] vw-mb-[80]"><div class=""><p class="vw-text-[18] leading-[1.44] font-normal whitespace-pre-wrap text-system-gray empty:hidden vw-text-[20] vw-mb-[20]">Sustainability</p><svg width="40" height="6" viewBox="0 0 40 6" fill="none" xmlns="http://www.w3.org/2000/svg" class="vw-w-[40] vw-h-[5] text-primary"><path d="M13.4948 5.50417H0V0H18.5913C18.5913 3.0428 16.3122 5.50417 13.4948 5.50417ZM40 5.50417H21.4087C21.4087 2.46783 23.6878 0 26.5052 0H40V5.50417Z" fill="currentColor"/></svg></div><h2 class="vw-text-[52] font-medium whitespace-pre-wrap text-system-gray empty:hidden block vw-text-[40] leading-[1.2]">Green Mission,
Better Life</h2></div><a target="_blank" class="vw-py-[18] vw-px-[40] rounded-pc vw-text-[18] leading-tight text-center border cursor-pointer transition-all duration-200 border-primary text-primary bg-transparent hover:bg-primary hover:text-white vw-min-w-[244] w-fit shrink-0 overflow-hidden flex items-center justify-center font-medium empty:hidden" href="/en/sustainability">Explore More</a></div><div class="absolute top-1/2 vw-left-[80] -translate-y-1/2" style="opacity: 0; z-index: 0;"><div class="flex flex-col vw-gap-[40] vw-mb-[80]"><div class=""><p class="vw-text-[18] leading-[1.44] font-normal whitespace-pre-wrap text-system-gray empty:hidden vw-text-[20] vw-mb-[20]">Our people</p><svg width="40" height="6" viewBox="0 0 40 6" fill="none" xmlns="http://www.w3.org/2000/svg" class="vw-w-[40] vw-h-[5] text-primary"><path d="M13.4948 5.50417H0V0H18.5913C18.5913 3.0428 16.3122 5.50417 13.4948 5.50417ZM40 5.50417H21.4087C21.4087 2.46783 23.6878 0 26.5052 0H40V5.50417Z" fill="currentColor"/></svg></div><h2 class="vw-text-[52] font-medium whitespace-pre-wrap text-system-gray empty:hidden block vw-text-[40] leading-[1.2]">Greener World, 
Greater Us</h2></div><a target="_blank" class="vw-py-[18] vw-px-[40] rounded-pc vw-text-[18] leading-tight text-center border cursor-pointer transition-all duration-200 border-primary text-primary bg-transparent hover:bg-primary hover:text-white vw-min-w-[244] w-fit shrink-0 overflow-hidden flex items-center justify-center font-medium empty:hidden" href="/en/About/Career">Explore More</a></div><div class="absolute top-1/2 vw-left-[80] -translate-y-1/2" style="opacity: 0; z-index: 0;"><div class="flex flex-col vw-gap-[40] vw-mb-[80]"><div class=""><p class="vw-text-[18] leading-[1.44] font-normal whitespace-pre-wrap text-system-gray empty:hidden vw-text-[20] vw-mb-[20]">Our Service</p><svg width="40" height="6" viewBox="0 0 40 6" fill="none" xmlns="http://www.w3.org/2000/svg" class="vw-w-[40] vw-h-[5] text-primary"><path d="M13.4948 5.50417H0V0H18.5913C18.5913 3.0428 16.3122 5.50417 13.4948 5.50417ZM40 5.50417H21.4087C21.4087 2.46783 23.6878 0 26.5052 0H40V5.50417Z" fill="currentColor"/></svg></div><h2 class="vw-text-[52] font-medium whitespace-pre-wrap text-system-gray empty:hidden block vw-text-[40] leading-[1.2]">Where the Sun Shines, 
We're Ready to Serve</h2></div><a target="_blank" class="vw-py-[18] vw-px-[40] rounded-pc vw-text-[18] leading-tight text-center border cursor-pointer transition-all duration-200 border-primary text-primary bg-transparent hover:bg-primary hover:text-white vw-min-w-[244] w-fit shrink-0 overflow-hidden flex items-center justify-center font-medium empty:hidden" href="/en/service-support/sungrow-service">Explore More</a></div></div><div class="relative"><div class="container absolute inset-0 overflow-hidden" style="transform: translateY(0%); z-index: 3;"><div class="relative vw-w-[860] h-full" style="transform: translateY(0%);"><picture class="contents"><source srcset="https://official-oversears-file.sungrowpower.com/page-assets-process/73fb1f86-55a8-4b57-9556-113cbac49342.webp" type="image/webp" /><img draggable="false" alt="Home Page" loading="lazy" decoding="async" data-nimg="fill" class="object-cover" src="https://official-oversears-file.sungrowpower.com/page-assets/73fb1f86-55a8-4b57-9556-113cbac49342.jpg" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;" /></picture></div></div><div class="container absolute inset-0 overflow-hidden" style="transform: translateY(0%); z-index: 2;"><div class="relative vw-w-[860] h-full" style="transform: translateY(0%);"><picture class="contents"><source srcset="https://official-oversears-file.sungrowpower.com/page-assets-process/1bfbbc81-67f9-4739-9d12-a47c53e4ee54.webp" type="image/webp" /><img draggable="false" alt="Home Page" loading="lazy" decoding="async" data-nimg="fill" class="object-cover" src="https://official-oversears-file.sungrowpower.com/page-assets/1bfbbc81-67f9-4739-9d12-a47c53e4ee54.png" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;" /></picture></div></div><div class="container absolute inset-0 z-[1] overflow-hidden"><div class="relative vw-w-[860] h-full"><picture class="contents"><source srcset="https://official-oversears-file.sungrowpower.com/page-assets-process/9fd8ede7-0164-42bc-8a50-c8b97e2f59bc.webp" type="image/webp" /><img draggable="false" alt="Home Page" loading="lazy" decoding="async" data-nimg="fill" class="object-cover" src="https://official-oversears-file.sungrowpower.com/page-assets/9fd8ede7-0164-42bc-8a50-c8b97e2f59bc.jpg" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;" /></picture></div></div></div></div></div></div></div></div>


<!-- Section: Button-597e40e9-1f50-48f7-b614-a2488f2dfd40 -->
<div id="Button-597e40e9-1f50-48f7-b614-a2488f2dfd40" style="background-color: rgb(241, 241, 241); margin-bottom: 0px;"><div class="w-full vw-px-[100]"><div class="flex justify-center"><a target="_blank" class="vw-py-[18] vw-px-[40] rounded-pc vw-text-[18] leading-tight text-center font-medium border cursor-pointer transition-all duration-200 border-primary text-primary bg-transparent hover:bg-primary hover:text-white vw-min-w-[244] flex items-center justify-center empty:hidden" href="/en/news-media-news-list">Explore More</a></div></div></div>


<!-- Section: Follow-d402ae29-63c1-4ef7-a578-3326827eea46 -->
<div id="Follow-d402ae29-63c1-4ef7-a578-3326827eea46" style="background-color: rgb(255, 255, 255); margin-bottom: 0px;"><div class="w-full vw-px-[100]"><h3 class="vw-mb-[62] text-center vw-text-[52] vw-leading-[72] font-medium whitespace-pre-wrap text-system-gray" style="color: rgb(96, 96, 96);">Follow SUNGROW</h3><div class="flex flex-wrap vw-gap-[120] justify-center items-center w-full"><a href="https://www.linkedin.com/company/sungrow-power-supply-co-ltd/posts/" target="_blank" class="vw-h-[50] cursor-pointer empty:hidden" referrerpolicy="no-referrer"><img alt="Linkedin" loading="lazy" width="50" height="50" decoding="async" data-nimg="1" class="!static h-full w-auto" src="https://official-oversears-file.sungrowpower.com/website/_next/static/media/linkedin_gray.1f11c689.svg" style="color: transparent;" /></a><a href="https://www.instagram.com/sungrow_power/" target="_blank" class="vw-h-[50] cursor-pointer empty:hidden" referrerpolicy="no-referrer"><img alt="Instagram" loading="lazy" width="50" height="50" decoding="async" data-nimg="1" class="!static h-full w-auto" src="https://official-oversears-file.sungrowpower.com/website/_next/static/media/ins_gray.be059397.svg" style="color: transparent;" /></a><a href="https://www.facebook.com/CleanPowerForAll" target="_blank" class="vw-h-[50] cursor-pointer empty:hidden" referrerpolicy="no-referrer"><img alt="Facebook" loading="lazy" width="50" height="50" decoding="async" data-nimg="1" class="!static h-full w-auto" src="https://official-oversears-file.sungrowpower.com/website/_next/static/media/facebook_gray.26e8545e.svg" style="color: transparent;" /></a><a href="https://x.com/Sungrow_Power" target="_blank" class="vw-h-[50] cursor-pointer empty:hidden" referrerpolicy="no-referrer"><img alt="Twitter" loading="lazy" width="50" height="50" decoding="async" data-nimg="1" class="!static h-full w-auto" src="https://official-oversears-file.sungrowpower.com/website/_next/static/media/twitter_gray.8351bb7d.svg" style="color: transparent;" /></a><a href="https://www.youtube.com/@Sungrow" target="_blank" class="vw-h-[50] cursor-pointer empty:hidden" referrerpolicy="no-referrer"><img alt="Youtube" loading="lazy" width="50" height="50" decoding="async" data-nimg="1" class="!static h-full w-auto" src="https://official-oversears-file.sungrowpower.com/website/_next/static/media/youtube_gray.d7ac0dfc.svg" style="color: transparent;" /></a></div></div></div>

@endsection

@push('scripts')
<!-- Note: Next.js scripts removed as they require a Next.js server and cause connection errors -->
<!-- We use custom JavaScript instead to handle all animations and interactions -->

<script>
(function() {
    'use strict';
    
    // Suppress any Next.js connection errors
    window.addEventListener('error', function(e) {
        if (e.message && (e.message.includes('Connection closed') || e.message.includes('next') || e.message.includes('webpack'))) {
            e.preventDefault();
            console.warn('Suppressed Next.js error (expected - Next.js scripts removed):', e.message);
            return true;
        }
    });
    
    // Suppress unhandled promise rejections from Next.js
    window.addEventListener('unhandledrejection', function(e) {
        if (e.reason && (e.reason.message && (e.reason.message.includes('Connection closed') || e.reason.message.includes('next')))) {
            e.preventDefault();
            console.warn('Suppressed Next.js promise rejection (expected):', e.reason);
            return true;
        }
    });
    
    // Wait for DOM and all scripts to load
    function initAnimations() {
        // Video handling with proper autoplay handling
        const videos = document.querySelectorAll('video');
        videos.forEach(function(video) {
            // Set required attributes for autoplay
            video.setAttribute('muted', '');
            video.setAttribute('playsinline', '');
            video.setAttribute('autoplay', '');
            video.setAttribute('loop', '');
            video.setAttribute('preload', 'auto');
            
            // Try to play, but handle autoplay restrictions gracefully
            const playPromise = video.play();
            if (playPromise !== undefined) {
                playPromise.catch(function(error) {
                    // Autoplay was prevented - this is normal in many browsers
                    // Add a click handler to play on first user interaction
                    if (error.name === 'NotAllowedError') {
                        // Create a play button overlay if it doesn't exist
                        const container = video.parentElement;
                        if (container && !container.querySelector('.video-play-overlay')) {
                            const overlay = document.createElement('div');
                            overlay.className = 'video-play-overlay';
                            overlay.style.cssText = 'position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 10; cursor: pointer; background: rgba(0,0,0,0.5); border-radius: 50%; width: 80px; height: 80px; display: flex; align-items: center; justify-content: center; transition: opacity 0.3s;';
                            
                            // Create SVG play icon
                            const playIcon = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
                            playIcon.setAttribute('viewBox', '0 0 24 24');
                            playIcon.setAttribute('fill', 'white');
                            playIcon.style.cssText = 'width: 40px; height: 40px; margin-left: 5px;';
                            const path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
                            path.setAttribute('d', 'M8 5v14l11-7z');
                            playIcon.appendChild(path);
                            overlay.appendChild(playIcon);
                            
                            container.style.position = 'relative';
                            container.appendChild(overlay);
                            
                            // Play video on click and remove overlay
                            overlay.addEventListener('click', function() {
                                video.play().catch(function(err) {
                                    console.log('Video play failed:', err);
                                });
                                overlay.style.opacity = '0';
                                setTimeout(function() {
                                    overlay.remove();
                                }, 300);
                            });
                            
                            // Also try to play on any user interaction
                            const tryPlay = function() {
                                video.play().then(function() {
                                    overlay.style.opacity = '0';
                                    setTimeout(function() {
                                        overlay.remove();
                                    }, 300);
                                    document.removeEventListener('click', tryPlay);
                                    document.removeEventListener('touchstart', tryPlay);
                                }).catch(function() {
                                    // Still can't play, keep overlay
                                });
                            };
                            
                            document.addEventListener('click', tryPlay, { once: true });
                            document.addEventListener('touchstart', tryPlay, { once: true });
                        }
                    }
                });
            }
        });
        
        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };
        
        const fadeObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                    el.classList.add('animated');
                }
            });
        }, observerOptions);
        
        // Observe all elements with opacity 0 or transform
        document.querySelectorAll('[style*="opacity: 0"], [style*="transform: translateY(50px)"]').forEach(function(el) {
            fadeObserver.observe(el);
        });
        
        // Animate word-by-word text reveal
        const wordContainers = document.querySelectorAll('.word');
        if (wordContainers.length > 0) {
            let delay = 0;
            wordContainers.forEach(function(word) {
                setTimeout(function() {
                    word.style.color = 'rgba(96, 96, 96, 1)';
                    word.style.transition = 'color 0.4s ease';
                }, delay);
                delay += 15;
            });
        }
        
        // Animate vertical lines (scaleY animation)
        const lines = document.querySelectorAll('.bg-primary.origin-top');
        lines.forEach(function(line, index) {
            setTimeout(function() {
                line.style.transform = 'scaleY(1)';
                line.style.transition = 'transform 1.2s cubic-bezier(0.4, 0, 0.2, 1)';
            }, 300 + (index * 200));
        });
        
        // Parallax scrolling effect
        let ticking = false;
        function updateParallax() {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('[id*="Parallax"]');
            
            parallaxElements.forEach(function(element) {
                const rect = element.getBoundingClientRect();
                const elementTop = rect.top + scrolled;
                const elementHeight = rect.height;
                const windowHeight = window.innerHeight;
                
                if (rect.top < windowHeight && rect.bottom > 0) {
                    const scrolledPercent = (scrolled - elementTop + windowHeight) / (elementHeight + windowHeight);
                    const transform = scrolledPercent * 100;
                    
                    const containers = element.querySelectorAll('.container');
                    containers.forEach(function(container, index) {
                        const offset = (index + 1) * 20;
                        container.style.transform = 'translateY(' + (transform - offset) + '%)';
                    });
                }
            });
            
            ticking = false;
        }
        
        function requestParallaxTick() {
            if (!ticking) {
                window.requestAnimationFrame(updateParallax);
                ticking = true;
            }
        }
        
        window.addEventListener('scroll', requestParallaxTick);
        updateParallax();
        
        // Carousel/slider animations
        const carouselSections = document.querySelectorAll('[id*="Carousel"]');
        carouselSections.forEach(function(section) {
            const cards = section.querySelectorAll('.relative');
            cards.forEach(function(card, index) {
                card.style.opacity = '0';
                card.style.transform = 'translateX(50px)';
                setTimeout(function() {
                    card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateX(0)';
                }, index * 200);
            });
        });
        
        // Accordion functionality
        const accordionButtons = document.querySelectorAll('[data-slot="accordion-item"] button');
        accordionButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                const item = button.closest('[data-slot="accordion-item"]');
                const content = item.querySelector('[data-slot="accordion-content"]');
                const isOpen = item.getAttribute('data-state') === 'open';
                
                // Close all items
                document.querySelectorAll('[data-slot="accordion-item"]').forEach(function(otherItem) {
                    if (otherItem !== item) {
                        otherItem.setAttribute('data-state', 'closed');
                        const otherContent = otherItem.querySelector('[data-slot="accordion-content"]');
                        if (otherContent) {
                            otherContent.style.display = 'none';
                            otherContent.setAttribute('hidden', '');
                        }
                    }
                });
                
                // Toggle current item
                if (isOpen) {
                    item.setAttribute('data-state', 'closed');
                    if (content) {
                        content.style.display = 'none';
                        content.setAttribute('hidden', '');
                    }
                } else {
                    item.setAttribute('data-state', 'open');
                    if (content) {
                        content.style.display = 'block';
                        content.removeAttribute('hidden');
                    }
                }
            });
        });
        
        // Number counting animation
        const numberElements = document.querySelectorAll('.vw-text-\\[72\\]');
        numberElements.forEach(function(el) {
            const text = el.textContent.trim();
            if (text.match(/^\d+$/)) {
                const target = parseInt(text);
                let current = 0;
                const increment = target / 60;
                const timer = setInterval(function() {
                    current += increment;
                    if (current >= target) {
                        el.textContent = target;
                        clearInterval(timer);
                    } else {
                        el.textContent = Math.floor(current);
                    }
                }, 16);
            }
        });
    }
    
    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initAnimations);
    } else {
        initAnimations();
    }
    
    // Re-initialize after page fully loads
    window.addEventListener('load', function() {
        setTimeout(initAnimations, 500);
    });
})();
</script>
@endpush
