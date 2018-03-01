//banner slider
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}



function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("item");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    
} 
// testimonial slider
var testimonialIndex = 1;
showTestimonial(testimonialIndex);

// Next/previous controls
function plusTestimonial(m) {
    showTestimonial(testimonialIndex += m);
}

// Thumbnail image controls
function currentTestimonial(m) {
    showTestimonial(testimonialIndex = m);
}



function showTestimonial(m) {
    var j;
    var testimonials = document.getElementsByClassName("item-testimonial");
    var testimonialDots = document.getElementsByClassName("dot-testimonial");
    if (m > testimonials.length) { testimonialIndex = 1 }
    if (m < 1) { testimonialIndex = testimonials.length }
    for (j = 0; j < testimonials.length; j++) {
        testimonials[j].style.display = "none";
    }
    for (j = 0; j < testimonialDots.length; j++) {
        testimonialDots[j].className = testimonialDots[j].className.replace(" active", "");
    }
    testimonials[testimonialIndex - 1].style.display = "block";
    testimonialDots[testimonialIndex - 1].className += " active";

} 



