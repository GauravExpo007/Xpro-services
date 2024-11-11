<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      color: #333;
    }
    .container {
      width: 100%;
      max-width: 600px;
      margin: 20px auto;
      background-color: #ffffff;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
    .header {
      background-color: #ddb60a;
      color: white;
      padding: 20px;
      text-align: center;
    }
    .header img {
      max-width: 120px;
      margin-bottom: 10px;
    }
    .header h1 {
      margin: 0;
      font-size: 26px;
    }
    .content {
      padding: 20px;
      text-align: center;
    }
    .content h2 {
      color: #333;
      font-size: 22px;
      margin-top: 0;
    }
    .content p {
      color: #666;
      font-size: 16px;
      line-height: 1.6;
    }
    .brochure-preview {
      margin: 20px 0;
    }
    .brochure-preview img {
      width: 100px;
      height: auto;
      border-radius: 5px;
    }
    .button {
      display: inline-block;
      padding: 12px 25px;
      margin: 20px 0;
      background-color: #ddb60a;
      color: #ffffff;
      text-decoration: none;
      border-radius: 5px;
      font-size: 16px;
      font-weight: bold;
    }
    .footer {
      background-color: #f4f4f4;
      color: #666;
      font-size: 14px;
      padding: 20px;
      text-align: center;
    }
    .footer p {
      margin: 0;
      padding: 5px 0;
    }
    .footer a {
      color: #ddb60a;
      text-decoration: none;
    }
    .footer a:hover {
      text-decoration: underline;
    }
    .social-icons {
      margin-top: 10px;
    }
    .social-icons a {
      display: inline-block;
      margin: 0 5px;
      color: #ddb60a;
      text-decoration: none;
    }
    .social-icons img {
      width: 24px;
      height: 24px;
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Header Section with Logo -->
    <div class="header">
      <img src="https://via.placeholder.com/120x40?text=Logo" alt="Company Logo">
      <h1>Your Brochure is Ready!</h1>
    </div>

    <!-- Content Section -->
    <div class="content">
      <h2>Hello {{ $name }}</h2>
      <p>
        Thank you for your interest in our services! We’ve prepared a detailed brochure with valuable insights. Click the button below to download it directly.
      </p>
      
      <!-- Brochure Preview Image -->
      <div class="brochure-preview">
        <img src="https://via.placeholder.com/100x140?text=Brochure" alt="Brochure Preview">
      </div>

      <!-- Download Button -->
      <a href="#" class="button">Download Brochure</a>
      <p>If you have any questions or need further assistance, feel free to reach out to us at any time.</p>
      
      <!-- Secondary CTA -->
      <p><a href="#" style="color: #ddb60a; text-decoration: underline;">Explore More Services</a></p>
    </div>

    <!-- Footer Section with Social Media Icons -->
    <div class="footer">
      <p>Best Regards,</p>
      <p><strong>Xpro</strong></p>
      <p>1234 Business Rd, Suite 100<br>City, State, 12345</p>
      <p><a href="#">Visit Our Website</a> | <a href="mailto:contact@company.com">Contact Us</a></p>
      <div class="social-icons">
        <a href="#" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/2021_Facebook_icon.svg/800px-2021_Facebook_icon.svg.png" alt="Facebook"></a>
        <a href="#" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/sco/thumb/9/9f/Twitter_bird_logo_2012.svg/1200px-Twitter_bird_logo_2012.svg.png" alt="Twitter"></a>
        <a href="#" target="_blank"><img src="https://media.licdn.com/dms/image/D4D12AQFSkkazpND0Tg/article-cover_image-shrink_720_1280/0/1696901179396?e=2147483647&v=beta&t=sy1mG4edVFhzPGGjPYoC7GZjph70EmjszvQYVjHV6PM" alt="LinkedIn"></a>
        <a href="#" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/9/95/Instagram_logo_2022.svg" alt="Instagram"></a>
      </div>
      <p>Follow us on social media to stay updated!</p>
      <p style="font-size: 12px; color: #999; margin-top: 10px;">
        If you’d like to unsubscribe from future emails, <a href="#" style="color: #ddb60a; text-decoration: underline;">click here</a>.
      </p>
    </div>
  </div>
</body>
</html>
