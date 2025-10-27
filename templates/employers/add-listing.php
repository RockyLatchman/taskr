
<header>
    <div class="logotype">
       <h1><a href="/taskr/">Taskr</a></h1>
    </div>
    <?php require 'menu.php'; ?>
</header>
<main>
    <section>
        <h2>Job listing</h2>
        <div class="dashboard">
           <form method="POST">
              <h3>Tell us about the position</h3>
              <label>Job title</label>
              <input type="text" name="job-title">
              <label>Primary role</label>
              <input type="text" name="primary-role">
              <label>Type of position</label>
              <label><input type="checkbox" name="fullname">Full time</label>
              <label><input type="checkbox" name="part-time">Part time</label>
              <label><input type="checkbox" name="contract">Contract</label>
              <label><input type="checkbox" name="freelance">Freelance</label>
              <label><input type="checkbox" name="internship">Internship</label>
              <h3>Job location</h3>
              <label><input type="radio" name="job-location">100% remote</label>
              <label><input type="radio" name="job-location">Hybrid</label>
              <label><input type="radio" name="job-location">In-Office</label>
              <h3>Job description</h3>
              <textarea name="job-description"></textarea>
              <label for="keywords">Keywords(This is for search)</label>
              <input type="text" name="keywords" placeholder="JavaScript, Web Developer, UI Designer">
              <h3>Salary</h3>
              <input type="text" name="currency" placeholder="Currency">
              <input type="text" name="min-salary" placeholder="Salary or Minimum">
              <input type="text" name="max=salary" placeholder="Maximum">
              <h3>How to apply</h3>
              <label><input type="radio" name="how-to-apply">Apply by website</label>
              <label><input type="radio" name="how-to-apply">Apply by e-mail</label>
          </form>
        </div>
    </section>
</main>
