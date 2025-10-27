
<header>
    <div class="logotype">
       <h1><a href="/taskr/">Taskr</a></h1>
    </div>
    <menu><li><a href="/taskr/">Return home</a></li></menu>
</header>
<main>
    <section>
       <h1>Setup profile 3/4</h1>
       <form method="POST">
           <h3>Work experience</h3>
           <label for="resume">Resume</label>
           <input type="text" name="resume" id="resume" placeholder="http://mysite.com/my-resume">
           <p>or</p>
           <div>
               <span>Upload my resume(.docx, pdf format)</span>
               <input type="file" name="upload-file" accept=".pdf, .doc, .docx">
           </div>
           <input type="button" name="save-resume" value="Add resume">
           <h3>Seeking:</h3>
           <label for="fullname">
           <input type="checkbox" name="fullname" id="fullname">Full time
           </label>
           <label for="part-time">
           <input type="checkbox" name="part-time">Part time
           </label>
           <label for="contract">
           <input type="checkbox" name="contract" id="contract">Contract
           </label>
           <label for="freelance">
           <input type="checkbox" name="freelance" id="freelance">Freelance
           </label>
           <label for="internship">
           <input type="checkbox" name="internship" id="internship">Internship
           </label>
           <h3>Job location</h3>
           <label>
           <input type="radio" name="location">100% remote
           </label>
           <label>
           <input type="radio" name="location">Hybrid
           </label>
           <label>
           <input type="radio" name="location">In-Office
           </label>
           <h3>Tell us about your interest in this profession</h3>
           <textarea name="interest"></textarea>
           <label for="keywords">Keywords(This is for search)</label>
           <input type="text" name="keywords" id="keywords" placeholder="JavaScript, Web Developer, UI Designer">
           <h3>Desired salary</h3>
           <input type="text" name="currency" class="currency" placeholder="Currency">
           <input type="text" name="min-salary" class="min-salary" placeholder="Salary or Minimum">
           <input type="text" name="max-salary" class="max-salary" placeholder="Maximum">
           <input type="submit" name="continue" value="Continue">
       </form>
    </section>
</main>
