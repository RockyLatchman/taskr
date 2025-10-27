<header>
    <div class="logotype">
       <h1><a href="/taskr/">Taskr</a></h1>
    </div>
    <?php require 'menu.php'; ?>
</header>
<main>
    <section>
        <h2>Messages</h2>
        <div class="messages-container">
        <div id="message-menu">
            <input type="text" name="search" placeholder="Search">
            <select name="filter">
                <option value="all">All</option>
                <option value="unread">Unread</option>
                <option value="read">Read</option>
                <option value="sent">Sent</option>
                <option value="draft">Draft</option>
            </select>
            </div>
            <header>
              <div>Candidates</div>
              <div>Subject</div>
              <div>Date sent</div>
              <div>Action</div>
            </header>
            <div class="employee-container">
                <div class="employee-details">
                <div class="light-column">
                    <img src="/taskr/public/images/user-001.png" alt="Employee image">
                </div>
                <div class="right-column">
                    <h4><a href="/taskr/employer/message">Tyson Whitmore</a></h4>
                    <p>Software Engineer</p>
                    <p>Los Angeles</p>
                </div>
                <ul>
                  <li><span></span></li>
                  <li>Oct 27, 2025</li>
                  <li>Job inquiry</li>
                  <li><a href="">Contact</a></li>
                  <li><i class="fa-solid fa-trash-can"></i></li>
              </ul>
            </div>
           <div class="employee-details">
             <div class="light-column">
               <img src="/taskr/public/images/user-002.png" alt="Employee image">
            </div>
            <div class="right-column">
            <h4><a href="/taskr/employer/message">Adam White</a></h4>
                <p>Product Designer</p>
                <p>San Diego</p>
            </div>
            <ul>
                <li><span></span></li>
                <li>Oct 12, 2025</li>
                <li>UI/UX Designer position</li>
                <li><a href="">Contact</a></li>
                <li><i class="fa-solid fa-trash-can"></i></li>
            </ul>
          </div>
        <div class="employee-details">
            <div class="light-column">
                <img src="/taskr/public/images/user-003.png" alt="Employee image">
            </div>
            <div class="right-column">
                <h4><a href="/taskr/employer/message">Whitney Washington</a></h4>
                <p>Digital Marketer</p>
                <p>Miami</p>
            </div>
            <ul>
                <li><span></span></li>
                <li>Oct 18, 2025</li>
                <li>Job inquiry</li>
                <li><a href="">Contact</a></li>
                <li><i class="fa-solid fa-trash-can"></i></li>
            </ul>
       </div>
        <div class="employee-details">
            <div class="light-column">
                <img src="/taskr/public/images/user-001.png" alt="Employee image">
            </div>
            <div class="right-column">
                <h4><a href="/taskr/employer/message">Evan George</a></h4>
                <p>Software Engineer</p>
                <p>Seattle</p>
            </div>
             <ul>
                <li><span></span></li>
                <li>Oct 01, 2025</li>
                <li>Job inquiry</li>
                <li><a href="">Contact</a></li>
                <li><i class="fa-solid fa-trash-can"></i></li>
             </ul>
           </div>
            <div class="employee-details">
                <div class="light-column">
                    <img src="/taskr/public/images/user-001.png" alt="Employee image">
                </div>
                <div class="right-column">
                    <h4><a href="/taskr/employer/message">Walter Watts</a></h4>
                    <p>Graphic Designer</p>
                    <p>Los Angeles</p>
                </div>
                <ul>
                    <li><span></span></li>
                    <li>Sept 30, 2025</li>
                    <li>Job inquiry</li>
                    <li><a href="">Contact</a></li>
                    <li><i class="fa-solid fa-trash-can"></i></li>
                </ul>
            </div>
            <menu>
                <li><a href="">prev</a></li>
                <li>1 of 13</li>
                <li><a href="">next</a></li>
            </menu>
        </div>
    </section>
</main>
