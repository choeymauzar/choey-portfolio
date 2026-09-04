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
**Prompt 6:** "terminal told me this... warning: CRLF will be replaced by LF... ! [rejected] main -> main (non-fast-forward) error: failed to push some refs..."

**AI Output:** Explained that the CRLF warning is a harmless Windows/Linux line-ending conversion. Diagnosed the push rejection as the remote GitHub repository having commits ahead of the local branch. Provided `git pull --rebase origin main` to synchronize the branches followed by `git push`.

**Action Taken:** Accepted. Ran the pull command to sync local and remote histories, then successfully pushed the dark theme layout commits to GitHub.
**Prompt 7:** "[Pasted terminal output showing Merge Conflict on welcome.blade.php and detached HEAD error on push]"

**AI Output:** Identified the issue as a merge conflict causing a paused rebase and a detached HEAD state. Since `welcome.blade.php` was deprecated in favor of `home.blade.php`, provided the commands to resolve the conflict by removing the old file (`git rm`), resuming the process (`git rebase --continue --no-edit`), and pushing.

**Action Taken:** Accepted. Successfully resolved the merge conflict via the terminal, completed the rebase, and pushed the branch to origin main.
**Prompt 8:** "terminal shows me this PS C:\Users\Win 10\choey-portfolio> git push origin main... fatal: You are not currently on a branch (detached HEAD)..."

**AI Output:** Identified that opening a new VS Code terminal left a previous git rebase hanging, resulting in a detached HEAD. Provided commands to abort the rebase (`git rebase --abort`), switch back to the branch (`git switch main`), perform a standard pull, resolve the conflict, and push.

**Action Taken:** Accepted code. Canceled the hanging state, reattached to the main branch, resolved the file conflict, and successfully pushed to GitHub.
**Prompt 9:** "[Pasted multiple prompts requesting specific Blade sections: Hero with Video, Experience Timeline, Animated Skills Progress Bars, Portfolio Gallery Grid, Responsive Navigation, and Full Page Footer. The pasted prompts requested the name 'Hans Asero' and year '2024']"

**AI Output:** Noticed the copy-pasted prompts used incorrect personal data ("Hans Asero" and "2024"). Corrected the implementation to use my actual name (Choey Mauzar) and the current year (2026). Provided the updated `layouts/app.blade.php` to include the responsive glassmorphism navbar, hamburger menu JS, and footer. Provided the updated `home.blade.php` implementing the specific timeline structure, animated progress bars via Intersection Observer, portfolio grid hover states, and hero layout.

**Action Taken:** Accepted the corrected code. Replaced the contents of `app.blade.php` and `home.blade.php` to apply the final UI polish.
**Prompt 10:** "no css yet huh help me out"

**AI Output:** Explained that the project uses Tailwind CSS via CDN so no separate `.css` file is needed. Diagnosed the unstyled page as a Blade layout connection issue or view cache problem. Provided steps to verify the `layouts/app.blade.php` file path, check the `@extends` directive, and run `php artisan view:clear`.

**Action Taken:** Accepted. Verified the file structures and cleared the view cache. The CSS and styling loaded successfully.
**Prompt 11:** "C:\Users\Win 10\choey-portfolio\resources\views\layouts\app.blade.php abs it says @extends('layouts.app') on home.php and tried php artisan view:clear i still dont see the design"

**AI Output:** Spotted a crucial detail in the file path provided: the view was named `home.php` instead of `home.blade.php`. Explained that Laravel requires the `.blade.php` extension to process Blade directives like `@extends`, which is why the master layout containing the CSS was being ignored. 

**Action Taken:** Accepted. Renamed `home.php` to `home.blade.php`. Refreshed the browser and the Tailwind CSS and layouts rendered perfectly.
**Prompt 12:** "i think we lost the profile picture holder how about on top right is where the profile picture is then add a drawer maybe to make the image bit bigger... and also the portfolio gallery shouldnt just about the pc building right maybe ill just put 3 pc build there and the rest are the certificate,jnt screenshot , flower delivery shots and others right? and also send me the guide on where to put the images and their name format"

**AI Output:** Provided an image naming and location guide (`public/images/`). Updated `layouts/app.blade.php` to include a profile picture in the navigation bar with JavaScript to trigger a full-screen image modal. Updated `home.blade.php` to replace the automated PC build loop with an array highlighting diverse experiences (3 PC builds, TESDA certificate, J&T courier, flower delivery). Added a fallback image handler if local files are missing.

**Action Taken:** Added images to `public/images/`, applied the layout updates for the interactive modal, and updated the gallery content to reflect a broader range of skills and jobs.
**Prompt 13:** "you forgot about the darkmode and light mode toggle anyway lets add another holder for flutter and dart app the bakery record app then the marketplace sold items then the drone shot sample and also i used png not jpeg on the profile keep everything as it is just add like the contacts this is my fb link and the github link is https://github.com/choeymauzar make the top buttons highlight based on which part were scrolling in"

**AI Output:** Configured Tailwind CSS to use `darkMode: 'class'` and implemented a sun/moon toggle button via JavaScript. Updated the profile image reference from `.jpg` to `.png`. Implemented a ScrollSpy JavaScript function using `window.addEventListener('scroll')` to highlight active navigation links. Updated the footer with accurate GitHub and Facebook links. Revised the `$portfolioItems` array to include the Flutter/Dart Bakery App, AbraKeeps Marketplace, and drone photography alongside the PC builds. 

**Action Taken:** Applied the new `app.blade.php` and `home.blade.php` files to finalize the theme, navigation interactivity, and project gallery.
**Prompt 14:** "wait i mean you add images you removed the other 3 images bruh lets make it to total 9 i supposed bring the other 3 backl"

**AI Output:** Acknowledged the error of replacing the previous items instead of adding to them. Provided an updated PHP array for `home.blade.php` expanding the gallery grid from 6 to 9 items, restoring the TESDA certificate, J&T Courier, and Flower Delivery experience alongside the PC builds and new software projects.

**Action Taken:** Accepted code. Replaced the `$portfolioItems` array to display all 9 distinct portfolio pieces.
**Prompt 15:** "how about adding details heres from my resume lets add about me and the education CHOEY M. MAUZAR INCOMING 4TH YEAR BSIT STUDENT... [Provided full resume text with contact, education, skills, and exact timeline of jobs]"

**AI Output:** Designed a new 'About & Education' section in `home.blade.php` to satisfy the rubric's requirement for clear contact details and educational background. Replaced the generic experience timeline with accurate entries based on the resume (Abrakeeps Capstone, Happy Stem by Carmencita Delivery Rider, and Choey's Bakery Cashier). Restored the 'About' link in the `app.blade.php` navigation.

**Action Taken:** Accepted code. Integrated my actual resume details into the Blade views to ensure all academic and professional information is accurate for grading.