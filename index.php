<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="hero-section">
	<div class="hero-display container">
	<div class="hero-one">
		<img src="http://EduOnline/wp-content/uploads/2024/08/Component-8-1.png" alt="hero-content" width="100%">
</div>
		<div class="hero-two">
			<h2>Meet EduOnline: tutor for learners, sidekick for teachers.</h2>
			<p>EduOnline moves the needle for educators and students. Powered by GPT-4, EduOnline delivers wow to your teaching and learning experience!</p>
		    <button class="teacher-tools">Teacher Tools for FREE</button>
			<button class="learners">For Learners</button>
			<button class="districts">For Districts</button>
		</div>
	</div>
</div>
<div class="introduction-classes container">
    <h2>Live Education. Jump ahead and be a star in school!</h2>
    <div class="container">
        <div class="row align-items-start">
            <div class="col">
                <div class="category-title">Math</div>
                <div class="grade-container">
                    <div class="item"><a href="#">Pre-K through grade 2 (Khan Kids)</a></div>
                    <div class="item"><a href="#">Early math review</a></div>
                    <div class="item"><a href="#">2nd grade</a></div>
                    <div class="item"><a href="#">3rd grade</a></div>
                    <div class="item"><a href="#">4th grade</a></div>
                    <div class="item"><a href="#">5th grade (TX TEKS)</a></div>
                    <div class="item"><a href="#">6th grade (TX TEKS)</a></div>
                    <div class="item"><a href="#">7th grade (TX TEKS)</a></div>
                    <div class="item"><a href="#">8th grade (TX TEKS)</a></div>
                    <div class="item"><a href="#">See Pre-K - 8th Math</a></div>
                    <div class="item"><a href="#">Algebra 1 (TX TEKS)</a></div>
                    <div class="item"><a href="#">Geometry</a></div>
                    <div class="item"><a href="#">Algebra 2</a></div>
                    <div class="item"><a href="#">Integrated math 1</a></div>
                    <div class="item"><a href="#">Integrated math 2</a></div>
                    <div class="item"><a href="#">Integrated math 3</a></div>
                    <div class="item"><a href="#">Algebra basics</a></div>
                    <div class="item"><a href="#">Trigonometry</a></div>
                    <div class="item"><a href="#">Precalculus</a></div>
                    <div class="item"><a href="#">High school statistics</a></div>
                    <div class="item"><a href="#">Statistics & probability</a></div>
                    <div class="item"><a href="#">College algebra</a></div>
                    <div class="item"><a href="#">AP®︎/College Calculus AB</a></div>
                    <div class="item"><a href="#">AP®︎/College Calculus BC</a></div>
                    <div class="item"><a href="#">AP®︎/College Statistics</a></div>
                    <div class="item"><a href="#">Multivariable calculus</a></div>
                    <div class="item"><a href="#">Differential equations</a></div>
                    <div class="item"><a href="#">Linear algebra</a></div>
                    <div class="item"><a href="#">See all Math</a></div>
                </div>
            </div>
            <div class="col">
                <div class="category-title">Get Ready</div>
                <div class="grade-container">
                    <div class="item"><a href="#">Get ready for 3rd grade</a></div>
                    <div class="item"><a href="#">Get ready for 4th grade</a></div>
                    <div class="item"><a href="#">Get ready for 5th grade</a></div>
                    <div class="item"><a href="#">Get ready for 6th grade</a></div>
                    <div class="item"><a href="#">Get ready for 7th grade</a></div>
                    <div class="item"><a href="#">Get ready for 8th grade</a></div>
                    <div class="item"><a href="#">Get ready for Algebra 1</a></div>
                    <div class="item"><a href="#">Get ready for Geometry</a></div>
                    <div class="item"><a href="#">Get ready for Algebra 2</a></div>
                    <div class="item"><a href="#">Get ready for Precalculus</a></div>
                    <div class="item"><a href="#">Get ready for AP® Calculus</a></div>
                    <div class="item"><a href="#">Get ready for AP® Statistics</a></div>
                </div>
            </div>
            <div class="col">
                <div class="category-title">Reading & Language Arts</div>
                <div class="grade-container">
                    <div class="item"><a href="#">Up to 2nd grade (Khan Kids)</a></div>
                    <div class="item"><a href="#">2nd grade</a></div>
                    <div class="item"><a href="#">3rd grade</a></div>
                    <div class="item"><a href="#">4th grade</a></div>
                    <div class="item"><a href="#">5th grade</a></div>
                    <div class="item"><a href="#">6th grade reading and vocab</a></div>
                    <div class="item"><a href="#">7th grade</a></div>
                    <div class="item"><a href="#">8th grade</a></div>
                    <div class="item"><a href="#">9th grade reading and vocab</a></div>
                    <div class="item"><a href="#">10th grade reading and vocab</a></div>
                    <div class="item"><a href="#">Grammar</a></div>
                    <div class="item"><a href="#">See all Reading & Language Arts</a></div>
                </div>
            </div>
            <div class="col">
                <div class="category-title">Life Skills</div>
                <div class="grade-container">
                    <div class="item"><a href="#">Social & emotional learning (Khan Kids)</a></div>
                    <div class="item"><a href="#">Khanmigo for students</a></div>
                    <div class="item"><a href="#">AI for education</a></div>
                    <div class="item"><a href="#">Financial literacy</a></div>
                    <div class="item"><a href="#">Internet safety</a></div>
                    <div class="item"><a href="#">Social media literacy</a></div>
                    <div class="item"><a href="#">Growth mindset</a></div>
                    <div class="item"><a href="#">College admissions</a></div>
                    <div class="item"><a href="#">Careers</a></div>
                    <div class="item"><a href="#">Personal finance</a></div>
                    <div class="item"><a href="#">See all Life Skills</a></div>
                </div>
            </div>
        </div>
        <div class="row align-items-start">
            <div class="col">
                <div class="category-title">Science</div>
                <div class="grade-container">
                    <div class="item"><a href="#">Middle school biology</a></div>
                    <div class="item"><a href="#">Middle school Earth and space science</a></div>
                    <div class="item"><a href="#">Middle school physics</a></div>
                    <div class="item"><a href="#">High school biology (TX TEKS)</a></div>
                    <div class="item"><a href="#">High school chemistry (TX TEKS)</a></div>
                    <div class="item"><a href="#">High school physics (TX TEKS)</a></div>
                    <div class="item"><a href="#">AP®︎/College Biology</a></div>
                    <div class="item"><a href="#">AP®︎/College Chemistry</a></div>
                    <div class="item"><a href="#">AP®︎/College Environmental Science</a></div>
                    <div class="item"><a href="#">AP®︎/College Physics 1</a></div>
                    <div class="item"><a href="#">Health and Medicine</a></div>
                    <div class="item"><a href="#">See all Science</a></div>
                </div>
            </div>
            <div class="col">
                <div class="category-title">Computing</div>
                <div class="grade-container">
                    <div class="item"><a href="#">Digital SAT</a></div>
                    <div class="item"><a href="#">LSAT</a></div>
                    <div class="item"><a href="#">MCAT</a></div>
                    <div class="item"><a href="#">Intro to CS - Python</a></div>
                    <div class="item"><a href="#">Computer programming</a></div>
                    <div class="item"><a href="#">AP®︎/College Computer Science Principles</a></div>
                    <div class="item"><a href="#">Pixar in a Box</a></div>
                    <div class="item"><a href="#">See all Computing</a></div>
                </div>
            </div>
            <div class="col">
                <div class="category-title">Arts & Humanities</div>
                <div class="grade-container">
                    <div class="item"><a href="#">US history</a></div>
                    <div class="item"><a href="#">AP®︎/College US History</a></div>
                    <div class="item"><a href="#">US government and civics</a></div>
                    <div class="item"><a href="#">AP®︎/College US Government & Politics</a></div>
                    <div class="item"><a href="#">World History Project - Origins to the Present</a></div>
                    <div class="item"><a href="#">World History Project - 1750 to the Present</a></div>
                    <div class="item"><a href="#">AP®︎/College World History</a></div>
                    <div class="item"><a href="#">Big History Project</a></div>
                    <div class="item"><a href="#">Art history</a></div>
                    <div class="item"><a href="#">AP®︎/College Art History</a></div>
                    <div class="item"><a href="#">Constitution 101 (pilot)</a></div>
                    <div class="item"><a href="#">See all Arts & Humanities</a></div>
                </div>
            </div>
            <div class="col">
                <div class="category-title">Economics</div>
                <div class="grade-container">
                    <div class="item"><a href="#">Macroeconomics</a></div>
                    <div class="item"><a href="#">AP®︎/College Macroeconomics</a></div>
                    <div class="item"><a href="#">Microeconomics</a></div>
                    <div class="item"><a href="#">AP®︎/College Microeconomics</a></div>
                    <div class="item"><a href="#">See all Economics</a></div>
                </div>
            </div>
        </div>
        <div class="row align-items-start">
            <div class="col">
                <div class="category-title">Additional Resources</div>
                <div class="grade-container">
                    <div class="item"><a href="#">Ancient Art</a></div>
                    <div class="item"><a href="#">Asian Art</a></div>
                    <div class="item"><a href="#">Biodiversity</a></div>
                    <div class="item"><a href="#">Music</a></div>
                    <div class="item"><a href="#">NASA</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="stories">
	<div class="container">
		<div class="stories-display">
			<div class="stories-one">
				<h4>A digital classroom to love</h4>
				<p>secure place for digital learning for students and teachers.</p>
				<a href="#">Schools overview</a>
			</div>
			<div class="stories-two">
				<img src="http://EduOnline/wp-content/uploads/2024/08/12-11-20-01-removebg-preview.png" alt="online-content" width="60%">
			</div>
		</div>
	</div>
</div>
<div class="container top-stories">
  <div class="row">
    <div class="col">
      <h2>Top Categories</h2>
      <p>Explore our Popular Categories</p>
    </div>
    <div class="col">
      <button>All categories</button>
    </div>
  </div>
  <div class="card-group container">
  <div class="card">
    <img src="http://EduOnline/wp-content/uploads/2024/08/Icon-4.png" class="card-img-top" alt="...">
    <div class="card-body">
     <h2>Art & Design</h2>
     <p>38 Courses</p>
    </div>
  </div>
  <div class="card card-two">
    <img src="http://EduOnline/wp-content/uploads/2024/08/Icon-7.png" class="card-img-top" alt="...">
    <div class="card-body">
     <h2>Development</h2>
     <p>38 Courses</p>
    </div>
  </div>
  <div class="card">
    <img src="http://EduOnline/wp-content/uploads/2024/08/Icon-1.png" class="card-img-top" alt="...">
    <div class="card-body">
     <h2>Communiication</h2>
     <p>38 Courses</p>
    </div>
  </div>
  <div class="card">
    <img src="http://EduOnline/wp-content/uploads/2024/08/Icon-2.png" class="card-img-top" alt="...">
    <div class="card-body">
    <h2>Videography</h2>
    <p>38 Courses</p>
    </div>
  </div>
  <div class="card">
    <img src="http://EduOnline/wp-content/uploads/2024/08/Icon-3.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h2>Photography</h2>
      <p>38 Courses</p>
    </div>
  </div>
</div>
<div class="card-group container">
  <div class="card">
    <img src="http://EduOnline/wp-content/uploads/2024/08/Icon-8.png" class="card-img-top" alt="...">
    <div class="card-body">
     <h2>Marketing</h2>
     <p>38 Courses</p>
    </div>
  </div>
  <div class="card">
    <img src="http://EduOnline/wp-content/uploads/2024/08/Icon-7.png" class="card-img-top" alt="...">
    <div class="card-body">
     <h2>Content writing</h2>
     <p>38 Courses</p>
    </div>
  </div>
  <div class="card">
    <img src="http://EduOnline/wp-content/uploads/2024/08/Icon-6.png" class="card-img-top" alt="...">
    <div class="card-body">
        <h2>Finance</h2>
        <p>38 Courses</p>
    </div>
  </div>
  <div class="card">
    <img src="http://EduOnline/wp-content/uploads/2024/08/Icon-5.png" class="card-img-top" alt="...">
    <div class="card-body">
     <h2>Science</h2>
     <p>38 Courses</p>
    </div>
  </div>
  <div class="card">
    <img src="http://EduOnline/wp-content/uploads/2024/08/Icon.png" class="card-img-top" alt="...">
    <div class="card-body">
     <h2>Network</h2>
     <p>38 Courses</p>
    </div>
  </div>
</div>
</div>


<div class="container top-courses">
  <div class="row">
    <div class="col">
      <h2>Featured courses</h2>
      <p>Explore our Popular Courses</p>
    </div>
    <div class="col">
      <button>All courses</button>
    </div>
  </div>
  <div class="card-group">
  <div class="card">
    <img src="http://EduOnline/wp-content/uploads/2024/08/Rectangle-140.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card card-two">
    <img src="http://EduOnline/wp-content/uploads/2024/08/Image.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="http://EduOnline/wp-content/uploads/2024/08/Rectangle-141.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
<div class="card-group">
  <div class="card">
    <img src="http://EduOnline/wp-content/uploads/2024/08/Rectangle-142.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="http://EduOnline/wp-content/uploads/2024/08/Rectangle-143.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="http://EduOnline/wp-content/uploads/2024/08/Rectangle-139.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
</div>
<div class="center-reviews container">
    <div class="review-titles">
        <h2>Student feedbacks</h2>
        <p>What Students Say About Academy EduOnline</p>
    </div>
    <div class="card-group">
  <div class="card">
    <div class="card-body">
        <img src="http://EduOnline/wp-content/uploads/2024/08/unnamed-file.png" alt="" width="20px">
      <p class="card-text">I must explain to you how all this mistaken . Tdea of denouncing pleasure and praising pain was born and I will give you a complete account of the system and expound</p>
    </div>
  </div>
  <div class="card card-two">
    <div class="card-body">
    <img src="http://EduOnline/wp-content/uploads/2024/08/unnamed-file.png" alt="" width="20px">
    <p class="card-text">I must explain to you how all this mistaken . Tdea of denouncing pleasure and praising pain was born and I will give you a complete account of the system and expound</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
    <img src="http://EduOnline/wp-content/uploads/2024/08/unnamed-file.png" alt="" width="20px">
    <p class="card-text">I must explain to you how all this mistaken . Tdea of denouncing pleasure and praising pain was born and I will give you a complete account of the system and expound</p>
    </div>
  </div>
</div>
</div>

<?php
get_footer();
