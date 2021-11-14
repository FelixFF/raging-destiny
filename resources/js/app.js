require('./bootstrap');
import { gsap } from "gsap";
import { Power1 } from "gsap";
const $ = require('jquery');

const LEFT = "left";
const CENTRE = "centre";

const menu = document.querySelector(".menu");
const sectionTitle = document.querySelector(".title");
const sections = document.querySelectorAll(".content-section-style");


// Carousel logic

const track = document.querySelector('.carousel__track');
const slides = track !== null ? Array.from(track.children) : [];
const nextButton = document.querySelector('.carousel__button--right');
const previousButton = document.querySelector('.carousel__button--left');
const dotsNav = document.querySelector('.carousel__nav');
const dotsChildren = dotsNav !== null ? Array.from(dotsNav.children) : [];

const slideWidth = slides.length > 0 ? slides[0].getBoundingClientRect().width : 0;

const setSlidePosition = (slide, index) => {
    slide.style.left = slideWidth * index + 'px';
}

const moveToSlide = (track, currentSlide, targetSlide) => {
    if (targetSlide !== null) {
        track.style.transform = 'translateX(-' + targetSlide.style.left + ')';
        currentSlide.classList.remove('current-slide');
        targetSlide.classList.add('current-slide');
    }
}

const updateDots = (currentDot, targetDot) => {
    if (targetDot !== null) {
        currentDot.classList.remove('current-slide');
        targetDot.classList.add('current-slide');
    }
}

const hideShowNavigation = (target, currentIndex) => {
    if (currentIndex === 0) {
        previousButton.classList.add('is-hidden');
        nextButton.classList.remove('is-hidden');
    } else if (currentIndex === target.children.length - 1) {
        nextButton.classList.add('is-hidden');
        previousButton.classList.remove('is-hidden');
    } else {
        nextButton.classList.remove('is-hidden');
        previousButton.classList.remove('is-hidden');
    }
}

slides.forEach(setSlidePosition)

if (nextButton !== null && previousButton !== null) {
    nextButton.addEventListener('click', e => {
        const currentSlide = track.querySelector('.current-slide');
        const nextSlide = currentSlide.nextElementSibling;
        const currentDot = dotsNav.querySelector('.current-slide');
        const nextDot = currentDot.nextElementSibling;
        const nextIndex = slides.findIndex(slide => slide === nextSlide);

        moveToSlide(track, currentSlide, nextSlide);
        updateDots(currentDot, nextDot);
        hideShowNavigation(track, nextIndex)
    })

    previousButton.addEventListener('click', e => {
        const currentSlide = track.querySelector('.current-slide');
        const previousSlide = currentSlide.previousElementSibling;
        const currentDot = dotsNav.querySelector('.current-slide');
        const previousDot = currentDot.previousElementSibling;
        const previousIndex = slides.findIndex(slide => slide === previousSlide);

        moveToSlide(track, currentSlide, previousSlide);
        updateDots(currentDot, previousDot);
        hideShowNavigation(track, previousIndex);
    })

    dotsNav.addEventListener('click', e => {
        const targetDot = e.target.closest('button');

        if (!targetDot) {
            return;
        }

        const currentSlide = track.querySelector('.current-slide');
        const currentDot = dotsNav.querySelector('.current-slide');
        const targetIndex = dotsChildren.findIndex(dot => dot === targetDot);
        const targetSlide = slides[targetIndex];

        moveToSlide(track, currentSlide, targetSlide);
        updateDots(currentDot, targetDot);
        hideShowNavigation(dotsNav, targetIndex);
    })
}

// End of Carousel logic
