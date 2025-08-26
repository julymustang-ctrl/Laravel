# Artistic - Social Media Marketing Agency Laravel Theme

A complete Laravel conversion of the Artistic Social Media Marketing Agency HTML theme, featuring modern web development practices and full MVC architecture.

## 🚀 Features

- **Complete Theme Conversion**: 100% faithful conversion from HTML to Laravel
- **13 Homepage Sections**: All original sections including Hero, Services, Testimonials, FAQ, Blog, and more
- **Multiple Home Variants**: 4 different homepage layouts (Main, Image, Slider, Index-2)
- **Responsive Design**: Mobile-first approach with Bootstrap framework
- **Laravel Best Practices**: Proper MVC structure, Blade templating, and route management
- **Modern Asset Management**: Optimized asset loading and organization

## 📋 Sections Included

### Homepage Sections
1. **Hero Section** - Dynamic video background with call-to-action
2. **Scrolling Ticker** - Client logos showcase
3. **About Us** - Company introduction with experience counter
4. **Our Services** - Service offerings with feature highlights
5. **Our Brands** - Brand partnerships and features
6. **Why Choose Us** - Competitive advantages
7. **Our Features** - Powerful features for social growth
8. **Key Facts** - Success statistics and metrics
9. **Our Pricing** - Flexible pricing plans
10. **How It Works** - 4-step process guide
11. **Our Testimonials** - Client feedback slider
12. **FAQs** - Frequently asked questions
13. **Blog** - Latest insights and articles

### Page Variants
- **Main Homepage** (`/`) - Standard layout with video hero
- **Image Homepage** (`/home-image`) - Image-based hero section
- **Slider Homepage** (`/home-slider`) - Multi-slide hero carousel
- **Alternative Homepage** (`/index-2`) - Gradient background variant

### Additional Pages
- **About Us** - Detailed company information
- **Services** - Service listings and details
- **Projects** - Portfolio showcase
- **Team** - Team member profiles
- **Blog** - Articles and insights
- **Contact** - Contact form and information
- **Gallery** - Image and video galleries
- **404 Error** - Custom error page
- **Pricing** - Detailed pricing plans
- **Testimonials** - Client testimonials
- **FAQs** - Help and support

## 🛠️ Technology Stack

- **Framework**: Laravel 10.x
- **Frontend**: HTML5, CSS3, JavaScript
- **CSS Framework**: Bootstrap 5
- **Template Engine**: Blade
- **Architecture**: MVC (Model-View-Controller)
- **Asset Management**: Laravel Asset Helpers
- **Routing**: Named Routes
- **Animations**: WOW.js, AOS
- **Sliders**: Swiper.js
- **Icons**: Font Awesome

## 📦 Installation

### Prerequisites
- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL/PostgreSQL (optional)

### Setup Instructions

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/artistic-laravel-theme.git
   cd artistic-laravel-theme
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node dependencies**
   ```bash
   npm install
   ```

4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure database** (Optional)
   - Update `.env` file with your database credentials
   - Run migrations if needed:
   ```bash
   php artisan migrate
   ```

6. **Build assets**
   ```bash
   npm run build
   ```

7. **Start development server**
   ```bash
   php artisan serve
   ```

8. **Access the application**
   ```
   http://localhost:8000
   ```

## 🎯 Routes

### Main Routes
```php
// Homepage variants
GET /              -> HomeController@index
GET /home-image    -> HomeController@indexImage  
GET /home-slider   -> HomeController@indexSlider
GET /index-2       -> HomeController@index2

// Core pages
GET /about         -> AboutController@index
GET /services      -> ServiceController@index
GET /contact       -> ContactController@index
GET /blog          -> BlogController@index

// Dynamic routes
GET /services/{id} -> ServiceController@show
GET /blog/{id}     -> BlogController@show
GET /team/{id}     -> TeamController@show
```

## 📁 Project Structure

```
├── app/
│   ├── Http/Controllers/
│   │   ├── HomeController.php
│   │   ├── AboutController.php
│   │   ├── ServiceController.php
│   │   ├── BlogController.php
│   │   └── ContactController.php
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   ├── app.blade.php
│   │   │   └── partials/
│   │   ├── pages/
│   │   │   ├── home/
│   │   │   │   ├── index.blade.php
│   │   │   │   ├── index-image.blade.php
│   │   │   │   ├── index-slider.blade.php
│   │   │   │   └── index-2.blade.php
│   │   │   ├── about.blade.php
│   │   │   ├── services.blade.php
│   │   │   └── contact.blade.php
│   │   └── errors/
│   │       └── 404.blade.php
├── public/
│   └── assets/
│       ├── images/
│       ├── css/
│       └── js/
└── routes/
    └── web.php
```

## 🎨 Customization

### Adding New Sections
1. Create new Blade partial in `resources/views/layouts/partials/`
2. Include in main layout or specific pages
3. Add corresponding CSS/JS if needed

### Modifying Existing Content
- Update controller methods for dynamic content
- Modify Blade templates for layout changes
- Customize CSS in the assets directory

### Creating New Pages
1. Add route in `routes/web.php`
2. Create controller method
3. Create corresponding Blade view

## 🔧 Development

### Asset Compilation
```bash
# Development
npm run dev

# Production
npm run build

# Watch mode
npm run watch
```

### Code Quality
```bash
# Run tests
php artisan test

# Code formatting
./vendor/bin/pint

# Static analysis
./vendor/bin/phpstan analyse
```

## 📱 Browser Support

- Chrome 90+
- Firefox 88+
- Safari 14+
- Edge 90+
- Mobile browsers (iOS Safari, Chrome Mobile)

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🙏 Acknowledgments

- Original HTML theme by Awaiken Themes
- Laravel framework by Taylor Otwell
- Bootstrap framework
- Font Awesome icons
- All open-source contributors

## 📞 Support

For support and questions:
- Create an issue on GitHub
- Contact: [your-email@example.com]

---

**Made with ❤️ using Laravel**