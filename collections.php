<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Web Project</title>
  <link rel="stylesheet" href="style/style.css" />
  <link rel="icon" href="images/oceanic-logo.png" type="image/png" />
  <meta name="description" content="Learn about Oceanic - leaders in sustainable turbine manufacturing and ocean-derived energy solutions." />

</head>
<body>
  <header>
    <main>
      <nav>
        <div class="nav-container">
          <a href="#" class="logo">Oceanic</a>
          <div class="nav-links">
            <a href="index.html">Home</a>
            <a href="about.html">About US</a>
            <a href="turbine.html">Turbines</a>
            <a href="collections.html">Collections</a>
            <a href="contact.html">Contact</a>
          </div>
          
        </div>
      </nav>
  </header>

    
    <section class="hero">
      <div class="hero-content">
        <div class="hero-text">
          <h1>Collections</h1>
         
        </div>
        <div class="hero-image">
          <div class="image-slider">
            <div class="slider-container">
              <img src="https://assets.codepen.io/406785/header1.webp" alt="Turbine" class="slide active" />
              <img src="https://assets.codepen.io/406785/header2.webp" alt="Ocean turbine" class="slide" />
              <img src="https://assets.codepen.io/406785/header3.webp" alt="Sustainable energy" class="slide" />
            </div>
            <div class="slider-controls">
              <button class="prev-btn">&#10094;</button>
              <div class="slider-dots">
                <span class="dot active" data-slide="0"></span>
                <span class="dot" data-slide="1"></span>
                <span class="dot" data-slide="2"></span>
              </div>
              <button class="next-btn">&#10095;</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="collections">
        <div class="container">
          <div class="section-header">
            <h2>Our Collections</h2>
            <p>Explore our specialized skincare collections designed for different skin needs.</p>
          </div>
          <div class="collections-grid">
            <div class="collection-item">
              <div class="collection-bg" style="background-image: url('https://assets.codepen.io/406785/marine.jpg')"></div>
              <div class="collection-overlay">
                <h3 class="collection-title">Marine Radiance Collection</h3>
                <p>Boost skin radiance with powerful marine extracts.</p>
                <a href="#" class="collection-link">View Collection →</a>
              </div>
            </div>
            <div class="collection-item">
              <div class="collection-bg" style="background-image: url('https://assets.codepen.io/406785/reef.jpg')"></div>
              <div class="collection-overlay">
                <h3 class="collection-title">Coral Reef Repair</h3>
                <p>Restorative formulas for damaged skin.</p>
                <a href="#" class="collection-link">View Collection →</a>
              </div>
            </div>
            <div class="collection-item">
              <div class="collection-bg" style="background-image: url('https://assets.codepen.io/406785/stormwaves.jpg')"></div>
              <div class="collection-overlay">
                <h3 class="collection-title">Ocean Defense</h3>
                <p>Protection against environmental aggressors.</p>
                <a href="#" class="collection-link">View Collection →</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="newsletter">
        <div class="newsletter-container">
          <div>
            <h2>Join Our Ocean Club</h2>
            <p>Subscribe to receive exclusive offers, skincare tips, and early access to new products.</p>
          </div>
          <form class="newsletter-form">
            <input type="email" placeholder="Your email address">
            <button type="submit">Subscribe</button>
          </form>
        </div>
      </section>
      
      <footer>
        <div class="container">
          <div class="footer-grid">
            <div class="footer-about">
              <a href="#" class="footer-logo">Oceanic</a>
              <p>Premium Australian skincare inspired by the ocean. Our mission is to create effective, sustainable products that nurture your skin and protect our oceans.</p>
              <div class="social-icons">
                <a href="#" class="social-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                  </svg>
                </a>
                <a href="#" class="social-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                  </svg>
                </a>
                <a href="#" class="social-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                  </svg>
                </a>
              </div>
            </div>
            <div class="footer-links">
              <h3>Shop</h3>
              <ul>
                <li><a href="#">All Products</a></li>
                <li><a href="#">New Arrivals</a></li>
                <li><a href="#">Best Sellers</a></li>
                <li><a href="#">Gift Sets</a></li>
              </ul>
            </div>
            <div class="footer-links">
              <h3>About</h3>
              <ul>
                <li><a href="#">Our Story</a></li>
                <li><a href="#">Sustainability</a></li>
                <li><a href="#">Ingredients</a></li>
                <li><a href="#">Blog</a></li>
              </ul>
            </div>
            <div class="footer-links">
              <h3>Help</h3>
              <ul>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Shipping & Returns</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Track Order</a></li>
              </ul>
            </div>
          </div>
          <div class="footer-bottom">
            <p>© 2025 Oceanic Skincare. All rights reserved. | Designed by magnus copo</p>
          </div>
        </div>
      </footer>
    </main>
    <script src="script/main.js"></script>
  </body>
  </html>
  