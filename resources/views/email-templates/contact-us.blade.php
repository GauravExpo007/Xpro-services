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
      <h1>Thank You for Contacting Us!</h1>
    </div>
    <!-- Content Section -->
    <div class="content">
      <h2>Hello {{ $username }}</h2>
      <p>
        Thank you for downloading our brochure! We hope it provides valuable insights into how
        our services can benefit you. If you have any questions or would like to discuss your needs in
        more detail, feel free to get in touch.
      </p>
      <p>
        We will be excited to be a part of your journey!
      </p>
      <!-- CTA Button -->
      <a href="https://yourwebsite.com" class="button" style="display: inline-block; padding: 12px 25px; background-color: #ddb60a; color: #ffffff; text-decoration: none; border-radius: 5px; font-size: 16px; font-weight: bold;">Visit Our Website</a>
    </div>

    <!-- Footer Section with Social Media Icons -->
    <div class="footer">
      <p>Warm regards,</p>
      <p><strong>The Xpro Team</strong></p>
      <p>1234 Business Rd, Suite 100<br>City, State, 12345</p>
      <p><a href="#">Visit Our Website</a> | <a href="mailto:support@company.com">Contact Us</a></p>
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
