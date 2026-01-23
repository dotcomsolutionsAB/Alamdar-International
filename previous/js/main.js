// Alamdar International - Main JavaScript

// Smooth scrolling for anchor links
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Contact form validation
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form fields
            const name = document.getElementById('name');
            const email = document.getElementById('email');
            const subject = document.getElementById('subject');
            const message = document.getElementById('message');
            
            let isValid = true;
            
            // Reset previous error states
            [name, email, subject, message].forEach(field => {
                if (field) {
                    field.classList.remove('is-invalid');
                }
            });
            
            // Validate name
            if (!name || name.value.trim() === '') {
                if (name) {
                    name.classList.add('is-invalid');
                }
                isValid = false;
            }
            
            // Validate email
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!email || !emailRegex.test(email.value)) {
                if (email) {
                    email.classList.add('is-invalid');
                }
                isValid = false;
            }
            
            // Validate subject
            if (!subject || subject.value.trim() === '') {
                if (subject) {
                    subject.classList.add('is-invalid');
                }
                isValid = false;
            }
            
            // Validate message
            if (!message || message.value.trim() === '') {
                if (message) {
                    message.classList.add('is-invalid');
                }
                isValid = false;
            }
            
            if (isValid) {
                // Show success message
                alert('Thank you for your inquiry! We will get back to you soon.');
                contactForm.reset();
            } else {
                // Show error message
                alert('Please fill in all required fields correctly.');
            }
        });
    }

    // Navbar scroll effect
    let lastScroll = 0;
    const navbar = document.querySelector('.navbar');
    
    window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll > 100) {
            navbar.style.boxShadow = '0 4px 6px rgba(0,0,0,0.2)';
        } else {
            navbar.style.boxShadow = '0 2px 4px rgba(0,0,0,0.1)';
        }
        
        lastScroll = currentScroll;
    });
});
