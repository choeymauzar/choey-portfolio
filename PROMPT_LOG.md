# AI Prompt Log

**Prompt 1:** "okay lets do it now i just woke up 2:00 morning lol help me step by step" (Previous context established the goal of building a Laravel portfolio with my details like BSIT, TESDA NC2, etc.)

**AI Output:** Provided terminal commands to scaffold the Laravel project, initialize the Git repository, make the first commit, and create this log file.

**Action Taken:** Accepted as-is. Ran the commands to set up the foundation of the repository according to the grading rubric requirements.
**Prompt 2:** "wait we have to save the promt on the cmd anyway i think we should make repository next? it says [terminal output] and i should use other agent right?"

**AI Output:** Clarified that the current AI can be used for the whole project. Provided step-by-step instructions to create an empty GitHub repository, link the local directory, and push the initial files.

**Action Taken:** Accepted. Created the GitHub repo and successfully pushed the local Laravel project to the `main` branch.
**Prompt 3:** "Git is all sorted. Let's start building the Blade views for the portfolio."

**AI Output:** Provided the complete HTML structure utilizing Tailwind CSS via CDN. Included sections for Header, Contact, Education, Skills, and Certifications, pre-filled with my background details.

**Action Taken:** Accepted code and replaced the default `welcome.blade.php` file. Tested locally using `php artisan serve`.
**Prompt 4:** "yeah help me how to add profile picture and the path where can i upload it i tried but its bit difficult to put images using laravel though"

**AI Output:** Explained the Laravel asset directory structure (`public/images/`) and provided the `{{ asset(...) }}` helper syntax with the `object-cover` Tailwind utility for proper image display.

**Action Taken:** Created the `public/images` directory, placed the profile image, and updated `welcome.blade.php` using the `asset()` helper.
**Prompt 5:** "Create a complete Laravel Blade portfolio page with the following specifications: Design Requirements: Dark theme... Video background... Glass-morphism... Sections needed: Hero, About, Skills, Services, Experience, Portfolio, Contact... Technical Requirements: Laravel Blade, Tailwind CSS, Font Awesome, hardcoded, responsive, JS for animations..."

**AI Output:** Provided a complete multi-file solution. Created a master layout (`app.blade.php`) with custom CSS for glassmorphism and navigation, and a main view (`home.blade.php`) containing the requested sections (Hero, About, Skills, Services, Experience timeline, Portfolio grid, Contact). Included JavaScript for scroll animations and the typing effect.

**Action Taken:** Implemented the layout architecture. Created the `layouts/app.blade.php` and `home.blade.php` files, and updated `routes/web.php` to load the new `home` view.