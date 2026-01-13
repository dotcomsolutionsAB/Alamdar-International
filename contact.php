<?php include "header.php"; ?>

    <!-- Page Header -->
    <section class="hero-section" style="padding: 120px 0 60px;">
        <div class="container">
            <h1 class="text-center">Contact Us</h1>
            <p class="text-center" style="font-size: 1.2rem;">Get in Touch with Our Team</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <div class="contact-form">
                        <h3 class="mb-4">Send Us a Message</h3>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                    <div class="invalid-feedback">
                                        Please provide your name.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email <span
                                            class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid email address.
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="tel" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="subject" name="subject" required>
                                <div class="invalid-feedback">
                                    Please provide a subject.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                <div class="invalid-feedback">
                                    Please provide your message.
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-4">
                        <h4 class="text-primary-custom mb-4">Contact Information</h4>
                        <div class="mb-3">
                            <i class="fas fa-map-marker-alt text-primary-custom me-2"></i>
                            <strong>Address:</strong><br>
                            <span class="ms-4">75, Netaji Subhas Road, 1st FLOOR,
                                Room No. 7A, Kolkata – 700 001</span>
                        </div>
                        <div class="mb-3">
                            <i class="fas fa-phone text-primary-custom me-2"></i>
                            <strong>Phone:</strong><br>
                            <span class="ms-4">+91( 033) 2243-5134</span>
                        </div>
                        <div class="mb-3">
                            <i class="fas fa-envelope text-primary-custom me-2"></i>
                            <strong>Email:</strong><br>
                            <span class="ms-4">info@alamdarinternational.com</span>
                        </div>
                        <div class="mb-3">
                            <i class="fas fa-clock text-primary-custom me-2"></i>
                            <strong>Business Hours:</strong><br>
                            <span class="ms-4">Monday - Friday: 9:00 AM - 6:00 PM<br>
                                Saturday: 9:00 AM - 1:00 PM</span>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h5 class="text-primary-custom mb-3">Follow Us</h5>
                        <div class="d-flex gap-3">
                            <a href="#" class="text-primary-custom" style="font-size: 1.5rem;"><i
                                    class="fab fa-facebook"></i></a>
                            <a href="#" class="text-primary-custom" style="font-size: 1.5rem;"><i
                                    class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-primary-custom" style="font-size: 1.5rem;"><i
                                    class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section (Optional) -->
    <section class="section bg-light">
        <div class="container">
            <h3 class="text-center mb-4">Find Us</h3>
            <div class="text-center">
                <div
                    style="height: 400px; background-color: #e0e0e0; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                    <p class="text-muted">Map integration can be added here</p>
                </div>
            </div>
        </div>
    </section>

<?php include "footer.php"; ?>