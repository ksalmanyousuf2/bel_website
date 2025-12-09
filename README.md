# Beacon Energy CMS - Laravel Application

A comprehensive Content Management System for Beacon Energy solar company website built with Laravel, Bootstrap, and DM Sans font.

## Features

- **Admin Panel**: Full CRUD operations for managing content
- **Dynamic Content Management**: 
  - Solutions Provided
  - Blogs & News
  - Testimonials
  - Projects (with multiple images)
  - Events
- **Responsive Design**: Mobile and tablet friendly
- **Admin Authentication**: Secure admin login system
- **Image Management**: Upload and manage images for all content types

## Installation

1. **Install Dependencies**
   ```bash
   composer install
   ```

2. **Environment Setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

3. **Database Configuration**
   Update your `.env` file with your database credentials:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=beacon_energy
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

4. **Run Migrations**
   ```bash
   php artisan migrate
   ```

5. **Seed Admin User**
   ```bash
   php artisan db:seed --class=AdminUserSeeder
   ```

6. **Create Storage Link**
   ```bash
   php artisan storage:link
   ```

7. **Start Development Server**
   ```bash
   php artisan serve
   ```

## Admin Access

- **URL**: `/admin/login`
- **Email**: `admin@beaconenergy.com`
- **Password**: `admin123`

**⚠️ Important**: Change the admin password after first login!

## Admin Routes

- Dashboard: `/admin/dashboard`
- Solutions: `/admin/solutions`
- Blogs: `/admin/blogs`
- Testimonials: `/admin/testimonials`
- Projects: `/admin/projects`
- Events: `/admin/events`

## Frontend Routes

- Home: `/`
- Blogs: `/blogs`
- Projects: `/projects`
- Events: `/events`

## File Structure

```
app/
├── Http/
│   ├── Controllers/
│   │   ├── Admin/          # Admin controllers
│   │   ├── HomeController.php
│   │   ├── BlogController.php
│   │   ├── ProjectController.php
│   │   └── EventController.php
│   └── Middleware/
│       └── AdminMiddleware.php
├── Models/
│   ├── Solution.php
│   ├── Blog.php
│   ├── Testimonial.php
│   ├── Project.php
│   ├── Event.php
│   └── ProjectImage.php
database/
├── migrations/            # Database migrations
└── seeders/
    └── AdminUserSeeder.php
resources/
└── views/
    ├── layouts/           # Layout files
    ├── partials/         # Header & Footer
    ├── admin/            # Admin views
    ├── home.blade.php
    ├── blogs/
    ├── projects/
    └── events/
```

## Design Specifications

- **Font**: DM Sans (Google Fonts)
- **CSS Framework**: Bootstrap 5.3
- **Color Scheme**:
  - Primary Blue: `#1a365d`
  - Light Blue: `#4299e1`
  - Dark Blue: `#0d1b2a`

## Adding Content

### Solutions
1. Go to `/admin/solutions`
2. Click "Add New Solution"
3. Fill in title, description, upload image
4. Set order and active status

### Blogs
1. Go to `/admin/blogs`
2. Click "Add New Blog"
3. Fill in title, content, upload featured image
4. Mark as featured or published as needed

### Projects
1. Go to `/admin/projects`
2. Click "Add New Project"
3. Fill in project details
4. Upload multiple images
5. Set category and completion date

### Testimonials
1. Go to `/admin/testimonials`
2. Click "Add New Testimonial"
3. Fill in customer details and testimonial
4. Set rating (1-5 stars)

### Events
1. Go to `/admin/events`
2. Click "Add New Event"
3. Fill in event details, date, and location
4. Upload event image

## Image Storage

All uploaded images are stored in `storage/app/public/` and are accessible via the public storage link.

## Responsive Design

The website is fully responsive and optimized for:
- Desktop (1920px+)
- Tablet (768px - 1024px)
- Mobile (320px - 767px)

## Notes

- Some sections of the website are static (header, footer, hero sections)
- Dynamic sections are managed through the admin panel
- Images can be added later through the admin interface
- The design follows the provided screenshots and specifications

## Support

For issues or questions, please refer to the Laravel documentation or contact the development team.
